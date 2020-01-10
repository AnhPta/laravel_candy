@extends('frontend.layouts.frontend', [
    'title' => 'Login',
])

@section('main')

<div class="breadcrumb-container" style="background-image: url('cdn.shopify.com/s/files/1/0199/7497/9684/files/breadcrumb_1cd16.jpg?v=1548061627');">
    <nav class="breadcrumbs page-width breadcrumbs-empty">
        <h3 class="head-title">cart </h3>
        <a href="index.html" title="Back to the frontpage">Home</a>
        <span class="divider">&dash;</span>
        <span>Your Shopping Cart</span>
    </nav>
</div>

<div id="shopify-section-cart-template" class="shopify-section">
    <div class="page-width" data-section-id="cart-template" data-section-type="cart-template">
        <div class="empty-page-content text-center">
            <h1>Your cart</h1>
            <p class="cart--empty-message">Your cart is currently empty.</p>
            <div class="cookie-message">
                <p>Enable cookies to use the shopping cart</p>
            </div>
            <a href="{{route('frontend.index')}}" class="btn btn--has-icon-after cart__continue-btn">Continue shopping<svg aria-hidden="true" focusable="false" role="presentation" class="icon icon--wide icon-arrow-right" viewBox="0 0 20 8"><path d="M15.186.445c.865.944 1.614 1.662 2.246 2.154.631.491 1.227.857 1.787 1.098v.44a9.933 9.933 0 0 0-1.875 1.196c-.606.485-1.328 1.196-2.168 2.134h-.752c.612-1.309 1.253-2.315 1.924-3.018H.77v-.986h15.577c-.495-.632-.84-1.1-1.035-1.406-.196-.306-.486-.843-.87-1.612h.743z" fill="#000" fill-rule="evenodd"/></svg></a>
        </div>
    </div>
</div>

<div class="page-container" id="PageContainer">
   @include('frontend.layouts.footer')
</div>

@endsection
