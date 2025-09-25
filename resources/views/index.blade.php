@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')

<header class="header main">
    <div class="container">
        <x-header.control />

        <div class="header__control">
            <img src="{{ asset('img/logo.svg') }}" alt="Окрашивание волос в Курске" class="logo_big">
            <div class="button_wrapper">
                <a href="#coll" class="button button_black">Прайс</a>
                <a href="#coll" class="button ">Связаться с нами</a>
            </div>

        </div>

        <div class="arrow"></div>
    </div>
</header>

<section>
    <div class="container">
        <h2>Концепция и атмосфера</h2>

        <div class="subtitle">
            <p>The Best hair salon - концептуальный салон красоты, <br> который отличается от всего что вы видели ранее</p>
        </div>

        <div class="concept">
                <div class="concept__left">
                    <div class="concept__photo concept__photo--top">
                        <img src="{{ asset('img/concept/foto_1.webp') }}" alt="Фото 1" class="concept__img">
                    </div>
                    <div class="concept__text text_styles concept__text--main">
                        <p>Наша студия — это пространство вдохновения и свободы самовыражения. Здесь вы почувствуете уют, спокойствие и внимание к деталям. Мы создаём атмосферу, где процесс окрашивания становится не рутиной, а творческим ритуалом.</p>
                    </div>
                    <div class="concept__photo concept__photo--bottom">
                        <img src="{{ asset('img/concept/foto_4.webp') }}" alt="Фото 4" class="concept__img">
                    </div>
                </div>
                <div class="concept__right">
                    <div class="concept__text text_styles concept__text--right">
                        <p>Мы работаем только с профессиональным оборудованием премиум-класса. Современные кресла, системы окрашивания и уходовые технологии обеспечивают комфорт и безупречный результат, сохраняя здоровье и красоту ваших волос.</p>
                    </div>
                    <div class="concept__line concept__photos--double">
                        <div class="concept__photo">
                            <img src="{{ asset('img/concept/foto_2.webp') }}" alt="Фото 2" class="concept__img">
                        </div>
                        <div class="concept__photo">
                            <img src="{{ asset('img/concept/foto_3.webp') }}" alt="Фото 3" class="concept__img">
                        </div>
                    </div>
                    <div class="concept__line concept__block--bottom">
                        <div class="concept__text text_styles concept__text--bottom">
                            <p>Студия находится в центре города, в шаговой доступности от метро и ключевых транспортных узлов. Вам будет легко добраться из любой точки, а рядом всегда найдётся удобная парковка — комфорт начинается ещё до визита.</p>
                        </div>
                        <div class="concept__photo">
                            <img src="{{ asset('img/concept/foto_5.webp') }}" alt="Фото 5" class="concept__img">
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2>Прайс</h2>
        <div class="price">
            <details>
                <summary>Завивка волос</summary>
                <div class="response">

                </div>
            </details>

            <details>
                <summary>Окрашивание</summary>
                <div class="response">

                </div>
            </details>

            <details>
                <summary>Стрижка</summary>
                <div class="response">

                </div>
            </details>
        </div>
    </div>
</section>

<section class="about">
    <div class="container text_styles">
        <img src="{{ asset('img/pokr_zav_bn.webp') }}" alt="Завивка и окраска волос в курске" class="picture_bn__img">
        <h1>Завивка и окраска волос в Курске</h1>
        <p >В The Best мы верим, что окрашивание волос — это искусство, а вы — наш главный шедевр. Здесь нет случайных оттенков и стандартных решений: каждая работа — это индивидуально подобранная палитра, которая подчёркивает вашу красоту и стиль. Хотите утончённую классику, мягкий перелив или смелый креатив?</p>
        <p>Наши мастера владеют всеми современными техниками: от балаяжа и шатуша до ярких авторских окрашиваний.</p>
        <p>Мы используем только премиальные красители и уход, чтобы ваши волосы оставались здоровыми и блестящими. В уютной атмосфере салона вы почувствуете, что забота о себе может быть настоящим удовольствием.</p>
        <p>Откройте для себя The Best — место, где цвет становится эмоцией, а ваш образ вдохновляет.</p>
    </div>
</section>

<section>
    <div class="container contacts">
        <h2>Связаться с нами</h2>
        <div class="colls ">
            <div class="col">
                <x-a-icon href="tel:+7{{ phone_format('+7 920 710 08 80') }}" icon="phone_icon">+7 920 710 08 80</x-a-icon>
                <x-a-icon href="mailto:info@the-best.ru" icon="mail_icon">info@the-best.ru</x-a-icon>
            </div>
            <div class="col">
                <x-div-icon icon="time_icon">с 10:00 до  22:00</x-a-icon>
                <x-div-icon icon="adr_icon">г. Курск ул. Карла-Маркса, д. 66</x-a-icon>
            </div>
        </div>

        <x-map.map-in-page name="Денталика" :geo="'51.75749107225994,36.18305249999999'" :adres="'г. Курск ул. Карла-Маркса, д. 66'" :phone="'+7 920 710 08 80'"></x-map.map-in-page>
    </div>
</section>

@endsection

