@extends('layouts.main')

@section('title', 'Banda Essence')

@section('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
@endsection

@section('content')
<main>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                Banda Essence
            </a>

{{--            <a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>--}}

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_2">Sobre</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_3">Integrantes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_4">Agenda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#section_6">Contato</a>
                    </li>
                </ul>

{{--                <a href="ticket.html" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>--}}
            </div>
        </div>
    </nav>


    <section class="hero-section" id="section_1">
        <div class="section-overlay"></div>

        <div class="container d-flex justify-content-center align-items-center">
            <div class="row">

                <div class="col-12 mt-auto mb-5 text-center">
                    <small>Banda Essence Apresenta</small>

                    <h1 class="text-white mb-5">#EmoTour 2024</h1>

                    <a class="btn custom-btn smoothscroll" href="#section_2">Bora lá!</a>
                </div>

                <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                    <div class="date-wrap">
                        <h5 class="text-white">
                            <i class="custom-icon bi-geo-alt me-2"></i>
                            De Londrina - PR
                        </h5>
                    </div>

                    <div class="location-wrap mx-auto py-3 py-lg-0">
                        <h5 class="text-white">
{{--                            <i class="custom-icon bi-geo-alt me-2"></i>--}}
{{--                            De Londrina - PR--}}
                        </h5>
                    </div>

                    <div class="social-share">
                        <ul class="social-icon d-flex align-items-center justify-content-center">
                            <span class="text-white me-3">Compartilhe:</span>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link">
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-wrap">
            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                <source src="{{ asset('video/pexels-2022395.mp4') }}" type="video/mp4">
                Seu navegador não suporta este video.
            </video>

        </div>
    </section>


    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                    <div class="services-info">
                        <h2 class="text-white mb-4">Sobre a banda</h2>

                        <p class="text-white">A Banda Essence traz influências do icônico cenário rock dos anos 2000
                            em suas apresentações intituladas "EMOTOUR".</p>
                        <p class="text-white">A banda levou seus trabalhos para outras cidades como Maringá, Arapongas,
                        Apucarana, Rolândia, Ourinhos, além de ter realizado shows de forma solo em festivais, acumulando uma grande base de fãs.</p>

                        <p class="text-white">Com influências de grandes nomes como Evanescence, Linkin Park, Green Day, Avril Lavigne,
                            Pitty, CPM 22 e segue a linha do Pop-Punk ao Nu Metal, contando com 2 horas ininterruptas de show e um repertório
                            de grandes hits, sendo reproduzidos de forma única e irreverente para quem consome!</p>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="about-text-wrap">
                        <img src="{{ asset('images/pexels-alexander-suhorucov-6457579.jpg') }}" class="about-image img-fluid">

{{--                        <div class="about-text-info d-flex">--}}
{{--                            <div class="d-flex">--}}
{{--                                <i class="about-text-icon bi-person"></i>--}}
{{--                            </div>--}}


{{--                            <div class="ms-4">--}}
{{--                                <h3>a happy moment</h3>--}}

{{--                                <p class="mb-0">your amazing festival experience with us</p>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="artists-section section-padding" id="section_3">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-12 text-center">
                    <h2 class="mb-4 font-white">Integrantes</h2>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('images/artists/sabrina_1.jpg') }}"
                                 class="artists-image img-fluid">

                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Nome:</strong>
                                Sabrina Souza
                            </p>

                            <p>
                                <strong>Posição:</strong>
                                Vocalista
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Instagram:</strong>
                                <a href="#">Sabrina</a>
                            </p>
                        </div>
                    </div>
                    <div class="artists-thumb">
                        <div class="artists-image-wrap">
                            <img src="{{ asset('images/artists/Jesus_1.jpg') }}"
                                 class="artists-image img-fluid">
                        </div>

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Rihana
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                Feb 20, 1988
                            </p>

                            <p>
                                <strong>Music:</strong>
                                Country
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Rihana Official</a>
                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-lg-5 col-12">
                    <div class="artists-thumb">
                        <img src="images/artists/int_3.jpg"
                             class="artists-image img-fluid">

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Bruno Bros
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                October 8, 1985
                            </p>

                            <p>
                                <strong>Music:</strong>
                                Pop
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Bruno Official</a>
                            </p>
                        </div>
                    </div>

                    <div class="artists-thumb">
                        <img src="images/artists/int_2.jpg"
                             class="artists-image img-fluid">

                        <div class="artists-hover">
                            <p>
                                <strong>Name:</strong>
                                Bruno Bros
                            </p>

                            <p>
                                <strong>Birthdate:</strong>
                                October 8, 1985
                            </p>

                            <p>
                                <strong>Music:</strong>
                                Pop
                            </p>

                            <hr>

                            <p class="mb-0">
                                <strong>Youtube Channel:</strong>
                                <a href="#">Bruno Official</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="schedule-section section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="text-white mb-4">Agenda</h2>

                    <div class="table-responsive">
                        <table class="schedule-table table table-dark">
                            <thead>

                            <tr>
                                <th scope="col">Data</th>

                                <th scope="col">Evento</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <th scope="row">05/01/2023</th>

                                <td class="table-background-image-wrap rock-background-image">
                                    <h3>Quintos dos Infernos</h3>

                                    <p class="mb-2">21:00</p>

                                    <p class="mb-2">Rua taltaltal, 789. Londrina - PR</p>

                                    <a href="#" style="color: #5183d5">Google Maps</a>

                                    <div class="section-overlay"></div>
                                </td>
                            </tr>

                            <tr>
                                <th style="background-color: #F3DCD4; color: #1a1e21" scope="row">08/01/2023</th>

                                <td class="table-background-image-wrap rock-background-image" style="background-color: #F3DCD4">
                                    <h3>Bar Cativeiro</h3>

                                    <p class="mb-2"><strong>20:00</strong></p>

                                    <p class="mb-2">Rua taltaltal, 789. Londrina - PR</p>

                                    <a href="#" style="color: #5183d5">Google Maps</a>

                                    <div class="section-overlay"></div>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">11/01/2023</th>

                                <td class="table-background-image-wrap rock-background-image">
                                    <h3>Barbearia</h3>

                                    <p class="mb-2">22:00</p>

                                    <p class="mb-2">Rua taltaltal, 789. Londrina - PR</p>

                                    <a href="#" style="color: #5183d5">Google Maps</a>

                                    <div class="section-overlay"></div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="text-center mb-4 text-white">Contrate a Banda</h2>

                    <nav class="d-flex justify-content-center">
                        <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab"
                             role="tablist">
                            <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactForm" type="button" role="tab"
                                    aria-controls="nav-ContactForm" aria-selected="false">
                                <h5 class="text-black-50">Formulàrio de Contato</h5>
                            </button>

                            <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ContactMap" type="button" role="tab"
                                    aria-controls="nav-ContactMap" aria-selected="false">
                                <h5 class="text-black-50">Google Maps</h5>
                            </button>
                        </div>
                    </nav>

                    <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel"
                             aria-labelledby="nav-ContactForm-tab">
                            <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post"
                                  role="form">
                                <div class="contact-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="contact-name" id="contact-name"
                                                   class="form-control" placeholder="Nome" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="contact-email" id="contact-email"
                                                   pattern="[^ @]*@[^ @]*" class="form-control"
                                                   placeholder="Email" required>
                                        </div>
                                    </div>

                                    <input type="text" name="contact-company" id="contact-company"
                                           class="form-control" placeholder="Local evento" required>

                                    <textarea name="contact-message" rows="3" class="form-control"
                                              id="contact-message" placeholder="Mensagem"></textarea>

                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Enviar mensagem</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel"
                             aria-labelledby="nav-ContactMap-tab">
                            <iframe class="google-map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29974.469402870927!2d120.94861466021855!3d14.106066818082482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd777b1ab54c8f%3A0x6ecc514451ce2be8!2sTagaytay%2C%20Cavite%2C%20Philippines!5e1!3m2!1sen!2smy!4v1670344209509!5m2!1sen!2smy"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection
