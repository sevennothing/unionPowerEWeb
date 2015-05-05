<?php
/* 管理程序端，目前只开放优先权为1的用户
 * $token 值未获取
 * 2013-09-24 by jun
*/

include 'lib/common.php';
include 'lib/db.php';
include 'lib/functions.php';
include 'lib/User.php';

session_start();
header('Cache-control: private');
if(empty($_SESSION['username']))
{
	echo "<script> alert('plese login');</script>";	
	header('Location: login.php');
}

if (isset($_GET['cast']))
{
	if (isset($_POST['casttext']))
	{
		file_put_contents(castfile,$_POST['casttext']);
	}

}

if (isset($_GET['active']))
{
//echo "<script  type=\"text/javascript\"> alert(\"select ".$_POST['select']."\");</script>";	
	
	if (isset($_POST['username']))
	{
		$user = User::getByUsername($_POST['username']);
		
		if($_POST['select'] == "active")
		{
			$user->setactive($_POST['token']);
			echo "<script  type=\"text/javascript\"> alert(\"select ".$_POST['select']."\");</script>";	
		}
		else
		{
			$token = $user->setInactive();
			echo "<script  type=\"text/javascript\"> alert(\"this token is ".$token."\");</script>";	
		}
	}
	else
		echo "<script> alert('plese input username');</script>";	
		
		
}

ob_start();
?>


<div id="add_cast_item">

<?php echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."?cast\" method=\"post\">";?>
<h4>在此处增加或修改公告内容</h4>
<textarea rows="10" cols="30" name="casttext">
<?php echo file_get_contents(castfile); fclose(castfile);?>
</textarea>
<br/>
<input type='submit' value='cast'/>
</form>

<?php echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."?active\" method=\"post\">";?>
<h4>设置用户的激活状态</h4>
user  <input type='text' name='username'/>
<select name='select'>
  <option selected>active</option>
  <option>Inactive</option>
</select>

<input type='submit' value='comit'/>
</form>


</div>

<?php

$GLOBALS['TEMPLATE']['content'] = ob_get_clean();
$GLOBALS['TEMPLATE']['title'] = "manager";
$GLOBALS['TEMPLATE']['select'] = "manager";
// display the page
include 'template-page.php';
?>


