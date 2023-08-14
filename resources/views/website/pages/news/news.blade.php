@extends('website.layout.app')

{{-- title --}}
@section('title', 'News')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> <!-- Style That Apply To All Pages Who Extended This Layout -->

@endsection

{{-- BEGIN :: News Content --}}
@section('body-content')
    <div class="home-content-container">
        <!-- yoconstructionconstructionur body page code goes here -->
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
        <h1>what news</h1>
    </div>
@endsection
{{-- END   :: News Content --}}

{{-- custom script --}}
@section('script')
    <script src="{{ asset('js/website/pages/products/product-list.js') }}"></script>

@endsection