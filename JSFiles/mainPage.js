$("#login-btn").on("click",(function(e){
  var div = $('<div id="login"><p id="close" >x</p><h1>Registration</h1><form method="get" action="#" id="sampleForm"><input type="text" placeholder="UserName"/><br><input type="text" name="email" id="email" placeholder="Email" /><br><input type="password" name="pass" id="pass" placeholder="Password" /><br><button id="login-submit" type="submit" >Login</button></form></div>');
  //idk why but it didn't work when done on seperate lines so i just did it in one :)
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
