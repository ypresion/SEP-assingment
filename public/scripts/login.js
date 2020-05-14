const username = document.getElementById('username');
const password = document.getElementById('password');
const warning = document.getElementById('warning');
const form = document.getElementsByTagName('form')[0];
//warning: border-red-500  

form.addEventListener('submit', validate);

function validate() {
    if(username.value==="" && password.value==="") {
        username.classList.add('border-red-500');
        password.classList.add('border-red-500');
        warning.classList.remove('hidden');
        warning.textContent = "Please enter your username and your password."
        return false;
    } else if (username.value==="") {
        username.classList.add('border-red-500');
        warning.classList.remove('hidden');
        warning.textContent = "Please enter your username.";
        return false;
    } else if (password.value==="") {
        password.classList.add('border-red-500');
        warning.classList.remove('hidden');
        warning.textContent = "Please enter your password.";
        return false;
    } else {
        warning.classList.add('hidden');
        username.classList.remove('border-red-500');
        password.classList.remove('border-red-500');
    }
    
}
