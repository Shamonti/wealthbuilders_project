<?php 



	/* Template Name: Front Page SP1*/


get_header();?>
<style>
	.section-heading--box .heading--text h3 {
  font-size: 36px;
  font-weight: 400;
}
.section-heading--box .heading--button .testimonial-btn {
  background-color: #156192;
  padding: 10px;
  border-radius: 4px;
  border: none;
  color: #ffffff;
  font-size: 20px;
  font-weight: 400;
}
.wrapper {
  padding: 30px 0;
  overflow-x: hidden;
}
.my-slider {
  padding: 0 70px;
  position: relative;
}
.my-slider iframe {
  border-radius: 5px;
}
.slick-initialized .slick-slide {
  background: transparent;
  color: #fff;
  margin: 0 15px 0 0;

  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
}
.slick-slide iframe {
  height: 503px;
}
.slick-slide .user-details {
  position: absolute;
}
.slick-slide .user-details h4 {
  font-weight: 400;
  font-size: 16px;
}
.my-slider-buttons {
  z-index: 5;
  position: absolute;
  right: 200px;
}
.slick-next {
  left: 60px;
}
.slick-prev {
  left: 0;
}
.slick-prev:before {
  content: '';
  display: inline-block;
  width: 50px;
  height: 50px;
  background: url('img/back.png') no-repeat;
}
.slick-next:before {
  content: '';
  display: inline-block;
  width: 50px;
  height: 50px;
  background: url('img/next.png') no-repeat;
}
.wrapper2 {
  padding: 30px 0;
  overflow-x: hidden;
}
.screenshots-slider {
  padding: 0 70px;
  position: relative;
}
.screenshots-slider iframe {
  border-radius: 5px;
}
.screenshots-slider-buttons {
  z-index: 5;
  position: absolute;
  /* right: 200px; */
  top: 45vh;

  display: flex;
  /* justify-content: space-between; */
}
.screenshots-slider-buttons button {
  background-color: transparent;
  border: 0;
}
.slick-next2 {
  top: 20vh;
  left: auto;
}
.slick-prev2 {
  left: 0;
  margin-right: 24rem;
}
.slick-prev2:before {
  content: '';
  display: inline-block;
  width: 50px;
  height: 50px;
  background: url('img/back2.png') no-repeat;
}
.slick-next2:before {
  content: '';
  display: inline-block;
  width: 50px;
  height: 50px;
  background: url('img/next2.png') no-repeat;
}
.modal .modal-dialog {
  position: relative;
}
.modal .modal-dialog .modal-content {
  background-color: transparent;
  border: transparent;

  position: absolute;
  left: 80%;
  top: 2%;
  z-index: 5;
}
.modal .modal-dialog .modal-content .close {
  background-color: #ffffff;
  border-radius: 100%;
  height: 30px;
  width: 30px;
  opacity: 1;

  display: flex;
  justify-content: center;
  align-items: center;
}
.modal .modal-dialog .modal-content .close span {
  color: black;
  font-size: 33px;
}
</style>

<div style="display:none !important;" id="particles-js-header"></div>


