/*** Google maps ***/

/***** DataTimePicker ****/

$(function() {
    $('#Od').datetimepicker({
        minDate: new Date()
    }).on('dp.show', function () {
        return $(this).data('Od').defaultDate(new Date());
    });
});
$(function() {
    $('#Do').datetimepicker({
        minDate: new Date()
    }).on('dp.show', function () {
        return $(this).data('Do').defaultDate(new Date());
    });
});


$(function() {
    $('#Od1').datetimepicker();
});
$(function() {
    $('#Do1').datetimepicker();
});


/**** DataTable ***/
$(document).ready(function () {
    $(".table").dataTable({
        "iDisplayLength": 5,
        "processing": true,
        "bInfo" : false
    });
});

/**** Share to social networks****/

var popupMeta = {
    width: 400,
    height: 400
}

$(document).ready(function(){
    $(".social-share").on('click', function(){

        var url = $(this).attr('href');
        var popup = window.open(url, 'Social Share',
            'width='+popupMeta.width+',height='+popupMeta.height+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            return false;
        }
    });
});


