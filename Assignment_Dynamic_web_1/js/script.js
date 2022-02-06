$('.menu') . on('click', function () {
    $(this).toggleClass('active');
    $('.overlay').toggleClass('menu-open');
});
$('nav a'). on('click', function () {
    $('.menu').removeClass('active');
    $('.overlay').removeClass('menu-open');
});
function getInfo() {
  var firstName = document.getElementById("fname");
  var lastName = document.getElementById("lname");
  var mobiNum = document.getElementById("numberMobi");
  var homeAdd = document.getElementById("homeAdd");
  var Email = document.getElementById("email");
  var gender = document.getElementsByName('gender');
  var state = document.getElementById("state");
  var hearUs = document.getElementsByName("hearUs"); 
  var reco = document.getElementsByName("reco");
  // function //
  if (!checkInfo(firstName, "Please enter your first name ")) {
    return false;
  }
  if (!checkInfo(lastName, "Please enter your last name")) {
    return false;
  }
  if (!checkNum(mobiNum, "Please enter your phone number with number")) {
    return false;
  }
  if (!checkNote(homeAdd, "Please enter your address")) {
    return false;
  }
  if (!checkEmail(Email, "Please enter your email address")) {
    return false;
  }
  if (!checkRadio(gender, "Please select your gender")) {
    return false;
  }
  if (!checkOptions(state, "Please choose your state")) {
    return false;
  }
  if (!checkRadio(hearUs, "Please tell us how did you learn about us")) {
    return false;
  }
  if (!checkRadio(reco, "Please choose Yes or No")) {
    return false;
  }
  return true;
}

function checkInfo(name, message) {
  var checkSign = /^[a-zA-Z]+$/;
  if (checkSign.test(name.value)) {
    return true;
  } else {
    alert(message);
    name.focus();
    return false;
  }
}

function checkNum(num, message) {
  var number = /^(\+|\()?[0-9\ )]+$/;
  if (number.test(num.value)) {
    return true;
  } else {
    alert(message);
    num.focus();
    return false;
  }
}

function checkNote(note, message) {
  if (note.value.length == 0) {
    alert(message);
    note.focus();
    return false;
  }
  return true;
}

function checkEmail(email, message) {
  var emailRule = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/;
  if (emailRule.test(email.value)) {
    return true;
  } else {
    alert(message);
    email.focus();
    return false;
  }
}


function checkRadio(item, message) {            
  var radio_check_val = "";
  for (i = 0; i < item.length; i++) {
      if (item[i].checked == true) {
          radio_check_val = item[i].value;        
      }        
  }
  if (radio_check_val === "")
  {
      alert(message);
      item.focus();
  }  
  return radio_check_val;      
}

function checkOptions(item, message) {
  if (item.value == "Select State") {
    alert(message);
    item.focus();
    return false;
  } else {
    return true;
  }

}



function checkAds(item, message){
  if (item.value == "Select Ads") {
    alert(message);
    item.focus();
    return false;
  } else {
    return true;
  }

}

function survey() {
  if (checkNumberOf()) {
  var num1 = document.getElementById("num1").value;
  var num2 = document.getElementById("num2").value;
  var num3 = document.getElementById("num3").value;
  var num4 = document.getElementById("num4").value;
  var num5 = document.getElementById("num5").value; 

  

    var results =
      (parseInt(num1) + parseInt(num2) +
        parseInt(num3) +
        parseInt(num4) +
        parseInt(num5)) / 
        5;

    if (results >= 1 && results < 2) {
      alert(
        "You rated us " +
          results +
          " - Thank you for letting us know that we  NEED IMPROVEMENTS"
      );
    } else if (results >= 2 && results < 3) {
      alert("Thank you for rating us " + results + " - Satisfactory");
    } else if (results >= 3 && results < 4) {
      alert("Thank you for rating us " + results + " - Good");
    } else if (results >= 4 && results < 5) {
      alert("Thank you for rating us " + results + " - Very Good");
    }
    // -- this case is actually when result equals to 5
    else {
      alert("Thank you for rating us " + results + " - Excellent");
    }
  }
}

function checkNumberOf() {
  if (checkNum(document.getElementById("num1"))) {
    if (checkNum(document.getElementById("num2"))) {
      if (checkNum(document.getElementById("num3"))) {
        if (checkNum(document.getElementById("num4"))) {
          if (checkNum(document.getElementById("num5"))) {
            return true;
          } else {
            alert(
              "Please input a number between 1 and 5 for Quality of Products"
            );
            return false;
          }
        } else {
          alert("Please input a number between 1 and 5 for Customer Service");
          return false;
        }
      } else {
        alert("Please input a number between 1 and 5 for Eco Friendliness");
        return false;
      }
    } else {
      alert("Please input a number between 1 and 5 for Style and Design");
      return false;
    }
  } else {
    alert("Please input a number between 1 and 5 for Durability");
    return false;
  }
}

function checkNum(num) {
  if (numRight(num) && noEmpty(num) && checkRange(num)) {
    return true;
  } else {
    return false;
  }
}

function numRight(num) {
  if (isNaN(num) == true) {
    return true;
  }
}

function noEmpty(num) {
  if (num.value.length == 0) {
    return false;
    num.focus();
  } else {
    return true;
  }
}

function checkRange(num) {
  if (parseInt(num.value) <= 5 && parseInt(num.value) >= 1) {
    return true;
  } else {
    return false;
    num.focus();
  }
}
