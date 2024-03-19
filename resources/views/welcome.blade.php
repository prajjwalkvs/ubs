<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Unbound Byte Solution Pvt. Ltd.">
	
	<!--Title-->
    <title>Unbound Byte Solution</title>
	
	<!--Seo Tags-->
	<meta name="description" content="Comming Soon Page" />
	<meta name="keywords" content="Your meta keywords, here"/>
	<meta name="robots" content="index, follow"> 

	<!--Favicon-->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	
	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" href="assets/fonts/font-awesome.css" >
	
	<!--General Style-->
	<link rel="stylesheet" href="{{asset('public/assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/assets/css/trackpad-scroll-emulator.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('public/assets/css/vegas.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('public/assets/css/mailform.css')}}" type="text/css">

</head>

<body>

<!-- Content -->	
<div id="outer-wrapper" class="animate translate-z-in">
    <div id="inner-wrapper">
        <div id="table-wrapper">
            <div class="container center">
                <div id="row-content">
                    <div id="content-wrapper">
                        <div id="content" class="animate translate-z-in animation-time-2s delay-1-5s">
						  {{-- <header><img src="assets/img/logo.png" height="40px" class="animate animate fade-in animation-time-3s" alt=""></header> --}}
                            <h1>Welcome!</h1>
							<h2>We're working on our new website! We will be ready in:</h2>
                            <div class="center count-down animate small" data-countdown-year="2024" data-countdown-month="3" data-countdown-day="31"></div>
                        </div>
                    </div>
                </div>
                <div id="row-footer">
                    <footer>
                        
                    </footer>
                </div>
            </div>
        </div>

		<!-- Background -->
		<div class="background-wrapper overlay">
			 <canvas id="myCanvas" class="opacity-80"></canvas>
		</div>	
    </div>
</div>

<!-- Subscribe -->
<div class="modal fade" id="modal-subscribe">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 id="modal-subscribe-label">Subscribe</h2>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
				et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
				aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
				dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="modal-body">
                   <div id="subscribe" class="form-wrap">
						<form action="http://artsound.site/html/molnia/html/dark/subscribe.php" method="post" id="subscribe-form">
							<p class="form-field">
								<input type="text" name="subscribe_email" id="subscribe_email" value="" placeholder="Your email" />
							</p>
							<p class="form-submit">
								<input type="submit" name="subscribe_submit" id="subscribe_submit" value="Send"/>
							</p>
						</form>
					</div>
            </div>
        </div>
    </div>
</div>

