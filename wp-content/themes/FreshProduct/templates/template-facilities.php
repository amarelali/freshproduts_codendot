<?php
// Template Name: Facilities Page

get_header();

$img = get_field('background_img', get_the_ID());
$title = get_the_title();

$upOne = realpath(__DIR__ . '/..');
include $upOne . '\background-img.php'; ?>
<main>
    <section class="section-2">
        <div class="container mt-5 mb-5 f-container-s2">
            <div class="row f-row1-s2 mb-5">
                <div class="col-12 title text-center f-col1-s2">
                    <?= get_field('description', get_the_ID()); ?>
                </div>
            </div>
            <div class="row  f-row2-s2">
                <?php

                if (get_field('regions', get_the_ID())) {
                    while (the_repeater_field('regions', get_the_ID())) { ?>
                        <div class="col-md-6 mb-5 f-col1-2-s2">
                            <div class="f-cont-s2">
                                <div class="img-cont-s2">
                                    <img src="<?= get_sub_field('img', get_the_ID()) ?>" alt="">
                                    <div class="f-details-cont-s2">
                                    </div>
                                </div>
                                <div class="position-absolute f-text-s2">
                                    <div class="f-cont-text-s2  mb-2">

                                        <?php
                                        $text = get_sub_field('region_name', get_the_ID());
                                        $upOne = realpath(__DIR__ . '/..');
                                        include $upOne . '\custom_design\logo-with-green-icon.php';
                                        ?>


                                    </div>
                                    <div class="greenbox-desc">
                                        <?php
                                        if (get_sub_field('details', get_the_ID())) {
                                            while (the_repeater_field('details', get_the_ID())) { ?>
                                                <div>
                                                    <?= get_sub_field('title', get_the_ID()) ?>
                                                    <div class="title">
                                                        <?= get_sub_field('data', get_the_ID()) ?>
                                                    </div>
                                                </div>
                                        <?php }
                                        } ?>




                                    </div>
                                </div>

                            </div>
                        </div>
                <?php }
                } ?>

            </div>
        </div>
        </div>
        </div>
    </section>
    <section class="section-3 mt-5 mb-5">
        <div class="container f-container-s3">
            <div class="row f-row-s3">
                <div class="col-md-6 mb-2 f-col1-s3">
                    <div class="cont">
                        <?php
                        $text = get_field('title_s3', get_the_ID());
                        $upOne = realpath(__DIR__ . '/..');
                        include $upOne . '\custom_design\logo-with-green-icon.php';
                        ?>



                        <div class="short-description mb-2">
                            <?= get_field('short_description', get_the_ID()) ?>
                        </div>
                        <?php
                        if (get_field('repeater', get_the_ID())) {
                            while (the_repeater_field('repeater', get_the_ID())) {
                        ?>
                                <div class="subtitle mb-2">
                                    <b> <?= get_sub_field('subtitle', get_the_ID()) ?>
                                    </b>
                                </div>
                                <div class="list">
                                    <?php if (get_sub_field('repeater_2', get_the_ID())) {
                                        while (the_repeater_field('repeater_2', get_the_ID())) { ?>

                                            <?php
                                            $text = get_sub_field('info', get_the_ID());
                                            $upOne = realpath(__DIR__ . '/..');
                                            include $upOne . '\custom_design\list-item-with-icon.php';
                                            ?>


                                    <?php  }
                                    } ?>

                            <?php
                            }
                        }
                            ?>
                                </div>
                    </div>

                </div>


            </div>
            <div class="col-md-6 mb-2 f-col2-s3">
                <div class="cont">
                    <img src="<?= get_field('image', get_the_ID()) ?>" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="section-4">
        <img src="<?= get_field('background_image', get_the_ID()) ?>" class="imgcont-s4">
        <div class="layerup">
            <div class="container">
                <div class="layercontainer">
                    <?php
                    $text = get_field('title_s4', get_the_ID());
                    $upOne = realpath(__DIR__ . '/..');
                    include $upOne . '\custom_design\logo-with-green-icon.php';
                    ?>
                    <div class="list">
                        <?php
                        if (get_field('repeater_info', get_the_ID())) {
                            while (the_repeater_field('repeater_info')) { ?>
                                <?php
                                $text = get_sub_field('info', get_the_ID());
                                $upOne = realpath(__DIR__ . '/..');
                                include $upOne . '\custom_design\list-item-with-icon.php';
                                ?>

                        <?php  }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <section class="section-5 mt-5 mb-5">
        <div class="container f-container-s5">
            <div class="row f-row-s5">
                <div class="col-md-6 mb-3 f-col1-s5">
                    <div class="cont">
                        <?php
                        $text = get_field('title_s5', get_the_ID());
                        $upOne = realpath(__DIR__ . '/..');
                        include $upOne . '\custom_design\logo-with-green-icon.php';
                        ?>
                        <div class="short-description mb-2">
                            <?= get_field('short_description_s5', get_the_ID()) ?>
                        </div>
                        <?php
                        if (get_field('repeater_s5', get_the_ID())) {
                            while (the_repeater_field('repeater_s5', get_the_ID())) {
                        ?>
                                <div class="subtitle mb-2">
                                    <b> <?= get_sub_field('subtitle_s5', get_the_ID()) ?>
                                    </b>
                                </div>
                                <div class="list">
                                    <?php if (get_sub_field('repeater_sub_s5', get_the_ID())) {
                                        while (the_repeater_field('repeater_sub_s5', get_the_ID())) { ?>
                                            <?php
                                            $text = get_sub_field('info', get_the_ID());
                                            $upOne = realpath(__DIR__ . '/..');
                                            include $upOne . '\custom_design\list-item-with-icon.php';
                                            ?>
                                    <?php  }
                                    } ?>
                            <?php
                            }
                        }
                            ?>
                                </div>
                    </div>

                </div>

                <div class="col-md-6 mb-2 f-col2-s5">
                    <div class="cont">
                        <img src="<?= get_field('img-s5', get_the_ID()) ?>" alt="">
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <section class="section-6">
        <div class="imagecont">
            <img src="<?= get_field('background_image_s6', get_the_ID()) ?>" alt="">
            <div class="layerup">
                <div class="layercontainer">

                    <div class="container">
                        <div class="row">
                            <?php
                            $text = get_field('title_s6', get_the_ID());
                            $upOne = realpath(__DIR__ . '/..');
                            include $upOne . '\custom_design\logo-with-green-icon.php';
                            ?>
                        </div>
                        <div class="row">
                            <?php
                            if (get_field('repeater_s6', get_the_ID())) {
                                while (the_repeater_field('repeater_s6', get_the_ID())) { ?>


                                    <div class="col-md-6 repeater-s6">
                                        <div class="cont">

                                            <div class="number">
                                                <?= get_sub_field('number', get_the_ID()) ?><sup><?= get_sub_field('unity', get_the_ID()) ?></sup>
                                            </div>
                                            <div class="desc"><?= get_sub_field('r_description', get_the_ID()) ?></div>
                                        </div>
                                    </div>
                            <?php       }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
</main>

<?php
get_footer();
?>