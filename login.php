<?php
// include shared code
//include 'lib/common.php';
//include 'lib/db.php';
//include 'lib/functions.php';
//include 'lib/User.php';

// start or continue the session
session_start();
header('Cache-control: private');

// perform login logic if login is set
if (isset($_GET['login']))
{
	// include shared code
	include 'lib/common.php';
	include 'lib/db.php';
	include 'lib/functions.php';
	include 'lib/User.php';


    if (isset($_POST['username']) && isset($_POST['password']))
    {
        // retrieve user record
        $user = (User::validateUsername($_POST['username'])) ?
            User::getByUsername($_POST['username']) : new User();

       // if ($user->userId && $user->password == sha1($_POST['password']))
        if ($user->userId && $user->password == $_POST['password'])
        {
            // everything checks out so store values in session to track the
            // user and redirect to main page
            $_SESSION['access'] = TRUE;
            $_SESSION['userId'] = $user->userId;
            $_SESSION['username'] = $user->username;
            $_SESSION['email'] = $user->emailAddr;
            $_SESSION['priv'] = $user->priv;
            header('Location: index.html');
        }
        else
        {
            // invalid user and/or password
            $_SESSION['access'] = FALSE;
            $_SESSION['username'] = null;
            header('Location: 401.html');
        } 
    }
    // missing credentials
    else
    {
        $_SESSION['access'] = FALSE;
        $_SESSION['username'] = null;
        header('Location: 401.html');
    }
    exit();
}

// perform logout logic if logout is set
// (clearing the session data effectively logsout the user)
else if (isset($_GET['logout']))
{
    if (isset($_COOKIE[session_name()]))
    {
        setcookie(session_name(), '', time() - 42000, '/');
    }

    $_SESSION = array();
    session_unset();
    session_destroy();
}

else if (isset($_GET['modify']))
{
// include shared code
include 'lib/common.php';
include 'lib/db.php';
include 'lib/functions.php';
include 'lib/User.php';

	 // validate password
    $password1 = (isset($_POST['newpassword']) && $_POST['newpassword']) ?
        sha1($_POST['newpassword']) : $user->password;
        
    $password2 = (isset($_POST['confirmpwd']) && $_POST['confirmpwd']) ?
        sha1($_POST['confirmpwd']) : $user->password;
    
    if($password1 == $password2){
    	// get username
	 	if(User::validateUsername($_POST['username']))
	 	{
	 		$user = User::getByUsername($_POST['username']);
	 		//if ($user->userId && $user->password == sha1($_POST['oldpassword']))
	 		if ($user->userId && $user->password == $_POST['oldpassword'])
    		{
         	// update the record if the input validates
    			if (User::validateEmailAddr($_POST['email']) && $password1)
    			{
        			$user->emailAddr = $_POST['email'];
        			$user->password = $password1;
        			$user->save();

        			$GLOBALS['TEMPLATE']['pwd-modify-tip'] = '<div class="pwd-modify-tip"><p>Information ' .
            		'in your record has been updated.</p></div>';
    			}
    			// there was invalid data
    			else
    			{
        			$GLOBALS['TEMPLATE']['pwd-modify-tip'] .= '<div class="pwd-modify-tip"><p>You provided some ' .
            		'invalid data.</p></div>';
        			//$GLOBALS['TEMPLATE']['pwd-modify-tip'] .= $form;
    			}
     		}
     		else
     		{
     				$GLOBALS['TEMPLATE']['pwd-modify-tip'] .= '<div class="pwd-modify-tip"><p>username or password erro,  ' .
            		'please input agin.</p></div>';
     		}
	 	}
     
    }
    else
     	$GLOBALS['TEMPLATE']['pwd-modify-tip'] = '<div class="pwd-modify-tip"><p>密码不一致 ' .
            		'请重新输入.</p></div>';

}
// generate login form
ob_start();
?>

