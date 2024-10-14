<!DOCTYPE html>
<html lang="en">
<?php
include('header.php');
?>
        <style>
        /* Fullscreen video background */
        /* Fullscreen video background */
        section {
  width: 100%;
  height: 100vh;
}

/* Transition and backface visibility helpers */
.transition_all_03s {
  transition: all 0.3s ease;
}

.backface_visibility_hidden {
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}

/* Universal box-sizing */
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

/* Swiper container setup */
.swiper-container {
  width: 80%;
  height: 100vh;
  float: left;
  transition: opacity 0.6s ease, transform 0.3s ease;
}

/* Nav-slider-specific settings */
.swiper-container.nav-slider {
  width: 20%;
  padding-left: 5px;
}

.swiper-container.nav-slider .swiper-slide {
  cursor: pointer;
  opacity: 0.4;
  transition: opacity 0.3s ease;
}

.swiper-container.nav-slider .swiper-slide.swiper-slide-active {
  opacity: 1;
}

.swiper-container.nav-slider .content {
  width: 100%;
}

.swiper-container.nav-slider .title {
  font-size: 20px;
}

/* Show buttons on hover */
.swiper-container:hover .swiper-button-prev,
.swiper-container:hover .swiper-button-next {
  transform: translateX(0);
  opacity: 1;
  visibility: visible;
}

/* Loading state */
.swiper-container.loading {
  opacity: 0;
  visibility: hidden;
}

/* Swiper slide settings */
.swiper-slide {
  overflow: hidden;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}

.swiper-slide .slide-bgimg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
}

.swiper-slide .entity-img {
  display: none;
}

.swiper-slide .content {
  position: absolute;
  top: 40%;
  left: 0;
  width: 50%;
  padding-left: 5%;
  color: #fff;
}

.swiper-slide .content .title {
  font-size: 2.6em;
  font-weight: bold;
  margin-bottom: 30px;
}

.swiper-slide .content .caption {
  display: block;
  font-size: 13px;
  line-height: 1.4;
  transform: translateX(50px);
  opacity: 0;
  transition: opacity 0.3s ease, transform 0.7s ease;
}

.swiper-slide .content .caption.show {
  transform: translateX(0);
  opacity: 1;
}

/* Swiper button settings */
[class^="swiper-button-"] {
  width: 44px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.swiper-button-prev {
  transform: translateX(50px);
}

.swiper-button-next {
  transform: translateX(-50px);
}


    </style>
</head>
<body>

<!-- Carousel Start -->
<!-- Include Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">








<section>
  <div class="swiper-container main-slider loading">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/it/ship2.jpeg)">
        <img src="img/it/ship2.jpeg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/images/cargoship.webp)">
        <img src="img/images/cargoship.webp" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/it/education-technology.jpg)">
        <img src="img/it/education-technology.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/it/im7.png)">
        <img src="img/it/im7.png" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/images/traning.jpeg)">
        <img src="img/images/traning.jpeg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title"></p>
        <span class="caption"></span>
      </div>
    </div>
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-button-next swiper-button-white"></div>
</div>

<!-- Thumbnail navigation -->
<div class="swiper-container nav-slider loading">
  <div class="swiper-wrapper" role="navigation">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/it/ship2.jpeg)">
        <img src="img/it/ship2.jpeg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">SHREYSUN GLOBAL GROUP</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/images/sp2.webp)">
        <img src="img/images/sp2.webp"class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Shreysun Global Shipping Pvt Ltd.</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/it/education-technology.jpg)">
        <img src="img/it/education-technology.jpg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Shreysun Global Infotech</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/it/im7.png)">
        <img src="img/it/im7.png" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Shreysun Global Infrastructure</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(img/images/traning.jpeg)">
        <img src="img/images/traning.jpeg" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Shreysun Global Maritime Training & Education</p>
      </div>
    </div>
  </div>
</div>
</section>

<script>
    // The Slideshow class.
