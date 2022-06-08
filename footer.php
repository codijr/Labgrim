
<footer>
    <div class="container py-4">
        <div class="row justify-content-between" id="footer-info">
            <div class="col-12 col-lg-5 mb-3" id="partners">
                <div class="row justify-content-center justify-content-lg-start align-items-center">
                    <div class="col-6 col-lg-5 d-flex justify-content-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo-footer.png" alt="Labgrim logo">
                    </div>
                    <div class="col-6 col-lg-5 d-flex justify-content-center justify-content-lg-start">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ufc-logo-mobile.png" alt="UFC Logo">
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mb-3" id="contact">
                <p class="body text-center text-lg-end mb-2">grim.ufc@gmail.com</p>
                <p class="body text-center text-lg-end mb-2">Av. da Universidade, 2762 -  60.020-181 - Fortaleza-CE</p>
                <div class="d-flex justify-content-center justify-content-lg-end" id="social">
                    <div class="d-flex justify-content-center align-items-center rounded-circle me-2" id="facebook">
                        <?php includeFile('assets/icons/facebook.svg', array()); ?>
                    </div>

                    <div class="d-flex justify-content-center align-items-center rounded-circle" id="instagram">
                        <?php includeFile('assets/icons/instagram.svg', array()); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <p class="body-2">
                Desenvolvido com &#10084;&#65039; por <a href="http://www.codijr.ufc.br" target="_blank">Container Digital Jr.</a>
            </p>
        </div>
    </div>
</footer>
</div>
</div>

<?php wp_footer(); ?>
    
</body>
</html>