<?php
// Template Name: Product Story Page
get_header();
$img = get_field('background_img',get_the_ID());
$title = get_the_title();
$upOne = realpath(__DIR__ . '/..');
include $upOne.'\background-img.php';
?>
<main>
    <section class="section-2">
        <div class="container mt-5 mb-5 p-container1-s2">
            <div class="row p-row1-s2">
                <div class="col-12 black p-col1-s2">
                    <?=get_field('title_s2',get_the_ID(  ));?>

                </div>
                <div class="col-12 p-col2-s2">
                    <?= get_field('short_description_s2',get_the_ID(  ))?>
                </div>
            </div>
            <div class="p-stepper-s2 mt-5 mb-5">
                <?php
                        if(get_field('repeater_s2',get_the_ID(  ))){
                            while(the_repeater_field('repeater_s2',get_the_ID(  ))){
                        ?>
                <div class="row p-row1-stepper-s2">
                    <div class="circle">
                        <div>
                            <img src="<?=get_sub_field('icon_rp',get_the_ID(  ));?>" alt="">
                        </div>
                    </div>
                    <div class=" steps col-md-11 col-10 align-self-center">

                        <div class="row p-row2-stepper-s2 mb-5">
                            <div class="col-md-6 p-col2-s2 mb-3">
                                <div class="cont-1 black">
                                    <?=get_sub_field('title_rp',get_the_ID(  ));?>
                                </div>
                                <?php if(get_sub_field('description_rp',get_the_ID(  ))){
                                        while(the_repeater_field('description_rp',get_the_ID(  ))){
                                        ?>
                                <div class="cont-2">
                                    <?php  if(get_sub_field('icon_rp2_s2',get_the_ID())){?>
                                    <div class="icon-rp2-s2">
                                        <img src="<?= get_sub_field('icon_rp2_s2',get_the_ID())?>" alt="">
                                    </div>

                                    <?php
                                    } ?>



                                    <div class="text-rp2-s2">
                                        <?=get_sub_field('text',get_the_ID(  ))?>
                                    </div>
                                </div>

                                <?php }
                            }?>






                            </div>
                            <div class="col-md-6  p-col3-s2">
                                <div class="cont">
                                    <img src="<?= get_sub_field('image_rp',get_the_ID())?>" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php
                    }}?>

            </div>

        </div>
    </section>

    <section class="section-3">
        <div class="container mt-5 mb-5 p-container1-s3">
            <div class="row p-row1-s3">
                <div class="col-12 mb-2 p-col1-s3">
                    <div class="logo mb-3 ">
                        <div class="bg-logo">
                        </div>
                        <div class="text-logo title">
                            <?= get_field('title_s3',get_the_ID(  )) ?> </div>
                    </div>
                </div>
            </div>
            <?php if(get_field('repeater_s3',get_the_ID())){
                    while(the_repeater_field('repeater_s3',get_the_ID(  ))){
                        ?>
            <div class="row p-row2-s3">
                <div class="cycle-icon">
                    <img src="<?= get_field('cycle_icon')?>" alt="">
                </div>

                <?php
                        if(get_sub_field('repeater_imgs',get_the_ID())){
                            while(the_repeater_field('repeater_imgs',get_the_ID())){
?>
                <div class="col-md-6 pt-2 pb-2 max-size-img p-col2-s3">
                    <div class="cont ">
                        <img src="<?= get_sub_field('img',get_the_ID()) ?>" alt="">
                        <div class="absolute-layer">
                            <div class="img-cont">
                                <img src="<?=get_sub_field('icon_rp_s3',get_the_ID())?>" alt="">
                            </div>
                            <div class="black title-s3">
                                <?= get_sub_field('title_rp_s3',get_the_ID(  ))?>
                            </div>
                            <div class="stepper" style="flex-grow:4">
                                <ul>
                                    <?php
                            if(get_sub_field('repeater_tips_s3',get_the_ID())){
                                while(the_repeater_field('repeater_tips_s3',get_the_ID())){?>

                                    <li>
                                        <?php
                                $text = get_sub_field('text',get_the_ID(  ));

                                $upOne = realpath(__DIR__ . '/..');
                                include $upOne.'\custom_design\list-item-with-icon.php';
                                ?>
                                    </li>
                                    <?php
                                }
                            }
                             ?>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <?php       }
                        }
                        ?>

            </div>



            <?php
                    }}?>
        </div>
    </section>


</main>


<?php
get_footer();
?>