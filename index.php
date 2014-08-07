<html>
<head>
<style type="text/css">
a:link, a:active, a:visited , a:hover {
color: rgb(217, 217, 217);
text-decoration:none;
}
ul{
list-style-type: none;
}
li{
margin-right:20px;
width:100px;
height:100px;
float:left;
}
</style>
</head>
<body>
<ul>
<?php
$files = glob("*.png");
for ($i=1; $i<count($files); $i++)
{
	$num = $files[$i];
	echo '<li>';
	echo '<a href="'.$num.'" >';
	echo '<img src="'.$num.'" alt="'.$num.'" />'."<br />";
	print $num."";
	echo '</a>';
	echo '</li>';
}
?>
</ul>
</body>
</html>