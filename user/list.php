<?php
SESSION_START();
require("mysql.php");

//for new users
if(!isset($_SESSION["last"]))
{
	$_SESSION["last"] = 0;
}

//list chats
$sql = "SELECT * FROM chat WHERE `id` > ".$_SESSION["last"]." ORDER BY `id` ASC";
$q = $db->query($sql);

while($list = mysqli_fetch_array($q, MYSQLI_ASSOC)) 
{
	if($list["origin"] != $db->clean($_SERVER["REMOTE_ADDR"])) {
		//print("<small><b>".$list["origin"].":</b></small><br/>");
		print("<span classscore-read'>".strip_tags($list["message"].":</small><br/>"));
		$_SESSION["last"] = $list["id"];
	}
}
