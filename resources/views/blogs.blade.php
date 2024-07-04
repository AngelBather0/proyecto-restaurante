@extends('layout-page')
@section('title', 'Blogs')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/Responsive.css') }}">
    <div class="Content">
        <div class="Content__blogs">
            <div class="container">
                <div class="Content__blogs--container">
                    <div class="Content__blogs--container-list">
                        <form action="{{ route('filterblogs') }}" method="get">
                            <div class="blogs__container--list-filters">
                                    @csrf
                                <div class="blogs__container--list-filtersHeading">
                                    <h4>@lang('app.filtermobile')</h4>
                                </div>
                                <div class="blogs__container--list-FilterButton">
                                    <div class="blogs__container--list-FilterButton-Selects">
                                        <select id="establecimientoSelect" name="SelectEstablecimiento">
                                            <option value="Sitios" {{ $status == "Sitios" ? 'selected' : '' }}>@lang('app.sitetype_1')</option>
                                            <option value="Alojamientos" {{ $status == "Alojamientos" ? 'selected' : '' }}>@lang('app.sitetype_2')</option>
                                            <option value="Negocios" {{ $status == "Negocios" ? 'selected' : '' }}>@lang('app.sitetype_3')</option>
                                        </select>
                                        <select id="provinciaSelect" name="SelectProvincia">
                                            @foreach ($provincias as $pr)
                                            <option value="{{ $pr->ProvinciaID }}" {{ $pr->ProvinciaID == $provincia ? 'selected' : '' }}>
                                                {{ $pr->Nombre }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- Apartado de alojamiento--}}
                                    <div class="blogs__container--list-filters-Range" id="PriceRange">
                                        <div id="range"></div>
                                        <div class="rangoinfo">
                                            <strong><span id="Minprice">0</span></strong>-<strong><span id="Maxprice">20,000</span></strong>
                                        </div>
                                        <input type="hidden" name="Minprice" id="min-price" value="{{$minprice}}">
                                        <input type="hidden" name="Maxprice" id="max-price" value="{{$maxprice}}">

                                        <div class="blogs__container--list-FilterButton-Selects FilterLodges">
                                            <select id="CategorySiteSelect" name="CategoryLodge">
                                                @foreach ($tiposalojamiento as $tipoalojamiento)
                                                <option value="{{ $tipoalojamiento->TipoAlojamientoID }}" {{ $categorylodge == $tipoalojamiento->TipoAlojamientoID ? 'selected' : '' }}>{{ $tipoalojamiento->Nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div> 
                                    </div>
                                    {{-- Apartado de categoria de sitios turisticos --}}
                                    <div class="blogs__container--list-filters-CategorySite" id="CategorySite">
                                        <div class="blogs__container--list-FilterButton-Selects">
                                            <select id="CategorySiteSelect" name="CategorySite">
                                                    @foreach ($tipossitio as $tipositio)
                                                    <option value="{{ $tipositio->TipoSitioID }}" {{ $categorysite == $tipositio->TipoSitioID ? 'selected' : '' }}>{{ $tipositio->Nombre }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{-- Apartado de categoria de negocios --}}
                                    <div class="blogs__container--list-filters-CategorySite" id="CategoryBusiness">
                                        <div class="blogs__container--list-FilterButton-Selects">
                                            <select id="CategorySiteSelect" name="CategoryBusiness">
                                                @foreach ($tiposnegocio as $tiponegocio)
                                                <option value="{{ $tiponegocio->TipoNegocioID }}" {{ $categorybusiness == $tiponegocio->TipoNegocioID ? 'selected' : '' }}>{{ $tiponegocio->Nombre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="blogs__container--list-FilterButton">
                                    <button type="submit"><span>@lang('app.filterbutton')</span></button>
                                </div>
                            </div>
                        </form>
                        <div class="blogs__container--heading">
                            @if ($provinciadata !== null)
                            <p class="blogs__container--list-SiteCount">{{$numquery}} {{$status == "Sitios" ? __('app.sitetype_1') : ''}}{{$status == "Alojamientos" ? __('app.sitetype_2') : ''}}{{$status == "Negocios" ? __('app.sitetype_3') : ''}} @lang('app.countconnector') {{$provinciadata->Nombre}}</p>
                            @endif
                            <div class="blogs__container--mobileFilters">
                                <span>@lang('app.filterbutton'):</span>
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5V6.17157C22 6.96722 21.6839 7.73028 21.1213 8.29289L15.2929 14.1213C15.1054 14.3089 15 14.5632 15 14.8284V17.1716C15 17.9672 14.6839 18.7303 14.1213 19.2929L11.9193 21.4949C10.842 22.5722 9 21.8092 9 20.2857V14.8284C9 14.5632 8.89464 14.3089 8.70711 14.1213L2.87868 8.29289C2.31607 7.73028 2 6.96722 2 6.17157V5Z" fill="#fff"/>
                                </svg>
                            </div>
                        </div>
                        @if ($status == "Sitios")
                        @foreach($sitios as $st)
                        <form id="SiteForm" action="{{ route('sitedetails') }}" method="get">
                            <input type="hidden" name="status" value="{{$status}}">
                            <input type="hidden" name="DataID" value="{{$st->LugarID}}">
                            <a class="SiteData">
                                <div class="blogs__container--list-SiteCards SiteCard" data-latitud="{{ $st->Latitud }}" data-longitud="{{ $st->Longitud }}">
                                    <div class="container__list--SiteCards-flex">
                                        <div class="list__SiteCards--flex-SiteInfo">
                                            @php
                                                $galeria = explode(',', $st->Galeria);
                                                $path = asset('storage/lugares/' . $galeria[0]);
                                            @endphp
                                            <div class="SiteCards__flex--SiteInfo-img" style="background-image: url({{$path}})">
                                            </div>
                                            <div class="SiteCards__flex--SiteInfo-details">
                                                <div class="flex__SiteInfo--details-title">
                                                    <h3 class="SiteInfo__details--title-tooltip">{{$st->Nombre}}</h3>
                                                </div>
                                                <div class="flex__SiteInfo--details-subtitle">
                                                    <h4>{{$st->Nombre}}</h4>
                                                </div>
                                                <div class="flex__SiteInfo--details-WayToGo">
                                                    <span>{{$st->Tipo}}</span>
                                                </div>
                                                <div class="flex__SiteInfo--details-Avaible">
                                                    <p>{!! nl2br(e($st->Descripcion)) !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </form>
                        @endforeach
                        <div class="blogs__container--paginate">
                            {{ $sitios->appends(Request::except('page'))->links() }}
                        </div>
                        @endif
                        @if ($status == "Alojamientos")
                        @foreach($alojamientos as $al)
                        <form id="AlojaForm" action="{{ route('sitedetails') }}" method="get">
                            <a class="AlojaData">
                                <input type="hidden" name="status" value="{{$status}}">
                                <input type="hidden" name="DataID" value="{{$al->AlojamientoID}}">
                                <div class="blogs__container--list-SiteCards AlojaCard" data-latitud="{{ $al->Latitud }}" data-longitud="{{ $al->Longitud }}" id="AlojaCard">
                                    <div class="container__list--SiteCards-flex">
                                        <div class="list__SiteCards--flex-SiteInfo">
                                            @php
                                                $galeria = explode(',', $al->Galeria);
                                                $path = asset('storage/alojamientos/' . $galeria[0]);
                                            @endphp
                                            <div class="SiteCards__flex--SiteInfo-img" style="background-image: url({{$path}})">
                                            </div>
                                            <div class="SiteCards__flex--SiteInfo-details">
                                                <div class="flex__SiteInfo--details-title">
                                                    <h3 class="SiteInfo__details--title-tooltip">{{$al->Nombre}}</h3>
                                                </div>
                                                <div class="flex__SiteInfo--details-subtitle">
                                                    <h4>{{$al->Nombre}}</h4>
                                                </div>
                                                <div class="flex__SiteInfo--details-data">
                                                    <span><p>{{$al->InfoPropiedad}}</p></span>
                                                </div>
                                                <div class="flex__SiteInfo--details-WayToGo">
                                                    <span>{{$al->Direccion}}</span>
                                                </div>
                                                <div class="flex__SiteInfo--details-PriceTag">
                                                    <p class="CurrencyType">US$</p>
                                                    <span>{{$al->PrecioPorNoche}}</span>
                                                </div>
                                                <div class="flex__SiteInfo--details-Avaible">
                                                    <span>{{$al->Disponibilidad}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </form>
                        @endforeach
                        <div class="blogs__container--paginate">
                            {{ $alojamientos->appends(Request::except('page'))->links() }}
                        </div>
                        @endif
                        @if ($status == "Negocios")
                        @foreach($negocios as $neg)
                        <form id="NegForm" action="{{ route('sitedetails') }}" method="get">
                            <input type="hidden" name="status" value="{{$status}}">
                            <input type="hidden" name="DataID" value="{{$neg->NegocioID}}">
                            <a class="NegData">
                                <div class="blogs__container--list-SiteCards NegoCard" data-latitud="{{ $neg->Latitud }}" data-longitud="{{ $neg->Longitud }}">
                                    <div class="container__list--SiteCards-flex">
                                        <div class="list__SiteCards--flex-SiteInfo">
                                            @php
                                                $galeria = explode(',', $neg->Galeria);
                                                $path = asset('storage/negocios/' . $galeria[0]);
                                            @endphp
                                            <div class="SiteCards__flex--SiteInfo-img" style="background-image: url({{$path}})">
                                            </div>
                                            <div class="SiteCards__flex--SiteInfo-details">
                                                <div class="flex__SiteInfo--details-title">
                                                    <h3 class="SiteInfo__details--title-tooltip">{{$neg->Nombre}}</h3>
                                                </div>
                                                <div class="flex__SiteInfo--details-subtitle">
                                                    <h4>{{$neg->Nombre}}</h4>
                                                </div>
                                                <div class="flex__SiteInfo--details-WayToGo">
                                                    <span><p>{{$neg->Tipo}}</p></span>
                                                </div>
                                                <div class="flex__SiteInfo--details-Avaible">
                                                    <span>{!! nl2br(e($neg->Descripcion)) !!}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </form>
                        @endforeach
                        <div class="blogs__container--paginate">
                            {{ $negocios->appends(Request::except('page'))->links() }}
                        </div>
                        @endif
                    </div>
                    <div class="Content__blogs--container-map">
                        <div class="mapouter"><div class="gmap_canvas"><iframe id="mapa" class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl={{ App::getLocale() }}&amp;q=18.4719,-69.8923&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed&ll=18.4719,-69.8923"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;}.gmap_iframe {}</style></div>
                    </div>
                </div>
                @if ($provinciadata !== null)
                    <div class="blogs__container--list-TinyNav">
                        <span><a href="#">Dominican Traveling</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M5 14l6-6-6-6">
                                </path>
                            </svg>
                            {{$status == "Sitios" ? __('app.sitetype_1') : ''}}{{$status == "Alojamientos" ? __('app.sitetype_2') : ''}}{{$status == "Negocios" ? __('app.sitetype_3') : ''}} @lang('app.countconnector') {{$provinciadata->Nombre}}</span>
                    </div>
                    <div class="blogs__container--list-BlogInfo">
                        <div class="container__list--BlogInfo-Title">
                            <h3>@lang('app.titleinfo') {{$status == "Sitios" ? __('app.sitetype_1') : ''}}{{$status == "Alojamientos" ? __('app.sitetype_2') : ''}}{{$status == "Negocios" ? __('app.sitetype_3') : ''}} @lang('app.countconnector') {{$provinciadata->Nombre}}</h3>
                        </div>
                        <div class="blogs__container--grid">
                            <div class="blogs__container--list-item">
                                <div class="container__list--BlogInfo-Subtitle">
                                    <h4>{{$provinciadata->Nombre}}</h4>
                                </div>
                                <div class="container__list--BlogInfo-Content">
                                    <p>{!! nl2br(e($provinciadata->Descripcion)) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="overlay"></div>
    </div>
    <script>
        document.querySelector(".blogs__container--mobileFilters").addEventListener("click", ()=>{
            document.querySelector(".blogs__container--list-filters").classList.add("mobileFiltersActive")
            document.querySelector(".overlay").classList.add("overlayActive")
        })
        document.querySelector(".overlay").addEventListener("click", ()=>{
            document.querySelector(".blogs__container--list-filters").classList.remove("mobileFiltersActive")
            document.querySelector(".overlay").classList.remove("overlayActive")
        })
    </script>
@endsection
