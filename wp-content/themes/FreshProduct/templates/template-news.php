<?php
//Template Name: News Page
get_header();
$img = get_field('background_img',get_the_ID());
$title = get_the_title();

$upOne = realpath(__DIR__ . '/..');
include $upOne.'\background-img.php';
?>
<main>
    <section class="section-2">
        <div class="container mt-3 mb-5 n-container1-s2">
            <div class="row  n-row1-s2">
                <div class="col-12 black text-center n-col1-s2">
                    <?php get_field('title-s2',get_the_ID(  ))?>
                </div>
            </div>

            <?php 
                

    $args = array( 'post_type' => 'news', 'posts_per_page' => -1,   
    'meta_key' => 'featured',
    'meta_value' => 'yes'
); 
    $the_query = new WP_Query( $args ); 

    if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();

?>


            <div class="row featured mt-3 mb-3">
                <div class="col-md-7 p-0 n-row2-s2">
                    <div class="cont w-100">
                        <img src="<?= get_field('new_img',get_the_ID(  ))?>" alt="">

                    </div>
                </div>
                <div class="col-md-5 p-0 n-row3-s2">
                    <div class="cont">
                        <div class="black mb-2">
                            <h1>
                                <?= get_field_object('featured')['label']?>
                                
                            </h1>

                        </div>
                        <div class="date">
                            <?=get_field('new_date',get_the_ID()) ? get_field('new_date',get_the_ID()) : 'N/A'?>
                        </div>
                        <div class="title mb-2">
                            <?=get_field('new_title',get_the_ID()) ? get_field('new_title',get_the_ID()) : 'N/A' ?>
                        </div>
                        <div class="desc mb-3">
                            <?= get_field('new_description',get_the_ID()) ? get_field('new_description',get_the_ID()) : 'N/A'?>
                        </div>
                        <div class=" w-50 mb-3">
                            <?php
                                $title = 'Read More';
                                $link = get_permalink($post->ID );

                                $upOne = realpath(__DIR__ . '/..');
                                include $upOne.'\custom_design\ctm-btn.php';
                                ?>

                        </div>


                    </div>

                </div>
            </div>
            <?php
         endwhile;
        wp_reset_postdata(); 
         else:  
         echo '<div class="alert alert-danger" role="alert" style="width: 95%;margin: auto;" >There are no news yet.</div>';
         endif;
    

?>
            <div class="row news p-0 " id="news-content">
            </div>
            <div class="row mt-5 mb-5 ">
                <div class="black" id="older-entries-btn"><?= get_field('older_entries',get_the_ID(  ))?>
                    <div class="iconcont"><i class="fas fa-angle-double-down"></i>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>

</main>


<?php
get_footer();
?>