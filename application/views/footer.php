<!--FOOTER START -->
<footer class="ct-footer" style="background-color: #263238">
    <div class="container">
        <ul class="ct-footer-list text-center-sm">
            <li>
                <h2 class="ct-footer-list-header" style="color: #FFFFFF">Ikuti Kami</h2>
                <ul class="fa-ul">
                    <li><a href="https://www.instagram.com/maungaji/" target="_blank"><i class="fa-li fa fa-instagram"></i>maungaji</a></li>
                    <li><a href="https://twitter.com/MaungajiIndo" target="_blank"><i class="fa-li fa fa-twitter"></i>maungajiIndo</a></li>
                    <li><a href="https://www.youtube.com/channel/UCIp6c79qyzU98400W253WYQ" target="_blank"><i class="fa-li fa fa-youtube"></i>maungaji official</a></li>
                    <li><a href="https://www.facebook.com/maungaji/" target="_blank"><i class="fa-li fa fa-facebook"></i>maungaji</a></li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header" style="color: #FFFFFF">Hubungi Kami</h2>
                <ul class="fa-ul text-white">
                    <li><i class="fa-li fa fa-envelope"></i>support@maungaji.co.id</li>
                    <li><a href="https://api.whatsapp.com/send?text=Assalamua'alaikum&phone=6281213419253" target="_blank"><i class="fa-li fa fa-whatsapp"></i>+6281213419253</a></li>
                    <li><i class="fa-li fa fa-map-marker"></i>Menara 165 lantai 4 Jl TB Simatupang kav 1 Cilandak Jakarta Selatan</li>
                </ul>
            </li>
            <li>
                <h2 class="ct-footer-list-header" style="color: #FFFFFF">Info Perusahaan</h2>
                <ul>
                    <li><a href="https://maungaji.co.id/privacy/privacy_policy.html">Kebijakan Privasi</a></li>
                    <li><a href="https://maungaji-2019.s3-ap-southeast-1.amazonaws.com/additional/tnc.html">Syarat dan Ketentuan</a></li>
                    <li><a href="">Karir</a></li>
                    <li><a href="https://blog.maungaji.co.id/">Blog</a></li>
                </ul>
                <br />
                <br />
                <div class="inner-center">
                    <p style="color: #FFFFFF">Copyright © <?php echo date("Y"); ?> PT Maungaji Teknologi Indonesia.</p>
                </div>
            </li>
            <li>
                <!--<h2 class="ct-footer-list-header" style="color: #FFFFFF">Download</h2>-->
                <ul>
                    
                </ul>
            </li>
        </ul>
    </div>

</footer>
<!--FOOTER END -->

<script src="<?php echo base_url("/js/jquery.min.js") ?>"></script>

<!--Bootstrap JS -->
<script src="<?php echo base_url("/js/bootstrap/bootstrap.min.js") ?>"></script>

<!--Owl Carousel JS -->
<script src="<?php echo base_url("/js/owl-carousel/owl.carousel.min.js") ?>"></script>

<!--Waypoints -->
<script src="<?php echo base_url("/js/waypoints/jquery.waypoints.min.js") ?>"></script>

<!--Responsive Tabs JS -->
<script src="<?php echo base_url("/js/responsive-tabs/jquery.responsiveTabs.min.js") ?>"></script>


<script src="<?php echo base_url("/js/slick.min.js") ?>"></script>

<!--Isotope -->
<script src="<?php echo base_url("/js/isotope/isotope.pkgd.min.js") ?>"></script>

<!--Magnific Popup -->
<script src="<?php echo base_url("/js/magnific-popup/jquery.magnific-popup.min.js") ?>"></script>

<!--Counter -->
<script src="<?php echo base_url("/js/counter/jquery.counterup.min.js") ?>"></script>

<!--Easing -->
<script src="<?php echo base_url("/js/easing/jquery.easing.1.3.min.js") ?>"></script>

<!--Custom JS -->
<script src="<?php echo base_url("/js/script.js") ?>"></script>

<script async data-id="16951" src="https://cdn.widgetwhats.com/script.min.js"></script>

<script>
    $(function() {
        var carousels = function() {
            $(".owl-carousel1").owlCarousel({
                loop: true,
                center: true,
                margin: 0,
                responsiveClass: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    680: {
                        items: 2,
                        nav: false,
                        loop: false
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            });

        };

        carousels()

        $('[data-toggle="tooltip"]').tooltip();

        $('#package_online').change(function() {
            if ($(this).is(':checked')) {
                $('.package-card.online').parent().removeClass('hidden')
                $('.package-card.offline').parent().addClass('hidden')
            }
        })
        $('#package_offline').change(function() {
            if ($(this).is(':checked')) {
                $('.package-card.online').parent().addClass('hidden')
                $('.package-card.offline').parent().removeClass('hidden')
            }
        })
    });
</script>

</body>

</html>