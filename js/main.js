let userName = "gaza";
let password = 1234;
let email = "something@google.com";
let count = 2;


document.getElementById('toggleSignup').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('login-form').classList.add('hidden');
    document.getElementById('signup-form').classList.remove('hidden');
});

document.getElementById('toggleLogin').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('signup-form').classList.add('hidden');
    document.getElementById('login-form').classList.remove('hidden');
});



document.getElementById('login-btn').addEventListener('click', function(){
    if(document.getElementById('usernameInput').value == userName && document.getElementById('passwordInput').value == password){
        window.location.href = 'Save_Gaza.html';
        return;
    }
    if(!count)
        window.close();
    count--;
});