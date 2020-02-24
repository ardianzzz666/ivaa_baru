var QuickSave = {};

$(document).ready(function (){
    if($('#EventId').val()=='' || $('#EventId').val()==null){
        $("#add_image").hide();
    }
    QuickSave.saving();
});

QuickSave.saving = function(){
    $('#quick-save').click(function(){

        $('#EventDescriptionInd').val(tinyMCE.get('EventDescriptionInd').getContent());

        if($('#EventId').val()!='' && $('#EventId').val()!=null){
            $('#EventAdminEditForm').validate({
                 rules: {

                    'data[Event][title]':{
                        required:true
                    },
                   'data[Event][event_category_id]':{
                        required:true
                    },
                   
                    'data[Event][description_ind]':{
                        required:true
                    }
                }
            });
            if($("#EventAdminEditForm").valid()){
                $('#quick-save').html('Saving...');
                $.ajax({
                    type: "POST",
                    url: SERVER+"events/quick_save",
                    data: $("#EventAdminEditForm").serialize(),
                    success: function(data)
                    {
                        $('#quick-save').html('Saved');
                        var explode = data.split(':');
                        if(data != 'failed'){
                            $("#gallery-id").val(explode[0]);
                            $("#gallery-title").val(explode[1]);
                            $('#gallery-type').val(explode[2]);
                            $("#add_image").show();
                            $("#Event_id").val(explode[0]);
                        }
                    }
                });
            }
        }else{

        $('#EventAdminAddForm').validate({
                rules: {

                    'data[Event][title]':{
                        required:true
                    },
                    'data[Event][event_time]':{
                        required:true
                    },
                    'data[Event][art_venue_id]':{
                        required:true
                    },

                    'data[Event][description_ind]':{
                        required:true
                    }
                }
            });

            if($('#EventAdminAddForm').valid()){
                $('#quick-save').html('Saving...');
                $.ajax({
                    type: "POST",
                    url: SERVER+"events/quick_save",
                    data: $("#EventAdminAddForm").serialize(),
                    success: function(data)
                    {
                        $('#quick-save').html("Saved");
                        var explode = data.split(':');
                        if(data != 'failed'){
                            $("#gallery-id").val(explode[0]);
                            $("#gallery-title").val(explode[1]);
                            $('#gallery-type').val(explode[2]);
                            $("#add_image").show();
                            $("#Event_id").val(explode[0]);
                        }
                    }
                });
            }
        }

    });
}