<?php include 'database.php'?>
<?php
if(isset($_POST)){
  
 $id=$_GET['id'];
 $intern=$_GET['intern'];

$sql="DELETE FROM INTERN_COMPANY WHERE INTERN_NUM=$intern";
$result=$db->query($sql);



 header("location:../main.php?id=$id" );

}
?>