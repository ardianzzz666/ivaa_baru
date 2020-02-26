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
                    $("#artist").val("");
                    $('#artist_list').html(response);
                }	
    });    	
    	
 });

  $('#add-artist-ajax').unbind('click');
  $('#add-artist-ajax').click(function(){
  var controller_name = $('#controller_3_name').val();
	  	    
	  $.ajax({
	    	url: SERVER+'admin/'+ controller_name + '/add',
	    	type: 'POST',
	    	dataType: 'html',
	    	data: 
	    		$('#ArtistsCollectiveForm').serialize(),
	    	success:
	    	    function(response){
	    	    	//alert('response');
			$( "#artist" ).val("");
	    	    	$('#artist_list').html(response);
	    	    }	
		   });    	
    	
	   });		
	
// Caching the movieName textbox:
var username = $('#artist');

// Defining a placeholder text:
username.defaultText('Cari pelaku seni..');

// Using jQuery UI's autocomplete widget:
username.autocomplete({
source: function(request, response){
$.post(SERVER+"artists/auto_complete_artist", {data: { term : request.term, participant_type: 'I' }}, function(data){
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
$("#artist_id").val(ui.item.value);	
/* Do something with user_id */
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
	

