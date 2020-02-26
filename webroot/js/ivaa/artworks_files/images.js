

updateData = function (){
        $('#addData').click(function(){
            $.ajax({
                    type: "POST",
                    url: SERVER+"artworks_files/saveData",
                    data: {fileName : $('#ArtworksFileFileName').val(),
                           caption  : $('textarea').val(),
                           artId    : $('#ArtworksFileArtworkId').val(),
                           fileType : $('#ArtworksFileFileType').val()
                    },
                    success: function(data)
                    {
                        $('#sukses').html('Data Disimpan');
                        $('#sukses').html('');

                    }
                });
        });
    }