class Slideshow {
    constructor(el) {
        
        this.DOM = {el: el};
      
        this.config = {
          slideshow: {
            delay: 3000,
            pagination: {
              duration: 3,
            }
          }
        };
        
        // Set the slideshow
        this.init();
      
    }
    init() {
      
      var self = this;
      
      // Charmed title
      this.DOM.slideTitle = this.DOM.el.querySelectorAll('.slide-title');
      this.DOM.slideTitle.forEach((slideTitle) => {
        charming(slideTitle);
      });
      
      // Set the slider
      this.slideshow = new Swiper (this.DOM.el, {
          
          loop: true,
          autoplay: {
            delay: this.config.slideshow.delay,
            disableOnInteraction: false,
          },
          speed: 500,
          preloadImages: true,
          updateOnImagesReady: true,
          
          // lazy: true,
          // preloadImages: false,

          pagination: {
            el: '.slideshow-pagination',
            clickable: true,
            bulletClass: 'slideshow-pagination-item',
            bulletActiveClass: 'active',
            clickableClass: 'slideshow-pagination-clickable',
            modifierClass: 'slideshow-pagination-',
            renderBullet: function (index, className) {
              
              var slideIndex = index,
                  number = (index <= 8) ? '0' + (slideIndex + 1) : (slideIndex + 1);
              
              var paginationItem = '<span class="slideshow-pagination-item">';
              paginationItem += '<span class="pagination-number">' + number + '</span>';
              paginationItem = (index <= 8) ? paginationItem + '<span class="pagination-separator"><span class="pagination-separator-loader"></span></span>' : paginationItem;
              paginationItem += '</span>';
            
              return paginationItem;
              
            },
          },

          // Navigation arrows
          navigation: {
            nextEl: '.slideshow-navigation-button.next',
            prevEl: '.slideshow-navigation-button.prev',
          },

          // And if we need scrollbar
          scrollbar: {
            el: '.swiper-scrollbar',
          },
        
          on: {
            init: function() {
              self.animate('next');
            },
          }
        
        });
      
        // Init/Bind events.
        this.initEvents();
        
    }
    initEvents() {
        
        this.slideshow.on('paginationUpdate', (swiper, paginationEl) => this.animatePagination(swiper, paginationEl));
        //this.slideshow.on('paginationRender', (swiper, paginationEl) => this.animatePagination());

        this.slideshow.on('slideNextTransitionStart', () => this.animate('next'));
        
        this.slideshow.on('slidePrevTransitionStart', () => this.animate('prev'));
            
    }
    animate(direction = 'next') {
      
        // Get the active slide
        this.DOM.activeSlide = this.DOM.el.querySelector('.swiper-slide-active'),
        this.DOM.activeSlideImg = this.DOM.activeSlide.querySelector('.slide-image'),
        this.DOM.activeSlideTitle = this.DOM.activeSlide.querySelector('.slide-title'),
        this.DOM.activeSlideTitleLetters = this.DOM.activeSlideTitle.querySelectorAll('span');
      
        // Reverse if prev  
        this.DOM.activeSlideTitleLetters = direction === "next" ? this.DOM.activeSlideTitleLetters : [].slice.call(this.DOM.activeSlideTitleLetters).reverse();
      
        // Get old slide
        this.DOM.oldSlide = direction === "next" ? this.DOM.el.querySelector('.swiper-slide-prev') : this.DOM.el.querySelector('.swiper-slide-next');
        if (this.DOM.oldSlide) {
          // Get parts
          this.DOM.oldSlideTitle = this.DOM.oldSlide.querySelector('.slide-title'),
          this.DOM.oldSlideTitleLetters = this.DOM.oldSlideTitle.querySelectorAll('span'); 
          // Animate
          this.DOM.oldSlideTitleLetters.forEach((letter,pos) => {
            TweenMax.to(letter, .3, {
              ease: Quart.easeIn,
              delay: (this.DOM.oldSlideTitleLetters.length-pos-1)*.04,
              y: '50%',
              opacity: 0
            });
          });
        }
      
        // Animate title
        this.DOM.activeSlideTitleLetters.forEach((letter,pos) => {
					TweenMax.to(letter, .6, {
						ease: Back.easeOut,
						delay: pos*.05,
						startAt: {y: '50%', opacity: 0},
						y: '0%',
						opacity: 1
					});
				});
      
        // Animate background
        TweenMax.to(this.DOM.activeSlideImg, 1.5, {
            ease: Expo.easeOut,
            startAt: {x: direction === 'next' ? 200 : -200},
            x: 0,
        });
      
        //this.animatePagination()
    
    }
    animatePagination(swiper, paginationEl) {
            
      // Animate pagination
      this.DOM.paginationItemsLoader = paginationEl.querySelectorAll('.pagination-separator-loader');
      this.DOM.activePaginationItem = paginationEl.querySelector('.slideshow-pagination-item.active');
      this.DOM.activePaginationItemLoader = this.DOM.activePaginationItem.querySelector('.pagination-separator-loader');
      
      console.log(swiper.pagination);
      // console.log(swiper.activeIndex);
      
      // Reset and animate
        TweenMax.set(this.DOM.paginationItemsLoader, {scaleX: 0});
        TweenMax.to(this.DOM.activePaginationItemLoader, this.config.slideshow.pagination.duration, {
          startAt: {scaleX: 0},
          scaleX: 1,
        });
      
      
    }
    
}

