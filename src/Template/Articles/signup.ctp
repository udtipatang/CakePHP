<!DOCTYPE html>
<html>
<head>

  <?php $this->html->charset() ?>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <?= $this->Html->script("bootstrap.js"); ?>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>

    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}
    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for all buttons */
    input[type=button] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    input[type=button:hover] {
        opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
      float: left;
      width: 100%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }
    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    .error {color: #FF0000;}

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
           width: 100%;
        }
    }

    #message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
    }
    #message p {
    padding: 10px 35px;
    font-size: 18px;
    }
    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
    }


    </style>
</head>

<body style="background-color: #f0f3f4">
   

<div id="id01" class="" >
  <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> -->
  <form class="modal-content" method="post" action="" style="background-color: #a7b8be">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label><b>Username</b><span class="error">*</span></label>
      <input type="text" placeholder="Username" id="username" name="username"  onkeypress="return AvoidSpace(event)">
      

      <label for="email"><b>Email</b><span class="error">*</span></label>
      <input type="text" placeholder="Enter Email" id="email" name="email" >
      
      <label><b>Website</b></label>
      <input type="text" placeholder="Website" id="website" name="website" >

      <label><b>Gender</b></label>
      <br><br>
      <input type="radio" class="gender" name="gender" value="female" >Female
      <input type="radio" class="gender" name="gender" value="male">Male
      <input type="radio" class="gender" name="gender" value="other">Other
      <br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" name="psw" onkeyup="check();" >

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" id="pswrepeat" placeholder="Repeat Password" name="pswrepeat" onkeyup="check();">
      <span id="msg"></span><br><br>

      <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
        <!-- <button type="button" onclick="validate()" class="signupbtn" >Sign Up</button> -->
        <input type="button"  class="signupbtn" name="submit" value="Submit" />
      </div>
    </div>
  </form>
</div>


<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
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
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
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

var check = function() {
  if (document.getElementById('psw').value ==
    document.getElementById('pswrepeat').value) {
    document.getElementById('msg').style.color = 'green';
    document.getElementById('msg').innerHTML = 'Matching';
    // document.getElementById('mysubmit').disabled=false;
  } else {
    document.getElementById('msg').style.color = 'red';
    document.getElementById('msg').innerHTML = 'Not Matching';
    // document.getElementById('mysubmit').disabled=false;
  }
}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }

// function checkUserName()
// {
//   var username = $('#username').val();

//   function hasNumber(myString){
//   return /\d/.test(myString);
//   }

//   if(hasNumber(username)==true){alert("Number Not allowed");}
// }

// function checkEmail()
// {
//   var myEmail = $('#email').val();

//     function validateEmail(email) 
//     {
//         var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//         return re.test(String(email).toLowerCase());
//       }
//   if(validateEmail(myEmail)==false)
//     { 
//       alert("Wrong Email");
//       $("#mysubmit").attr("disabled",true);
//     }
// }

// function checkWebsite() 
// {

//   var website=$('#website').val();
//   function isUrl(s)
//   {
//   var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
//   return regexp.test(s);
//   }
//   if(isUrl(website)==false){ alert("wrong URL");}
// }

function AvoidSpace(event)
{
  var k = event ? event.which : window.event.keyCode;
  if (k==32) {
    return false;
  }
}

 // function validate()
 //  {

 //   var username = $("#username").val();
 //   var email = $("#email").val();
 //   var website = $("#website").val();
 //   var gender = $(".gender").val();
 //   var psw = $("#psw").val();
 //   var pswrepeat = $("#pswrepeat").val();

 //   email = email.trim();
 //   username = username.trim();
 //   website = website.trim();

 //   if (username == '' || email == '' || gender == '' || psw == '' || pswrepeat == '')
 //    { alert("Mandatory fields are empty");
        
 //        //for username
 //        for (var i = username.length - 1; i >= 0; i--) 
 //        {
        
 //        }
 //    }
 // }
$('#modal-content').validate({ignore: []});
    $(document).ready(function()
    {

        $('#username').rules("add",{
        required:true,
        messages:{required:"Please Enter Your Username. "}
      });

        $('#email').rules("add",{
        required:true,
            email:true,
        messages:{required:"Please Enter Email.",
                      email: "Please Enter Valid Email"},
      });
        $('#website').rules("add",{
            website:true,
        messages:{    website: "Please Enter Valid Website"},
      });
        $('#psw').rules("add",{
        required:true,
        messages:{required:"Please Enter Password."},
      });
        $('#pswrepeat').rules("add",{
        required:true,
            equalTo:psw,
        messages:{required:"Please Enter Password.",
                      equalTo: "Passwords do not match"},
      });
    });



</script>

</body>
</html>
