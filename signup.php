<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/ex.css" type="text/css">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script type="text/javascript" src="altTextBox.js"></script>
</head>
<body>
<div id="main_container">
<div class="header">
<div id="logo"><img src="images/images (12).jpg" alt="" width="162" height="80" border="0" /></div>
<div class="right_header">
<div class="top_menu"> <div class="top_menu"> <a href="login.html" class="login">login</a></div>
<div id="menu">
<ul>
<li><a class="current" href="a11.htm">Home</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="healthyliving.html">Healthy Living</a></li>
<li><a href="contact.php">Review</a></li>
</ul>
</div>
</div>
</div>
<img src="images\images (13).jpg" width="900" height="200">
<form action="signupdetails.php" method="post">
<fieldset>
<legend><b><h3>Personal Information</h3></b></legend>
<table cellpadding="3">
<tr><tdwidth="150px"><strong>Username (Email)</strong></td><td><input type="email" name="username"></td></tr>
<tr><td><strong>First name</strong></td><td><input type="text" name="firstname"></td></tr>
<tr><td><strong>Last name</strong></td><td><input type="text" name="lastname"></td></tr>
<tr><td><strong>Password</strong></td><td><input type="password" name="password"></td></tr>
</table>
</fieldset>
<fieldset>
<legend><b><h3>Additional Information</h3></b></legend>
<table cellpadding="3">
<tr><td><strong>Street</strong></td><td><input type="text" name="data1"></td></tr>
<tr><td><strong>City</strong></td><td><input type="text" name="data2"></td></tr>
<tr><td><strong>State</strong></td><td><input type="text" name="data3"></td></tr>
<tr><td><strong>Country</strong></td><td><input type="text" name="data4"></td></tr>
<tr><td width="150px"><strong>Mobile No.</strong></td><td><input type="number" name="data5"></td></tr>
</table>
</fieldset>
<fieldset style="text-align: center">
<legend><h3><b>Terms & conditions</b></h3></legend>
<textarea cols="50" rows="5">Terms and conditions for website usage
Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern [business name]'s relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website. The term '[business name]' or 'us' or 'we' refers to the owner of the website whose registered office is [address]. Our company registration number is [company registration number and place of registration]. The term 'you' refers to the user or viewer of our website. The use of this website is subject to the following terms of use: The content of the pages of this website is for your general information and use only. It is subject to change without notice.
This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: [insert list of information].
Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.
Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.
This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.
All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.
Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.
From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).
Your use of this website and any dispute arising out of such use of the website is subject to the laws of England, Northern Ireland, Scotland and Wales.</textarea>
<br/>
I confirm that I agree with terms & conditions <input type="checkbox" name="agreeWithTerms" value="Y">
<br/><br/>
<?php
if(array_key_exists('cumulativeErrorMessage', $_POST) && $_POST['cumulativeErrorMessage'] != '') {
?>
<fieldset style="color: #ff0000;">
<legend>There were errors</legend>
<?php echo $_POST['cumulativeErrorMessage']?>
</fieldset>
<?php
}
?>
<br/>
<input type="submit" value="add">
</form>
</div>
</body>
</html>