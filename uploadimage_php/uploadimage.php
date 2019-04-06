<!DOCTYPE html>
<html>
<head>
	<title>Upload a file</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
</head>
<body>

	<!-- edit -->
		<?php
			include'connection.php';
			//fetch the record to be update
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$result = mysqli_query($conn, "SELECT * FROM user WHERE id=$id");
				while($record = mysqli_fetch_array($result))
				{
				$Id = $record['id'];
				$name = $record['name'];
				$age = $record['age'];
				$city =$record['city'];
			    /*$address = $record['address'];*/
				$filename = $record['image'];
				$image = "Files/".$record['image'];
		   }
	}?>


	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<form action="uploadimage.php" method="POST" enctype="multipart/form-data" id="form">
					<h2>Upload a file using php</h2>
					<div class="form-group">
						<input type="hidden" name="updateId" value="<?php if(isset($Id)){echo $Id;} else{ echo "";} ?>">
						<label for="name">Name:</label>
						<input type="text" name="name" id="name" class="form-control" value="<?php if(isset($name)){echo $name;} else{ echo "";} ?>">
					</div>
					<div class="form-group">
					     <label for="age">Age:</label>
							 <input type="text" name="age" id="age" class="form-control" value="<?php if(isset($age)){echo $age;} else{ echo "";} ?>">
					</div>
					<div class="form-group">
					     <label for="city">City</label>
							 <input type="text" name="city" id="city" class="form-control" value="<?php if(isset($city)){echo $city;} else{ echo "";} ?>">
					</div>
			
					<div class="form-group">
						<input type="hidden" name="updateImage" value="<?php if(isset($filename)){echo $filename;} else{ echo "";} ?>">
						<label for="fileselect">Select file to upload</label>
						<input type="file" name="file" id="fileselect">
						<img id="view" src=" <?php if(isset($image)){echo $image;} else{ echo "https://pngimage.net/wp-content/uploads/2018/05/default-png-1.png";} ?>" name="updateID"  alt="your image" width="100" height="100"/>
					</div>
					<input type="submit" class="btn btn-primary" name="submit" value="submit">
							
				</form>	
			</div>
			<div class="col-md-7">
				<table class="table table-bordered table-hover" width=50>
					<thead>
						<td>Id</td>
						<td>Name</td>
						<td>Age</td>
						<td>City</td>
<!-- 					<td>Address</td>-->						
 						<td>Image</td>
						<td>Action</td>
					</thead>
		
		<!-- insert -->
		
		<?php 
			include 'connection.php';
			if(isset($_POST['submit']))
			{
					$id=$_POST['updateId'];
					$name = $_POST['name'];
					$age = $_POST['age'];
					$city = $_POST['city'];

					/*$address =$_POST['address'];*/
					$image = $_FILES['file']['name'];
					
					$updateimage = $_POST['updateImage'];
					/*image upload starts*/
					$uploadDir = "Files/";
					$targetFile = $uploadDir.$_FILES['file']['name'];
					$FromDir = $_FILES['file']['tmp_name'];
					move_uploaded_file($FromDir, $targetFile);
					/*image upload ends*/


				$sql="";
				$message = "";
				if(isset($_POST['updateId']) && $_POST['updateId']!=null){
			    if($image==null) {
				  $sql="UPDATE user SET name = '$name' ,age ='$age',city ='$city' WHERE id ='$id'";
				   $message = "update";
				// print_r($sql);
				// exit();
				}else
				{
				  $sql="UPDATE user SET name = '$name', age='$age', city='$city', image='$image' WHERE id ='$id'";
				  $message = "update";
				}				
				}
				else
				{

			    $sql="INSERT INTO user (name, age, city, image) VALUES ('$name', '$age', '$city', '$image')";
				$message = "insert";
				}
				$result = mysqli_query($conn, $sql);
				if ($result) {
					echo $message . " successfully...";
				}
			   else{
					echo "data was not inserted".mysqli_error();
				}

			}
		
		?>
		
		<!-- select -->
		
		<?php
			include 'connection.php';
				$sql = "SELECT * from user";    
		        $result1 = mysqli_query($conn, $sql);

		      
		     while($row = mysqli_fetch_array($result1))
		            { 
		            	?>
						<tbody>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['age']; ?></td>
								<td><?php echo $row['city']; ?></td>
													

								<td>
									<img src="Files/<?php echo $row['image']; ?>" width="50" height="50"/></td>
								<td><a type="button" class="btn  btn-primary " href="uploadimage.php?id=<?php echo $row['id']; ?>">Edit</a>
								
								<a type="button" class="btn btn-success" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
								</td>
							 
							</tr>
					  <?php } ?>  
						</tbody>
					</table> 
				</div>
			</div>
		</div>

			<!-- preview -->
			
		<script type="text/javascript">
			function readURL(input) {

					if (input.files && input.files[0]) {
						console.log(input.files);
						console.log(input.files[0]);

					    var reader = new FileReader();

					    reader.onload = function(e) {
					      $('#view').attr('src', e.target.result);
					      console.log(e);
					    }

					    reader.readAsDataURL(input.files[0]);
					  }
					}

				$("#fileselect").change(function() {
				  readURL(this);
				});
		</script>  

</body>
</html>