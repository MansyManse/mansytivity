<section id="about">
    <div id="about-content">
        <div class="about-content-left">
            <img class="avatar-nametag"
                src="http://localhost/mansytivity/wp-content/uploads/2020/02/mansy-name-tag.svg" />
            <img class="avatar-photo"
                src="http://localhost/mansytivity/wp-content/uploads/2020/02/mansy-profile-photo.jpg" />
        </div>
        <div class="about-content-right">
            <h1><?php echo get_option( 'about_name' ); ?></h1>

            <div class="data">
                <div class="address about-data">
                    <?php echo get_option( 'client_address' ); ?>&nbsp;<?php echo get_option( 'client_city' ); ?>,
                    <?php echo get_option( 'client_state' ); ?> &nbsp;<?php echo get_option( 'client_zip_code' ); ?>
                </div>
                <div class="email about-data"><?php echo get_option( 'client_email' ); ?></div>
                <div class="number about-data"><?php echo get_option( 'client_phone' ); ?></div>
            </div>
            <div class="separator">&nbsp;</div>
            <div class="education">
                <div class="course about-data"><?php echo get_option( 'client_school' ); ?></div>
                <div class="email about-data"><?php echo get_option( 'client_certification' ); ?></div>
                <div class="number about-data"><?php echo get_option( 'client_award' ); ?></div>
                <div class="number about-data"><?php echo get_option( 'client_scholarship' ); ?></div>
            </div>
        </div>
    </div>
</section>