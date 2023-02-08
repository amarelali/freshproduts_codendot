<?php
//Template Name: Home Page
get_header();

?>

<section class="section-1 position-relative">

    <video autoplay muted loop>
        <source src="<?php echo get_field('banner_video',get_the_ID()) ?>" type="video/mp4">
    </video>
    <!-- black layer with opacity above the video -->
    <div class="blackLayer position-absolute w-100 h-100">
    </div>

    <div class="lastLayer w-100 h-75 position-absolute">
        <div class="row m-0 row1-s1">
            <div class="col-3 offset-1 col1-s1 ">
                <img src="<?= get_template_directory_uri().'/assets/images/section 1/10+years.png'?>">
                <!-- tzbit bl scss
                <div class="cont-s1">

                </div> -->
            </div>
        </div>
        <div class="row m-0 row2-s1">
            <div class="col-12 col2-s1  text-center">
                <div class="arrow m-auto">
                    <img src="<?= get_template_directory_uri().'/assets/images/section 1/arrow.png'?>">
                </div>
            </div>
        </div>

    </div>

</section>
<main>
    <section class="section-2 ">
        <div class="container">
            <div class="row row1-s2 pt-5">
                <div class="col-md-6 col-12 col1-s2 ">
                    <div class="cont1-s2">
                        <div class="text-s2">
                            <p><?= get_field('mini_intro',get_the_ID())?></p>
                            <p><?= get_field('description',get_the_ID())?> </p>
                        </div>
                        <div class="row m-0 row1-1-s2">
                            <div class="col-md-7 col-7 mb-5 col1-1-s2 mb-5">
                                <?php
                                $title = esc_attr(get_field('link_s2',get_the_ID())['title']);
                                $link =  esc_url(get_field('link_s2',get_the_ID())['url']);

                                $upOne = realpath(__DIR__ . '/..');
                                include $upOne.'\custom_design\ctm-btn.php';
                                ?>

                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-md-6 col-12 col2-s2">
                    <div class="cont2-s2">
                        <div class="position-relative  m-auto img-container">
                            <img src="<?= get_field('image_of_carrots',get_the_ID())?>">
                            <div class="position-absolute">
                                <img src="<?= get_field('carrot_sticker',get_the_ID())?>">
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container pt-5 pb-5">
            <div class="row m-0 p-10 row1-s3">
                <div class="col-md-6 col-12 col1-s3 mb-3">
                    <div class="cont1-s3">
                        <img id="production_cycle" src="<?= get_field('production_cycle_image',get_the_ID())?>"
                            class="w-100">
                        <div id="learn-more-s3-p1"><span>
                                <a href="<?= esc_url(get_field('link_s3',get_the_ID())['url'])?> ">
                                    <?= esc_attr(get_field('link_s3',get_the_ID())['title'])?>
                                </a>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="col2-s3 col-md-6 col-12 mt-3">
                    <div class="cont2-s3">
                        <p class="title">
                            <?= get_field('production_title',get_the_ID())?>
                        </p>
                        <?= get_field('production_description',get_the_ID())?>
                        <div class="stepper w-90">

                            <?php
                       
if( get_field('production_cycle_steps', get_the_ID()) ) {
    while( the_repeater_field('production_cycle_steps', get_the_ID()) ) {?>
                            <div class="row" >
                            <div class="circle mb-3" >
                                    <div>
                                        <?= get_sub_field('number_of_steps');?>
                                    </div>
                                   
                                </div>
                                <div class=" steps col-md-11 col-10 align-self-center">
                                    <?= get_sub_field('description_of_steps');?>
                                </div>
                            </div>
                            <?php
    }
}?>

<!-- <div class="row" style="
    border-left: 2px solid green;
