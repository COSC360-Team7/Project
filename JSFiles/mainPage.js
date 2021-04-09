$("#login-btn").on("click",(function(e){
  var div = $('<div id="login"><p id="close" style="width:fit-content;">x</p>'+
              '<h1>Registration</h1><form method="get" action="#" id="sampleForm"><input type="text" placeholder="Username"/><br>'+
              '<input type="password" name="pass" id="pass" placeholder="Password" /><br>'+
              '<button id="login-submit" type="submit" >Login</button></form></div>');

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
