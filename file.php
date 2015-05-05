<?php
/* file operation code,include rename,delet,and so on.
 *
 *
*/

$fpath = "file/";
session_start();
header('Cache-control: private');

if(empty($_SESSION['username']))
{
	echo "<script> alert('plese login');</script>";	
	header('Location: login.html');
}
ob_start();

/*upload file*/
if (isset($_GET['upload']))
{
	if ( $_FILES["file"]["size"] < 10000000)
	{
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
}
else
	echo "Invalid file"; 
}
	
if (isset($_GET['delete']))
{
	$file = $_GET['delete'];
	if (file_exists($file)){
		if(!unlink($_GET['delete']))
			//echo "<script  type=\"text/javascript\"> alert(\"delete ".$file."erro!\");</script>";
			echo "delete ".$file." erro!".$_FILES["file"]["error"];
	}
	else
		//echo "<script  type=\"text/javascript\"> alert(\"not ".$file." file!\");</script>";
		echo "not found ".$file;
	
}

if (isset($_GET['rename']))
{
	

}

if (isset($_GET['download']))
{
	$file_name = $_GET['download'];
	if (empty($file_name))
	{
    	echo'<script> alert("非法连接 !"); location.replace ("index.php") </script>'; exit();
	}

	if (!file_exists($fpath.$file_name))   {   //检查文件是否存在  
  		echo   "文件找不到";  
  		exit;    
  	}   else   {  
	$fileop = fopen($fpath.$file_name,"r"); // 打开文件
	// 输入文件标签
	Header("Content-type: application/octet-stream");
	Header("Accept-Ranges: bytes");
	Header("Accept-Length: ".filesize($fpath . $file_name));
	Header("Content-Disposition: attachment; filename=" . $file_name);
	// 输出文件内容
	echo fread($fileop,filesize($fpath . $file_name));
	fclose($fileop);
	exit();
	}

}

?>


<?php
$GLOBALS['return'] = ob_get_clean();
// display the page
include 'homepage.php';
?>
