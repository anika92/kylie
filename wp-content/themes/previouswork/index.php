

<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage kylietheme
 * @since kylietheme 1.0
 */
get_header(); ?>

<body class="p-news p-home" data-url="/">

		<div id="loading-screen" class="loading-screen"></div>
    
    <div class="header">
        <div class="socials-left">
            <a target="_blank" href="https://www.facebook.com/kylieminogue">
                <div class="social s-facebook">
                    <div class="s-normal"></div>
                    <div class="s-hover transition"></div>
                </div>
            </a>
            <a target="_blank" href="https://twitter.com/kylieminogue">
                <div class="social s-twitter">
                    <div class="s-normal"></div>
                    <div class="s-hover transition"></div>
                </div>
            </a>
        </div>
        
        <div class="socials-right">
            <a target="_blank" href="http://kylieminogue.tumblr.com/">
                <div class="social s-tumblr">
                    <div class="s-normal"></div>
                    <div class="s-hover transition"></div>
                </div>
            </a>
            <a target="_blank" href="http://instagram.com/kylieminogue">
                <div class="social s-instagram">
                    <div class="s-normal"></div>
                    <div class="s-hover transition"></div>
                </div>
            </a>
        </div>
    
        <div class="nav">
          <div class="nav1">
 	<?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>
          </div>
            
            <a href="/"><div class="logo transition"></div></a>
           <div class="nav2">
             <?php wp_nav_menu( array(
    'sort_column' => 'menu_order',
    'theme_location' => 'header_menu',
    'menu_class' => 'css-menu',
    'title_li' => '<div class="l"></div>',
    'link_before' => '<span class="l">',
    'link_after' => '</span>'
) ); ?>
          </div>
                               
         
        </div>
    </div>    
    
    
    	
    
    
    
        <?php get_footer();?>
    
            
    

	

    <script type="text/javascript">
		var html = document.getElementsByTagName('html')[0];
		html.className += '  wf-loading';
		setTimeout(function() {
		  html.className = html.className.replace(' wf-loading', '');
		}, 5000);
		
		WebFontConfig = { fontdeck: { id: '42046' } };
		
		(function() {
		  var wf = document.createElement('script');
		  wf.src = 'http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		  wf.type = 'text/javascript';
		  wf.async = 'true';
		  var s = document.getElementsByTagName('script')[0];
		  s.parentNode.insertBefore(wf, s);
		})();
	</script>
    

<!-- xxxxxxxx KYLIE FACEBOOK PIXEL xxxxxxxx -->    
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
  _fbq.push(['addPixelId', '1385684001706955']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1385684001706955&amp;ev=NoScript" /></noscript>
<!-- xxxxxxxx END KYLIE FACEBOOK PIXEL xxxxxxxx -->
        
    <script type="text/javascript" src="http://www.kylie.com/wp-content/themes/js/youtube.js" ></script>

</body>
</html>

