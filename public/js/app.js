function Clear(form)
{
	var formElements = form.elements;
	
	for(var i = 0; i < formElements.menght; i++)
	{
		type = formElements[i].type.toLowerCase();
		switch (type)
		{
			case "text":
			case "password":
			case "textarea":
			case "hidden":
				formElements[i].value = ""; break;
			case "radio":
			case "checkbox":
				if (formElements[i].checked)
				{
					formElements[i].checked = false;
				}
				break;
			case "select-one":
			case "select-multi":
				formElements[i].selectedIndex = -1; break;
		}
	}
}



$(document).ready(function()
{

    /*
     *  Bootstrap Navigation Tabs
     */

    $('.nav-tabs a').click(function()
    {
        $(this).tab('show');

        var href  = $(this).attr('href');

        //history.pushState(null, '', href);
    });


    /*------------------------------------
     *  Sidebar Toggle
     *----------------------------------*/

    $('#btn-open-sidebar').on('click', function(e)
    {
        e.preventDefault();

		var hasClass = $(this).hasClass('is-open');

		if(hasClass)
		{
			$(this).find('i').text('menu');
			$(this).removeClass('is-open');
			$('.sidebar').removeClass('is-open');
			$('.background-overlay').fadeOut(400);
		}
		else
		{
			$(this).find('i').text('clear');
			$(this).addClass('is-open');
			$('.sidebar').addClass('is-open');
			$('.background-overlay').fadeIn(600);
		}

    });

    $('.background-overlay').on('click', function()
    {
		$('#btn-open-sidebar').find('i').text('menu');
		$('#btn-open-sidebar').removeClass('is-open');
        $('.sidebar').removeClass('is-open');
        $('.background-overlay').fadeOut(400);
    });

});