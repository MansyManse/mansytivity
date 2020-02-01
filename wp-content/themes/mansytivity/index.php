<?php get_header(); ?>
<!-- Insert Content Here -->
<section id="intro">
    <!-- Insert Text Background here -->
    <div class="text-background">
        <div class="text--1-container"><span class="text text--1">Hello</span></div>
        <div class="text--2-container"><span class="text text--2">Hello</span></div>
    </div>
    <div class="intro-header">
        <div class="intro-header-box">
            <h1 class="intro-header-title"><i><?php echo get_option( 'about_name' ); ?></i> <span
                    class="intro-header-title-mask"></span></h1>
            <h2 class="intro-header-subtitle"><i><?php echo get_option( 'about_roles' ); ?></i> <span
                    class="intro-header-subtitle-mask"></span>
            </h2>
        </div>
    </div>
    <div class="intro-header-line" id="intro-header-line">
        <div id="intro-header-line-loop"></div>
    </div>
</section>
<?php include 'about-section.php' ?>
<?php include 'work-section.php' ?>
<?php get_footer(); ?>