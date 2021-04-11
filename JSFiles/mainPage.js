window.onload = function(){
    $("#login-btn").on("click",(function(e){
    var div = $('<div id="login"><p id="close" style="width:fit-content;">x</p>'+
                '<form method="POST" action="PHP/login.php" id="form">' +
                '<input class="required" type="text" name="username" id="username" placeholder="Username"/><br>'+
                '<input class="required" type="password" name="password" id="password" placeholder="Password" /><br>'+
                '<a style="font-size:small;padding:5px;" href="html/forgotpassword.html"><u>Forgot Password</u></a><br>'+
                '<button class="submit" id="login-submit" type="submit" >Login</button></form></div>');

    $(this).after(div);
    $("#login").fadeIn(1000);
    //just adds the eventlistener to close the login div/form
    $("#form").submit(function (e) { 
      var inputs = document.getElementsByTagName("input");
      console.log(inputs);
      for(var i =0; i<inputs.length;i++){
        if(inputs[i].value == "" ){
          e.preventDefault();
          inputs[i].style.borderWidth = "2px";
          inputs[i].style.borderColor = "red";
        }
        //if the user is typing set the border to white
          inputs[i].addEventListener("input",function(e){
            e.target.style.borderColor="white";
          });
      }      
    });
    $("#close").on("click",(function(e){
      $("#login").fadeOut(1000);
      $("#login").remove();
      console.log("this method is called");
      // e.preventDefault();
    
    }));
  }));
}
