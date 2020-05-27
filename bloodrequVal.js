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
		
function valBag(){
			var valBag = document.getElementById('bag').value;
 			var bagError = document.getElementById('bagError'); 
 			if(valBag.trim() == ""){
 				bagError.innerHTML = "you must enter amount";
 				return false;
 			}
 			return true;			
 		}
		
function valBg(){
			var valBg = document.getElementById('bg').value;
 			var bgError = document.getElementById('bgError'); 
 			if(valBg.trim() == ""){
 				bgError.innerHTML = "you must enter blood  group";
 				return false;
 			}
 			return true;			
 		}

 function validate(){
 			valName();
 			valDate();
 			valBag();
 			valTime();
 			valBg();
			
 			if(valName() && valBg() && valBag() && valDate() && valTime()){
 				return true;
 			}
 			else{
 				return false;
 			}
 		}