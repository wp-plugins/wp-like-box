<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<a href="#wpfblb-popup" class="open-popup-link mfp-hide">Show fb like box</a>

<div id="wpfblb-popup" class="white-popup mfp-hide" data-options="<?php echo esc_attr(json_encode( $options )) ?>">
<div class="wpfblb-popup-content">
   <div class="fb-page" 
  data-href="<?php echo $options['page_url'] ?>" 
  data-hide-cover="<?php var_export($options['hide_cover']) ?>" 
  data-show-facepile="<?php var_export($options['show_faces']) ?>" 
  data-show-posts="<?php var_export($options['page_posts']) ?>"
  data-width="<?php echo $options['width'] ?>px"
  data-height="<?php echo $options['height'] ?>px">
  <div class="fb-xfbml-parse-ignore">
  <blockquote cite="<?php echo $options['page_url'] ?>">
  <a href="<?php echo $options['page_url'] ?>">Facebook</a></blockquote></div></div>
</div>
</div>

<style>
.white-popup {
  width: <?php echo $options['width'] ?>px;
  height: <?php echo $options['height'] ?>+10px;
  padding: 1px;
}
</style>

<script>

jQuery(document).ready(function() {

	jQuery('.open-popup-link').magnificPopup({
	  type:'inline',
	  midClick: true,
    closeMarkup: '<button class="mfp-close roundlink wpfblb-popup-close"><span class="mfp-close"><img class="mfp-close wpfblb-popup-close-btn" src="<?php echo plugins_url( "assets/close-icon.png", __FILE__ ) ?>" width="38" height="38" /><img class="mfp-close wpfblb-popup-close-btn" src="<?php echo plugins_url( "assets/close-icon.png", __FILE__ ) ?>" width="38" height="38" /></span></button>',
     
    callbacks: {
      open: function() {
        // Will fire when this exact popup is opened
        // this - is Magnific Popup object
      },
      close: function() {
         var options = jQuery('#wpfblb-popup').data('options');

         wpfblb_place_popup_close_cookie( 1, options.cookies_expiration_time );
      }
      // e.t.c.
    }
	});

  var options = jQuery('#wpfblb-popup').data('options');
  
  if ( ! options.use_cookies )
	 jQuery('.open-popup-link').click();
  else {
    
     if ( ! wpfblb_getCookie ("wpfblb_popup_1_closed" ) )
      jQuery('.open-popup-link').click();

  }

});

</script>