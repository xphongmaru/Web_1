fullName = document.getElementById("fullName");
phoneNumber = document.getElementById("phoneNumber");
mail = document.getElementById("mail");
pass = document.getElementById("pass");
confirmPass = document.getElementById("confirmPass");
btn_login= document.getElementById("btn-login");
errorI=document.getElementsByTagName('i');
errorP=document.getElementsByTagName('p');
sex=document.getElementById('sex');

btn_login.addEventListener("click",function(){
if(checkNameBlur()&&checkMailBlur()&&checkPassBlur()&&checkPhoneBlur()&&checkconconfirmPassBlur()){
       
        // if(checkNameBlur())
        // {
        //     errorP[0].style='display: block !important';
        // } 
        // else if(!checkMailBlur()) errorP[1].style.display="block";
        alert("success!");ZZ
    
    }
    else{
        alert("Error!");

    }
});


// chay ham
fullName.addEventListener("blur",checkNameBlur);
fullName.addEventListener("focus",checkNameForcus);

mail.addEventListener("blur",checkMailBlur);
mail.addEventListener("focus",checkMailForcus);

phoneNumber.addEventListener("blur",checkPhoneBlur);
phoneNumber.addEventListener("focus",checkPhoneForcus);

pass.addEventListener("blur",checkPassBlur);
pass.addEventListener("focus",checkPassForcus);

confirmPass.addEventListener("blur",checkconconfirmPassBlur);
confirmPass.addEventListener("focus",checkconfirmPassForcus);


function checkNameBlur() 
{
    // errorP[0].style.display='none';

    if(fullName.value.length < 8)
    {
        errorP[0].style.display='none';
          
        fullName.style.border = "1px solid red";
        errorI[0].style.display='block';
        // errorP[0].style.display='block';

        errorI[0].addEventListener('mouseover',function(){
            errorP[0].style.display='block';
        });
        errorI[0].addEventListener('mouseout',function(){
            errorP[0].style.display='none';
        });
        
        return false;
    }
    else{
        fullName.style.border = "1px solid black";
        errorI[0].style.display='none';
        return true;
    }
   

}

function checkNameForcus() 
{

    if(fullName.value.length==0)
    {
        errorP[0].style.display='block'
        return false
    }
    
}


//check mail
function checkMailBlur() 
{
    var regExp = /^[A-Za-z][\w$.]+@[\w]+\.\w+$/;
    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    errorP[1].style.display='none';

    if(mail.value.length==0||!regExp.test(mail.value))
    {
        mail.style.border = "1px solid red";
        errorI[1].style.display='block';
        errorI[1].addEventListener('mouseover',function(){
            errorP[1].style.display='block';
        });
        errorI[1].addEventListener('mouseout',function(){
            errorP[1].style.display='none';
        });
        return false;
    }
    else{
        mail.style.border = "1px solid black";
        errorI[1].style.display='none';
        return true;
    }
   

}

function checkMailForcus() 
{
    if(mail.value.length==0)
    {
        errorP[1].style.display='block'
        return false
    }
    
}
//check phone number
function checkPhoneBlur() 
{
    errorP[2].style.display='none';
    filter=/[0-9]/;
    if(phoneNumber.value.length<10||!filter.test(phoneNumber.value))
    {
        phoneNumber.style.border = "1px solid red";
        errorI[2].style.display='block';
        errorI[2].addEventListener('mouseover',function(){
            errorP[2].style.display='block';
        });
        errorI[2].addEventListener('mouseout',function(){
            errorP[2].style.display='none';
        });
        return false;
    }
    else{
        phoneNumber.style.border = "1px solid black";
        errorI[2].style.display='none';
        return true;
    }
   

}

function checkPhoneForcus() 
{
    if(phoneNumber.value.length==0)
    {
        errorP[2].style.display='block'
        return false
    }
    
}

//check password
function checkPassBlur() 
{
    errorP[3].style.display='none';

    if(pass.value.length < 8)
    {
        pass.style.border = "1px solid red";
        errorI[3].style.display='block';
        errorI[3].addEventListener('mouseover',function(){
            errorP[3].style.display='block';
        });
        errorI[3].addEventListener('mouseout',function(){
            errorP[3].style.display='none';
        });
        return false;
    }
    else{
        pass.style.border = "1px solid black";
        errorI[3].style.display='none';
        return true;
    }
   

}
function checkPassForcus() 
{

    if(pass.value.length==0)
    {
        errorP[3].style.display='block'
        return false
    }
    
}

//check confirm password
function checkconconfirmPassBlur() 
{
    errorP[4].style.display='none';

    if(confirmPass.value.length==0||pass.value!=confirmPass.value)
    {
        confirmPass.style.border = "1px solid red";
        errorI[4].style.display='block';
        
        errorI[4].addEventListener('mouseover',function(){
            errorP[4].style.display='block';
            errorP[4].innerHTML="Mật khẩu không khớp!"
        });
        errorI[4].addEventListener('mouseout',function(){
            errorP[4].style.display='none';
            errorP[4].innerHTML='Nhập lại mật khẩu.';
        });
        return false;
    }
    else{
        confirmPass.style.border = "1px solid black";
        errorI[4].style.display='none';
        return true;
    }
   
}
function checkconfirmPassForcus() 
{

    if(confirmPass.value.length==0)
    {
        errorP[4].style.display='block'
        return false
    }
    
}

// function validateLogin(){
//     namValue=fullName.value
//     passValue=pass.value

//     alert(namValue,passValue);

// }

// btn_login.addEventListener("click",validateLogin);