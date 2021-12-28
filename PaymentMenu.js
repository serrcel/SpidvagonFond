function CreatePayMethod(emblem, name, bankData)
{
	let MethodBox = document.createElement('div');
	MethodBox.className = "PayMethodBox";

	let Emblem = document.createElement('img');
	Emblem.src = emblem;
	Emblem.className = "PayMethodEmblem";
	Emblem.onclick = function()
	{
		document.getElementById('PayMethod').value = bankData;
	}

	let Name = document.createElement('p');
	Name.innerHTML = name;
	Name.className = "PayMethodName";

	MethodBox.appendChild(Emblem);
	MethodBox.appendChild(Name);
	document.getElementById('PayMethodMenu').appendChild(MethodBox);
}