<?php
session_start();
if(empty($_SESSION['username']))
{
	echo "请登录";
	header('Location: login.php');
	
}

ob_start();
?>

<?php
include 'lib/common.php';
include 'lib/db.php';
include 'lib/functions.php';
include 'lib/User.php';

/* 从数据库中取得贡献度*/
$jun = User::getScoreByUsername("licaijun");
$an = User::getScoreByUsername("linzhian");
$hua = User::getScoreByUsername("zengjianhua");
?>

<div id="task">
<p>
	<table border="1" cellpadding="0" cellspacing="0" width="661" style="empty-cells:show; border-collapse:collapse;" class="ke-zeroborder" bordercolor="black">
		<tbody>
			<tr>
				<td colspan="8" height="30" class="xl105" width="661" style="text-align:center;">
					<strong><span style="font-size:14px;">第一期任务贡献度总表</span></strong> 
				</td>
			</tr>
			
			<tr style="background-color:#eedd55;">
				<td height="19" class="xl75">
				</td>
				<td class="xl76">
					类目
				</td>
				<td class="xl78">
					贡献度
				</td>
				<td class="xl78">
					责任人
				</td>
				<td class="xl78">
					外贡献
				</td>
				<td class="xl78">
					外协
				</td>
				<td class="xl76">
					进度
				</td>
				<td class="xl77">
					备注
				</td>
			</tr>
			<tr>
				<td rowspan="18" height="342" class="xl108" align="center">
					硬件
				</td>
				<td class="xl65">
					zigbee方案
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl83">
					√
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					zigbee原理图+PCB
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl83">
					√
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					传感器方案
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl83">
					√
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					传感器原理图+PCB
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl83">
					√
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					CPU方案
				</td>
				<td class="xl71">
					10
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl83">
					√
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					母板方案
				</td>
				<td class="xl71">
					15
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl85">
					≈
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					CPU原理图+PCB
				</td>
				<td class="xl71">
					10
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
					▶
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					母板原理图+PCB
				</td>
				<td class="xl71">
					15
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl71">
					3
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl95">
					■
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					电源管理方案
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl83">
					√
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					电源管理原理图+PCB
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl83">
					√
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					DC-DC电源模块方案
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl85">
					≈
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					DC-DC电源模块原理图+PCB
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					曾建华
				</td>
				<td class="xl71">
					2
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl85">
					≈
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					报警方案
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl85">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					报警方案原理图+PCB
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					曾建华
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl85">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					窗帘\窗户控制器
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					曾建华
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl85">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl85">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="36" class="xl65">
					超低成本智能控制终端方案
				</td>
				<td class="xl71">
					10
				</td>
				<td class="xl71">
					曾建华
				</td>
				<td class="xl71">
					3
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl85">
				</td>
				<td class="xl91" width="141">
					面向低端用户，核心成本在200元以内
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr style="background-color:#eedd55;">
				<td height="18" class="xl100">
				</td>
				<td class="xl101">
				</td>
				<td class="xl101">
				</td>
				<td class="xl101">
				</td>
				<td class="xl101">
				</td>
				<td class="xl101">
				</td>
				<td class="xl101">
				</td>
				<td class="xl102">
				</td>
			</tr>
			<tr>
				<td rowspan="15" height="270" class="xl103">
					软件
				</td>
				<td class="xl65">
					zigbee Z-stack
				</td>
				<td class="xl71">
					10+5
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					zigbee 协议栈自研究
				</td>
				<td class="xl71">
					15+15
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
					长期实现
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					传感器软件
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					电源管理软件
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl85">
					≈
				</td>
				<td class="xl66">
					待调试
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					CPU linux系统
				</td>
				<td class="xl71">
					10+10
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					CPU 核心应用软件
				</td>
				<td class="xl71">
					10+10
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					设备WEB服务器页面等
				</td>
				<td class="xl71">
					5+5
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					FPGA程序：SATA
				</td>
				<td class="xl71">
					15+15
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					FPGA程序：other
				</td>
				<td class="xl71">
					10+10
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18">
				</td>
				<td class="xl63">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					报警软件
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					窗户类控制软件
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					网站申请
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl71">
					1
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
					工作室服务器页面设计管理
				</td>
				<td class="xl71">
					10
				</td>
				<td class="xl71">
					李才军
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
					长期维护，每期5分
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr style="background-color:#eedd55;">
				<td height="18" class="xl72">
				</td>
				<td class="xl73">
				</td>
				<td class="xl79">
				</td>
				<td class="xl79">
				</td>
				<td class="xl79">
				</td>
				<td class="xl79">
				</td>
				<td class="xl96">
				</td>
				<td class="xl74">
				</td>
			</tr>
			<tr>
				<td rowspan="2" height="36" class="xl103">
					测试
				</td>
				<td class="xl65">
					z<span class="font7">igbee板子焊接、调试</span> 
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl71">
					曾建华
				</td>
				<td class="xl71">
					2
				</td>
				<td class="xl71">
					所有
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl65">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
				</td>
			</tr>
			<tr style="background-color:#eedd55;">
				<td height="18" class="xl72">
				</td>
				<td class="xl73">
				</td>
				<td class="xl79">
				</td>
				<td class="xl79">
				</td>
				<td class="xl79">
				</td>
				<td class="xl79">
				</td>
				<td class="xl96">
				</td>
				<td class="xl74">
				</td>
			</tr>
			<tr>
				<td rowspan="2" height="64" class="xl103">
					采购
				</td>
				<td class="xl65">
					第一次采购
				</td>
				<td class="xl71">
					2
				</td>
				<td class="xl71">
					林志安
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
					√
				</td>
				<td class="xl91" width="141">
					期末进行总计，依据采购清单
				</td>
			</tr>
			<tr>
				<td height="42" class="xl65">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl91" width="141">
				</td>
			</tr>
			<tr style="background-color:#eedd55;">
				<td height="18" class="xl72">
				</td>
				<td class="xl73">
				</td>
				<td class="xl79">
				</td>
				<td class="xl79">
				</td>
				<td class="xl79">
				</td>
				<td class="xl79">
				</td>
				<td class="xl96">
				</td>
				<td class="xl74">
				</td>
			</tr>
			<tr>
				<td rowspan="5" height="90" class="xl103">
					其他
				</td>
				<td class="xl65">
					熟悉ZIGBEE协议
				</td>
				<td class="xl71">
					5
				</td>
				<td class="xl86">
					所有
				</td>
				<td class="xl71">
				</td>
				<td class="xl71">
				</td>
				<td class="xl95">
				</td>
				<td class="xl66">
					需要切切实实去做
				</td>
			</tr>
			<tr>
				<td height="18" class="xl87">
					熟悉SATA协议
				</td>
				<td class="xl88">
					5
				</td>
				<td class="xl86">
					所有
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl87">
					仓库进存销系统(EXCEL)
				</td>
				<td class="xl88">
					5
				</td>
				<td class="xl90">
					李才军
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
					≈
				</td>
				<td class="xl89">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl87">
					质量管理体系建设
				</td>
				<td class="xl88">
					10
				</td>
				<td class="xl90">
					李才军
				</td>
				<td class="xl88">
					5
				</td>
				<td class="xl88">
					所有
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
					大家一起
				</td>
			</tr>
			<tr>
				<td height="18" class="xl87">
					熟悉相关认证、法律法规
				</td>
				<td class="xl88">
					10
				</td>
				<td class="xl90">
					曾建华
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
					大家一起
				</td>
			</tr>
			<tr>
				<td height="18" class="xl92">
				</td>
				<td class="xl87">
					LOGO设计与详解
				</td>
				<td class="xl88">
					1
				</td>
				<td class="xl90">
					李才军
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
				</td>
			</tr>
			<tr>
				<td height="39" class="xl92">
				</td>
				<td class="xl93" width="198">
					熟悉TIA/EIA570-A标准，拟出家居布线方案
				</td>
				<td class="xl88">
					5+2
				</td>
				<td class="xl90">
					曾建华
				</td>
				<td class="xl88">
					1
				</td>
				<td class="xl88">
					所有
				</td>
				<td class="xl97">
				</td>
				<td class="xl94" width="141">
					新房，旧房改造，楼宇布线等
				</td>
			</tr>
			<tr>
				<td height="23" class="xl92">
				</td>
				<td class="xl93" width="198">
					红外技术研究与报告
				</td>
				<td class="xl88">
					1
				</td>
				<td class="xl90">
					曾建华
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl94" width="141">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl70">
				</td>
				<td class="xl87">
					Z-stack 讲解
				</td>
				<td class="xl88">
					1
				</td>
				<td class="xl90">
					林志安
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl70">
				</td>
				<td class="xl87">
					SATA协议讲解
				</td>
				<td class="xl88">
					1
				</td>
				<td class="xl90">
					李才军
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl70">
				</td>
				<td class="xl87">
					zigbee协议讲解
				</td>
				<td class="xl88">
					1
				</td>
				<td class="xl90">
					林志安
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl70">
				</td>
				<td class="xl87">
					质量管理体系讲解
				</td>
				<td class="xl88">
					1
				</td>
				<td class="xl90">
					所有
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl70">
				</td>
				<td class="xl87">
					TIA/EIA570-A标准<span class="font7"> 讲解</span> 
				</td>
				<td class="xl88">
					1
				</td>
				<td class="xl90">
					曾建华
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl70">
				</td>
				<td class="xl87">
					关于产品相关认证等讲解
				</td>
				<td class="xl88">
					1
				</td>
				<td class="xl90">
					李才军
				</td>
				<td class="xl88">
				</td>
				<td class="xl88">
				</td>
				<td class="xl97">
				</td>
				<td class="xl89">
				</td>
			</tr>
			<tr style="background-color:#eedd55;">
				<td height="19" class="xl67">
				</td>
				<td class="xl68">
				</td>
				<td class="xl80">
				</td>
				<td class="xl80">
				</td>
				<td class="xl80">
				</td>
				<td class="xl80">
				</td>
				<td class="xl98">
				</td>
				<td class="xl69">
				</td>
			</tr>
			<tr>
				<td height="18" class="xl81">
					■
				</td>
				<td>
					停止
				</td>
			
			</tr>
			<tr>
				<td height="18" class="xl82">
					▶
				</td>
				<td>
					进行中
				</td>
				
			</tr>
			<tr>
				<td height="18" class="xl83">
					√
				</td>
				<td>
					完成
				</td>
				
			</tr>
			<tr>
				<td height="18" class="xl84">
					×
				</td>
				<td>
					失败
				</td>
				
			</tr>
			<tr>
				<td height="18" class="xl85">
					≈
				</td>
				<td>
					部分完成
				</td>
		
			</tr>
			<tr>
				<td height="18" class="xl86">
					⑤
				</td>
				<td>
					所有
				</td>
			</tr>
		</tbody>
	</table>
