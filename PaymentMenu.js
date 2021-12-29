function CreatePayMethod(emblem, name, bankData)
{

	let checkbox = document.createElement("input");
	checkbox.name = "bankCheckButton";
	checkbox.type = "radio";
	checkbox.className = "bankCheckBut";

	let MethodBox = document.createElement('div');
	MethodBox.className = "PayMethodBox";

	let Emblem = document.createElement('img');
	Emblem.src = emblem;
	Emblem.className = "PayMethodEmblem";

	Emblem.onclick = function()
	{
		document.getElementById('PayMethod').value = bankData;
		checkbox.checked = true;
	}


	

	let Name = document.createElement('p');
	Name.innerHTML = name;
	Name.className = "PayMethodName";

	MethodBox.appendChild(Emblem);
	MethodBox.appendChild(Name);
	MethodBox.appendChild(checkbox);
	checkbox
	document.getElementById('PayMethodMenu').appendChild(MethodBox);


}