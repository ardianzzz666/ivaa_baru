$(function(){


            // Dialog
            $('#dialog').dialog, $('#medium').dialog({
                    autoOpen: false,
                    width: 600,
                    buttons: {
                            "Ok": function() {
                                    $(this).dialog("close");
                            },
                            "Cancel": function() {
                                    $(this).dialog("close");
                            }
                    }
            });


            // add medium
            $('#add-medium').click(function(){
                    $('#medium').dialog('open');
                    return false;
            });

    });