</p>
</div>

<div id="scorediv" style="position: absolute; top: 2%; right: 0px ">
<h5>
	贡献度综合统计
</h5>

<span style="color:#E53333;font-size:11px;">表一:各期投资金额详表</span><br />
<table class="scoretab" style="width:100%;height:10%;" align="left" border="1" bordercolor="#000000" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td>
				<p>
					<span style="font-family:宋体;font-size:12px;"><strong>投资人</strong></span> 
				</p>
			</td>
			<td>
				<span style="font-family:宋体;font-size:12px;"><strong>一期（元）</strong></span><br />
			</td>
			<td>
				<span style="font-family:宋体;font-size:12px;"><strong>二期（元）</strong></span><br />
			</td>
			<td>
				<span style="font-family:宋体;font-size:12px;"><strong>三期（元）</strong></span><br />
			</td>
			<td>
				<span style="font-family:宋体;font-size:12px;"><strong>四期（元）</strong></span><br />
			</td>
		</tr>
		<tr>
			<td>
				李才军<br />
			</td>
			<td>
				<?php echo $jun->cash1; ?><br />
			</td>
			<td>
				<?php echo $jun->cash2; ?><br />
			</td>
			<td>
				<?php echo $jun->cash3; ?><br />
			</td>
			<td>
				<?php echo $jun->cash4; ?><br />
			</td>
		</tr>
		<tr>
			<td>
				林志安<br />
			</td>
			<td>
				<?php echo $an->cash1; ?><br />
			</td>
			<td>
				<?php echo $an->cash2; ?><br />
			</td>
			<td>
				<?php echo $an->cash3; ?><br />
			</td>
			<td>
				<?php echo $an->cash4; ?><br />
			</td>
		</tr>
		<tr>
			<td>
				曾建华<br />
			</td>
			<td>
				<?php echo $hua->cash1; ?><br />
			</td>
			<td>
				<?php echo $hua->cash2; ?><br />
			</td>
			<td>
				<?php echo $hua->cash3; ?><br />
			</td>
			<td>
				<?php echo $hua->cash4; ?><br />
			</td>
		</tr>
	</tbody>
