jQuery(function ($) {
    // console.log('Script logros')
	$(".mt-logros-grid").each(function (i) {
        $(this).find(".ma-card").hide();
        $(this).find(".ma-card").slice(0, 6).show();
        
    });

    if($('.ma-card').length <= 6){
        $(".mt-load-more").hide()
    }
    
    $(".mt-load-more").on("click", function (e) {
    e.preventDefault();
    
    $(".ma-card:hidden")
        .slice(0, 6)
        .slideDown();
    if ($(".ma-card:hidden").length == 0) {
        $(this).text("No hay más resultados").addClass("noContent");
    }});
});