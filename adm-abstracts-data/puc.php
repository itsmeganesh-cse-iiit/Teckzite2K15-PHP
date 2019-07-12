<?php
session_start();
require_once("../connect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Teckzite 2K15</title>
    <link href="../grp/assets/css/bootstrap.css" rel="stylesheet">
    <link href="../grp/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../grp/assets/css/style.css" rel="stylesheet">
    <link href="../grp/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <style>
		  body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }
      

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
}

#customers td, #customers th {
    font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
    width:300px;
}

#customers th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
    text-align:center;
}

#customers tr:nth-child(2n) {
    color: #000000;
    background-color: #EAF2D3;
    width:300px;
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
          <a class="brand" href="">CSE Abstracts</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <a href="home.php">TECKZITE2K15</a>
              </li>
             
             
             </ul>
          </div>
        </div>
      </div>
    </div>

<div class="container">
<div id="loaddiv" style="background:#fff;margin:40px;padding:10px;">
	
<table id="customers" style='width:60%;margin-left:20%;'>
  <tr>
    <th style='width:5%;'>Sno</th>
    <th style='width:10%;'>Branch</th>
    <th style='width:10%;'>Event</th>
    <th style='width:10%;'>Uploaded by</th>
   <th style='width:20%;' >Link</th>  </tr>
<?php
$data=mysql_query("SELECT * FROM uploads WHERE branch='puc'");
$sno=0;
while($data_f=mysql_fetch_array($data))
{
$sn=$data_f['sno'];
$sno=$sno+1;
?>
  <tr >
	      <td><?php echo $sno;?></td>
    <td><?php echo $data_f['branch'];?></td>
    <td><?php echo $data_f['evnt'];?></td>
    <td><?php echo $data_f['uploadby'];?></td>
    <td><?php echo "<a href='../tzcloud/".$data_f['link']."' target='_blank'>Download";?></td>

  </tr>
 <?php } ?>
</table>

</div>
    
</div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
              <p>Developed by <a href="">SDCAC Webteam</a>.</p>      </div>
    </footer>



    <script src="../grp/assets/js/jquery.js"></script>
    <script src="grp/assets/js/bootstrap-transition.js"></script>
    <script src="grp/assets/js/bootstrap-alert.js"></script>
    <script src="grp/assets/js/bootstrap-modal.js"></script>
    <script src="grp/assets/js/bootstrap-dropdown.js"></script>
    <script src="grp/assets/js/bootstrap-scrollspy.js"></script>
    <script src="grp/assets/js/bootstrap-tab.js"></script>
    <script src="grp/assets/js/bootstrap-tooltip.js"></script>
    <script src="grp/assets/js/bootstrap-popover.js"></script>
    <script src="grp/assets/js/bootstrap-button.js"></script>
    <script src="grp/assets/js/bootstrap-collapse.js"></script>
    <script src="grp/assets/js/bootstrap-carousel.js"></script>
    <script src="grp/assets/js/bootstrap-typeahead.js"></script>
    <script src="grp/assets/js/bootstrap-affix.js"></script>

    <script src="grp/assets/js/holder/holder.js"></script>
    <script src="grp/assets/js/google-code-prettify/prettify.js"></script>

    <script src="grp/assets/js/application.js"></script>

<script>
function sendmsg(sno)
{
var c=prompt("Enter Reply to post");
$.post("reply.php",{sno:sno,c:c},function(data){$("#d"+sno).fadeOut("slow");});
}
</script>

  </body>
</html>
<?php

?>
