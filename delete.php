<?php
include_once("config.php");
$id = (int) $_GET['id'];
$myBase->query("DELETE FROM `user` WHERE `id` = " .$id);
header("Location:index.php");
?>