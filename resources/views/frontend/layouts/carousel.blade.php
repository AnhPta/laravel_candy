    <div id="shopify-section-1523944992312" class="shopify-section index-section ishi-slider-section">
        <div class="ishislider">
            <div class="slideshow-block">
                <div id="ishislideshow-carousel" class="owl-carousel owl-theme logo-bar">
                    <div class="slideshow__item" >
                        <a href="{{route('frontend.index')}}" class="slideshow__link">
                            <img src="cdn.shopify.com/s/files/1/0199/7497/9684/files/1_d522d70f-33f5-47c9-8100-157554829e9a_2048x9e83.png?v=1547890420" alt="" class="logo-bar__image" />
                        </a>
                    </div>
                    <div class="slideshow__item" >
                        <a href="{{route('frontend.index')}}" class="slideshow__link">
                            <img src="cdn.shopify.com/s/files/1/0199/7497/9684/files/2_f842a006-ecbe-40de-9392-fe3bc821da67_2048x22fe.png?v=1547890434" alt="" class="logo-bar__image" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            jQuery(document).ready(function() {
                $('#ishislideshow-carousel').owlCarousel({
                    nav: true,
                    loop: true,
                    autoplay:true,
                    animateOut: 'fadeOut',
                    autoplayTimeout:4000,
                    navText: [
                    '<i class=\'material-icons\'></i>',
                    '<i class=\'material-icons\'></i>'
                    ],
                    items: 1,
                    itemsDesktop: false,
                    itemsDesktopSmall: false,
                    itemsTablet: false,
                    itemsMobile: false
                });
            });
        </script>
    </div>
