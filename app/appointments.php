<?php require($_SERVER['DOCUMENT_ROOT'] . '/_/inc/init.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js ie ie6 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie ie8 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9 lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title></title>

    <meta name="description" content="Drs website">
    <meta name="keywords" content="website">
    <title>Welcome</title>

    <?php require("_/inc/head.php"); ?>
</head>
<body class="page">
<!-- -=-=-=-=-=-=-=-=-=-=- Start Page -=-=-=-=-=-=-=-=-=-=- -->
<section id="page" class="cmsms_resp hfeed site">

    <!-- -=-=-=-=-=-=-=-=-=-=- Start Container -=-=-=-=-=-=-=-=-=-=- -->
    <div class="page_container">

    <?php require('_/inc/header.php'); ?>


        <!-- -=-=-=-=-=-=-=-=-=-=- Start Middle -=-=-=-=-=-=-=-=-=-=- -->
        <section id="middle">

            <!-- _________________________ Start Headline _________________________ --><div class="headline">
                <h1>Appointments</h1></div>
            <!-- _________________________ Finish Headline _________________________ --><!-- _________________________ Start Breadcrumbs _________________________ --><div class="cmsms_breadcrumbs">
                <a href="http://medicure.cmsmasters.net" class="cms_home">Home</a>
                <span class="breadcrumbs_sep"> / </span>
                <span>Appointments</span>
            </div>
            <!-- _________________________ Finish Breadcrumbs _________________________ --><div class="content_wrap r_sidebar">

                <!--_________________________ Start Content _________________________ -->
                <section id="content" role="main">
                    <div class="entry">
                        <div class="cmsms_cc">
                            <div class="one_first first_column" data-folder="column" data-type=""><div data-folder="email" data-type=""><div class="cmsms-form-builder">
                                        <aside class="box success_box" style="display:none;">
                                            <div>
                                                <div></div>
                                                <div>
                                                    <p>Thank You! <br />Your message has been sent successfully.</p>
                                                </div>
                                            </div>
                                        </aside>
                                        <script type="text/javascript">
                                            jQuery(document).ready(function () {
                                                jQuery('#form_appointments_803620507476562800').validationEngine('init');
                                                jQuery('#form_appointments_803620507476562800 a#appointments_803620507476562800_formsend').click(function () {
                                                    jQuery('#form_appointments_803620507476562800 .loading').animate( { opacity : 1 } , 250);
                                                    if (jQuery('#form_appointments_803620507476562800').validationEngine('validate')) {
                                                        jQuery.post('http://medicure.cmsmasters.net/wp-content/plugins/cmsms-contact-form-builder/inc/form-builder-sendmail.php', {
                                                            field_572675772111505200 : jQuery('#field_572675772111505200').val(),
                                                            field_949145697999680900 : jQuery('#field_949145697999680900').val(),
                                                            name_appointments_803620507476562800_779260444482677900 : jQuery('#name_appointments_803620507476562800_779260444482677900').val(),
                                                            field_427831627913537800 : jQuery('#field_427831627913537800').val(),
                                                            field_609916403233180000 : jQuery('#field_609916403233180000').val(),
                                                            field_241431204693567600 : jQuery('#field_241431204693567600').val(),
                                                            field_200661433365438530 : jQuery('#field_200661433365438530').val(),
                                                            field_947959406495958000 : jQuery('input[name=\'field_947959406495958000\']:checked').val(),
                                                            field_674772244166279300 : jQuery('#field_674772244166279300').val(),
                                                            contactemail : 'YXBwb2ludG1lbnRzXzgwMzYyMDUwNzQ3NjU2MjgwMHx0ZXN0QHRlc3QuY29tfGFwcG9pbnRtZW50c184MDM2MjA1MDc0NzY1NjI4MDA=',
                                                            formname : 'appointments_803620507476562800'
                                                        }, function (data) {
                                                            jQuery('#form_appointments_803620507476562800 .loading').animate( { opacity : 0 } , 250);
                                                            jQuery('#form_appointments_803620507476562800').fadeOut('slow');
                                                            document.getElementById('form_appointments_803620507476562800').reset();
                                                            jQuery('#form_appointments_803620507476562800').parent().find('.box').hide();
                                                            jQuery('#form_appointments_803620507476562800').parent().find('.success_box').fadeIn('fast');
                                                            jQuery('html, body').animate( { scrollTop : jQuery('#form_appointments_803620507476562800').offset().top - 140 } , 'slow');
                                                            jQuery('#form_appointments_803620507476562800').parent().find('.success_box').delay(5000).fadeOut(1000, function () {
                                                                jQuery('#form_appointments_803620507476562800').fadeIn('slow');
                                                            } );
                                                        } );
                                                        return false;
                                                    } else {
                                                        jQuery('#form_appointments_803620507476562800 .loading').animate( { opacity : 0 } , 250);
                                                        return false;
                                                    }
                                                } );
                                            } );
                                        </script>
                                        <form action="#" method="post" id="form_appointments_803620507476562800">

                                            <div class="form_info cmsms_select">
                                                <label>Select Department</label>
                                                <div class="form_field_wrap">
                                                    <select name="field_572675772111505200" id="field_572675772111505200">
                                                        <option value="Pediatric Clinic">Pediatric Clinic</option>
                                                        <option value="Diagnosis Clinic">Diagnosis Clinic</option>
                                                        <option value="Cardiac Clinic">Cardiac Clinic</option>
                                                        <option value="Medical Pharmacy">Medical Pharmacy</option>
                                                        <option value="Family Doctor">Family Doctor</option>
                                                        <option value="Rehabilitation Therapy">Rehabilitation Therapy</option>
                                                        <option value="Laryngological Clinic">Laryngological Clinic</option>
                                                    </select>
                                                </div>
                                                <div class="cl"></div>
                                            </div>
                                            <div class="cl"></div>

                                            <div class="form_info cmsms_input">
                                                <label for="field_949145697999680900">First Name</label>
                                                <div class="form_field_wrap">
                                                    <input type="text" name="field_949145697999680900" id="field_949145697999680900" value="" />
                                                </div>
                                            </div>
                                            <div class="cl"></div>

                                            <div class="form_info cmsms_input">
                                                <label for="name_appointments_803620507476562800_779260444482677900">Last Name</label>
                                                <div class="form_field_wrap">
                                                    <input type="text" name="name_appointments_803620507476562800_779260444482677900" id="name_appointments_803620507476562800_779260444482677900" value="" />
                                                </div>
                                            </div>
                                            <div class="cl"></div>

                                            <div class="form_info cmsms_input">
                                                <label for="field_427831627913537800">Your Phone</label>
                                                <div class="form_field_wrap">
                                                    <input type="text" name="field_427831627913537800" id="field_427831627913537800" value="" />
                                                </div>
                                            </div>
                                            <div class="cl"></div>

                                            <div class="form_info cmsms_input">
                                                <label for="field_609916403233180000">Your Email</label>
                                                <div class="form_field_wrap">
                                                    <input type="text" name="field_609916403233180000" id="field_609916403233180000" value="" />
                                                </div>
                                            </div>
                                            <div class="cl"></div>

                                            <div class="form_info cmsms_input">
                                                <label for="field_241431204693567600">Appointment Date</label>
                                                <div class="form_field_wrap">
                                                    <input type="text" name="field_241431204693567600" id="field_241431204693567600" value="" />
                                                </div>
                                            </div>
                                            <div class="cl"></div>

                                            <div class="form_info cmsms_input">
                                                <label for="field_200661433365438530">Date of Birth</label>
                                                <div class="form_field_wrap">
                                                    <input type="text" name="field_200661433365438530" id="field_200661433365438530" value="" />
                                                </div>
                                            </div>
                                            <div class="cl"></div>

                                            <div class="form_info cmsms_radio">
                                                <label>Sex</label>
                                                <div class="check_parent">
                                                    <input type="radio" name="field_947959406495958000" id="field_9479594064959580001" value="Male" checked="checked" />
                                                    <label for="field_9479594064959580001">Male</label>
                                                </div>
                                                <div class="cl"></div>
                                                <div class="check_parent">
                                                    <input type="radio" name="field_947959406495958000" id="field_9479594064959580002" value="Female" />
                                                    <label for="field_9479594064959580002">Female</label>
                                                </div>
                                                <div class="cl"></div>
                                                <div class="check_parent">
                                                    <input type="radio" name="field_947959406495958000" id="field_9479594064959580003" value="Child" />
                                                    <label for="field_9479594064959580003">Child</label>
                                                </div>
                                                <div class="cl"></div>
                                            </div>
                                            <div class="cl"></div>

                                            <div class="form_info cmsms_textarea">
                                                <label for="field_674772244166279300">Your Message</label>
                                                <div class="form_field_wrap">
                                                    <textarea name="field_674772244166279300" id="field_674772244166279300" cols="58" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="cl"></div>

                                            <div class="loading"></div>
                                            <div class="fl">
                                                <a id="appointments_803620507476562800_formsend" class="button_small" href="#"><span>Send Message</span></a>
                                            </div>
                                            <div class="cl"></div>
                                        </form>
                                    </div></div></div>
                        </div>
                    </div>
                </section>
                <!-- _________________________ Finish Content _________________________ -->


                <!-- _________________________ Start Sidebar _________________________ -->
                <section id="sidebar" role="complementary">
                    <div class="one_first"><aside id="search-2" class="widget widget_search">
                            <div class="search_line">
                                <form method="get" action="http://medicure.cmsmasters.net">
                                    <p>
                                        <input name="s" id="error_search" placeholder="enter keywords" value="" type="text">
                                        <input value="" type="submit">
                                    </p>
                                </form>
                            </div>
                        </aside></div><div class="cl"></div><div class="one_first"><aside id="custom-popular-services-2" class="widget widget_custom_popular_services_entries"><script type="text/javascript">jQuery(document).ready(function () { jQuery('#custom-popular-services-2 .widget_custom_services_entries_slides').cmsmsResponsiveContentSlider( { sliderWidth : '100%', sliderHeight : 'auto', animationSpeed : 500, animationEffect : 'slide', animationEasing : 'easeInOutExpo', pauseTime : 7000, activeSlide : 1, touchControls : true, pauseOnHover : false, arrowNavigation : true, slidesNavigation : true, afterSliderLoad : function () { if ( jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0 ) { jQuery(window).trigger('resize');} }, afterSlideChange : function () { if ( jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0 ) { jQuery(window).trigger('resize');} } } ); } ); </script><div class="widget_custom_services_entries_container"><h3 class="widgettitle">Services</h3><ul class="widget_custom_services_entries_slides responsiveContentSlider"><li><figure><img width="578" height="370" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/02/ultrasound-s-578x370.jpg" class="fullwidth wp-post-image" alt="Gynecological Clinic" title="Gynecological Clinic" style="width:100%; height:auto;" /></figure><h6 class="service_title"><a href="http://medicure.cmsmasters.net/service/gynecological-clinic/" title="Gynecological Clinic">Gynecological Clinic</a></h6><div class="entry-content"><p>Medicure WordPress theme was created to offer a perfect solution for medical websites. It features functionality that was developed with health and medicine niche websites in thought, with all the compulsory for these sites features included.</p>
                                        </div></li><li><figure><img width="591" height="370" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/02/consultation-s-1-591x370.jpg" class="fullwidth wp-post-image" alt="Cardiac Clinic" title="Cardiac Clinic" style="width:100%; height:auto;" /></figure><h6 class="service_title"><a href="http://medicure.cmsmasters.net/service/diagnosis-services/" title="Cardiac Clinic">Cardiac Clinic</a></h6><div class="entry-content"><p>Medicure WordPress theme was created to offer a perfect solution for medical websites. It features functionality that was developed with health and medicine niche websites in thought, with all the compulsory for these sites features included. </p>
                                        </div></li><li><figure><img width="600" height="370" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/02/female-practitioner-s-11-600x370.jpg" class="fullwidth wp-post-image" alt="Dr. Karen Dawson" title="Dr. Karen Dawson" style="width:100%; height:auto;" /></figure><h6 class="service_title"><a href="http://medicure.cmsmasters.net/service/dr-karen-dawson/" title="Dr. Karen Dawson">Dr. Karen Dawson</a></h6><div class="entry-content"><p>You can create a clinic website with MediCure theme, and you can as well use it for other types of webstes, as it is highly flexible in customization. In any case, quality code, professional SEO and valid HTML5 and CSS3 will push your website to top results in search.</p>
                                        </div></li></ul></div></aside></div><div class="one_first"><aside id="custom-posts-tabs-2" class="widget widget_custom_posts_tabs_entries"><h3 class="widgettitle">Post Tabs</h3><div class="tab lpr"><ul class="tabs"><li><a href="#"><span>Latest</span></a></li><li><a href="#"><span>Popular</span></a></li><li><a href="#"><span>Comments</span></a></li></ul><div class="tab_content"><div class="tabs_tab tab_latest"><ul><li><div class="alignleft"><figure>
                                                        <a href="http://medicure.cmsmasters.net/center-for-medical-technology-innovation/" title="Center for Medical Technology Innovation">
                                                            <img width="50" height="50" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/02/stethoscope-on-clipboard-s-50x50.jpg" class=" wp-post-image" alt="Center for Medical Technology Innovation" title="Center for Medical Technology Innovation" />
                                                        </a>
                                                    </figure>
                                                </div><div class="ovh"><a href="http://medicure.cmsmasters.net/center-for-medical-technology-innovation/" title="Center for Medical Technology Innovation">Center for Medical Technology Innovation</a><br /><small><abbr class="published" title="24-01-2014">1 year ago</abbr></small></div><div class="cl"></div></li><li><div class="alignleft"><figure>
                                                        <a href="http://medicure.cmsmasters.net/painless-dentistry-for-children/" title="Nutritional Personal Consultation">
                                                            <img width="50" height="50" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/02/doctor-at-the-gym-710400-1-50x50.jpg" class=" wp-post-image" alt="Nutritional Personal Consultation" title="Nutritional Personal Consultation" />
                                                        </a>
                                                    </figure>
                                                </div><div class="ovh"><a href="http://medicure.cmsmasters.net/painless-dentistry-for-children/" title="Nutritional Personal Consultation">Nutritional Personal Consultation</a><br /><small><abbr class="published" title="24-01-2014">1 year ago</abbr></small></div><div class="cl"></div></li><li><div class="alignleft"><figure>
                                                        <a href="http://medicure.cmsmasters.net/standard-post-with-an-image/" title="Standard Post With an Image">
                                                            <img width="50" height="50" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/02/stethoscope-on-clipboard-s-710400-50x50.jpg" class=" wp-post-image" alt="Standard Post With an Image" title="Standard Post With an Image" />
                                                        </a>
                                                    </figure>
                                                </div><div class="ovh"><a href="http://medicure.cmsmasters.net/standard-post-with-an-image/" title="Standard Post With an Image">Standard Post With an Image</a><br /><small><abbr class="published" title="13-03-2013">2 years ago</abbr></small></div><div class="cl"></div></li></ul></div><div class="tabs_tab tab_popular"><ul><li><div class="alignleft"><figure>
                                                        <a href="http://medicure.cmsmasters.net/painless-dentistry-for-children/" title="Nutritional Personal Consultation">
                                                            <img width="50" height="50" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/02/doctor-at-the-gym-710400-1-50x50.jpg" class=" wp-post-image" alt="Nutritional Personal Consultation" title="Nutritional Personal Consultation" />
                                                        </a>
                                                    </figure>
                                                </div><div class="ovh"><a href="http://medicure.cmsmasters.net/painless-dentistry-for-children/" title="Nutritional Personal Consultation">Nutritional Personal Consultation</a><br /><small><abbr class="published" title="24-01-2014">1 year ago</abbr></small></div><div class="cl"></div></li><li><div class="alignleft"><figure><a href="http://medicure.cmsmasters.net/aside-post-format/" title="Aside Post Format"><img src="http://medicure.cmsmasters.net/wp-content/themes/medicure/img/PF-aside.jpg" alt="Aside Post Format" title="Aside Post Format" style="width:50px; height:50px;" /></a></figure></div><div class="ovh"><div class="entry-content"><p>WordPress themes we create possess a special merit for both&#8230;</p>
                                                    </div><small><abbr class="published" title="12-03-2013">2 years ago</abbr></small></div><div class="cl"></div></li><li><div class="alignleft"><figure><a href="http://medicure.cmsmasters.net/quote-post-format-2/" title="Quote Post Format"><img src="http://medicure.cmsmasters.net/wp-content/themes/medicure/img/PF-quote.jpg" alt="Quote Post Format" title="Quote Post Format" style="width:50px; height:50px;" /></a></figure></div><div class="ovh"><div class="entry-content"><p>Content management tools have never been more powerful and functional,&#8230;</p>
                                                    </div><small><abbr class="published" title="04-03-2013">2 years ago</abbr></small></div><div class="cl"></div></li></ul></div><div class="tabs_tab tab_comments"><ul><li>Akbar <span class="color_2">on</span> <a href="http://medicure.cmsmasters.net/standard-post-with-an-image/#comments" rel="bookmark">Standard Post With an Image</a><small><abbr class="published" title="23-01-2014">5 months ago</abbr></small><p>nice</p></li><li>Han Solo <span class="color_2">on</span> <a href="http://medicure.cmsmasters.net/standard-post-with-an-image/#comments" rel="bookmark">Standard Post With an Image</a><small><abbr class="published" title="23-01-2014">6 months ago</abbr></small><p>Reply</p></li><li>test <span class="color_2">on</span> <a href="http://medicure.cmsmasters.net/gallery-post-format/#comments" rel="bookmark">Gallery Post Format</a><small><abbr class="published" title="23-01-2014">10 months ago</abbr></small><p>nice one</p></li></ul></div></div></div></aside></div><div class="one_first"><aside id="custom-recent-testimonials-2" class="widget widget_custom_recent_testimonials_entries"><script type="text/javascript">jQuery(document).ready(function () { jQuery('#custom-recent-testimonials-2 .widget_custom_services_entries_slides').cmsmsResponsiveContentSlider( { sliderWidth : '100%', sliderHeight : 'auto', animationSpeed : 500, animationEffect : 'slide', animationEasing : 'easeInOutExpo', pauseTime : 7000, activeSlide : 1, touchControls : true, pauseOnHover : false, arrowNavigation : false, slidesNavigation : false, afterSliderLoad : function () { if ( jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0 ) { jQuery(window).trigger('resize');} }, afterSlideChange : function () { if ( jQuery('#bottom a.sidebar_button_inner').hasClass('active') && jQuery('#bottom').height() !== 0 ) { jQuery(window).trigger('resize');} } } ); } ); </script><div class="widget_custom_services_entries_container"><h3 class="widgettitle">Testimonials</h3><ul class="widget_custom_services_entries_slides responsiveContentSlider"><li><div class="tl-content_wrap"><div class="tl-content"><p>Lorem ipsum dolor sit amet, usu id dignissim consectetuer, lorem graece cotidieque vel ex, ferri labitur id nam. Ne cum legere everti consetetur, cu nec doctus appellantur. </p>
                                            </div></div><figure class="tl_author_img"><img width="150" height="150" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/01/Woman-smiling-21-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="Rebecca Martins" title="Rebecca Martins" style="width:45px; height:45px;" /></figure>
                                        <a target="_blank" href="#" class="tl_author">Rebecca Martins</a>
                                        <p class="tl_company">29 years</p></li><li><div class="tl-content_wrap"><div class="tl-content"><p>Lorem ipsum dolor sit amet, usu id dignissim consectetuer, lorem graece cotidieque vel ex, ferri labitur id nam. Ne cum legere everti consetetur, cu nec doctus appellantur. </p>
                                            </div></div><figure class="tl_author_img"><img width="150" height="150" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/01/happy-to-help-you-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="Jeff Blake" title="Jeff Blake" style="width:45px; height:45px;" /></figure>
                                        <a target="_blank" href="#" class="tl_author">Jeff Blake</a>
                                        <p class="tl_company">37 years</p></li><li><div class="tl-content_wrap"><div class="tl-content"><p>Lorem ipsum dolor sit amet, usu id dignissim consectetuer, lorem graece cotidieque vel ex, ferri labitur id nam. Ne cum legere everti consetetur, cu nec doctus appellantur. </p>
                                            </div></div><figure class="tl_author_img"><img width="150" height="150" src="http://medicure.cmsmasters.net/wp-content/uploads/2014/01/Dentist-Sandy-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="Fredrick Keen" title="Fredrick Keen" style="width:45px; height:45px;" /></figure>
                                        <a target="_blank" href="#" class="tl_author">Frederick</a>
                                        <p class="tl_company">52 years</p></li></ul></div></aside></div><div class="one_first"><aside id="custom-twitter-2" class="widget widget_custom_twitter_entries">		<script type="text/javascript">
                                jQuery(document).ready(function () {
                                    jQuery('#custom-twitter-2_tweets').tweet( {
                                        modpath : 'http://medicure.cmsmasters.net/wp-content/themes/medicure/framework/class/load_tweets.php',
                                        username : 'cmsmasters ',
                                        count : 1,
                                        loading_text : 'loading...',
                                        template : '{avatar}{join}{text}{time}'
                                    } );
                                } );
                            </script>
                            <h3 class="widgettitle">Twitter</h3><div id="custom-twitter-2_tweets"></div></aside></div><div class="one_first"><aside id="nav_menu-3" class="widget widget_nav_menu"><h3 class="widgettitle">Doctors</h3><div class="menu-doctors-container"><ul id="menu-doctors" class="menu"><li id="menu-item-6130" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6130"><a href="#">Dr. Karen Dawson</a></li>
                                    <li id="menu-item-6131" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6131"><a href="#">Dr. Jack Simmons</a></li>
                                    <li id="menu-item-6132" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6132"><a href="#">Dr. Jack Zerriper</a></li>
                                    <li id="menu-item-6133" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6133"><a href="#">Dr. Michael Linden</a></li>
                                    <li id="menu-item-6134" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6134"><a href="#">Dr. Simon Green</a></li>
                                    <li id="menu-item-6135" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6135"><a href="#">Dr. Natalie Channing</a></li>
                                    <li id="menu-item-6139" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6139"><a href="#">Dr. Caroline Gerwig</a></li>
                                </ul></div></aside></div><div class="one_first"><aside id="custom-flickr-2" class="widget widget_custom_flickr_entries"><div id="flickr"><h3 class="widgettitle">Flickr</h3><div class="wrap"><script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=95826647@N03"></script></div><div class="cl"></div><a href="http://www.flickr.com/photos/95826647@N03" target="_blank">More flickr images</a></div></aside></div>
                </section>
                <!-- _________________________ Finish Sidebar _________________________ -->
                <div class="cl"></div>
            </div>
        </section>
        <!-- -=-=-=-=-=-=-=-=-=-=- Finish Middle -=-=-=-=-=-=-=-=-=-=- -->


        <div id="cmsms_latest_bottom_tweets">
            <div class="cmsms_latest_bottom_tweets_inner">
                <span class="tweets_icon"></span>
                <ul class="jta-tweet-list responsiveContentSlider">
                    <li class="jta-tweet-list-item">Montmartre Restaurant #Wordpress Theme is a elegant and powerful solution for any food and beverages website. SEE IT: <a href="http://t.co/YoZOjlXePL" target="_blank" rel="nofollow">http://t.co/YoZOjlXePL</a></li><li class="jta-tweet-list-item">RT @tobiedm: @cmsmasters support highly efficient and responsive!</li><li class="jta-tweet-list-item">Check out 'Politics -  Election Campaign Political WP Theme' on #EnvatoMarket by @cmsmasters #themeforest <a href="http://t.co/Y3o2aJ6CAf" target="_blank" rel="nofollow">http://t.co/Y3o2aJ6CAf</a></li>			</ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('#cmsms_latest_bottom_tweets .jta-tweet-list').cmsmsResponsiveContentSlider( {
                    sliderWidth : '100%',
                    sliderHeight : 'auto',
                    animationSpeed : 500,
                    animationEffect : 'fade',
                    animationEasing : 'linear',
                    pauseTime : 7000,
                    activeSlide : 1,
                    touchControls : true,
                    pauseOnHover : false,
                    arrowNavigation : true,
                    slidesNavigation : false
                } );
            } );
        </script>
        <!-- -=-=-=-=-=-=-=-=-=-=- Start Bottom -=-=-=-=-=-=-=-=-=-=- -->
        <section id="bottom">
            <div class="bottom_outer">
                <div class="bottom_inner one_fourth_woocommerce">
                    <div class="one_fourth"><aside id="text-3" class="widget widget_text"><h3 class="widgettitle">Medicure Information </h3>			<div class="textwidget"><p style="padding-bottom:35px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</p>
                                <aside class="widget widget_custom_contact_info_entries" id="custom-contact-info-2"><div class="contact_widget_info"><span class="contact_widget_name">Medicure Ltd.</span><span class="contact_widget_address">51, North Ave</span><span class="contact_widget_city">New York</span><span class="contact_widget_state">NY</span></div><span class="contact_widget_phone">(978) 373 45 22</span><span class="contact_widget_email"><a href="mailto:copyright.cmsmasters@gmail.com">info@medicuredemo.web</a></span></aside></div>
                        </aside></div><div class="one_fourth"><aside id="nav_menu-2" class="widget widget_nav_menu"><h3 class="widgettitle">Doctors</h3><div class="menu-doctors-container"><ul id="menu-doctors" class="menu"><li id="menu-item-6130" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6130"><a href="#">Dr. Karen Dawson</a></li>
                                    <li id="menu-item-6131" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6131"><a href="#">Dr. Jack Simmons</a></li>
                                    <li id="menu-item-6132" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6132"><a href="#">Dr. Jack Zerriper</a></li>
                                    <li id="menu-item-6133" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6133"><a href="#">Dr. Michael Linden</a></li>
                                    <li id="menu-item-6134" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6134"><a href="#">Dr. Simon Green</a></li>
                                    <li id="menu-item-6135" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6135"><a href="#">Dr. Natalie Channing</a></li>
                                    <li id="menu-item-6139" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6139"><a href="#">Dr. Caroline Gerwig</a></li>
                                </ul></div></aside></div><div class="cl_resp"></div><div class="one_fourth"><aside id="nav_menu-4" class="widget widget_nav_menu"><h3 class="widgettitle">Services</h3><div class="menu-services-container"><ul id="menu-services" class="menu"><li id="menu-item-6141" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6141"><a href="#">Pediatric Clinic</a></li>
                                    <li id="menu-item-6142" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6142"><a href="#">Diagnosis Clinic</a></li>
                                    <li id="menu-item-6143" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6143"><a href="#">Cardiac Clinic</a></li>
                                    <li id="menu-item-6145" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6145"><a href="#">Laboratory Analysis</a></li>
                                    <li id="menu-item-6146" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6146"><a href="#">Dental Clinic</a></li>
                                    <li id="menu-item-6147" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6147"><a href="#">Gynecological Clinic</a></li>
                                    <li id="menu-item-6148" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6148"><a href="#">Psychological Counseling</a></li>
                                </ul></div></aside></div><div class="one_fourth"><aside id="custom-contact-form-2" class="widget widget_custom_contact_form_entries"><h3 class="widgettitle">Quick Contacts</h3><div class="cmsms-form-builder"><div class="widgetinfo">Thank You! <br />Your message has been sent successfully.</div><script type="text/javascript"> jQuery(document).ready(function () { jQuery('#form_quick_contacts_489003352046794000').validationEngine('init'); jQuery('#form_quick_contacts_489003352046794000 a#quick_contacts_489003352046794000_wformsend').click(function () { jQuery('#form_quick_contacts_489003352046794000 .loading').animate( { opacity : 1 } , 250); if (jQuery('#form_quick_contacts_489003352046794000').validationEngine('validate')) { jQuery.post('http://medicure.cmsmasters.net/wp-content/plugins/cmsms-contact-form-builder/inc/form-builder-sendmail.php', { field_451743779549938370 : jQuery('#field_451743779549938370').val(), name_quick_contacts_489003352046794000_20992574044975564 : jQuery('#name_quick_contacts_489003352046794000_20992574044975564').val(), contactemail : 'cXVpY2tfY29udGFjdHNfNDg5MDAzMzUyMDQ2Nzk0MDAwfHxxdWlja19jb250YWN0c180ODkwMDMzNTIwNDY3OTQwMDA=', formname : 'quick_contacts_489003352046794000' } , function (data) { jQuery('#form_quick_contacts_489003352046794000 .loading').animate( { opacity : 0 } , 250); jQuery('#form_quick_contacts_489003352046794000').fadeOut('slow'); document.getElementById('form_quick_contacts_489003352046794000').reset(); jQuery('#form_quick_contacts_489003352046794000').parent().find('.widgetinfo').hide(); jQuery('#form_quick_contacts_489003352046794000').parent().find('.widgetinfo').fadeIn('fast'); jQuery('html, body').animate( { scrollTop : jQuery('#form_quick_contacts_489003352046794000').offset().top - 140 } , 'slow'); jQuery('#form_quick_contacts_489003352046794000').parent().find('.widgetinfo').delay(5000).fadeOut(1000, function () { jQuery('#form_quick_contacts_489003352046794000').fadeIn('slow'); } ); } ); return false; } else { jQuery('#form_quick_contacts_489003352046794000 .loading').animate( { opacity : 0 } , 250); return false; } } ); } ); </script><form action="#" method="post" id="form_quick_contacts_489003352046794000"><div class="form_info cmsms_input">
                                        <label for="field_451743779549938370">Your Name</label>
                                        <div class="form_field_wrap">
                                            <input type="text" name="field_451743779549938370" id="field_451743779549938370" value="" />
                                        </div>
                                    </div>
                                    <div class="cl"></div>

                                    <div class="form_info cmsms_textarea">
                                        <label for="name_quick_contacts_489003352046794000_20992574044975564">Your message</label>
                                        <div class="form_field_wrap">
                                            <textarea name="name_quick_contacts_489003352046794000_20992574044975564" id="name_quick_contacts_489003352046794000_20992574044975564" cols="58" rows="6" class="validate[minSize[40],maxSize[60]]"></textarea>
                                        </div>
                                    </div>
                                    <div class="cl"></div>

                                    <div class="loading"></div><div class="fl"><a id="quick_contacts_489003352046794000_wformsend" class="button_small" href="#"><span>Submit</span></a></div><div class="cl"></div></form></div></aside></div><div class="cl"></div>
                </div>
            </div>
        </section>
        <!-- -=-=-=-=-=-=-=-=-=-=- Finish Bottom -=-=-=-=-=-=-=-=-=-=- -->

        <a href="javascript:void(0);" id="slide_top"></a>
    </div>
    <!-- -=-=-=-=-=-=-=-=-=-=- Finish Container -=-=-=-=-=-=-=-=-=-=- -->





    <!--[if lt IE 9]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser.
        Please <a href="http://browsehappy.com/">upgrade your browser</a>
        or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <?php require('_/inc/footer.php'); ?>

</section>
<!-- -=-=-=-=-=-=-=-=-=-=- Finish Page -=-=-=-=-=-=-=-=-=-=- -->


    <!-- JAVASCRIPT -->
    <?php require('_/inc/analytics.php'); ?>

    <?php require('_/inc/tail.php'); ?>
</body>
</html>
