<?php
/* 个人主页，包括用户信息。
 * 
 * 2013-09-24 by jun
*/

include 'lib/common.php';
include 'lib/db.php';
include 'lib/functions.php';
include 'lib/User.php';
include 'lib/task_database.php';

$GLOBALS[rownum_manger] =0;

if (isset($_GET['num']))
{
	//save data to database
	for($i=0;$i<$_GET['num'];$i++)
	{
		$t = new Task($_GET['tid'.$i]);
		$t->__set("note",$_GET['note'.$i]);
		$t->__set("taskstate",$_GET['state'.$i]);
		$t->save();
	}
	
}
	
session_start();
header('Cache-control: private');

if(empty($_SESSION['username']))
{
	echo "<script> alert('plese login');</script>";	
	header('Location: login.php');
}


/* 从数据库中取得贡献度*/
$usr = User::getByUsername($_SESSION['username']);
$usrsc = User::getScoreByUsername($_SESSION['username']);

ob_start();
?>

<div id="info">
<span class="baseinfo">个人基本信息</span><br/>
<table class="baseinfotable">
	<tbody>
		<tr>
			<td class="width_item">name</td>	
			<td class="width_case"><?php echo $usr->username;?></td>
		</tr>	
		<tr>
			<td class="width_item">ID</td>
			<td class="width_case"><?php echo $usr->uid;?></td>
		</tr>	
		<tr>
			<td class="width_item">email</td>	
			<td class="width_case"><?php echo $usr->emailAddr;?></td>
		</tr>	
		<tr>
			<td class="width_item">priv</td>	
			<td class="width_case"><?php if($usr->priv == 1) echo "manager"; else echo "common";?></td>
		</tr>	
		<tr>
			<td class="width_item">active</td>	
			<td class="width_case"><?php if($usr->isActive == 1) echo "Yes"; else echo "No";?></td>
		</tr>
		
	</tbody>
</table>
<br/>
<span class="baseinfo">个人投资信息</span><br/>
<table class="scoretable">
	<tr>
			<td class="width_item">cash</td>	
			<td class="width_cash">No.1: <?php echo $usrsc->cash1;?></td>
			<td class="width_cash">No.2: <?php echo $usrsc->cash2;?></td>
			<td class="width_cash">No.3: <?php echo $usrsc->cash3;?></td>
			<td class="width_cash">No.4: <?php echo $usrsc->cash4;?></td>
	</tr>
	<tr>
			<td class="width_item">score</td>	
			<td class="width_cash">No.1: <?php echo $usrsc->score1;?></td>
			<td class="width_cash">No.2: <?php echo $usrsc->score2;?></td>
			<td class="width_cash">No.3: <?php echo $usrsc->score3;?></td>
			<td class="width_cash">No.4: <?php echo $usrsc->score4;?></td>
	</tr>
</table>
</div>
<br/>

<div id="file">
<span class="title">公共文件目录</span><br/>
<br/>
<form action="file.php?upload" method="post" enctype="multipart/form-data">
	<label for="file">在此处选择上传文件:</label>
	<input type="hidden" name="max_file_size" value="1000000000">
	<input type="file" name="file" id="file" />
	<input type="submit" name="submit" value="Submit" />
</form>
<div class="tmp_return_info">
<?php echo $GLOBALS['return'];?>
</div>
<br/>

<header class="files-header b-header b-bdr-1" id="sortColsHeader" style="display: block;">
<div style="width:80%">
	<div class="c1 col" style="width:40%">	<a class="indicator" href="javascript:;" id="nameCompareTrigger">
	<span class="itt-10">文件名</span>
	<span class="b-in-blk sprite-ic action-dd"></span>
	</a>
   </div>
   
   <div class="c2 col">	<a class="indicator" href="javascript:;" id="sizeCompareTrigger">
	<span class="itt-10">大小</span>
	<span class="b-in-blk sprite-ic action-dd"></span>
	</a>
   </div>
   
   <div class="c3 col">
   <a class="indicator" href="javascript:;" id="timeCompareTrigger">
   <span>修改日期</span>
   <span class="b-in-blk sprite-ic action-dd"></span>
   </a>
   </div>
</div>
</header>


