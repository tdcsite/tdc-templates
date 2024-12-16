(function($, window, document, undefined) {
	var $win = $(window);
	var $doc = $(document);

	$doc.ready(function() {
		// Fullsize image
		//$('.fullsize-image').each(function() {
		//	var $holder = $(this);
		//	var imageSrc = $holder.find('img').attr('src');

		//	$holder.css('background-image', 'url("' + imageSrc + '")');
		//});

		// Mobile Navigation
		$('.btn-menu').on('click', function(e) {
			e.preventDefault();

			$(this).toggleClass('active');

			$('.nav').toggleClass('expanded');

			$('.wrapper-inner').toggleClass('expanded');

			if(!$(this).hasClass('active')) {
                $('.nav li').removeClass('expanded');
            }
		});

        $('.nav a').on('click', function(e) {
            if ($(this).siblings('ul').length ) {
                if( $win.width() < 768 ) {
                    $(this).parent().toggleClass('expanded').siblings().removeClass('expanded');
					e.preventDefault();                    
                } else {
                	$(this).parent().addClass('expanded').siblings().removeClass('expanded');
                }
            }
        });

		// Placeholders - old Browsers
		$.fn.doPlaceholders = function() {
		    if ($.support.placeholder) {
		        return this;
		    }
		 
		    var $fields = this.filter(function () {
		        // Don't re-initialize
		        return !$(this).data('didPlaceholders');
		    });
		 
		    $fields.on('focus blur', function(event) {
		        var placeholder = this.getAttribute('placeholder');
		 
		        if (event.type === 'focus' && placeholder === this.value) {
		            this.value = '';
		        } else if (event.type === 'blur' && this.value === '') {
		            this.value = placeholder;
		        }
		    });
		 
		    // Set the initial value to the title
		    $fields.each(function() {
		        if (this.value === '') {
		            this.value = this.getAttribute('placeholder');
		        }
		    });
		 
		    // Mark the fields as initialized
		    $fields.data('didPlaceholders', true);
		 
		    // Alllow
		    return $fields;
		};
		 
		$.support.placeholder = (function() {
		    return 'placeholder' in document.createElement('input');
		})();
		 
		/* Don't select elements if placeholder is natively supported*/
		if (!$.support.placeholder) {
		    $('input[placeholder], textarea[placeholder]').doPlaceholders();
		}

		// Equalize Height
	    $.fn.equalizeHeight = function(mobile) {
	       var maxHeight = 0, itemHeight;
	       var $winW = $(window).width();
	       
	       var mobileTrue = (mobile === undefined) ? false : true;

	       var isMobile = $winW < 768;
	       
	       for (var i = 0; i < this.length; i++) {
	           $(this[i]).css('height', 'auto');
	               itemHeight = $(this[i]).outerHeight();
	         
	               if (maxHeight < itemHeight) {
	                   maxHeight = itemHeight;
	               }
	       }

	       if (mobileTrue) {
	           return this.height(maxHeight);
	       } else {
	           return (!isMobile) ? this.height(maxHeight) : $(this[i]).css('height', 'auto');
	       }
	    };

	    $win.on('resize', function() {
	    	$(".equalize-height").equalizeHeight();
	    });
	});

	$win.on('load', function() {
		// Slider
		$('.slider .slides').owlCarousel({
			autoplay: true,
			items: 1,
			nav: true,
			loop: true,
			smartSpeed: 1100,
			mouseDrag: false,
			responsiveRefreshRate: 1,
			dots: false,
            touchDrag: true,
            thumbs: true,
            humbImage: true,
            thumbContainerClass: 'owl-thumbs',
            thumbItemClass: 'owl-thumb-item'
		});
	});
})(jQuery, window, document);

	