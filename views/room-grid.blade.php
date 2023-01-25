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

    @section('content')
        <header class="header">
            <p class="subtitle header__text__description">THE ULTIMATE LUXURY EXPERIENCE</p>
            <p class="title header__text__title">Ultimate Room</p>
            <div class="header__links">
                <a href="/index.php">Home</a>
                <span>|</span>
                <a class="topbar__nav__anchor__a" href="#">Rooms</a>
            </div>
        </header>

        <section class="room-list">
            @foreach ($rooms as $room)
                <a href="/room-details.php?id={{ $room[0] }}">
                    <div class="room room--grid">
                        <div class="room__container room__container--grid">
                            @if ($room[4] != '')
                                <div class="room__rules room__rules--grid">
                                    @foreach (explode(',', $room[4]) as $amenitie)
                                        @if ($amenitie)
                                            <img class="room__rules__icon"
                                                src="/src/assets/bladeicons/{{ str_replace(' ', '', strtolower($amenitie)) }}.svg">
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                            <div class="room__img room__img--grid" style="background-image: url('{{ $room[2] }}')">
                            </div>
                        </div>
                        <div class="room__data room__data--grid">
                            <div class="room__data__text room__data__text--grid">
                                <p class="room__data__text__title room__data__text__title--grid">{{ $room[3] }}</p>
                                <p class="room__data__text__description room__data__text__description--grid">
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
                </a>
            @endforeach
        </section>
    @endsection

    @section('footer')
        @parent
    @endsection

    @section('scripts')
        <script type="module" src="./src/js/index.js"></script>
    @endsection
</body>

</html>
