@extends('frontend.layouts.frontend', [
    'title' => 'Home',
])

@section('main')

<div class="page-container" id="PageContainer">
   @include('frontend.layouts.content')
   @include('frontend.layouts.footer')
</div>

@endsection
