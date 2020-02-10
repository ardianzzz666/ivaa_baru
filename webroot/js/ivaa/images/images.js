var Image = {};

Image.Upload = function (){
//    alert($('#gallery-id').val());
    var upload = new AjaxUpload($('#TriggerUpload'), {
        action: SERVER+'images/upload',
        name: 'uploadfile',

        data: {
            'galleryTitle' : $('#gallery-title').val(),
            'galleryType': $('#gallery-type').val(),
            'galleryId' : $('#gallery-id').val()
        },
        autoSubmit: true,
        responseType: 'json',
        onChange: function(file, ext){
        },
        onSubmit: function(file, ext){
            // Allow only images. You should add security check on the server-side.
            if (ext && /^(jpg|png|jpeg|gif)$/i.test(ext)) {
                this.setData({
                    'galleryTitle' : $('#gallery-title').val(),
                    'galleryType': $('#gallery-type').val(),
                    'galleryId' : $('#gallery-id').val()
                });
            } else {
				alert($('#gallery-title').val());
                alert('not image');
                return false;
            }
        },
        onComplete: function(file, response){
            this.disable();
                        //alert(response);exit; 
                   
            var is_main_image = response.data.Image.main_image == 1 ? 'checked="checked"' : '';
      
            $('#table-photo').prepend(
                '<tr class="altrow" id="row-image-'+response.data.Image.id+'">'+
                '<td><img src="'+SERVER+'img/'+response.data.Image.small_path+'" alt="" class="copy-image" rel="'+response.data.Image.id+'"/></td>'+
                '<td><textarea>'+response.data.Image.caption+'</textarea><a rel="'+response.data.Image.id+'" class="update-caption-image" href="#">Update</a></td>'+
                '<td><label class="block" for="check-1"><input class="radio-main-image" rel ="'+response.data.Image.id+'" name="rdImage" type="radio" value=""' + is_main_image + '" /></label></td>'+
                '<td><ul><li class="up"><a href="#" class="up-photo" rel="'+response.data.Image.id+'"><span>move up</span></a></li><li class="down"><a href="#" class="down-photo" rel="'+response.data.Image.id+'"><span>move down</span></a></li></ul></td>'+
                '<td><ul><li class="delete"><a href="#" rel="'+response.data.Image.id+'" class="delete-image"><span>Delete</span></a></li>'+
                '<li class="view"><a href="#" id="download'+response.data.Image.id+'" title="Download this !"></a></li>'+
                '</ul></td></tr>'
                );
            //window.location.reload();
            $('.set_pictur').unbind('click');
            Image.copyImage();
            //var jsonObj = eval('(' + response + ')');
            Image.trigerDeleteImage();
            Image.changeMainImage();
            Image.updateCaption();
            Image.setAllTriggerEnable();
            Image.setFirstLast();
            Image.updown();
            this.enable();
        }
    });
};

Image.triggerBtnFinish = function (){
    $('#btn-finish').click(function(){
        var rel = $('#btn-finish').attr('rel');
        var rel_e = rel.split('-');
        window.location.replace(SERVER+'admin/'+rel_e[0]+'/edit/'+rel_e[1]);

    });
};


Image.trigerDeleteImage = function (){
    $("a.delete-image").click(function() {  
        var id = $(this).attr('rel');
        var row = "row-image-"+id;
		
        $("#dialog-confirm-image").dialog({
            resizable: false,
            height:200,
            show : 'slide',
            modal: true,
            buttons: {
                'Delete': function() {
					
                    $.ajax({
                        type: "POST",
                        url: SERVER+"admin/images/deleteAjax",
                        data: ({
                            id : id
                        }),
                        success: function(msg){
                            if(msg == "success"){
                                $("#"+row).fadeTo("slow", 0.01, function(){ //fade
                                    $(this).slideUp("slow", function() { //slide up
                                        $(this).remove(); //then remove from the DOM
                                    });
                                });
                            }else{
                                alert('Image cannot be deleted');
                            }
                        }
                    });
					
                    $(this).dialog('close');
                },
                Cancel: function() {
                    $(this).dialog('close');
                }
            }
        });
        return false;
    });
};



