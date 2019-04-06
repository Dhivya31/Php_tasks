<!DOCTYPE html>
<html>
<head>
	<title>Mailer using php</title>

	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="" >
		<div class="row">

			<h1>MAILER FORM</h1>
	     <form action="server.php" method="post" >
          <div class="form-group" style="width: 45%;">
          	<label for="name">First Name:</label>
          	<input type="text" name="fname" required="" class="form-control">
          	
          </div>
          <div class="form-group" style="width: 45%;">
          	<label for="age">Last Name :</label>
          	<input type="text" name="lname" required="" class="form-control">
          	
          </div>
          <div class="form-group" style="width: 45%;">
          	<label for="email">Email Id :</label>
          	<input type="text" name="email" required="" class="form-control">
          	
          </div>
         <div class=" form-group" style="width: 45%;">
                        <label for="name">Address :</label>
                          <textarea class="form-control" type="textarea"  name="address" placeholder="Your Message Here" maxlength="4000" rows="7" required="" cols="45">
                          </textarea>
                        </div>
          <div class="form-group" style="width: 45%;">
          	<label for="mobile">Mobile:</label>
          	<input type="text" required="" name="mobile" class="form-control">
          	
          </div>
          <!-- <label for="Send this file:">Send this file:</label>
            <input id="file" name="image" type="file" /> -->

          
          <input type="submit" class="btn btn-success" name ="submit" value="submit">


     </form>
 </div>
 </div>
</body>
</html>