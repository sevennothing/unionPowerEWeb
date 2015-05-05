<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>      
	<title>
	<?php echo 'UPE-'.$GLOBALS['TEMPLATE']['title'];?>
	</title>
	<?php
		if($GLOBALS['TEMPLATE']['select']=="task")
		echo "<script charset=\"utf-8\" type=\"text/javascript\" src=\"js/score.js\"></script>";
	?>
	<link rel="stylesheet" type="text/css" href="themes/main.css" /> 
	<style type="text/css">
		html, body { background-color: transparent; }
		*{color:#666;background:#FFFF;font-family:Verdana,Helvetica,sans-serif}
		a{color:blue;text-decoration: none}        
	</style>
	
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<div id="container">
<div id="header">
	<h1>union power E</h1>
	<div id="short-status">
		<ul>
			<?php
			if(empty($_SESSION['username']))
			{
				echo "<li><strong>请登录</strong></li>";
				echo "<li><strong>权限:</strong>游客</li>";
			}
			else
			{
				echo "<li><span class=\"b-in-blk usericon sprite-list-ic\"></span><strong>欢迎 </strong>".$_SESSION['username']."</li>";
				echo "<li><span class=\"b-in-blk email sprite-list-ic\"></span>".$_SESSION['email']."</li>";
			 	echo "<li><strong>权限:</strong>管理</li>";
			}
			 
			?>
		</ul>
	</div>
</div>

<div id="mainmenu">
<?php
if (!empty($GLOBALS['TEMPLATE']['select']))
{
	if($GLOBALS['TEMPLATE']['select']=="login")
	{
    echo "<li><a href='index.html'>首页</a></li>";
    echo "<li><a href='Product-topo.html'>产品拓朴</a></li>";
    if(!empty($_SESSION['username']))
    {
    	echo "<li><a href='task.php'>任务</a></li>";
    	echo "<li><a href='homepage.php'>个人主页</a></li>";
    }
    
    if($_SESSION['priv']==1)
    {
    	echo "<li><a href='manager.php'>管理</a></li>";
    }
    echo "<li><a href='upe-intro.html'>UPE 简介</a></li>";
    echo "<li class='selected'><a href='login.html'>登录</a></li>";
   }
    else if($GLOBALS['TEMPLATE']['select']=="mainpage")
	{
    echo "<li  class='selected'><a href='index.html'>首页</a></li>";
    echo "<li><a href='Product-topo.html'>产品拓朴</a></li>";
    if(!empty($_SESSION['username']))
    {
    	echo "<li><a href='task.php'>任务</a></li>";
    	echo "<li><a href='homepage.php'>个人主页</a></li>";
    }
    if($_SESSION['priv']==1)
    {
    	echo "<li><a href='manager.php'>管理</a></li>";
    }
    echo "<li><a href='upe-intro.html'>UPE 简介</a></li>";
    echo "<li><a href='login.html'>登录</a></li>";
   }
   else if($GLOBALS['TEMPLATE']['select']=="devfig")
	{
    echo "<li><a href='index.html'>首页</a></li>";
    echo "<li class='selected'><a href='Product-topo.html'>产品拓朴</a></li>";
    if(!empty($_SESSION['username']))
    {
    	echo "<li><a href='task.php'>任务</a></li>";
    	echo "<li><a href='homepage.php'>个人主页</a></li>";
    }
    if($_SESSION['priv']==1)
    {
    	echo "<li><a href='manager.php'>管理</a></li>";
    }
    echo "<li><a href='upe-intro.html'>UPE 简介</a></li>";
    echo "<li><a href='login.html'>登录</a></li>";
   }
    else if($GLOBALS['TEMPLATE']['select']=="upeintro")
	{
    echo "<li><a href='index.html'>首页</a></li>";
    echo "<li><a href='Product-topo.html'>产品拓朴</a></li>";
    if(!empty($_SESSION['username']))
    {
    	echo "<li><a href='task.php'>任务</a></li>";
    	echo "<li><a href='homepage.php'>个人主页</a></li>";
    }
    if($_SESSION['priv']==1)
    {
    	echo "<li><a href='manager.php'>管理</a></li>";
    }
    echo "<li  class='selected'><a href='upe-intro.html'>UPE 简介</a></li>";
    echo "<li><a href='login.html'>登录</a></li>";
    
   }
    else if($GLOBALS['TEMPLATE']['select']=="task")
	{
    echo "<li><a href='index.html'>首页</a></li>";
    echo "<li><a href='Product-topo.html'>产品拓朴</a></li>";
    if(!empty($_SESSION['username']))
    {
    	echo "<li  class='selected'><a href='task.php'>任务</a></li>";
    	echo "<li><a href='homepage.php'>个人主页</a></li>";
    }
    if($_SESSION['priv']==1)
    {
    	echo "<li><a href='manager.php'>管理</a></li>";
    }
    echo "<li><a href='upe-intro.html'>UPE 简介</a></li>";
    echo "<li><a href='login.html'>登录</a></li>";
    
   }
   else if($GLOBALS['TEMPLATE']['select']=="manager")
	{
    echo "<li><a href='index.html'>首页</a></li>";
    echo "<li><a href='Product-topo.html'>产品拓朴</a></li>";
    if(!empty($_SESSION['username']))
    {
    	echo "<li><a href='task.php'>任务</a></li>";
    	echo "<li><a href='homepage.php'>个人主页</a></li>";
    }
    if($_SESSION['priv']==1)
    {
    	echo "<li class='selected'><a href='manager.php'>管理</a></li>";
    }
    echo "<li><a href='upe-intro.html'>UPE 简介</a></li>";
    echo "<li><a href='login.html'>登录</a></li>";
    
   }
   else if($GLOBALS['TEMPLATE']['select']=="homepage")
	{
    echo "<li><a href='index.html'>首页</a></li>";
    echo "<li><a href='Product-topo.html'>产品拓朴</a></li>";
    if(!empty($_SESSION['username']))
    {
    	echo "<li><a href='task.php'>任务</a></li>";
    	echo "<li class='selected'><a href='homepage.php'>个人主页</a></li>";
    }
    if($_SESSION['priv']==1)
    {
    	echo "<li><a href='manager.php'>管理</a></li>";
    }
    echo "<li><a href='upe-intro.html'>UPE 简介</a></li>";
    echo "<li><a href='login.html'>登录</a></li>";
    
   }
   
   else
   {
    echo "<li class='selected'><a href='index.html'>首页</a></li>";
    echo "<li><a href='Product-topo.html'>产品拓朴</a></li>";
    if(!empty($_SESSION['username']))
    {
    	echo "<li><a href='task.php'>任务</a></li>";
    	echo "<li><a href='homepage.php'>个人主页</a></li>";
    }
    if($_SESSION['priv']==1)
    {
    	echo "<li><a href='manager.php'>管理</a></li>";
    }
    echo "<li><a href='upe-intro.html'>UPE 简介</a></li>";
    echo "<li><a href='login.html'>登录</a></li>";
   }
}
?>
</div>

<div id="boradcast">
公告区<br/>
<marquee align=middle direction=up width=30%  height=60  scrollamount="1" onMouseOver="this.stop()" onMouseOut="this.start()">
	<?php echo file_get_contents(castfile); fclose(castfile);?>
</marquee>
</div>

<div id="content">
<?php

	if (!empty($GLOBALS['TEMPLATE']['content']))
	{
    	echo $GLOBALS['TEMPLATE']['content'];
	}

?>
</div>


  
<div id="footer" class="clearfix">
  <div>欢迎访问UNION POWER E 官方网站</div>
  <div>联系方式：重庆 xxxx  成都 xxxx</div>
<div>
1.保密约定  访问者不得以任何方式向第三方透露或出售本团队及公司的基本信息和技术资料。违者，本团队和公司有权利提起法律诉讼和资金索赔。<br/>
2.免责声明  本网站提供的部分信息来自互联网，若有不实或错误，与本网站无关。<br/>
3.适用法律  本投资意向书适用中华人民共和国法律。<br/>
</div>

  <div>Copyright &copy;<?php echo date('Y'); ?></div>
  
</div>

</body>
</html>