<!--Side Panel About-->
<div class="side-panel" id="about-us">
    <div class="close-panel right right"><i class="fa fa-times"></i></div>
    <div class="wrapper">
        <div class="tse-scrollable">
            <div class="tse-content">
                <div class="wrapper">
                    <div class="container center">
                        
						<!--Content-->
						<h2>About Us</h2>
                        <section>
                            <h3>About Company</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
								et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
								aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
								dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
								et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
								aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
								dolore eu fugiat nulla pariatur.
                            </p>
                        </section>
						
						<!--Content-->
						<h2>PORTFOLIO</h2>
                        <section>
						<h3>Photo</h3>
							<div class="gallery">
                                <div class="row">
									
									<!--Photo1-->
                                    <div class="col-md-6 col-sm-6">
                                        <a href="assets/img/gallery-1.jpg" class="gallery-item image-popup">
											 <div class="description">
                                                <figure>
                                                    <h4>Loren Ipsum</h4>
                                                    <div class="meta">
                                                        <figure>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</figure>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="image"><div class="bg-transfer"><img src="assets/img/gallery-1.jpg" alt=""></div></div>
                                        </a>
                                    </div>
									
									<!--Photo2-->
                                    <div class="col-md-6 col-sm-6">
                                        <a href="assets/img/gallery-2.jpg" class="gallery-item image-popup">
                                            <div class="description">
                                                <figure>
                                                    <h4>Loren Ipsum</h4>
                                                    <div class="meta">
                                                        <figure>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</figure>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="image"><div class="bg-transfer"><img src="assets/img/gallery-2.jpg" alt=""></div></div>
                                        </a>
                                    </div>
									
									<!--Photo3-->
                                    <div class="col-md-6 col-sm-6">
                                        <a href="assets/img/gallery-3.jpg" class="gallery-item image-popup">
											 <div class="description">
                                                <figure>
                                                    <h4>Loren Ipsum</h4>
                                                    <div class="meta">
                                                        <figure>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</figure>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="image"><div class="bg-transfer"><img src="assets/img/gallery-3.jpg" alt=""></div></div>
                                        </a>
                                    </div>
									
									<!--Photo4-->
                                    <div class="col-md-6 col-sm-6">
                                        <a href="assets/img/gallery-4.jpg" class="gallery-item image-popup">
                                            <div class="description">
                                                <figure>
                                                    <h4>Loren Ipsum</h4>
                                                    <div class="meta">
                                                        <figure>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</figure>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="image"><div class="bg-transfer"><img src="assets/img/gallery-4.jpg" alt=""></div></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
						</section>
						<section>
							<h3>Video</h3>
                            <div class="gallery">
                                <div class="row">
									<!--Video Youtube-->
                                    <div class="col-md-6 col-sm-6">
                                        <a href="https://www.youtube.com/watch?v=LV3cjaA7NtE" class="gallery-item video-popup">
											 <div class="description">
                                                <figure>
													<i class="fa fa-youtube"></i>
                                                    <div class="meta">
                                                        <figure>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</figure>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="image"><div class="bg-transfer"><img src="assets/img/youtube.jpg" alt=""></div></div>
                                        </a>
                                    </div>

									<!--Video Vimeo-->
                                    <div class="col-md-6 col-sm-6">
                                        <a href="https://vimeo.com/99275308" class="gallery-item video-popup">
                                            <div class="description">
                                                <figure>
                                                    <i class="fa fa-vimeo"></i>
                                                    <div class="meta">
                                                        <figure>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</figure>
                                                    </div>
                                                </figure>
                                            </div>
                                            <div class="image"><div class="bg-transfer"><img src="assets/img/vimeo.webp" alt=""></div></div>
                                        </a>
                                    </div>
								</div>	
                            </div>
						</section>
						
						<section>
							<!--Team-->
                            <h2>Our Team</h2>
							<p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
								et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
								aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
								dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.
                            </p>
                            <div class="row">
							
								<!--Member1-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="person has-divider">
                                        <div class="image"><div class="bg-transfer"><img src="assets/img/team-1.jpg" alt=""></div></div>
										<h4>Julien Miro</h4>
                                        <figure>Software Developer</figure>
                                        <div class="social center">
											<a href="#"><span class="fa fa-facebook" title="Facebook"></span></a>
											<a href="#"><span class="fa fa-twitter" title="Twitter"></span></a>
											<a href="#"><span class="fa fa-instagram" title="Instagram"></span></a>
											<a href="#"><span class="fa fa-google-plus" title="Google Plus"></span></a>
                                        </div>
                                    </div>
                                </div>
								
								<!--Member2-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="person has-divider">
                                        <div class="image"><div class="bg-transfer"><img src="assets/img/team-2.jpg" alt=""></div></div>
                                        <h4>Joan Williams</h4>
                                        <figure>Support Operator</figure>
                                        <div class="social center">
											<a href="#"><span class="fa fa-facebook" title="Facebook"></span></a>
											<a href="#"><span class="fa fa-twitter" title="Twitter"></span></a>
											<a href="#"><span class="fa fa-instagram" title="Instagram"></span></a>
											<a href="#"><span class="fa fa-google-plus" title="Google Plus"></span></a>
                                        </div>
                                    </div>
                                </div>
								
								<!--Member3-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="person">
                                        <div class="image"><div class="bg-transfer"><img src="assets/img/team-3.jpg" alt=""></div></div>
                                        <h4>Benedict Smith</h4>
                                        <figure>Sales Manager</figure>
                                       <div class="social center">
											<a href="#"><span class="fa fa-facebook" title="Facebook"></span></a>
											<a href="#"><span class="fa fa-twitter" title="Twitter"></span></a>
											<a href="#"><span class="fa fa-instagram" title="Instagram"></span></a>
											<a href="#"><span class="fa fa-google-plus" title="Google Plus"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Side Panel Contacts-->