const slideshow = new Slideshow(document.querySelector('.slideshow'));

</script>
 




<link href="https://fonts.googleapis.com/css2?family=YourCreativeFont:wght@400;700&display=swap" rel="stylesheet">

<style>
/* Add perspective to the carousel container */
.carousel-header {
    perspective: 1500px;
}

/* Container for animated text */
.carousel-caption {
    position: relative;
    overflow: hidden;
}

/* Style for the animated text */
.carousel-text {
    font-family: 'YourCreativeFont', sans-serif; /* Replace with your chosen font */
    font-size: 2rem; /* Adjust size as needed */
    color: #fd0045; /* Main color */
    margin-bottom:400px;
    text-transform: uppercase;
    display: inline-block;
    position: relative;
    transform-style: preserve-3d;
    animation: slideIn 2s ease-out forwards;
    margin-top:10px;
}

/* Keyframes for text animation */
@keyframes slideIn {
    0% {
        transform: translateX(-100vw) scale(0.8) rotateY(45deg);
        opacity: 0;
    }
    50% {
        transform: translateX(10vw) scale(1.1) rotateY(10deg);
        opacity: 0.7;
    }
    100% {
        transform: translateX(0) scale(1) rotateY(0deg);
        opacity: 1;
    }
}

/* For text shadow or additional styling */
.carousel-text::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fff; /* Background or highlight color */
    z-index: -1;
    transform: translateX(-10px);
    filter: blur(5px);
}

</style>

 <!-- end -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5 col-md-6 wow fadeInLeft" data-wow-delay="0.1s">
                <!-- Start image -->
                <div class="bg-light rounded">
                    <img src="img/it/s2.jpg" class="img-fluid w-100 border border-5 border-primary" style="box-shadow: 10px 10px 20px; height: auto; max-height: 400px; width: 100%; object-fit: cover;" alt="Image">
                </div>
                <!-- End image -->
            </div>
            <div class="col-lg-7 col-md-6 wow fadeInRight" data-wow-delay="0.3s">
                <h5 class="sub-title pe-3">About company</h5>
                <h1 class="display-5 mb-4 water-text" style="font-size:22px!important;">SHREYSUN GLOBAL GROUP</h1>

                <p class="mb-4 text-dark" style="font-size:13px!important;">Shreysun Global Shipping Pvt Ltd.
                    (CIN: U63030UP2021PTC141179)

                    The Company Providing Total Ship and Crew Management Services for the Ship Owner’s and Manager. We ensure best quality and fully satisfaction service to our clients. Shreysun Global Shipping having Certified Certificate ISO 9001: 2015 and Compliance MLC 2006 Regulation 1.4(Issued by Euro Veritas UK-London) and Recruitment Placement Service License (RPSL) Number MUM-162118 Issued by Director Seaman’s Employment Office under DG Shipping Govt.of India.</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


        <!-- Countries We Offer Start -->
        <div class="container-fluid country overflow-hidden py-5 bg-primary">
            <div class="container">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">ABOUT THE COMPANY</h5>
                    </div>
                    <h1 class="display-5 mb-4 text-light" style="font-size:24px!important;">WELCOME TO SHREYSUN GLOBAL GROUP</h1>
                    <p class="mb-0 text-light">
                    SHREYSUN GLOBAL GROUP is a diversified conglomerate with a commitment to excellence across various industries. Our expertise spans maritime services, shipping crew management, IT solutions, construction, and maritime training. We pride ourselves on delivering top-notch solutions tailored to meet the needs of our clients worldwide

