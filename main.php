
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


 

    

      <link href="css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLES -->
      <link href="css/userstyle.css" rel="stylesheet" />



</head>
<!-- NAVBAR
================================================== -->
<?php include 'libraries/phpmain.php'?>
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
						<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
					</div>
				</div>
			</nav>

		</div>
	</div>
	<!-- User content start -->
	 <!-- USER PROFILE ROW STARTS-->
	       <div class="container" style="padding-top:70px;">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                                       
                    <div class="user-wrapper">
                        <img src="img/gougou.jpg" class="img-responsive" /> 
                    <div class="description">
                       <h4><?php echo $fname; ?></h4>
                        <h5> <strong><?php echo $email; ?> </strong></h5>
                        <p>
                            <?php echo $major;?>
                        </p>
                        <hr />
                        <a href="#" class="btn btn-danger btn-sm"> <i class="fa fa-user-plus" ></i> &nbsp;Profile + </a> 
                    </div>
                     </div>
                </div>
                <!-- right side mian bar -->
                <div class="col-md-9 col-sm-9  user-wrapper">
                    <div class="description">
                         <h3> <?php echo $fname; ?> Space : </h3>
                    <hr />
                    <ul id="userinfo" class="nav nav-tabs">
                    <li class="active"><a href="#student" data-toggle="tab">Information</a></li>
                    <li><a href="#skills" data-toggle="tab">Skills Ability</a></li>
                     <li><a href="#education" data-toggle="tab">Education</a></li>
                    <li><a href="#intership" data-toggle="tab">Intership<span class="badge"></span></a></li>
                    <li><a href="#jobboard" data-toggle="tab">Job Board<span class="badge"></span></a></li>
                     <li><a href="#message" data-toggle="tab">Message<span class="badge"></span></a></li>
                    </ul>
                    <div class="tab-content" id="tabcontent">
                    <div class="tab-pane fade in active" id="student">
                   <div class="table-responsive">
            <table class="table table-striped">
            <thead><tr><th>Individual Information</th></tr></thead>
              <tbody>
                <tr>
                  <td class="col-sm-4">Student ID</td>
                  <td class="col-sm-5"><?php echo $id; ?></td>
                  <td class="col-sm-3" style="padding-left"45px;"> </td>
                </tr>
                <tr>
                  <td>First Name</td>
                  <td>
                  <a href="#" id="name" data-type="text" data-placement="top" data-title="Edit"><?php echo $fname; ?></a>
                  
                  </td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                <tr>
                  <td>Middle Name</td>
                  <td><?php echo $mname; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                   <tr>
                  <td>Last Name</td>
                  <td><?php echo $lname; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                  <tr>
                  <td>Email</td>
                  <td><a  href="#" id="email" data-type="text" data-placement="right" data-title="Edit">
                  <?php echo $email; ?></a>
                   </td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                   <tr>
                  <td>Telphone</td>
                  <td><?php echo $phone; ?></td>
                 <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                  <tr>
                  <td>Gender</td>
                  <td><?php echo $gender; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                  <tr>
                  <td>Status</td>
                  <td><?php echo $status; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
              </tbody>
            </table>
          </div>
                    </div>
                    <div class="tab-pane fade in" id="skills">
                     <div class="table-responsive">
                         <table class="table table-striped">
            <thead><tr><th>Student Work Experience</th></tr></thead>
              <tbody>
                <tr>
                  <td class="col-sm-4">Company</td>
                  <td class="col-sm-5"><?php echo $company; ?></td>
                  <td class="col-sm-3" style="padding-left"45px;"> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                <tr>
                  <td>Company location</td>
                  <td><?php echo $location; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                <tr>
                  <td>Dates</td>
                  <td><?php echo $dates; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                   <tr>
                  <td>Position</td>
                  <td><?php echo $position; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                  <tr><th>Skills:</th>
                  <th></th><th></th>
                  </tr>

                <?php while($row=$skillresult->fetch_assoc()):?>
              
                  <tr>
                <td><?php echo $row['SKILL_NAME']; ?> </td>
                <td><?php  echo $row['SKILL_LEVEL']; ?> </td>
                <td><span class="glyphicon glyphicon-trash"></span></td>
                 </tr>
                <?php  endwhile; ?>
                  


              </tbody>
            </table>

                    </div>
                    </div>
                    <div class="tab-pane fade in" id="education">
                     <div class="table-responsive">
                         <table class="table table-striped">
            <thead><tr><th>Education Background</th></tr></thead>
              <tbody>
              
                <tr>
                  <td class="col-sm-4">Semester</td>
                  <td class="col-sm-5">Fall</td>
                  <td class="col-sm-3" style="padding-left"45px;"> <span class="glyphicon glyphicon-trash"></span></td>
                </tr>
                  <tr>
                  <td>Year</td>
                  <td><?php echo $year; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                  <tr>
                  <td>Degree Type</td>
                  <td><?php echo $degree; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                  <tr>
                  <td>Major</td>
                  <td><?php echo $major; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                  <tr>
                  <td>Degree GPA</td>
                  <td><?php echo $gpa; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                  <tr>
                  <td>Degrees University</td>
                  <td><?php echo $university; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                       <tr>
                  <td>Degrees University Location</td>
                  <td><?php echo $ulocation; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                   <tr>
                  <td>Certifications</td>
                  <td><?php echo $certifications; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
                 <tr>
                  <td>Certification Body</td>
                  <td><?php echo $certification_body; ?></td>
                  <td><span class="glyphicon glyphicon-trash"></span></td>
                  </tr>
   

              </tbody>
            </table>

                    </div>
                    </div>
                    <div class="tab-pane fade in" id="intership">
                      <div class="table-responsive">
                         <table class="table table-striped">
             <tr>
             <h4>&nbsp&nbspIntership Information</h4>
              
             </tr>
  
             
              <tbody>
                <?php $jcount=0;?>
                 <?php while($jobrow=$jobresult->fetch_assoc()):?>
                  <tr><td><button class="btn btn-success" type="button">Company&nbsp<span class="badge"><?php echo ++$jcount; ?></span></button></td><td></td><td></td><td></td></tr>
                  <tr>
                  <td><b>Company Name</b></td>
                  <td><?php echo $jobrow['COMPANY_NAME']; ?></td>
                  <td><b>Address</b></td>
                  <td><?php echo $jobrow['ADDRESS']; ?></td>
                  <tr>
                  <td><b>City</b></td>
                  <td><?php echo  $jobrow['CITY']; ?></td>
                  <td><b>Type</b></td>
                  <td><?php echo $jobrow['TYPE']; ?></td>
                  </tr>
                  <tr>
                  <td><b>Postal Code</b></td>
                  <td><?php  echo $jobrow['POSTALCODE']; ?></td>
                   <td><b>Country</b></td>
                  <td><?php  echo $jobrow['COUNTRY']; ?></td>
                  </tr>
                  <tr>
                  <td><b>Contact Person</b></td>
                  <td><?php echo  $jobrow['CONT_PR_FNAME']; ?></td>
                  <td><b>Telephone</b></td>
                  <td><?php echo $jobrow['TELEPHONE']; ?></td>
                  </tr>
                   <tr>
                   <td><b>Email</b></td>
                   <td><?php echo $jobrow['EMAIL']; ?></td>
                   <td><b>Company Website</b></td>
                   <td><?php echo $jobrow['COMPANY_WEB']; ?></td>
                   </tr>
                   <tr>
                   <td><b>Job Group</b></td>
                   <td><?php echo $jobrow['JGROUP']; ?></td>
                   <td><b>Job Position</b></td>
                   <td><?php echo $jobrow['JOB_NAME'];?></td>
                   </tr>
                  <tr>
                   <td><b>Salary</b></td>
                  <td><?php echo $jobrow['SALARY']; ?></td>
                  <td></td>
                  <td><a href="libraries/drop.php?id=<?php echo $id; ?>&intern=<?php echo $jobrow['INTERN_NUM']; ?>"
               class="btn btn-danger btn-sm btn-block" role="button">
              Quit</a></td>
                  </tr>
                  <?php endwhile; ?>                           
              </tbody>
            </table>

                    </div>
                    </div>
                <div class="tab-pane fade in" id="jobboard">
                <table class="table">
              
              <thead><tr><th>Company</th><th>Website</th><th>Contact</th><th>Phone</th>
              <th>Position</th><th>Group</th><th>Salary</th><th>Address</th><th></th>
              </tr></thead>
              <tbody>
              <?php  $fsql="select *