<div class="side-panel" id="contact">
    <div class="close-panel"><i class="fa fa-times"></i></div>
    <div class="wrapper">
        <div class="tse-scrollable">
            <div class="tse-content">
                <div class="wrapper">
                    <div class="container center">
                       <section>
						<!--Content-->
						<h2>CONTACT US</h2>
                        
						<!--Mail Form-->
						
							<p>Want to say hello? Want to know more about us? Drop us an email and we will get back to you as soon as we can.</p>
                            <form class='mailform' method="post" action="http://artsound.site/html/molnia/html/dark/bat/rd-mailform.php"> 
								<input type="hidden" name="form-type" value="contact"/> 
									<fieldset>
										<div class="row">
											<div class="col-md-6 col-sm-6"> 
												<label> 
													<input type="text" name="name" placeholder="Your Name" required> 
												</label> 
											</div>
											<div class="col-md-6 col-sm-6">
												<label> 
													<input type="text" name="email" placeholder="Your E-mail" required> 
												</label>
											</div> 
										
										<div class="col-md-12">
												<label> 
													<textarea name="message" placeholder="Your Message" required></textarea> 
												</label> 
										</div>		
										<div class="mfControls"> 
												<button class="button animate" type="submit">Send My Message</button> 
										</div> 
									</div>	
									</fieldset> 
							</form>
                        </section>
						
						<section>
						<h2>GET IN TOUCH</h2>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <h3><i class="fa fa-map-marker"></i> Address</h3>
                                    <address>
                                        220020 Belarus, Minsk, Pobeditelei ave. 24
                                    </address>
                                </div>
								 <div class="col-md-4 col-sm-4">
                                    <h3><i class="fa fa-phone"></i> Phone</h3>
                                    <address>
                                       +1 384-384-3843<br>
									   +1 384-385-3853
                                    </address>
                                </div>
								 <div class="col-md-4 col-sm-4">
                                    <h3><i class="fa fa-envelope-o"></i> E-mail</h3>
                                    <address>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </address>
                                </div>
                            </div>
                        </section>
                        
						<!--Google Map-->
						<section>
                            <h3>Map</h3>
                            <div class="map" id="map-contact"></div>
                        </section> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="backdrop"></div>

<!--Java Scripts-->
<script type="text/javascript" src="{{asset('public/assets/js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/jquery.plugin.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/custom.js')}}"></script>
<script type="text/javascript" src="{{asset('public/assets/js/matrix.js')}}"></script>

<!--Google Map API KEY-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw-pWyCA_QVdNdaTMcfq5CI8tHCghnYBI&amp;callback"></script>
<script type="text/javascript">
    var latitude = 53.9339419;
    var longitude = 27.5048208;
    var markerImage = "assets/img/map-marker-w.png";
    var mapTheme = "dark";
    var mapElement = "map-contact";
    google.maps.event.addDomListener(window, 'load', simpleMap(latitude, longitude, markerImage, mapTheme, mapElement));
</script>

<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter43242164 = new Ya.Metrika({
                    id:43242164,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "../../../../../mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43242164" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

		
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15810441-7', 'auto');
  ga('send', 'pageview');

</script>

<script>
    // Function to start the countdown timer
    function startCountdown() {
      const countdownElement = document.querySelector('.count-down');
      const targetDate = new Date(
        parseInt(countdownElement.dataset.countdownYear),
        parseInt(countdownElement.dataset.countdownMonth) - 1, // Months are zero-based
        parseInt(countdownElement.dataset.countdownDay)
      );
  
      function updateCountdown() {
        const now = new Date().getTime();
        const distance = targetDate - now;
  
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
        countdownElement.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
  
        if (distance < 0) {
          clearInterval(countdownInterval);
          countdownElement.textContent = 'EXPIRED';
        }
      }
  
      updateCountdown(); // Update immediately to avoid initial delay
  
      const countdownInterval = setInterval(updateCountdown(), 1000);
    }
  
    // Start the countdown when the document is ready
    document.addEventListener('DOMContentLoaded', startCountdown);
  </script>
</body>
