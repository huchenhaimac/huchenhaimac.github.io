<?php include 'database.php' ?>
<?php session_start()?>
<?php 
//name
$id=$_GET['id'];
echo $id;
$sql="SELECT * FROM STUDENTS WHERE STU_ID=$id";
$result=$db->query($sql);
$row=$result->fetch_assoc();
$fname=$row['STU_FNAME'];
$mname=$row['STU_MNAME'];
$lname=$row['STU_LNAME'];
$email=$row['EMAIL'];
$phone=$row['TELEPHONE'];
$gender=$row['GENDER'];
$status=$row['STU_STASTUS'];
//SELECT WORKEXPERIENCE
$sql="SELECT * FROM WORK_EXPERIENCE  WHERE STU_ID=$id ";
$result=$db->query($sql);
$row=$result->fetch_assoc();
$company=$row['COMPANY'];
$location=$row['LOCATION'];
$dates=$row['DATE'];
$position=$row['POSITION'];
//SELECT SKILLS
 $skillsql="SELECT * FROM SKILL WHERE STU_ID=$id";
 $skillresult=$db->query($skillsql);



// $skill=$skillrow['SKILL_NAME'];
// $level=$skillrow['SKILL_LEVEL'];


//Select Education
$sql="SELECT * FROM EDUCATION WHERE STU_ID=$id";
$result=$db->query($sql);
$row=$result->fetch_assoc();
$semester=$row['SEMESTER'];
$year=$row['YEAR'];
$degree=$row['DEGREE'];
$major=$row['MAJOR'];
$gpa=$row['GPA'];
$university=$row['UNIVERSITY'];
$ulocation=$row['LOCATION'];
$certifications=$row['CERTIFICATION'];
$certification_body=$row['CERTIFICATION_BODY'];
// Select internship
$jobsql="SELECT * FROM INTERN_COMPANY WHERE STU_ID=$id";
$jobresult=$db->query($jobsql);



?>