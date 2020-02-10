/*
* manual lib js locale http://recursive-design.com/projects/jquery-i18n/
*  $.i18n._('emurlail')
*/
dictionary = { 
    "required"      : "this fields required",
    "email"         : "please use email format",
    "remote"        : "Por favor, escribe una URL válida.",
    "url"           : "Por favor, escribe una URL válida.",
    "date"          : "Por favor, escribe una fecha válida.",
    "dateISO"       : "Por favor, escribe una fecha (ISO) válida.",
    "number"        : "Please enter a number.",
    "digits"        : "Por favor, escribe sólo dígitos.",
    "creditcard"    : "Por favor, escribe un número de tarjeta válido.",
    "equalTo"       : "Por favor, escribe el mismo valor de nuevo.",
    "accept"        : "Por favor, escribe un valor con una extensión aceptada.",
    "maxlength"     : jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
    "minlength"     : jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
    "rangelength"   : jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
    "range"         : jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
    "max"           : jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
    "min"           : "Please enter a number > 0",
    "delete action staff" : "There might be future reservation which includes this staff. Are you sure to delete?",
    "Add Service"   : "Add Service",
    "start time null" : "Please Insert Time Before",
    "Remove" : "Remove",

    "Save" : "Save",
    "Saved" : "Saved",
    "Saving..." : "Saving...",
    "Update" : "Update",
    "Minimum quantity is one" : "Minimum quantity is one"


};

$.i18n.setDictionary(dictionary);
