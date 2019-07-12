<?php
session_start();
require_once("connect.php");
if(isset($_SESSION['admin']))
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SDCAC WEBTEAM</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <style>
		  body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

    .form-signin {
        max-width: 500px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }</style>
      
      <script>
function notice()
{
subject=$("#subject").val();
description=$("#description").val();
sentby=$("#sentby").val();

if(subject=="" || description =="" || sentby =="")
{
	alert("All Fields are required");
	return false;
}
else
{
	return true;
}
}

</script>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="">Welcome Admin</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <a href="home.php">Home</a>
              </li>
              <li  class="active">
                <a  href="addnotice.php">Add notice</a>
              </li>
              
               <li>
                <a  href="faqs.php">Faqs</a>
              </li>
                <li>
                <a  href="winners.php">Winners</a>
              </li>
               <li>
                <a  href="logout.php">Logout</a>
              </li>
             
             </ul>
          </div>
        </div>
      </div>
    </div>

<div class="container">
<div id="loaddiv">
	<form class="form-signin" enctype="multipart/form-data" method="post" action="addnotice-db.php" onsubmit="return notice()"  style="margin-top:4%;">
        <h2 class="form-signin-heading">Add Notice</h2>
        <input type="text" name="subject" id="subject" class="input-block-level" placeholder="Subject">
        <textarea rows="6" name="description" id="description" class="input-block-level" placeholder="Description"></textarea>
        <br>
        
        <input type="file" name="File" id="File">
        <br>
        <br>
  <select name="nto" eid="nto">
	 <option value="ALL">ALL</option>
<?php
$events=mysql_query("SELECT * FROM events");
while($eve_fet=mysql_fetch_array($events))
{
echo "<option value=".$eve_fet['eid'].">".$eve_fet['category']." ~ ".$eve_fet['etitle']."</option>";
}
?>
</select>
<br><br>

        <input type="text" name="sentby" id="sentby" class="input-block-level" value="Admin" placeholder="Admin">
<br>
        <button class="btn btn-large btn-primary" name="submit" type="submit">Post Notice</button>
      </form>

  </div>
    
</div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
              <p>Developed by <a href="">SDCAC Webteam</a>.</p>      </div>
    </footer>



    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>



  </body>
</html>
<?php
}
else
{
	header("location:index.php");
}
?>
