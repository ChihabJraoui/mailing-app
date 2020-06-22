
$(document).ready(function()
{

    $.ajax({
        type: 'get',
        url: '/get-campaigns',
        success: function(result)
        {
            $('#campaigns').html(result);
        }
    });

    $.ajax({
        type: 'get',
        url: '/get-folders',
        success: function(result)
        {
            $('#folders').html(result);
        }
    });


    /*
     * Add Folder
     */

    var pressTimer;

    $("#btn-add-folder").mouseup(function()
    {
        clearTimeout(pressTimer);
        // Clear timeout
        return false;
    }).mousedown(function()
    {
        // Set timeout
        pressTimer = window.setTimeout(function()
        {
            alert('adding folder ...');
        },1000);
        return false;
    });

});

//$(window).on('popstate', function(event)
//{
//    console.log('Ok');
//
//    if(event.state == null)
//    {
//        $.ajax({
//            type: 'get',
//            url: '/get-campaigns',
//            success: function(result)
//            {
//                $('#campaigns').html(result);
//            }
//        });
//    }
//
//
//});