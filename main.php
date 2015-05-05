
<h1>欢迎访问 UNION POWER E</h1>
<h2>新闻</h2>
<h2>图片轮播</h2>

<?php
$GLOBALS['TEMPLATE']['content'] = ob_get_clean();
$GLOBALS['TEMPLATE']['title'] = "upemain";
$GLOBALS['TEMPLATE']['select'] = "mainpage";

// display the page
include 'template-page.php';
?>
