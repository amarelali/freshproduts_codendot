<?php
// Template Name: Contacts Page

get_header();
?>

<?php
$img = get_field('background_img',get_the_ID());
$title = get_the_title();

$upOne = realpath(__DIR__ . '/..');
include $upOne.'\background-img.php';?>
<main class="mt-5 mb-5">
    <section class="section-2">
        <div class="container c-container-s2">
            <div class="row c-row-s2">
                <div class="col-md-5 col-12 mb-5 c-col1-s2">
                    <div class="cont-s2-1">
                        <img src="<?= get_field('image_of_map',get_the_ID())?>" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-12 c-col2-s2">
                    <div class="cont-s2-2">
                        <div class="container cont1">
                            <div class="row ">
                                <div class="col-12 title mb-3">
                                    <?= get_field('content',get_the_ID())?>

                                </div>
                                <div class="col-12">
                                    <?= get_field_object('phone')['label']?>:
                                </div>
                                <div class="col-12 title">

                                    <?= get_field('phone',get_the_ID())?>

                                </div>
                                <div class="col-12"> <?= get_field_object('email')['label']?>:
                                </div>
                                <div class="col-12  title">

                                    <?= get_field('email',get_the_ID())?>

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