</table>
<br />
<br />
<br />
<span style="color:#E53333;font-size:11px;">表二:各期贡献度总计详表</span><br />
<table class="scoretab" style="width:100%;height:10%;" align="left" border="1" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td>
				<p>
					<span style="font-family:宋体;font-size:12px;"><strong>投资人</strong></span> 
				</p>
			</td>
			<td>
				<span style="font-family:宋体;font-size:12px;"><strong>一期（<span style="font-family:宋体;font-size:12px;"><strong>点</strong></span>）</strong></span><br />
			</td>
			<td>
				<span style="font-family:宋体;font-size:12px;"><strong>二期（<span style="font-family:宋体;font-size:12px;"><strong>点</strong></span>）</strong></span><br />
			</td>
			<td>
				<span style="font-family:宋体;font-size:12px;"><strong>三期（<span style="font-family:宋体;font-size:12px;"><strong>点</strong></span>）</strong></span><br />
			</td>
			<td>
				<span style="font-family:宋体;font-size:12px;"><strong>四期（<span style="font-family:宋体;font-size:12px;"><strong>点</strong></span>）</strong></span><br />
			</td>
		</tr>
		<tr>
			<td>
				李才军<br />
			</td>
			<td>
				<?php echo $jun->score1; ?><br />
			</td>
			<td>
				<?php echo $jun->score2; ?><br />
			</td>
			<td>
				<?php echo $jun->score3; ?><br />
			</td>
			<td>
				<?php echo $jun->score4; ?><br />
			</td>
		</tr>
		<tr>
			<td>
				林志安<br />
			</td>
			<td>
				<?php echo $an->score1; ?><br />
			</td>
			<td>
				<?php echo $an->score2; ?><br />
			</td>
			<td>
				<?php echo $an->score3; ?><br />
			</td>
			<td>
				<?php echo $an->score4; ?><br />
			</td>
		</tr>
		<tr>
			<td>
				曾建华<br />
			</td>
			<td>
				<?php echo $hua->score1; ?><br />
			</td>
			<td>
				<?php echo $hua->score2; ?><br />
			</td>
			<td>
				<?php echo $hua->score3; ?><br />
			</td>
			<td>
				<?php echo $hua->score4; ?><br />
			</td>
		</tr>
	</tbody>
</table>
<br />
<br />
<br />


<div id="scoresvg">
<iframe src="scoregraph.php?stytle='bar'" type="image/svg+xml" width="30%" height="45%" frameborder="0"></iframe>
<iframe src="scoregraph.php?stytle='pie'" type="image/svg+xml" width="30%" height="45%" left="30%" frameborder="0"></iframe>
</div>
</div>



<?php

$GLOBALS['TEMPLATE']['content'] = ob_get_clean();
$GLOBALS['TEMPLATE']['title'] = "task";
$GLOBALS['TEMPLATE']['select'] = "task";
// display the page
include 'template-page.php';
?>
