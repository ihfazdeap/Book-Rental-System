// Sign Up

var myInput = document.getElementById("password_1");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number1 = document.getElementById("number1");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function validate_password() {
  document.getElementById("message2").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function validate_password() {
  document.getElementById("message2").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function validate_password() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number1.classList.remove("invalid");
    number1.classList.add("valid");
  } else {
    number1.classList.remove("valid");
    number1.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}



var Username = document.getElementById("username");
var capital2 = document.getElementById("capital2");
var length2 = document.getElementById("length2");

// When the user clicks on the username field, show the message box
Username.onfocus = function validate_username() {
  document.getElementById("message1").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
Username.onblur = function validate_username() {
  document.getElementById("message1").style.display = "none";
}

// When the user starts to type something inside the username field
Username.onkeyup = function validate_username() {

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(Username.value.match(upperCaseLetters)) {
    capital2.classList.remove("valid");
    capital2.classList.add("invalid");
  } else {
    capital2.classList.remove("invalid");
    capital2.classList.add("valid");
  }


  // Validate length
  if(Username.value.length >= 6) {
    length2.classList.remove("invalid");
    length2.classList.add("valid");
  } else {
    length2.classList.remove("valid");
    length2.classList.add("invalid");
  }
}



var number = document.getElementById("number");
var length3 = document.getElementById("length3");

// When the user clicks on the username field, show the message box
number.onfocus = function validate_number() {
  document.getElementById("message3").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
number.onblur = function validate_number() {
  document.getElementById("message3").style.display = "none";
}

// When the user starts to type something inside the username field
number.onkeyup = function validate_number() {


  // Validate length
  if(number.value.length == 11) {
    length3.classList.remove("invalid");
    length3.classList.add("valid");
  } else {
    length3.classList.remove("valid");
    length3.classList.add("invalid");
  }
}


// Sign up ends