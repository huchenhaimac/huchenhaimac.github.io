

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

<title>Uwin Intership</title>
<link rel="icon" href="images/smalllogo.jpg">
<!-- Bootstrap core CSS -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <script src="js/jquery-1.11.1.js"></script> -->
<!--  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>  -->
<!--  <script src="js/bootstrap.min.js"></script> -->
 
 
 
     <!-- bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <!-- x-editable (bootstrap version) -->
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<link href="css/dashboard.css" rel="stylesheet">

      <link href="css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLES -->
      <link href="css/userstyle.css" rel="stylesheet" />
      <!-- round menu -->
    
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-7243260-2']);
           _gaq.push(['_trackPageview']);
             (function() {
     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
</script>
		



</head>
<!-- NAVBAR
================================================== -->
<?php include 'libraries/database.php' ?>

<body>

	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed"
							data-toggle="collapse" data-target="#navbar"
							aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<!-- <span class="icon-bar"></span> -->
							<span class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">IMIS</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="#about">MAC Company</a></li>
							<li><a href="#contact">Contact</a></li>
							<li class="dropdown active" ><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Edit</a></li>
									<li><a href="#">Another action</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="index.html"><span class="glyphicon glyphicon-off">&nbspLog out</span></a></li>

								</ul></li>
						</ul>

					</div>
				</div>
			</nav>

		</div>
		
	</div>

       

<!-- Modal -->
 
      
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="padding-top:200px;padding-left:20%;padding-right:20%;>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Report Results</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <thead><th style="text-align: center;">ID</th><th>Name</th><th>Major</th><th>GPA</th><th>Gender</th><th>Country</th><th>Status</th><th></th></thead>
        <tbody>



  
     	   <?php if(isset($_GET["sql"])): ?>
          <?php $sql=$_GET["sql"];?>
          <?php $report=$db->query($sql); ?>
          <?php while($reportrow=$report->fetch_assoc()): ?>
        <tr><td><?php echo $reportrow['STU_ID']; ?></td>
        <td><?php echo $reportrow['STU_FNAME']; ?></td>
        <td><?php echo $reportrow['MAJOR']; ?></td>
        <td><?php echo $reportrow['GPA']; ?></td>
        <td><?php echo $reportrow['GENDER']; ?></td>
        <td><?php echo $reportrow['COUNTRY']; ?></td>
        <td><?php echo $reportrow['INTERN_STATUS']; ?></td>
        <td><a align="center" href="main.php?id=<?php echo $reportrow['STU_ID']; ?>" class="btn btn-sm btn-success">More Details</a></td>
        </tr>
         <?php endwhile; ?>
          <?php endif;?>
     

 
        
        </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Export Report</button>
      </div>
    </div>
  </div>
</div></div>
              <?php $boardsql="SELECT APPLY.RECRUIT_NUM,COMPANY_NAME,ADDRESS,JOBGROUP,JOBNAME,CONTACT_PERSON,TELEPHONE,STU_FNAME,STU_ID,QUANTITY,MAX_QUANTITY
FROM IMIS.RECRUITMENT,IMIS.APPLY 
WHERE APPLY_STATUS='waiting' and IMIS.RECRUITMENT.RECRUIT_NUM=IMIS.APPLY.RECRUIT_NUM";
                    $boardresult=$db->query($boardsql);
                    $count=$db->affected_rows;
              ?>
 
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
         <ul class="nav nav-pills nav-stacked">
             <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
             <li><a href="#findjob" data-toggle="tab">Job Board<span class="badge"><?php echo $count;?></span></a></li>
             <li><a href="#postjob" data-toggle="tab">Post New Job</a></li>
          </ul>
      
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"   style="height:850px;background-color:#fff;">
        <div class="row placeholders">
           <div class="tab-content" id="tabcontent">
           <div class="tab-pane fade in active" id="overview">
           <h2>Reports</h2>
           
           <form method="post" action="libraries/report.php">
            <table class="table table-striped table-bordered">
               <tbody>
           <tr> 
             <td class="col-sm-12 col-md-2"><b>Gender</b></td>
            <td class="col-sm-12 col-md-2"><b>Student Status</b></th>
            <td class="col-sm-12 col-md-2"><b>Citizenship</b></td>
            <td class="col-sm-12 col-md-2"><b>Country</b></td>
            </tr>
         
                <tr>
                  <td><div align="center"><select class="form-control" id="gender" name="gender" style="width:45%;"><option disabled selected value>
								&nbsp&nbsp&nbsp---ALL--- </option>
								<option>Male</option><option>Female</option>
								</select></div></td>
								  <td><div align="center"><select class="form-control" id="interstatus" name="interstatus" style="width:45%;"><option disabled selected value>
								&nbsp&nbsp&nbsp---ALL--- </option>
								<option>Hired</option><option>Available</option>
								</select></div></td>
                
                 
                  <td>
								<div align="center"><select class="form-control" id="immstatus" name="immstatus" style="width:65%;"><option disabled selected value>
								&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-----ALL----- </option>
								<option>International</option><option>Permanent Resident/Citizen</option>
								</select></div></td>
								 <td><div align="center"><select  class="form-control" name="country" style="width:50%;"><?php include 'country.php' ?></select></div></td>
                 
                   </tr>
                  <tr>
                  <td><b>Degree Type:</b>
                  </td>
                  <td><b>Register Year</b></td>
                  <td><b>Major</b></td>
                   <td><b>GPA</b></td>
                   </tr>
                       <tr>
                       
                  <td><label> <input type="radio" name="degreetype" id="Undergraduate"
									value="Undergraduate"> Undergraduate&nbsp
								</label> <label> <input type="radio" name="degreetype"
									id="graduate" value="graduate" checked> Graduate
								</label>
                  </td>
                  <td><div align="center"><select id="year" align="center" class="form-control" name="year" style="width:50%;">
										<option disabled selected value> ---Select Year--- </option>
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
										<option>2013</option>
										<option>2014</option>
										<option>2015</option>
										<option>2016</option>
									</select></div></td>
                  <td><div align="center"><label class="number-inline"><input type="text" class="form-control" name="major" style="width:50%;"></label></div></td>
                   <td><div><input type="number"  name="gpa1" step="0.1" style="width:25%;border:groove;"><b>&nbspto&nbsp</b>
                   <input type="number"  name="gpa2" step="0.1" style="width:25%;border:groove;">
                   </div></td>
                   </tr>
            </table>
            <input  type="submit" class="btn btn-success" type="button" value="Submit">
            </form>
  
            </div>
            
            

            
            
            <!-- Overview -->
               <div class="tab-pane fade in" id="findjob">
              <table class="table table-bordered">
              <thead><tr><th>Company</th><th>Address</th><th>Job Group</th><th>Job Position</th>
              <th>Contact Person</th><th>Phone</th><th>Applicants Name</th><th>Stu Number</th><th>Permit</th></tr></thead>
              <tbody>
    
                 <?php while($boardrow=$boardresult->fetch_assoc()):?>
                 <?php $count++;?>
                  <tr>
                <td><?php echo $boardrow['COMPANY_NAME']; ?> </td>
                <td><?php echo $boardrow['ADDRESS']; ?> </td>
                <td><?php echo $boardrow['JOBGROUP']; ?> </td>
                 <td><?php echo $boardrow['JOBNAME']; ?> </td>
                  <td><?php echo $boardrow['CONTACT_PERSON']; ?> </td>
                   <td><?php echo $boardrow['TELEPHONE']; ?> </td>
                    <td><?php echo $boardrow['STU_FNAME']; ?> </td>
                     <td><a href="main.php?id=<?php echo $boardrow['STU_ID']; ?>"><?php echo $boardrow['STU_ID']; ?></a></td>
                    <td> 
                     <?php if($boardrow['QUANTITY']<$boardrow['MAX_QUANTITY']): ?>
                     <a href="libraries/permit.php?id=<?php echo $boardrow['STU_ID'] ?>&recruitnum=<?php echo $boardrow['RECRUIT_NUM']; ?>" class="btn btn-primary btn-sm" role="button">Permit</a>
		                <?php else: ?>   
		            <button type="button" class="btn btn-sm btn-danger" disabled="disabled">Full</button>
                    <?php endif ?>
                     	</td>
                 </tr>
                <?php  endwhile; ?>
            </tbody>
              </table>
               </div>
            <!-- find job -->
                <div class="tab-pane fade in" id="postjob">
                <form method="post" class="form" action="libraries/postjob.php">
                <div class="row">
                <div class="col-sm-4">
                <div class="form-group">
                <b>Company&nbsp</b>
                <input type="text" class="form-control" name="addcompany" id="addcompany">
               </div>
               <hr></hr>
               <div class="form-group">
               <b>City</b>
               <input type="text" class="form-control" name="addcity" id="addcity" >
               </div>
               <hr></hr>
               <div class="form-group">
               <b>Address</b>
               <input type="text" class="form-control" name="addaddress" id="address" >
               </div>
                <hr></hr>
               <div class="form-group">
                <b>Contact Person</b>
               <input type="text" class="form-control" name="addmanager" id="addmanager" >
               </div>
              <hr></hr>
               <div class="form-group">
                <b>Telephone</b>
               <input type="number" class="form-control" name="addphone" id="addphone" >
               </div>
                <hr></hr>
               <div class="form-group">
                <b>Email</b>
               <input type="email" class="form-control" name="addemail" id="addemail" >
               </div>
                <hr></hr>
               <div class="form-group">
                <b>Website</b>
               <input type="text" class="form-control" name="addwebsite" id="addwebsite" >
               </div>
               </div>
               <!-- left side -->
               
               <div class="col-sm-2"></div>
               
                 <div class="form-group col-sm-5">
                 <label for="response">Job Description</label>
                 <textarea class="form-control" rows="4" name="addresponse" id="addresponse"></textarea>
                 <hr class="divider"></hr>
                 <label for="requirement">Job Requirements</label>
                 <textarea class="form-control" rows="5" name="addrequirement" id="addrequirement"></textarea>
                <hr></hr>
               <div class="form-group">
                <b>Job Position</b>
               <input type="text" class="form-control" name="addposition" id="addposition" >
               </div>
                 <hr></hr>
               <div class="form-group">
                <b>Job Group</b>
               <select id="groups" class="form-control" name="addgroup" id="addgroup">
  <option value="Web Development">Web Development</option>
  <option value="Mobile Development">Mobile Development</option>
  <option value="System Development">System Development</option>
  <option value="Technical Support">Technical Support</option>
  <option value="Networking">Networking</option>
  <option value="Data Analysis">Data Analysis</option>
  <option value="Testing">Testing</option>
  <option value="Security">Security</option>
  <option value="Data Management">Data Management</option>
  <option value="Other">Other</option>
</select>
               </div>
                    <hr></hr>
               <div class="form-group">
                <b>Job Salary</b>
               <input type="number" class="form-control" name="addsalary" id="addsalary" >
               </div>
                    <hr></hr>
               <div class="form-group">
                <b>Quantity</b>
               <input type="number" class="form-control" name="addquantity" id="addquantity" >
               </div>
               
                 </div>
                 <!-- right side -->
            
                 
                 </div>
              <hr></hr>
                <input  type="submit" class="btn btn-primary btn-lg " type="button" value="Submit" style="width:55%;" >
               </form>
               </div>
               </div>
               <!-- row -->
            </div>
            <!-- tabcontent -->
            </div>
        </div>
        </div>
        <!-- row -->

	             
	             


            
            
	             
	             
	       
				<button class="cn-button" id="cn-button">Serach by</button>
				<div class="cn-wrapper" id="cn-wrapper">
					<ul>
						<li><span>About</span></a></li>
						<li><a href="libraries/quick.php?q=1"><span>ALL</span></a></li>
						<li><a href="libraries/quick.php?q=2"><span>START-UPS</span></a></li>
						<li><a href="libraries/quick.php?q=3"><span>Hired</span></a></li>
						<li><a href="libraries/quick.php?q=4"><span>Uwindsor</span></a></li>
						<li><a href="libraries/quick.php?q=5"><span>Not Hired</span></a></li>
						<li><a href="libraries/quick.php?q=6"><span>Hired</span></a></li>
					 </ul>

				<!-- End of Nav Structure -->
		

 </div>
 <!-- container -->
 
<?php session_unset();?>


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	
		<!-- Placed at the end of the document so the pages load faster -->
<!-- 	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script> -->
<!-- 	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/polyfills.js"></script>
		<script src="js/demo2.js"></script>

<?php $show_modal=$_GET['n']?>
<?php if($show_modal==='true'):?>
  <script> $('#myModal').modal('show');</script>
<?php endif;?>
</body>
</html>
