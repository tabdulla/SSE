<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inserting data To SSE</title>
	</head>
	<body>
		<form action="insert.php" method="post" enctype="multipart/form-data">
			<table bgcolor="orange" width="500" height="500" border = "2" cellpadding="2" align="center">
				<tr>
					<td colspan="2"> <h2 align="center">Inserting New Website form</h2> </td>
				</tr>

				<tr> 
					<td align="right"> Site Title:</td>
					<td> <input type="text" name="site_title" /></td>
				</tr>

				<tr>
					<td align="right"> Site Link:</td>
					<td> <input type="text" name="site_link"/></td>
				</tr>

				<tr>
					<td align="right"> Site Keywords:</td>
					<td> <input type="text" name="site_keyword"/></td>
				</tr>

				<tr>
					<td align="right"> Site Description:</td>
					<td> <textarea cols="35" rows="10" name="site_desc"></textarea>
				</tr>

				<tr>
					<td align="right"> Site Image:</td>
					<td> <input type="file" name="site_img"/></td>
				</tr>

				<tr>
					<td align="center" colspan="5"> <input type="submit" name="submitBtn" value="Add Site" width="500" /></td>
				</tr>


			</table>
		</form>
	</body>
</html>
<?php  

#echo"<script> window.open('home.php','_self')</script>";
$con = mysqli_connect("localhost","root","","sse") or die("Connection was not established");
if(isset($_POST['submitBtn'])){
	 $site_title   = $_POST ['site_title']       	;
	 $site_desc    = $_POST ['site_desc']        	;
	 $site_link    = $_POST ['site_link']  	        ;
	 $site_keyword = $_POST ['site_keyword']		;
	 $site_img     = $_FILES['site_img']['name']    ;
	 $site_img_temp= $_FILES['site_img']['tmp_name'];


		if($site_title=='' OR $site_link=='' OR $site_keyword=='' OR $site_desc==''){
			echo "<script> alert('please fill all the fields')</script>";
			exit();
		}
		else{

			$insert_query = "insert into sites (s_title,s_link,s_keyword,s_desc,s_img) values ('$site_title','$site_link','$site_keyword','$site_desc','$site_img')";

			move_uploaded_file($site_img_temp,"images/{$site_img}");

			if(mysqli_query($con,$insert_query)){
				echo "<script> alert ('data inserted to database ')</script>";
			}
		}


}






?>