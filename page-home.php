<?php  //Template Name: Home  ?>

<?php
echo get_header();
?>
<div id="top-content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="float:right;">
                <div id="main-slider">
                    <div class="slide">
                        <div class="noti-holder">
                            <a href="<?php echo get_home_url() ;?>/pack">
                                <div class="noti">
                                    <span class="badge">جدید</span><span class="text">بسته های جدید در هاستینگ اضافه شد.</span>
                                </div>
                            </a>
                        </div>
                        <div class="spacer"></div>
                        <div class="big-title">چقدر بزرگ میتوانید تصور کنید؟</div>
                        <p>شرکت پردازش در راستای طراحی و برنامه نویسی محصولات خدمات تکنالوژی گام های استوار و محکم برداشته و خواهان کیفیت ، سهولت و ترقی در کسب و کار های مشترکین خویش میباشد.</p>
                        <div class="btn-holder">
                            <a href="<?php echo get_home_url() ;?>/about-us" class="ybtn ybtn-header-color">در مورد ما</a><a href="<?php echo get_home_url() ;?>/contact-us" class="ybtn ybtn-white ybtn-shadow">ارتباط با ما</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="header-graphic" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic1.png" alt="" />
            </div>
        </div>
    </div>
</div>
<div class="bg-animation">
    <div class="graphic-show">
        <img class="fix-size" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic1.png" alt="">
        <img class="img img1" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic1.png" alt="">
        <img class="img img2" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic2.png" alt="">
        <img class="img img3" src="<?php echo get_bloginfo('template_directory'); ?>/images/graphic3.png" alt="">
    </div>
</div>
</div>


<div id="pricing" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">برنامه های میزبانی وب</div>
                <div class="row-subtitle">بهترین چیز را انتخاب کنید</div>
            </div>
        </div>
        <div class="row">
            <?php
            $args  = array( 'post_type' => 'pack', 'posts_per_page' => 4);
            $query = new WP_Query( $args );
            //wp_custom_query( $query );
            while ( $query->have_posts() ): $query->the_post();
            ?>
            <div class="col-sm-6 col-md-3">
                <div class="pricing-box pricing-unity pricing-color<?php echo the_field('theme'); ?>">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/images/service-icon<?php echo the_field('theme'); ?>.svg" alt="">
                        </div>
                        <div class="pricing-title"><?php echo the_title(); ?></div>
                        <div class="price-title">شروع از</div>
                        <div class="pricing-price"><?php echo the_field('start_at_month'); ?></div>
                        <div class="pricing-details">
                            <p> در ماه</p>
                        </div>
                        <div class="pricing-link">
                            <a class="ybtn" href="<?php echo get_home_url() ;?>/packages">مشاهده جزئیات بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">خدمات ما</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row rtl-cols">
            <div class="col-sm-12 col-md-6">
                <div id="features-links-holder">
                    <div class="icons-axis">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo-small-2.png" alt="">
                    </div>
                    <div class="feature-icon-holder feature-icon-holder1 opened" data-id="1">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-chart-bar fsize"></i></div>
                        <div class="feature-title">نرم افزار حسابداری</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder2" data-id="2">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-server fsize"></i></div>
                        <div class="feature-title">میزبانی وب سایت</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder3" data-id="3">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-code fsize"></i></div>
                        <div class="feature-title">طراحی و توسعه وب سایت</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder4" data-id="4">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-search fsize"></i></div>
                        <div class="feature-title">سئو</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder5" data-id="5">
                        <div class="animation-holder"><div class="special-gradiant"></div></div>
                        <div class="feature-icon"><i class="fa fa-bullhorn fsize"></i></div>
                        <div class="feature-title">بازاریابی آنلاین</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="features-holder">
                    <div class="feature-box feature-d1 show-details">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-chart-bar"></i></span>
                            <span class="feature-title">نرم افزار حسابداری</span>
                        </div>
                        <div class="feature-details">
                            <p>امروزه تعداد کمی از فعالیت ها وجود دارد که به دلیل معرفی راه حل های اتوماسیون دست به سازماندهی مجدد نزده اند. صاحبان شرکتها این فرصت را داشتند که بدون نیاز به جذب نیروی انسانی جدید ، دامنه فعالیت خود را گسترش دهند. بعلاوه ، خطر خطای انسانی نیز كاهش یافته است: بر خلاف شخص ، دستگاه نمی تواند اعداد را مخلوط كند یا فراموش كردن برخی از جزئیات را فراموش كند.</p>

                        </div>
                    </div>
                    <div class="feature-box feature-d2">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-server"></i></span>
                            <span class="feature-title">میزبانی وب سایت</span>
                        </div>
                        <div class="feature-details">
                            <p>
