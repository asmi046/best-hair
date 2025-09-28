<section>
    <div class="container contacts">
        <h2>Связаться с нами</h2>
        <div class="colls ">
            <div class="col">
                <x-a-icon href="tel:+7{{ phone_format($contacts['phone']->value) }}" icon="phone_icon">{{ $contacts['phone']->value }}</x-a-icon>
                <x-a-icon href="mailto:info@the-best.ru" icon="mail_icon">info@the-best.ru</x-a-icon>
            </div>
            <div class="col">
                <x-div-icon icon="time_icon">{{ $contacts['work_time']->value }}</x-a-icon>
                <x-div-icon icon="adr_icon">{{$contacts['adress']->value}}</x-a-icon>
            </div>
        </div>

        <x-map.map-in-page name="Денталика" :geo="$contacts['geo']->value" :adres="$contacts['adress']->value" :phone="$contacts['phone']->value"></x-map.map-in-page>
    </div>
</section>
