<?php

get_header();
$img = get_field('new_img',get_queried_object_id(  ));
$title =   get_field("new_title",get_queried_object_id()) ? get_field("new_title",get_queried_object_id()) : '<div style="text-align:center">N/A</div>' ;

?>

<div class="s-bg-img">
    <img src="<?= $img?>">
    <div class="layer" style="width: 80%;text-align: left;">
        <div>
            <?=get_field("new_date",get_queried_object_id()) ? get_field("new_date",get_queried_object_id()) : '<div style="text-align:center">N/A</div>' ?>
        </div>
        <div class="title"> <?=  $title ?></div>
    </div>
</div>
<main>
    <section class="section-2">
        <div class="container s-n-container1-s2">
            <div class="row mt-5 mb-5 s-n-row1-s2">
                <div class="col-md-7 s-n-col1-s2">
                    <div class="cont">

                        <div class="desc">
                            <?= get_field('article',get_queried_object_id()) ? get_field('article',get_queried_object_id())  : '<div style="text-align:center">N/A</div>'?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 s-n-col2-s2">
                    <div class="cont">
                        <div class="col-12 title mb-4 col1">
                            <?=
                           get_field('s-title-s2',get_queried_object_id(  ));
                           ?>
                        </div>
                        <?php
                        
                        $args = array( 'post_type' => 'news', 'posts_per_page' => 2,   
                        'orderby'=> 'rand',
                        'post__not_in' => array($post->ID)

                        // 'meta_key' => 'featured',
                        // 'meta_value' => 'no'
                            ); 
                        $the_query = new WP_Query( $args ); 

                        if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();

                        ?>
                        <div class="col-12 p-0 mb-5 col2">
                            <div class="cont">
                                <div class="imgcont">
                                    <img src="<?=get_field('new_img',get_the_ID(  ))?>" alt="">
                                </div>
                                <div class="mt-3 date">
                                    <?= get_field('new_date',get_the_ID(  )) ? get_field('new_date',get_the_ID(  )) :'<div style="text-align:center">N/A</div>'?>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <?= get_field('new_title',get_the_ID(  )) ? get_field('new_title',get_the_ID(  )) :'<div style="text-align:center">N/A</div>'?>
                                    </div>
                                    <div class="desc mt-3 mb-3">
                                        <?= get_field('new_description',get_the_ID()) ? get_field('new_description',get_the_ID()) : '<div style="text-align:center">N/A</div>'?>


                                    </div>
                                    <div class="btn-cont">
                                        <div class=" w-50">
                                            <?php
                                                $title = 'Read More';
                                                $link = get_permalink();

                                                $upOne = realpath(__DIR__);
                                                include $upOne.'\custom_design\ctm-btn.php';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php       endwhile;
                    wp_reset_postdata(); 
                     else:  
                     echo '<div class="alert alert-danger" role="alert" style="width: 95%;margin: auto;" >There are no news yet.</div>';
                     endif;
                     ?>

                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5 s-n-row2-s2">
                            <div class="rowofcontainer" >
                                <div class="black previous-cont " >
                                    <div><i class="fas fa-angle-double-down"></i>
                                    </div>
                                    <a href="<?=get_permalink(get_adjacent_post( false,'', true ))  ?>"
                                        >Previous Article</a>

                                </div>
                                <div class="black next-cont" > <a href="<?=get_permalink(get_adjacent_post( false,'', false ))  ?>">Next Article</a>

                                    <div ><i class="fas fa-angle-double-down"></i>
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