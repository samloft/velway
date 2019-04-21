@extends('layout.master')

@section('page.title', 'News')
@section('header.color', 'light-blue')

@section('content')
    <div class="news off-white">
        <div class="container pt-4 pb-5">
            <h2 class="pb-3">{{ __('News') }}</h2>

            <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h3 class="heading heading--underlined heading--left heading--light-blue pt-0">Velway raise £1000
                                for Bliss</h3>
                        </div>
                        <div class="col text-right">
                            <div class="pull-right">21/03/2019</div>
                        </div>
                    </div>
                    <p class="card-text">
                        Id velit senserit constituam eum. Ferri deleniti definitionem sea ut, mel ei oratio soluta.
                        At
                        altera virtute iuvaret nam, eam maiorum invidunt ut, ne has mollis iisque. Pri at mundi
                        soleat
                        deserunt, cum tota appareat in. Ne duo odio lorem commune, vocibus oporteat cu eum, ad
                        animal
                        timeam patrioque pri.Delectus ponderum atomorum ne has, ut qui unum neglegentur
                        consequuntur,
                        erant option argumentum in vel. Est id atomorum periculis instructior, fuisset appetere
                        complectitur in usu. An movet liberavisse vix. Dicunt tractatos at nam, vis eu movet facete
                        option, ne pri dolores contentiones. Nibh lobortis adipiscing ex sed, sumo virtute copiosae
                        pri
                        no, te erat feugait propriae.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
