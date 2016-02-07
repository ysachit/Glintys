/*!
 * jPushMenu.js
 * 1.1.1
 * @author: takien
 * http://takien.com
 * Original version (pure JS) is created by Mary Lou http://tympanus.net/
 */

(function($) {
		
	$.fn.jPushMenu = function(customOptions) {
		var o = $.extend({}, $.fn.jPushMenu.defaultOptions, customOptions);
		
		/* add class to the body.*/
		
		$('body').addClass(o.bodyClass);
		$(this).addClass('jPushMenuBtn');
		$(this).click(function() {
			var target         = '',
			push_direction     = '';
			
		
			if($(this).is('.'+o.showLeftClass)) {
				target         = '.cbp-chat-left';
				push_direction = 'toright';
			}
			else if($(this).is('.'+o.showRightClass)) {
				target         = '.cbp-chat-right';
				push_direction = 'toleft';
			}
			else if($(this).is('.'+o.showTopClass)) {
				target         = '.cbp-chat-top';
			}
			else if($(this).is('.'+o.showBottomClass)) {
				target         = '.cbp-chat-bottom';
			}
			

			$(this).toggleClass(o.activeClass);
			$(target).toggleClass(o.menuOpenClass);
			
			if($(this).is('.'+o.pushBodyClass)) {
				$('body').toggleClass( 'cbp-chat-push-'+push_direction );
			}
			
			/* disable all other button*/
			$('.jPushMenuBtn').not($(this)).toggleClass('disabled');
			
			return false;
		});
		var jPushMenu = {
			close: function (o) {
				$('.jPushMenuBtn,body,.cbp-chat').removeClass('disabled active cbp-chat-open cbp-chat-push-toleft cbp-chat-push-toright');
			}
		}

    if(o.closeOnClickInside) {
       $(document).click(function() {
          jPushMenu.close();
        });

       $('.cbp-chat,.toggle-menu').click(function(e){
         e.stopPropagation();
       });
    }
		
		if(o.closeOnClickOutside) {
			 $(document).click(function() { 
				jPushMenu.close();
			 }); 

			 $('.cbp-chat,.toggle-menu').click(function(e){ 
				 e.stopPropagation(); 
			 });
		 }

        // On Click Link
        if(o.closeOnClickLink) {
            $('.cbp-chat a').on('click',function(){
                jPushMenu.close();
            });
        }
	};
 
   /* in case you want to customize class name,
   *  do not directly edit here, use function parameter when call jPushMenu.
   */
	$.fn.jPushMenu.defaultOptions = {
		bodyClass       : 'cbp-chat-push',
		activeClass     : 'menu-active',
		showLeftClass   : 'menu-left',
		showRightClass  : 'menu-right',
		showTopClass    : 'menu-top',
		showBottomClass : 'menu-bottom',
		menuOpenClass   : 'cbp-chat-open',
		pushBodyClass   : 'push-body',
		closeOnClickOutside: true,
		closeOnClickInside: true,
		closeOnClickLink: true
	};
})(jQuery);
