<!DOCTYPE html>
<html lang="en"><head>
	<title> Giao diện hiển thị danh sách nhân sự </title>
	<meta charset="iso-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">  

	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body >

	 
  
 		<div class="container">
		<div class="text-xs-center">
			<h3 class="display-3"> Add New Product</h3>
			<hr>
		</div>
	</div>

 		 
 			<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>index.php/Admin_Controller/ManagerShoe_Controller/addProduct">
 				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label for="Image" class="col-sm-4 form-control-label text-xs-right ">Image</label>
		 					<div class="col-sm-8">
		 						<input name="Image" type="file" class="form-control" id="Image" placeholder="Upload Image">

		 					</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">						 
			 					<label for="Name" class="col-sm-4 form-control-label text-xs-right">Name</label>
			 					<div class="col-sm-8">
			 						<input name="Name" type="text" class="form-control" id="Name" placeholder="Product's name">
			 					</div> 					
						</div>
					</div>
 				</div>
				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label for="tuoi" class="col-sm-4 form-control-label text-xs-right">Category</label>
		 					<div class="col-sm-8">
		 						<input name="Category" type="text" class="form-control" id="Category" placeholder="Category">
		 					</div> 	
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="price" class="col-sm-4 form-control-label text-xs-right">Price</label>
		 					<div class="col-sm-8">
		 						<input name="price" type="number" class="form-control" id="price" placeholder="price">
		 					</div>

						</div>
					</div>			
 				</div>
 				 <div class="form-group row">
			 		<div class="col-sm-6">
						<div class="row">
						<label for="size" class="col-sm-4 form-control-label text-xs-right">Size</label>
	 					<div class="col-sm-8">
	 						<input  name="size" type="number" class="form-control" id="size" placeholder="size">
	 					</div>
						</div>
					</div>	
 				 </div>				 
 				<div class="form-group row text-xs-center">
 					<div class="col-sm-offset-2 col-sm-10">
 						<button type="submit" class="btn btn-outline-success">Lưu</button>
 					</div>
 				</div>
 			</form>
 	</div>
</body>
</html>