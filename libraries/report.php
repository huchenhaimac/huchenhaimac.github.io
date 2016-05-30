<?php include 'database.php'?>
<?php
if(isset($_POST)){
  
  $gender=$_POST['gender'];
  $interstatus=$_POST['interstatus'];
  $immstatus=$_POST['immstatus'];
  $country=$_POST['country'];
  $degreetype=$_POST['degreetype'];
  $year=$_POST['year'];
  $min_gpa=$_POST['gpa1'];
  $max_gpa=$_POST['gpa2'];
  $major=$_POST['major'];
 
 
    $sql = "select * from IMIS.STUDENTS as a inner join IMIS.EDUCATION as b  on a.STU_ID = b.STU_ID WHERE 1=1 ";
    if(isset($_POST['gender']) && empty($_POST['gender']) == false)
    {
        $sql .= " and a.GENDER = '$gender'";
    }
    if(isset($_POST['immstatus']) && empty($_POST['immstatus']) == false)
    {
        $sql .= " and a.STU_STATUS = '$immstatus'";
    }
    if(isset($_POST['interstatus']) && empty($_POST['interstatus']) == false)
    {
        $sql .= " and a.INTERN_STATUS = '$interstatus'";
    }
    if(isset($_POST['country']) && empty($_POST['country']) == false)
    {
        $sql .= " and a.COUNTRY= '$country'";
    }
    if(isset($_POST['degreetype']) && empty($_POST['degreetype']) == false)
    {
        $sql .= " and b.DEGREE = '$degreetype'";
    }
    if(isset($_POST['year']) && empty($_POST['year']) == false)
    {
        $sql .= " and b.YEAR = $year";
    }
    if(isset($_POST['major']) && empty($_POST['major']) == false)
    {
        $sql .= " and b.MAJOR = '$major'";
    }
   
    if(isset($_POST['gpa1'])&&empty($_POST['gpa1'])== false)
    {
        if(isset($_POST['gpa2']) && empty($_POST['gpa2']) ==false)
         $sql .= " and $min_gpa<=b.GPA<=$max_gpa ";
        else
        
             $sql .= " and $min_gpa<=b.GPA ";
        
    }
    else 
    {
         if(isset($_POST['gpa2']) && empty($_POST['gpa2']) ==false)
         $sql .= " and b.GPA<=$max_gpa ";

    }






 header("location:../admin.php?sql=$sql&n=true" );

}
?>