from IMIS.RECRUITMENT
WHERE QUANTITY< MAX_QUANTITY 
AND (COMPANY_NAME IN
				(select COMPANY_NAME FROM IMIS.RECRUITMENT 
                WHERE COMPANY_NAME NOT IN
				(SELECT COMPANY_NAME 
                FROM IMIS.INTERN_COMPANY WHERE STU_ID = $id)) )" ;?>
              <?php $fresult=$db->query($fsql);?>
              <?php while($frow=$fresult->fetch_assoc()): ?>
              <tr>
              <td><?php echo $frow['COMPANY_NAME']?></td>
              <td><a href="<?php echo $frow['WEBSITE']?>"><?php echo $frow['WEBSITE']?></a></td>
              <td><?php echo $frow['MANAGER']?></td>
              <td><?php echo $frow['TELEPHONE']?></td>
              <td><?php echo $frow['JOBNAME']?></td>
              <td><?php echo $frow['JOBGROUP']?></td>
              <td><?php echo $frow['SALARY']?></td>
              <td><a href="#" data-toggle="modal" data-target="#myModal"><?php echo $frow['ADDRESS']?></a></td>
          
              <td><a class="btn btn-sm btn-success"href="libraries/apply.php?id=<?php echo $id;?>&recruit=<?php echo $frow['RECRUIT_NUM']; ?>">Apply</a></td>
              </tr>
              <?php endwhile; ?>
              
              </tbody>
                </table>

                
                <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        
    <iframe width="550" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=squareone%20Toronto&key=AIzaSyDDpPvXsuXtfMpuHOAQwaBDKT4_hj6_Yms" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                </div><!-- End jobboard -->
                    </div>
                    <!-- end tab content -->
                    </div>
                 
                </div>
            </div>
           <!-- USER PROFILE ROW END-->
    </div>
    <!-- container end -->




	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	
		<!-- Placed at the end of the document so the pages load faster -->
<!-- 	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script> -->
<!-- 	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	 <!-- main.js --><script language="javascript" type="text/javascript">
    $(document).ready(function() {

    //toggle `popup` / `inline` mode

    $.fn.editable.defaults.mode = 'popup';    

     

    //make username editable

     $('#name').editable({
       type:'text',
       pk: <?php echo $id; ?>,
    	url: 'libraries/process.php',
        name:'STU_FNAME'	
        });
     $('#email').editable({
         type:'text',
         pk: <?php echo $id; ?>,
      	url: 'libraries/process.php',
          name:'EMAIL'	
          });

     

    //make status editable



});
    </script>
</body>
</html>
