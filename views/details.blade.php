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

    @section('details-content')
        <header class="header">
            <p class="subtitle header__text__description">THE ULTIMATE LUXURY EXPERIENCE</p>
            <p class="title header__text__title">New Details</p>
            <div class="header__links">
                <a href="/index.php">Home</a>
                <span>|</span>
                <a href="#">Blog</a>
            </div>
        </header>

        <section class="details">
            <div class="details__data__container">
                <div class="details__data">
                    <div class="details__data__image">
                        <img src="./src/assets/images/hotel-address.png">
                    </div>
                    <div class="details__data__text">
                        <p class="title details__data__text__title">Hotel Address</p>
                        <p class="text-roboto text-roboto--grey details__data__text__description">19/A, Cirikon City hall
                            Tower New York, NYC</p>
                    </div>
                    <p class="details__data__back">01</p>
                </div>

                <div class="details__data">
                    <div class="details__data__image">
                        <img src="./src/assets/icons/phone.svg">
                    </div>
                    <div class="details__data__text">
                        <p class="title details__data__text__title">Phone Number</p>
                        <p class="text-roboto text-roboto--grey details__data__text__description">+ 97656 8675 7864 7</p>
                        <p class="text-roboto text-roboto--grey details__data__text__description">+ 876 766 8675 765 6</p>
                    </div>
                    <p class="details__data__back">02</p>
                </div>

                <div class="details__data">
                    <div class="details__data__image">
                        <img src="./src/assets/images/email.png">
                    </div>
                    <div class="details__data__text">
                        <p class="title details__data__text__title">Email</p>
                        <p class="text-roboto text-roboto--grey details__data__text__description">info@webmail.com </p>
                        <p class="text-roboto text-roboto--grey details__data__text__description">jobs.webmail@mail.com</p>
                    </div>
                    <p class="details__data__back">03</p>
                </div>
            </div>

            <input type="text" class="address" placeholder="Location">
            <button class="button-find-location">Find location</button>

            <select class="regions">
                <option value="Spain">Spain</option>
                <option value="0">Andalucía</option>
                <option value="1">Aragón</option>
                <option value="2">Asturias, Principado de</option>
                <option value="3">Balears, Illes</option>
                <option value="4">Canarias</option>
                <option value="5">Cantabria</option>
                <option value="6">Castilla y León</option>
                <option value="7">Castilla - La Mancha</option>
                <option value="8">Cataluña / Catalunya</option>
                <option value="9">Comunitat Valenciana</option>
                <option value="10">Extremadura</option>
                <option value="11">Galicia</option>
                <option value="12">Madrid, Comunidad de</option>
                <option value="13">Murcia, Región de</option>
                <option value="14">Navarra, Comunidad Foral de</option>
                <option value="15">País Vasco / Euskadi</option>
                <option value="16">Rioja, La</option>
                <option value="17">Ceuta</option>
                <option value="18">Melilla</option>
            </select>

            <button class="button-map button-location">Find my location</button>
            <button class="button-map button-matrix">Get hotels distance</button>
            <div id="map"></div>
            <div class="location-list"></div>

            <form class="details__inputs" action="{{ $sendMessage }}" method="POST">
                <div class="details__inputs__group">
                    <div class="details__inputs__column">
                        <div class="input--contact details__input">
                            <input class="input input__text input--contact__text" placeholder="Your full name"
                                name="customer" />
                            <img class="input__icon input--contact__icon details__inputs__user"
                                src="./src/assets/icons/user.svg">
                        </div>

                        <div class="input--contact details__input">
                            <input class="input input__text input--contact__text" placeholder="Add phone number"
                                name="phone" />
                            <img class="input__icon input--contact__icon" src="./src/assets/icons/phone2.svg">
                        </div>
                    </div>

                    <div class="details__inputs__column">
                        <div class="input--contact details__input">
                            <input class="input input__text input--contact__text" placeholder="Enter email address"
                                name="email" />
                            <img class="input__icon input--contact__icon" src="./src/assets/icons/email-address.svg">
                        </div>

                        <div class="input--contact details__input">
                            <input class="input input__text input--contact__text" placeholder="Enter subject"
                                name="header" />
                            <img class="input__icon input--contact__icon" src="./src/assets/icons/subject.svg">
                        </div>
                    </div>
                </div>
                <div class="input--contact details__input">
                    <textarea class="input input__text input--contact__text" placeholder="Enter message" name="comment"></textarea>
                    <img class="input__icon input--contact__icon" src="./src/assets/icons/pen.svg">
                </div>
                <input type="submit" class="button button-golden" value="SEND"></button>
            </form>
        </section>
    @endsection

    @section('footer')
        @parent
    @endsection

    @section('scripts')
        <script type="module" src="./src/js/index.js"></script>
        <script src="./src/js/regionsSpain.js"></script>
        <script src="./src/js/hotels.js"></script>
        <script src="./src/js/comunitiesSpain.js"></script>
        <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzhp-gjeksjUKrCvu14fvTA5mAgX8noes&callback=initMap"></script>
        <script src="./src/js/maps.js"></script>
    @endsection
</body>

</html>
