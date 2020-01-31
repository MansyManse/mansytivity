<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mansytivity Portfolio</title>
    <?php wp_head(); ?>
</head>

<body ss-container>

    <header>
        <nav id="offcanvas-sidebar" role="dialog">
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
        </nav>
    </header>