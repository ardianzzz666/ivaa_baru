$(document).ready(function(){
      $('.set_picture').click(function(){
          var url = $(this).attr("rel");
          var postid = ('<img src="'+SERVER+'img/'+url+'" />');

          tinyMCE.execCommand('mceInsertContent', false, postid);
//          tinyMCE.get('txtPost').focus();


      });
});
