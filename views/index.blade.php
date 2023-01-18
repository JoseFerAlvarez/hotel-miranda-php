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

    @section('index-content')
        <header class="header">
            <p class="subtitle header__text__description">THE ULTIMATE LUXURY EXPERIENCE</p>
            <p class="title header__text__title">The Perfect Base For You</p>
            <a href="/room-grid.php"><button class="button button-golden header__button">TAKE A TOUR</button></a>
            <a href="/about-us.php"><button class="button button-dark header__button">LEARN MORE</button></a>
        </header>

        <form class="availability" action="/availability.php" method="POST">
            <div class="availability__date__container">
                <div class="availability__date">
                    <p class="availability__text">Arrival Date</p>
                    <input class="input input__date--golden availability__input" type="date" name="checkin">
                </div>
                <div class="availability__date">
                    <p class="availability__text">LeDeparture Date</p>
                    <input class="input input__date--golden availability__input" type="date" name="checkout">
                </div>
            </div>
            <input type="submit" class="button button-golden availability__button" value="CHECK AVAILABILITY">
        </form>

        <section class="about-data">
            <div class="about-data__discover">
                <p class="subtitle about-data__discover__subtitle">ABOUT US</p>
                <p class="title about-data__discover__title">Discover Our Underground.</p>
                <p class="text-archivo about-data__discover__description">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed
                    do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat.</p>
                <a href="/room-grid.php"><button class="button button-golden about-data__discover__button">BOOK
                        NOW</button></a>
            </div>

            <div class="about-data__card__container">
                <div class="about-data__card about-data__card__team">
                    <img class="about-data__card__img" src="./src/assets/images/wine.jpg">
                    <div class="about-data__card__description">
                        <img class="about-data__card__description__img" src="./src/assets/icons/team.svg">
                        <p class="about-data__card__description__title">Strong Team</p>
                        <p class="text-roboto about-data__card__description__text">Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit,
                            sed do eiusmod tempor.</p>
                        <img class="about-data__card__description__background" src="./src/assets/icons/team.svg">
                    </div>
                </div>

                <div class="about-data__card about-data__card__room">
                    <img class="about-data__card__img" src="./src/assets/images/luxury-room.jpg">
                    <div class="about-data__card__description about-data__card__description--dark">
                        <img class="about-data__card__description__img" src="./src/assets/icons/calendar.svg">
                        <p class="about-data__card__description__title about-data__card__description__title--white">Luxury
                            Room
                        </p>
                        <p class="text-roboto text-roboto--white about-data__card__description__text">Lorem
                            ipsum
                            dolor sit amet,
                            consectetur adipisicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="room-slider">
            <p class="subtitle">ROOMS</p>
            <p class="title room-slider__title">Hand Picked Rooms</p>

            <div class="swiper">
                <div class="swiper-wrapper">

                    @foreach ($rooms as $room)
                        <div class="swiper-slide">
                            <div class="room">
                                <div class="room__container">
                                    @if ($room[4] != '')
                                        <div class="room__rules">
                                            @foreach (explode(',', $room[4]) as $amenitie)
                                                @if ($amenitie)
                                                    <img class="room__rules__icon"
                                                        src="/src/assets/bladeicons/{{ str_replace(' ', '', strtolower($amenitie)) }}.svg">
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="room__img" style="background-image: url('{{ $room[2] }}')">
                                    </div>
                                </div>
                                <div class="room__data">
                                    <div class="room__data__text">
                                        <p class="room__data__text__title">{{ $room[3] }}</p>
                                        <p class="text-roboto text-roboto--grey room__data__text__description">
                                            {{ $room[8] }}</p>
                                    </div>
                                    <div class="room__data__properties">
                                        <p class="room__data__properties__price">${{ $room[5] / 100 }}<span
                                                class="room__data__properties__price__night">/Night</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="swiper__prev-element">></div>
                <div class="swiper__next-element">></div>

            </div>
        </section>

        <section class="home-video">
            <div class="home-video__container">
                <div class="home-video__text">
                    <p class="subtitle home-video__text__subtitle">INTRO VIDEO</p>
                    <p class="title home-video__text__title">Meet With Our Luxury Place.</p>
                    <p class="text-archivo home-video__text__description">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.
                    </p>
                    <a href="/room-grid.php"><button class="button button-golden home-video__button--desktop">BOOK
                            NOW</button></a>
                </div>
                <div class="home-video__source">
                    <video class="home-video__video" controls>
                        <source src="./src/assets/videos/luxury-hotel.mp4" type="video/mp4">
                    </video>
                </div>
                <button class="button button-golden home-video__button--mobile">BOOK NOW</button>
            </div>
            <div class="home-video__decoration"></div>
        </section>

        <section class="core-features">

            <p class="subtitle core-features__subtitle">FACILITIES</p>
            <p class="title core-features__title">Core Features</p>

            <div class="swiper-feature">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="feature">
                            <img class="feature__img-foreground" src="./src/assets/images/rating.png">
                            <div class="feature__img-background">01</div>
                            <p class="feature__title">Have High Rating</p>
                            <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feature">
                            <img class="feature__img-foreground" src="./src/assets/images/clock.png">
                            <div class="feature__img-background">02</div>
                            <p class="feature__title">Quiet Hours</p>
                            <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature">
                            <img class="feature__img-foreground" src="./src/assets/icons/location.svg">
                            <div class="feature__img-background">03</div>
                            <p class="feature__title">Best Locations</p>
                            <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature">
                            <img class="feature__img-foreground" src="./src/assets/images/clock-cancel.png">
                            <div class="feature__img-background">04</div>
                            <p class="feature__title">Free Cancellation</p>
                            <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature">
                            <img class="feature__img-foreground" src="./src/assets/icons/payment.svg">
                            <div class="feature__img-background">05</div>
                            <p class="feature__title">Payment Options</p>
                            <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="feature">
                            <img class="feature__img-foreground" src="./src/assets/icons/offer.svg">
                            <div class="feature__img-background">06</div>
                            <p class="feature__title">Special Offers</p>
                            <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
                <div class="swipper-feature__pagination"></div>
            </div>

            <div class="core-features__grid">
                <div class="feature">
                    <img class="feature__img-foreground" src="./src/assets/images/rating.png">
                    <div class="feature__img-background">01</div>
                    <p class="feature__title">Have High Rating</p>
                    <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="feature">
                    <img class="feature__img-foreground" src="./src/assets/images/clock.png">
                    <div class="feature__img-background">02</div>
                    <p class="feature__title">Quiet Hours</p>
                    <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="feature">
                    <img class="feature__img-foreground" src="./src/assets/icons/location.svg">
                    <div class="feature__img-background">03</div>
                    <p class="feature__title">Best Locations</p>
                    <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="feature">
                    <img class="feature__img-foreground" src="./src/assets/images/clock-cancel.png">
                    <div class="feature__img-background">04</div>
                    <p class="feature__title">Free Cancellation</p>
                    <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="feature">
                    <img class="feature__img-foreground" src="./src/assets/icons/payment.svg">
                    <div class="feature__img-background">05</div>
                    <p class="feature__title">Payment Options</p>
                    <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="feature">
                    <img class="feature__img-foreground" src="./src/assets/icons/offer.svg">
                    <div class="feature__img-background">06</div>
                    <p class="feature__title">Special Offers</p>
                    <p class="text-archivo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod
                        tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </section>

        <section class="foods-menu">

            <img class="foods-menu__img" src="./src/assets/images/donut.png">
            <p class="subtitle foods-menu__subtitle">MENU</p>
            <p class="title foods-menu__title">Our Foods Menu</p>

            <div class="swiper-food">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-food__column">
                            <div class="food">
                                <div class="food__img"
                                    style="background-image: url('./src/assets/images/eggs-bacon.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Eggs & Bacon</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>
                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/coffe.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Tea or Coffee</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>
                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/chia.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Chia Oatmeal</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-food__column">

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/fruit.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Fruit Parfait</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/marmalade.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Marmalade Selection</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/cheese.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Cheese Plate</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-food__column">
                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/spaguetti.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Spaguetti</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/paella.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Paella</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/gazpacho.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Gazpacho</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-food__column">
                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/sandwich.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Sandwich</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img"
                                    style="background-image: url('./src/assets/images/morteruelo.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Morteruelo</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/arepa.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Arepas</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-food__buttons">
                    <div class="swiper-food__prev-element">></div>
                    <div class="swiper-food__next-element">></div>
                </div>

            </div>

            <div class="swiper-food__grid">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="foods-menu__grid">
                            <div class="food">
                                <div class="food__img"
                                    style="background-image: url('./src/assets/images/eggs-bacon.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Eggs & Bacon</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/coffe.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Tea or Coffee</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/chia.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Chia Oatmeal</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/fruit.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Fruit Parfait</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/marmalade.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Marmalade Selection</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/cheese.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Cheese Plate</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="foods-menu__grid">
                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/spaguetti.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Spaguetti</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/paella.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Paella</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/gazpacho.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Gazpacho</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/sandwich.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Sandwich</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img"
                                    style="background-image: url('./src/assets/images/morteruelo.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Morteruelo</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>

                            <div class="food">
                                <div class="food__img" style="background-image: url('./src/assets/images/arepa.jpg')">
                                </div>
                                <div class="food__text">
                                    <p class="food__text__title">Arepas</p>
                                    <p class="text-roboto food__text__description">Lorem ipsum dolor sit amet, consectetur
                                        adip isicing
                                        elit, sed do
                                        eiusmod tempor.</p>
                                </div>
                                <img class="food__arrow" src="./src/assets/icons/arrow.svg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-food__grid__buttons">
                    <div class="swiper-food__grid__prev-element">></div>
                    <div class="swiper-food__grid__next-element">></div>
                </div>
            </div>

            <div class="swiper-food__images">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="food-slide__img" style="background-image: url('./src/assets/images/paella.jpg')">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="food-slide__img" style="background-image: url('./src/assets/images/morteruelo.jpg')">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="food-slide__img" style="background-image: url('./src/assets/images/gazpacho.jpg')">
                        </div>
                    </div>
                </div>
                <div class="swiper-food__pagination"></div>
            </div>

            <div class="food-list__img">
                <div class="food-list__img__img" style="background-image: url('./src/assets/images/paella.jpg')"></div>
                <div class="food-list__img__img" style="background-image: url('./src/assets/images/morteruelo.jpg')">
                </div>
                <div class="food-list__img__img" style="background-image: url('./src/assets/images/gazpacho.jpg')">
                </div>
            </div>

        </section>

        <section class="statistics">
            <div class="statistics__stat">
                <img class="statistics__stat__img" src="./src/assets/images/rocket.png">
                <p class="statistics__text statistics__stat__number">84k</p>
                <p class="statistics__text statistics__stat__text">Projects are Completed</p>
            </div>
            <div class="statistics__stat">
                <img class="statistics__stat__img" src="./src/assets/images/users.png">
                <p class="statistics__text statistics__stat__number">10M</p>
                <p class="statistics__text statistics__stat__text">Active Backers Around World</p>
            </div>
            <div class="statistics__stat">
                <img class="statistics__stat__img" src="./src/assets/images/stats.png">
                <p class="statistics__text statistics__stat__number">02k</p>
                <p class="statistics__text statistics__stat__text">Categories Served</p>
            </div>
            <div class="statistics__stat">
                <img class="statistics__stat__img" src="./src/assets/images/book.png">
                <p class="statistics__text statistics__stat__number">100M</p>
                <p class="statistics__text statistics__stat__text">Idea Raised Funds</p>
            </div>
        </section>
    @endsection

    @section('footer')
        @parent
    @endsection

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script type="module" src="./src/js/index.js"></script>
        <script type="module" src="./src/js/slidersHome.js"></script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzhp-gjeksjUKrCvu14fvTA5mAgX8noes&callback=initMap"></script>
    @endsection
</body>

</html>
