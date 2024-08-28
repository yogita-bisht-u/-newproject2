
// document.getElementById("user").addEventListener("submit",mysubmitfunction);
function mysubmitfunction(event){
    var validform=true;
    //  event.preventDefault();
    console.log("my function called");
    alert("form submitted"+ document.getElementById("username").value + document.getElementById("password").value);
    
var username=  document.getElementById("username").value;
    if(username==""){
        validform=false;
        document.getElementById("usernameerror").innerHTML="<p> user name blank</p>";
    }
else{
    document.getElementById("usernameerror").innerHTML="<p> user name valid</p>";
}
    


var password=document.getElementById("password").value;
var passwordlength=password.length;
if (passwordlength<=6){
    validform=false;
    document.getElementById("passworderror").innerHTML="<p> please enter valid password</p>"
}
else{
    document.getElementById("passworderror").innerHTML="<p> valid password </p"
}
if (validform){
    document.getElementById("user").submit();
}
//  if(password==""){
//     document.getElementById("passworderror").innerHTML="<p> password blank </P>";

// }
// else{
//     document.getElementById("passworderror").innerHTML="<p> password is valid</p>"
// }      
return validform;}
