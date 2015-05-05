
<div id="content">
<p>
 UNION POWER E 推出了一整套完善的智能家居解决系统。从传感器节点到网络一体化处理平台，
 单从通信技术上就包含了zigbee、WIFI、宽带拨号等。通信速率从几十Kbps到1Gbps。
 </p>
 <p>
 为了便于大家了 解整个网络架构，UNION POWER E制作了如下的设备拓扑图，您可以点击关心的设备以便了解更多的设备信息。
</p>
</div>

<div id="svg">
<iframe src="dev.svg" width="100%" height="800"></iframe>
</div>

<?php

$GLOBALS['TEMPLATE']['content'] = ob_get_clean();
$GLOBALS['TEMPLATE']['title'] = "devfig";
$GLOBALS['TEMPLATE']['select'] = "devfig";
// display the page
include 'template-page.php';
?>
