@extends('layout')

<!DOCTYPE html>
<html lang="en">

<head>
    @section('head')
        @parent
    @endsection
</head>

<body>
    @section('topbar')
        @parent
    @endsection

    @section('topbarback')
        @parent
    @endsection

    @section('room-list-content')
        <header class="header">
            <p class="subtitle header__text__description">THE ULTIMATE LUXURY EXPERIENCE</p>
            <p class="title header__text__title">Ultimate Room</p>
            <div class="header__links">
                <a href="./index.html">Home</a>
                <span>|</span>
                <a class="topbar__nav__anchor__a" href="#">Rooms</a>
            </div>
        </header>

        <section class="room-list room-list--list">
            <div class="room room--list">
                <div class="room__container room__container--grid">
                    <div class="room__img room__img--grid" style="background-image: url('./src/assets/images/room1.jpg')">
                    </div>
                </div>
                <div class="room__data room__data--list">
                    <div class="room__rules room__rules--list">
                        <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                    </div>
                    <div class="room__data__text room__data__text--grid">
                        <p class="room__data__text__title room__data__text__title--list">Minimal Duplex Room</p>
                        <p class="text-roboto room__data__text__description room__data__text__description--list">Lorem ipsum
                            dolor sit
                            amet, consectetur adipisicing elit,
                            sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="room__data__properties room__data__properties--list">
                    <p class="room__data__properties__price room__data__properties__price--list">$375<span
                            class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                    </p>
                    <hr>
                    <p class="room__data__properties__availability">Booking Now</p>
                </div>
            </div>
            <div class="room room--list">
                <div class="room__container room__container--grid">
                    <div class="room__img room__img--grid" style="background-image: url('./src/assets/images/room1.jpg')">
                    </div>
                </div>
                <div class="room__data room__data--list">
                    <div class="room__rules room__rules--list">
                        <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                    </div>
                    <div class="room__data__text room__data__text--grid">
                        <p class="room__data__text__title room__data__text__title--list">Minimal Duplex Room</p>
                        <p class="text-roboto room__data__text__description room__data__text__description--list">Lorem
                            ipsum
                            dolor sit
                            amet, consectetur adipisicing elit,
                            sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="room__data__properties room__data__properties--list">
                    <p class="room__data__properties__price room__data__properties__price--list">$375<span
                            class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                    </p>
                    <hr>
                    <p class="room__data__properties__availability">Booking Now</p>
                </div>
            </div>
            <div class="room room--list">
                <div class="room__container room__container--grid">
                    <div class="room__img room__img--grid" style="background-image: url('./src/assets/images/room1.jpg')">
                    </div>
                </div>
                <div class="room__data room__data--list">
                    <div class="room__rules room__rules--list">
                        <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                    </div>
                    <div class="room__data__text room__data__text--grid">
                        <p class="room__data__text__title room__data__text__title--list">Minimal Duplex Room</p>
                        <p class="text-roboto room__data__text__description room__data__text__description--list">Lorem
                            ipsum
                            dolor sit
                            amet, consectetur adipisicing elit,
                            sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="room__data__properties room__data__properties--list">
                    <p class="room__data__properties__price room__data__properties__price--list">$375<span
                            class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                    </p>
                    <hr>
                    <p class="room__data__properties__availability">Booking Now</p>
                </div>
            </div>
            <div class="room room--list">
                <div class="room__container room__container--grid">
                    <div class="room__img room__img--grid" style="background-image: url('./src/assets/images/room1.jpg')">
                    </div>
                </div>
                <div class="room__data room__data--list">
                    <div class="room__rules room__rules--list">
                        <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                    </div>
                    <div class="room__data__text room__data__text--grid">
                        <p class="room__data__text__title room__data__text__title--list">Minimal Duplex Room</p>
                        <p class="text-roboto room__data__text__description room__data__text__description--list">Lorem
                            ipsum
                            dolor sit
                            amet, consectetur adipisicing elit,
                            sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="room__data__properties room__data__properties--list">
                    <p class="room__data__properties__price room__data__properties__price--list">$375<span
                            class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                    </p>
                    <hr>
                    <p class="room__data__properties__availability">Booking Now</p>
                </div>
            </div>
            <div class="room room--list">
                <div class="room__container room__container--grid">
                    <div class="room__img room__img--grid" style="background-image: url('./src/assets/images/room1.jpg')">
                    </div>
                </div>
                <div class="room__data room__data--list">
                    <div class="room__rules room__rules--list">
                        <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                    </div>
                    <div class="room__data__text room__data__text--grid">
                        <p class="room__data__text__title room__data__text__title--list">Minimal Duplex Room</p>
                        <p class="text-roboto room__data__text__description room__data__text__description--list">Lorem
                            ipsum
                            dolor sit
                            amet, consectetur adipisicing elit,
                            sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="room__data__properties room__data__properties--list">
                    <p class="room__data__properties__price room__data__properties__price--list">$375<span
                            class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                    </p>
                    <hr>
                    <p class="room__data__properties__availability">Booking Now</p>
                </div>
            </div>
            <div class="room room--list">
                <div class="room__container room__container--grid">
                    <div class="room__img room__img--grid" style="background-image: url('./src/assets/images/room1.jpg')">
                    </div>
                </div>
                <div class="room__data room__data--list">
                    <div class="room__rules room__rules--list">
                        <img class="room__rules__icon" src="./src/assets/icons/bed.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/wifi.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/automobile.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/snow.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/dumbbell.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/smoke.svg">
                        <img class="room__rules__icon" src="./src/assets/icons/cup.svg">
                    </div>
                    <div class="room__data__text room__data__text--grid">
                        <p class="room__data__text__title room__data__text__title--list">Minimal Duplex Room</p>
                        <p class="text-roboto room__data__text__description room__data__text__description--list">Lorem
                            ipsum
                            dolor sit
                            amet, consectetur adipisicing elit,
                            sed do eiusmod tempor</p>
                    </div>
                </div>
                <div class="room__data__properties room__data__properties--list">
                    <p class="room__data__properties__price room__data__properties__price--list">$375<span
                            class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                    </p>
                    <hr>
                    <p class="room__data__properties__availability">Booking Now</p>
                </div>
            </div>
        </section>
    @endsection

    @section('footer')
        @parent
    @endsection

    <script type="module" src="./src/js/index.js"></script>
</body>

</html>
