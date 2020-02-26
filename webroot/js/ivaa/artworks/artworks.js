    $(document).ready(function(){
        $('button#submitArtwork').click(function(){

                $('#ArtworkAdminAddForm').validate({
                    rules: {
                        'data[Artwork][title]':{
                            required:true
                        },
                        'data[Artwork][art_start_year]':{
                            required:true
                        },
                        'data[Artwork][description_ind]':{
                            required:true
                        },
                        'data[Artwork][artwork_category_id]':{
                            required:true
                        }
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });


        });
    });

  $(document).ready(function(){
        $("input#ArtworkPelakuSeni0").change(function() {
        $("#individu").show(200);
        $("#collective").hide(200);
        $("select#ArtworkCollectiveId").attr("disabled", true);
        $("select#ArtworkArtistId").attr("disabled", false);
        $("input#ArtworkCollectiveId").val('');
        $("input#ArtworkIndividu").attr("disabled", false);
		});
		
		$("input#ArtworkPelakuSeni0:checked").change(); //trigger correct state onload
        $("input#ArtworkPelakuSeni1:checked").change(); //trigger correct state onload
    });		

    $(document).ready(function(){

        $("input#ArtworkPelakuSeni1").change(function() {
          $("#collective").show(200);
          $("#individu").hide(200);
          $("input#ArtworkIndividu").attr("disabled", true);
          $("select#ArtworkCollectiveId").attr("disabled", false);
          $("select#ArtworkArtistId").attr("disabled", true);
          $('#ArtworkArtistId').val('');
          $("input#ArtworkCollective").attr("disabled", false);
		});

        $("input#ArtworkPelakuSeni0:checked").change(); //trigger correct state onload
        $("input#ArtworkPelakuSeni1:checked").change(); //trigger correct state onload
    });
	
$(document).ready(function(){

// Caching the movieName textbox:
var username = $('#ArtworkIndividu');

// Defining a placeholder text:
username.defaultText('Cari pelaku seni individu..');

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
$("#ArtworkIndividu").val(ui.item.label);
	 $("#ArtworkArtistId").val(ui.item.value);
	 return false;
/* Do something with artwork_id */
return false;
},
change: function (event, ui) {
    //if the value of the textbox does not match a suggestion, clear its value

    if (ui.item == null) {
        $(this).val('');
    }  
    //		    $("#ArtworkArtistId").val(ui.item.value);
    //		    return false;       
    } 
});

});

$(document).ready(function(){

// Caching the movieName textbox:
var collective = $('#ArtworkCollectived');

// Defining a placeholder text:
collective.defaultText('Cari pelaku seni collective..');

var kolektif = $("input#ArtworkCollectived").val();
// Using jQuery UI's autocomplete widget:

collective.autocomplete({
source: function(request, response){
$.post(SERVER+"collectives/auto_complete_collective", {data: { term : request.term }}, function(data){
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
    $("#ArtworkCollectiveId").val(ui.item.value);
    $( "#ArtworkCollectived" ).val(ui.item.label);
    return false;
/* Do something with artwork_id */
return false;
},
change: function (event, ui) {
    //if the value of the textbox does not match a suggestion, clear its value

    if (ui.item == null) {
        $(this).val('');
    }  
    //		    $("#ArtworkArtistId").val(ui.item.value);
    //		    return false;       
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


    
