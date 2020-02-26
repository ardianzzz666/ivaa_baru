var QuickSave = {};

$(document).ready(function (){
    QuickSave.saving();
});

QuickSave.saving = function(){
    $('#saveAjax').click(function(){
        $('#slideshowAddForm').validate({
                rules: {
                    'data[User][username]':{
                        required:true
                    },
                    'data[User][email]':{
                        required:true,
                        email : true
                    },
                    'data[User][password]':{
                        required:true,
                        minlength: 6
                    },
                    'data[User][password_confirm]':{
                        required:true,
                        equalTo : "#UserPasswordReg"
                    },
                    'data[BusinessOwner][title]':{
                        required:true
                    },
                    'data[BusinessOwner][name]':{
                        required:true
                    },
                    'data[BusinessOwner][address]':{
                        required:true
                    },
                    'data[BusinessOwner][phone]':{
                        required:true
                    }
                }
            });
            if($("#slideshowAddForm").valid()){
                $('#saveAjax').html($.i18n._('Saving...'));
                $.ajax({
                    type: "POST",
                    url: SERVER+"business_owners/ajaxSave",
                    data: $("#slideshowAddForm").serialize(),
                    success: function(data)
                    {
                        $('#saveAjax').html("Slideshow Has been saved....");
                        window.location= SERVER +"admin/slideshows/ ";

                    }
                });
            }
       
    });
}