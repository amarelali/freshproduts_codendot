<?php
// Template Name: Apec Menu
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div class="section-1">
        <div class="container menu-container">
            <div class="row apec-logo-row">

                <div class="row-container">
                    <div class="img-container">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Apec/apeclogosvg.svg' ?>" alt="">

                    </div>
                    <div class="close-btn-container">
                        <i class="fa fa-times  fa-6x" aria-hidden="true"></i>

                    </div>
                </div>

            </div>
            <div class="row apec-list-menu">
                <div class="col-md-6 col1">
                    <div class="list-menu-cont">
                        <div class="row row1">
                        <div class="col-6 col1">
                                <ul class="menu mb-4 pb-4">
                                    <li> Corporate</li>
                                    <ul class="sub-menu">
                                        <li>
                                            Who We Are
                                        </li>
                                        <li>
                                            Chairman Message
                                        </li>
                                        <li>
                                            History
                                        </li>
                                        <li>
                                            Meet The Team
                                        </li>
                                        <li>
                                            Mission & Vision
                                        </li>
                                    </ul>
                                </ul>

                            </div>
                    

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col2">
                <div class="images-menu">
                    <div class="row row1">
                        <div class="col-12 col-img-1 mb-5">
                            <div class="cont">
                                <img src="<?= get_template_directory_uri() . '/assets/images/Apec/Side-Menu-Picture-1.png' ?>" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-img-2 mb-5">
                            <div class="cont">
                                <img src="<?= get_template_directory_uri() . '/assets/images/Apec/Side-Menu-Image.png' ?>" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         
        </div>
    </div>
    </div>
</body>

</html>