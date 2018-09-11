<?php
$news = array(
     array("id"=>"1","title"=>"公考在即"),
     array("id"=>"2","title"=>"秋招在即"),
     array("id"=>"3","title"=>"研考在即"),
);
foreach($news as $n){
	echo '<li><a href="news.php?id="',$n["id"],">";
	echo $n["title"];
	echo "</a></li>";
}
?>