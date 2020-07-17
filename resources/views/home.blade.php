<!DOCTYPE html>
<html lang="en">
<head>
	<title>Restu Lomutotona Lomboe</title>
	<meta charset="UTF-8">
	<meta name="description" content="Civic - CV Resume">
	<meta name="keywords" content="resume, civic, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="https://image.shutterstock.com/image-vector/letter-cv-logo-colorful-geometric-260nw-1089897095.jpg" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ secure_asset('cv/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ secure_asset('cv/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{ secure_asset('cv/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{ secure_asset('cv/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{ secure_asset('cv/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{ secure_asset('cv/css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="home-four-style">
		<!-- Header section start -->
		{{-- <header class="header-section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="site-logo">
							<h2><a href="#">Civic</a></h2>
							<p>Enhance your online presence</p>
						</div>
					</div>
					<div class="col-md-8 text-md-right header-buttons">
						<a href="#" class="site-btn">Download CV</a>
						<a href="#" class="site-btn">Discover me</a>
					</div>
				</div>
			</div>
		</header> --}}
		<!-- Header section end -->

		<div class="container-fluid p-0">
			<div class="row m-0">
				<div class="col-xl-5 col-lg-5 p-0">
					<div class="main-left-area h-100">
						<!-- hero section -->
						<section class="intro-section">
							<figure class="hero-image">
								<img src="{{ secure_asset('cv/img/foto.jpg')}}" alt="" style="border-radius:100%;">
							</figure>
							<div class="hero-text">
								<h3 style="font-size:50px;">Restu Lomutotona Lomboe</h3>
								<p>Web Programmer</p>
							</div>
							<div class="hero-info pt-5">
								<h2>General Info</h2>
								<ul>
									<li><span>Date of Birth</span>: Jan 17, 1994</li>
									<li><span>Address</span>: Jln Thalib II, Taman Sari, Jakarta</li>
									<li><span></span>  Utara</li>
									<li><span>E-mail</span>: restulomboe0117@gmail.com</li>
									<li><span>Phone </span>: +62 822 7487 3030</li>
								</ul>
                            </div>

							<div class="hero-info pt-5">
								<h2>About Me</h2>
								<p>
                                    Hello, my name is Restu Lomutotona Lomboe, I live in West Jakarta, Taman Sari. At the moment I am undergoing a final semester of study at the PELITA NATION UNIVERSITY and will be completed in 2020 and currently working at PT. International Technology Computrade. My current job is a web developer (full developer), working on projects provided by the company and at the same time maintaining an online shop paradisestore.id. Some of the frameworks that I use in my work are the Laravel and Codeigniter frameworks.
                                </p>
							</div>
						</section>
						<!-- extra section -->
						{{-- <section class="extra-section spad">
							<div class="section-title">
								<h2>SKILL LOVES</h2>
							</div>
							<div class="row">
								<div class="col-md-6 text-center">
									<div class="fact-box trans">
										<div class="fact-content">
											<div class="circle-progress">
												<div id="progress3" class="prog-circle"></div>
												<div class="progress-info">
													<h2>JS</h2>
												</div>
												<div class="prog-title">
													<h3>Inspiration</h3>
													<p>Etiam nec odio vestibulum est.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 text-center">
									<div class="fact-box trans">
										<div class="fact-content">
											<div class="circle-progress">
												<div id="progress4" class="prog-circle"></div>
												<div class="progress-info">
													<h2>PHP</h2>
												</div>
												<div class="prog-title">
													<h3>Inspiration</h3>
													<p>Etiam nec odio vestibulum est.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section> --}}
						<!-- language skill section -->
						<section class="language-section spad">
							<div class="section-title">
								<h2>Languages</h2>
							</div>
							<ul class="language-progress">
								<li>English <div class="lan-prog" data-lanprogesss="3"></div></li>
								<li>Indonesian <div class="lan-prog" data-lanprogesss="4.5"></div></li>
							</ul>
						</section>
						<div class="social-links">
                            <a href="https://www.instagram.com/restu_nick/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.linkedin.com/in/restu-lomutotona-lomboe-758417170"><i class="fa fa-linkedin"></i></a>
							<a href="https://www.facebook.com/restu.fier"><i class="fa fa-facebook"></i></a>
							<a href="https://api.whatsapp.com/send?phone=6282274873030"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-7">
					<div class="main-right-area">
						<!-- Resume section start -->
						<section class="resume-section spad pt-0">
							<div class="section-title">
								<h2>Work Experience</h2>
							</div>
							<ul class="resume-list">
								<li>
									<h2>2019-Present</h2>
                                    <h3>PT. Computrade Technology Internation</h3>
									<h4>Web Programmer</h4>
									<p>CTi is a company engaged in it, one of which is it solution.
                                        My work here is a full stack developer and maintenance online shop paradisestore.id.The programming language that I use is php, css, html, mysql, ajax, bootstrap, Javascript,FUllrest Api and uses the Wordpress(WooCommerce), Laravel and Codeigniter framework. <br>
                                        - Integrasi Payment Gateway like Kredivo, Atome, Vospay, Doku, and<br>
                                        &nbsp; Midtrans.<br>
                                        - Integrasi Shipping like JNE, Si Cepat, J&T.<br>
                                        - Use Linux Operation for manage hosting VPS and CLoud.<br>
                                        - Make Git and Bitbacket for deploy website to hosting and cooperate with <br>
                                        &nbsp; the team.</p>
                                        <br>
                                        <ul class="restu">
                                            <p>xdc-indonesia.com (company)</p>
                                            <p>paradisestore.id (online shop)</p>
                                            <p>paradisestore.org</p>
                                            <p>Manage Intenal Sistem</p>
                                            <p>Website timeline (internal sistem)</p>
                                        </ul>
                                </li>

								<li>
									<h2>2016-2018</h2>
									<h3>PT NGK CERAMICS INDONESIA</h3>
									<h4>Operator Produksi</h4>
									<p>PT NGK Ceramics Indonesia is a Japanese PMA company located in Cikarang EJIP, Bekasi.produce HONEYCERAM, a ceramic carrier catalyst.HONEYCERAM is an important component for purification of exhaust gases. The catalyst carried on the surface of HONEYCERAM converts hazardous elements in the flue gas, such as HC, CO, and NOx, into harmless elements. HONEYCERAM has been employed by car manufacturers throughout the world and has been produced not only in Japan but also in Europe, the US and including Indonesia.</p>
								</li>
								<li>
									<h2>2014-2015</h2>
									<h3>PT MIDI UTAMA INDONESIA Tbk</h3>
									<h4>Pramuniaga</h4>
									<p>PT. Midi Utama Indonesia is a company engaged in the retail sector and was established in 2007. Alfamidi is a middle market that provides daily needs and frozen foods such as fresh meat, vegetables and fresh fruits; Alfamidi Super with the concept of "Supermarket" wants to create fast and convenient customer service and is supported by providing more diverse goods with more items so that it can meet the needs of consumers.As a fast growing company, we have a dynamic, creative and innovative corporate culture that provides opportunities for you to develop a career with us and become one of our great teams.</p>
								</li>
							</ul>
						</section>
						<!-- Resume section end -->

						<!-- Resume section start -->
						<section class="resume-section">
							<div class="section-title">
								<h2>Education</h2>
							</div>
							<ul class="resume-list">
								<li>
									<h2>UNIVERSITAS PELITA BANGSA</h2>
									<h3>BACHELOR DEGREE OF TEHNIK INFORMATIKA</h3>
									<h4>2016-2020</h4>
								</li>
								<li>
									<h2>SMKN 2 PEMATANGSIANTAR</h2>
									<h3>HIGH SCHOOL DEGREE</h3>
									<h4>2009-2012</h4>
								</li>
								<li>
									<h2>SMPN 2 DOLOK PANRIBUAN</h2>
									<h3>JUNIOR HIGH SCHOOL DEGREE</h3>
									<h4>2006-2009</h4>
								</li>
								<li>
									<h2>SDN 3 DOLOK PANRIBUAN</h2>
									<h3>ELEMENTARY SCHOOL DEGREE</h3>
									<h4>2000-2006</h4>
								</li>
							</ul>
						</section>
						<!-- Resume section end -->

                        <br>
                        <hr>
                        <br>
						<!-- Review section start -->
						{{-- <section class="review-section spad">
							<div class="section-title">
								<h2>References</h2>
							</div>
							<div class="review-slider owl-carousel">
								<div class="single-review">
									<div class="qut">“</div>
									<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
									<h3>Robert G. Smith</h3>
									<h4>Manager, Company</h4>
								</div>
								<div class="single-review">
									<div class="qut">“</div>
									<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
									<h3>Robert G. Smith</h3>
									<h4>Manager, Company</h4>
								</div>
								<div class="single-review">
									<div class="qut">“</div>
									<p>Sit amet, consectetur adipiscing elit. Sed porttitor orci ut sapien scelerisque viverra. Sed trist ique justo nec mauris efficitur, ut lacinia elit dapibus. In egestas elit in dap ibus laoreet. Duis magna libero, fermentum ut facilisis id, pulvinar eget tortor. Vestibulum pelle ntesque tincidunt lorem, vitae euismod felis porttitor sed. </p>
									<h3>Robert G. Smith</h3>
									<h4>Manager, Company</h4>
								</div>
							</div>
						</section> --}}
                        <!-- skill section start -->
                        <div class="skill-section">
							<div class="section-title">
								<h2>MY SKILLS</h2>
							</div>
					    </div>

						<div class="skill-section">
							<div class="section-title">
								<h2 style="font-size:40px;">PROGRAMMING</h2>
							</div>
							<!-- progress bars -->
							<div class="skills">
								<div class="single-progress-item">
									<div class="progress-bar-style" data-progress="85"></div>
									<p>HTML</p>
								</div>
								<div class="single-progress-item">
									<div class="progress-bar-style" data-progress="85"></div>
									<p>CSS</p>
								</div>
								<div class="single-progress-item">
									<div class="progress-bar-style" data-progress="80"></div>
									<p>PHP</p>
								</div>
								<div class="single-progress-item">
									<div class="progress-bar-style" data-progress="70"></div>
									<p>JAVASCRIPT, AJAX, JQUERY</p>
								</div>
								<div class="single-progress-item">
									<div class="progress-bar-style" data-progress="80"></div>
									<p>MYSQL, PHPMYADMIN</p>
								</div>
								<div class="single-progress-item">
									<div class="progress-bar-style" data-progress="90"></div>
									<p>BOOTSTRAP</p>
								</div>
								<div class="single-progress-item">
									<div class="progress-bar-style" data-progress="70"></div>
									<p>RESTFUL API</p>
								</div>
							</div>
						</div>
                        <!-- skill section end -->
                        <br>
                        <hr>
                        <br>
						<!-- skill section start -->
						<div class="skill-section">
							<div class="section-title">
								<h2 style="font-size:40px;">FRAMEWORK</h2>
							</div>
							<!-- progress bars -->
							<div class="skills">
								<div class="single-progress-item">
									<div class="progress-bar-style" data-progress="90"></div>
									<p>LARAVEL</p>
								</div>
								<div class="single-progress-item">
									<div class="progress-bar-style" data-progress="70"></div>
									<p>CODEIGNITER</p>
								</div>
							</div>
						</div>
                        <!-- skill section end -->
                        <br>
                        <br>
					</div>
				</div>
			</div>
		</div>
    </div>

	<!-- Footer section start -->
	<footer class="footer-section">
		<div class="container text-center">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Restu Lomutotona Lomboe
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{ secure_asset('cv/js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{ secure_asset('cv/js/bootstrap.min.js')}}"></script>
	<script src="{{ secure_asset('cv/js/owl.carousel.min.js')}}"></script>
	<script src="{{ secure_asset('cv/js/magnific-popup.min.js')}}"></script>
	<script src="{{ secure_asset('cv/js/circle-progress.min.js')}}"></script>
	<script src="{{ secure_asset('cv/js/main.js')}}"></script>
</body>
</html>
