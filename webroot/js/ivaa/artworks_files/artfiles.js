$(document).ready(function(){
    $('a#save-trailler').click(function(){
        var id = $(this).attr('rel');
        var  artId = $('#ArtworksFileArtworkId').val();
        var  partClip = $('.val-trailler'+id).val();
        $.ajax({
            type    :"post",
            url     : SERVER+"artworks_files/updateTrailler",
            data:{id : id,artId:artId,partClip:partClip},
            success :function(data)
            {
                jAlert('Trailler telah diupdate','Success!');
                window.location = SERVER+"admin/artworks_files/videos/"+artId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});


//function save trailler audio
$(document).ready(function(){
    $('#save-audioTrailler').click(function(){
        var id = $(this).attr('rel');
        var  artId = $('#ArtworksFileArtworkId').val();
        var  partClip = $('.val-audioTrailler'+id).val();
        $.ajax({
            type    :"post",
            url     : SERVER+"artworks_files/updateTrailler",
            data:{id : id,artId:artId,partClip:partClip},
            success :function(data)
            {
                jAlert('Trailler telah diupdate','Success!');
                window.location = SERVER+"admin/artworks_files/audios/"+artId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('#save-edittrailler').click(function(){
        var id = $(this).attr('rel');
        var  artId = $('#ArtworksFileArtworkId').val();
        var  partClip = $('.val-edittrailler'+id).val();
        $.ajax({
            type    :"post",
            url     : SERVER+"artworks_files/updateTrailler",
            data:{id : id,artId:artId,partClip:partClip},
            success :function(data)
            {
                jAlert('Trailler telah diupdate','Success!');
                window.location = SERVER+"admin/artworks_files/videos/"+artId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-excerpt').click(function(){
        var id = $(this).attr('rel');
        var name = $('#excerpt'+id).attr('rel');
        var  artId = $('#ArtworksFileArtworkId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"artworks_files/deleteExcerpt",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Excerpt telah dihapus','Success!');
                window.location = SERVER+"admin/artworks_files/texts/"+artId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-audioTrailler').click(function(){
        var id = $(this).attr('rel');
        var name = $('a#audioX'+id).attr('rel');
        var  artId = $('#ArtworksFileArtworkId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"artworks_files/deleteAudioTrailler",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Audio trailer telah dihapus','Success!');
                window.location = SERVER+"admin/artworks_files/audios/"+artId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-fullaudio').click(function(){
        var id = $(this).attr('rel');
        var name = $('a#audioFullX'+id).attr('rel');
        var  artId = $('#ArtworksFileArtworkId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"artworks_files/deleteFullAudio",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Audio versi full telah dihapus','Success!');
                window.location = SERVER+"admin/artworks_files/audios/"+artId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-fulltext').click(function(){
        var id = $(this).attr('rel');
        var name = $('a#textFullX'+id).attr('rel');
        var  artId = $('#ArtworksFileArtworkId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"artworks_files/deleteFullText",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Text versi full telah dihapus','Success!');
                window.location = SERVER+"admin/artworks_files/texts/"+artId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-fullvideo').click(function(){
        var id = $(this).attr('rel');
        var name = $('a#videoFullX'+id).attr('rel');
        var  artId = $('#ArtworksFileArtworkId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"artworks_files/deleteFullVideo",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Video versi full telah dihapus','Success!');
                window.location = SERVER+"admin/artworks_files/videos/"+artId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-traillervideo').click(function(){
        var name = $('a#traillerX').attr('rel');
        var id = $(this).attr('rel');
        var  artId = $('#ArtworksFileArtworkId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"artworks_files/deleteTraillerVideo",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Video versi trailer telah dihapus','Success!');
                window.location = SERVER+"admin/artworks_files/videos/"+artId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});


$(document).ready(function(){
		$('a.update-trailler').click(function(){
                    var id = $(this).attr('rel');
			$('.updateTrailler'+id).show();
			$('#notrailler'+id).hide();
		})

	});


$(document).ready(function(){
		$('a#close').click(function(){
                        var id = $(this).attr('rel');
			$('.updateTrailler'+id).hide();
			$('#notrailler'+id).show();
		})

	});

$(document).ready(function(){
		$('a#edit-trailler').click(function(){
                        var id = $(this).attr('rel');
			$('.updateTrailler'+id).show();
			$('#notrailler'+id).hide();
		})

	});



$(document).ready(function(){
		$('#closeEdit').click(function(){
			$('#editTrailler').hide();
			//$('#notrailler').show(200);
		})

	});

