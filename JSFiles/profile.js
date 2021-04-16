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
    div.fadeIn(600);0
  });
  $("#close").on("click",(function(e){
    $("#login").fadeOut(1000);
    $("#login").remove();
    console.log("this method is called");
    // e.preventDefault();
  
  }));
  var newpostbtn = $("#new-post");
  newpostbtn.on("click", function(e){
    var div = $('<div id="post" class="profile-posts-container">'+
          '<form><div class="input-box" > '+
                '<p><label for="posttitle"><b>Blog Title:</b></label></p>'+
                '<input id="posttitle" type="text" name="posttitle">'+
                '</div>'+
            '<div class="input-box">'+
                '<p><label for="category"><b>Blog Category:</b></label></p>'+
                '<input id="postcategory" type="text" name="category" placeholder="fashion, sports, movies">'+
            '</div>"'+
            
            '<div class="input-box" >'+
                '<p><label for="postcontent"><b>Blog Content:</b></label></p>'+
                '<textarea id="postcontent" rows="8" cols="70" name="blogcontent"></textarea>'+
            '</div></form></div>');
    $("#posts-btns").after(div);
  });
}