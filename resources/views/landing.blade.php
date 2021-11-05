<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="Datawarehouse slicing project">
	    <meta name="author" content="M. Ridwan Zalbina">
		<title></title>
	    <link
	    rel="stylesheet"
	    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
	    />
		<link rel="stylesheet" href="{{ url('css/styles.css') }}">
	</head>
<body>
	<header class="header">
		<div class="header__wrapper">
			<nav class="navmain navbar navbar-expand-lg navbar-light bg-light">
				<div class="container navmain__container">
					<a class="navbar-brand navmain__brand" href="#">
						<img src="{{ url('images/logo.svg') }}">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 navmain__list">
						<li class="nav-item">
							<a class="nav-link active" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Helps</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('/en/blog')}}">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('login') }}">Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('register') }}">Sign Up</a>
						</li>
					</ul>
					<span class="navbar-text navmain__cta">
						Request demo
						<span>
							<img src="{{ url('images/arrow-main.png') }}">
						</span>
					</span>
					</div>
				</div>
			</nav>
		</div>
	</header>	<section class="main__wrapper">
	  <section class="homebanner">
	    <div class="container">
	      <div class="row">
	        <div class="col col-12 col-md-5 col-lg-5 order-2 order-md-1">
	          <div class="homebanner__left">
	            <div class="homebanner__left--headline">
	              <h1>
	                Save your data storage here.
	              </h1>
	            </div>
	            <div class="homebanner__left--text">
	              <p>
	                Data Warehouse is a data storage area that has been tested for
	                security, so you can store your data here safely but not be
	                afraid of being stolen by others.
	              </p>
	            </div>
	            <div class="homebanner__left--cta">
	              <button class="button button__primary">Learn more</button>
	            </div>
	          </div>
	        </div>
	        <div class="col col-12 col-md-7 col-lg-7 order-1  order-md-2">
	          <div class="homebanner__right">
	            <img src="{{ url('images/banner.jpg') }}" />
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
	
	  <section class="about">
	    <div class="container">
	      <div class="row">
	        <div class="col-12 col-md-4">
	          <img class="about__img" src="{{ url('images/about.png') }}" />
	        </div>
	        <div class="col-12 col-md-8">
	          <div class="about__content">
	            <h2>
	              We are a high-level data storage bank
	            </h2>
	            <p>
	              The place to store various data that you can access at any time
	              through the internet and where you can carry it. This very
	              flexible storage area has a high level of security. To enter into
	              your own data you must enter the password that you created when
	              you registered in this Data Warehouse.
	            </p>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
	
	  <!-- Features -->
	  <section class="features">
	    <div class="container">
	      <div class="row">
	        <div class="col col-12 col-md-12 col-lg-12">
	          <div class="features__wrapper">
	            <div class="features__header">
	              <h1>Features</h1>
	              <p>Some of the features and advantages that we provide for those
	                of you who store data in this Data Warehouse.</p>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col col-12 col-md-6 col-lg-6">
	          <div class="features__item">
	            <div class="features__item--background">
	              <img src="{{ url('images/features/background1.png') }}" />
	            </div>
	            <div class="row">
	              <div class="col col-12 col-md-5">
	                <div class="features__item--left">
	                  <img src="{{ url('images/features/image1.png ') }}" />
	                </div>
	              </div>
	              <div class="col col-12 col-md-7">
	                <div class="features__item--right">
	                  <h3>Search Data</h3>
	                  <p>Don’t worry if your data is very large, the Data Warehoue
	                    provides a search engine, which is useful for making it
	                    easier to find data effectively saving time.</p>
	                  <div class="features__item--right-cta">
	                    <span>
	                      Learn More
	                    </span>
	                    <i>
	                      <img src="images/icons/arrow.svg " />
	                    </i>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	
	        <!-- 2 -->
	        <div class="col col-12 col-md-6 col-lg-6">
	          <div class="features__item">
	            <div class="features__item--background">
	              <img src="images/features/background2.png" />
	            </div>
	            <div class="row">
	              <div class="col col-12 col-md-5">
	                <div class="features__item--left">
	                  <img src="images/features/image2.png" />
	                </div>
	              </div>
	              <div class="col col-12 col-md-7">
	                <div class="features__item--right">
	                  <h3>24 Hours Access</h3>
	                  <p>Access is given 24 hours a full morning to night and meet
	                    again in the morning, giving you comfort when you need data
	                    when urgent.</p>
	                  <div class="features__item--right-cta">
	                    <span>
	                      Learn More
	                    </span>
	                    <i>
	                      <img src="{{ url('images/icons/arrow.svg') }}" />
	                    </i>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	
	        <!-- 3 -->
	        <div class="col col-12 col-md-6 col-lg-6">
	          <div class="features__item">
	            <div class="features__item--background">
	              <img src="{{ url('images/features/background3.png ') }} " />
	            </div>
	            <div class="row">
	              <div class="col col-12 col-md-5">
	                <div class="features__item--left">
	                  <img src="{{ url('images/features/image3.png') }}" />
	                </div>
	              </div>
	              <div class="col col-12 col-md-7">
	                <div class="features__item--right">
	                  <h3>Print Out</h3>
	                  <p>Print out service gives you convenience if someday you need
	                    print data, just edit it all and just print it.</p>
	                  <div class="features__item--right-cta">
	                    <span>
	                      Learn More
	                    </span>
	                    <i>
	                      <img src="{{ url('images/icons/arrow.svg') }}" />
	                    </i>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="col col-12 col-md-6 col-lg-6">
	          <div class="features__item">
	            <div class="features__item--background">
	              <img src="{{ url('images/features/background4.png') }}" />
	            </div>
	            <div class="row">
	              <div class="col col-12 col-md-5">
	                <div class="features__item--left">
	                  <img src="{{ url('images/features/image4.png') }}" />
	                </div>
	              </div>
	              <div class="col col-12 col-md-7">
	                <div class="features__item--right">
	                  <h3>Security Code</h3>
	                  <p>Data Security is one of our best facilities. Allows for
	                    your files to be safer. The file can be secured with a code
	                    or password that you created, so only you can open the file.</p>
	                  <div class="features__item--right-cta">
	                    <span>
	                      Learn More
	                    </span>
	                    <i>
	                      <img src="{{ url('images/icons/arrow.svg') }}" />
	                    </i>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- End Features -->
	
	  <!-- Features -->
	  <section class="slider">
	    <div class="container">
	      <div class="row">
	        <div class="col col-12 col-md-12">
	          <div class="slider-wrapper">
	            <h2>Testimonials</h2>
	          </div>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-12 col-md-12">
	          <div class="swiper">
	            <div class="swiper-wrapper">
	              <div class="swiper-slide">
	                <div class="slider__container">
	                  <div class="slider__content">
	                    <div class="row">
	                      <div class="col col-12 col-md-3">
	                        <img src="{{ url('images/slider/user1.png') }}" />
	                      </div>
	                      <div class="col col-12 col-md-9">
	                        <h4 class="mt-2">John Fang</h4>
	                        <p class="slider__webinfo">wordfang.com</p>
	                        <p class="slider__text mt-4">Suspendisse ultrices at
	                          diam lectus nullam. Nisl, sagittis viverra enim erat
	                          tortor ultricies massa turpis. Arcu pulvinar aenean
	                          nam laoreet nulla.</p>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="swiper-slide">
	                <div class="slider__container">
	                  <div class="slider__content">
	                    <div class="row">
	                      <div class="col col-12 col-md-3">
	                        <img src="{{ url('images/slider/user2.png')}}	" />
	                      </div>
	                      <div class="col col-12 col-md-9">
	                        <h4>Jeny Dae</h4>
	                        <p class="slider__webinfo">UX Engineer</p>
	                        <p class="slider__text mt-4">Suspendisse ultrices at
	                          diam lectus nullam. Nisl, sagittis viverra enim erat
	                          tortor ultricies massa turpis. Arcu pulvinar aenean
	                          nam laoreet nulla.</p>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="swiper-slide">
	                <div class="slider__container">
	                  <div class="slider__content">
	                    <div class="row">
	                      <div class="col col-12 col-md-3">
	                        <img src="images/slider/user1.png" />
	                      </div>
	                      <div class="col col-12 col-md-9">
	                        <h4>Jonathan Doe</h4>
	                        <p class="slider__webinfo">UI Designer</p>
	                        <p class="slider__text mt-4">Suspendisse ultrices at
	                          diam lectus nullam. Nisl, sagittis viverra enim erat
	                          tortor ultricies massa turpis. Arcu pulvinar aenean
	                          nam laoreet nulla.</p>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	          <div
	            class="swiper-pagination"
	          ></div>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- End Slider -->
	
	  <!-- Footer -->
	  <section class="footers">
	    <div class="container">
	      <div class="row">
	        <div class="col col-md-3 col-12 mb-4">
	          <div>
	            <h2>Try it for free</h2>
	            <p>Get limited 1 week free try our features !</p>
	          </div>
	        </div>
	        <div class="col col-md-9 col-12 mb-4">
	          <div class="footers__cta float-right">
	              <button class="button button__primary">Learn more</button>
	              <button n class="button button__default">Request Demo
	                <span class="ml-2">
	                  <img src="images/arrow-main.png" />
	                </span>
	              </button>
	          </div>
	        </div>
	      </div>
	      <div class="row mt-5">
	        <div class="col col-12 col-md-4 mb-4">
	          <div class="footers__brand" href="#">
	            <img src="images/logo.svg" />
	            <span>Datawarehouse</span>
	          </div>
	          <div class="footers__address">
	            <p>Warehouse Society, 234
	            </p>
	            <p>Bahagia Ave Street PRBW 29281</p>
	          </div>
	           <div class="footers__contact">
	            <p>info@warehouse.project<br/>1-232-3434 (Main)
	            </p>
	          </div>
	        </div>
	        <div class="col col-6 col-md-3 mb-4">
	          <div class="footers__menu"> 
	            <h6>About</h6>
	            <ul>
	              <li>Profile</li>
	              <li>Features</li>
	              <li>Career</li>
	              <li>DW News</li>
	            </ul>
	          </div>
	        </div>
	        <div class="col col-6 col-md-3 mb-4">
	          <div class="footers__menu"> 
	            <h6>About</h6>
	            <ul>
	              <li>Support</li>
	              <li>Sign Up </li>
	              <li>Guides</li>
	              <li>Reports</li>
	              <li>Q&A</li>
	            </ul>
	          </div>
	        </div>
	         <div class="col col-12 col-md-2 mb-4">
	          <div class="footers__menu"> 
	            <h6>Socials</h6>
	            <div class="socials">
	              <a href="#">
	                <img alt="Facebook" src="images/icons/f.svg">
	              </a>
	              <a href="#">
	                <img alt="Twitter" src="images/icons/t.svg">
	              </a>
	              <a href="#">
	                <img alt="Instagram"  src="images/icons/i.svg">
	              </a>
	            </div>
	            </ul>
	          </div>
	        </div>  
	      </div>
	    </div>
	  </section>
	  <!-- End Footer -->
	
	  <section class="footmark">
	    <div class="container">
	      <div class="row">
	        <div class="col col-12 col-md-6">
	          <div class="footmark__left">
	              <p>
	                © Datawarehouse™, 2020. All rights reserved. <br/>
	                Company Registration Number: 21479524.
	              </p>
	          </div>
	        </div>
	         <div class="col col-12 col-md-6">
	          <div class="footmark__right">
	              <i>
	                <img src="images/icons/chat.svg">
	              </i>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
	
	
	</section>	<footer>
			<script src="js/vendor/ajquery.js"></script>
			<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<script src="js/script.js"></script>
	</footer>
</body>
</html>
