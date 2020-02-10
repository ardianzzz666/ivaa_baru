$(document).ready(function(){
    $('a#save-trailler').click(function(){
        var id = $(this).attr('rel');
        var  khazanahId = $('#KhazanahsFileKhazanahId').val();
        var  partClip = $('.val-trailler'+id).val();
        $.ajax({
            type    :"post",
            url     : SERVER+"khazanahs_files/updateTrailler",
            data:{id : id,khazanahId:khazanahId,partClip:partClip},
            success :function(data)
            {
                jAlert('Trailer telah diupdate','Success!');
                window.location = SERVER+"admin/khazanahs_files/videos/"+khazanahId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});


//function save trailler audio
$(document).ready(function(){
    $('#save-audioTrailler').click(function(){
        var id = $(this).attr('rel');
        var  khazanahId = $('#KhazanahsFileKhazanahId').val();
        var  partClip = $('.val-audioTrailler'+id).val();
        $.ajax({
            type    :"post",
            url     : SERVER+"khazanahs_files/updateTrailler",
            data:{id : id,khazanahId:khazanahId,partClip:partClip},
            success :function(data)
            {
                jAlert('Trailer telah diupdate','Success!');
                window.location = SERVER+"admin/khazanahs_files/audios/"+khazanahId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('#save-edittrailler').click(function(){
        var id = $(this).attr('rel');
        var  khazanahId = $('#KhazanahsFileKhazanahId').val();
        var  partClip = $('.val-edittrailler'+id).val();
        $.ajax({
            type    :"post",
            url     : SERVER+"khazanahs_files/updateTrailler",
            data:{id : id,khazanahId:khazanahId,partClip:partClip},
            success :function(data)
            {
                jAlert('Trailer elah diupdate','Success!');
                window.location = SERVER+"admin/khazanahs_files/videos/"+khazanahId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-excerpt').click(function(){
        
        var id = $(this).attr('rel');
        var name = $('#excerpt'+id).attr('rel');
        var  khazanahId = $('#KhazanahsFileKhazanahId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"khazanahs_files/deleteExcerpt",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Excerpt telah dihapus','Success!');
                window.location = SERVER+"admin/khazanahs_files/texts/"+khazanahId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-audioTrailler').click(function(){
        var id = $(this).attr('rel');
        var name = $('a#audioX'+id).attr('rel');
        var  khazanahId = $('#KhazanahsFileKhazanahId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"khazanahs_files/deleteAudioTrailler",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Audio trailer telah dihapus','Success!');
                window.location = SERVER+"admin/khazanahs_files/audios/"+khazanahId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-fullaudio').click(function(){
        var id = $(this).attr('rel');
        var name = $('a#audioFullX'+id).attr('rel');
        var  khazanahId = $('#KhazanahsFileKhazanahId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"khazanahs_files/deleteFullAudio",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Audio versi full telah dihapus','Success!');
                window.location = SERVER+"admin/khazanahs_files/audios/"+khazanahId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-fulltext').click(function(){
        var id = $(this).attr('rel');
        var name = $('a#textFullX'+id).attr('rel');
        var  khazanahId = $('#KhazanahsFileKhazanahId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"khazanahs_files/deleteFullText",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Text versi full telah dihapus','Success!');
                window.location = SERVER+"admin/khazanahs_files/texts/"+khazanahId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-fullvideo').click(function(){
        var id = $(this).attr('rel');
        var name = $('a#videoFullX'+id).attr('rel');
        var  khazanahId = $('#KhazanahsFileKhazanahId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"khazanahs_files/deleteFullVideo",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Video versi full telah dihapus','Success!');
                window.location = SERVER+"admin/khazanahs_files/videos/"+khazanahId;
//                                                                                                                $('.no_images').hide();

            }
        });
    })

});

$(document).ready(function(){
    $('a#delete-traillervideo').click(function(){
        var name = $('a#traillerX').attr('rel');
        var id = $(this).attr('rel');
        var  khazanahId = $('#KhazanahsFileKhazanahId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+"khazanahs_files/deleteTraillerVideo",
            data:{id:id,name : name},
            success :function(data)
            {
                jAlert('Video versi trailer telah dihapus','Success!');
                window.location = SERVER+"admin/khazanahs_files/videos/"+khazanahId;
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
        
$(document).ready(function(){
    $('button#add-url-ajax').click(function(){
        
        //var id = $(this).attr('rel');
        //var name = $('#excerpt'+id).attr('rel');
        //var url = $('#KhazanahsFileUrl').val();
        //var khazanah_id = $('#KhazanahsFileKhazanahId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+'admin/khazanahs_files/urls',
            data    : $('#KhazanahsFileAdminUrlsForm').serialize(),
            success :function(response)
            {
                $("#KhazanahsFileUrl").val("");
                $('#url_list').html(response); 
            }
        });
    })

});        

$(document).ready(function(){
    $('button#add-trailer-ajax').click(function(){
        
        //var id = $(this).attr('rel');
        //var name = $('#excerpt'+id).attr('rel');
        //var url = $('#KhazanahsFileUrl').val();
        //var khazanah_id = $('#KhazanahsFileKhazanahId').val();
        $.ajax({
            type    :"post",
            url     : SERVER+'admin/khazanahs_files/videos',
            data    : $('#KhazanahsFileAdminVideosForm').serialize(),
            success :function(response)
            {
                $("#FilePartClip").val("");
                $('#video_list').html(response); 
            }
        });
    })

}); 
