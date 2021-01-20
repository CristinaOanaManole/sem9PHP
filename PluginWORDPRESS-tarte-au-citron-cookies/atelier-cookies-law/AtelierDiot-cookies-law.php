<?php 
/*
Plugin Name: AtelierDiot-cookies-law
Version: 0.1
Plugin URI: http://www.
Description: WordPress Plugin for european cookie law.
Author: TotoAuthor URI: http://www.
*/


/**
 * Initialize tarteaucitron 
 */
 
add_action('wp-head', 'AtelierDiot_scripts');

function AtelierDiot_script() {

    $dir = plugin_dir_url(__FILE__) . "js/tarteaucitron/tarteaucitron.js";

    // $dirOk = wp_normalize_path($dir);
    // var_dump($dirOk);

    ?>
    <script src="<?= $dir0k ?>"></script>
    <script type="text/javascript">
        tarteaucitron.init({
          "privacyUrl": "", /* Privacy policy url */
          "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
          "cookieName": "tartaucitron", /* Cookie name */
          "orientation": "bottom", /* Banner position (top - bottom) */
          "showAlertSmall": true, /* Show the small banner on bottom right */
          "cookieslist": false, /* Show the cookie list */
          "adblocker": false, /* Show a Warning if an adblocker is detected */
          "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
          "highPrivacy": true, /* Disable auto consent */
          "handleBrowserDNTRequest": false, /* If Do Not Track == 1, accept all */
          "removeCredit": false, /* Remove credit link */
          "moreInfoLink": false, /* Show more info link */
        });
    </script>
    <?php
}    

/*
 * Add my new menu to the Admin Control Panel
 */
 
// Hook the 'admin_menu' action hook, run the function named 'mfp_Add_My_Admin_Link()'
add_action( 'admin_menu', 'AtelierDiot-cookies-law_Add_My_Admin_Link' ); 

// Add a new top level menu link to the ACP
function AtelierDiot_Add_My_Admin_Link()
{
    add_menu_page(
        'My First Page', // Title of the page
        'My First Plugin', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'includes/AtelierDiot-cookies-law-first-acp-page.php' // The 'slug' - file to display when clicking the link
    );
}
