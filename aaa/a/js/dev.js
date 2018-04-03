$(document).ready(function(){
  $("#dregistration").on("submit",function(){
    var val_name= /^[A-Za-z ]+$/;
    var val_age= /^\d{1,2}$/;
    var val_gender=/^[0-9a-zA-Z]+$/;
    var val_address=/^[0-9a-zA-Z :]+$/;
    var val_phone= /^[0-9]{9,12}$/;
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_language= /^[0-9a-zA-Z]+$/;
    var val_previous= /^[0-9]{1,10}$/;
    var val_photo= /^[^&]+$/;
    var val_username= /^[0-9a-zA-Z]+$/;
    var val_password= /^[0-9a-zA-Z]+$/;
    $name= $('#name').val();
    $age= $('#age').val();
    $gender= $('#gender').val();
    $address= $('#address').val();
    $phone= $('#phone').val();
    $email= $('#email').val();
    $language= $('#language').val();
    $experiance=$('#previous').val();
    $photo= $('#photo').val();
    $username= $('#username').val();
    $password= $('#password').val();
    if(!val_name.test($name)){
      $("#name").focus();
      alert("Enter Name, Name Must be Alphabets Only");
      return false;
    }
    else if (!val_age.test($age)) {
      $("#age").focus();
      alert(" Enter Valid Age, Age Must Contain Numbers only ");
      return false;
    }
    else if (!val_gender.test($gender)) {
      $("#gender").focus();
      alert(" Enter Valid gender ");
      return false;
    }
    else if (!val_address.test($address)) {
      $("#adress").focus();
      alert("enter address");
      return false;
    }
    else if (!val_phone.test($phone)) {
      $("#phone").focus();
      alert("enter valid phone number");
      return false;
    }
    else if (!val_email.test($email)) {
      $("#email").focus();
      alert("enter email as abc@gmail.com");
      return false;
    }
    else if (!val_language.test($language)) {
      $("#language").focus();
      alert("choose language");
      return false;
    }
    else if (!val_experiance.test($previous)) {
      $("#experiance").focus();
      alert("Choose your previous work");
      return false;
    }
    else if (!val_photo.test($photo)) {
      $("#photo").focus();
      alert("choose your photo");
      return false;
    }
    else if (!val_username.test($username)) {
      $("#username").focus();
      alert("enter username");
      return false;
    }
    else if (!val_password.test($password)) {
      $("#password").focus();
      alert("enter password");
      return false;
    }
    else {
      return true;
    }
  });
});
