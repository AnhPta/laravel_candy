@extends('frontend.layouts.frontend', [
    'title' => 'Register',
])

@section('main')

<div class="breadcrumb-container" style="background-image: url('cdn.shopify.com/s/files/1/0199/7497/9684/files/breadcrumb_1cd16.jpg?v=1548061627');">
    <nav class="breadcrumbs page-width breadcrumbs-empty">
        <h3 class="head-title">customers/register </h3>
        <a href="../index.html" title="Back to the frontpage">Home</a>
        <span class="divider">&dash;</span>
        <span>Create Account</span>
    </nav>
</div>

<div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
        <div class="page-width">
            <div class="grid">
                <div class="grid__item login-page">
                    <div class="form-vertical card-block">
                        <form method="post" action="{{ route('signup') }}" id="create_customer" accept-charset="UTF-8">
                            <input type="hidden" name="form_type" value="create_customer" />
                            <input type="hidden" name="utf8" value="✓" />
                            <h1 class="text-center">Create Account</h1>
                            <div class="js-address-form">
                                <label for="Full Name" class="required">Full Name</label>
                                <input type="text" name="full_name" id="full_name" value="cc"  autofocus>

                                <label for="Address" class="required">Address</label>
                                <input type="text" name="address" id="address" value="add">

                                <label for="Phone" class="required">Phone</label>
                                <input type="text" name="phone" id="phone" value="0987654321">

                                <label for="Email">Email</label>
                                <input type="email" name="email" id="email" class="" autocapitalize="off">

                                <label for="Password">Password</label>
                                <div style="position: relative;">
                                    <input type="password" name="password" id="password-field" class="">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" style="position: absolute; right: 5px; top: 10px; cursor: grabbing">
                                    </span>
                                </div>
                                <p class="text-center">
                                    <input type="submit" value="Create" class="btn">
                                </p>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('frontend.layouts.footer')
</div>

<script>
    $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>

@endsection
