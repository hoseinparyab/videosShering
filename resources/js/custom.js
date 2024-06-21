
$(document).ready(function () {
	
	var $category_show = $('#main-category-toggler'),
		$main_category = $('#main-category'),
		$main_category_toggler_close = $('#main-category-toggler-close'),
		$main_category_toggler = $('#main-category-toggler');
		
	$category_show.click(function(){
		$main_category.slideDown();
		$main_category_toggler_close.show();
		$main_category_toggler.hide();
	});

	 
	$main_category_toggler_close.click(function(){
		$main_category.slideUp();
		$main_category_toggler_close.hide();
		$main_category_toggler.slideDown();
	});

     $('[data-toggle="tooltip"]').tooltip();
	 

    var $container = $('.masonry-container');
    $container.imagesLoaded(function () {
        $container.masonry({
            columnWidth: '.item',
            itemSelector: '.item'
        });
    });


});
