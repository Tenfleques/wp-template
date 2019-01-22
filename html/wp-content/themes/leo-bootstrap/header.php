<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>" />
        <meta name="keywords" content="<?php echo get_bloginfo( 'description' ); ?>" />
        <meta name="author" content="Tendai Chikake" />
        <link rel="shortcut icon" href="/img/favicon.png">
        <link rel="favicon" href="/img/favicon.png">
        <!--lib css-->
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap-table.min.css" type="text/css">
        <!--custom css-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/index.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/sidemenu.css">

        <!--[if lt IE 9]>
            <script src="<?php echo get_bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
        <![endif]-->
        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <!--fonts-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/font-awesome-4.7.0/css/font-awesome.min.css">
        <?php wp_head();?> 
    </head>
    <body>
        <div class="jumbotron">
            <form class="align-right form-inline col-sm-12">
                <select class="form-control custom-select border-0 international">
                    <option id="en">en</option>
                    <option selected="selected" id="ru">ru</option>     
                </select>
            </form> 
        </div>
        