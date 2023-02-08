<?php
//Template Name: About Page
get_header();

$img = get_field('background_img',get_the_ID());
$title = get_the_title();
$upOne = realpath(__DIR__ . '/..');
include $upOne.'\background-img.php';
?>
<main>
    <section class="section-2 mt-5 mb-5">
        <div class="container a-container1-s2">
            <div class="row a-row1-s2">
                <div class="col-md-6 a-col1-s2 mb-3">
                    <div class="cont a-cont1-s2">
                        <div class="black">
                            <?= get_field('title',get_the_ID())?>
                        </div>
                        <div class="description">
                            <?= get_field('descprition',get_the_ID(  ));?>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 a-col2-s2">
                    <div class="cont a-cont2-s2" >
                        <img src="<?= get_field('image',get_the_ID(  ))?>" alt="" >
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container mt-5 mb-5 a-container1-s3" >
            <div class="row pt-5 a-row1-s3">
                <div class="col-md-6 mb-5 a-col1-s3">
                    <div class="cont a-cont1-s3 " >
                        <img src="<?= get_field('logo','options')?>" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-md-6 mb-5 a-col2-s3">
                    <div class="cont a-cont2-s3" >
                        <div class="title mb-2">
                            <?= get_field('title_s3',get_the_ID(  ))?>
                        </div>
                        <div class="description">
                            <?= get_field('description_s3',get_the_ID(  ))?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-4">
        <div class="container a-container1-s4 mt-5 mb-5">
            <div class="row a-row1-s4">
                <div class="col-12 a-col1-s4">

                    <div class="logo mb-3 "> <!-- mobile 100%-->
                        <div class="bg-logo">
                        </div>
                        <div class="text-logo title">
                            <?= get_field('title_s4',get_the_ID());?>
                        </div>
                    </div>
                </div>
                <div class="black a-description-s4">
                    <?= get_field('description_s4',get_the_ID())?>
                </div>


            </div>
        </div>
        </div>

    </section>
    <section class="section-5">

        <img src="<?= get_field('background_image_s5',get_the_ID())?>" alt="" >

        <div class="container a-container1-s5" >
            <div class="row a-row1-s5">
                <div class="col-12 mb-3 title a-col1-s5">
                    <?= get_field('title_s5',get_the_ID())?>
                </div>
                <div class="col-12 mb-2 black a-col2-s5">
                    <?= get_field('short_description_s5',get_the_ID())?>
                </div>
                <div class="col-12 a-col3-s5">
                    <?= get_field('long_description_s5',get_the_ID())?>
                </div>
            </div>


        </div>




    </section>
    <section class="section-6">
        <div class="container a-container1-s6" >
            <div class="row text-center p-5 a-row1-s6" >
                <?php if(get_field('service_repeater',get_the_ID())){
                while(the_repeater_field('service_repeater',get_the_ID())){?>
                <div class="col-md-3 col-6 pb-3 pt-3">
                    <div class="cont" >

                        <div class="imgcont mb-2" >
                            <img src="<?= get_sub_field('logo',get_the_ID())?>" alt="">

                        </div>
                        <div class="black logoTitle">
                            <?= get_sub_field('title',get_the_ID())?>
                        </div>

                    </div>
                </div>
                <?php }}?>
            </div>
        </div>

    </section>
    <section class="section-7">
        <div class="container mt-5 mb-5 a-container1-s7">
            <div class="row a-row1-s7">
                <div class="col-12 title a-col1-s7">
                    <?= get_field('title_s7',get_the_ID())?>
                </div>
                <div class="col-12 black mt-2 a-col2-s7 mb-3">
                    <?=get_field('short_description_s7',get_the_ID())?>
                </div>
                <?php
if(get_field('repeater_s7',get_the_ID())){
    while(the_repeater_field('repeater_s7',get_the_ID())){
?>
                <div class="col-12 mt-2 mb-2 a-col3-s7" >
                    <div class="a-cont1-s7">


                        <div class="black a-number-s7" >
                            <span><?=get_sub_field('number',get_the_ID(  ))?></span>
                        </div>
                        <div class="a-cont-description-s7">
                            <div class="description" >
                                <?=get_sub_field('description',get_the_ID())?>
                            </div>



                        </div>

                    </div>
                </div>
                <?php
    }
}
    ?>
            </div>
    </section>
    <section class="section-8">
        <div class="container mt-5 mb-5 a-container1-s8">
            <div class="row a-row1-s8">
                <div class="col-md-6 mb-3 a-col1-s8">
                    <div class=" title a-cont1-s8">
                        <?= get_field('title_s8',get_the_ID())?>

                    </div>
                    <div class=" black a-cont1-2-s8">
                        <?= get_field('short_description_s8',get_the_ID())?>
                    </div>
                </div>
                <div class="col-md-6 a-col2-s8">
                    <div class="a-cont2-2-s8">
                        <div class="container a-container2-s8">
                            <div class="row mb-2 a-row2-s8"> 
                                <?php if(get_field('certifications_repeater',get_the_ID(  ))){
                        while(the_repeater_field('certifications_repeater',get_the_ID(  ))){?>

                                <div class="col-6 m-auto mb-2 a-col2-1-s8">
                                    <div class="a-cont2-1-s8" >
                                        <img src="<?= get_sub_field('img')?>" alt="" style="width:100%">
                                    </div>
                                </div>

                                <?php
                        }}?>
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