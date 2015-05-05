
<?php
session_start();
if(empty($_SESSION['username']))
{
	echo "请登录";
	header('Location: login.php');
	
}
ob_start();
?>


<div>
	<h2>zigbee 简介</h2>
	<p>
	ZigBee是一种新兴的短距离、低功耗、低数据速率、低成本、低复杂度的无线网络技术，
也称无线传感器网络。ZigBee联盟预测主要应用领域包括工业控制、消费性电子设备、
汽车自动化、家庭和楼宇自动化、医用设备控制等。
	</p>
	<h2>IEEE 802.15.4</h2>
<p>
	IEEE 802.15.4/ZigBee协议是由IEEE 802.15.4标准的PHY和MAC层再加上ZigBee
的网络和应用支持层所组成的，其突出的特点是网络系统支持极低成本、易实现、可靠的
数据传输、短距离操作、极低功耗、各层次的安全性等。IEEE 802.15.4/ZigBee协议
中明确定义了三种拓扑结构：星型结构(Star)、簇状结构(Cluster tree)和网状结构
(Mesh)。
</p>

<p>
目前选型定在CC2530，官方提供Z-STACK协议栈，省去自己开发ZIGBEE协议栈的麻烦。
而且本款芯片价格便宜，只需10~20元。适合低成本应用。<br/>
<font size=4> <strong>版本信息</strong> </font><br/>
　　<font color="blue"><strong>ZigBee V1.0</strong></font> <br/>
　　这是第一个ZigBee标准公开版，于2005年6月开放下载，文件内记载公布时间为June 27, 2005，内部文件编号为053474r06。<br/>
　　ZigBee V1.1<br/>
　　第二个ZigBee标准公开版，于2007年1月开放下载，文件内记载公布时间为December 1, 2006，内部文件编号为053474r13。又称为ZigBee 2006。<br/>
　　ZigBee V1.2<br/>
　　第三个ZigBee标准公开版，于2008年1月开放下载，文件内记载公布时间为January 17, 2008，内部文件编号为053474r17。又称为ZigBee Pro、ZigBee 2007。<br/>
接下来，展示当前工作成果，西面的PCB板图已按照TI参考设计完成布局布线。等待后续底板结构讨论出来后，作细微的调整。<br/>

</p>
<img src="http://d.pcs.baidu.com/thumbnail/b119f43a4ee7c666100a29ec40
1a584a?fid=2620914606-250528-1498965239&time=1379406569&rt=pr&sign=FD
TAR-DCb740ccc5511e5e8fedcff06b081203-2Efph9prw4ZkqtCqIwpR%2Fx%2FLoKc%
3D&expires=8h&r=593836504&size=c850_u580&quality=100">

<img src="http://d.pcs.baidu.com/thumbnail/becb45b9da9cf8ef63d18125b90
50002?fid=2620914606-250528-2681115138&time=1379406569&rt=pr&sign=FDTA
R-DCb740ccc5511e5e8fedcff06b081203-1s2gfUSb1R3yJvMSHuUzE844gqw%3D&expi
res=8h&r=313229293&size=c850_u580&quality=100">
<br/>



