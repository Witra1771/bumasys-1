/*
Template Name: bumasys - Admin & Dashboard Template
Author: Bumi Code
Website: https://Bumi Code.com/
Contact: Bumi Code@gmail.com
File: Password addon Js File
*/

// password addon
if (document.getElementById('password-addon'))
	document.getElementById('password-addon').addEventListener('click', function () {
		var passwordInput = document.getElementById("password-input");
		if (passwordInput.type === "password") {
			passwordInput.type = "text";
		} else {
			passwordInput.type = "password";
		}
	});
