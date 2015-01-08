<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage kylietheme
 * @since kylietheme 1.0
 */
?>
    	<div class="footer">
        <div class="f-logos-left">
            <a target="_blank" href="http://www.parlophone.co.uk/"><div class="f-logo parlophone transition"></div></a>
            <a target="_blank" href="http://rocnation.com/"><div class="f-logo rocnation transition"></div></a>
        </div>
        <div class="f-logos-right">
            <a target="_blank" href="http://rabbithole.uk.com"><div class="f-logo rabbithole transition"></div></a>
        </div> 
    
        <div class="signup">
            <div class="signup-input">
            	MAILING LIST
            </div>
            <a href="/sign-up/">
                <div class="signup-but transition">
                    SIGN UP
                </div>
            </a>
        </div>
        
        <div class="footer-links">
        	� 2014 Parlophone |
            <a target="_blank" href="http://www.wminewmedia.com/privacy/">Privacy Policy</a> |
            <a target="_blank" href="http://www.wminewmedia.com/t&c/">Terms & Conditions</a> |
            <a target="_blank" href="http://www.wminewmedia.com/cookies_policy21062012.htm">Cookie Policy</a>
        </div>
        <?php wp_footer(); ?>
    </div>