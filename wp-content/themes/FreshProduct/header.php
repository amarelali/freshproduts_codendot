<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="row header justify-content-between w-100 m-0 p-1">
            <div class="col-header col-lg-2 col-md-2 col-sm-12 col-xs-12 align-self-center">
                <div class="header-cont m-auto">
                    <div class="little-icons">

                        <a href="<?= get_field('facebook_url','options')?>" target="_blank">
                            <i class="fa-brands fa-facebook-f icons"></i>
                        </a>
                        <a href="<?= get_field('insta_url','options')?>" target="_blank">
                            <i class="fa-brands fa-instagram icons"></i>

                        </a>
                        <a href="<?= get_field('linkedin_url','options')?>" target="_blank">
                            <i class="fa-brands fa-linkedin-in icons"></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class="bar-features-items-cont col-lg-5 col-md-7 col-sm-12 col-xs-12 offset-lg-5 offset-md-3">
                <div class="row bar-features-items">
                    <div class="col-6 col1 p-0">
                        <div class="cont">
                          <div class="col11">
                          <img class="little-icon" src="<?= get_field('download_file','options')?>">
                          </div>  
                          <div class="col12">
                            <span>
                            <?= get_field('download_brochure_text','options')?>
                            </span>
                          </div>
                        </div>
                    </div>

                    <div class="col-6 col1 p-0 ">
                        <div class="cont">
                          <div class="col11">
                          <img class="little-icon" src="<?= get_field('phone_icon','options')?>">
                          </div>  
                          <div class="col12">
                            <span>
                            <?= get_field('phone_number','options')?>
                            </span>
                          </div>
                        </div>
                    </div>

            
                </div>

            </div>



        </div>
        <div class="header1 row m-0 position-absolute w-100" >
            <div class="col1-header1 col-lg-3 col-6 align-self-center text-lg-center">
                <div class="cont1-header  m-lg-auto">
                    <a href="<?= site_url()?>"> <img class="w-100"
                            src="<?= get_field('logo','options')?>">
                    </a>
                </div>
            </div>
            <div class="col2-header1 col-lg-9 align-self-center text-center d-none d-lg-block ">
                <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
            </div>
            <div class="col3-header1 col-6 align-self-center d-lg-none text-end">
                <i class="fa fa-bars fa-2xl	" aria-hidden="true" id="menu-bar" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
            </div>
        </div>

    </header>
    
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header" >
            <button type="button" class="btn-close text-reset btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mobile-menu-cont">
            <?php wp_nav_menu( array( 'theme_location' => 'Navigation Bar' ) ); ?>
        </div>
    </div>