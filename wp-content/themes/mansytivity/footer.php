    <footer id="contact">
        <div id="socialmedia">
            <a href="<?php echo get_option( 'client_behance_url' ); ?>"><i class="fab fa-behance fa-3x"
                    title="Behance"></i></a>
            <a href="<?php echo get_option( 'client_linkedin_url' ); ?>"><i class="fab fa-linkedin-in fa-3x"
                    title="LinkedIn"></i></a>
            <a href="<?php echo get_option( 'client_instagram_url' ); ?>"><i class="fab fa-instagram fa-3x"
                    title="Instagram"></i></a>
            <a href="<?php echo get_option( 'client_github_url' ); ?>"><i class="fab fa-github fa-3x"
                    title="Github"></i></a>
        </div>
        <div id="copyright-wrapper">
            <span class="copyright"><?php echo get_option( 'client_copyright' ); ?></span>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>