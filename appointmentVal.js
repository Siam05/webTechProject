function valName(){
 			var valName = document.getElementById('name').value;
 			var nameError = document.getElementById('nameError');
			
 			if(valName.trim() == ""){
 				document.getElementById('nameError').innerHTML = 'you must enter name';
 				return false;
 			}
 			else{
 				nameError.innerHTML = "";
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
 		
 function valDate(){
			var valDate = document.getElementById('date').value;
 			var dateError = document.getElementById('dateError'); 
 			if(valDate.trim() == ""){
 				dateError.innerHTML = "you must enter date";
 				return false;
 			}
 			return true;			
 		}
		
function valTime(){
			var valTime = document.getElementById('time').value;
 			var timeError = document.getElementById('timeError'); 
 			if(valTime.trim() == ""){
 				timeError.innerHTML = "you must enter time";
 				return false;
 			}
 			return true;			
 		}
		
function valId(){
			var valId = document.getElementById('did').value;
 			var didError = document.getElementById('didError'); 
 			if(valId.trim() == ""){
 				didError.innerHTML = "you must enter doctor id";
 				return false;
 			}
 			return true;			
 		}

 function validate(){
 			valName();
 			valDate();
 			valPhone();
 			valTime();
 			valId();
			
 			if(valName() && valId() && valPhone() && valDate() && valTime()){
 				return true;
 			}
 			else{
 				return false;
 			}
 		}