$("#login-btn").on("click",(function(e){
  var div = $('<div id="login"><p id="close" style="width:fit-content;">x</p>'+
              '<form method="get" action="#" id="sampleForm"><input type="text" placeholder="Username"/><br>'+
              '<input type="password" name="pass" id="pass" placeholder="Password" /><br>'+
              '<a style="font-size:small;padding:5px;" href="html/forgotpassword.html"><u>Forgot Password</u></a><br>'+
              '<button class="submit" id="login-submit" type="submit" >Login</button></form></div>');

  $(this).after(div);
  $("#login").fadeIn(1000);
  //just adds the eventlistener to close the login div/form
  $("#close").on("click",(function(e){
    $("#login").fadeOut(1000);
    $("#login").remove();
    console.log("this method is called");
    // e.preventDefault();
  
  }));
}));

//
