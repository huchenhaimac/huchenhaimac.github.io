
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
<link href="css/bootstrap.min.css" rel="stylesheet">


<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">
<!-- datepicker -->
<link rel="stylesheet"  href="datepicker.css">
<script type="text/javascript" src="bootstrap-datepicker.js"></script>

</head>
<!-- NAVBAR
================================================== -->
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
							<li><a href="#about">About MAC Company</a></li>
							<li><a href="#contact">Contact</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li class="dropdown-header">Nav header</li>
									<li><a href="#">Separated link</a></li>
									<li><a href="#">One more separated link</a></li>
								</ul></li>
							<li><a href="#about"><span class="glyphicon glyphicon-user">Login<span></a></li>
							<li class="active"><a href="#about"><span
									class="glyphicon glyphicon-star">Sign up</span></a></li>
						</ul>
					</div>
				</div>
			</nav>

		</div>
	</div>
	<!-- Form table input user information -->
	<div class="container" style="margin-top: 150px; width: 70%">
		<form method="post" action="libraries/add.php">
			<div class="form-group">
				<label for="StudentNo">Student.No</label> <input type="text"
					class="form-control" id="stdno" name="stdno" placeholder="Student Number" maxlength="9"/>
			</div>
			<div class="form-group">
				<label for="email">Email</label> <input type="email"
					class="form-control" id="email" name="email" placeholder="Email Address">
			</div>
			<div class="form-group">
				<label for="pass">Password</label> <input type="password"
					class="form-control" id="pwd" name="pwd" placeholder="Password">
			</div>
			<h3>Student Information:</h3>
			<hr>
			<div class="form-group">
				<table class="table-borderless" style="margin-top: 20px;">
					<tr>
						<td style="width: 265px;"><label for="fname">First Name</label>
							<input type="text" id="fname" name="fname" class="form-control"
							placeholder="Student First Name"></td>
						<td style="padding-left: 30px; width: 250px;"><label for="mname">Middle
								Name(Optional)</label> <input type="text" id="mname"
							class="form-control" name="mname" placeholder="Student Middle Name"></td>
						<td style="padding-left: 30px; width: 280px;"><label for="lname">Last
								Name</label> <input type="text" name="lname" id="lname" class="form-control"
							placeholder="Student Last Name"></td>
					</tr>
					<tr>
						<td style="padding-top: 25px;">
							<div style="width: 250px;">
								<label for="phone">Phone Number</label> <input type="text"
									id="phone" name="phone" class="form-control" placeholder="XXX-XXX-XXXX" maxlength="10">
								<div>
						
						</td>
						<td style="padding-top: 15px; padding-left: 45px;"><b>Gender:</b>
							<div style="padding-top: 8px;">
								<label class="radio-inline"> <input type="radio" id="male"
									name="gender" value="male" checked>Male
								</label> <label class="radio-inline"> <input type="radio"
									id="female" name="gender" value="female">Female
								</label>
								<div></td>
						<td style="padding-left: 35px; padding-top: 10px;"><label
							for="country">Country</label> <select id="country"
							class="form-control" name="stucountry" style="width: 70%;">
								<?php include 'country.php'?>
						</select></td>
					</tr>
					<tr>
						<td style="padding-top: 17px;"><b>Immigrate Stutas:</b>
							<div style="padding-top: 7px;">
								<label> <input type="radio" name="immstatus"
									id="international" value="International" checked> International
								</label> <label> <input type="radio" name="immstatus"
									id="international" value="Permanent Resident/Citizen">
									Permanent Resident/Citizen
								</label>
							</div></td>
						<td style="padding-left: 25px; padding-top: 17px;">
							<div class="col-lg-12 well" align="center">
								<div class="col-md-7" style="margin-left: -30px;">
									<b>Semester :</b>
									<div>
										<label class="radio-inline"> <input type="radio"
											name="semester" id="semester" value="FALL" checked> FALL
										</label> <label class="radio-inline"> <input type="radio"
											name="semester" id="winter" value="WINTER">WINTER
										</label>
									</div>
								</div>
								<div class="col-md-6" style="padding-top: -7px;">
									<select id="year" class="form-control" name="year"><span>Year:</span>
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
										<option>2013</option>
										<option>2014</option>
										<option selected="selected">2015</option>
										<option>2016</option>
									</select>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="container-fluid">
								<h3>Education:</h3>
								<hr></hr>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="university">Degrees University</label> <input
									type="text" class="form-control" name="university"
									id="university" placeholder="University Name">
							</div>
						</td>
						<td style="padding-left: 30px; width: 250px;">
							<div class="form-group">
								<label for="major">Major</label> <input type="text"
									class="form-control" name="major" id="university">
							</div>
						</td>
						<td align="center">
							<div class="form-group">
								<label for="gpa">Degree GPA</label> <input type="text"
									class="form-control" name="gpa" id="gpa" style="width: 30%"
									placeholder="e.g. 3.0">
							</div>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 17px;"><b>Degree Type:</b>
							<div class="form-group" style="padding-top: 7px;">
								<label> <input type="radio" name="degreetype" id="Undergraduate"
									value="Undergraduate"> Undergraduate&nbsp
								</label> <label> <input type="radio" name="degreetype"
									id="graduate" value="graduate" checked> Graduate
								</label>
							</div></td>
						<td align="center">
							<div class="form-group">
								<label for="cft">Certifications-Titles</label> <input
									type="text" class="form-control" name="cft" id="cft"
									style="width: 50%" placeholder="e.g. CCNA">
							</div>
						</td>
						<td align="center">
							<div class="form-group">
								<label for="cft">Certifications-Body</label> <input type="text"
									class="form-control" name="ctb" id="ctb" style="width: 50%"
									placeholder="e.g. CISCO">
							</div>
						</td>
					</tr>
					<tr>

						<td style="padding-top: 10px;"><label for="ucountry">Degrees
								University Location</label> <select id="ucountry"
							class="form-control" name="ucountry" style="width: 70%;">
								<?php include 'country.php'?>
						</select></td>
					</tr>
						<!-- Work Experience -->
					<tr>
						<td>
							<div class="container-fluid">
								<h3>Work Experience:</h3>
								<hr></hr>
							</div>
						</td>
					</tr>
					<tr>
						<td><div class="form-group">
								<div class="col-md-6">
									<label for="company">Company</label> <input type="text"
										name="wecompany" id="wecompany" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="wecountry">Location</label> <select
										id="wecountry" class="form-control" name="wecountry">
								<?php include 'country.php'?>
								</div>
							</div></td>
						    <td>
						    <div class="col-sm-6" style="margin-left:30px;">
                            <label for"cdate">Dates&nbsp&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-calendar"></span></label>
                            <input style="display:inline;"type="date" id="wedate" name="wedate"></div>
						   </td>
						   <td style="padding-right:20px;">
						   <div class="col-sm-6">
						   <label for="position">Position</label>
						   <input type="text" class="form-control" id="weposition" name="weposition" placeholder="e.g.Unit test">				   
						   </div>
						   <div class="col-sm-6" style="margin-top:25px;">
						  <button type="button" class="btn btn-success">Add More</button>
						   </div>
						   </td>
						   </div>
					</tr>
				</table>
                 <h3>Skill abilities:	<button type="button" id="addskill" class="btn btn-success"
								style="padding-left: 10px;">Add skills</button>
								<button type="button" id="remove" class="btn btn-danger"
								style="padding-left: 10px;">Remove skills</button>
							</h3>

                 <div id="skillwrap" class="col-sm-8">
								
								<hr></hr>
					<!-- Technical skills -->
                            
							<div class="col-sm-1">
							<span class="glyphicon glyphicon-fire"></span>
							</div>
							<div class="col-sm-4"><?php include 'skill.php'?></div>
							<div class="col-sm-6"><?php include 'level.php' ?></div>
		
						
						
	 					</div>
	              <span id="additional"></span>
		
	
				
				<div class="col-sm-12">
				<h3>Intership Status</h3>
				<hr></hr>
				</div>
				<!-- About intership -->
				<div class="col-sm-6">
				<label for="available">
				<input type="radio" name="interstatus" id="available" value="Available" checked="checked">
				Available - Student who has no intership yet</label>
				</div>
				<div class="col-sm-6">
				<label for="available">
				<input type="radio" name="interstatus" id="hired" value="Hired">
				Hired - Student who have intership</label>
			    </div>
			    
			    <!-- Company information -->
			    <table id="interinfo" class="table-borderless" style="margin-top: 20px;">
			    <tr>
			    <div class="col-sm-12">
			    <h3>Intership Information:</h3>
			    <hr></hr>
			    </div>
			    </tr>
			    <tr >
			    <td class="col-sm-4">
			    <label for="types">Types of Internships</label>
			    <?php include 'types.php' ?>
			    </td>
			    <td class="col-sm-4">
			    <div>
			    <label for="icompany">Company Name:</label>
			    <input type="text" class="form-control" name="icompany" id="icompany">
			    </div>
			    </td>
			    <td class="col-sm-4">
			     <div>
			    <label for="address">Address :</label>
			    <input type="text" class="form-control" name="address" id="address">	
			    </div>
			    </td>
			    </tr>
			    <tr>
			     <td class="col-sm-4">
			    <div>
			    <label for="city">City :</label>
			    <input type="text" class="form-control" name="city" id="city">	
			    </div>
			    </td>
			    <td class="col-sm-4">
			    <div>
			    <label for="postcode">Postcode :</label>
			    <input type="text" class="form-control" name="postcode" id="postcode">	
			    </div>
			    </td>
			    <td class="col-sm-4" style="padding-top:24px;">
			    <div>
			    <select class="form-control" name="icountry" id="icountry">
			    <?php include 'country.php' ?>
			    </div>
			    </td>
			    </tr>
			    <tr>
			     <td class="col-sm-4">
			     <div>
			    <label for="cfname">First Name :</label>
			    <input type="text" class="form-control" name="cfname" id="cfname">	
			    </div>
			    </td>
			    <td class="col-sm-4">
			     <div>
			    <label for="clname">Last Name :</label>
			    <input type="text" class="form-control" name="clname" id="clname">	
			    </div>
			    </td>
			     <td class="col-sm-4">
			     <div>
			    <label for="cphone">Telephone :</label>
			    <input type="text" class="form-control" name="cphone" id="cphone" placeholder="XXX-XXX-XXXX" maxlength="10">	
			    </div>
			    </td>
			    </tr>
			    <tr>
			     <td class="col-sm-4">
			     <div>
			    <label for="iemail">Email :</label>
			    <input type="email" class="form-control" name="iemail" id="iemail">	
			    </div>
			    </td>
			     <td class="col-sm-4">
			     <div>
			    <label for="cweb">Company Website :</label>
			    <input type="text" class="form-control" name="cweb" id="cweb">	
			    </div>
			    </td>
			    </tr>
			    <tr>
			     <td class="col-sm-4">
			    <label for="notes">Notes</label>
                <textarea class="form-control" name="notes" id="notes" rows="3"></textarea>
			    </td>
			    </tr>
			    </table>
			    <div id="tjob" class="col-sm-12">
			    <h3>Jobs:</h3>
			    <hr></hr>
			    </div>
			    <div id="jobcontainer" class="col-sm-12">
			    <div class="col-sm-3">
			    <label for="position">Position:</label>
			    <input type="text" class="form-control" name="position" id="position">
			    </div>
			     <div class="col-sm-3">
			    <label for="response">Responsibilities</label>
			    <input type="text" class="form-control" name="response" id="response">
			    </div>
			     <div class="col-sm-2">
			    <label for="salary">Salary</label>
			    <input type="number" class="form-control" name="salary" id="salary" step="500">
			    </div>
			    <div class="col-sm-4">
			    <label for="groups">Job Groups</label>
			    <?php include 'groups.php' ?>
			    </div>
			    
                </div>
             <div align="center" class="col-sm-12">   
	        <input type="submit" value="Submit" class="btn btn-primary btn-lg btn-block" style="margin-top:60px; width:65%">
	        </div>
               
		</form>
		
	</div>







	<!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">

    var total;

    // To auto limit based on the number of options
    // total = $("#nativelangdrop").find("option").length - 1;

    // Hard code a limit
    total = 5;


    $("#addskill").on("click", function() {
        var ctr = $("#additional").find(".extra").length;
        if (ctr < total) {
            var $ddl = $("#skillwrap").clone();
            $ddl.attr("id", "ddl" + ctr);
            $ddl.addClass("extra");
            $("#additional").append($ddl);
        }
    });
    $("#remove").click(function () {
    	var ctr = $("#additional").find(".extra").length;
    	if(ctr==0){
              alert("No more skills to remove");
              return false;
           }   
            
    	ctr--;
    			
            $("#ddl" + ctr).remove();
    			
         });
       
$(document).ready(function(){
	 $('#interinfo').hide();
	 $('#jobcontainer').hide();
	 $('#tjob').hide();
    $("#available").click(function(){
        $('#interinfo').hide(2000);
        $('#tjob').hide(2200);
        $('#jobcontainer').hide(1500);
    });
    $("#hired").click(function(){
        $('#interinfo').fadeIn(3000);
        $('#tjob').fadeIn(3200);
        $('#jobcontainer').fadeIn(3200);
    });
});



</script>
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

</body>
</html>
