function CreateRegisterMenu()
{
	let shadow = document.createElement('div');
	shadow.className = 'Shadow';
	shadow.onclick=function()
	{
		shadow.remove();
	}

	let registerMenuBox = document.createElement('div');
	registerMenuBox.className = "RegisterMenuBox";
	let form = document.createElement('form');
	form.method = "post";

	form.innerHTML = '<h1>Регистрация</h1><label for="rUName">*Имя пользователя:</label><br><input type="text" id="rUName" name="UName" required minlength="2" maxlength="30"><br><label for="rPass">*Пароль:</label><br><input type="password" id="rPass" name="Pass" required minlength="5" maxlength="30"><br><label for="rPPass">*Повторите пароль:</label><br><input type="password" id="rPPass" name="PPass" required><br><label for="email">*Введите E-Mail:</label><br><input type="text" id="remail" name="email" required><br><label>Показать пароль <input type="checkbox" onclick="ShowPass()"></label><br><input type="submit" name="" id="reg"></input>';

	document.body.appendChild(shadow);
	shadow.appendChild(registerMenuBox);
	registerMenuBox.appendChild(form);
}
function CreaterProfilMenu()
{

}