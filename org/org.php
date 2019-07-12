<?php
session_start();
require_once("connect.php");

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

</style>
      <script>
		function shwdata()
		{
			$("#datash").hide()
			event=$("#event").val();
			$("#datash").html("<img src='img/loading.gif' style='margin-top:30%;'>");
			if(event!="")
			{
                       
			$.post("loaddata.php",{event:event},function(data){$("#datash").html(data).slideDown("slow");});
		    }
		    else
		    {
			$("#datash").html("<span class='note red rounded'>Please Select Event..</span><br><br>");
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
 <li class="active">
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
 <center>
<div class="vpb_main_wrapper">
	<div id="header" width="100%" style="padding:1px;background-color: #A7C942;color:#fff;">
	<h3>TECKZITE2K15<h4 style='color:#fff;'>Events Registration Details</h4></h3>
	</div>
	<br>
<form>
<table border="0">
<tr> 
	 
	 <td><select id="event" class="vpb_header_lebels" onchange="shwdata()">
	<option value="">Select</option>
	<?php $eve=mysql_query("SELECT * FROM events");
	 while($event=mysql_fetch_array($eve))
	 {
	echo "<option value=".$event['eid'].">".$event['category']." - ".$event['etitle']."</option>";
	}
	 ?>
	 </select>
	 </td></tr>
</table>

</form>	
<br>
<div id="datash" style="display:none;">
</div>

</div>
</center>
</div></div>
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

