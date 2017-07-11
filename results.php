<!DOCTYPE html>
<html>
	<head>
		<title> SSE - Results </title>
		<style type="text/css">
			.results{
				margin-left: 12%;
				margin-right: 12%;
				margin-top: 10px;
			}
		</style>
	</head>

	
	<body bgcolor="#F5DEB3">
		<form action="results.php" method ="get">
			<span>Write your keyword</span>
			<input type="text" name="user_keyword" size="120">
			<input type="submit" name="reult" value="Search Now">
			<a href ="search.html">Go Back</a>
		</form>

<?php
$con = mysqli_connect("localhost","root","","sse") or die("Connection was not established");

	if(isset($_GET['searchBTn'])){

		$get_value = $_GET['user_query'];

		if($get_value==''){

			echo"<script> alert('please use a valid search term') </script>";
			echo"<script> window.open('search.html','_self')</script>";
			echo"<center> <b> please go back, and write somthing in the search box!</b></center>";
			exit();
		}

		$result_query = "select * from sites where s_keyword like '%$get_value%'";

		$run_result = mysqli_query($con, $result_query);

		if(mysqli_num_rows($run_result)< 1 ){
			echo"<script> alert('Sorry We cant find a result for you ,we are redirecting you to GOOGLE to complete your search,hope to see you again') </script>";
			echo"<script> window.open('https://www.google.com.eg/#q=$get_value','_blank')</script>";

			echo "<center><p> Opps! .. we cant find any result for you but you can <a href ='https://www.google.com.eg/search?q=$get_value' align='center' target=_blank >google it </a></p></center>" ;
		}
		
		
///////
		/*
$row=mysqli_fetch_array($run_result);
echo"<pre>";
echo$row;
print_r($row);
echo"</pre>";
//////
echo "<p>$get_value</p>";
*/
		
		while($row=mysqli_fetch_array($run_result)){
		
			$site_title = $row['s_title'];
			$site_link = $row['s_link'];
			$site_desc = $row['s_desc'];
			$site_img = $row['s_img'];

			echo "<div class='results'>
					<h2> $site_title </h2>
					<a href ='$site_link' target ='_blank'> $site_link </a>
					<p align = 'justify'> $site_desc </p>
					<img src='images/$site_img' width='100' height='100'/>
					</div>";


		} 

	}

	

?>

		<div class="results">
					
		</div>
	</body>






</html>
<?php
	$con = mysqli_connect("localhost","root","","sse") or die("Connection was not established");





?>