<div>
     <table >
        <tbody>
          <tr>
			 			<td>            
               <div class="pct">
                 <div>Zigbee各版本详细对比</div>
                   <div>Comparison chart
                   <table border="1" cellspacing="2" bordercolor="#999999" cellpadding="2" width="100%">
                   <tbody>
                   <tr>
                   <td width="5%">&nbsp;</td>
                   <td>&nbsp;</td>
                   <td width="10%" align="middle"><span style="COLOR:#669900" color="#669900"><strong>2004</strong></span></td>
                   <td width="10%" align="middle"><span style="COLOR:#669900" color="#669900"><strong>2006</strong></span></td>
                   <td width="10%" align="middle"><span style="COLOR:#669900" color="#669900"><strong>2007</strong></span></td>
                   <td width="10%" align="middle"><span style="COLOR:#669900" color="#669900"><strong>PRO</strong></span></td>
                   </tr>
                   <tr>
                   <td colspan="2"><strong>Interference avoidance</strong></td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle">&nbsp;</td>
                   <td align="middle">&nbsp;</td>
                   </tr>
                   <tr><td>&nbsp;</td>
                   <td>Network coordinator selects best available RF channel/Network ID at startup time.&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18">&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   </tr>
                   <tr>
                   <td>&nbsp;</td>
                   <td>Support for ongoing interference detection under operational conditions and wholesale adoption of a new operating RF channel and/or Network ID.&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   </tr><tr><td colspan="2"><strong>Automated/distributed address management &nbsp;</strong></td><td align="middle">&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td>
                   </tr><tr></tr><tr><td>&nbsp;</td><td>Device addresses automatically assigned using a hierarchical, distributed scheme. &nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle">&nbsp;</td></tr><tr></tr><tr><td>&nbsp;</td>
                   <td>Device addresses automatically assigned using a stochastic scheme.&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   </tr><tr></tr><tr><td colspan="2"><strong>Group addressing &nbsp;</strong></td><td align="middle">&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td></tr><tr></tr><tr><td>&nbsp;</td>
                   <td>Devices can be assigned to groups, and whole groups can be addressed with a single frame; thereby reducing network traffic for packets destined for groups.&nbsp;</td><td align="middle">&nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   </tr><tr></tr><tr><td colspan="2"><strong>Centralized data collection&nbsp;</strong></td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td></tr><tr></tr><tr><td>&nbsp;</td>
                   <td>Low-overhead data collection by ZigBee Coordinator explicitly supported.&nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"></td></tr><tr></tr><tr><td>&nbsp;</td><td>Low-overhead data collection by other devices supported under special circumstances (e.g. with Tree Routing).&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   </tr><tr></tr><tr><td>&nbsp;</td>
                   <td>Many-to-one routing allows the whole network to discover the aggregator in one pass.&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   </tr><tr></tr><tr><td>&nbsp;</td><td>Source routing allows the aggregator to respond to all senders in an economical manner. &nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br>
                   </td></tr><tr></tr><tr><td colspan="2"><strong>Security&nbsp;</strong></td><td align="middle">&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td></tr><tr></tr><tr><td>&nbsp;</td>
                   <td>128-bit AES encryption with 32-bit Message Integrity Code (MIC) and frame counters to assure message freshness. &nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr><tr></tr><tr><td>&nbsp;</td>
                   <td>Security applied at the NWK layer by default, with key rotation to prevent hacking of the NWK key. &nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr><tr></tr><tr><td>&nbsp;</td>
                   <td>Higher-layer security supported.&nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr><tr></tr><tr><td>&nbsp;</td>
                   <td>Trust Center application, operating on the ZigBee Coordinator, manages trust on behalf of network devices and acts as the central authority on what devices can join the network. &nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr><tr></tr><tr><td>&nbsp;</td>
                   <td>Trust Center can run on any device in the network.&nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr><tr></tr><tr><td>&nbsp;</td><td>"High Security" mode available, which is selectable by Trust Center policy, and requires Application Layer Link keys; peer-entity authentication; and peer-to-peer key establishment using Master Keys. &nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr><tr></tr><tr><td colspan="2"><strong>Network scalability&nbsp;</strong></td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle">&nbsp;</td></tr><tr></tr><tr><td>&nbsp;</td><td>Network scales up to the limits of the addressing algorithm. Typically, networks with tens to hundreds of devices are supported. &nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle">&nbsp;</td></tr><tr></tr><tr><td>&nbsp;</td><td>An addressing algorithm that relaxes the limits on network size. Networks with hundreds to thousands of devices are supported. &nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr>
                   <tr></tr><tr>
                   <td colspan="2"><strong>Message size &nbsp;</strong></td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td></tr><tr><td>&nbsp;</td><td>&lt; 100 bytes. Exact size depends on services employed, such as security.&nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td></tr><tr><td>&nbsp;</td>
                   <td>Large messages, up to the buffer capacity of the sending and receiving devices, are supported using Fragmentation and Reassembly.&nbsp;</td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr><tr><td colspan="2"><strong>Standardized commissioning &nbsp;</strong></td>
                   <td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td></tr><tr><td>&nbsp;</td>
                   <td>Standardized startup procedure and attributes support the use of commissioning tools in a multi-vendor environment.&nbsp;</td>
                   <td align="middle">&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr><tr><td colspan="2"><strong>Robust mesh networking&nbsp;</strong></td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td></tr><tr><td>&nbsp;</td><td>Fault tolerant routing algorithms respond to changes in the network and in the RF environment.&nbsp;</td>
                   <td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr>
                   <tr><td>&nbsp;</td><td>Every device keeps track of its "neighborhood"; thereby further improving reliability and robustness. &nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td></tr><tr><td colspan="2"><strong>Cluster Library support &nbsp;</strong></td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td><td align="middle">&nbsp;</td></tr><tr><td>&nbsp;</td><td>The ZigBee Cluster Library, as an adjunct to the stack, standardizes application behavior across profiles and provides an invaluable resource for profile developers. &nbsp;</td><td align="middle">&nbsp;</td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br></td><td align="middle"><img src="http://www.daintree.net/images/products/tick.gif" width="20" height="18"> <br>
                   </td>
                   </tr>
                   </tbody>
                   </table>
                   <p>&nbsp;</p>Backward compatibility<p>ZigBee 2007/PRO</p>
                   <ul>
                   <li>Backward compatibility with ZigBee 2006 required. </li>
                   <li>Backward compatibility with ZigBee 2004 not required. </li>
                   </ul>
                   <p>&nbsp;ZigBee 2006</p>
                   <ul>
                   <li>Backward compatibility with ZigBee 2004 not required. </li>
                   </ul>
                   <p>&nbsp;ZigBee 2004</p>
                   <ul>
                   <li>&nbsp;Original ZigBee version.&nbsp;</li>
                   </ul>
                   </div>
                   </div>
            </td>                
          </tr>
        </tbody>
     </table>
</div>

<?php
$GLOBALS['TEMPLATE']['content'] = ob_get_clean();
$GLOBALS['TEMPLATE']['title'] = "zigbee";
$GLOBALS['TEMPLATE']['select'] = "zigbee";
// display the page
include 'template-page.php';
?>