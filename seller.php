<?php 
require 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	body{
		overflow-x:hidden;


	}
	.dialog{
		font-size:20px;
		font-family:cursive;
		font-weight:600;
		letter-spacing: 2px;
		color:green;
		margin-left: 500px;


	}
	.container1{
		background-color:#f5f2d0;
		display:flex;
		justify-content: : space-between;
		flex-direction:column;
	
		font-size:20px;
		letter-spacing: 5px;
	

	}
	.container1 input{
		width:90%;
			margin-top: 20px;
			border-radius:5px;
			border:none;
			margin-left: 60px;
			padding-left: 30px;
	}

	</style>
<body>
	<div class="dialog">
		<p> Hello Sellers!!!!<p>
			
			<p> We Deal in ...............</p>
			<ul style="display:flex; justify-content: space-between;margin-left: -430px;">
				<li> Vegetables</li>
				<li> Fruits</li>
				<li> Dairy Products</li>
				<li> Dry Fruits</li>
			</ul>
		</div>
	<div class="container1	">
		<form method="POST" action="upload.php">
			<input type="text" placeholder="Full Name" required name="name">
			<input type="email" placeholder="Email" required name="email">
			<input type="text" placeholder="Contact Number" required name="contact">
			<input type="text" placeholder="Address" required name="address">
			<input type="text" placeholder="city" required name="city">
			<input type="text" placeholder="What you want to sell..." required name="product">
			<input type="date" placeholder="Date of  Trading" required name="date">
			<input type="text" placeholder="Price/KG" required name="price">
			<input type="file" placeholder="Product Pic" required name="fileToUpload" id="fileToUpload">
			<input type="text" placeholder="Description" required name="Description">
			<input type="submit" value="Submit">
		</form>
	</div>


</body>
</html>