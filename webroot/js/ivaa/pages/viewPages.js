var User = {};

$(document).ready(function (){
    User.setQueryString();
//    User.validation();
});


User.setQueryString = function(){
    //    alert('Test');
    $('#input_search').click(function(){
//        $("#UserRegisterForm").validate({
//            rules: {
//                "data[User][email_reg]":{
//                    required : true,
//                    email : true
//                },
//                "data[User][confirm_email_reg]":{
//                    required : true,
//                    email :true,
//                    equalTo : "#UserEmailReg"
//                },
//                "data[User][password_reg]":{
//                    required : true,
//                    minlength: 6
//                },
//                "data[User][confirm_password_reg]":{
//                    required : true,
//                    equalTo : "#UserPasswordReg"
//                }
//            }
//        });
    	var term = $("input#keyword").val();
    	var domisili = $("input#domisili").val();
    	var start_year = $("input#start_year").val();
    	var end_year = $("input#end_year").val();
    	
        var test = $.ajax({
                type : "POST",
                url : SERVER+"pages/advance_search/",
                data: $("#PageASearchForm").serialize()
            });
       

        if(test == "True"){
            $("#input_search").submit();
        }else{
        	alert('Data belum menjadi query string');
        }
    });

}


User.validation = function(){
    $('#activation_button').click(function(){
        $("#UserActivationForm").validate({
            rules: {
                "data[User][activation_code]":{
                    required : true
                }
            }
        });

        if( $("#UserActivationForm").valid() ){
            var challengeField = $("input#recaptcha_challenge_field").val();
            var responseField = $("input#recaptcha_response_field").val();

            var test = $.ajax({
                type : "POST",
                url : SERVER+"users/validateCaptchaAjax",
                data: ({
                    recaptcha_challenge_field : challengeField,
                    recaptcha_response_field: responseField
                }),
                dataType: "html",
                async: false
            }).responseText;
        }

        if( ($("#UserActivationForm").valid()) && (test == "True") ){
            $("#UserActivationForm").submit();
        }else{
            $(".errorRecaptcha").html($.i18n._('Wrong captcha'));
            Recaptcha.reload();
            return false;
        }
    });
}