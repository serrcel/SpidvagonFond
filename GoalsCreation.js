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
	let progressText = document.createElement('p');
	progressText.className = "ProgressText";
	progressText.innerHTML = currentSumm+"/"+fullSumm+" р";
	progressBar.appendChild(progress);
	progressBar.appendChild(progressText);

	let toPay = document.createElement('a');
	toPay.innerHTML = "Пожертвовать";
	toPay.href = "#pay";

	let goal = document.createElement('div');
	goal.className = "Goal";
	goal.appendChild(headBox);
	goal.appendChild(textBox);
	goal.appendChild(progressBar);
	goal.appendChild(toPay);
	document.getElementById('GoalsCase').appendChild(goal);
}
function toGoalId(id)
{

}