</p>
                </div>
                <div class="row g-4 text-center">
                    <!-- start -->
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/it/company_iimg.jpg" style="height:300px; width:500px;" class="img-fluid w-100  rounded" alt="Image">
                            
                                
                            </div>
                            <div class="country-flag">
                                <img src="img/it/ship/company.png" class="img-fluid rounded-circle bg-info" alt="Image">
                            </div>
                            <div class="country-name">
                                <!-- <a href="#" class="text-white"> -->
                                    <ul class="text-white">
                                TOTAL SHIP MANAGEMENT
                               

                                 </ul>
                                <!-- </a> -->
                                
                                
                                <!-- start point -->
                                 
                                

                            </div>
                        </div>
                        <h5 class="text-white">Shreysun Global Maritime LLP</h5>
                    </div>
                     <!-- end point -->
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/it/slider_img.jpg" style="height:300px; width:500px;" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/it/ship/office-building.png" class="img-fluid  bg-info rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                            <ul class="text-white">
                                IT COMPANY
                               

                                 </ul>
                            </div>
                        </div>
                        <h5 class="text-white">Shreysun Global Infotech Pvt.Ltd</h5>

                    </div>
                    <!-- end -->
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/it/cc.jpg" style="height:300px; width:500px;" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/it/ship/infra_office.png" class="img-fluid bg-info rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                            <ul class="text-white">
                                CONSTRUCTION  COMPANY

                                 </ul>
                            </div>
                        </div>
                        <h5 class="text-white">Shreysun Global Infrastructure Pvt. Ltd.</h5>

                    </div>
                    <!-- end -->
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/it/s4.jpg" style="height:300px; width:500px;" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/it/ship/tcompany.png" class="img-fluid  bg-info rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                            <ul class="text-white">
                                MARITIME CAREER DEVELOPMENT
                               

                                 </ul>
                                
                            </div>
                        </div>
                        <h5 class="text-white">Shreysun Global Maritime Training & Education</h5>

                    </div>
                    <!-- end -->
                    <div class="col-12">
                        <a class="btn btn-primary border-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Countries</a>
                    </div>
                </div>

            </div>

        </div>
        <!-- Countries We Offer End -->
        


        <!-- Counter Facts Start -->
        <div class="container-fluid counter-facts py-5" style="padding-bottom: 1px !important;">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-passport"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Global Reach</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">31</span>
                                    <h4 class="text-primary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Industry Partnerships</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">377</span>
                                    <h4 class="text-primary mb-0" style="font-weight: 600; font-size: 25px;">+</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Graduates Trained</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">4.9</span>
                                    <h4 class="text-primary mb-0" style="font-weight: 600; font-size: 25px;">K</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Placement Rate</h3>
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="counter-value" data-toggle="counter-up">98</span>
                                    <h4 class="text-primary mb-0" style="font-weight: 600; font-size: 25px;">%</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Facts End -->
         

        <!-- Services Start -->
        <div class="container-fluid service overflow-hidden ">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Our Services</h5>
                    </div>
                    <h1 class="display-5 mb-4" style="font-size:22px !important">Empowering Maritime Professionals for a Global Career</h1>
                    <p class="mb-0 text-dark">At Shreysun Global Maritime Training and Education, we offer a range of specialized services to support your journey in the maritime industry. Our services are designed to ensure you receive the best training, guidance, and opportunities to excel in your maritime career</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/images/training_program.jpeg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Maritime Training Programs</a>
                                        </div>
                                        <a class="btn bg-light text-primary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Maritime Training Programs</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4 text-light">We offer a variety of training programs that cover essential maritime skills, including GP Rating, Marine Engineering, Deck Officer Training, and more. </p>
                                            <a class="btn btn-primary border-primary rounded-pill py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/images/ships.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Career Guidance and Counseling</a>
                                        </div>
                                        <a class="btn bg-light text-primary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Career Guidance and Counseling</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4 text-light">Our dedicated career guidance team provides personalized counseling to help you choose the right career path within the maritime industry.</p>
                                            <a class="btn btn-primary border-primary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/images/training_starting.jpeg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Job Placement Assistance</a>
                                        </div>
                                        <a class="btn bg-light text-primary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Job Placement Assistance</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4 text-light">Our placement services connect you with leading companies in the maritime sector, ensuring a smooth transition from training to employment</p>
                                            <a class="btn btn-primary border-primary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/images/images.jpeg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Workshops and Seminars</a>
                                        </div>
                                        <a class="btn bg-light text-primary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Workshops and Seminars</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4 text-light">These events provide valuable insights, practical knowledge, and networking opportunities to enhance your learning experience.</p>
                                            <a class="btn btn-primary border-primary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/images/merchant-navy-images.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Simulation and Practical Training Facilities</a>
                                        </div>
                                        <a class="btn bg-light text-primary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Simulation and Practical Training Facilities</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4 text-light">This hands-on approach helps you gain the skills and confidence needed for a successful career at sea.</p>
                                            <a class="btn btn-primary border-primary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="img/images/marineclass_img.jpg" class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">Maritime Certifications and Licensing</a>
                                        </div>
                                        <a class="btn bg-light text-primary rounded-pill py-3 px-5 mb-4" href="#">Explore More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">Maritime Certifications and Licensing</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4 text-light">We provide guidance and support for obtaining the necessary certifications and licenses required for various roles in the maritime industry. </p>
                                            <a class="btn btn-primary border-primary rounded-pill text-white py-3 px-5" href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->



        <!-- Features Start -->
        <div class="container-fluid features overflow-hidden ">
            <div class="container">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Why Choose Us</h5>
                    </div>
                    <h3 class="display-8 mb-4 text-align:center;" style="font-size:22px!important;" >"Your Gateway to a Successful Maritime Career"</h3>
                    <p class="mb-0 text-dark">Join the ranks of elite maritime professionals with our world-class training programs. At Shreysun Global, we blend tradition with innovation to provide you with the best maritime education.</p>
                </div>
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fas fa-dollar-sign fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Expert Training Programs</h5>
                                <p class="mb-3 text-align:justify; text-dark">With industry-recognized courses and hands-on learning, you’re set to navigate your future with confidence."</p>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fab fa-cc-visa fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Comprehensive Support</h5>
                                <p class="mb-3 text-dark text-align:justify;">We provide personalized assistance from enrollment to job placement, ensuring a seamless journey into your maritime career.</p>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fas fa-atlas fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Proven Success</h5>
                                <p class="mb-3 text-dark text-align:justify;"> We pride ourselves on our ability to deliver results, guiding our students into successful maritime careers with confidence.</p>
                                <br/>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fas fa-users fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-3">Global Opportunities</h5>
                                <p class="mb-3 text-dark text-align:justify;">Our training prepares you for opportunities worldwide, opening doors to international roles across the maritime sector.</p>
                                <br/>
                                <a class="btn btn-secondary rounded-pill" href="#">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-primary border-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Features</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->



        <!-- Countries We Offer Start -->
        <div class="container-fluid country overflow-hidden py-5">
            <div class="container">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">COUNTRIES WE OFFER</h5>
                    </div>
                    <h1 class="display-5 mb-4">Flag State Documentation</h1>
                    <p class="mb-0 text-dark text-align:justify">Flag State Documentation refers to the official certification and registration issued by a ship's flag state, which is the country under whose laws the vessel is registered or licensed. This documentation ensures that the ship complies with the regulatory requirements of the flag state, including safety, environmental, and labor standards. It typically includes certificates such as the Certificate of Registry, Safety Management Certificate (SMC), and Document of Compliance (DOC). Flag State Documentation is crucial for a vessel's legal operation in international waters and serves as proof of the ship's nationality and adherence to international maritime conventions.

