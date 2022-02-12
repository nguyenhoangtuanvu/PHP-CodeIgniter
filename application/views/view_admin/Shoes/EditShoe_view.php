<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>them moi du lieu </title>
	<script type="text/javascript" src="<?= base_url() ?>/vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>/1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>/vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>/vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>/1.css">
</head>
<body>
        <nav class="navbar navbar-light bg-faded">
          <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
            &#9776;
          </button>
          <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <a class="navbar-brand" href="#">Backend slide</a>
            <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>/Do_edit">Sua slide <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>/slides">Them slide</a>
              </li>
              
            </ul>
          </div>
        </nav>
<div class="container">
	<div class="row">
		<div class="col-sm-6 push-sm-3">
		<h3 class=" text-xs-center"> Sửa slide</h3>
		<form action="<?php echo Base_url() ?>index.php/Admin_Controller/ManagerShoe_Controller/editProduct" method="post" enctype="multipart/form-data">
		<?php foreach ($metadata as $data): ?>
			<hr>
		<h2> Slide số </h2>
		<hr>		
				<fieldset class="form-group">
					<label for="formGroupExampleInput">Upload file</label>
					<img src="<?= $data['image'] ?>" alt="" width="40%">
					 <input name="image_old" type="hidden" class="form-control" id="button_text" value="<?= $data['image'] ?>" >
					 <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input name="image" class="form-control" type="file">
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput">name</label>
					<input name="name" type="text" class="form-control" id="name" 
					value="<?= $data['name'] ?>" 
					>
				</fieldset>
				<fieldset class="form-group">
					<label for="formGroupExampleInput">price</label>
					<input name="price" type="text" class="form-control" id="price" 
					value="<?= $data['price'] ?>" 
					>
				</fieldset>

				
				<fieldset class="form-group">
					<label for="formGroupExampleInput">size</label>
					<input name="size" type="text" class="form-control" id="size"
					value="<?= $data['size'] ?>">
				</fieldset>				
				 
				
				

		<?php endforeach ?>
				<fieldset class="form-group">
			 		<input type="submit" class="form-control" value="Save">
				</fieldset>
			</form>
		</div>
	</div>

</div>

	
</body>
</html>