$(document).ready(function(){

 $('#add-khazanah-artist-ajax').click(function(){
	  	    
        $.ajax({
        url: SERVER+'admin/khazanahs/add_artist',
        type: 'POST',
        dataType: 'html',
        data: 
                $('#KhazanahParticipantForm').serialize(),
        success:
            function(response){
                $("#khazanah_participant").val("");
                $('#artist_list').html(response);
            }	
           });    	

   });	
	
// Caching the artwork title textbox:
var artist = $('#khazanah_participant');
var participant_type = $('input:radio[name=tipe_pelaku_seni]:checked').val();

$("input:radio[name=tipe_pelaku_seni]").click(function() {
    participant_type = $(this).val();
    $("#khazanah_participant").val("");
    $("#participant_type").val(participant_type);
});

// Defining a placeholder text:
artist.defaultText('Cari nama pelaku..');

// Using jQuery UI's autocomplete widget:
artist.autocomplete({
source: function(request, response){
$.post(SERVER+"khazanahs/auto_complete_artist", {data: { term : request.term, participant_type: participant_type }}, function(data){
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