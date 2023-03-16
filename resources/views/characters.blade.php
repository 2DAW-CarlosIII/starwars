@extends('layouts.starwars')
<link rel="stylesheet" href="./index_files/table_div.css" type="text/css">
@section('content')

<!-- Inicio del código necesario para visualizar cada personaje -->
@foreach($characters as $character)
<section class="module display-view display" data-module="display" id="ref-1-2">
    <div class="bound layout-right">
        <div class="blocks-bound">
            <div class="blocks-container ref-1-2">
                <ul class="blocks-list-view active el3_1A">
                    <div class="building-block-config el3_1A films-content    full image-left content-height-fixed ratio-2x1 short     mob-width-full mob-image-top           ">
                        <div class="building-block     ">
                            <div class="building-block-aspect">
                                <div class="building-block-padding">
                                    <div class="building-block-wrapper">
                                        <div class="image-wrapper">
                                            <div class="aspect">
                                                <img
                                                        src="https://static-mh.content.disney.io/starwars/assets/footer/vader_2-86e8fdb4e26d.jpg"
                                                        class="thumb reserved-ratio">
                                            </div>
                                        </div>
                                        <div class="content-wrapper   ">
                                            <div class="bedazzlement"></div>
                                            <div class="content-bumper">
                                                <div class="content-info">
                                                    <h3 class="title">
                                                            <span class="long-title">Name</span>
                                                    </h3>
                                                    <div>{{ $character->name }}</div>
                                                    <div class="desc-sizer">
                                                            <p class="desc">Gender </p>
                                                            <div>{{ $character->gender }}</div>
                                                    </div>

                                                    <div class="desc-sizer">
                                                        <p class="desc">Height </p>
                                                        <div>{{ $character->height }}</div>
                                                    </div>

                                                    <div class="desc-sizer">
                                                        <p class="desc">Mass </p>
                                                        <div>{{ $character->mass }}</div>
                                                    </div>

                                                    <div class="desc-sizer">
                                                        <p class="desc">Hair Color </p>
                                                        <div>{{ $character->hair_color }}</div>
                                                    </div>

                                                    <div class="desc-sizer">
                                                        <p class="desc">Skin color</p>
                                                        <div>{{ $character->skin_color }}</div>
                                                    </div>

                                                    <div class="desc-sizer">
                                                        <p class="desc">Eye color </p>
                                                        <div>{{ $character->eye_color }}</div>
                                                    </div>

                                                    <div class="desc-sizer">
                                                        <p class="desc">Birth year </p>
                                                        <div>{{ $character->birth_year  }}</div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</section>
@endforeach

<!-- FIN del código necesario para visualizar cada personaje -->
@stop