</p>
                </div>
                <div class="row g-4 text-center">
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/country-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/brazil.jpg" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                                <a href="#" class="text-white fs-4">Brazil</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/country-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/india.jpg" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                                <a href="#" class="text-white fs-4">india</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/country-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/usa.jpg" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                                <a href="#" class="text-white fs-4">New York</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="img/country-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="img/italy.jpg" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                                <a href="#" class="text-white fs-4">Italy</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-primary border-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">More Countries</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Countries We Offer End -->


        <!-- Testimonial Start -->
        <div class="container-fluid testimonial overflow-hidden pb-5">
            <div class="container ">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">OUR CLIENTS RIVIEWS</h5>
                    </div>
                    <h1 class="display-5 mb-4">What Our Clients Say</h1>
                    <p class="mb-0 text-dark text-align:justify">Our clients’ satisfaction is at the heart of everything we do. We pride ourselves on delivering exceptional maritime training and support, helping individuals achieve their career goals at sea. Here’s what some of our clients have to say about their experience with Shreysun Global Maritime Training and Education:</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow zoomInDown" data-wow-delay="0.2s">
                    <div class="testimonial-item">
                        <div class="testimonial-content p-4 mb-5">
                            <p class="fs-7 mb-0 text-dark text-align:center">The training I received was top-notch, combining practical skills with theoretical knowledge. It prepared me well for my career at sea. I am grateful to the dedicated instructors who guided me every step of the way.
                            </p>
                            <div class="d-flex justify-content-end">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle" src="img/images/man.jpg" alt="img">
                            </div>
                            <div class="my-auto">
                                <h5> Arjun Singh </h5>
                                <p class="mb-0">Deck Cadete</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content p-4 mb-5">
                            <p class="fs-7 mb-0 text-dark">Shreysun Global not only provided me with the necessary training but also helped me secure a job placement right after graduation. Their support and commitment to student success are unparalleled.
                            </p>
                            <div class="d-flex justify-content-end">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle" src="img/images/female_img.png" alt="img">
                            </div>
                            <div class="my-auto">
                                <h5>Pooja Mehta</h5>
                                <p class="mb-0"> Marine Engineer</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content p-4 mb-5">
                            <p class="fs-7 mb-0 text-dark">I appreciated the personalized approach and the real-world insights shared by the trainers. The facilities were excellent, and the training was hands-on, which made all the difference.
                            </p>
                            <div class="d-flex justify-content-end">
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <i class="fas fa-star text-secondary"></i>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="rounded-circle me-4" style="width: 100px; height: 100px;">
                                <img class="img-fluid rounded-circle" src="img/images/man.png" alt="img">
                            </div>
                            <div class="my-auto">
                                <h5>Rohit Kumar</h5>
                                <p class="mb-0">Electro-Technical Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->



         <!-- Training Start -->
         <div class="container-fluid training overflow-hidden bg-light py-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">CHECK OUR TRAINING</h5>
                    </div>
                    <h1 class="display-5 mb-4">Our Courses</h1>
                    <p class="mb-0 text-dark text-align:center">At Shreysun Global Maritime Training and Education, we are committed to delivering world-class maritime training programs that equip aspiring seafarers with the skills and knowledge needed for successful careers at sea. Our comprehensive courses are designed to meet international standards, ensuring that our students are well-prepared to face the challenges of the maritime industry. Whether you aim to work on deck, in the engine room, or in specialized roles, our training programs offer a blend of theoretical knowledge and practical experience, setting the foundation for a rewarding journey in the maritime world.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/merchant-navy-images.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h5 text-white mb-0">Duration: 6 months</a>
                                    <a href="#" class="p text-white mb-0">Eligibility: 10th standard pass with a minimum of 40% marks in English.g</a>
                                </div>
                            </div>
                            <div class="training-content bg-primary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">GP Rating Course</h4></a>
                                <p class="text-white-50">After completion, candidates can join merchant ships as General Purpose Ratings, with opportunities to advance to higher positions.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training_program.jpeg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h5 text-white mb-0">Duration: 1 year</a>
                                    <a href="#" class="p text-white mb-0">Eligibility: 12th standard pass with Physics, Chemistry, and Mathematics. age between 17 and 25 years.</a>
                                </div>
                            </div>
                            <div class="training-content bg-primary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white"> Diploma in Nautical Science (DNS)</h4></a>
                                <p class="text-white-50">Graduates can join as Deck Cadets on ships and eventually become Captains.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/navy.webp" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h5 text-white mb-0">Duration: 4 years</a>
                                    <a href="#" class="p text-white mb-0">Eligibility: 12th standard pass with Physics, Chemistry, and Mathematics; age between 17 and 25 years.</a>
                                </div>
                            </div>
                            <div class="training-content bg-primary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">Marine Engineeringg</h4></a>
                                <p class="text-white-50">Graduates start as Junior Engineers and can advance to the position of Chief Engineer.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/training-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                                <div class="training-title-name">
                                    <a href="#" class="h5 text-white mb-0">Duration: 6 months</a>
                                    <a href="#" class="p text-white mb-0">Eligibility: Minimum 10th standard pass, age between 17.5 and 25 years.</a>
                                </div>
                            </div>
                            <div class="training-content bg-primary rounded-bottom p-4">
                                <a href="#"><h4 class="text-white">Certificate Course in Maritime Catering</h4></a>
                                <p class="text-white-50"> Graduates can work as Cooks or Stewards, with career progression to roles like Chief Steward.</p>
                                <a class="btn btn-secondary rounded-pill text-white p-0" href="#">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a class="btn btn-primary border-pri rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">View More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Training End -->

        
        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden pb-5">
            <div class="container py-5">
                <div class="office pt-5">
                    <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">Crew Management</h5>
                        </div>
                        <h1 class="display-5 mb-4"></h1>
                        <p class="mb-0"></p>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-2.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Australia</h4>
                                    <a href="#" class="text-primary fs-5 mb-2"></a>
                                    <a href="#" class="text-muted fs-5 mb-2"></a>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-1.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">Canada</h4>
                                    <a href="#" class="text-primary fs-5 mb-2"></a>
                                    <a href="#" class="text-muted fs-5 mb-2"></a>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-3.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">United Kingdom</h4>
                                    <a href="#" class="text-primary fs-5 mb-2"></a>
                                    <a href="#" class="text-muted fs-5 mb-2"></a>
                                    <p class="mb-0">.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/office-4.jpg" class="img-fluid w-100 rounded" alt="">
                                </div>
                                <div class="office-content d-flex flex-column">
                                    <h4 class="mb-2">India</h4>
                                    <a href="#" class="text-secondary fs-5 mb-2"></a>
                                    <a href="#" class="text-muted fs-5 mb-2"></a>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

            <?php
             include('footer.php');
            ?>
       


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <script>
            // Params
