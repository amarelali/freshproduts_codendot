<?php 
get_header();

$pageinfo = getPageByName('products');
$url = $pageinfo -> guid;
$id = $pageinfo-> ID;
$title = $pageinfo-> post_title;
$url = $pageinfo -> guid;
// var_dump($pageinfo);
$img = get_field('background_img',$id);
include 'background-img.php';?>
<main>
    <section class="section-1">
        <div class="container-fluid s-p-container1">
            <div class="row s-p-row1">
                <div class="col-md-6 s-p-col1 pb-3">

                    <div class="s-p-cont-s1 mt-5">
                        <?php
                            if(!is_null($url)){?>
                            <a class="anchor-s1" href="<?=site_url('/?page_id='.$id)?>">
                            <div class="cont-s-p-s1">

                                <i class="fa fa-angle-left"></i>

                                <div class="label-s1">
                                     <?=$title?>
                                </div>
                            </div>
                        </a>
                           <?php }
                        ?>
                       
                        <div class="title">
                            <?php echo get_field("title",get_the_ID())." ".get_field('quantity',get_the_ID()).get_field('unit',get_the_ID());?>
                        </div>
                        <div class="img-card-s1">
                            <img src="<?php echo get_field('img',get_queried_object_id());?>" alt="">
                        </div>

                        <div class="s-p-sticker-s1" class="col-3">
                            <img src=" <?php echo get_field('carrot_sticker','options')?>">

                        </div>

                    </div>
                </div>
                <div class="col-md-6 s-p-col2">
                    <div class="cont-s-p-s2 mt-5 mb-5">
                        <div class="title mb-3">
                            Description
                        </div>
                        <div class="description">
                            <?= get_field('long_description',get_queried_object_id())?>
                        </div>
                        <div class="desc-img" class="col-md-8 col-12">
                            <img class="mt-3" src="<?php echo get_field('descption_img',get_queried_object_id())?>">
                        </div>
                        <div class="s-p-btm-s1 row mt-3  w-50 m-auto  col-sm-8 col-12  ">
                            <?php
                                $title = get_field('text_of_button','options');
                                $link = '';

                                $upOne = realpath(__DIR__);
                                include $upOne.'\custom_design\ctm-btn.php';
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