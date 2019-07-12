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
          <a class="brand" href="">Welcome Admin</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li>
                <a href="home.php">Home</a>
              </li>
              <li >
                <a  href="addnotice.php">Add notice</a>
              </li>
               <li class="active">
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
<div id="loaddiv" style="background:#fff;margin:40px;padding:10px;">
	
<table id="customers">
  <tr>
    <th>University ID</th>
    <th>Name</th>
    <th>Message</th>
    <th>Action</th>
  </tr>
<?php
$data=mysql_query("SELECT * FROM feedback WHERE rstatus!='1'");
while($data_f=mysql_fetch_array($data))
{
$sn=$data_f['sno'];
?>
  <tr  id="d<?php echo $data_f['sno'];?>">
    <td><?php echo $data_f['id'];?></td>
    <td><?php echo $data_f['name'];?></td>
    <td><?php echo $data_f['msg'];?></td>
    <td style="cursor:pointer;text-align:center;font-weight:bold;" onclick='sendmsg("<?php echo $sn ;?>")'>Reply</td>
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
function sendmsg(sno)
{
var c=prompt("Enter Reply to post");
if(c!=false || c!="" && c==true )
 $.post("reply.php",{sno:sno,c:c},function(data){$("#d"+sno).fadeOut("slow");});
else
 alert("Answer not submitted due to NULL ENTRY");
}
</script>

  </body>
</html>
<?php
}
else
{
	header("location:index.php");
}
?>
