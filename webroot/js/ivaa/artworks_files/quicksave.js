var QuickSave = {};

$(document).ready(function (){
    QuickSave.saving();
});

QuickSave.saving = function(){
    $('#quick-save').click(function(){

        $('#ArtworkDescriptionEn').val(tinyMCE.get('ArtworkDescriptionEn').getContent());
        $('#ArtworkDescriptionInd').val(tinyMCE.get('ArtworkDescriptionInd').getContent());
        if($('#ArtworkId').val()!='' && $('#ArtworkId').val()!=null){
            $('#ArtworkAdminEditForm').validate({
                 rules: {

                    'data[Artwork][art_start_year]':{
                        required:true
                    },
                    'data[Artwork][dimension_height]':{
                        required:true
                    },
                    'data[Artwork][dimension_width]':{
                        required:true
                    },
                    'data[Artwork][dimension_length]':{
                        required:true
                    },
                    'data[Artwork][dimension_unit]':{
                        required:true
                    },
                    'data[Artwork][description_en]':{
                        required:true
                    },
                    'data[Artwork][description_ind]':{
                        required:true
                    }
                }
            });
            if($("#ArtworkAdminEditForm").valid()){
                $('#quick-save').html('Saving...');
                $.ajax({
                    type: "POST",
                    url: SERVER+"artworks/quick_save",
                    data: $("#ArtworkAdminEditForm").serialize(),
                    success: function(data)
                    {
                        $('#quick-save').html('Saved');
                        var explode = data.split(':');
                        if(data != 'failed'){
                            $("#gallery-id").val(explode[0]);
                            $("#gallery-title").val(explode[1]);
                            $('#gallery-type').val(explode[2]);
                            $("#add_image").show();
                            $("#Artwork_id").val(explode[0]);
                        }
                    }
                });
            }
        }else{

        $('#ArtworkAdminAddForm').validate({
                rules: {
                    'data[Artwork][title]':{
                        required:true
                    },
                    'data[Artwork][art_start_year]':{
                        required:true
                    },
                    'data[Artwork][dimension_height]':{
                        required:true
                    },
                    'data[Artwork][dimension_width]':{
                        required:true
                    },
                    'data[Artwork][dimension_length]':{
                        required:true
                    },
                    'data[Artwork][dimension_unit]':{
                        required:true
                    }
                    ,
                    'data[Artwork][description_en]':{
                        required:true
                    },
                    'data[Artwork][description_ind]':{
                        required:true
                    }
                }
            });

            if($('#ArtworkAdminAddForm').valid()){ 
                $('#quick-save').html('Saving...');
                $.ajax({
                    type: "POST",
                    url: SERVER+"artworks/quick_save",
                    data: $("#ArtworkAdminAddForm").serialize(),
                    dataType: "json",
                    success: function(response)
                    {
                        $('#quick-save').html('Saved');
                        if(response != 'failed'){
                            window.location= SERVER +"admin/images/addImage/Artwork/"+response.data.Artwork.id;

                        }
                    }
                });
            }
        }

    });
}