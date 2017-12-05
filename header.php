<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adds dynamic information to head -->
    <?php wp_head(); ?> 

    <title> <?php bloginfo( 'name' ) ?> </title>    
</head>

<body <?php body_class(); ?> >

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Brand</a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>

                <?php
                    $pagelist = get_pages();  
                    foreach ( $pagelist as $page ) : ?> 
                    <li><a href="<?php echo $page->guid; ?>">
                            <?php echo $page->post_title; ?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</nav>