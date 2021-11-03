<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(  );?>/assets/styles/style.css" />
    <title>Kathalika - Newsportals</title>
</head>
<body>
    <section class="nav_bars">
        <div class="top_nav_bar">
            <div class="logo_container">
                <a href="/">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/logo.png" alt="Kathalika - Newsportals" />
                </a>
            </div>
            <form class="top_search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                
                  <input type="text" placeholder="शीर्षक, लेखक, वा स्तम्भमा खोज्नुहोस्" class="form-control" value="<?php echo get_search_query(); ?>">
                
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="main_nav">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img width="200px" src="<?php echo get_template_directory_uri(  );?>/assets/images/logo1.png" alt="Kathalika - Newsportals" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"><i class="fa fa-th-list"></i></span>
                    </button>
                    <div class="collapse navbar-collapse ul-list" id="navbarNav">
                      <ul class="navbar-nav " style="display: flex;" >
					  <?php
									wp_nav_menu(array(
										'theme_location'    => 'primary',
										'depth'             => 2,
										'container'         => 'div',
										'container_class'   => '',
									));
									?>
                      </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>