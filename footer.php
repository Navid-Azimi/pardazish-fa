<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            
             <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="footer-menu-holder">
                    <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-new.png">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-4 col-md-5">
                <div class="address-holder">
                    <div class="phone"> +93 793 725 403 <i class="fas fa-phone"></i></div>
                    <div class="email"><i class="fas fa-envelope"></i> info@pardazish.com</div>
                    <div class="address">
                        <i class="fas fa-map-marker"></i>
                        <div>افغانستان ، هرات<br>
                            چوک گلها ، فهیم سوپر مارکت<br>
                            مارکت جدید ، طبقه دوم</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-2">
                <div class="footer-menu-holder">
                    <h4>لینک ها</h4></h4>
                     <?php
	                $default = array(
		                'container' => 'ul',
		                'menu_class' => "footer-menu",
		                'theme_location' => "footer-menu-left"
	                );
	                wp_nav_menu($default);
	                ?>

                </div>
            </div>
           
        
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="https://www.facebook.com/pardazish/"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="https://t.me/pardazish"><i class="fab fa-telegram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC2xAMOHfZ1almo4DzxyFXTg"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/pardazish"><i class="fab fa-linkedin"></i></a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ebc47f2967ae56c521986b2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<?php echo wp_footer(); ?>

</body>
</html>