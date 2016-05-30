<?php include 'database.php'?>
<?php

  

 if($_GET['q']==1){
 	$sql="select * from STUDENTS,EDUCATION where STUDENTS.STU_ID=EDUCATION.STU_ID";}


 header("location:../admin.php?sql=$sql&n=true" );

?>