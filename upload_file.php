<?php
$fpath = "file/";
session_start();
header('Cache-control: private');

if(empty($_SESSION['username']))
{
	echo "<script> alert('plese login');</script>";	
	header('Location: login.php');
}
ob_start();

  if ($_FILES["file"]["error"] > 0)
  {
  		echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
  }
  else
  {
  		echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  		echo "Type: " . $_FILES["file"]["type"] . "<br />";
  		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
 
  	if (file_exists($fpath . $_FILES["file"]["name"]))
  	{
  		echo $_FILES["file"]["name"] . " already exists. ";
  	}
 	else
  	{
  		if(move_uploaded_file($_FILES["file"]["tmp_name"], $fpath . $_FILES["file"]["name"]))
  			echo "Stored in: " . $fpath . $_FILES["file"]["name"];
  		else
  			echo "upload faild".$_FILES[’file’][’error’]."<br>";
  	}
  }
  
  header('HTTP/1.1 301 Moved Permanently');
  header('Location:homepage.php');
 
?>

<?php
$GLOBALS['TEMPLATE']['content'] = ob_get_clean();
// display the page
include 'template-page.php';
?>
