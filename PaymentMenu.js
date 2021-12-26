function CreatePayMethod(emblem, name, bankData)
{
	let MethodBox = document.createElement('div');
	MethodBox.className = "PayMethodBox";
	MethodBox.onclick = PeekMethod(bankData);

	let Emblem = document.createElement('img');
	Emblem.className = "PayMethodEmblem";

	let Name = document.createElement('p');
	Name.className = "PayMethodName";

	MethodBox.appendChild(Emblem);
	MethodBox.appendChild(Name);
}

function PeekMethod(bankData)
{
	document.getElementById('PayMethod').value = bankData;
}