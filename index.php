<!DOCTYPE html>
<html>
<head>
	<title>Form Handling Lab 1</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<div class="container">
  <h1></h1>
  <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
    <div class="alert alert-danger display-error" style="display: none">
    </div>
    <div class="form-group">
      <div class="controls">
      	<p> First Name </p>
        <input type="text" id="name" class="form-control" placeholder="First Name">
      </div>
    </div>
    <div class="form-group">
      <div class="controls">
      	<p>Last Name</p>
        <input type="email" class="email form-control" id="email" placeholder="Last Name" >
      </div>
    </div>
    <div class="form-group">
      <div class="controls">
      	<p>Middle Name</p>
        <input type="text" id="msg_subject" class="form-control" placeholder="Middle Name" >
      </div>
      <br>
      <div class="controls">
      	<p>Address</p>
        <input type="text" id="name" class="form-control" placeholder="Address">
      </div>
      <br>
      <div>
      Birthdate:
  <input type="date" name="bday">
  <input type="submit" value="Send">
  	   </div>
      <br>
      <div class="controls">
      	<p>Place of Birth</p>
        <input type="text" id="name" class="form-control" placeholder="Place of Birth">
      </div>
      <div>
      	<br>
      	Gender
      	<br>
      <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">LGBTQ</label>
  </div>
      <br>
      <div class="controls">
      	<p>Place of Birth</p>
        <input type="text" id="name" class="form-control" placeholder="Guardian">
      </div>
      <br>
      <div class="controls">
      	<p>Contact Number</p>
        <input type="text" id="name" class="form-control" placeholder="Contact Number">
      </div>
      <br>
      <div class="controls">
        <p>Civil Status</p>
        <input type="text" id="name" class="form-control" placeholder="Civil Status">
      </div>
      <div>
      	<br>
      <label for="Year Level">Year Level:</label>
<select id="Year" name="Year Levels" form="Year Level form">
  <option value="First Year">First Year</option>
  <option value="Second Year">Second Year</option>
  <option value="Third Year">Third Year</option>
  <option value="Fourth Year">Fourth Year</option>
</select>
	</div>
    </div>
  
  <div class="controls">
  	<p>School Year</p>
        <input type="text" id="name" class="form-control" placeholder="School Year">
      </div>
      <br>
      <label for="Course">Course:</label>
<select id="Year" name="Year Levels" form="Year Level form">
  <option value="First Year">BSIT</option>
  <option value="Second Year">BSCoE</option>
  <option value="Third Year">BSTCM</option>
</select>
	<br><br><br>
	<button type="submit" form="nameform" value="Submit">Submit</button>
  </form>
  <br><br><br>

</div>


</body>


</html>