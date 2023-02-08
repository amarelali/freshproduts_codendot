<?php
// Template Name: Products Page
get_header();

?>


<?php
$img = get_field('background_img',get_the_ID());
$title = get_the_title();

$upOne = realpath(__DIR__ . '/..');
include $upOne.'\background-img.php';
?>
<main class="mt-5 mb-5">
    <section class="section-1">
        <div class="container c-s1">
            <div class="row r-s1">
                <!-- taxonomy -->
                <?php
// Get a list of all terms in a taxonomy
$terms = get_terms(array(
  'hide_empty' => 0,
  'taxonomy' => 'vegetables',

) );


if ( count($terms) > 0 ):
  foreach ( $terms as $term ){?>
                <div class="col-4 col1-s1 products-categories-s1" data-slug="<?= $term -> slug ?>">

                    <div class="cont1-s1" >
                        <div class="title"><?= $term-> name ?></div>
                        <img src="<?= get_field('img',$term) ?>" class="filter">
                       
                    </div>
                    <div class="line">
                        </div>
                </div>
                <?php

  }
endif; 
?>
            </div>
        </div>

        <div class="container c-s1-2 mt-3">
            <div class="row r-s1-2 " id="dynmc-cont">




            </div>

        </div>
    </section>



</main>







<?php
get_footer();