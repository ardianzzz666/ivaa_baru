var Pagination = {};
$(document).ready(function (){
    Pagination.pageLimit();
});
Pagination.pageLimit = function(){
    var ulLimit = $("#pagination-element ul li");
    $.each(ulLimit,function(){
        $('#'+this+":has(a)").removeClass('current').addClass('common');
    });
}   