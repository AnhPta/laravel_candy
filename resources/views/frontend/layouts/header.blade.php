
<div class="header-nav">
    <div id="shopify-section-header-top" class="shopify-section">
        <div id="header" data-section-id="header-top" data-section-type="header-section">
            <header class="site-header" role="banner">
                <div class="nav-header">
                    <div class="page-width">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 left-nav hidden-lg-down">
                                <div id="ishioffersblock">
                                    <div class="offer-title">
                                        SPECIAL OFFERS !
                                    </div>
                                    <div class="typed"></div>
                                </div>
                                <div class="offerstitle">
                                    <a href="{{route('frontend.index')}}">
                                        <span>Flat 10% Off All Purchase</span>
                                    </a>
                                </div>
                                <div class="offerstitle">
                                    <a href="{{route('frontend.index')}}">
                                        <span>Flat 15% Off All Purchase</span>
                                    </a>
                                </div>
                                <div class="offerstitle">
                                    <a href="{{route('frontend.index')}}">
                                        <span>Flat 20% Off All Purchase</span>
                                    </a>
                                </div>
                                <div class="offerstitle">
                                    <a href="{{route('frontend.index')}}">
                                        <span>Flat 25% Off All Purchase</span>
                                    </a>
                                </div>
                            </div>
                            <div class=" _desktop_user_info user_info full-width col-md-6 com-sm-12">
                                <div class="userinfo-inner">
                                    <ul class="header-bar__module header-bar__module--list">
                                        <li class="log-in">
                                            <a href="account/login.html" id="customer_login_link">Log in</a>
                                        </li>
                                        <li class="create_account">
                                            <a href="{{ route('signup') }}" id="customer_register_link">Create account</a>
                                        </li>
                                        <li class="wishlist">
                                            <a href="pages/wishlist.html">wishlist
                                            </a>
                                        </li>
                                        <li class="checkout hidden-xs-down">
                                            <a  href="account/login5956.html">checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-top site-header-inner">
                    <div class="page-width">
                        <div class="row">
                            <div id="_desktop_search" class="site-header__search  col-md-6 com-sm-12 hidden-lg-down">
                                <div class="search-title clearfix">
                                    <span class="search-toggle"></span>
                                </div>
                                <div id="search-container-full" class="search-info">
                                    <form action="https://toytown-ishi.myshopify.com/search" method="get" class="search-header search search--focus" role="search">
                                        <input type="hidden" name="type" value="product">
                                        <input class="search-header__input search__input" type="search" name="q" placeholder="Search our catalog" aria-label="Search our catalog">
                                        <button class="search-header__submit search__submit btn--link" type="submit">
                                            <span class="search-logo"> <i class="material-icons">search</i> </span>
                                            <span class="icon__fallback-text">Search</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div id= "_desktop_cart" class="hidden-lg-down">
                                <div class="cart-display">
                                    <div class="cart-title clearfix">
                                        <div class="site-header__cart expand-more">
                                            <span class="cart-logo">
                                            </span>
                                            <span class="cart-price text-content">
                                                <span class="main-title">Shopping Cart</span>
                                                <span class="cart-count sub-title">
                                                    <span class="cart-qty"></span>
                                                    <span class="cart-items">items</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div id="cart-container" class="cart-dropdown-inner cart-dropdown">
                                        <div class="cart-container-inner" data-section-id="header-top" data-section-type="cart-template">
                                            <div class="product-list"></div>
                                            <div class="cart__footer">
                                                <div class="grid">
                                                    <div class="grid__item ">
                                                        <div>
                                                            <span class="cart__subtotal-title">Subtotal</span>
                                                            <span class="cart__subtotal"></span>
                                                        </div>
                                                        <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                                                        <div class="cart-links">
                                                            <a class="btn checkout-btn" href="account/login5956.html">checkout</a>
                                                            <a class="view-cart btn" href="{{route('frontend.cart')}}">Your cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart__empty hide">
                                                <span class="cart--empty-message">Your cart is currently empty.</span>
                                                <div class="cookie-message">
                                                    <p>Enable cookies to use the shopping cart</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="_mobile_logo"></div>
                            <div id="ishiheadercontactblock">
                                <div class="call">
                                    <div class="call-img"></div>
                                    <div class="call-text">
                                        <div class="call-title">CALL NOW</div>
                                        <div class="call-num">123 456 789 </div>
                                    </div>
                                </div>
                            </div>
                            <div id="mobile_top_menu_wrapper" class="hidden-lg-up" style="display:none;">
                                <div id="top_menu_closer" class="hidden-lg-up">
                                    <i class="material-icons"></i>
                                </div>
                                <div id="_mobile_top_menu" class="js-top-menu mobile"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-width hidden-lg-up">
                    <div class="page-width">
                        <div class="row">
                            <div class="mobile-width-left">
                                <div id="menu-icon" class="menu-icon hidden-lg-up">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="mobile-width-right">
                                <div id= "_mobile_cart"></div>
                                <div id= "_mobile_search"></div>
                                <div id= "_mobile_link_menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
      var list = new Array();
      $('.offerstitle').each(function(i, obj) {
        list.push($(this).html());
    });

      var typed = new Typed('.typed', {
        strings: list,
        typeSpeed: 70,
        backSpeed: 50,
        loop: true,
        contentType: 'html',
        showCursor: false,
    });
  });
</script>
