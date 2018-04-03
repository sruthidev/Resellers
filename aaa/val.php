<script>
   function valid()
{
//	if(isNaN(document.sregister.adno.value))
//    {
//     alert("using only numbers");
//	 document.sregister.adno.focus();
//	 return false;
//   }
 if(document.sregister.fname.value=="")
  {
     alert("enter name");
	 document.sregister.fname.focus();
	 return false;
  }
  if(!document.sregister.fname.value.match(/^[a-z A-Z]+$/))
  {
     alert("alphabets only");
	 document.sregister.fname.focus();
	 return false;
   }
	 if(!document.sregister.lname.value.match(/^[a-z A-Z]+$/))
   {
      alert("alphabets only");
 	 document.sregister.lname.focus();
 	 return false;
    }
//   if(document.sregister.dob.value=="")
//   {
//      alert("enter your date of birth");
//	 document.sregister.dob.focus();
//	 return false;
//	}

//	if((document.sregister.gender[0].checked==false)&&(document.sregister.gender[1].checked==false))
//	{
//	   alert("please select the gender");
//	   return false;
//	 }
	 if(document.sregister.mobilenumber.value=="")
   {
      alert("enter your mobile number");
	 document.sregister.mobilenumber.focus();
	 return false;
	}
	if(isNaN(document.sregister.mobilenumber.value))
    {
     alert("using only numbers");
	 document.sregister.mobilenumber.focus();
	 return false;
   }
   var mobile=document.sregister.mobilenumber.value;
   if(mobile.length!=10)
   {
     alert("mobile number contain 10 digit");
		 document.sregister.mobilenumber.focus();
	 return false;
	}
	if(document.sregister.email.value=="")
   {
      alert("enter the mail address");
	 document.sregister.email.focus();
	 return false;
	}

//	if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.sregister.email.value)))
//	{
//		alert("you have entered an invalid email address:");
//		return false;
//	}
//	if(isNaN(document.sregister.pin.value))
//		{
//		 alert("using only numbers");
//	 document.sregister.pin.focus();
//	 return false;
//	 }

	if (document.sregister.password.value=="")
	 {
		 alert("provide password");
		 document.sregister.password.focus();
		 return false;
	 }
//	 if(!document.sregister.hname.value.match(/^[a-z A-Z]+$/))
//   {
//      alert("alphabets only");
// 	 document.sregister.hname.focus();
// 	 return false;
//    }
//		if(!document.sregister.place.value.match(/^[a-z A-Z]+$/))
//	  {
//	     alert("alphabets only");
//		 document.sregister.place.focus();
//		 return false;
//	   }
}
</script>




        <script>
   function valid()
{
	if(isNaN(document.sregister.gstnumber.value))
    {
     alert("using only numbers");
	 document.sregister.gstnumber.focus();
	 return false;
   }
 if(document.sregister.fname.value=="")
  {
     alert("enter name");
	 document.sregister.fname.focus();
	 return false;
  }
  if(!document.sregister.fname.value.match(/^[a-z A-Z]+$/))
  {
     alert("alphabets only");
	 document.sregister.fname.focus();
	 return false;
   }
	 if(!document.sregister.lname.value.match(/^[a-z A-Z]+$/))
   {
      alert("alphabets only");
 	 document.sregister.lname.focus();
 	 return false;
    }
//   if(document.sregister.dob.value=="")
//   {
//      alert("enter your date of birth");
//	 document.sregister.dob.focus();
//	 return false;
//	}

//	if((document.sregister.gender[0].checked==false)&&(document.sregister.gender[1].checked==false))
//	{
//	   alert("please select the gender");
//	   return false;
//	 }
	 if(document.sregister.mobilenumber.value=="")
   {
      alert("enter your mobile number");
	 document.sregister.mobilenumber.focus();
	 return false;
	}
	if(isNaN(document.sregister.mobilenumber.value))
    {
     alert("using only numbers");
	 document.sregister.mobilenumber.focus();
	 return false;
   }
   var mobile=document.sregister.mobilenumber.value;
   if(mobile.length!=10)
   {
     alert("mobile number contain 10 digit");
		 document.sregister.mobilenumber.focus();
	 return false;
	}
	if(document.sregister.email.value=="")
   {
      alert("enter the mail address");
	 document.sregister.email.focus();
	 return false;
	}

//	if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.sregister.email.value)))
//	{
//		alert("you have entered an invalid email address:");
//		return false;
//	}
//	if(isNaN(document.sregister.pin.value))
//		{
//		 alert("using only numbers");
//	 document.sregister.pin.focus();
//	 return false;
//	 }

	if (document.sregister.password.value=="")
	 {
		 alert("provide password");
		 document.sregister.password.focus();
		 return false;
	 }
//	 if(!document.sregister.hname.value.match(/^[a-z A-Z]+$/))
//   {
//      alert("alphabets only");
// 	 document.sregister.hname.focus();
// 	 return false;
//    }
//		if(!document.sregister.place.value.match(/^[a-z A-Z]+$/))
//	  {
//	     alert("alphabets only");
//		 document.sregister.place.focus();
//		 return false;
//	   }
}
</script>