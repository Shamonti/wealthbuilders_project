<?php 



	/* Template Name: Social Proof Page*/


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
.credit-slider,
.forex-slider,
.ecommerce-slider {
  padding: 0 70px;
  position: relative;
}
.credit-slider iframe,
.forex-slider iframe,
.ecommerce-slider iframe {
  border-radius: 5px;
}
.slick-initialized .slick-slide {
  color: #fff;
  margin: 0 15px 0 0;

  background: rgba(0, 0, 0);

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
.slick-arrow {
  background-color: transparent;
  border: none;
  padding: 0;
}
.credit-slider-buttons,
.forex-slider-buttons,
.ecommerce-slider-buttons {
  z-index: 5;
  position: absolute;
  right: 200px;
}
.credit-next,
.forex-next,
.ecommerce-next {
  left: 60px;
}
.credit-prev,
.forex-prev,
.ecommerce-prev {
  left: 0;
}
.credit-prev:before,
.forex-prev:before,
.ecommerce-prev:before {
  content: "";
  display: inline-block;
  width: 50px;
  height: 50px;
  background: url("img/back.png") no-repeat;
}
.credit-next:before,
.forex-next:before,
.ecommerce-next:before {
  content: "";
  display: inline-block;
  width: 50px;
  height: 50px;
  background: url("img/next.png") no-repeat;
}
.wrapper2 {
  padding: 30px 0;
  overflow-x: hidden;
}
.credit-screenshots-slider,
.forex-screenshots-slider,
.ecommerce-screenshots-slider {
  padding: 0 70px;
  position: relative;
}
.credit-screenshots-slider iframe,
.forex-screenshots-slider iframe,
.ecommerce-screenshots-slider iframe {
  border-radius: 5px;
}
.credit-screenshots-slider-buttons,
.forex-screenshots-slider-buttons,
.ecommerce-screenshots-slider-buttons {
  z-index: 5;
  position: absolute;
  top: 45vh;

  display: flex;
}
.credit-screenshots-slider-buttons button,
.forex-screenshots-slider-buttons button,
.ecommerce-screenshots-slider-buttons button {
  background-color: transparent;
  border: 0;
}
.credit-screenshots-next,
.forex-screenshots-next,
.ecommerce-screenshots-next {
  top: 20vh;
  left: auto;
}
.credit-screenshots-prev,
.forex-screenshots-prev,
.ecommerce-screenshots-prev {
  left: 0;
  margin-right: 24rem;
}
.credit-screenshots-prev:before,
.forex-screenshots-prev:before,
.ecommerce-screenshots-prev:before {
  content: "";
  display: inline-block;
  width: 50px;
  height: 50px;
  background: url("img/back2.png") no-repeat;
}
.credit-screenshots-next:before,
.forex-screenshots-next:before,
.ecommerce-screenshots-next:before {
  content: "";
  display: inline-block;
  width: 50px;
  height: 50px;
  background: url("img/next2.png") no-repeat;
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
<script src="https://player.vimeo.com/api/player.js"></script>




<!-- testimonial sections -->

 <!-- Credit Testimonial -->
    <div
      class="section-heading--box d-flex justify-content-between align-items-center px-5 pt-5"
    >
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
          data-target="#creditTestimonialModal"
        >
          View Testimonials
        </button>

        <!-- Modal -->
        <div
          class="modal fade"
          id="creditTestimonialModal"
          data-backdrop="static"
          data-keyboard="false"
          tabindex="-1"
          aria-labelledby="creditTestimonialModalLabel"
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
            <div class="wrapper">
              <div class="credit-screenshots-slider">
                <img src="img/screenshots/credit/credit-screenshoot-01.jpg" />
                <img src="img/screenshots/credit/credit-screenshoot-02.jpg" />
              </div>
              <div class="credit-screenshots-slider-buttons">
                <button
                  class="credit-screenshots-prev"
                  aria-label="Previous2"
                  type="button"
                ></button>
                <button
                  class="credit-screenshots-next"
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
      <div class="credit-slider">
        <div class="credit-slide">
          <iframe
            width="560"
            height="315"
            src="https://player.vimeo.com/video/530949920?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            title="Video 1"
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
            src="https://player.vimeo.com/video/530949920?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            title="Video 1"
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
            src="https://player.vimeo.com/video/530949920?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            title="Video 1"
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
        <div style>
          <iframe
            width="560"
            height="315"
            src="https://player.vimeo.com/video/530949920?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            title="Video 1"
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
            src="https://player.vimeo.com/video/530949920?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            title="Video 1"
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
      <div class="credit-slider-buttons">
        <button
          class="credit-prev"
          aria-label="Previous"
          type="button"
        ></button>
        <button class="credit-next" aria-label="Next" type="button"></button>
      </div>
    </div>

    <!-- Forex Testimonial -->
    <div
      class="section-heading--box d-flex justify-content-between align-items-center px-5 pt-5"
    >
      <div class="heading--text">
        <h3>Our Forex Results</h3>
        <p>
          Don’t <a href="#" style="color: #d70000">Sign UP</a> before viewing
          our
          <a
            href="https://www.thewealthbuilders.me/"
            style="color: black; text-decoration: underline"
          >
            Wealth Builders
          </a>
          &nbsp;posts of our Forex Results on their social media.
        </p>
      </div>
      <div class="heading--button">
        <!-- Button trigger modal -->
        <button
          type="button"
          class="btn testimonial-btn"
          data-toggle="modal"
          data-target="#forexTestimonialModal"
        >
          View Testimonials
        </button>

        <!-- Modal -->
        <div
          class="modal fade"
          id="forexTestimonialModal"
          data-backdrop="static"
          data-keyboard="false"
          tabindex="-1"
          aria-labelledby="forexTestimonialModalLabel"
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
            <div class="wrapper">
              <div class="forex-screenshots-slider">
                <img src="img/screenshots/forex/forex-screenshoot-01.jpeg" />
                <img src="img/screenshots/forex/forex-screenshoot-02.jpeg" />
                <img src="img/screenshots/forex/forex-screenshoot-03.jpeg" />
              </div>
              <div class="forex-screenshots-slider-buttons">
                <button
                  class="forex-screenshots-prev"
                  aria-label="Previous3"
                  type="button"
                ></button>
                <button
                  class="forex-screenshots-next"
                  aria-label="Next3"
                  type="button"
                ></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <div class="forex-slider">
        <div class="forex-slide">
          <iframe
            width="560"
            height="315"
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
        <div style>
          <iframe
            width="560"
            height="315"
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
      <div class="forex-slider-buttons">
        <button class="forex-prev" aria-label="Previous" type="button"></button>
        <button class="forex-next" aria-label="Next" type="button"></button>
      </div>
    </div>

    <!-- E-commerce Testimonial -->
    <div
      class="section-heading--box d-flex justify-content-between align-items-center px-5 pt-5"
    >
      <div class="heading--text">
        <h3>Our E-commerce Results</h3>
        <p>
          Don’t <a href="#" style="color: #d70000">Sign UP</a> before viewing
          our
          <a
            href="https://www.thewealthbuilders.me/"
            style="color: black; text-decoration: underline"
          >
            Wealth Builders
          </a>
          &nbsp;posts of our E-commerce Results on their social media.
        </p>
      </div>
      <div class="heading--button">
        <!-- Button trigger modal -->
        <button
          type="button"
          class="btn testimonial-btn"
          data-toggle="modal"
          data-target="#ecommerceTestimonialModal"
        >
          View Testimonials
        </button>

        <!-- Modal -->
        <div
          class="modal fade"
          id="ecommerceTestimonialModal"
          data-backdrop="static"
          data-keyboard="false"
          tabindex="-1"
          aria-labelledby="ecommerceTestimonialModalLabel"
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
            <div class="wrapper">
              <div class="ecommerce-screenshots-slider">
                <img
                  src="img/screenshots/ecommerce/ecommerce-screenshoot-01.jpeg"
                />
                <img
                  src="img/screenshots/ecommerce/ecommerce-screenshoot-02.jpeg"
                />
                <img
                  src="img/screenshots/ecommerce/ecommerce-screenshoot-03.jpeg"
                />
                <img
                  src="img/screenshots/ecommerce/ecommerce-screenshoot-04.jpeg"
                />
              </div>
              <div class="ecommerce-screenshots-slider-buttons">
                <button
                  class="ecommerce-screenshots-prev"
                  aria-label="Previous3"
                  type="button"
                ></button>
                <button
                  class="ecommerce-screenshots-next"
                  aria-label="Next3"
                  type="button"
                ></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <div class="ecommerce-slider">
        <div class="ecommerce-slide">
          <iframe
            width="560"
            height="315"
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
        <div style>
          <iframe
            width="560"
            height="315"
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
            src="https://player.vimeo.com/video/10985679?h=7008dd1c79&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
            ?autoplay="true"
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
      <div class="ecommerce-slider-buttons">
        <button
          class="ecommerce-prev"
          aria-label="Previous"
          type="button"
        ></button>
        <button class="ecommerce-next" aria-label="Next" type="button"></button>
      </div>
    </div>

<!-- testimonial sections end -->
        

   





<?php get_footer();?>


<script>
$(document).ready(function () {
  $('.credit-slider').slick({
    slidesToShow: 3.6,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: false,
    nextArrow: $('.credit-next'),
    prevArrow: $('.credit-prev'),
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
  $('.credit-screenshots-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: false,
    nextArrow: $('.credit-screenshots-next'),
    prevArrow: $('.credit-screenshots-prev'),
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
  $('.forex-slider').slick({
    slidesToShow: 3.6,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: false,
    nextArrow: $('.forex-next'),
    prevArrow: $('.forex-prev'),
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
  $('.forex-screenshots-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: false,
    nextArrow: $('.forex-screenshots-next'),
    prevArrow: $('.forex-screenshots-prev'),
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
  $('.ecommerce-slider').slick({
    slidesToShow: 3.6,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: false,
    nextArrow: $('.ecommerce-next'),
    prevArrow: $('.ecommerce-prev'),
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
  $('.ecommerce-screenshots-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: false,
    nextArrow: $('.ecommerce-screenshots-next'),
    prevArrow: $('.ecommerce-screenshots-prev'),
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