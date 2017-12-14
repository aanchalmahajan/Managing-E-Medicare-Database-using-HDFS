<html>
<head>
<link rel="stylesheet" href="css/ex.css" type="text/css">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>
<div id="main_container">
<div class="header">
<div id="logo"><img src="images/images (12).jpg" alt="" width="162" height="80" border="0" /></div>
<div class="right_header">
<div class="top_menu"><h3> WELCOME
<?php
session_start();
$myusername = $_SESSION['myusername'];
echo$myusername;
?>
</h3> </div>
<div id="menu">
<ul>
<li><a class="current" href="#">Home</a></li>
<li><a href="about.html">About Us</a></li>
<li><a healthyliving.html">Healthy Living</a></li>
<li><a href="contact.php">Review</a></li>
</ul>
</div>
</div>
</div>
<img src="images\banner-1.jpg" style="vertical-align:left" width="900" height="200">
</div>
</div>
<br>
<center><h1>Enter Query</h1></center>
<div>
<form id="tfnewsearch" method="post" action="file.php">
<input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
</form>
<div class="tfclear"></div>
</div>
</body>
</html>