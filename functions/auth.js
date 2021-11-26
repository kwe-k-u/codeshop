const buyer_form = $('buyer_account_form');
const developer_form = $('developer_account_form');

// buyer fields
const buyer_email = $('#email');
const buyer_username = $("#user_name");
const buyer_password = $('#password');
const buyer_cpassword = $('#cPassword');
// developer fields
const developer_email = $('#demail');
const developer_username = $("#duser_name");
const developer_password = $('#dpassword');
const developer_cpassword = $('#dcPassword');



//ensure email format is acceptable
const checkEmail = (email) =>{
	const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!regex.test(email.val())){
        displayError(email.next(), 'Email is not valid');
		return 1;
    }

	return 0;
}



//check if string meets passed length requirements
const checkLength = (field, minSize, maxSize) => {
	if (field.val().length < minSize || field.val().length > maxSize){
		displayError(field, "Character count must be between " + minSize+ " and " +maxSize);
		return 1;
	}

	return 0;
}



// checks if the sign up fields are properly filled
const checkSignUp = (username, email, password, cPassword) =>{

	let errorCount = 0;

	// const test = getElement("email");
	console.error(test.val);

	errorCount += checkEmail(email);
	console.error(username.val());
	console.error(email.val());
	console.error(password.val());
	console.error(cPassword.val());
	errorCount += checkLength(username, 4,10);
	errorCount += checkLength(password, 4,10);
	errorCount += checkLength(cPassword, 4,10);

	if (password.val() != cPassword.val()){
		displayError( pssword, "The passwords do not match");
		displayError( cPassword, "The passwords do not match");
		errorCount +=1;
	}

	return errorCount;

}

// const getElement = (id) =>{
// 	console.log(document.getElementById("email").val);
// 	return document.getElementById(id);
// }

//displays errors to the  screen
const displayError = (tag, message) => {
	tag.next().html(message);
}

// const resetError = () => {
// 	displayError(buyer_email, "");
// 	displayError(buyer_password, "");
// 	displayError(buyer_username, "");
// 	displayError(buyer_cpassword, "");

// 	displayError(developer_email, "");
// 	displayError(developer_password, "");
// 	displayError(developer_cpassword, "");
// 	displayError(developer_username, "");
// }

//throws an error if any field hasn't been filled



function buyer_signup(){
	let error =  checkSignUp(buyer_username, buyer_email, buyer_password, buyer_cpassword);
	return error ===0;
}


function developer_signup(){
	let error = checkSignUp(developer_username, developer_email, developer_password, developer_cpassword);



	return error === 0;
}



function log_in(){


	const email = $("#login_email");
	const password = $("#login_password");
	let errorCount =0;

	errorCount += checkEmail(email);
	errorCount += checkLength(password,4,3);

	return errorCount === 0;

}