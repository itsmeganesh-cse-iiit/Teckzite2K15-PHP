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
    <title>REGISTERED TEAMS</title>
    <script src="jquery.min.js"></script>
       <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <style>
		 
      
      
.note {
          position:relative;
          width:480px;
          padding:1em 1.5em;
          margin:2em auto;
          color:#fff;
          background:#97C02F;
          overflow:hidden;
      }

      .note:before {
          content:"";
          position:absolute;
          top:0;
          right:0;
          border-width:0 16px 16px 0; /* This trick side-steps a webkit bug */
          border-style:solid;
          border-color:#fff #fff #658E15 #658E15; /* A bit more verbose to work with .rounded too */
          background:#658E15; /* For when also applying a border-radius */
          display:block; width:0; /* Only for Firefox 3.0 damage limitation */
          /* Optional: shadow */
          -webkit-box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
          -moz-box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
          box-shadow:0 1px 1px rgba(0,0,0,0.3), -1px 1px 1px rgba(0,0,0,0.2);
      }

      .note.red {background:#C93213;}
      .note.red:before {border-color:#fff #fff #97010A #97010A; background:#97010A;}

      .note.blue {background:#53A3B4;}
      .note.blue:before {border-color:#fff #fff transparent transparent; background:transparent;}

      .note.taupe {background:#999868;}
      .note.taupe:before {border-color:#fff #fff #BDBB8B #BDBB8B; background:#BDBB8B;}

    
      .note.rounded {
          -webkit-border-radius:5px 0 5px 5px;
          -moz-border-radius:5px 0 5px 5px;
          border-radius:5px 0 5px 5px;
      }

      .note.rounded:before {
          border-width:8px; /* Triggers a 1px 'step' along the diagonal in Safari 5 (and Chrome 10) */
          border-color:#fff #fff transparent transparent; /* Avoids the 1px 'step' in webkit. Background colour shows through */
          -webkit-border-bottom-left-radius:5px;
          -moz-border-radius:0 0 0 5px;
          border-radius:0 0 0 5px;
      }

      .note p {margin:0;}
      .note p + p {margin:1.5em 0 0;}

.vpb_main_wrapper
{
	width:1002px; 
	font-family:Verdana, Geneva, sans-serif; 
	font-size:12px;
	border: solid 1px #cbcbcb;
	 background-color: #FFF;
	 box-shadow: 0 2px 20px #cbcbcb;
	-moz-box-shadow: 0 2px 20px #cbcbcb;
	-webkit-box-shadow: 0 2px 20px #cbcbcb;
	min-height:800px;
}
.vpb_header_lebels {
	width:247px;
	padding-top:12px;
	padding-bottom:12px;
	float:left; 
	border-bottom:1px solid #CCC;
}
 
.vasplus_hidden_boxes {padding:6px;outline: 0;transition: all 0.25s ease-in-out;-webkit-transition: all 0.25s ease-in-out;-moz-transition: all 0.25s ease-in-out;border-radius:3px;-webkit-border-radius:3px;-moz-border-radius:3px;border:1px solid rgba(0,0,0, 0.2);border: 1px solid #C9C9C9;} 

.vasplus_hidden_boxes:focus { box-shadow: 0 0 12px #66F;-webkit-box-shadow: 0 0 12px #66F; -moz-box-shadow: 0 0 12px #66F;border:1px solid rgba(0,0,233, 0.0); }

.vpb_header_lebels {
	width:247px;
	padding:5px;
	float:left; 
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 80%;
    border-collapse: collapse;
}

#customers td, #customers th {
    font-size: 1.2em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
     text-align: center;
}

#customers th {
    font-size: 1.1em;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
}

#customers tr:nth-child(2n) td {
    color: #000000;
    background-color: #EAF2D3;
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
              <li>
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

 <li  class="active">
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
 <center>

<br>
<div id="datash">
<?php
$dat=mysql_query("SELECT * FROM registration");

echo "<table id='customers'>";
echo " <tr> <th>sno</th><th >Stu id</th><th>Teckzite ID</th><th>Name</th><th>Class</th><th>Fee</th></tr>";
$sno=0;
while($det=mysql_fetch_array($dat))
{
$sno=$sno+1;
echo "<tr><td>".$sno."</td><td>".$det['stuid']."</td><td>".$det['tzid']."</td><td>".$det['firstname']." ".$det['lastname']." </td><td>".$det['batch']."-".$det['branch']."</td><td>".$det['fees']."</td></tr>";
}
?>
</div>

</center>
</div>
</div>
 

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
   header("location:index.php");
?>
