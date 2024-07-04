@extends('layout-page')
@php
    $title = "";
    if ($status == "Sitios") {
        $title = $sitio->Nombre;
    }elseif ($status == "Alojamientos") {
        $title = $alojamiento->Nombre;
    }elseif ($status == "Negocios") {
        $title = $negocio->Nombre;
    }
@endphp
@section('title', $title)
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="Content">
        <div class="Content__siteDetails">
            <div class="container">
                <div class="Content__siteDetails--portada">
                    <div class="Content__siteDetails--portada-buttons">
                            <button onclick="window.history.back()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                    <path d="M6.66667 12.6663L2 7.99967M2 7.99967L6.66667 3.33301M2 7.99967L14 7.99967" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                                <span>@lang('app.backbutton')</span>
                            </button>
                                <div class="siteDetails__portada--buttons-ShareModal">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                            <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M12.5,10 C13.8807119,10 15,11.1192881 15,12.5 C15,13.8807119 13.8807119,15 12.5,15 C11.1192881,15 10,13.8807119 10,12.5 C10,11.1192881 11.1192881,10 12.5,10 Z M3.5,5.5 C4.88071187,5.5 6,6.61928813 6,8 C6,9.38071187 4.88071187,10.5 3.5,10.5 C2.11928813,10.5 1,9.38071187 1,8 C1,6.61928813 2.11928813,5.5 3.5,5.5 Z M12.5,1 C13.8807119,1 15,2.11928813 15,3.5 C15,4.88071187 13.8807119,6 12.5,6 C11.1192881,6 10,4.88071187 10,3.5 C10,2.11928813 11.1192881,1 12.5,1 Z" id="Oval-2"></path>
                                                <line x1="9.5" y1="4.5" x2="5.66" y2="6.38" id="Line"></line><line x1="9.5" y1="11.5" x2="6" y2="9.5" id="Line"></line>
                                            </g>
                                        </svg>
                                        <span>@lang('app.sharebutton')</span>
                                    </button>
                                    <div class="portada__buttons--ShareModal-Modal">
                                        <div class="buttons__ShareModal--Modal-title">
                                            <h4>@lang('app.copytitle')</h4>
                                        </div>
                                        <div class="buttons__ShareModal--Modal-Icons">
                                            <div class="ShareModal__Modal--Icons-Button" id="share-facebook">
                                                <img src="{{ asset('/images/facebook_icon.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="ShareModal__Modal--Icons-Button" id="share-whatsapp">
                                                <img src="{{ asset('/images/whatsapp_icon.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="ShareModal__Modal--Icons-Button" id="share-twitter">
                                                <img src="{{ asset('/images/X_icon.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="ShareModal__Modal--Icons-Button" id="share-instagram">
                                                <img src="{{ asset('/images/instagram_icon.png') }}" alt="" srcset="">
                                            </div>
                                        </div>
                                        <div class="buttons__ShareModal--Modal-CopyButton">
                                            <div class="buttons__ShareModal--Modal-input">
                                                <label for="#">@lang('app.copylink')</label>
                                                <input type="text" name="webLink" id="webLink">
                                            </div>
                                            <button onclick="copyLink()"><span class="copyMessage">@lang('app.copybutton')</span> <span class="copiedMessage"><i class="fa-solid fa-check"></i></span></button>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    @if ($status == "Alojamientos")
                        @php
                            $galeria = explode(',', $alojamiento->Galeria);
                        @endphp
                        <div class="Content__siteDetails--portada-imagesGrid">
                            <div class="Content__siteDetails--portada-mainImage">
                                <img src="{{asset('storage/alojamientos/' . $galeria[0])}}" alt="">
                            </div>
                            <div class="Content__siteDetails--portada-images">
                                @foreach ($galeria as $index => $image)
                                    @if ($index != 0 && $index <= 4)
                                        <div class="siteDetails__portada--images-image">
                                            <img src="{{asset('storage/alojamientos/'  . $image) }}" alt="">
                                            @if ($index == 4 && count($galeria) > 5)
                                                <div class="counterImages">
                                                    +{{count($galeria) - 5}} @lang('app.countpics')
                                                </div>
                                            @endif
                                        </div> 
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="Content__siteDetails--portada-allImages">
                            <div class="siteDetails__portada--allImages-header">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12.5,10 C13.8807119,10 15,11.1192881 15,12.5 C15,13.8807119 13.8807119,15 12.5,15 C11.1192881,15 10,13.8807119 10,12.5 C10,11.1192881 11.1192881,10 12.5,10 Z M3.5,5.5 C4.88071187,5.5 6,6.61928813 6,8 C6,9.38071187 4.88071187,10.5 3.5,10.5 C2.11928813,10.5 1,9.38071187 1,8 C1,6.61928813 2.11928813,5.5 3.5,5.5 Z M12.5,1 C13.8807119,1 15,2.11928813 15,3.5 C15,4.88071187 13.8807119,6 12.5,6 C11.1192881,6 10,4.88071187 10,3.5 C10,2.11928813 11.1192881,1 12.5,1 Z" id="Oval-2"></path>
                                            <line x1="9.5" y1="4.5" x2="5.66" y2="6.38" id="Line"></line><line x1="9.5" y1="11.5" x2="6" y2="9.5" id="Line"></line>
                                        </g>
                                    </svg>
                                    <span>@lang('app.sharebutton')</span>
                                </button>
                                <span class="closeAllImages">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M14,2 L2,14 M2,2 L14,14"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="container">
                                <div class="siteDetails__portada--allImages-body">
                                    <div class="siteDetails__portada--allImages-container twoCols">
                                        @foreach ($galeria as $image)
                                            <div class="siteDetails__portada--images-image">
                                                <img src={{asset('storage/alojamientos/'  . $image) }} alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif($status == "Sitios")
                        @php
                            $galeria = explode(',', $sitio->Galeria);
                        @endphp
                        <div class="Content__siteDetails--portada-imagesGrid">
                            <div class="Content__siteDetails--portada-mainImage">
                                <img src="{{asset('storage/lugares/' . $galeria[0])}}" alt="">
                            </div>
                            <div class="Content__siteDetails--portada-images">
                                @foreach ($galeria as $index => $image)
                                    @if ($index != 0 && $index <= 4)
                                        <div class="siteDetails__portada--images-image">
                                            <img src="{{asset('storage/lugares/'  . $image) }}" alt="">
                                            @if ($index == 4 && count($galeria) > 5)
                                                <div class="counterImages">
                                                    +{{count($galeria) - 5}} @lang('app.countpics')
                                                </div>
                                            @endif
                                        </div> 
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="Content__siteDetails--portada-allImages">
                            <div class="siteDetails__portada--allImages-header">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12.5,10 C13.8807119,10 15,11.1192881 15,12.5 C15,13.8807119 13.8807119,15 12.5,15 C11.1192881,15 10,13.8807119 10,12.5 C10,11.1192881 11.1192881,10 12.5,10 Z M3.5,5.5 C4.88071187,5.5 6,6.61928813 6,8 C6,9.38071187 4.88071187,10.5 3.5,10.5 C2.11928813,10.5 1,9.38071187 1,8 C1,6.61928813 2.11928813,5.5 3.5,5.5 Z M12.5,1 C13.8807119,1 15,2.11928813 15,3.5 C15,4.88071187 13.8807119,6 12.5,6 C11.1192881,6 10,4.88071187 10,3.5 C10,2.11928813 11.1192881,1 12.5,1 Z" id="Oval-2"></path>
                                            <line x1="9.5" y1="4.5" x2="5.66" y2="6.38" id="Line"></line><line x1="9.5" y1="11.5" x2="6" y2="9.5" id="Line"></line>
                                        </g>
                                    </svg>
                                    <span>@lang('app.sharebutton')</span>
                                </button>
                                <span class="closeAllImages">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M14,2 L2,14 M2,2 L14,14"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="container">
                                <div class="siteDetails__portada--allImages-body">
                                    <div class="siteDetails__portada--allImages-container twoCols">
                                        @foreach ($galeria as $image)
                                            <div class="siteDetails__portada--images-image">
                                                <img src={{asset('storage/lugares/'  . $image) }} alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif($status == "Negocios")
                        @php
                            $galeria = explode(',', $negocio->Galeria);
                        @endphp
                        <div class="Content__siteDetails--portada-imagesGrid">
                            <div class="Content__siteDetails--portada-mainImage">
                                <img src="{{asset('storage/negocios/' . $galeria[0])}}" alt="">
                            </div>
                            <div class="Content__siteDetails--portada-images">
                                @foreach ($galeria as $index => $image)
                                    @if ($index != 0 && $index <= 4)
                                        <div class="siteDetails__portada--images-image">
                                            <img src="{{asset('storage/negocios/'  . $image) }}" alt="">
                                            @if ($index == 4 && count($galeria) > 5)
                                                <div class="counterImages">
                                                    +{{count($galeria) - 5}} @lang('app.countpics')
                                                </div>
                                            @endif
                                        </div> 
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="Content__siteDetails--portada-allImages">
                            <div class="siteDetails__portada--allImages-header">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <g stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12.5,10 C13.8807119,10 15,11.1192881 15,12.5 C15,13.8807119 13.8807119,15 12.5,15 C11.1192881,15 10,13.8807119 10,12.5 C10,11.1192881 11.1192881,10 12.5,10 Z M3.5,5.5 C4.88071187,5.5 6,6.61928813 6,8 C6,9.38071187 4.88071187,10.5 3.5,10.5 C2.11928813,10.5 1,9.38071187 1,8 C1,6.61928813 2.11928813,5.5 3.5,5.5 Z M12.5,1 C13.8807119,1 15,2.11928813 15,3.5 C15,4.88071187 13.8807119,6 12.5,6 C11.1192881,6 10,4.88071187 10,3.5 C10,2.11928813 11.1192881,1 12.5,1 Z" id="Oval-2"></path>
                                            <line x1="9.5" y1="4.5" x2="5.66" y2="6.38" id="Line"></line><line x1="9.5" y1="11.5" x2="6" y2="9.5" id="Line"></line>
                                        </g>
                                    </svg>
                                    <span>@lang('app.sharebutton')</span>
                                </button>
                                <span class="closeAllImages">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" stroke="#212121">
                                        <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M14,2 L2,14 M2,2 L14,14"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="container">
                                <div class="siteDetails__portada--allImages-body">
                                    <div class="siteDetails__portada--allImages-container twoCols">
                                        @foreach ($galeria as $image)
                                            <div class="siteDetails__portada--images-image">
                                                <img src={{asset('storage/negocios/'  . $image) }} alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="Content__siteDetails--portada-imagesGrid">
                            <div class="Content__siteDetails--portada-mainImage">
                                <img src="images/singleDetail1.webp" alt="">
                            </div>
                            <div class="Content__siteDetails--portada-images">
                                <div class="siteDetails__portada--images-image">
                                    <img src="images/singleDetail2.webp" alt="">
                                </div>
                                <div class="siteDetails__portada--images-image">
                                    <img src="images/singleDetail3.webp" alt="">
                                </div>
                                <div class="siteDetails__portada--images-image">
                                    <img src="images/singleDetail4.webp" alt="">
                                </div>
                                <div class="siteDetails__portada--images-image">
                                    <img src="images/singleDetail5.webp" alt="">
                                    <div class="counterImages">
                                        +9 @lang('app.countpics')
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="Content__siteDetails--placeInfo {{ $status === 'Sitios' || $status === 'Negocios' ? 'templateBox' : '' }}">
                    <div class="Content__siteDetails--placeInfo-placement">
                        {{$status == "Sitios" ? $sitio->Nombre : ''}}{{$status == "Alojamientos" ? $alojamiento->Nombre : ''}}{{$status == "Negocios" ? $negocio->Nombre : ''}}
                    </div>
                    <div class="Content__siteDetails--placeInfo-name">
                        <h2>{{$status == "Sitios" ? $sitio->Nombre : ''}}{{$status == "Alojamientos" ? $alojamiento->Nombre : ''}}{{$status == "Negocios" ? $negocio->Nombre : ''}}</h2>
                    </div>
                    @if ($status == "Alojamientos")
                    @php 

                        $infoAlojamientosArray = explode(', ', $alojamiento->InfoPropiedad);

                        $infoAlojamiento = array_map('htmlspecialchars', $infoAlojamientosArray);

                    @endphp
                    <div class="Content__siteDetails--placeInfo-specs">
                        @foreach ($infoAlojamiento as $infoAlojamientoItem)
                            <span>{{ $infoAlojamientoItem }}</span>
                        @endforeach
                    </div>
                    <div class="Content__siteDetails--placeInfo-technologies">
                        @foreach ($alojamiento->beneficios as $Beneficio)
                            <div class="Content__siteDetails--placeEquipment-item">
                                <div class="siteDetails--placeInfo-technologies-technology">
                                    <div class="placeInfo__technologies--technology-icon">
                                        {!! $Beneficio['Icono'] !!}
                                    </div>
                                    <div class="placeInfo__technologies--technology-details">
                                        <h4>{{$Beneficio['Nombre']}}</h4>
                                        <p>{{$Beneficio['Descripcion']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="Content__siteDetails--propertyAbout {{ $status === 'Sitios' || $status === 'Negocios' ? 'templateBox' : '' }}">
                    <div class="Content__siteDetails--propertyAbout-title">
                        @if ($status == "Sitios")
                        <h2>@lang('app.abouttype_1')</h2>
                        @endif
                        @if ($status == "Alojamientos")
                        <h2>@lang('app.abouttype_2')</h2>
                        @endif
                        @if ($status == "Negocios")
                        <h2>@lang('app.abouttype_3')</h2>
                        @endif
                    </div>
                    <div class="Content__siteDetails--propertyAbout-body">
                        <p>
                            {!! nl2br(e($status == "Sitios" ? $sitio->Descripcion : '')) !!}
                            {!! nl2br(e($status == "Alojamientos" ? $alojamiento->Descripcion : '')) !!}
                            {!! nl2br(e($status == "Negocios" ? $negocio->Descripcion : '')) !!}
                        </p>
                    </div>
                    <div class="Content__siteDetails--propertyAbout-button">
                        <button>@lang('app.showmorebutton')</button>
                    </div>
                </div>
                @if ($status == "Alojamientos" && !$equipamiento_nm->isEmpty())
                <div class="Content__siteDetails--placeDescription">
                    <div class="Content__siteDetails--placeDescription-title">
                        <h2>@lang('app.abouttext')</h2>
                    </div>
                    @if ($alojamiento->informacion !== null)
                    <div class="Content__siteDetails--placeDescription-propertyInfo">
                        <div class="siteDetails__placeDescription--propertyInfo-title">
                            <h4>@lang('app.aboutownership')</h4>
                        </div>
                        <div class="siteDetails__placeDescription--propertyInfo-grid">
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" stroke="#212121">
                                    <path d="M19.5 21V5C19.5 3.89543 18.6046 3 17.5 3H7.5C6.39543 3 5.5 3.89543 5.5 5V21M19.5 21L21.5 21M19.5 21H14.5M5.5 21L3.5 21M5.5 21H10.5M9.5 6.99998H10.5M9.5 11H10.5M14.5 6.99998H15.5M14.5 11H15.5M10.5 21V16C10.5 15.4477 10.9477 15 11.5 15H13.5C14.0523 15 14.5 15.4477 14.5 16V21M10.5 21H14.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>{{ $alojamiento->informacion->Pisos }} @lang('app.stores')</span>
                            </div>
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" stroke="#212121">
                                    <rect x="3.5" y="3" width="18" height="18" fill="none" stroke-linejoin="round"></rect>
                                    <path d="M10.3471 18L6.5 18M6.5 18L6.5 14.153M6.5 18L11.4463 13.0539M14.6529 6L18.5 6M18.5 6L18.5 9.84696M18.5 6L13.5537 10.9461" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <span>{{ $alojamiento->informacion->Espacio }} m²</span>
                            </div>
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <span class="itemAscensor">

                                </span>
                                <span>{{ $alojamiento->informacion->Ascensor == 1 ? __('app.elevator') : __('app.Sinelevator') }}</span>
                            </div>
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <span class="itemAccesibilidad">

                                </span>
                                <span>{{ $alojamiento->informacion->Accesibilidad == 1 ? __('app.invalid') : __('app.Sininvalid') }}</span>
                            </div>
                            <div class="siteDetails__placeDescription--propertyInfo-item">
                                <span class="itemParqueo">

                                </span>
                                <span>{{ $alojamiento->informacion->Parqueo == 1 ? __('app.park') : __('app.Sinpark') }}</span>
                            </div>
                        </div>
                    </div>
                    <script>
                        var ascensor = @json($alojamiento->informacion->Ascensor);
                        var accesibilidad = @json($alojamiento->informacion->Accesibilidad);
                        var parqueo = @json($alojamiento->informacion->Parqueo);

                        var itemAscensor = document.querySelector('.itemAscensor');
                        var itemAccesibilidad = document.querySelector('.itemAccesibilidad');
                        var itemParqueo = document.querySelector('.itemParqueo');

                        if(ascensor == true){
                            itemAscensor.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="#212121">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.8885 22.125H3.11136C2.70636 22.125 2.375 21.8046 2.375 21.4129V2.58709C2.375 2.19544 2.70636 1.875 3.11136 1.875H21.8885C22.2935 1.875 22.625 2.19544 22.625 2.58709V21.4129C22.634 21.7957 22.3027 22.125 21.8885 22.125Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6.125 21.8386V6.375H18.875V21.8386" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.5 6.75L12.5 21.75" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.125 4.125L15.875 4.125" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            `
                        }else{
                            itemAscensor.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" stroke="#212121">
                                    <path d="M22.625 18.375V2.58709C22.625 2.19544 22.2935 1.875 21.8885 1.875H6.02128M18.875 22.125H3.11136C2.70636 22.125 2.375 21.8046 2.375 21.4129L2.375 4.875" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M6.125 21.8386V8.25M18.875 22.125V21M10.625 6.375H18.875V15" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12.5 6.75V8.25M12.5 21.75L12.5 14.625" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M9.125 4.125L15.875 4.125" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <line x1="2.70711" y1="1.66406" x2="23" y2="21.957" fill="none" stroke-linecap="round"></line>
                            </svg>
                            `
                        }

                        if(accesibilidad == true){
                            itemAccesibilidad.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 25" stroke="#212121">
                                    <path d="M14.4046 19.414C13.6903 20.4829 12.6752 21.3161 11.4874 21.808C10.2997 22.3 8.99279 22.4287 7.73192 22.1779C6.47104 21.9271 5.31285 21.3081 4.40381 20.399C3.49477 19.49 2.8757 18.3318 2.6249 17.0709C2.37409 15.81 2.50282 14.5031 2.99479 13.3154C3.48676 12.1277 4.31988 11.1125 5.3888 10.3983C5.89003 10.0634 6.43257 9.80166 7 9.61816" fill="none" stroke-linecap="round"></path>
                                    <circle cx="10" cy="4.80273" r="2.5" fill="none"></circle>
                                    <path d="M9.5 7.80273V15.681H15.7135L18.0805 22.056H21.5" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <line x1="10" y1="10.8027" x2="19" y2="10.8027" fill="none" stroke-linecap="round"></line>
                            </svg>
                            `
                        }else{
                            itemAccesibilidad.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 25" stroke="#212121">
                                    <path d="M14.4046 19.414C13.6903 20.4829 12.6752 21.3161 11.4874 21.808C10.2997 22.3 8.99279 22.4287 7.73192 22.1779C6.47104 21.9271 5.31285 21.3081 4.40381 20.399C3.49477 19.49 2.8757 18.3318 2.6249 17.0709C2.37409 15.81 2.50282 14.5031 2.99479 13.3154C3.48676 12.1277 4.31988 11.1125 5.3888 10.3983C5.89003 10.0634 6.43257 9.80166 7 9.61816" fill="none" stroke-linecap="round"></path>
                                    <path d="M7.76697 3.67749C8.17872 2.86198 9.02406 2.30273 10 2.30273C11.3807 2.30273 12.5 3.42202 12.5 4.80273C12.5 5.86876 11.8328 6.77895 10.8932 7.13846" fill="none" stroke-linecap="round"></path>
                                    <path d="M9.5 12.3027L9.5 15.681H12.875" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <line x1="2.70711" y1="1.9668" x2="23" y2="22.2597" fill="none" stroke-linecap="round"></line>
                                    <path d="M15 10.8027H19" fill="none" stroke-linecap="round"></path>
                            </svg>
                            `
                        }

                        if(parqueo == true){
                            itemParqueo.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="#212121">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.3885 23.0708H2.61136C2.20636 23.0708 1.875 22.7504 1.875 22.3587V3.53289C1.875 3.14124 2.20636 2.8208 2.61136 2.8208H21.3885C21.7935 2.8208 22.125 3.14124 22.125 3.53289V22.3587C22.134 22.7415 21.8027 23.0708 21.3885 23.0708Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.3477 5.8208H6.375V20.0708H8.625V15.3663H13.3477C16.0939 15.3663 17.625 13.2795 17.625 10.6285C17.625 7.97753 16.0939 5.8208 13.3477 5.8208Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9055 13.3208H8.625V8.0708H12.9055C14.2672 8.0708 15.375 9.24838 15.375 10.6958C15.375 12.1432 14.2672 13.3208 12.9055 13.3208Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            `
                        }else{
                            itemParqueo.innerHTML = `
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 24" stroke="#212121">
                                    <path d="M22.125 19.3208V3.53289C22.125 3.14124 21.7935 2.8208 21.3885 2.8208L5.625 2.8208M19.5 23.0708H2.61136C2.20636 23.0708 1.875 22.7504 1.875 22.3587V5.33584" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M16.5 14.0104C17.2365 13.1559 17.625 11.9638 17.625 10.6285C17.625 7.97753 16.0939 5.8208 13.3477 5.8208H8.25M6.375 9.9458V20.0708H8.625V15.3663H11.8057" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M8.625 12.1958V13.3208H10.125M14.8233 12.3478C15.1681 11.8964 15.375 11.3213 15.375 10.6958C15.375 9.24838 14.2672 8.0708 12.9055 8.0708H10.7652" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <line x1="2.20711" y1="2.60986" x2="22.5" y2="22.9028" fill="none" stroke-linecap="round"></line>
                            </svg>
                            `
                        }
                    </script>
                    @endif
                    <div class="Content__siteDetails--placeDescription-roomsInfo">
                        <div class="siteDetails__placeDescription--roomsInfo-title">
                            <h4>@lang('app.aboutroom')</h4>
                        </div>
                            <div class="siteDetails__placeDescription--roomsInfo-grid">
                            @foreach ($alojamiento->habitaciones as $habitacion)
                                <div class="siteDetails__placeDescription--roomsInfo-item">
                                        {!! $habitacion->Icono->SVG !!}
                                    <p>{{ $habitacion->Titulo }}</p>
                                    <span>{{ $habitacion->Descripcion }}</span>
                                </div>
                            @endforeach
                        </div> 
                    </div>
                </div>
                <div class="Content__siteDetails--placeEquipment">
                    <div class="Content__siteDetails--placeEquipment-title">
                        <h2>@lang('app.equipment')</h2>
                    </div>
                    <div class="Content__siteDetails--placeEquipment-grid">
                        @foreach ($equipamiento_nm as $Equipamiento_nm)
                            <div class="Content__siteDetails--placeEquipment-item">
                                {!! $Equipamiento_nm['Icono'] !!}
                                <span>{{$Equipamiento_nm['Nombre']}}</span>
                            </div>
                        @endforeach
                    </div>
                    @if (!$equipamiento_m->isEmpty())
                        <div class="Content__siteDetails--placeEquipment-button">
                            <button>@lang('app.equipbutton')</button>
                        </div>       
                    @endif
                    <div class="Content__siteDetails--placeEquipment-modal">
                        <div class="Content__siteDetails--placeEquipment-allEquipments">
                            <div class="siteDetails__placeEquipment--allEquipments-heading">
                                <div class="siteDetails__placeEquipment--allEquipments-title">
                                    <h2>@lang('app.equipmodal')</h2>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" stroke="#212121"><path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M14,2 L2,14 M2,2 L14,14"></path></svg>
                                </div>
                            </div>
                            <div class="siteDetails__placeEquipment--allEquipments-body">
                                <div class="placeEquipment__allEquipments--body-catContainer">
                                    @foreach ($equipamiento_m as $Equipamiento_m)
                                    <div class="placeEquipment__allEquipments--body-item">
                                        {!! $Equipamiento_m['Icono'] !!}
                                        <div class="placeEquipment__allEquipments--body-details">
                                            <p>{{$Equipamiento_m['Nombre']}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Content__siteDetails--placeGuides">
                    <div class="container">
                        <div class="Content__siteDetails--placeGuides-container">
                            <div class="Content__siteDetails--placeGuides-card">
                                <div class="Content__siteDetails--placeGuides-heading"></div>
                                <div class="Content__siteDetails--placeGuides-body">
                                    <div class="Content__siteDetails--placeGuides-profileIcon"></div>
                                    <div class="Content__siteDetails--placeGuides-name"></div>
                                    <div class="Content__siteDetails--placeGuides-phone"></div>
                                </div>
                                <div class="Content__siteDetails--placeGuides-footer"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if ($guias !== null && !$guias->isEmpty() && $status == "Sitios")
                <div class="Content__guides">
                    <div class="container">
                        <div class="Content__guides--title">
                            <h2>@lang('app.guidestitle')</h2>
                        </div>
                        <div class="Content__guides--container">
                            @foreach ($guias as $guia)
                            <div class="Content__guides--slide">
                                <div class="Content__guides--heading"></div>
                                <div class="Content__guides--details">
                                    <div class="Content__guides--icon">
                                        @php
                                        $img = $guia->Imagen;
                                        @endphp
                                        <img src="{{asset('storage/guias/' . $img)}}" alt="" srcset="">
                                    </div>
                                    <div class="Content__guides--name">
                                        <h4>{{ $guia->Nombre }}</h4>
                                    </div>
                                    <div class="Content__guides--phone">
                                        <p>{{ $guia->Telefono }}</p>
                                    </div>
                                    <div class="Content__guides--experiences">
                                        <p>{{ $guia->Experiencias }}</p>
                                    </div>
                                </div>
                                <div class="Content__guides--languages">
                                    @foreach (json_decode($guia->Idiomas) as $idioma)
                                    <span class="language">{{ $idioma }}</span>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif


                <div class="Content__siteDetails--Location {{ $status === 'Sitios' || $status === 'Negocios' ? 'templateBox' : '' }}">
                    <div class="Content__siteDetails--Location-Title">
                        <span>@lang('app.ubication')</span>
                    </div>
                    <div class="Content__siteDetails--Location-Subtitle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 17 17" stroke="#212121">
                            <path d="M12.2712 12.0504C11.5895 12.7321 10.0957 14.2259 9.20633 15.1153C8.81581 15.5058 8.18431 15.5059 7.79379 15.1154C6.91934 14.241 5.45653 12.7781 4.72875 12.0504C2.64596 9.96757 2.64596 6.59069 4.72875 4.5079C6.81155 2.4251 10.1884 2.4251 12.2712 4.5079C14.354 6.59069 14.354 9.96757 12.2712 12.0504Z" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path d="M10.5 8.27913C10.5 9.3837 9.60456 10.2791 8.49999 10.2791C7.39542 10.2791 6.49999 9.3837 6.49999 8.27913C6.49999 7.17456 7.39542 6.27913 8.49999 6.27913C9.60456 6.27913 10.5 7.17456 10.5 8.27913Z" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                        <span>{{$status == "Sitios" ? $sitio->Nombre : ''}}{{$status == "Alojamientos" ? $alojamiento->Nombre : ''}}{{$status == "Negocios" ? $negocio->Nombre : ''}}</span>
                    </div>
                    <div class="Content__siteDetails--Location-Map">
                        @php
                            $langcode = App()->getLocale();
                            $mapUrl = "https://maps.google.com/maps?width=600&amp;height=400&hl=".$langcode."&amp";

                            if ($status == "Sitios" && isset($sitio)) {
                                $mapUrl .= "&q=" . $sitio->Latitud . "," . $sitio->Longitud;
                                $mapUrl .= "&t=k&z=16&ie=UTF8&&iwloc=B&output=embed&ll=" . $sitio->Latitud . "," . $sitio->Longitud;
                            }elseif ($status == "Alojamientos" && isset($alojamiento)) {
                                $mapUrl .= "&q=" . $alojamiento->Latitud . "," . $alojamiento->Longitud;
                                $mapUrl .= "&t=k&z=16&ie=UTF8&&iwloc=B&output=embed&ll=" . $alojamiento->Latitud . "," . $alojamiento->Longitud;
                            }elseif ($status == "Negocios" && isset($negocio)) {
                                $mapUrl .= "&q=" . $negocio->Latitud . "," . $negocio->Longitud;
                                $mapUrl .= "&t=k&z=16&ie=UTF8&&iwloc=B&output=embed&ll=" . $negocio->Latitud . "," . $negocio->Longitud;
                            }
                        @endphp
                        <div class="mapouter"><div class="gmap_canvas"><iframe src="{{$mapUrl}}" id="gmap_canvas" frameborder="0" scrolling="no"></iframe><style>.mapouter{position:relative;text-align:right;}</style><style>.gmap_canvas{overflow:hidden;background:none!important;}</style><a href="https://www.eireportingonline.com"></a></div></div>
                    </div>
                </div>
                @if ($status == "Alojamientos")
                <div class="Content__siteDetails--KnowMore">
                    <div class="Content__siteDetails--KnowMore-Title">
                        <span>@lang('app.knowmore')</span>
                    </div>
                    <div class="Content__siteDetails--KnowMore-flex">
                        <div class="siteDetails__KnowMore--flex-Terms">
                            <div class="KnowMore__flex--Terms-Title">
                                <span>@lang('app.detailtitle')</span>
                            </div>
                            @foreach ($extra_nm as $Extra_nm)
                            <div class="KnowMore__flex--Terms-NormalItem">
                                {!! $Extra_nm['Icono'] !!}
                                <span>{{$Extra_nm['Nombre']}}</span>
                            </div>
                            @endforeach
                            @if (!$extra_m->isEmpty())
                                <div class="Content__siteDetails--placeExtra-button">
                                    <button>@lang('app.detailbutton')</button>
                                </div>
                            @endif
                        </div>
                        <div class="Content__siteDetails--placeExtra-modal">
                            <div class="Content__siteDetails--placeEquipment-allExtra">
                                <div class="siteDetails__placeEquipment--allExtra-heading">
                                    <div class="siteDetails__placeEquipment--allExtra-title">
                                        <h2>@lang('app.detailmodal')</h2>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" stroke="#212121"><path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M14,2 L2,14 M2,2 L14,14"></path></svg>
                                    </div>
                                </div>
                                <div class="siteDetails__placeEquipment--allEquipments-body">
                                    <div class="placeEquipment__allEquipments--body-catContainer">
                                        @foreach ($extra_m as $Extra_m)
                                        <div class="placeEquipment__allEquipments--body-item">
                                            {!! $Extra_m['Icono'] !!}
                                            <div class="placeEquipment__allEquipments--body-details">
                                                <p>{{$Extra_m['Nombre']}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="siteDetails__KnowMore--flex-TermsTwo">
                            <div class="KnowMore__flex--TermsTwo-Finishing">
                                <div class="flex__TermsTwo--Finishing-Title">
                                    <span>@lang('app.endinfo')</span>
                                </div>
                                <div class="flex__TermsTwo--Finishing-Text">
                                    <span>{{$alojamiento->Cancelacion}}</span>
                                </div>
                            </div>
                            <div class="KnowMore__flex--TermsTwo-Finishing">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="Content__siteDetails--Reserve">
                    <div class="Content__siteDetails--Reserve-Title">
                        <span>@lang('app.howbook')</span>
                    </div>
                    <div class="Content__siteDetails--Reserve-Item">
                        <div class="siteDetails__Reserve--Item-Icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="" viewBox="0 0 32 32">
                                <path d="M26.9667 6.78129L27.451 6.90581V6.90581L26.9667 6.78129ZM21.3229 28.7296L20.8386 28.6051L21.3229 28.7296ZM3.77042 11.1771L3.89494 11.6614L3.77042 11.1771ZM25.7187 5.53329L25.8432 6.01754V6.01753L25.7187 5.53329ZM19.6053 29.1991L19.2518 29.5527L19.6053 29.1991ZM3.30089 12.8947L2.94733 13.2482L2.94734 13.2482L3.30089 12.8947ZM7.8293 24.6709L7.33236 24.6157C7.31559 24.7667 7.36835 24.9171 7.47575 25.0245C7.58316 25.1319 7.73356 25.1846 7.88452 25.1679L7.8293 24.6709ZM18.7013 13.7989L19.1609 13.9959C19.2414 13.808 19.1994 13.59 19.0549 13.4454C18.9103 13.3008 18.6923 13.2588 18.5043 13.3394L18.7013 13.7989ZM26.4825 6.65677L20.8386 28.6051L21.8071 28.8541L27.451 6.90581L26.4825 6.65677ZM3.89494 11.6614L25.8432 6.01754L25.5942 5.04904L3.64589 10.6929L3.89494 11.6614ZM19.9589 28.8456L14.7059 23.5925L13.9988 24.2996L19.2518 29.5527L19.9589 28.8456ZM8.90765 17.7942L3.65444 12.5411L2.94734 13.2482L8.20055 18.5013L8.90765 17.7942ZM3.64589 10.6929C2.50227 10.987 2.11236 12.4132 2.94733 13.2482L3.65444 12.5411C3.36698 12.2537 3.50122 11.7626 3.89494 11.6614L3.64589 10.6929ZM20.8386 28.6051C20.7374 28.9988 20.2463 29.133 19.9589 28.8456L19.2518 29.5527C20.0868 30.3876 21.513 29.9977 21.8071 28.8541L20.8386 28.6051ZM27.451 6.90581C27.7399 5.78207 26.7179 4.76008 25.5942 5.04904L25.8432 6.01753C26.2301 5.91805 26.5819 6.26989 26.4825 6.65677L27.451 6.90581ZM8.32624 24.7261L9.05104 18.2029L8.05716 18.0925L7.33236 24.6157L8.32624 24.7261ZM14.2971 23.4491L7.77408 24.174L7.88452 25.1679L14.4075 24.443L14.2971 23.4491ZM18.2417 13.602L13.8927 23.7491L14.8119 24.1431L19.1609 13.9959L18.2417 13.602ZM8.75106 18.6073L18.8983 14.2585L18.5043 13.3394L8.35714 17.6882L8.75106 18.6073Z" fill="#212121"></path>
                            </svg>
                        </div>
                        <div class="siteDetails__Reserve--Item-Text">
                            <div class="Reserve__Item--Text-Title">
                                <span>Envia una petición</span>
                            </div>
                            <div class="Reserve__Item--Text-Paragraph">
                                <span>Selecciona las fechas de entrada y salida y proporciona tus datos personales para enviar una solicitud no vinculante para el apartamento al propietario. No dudes en solicitar más de un apartamento. Las solicitudes no obligan a reservar.</span>
                            </div>
                        </div>
                    </div>
                    <div class="Content__siteDetails--Reserve-Item">
                        <div class="siteDetails__Reserve--Item-Icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" stroke="#212121"><rect x="12.5" y="2" width="8" height="3" rx="1" fill="none" stroke-linejoin="round"></rect>
                                <path d="M17.5 8V6.5V5H15.5V8" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                <circle cx="16.5" cy="19" r="2" fill="none"></circle><path d="M24.5 11.1465L27.1464 8.50006" fill="none" stroke-linecap="round"></path>
                                <path d="M16.5 17L16.5 12" fill="none" stroke-linecap="round"></path>
                                <path d="M16.5 24L16.5 21" fill="none" stroke-linecap="round"></path><path d="M25.6462 7L28.4747 9.82845" fill="none" stroke-linecap="round"></path>
                                <path d="M8.95017 11C10.9202 9.14015 13.577 8 16.5 8C22.5752 8 27.5 12.9249 27.5 19C27.5 25.0751 22.5752 30 16.5 30C12.4486 30 8.90879 27.8097 7 24.5487" fill="none" stroke-linecap="round"></path>
                                <path d="M12.5 14L3.5 14" fill="none" stroke-linecap="round"></path>
                                <path d="M9.5 18H2.5" fill="none" stroke-linecap="round"></path>
                                <path d="M11.5 22H3.5" fill="none" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="siteDetails__Reserve--Item-Text">
                            <div class="Reserve__Item--Text-Title">
                                <span>Obtén una respuesta en 48h</span>
                            </div>
                            <div class="Reserve__Item--Text-Paragraph">
                                <span>Una vez que el propietario haya confirmado su solicitud, estarás listo para finalizar tu reserva realizando un pago con su método de pago preferido. El día de la mudanza, el alquiler del primer mes se transferirá al propietario a través de Homelike. Todos los pagos posteriores, incluido el depósito (si se requiere), deben transferirse directamente al arrendador.</span>
                            </div>
                        </div>
                    </div>
                    <div class="Content__siteDetails--Reserve-Item">
                        <div class="siteDetails__Reserve--Item-Icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" stroke="#212121" viewBox="0 0 32 32">
                                <path d="M17.341 10.6367L10.523 17.4548L13.8857 23.9643L28 28.1138L23.8506 13.9995L17.341 10.6367Z" fill="none" stroke-linejoin="round"></path>
                                <path d="M12.2152 3.35719C11.8408 2.89844 11.152 2.86364 10.7333 3.28234L3.1683 10.8473C2.7496 11.266 2.78439 11.9548 3.24315 12.3292L9.37432 17.3326C9.77198 17.6571 10.3507 17.6279 10.7137 17.265L17.1509 10.8277C17.5139 10.4648 17.5431 9.88602 17.2186 9.48836L12.2152 3.35719Z" fill="none" stroke-linejoin="round"></path>
                                <circle r="1.89872" transform="matrix(-0.707107 0.707107 0.707107 0.707107 17.96 18.0739)" fill="none"></circle><path d="M19.6377 19.752L27.886 28.0002" fill="none" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="siteDetails__Reserve--Item-Text">
                            <div class="Reserve__Item--Text-Title">
                                <span>Firma el contrato online</span>
                            </div>
                            <div class="Reserve__Item--Text-Paragraph">
                                <span>Firma el contrato de alquiler online con el proceso seguro Hello Sign y asegúrate de descargar una copia del contrato.</span>
                            </div>
                        </div>
                    </div>
                    <div class="Content__siteDetails--Reserve-Item">
                        <div class="siteDetails__Reserve--Item-Icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" stroke="#212121">
                                <path d="M20 12.5C20 8.08172 16.4183 4.5 12 4.5C7.58172 4.5 4 8.08172 4 12.5C4 16.9183 7.58172 20.5 12 20.5C12.8082 20.5 13.5885 20.3801 14.3239 20.1572L22.2761 28.1095C22.5262 28.3595 22.8653 28.5 23.219 28.5L26.6667 28.5C27.403 28.5 28 27.903 28 27.1667L28 23.1667L25.3333 23.1667L25.3333 20.5L22.6667 20.5L22.6667 17.8333L19.6572 14.8239C19.8801 14.0885 20 13.3082 20 12.5Z" fill="none" stroke-linecap="round" stroke-linejoin="round"></path>
                                <circle cx="10" cy="10.5" r="2" transform="rotate(-90 10 10.5)" fill="none"></circle>
                                <path d="M26.6665 28.1095L17.3332 18.776" fill="none" stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="siteDetails__Reserve--Item-Text">
                            <div class="Reserve__Item--Text-Title">
                                <span>Múdate al apartamento</span>
                            </div>
                            <div class="Reserve__Item--Text-Paragraph">
                                <span>Recibirás la dirección exacta de su nuevo apartamento y los datos de contacto del propietario para concertar la entrega de llaves. ¡Ahora todo lo que queda por hacer es mudarse a tu apartamento y relajarse!</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                @endif
            </div>
        </div>
    </div>
    <script>
        document.getElementById('share-facebook').addEventListener('click', function() {
            const url = document.getElementById('webLink').value;
            const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
            window.open(shareUrl, '_blank');
        });

        document.getElementById('share-whatsapp').addEventListener('click', function() {
            const url = document.getElementById('webLink').value;
            const shareUrl = `https://wa.me/?text=${encodeURIComponent(url)}`;
            window.open(shareUrl, '_blank');
        });

        document.getElementById('share-twitter').addEventListener('click', function() {
            const url = document.getElementById('webLink').value;
            const shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}`;
            window.open(shareUrl, '_blank');
        });

        // Instagram doesn't have a direct share URL, so you might need to handle it differently.
        document.getElementById('share-instagram').addEventListener('click', function() {
            alert('Comparte este enlace en tu historia de Instagram: ' + document.getElementById('webLink').value);
        });

        function copyLink() {
            const copyText = document.getElementById('webLink');
            copyText.select();
            document.execCommand('copy');
            document.querySelector(".copyMessage").style.display = "none"
            document.querySelector(".copiedMessage").style.display = "block"
            setTimeout(() => {
                document.querySelector(".copyMessage").style.display = "block"
                document.querySelector(".copiedMessage").style.display = "none"
            }, 1500);
        }

        document.querySelector("#webLink").value = window.location.href;

        document.querySelector(".siteDetails__portada--buttons-ShareModal button").addEventListener("click", ()=>{
            document.querySelector(".portada__buttons--ShareModal-Modal").classList.toggle("shareModalActive");
        })

    </script>
@endsection