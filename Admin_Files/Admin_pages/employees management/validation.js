
/*
author: Nejood Abdulaziz Alfashka
        ID: 1505971
      date: 25/7/2018
       
*/

/*
     summary of page:

 This function is to check if the user enter corect information befor insert it in the database
*/



function validate(){ //START the function

/*--------------- start check if it is Null -------------------*/
	if(document.getElementById("E_email").value===""){ //if email is null
	 alert("please enter the email"); //the message
	 document.getElementById("E_email").style.background="#ccddff"; //change the color of background field
	 return false; //return false if email is null
} // end check of email

if(document.getElementById("KAU_ID").value===""){ //if id is null
	 alert("please enter the id"); //the message
	document.getElementById("KAU_ID").style.background="#ccddff"; //change the color of background field
	 return false; //return false if id is null
} // end check of id

/*--------------- end check if it is Null -------------------*/


/*--------------- start check to other condition -------------------*/

if(document.getElementById("E_email").value!=""){ //check to email it is not null
		var EmailV= document.getElementById("E_email").value.toLowerCase();
		 if(!(EmailV.endsWith("@kau.edu.sa"))){ //check to email format
            alert("invalid email..please enter KAU email"); //the message
           document.getElementById("E_email").style.background="#ffcccc";//change the color of background field
		 return false; //return false if email is not KAU email 
		   } //end check to format
 		    
} //end check of email

//-----------------

if(document.getElementById("KAU_ID").value!=""){ //check to id it is not null 
	 var id = document.getElementById("KAU_ID").value; 
	 if(id.length!=8){ // check the length of id
	 	alert("invalid id..please enter id that is not longer than 8 numbers or less"); //the message
	 document.getElementById("KAU_ID").style.background="#ffcccc"; //change the color of background field
	 return false; //return false if the lenfth of id is not = 8
	 } //end check of id length

} //end check to id

/*--------------- end check to other condition -------------------*/


return true; // if all the conditions are not true the function will return true
} //end function