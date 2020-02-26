var QuickSave = {};

$(document).ready(function (){
    
    QuickSave.saving();
});

QuickSave.saving = function(){
    $('#button-contact').click(function(){
        
            $('#changeAccountForm').validate({
                rules: {
                    
                    "email": {
                        required: true,
                        email: true
                    },
                    'old_password':{
                        required:true
                    },
                    'new_password':{
                        required:true
                    },
                    'retype_password':{
                        required:true,
                        equalTo : "#new_password"
                    }
//                    ,
//                    'fee':{
//                        required:true
//                    }
                }
            });
            
    });
}