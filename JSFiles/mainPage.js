$("#login-btn").on("click",(function(e){
  var div = $('<div id="login"><script type="text/javascript" src="validate.js"></script><p id="close" style="width:fit-content;">x</p>'+
              '<form method="POST" action="PHP/login.php" id="loginform">' +
              '<input class="required" type="text" name="username" id="username" placeholder="Username"/><br>'+
              '<input class="required" type="password" name="password" id="password" placeholder="Password" /><br>'+
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
