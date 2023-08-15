@extends('website.layout.app')

{{-- title --}}
@section('title', 'Home')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"> <!-- Style That Apply To All Pages Who Extended This Layout -->

@endsection

{{-- BEGIN :: Home Content --}}
@section('body-content')
    <div class="home-content-container">
        <!-- your body page code goes here -->

        <div class="home-content-row">
            <div class="slide-show">
                <img src="{{ asset('images/106507120_3009512612.png') }}" alt="">
            </div>
        </div>
        <div class="home-content-row">
            <div class="home-content-text">
                <div class="title">
                    <p>Welcome to Borey bunly</p>
                </div>
                <div class="text">
                    <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
        <div class="home-content-row">
            <div class="home-content-project-container">
                <div class="home-content-our-project">
                    <div class="title">
                        <p>OUR PROJECT</p>
                    </div>
                    <div class="text">
                        <p>This tool can be useful for games like Pictionary or MadLibs. Since the words are random, this
                            helps
                            to keep a game like Pictionary fair for all those playing.</p>
                    </div>
                    <div class="project-images">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="images-wrapper">
                                <a href="##">
                                    <img src="{{ asset('images/106176592_3008767946.png') }}" alt="">
                                </a>
                                <i class="fa fa-eye"></i>
                            </div>
                        @endfor
                    </div>
                    <div class="more-info">
                        <button>See More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content-row">
            <div class="about-us">
                <div class="image">
                    <img src="{{ asset('images/107824494_3059447274.png') }}" alt="">
                </div>
                <div class="info-about">
                    <div class="text-about-us">
                        <div class="title">
                            <p>ABOUT US</p>
                        </div>
                        <div class="text">
                            <p>
                                is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry’s standard dummy text ever since the 1500s, when
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-content-row">
            <div class="home-content-news">
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
                <div class="more-info">
                    <button>See More</button>
                </div>
            </div>
        </div>
        <div class="home-content-row">
            <div class="contact-form">
                <form action="">
                    <div class="form-title">
                        <h4>Contact Us</h4>
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
                            <button type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    {{-- END   :: Home Content --}}

    {{-- custom script --}}
    @section('script')
        <script src="{{ asset('js/home.js') }}"></script>

    @endsection
