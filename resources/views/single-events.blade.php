@extends('layout-page')
@section('title', 'Single-Event')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <div class="mainframeevent">
        <div class="container">
            <div class="mainframeevent__container">
                <div class="mainframeevent__img">
                    @php
                        $img = $evento->Imagen;
                    @endphp
                    <img src="{{asset('storage/eventos/' . $img)}}" alt="" srcset="">
                </div>
                <div class="mainframeevent__titleevent">
                    <span>{{ $evento->Nombre }}</span>
                </div>
                <div class="mainframeevent__detailevents">
                    <div class="mainframeevent__detailevents--date detaileventsChild">
                        <span>
                            <img src="{{asset('images/time-and-calendar.png')}}" alt="">
                        </span>
                        <span>{{ $evento->FormattedFechaHora }}</span>
                    </div>
                    <div class="mainframeevent__detailevents--place detaileventsChild">
                        <span>
                            <img src="{{asset('images/ubicacion.png')}}" alt="">
                        </span>
                        <span>{{ $evento->Lugar }}</span>
                    </div>
                    <div class="mainframeevent__detailevents--type detaileventsChild">
                        <span>
                            <img src="{{asset('images/informacion.png')}}" alt="">
                        </span>
                        <span>{{ $evento->tipoEvento->Nombre }}</span>
                    </div>
                </div>
                <div class="mainframeevent__description">
                    <span>{!! nl2br(e($evento->Descripcion)) !!}</span>
                </div>
                <div class="mainframeevent__location">
                    <span>@lang('app.ubication')</span>
                    @php
                        $langcode = App()->getLocale();
                        $mapUrl = "https://maps.google.com/maps?width=600&amp;height=400&hl=".$langcode."&amp";

                            $mapUrl .= "&q=" . $evento->Latitud . "," . $evento->Longitud;
                            $mapUrl .= "&t=k&z=16&ie=UTF8&&iwloc=B&output=embed&ll=" . $evento->Latitud . "," . $evento->Longitud;
                    @endphp
                    <div class="mapouter"><div class="gmap_canvas"><iframe src="{{$mapUrl}}" id="gmap_canvas" frameborder="0" scrolling="no"></iframe><style></style><style></style><a href="https://www.eireportingonline.com"></a></div></div>
                </div>
                <div class="mainframeevent__disclaimer">
                    <div class="warningIcon">
                        <i class="fa-solid fa-exclamation">
                        </i>
                    </div>
                    <span class="disclaimer_text"><strong>@lang('app.disclaimertitle'):</strong> @lang('app.gpseventsdisclaimer')</span>
                </div>
            </div>
        </div>
    </div>
@endsection