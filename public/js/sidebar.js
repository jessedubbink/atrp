$(window).resize(function() {
    if ($(window).width() < 755) {
        $("#sidebar").css('left', '-300px');
        $("#sidebar").removeClass("show");
    } else {
        $("#sidebar").addClass("show");
        $("#sidebar").css('left', '-300px');
    }
});

$(document).mouseup(function(e)  {
    if($("#sidebar").hasClass("show") && $(window).width() < 755) {
        let container = $("#sidebar");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0)  {
            $("#sidebar").css('left', '-300px');
            $("#sidebar").removeClass("show");
        }
    }
});