<script type="text/ecmascript" src="js/sha1.js"></script>
<p>
<strong>
<br/><img src="img/abt.jpg" width=30px>登录说明<br/>
union power e 现在未开放所有权限，不提供用户注册服务，若有需求可以联系管理员获取帐号。
<br/>
本网站提供的所有技术信息属于union power e团队所有。在未经union power e团队书面许可前，
用户不得以任何手段透露相关信息。否则，union power e
具备上诉并请求赔偿的法律权利。
<br/>请仔细阅读上述条款，以免引起不必要的法律纠纷。
</strong>
</p>

<?php

	if(empty($_SESSION['username']))
	{
		echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."?login\" method=\"post\">";
	}
	else
	{
		echo "<form action=\"".htmlspecialchars($_SERVER['PHP_SELF'])."?logout\" method=\"post\">";
	}
	
?>
 
 <table>
  <tr>
   <td><label for="username">Username</label></td>
   <td><input type="text" name="username" id="username" <?php if(!empty($_SESSION['username'])) echo "disabled=\"disabled\"";?> /></td>
  </tr><tr>
   <td><label for="password">Password</label></td>
   <td><input type="password" name="password" id="password" <?php if(!empty($_SESSION['username'])) echo "disabled=\"disabled\"";?> /></td>
  </tr><tr>
   <td> </td>
   <?php
   	if(empty($_SESSION['username']))
   	{
   		echo "<td><input type='submit' value='Log In' onclick='pwd_sha1()'/></td>";
   	}
   	else
   	{
   		echo "<td><input type='submit' value='Log out'/></td>";
   	}
   ?>
  </tr>
 </table>
</form>

<p>
<strong>
<br/><img src="img/action_edit.gif">修改用户信息<br/>
你可以在下面的表单中修改你的账户密码以及邮箱地址。不需要修改的项可以不填写。
请仔细确认你的邮箱地址是否正确且可靠，一旦密码丢失后，这是唯一找回密码的途径。<br/>
请妥善保管好您的密码。
</strong>
</p>

<?php echo $GLOBALS['TEMPLATE']['pwd-modify-tip'];?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?modify"
 method="post">
 <table>
  <tr>
   <td><label for="username">Username</label></td>
   <td><input type="text" name="username" id="username"/></td>
  </tr><tr>
   <td><label for="oldpassword">OldPassword</label></td>
   <td><input type="password" name="oldpassword" id="oldpassword"/></td>
  </tr><tr>
   <td><label for="newpassword">NewPassword</label></td>
   <td><input type="password" name="newpassword" id="newpassword"/></td>
  </tr><tr>
  	<td><label for="confirm">Confirm</label></td>
   <td><input type="password" name="confirmpwd" id="confirmpwd"/></td>
  </tr><tr>
	<td><label for="email">Email</label></td>
   <td><input type="email" name="email" id="email"/></td>
  </tr><tr>
   <td> </td>
   <td><input type='submit' value='comit' onclick='pwdmodify_sha1()' /></td>
  
  </tr>
 </table>
</form>

<p>
<strong>
<br/>新用户注册<br/>
如果您未在本网站注册，那么可以通过以下的方式注册。注册时需要填写邮箱地址,用于确认注册信息。
</strong>
</p>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?register"
 method="post">
 <table>
  <tr>
   <td><label for="username">Username</label></td>
   <td><input type="text" name="newusername" id="newusername" disabled="disabled"/></td>
  </tr><tr>
   <td><label for="password">Password</label></td>
   <td><input type="password" name="new_password" id="new_password" disabled="disabled"/></td>
  </tr><tr>
  	<td><label for="confirm">Confirm</label></td>
   <td><input type="password" name="new_confirmpwd" id="new_confirmpwd" disabled="disabled"/></td>
  </tr><tr>
	<td><label for="email">Email</label></td>
   <td><input type="email" name="email" id="email" disabled="disabled"/></td>
  </tr><tr>
   <td> </td>
   <td><input type='submit' value='comit'/></td>
  </tr>
 </table>
</form>


<?php
$GLOBALS['TEMPLATE']['content'] .= ob_get_clean();
$GLOBALS['TEMPLATE']['title'] = "login";
$GLOBALS['TEMPLATE']['select'] = "login";
// display the page
include 'template-page.php';
?>
