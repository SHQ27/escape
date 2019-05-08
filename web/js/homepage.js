$(document).ready(function() {
	$('.commonLink, .commonLinkFooter').click(function(e){
        var target = e.target;
        var divId = $(target).data('goto');
        var offset = $('#' + divId).offset().top;
        if (offset)
        {
            $('html,body').animate({scrollTop: offset}, 1000);
            return false;
        }
	});

	$('#bottomLogo').click(function(e){
	    $('html,body').animate({scrollTop: 0}, 1000);
	    return false;
	});
});
