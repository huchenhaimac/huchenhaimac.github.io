<?php include 'database.php'?>

<?php
$id=$_GET['id'];
header("location:main.php?id=");
// $sql="select  DISTINCT STU_ID FROM IMIS.APPLY WHERE STU_ID=104487172";
// $result=$db->query($sql);
// $row=$result->fetch_assoc();
// $count=$db->affected_rows();
// if(!$count)  
// $sql="select *
// from IMIS.RECRUITMENT,IMIS.APPLY
// WHERE RECRUITMENT.RECRUIT_NUM=APPLY.RECRUIT_NUM
// AND QUANTITY < MAX_QUANTITY  AND APPLY_STATUS <>'waiting' 
// AND (COMPANY_NAME IN
// 				(select COMPANY_NAME FROM IMIS.RECRUITMENT 
//                 WHERE COMPANY_NAME NOT IN
// 				(SELECT COMPANY_NAME 
//                 FROM IMIS.INTERN_COMPANY WHERE STU_ID = 104487172)) ) ";

// else 
// {
// 	$sql="select *
// from IMIS.RECRUITMENT
// WHERE QUANTITY< MAX_QUANTITY 
// AND (COMPANY_NAME IN
// 				(select COMPANY_NAME FROM IMIS.RECRUITMENT 
//                 WHERE COMPANY_NAME NOT IN
// 				(SELECT COMPANY_NAME 
//                 FROM IMIS.INTERN_COMPANY WHERE STU_ID = 104487173)) ) ";


// }$result=$db->query($sql);
// $row=$result->fetch_assoc();
// echo $row['COMPANY_NAME'];

?>

