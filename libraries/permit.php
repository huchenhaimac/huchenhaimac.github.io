<?php include 'database.php'?>
<?php
  $id=$_GET['id'];
  $recruitnum=$_GET['recruitnum'];
  echo $recruitnum;

  $sql="UPDATE STUDENTS SET INTERN_STATUS='Hired' WHERE STU_ID=$id ";
  $db->query($sql);
  $sql="UPDATE APPLY SET APPLY_STATUS='approved' WHERE STU_ID=$id and RECRUIT_NUM=$recruitnum";
  $db->query($sql);
  $sql="UPDATE RECRUITMENT SET QUANTITY=QUANTITY+1 WHERE RECRUIT_NUM=$recruitnum";
  $db->query($sql);
 header("location:../admin.php#findjob");

?>