<?php include 'database.php'?>
<?php
if(isset($_POST)){
  
 $company=$_POST['addcompany'];
 $city=$_POST['addcity'];
 $address=$_POST['addaddress'];
 $manager=$_POST['addmanager'];
 $phone=$_POST['addphone'];
 $email=$_POST['addemail'];
 $website=$_POST['addwebsite'];
 $response=$_POST['addresponse'];
 $requirement=$_POST['addrequirement'];
 $position=$_POST['addposition'];
 $group=$_POST['addgroup'];
$salary=$_POST['addsalary'];
$quantity=$_POST['addquantity'];
echo $company; echo $group;
$sql="INSERT INTO RECRUITMENT(COMPANY_NAME,CITY,ADDRESS,MANAGER,TELEPHONE,
	EMAIL,WEBSITE,RESPONSIBILITY,REQUIREMENT,JOBNAME,JOBGROUP,SALARY,QUANTITY) 
VALUES('$company','$city','$address','$manager','$phone','$email'
	,'$website','$response','$requirement','$position','$group','$salary','$quantity')";
$result=$db->query($sql);
 header("location:../admin.php?n=false");


}
?>