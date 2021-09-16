<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

        @include('layouts.head')
<body>
	<button onclick="topFunction()" id="scroll-top" title="Go to top"><i class="fas fa-caret-up "></i> </button>

	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader Start -->
	<div class="preloader-outer">
		<div class="loader"></div>
	</div>
	<!-- Preloader End -->
	<!-- Wrapper Start -->
	<div id="app">
	    <div id="wt-wrapper" class="wt-wrapper wt-haslayout">
    		<div class="wt-contentwrapper">
                <div class=" d-flex bg-white shadow-sm">
                   @include('layouts.header')
                </div>
                <div class="pt-0 px-0">
                    @yield('content')
                </div>
               @include('layouts.footer')
            </div>
    	</div>
	</div>
    
<script type="text/javascript">
    function mapFunction() {
        var x = document.getElementById("map");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>
    <script type="text/javascript">
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scroll-top").style.display = "block";
    } else {
    document.getElementById("scroll-top").style.display = "none";
    }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
    <script>
    $(document).ready(function() {
    //=========================================
    //  Water Effect
    //=========================================
    
        $('.banner_water_effect').ripples({
            resolution: 256,
            dropRadius: 20,
            perturbance: 0.03,
            interactive:true,
        });
    //  Smoothscroll js
    //=========================================
        $("a").on('click', function(event) {
    
            if (this.hash !== "") {
            event.preventDefault();
    
            var hash = this.hash;
    
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function(){
    
                window.location.hash = hash;
            });
            }
        });
     });
    </script>
    <script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
    })
    <script type="text/javascript">
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("scroll-top").style.display = "block";
    } else {
    document.getElementById("scroll-top").style.display = "none";
    }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
    </script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/jquery-library.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/chosen.jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/tilt.jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/readmore.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/countTo.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/appear.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/tipso.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jRate.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    
    @yield('script')
    
</body>
</html>
