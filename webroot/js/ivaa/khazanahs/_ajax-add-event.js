$(document).ready(function(){

  $('#add-event-ajax').click(function(){
	  	    
	$.ajax({
	    	url: SERVER+'admin/khazanahs/add_event',
	    	type: 'POST',
	    	dataType: 'html',
	    	data: 
	    		$('#KhazanahEventForm').serialize(),
	    	success:
	    	    function(response){
	    	    	//alert('response');
			$( "#event" ).val("");
	    	    	$('#event_list').html(response);
	    	    }	
		   });    	
    	
	   });		
	
// Caching the artwork title textbox:
var event = $('#event');

// Defining a placeholder text:
event.defaultText('Cari nama event..');

// Using jQuery UI's autocomplete widget:
event.autocomplete({
source: function(request, response){
$.post(SERVER+"khazanahs/auto_complete_event", {data: request.term}, function(data){
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
$("#event_id").val(ui.item.value);
/* Do something with artwork_id */
return false;
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