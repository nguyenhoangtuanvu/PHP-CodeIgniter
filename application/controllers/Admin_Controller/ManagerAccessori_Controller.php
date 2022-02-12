<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ManagerAccessori_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('getData_model');
		$accessories = $this->getData_model->getAccessories();
		$accessories = array('metadata' => $accessories );

		$this->load->view('view_admin/Accessories/managerAccessori_view', $accessories, FALSE);
	}
	public function deleProduct($iddele)
	{
		$this->load->model('deleAndUpdData_model');
		$result = $this->deleAndUpdData_model->deleShoe($iddele);
		
		
		if ($result) {
			echo '<script language="javascript">alert("update success"); 
			window.location="../";</script>';
		}
		else{
			echo '<script language="javascript">alert("update false"); window.location="../";</script>';
		}
	}
	public function editProduct()
	{
		$target_dir = "assets/img/";
		$target_file = $target_dir . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["image"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		// if (file_exists($target_file)) {
		//     echo "Sorry, file already exists.";
		//     $uploadOk = 0;
		// }
		// Check file size
		if ($_FILES["image"]["size"] > 50000000) {
		    // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    // echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$image = basename($_FILES["image"]["name"]);
		if ($image) { //neu up anh moi 
			$image = base_url()."assets/img/".basename($_FILES["image"]["name"]);
		}
		else
		{ // ko up thi lay lai anh cu
			$image = $this->input->post('image_old');
		}
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$size = $this->input->post('size');
		$id = $this->input->post('id');

		$this->load->model('deleAndUpdData_model');
		$result = $this->deleAndUpdData_model->updateData($id, $image, $name, $price, $size);
		if ($result) {
			echo '<script language="javascript">alert("update success"); 
			window.location="../ManagerAccessori_Controller";</script>';
		}
		else{
			echo '<script language="javascript">alert("update false"); window.location="../ManagerAccessori_Controller";</script>';
		}
		
	}
	public function LoadFormAdd()
	{
		$this->load->view('view_admin/Accessories/AddProduct_view');
	}
	public function addProduct()
	{
		$image = $this->input->post('Image');

		$target_dir = "assets/img/";
		$target_file = $target_dir . basename($_FILES["Image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["Image"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		// if (file_exists($target_file)) {
		//   echo "Sorry, file already exists.";
		//   $uploadOk = 0;
		// }

		// Check file size
		if ($_FILES["Image"]["size"] > 50000000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)) {
		    // echo "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.";
		  } else {
		    // echo "Sorry, there was an error uploading your file.";
		  }
		}
		//echo "ten anh la".basename( $_FILES["avatar"]["name"]);
		$image = base_url()."assets/img/".basename( $_FILES["Image"]["name"]);
				/*upload code end*/


		$name = $this->input->post('Name');
		$category = $this->input->post('Category');
		$price = $this->input->post('price');
		$size = $this->input->post('size');


		$this->load->model('add_Model');
		$result = $this->add_Model->addAccessory($image,$name,$category,$price,$size);
		if ($result) {
			echo '<script language="javascript">alert("insert success"); 
			window.location="../ManagerAccessori_Controller";</script>';
		}
		else{
			echo '<script language="javascript">alert("insert false"); window.location="../ManagerAccessori_Controller";</script>';
		}	
	}

}

/* End of file ManagerAccessori_Controller.php */
/* Location: ./application/controllers/ManagerAccessori_Controller.php */