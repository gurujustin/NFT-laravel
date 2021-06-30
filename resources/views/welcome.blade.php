@extends('layouts.app')

@section('contents')
<!-- home -->
<section id="home" class="home" data-src="img/home/slide.jpg" data-parallax>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="home__content">
                    <h1 class="home__title">Ucosmomasks Fund</h1>

                    <p class="home__text">NFTs Crypto Art Investment Fund</p>

                    <div class="home__btns">
                        <a data-scroll href="#token" class="home__btn home__btn--white"><span>Make Purchase</span></a>

                        <a href="#explore" class="home__btn"><span>Our Collection</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

<!-- about -->
<section id="about" class="about about--arrow section--gradient">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--white section__title--margin">About Us</h2>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div class="about__text">
                    <p><b>Ucosmomasks Fund</b> is an NFT crypto art private fund that manages a collection of crypto art (NFT).</p>
                    <p>It was build to give the client  the opportunity to become a part of the company through the purchase of a uCMask token, the cost of which depends on the number of NFTs in the fund's asset and their nominal market value.</p>
                </div>
                <!-- end about text -->
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<iframe id="explore"
src='https://opensea.io/assets?search%5Bquery%5D=Cosmomasks&search%5BsortAscending%5D=true&search%5BsortBy%5D=PRICE&embed=true'
width='100%'
height='100%'
frameborder='0'
allowfullscreen></iframe>

<!-- get started -->
<section class="section section--grey" id="token">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title">How to Get Started</h2>
                <span class="section__tagline">Your tagline</span>
            </div>
            <!-- end section title -->

            <div class="col-12">
                <!-- about text -->
                <div>
                    <p>The <b>UCMask</b> token is a currency token or denomination of a cryptocurrency, is a tradable asset , which automatically makes any person who make purchase a UCMask token an active shareholder of UCosmomasks Fund</p>
                </div>
                <!-- end about text -->
            </div>

            <div class="col-12 col-lg-4">
                <!-- box (style 6) -->
                <div class="box6">
                    <span class="box6__number">01</span>
                    <h3 class="box6__title">Make Purchase</h3>
                    <p class="box1__text">You can buy UCMask token in <b>pancakeswap</b> or <b>uniswap</b>.</p>
                </div>
                <!-- end box (style 6) -->
            </div>

            <div class="col-12 col-lg-4">
                <!-- box (style 6) -->
                <div class="box6">
                    <span class="box6__number">02</span>
                    <h3 class="box6__title">Connect your Wallet</h3>
                    <p class="box6__text">you can connect your metamask or other wallet.</p>
                </div>
                <!-- end box (style 6) -->
            </div>

            <div class="col-12 col-lg-4">
                <!-- box (style 6) -->
                <div class="box6">
                    <span class="box6__number">03</span>
                    <h3 class="box6__title">Buy our Token</h3>
                    <p class="box6__text">You can buy <b>uCMask</b> Token and become a port of our company.</p>
                </div>
                <!-- end box (style 6) -->
            </div>

            <!-- section button -->
            <div class="col-12">
                <a href="https://exchange.pancakeswap.finance/#/swap" class="section__btn" target="__blank"><span>Make Purchase</span></a>
            </div>
            <!-- end section button -->
        </div>
    </div>
</section>
<!-- end get started -->


<!-- get in touch -->
<section id="contacts" class="section">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <h2 class="section__title">Get in Touch</h2>
                <p class="section__text">We are always open and we welcome and questions you have for our team. If you wish to get in touch, please fill out the form below.</p>
            </div>
            <!-- end section title -->

            <div class="col-12 col-md-6">
                <!-- contacts -->
                <div class="contacts">
                    <ul class="contacts__list">
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,2A10,10,0,1,0,22,12,10.01114,10.01114,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.00917,8.00917,0,0,1,12,20ZM14.09814,9.63379,13,10.26807V7a1,1,0,0,0-2,0v5a1.00025,1.00025,0,0,0,1.5.86621l2.59814-1.5a1.00016,1.00016,0,1,0-1-1.73242Z"/></svg>
                            </span>
                            <p>Mon - Fri: <br>08:00 - 19:00</p>
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm-.41,2-5.88,5.88a1,1,0,0,1-1.42,0L5.41,6ZM20,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V7.41l5.88,5.88a3,3,0,0,0,4.24,0L20,7.41Z"/></svg>
                            </span>
                            <a href="mailto:ucosmomasks.info@gmail.com">ucosmomasks.info@gmail.com</a>
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16"><path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/></svg>
                            </span>
                            <a href="https://t.me/cosmomask">Cosmomask</a>
                        </li>
                    </ul>
                </div>
                <!-- end contacts -->
            </div>

            <div class="col-12 col-md-6">
                <!-- form -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form  action="{{ route('contactus') }}" method="POST" class="form form--contacts">
                @csrf
                    @error('name')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" class="form__input" placeholder="Name" name="name" id="name">
                    @error('email')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="text" class="form__input" placeholder="Email" name="email" id="email">
                    @error('message')
                        <span class="error">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <textarea class="form__textarea" placeholder="Message" name="message" id="message"></textarea>
                    <button class="form__btn" type="submit"><span>Send</span></button>
                </form>
                <!-- end form -->
            </div>
        </div>
    </div>
</section>
<!-- end get in touch -->

@endsection
