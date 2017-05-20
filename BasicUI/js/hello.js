function test(obj) {
    obj.innerHTML = "Connected with the JS file";
}

function getUserName() {
    var nameField = document.getElementById('nameField').value;
    var result = document.getElementById('result');
    
    if (nameField.length < 3) {
        result.textContent = 'Username must contain at least 3 characters';
        //alert('Username must contain at least 3 characters');
    } else {
        result.textContent = 'Your username is: ' + nameField;
        //alert(nameField);
    }
}

function getUserPassword() {
    var passwordField = document.getElementById('passwordField').value;
    var password = document.getElementById('password');
    
    if (passwordField.length < 3) {
        password.textContent = 'Password must contain at least 3 characters';
        //alert('Username must contain at least 3 characters');
    } else {
        password.textContent = 'Your password is: ' + passwordField;
        //alert(nameField);
    }
}

window.onload = function(){
// use an eventlistener for the event
var subButton = document.getElementById('subButton');
subButton.addEventListener('click', getUserName, false);
}