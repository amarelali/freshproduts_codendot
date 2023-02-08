<?php
// Template Name: Distribution Page
get_header();
?>

<?php
$img = get_field('background_img',get_the_ID());
$title = 'Distribution';

$upOne = realpath(__DIR__ . '/..');
include $upOne.'\background-img.php';?>
<main class="mt-5 mb-5">
    <section class="section-2">
        <div class="container d-container-s2">
            <div class="row d-row-s2">
                <div class="col-md-5 col-12 mb-5 d-col1-s2">
                    <div class="cont-s2-1">
                        <img src="<?= get_field('image_of_map',get_the_ID())?>" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-12 d-col2-s2">
                    <div class="cont-s2-2">
                        <div class="container cont1">
                            <div class="row ">
                                <div class="col-12 title">
                                    <?= get_field('title',get_the_ID())?>

                                </div>
                                <div class="col-12 description mt-3">
                                    <?= get_field('description',get_the_ID())?>

                                </div>


                                <div class="mt-5 w-50 m-auto">
                                    <?php
                                $title = 'ENQUIRE NOW';
                                $link = '';

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
    </section>
</main>


<?php
get_footer();
?>