let mainSliderSelector = '.main-slider',
    navSliderSelector = '.nav-slider',
    interleaveOffset = 0.5;

// Main Slider
let mainSliderOptions = {
      loop: true,
      speed:1000,
      autoplay:{
        delay:3000
      },
      loopAdditionalSlides: 10,
      grabCursor: true,
      watchSlidesProgress: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        init: function(){
          this.autoplay.stop();
        },
        imagesReady: function(){
          this.el.classList.remove('loading');
          this.autoplay.start();
        },
        slideChangeTransitionEnd: function(){
          let swiper = this,
              captions = swiper.el.querySelectorAll('.caption');
          for (let i = 0; i < captions.length; ++i) {
            captions[i].classList.remove('show');
          }
          swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
        },
        progress: function(){
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            let slideProgress = swiper.slides[i].progress,
                innerOffset = swiper.width * interleaveOffset,
                innerTranslate = slideProgress * innerOffset;
           
            swiper.slides[i].querySelector(".slide-bgimg").style.transform =
              "translateX(" + innerTranslate + "px)";
          }
        },
        touchStart: function() {
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function(speed) {
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-bgimg").style.transition =
              speed + "ms";
          }
        }
      }
    };
let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

// Navigation Slider
let navSliderOptions = {
      loop: true,
      loopAdditionalSlides: 10,
      speed:1000,
      spaceBetween: 5,
      slidesPerView: 5,
      centeredSlides : true,
      touchRatio: 0.2,
      slideToClickedSlide: true,
      direction: 'vertical',
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        },
        click: function(){
          mainSlider.autoplay.stop();
        }
      }
    };
let navSlider = new Swiper(navSliderSelector, navSliderOptions);

// Matching sliders
mainSlider.controller.control = navSlider;
navSlider.controller.control = mainSlider;  
        </script>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>