میزبانی وب برای هر وب سایت ضروری است - این موقعیت مکانی فیزیکی وب سایت شما در اینترنت است ، یک مرکز ذخیره سازی آنلاین که اطلاعات ، تصاویر ، فیلم و سایر محتویات وب سایت شما را در خود جای داده است. ارائه دهندگان خدمات میزبانی وب سرور را در جایی که داده های مربوط به وب سایت شما در آن قرار دارد ، حفظ می کنند و همچنین فناوری هایی را که باعث می شود وب سایت شما به اینترنت متصل شود ، مدیریت می کنند.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d3">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-code"></i></span>
                            <span class="feature-title">طراحی و توسعه وب سایت</span>
                        </div>
                        <div class="feature-details">
                            <p>امروزه هر مارک تجاری کوچک یا بزرگی برای ارائه خدمات گسترده تر و مفید خود به یک وب سایت قابل دسترسی و به روز نیاز دارد اما این امر به متخصصان نیاز دارد ، بنابراین به ما اعتماد کنید و از پیشرفت های شما لذت ببرید.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d4">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-search"></i></span>
                            <span class="feature-title">سئو</span>
                        </div>
                        <div class="feature-details">
                            <p>سئو یک رشته بازاریابی است که بر افزایش دید در نتایج موتور جستجوی ارگانیک (غیرپرداخت) متمرکز است. سئو شامل عناصر فنی و خلاقانه ای است که برای بهبود رتبه بندی ، رانندگی ترافیک و افزایش آگاهی در موتورهای جستجو شامل می شوند. جنبه های بسیاری برای سئو وجود دارد ، از کلمات موجود در صفحه شما گرفته تا نحوه پیوند سایر سایت ها به شما در وب. گاهی اوقات سئو صرفاً موضوعی است برای اطمینان از اینکه سایت شما به روشی ساخته شده است که موتورهای جستجو آن را درک می کنند.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d5">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-bullhorn"></i></span>
                            <span class="feature-title">بازاریابی آنلاین</span>
                        </div>
                        <div class="feature-details">
                            <p>بازاریابی آنلاین راهی برای برقراری ارتباط با مشتریان و نزدیک شدن بیشتر مشتریان به منظور انتقال ارزش خدمات به آنها است و از آنجا که بصورت آنلاین است ، ارزان تر ، سریعتر ، آسان تر و سودآورتر از روش های سنتی است.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div id="more-features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">قول ما</div>
                <div class="row-subtitle">در واقع رضایت شما تضمین شده است </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-trophy"></i>
                    </div>
                    <div class="mfeature-title">وقت شناسی</div>
                    <div class="mfeature-details">ما مصمم هستیم تمام خدمات خود را به موقع به مشتریان خود ارائه دهیم</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-like"></i>
                    </div>
                    <div class="mfeature-title">تضمین بازگشت پول</div>
                    <div class="mfeature-details">ما خدمات و پیروی از قراردادهای خود را تضمین می کنیم</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="mfeature-box">
                    <div class="mfeature-icon">
                        <i class="htfy htfy-cogwheel"></i>
                    </div>
                    <div class="mfeature-title">بهترین پشتیبانی</div>
                    <div class="mfeature-details">تیم پشتیبانی ما متعهد است مشکلات شما را حل کند</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
echo  get_footer();
?>
