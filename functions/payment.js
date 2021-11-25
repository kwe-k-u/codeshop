function mobileNumber(){

	var Number = document.getElementById('YOUR ELEMENT ID').value;
	var IndNum = /^[0]?[789]\d{9}$/;

	if(IndNum.test(Number)){
	   return;
   }

   else{
	   $('#errMessage').text('please enter valid mobile number');
	   document.getElementById('profile_telephoneNumber').focus();
   }

}