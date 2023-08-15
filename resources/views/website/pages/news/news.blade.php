@extends('website.layout.app')

{{-- title --}}
@section('title', 'News')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}"> <!-- Style That Apply To All Pages Who Extended This Layout -->

@endsection

{{-- BEGIN :: News Content --}}
@section('body-content')
    <div class="news-content-container">
        <!-- yoconstructionconstructionur body page code goes here -->
        <h3>Lastest NEWS</h3>
        <div class="card-container">
            @for ($i = 0; $i < 4; $i++)
                <div class="news-card">
                    <div class="card-image">
                        <img src="{{ asset('images/137334922_4493084964.png') }}" alt="">
                    </div>
                    <div class="card-info">
                        <div class="info-title">
                            <h4>Title</h4>
                        </div>
                        <div class="info-text">
                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the
                                industry’s standard</p>
                        </div>
                        <div class="more-info">
                            <button>Read More</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
{{-- END   :: News Content --}}

{{-- custom script --}}
@section('script')
    <script src="{{ asset('js/website/pages/products/product-list.js') }}"></script>

@endsection
