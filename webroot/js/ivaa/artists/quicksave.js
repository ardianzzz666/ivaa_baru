var QuickSave = {};

$(document).ready(function (){
    if($('#ArtistId').val()=='' || $('#ArtistId').val()==null){
        $("#add_image").hide();
    }

    $('#ArtistIsRegistered').change(function() {
      $('#ArtistIsRegistered').val($(this).val());
         var settings = $('#ArtistIsRegistered').validate().settings;
         $('#ArtistIsRegistered').css("visibility", "hidden");

      
    });

    QuickSave.saving();
});

QuickSave.saving = function(){
    $('#quick-save').click(function(){
             
           
               
             $('#ArtistAddEditForm').validate({


                rules: {
                    
                     'data[Artist][nickname]':{
                        required:true
                    }
                }
            });
            
            if($("#ArtistAddEditForm").valid()){
                $('#quick-save').html("Saving...");
                $.ajax({
                    type: "POST",
                    url: SERVER+"artists/quick_save",
                    data: $("#ArtistAddEditForm").serialize(),
                    success: function(data)
                    {
                        $('#quick-save').html("Saved");
                        var explode = data.split(':');
                        if(data != 'failed'){
                            $("#gallery-id").val(explode[0]);
                            $("#gallery-title").val(explode[1]);
                            $('#gallery-type').val(explode[2]);
                            $("#add_image").show();
                            $("#Artist_id").val(explode[0]);
                        }
                    }
                });
            }
       
    });
}