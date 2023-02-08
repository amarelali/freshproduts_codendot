<footer>
    <div class="container-fluid">
        <div class="container">
            <div class="footer-row row">
                <div class="col1-footer col-12 col-md-4 ">
                    <div class="container contactus-description">
                        <div class="row title">
                            <?= get_field('contact_us','options')?>
                        </div>
                        <div class="row black">
                            <?= get_field('bold_text_footer','options')?>
                        </div>
                        <div class="row mt-3">
                            <?= get_field('text_footer','options')?>

                        </div>
                    </div>
                </div>
                <div class="footer-form col-12 mt-3 col-md-8">
                    <?= do_shortcode('[contact-form-7 id="660" title="Contact form 1"]')?>
                </div>
            </div>
        </div>
    </div>

    <section id="whiteToolBar">
        <div class="row m-0">
            <div class="col-md-2 col-6 text-center align-self-center">
                <div class="w-50 m-auto">
                    <img class="w-100" src="<?= get_field('footer_logo','options')?>">

                </div>
            </div>
            <div class="col-md-2 col-6 footer-icons text-center align-self-center">
                <a href="<?= get_field('facebook_url','options')?>" target="_blank">
                    <i class="fa-brands fa-facebook-f icons"></i>
                </a>
                <a href="<?= get_field('insta_url','options')?>" target="_blank">
                    <i class="fa-brands fa-instagram icons"></i>

                </a>
                <a href="<?= get_field('linkedin_url','options')?>" target="_blank">
                    <i class="fa-brands fa-linkedin-in icons"></i>
                </a>





            </div>
            <div class="col-md-5 col-12 text-center align-self-center mt-2 mt-md-0">
                All Rights Reserved FRESH PRODUCTS 2022
            </div>
            <div class="col-md-3 col-12 text-center align-self-center mt-2 mt-md-0">
                Powered by <span id="signature">Codendot</span>
            </div>
        </div>
    </section>
</footer>

<?php 
wp_footer()
?>

</body>
</html>