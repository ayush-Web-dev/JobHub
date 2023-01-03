const Password = document.getElementById("login-pass");
const Icon = document.getElementsByClassName("login-hideShow")[0];

const showHidePass = () => {
	if (Password.type === "password") {
		Password.type = "text";
		Icon.classList.replace("uil-eye-slash", "uil-eye");
	} else {
		Password.type = "password";
		Icon.classList.replace("uil-eye", "uil-eye-slash");
	}
};

const handleLogin = () => {
	const name = document.getElementById("login-username").value;
	const pass = document.getElementById("login-pass").value;
	const User = {
		username: name,
		password: pass,
	};
	console.log(User);
localStorage.setItem('users', name)

	name === "" || pass === "" ? 
	alert("Please enter correct username and password") : location.href = "home"
	
};
