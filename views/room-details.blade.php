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

    @section('room-details-content')
        <header class="header">
            <p class="subtitle header__text__description">THE ULTIMATE LUXURY EXPERIENCE</p>
            <p class="title header__text__title">Ultimate Room</p>
            <div class="header__links">
                <a href="/index.php">Home</a>
                <span>|</span>
                <a class="topbar__nav__anchor__a" href="#">Room Details</a>
            </div>
        </header>

        <section class="room-details">
            <div class="room-details__container">
                <div class="room-details__properties__container">
                    <div class="room-details__properties">
                        <div class="room-details__properties__text">
                            <p class="subtitle">{{ $room[3] }}</p>
                            <p class="title room-details__properties__text__title">Luxury {{ $room[3] }}</p>
                        </div>
                        <div class="room-details__properties__price">
                            <p class="room-details__properties__price">${{ $room[5] / 100 }}<span
                                    class="room-details__properties__price__night">/Night</span>
                            </p>
                        </div>
                    </div>
                    <div class="room-details__image__container">
                        <img class="room-details__image" src="{{ $room[2] }}">
                    </div>
                </div>

                <div class="room-details__availability">
                    <p class="room-details__availability__title">Check Availability</p>
                    <p class="room-details__availability__text">Check In</p>
                    <input class="input input__date--filled" type="date">
                    <p class="room-details__availability__text">Check Out</p>
                    <input class="input input__date--filled" type="date">
                    <button class="button button-golden">CHECK AVAILABILITY</button>
                </div>
            </div>
            <p class="text-roboto text-roboto--grey room-details__text">
                {{ $room[8] }}
            </p>
        </section>

        <section class="room-amenities">
            <p class="title room-amenities__title">Amenities</p>
            <hr>
            <div class="room-amenities__services">
                @foreach (explode(',', $room[4]) as $amenitie)
                    @if ($amenitie)
                        <div class="room-amenities__service">
                            <img class="room-amenities__service__image"
                                src="/src/assets/bladeicons/{{ str_replace(' ', '', strtolower($amenitie)) }}.svg">
                            <p class="room-amenities__service__text">{{ $amenitie }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <section class="room-founder">
            <div class="room-founder__card">
                <div class="room-founder__card__image__container">
                    <img class="room-founder__card__image" src="./src/assets/images/founder.png">
                    <div class="room-founder__card__verification__container">
                        <div class="room-founder__card__verification">
                            <img class="room-founder__card__icon" src="./src/assets/icons/checkmark.svg">
                        </div>
                    </div>
                </div>
                <p class="title room-founder__card__name">J.F. Álvarez</p>
                <p class="subtitle room-founder__card__vocation">FOUNDER</p>
                <p class="text-archivo room-founder__card__description">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do
                    eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </section>

        <section class="room-cancellation">
            <p class="title room-cancellation__title">Cancellation</p>
            <hr>
            <p class="text-roboto text-roboto--grey room-cancellation__description">Phasellus volutpat neque a tellus
                venenatis, a euismod augue facilisis.
                Fusce ut metus
                mattis, consequat
                metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full
                refund.</p>
        </section>

        <section class="room-related">

            <p class="title room-related__title">Related Rooms</p>
            <hr>

            <div class="swiper-room-related">
                <div class="swiper-wrapper">
                    @foreach ($related as $room)
                        <a href="/room-details.php?id={{ $room[0] }}">
                            <div class="swiper-slide">
                                <div class="room room--grid">
                                    <div class="room__container room__container--grid">
                                        <div class="room__rules room__rules--grid">
                                            @foreach (explode(',', $room[4]) as $amenitie)
                                                @if ($amenitie)
                                                    <img class="room__rules__icon"
                                                        src="/src/assets/bladeicons/{{ str_replace(' ', '', strtolower($amenitie)) }}.svg">
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="room__img room__img--grid"
                                            style="background-image: url('{{ $room[2] }}')">
                                        </div>
                                    </div>
                                    <div class="room__data room__data--grid">
                                        <div class="room__data__text room__data__text--grid">
                                            <p class="room__data__text__title room__data__text__title--grid">
                                                {{ $room[3] }}
                                            </p>
                                            <p
                                                class="text-roboto text-roboto--grey
                                room__data__text__description room__data__text__description--grid">
                                                {{ $room[8] }}
                                            </p>
                                        </div>
                                        <div class="room__data__properties room__data__properties--grid">
                                            <p class="room__data__properties__price room__data__properties__price--grid">
                                                ${{ $room[5] / 100 }}<span
                                                    class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                                            </p>
                                            @if ($room[7])
                                                <p class="room__data__properties__availability">Actually Booked</p>
                                            @else
                                                <p class="room__data__properties__availability">Booking Now</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="room-related__swiper__prev-element">></div>
                <div class="room-related__swiper__next-element">></div>
            </div>

            <div class="room-related__list">
                @foreach ($related as $room)
                    <a href="/room-details.php?id={{ $room[0] }}">
                        <div class="room room--grid room-related__room">
                            <div class="room__container room__container--grid">
                                <div class="room__rules room__rules--grid">
                                    @foreach (explode(',', $room[4]) as $amenitie)
                                        @if ($amenitie)
                                            <img class="room__rules__icon"
                                                src="/src/assets/bladeicons/{{ str_replace(' ', '', strtolower($amenitie)) }}.svg">
                                        @endif
                                    @endforeach
                                </div>
                                <div class="room__img room__img--grid"
                                    style="background-image: url('{{ $room[2] }}')">
                                </div>
                            </div>
                            <div class="room__data room__data--grid">
                                <div class="room__data__text room__data__text--grid">
                                    <p class="room__data__text__title room__data__text__title--grid">{{ $room[3] }}
                                    </p>
                                    <p
                                        class="text-roboto text-roboto--grey
                        room__data__text__description room__data__text__description--grid">
                                        {{ $room[8] }}</p>
                                </div>
                                <div class="room__data__properties room__data__properties--grid">
                                    <p class="room__data__properties__price room__data__properties__price--grid">
                                        ${{ $room[5] / 100 }}<span
                                            class="room__data__properties__price__night room__data__properties__price__night--grid">/Night</span>
                                    </p>
                                    <p class="room__data__properties__availability">
                                        @if ($room[7])
                                            <p class="room__data__properties__availability">Actually Booked</p>
                                        @else
                                            <p class="room__data__properties__availability">Booking Now</p>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
    @endsection

    @section('footer')
        @parent
    @endsection

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script type="module" src="./src/js/index.js"></script>
        <script type="module" src="./src/js/slidersRoomDetails.js"></script>
    @endsection
</body>

</html>