<div class="banner_section_main backBlack define_float">

            <div class="banner_section_new_inner define_float">

                <div class="container">

                    <div class="banner_section_inner define_float">

                        <div class="banner_block_outer beforeShow show"><div class="banner_center_block animateLoader"></div></div>

                        <div class="main-banner-area sectionShow hide">

                            <!-- <div class="banner_left_title"><img src="images/Digital.svg" alt="digital-img" /></div> -->

                            <div class="banner_right_title">

                                the wealth  builders

                            </div>

                            <div class="banner_section_parent define_float">

                                <div class="banner_section_first define_float">

                                    <h2>

                                        LEARN SKILLS

                                        <span>THAT CAN REPLACE YOUR 9-5 </span>

                                    </h2>

                                    <!-- <div class="banner_play define_float">

                                        <a href="javascript:void" data-toggle="modal" data-target="#video_popup">

                                            <img src="images/watch_icon.svg" alt="watch-icon" />

                                            Watch video

                                        </a>

                                    </div> -->

                                </div>

                                <div id="banner_section_second" class="banner_section_second define_float">

                                
                                    <h2>
                                        the wealth  builders
                                       <span>The Company That Frees You </span>

                                    </h2>

                                    <div class="books_section define_float">



                                        <a class="smooth-scroll" href="#Financial_Literacy">

                                            

                                            <img class="book_one" src="<?php echo get_stylesheet_directory_uri();?>/img/book/financial-literacy.png" alt="card-img" />

                                        </a>



                                        <a class="smooth-scroll" href="#Real_Estate">

                                            <img class="book_two" src="<?php echo get_stylesheet_directory_uri();?>/img/book/real-estate.png" alt="card-img" />

                                        </a>

                                        

                                        <a class="smooth-scroll" href="#Eccomerence">

                                        <img class="book_three" src="<?php echo get_stylesheet_directory_uri();?>/img/book/ecommerce.png" alt="Eccomerence" />

                                        </a>

                                        <a href="#Credit">

                                            <img class="book_four" src="<?php echo get_stylesheet_directory_uri();?>/img/book/credit.png" alt="card-img" />

                                        </a>  

                                        

                                        <a href="#Forex">

                                            <img class="book_five" src="<?php echo get_stylesheet_directory_uri();?>/img/book/forex.png" alt="card-img" />

                                        </a> 

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <section class="slider_module_first1 position-relative mybgs" id="Financial_Literacy">

            <div class="container">

                <div class="row mymiddle">

                    <div class="col-md-6 wow animate__animated animate__zoomIn" data-wow-duration=".5s" data-wow-delay=".5s">

                        <div class="slider_module_images">

                            <img class="js-tilt" src="<?php echo get_stylesheet_directory_uri();?>/img/financial2.png" alt="book-img" />

                        </div>

                    </div>

                    <div class="col-md-6 wow animate__animated animate__slideInRight" data-wow-duration="2s" data-wow-delay=".5s">

                        

                        <div class="slider_module_content">

                            <h4>

                                Financial Literacy

                            </h4>

                            <h2>

                                LEARN WHAT SOCIETY WILL NEVER TELL YOU ABOUT MONEY.

                            </h2>

                            <p>

                                Real wealth is not the ability to make money that’s the easy part but it’s the ability to keep the money you have and have a set of skills that allows an individual to make informed smart decisions to grow the money.

                            </p>

                            <div class="slider_module_button define_float">

                                <a class="slider_buy alias-link-common" href="#" target="_blank">Get Started</a>

                                <a class="slider_more" href="javascript:void(0);" data-toggle="modal" data-target="#financial_pop">

                                    <span>Learn more</span>

                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path

                                            d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538407 1.31946 0.538407 0.928933 0.928932C0.538408 1.31946 0.538408 1.95262 0.928933 2.34315L6.58579 8L0.928932 13.6569C0.538407 14.0474 0.538407 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9L8 9L8 7L7 7L7 9Z"

                                            fill="white"

                                        />

                                    </svg>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        



        <section class="slider_module_second2 position-relative mybgs" id="Real_Estate">

            <div class="container">

                <div class="row mymiddle">

                    <div class="col-md-6 wow animate__animated animate__slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">

                        <div class="slider_module_content">

                                               

                            <h4>

                                Real Estate

                            </h4>

                            <h2>

                                Start your Real Estate <br />

                            </h2>

                            <p>

                                Real estate creates the most millionaires. It’s the safest investment you can make with your money. Remember people will always need a place to live.

                            </p>

                            <div class="slider_module_button define_float">

                                <a class="slider_buy alias-link-common" href="#" target="_blank">Get Started</a>

                                <a class="slider_more" href="javascript:void(0);" data-toggle="modal" data-target="#airbnb_pop">

                                    <span>Learn More</span>

                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path

                                            d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538407 1.31946 0.538407 0.928933 0.928932C0.538408 1.31946 0.538408 1.95262 0.928933 2.34315L6.58579 8L0.928932 13.6569C0.538407 14.0474 0.538407 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9L8 9L8 7L7 7L7 9Z"

                                            fill="white"

                                        />

                                    </svg>

                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 wow animate__animated animate__zoomIn" data-wow-duration="1s" data-wow-delay="1s">

                        <div class="slider_module_images">

                            <img class="desktop-img-business js-tilt" src="<?php echo get_stylesheet_directory_uri();?>/img/17.png" alt="phone-img" />

                        </div>

                        

                    </div>

                </div>

            </div>

        </section>

        

        

        <section class="slider_module_third3 position-relative mybgs" id="Eccomerence">

            <div class="container">

                <div class="row mymiddle">

                    <div class="col-md-6 wow animate__animated animate__zoomIn" data-wow-duration=".5s" data-wow-delay=".5s">

                        <div class="slider_module_images">

                            <img class="js-tilt" src="<?php echo get_stylesheet_directory_uri();?>/img/15.png" alt="turo-img" />

                        </div>

                    </div>

                    <div class="col-md-6 wow animate__animated animate__slideInRight" data-wow-duration="2s" data-wow-delay=".5s">

                        

                        <div class="slider_module_content">

                            <h4>

                                Eccomerence

                            </h4>

                            <h2>

                                Start your ecommerce 

                                business in as

                                little as 7 days

                            </h2>

                            <p>

                                Dropshipping is a low risk business model that allows you to make income using someone else product, with none of the overhead cost.

                            </p>

                            <div class="slider_module_button define_float">

                                <a class="slider_buy alias-link-common" href="#" target="_blank">Get Started</a>

                                <a class="slider_more" href="javascript:void(0);" data-toggle="modal" data-target="#turo_mastery">

                                    <span>Learn More</span>

                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path

                                            d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538407 1.31946 0.538407 0.928933 0.928932C0.538408 1.31946 0.538408 1.95262 0.928933 2.34315L6.58579 8L0.928932 13.6569C0.538407 14.0474 0.538407 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9L8 9L8 7L7 7L7 9Z"

                                            fill="white"

                                        />

                                    </svg>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <section class="slider_module_forth4 position-relative mybgs" id="Credit">

            <div class="container">

                <div class="row mymiddle">

                    <div class="col-md-6 wow animate__animated animate__slideInLeft" data-wow-duration="2s" data-wow-delay=".5s">

                        <div class="slider_module_content">

                            <h4>

                                Credit

                            </h4>

                            <h2>

                                Increase your credit score so you can start getting approvals in as little as 45 days

                            </h2>

                            <p>

                                Having good credit makes everything about life great. Let's be honest, it's  expensive and painful  to be broke. You are overpaying for everything. High interest rates, the heart breaking denial messages you receive when applying for credit. Let that be a thing of the past.

                            </p>

                            <div class="slider_module_button define_float">

                                <a class="slider_buy alias-link-common" href="#" target="_blank">Get Started</a>

                                <a class="slider_more" href="javascript:void(0);" data-toggle="modal" data-target="#metaverse_mastery">

                                    <span>Learn More</span>

                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path

                                            d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538407 1.31946 0.538407 0.928933 0.928932C0.538408 1.31946 0.538408 1.95262 0.928933 2.34315L6.58579 8L0.928932 13.6569C0.538407 14.0474 0.538407 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9L8 9L8 7L7 7L7 9Z"

                                            fill="white"

                                        />

                                    </svg>

                                </a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-6 wow animate__animated animate__zoomIn" data-wow-duration=".5s" data-wow-delay=".5s">

                        <div class="slider_module_images">

                            <img class="js-tilt" src="<?php echo get_stylesheet_directory_uri();?>/img/coimbatore_img.png" alt="meta-img" />

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <section class="slider_module_fifth5 position-relative mybgs" id="Forex">

            <div class="container">

                <div class="row mymiddle">

                    <div class="col-md-6 wow animate__animated animate__zoomIn" data-wow-duration=".5s" data-wow-delay=".5s">

                        <div class="slider_module_images">

                            <img class="js-tilt" src="<?php echo get_stylesheet_directory_uri();?>/img/Forex-Trading.png" alt="Forex" />

                        </div>

                    </div>

                    <div class="col-md-6 wow animate__animated animate__slideInRight" data-wow-duration="2s" data-wow-delay=".5s">

                        

                        <div class="slider_module_content">

                            <h4> Forex Trading</h4>

                            <h2>Learn a skill that can pay you anytime of the day anywhere in the world</h2>

                            <p>Imagine having the ability to learn a skill  that can make you income in a matter of minutes. Studies show that a small amount of xtra income a  month can significantly help a household.</p>



                            <div class="slider_module_button define_float">

                                <a class="slider_buy alias-link-common" href="#" target="_blank">Get Started</a>

                                <a class="slider_more" href="#"  data-toggle="modal" data-target="#market_popup">

                                    <span>Learn More</span>

                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path d="M8.70711 8.70711C9.09763 8.31658 9.09763 7.68342 8.70711 7.29289L2.34315 0.928932C1.95262 0.538407 1.31946 0.538407 0.928933 0.928932C0.538408 1.31946 0.538408 1.95262 0.928933 2.34315L6.58579 8L0.928932 13.6569C0.538407 14.0474 0.538407 14.6805 0.928932 15.0711C1.31946 15.4616 1.95262 15.4616 2.34315 15.0711L8.70711 8.70711ZM7 9L8 9L8 7L7 7L7 9Z" fill="white"/>

                                    </svg>

                                </a>

                            </div>

                        </div>

                        

                    </div>

                </div>

            </div>

        </section>







        <!-- Modal  popup -->

        <!-- Modal  popup -->

        <!-- Modal  popup -->

        <!-- Modal  popup -->



        <!-- Financial Literacy Mastery -->

        <div class="modal fade pop_up_modal financial_modal" id="financial_pop" tabindex="-1" role="dialog" aria-labelledby="financial_pop" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal_body">

                        <div class="modal-banner define_float position-relative">

                            <div class="container-fuild">

                                <div class="close_modal_div mob-close">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                        <span aria-hidden="true"></span>

                                    </button>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="banner_image">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/financial2.png" alt="popup-img" />

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="banner_content">

                                            <div class="close_modal_div">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                    <span aria-hidden="true"></span>

                                                </button>

                                            </div>

                                            <h2>

                                                Financial <br />

                                                Literacy

                                            </h2>

                                            <p>

                                                Real wealth is not the ability to make money that’s the easy part, but it’s the ability to keep the money you have and have a set of skills that allows an individual to make informed smart decisions to grow the money

                                                

                                            </p>

                                            <!-- <div class="get_btn get_btn_new define_float custom_btn">

                                                <a class="alias-link-common" href="#/ALIAS_LINK" target="_blank">Get Started</a>

                                            </div> -->

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                     

                    </div>

                </div>

            </div>

        </div>

        <!-- Financial Literacy Mastery -->



        

        <!-- Real Estate -->

        <div class="modal fade pop_up_modal financial_modal pop-modal-down" id="airbnb_pop" tabindex="-1" role="dialog" aria-labelledby="airbnb_pop" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal_body">

                        <div class="modal-banner define_float position-relative">

                            <div class="container-fuild">

                                <div class="close_modal_div mob-close">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                        <span aria-hidden="true"></span>

                                    </button>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="banner_image">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/17.png" alt="popup-img" />

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="banner_content">

                                            <div class="close_modal_div">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                    <span aria-hidden="true"></span>

                                                </button>

                                            </div>

                                            <h2>

                                                Real<br />

                                                Estate

                                            </h2>

                                            <p>

                                                You probably thought you needed a lot of money to get started or only rich people bought real estate? You are right they do. That means if you want to get rich you should to. Over the past 5 years we have created a step by step course  that has helped thousands of people around become real estate investors with little to no money

                                            </p>

                                            <!-- <div class="get_btn get_btn_new define_float custom_btn">

                                                <a class="alias-link-common" href="#/ALIAS_LINK" target="_blank">Get Started</a>

                                            </div> -->

                                        </div>

                                    </div>

                                    <!-- <div class="ban_ribbon">

                                        <img src="uploads/homePage/1366105550-airbnb_rib.png" alt="ribbon-icon" />

                                    </div> -->

                                </div>

                            </div>

                        </div>

                        <div class="modal-quality define_float">

                            <div class="container_custom">

                                <div class="row">

                                    <div class="col-md-4">

                                        <div class="quality_inner_main define_float">

                                            <div class="quality_box-row">

                                                <div class="quality_inner">

                                                    <div class="check_icon"></div>

                                                    <p>

                                                        Flip homes on the side while keeping your day job

                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <div class="col-md-4">

                                        <div class="quality_inner_main define_float">

                                            <div class="quality_box-row">

                                                <div class="quality_inner width_incre">

                                                    <div class="check_icon"></div>

                                                    <p>

                                                        Build a real estate business anywhere in the world without being there

                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>



                                    <div class="col-md-4">

                                        <div class="quality_inner_main define_float">

                                            <div class="quality_box-row">

                                                <div class="quality_inner width_incre">

                                                    <div class="check_icon"></div>

                                                    <p>

                                                        Become an investor using other people money and properties

                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="service_type define_float">

                            <div class="container_custom">

                                <div class="type_service_row">

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/345429583-icon_01.png" alt="popup-icon" />

                                            <p>

                                                Everything<br />

                                                is online

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/1428094297-icon_02.png" alt="popup-icon" />

                                            <p>

                                                Professional simple <br />

                                                to understand courses

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/956479185-icon_05.png" alt="popup-icon" />

                                            <p>

                                                Online quizzes to <br />

                                                test your knowledge 

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/185119225-icon_04.png" alt="popup-icon" />

                                            <p>

                                                Never be in a rush. <br />

                                                Do it at your own pace

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/897193141-icon_03.png" alt="popup-icon" />

                                            <p>

                                                24/7 Real Estate support<br />

                                                group to support your journey

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Real Estate -->



        <!-- Ecommerce  Mastery Course -->

        <div class="modal fade pop_up_modal financial_modal pop-modal-down" id="turo_mastery" tabindex="-1" role="dialog" aria-labelledby="turo_mastery" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal_body">

                        <div class="modal-banner define_float position-relative">

                            <div class="container-fuild">

                                <div class="close_modal_div mob-close">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                        <span aria-hidden="true"></span>

                                    </button>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="banner_image">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/15.png" alt="popup-img" />

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="banner_content">

                                            <div class="close_modal_div">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                    <span aria-hidden="true"></span>

                                                </button>

                                            </div>

                                            <h2>

                                                Ecommerce Mastery Course

                                            </h2>

                                            <p>

                                                Start a business in less that 7 days in an emerging industry with our bold e-commerce course that has helped average everyday people own a stay at home business. Learn how to set up a store, learn where to find your products, learn how to sell and make profit. <br />

                                                Start Today.

                                            </p>

                                            <!-- <div class="get_btn get_btn_new define_float custom_btn">

                                                <a class="alias-link-common" href="#/ALIAS_LINK" target="_blank">Get Started</a>

                                            </div> -->

                                        </div>

                                    </div>

                                    <!-- <div class="ban_ribbon">

                                        <img src="uploads/homePage/1360227767-turo_rib.png" alt="ribbon-icon" />

                                    </div> -->

                                </div>

                            </div>

                        </div>

                        <div class="modal-quality define_float">

                            <div class="container_custom">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="quality_inner_main define_float">

                                            <div class="row">

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                Live webinars every week

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                Step by step courses  to guide you

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                Step by step courses  to guide you

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

    

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                Step by step courses  to guide you

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                Build a new income stream without quitting your 9-5

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                                

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                Little to no money to get started 

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div> 



                                            </div>

                                           

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="service_type define_float">

                            <div class="container_custom">

                                <div class="type_service_row">

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/538926650-icon_01.png" alt="popup-icon" />

                                            <p>

                                                Everything  <br />

                                                is online

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/944188281-icon_02.png" alt="popup-icon" />

                                            <p>

                                                Professional simple to<br />

                                                understand courses

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/531741466-icon_03.png" alt="popup-icon" />

                                            <p>

                                                Online quizzes to<br />

                                                test your knowledge 

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/20427205-icon_04.png" alt="popup-icon" />

                                            <p>

                                                Never be in a rush.<br />

                                                Do it at your own pace

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/655441593-icon_05.png" alt="popup-icon" />

                                            <p>

                                                A skill set that will pay<br />

                                                you for a lifetime

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Ecommerce  Mastery Course -->



        <!--  Credit Mastery course -->

        <div class="modal fade pop_up_modal financial_modal pop-modal-down" id="metaverse_mastery" tabindex="-1" role="dialog" aria-labelledby="metaverse_mastery" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal_body">

                        <div class="modal-banner define_float position-relative">

                            <div class="container-fuild">

                                <div class="close_modal_div mob-close">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                        <span aria-hidden="true"></span>

                                    </button>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="banner_image">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/img/coimbatore_img.png" alt="popup-img" />

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="banner_content">

                                            <div class="close_modal_div">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                    <span aria-hidden="true"></span>

                                                </button>

                                            </div>

                                            <h2>

                                                Credit Mastery course 

                                            </h2>

                                            <p>

                                                No worries, having bad credit is a thing of the past. We have a automated credit system where we fight the bureas on your behalf with updated methods that has help thousands increase they credit and start getting approvals. <br> <br>

                                                Learn what credit is and most importantly: how to leverage it. Learn how to remove negative items from your credit report. Learn  how to build a strong credit powerfile.

                                            </p>

                                            <!-- <div class="get_btn get_btn_new define_float custom_btn">

                                                <a class="alias-link-common" href="#/ALIAS_LINK" target="_blank">Get Started</a>

                                            </div> -->

                                        </div>

                                    </div>

                                    <!-- <div class="ban_ribbon">

                                        <img src="uploads/homePage/1579862575-metaverse_ribb.png" alt="ribbon-icon" />

                                    </div> -->

                                </div>

                            </div>

                        </div>

                        <div class="modal-quality define_float">

                            <div class="container_custom">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="quality_inner_main define_float">



                                            <div class="row">

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                A DIY Credit repair system

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                24/7 Credit Support Group

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                2 Live Webinars Per Week with Credit Expert

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-3">

                                                    <div class="quality_box-row">

                                                        <div class="quality_inner width_custom">

                                                            <div class="check_icon"></div>

                                                            <p>

                                                                Identity Theft Prevention. You only see your credit report

                                                            </p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            

                                            

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="service_type define_float">

                            <div class="container_custom">

                                <div class="type_service_row">

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/748027633-icon_01.png" alt="popup-icon" />

                                            <p>

                                                Everything <br />

                                                is online

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/620339011-icon_02.png" alt="popup-icon" />

                                            <p>

                                                Professional simple to <br />

                                                understand courses

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/221318688-icon_03.png" alt="popup-icon" />

                                            <p>

                                                Online quizzes to<br />

                                                test your knowledge

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/1450533563-icon_04.png" alt="popup-icon" />

                                            <p>

                                                Never be in a rush. <br />

                                                Do it at your own pace

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/716550082-icon_05.png" alt="popup-icon" />

                                            <p>

                                                Savings. No more paying hundreds to thousands <br />

                                                of dollars  for someone else to do it



                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Credit Mastery course -->





        <!-- Forex Trading -->



        <div class="modal fade pop_up_modal financial_modal pop-modal-down" id="market_popup" tabindex="-1" role="dialog" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                    <div class="modal_body">

                        <div class="modal-banner define_float position-relative">

                            <div class="container-fuild">

                                <div class="close_modal_div mob-close">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                        <span aria-hidden="true"></span>

                                    </button>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="banner_image">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/Forex-Trading.png" alt="popup-img" />

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="banner_content">

                                            <div class="close_modal_div">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                    <span aria-hidden="true"></span>

                                                </button>

                                            </div>

                                            <h2>

                                                Forex Mastery

                                            </h2>

                                            <p>

                                                Start learning how to earn income from your smartphone with our easy to follow forex courses. We make trading simple a 4th grader can understand. Our forex courses break down the sociology of trading and special skills and strategies to ensure you are profitable in the market.

                                            </p>

                                            <!-- <div class="get_btn get_btn_new define_float custom_btn">

                                                <a class="alias-link-common" href="#/ALIAS_LINK" target="_blank">Become A Marketing Superstar</a>

                                            </div> -->

                                        </div>

                                    </div>

                                    <!-- <div class="ban_ribbon">

                                        <img src="images/ribbon_market.png" alt="ribbon-icon" />

                                    </div> -->

                                </div>

                            </div>

                        </div>

                        <div class="modal-quality define_float">

                            <div class="container_custom">

                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="quality_inner_main define_float">

                                            <div class="quality_box-row">

                                                <div class="quality_inner width_custom">

                                                    <div class="check_icon"></div>

                                                    <p>

                                                        Minimum investment to start

                                                    </p>

                                                </div>

                                            </div>

                                            <div class="quality_box-row">

                                                <div class="quality_inner width_custom">

                                                    <div class="check_icon"></div>

                                                    <p>

                                                        Live webinars with forex expert 4x a week

                                                    </p>

                                                </div>

                                            </div>

                                            <div class="quality_box-row">

                                                <div class="quality_inner width_custom">

                                                    <div class="check_icon"></div>

                                                    <p>

                                                        Step by step from begineer level to advance level courses

                                                    </p>

                                                </div>

                                            </div>

                                            <div class="quality_box-row">

                                                <div class="quality_inner width_custom">

                                                    <div class="check_icon"></div>

                                                    <p>

                                                        24/7 Forex support group

                                                    </p>

                                                </div>

                                            </div>

                                            <div class="quality_box-row">

                                                <div class="quality_inner width_custom">

                                                    <div class="check_icon"></div>

                                                    <p>

                                                        Forex Trading Signals APP so you can make money on the go

                                                    </p>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="service_type define_float">

                            <div class="container_custom">

                                <div class="type_service_row">

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/748027633-icon_01.png" alt="popup-icon" />

                                            <p>

                                                Everything <br />

                                                is online

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/620339011-icon_02.png" alt="popup-icon" />

                                            <p>

                                                Professional simple <br />

                                                to understand courses

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/221318688-icon_03.png" alt="popup-icon" />

                                            <p>

                                                Online quizzes to<br />

                                                test your knowledge

                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/1450533563-icon_04.png" alt="popup-icon" />

                                            <p>

                                                Never be in a rush. <br />

                                                DO it at your own pace



                                            </p>

                                        </div>

                                    </div>

                                    <div class="service_type-main">

                                        <div class="service_type-inner">

                                            <img src="<?php echo get_stylesheet_directory_uri();?>/uploads/homePage/716550082-icon_05.png" alt="popup-icon" />

                                            <p>

                                                A skill set that will<br />

                                                pay you for a lifetime

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Marketing Mastery -->

