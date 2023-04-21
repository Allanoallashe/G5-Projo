
  // first password
document.getElementById('hide').onclick = () => {
  document.getElementById('view').style.display="contents";
  document.getElementById('hide').style.display = "none";
  document.getElementById('pwd1').type="text";
  document.getElementById('pwd1').style.letterSpacing="5px";
}
document.getElementById('view').onclick = () => {
  document.getElementById('view').style.display="none";
  document.getElementById('hide').style.display = "contents";
  document.getElementById('pwd1').type = "password";
  document.getElementById('pwd1').style.letterSpacing="14px";
}

  // second password
document.getElementById('hider').onclick = () => {
  document.getElementById('viewer').style.display="contents";
  document.getElementById('hider').style.display = "none";
  document.getElementById('pwd2').type = "text";
  document.getElementById('pwd2').style.letterSpacing="5px";
}
document.getElementById('viewer').onclick = () => {
  document.getElementById('viewer').style.display="none";
  document.getElementById('hider').style.display = "contents";
  document.getElementById('pwd2').type="password";
  document.getElementById('pwd2').style.letterSpacing="14px";
}

// login password
document.getElementById('hidden').onclick = () => {
  document.getElementById('viewed').style.display="contents";
  document.getElementById('hidden').style.display="none";
  document.getElementById('pwd3').type = "text";
    document.getElementById('pwd3').style.letterSpacing="5px";
}
document.getElementById('viewed').onclick = () => {
  document.getElementById('hidden').style.display="contents";
  document.getElementById('viewed').style.display = "none";
  document.getElementById('pwd3').type="password";
  document.getElementById('pwd3').style.letterSpacing="14px";
}



// form validation js

const userName = document.getElementById('name');
const emailOne = document.getElementById('email1');
const emailTwo = document.getElementById('email2');
const pwdOne = document.getElementById('pwd1');
const pwdTwo = document.getElementById('pwd2');
const formOne = document.querySelector('.form1');
const formTwo = document.querySelector('.form2');
const signUp = document.getElementById('signUp');
const signIn = document.getElementById('signIn');



// form display
signUp.addEventListener('click', () => {
  formOne.style.display="flex";
  formTwo.style.display = "none";
  formOne.style.transition="all ease-in-out 0.5s";
  formTwo.style.transition="all ease-in-out 0.5s";
});

signIn.addEventListener('click', () => {
  formOne.style.display="none";
  formTwo.style.display="flex";
  formOne.style.transition="all ease-in-out 0.5s";
  formTwo.style.transition="all ease-in-out 0.5s";
})


function Validation() {
  // check an empty user name
  if (userName.value.trim() === "") {
    Invalid(userName,"User Name Is Required!");
  }
  else {
    Successful(userName);
  }
  // registration email
  if (emailOne.value.trim() === "") {
    Invalid(emailOne,"Enter Your Email!");
  }
  else {
    if (!validEmail(emailOne.value.trim())) {
      Invalid(emailOne,"Invalid Email!");
    } else 
      Successful(emailOne);
  }

  // login email
  // if (emailTwo.value.trim() === "") {
  //   Invalid(emailTwo,"Enter Your Email!");
  // }
  // else {
  //   if (!validEmail(emailTwo.value.trim())) {
  //     Invalid(emailTwo,"Invalid Email!");
  //   } else 
  //     Successful(emailTwo);
  // }
  // password1
   if (pwdOne.value.trim() === "") {
    Invalid(pwdOne,"Password1 Is Required!");
  }
  else {
    Successful(pwdOne);
  }

  // Password2
   if (pwdTwo.value.trim() === "") {
    Invalid(pwdTwo,"Password2 Is Required!");
  }
   else {
     if (pwdTwo.value.trim() !== pwdOne.value.trim()) {
       Invalid(pwdTwo, "Passwords do not Match!");
     } else {
       Successful(pwdTwo);
     }
  }
}


// define success
function Successful(input) {
  let parent = input.parentElement;
  let message = parent.querySelector('small');
   message.style.visibility = "hidden";
  // parent.classList.add('valid');
  // parent.classList.remove('empty');
}
function Invalid(input,alert) {
  let parent = input.parentElement;
  let message = parent.querySelector('small');
   message.style.visibility='visible';
   message.innerText = alert;
  // parent.classList.add('empty');
  // parent.classList.remove('valid');
}
function validEmail(emailOne)
{
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailOne);
}
function validEmail(emailTwo)
{
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailTwo);
}

  document.querySelector('.submit').addEventListener('click', (e) => {
    if (pwdTwo.value.trim() === pwdOne.value.trim()) {
      Validation();
    } else {
      Validation();
      e.preventDefault();
    }
  })

  
