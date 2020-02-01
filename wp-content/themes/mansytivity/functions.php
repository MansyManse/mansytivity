<?php

// Function to Enqueue CSS and JS

function mansytivity_script_enqueue() {
    // Include CSS files in the header
    wp_enqueue_style( 'normalizestyle', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1', 'all' );
    wp_enqueue_style( 'simplescrollbar', get_template_directory_uri() . '/css/simple-scrollbar.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'offcanvass', get_template_directory_uri() . '/css/offcanvas.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'animationsstyle', get_template_directory_uri() . '/css/animations.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/mansytivity.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'googlewebfonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Wire+One|Advent+Pro ' );
    // Include the JS files in the footer
    wp_enqueue_script('jqueryscript', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array(), '3.4.1', true);
    wp_enqueue_script('simplescrollbarcript', get_template_directory_uri() . '/js/simple-scrollbar.js', array(), '1.0.0', true);
    wp_enqueue_script('offcanvassscript', get_template_directory_uri() . '/js/offcanvas.js', array(), '1.0.0', true);
    wp_enqueue_script('customscript', get_template_directory_uri() . '/js/mansytivity.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'mansytivity_script_enqueue' );

// Function to Setup Theme

function mansytivity_theme_setup() {
    add_theme_support('menus');
    // Create a Custom Menu
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'mansytivity_theme_setup');


// Additional Custom Settings

// Custom settings: About Settings

function h5bs_about_options() {

    if ( count($_POST) > 0 && isset($_POST['h5bs_about_settings']) ) {
        $options = array (  'name', 'roles', 'roles_2', 'country', 'quote' );

        foreach ( $options as $opt ) {
            delete_option ( 'about_'.$opt, $_POST[$opt] );
            add_option ( 'about_'.$opt, $_POST[$opt] );
        }
    }
    add_menu_page( 'About Settings', 'About Options', 'manage_options', 'h5bs_about_settings', 'h5bs_about_settings' );
}

add_action( 'admin_menu', 'h5bs_about_options' );

function h5bs_about_settings() { ?>
<div class="wrap">
    <?php screen_icon('themes'); ?> <h2>About Options</h2>

    <form method="post" action="">

        <h3>Contact Information</h3>
        <table class="form-table">
            <tr>
                <th><label for="name">Name</label></th>
                <td><input type="text" name="name" id="name" value="<?php echo get_option( 'about_name' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="roles">Roles</label></th>
                <td><input type="text" name="roles" id="roles" value="<?php echo get_option( 'about_roles' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="roles_2">Roles 2</label></th>
                <td><input type="text" name="roles_2" id="roles_2" value="<?php echo get_option( 'about_roles_2' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="country">Country</label></th>
                <td><input type="text" name="country" id="country" value="<?php echo get_option( 'about_country' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="quote">Quote</label></th>
                <td><input type="text" name="quote" id="quote" value="<?php echo get_option( 'about_quote' ); ?>"
                        class="regular-text" /></td>
            </tr>

        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes" />
            <input type="hidden" name="h5bs_about_settings" value="save" style="display:none;" />
        </p>
    </form>
</div><!-- end wrap -->
<?php }

// Custom settings: Client Options

function h5bs_client_options() {

    if ( count($_POST) > 0 && isset($_POST['h5bs_client_settings']) ) {
        $options = array ( 'logo_url', 'logo_alt_text', 'google_analytics', 'twitter_url', 'behance_url', 'facebook_url', 'google_url', 'instagram_url', 'pinterest_url', 'linkedin_url', 'youtube_url', 'email', 'phone', 'phone_2', 'fax', 'address', 'address_2', 'city', 'state', 'zip_code' );

        foreach ( $options as $opt ) {
            delete_option ( 'client_'.$opt, $_POST[$opt] );
            add_option ( 'client_'.$opt, $_POST[$opt] );
        }
    }
    add_menu_page( 'Client Settings', 'Client Options', 'manage_options', 'h5bs_client_settings', 'h5bs_client_settings' );
}

add_action( 'admin_menu', 'h5bs_client_options' );


function h5bs_client_settings() { ?>
<div class="wrap">
    <?php screen_icon('themes'); ?> <h2>Client Options</h2>

    <form method="post" action="">
        <h3>General Settings</h3>
        <table class="form-table">
            <tr>
                <th><label for="logo_url">Logo URL</label></th>
                <td><input type="text" name="logo_url" id="logo_url"
                        value="<?php echo get_option( 'client_logo_url' ); ?>" class="regular-text" /> <span
                        class="description">( ex. /wp-content/uploads/logo.png )</span></td>
            </tr>
            <tr>
                <th><label for="logo_alt_text">Logo Alt Text</label></th>
                <td><input type="text" name="logo_alt_text" id="logo_alt_text"
                        value="<?php echo get_option( 'client_logo_alt_text' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="google_analytics">Google Analytics Tracking #</label></th>
                <td><input type="text" name="google_analytics" id="google_analytics"
                        value="<?php echo get_option( 'client_google_analytics' ); ?>" class="regular-text" /> <span
                        class="description">( ex. UA-XXXXX-X )</span></td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes" />
            <input type="hidden" name="h5bs_client_settings" value="save" style="display:none;" />
        </p>

        <h3>Social Links</h3>
        <table class="form-table">
            <tr>
                <th><label for="twitter_url">Twitter URL</label></th>
                <td><input type="text" name="twitter_url" id="twitter_url"
                        value="<?php echo get_option( 'client_twitter_url' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="behance_url">Behance URL</label></th>
                <td><input type="text" name="behance_url" id="twitter_url"
                        value="<?php echo get_option( 'client_behance_url' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="facebook_url">Facebook URL</label></th>
                <td><input type="text" name="facebook_url" id="facebook_url"
                        value="<?php echo get_option( 'client_facebook_url' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="google_url">Google+ URL</label></th>
                <td><input type="text" name="google_url" id="google_url"
                        value="<?php echo get_option( 'client_google_url' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="linkedin_url">LinkedIn URL</label></th>
                <td><input type="text" name="linkedin_url" id="linkedin_url"
                        value="<?php echo get_option( 'client_linkedin_url' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="instagram_url">Instagram URL</label></th>
                <td><input type="text" name="instagram_url" id="instagram_url"
                        value="<?php echo get_option( 'client_instagram_url' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="pinterest_url">Pinterest URL</label></th>
                <td><input type="text" name="pinterest_url" id="pinterest_url"
                        value="<?php echo get_option( 'client_pinterest_url' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="youtube_url">YouTube URL</label></th>
                <td><input type="text" name="youtube_url" id="youtube_url"
                        value="<?php echo get_option( 'client_youtube_url' ); ?>" class="regular-text" /></td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes" />
            <input type="hidden" name="h5bs_client_settings" value="save" style="display:none;" />
        </p>

        <h3>Contact Information</h3>
        <table class="form-table">
            <tr>
                <th><label for="email">Email</label></th>
                <td><input type="text" name="email" id="email" value="<?php echo get_option( 'client_email' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="phone">Phone</label></th>
                <td><input type="text" name="phone" id="phone" value="<?php echo get_option( 'client_phone' ); ?>"
                        class="regular-text" /> <span class="description">Primary phone number</span></td>
            </tr>
            <tr>
                <th><label for="phone_2">Phone 2</label></th>
                <td><input type="text" name="phone_2" id="phone_2" value="<?php echo get_option( 'client_phone_2' ); ?>"
                        class="regular-text" /> <span class="description">Additional phone number ( ex. 1-800 )</span>
                </td>
            </tr>
            <tr>
                <th><label for="fax">Fax</label></th>
                <td><input type="text" name="fax" id="fax" value="<?php echo get_option( 'client_fax' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="address">Address</label></th>
                <td><input type="text" name="address" id="address" value="<?php echo get_option( 'client_address' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="address_2">Address 2</label></th>
                <td><input type="text" name="address_2" id="address_2"
                        value="<?php echo get_option( 'client_address_2' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="city">City</label></th>
                <td><input type="text" name="city" id="city" value="<?php echo get_option( 'client_city' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="state">State</label></th>
                <td><input type="text" name="state" id="state" value="<?php echo get_option( 'client_state' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="zip_code">Zip Code</label></th>
                <td><input type="text" name="zip_code" id="zip_code"
                        value="<?php echo get_option( 'client_zip_code' ); ?>" class="regular-text" /></td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes" />
            <input type="hidden" name="h5bs_client_settings" value="save" style="display:none;" />
        </p>
    </form>
</div><!-- end wrap -->
<?php
}





// Image Thumbnails
add_theme_support( 'post-thumbnails' );


// html5 search form
add_theme_support( 'html5', array( 'search-form' ) );