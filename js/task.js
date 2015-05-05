
function comitselftaskModify(rows)
{
	//var phpf = "lib/task_database.php?num=3";
	var phpf = "homepage.php?num=" + rows;
	
	for(var i=0;i<rows;i++)
	{
		var getid = "selftask_textarea_" + i;
		var selectid = "selftask_state_select_" + i;
		var note = document.getElementById(getid).value;
		var tid =  document.getElementById(getid).name;

		var obj = document.getElementById(selectid);
		var index = obj.selectedIndex; // 选中索引
		//var text = obj.options[index].text; // 选中文本
		var tstat = obj.options[index].value; // 选中值

		var phpf = phpf + "&tid"+ i + "=" + tid + "&state" + i + "=" + tstat + "&note" + i +"=" + note;
		
	}
	document.getElementById('selftaskaction').href = phpf;
	
}

function displayState(cot)
{
	for(var i=0;i<cot;i++)
	{
		var selectid = "selftask_state_select_" + i;
	
		var obj = document.getElementById(selectid);
	
		var curentStat = document.getElementById(selectid).name;
		//alert(curentStat);
		switch(curentStat)
		{
			case "s": var num=0;break;
			case "p": var num=1;break;
			case "c": var num=2;break;
			case "k": 
			default: var num=3;break;
					
		}
		obj.options[num].selected = true;
		
	}
}
