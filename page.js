document.getElementById("userform").addEventListener("submit",submitfunction);
function submitfunction(event){
    var validform=true;
     event.preventDefault();
    console.log("function called");
    alert("page submitted"+ document.getElementById("firstname").value + document.getElementById("lastname").value + document.getElementById("password").value +document.getElementById("conformpassword").value + document.getElementById("email").value+document.getElementById("contact").value);
    
    
    
    var firstname= document.getElementById("firstname").value;
    if(firstname==""){
        validform=false;
        document.getElementById("firstnameerrors").innerHTML="<p> first name blank</p>";
    }
else{
    document.getElementById("firstnameerrors").innerHTML="<p> first name valid</p>";
}
    

var lasttname= document.getElementById("lastname").value;
if(lasttname==""){
    validform=false;
    document.getElementById("lastnameerrors").innerHTML="<p> last name blank</p>";
}
else{
document.getElementById("lastnameerrors").innerHTML="<p> last name valid</p>";
}

var password= document.getElementById("password").value;
if(password==""){
    validform=false;
    document.getElementById("passworderrors").innerHTML="<p> password blank</p>";
}
else{
document.getElementById("passworderrors").innerHTML="<p> password valid</p>";
}


var conformpassword=document.getElementById("conformpassword").value;
if (conformpassword==""){
    validform=false;
    document.getElementById("conformpassworderrors").innerHTML="<p>conformpassword  is blank</P>";
}


if(password!=conformpassword)
    {
        validform=false;
        document.getElementById("conformpassworderrors").innerHTML="<p> please enter same password</P>";
    

}
var email= document.getElementById("email").value;
if(email==""){
    validform=false;
    document.getElementById("emailerrors").innerHTML="<p>email blank</p>";
}
else{
document.getElementById("emailerrors").innerHTML="<p>email valid</p>";
}

var contact=document.getElementById("contact").value;
if(contact==""){
    validform=false;
    document.getElementById("contacterrors").innerHTML="<p> contact is blank</p>";
}
else{
document.getElementById("contacterrors").innerHTML="<p> contact is valid</p>"
}


if (validform){
    document.getElementById("userform").submit();
}

return validform;
}


