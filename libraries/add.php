<?php include 'database.php'?>
<?php
if(isset($_POST)){
   //取值
   //TABLE STUDENTS
    $stdno = $_POST['stdno'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $gender=$_POST['gender'];
    $stu_country=$_POST['stucountry'];
    $immstatus=$_POST['immstatus'];
    //EDUCATION TABLE
    $edu_year=$_POST['year'];
    $semester=$_POST['semester'];
    $university=$_POST['university'];
    $major=$_POST['major'];
    $gpa=$_POST['gpa'];
    $degree=$_POST['degreetype'];
    $cft=$_POST['cft'];
    $ctb=$_POST['ctb'];
    $ucountry=$_POST['ucountry'];
  //WORK EXPERIENCE
  $wecompany=$_POST['wecompany'];
  $wecountry=$_POST['wecountry'];
  $weposition=$_POST['weposition'];
  $wedate=$_POST['wedate'];
  $skillname=$_POST['skill'];
  $skilllevel=$_POST['level'];
  $interstatus=$_POST['interstatus'];
  $types=$_POST['types'];
  $icompany=$_POST['icompany'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $postcode=$_POST['postcode'];
  $icountry=$_POST['icountry'];
  $cfname=$_POST['cfname'];
  $clname=$_POST['clname'];
  $cphone=$_POST['cphone'];
  $iemail=$_POST['iemail'];
  $cweb=$_POST['cweb'];
  $notes=$_POST['notes'];
  $position=$_POST['position'];
  $response=$_POST['response'];
  $salary=$_POST['salary'];
  $groups=$_POST['groups'];
  //initialize input value
  	//INSERT TABLE
  //	INSERT STUDENT TABLE
  	$_SESSION['id']=$stdno;
  	$sql="INSERT INTO STUDENTS(STU_ID,STU_FNAME,STU_MNAME,STU_LNAME,GENDER,EMAIL,TELEPHONE,STU_STATUS,INTERN_STATUS,COUNTRY) 
  	VALUES('$stdno','$fname','$mname','$lname','$gender','$email','$phone','$immstatus','$interstatus','$stu_country')";
  	$Tstu=$db->query($sql);
  	//USER TABLE
  	$sql="INSERT INTO USERS(STU_ID,USER_NAME,USER_PWD) VALUES('$stdno','$fname','$pwd')";
  	$Tuser=$db->query($sql);
  	//EDUCATION TABLE
  	$sql="INSERT INTO EDUCATION(STU_ID,DEGREE,MAJOR,GPA,UNIVERSITY,LOCATION,CERTIFICATION,CERTIFICATION_BODY,SEMESTER,YEAR) 
  	VALUES('$stdno','$degree','$major','$gpa','$university','$ucountry','$cft','$ctb','$semester','$edu_year')";
  	$Tedu=$db->query($sql);
  	//WORK EXPERIENCE
  	$sql="INSERT INTO WORK_EXPERIENCE(STU_ID,COMPANY,LOCATION,DATE,POSITION)
  	VALUES('$stdno','$wecompany','$wecountry',' $wedate','$weposition')";
    $Twork=$db->query($sql);
  	//SKILL TABLE

  	for($cs=0; $cs < count($skillname);$cs++)
  	{  
  	  
  	   $sql="INSERT INTO SKILL(STU_ID,SKILL_NAME,SKILL_LEVEL) VALUES('$stdno','$skillname[$cs]','$skilllevel[$cs]')";
  	   $Tskill=$db->query($sql);
  	}

 // header("location:../main.php");
 //	COMPANY TABLE AND JOB TABLE
 if($interstatus==='Available'){
 //company table
 	$sql="INSERT INTO INTERN_COMPANY(STU_ID) VALUES('$stdno')";
 $T_company=$db->query($sql);

}
  elseif($interstatus==='Hired'){
	//company table
	$sql="INSERT INTO INTERN_COMPANY(STU_ID,COMPANY_NAME,TYPE,ADDRESS,CITY,POSTALCODE,COUNTRY,CONT_PR_FNAME,CONT_PR_LNAME,TELEPHONE,EMAIL,COMPANY_WEB,NOTES
    ,JOB_NAME,JGROUP,JOB_RESPONSIBILITIES,SALARY)
		VALUES('$stdno','$icompany','$types','$address',' $city','$postcode','$icountry','$cfname','$clname',' $cphone','$iemail','$cweb','$notes'
      ,'$position','$groups','$response',' $salary')";
	$T_company=$db->query($sql);
}
header("location:../main.php?id=$stdno");

}


?>