Image.changeMainImage = function (){
    $('.radio-main-image').change(function() {
        var id = $(this).attr('rel');
		
        $.ajax({
            type: "POST",
            url: SERVER+"admin/images/changeMainImageAjax",
            data: ({
                id : id
            }),
            success: function(msg){
                if(msg == "success"){
                    $("#dialog-main-image").dialog({
                        show:'slide',
                        resizable: false,
                        height:200
                    });
                }else{
                    //alert("Main Image gagal dirubah");
                    $.facebox('<div class="error_msg">Failed to change the Main Image</div>');
                }
            }
        });
    });
};

Image.updateCaption = function (){
    $('.update-caption-image').click(function() {
        var id = $(this).attr('rel');
        var caption = $('#row-image-'+id +' textarea').val();
		
        $.ajax({
            type: "POST",
            dataType : 'json',
            url: SERVER+"admin/images/updateCaptionAjax",
            data: ({
                id : id,
                caption: caption
            }),
            success: function(msg){
                if(msg.flag == 1){
                    $("#dialog-update-caption").dialog({
                        show:'slide',
                        resizable: false,
                        height:200
                    });
                }else{
                    //alert("Main Image gagal dirubah");
                    $.facebox('<div class="error_msg">Failed to change the Main Image</div>');
                }
            }
        });
		
        return false;
		
    });
};

Image.setFirstLast = function(){
    var first = $("#table-photo tbody tr:first").find('li.up');
    var last = $("#table-photo tbody tr:last").find('li.down');
	
    first.removeClass('up').addClass('up_disabled');
    last.removeClass('down').addClass('down_disabled');
	
	
}

Image.setAllTriggerEnable = function() {
    var table = $("#table-photo");
    var rows = table.find('tbody > tr').get();
	
    $.each(rows,function(key, value){
        var up = $(this).find('li.up_disabled');
        var down = $(this).find('li.down_disabled');
		
        if(up.length > 0){
            up.removeClass('up_disabled').addClass('up');
        }
		
        if(down.length > 0){
            down.removeClass('down_disabled').addClass('down');
        }
		
    });
}

Image.updown = function() {
    $(".up-photo,.down-photo").click(function(){
        var row = $(this).parents("tr:first");
        var idRow = $(this).attr('rel'); // id article
        var prev =  $(this).parents("tr:first").prev();
        var next =  $(this).parents("tr:first").next();
	
        if ($(this).is(".up-photo")) {
            row.insertBefore(row.prev());
			
            var idPrevRow = $(prev).attr('id');
            var id = idPrevRow.split('-');
            var idPrev = id[2];
			
            Image.swap(idRow,idPrev);
        } else {
            row.insertAfter(row.next());
			
            var idNextRow = $(next).attr('id');
            var id = idNextRow.split('-');
            var idNext = id[2];
            Image.swap(idRow,idNext);
			
        }
		
        Image.setAllTriggerEnable();
        Image.setFirstLast();
	
        return false;
    });
};

Image.swap = function(id,anotherId){
    $.ajax({
        type : "post",
        data : {
            id : id ,
            another : anotherId
        },
        url  : SERVER + "admin/images/swap",
        dataType : 'json',
        success : function(response){
            alert(response.data);
        }
    });

    return false;
}



$(document).ready(function (){
    Image.copyImage();
    Image.Upload();
    Image.updateCaption();
    Image.triggerBtnFinish();
    Image.trigerDeleteImage();
    Image.changeMainImage();
    Image.setAllTriggerEnable();
    Image.setFirstLast();
    Image.updown();
    
});

Image.copyImage= function(){
      $('.set_pictur').click(function(){
          var url = $(this).attr("rel");
          var postid = ('<img src="'+url+'" />');

          tinyMCE.execCommand('mceInsertContent', false, postid);
//          tinyMCE.get('txtPost').focus();


      });
};