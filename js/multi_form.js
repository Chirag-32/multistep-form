$(document).ready(function(){ 
    $(".step1 .next-form").attr("disabled", true);
     
      
    var form_count = 1, previous_form, next_form, total_forms;
    total_forms = $("fieldset").length;  
    $(".next-form").click(function(){
        $(".step2 .next-form").attr("disabled", true);  
      previous_form = $(this).parent();
      next_form = $(this).parent().next().removeClass('d-none');
      next_form.show();
      previous_form.hide();
    //   setProgressBarValue(++form_count);
    });  
    $(".previous-form").click(function(){
        $(".step2 .next-form").attr("disabled", false);
      previous_form = $(this).parent().removeClass('d-none');
      next_form = $(this).parent().prev();
      next_form.show();
      previous_form.hide();
    //   setProgressBarValue(--form_count);
    });
    // Handle form submit and validation
    // $( ".next-form" ).submit(function(event) {    
    //   var error_message = '';
    //   if(!$("#email").val()) {
    //       error_message+="Please Fill Email Address";
    //   }
    //   if(!$("#password").val()) {
    //       error_message+="<br>Please Fill Password";
    //   }
    //   if(!$("#mobile").val()) {
    //       error_message+="<br>Please Fill Mobile Number";
    //   }
    //   // Display error if any else submit form
    //   if(error_message) {
    //       $('.alert-success').removeClass('hide').html(error_message);
    //       return false;
    //   } else {
    //       return true;	
    //   }    
    // });  
    $('#fname, #university, #field_stu, #job_tit, #city, #company').focusout(function(){
        let namecheck = /^[A-Za-z]{3,30}([A-Za-z]{2,}|[\s]{1}[A-Za-z]{2,})*$/;
        let fullName = $(this).val();
        
        $(this).parents('.name, .fstudy, .uni, .job, .jcity, .company').find('.wpcf7-not-valid-tip').remove();
        if(!namecheck.test(fullName)){
            // $(".wpcf7-not-valid-tip").show();
         $(this).after('<span class="wpcf7-not-valid-tip" aria-hidden="true">Please enter a valid name.</span>');
         $(".next-form").attr("disabled", true);
        }
        else{
            $(".next-form").attr("disabled", false);
        }
    });
    $('#email').focusout(function(){
        let emailcheck = /^[A-Za-z0-9]{3,}([A-Za-z0-9]{2,}[\w\.\{1}][A-Za-z0-9]{2,})*@[A-Za-z]{3,}[.]{1}[A-Za-z]{2,}([A-Za-z0-9]{2,6}||[.]{1}[A-Za-z0-9]{2,6})$/;
        let email = $(this).val();
        $(this).parents('.email').find('.wpcf7-not-valid-tip').remove();
        if(!emailcheck.test(email)){
            $(this).after('<span class="wpcf7-not-valid-tip" aria-hidden="true">Please enter a valid email.</span>');
            $(".next-form").attr("disabled", true);
        }else{
            $(".next-form").attr("disabled", false);
        }
    });
    $('#pass').focusout(function(){
        let passcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*.]{8,}$/;
        let pass = $(this).val();
        $(this).parents('.pass').find('.wpcf7-not-valid-tip').remove();
        if(!passcheck.test(pass)){
            $(this).after('<span class="wpcf7-not-valid-tip" aria-hidden="true">Please enter a valid email.</span>');
            $(".next-form").attr("disabled", true);
        }else{
            $(".next-form").attr("disabled", false);
        }
    });
    $('.wpcf7-tel').focusout(function(){
        let mobilecheck = /^[3-9][0-9]{9}$/;
        let mobile = $(this).val();
        $(this).parents('.tel-85').find('.wpcf7-not-valid-tip').remove();
        if(!mobilecheck.test(mobile)){
            $(this).after('<span class="wpcf7-not-valid-tip" aria-hidden="true">Please enter a valid mobile no.</span>');
            $("#send").attr("disabled", true);
        }else{
            $("#send").attr("disabled", false);
        }
    });
    $('.wpcf7-textarea').focusout(function(){
        let msgcheck = /^[A-Za-z0-9!@#$%^&*()_-]{3,}([A-Za-z0-9!@#$%^&*()_-]{2,}|[\s]{1}[A-Za-z0-9!@@#$%^&*()_-]{2,})*$/;
        let msg = $(this).val();
        $(this).parents('.textarea-130').find('.wpcf7-not-valid-tip').remove();
        if(!msgcheck.test(msg)){
            $(this).after('<span class="wpcf7-not-valid-tip" aria-hidden="true">Please enter a valid msg.</span>');
            $("#send").attr("disabled", true);
        }else{
            $("#send").attr("disabled", false);
        }
    });

    $('.tel-85').keypress(function(e) {
                    var a = [];
                    var k = e.which;
        
                    for (i = 48; i < 58; i++)
                        a.push(i);
        
                    if (!(a.indexOf(k)>=0))
                        e.preventDefault();
                });
  });