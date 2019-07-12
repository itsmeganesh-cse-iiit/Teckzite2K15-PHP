<?php
session_start();
require_once("connect.php");
if(isset($_SESSION['org']))
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
</style>
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
          <a class="brand" href="">Welcome Organizer</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="home.php">Home</a>
              </li>
              <li>
                <a  href="addnotice.php">Add notice</a>
              </li>
 <li>
                <a  href="winners.php">Add Winners</a>
              </li>
 <li>
                <a  href="org.php">Registered Students</a>
              </li>

 <li>
                <a  href="studata.php">Students Data</a>
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
	<div class="hero-unit">
        <h1>Welcome Organizer</h1>
        <p>Welcome SDCAC Organizer....</p>
        <p><a href="addnotice.php" class="btn btn-primary btn-large">Add notice&raquo;</a></p>
      </div>

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
