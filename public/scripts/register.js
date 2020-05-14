
const first = document.getElementById('firstName');
const second = document.getElementById('lastName');
const username = document.getElementById('username');
const password = document.getElementById('password');
const passwordC = document.getElementById('c_password');
const fields = [first, second, username, password, passwordC];

const warning = document.getElementById('warning');
const form = document.getElementsByTagName('form')[0];
let validated = false;

fields.forEach((e) => e.addEventListener('input', validate));
//form.addEventListener('submit', ifValidated);

function validate(e) {
    if(e.target.value=="") {
        e.target.classList.add('border-red-500')
            warning.classList.remove('hidden');
            warning.textContent = "Please fill out all the fields.";
            validated = false;
        } else {
            e.target.classList.remove('border-red-500');
        }
}
    
function isValidated() {
    if(password.value != passwordC.value) {
        warning.classList.remove('hidden');
        warning.textContent = "Passwords do not match.";
        validated = false;
    } 


}
