  //check passwords

function isBlank(inputField)
{
    if (inputField.value=="")
    {
	     return true;
    }
    return false;
}

function makeRed(inputDiv){
	inputDiv.style.borderColor="#AA0000";
}

function makeClean(inputDiv){
	inputDiv.style.borderColor="#FFFFFF";
}
function checkPasswordMatch(e){
  var a = document.getElementById("password").value;
  var b = document.getElementById("password-check").value;
  if(a!=b){
    e.preventDefault();
    alert("Passwords do not match");
    makeRed(document.getElementById("password"));
    makeRed(document.getElementById("password-check"));
    // err = true;
    
  }
}
window.onload = function()
{
    var mainForm = document.getElementById("loginform");
    // var requiredInputs = document.querySelectorAll(".required");

    mainForm.onsubmit = function(e)
    {
	     var requiredInputs = document.querySelectorAll(".required");
       var err = false;

	     for (var i=0; i < requiredInputs.length; i++)
       {
	        if( isBlank(requiredInputs[i]))
          {
		          err |= true;
		          makeRed(requiredInputs[i]);
	        }
	        else
          {
		          makeClean(requiredInputs[i]);
	        }
	    }
      if (err == true)
      {
        e.preventDefault();
      }
      else
      {
        console.log('checking match');
        checkPasswordMatch(e);
      }
    }
}
