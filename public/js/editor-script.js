jQuery(document).ready(function(){
    $("table#register").each(function(i, v){
        var tbody = $(this).find('tbody');
        var thead = $(this).find('thead');
        var header = [];
        thead.find('th').each(function(i, v) {
            header[i] = $(this).text();
        });
        tbody.find('tr').each(function(i, v) {
            var myRow = $(this);
            myRow.find('td').each(function(j) {
                $(this).attr('data-th', header[j]);
            });
        });
    });
    $( document ).ajaxStart(function() {
        $( ".bootstrap-dialog-footer-buttons .btn" ).prop('disabled', true);
    });
    $( document ).ajaxStop(function() {
        $( ".bootstrap-dialog-footer-buttons .btn" ).prop('disabled', false);
    });
    
});