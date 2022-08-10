function getUname()
{
    var uname=document.getElementById(" ").value;
    if(uname.length<4)
    {
        document.getElementById("unameError").innerHTML="name is not correct";
        return false;
    }
    else
    {
       document.getElementById("unameError").innerHTML="name is OK ";
       return true;
    }

}

function getpassword()
{
    var password=document.getElementById("password").value;
    if(password.length<8)
    {
        document.getElementById("passwordError").innerHTML="password is not correct ";
        return false;
    }
    else
    {
        document.getElementById("passwordError").innerHTML="password is  correct ";
        return true;
    }
}

function fromResult()
{
    if(document.getElementById("male").checked==true)
    {
        document.write("Male")
    }
}




function myAjax()
{
    var myxhttp=new myXMLHttpRequest();
    var name =document.getElementById("inputtext")
}