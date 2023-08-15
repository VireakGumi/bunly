@extends('website.layout.app')

{{-- title --}}
@section('title', 'Contact-us')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}"> <!-- Style That Apply To All Pages Who Extended This Layout -->

@endsection

{{-- BEGIN :: Contact Content --}}
@section('body-content')
    <div class="contact-content-container">
        <!-- yoconstructionconstructionur body page code goes here -->
        <div class="contact-form">
            <form action="">
                <div class="form-title">
                    <h3>Contact Us</h3>
                </div>
                <div class="form-control">
                    <input type="text" placeholder="Name">
                </div>
                <div class="form-control">
                    <input type="email" placeholder="Email">
                </div>
                <div class="form-control">
                    <input type="text" placeholder="Message">
                </div>
                <div class="form-control">
                    <div class="btn-wrapper">
                        <button type="button">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
{{-- END   :: Contact Content --}}

{{-- custom script --}}
@section('script')
    <script src="{{ asset('js/contact.js') }}"></script>

@endsection
