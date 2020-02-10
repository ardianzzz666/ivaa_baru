$(document).ready(function(){

  $('a.delete-artist-ajax').unbind('click');
  $('a.delete-artist-ajax').click(function(){
     var id = $(this).attr('rel');  
     var controller_name = $('#controller_3_name').val();

     $.ajax({
            url: SERVER+'admin/'+ controller_name + '/delete',
            type: 'POST',
            dataType: 'html',
            data: {id:id},
            success:
                function(response){
                    //alert(response);
                    $("#participant_name").val("");
                    $('#participant_id').val("");
                    $('#participant_list').html(response);
                }	
    });    	
    	
 });	
   
 $('#add-artist-ajax').unbind('click');
 $('#add-artist-ajax').click(function(){
  var controller_name = $('#controller_3_name').val();
  var model_name = $('#model_3_name').val();
  
        $.ajax({
        url: SERVER+'admin/'+ controller_name +'/add',
        type: 'POST',
        dataType: 'html',
        data: 
                $('#'+ model_name +'Form').serialize(),
        success:
            function(response){
                $("#participant_name").val("");
                $('#participant_id').val("");
                $('#participant_list').html(response);
            }	
           });    	

   });	
	
// Caching the artwork title textbox:
var artist = $('#participant_name');
var artist_type = $('input:radio[name=tipe_pelaku_seni]:checked').val();

$("input:radio[name=tipe_pelaku_seni]").click(function() {
    artist_type = $(this).val();
    $("#participant_name").val("");
    $("#participant_type").val(artist_type);
});

// Defining a placeholder text:
artist.defaultText('Cari nama pelaku..');

// Using jQuery UI's autocomplete widget:
artist.autocomplete({
source: function(request, response){
$.post(SERVER+"artists/auto_complete_artist", {data: { term : request.term, participant_type: artist_type }}, function(data){
    response($.map(data, function(item) {
    return {
        label: item.label,
        value: item.value
    }
    }))
}, "json");
},
minLength: 3,
//dataType: "json",
cache: false,
focus: function(event, ui) {
return false;
},
select: function(event, ui) {
this.value = ui.item.label;
$("#participant_id").val(ui.item.value);
/* Do something with artwork_id */
return false;
},
change: function (event, ui) {
    //if the value of the textbox does not match a suggestion, clear its value

 if (ui.item == null) {
        $(this).val('');
    }        
} 
});

});

// A custom jQuery method for placeholder text:

$.fn.defaultText = function(value){

var element = this.eq(0);
element.data('defaultText',value);

element.focus(function(){
if(element.val() == value){
element.val('').removeClass('defaultText');
}
}).blur(function(){
if(element.val() == '' || element.val() == value){
element.addClass('defaultText').val(value);
}
});

return element.blur();
}