<!-- Credit & Testimonials Start -->
<div class="section-heading--box d-flex justify-content-between align-items-center px-5 pt-5">
      <div class="heading--text">
        <h3>Our Credit Results</h3>
        <p>
          Don’t <a href="#" style="color: #d70000">Sign UP</a> before viewing
          our
          <a
            href="https://www.thewealthbuilders.me/"
            style="color: black; text-decoration: underline"
          >
            Wealth Builders
          </a>
          &nbsp;posts of our Credit Results on their social media.
        </p>
      </div>
      <div class="heading--button">
        <!-- Button trigger modal -->
        <button
          type="button"
          class="btn testimonial-btn"
          data-toggle="modal"
          data-target="#testimonialModal"
        >
          View Testimonials
        </button>

        <!-- Modal -->
        <div
          class="modal fade"
          id="testimonialModal"
          data-backdrop="static"
          data-keyboard="false"
          tabindex="-1"
          aria-labelledby="testimonialModalLabel"
          aria-hidden=""
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="wrapper2">
              <div class="screenshots-slider">
                <img src="https://www.thewealthbuilders.me/wp-content/uploads/2024/01/credit-1.jpg" />
                <img src="https://www.thewealthbuilders.me/wp-content/uploads/2024/01/credit-2.jpg" />
                <img src="https://www.thewealthbuilders.me/wp-content/uploads/2024/01/credit-1.jpg" />
              </div>
              <div class="screenshots-slider-buttons">
                <button
                  class="slick-prev2"
                  aria-label="Previous2"
                  type="button"
                ></button>
                <button
                  class="slick-next2"
                  aria-label="Next2"
                  type="button"
                ></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <div class="my-slider">
        <div>
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/nDLb8_wgX50?si=Tb5rIflY83L-aMTG"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
          <div class="user-details ml-3">
            <div class="user-name--box d-flex align-items-end mb-1">
              <div class="cicle"><img src="img/user_img.png" /></div>
              <h4 class="ml-1">Nabiha Tahsin</h4>
            </div>
            <p>Video Title</p>
          </div>
        </div>
        <div>
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/nDLb8_wgX50?si=Tb5rIflY83L-aMTG"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
          <div class="user-details ml-3">
            <div class="user-name--box d-flex align-items-end mb-1">
              <div class="cicle"><img src="img/user_img.png" /></div>
              <h4 class="ml-1">Nabiha Tahsin</h4>
            </div>
            <p>Video Title</p>
          </div>
        </div>
        <div>
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/nDLb8_wgX50?si=Tb5rIflY83L-aMTG"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
          <div class="user-details ml-3">
            <div class="user-name--box d-flex align-items-end mb-1">
              <div class="cicle"><img src="img/user_img.png" /></div>
              <h4 class="ml-1">Nabiha Tahsin</h4>
            </div>
            <p>Video Title</p>
          </div>
        </div>
        <div>
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/nDLb8_wgX50?si=Tb5rIflY83L-aMTG"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
          <div class="user-details ml-3">
            <div class="user-name--box d-flex align-items-end mb-1">
              <div class="cicle"><img src="img/user_img.png" /></div>
              <h4 class="ml-1">Nabiha Tahsin</h4>
            </div>
            <p>Video Title</p>
          </div>
        </div>
        <div>
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/nDLb8_wgX50?si=Tb5rIflY83L-aMTG"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
          <div class="user-details ml-3">
            <div class="user-name--box d-flex align-items-end mb-1">
              <div class="cicle"><img src="img/user_img.png" /></div>
              <h4 class="ml-1">Nabiha Tahsin</h4>
            </div>
            <p>Video Title</p>
          </div>
        </div>
      </div>
      <div class="my-slider-buttons">
        <button class="slick-prev" aria-label="Previous" type="button"></button>
        <button class="slick-next" aria-label="Next" type="button"></button>
      </div>
    </div>

<!--/ End of Credit & Testimonials -->



        

   





<?php get_footer();?>

<script>
	$(document).ready(function () {
  $('.my-slider').slick({
    slidesToShow: 3.6,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    nextArrow: $('.slick-next'),
    prevArrow: $('.slick-prev'),
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});

$(document).ready(function () {
  $('.screenshots-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    nextArrow: $('.slick-next2'),
    prevArrow: $('.slick-prev2'),
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});

</script>