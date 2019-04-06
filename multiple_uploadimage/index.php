
<?php
include 'db_connection.php';
			if(isset($_POST['upload']))
			{
				$id=$_POST['updateId'];
				$name = $_POST['name'];
                $updateImage = $_POST['updateImage'];


                $sql="";
				$message = "";
				$sql1 ="";
				$message1 ="";
				if(isset($_POST['updateId']) && $_POST['updateId']!=null){
			     
				  $sql="UPDATE multiple_data SET name = '$name' WHERE id ='$id'";
				   $message = "update";



				  $query="DELETE FROM multiple_id WHERE Image_id = '$id'";
				  $res = mysqli_query($conn, $query);
				
				 if ($res)
				 {
			        echo "Delete successfully...";
				}
				else
				{
					echo "data was not deleted".mysqli_error($conn);
				}
			   } 
				




				// print_r($sql);
				// exit();
				else
				{
				$sql="INSERT INTO multiple_data (name) VALUES ('$name')";
				$message ="insert";
			    }
				$result = mysqli_query($conn, $sql);
				$last_id = mysqli_insert_id($conn);
				if ($result) {
					echo $message . "successfully...";
				}
			   else{
					echo "data was not inserted".mysqli_error();
				}
				for ($i=0; $i < count($_FILES['file']['name']) ; $i++) { 
					// image upload starts //
					$uploadDir = "files/";
					$image = $_FILES['file']['name'][$i];
					$targetFile = $uploadDir.$image;
					$FromDir = $_FILES['file']['tmp_name'][$i];
					move_uploaded_file($FromDir, $targetFile);

					/*image upload ends*/
                     if(isset($_POST['updateId']) && $_POST['updateId']!=null)

                     {

                     $sql1="INSERT INTO multiple_id (image, image_id) VALUES ('$image', '$id')";
                      
                    $message1 ="update";
                      }

                     else{
					
					$sql1="INSERT INTO multiple_id (image, image_id) VALUES ('$image', '$last_id')";
                      
                    $message2 ="insert";
                    }
					$result1 = mysqli_query($conn, $sql1);
					if ($result1) {
						echo "Image inserted successfully...";
					}
				   else{
						echo "Image was not inserted".mysqli_error();
					}
				}
			}
					

             
         
?>



<!DOCTYPE html>
<html>
<head>
	<title>Multiple upload file</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
</head>
<body>


	<!-- edit -->
		<?php
			include'db_connection.php';
			//fetch the record to be update
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$result = mysqli_query($conn, "SELECT * FROM multiple_data WHERE id=$id");
				while($record = mysqli_fetch_array($result))
				{

				$Id = $record['id'];
				$name = $record['name'];
		   }
	}?>



	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<form action="index.php" method="POST" enctype="multipart/form-data" id="form">
					<h2>Multiple Upload</h2>
					<div class="form-group">
						
						<input type="hidden" name="updateId" value="<?php if(isset($Id)){echo $Id;} else{ echo "";} ?>">
						<label for="name">Name:</label>
						<input type="text" name="name" id="name" class="form-control" value="<?php if(isset($name)){echo $name;} else{ echo "";} ?>">
					</div>
					
					<div class="form-group">
						
						<input type="hidden" name="updateImage" value="<?php if(isset($sourcename)){echo $sourcename;} else{ echo "";} ?>">
						<label for="fileselect">Select file to upload</label>
						<input type="file" name="file[]" multiple="multiple" id="fileselect">

		 <?php
			include'db_connection.php';
			
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$result1 = mysqli_query($conn, "SELECT * FROM multiple_id WHERE image_id=$id");
				while($record = mysqli_fetch_array($result1))
				{

				$image = $record['image'];
				$image_id = $record['image_id'];
				$sourcename =$record['image'];
				$image = "files/".$record['image'];

		   ?>
					<img id="view" src=" <?php if(isset($image)){echo $image;} else{ echo "https://pngimage.net/wp-content/uploads/2018/05/default-png-1.png";} ?>"  name="updateId"   width="100" height="100"/>
					
						

				<?php } } ?>

					</div>
					<input type="submit" class="btn btn-primary" name ="upload" value="upload">
							
				</form>	
			</div>
			

				
		</div>
		<br><br>
		<br>
		<div class="col-md-7">
				<table class="table table-bordered table-hover" width=50>
					<thead>
						<td>Id</td>
						<td>Name</td>
						<td>Images</td>
						<td>Actions</td>
					</thead>


		<!-- select -->
		
		
				<tbody>
				<?php
						include 'db_connection.php';

			
				$sql2 = "SELECT * FROM multiple_data";    
		       
		        $result1 = mysqli_query( $conn, $sql2);
		         while($row = mysqli_fetch_array($result1))
		            { 
		            	?>
							<tr>
								
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['name']; ?></td>
							

								<td>

									<?php
									$id = $row['id'];

									$sql = "SELECT * FROM multiple_id WHERE image_id = $id";
   							 	  	
		       
		                             $result = mysqli_query( $conn, $sql);
		                             while($row1 = mysqli_fetch_array($result))
		                             {
									?>

									<img src="files/<?php echo $row1['image']; ?>" width="50" height="50"/>
									<?php } ?> 

									</td>
								
								<td>
									
                                <a type="button" class="btn btn-primary" href="index.php?id=<?php echo $row['id']; ?>">Edit</a>
								
								<a type="button" class="btn btn-success" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
								

							</td>
							
							</tr>
							
					  <?php } ?>  


						</tbody>
					</table> 
				</div>
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