">
                                <div class="circle mb-3" style="margin-left: -30px;">
                                    <div>
                                        2                                    </div>
                                    
                                </div>
                                <div class=" steps col-md-11 col-10 align-self-center">
                                    Planting Process                                </div>
                            </div>


                        </div>
                    </div> -->


                </div>

            </div>
    </section>

    <section class="section-4">
        <div class="cont1-s4">
            <img class="backgroundImg-s4" src="<?= get_field('background_image',get_the_ID())?>">
            <div class="content-text w-100 h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-s4 col-7 offset-5 col-sm-6 offset-sm-6 align-self-center ">
                            <div class="cont2-s4 ">
                                <div class="cont2-1-s4 title">
                                    <div class="number-s4">
                                        <?= get_field('number_ha',get_the_ID())?>
                                    </div>
                                    <div class="text-s4">
                                        <?= get_field('ha_description',get_the_ID())?>

                                    </div>
                                </div>
                                <div class="cont2-2-s4 row">

                                    <?php           if( have_rows('products') ):
                                            while( have_rows('products') ) : the_row();
                                             ?>

                                    <div class="col-4">
                                        <div class="cont2-2-1-s4">
                                            <div class="img">
                                                <img src="<?=  get_sub_field('image_of_product');?>">
                                            </div>
                                            <div class="title">
                                                <?=
                                                get_sub_field('name_of_product');?>

                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                                endwhile;
                                                else :
                                                endif;
                                                ?>


                                </div>
                                <div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>
    <section class="section-5">
        <div class="container cont-5 h-100 pb-5 pt-5">
            <div class="row row-5 h-100">
                <div class=" col1-5 col-md-6 col-12 mb-5">
                    <div class="cont1-s5">
                        <div class="img1-s5 f-icon">

                        </div>
                        <div class="title-s5 mb-3 title">
                            <?= get_field('title',get_the_ID())?>
                        </div>
                        <div class="subtitle-s5 mb-2 title">
                            <?= get_field('subtitle',get_the_ID())?>
                        </div>
                        <div class="text-s5">
                            <?=get_field('text',get_the_ID())?> </div>


                    </div>
                                            </div>
                                            <div class=" col2-5 col-md-6 col-12">
                        <div class="cont2-s5" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <div class="img2-s5">
                                <img src="<?= get_field('thumbnail',get_the_ID())?>" alt="">
                            </div>
                            <div class="border-s5">
                                <img src="<?= get_field('play_icon',get_the_ID())?>" alt="">

                            </div>
                        </div>
                    </div>
         


                    <!-- Modal -->
                    <div class="modal fade modal1" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl ">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="modal1-btn btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <video controls autoplay poster="<?php echo get_field('thumbnail',get_the_ID())?>"
                                        id="video-s5">
                                        <source
                                            src="<?= get_template_directory_uri().'/assets/videos/background-home.mp4'?>"
                                            type="video/mp4">

                                    </video>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </div>
        </div>
    </section>
    <section class="section-6 pt-5 pb-5">
        <div class="container">
            <div class="row mt-5">
                <div class=" col1-s6 col-md-6 col-12 mb-5">
                    <div class="cont1-s6">
                        <div class="imgs-border-top"></div>
                        <div class="imgs-border-bottom"></div>
                        <div class="imgs-repeater-s6">
                            <?php

if( have_rows('imgs_facilities') ):
    while( have_rows('imgs_facilities') ) : the_row();
?>


                            <img src="<?=get_sub_field('imgs');?>">
                            <?php
endwhile;
else :
endif;
?>
                        </div>


                    </div>
                </div>
                <div class="col2-s6 col-md-6 col-12">
                    <div class="cont2-s6">
                        <div class="title-s6 title">
                            <?= get_field('text_title_0',get_the_ID())?>
                        </div>
                        <div class="text-s6">
                            <?= get_field('text_0',get_the_ID())?>

                        </div>
                        <div class="facilities-counter pt-3">
                            <div class="row">
                                <?php

if( have_rows('facilities') ):
    while( have_rows('facilities') ) : the_row();
?>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <!-- list -->

                                    <?php
                                $text = get_sub_field('text',get_the_ID(  ));
                                $upOne = realpath(__DIR__ . '/..');
                                include $upOne.'\custom_design\list-item-with-icon.php';
                                ?>

                                </div>
                                <?php
endwhile;
else :
endif;
?>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 col-6 ">
                                <?php
                                $title = esc_attr(get_field('link_1_s6',get_the_ID())['title']);
                                $link =  esc_url(get_field('link_1_s6',get_the_ID())['url']);

                                $upOne = realpath(__DIR__ . '/..');
                                include $upOne.'\custom_design\ctm-btn.php';
                                ?>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class=" col1-s6 col-md-6 col-12 mb-5">
                    <div class="cont1-s6">
                        <div class="imgs-border-top"></div>
                        <div class="imgs-border-bottom"></div>
                        <div class="imgs-repeater-s6">
                            <?php

if( have_rows('imgs_-_team') ):
    while( have_rows('imgs_-_team') ) : the_row();
?>


                            <img src="<?=get_sub_field('img');?>">
                            <?php
endwhile;
else :
endif;
?>
                        </div>


                    </div>
                </div>
                <div class="col2-s6 col-md-6 col-12">
                    <div class="cont2-s6">
                        <div class="title-s6 title">
                            <?= get_field('text_title_1',get_the_ID(  ))?>
                        </div>
                        <div class="text-s6">
                            <?= get_field('text_1',get_the_ID())?>
                        </div>
                        <div class="title-s6 title">
                            <?= get_field('text_title_2',get_the_ID(  ))?>
                        </div>
                        <div class="text-s6">
                            <?= get_field('text_2',get_the_ID())?>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-7 col-7 ">

                                <?php
                                $title = esc_attr(get_field('link_2_s6',get_the_ID())['title']);
                                $link =  esc_url(get_field('link_2_s6',get_the_ID())['url']);

                                $upOne = realpath(__DIR__ . '/..');
                                include $upOne.'\custom_design\ctm-btn.php';
                                ?>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </div>
        </div>

        </div>
    </section>
</main>

<?php
get_footer();