//intx here id sent from body tage depends on header id
function setActiveFunction(intx){
var linklist=document.getElementsByClassName("header");//get all links
  var i;
  for(i=0; i<linklist.length;i++){
/*if the link id equle the value send to the function then 
 add class active to it*/
    if(linklist[i].id==intx){
      linklist[i].classList.add("active");
      return;
    }//end if
  }//end for loop
}//end function