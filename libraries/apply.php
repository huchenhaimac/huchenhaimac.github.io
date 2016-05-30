<?php include 'database.php'?>
<?php
$id=$_GET['id'];
$recruit=$_GET['recruit'];
$sql="INSERT INTO APPLY(STU_ID,RECRUIT_NUM,APPLY_STATUS) VALUES($id,$recruit,waiting)";
$db->query($sql);
 header("location:../main.php?id=$id");
 ?>