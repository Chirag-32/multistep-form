// function validation(){
//     // var fullname=document.getElementById("fname").value;
//     var email=document.getElementById("email").value;
//     var mobile=document.getElementById("mobile").value;
//     var password=document.getElementById("pass").value;
//     var cpassword=document.getElementById("cpass").value;

//     // var namecheck = /^[A-Za-z]{3,30}([A-Za-z]{2,}|[\s]{1}[A-Za-z]{2,})*$/;
//     ///^([A-Za-z])+( [A-Za-z]+) ([A-Za-z])+/
//     ////^[A-Za-z]{3,30}[\w\ \{1}][A-za-z]{3,30}$/;
//     var passcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
//     var emailcheck = /^[A-Za-z]{3,}[\w\.\{1}][A-Za-z0-9]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
//     ///^[A-Za-z0-9]$/,///^[A-Za-z]{3,}[.][A-Za-z]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/gm
//     var mobilecheck = /^[3-9][0-9]{9}$/;

//         // if(namecheck.test(fullname)){
//         //     document.getElementById("fnameerror").innerHTML = "";
//         // }else{
//         //     document.getElementById("fnameerror").innerHTML  = "First name is invalid";
//         //     return false;
//         // }
//         if(emailcheck.test(email)){
//             document.getElementById("emailerror").innerHTML = "";
//         }else{
//             document.getElementById("emailerror").innerHTML  = "Email is invalid";
//             return false;
//         }
//         if(mobilecheck.test(mobile)){
//             document.getElementById("mobileerror").innerHTML = "";
//         }else{
//             document.getElementById("mobileerror").innerHTML  = "Mobile No. is invalid";
//             return false;
//         }
//         if(passcheck.test(password)){
//             document.getElementById("passerror").innerHTML = "";
//         }else{
//             document.getElementById("passerror").innerHTML  = "Password is invalid";
//             return false;
//         }
//         if(cpassword.match(password)){
//             document.getElementById("cpasserror").innerHTML = "";
//         }else{
//             document.getElementById("cpasserror").innerHTML  = "Confirm Password is not same as above Password";
//             return false;
//         }
    
// }

// function phoneno(){ 
//     jQuery(document).ready(function($){         
//         $('mobile').keypress(function(e) {
//             var a = [];
//             var k = e.which;

//             for (i = 48; i < 58; i++)
//                 a.push(i);

//             if (!(a.indexOf(k)>=0))
//                 e.preventDefault();
//         });
//     });
// }

// $("#submit").click(function(){
//     jQuery(document).ready(function($){
//         $('#fname').keyup(function () {
//             var yourInput = $(this).val();
//             namecheck = /^[A-Za-z]{3,30}([A-Za-z]{2,}|[\s]{1}[A-Za-z]{2,})*$/;
//             if(namecheck.test(yourInput)){
//                 document.getElementsById("fnameerror").innerHTML = "";
//             }else{
//                 document.getElementsById("fnameerror").innerHTML  = "First name is invalid";
//                 return false;
//             }
//         });
//     });
// });




//function used to validate username


$(document).ready(function() { 
    $('.error').hide();
    $( "#submit" ).click(function() {
     
     var username = $('#fname').val();
     var emailid = $('#email').val();
     var mobilenumber = $('#mobile').val();
    //  var websiteurl = $('#websiteurl').val();
     var userpassword = $('#pass').val();
        // Hiding error messages 
     
        $('.error').hide();
     if(checkUsername(username) == false){    
           $('#fnameerror').show();    
           return false;    
     }else if(checkEmail(emailid) == false){    
        $('#emailerror').show(); 
           return false;       
     }else if(checkMobileNumber(mobilenumber) == false){    
           $('#mobileerror').show();     
           return false;            
     }else if(checkPassword(userpassword) == false){    
        $('#passerror').show();     
           return false;       
     }else{
      alert("successful")
     }
      
    });
    });
    //function used to check valid email
    function checkEmail(email)
    {
        //regular expression for email
        var emailcheck = /^[A-Za-z]{3,}[\w\.\{1}][A-Za-z0-9]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
        if(emailcheck.test(email)){
            return true;
        } else {
            return false;
        }
    }
    
    //function used to validate website URL
    function checkUrl(url)
    {
        //regular expression for URL
        var pattern = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
     
        if(pattern.test(url)){
            return true;
        } else {
            return false;
        }
    } 
    
    //function used to validate username
    function checkUsername(username){
     //regular expression for username
     var namecheck = /^[A-Za-z]{3,30}([A-Za-z]{2,}|[\s]{1}[A-Za-z]{2,})*$/;
        if(namecheck.test(username)){
            return true;
        }else{
            return false;
        }
    }
    
    //function used to validate password
    function checkPassword(password){
     //regular expression for password
     var passcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
        if(passcheck.test(password)){
            return true;
        }else{
            return false;
        }
    }
    //function used to validate mobile number
    function checkMobileNumber(mobile){
     //regular expression for mobile number
        var pattern = /^[0-9]{10}$/;
        if(pattern.test(mobile)){
            return true;
        }else{
            return false;
        }
    }
    
    


   