<form  class="file-list" id="fileList" method="get" name="fileList" onsubmit="return false" 
      style="height:50%;" _install_drag_selection="1">
      
	<dl class="infinite-listview" id="infiniteListView" style="margin-top: 0%;">
	
<?php


$dir = "file/";
if(is_dir($dir)) {
        if ($dh = opendir($dir)) {
        $count = 1;
        while (($file = readdir($dh)) !== false) {
                if($file!="." && $file!="..") {
                echo "<dd class=\"clearfix file-item\" _position='".$count."' _cmd_installed=\"1\">";
                echo "<div class=\"file-col col\" title='".$file."'>";
                
             echo "<span class=\"inline-commands b-btn clearfix\" style=\"visibility: visible;\">
							<div class=\"more-btn\">
							<ul>
								<li class=\"delet-sfile\" title=\"删除\"><a href=\"file.php?delete=".$dir.$file."\"><em class=\"b-in-blk sprite-list-ic icon-delet\"></em></a></li>
								<li class=\"rename-sfile\" title=\"重命名\"><a href=\"file.php?rename=".$dir.$file."\"><em class=\"b-in-blk sprite-list-ic icon-rename icon-edit\"></em></a></li>
								<li class=\"edit-sfile\" title=\"编辑\"><em class=\"b-in-blk sprite-list-ic icon-edit\"></em></li>
								<li class=\"down-sfile \" title=\"下载\"><a href=\"file.php?download=".$file."\"><em class=\"b-in-blk sprite-list-ic icon-download\"></em></a></li>						
							</ul>
									
							</div>
							</span>";   

            //判断文件类型
            if(preg_match("/.*(\.pdf)$/",$file))
            	$filetype = "file_pdf";
            else if(preg_match("/.*(\.doc[x]?)$/",$file))
            	$filetype = "file_doc";
            else if(preg_match("/.*(\.xls[x]?)$/",$file))
            	$filetype = "file_excel";
            else if(preg_match("/.*(\.(rar)|(zip)|(tar\.gz))$/",$file))
            	$filetype = "file_rar";
            else
            	$filetype = "file_txt";
            	
				echo "<span class=\"inline-file-col\">
						<span class=\"b-in-blk sprite-list-ic $filetype \" style=\"cursor: pointer;\" _position='".$count."'><s></s></span>
						<a class=\"file-handler b-no-ln dir-handler\" href='".$dir.$file."' style=\"color: rgb(0, 0, 0); cursor: pointer;\" title='".$file."' _position='".$count."' _installed=\"1\">$file</a>
						</span>";

				$fsize = filesize($dir.$file);
				if($fsize >1024){
					$fsize = number_format($fsize/1024, 2, '.', '');
					if($fsize >1024)
						$fsize = number_format($fsize/1024, 2, '.', '') . "M";
					else
						$fsize = $fsize . "KB";
				}		
				else
					$fsize = $fsize . "B";
				echo "<div class=\"size-col col\"><span style=\"line-height: 37px;\">$fsize</span></div>";

				echo "<div class=\"time-col col\"><span style=\"line-height: 37px;\">".date("Y-m-d H:i:s",filemtime($dir.$file))."</span></div>";
				
				echo "</div></dd>";
            $count+=1 ;
            }
        }
        closedir($dh);
     }
}
?>
</dl>
</form>
</div>

<div class="self_task clearfix">
	<span class="self_task_title">个人任务分配表</span>
	<span class="slef_task_sm">优先级:数字越小优先级越高;状态：s:开始 p:暂停 c:完成 k:停止;负责项目(蓝)，协助项目(绿)。</span>

	<script charset="utf-8" type="text/javascript" src="js/task.js"></script>
	

	<table class="self_task_tab">
	<tbody>
		<tr>
			<td class="td_2hz">
				编号<br />
			</td>
			<td>
				说明<br />
			</td>
			<td class="td_2hz">
				优先<br />
			</td>
			<td class="td_2hz">
				积分<br />
			</td>
			<td class="td_5hz">
				组员<br />
			</td>
			<td class="td_5hz">
				开始时间<br />
			</td>
			<td class="td_5hz">
				结束时间<br />
			</td>
			<td class="td_2hz">
				状态<br />
			</td>
			<td class="td_4hz">
				剩余时间<br />
			</td>
			<td>
				备注<br />
			</td>
		</tr>
		
<?php

