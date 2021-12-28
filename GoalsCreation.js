idFormat = 16;
window.onload=function()
{
	/*CreateGoal(14567,"MAtvei","Emblem of Severed Fate (4):  If you already have an invested C6 Xingqiu build with Noblesse Oblige (2) Heart of Depth (2) and Sacrificial Sword, you don't need to farm for this set. Main reason for this is that by exchanging a good NO + HoD set for an EoSF set, you end up losing a good chunk of E damage, which can be detrimental to a highly invested Xingqiu.",228,322);
	CreateGoal(14567,"MAtvei","Emblem of Severed Fate (4):  If you already have an invested C6 Xingqiu build with Noblesse Oblige (2) Heart of Depth (2) and Sacrificial Sword, you don't need to farm for this set. Main reason for this is that by exchanging a good NO + HoD set for an EoSF set, you end up losing a good chunk of E damage, which can be detrimental to a highly invested Xingqiu.",228,322);
	CreateGoal(14567,"MAtvei","Emblem of Severed Fate (4):  If you already have an invested C6 Xingqiu build with Noblesse Oblige (2) Heart of Depth (2) and Sacrificial Sword, you don't need to farm for this set. Main reason for this is that by exchanging a good NO + HoD set for an EoSF set, you end up losing a good chunk of E damage, which can be detrimental to a highly invested Xingqiu.",228,322);
	CreateGoal(14567,"MAtvei","Emblem of Severed Fate (4):  If you already have an invested C6 Xingqiu build with Noblesse Oblige (2) Heart of Depth (2) and Sacrificial Sword, you don't need to farm for this set. Main reason for this is that by exchanging a good NO + HoD set for an EoSF set, you end up losing a good chunk of E damage, which can be detrimental to a highly invested Xingqiu.",228,322);
	CreateGoal(14567,"MAtvei","Emblem of Severed Fate (4):  If you already have an invested C6 Xingqiu build with Noblesse Oblige (2) Heart of Depth (2) and Sacrificial Sword, you don't need to farm for this set. Main reason for this is that by exchanging a good NO + HoD set for an EoSF set, you end up losing a good chunk of E damage, which can be detrimental to a highly invested Xingqiu.",228,322);
	CreateGoal(14567,"MAtvei","Emblem of Severed Fate (4):  If you already have an invested C6 Xingqiu build with Noblesse Oblige (2) Heart of Depth (2) and Sacrificial Sword, you don't need to farm for this set. Main reason for this is that by exchanging a good NO + HoD set for an EoSF set, you end up losing a good chunk of E damage, which can be detrimental to a highly invested Xingqiu.",228,322);
*/
}

function CreateGoal(goalId,head,description,currentSumm,fullSumm)	//accept goal data and create appropriate div on page
{
	let header = document.createElement('h3');						//
	header.innerHTML = head;										//
	let headBox = document.createElement('div');					//create head of goal
	headBox.className = "HeadBox";									//
	headBox.appendChild(header);									//

	let descript = document.createElement('p');						//
	descript.innerHTML = description;								//
	let textBox = document.createElement('div');					//create description of goal
	textBox.className = "TextBox";									//
	textBox.appendChild(descript);									//

	let progressBar = document.createElement('div');				//create empty progress bar 
	progressBar.className = "ProgressBar";						
	let progress = document.createElement('div');					//create progress scale
	progress.className = "Progress";
	progress.style.width = (currentSumm/fullSumm)*100+"%";				//determ scale of progress
	if(progress.width>progressBar.width)							//check out of range
		progress.style.width = progressBar.style.width;

	let progressText = document.createElement('p');					//create number values of progress
	progressText.className = "ProgressText";
	progressText.innerHTML = currentSumm+"/"+fullSumm+" р";

	progressBar.appendChild(progress);								//put scale of progress at the progress bar
	progressBar.appendChild(progressText);							//put value of progress at the progress bar

	let toPay = document.createElement('a');
																	//create pay button
	toPay.innerHTML = "Пожертвовать";
	toPay.href = "#pay";											//create link to pay box
	toPay.onclick = function()
	{
		document.getElementById('PayGoal').value = goalId;
	}

	let id = document.createElement('p');							//create box to goal id
	id.innerHTML = toGoalId(goalId);
	id.style.fontsize = "5pt";
	id.style.color = "#bababa";

	let goal = document.createElement('div');						//create goal box
	goal.className = "Goal";
	goal.appendChild(id);											//put id at the goal box
	goal.appendChild(headBox);										//put head at the goal box
	goal.appendChild(textBox);										//put description at the goal box
	goal.appendChild(progressBar);									//put progress bar at the goal box
	goal.appendChild(toPay);										//put pay button at the goal box
	document.getElementById('GoalsCase').appendChild(goal);			//put goal box on page
}
function toGoalId(id)
{
	var variableId = id+"";
	for(var i=0;i<idFormat;i++)
	{
		if(variableId.length<idFormat)
			variableId="0"+variableId;
		else
			break;
	}
	return variableId;
}
function CreateDesigner()
{
	let form = document.createElement('form');

	let headerLabel = document.createElement('label');
	let headerLabel.innerHTML = "На что вы собираете:";
	let header = document.createElement('input');
	header.maxLength = "50";
	let headBox = document.createElement('div');					
	headBox.className = "HeadBox";									
	headBox.appendChild(header);									

	let descript = document.createElement('textarea');					
	descript.maxLength = "255";
	descript.cols = "40";
	descript.rows = "7";
	let textBox = document.createElement('div');					
	textBox.className = "TextBox";
	textBox.appendChild(descript);

	let progress = document.createElement('input');
	progress.className = "ProgressBar";
	progress.maxLength = "10";

	let submit = document.createElement('input');
	submit.type = "submit";

	let goal = document.createElement('div');						//create goal box
	goal.className = "Goal";
	form.appendChild(headBox);										//put head at the goal box
	form.appendChild(textBox);
	form.appendChild(progress);
	form.appendChild(submit);
	goal.appendChild(form);
	document.getElementById('GoalsCase').appendChild(goal);			//put goal box on page
}