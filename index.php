<html>
<head>
<style type="text/css">
a:link, a:active, a:visited , a:hover {
  color: rgb(146, 146, 146);
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
img{
  display:block;
}
</style>
</head>
<body>
<ul>
<?php
$files = glob("images/*.png");
for ($i=1; $i<count($files); $i++)
{
        $num = substr($files[$i],7);
        echo '  <li>';
        echo '<a href="'.$num.'" >';
        echo '<img src="'.$num.'" alt="'.$num.'" />';
        print $num."";
        echo '</a>';
        echo "</li>\n";
}
?>
</ul>
</body>
</html>
