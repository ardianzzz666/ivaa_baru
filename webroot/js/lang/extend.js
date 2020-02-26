jQuery.extend(jQuery.validator.messages, {
  required: $.i18n._('required'),
  remote: $.i18n._('remote'),
  email: $.i18n._('email'),
  url: $.i18n._('need a valid url. ex: http://domain.com'),
  date: $.i18n._('date'),
  dateISO: $.i18n._('dateISO'),
  number: $.i18n._('number'),
  digits: $.i18n._('digits'),
  creditcard: $.i18n._('creditcard'),
  equalTo: $.i18n._('equalTo'),
  accept: $.i18n._('accept'),
  maxlength: $.i18n._('maxlength'),
  minlength: jQuery.validator.format($.i18n._('minlength')),
  rangelength: jQuery.validator.format($.i18n._('rangelength')),
  range: jQuery.validator.format($.i18n._('range')),
  max: jQuery.validator.format($.i18n._('max')),
  min: jQuery.validator.format($.i18n._('min'))
});