$rownum_manger = Task::getselftask($_SESSION['username'],'manager');
$GLOBALS[rownum_manger] = $rownum_manger;
/* 个人当前任务分配表,作为管理者 */
for($i=0;$i<$rownum_manger;$i++)
{
	Task::time_priv_clac($GLOBALS['selftask'][$i]['TASK_START'],
						$GLOBALS['selftask'][$i]['TASK_STOP'],
						$GLOBALS['selftask'][$i]['TASK_PRIV']);
	
	if($GLOBALS['selftask']['countdown'] < 0)
		$GLOBALS['selftask']['countdown'] = 0;
	if(($GLOBALS['selftask'][$i]['TASK_STAT'] == 's') && ($GLOBALS['selftask']['countdown'] < 24))
	{
		// timeout alarm
		$GLOBALS['selftask']['alarm'] = "#FF6666";
	}
	else if(($GLOBALS['selftask'][$i]['TASK_STAT'] == 's') && ($GLOBALS['selftask']['countdown'] < 72))
	{
		// timeout alarm
		$GLOBALS['selftask']['alarm'] = "#ffcc00";
	}
	else
		$GLOBALS['selftask']['alarm'] ='';
	
	echo "
	<tr class=\"manager\">
			<td>
				".$GLOBALS['selftask'][$i]['TASK_ID']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_INFO']."<br />
			</td>
			<td>
				".$GLOBALS['selftask']['priv']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_SCORE']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_MEMBER']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_START']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_STOP']."<br />
			</td>
			<td>
				<select id=\"selftask_state_select_".$i."\" class=\"selftask_state\" name=\"".$GLOBALS['selftask'][$i]['TASK_STAT']."\" 
  					<option value =\"s\">s</option>  
  					<option value =\"p\">p</option>  
  					<option value=\"c\">c</option>  
  					<option value=\"k\">k</option>  
				</select>	
			</td>
			<td style=\"background-color:".$GLOBALS['selftask']['alarm']."\">
				".$GLOBALS['selftask']['countdown']."h<br />
			</td>
			<td>
				<form ><textarea id=\"selftask_textarea_".$i."\" class=\"manager\" 
							name=\"".$GLOBALS['selftask'][$i]['TASK_ID']."\" 
							cols=\"100\" rows=\"1\" >".$GLOBALS['selftask'][$i]['TASK_NOTE']."</textarea><br />
				</form>
			</td>
		</tr>
		";
}
echo  "<script type='text/javascript'>displayState(".$rownum_manger.");</script>";	


$rownum = Task::getselftask($_SESSION['username'],'member');

/* 个人当前任务分配表,作为成员*/
for($i=0;$i<$rownum;$i++)
{

	Task::time_priv_clac($GLOBALS['selftask'][$i]['TASK_START'],
						$GLOBALS['selftask'][$i]['TASK_STOP'],
						$GLOBALS['selftask'][$i]['TASK_PRIV']);
	

	echo "
	<tr class=\"member\">
			<td>
				".$GLOBALS['selftask'][$i]['TASK_ID']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_INFO']."<br />
			</td>
			<td>
				".$GLOBALS['selftask']['priv']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_SCORE']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_MANAGER']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_START']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_STOP']."<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_STAT']."<br />
			</td>
			<td>
				".$GLOBALS['selftask']['countdown']."h<br />
			</td>
			<td>
				".$GLOBALS['selftask'][$i]['TASK_NOTE']."<br />
			</td>
		</tr>
		";
}

echo "</tbody></table>";

?>

<div class="self_task_copicon">
		<ul>
			<li title="放弃" ><a href="homepage.php" id="selftaskinaction"><em class="b-in-blk sprite-list-ic  icon_R_drop"></em></a></li>
			<li title="修改" ><a href="" id="selftaskaction" onclick="comitselftaskModify(<?php echo $GLOBALS[rownum_manger];?>)" ><em class="b-in-blk sprite-list-ic icon_G_ok" ></em></a></li>
		</ul>
</div>

</div>

<?php

$GLOBALS['TEMPLATE']['content'] = ob_get_clean();
$GLOBALS['TEMPLATE']['title'] = "homepage";
$GLOBALS['TEMPLATE']['select'] = "homepage";
// display the page
include 'template-page.php';
?>

