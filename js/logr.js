const form1 = document.getElementById("Create-Account");
const form2 = document.getElementById("sign-in");
const username = document.getElementById("user-name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const rpassword = document.getElementById("r-password");
const siusername = document.getElementById("si-user-name");
const sipassword = document.getElementById("si-password");

form1.addEventListener('submit', e => {
    e.preventDefault();
    checkInput();
});

function checkInput() {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const rpasswordValue = rpassword.value.trim();
    const siusernameValue = siusername.value.trim();
    const sipasswordValue = sipassword.value.trim();

    if (usernameValue === '') {
        seterror(username, 'Username cannot be blank');
    } else {
        setsuccess(username);
    }


    if (emailValue === '') {
        seterror(email, 'email cannot be blank');
    } else if (!isemail(emailValue)) {
        seterror('email not vaild');

    } else {
        setsuccess(email);
    }
    if (emailValue === '') {
        seterror(email, 'email cannot be blank');
    } else if (!isemail(emailValue)) {
        seterror('email not vaild');
    } else {
        setsuccess(email);
    }

    if (passwordValue === '') {
        seterror(password, 'password cannot be blank');
    } else {
        setsuccess(password);
    }

    if (rpasswordValue === '') {
        seterror(password, 'password cannot be blank');
    } else if (passwordValue == rpasswordValue) {
        seterror(password, 'password  does not match');
    } else {
        setsuccess(password);
    }


    function seterror(input, message) {
        const formControl = input.parentElement;
        const small = form.querySelector('small');
        formControl.classname = 'form.error';
        small.innerText = message;
    }

    function isemail() {
        return /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }

}