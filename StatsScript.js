var StatsCase = document.getElementById('StatsCase');
function CreateStatsFeeld(name,stat)
{
	let Name = document.createElement('div');
	Name.className = "StatName";
	Name.innerHTML = name+":";

	let Stat = document.createElement('div');
	Stat.className = "StatCharacteristic";
	Stat.innerHTML = stat;

	let StatBox = document.createElement('div');
	StatBox.className = "StatBox";
	StatBox.appendChild(Name);
	StatBox.appendChild(Stat);
	document.getElementById('StatsCase').appendChild(StatBox);
}