function valUsername(){
 			var valUname = document.getElementById('username').value;
 			var UnameError = document.getElementById('UnameError');
			
 			if(valUname.trim() == ""){
 				document.getElementById('UnameError').innerHTML = 'you must enter username';
 				return false;
 			}
 			else{
 				UnameError.innerHTML = "";
				return true; 
 			}
 		}

 			
 function valEmail(){
 			var valEmail = document.getElementById('email').value;
 			var emailError = document.getElementById('emailError');
			
 			if(valEmail.trim() !== ""){
 				var parts = valEmail.split("@");
        		var dot = parts[1].indexOf(".");
				
        		if(dot == -1){
        			emailError.innerHTML = 'email address not valid';
 					return false;
        		}
        		else{
	 				emailError.innerHTML = '';
	 				return true;
	 			}	 							
 			}
 			else if(valEmail.trim() == ""){
        			emailError.innerHTML =	"you must enter email";
 					return false;
        		}
 			else{
 				emailError.innerHTML = '';
 				return true;
 			}
 		}

function valPhone(){
 			var valPhone = document.getElementById('phone').value;
 			var phoneError = document.getElementById('phoneError');

 			if( valPhone.length < 8 || valPhone.length > 14){
 				phoneError.innerHTML = 'phone number is not valid';
 				return false;
 			}
 			else{
 				phoneError.innerHTML = '';
 				return true;
 			}
 		}
		
		
 function valPass(){
 			var valPass = document.getElementById('pass').value;
 			var passError = document.getElementById('passError');
			
 			if(valPass.length < 5){
 				passError.innerHTML = "atleast 5 charecter required";
 				return false;
 			}
 			else{
				passError.innerHTML = "";
 				return true;
 			}
 		}
 		
 		
 function valAge(){
			var valAge = document.getElementById('age').value;
 			var ageError = document.getElementById('ageError'); 
 			if(valAge.trim() == ""){
 				ageError.innerHTML = "you must enter age in years";
 				return false;
 			}
 			return true;			
 		}


 function validate(){
 			valUsername();
 			valEmail();
 			valPhone();
 			valPass();
 			valAge();
			
 			if(valUsername() && valEmail() && valPhone() && valPass() && valAge()){
 				return true;
 			}
 			else{
 				return false;
 			}
 		}