window.onload=function()
{

}
function CreateGoal(goalId,head,description,currentSumm,fullSumm)
{
	let header = document.createElement('h3');
	header.innerHTML = head;
	let headBox = document.createElement('div');
	headBox.className = "HeadBox";
	headBox.appendChild(header);

	let descript = document.createElement('p');
	descript.innerHTML = description;
	let textBox = document.createElement('div');
	textBox.className = "TextBox";
	textBox.appendChild(descript);

	let progressBar = document.createElement('div');
	progressBar.className = "ProgressBar";
	let progress = document.createElement('div');
	progress.className = "Progress";
	progress.style.width = (currentSumm/fullSumm)*100+"%";
	if(progress.style.width>progressBar.style.width)
		progress.style.width = progressBar.style.width;
	let progressText = document.createElement('p');
	progressText.className = "ProgressText";
	progressText.innerHTML = currentSumm+"/"+fullSumm+" р";
	progressBar.appendChild(progress);
	progressBar.appendChild(progressText);

	let toPay = document.createElement('a');
	toPay.innerHTML = "Пожертвовать";
	toPay.href = "#pay";

	let id = document.createElement('p');
	id.innerHTML = toGoalId(goalId);
	id.style.fontsize = "5pt";
	id.style.color = "#bababa";

	let goal = document.createElement('div');
	goal.className = "Goal";
	goal.appendChild(id);
	goal.appendChild(headBox);
	goal.appendChild(textBox);
	goal.appendChild(progressBar);
	goal.appendChild(toPay);
	document.getElementById('GoalsCase').appendChild(goal);
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