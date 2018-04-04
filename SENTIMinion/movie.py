#!/usr/bin/env python

print "Content-type: text/html\n\n"

import cgi
import MySQLdb
import nltk
import math
import cgitb; cgitb.enable()  # for troubleshooting
from senti_classifier import senti_classifier
db = MySQLdb.connect(unix_socket="/opt/lampp/var/mysql/mysql.sock",host="localhost",user="root",passwd="",db="senti")
db = MySQLdb.connect("localhost","root","","senti")
cursor = db.cursor()
					
form = cgi.FieldStorage()
message = form.getvalue("message")
mid = form.getvalue("mid")
uid = form.getvalue("uid")
url = form.getvalue("url")
message1 = message.replace("not bad","good")
message1 = message.replace("not good","bad")
sent = nltk.sent_tokenize(message1)
score = senti_classifier.polarity_scores(sent) 
if math.sqrt(pow(score[0],2)+pow(score[1],2)) == 0 :
      nor=0
else :
	nor = (score[0]/math.sqrt(pow(score[0],2)+pow(score[1],2)))
star = 0
""" print "HTTP/1.1 303 See Other"
    print "Location: index.php\r\n" """ 
print """
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Sentiminion</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="refresh" content="0; url=%s" />"""%url
print """        
	<link rel="stylesheet" href="/be/css/style.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="/be/css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>
</head>
<body>
<!-- Shell -->
<div id="shell">
	<!-- Header -->
	
	<div id="header"> <!-- Navigation -->
		<div id="navigation">
			<ul>
			  <h3>Sentiminion &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h3>
			  
			    <li><a class="active" href="http://localhost/SENTIMinion/">HOME</a></li>
			    
			</ul>
		</div>
		<!-- end Navigation -->
		
		<!-- Sub-menu -->
		
		
		<div id="sub-navigation">

                   <div class="movie"> 
"""


print """ 
  <p>URL: %s  </p> """ %url
print """  
  <p>Positive: %f  </p> """ %score[0]
print """
  <p>Negative: %f  </p> """ %score[1]
print """
  <p>Normalized Score: %f  </p> """ %nor
print """
  <p><a class="active" href="%s">Click here to Redirect...</a></p>"""%url
 
  
if nor>0.93:
    star = 5
elif nor>0.8:
    star = 4.5
elif nor>0.7:
    star = 4
elif nor>0.6:
    star = 3.5
elif nor>0.5:
    star = 3
elif nor>0.4:
    star = 2.5
elif nor>0.3:
    star = 2
elif nor>0.2:
    star = 1.5
else:
    star = 1


try:
    cursor.execute('INSERT INTO review(m_id,data,u_id,score) VALUES ("%s","%s","%s","%f")' %(mid,message,uid,star))
    db.commit()
except:
    db.rollback()
    print"db insert fail"

print """
			</div>
		</div>
		<!-- end Sub-Menu -->
		
	</div>
	<!-- end Header -->
	
	

	
</div>
<!-- end Shell -->
</body>
</html> """

