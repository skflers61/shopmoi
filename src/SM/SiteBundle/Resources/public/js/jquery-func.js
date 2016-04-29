function _init_slider(carousel) {
	$('#slider-nav a').bind('click', function() {
		var index = $(this).parent().find('a').index(this);
		carousel.scroll( index + 1);
		return false;
	});
};

function _active_slide(carousel, item, idx, state) {
	var index = idx-1;
	$('#slider-nav a').removeClass('active');
	$('#slider-nav a').eq(index).addClass('active');
};

function _init_more_products(carousel) {
	$('.more-nav .next').bind('click', function() {
		carousel.next();
		return false;
	});
	
	$('.more-nav .prev').bind('click', function() {
		carousel.prev();
		return false;
	});
};


function _init_colonne_holder(carousel) {
	$('.colonne-nav .next').bind('click', function() {
		carousel.next();
		return false;
	});
	
	$('.colonne-nav .prev').bind('click', function() {
		carousel.prev();
		return false;
	});
};

$(document).ready(function() {
	$("#slider-holder ul").jcarousel({
		scroll: 1,
		auto: 6,
		wrap: 'both',
		initCallback: _init_slider,
		itemFirstInCallback: _active_slide,
		buttonNextHTML: null,
		buttonPrevHTML: null
	});
	
	$(".more-products-holder ul").jcarousel({
		scroll: 2,
		auto: 5,
		wrap: 'both',
		initCallback: _init_more_products,
		buttonNextHTML: null,
		buttonPrevHTML: null
	});
        
        
        $(".colonne-products-holder ul").jcarousel({
                vertical: true,
		scroll: 6,
		auto: 0,
		wrap: 'null',
		initCallback: _init_colonne_holder,
		buttonNextHTML: null,
		buttonPrevHTML: null
	});
        
        //a faire
        $(".imagescol").bind("click", function(){   
            
            //bordure images miniatures
            $(".imagescol").attr('values', 'null');
            $(this).attr('values', 'active');
            $(".imagescol").css({
                    'border-color' : 'rgba(220, 220, 220, 0.72)'
            });
                
            $(this).css({
                    'border-color' : 'black'
            });
           
            //modification image principale
            var src1=$(this).attr('src');
            var src2=src1.substring(0, src1.lastIndexOf("/"));
            var name1=$(this).attr('name');
            var name2=name1.substring(0, name1.lastIndexOf("_"));
            
            $("#imagePrincipale").attr('src' , src2+'/'+name2+'_G'+'.jpg');
            
            
            
        });  
        
        
        
});
