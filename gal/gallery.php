<style type="text/css">

#load_content{

	text-align:center;

}



</style>

<!--body bgcolor="#F0EFD5"></body-->
<style type="text/css"> #mhgallery img { display:none; } </style>
<script type="text/javascript" src="js/jquery.js"></script>

<script>
function load_dirs(x,y)
{	
	$.post("getinfo.php?sub="+y+"&folder="+x,function(data){
		$("#load_content").fadeIn(3000);
		$("#load_content").html(data);
		$("#load_gallery").hide(3000);
	});
}
</script>
<div id="load_header">



<?php

$event=scandir("gallery");

$n=count($event);

echo "<table ><tr>";
$k=1;
for($i=2;$i<$n;$i++)

{

	if(is_dir("gallery/".$event[$i]))

	{ 	
		$inside=scandir("gallery/".$event[$i]);
	
		if(is_dir("gallery/".$event[$i]."/".$inside[2]))
		{
		echo "<td onclick='load_dirs(\"".$event[$i]."\",1);' ><button style='border:0px; background:transparent;cursor:pointer; ' ><img src='g2.png' id='".$event[$i]."' style='width:100px;height:100px;'/></td><td onclick='load_dirs(\"".$event[$i]."\",1);' style='cursor:pointer;' > ".strtoupper($event[$i])."</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
		}
		else
		{
			echo "<td onclick='load_dirs(\"".$event[$i]."\",0);'><button style='border:0px; background:transparent;cursor:pointer; ' ><img src='g2.png' id='".$event[$i]."' style='width:100px;height:100px;'/></td><td onclick='load_dirs(\"".$event[$i]."\",0);' style='cursor:pointer;' > ".strtoupper($event[$i])."</button></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
		}
		
		

	}

}
echo "</tr></table>";

?>

</div>

<div id="load_content" style="display:none;">

</div>

<center>

<div id="load_gallery"></div>

</center>
