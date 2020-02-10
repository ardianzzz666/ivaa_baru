$(document).ready(function(){

  $('a.delete-artwork-ajax').unbind('click');
  $('a.delete-artwork-ajax').click(function(){
         var id = $(this).attr('rel');  
         var controller_name = $('#controller_name').val();
         
         
	 $.ajax({
	    	url: SERVER+'admin/'+ controller_name + '/delete',
	    	type: 'POST',
	    	dataType: 'html',
	    	data: {id:id},
	    	success:
	    	    function(response){
	    	    	//alert('response');
			$( "#artwork" ).val("");
                        $( "#artwork_id" ).val("");                      
	    	    	$('#artwork_list').html(response);
	    	    }	
        });    	
    	
   });	
           
  $('#add-artwork-ajax').unbind('click');
  $('#add-artwork-ajax').click(function(){
  var controller_name = $('#controller_name').val();
  var model_name = $('#model_name').val();
  
	 $.ajax({
	    	url: SERVER+'admin/'+ controller_name + '/add',
	    	type: 'POST',
	    	dataType: 'html',
	    	data: 
	    		$('#'+ model_name + 'Form').serialize(),
	    	success:
	    	    function(response){
	    	    	//alert('response');
			$( "#artwork" ).val("");
                        $( "#artwork_id" ).val("");
	    	    	$('#artwork_list').html(response);
	    	    }	
		   });    	
    	
	   });		
	
// Caching the artwork title textbox:
var artwork = $('#artwork');

// Defining a placeholder text:
artwork.defaultText('Cari nama karya seni..');

// Using jQuery UI's autocomplete widget:
artwork.autocomplete({
source: function(request, response){
$.post(SERVER+"artworks/auto_complete_artwork", {data: request.term}, function(data){
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
$("#artwork_id").val(ui.item.value);
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