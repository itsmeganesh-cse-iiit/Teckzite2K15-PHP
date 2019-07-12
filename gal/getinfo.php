<head>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mhgallery.js"></script>
<script type="text/javascript" src="js/initgallery.js"></script>
<link rel="stylesheet" href="js/mhgallery.css" type="text/css" />
<style type="text/css"> #mhgallery img { display:none; } </style>
</head>

<?php

$sub=$_GET['sub'];

$dir=$_GET['folder'];

if($sub==1)

{

	$sub_dirs=scandir("gallery/".$dir);

	$count_sub=count($sub_dirs);

	echo "<table style='margin-left:50px;'><tr>";

	for($i=2;$i<$count_sub;$i++)

	{

		

		echo "<td><img src='g2.jpg' id='".$sub_dirs[$i]."' style='cursor:pointer;width:100px;height:100px;' onclick='load_gallery(\"".$sub_dirs[$i]."\",\"".$dir."\")'/></td><td><button  style='border:0px;background:transparent; text-decoration:none; size:25px; cursor:pointer; ' onclick='load_gallery(\"".$sub_dirs[$i]."\",\"".$dir."\")'>".strtoupper($sub_dirs[$i])."</button></td>";

	}
echo "</tr></table>";
}

else

{

?>
<br/><br/>
<div style="text-align:center;">
	<div id="mhgallery">
        <?php

        $sc=scandir("gallery/".$dir);

        $count=count($sc);

        for($i=2;$i<$count;$i++){
			echo '<img src="gallery/'.$dir.'/'.$sc[$i].'" />';
         }

          ?>
</div></div>
<?php
}
?>

<script type="text/javascript">

function load_gallery(x,y)

{
	$.post("getinfo.php?sub=0&folder="+y+"/"+x,function(data){
		
		$("#load_gallery").html(data);
		$("#load_gallery").fadeIn();
	});

}

</script>

