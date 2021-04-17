window.onload = function(){
  //gets the form tag
  var form = document.getElementById("form");
  /*gets all the input elements and loops through them to checks if theyre null (empty)
    and prevents submit if they are*/
  form.onsubmit = function(e){
    var inputs = document.getElementsByTagName("input");
    console.log(inputs);
    for(var i =0; i<inputs.length;i++){
      if(inputs[i].value == "" ){
        e.preventDefault();
        inputs[i].style.borderWidth = "1px";
        inputs[i].style.borderColor = "red";
      }
      //if the user is typing set the border to white
        inputs[i].addEventListener("input",function(e){
          e.target.style.borderColor="white";
        });
    }
  }
}