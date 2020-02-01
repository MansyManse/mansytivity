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
        $options = array (  'name', 'roles', 'skill1', 'skill2', 'skill3', 'skill4', 'skill5' );

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
                <th><label for="skill1">Skill 1</label></th>
                <td><input type="text" name="skill1" id="skill1" value="<?php echo get_option( 'about_skill1' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="skill2">Skill 2</label></th>
                <td><input type="text" name="skill2" id="skill2" value="<?php echo get_option( 'about_skill2' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="skill3">Skill 3</label></th>
                <td><input type="text" name="skill3" id="skill3" value="<?php echo get_option( 'about_skill3' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="skill4">Skill 4</label></th>
                <td><input type="text" name="skill4" id="skill4" value="<?php echo get_option( 'about_skill4' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="skill5">Skill 5</label></th>
                <td><input type="text" name="skill5" id="skill5" value="<?php echo get_option( 'about_skill5' ); ?>"
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
        $options = array ( 'logo_url', 'logo_alt_text', 'google_analytics', 'twitter_url', 'behance_url', 'facebook_url', 'google_url', 'instagram_url', 'pinterest_url', 'linkedin_url', 'youtube_url', 'github_url', 'copyright', 'email', 'phone', 'phone_2', 'fax', 'address', 'address_2',
         'city', 'state', 'zip_code', 'school', 'certification', 'award', 'scholarship',
        'work', 'work1_company', 'work1_location', 'work1_role1', 'work1_role2', 'work1_duration',
        'work2_company', 'work2_location', 'work2_role1', 'work2_role2', 'work2_duration', 
        'work3_company', 'work3_location', 'work3_role1', 'work3_role2', 'work3_duration'   );

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
                <td><input type="text" name="behance_url" id="behance_url"
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
            <tr>
                <th><label for="github_url">Github URL</label></th>
                <td><input type="text" name="github_url" id="github_url"
                        value="<?php echo get_option( 'client_github_url' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="copyright">Copyright</label></th>
                <td><input type="text" name="copyright" id="copyright"
                        value="<?php echo get_option( 'client_copyright' ); ?>" class="regular-text" /></td>
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
            <tr>
                <th><label for="school">School</label></th>
                <td><input type="text" name="school" id="school" value="<?php echo get_option( 'client_school' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="certification">Certification</label></th>
                <td><input type="text" name="certification" id="certification"
                        value="<?php echo get_option( 'client_certification' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="award">Award</label></th>
                <td><input type="text" name="award" id="award" value="<?php echo get_option( 'client_award' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="scholarship">Scholarship</label></th>
                <td><input type="text" name="scholarship" id="scholarship"
                        value="<?php echo get_option( 'client_scholarship' ); ?>" class="regular-text" /></td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes" />
            <input type="hidden" name="h5bs_client_settings" value="save" style="display:none;" />
        </p>

        <h3>Work Experiences Settings</h3>
        <table class="form-table">
            <tr>
                <th><label for="work">Work Experiences</label></th>
                <td><input type="text" name="work" id="work" value="<?php echo get_option( 'client_work' ); ?>"
                        class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work1_company">Work 1 Company</label></th>
                <td><input type="text" name="work1_company" id="work1_company"
                        value="<?php echo get_option( 'client_work1_company' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work1_location">Work 1 Location</label></th>
                <td><input type="text" name="work1_location" id="work1_location"
                        value="<?php echo get_option( 'client_work1_location' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work1_role1">Work 1 Role 1</label></th>
                <td><input type="text" name="work1_role1" id="work1_role1"
                        value="<?php echo get_option( 'client_work1_role1' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work1_role2">Work 1 Role 2</label></th>
                <td><input type="text" name="work1_role2" id="work1_role2"
                        value="<?php echo get_option( 'client_work1_role2' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work1_duration">Work 1 Duration</label></th>
                <td><input type="text" name="work1_duration" id="work1_duration"
                        value="<?php echo get_option( 'client_work1_duration' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work2_company">Work 2 Company</label></th>
                <td><input type="text" name="work2_company" id="work2_company"
                        value="<?php echo get_option( 'client_work2_company' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work2_location">Work 2 Location</label></th>
                <td><input type="text" name="work2_location" id="work2_location"
                        value="<?php echo get_option( 'client_work2_location' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work2_role1">Work 2 Role 1</label></th>
                <td><input type="text" name="work2_role1" id="work2_role1"
                        value="<?php echo get_option( 'client_work2_role1' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work2_role2">Work 2 Role 2</label></th>
                <td><input type="text" name="work2_role2" id="work2_role2"
                        value="<?php echo get_option( 'client_work2_role2' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work2_duration">Work 2 Duration</label></th>
                <td><input type="text" name="work2_duration" id="work2_duration"
                        value="<?php echo get_option( 'client_work2_duration' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work3_company">Work 3 Company</label></th>
                <td><input type="text" name="work3_company" id="work3_company"
                        value="<?php echo get_option( 'client_work3_company' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work3_location">Work 3 Location</label></th>
                <td><input type="text" name="work3_location" id="work3_location"
                        value="<?php echo get_option( 'client_work3_location' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work3_role1">Work 3 Role 1</label></th>
                <td><input type="text" name="work3_role1" id="work3_role1"
                        value="<?php echo get_option( 'client_work3_role1' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work3_role2">Work 3 Role 2</label></th>
                <td><input type="text" name="work3_role2" id="work3_role2"
                        value="<?php echo get_option( 'client_work3_role2' ); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="work3_duration">Work 3 Duration</label></th>
                <td><input type="text" name="work3_duration" id="work3_duration"
                        value="<?php echo get_option( 'client_work2_duration' ); ?>" class="regular-text" /></td>
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