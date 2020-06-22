
$(document).ready(function()
{

    $.ajax({
        type: 'GET',
        url: '/get-books',
        dataType: 'html',
        success: function(result)
        {
            $('#books').html(result);
        }
    });

    // Tabs
    $('.nav-tabs a').click(function (e)
    {
        e.preventDefault();
        $(this).tab('show')
    });

    // Client Search
    $("#txtSearch").bind('input', function(e)
    {
        var typeC = $("input[name='typeClient']:checked").val();

        var key = fSearch.txtSearch.value;
        var idUser = fSearch.idUser.value;

        $.ajax({
            type: "POST",
            url: "search.php",
            data: "key="+key+"&typeCli="+typeC+"&idUser="+idUser,
            success: function(resp)
            {
                $("#result").html(resp);
            }
        });
    });

});