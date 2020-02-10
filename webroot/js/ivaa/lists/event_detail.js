$(document).ready(function(){

  $('a.delete-event-detail-ajax').unbind('click');
  $('a.delete-event-detail-ajax').click(function(){
     var id = $(this).attr('rel');  
     var controller_name = $('#controller_4_name').val();
     $.ajax({
            url: SERVER+'admin/'+ controller_name + '/delete',
            type: 'POST',
            dataType: 'html',
            data: {id:id},
            success:
                function(response){
                    $("#art_venue_name").val("");
                    $("#art_venue_id").val("");
                    $('#event_detail_list').html(response);
                }	
    });    	
    	
 });	
   
 $('#add-event-detail-ajax').unbind('click');
 $('#add-event-detail-ajax').click(function(){
  var controller_name = $('#controller_4_name').val();
  var model_name = $('#model_4_name').val();
  
        $.ajax({
        url: SERVER+'admin/'+ controller_name +'/add',
        type: 'POST',
        dataType: 'html',
        data: 
                $('#'+ model_name +'Form').serialize(),
        success:
            function(response){
                $("#art_venue_name").val("");
                $("#art_venue_id").val("");
                $('#event_detail_list').html(response);
            }	
           });    	

   });	
	
// Caching the artwork title textbox:
var venue = $('#art_venue_name');

// Defining a placeholder text:
venue.defaultText('Cari ruang seni..');

// Using jQuery UI's autocomplete widget:
venue.autocomplete({
source: function(request, response){
$.post(SERVER+"art_venues/auto_complete_venue", {data: { term : request.term }}, function(data){
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
$("#art_venue_id").val(ui.item.value);
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