window.onload = function(){
  var button = document.getElementById("#new-post");
  $(button).on("click",function(e){
    var div = $(
      '<div><p id="close">X</p>'+
        '<form method="get" ><input type="text" name="title">'+
        '<p><input type="textarea" name="content"></p>'+
        '<p><img src="../images/profileIcon.svg"></p>'+
        '<input type="submit" value="Make new Post">'+
      '</div>');
    $("#here").after(div);
    div.fadeIn(600);
  });
  $("#close").on("click",(function(e){
    $("#login").fadeOut(1000);
    $("#login").remove();
    console.log("this method is called");
    // e.preventDefault();
  
  }));
}