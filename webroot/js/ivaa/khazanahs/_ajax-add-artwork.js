$(document).ready(function(){

  $('#add-artwork-ajax').click(function(){
	  	    
	$.ajax({
	    	url: SERVER+'admin/khazanahs/add_artwork',
	    	type: 'POST',
	    	dataType: 'html',
	    	data: 
	    		$('#KhazanahArtworkForm').serialize(),
	    	success:
	    	    function(response){
	    	    	//alert('response');
			$( "#artwork" ).val("");
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
$.post(SERVER+"khazanahs/auto_complete_artwork", {data: request.term}, function(data){
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

$(document).ready(function(){
  $('#add-artist-ajax').click(function(){

	$.ajax({
	    	url: SERVER+'admin/events/add_artist',
	    	type: 'POST',
	    	dataType: 'html',
	    	data:
	    		$('#EventArtistForm').serialize(),
	    	success:
	    	    function(response){
	    	    	//alert('response');
			$( "#artist" ).val("");
	    	    	$('#artist_list').html(response);
	    	    }
		   });

	   });

// Caching the artwork title textbox:
var artwork_creator = $('#artwork_creator');
//var artwork_creator_type = $('input:radio[name=data[EventArtist][tipe_pelaku_seni]]').val();
var artwork_creator_type = $('input:radio[name=tipe_pelaku_seni]:checked').val();

$("input:radio[name=tipe_pelaku_seni]").click(function() {
    artwork_creator_type = $(this).val();
    $("#artwork_creator").val("");
    $("#creator_type").val(artwork_creator_type);
});

// Defining a placeholder text:
artwork_creator.defaultText('Cari nama pelaku seni..');



// Using jQuery UI's autocomplete widget to find artwork creator
artwork_creator.autocomplete({
source: function(request, response){
$.post(SERVER+"events/auto_complete_artist", {data: { term : request.term, creator_type: artwork_creator_type }}, function(data){
    response($.map(data, function(item) {
    return {
        label: item.label,
        value: item.value
    }
    }))
}, "json");
},
minLength: 2,
//dataType: "json",
cache: false,
focus: function(event, ui) {
return false;
},
select: function(event, ui) {
this.value = ui.item.label;
$("#artist_id").val(ui.item.value);
/* Do something with artwork_id */
return false;
}
});

});

$(document).ready(function(){
// Using jQuery UI's autocomplete widget:
	var art_venue = $('#art_venue_name');
	art_venue.autocomplete({
	source: function(request, response){
	$.post(SERVER+"events/auto_complete_art_venue", {data: { term : request.term }}, function(data){
		response($.map(data, function(item) {
		return {
			label: item.label,
			value: item.value
		}
		}))
	}, "json");
	},
	minLength: 2,
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