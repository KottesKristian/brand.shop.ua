$(document).ready(function() {
    var width = ($('#tabs').width() / $('#tabs').parent().width() * 100).toFixed();
    var mainWidth = 100;
    var result = ((mainWidth - width) - 5) + '%';
    $('.box').width(result);


    $('#alias').prop('disabled', true);
    $('#checkAlias').change(function() {
        $('#alias').prop('disabled', function(i, val) {
            return !val;
        }) });

});