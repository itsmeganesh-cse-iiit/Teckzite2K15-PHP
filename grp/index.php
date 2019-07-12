<?php
session_start();
require_once("connect.php");
if(!isset($_SESSION['admin']))
{
if(isset($_POST['submit']))
{
$admid=strip_tags($_POST['admid']);
$admpass=strip_tags($_POST['admpass']);
if($admid=="vprg" && $admpass=="chmod777@vprg")
{
$_SESSION['admin']="admin";
echo "<script>window.location='home.php';</script>";
}
{
echo "<script>alert('Invalid Credentials');</script>";
}
}
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
    .form-signin {
        max-width: 300px;
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
          <a class="brand" href="">Welcome Guest</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li id="home" class="active">
                <a href="">SDCAC WEBTEAM</a>
              </li>
              
             </ul>
          </div>
        </div>
      </div>
    </div>

<div class="container">
<div id="loaddiv">
	
      <form class="form-signin" method="post" style="margin-top:7%;">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="admid" class="input-block-level" placeholder="Admin ID">
        <input type="password" name="admpass" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" name="submit" type="submit">Sign in</button>
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


     <script>
    function load_page(y){	
    $("html, body").animate({ scrollTop: 0 }, 600); 
    $("ul.nav li").removeClass("active");
   
    $("#"+y).addClass("active");
   
       $('#loaddiv').html("<div style='position:absolute;top:33%;left:43%;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='img/loader.gif' ></div>").load(y+'.php');
          
	}

</script>


  </body>
</html>
<?php
}
else
{
	header("location:home.php");
}
?>
