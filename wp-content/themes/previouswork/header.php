<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage kylietheme
 * @since kylietheme 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>

<!-- META -->
<title>Kylie</title>
<meta name="description" content="The official Kylie Minogue website." />
<meta name="keywords" content="Kylie Minogue" />

<!-- Facebook Meta -->
<meta property="og:title" content="Kylie"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://www.kylie.com"/>
<meta property="og:site_name" content="Kylie"/>
<meta property="og:description"	content="The official Kylie Minogue website."/>
<meta property="og:image" content="http://www.kylie.com/wp-content/themes/images/kylie-og.png" />


<!-- STYLES -->
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<![endif]-->

<!-- JAVASCRIPT -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parlo-crm.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ultimate.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ios.js"></script>

<!-- FAVICON -->
<link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />

<!-- VIEWPORT -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

 
<!-- ANALYTICS -->
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2034888-25']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>

<?php wp_head(); ?>
</head>
 
</script>

