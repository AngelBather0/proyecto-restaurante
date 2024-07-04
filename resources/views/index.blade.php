@extends('layout-page')
@section('title', 'Home Principal')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="Content">
        <div class="Content__port">
            <div class="container">
                <div class="Content__port--container">
                    <div class="Content__port--title">
                        <h1>@lang('app.herotitle')</h1>
                    </div>
                    <div class="Content__port--subtitle">
                        <h2>@lang('app.herosubtitle')</h2>
                    </div>
                    <div class="Content__port--filters">
                        <div class="Content__port--filters-filter">
                            <label for="destiny">@lang('app.searchdestination')</label>
                            <input type="text" name="destiny" id="destiny" placeholder="@lang('app.searchplaceholder')">
                            <div class="Content__port--filters-dropdown">
                                <div class="Content__port--dropdown-title">
                                    <h4>@lang('app.searchcardtitle')</h4>
                                </div>
                                <div class="Content__port--dropdown-locationsList">
                                    <div class="port__dropdown--locationsList-location">
                                        <div class="port__dropdown--location-image">
                                            <img src="/images/barahona.jpg" alt="">
                                        </div>
                                        <div class="port__dropdown--location-details">
                                            <h2>Barahona</h2>
                                            <p>@lang('app.searchcardvisited')</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Content__port--filters-button">
                            <button type="button">@lang('app.searchbutton')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Content__currencyExchange">
            <div class="container">
                <div class="Content__currencyExchange--container">
                    <div class="Content__currencyExchange--heading">
                        <div class="Content__currencyExchange--title activeNavCalculator" id="currencyExchangeNav" navFor="currencyExchangeBody">
                            <i class="fa-solid fa-cash-register"></i>
                            <h2>@lang('app.convertitle')</h2>
                        </div>
                        <div class="Content__currencyExchange--title" id="budgetCalculatorNav" navFor="budgetCalculator">
                            <i class="fa-solid fa-calculator"></i>
                            <h2>@lang('app.calctitle')</h2>
                        </div>
                    </div>
                    <div class="Content__currencyExchange--body bodyCalculatorActive" id="currencyExchangeBody">
                        <div class="moneda inputsColsContainer">
                            <div class="inputcontainer">
                                <label for="importe"><i class="fa-solid fa-money-check-dollar"></i> @lang('app.import')</label>
                                <input 
                                    type="number" 
                                    id="cantidad-uno" 
                                    placeholder="0"  
                                    value="1"
                                >
                            </div>
                            <div class="inputcontainer">
                                <label for="">@lang('app.from')</label>
                                <select id="moneda-uno">
                                    <option value="AED">@lang('app.AED')</option>
                                    <option value="ARS">@lang('app.ARS')</option>
                                    <option value="AUD">@lang('app.AUD')</option>
                                    <option value="BGN">@lang('app.BGN')</option>
                                    <option value="BRL">@lang('app.BRL')</option>
                                    <option value="BSD">@lang('app.BSD')</option>
                                    <option value="CAD">@lang('app.CAD')</option>
                                    <option value="CHF">@lang('app.CHF')</option>
                                    <option value="CLP">@lang('app.CLP')</option>
                                    <option value="CNY">@lang('app.CNY')</option>
                                    <option value="COP">@lang('app.COP')</option>
                                    <option value="CZK">@lang('app.CZK')</option>
                                    <option value="DKK">@lang('app.DKK')</option>
                                    <option value="DOP">@lang('app.DOP')</option>
                                    <option value="EGP">@lang('app.EGP')</option>
                                    <option value="EUR">@lang('app.EUR')</option>
                                    <option value="FJD">@lang('app.FJD')</option>
                                    <option value="GBP">@lang('app.GBP')</option>
                                    <option value="GTQ">@lang('app.GTQ')</option>
                                    <option value="HKD">@lang('app.HKD')</option>
                                    <option value="HRK">@lang('app.HRK')</option>
                                    <option value="HUF">@lang('app.HUF')</option>
                                    <option value="IDR">@lang('app.IDR')</option>
                                    <option value="ILS">@lang('app.ILS')</option>
                                    <option value="INR">@lang('app.INR')</option>
                                    <option value="ISK">@lang('app.ISK')</option>
                                    <option value="JPY">@lang('app.JPY')</option>
                                    <option value="KRW">@lang('app.KRW')</option>
                                    <option value="KZT">@lang('app.KZT')</option>
                                    <option value="MXN">@lang('app.MXN')</option>
                                    <option value="MYR">@lang('app.MYR')</option>
                                    <option value="NOK">@lang('app.NOK')</option>
                                    <option value="NZD">@lang('app.NZD')</option>
                                    <option value="PAB">@lang('app.PAB')</option>
                                    <option value="PEN">@lang('app.PEN')</option>
                                    <option value="PHP">@lang('app.PHP')</option>
                                    <option value="PKR">@lang('app.PKR')</option>
                                    <option value="PLN">@lang('app.PLN')</option>
                                    <option value="PYG">@lang('app.PYG')</option>
                                    <option value="RON">@lang('app.RON')</option>
                                    <option value="RUB">@lang('app.RUB')</option>
                                    <option value="SAR">@lang('app.SAR')</option>
                                    <option value="SEK">@lang('app.SEK')</option>
                                    <option value="SGD">@lang('app.SGD')</option>
                                    <option value="THB">@lang('app.THB')</option>
                                    <option value="TRY">@lang('app.TRY')</option>
                                    <option value="TWD">@lang('app.TWD')</option>
                                    <option value="UAH">@lang('app.UAH')</option>
                                    <option value="USD" selected>@lang('app.USD')</option>
                                    <option value="UYU">@lang('app.UYU')</option>
                                    <option value="VND">@lang('app.VND')</option>
                                    <option value="ZAR">@lang('app.ZAR')</option>
                                </select>
                            </div>
                            <div class="inputcontainer">
                                <label for="">@lang('app.to')</label>
                                <select id="moneda-dos">
                                    <option value="AED">@lang('app.AED')</option>
                                    <option value="ARS">@lang('app.ARS')</option>
                                    <option value="AUD">@lang('app.AUD')</option>
                                    <option value="BGN">@lang('app.BGN')</option>
                                    <option value="BRL">@lang('app.BRL')</option>
                                    <option value="BSD">@lang('app.BSD')</option>
                                    <option value="CAD">@lang('app.CAD')</option>
                                    <option value="CHF">@lang('app.CHF')</option>
                                    <option value="CLP">@lang('app.CLP')</option>
                                    <option value="CNY">@lang('app.CNY')</option>
                                    <option value="COP">@lang('app.COP')</option>
                                    <option value="CZK">@lang('app.CZK')</option>
                                    <option value="DKK">@lang('app.DKK')</option>
                                    <option value="DOP" selected>@lang('app.DOP')</option>
                                    <option value="EGP">@lang('app.EGP')</option>
                                    <option value="EUR">@lang('app.EUR')</option>
                                    <option value="FJD">@lang('app.FJD')</option>
                                    <option value="GBP">@lang('app.GBP')</option>
                                    <option value="GTQ">@lang('app.GTQ')</option>
                                    <option value="HKD">@lang('app.HKD')</option>
                                    <option value="HRK">@lang('app.HRK')</option>
                                    <option value="HUF">@lang('app.HUF')</option>
                                    <option value="IDR">@lang('app.IDR')</option>
                                    <option value="ILS">@lang('app.ILS')</option>
                                    <option value="INR">@lang('app.INR')</option>
                                    <option value="ISK">@lang('app.ISK')</option>
                                    <option value="JPY">@lang('app.JPY')</option>
                                    <option value="KRW">@lang('app.KRW')</option>
                                    <option value="KZT">@lang('app.KZT')</option>
                                    <option value="MXN">@lang('app.MXN')</option>
                                    <option value="MYR">@lang('app.MYR')</option>
                                    <option value="NOK">@lang('app.NOK')</option>
                                    <option value="NZD">@lang('app.NZD')</option>
                                    <option value="PAB">@lang('app.PAB')</option>
                                    <option value="PEN">@lang('app.PEN')</option>
                                    <option value="PHP">@lang('app.PHP')</option>
                                    <option value="PKR">@lang('app.PKR')</option>
                                    <option value="PLN">@lang('app.PLN')</option>
                                    <option value="PYG">@lang('app.PYG')</option>
                                    <option value="RON">@lang('app.RON')</option>
                                    <option value="RUB">@lang('app.RUB')</option>
                                    <option value="SAR">@lang('app.SAR')</option>
                                    <option value="SEK">@lang('app.SEK')</option>
                                    <option value="SGD">@lang('app.SGD')</option>
                                    <option value="THB">@lang('app.THB')</option>
                                    <option value="TRY">@lang('app.TRY')</option>
                                    <option value="TWD">@lang('app.TWD')</option>
                                    <option value="UAH">@lang('app.UAH')</option>
                                    <option value="USD">@lang('app.USD')</option>
                                    <option value="UYU">@lang('app.UYU')</option>
                                    <option value="VND">@lang('app.VND')</option>
                                    <option value="ZAR">@lang('app.ZAR')</option>
                                </select>
                            </div>
                        </div>
                        <div class="currencyResult">
                            <p><span class="cantidadIngresada">12 dolares canadiences</span> =</p>
                            <h4 id="cantidad-dos">
                               <span>0</span> dolares canadiences
                            </h4>
                        </div>
                        <div class="taza-cambio-container">
                
                            <div class="cambio" id="cambio"></div>
                
                        </div>
                    </div>
                    <div class="Content__currencyExchange--body" id="budgetCalculator">
                        <div class="calculator">

                            <div class="inputTwoCols">
                                <div class="inputcontainer">
                                    <label for="fecha-entrada">@lang('app.entrydate'):</label>
                                    <input type="date" id="fecha-entrada">
                                </div>
    
                                <div class="inputcontainer">
                                    <label for="fecha-salida">@lang('app.outdate'):</label>
                                    <input type="date" id="fecha-salida">
                                </div>
                            </div>

                            <div class="inputTwoCols">
                                <div class="inputcontainer">
                                    <label for="provincia">@lang('app.provincetext'):</label>
                                    <select id="provincia">
                                        @foreach ($provincias as $provincia)
                                            <option value="{{$provincia->GastosEstimados}}">{{$provincia->Nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="inputcontainer">
                                    <label for="tipo-alojamiento">@lang('app.lodgetype'):</label>
                                    <select id="tipo-alojamiento">
                                        <option value="3529">@lang('app.lodgetype_1')</option>
                                        <option value="8823">@lang('app.lodgetype_2')</option>
                                        <option value="12000">@lang('app.lodgetype_3')</option>
                                    </select>
                                </div>

                            </div>

                            <div class="inputcontainer" style="margin-bottom: 20px;">
                                <label for="personAmount">@lang('app.personnum'):</label>
                                <input type="number" name="personAmount" id="personAmount">
                            </div>

                            <div class="inputTwoCols">

                                <div class="inputcontainer">
                                    <label for="alimentacion">@lang('app.feedingtext'):</label>
                                    <select id="alimentacion">
                                        <option value="400">@lang('app.feedtype_1')</option>
                                        <option value="1200">@lang('app.feedtype_2')</option>
                                        <option value="2950">@lang('app.feedtype_3')</option>
                                        <option value="200">@lang('app.feedtype_4')</option>
                                    </select>
                                </div>

                                <div class="inputcontainer">
                                    <label for="transporte">@lang('app.transportmethod'):</label>
                                    <select id="transporte">
                                        <option value="200">@lang('app.transtype_1')</option>
                                        <option value="1350">@lang('app.transtype_2')</option>
                                        <option value="950">@lang('app.transtype_3')</option>
                                        <option value="2500">@lang('app.transtype_4')</option>
                                        <option value="250">@lang('app.transtype_5')</option>
                                    </select>
                                </div>

                            </div>

                            

                            <button onclick="calcularGastos()">@lang('app.calcbutton')</button>
                    
                            <div id="resultado"></div>
                        </div>
                    </div>
                    <div class="Content__currencyExchange--disclaimer disclaimerActive" id="converterDisclaimer">
                        <div class="warningIcon"><i class="fa-solid fa-exclamation"></i></div>
                        <p><strong>@lang('app.disclaimertitle'):</strong> @lang('app.disclaimertext')</p>
                    </div>
                    <div class="Content__currencyExchange--disclaimer" id="calculatorDisclaimer">
                        <div class="warningIcon"><i class="fa-solid fa-exclamation"></i></div>
                        <p><strong>@lang('app.disclaimertitle'):</strong> @lang('app.disclaimertext')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="Content__hotPlaces">
            <div class="container">
                <div class="Content__hotPlaces--title">
                    <h2>@lang('app.trendyplaces')</h2>
                    <div class="Content__hotPlaces--slideArrows">
                        <div class="Content__hotPlaces--slideArrows-arrow" id="hotPlacesPrevArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M11 2L5 8l6 6"></path>
                            </svg>
                        </div>
                        <div class="Content__hotPlaces--slideArrows-arrow" id="hotPlacesNextArrow">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M5 14l6-6-6-6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="Content__hotPlaces--container">
                    @foreach ($provincias as $pr)
                            @php
                                $img = $pr->Imagen;
                            @endphp
                            <a href="{{ route('blogsindex', ['id' => $pr->ProvinciaID]) }}" class="Content__hotPlaces--slideContainer" style="background-image: url('{{asset('storage/provincias/' . $img)}}')">
                                <div class="Content__hotPlaces--slide">
                                    <div class="Content__hotPlaces--slide-name">
                                        <h3>{{ $pr->Nombre }}</h3>
                                    </div>
                                </div>
                            </a>
                    @endforeach

                    @empty($provincias)
                        <p>No hay provincias disponibles.</p>
                    @endempty
                </div>
            </div>
        </div>
        @if (!$tipos_sitios->isEmpty())
            <div class="Content__categories">
                <div class="container">
                    <div class="Content__hotPlaces--title">
                        <h2>@lang('app.neededsearch')</h2>
                        <div class="Content__hotPlaces--slideArrows">
                            <div class="Content__hotPlaces--slideArrows-arrow" id="categoriesPrevArrow">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M11 2L5 8l6 6"></path>
                                </svg>
                            </div>
                            <div class="Content__hotPlaces--slideArrows-arrow" id="categoriesNextArrow">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M5 14l6-6-6-6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="Content__categories--container">
                        @foreach ($tipos_sitios as $tipos_sitio)
                        <a href="/FilterBlogs?_token=nAV6hgqL7ZADiur90aXiONubrlcMpRBhSffS5Asp&SelectEstablecimiento=Sitios&SelectProvincia=0&Minprice=0&Maxprice=10000&CategoryLodge=1&CategorySite={{ $tipos_sitio->TipoSitioID }}&CategoryBusiness=1" class="Content__categories--slide">
                            <div class="Content__categories--slide-image">
                                <img src="{{asset('storage/tipos/sitios/' . $tipos_sitio->Imagen)}}" alt="">
                            </div>
                            <div class="Content__categories--slide-name">
                                <h4>{{ $tipos_sitio->Nombre }}</h4>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if (!$faqs->isEmpty())
            <div class="Content__faqs">
                <div class="container">
                    <div class="Content__hotPlaces--title">
                        <h2>@lang('app.questions')</h2>
                    </div>
                    <div class="Content__faqs--container">
                        @foreach ($faqs as $faq)
                            <div class="Content__faqs--faq">
                                <button class="accordion">{{ $faq->Pregunta }}<i class="fa-solid fa-chevron-down"></i></button>
                                <div class="panel">
                                    <p>{!! nl2br(e($faq->Respuesta)) !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        @if (!$eventos->isEmpty())
            <div class="Content__homeEvents">
                <div class="container">
                    <div class="Content__hotPlaces--title">
                        <h2>@lang('app.popularevents')</h2>
                        <div class="Content__hotPlaces--slideArrows">
                            <div class="Content__hotPlaces--slideArrows-arrow" id="eventsPrevArrow">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M11 2L5 8l6 6"></path>
                                </svg>
                            </div>
                            <div class="Content__hotPlaces--slideArrows-arrow" id="eventsNextArrow">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 16 16" stroke="#212121">
                                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" d="M5 14l6-6-6-6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="Content__homeEvents--container">
                        @foreach ($eventos as $evento)
                            <div class="Content__homeEvents--slide">
                                <div class="Content__homeEvents--image">
                                    @php
                                        $img = $evento->Imagen;
                                    @endphp
                                    <img src="{{asset('storage/eventos/' . $img)}}" alt="" srcset="">
                                </div>
                                <div class="Content__homeEvents--details">
                                    <div class="Content__homeEvents--details-date">
                                        <p class="detail-event-flex"><i class="fa-regular fa-clock"></i>{{ $evento->FormattedFechaHora }}</p>
                                        <p class="detail-event-flex"><i class="fa-solid fa-location-dot"></i>{{ $evento->Lugar }}</p>
                                    </div>
                                    <div class="Content__homeEvents--details-title">
                                        <h2>{{ $evento->Nombre }}</h2>
                                    </div>
                                    <div class="Content__homeEvents--details-description">
                                        <p>{!! nl2br(e($evento->Descripcion)) !!}</p>
                                    </div>
                                    <div class="Content__homeEvents--details-button">
                                        <a href="{{ route('singleevents', ['id' => $evento->EventoID]) }}"><button>@lang('app.learnmore')</button></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

    </div>

    <script>

        let navs = document.querySelectorAll(".Content__currencyExchange--title");
        navs.forEach((nav)=>{
            nav.addEventListener("click", ()=>{
                if(nav.getAttribute("navFor") == "currencyExchangeBody") {
                    document.querySelector("#currencyExchangeBody").classList.add("bodyCalculatorActive")
                    document.querySelector("#budgetCalculator").classList.remove("bodyCalculatorActive")

                    document.querySelector("#currencyExchangeNav").classList.add("activeNavCalculator")
                    document.querySelector("#budgetCalculatorNav").classList.remove("activeNavCalculator")

                    document.querySelector("#converterDisclaimer").classList.add("disclaimerActive")
                    document.querySelector("#calculatorDisclaimer").classList.remove("disclaimerActive")
                } else {
                    document.querySelector("#currencyExchangeBody").classList.remove("bodyCalculatorActive")
                    document.querySelector("#budgetCalculator").classList.add("bodyCalculatorActive")

                    document.querySelector("#currencyExchangeNav").classList.remove("activeNavCalculator")
                    document.querySelector("#budgetCalculatorNav").classList.add("activeNavCalculator")

                    document.querySelector("#converterDisclaimer").classList.remove("disclaimerActive")
                    document.querySelector("#calculatorDisclaimer").classList.add("disclaimerActive")
                }
            })
        })

        // Obtener referencias a los inputs de fecha
        var fechaEntradaInput = document.getElementById('fecha-entrada');
        var fechaSalidaInput = document.getElementById('fecha-salida');

        // Obtener la fecha actual para establecerla como mínimo en el input de entrada
        var fechaActual = new Date();
        var dia = fechaActual.getDate();
        var mes = fechaActual.getMonth() + 1; // Los meses van de 0 a 11 en JavaScript
        var anio = fechaActual.getFullYear();

        // Formatear la fecha actual en el formato YYYY-MM-DD requerido por el input tipo date
        if (dia < 10) {
        dia = '0' + dia;
        }
        if (mes < 10) {
        mes = '0' + mes;
        }
        var fechaActualFormateada = anio + '-' + mes + '-' + dia;

        // Establecer la fecha mínima en el input de entrada
        fechaEntradaInput.min = fechaActualFormateada;

        // Función para actualizar la fecha mínima en el input de salida cuando se selecciona una fecha de entrada
        fechaEntradaInput.addEventListener('change', function() {
        fechaSalidaInput.min = fechaEntradaInput.value;
        });

        function calcularGastos() {
            var fechaEntrada = new Date(document.getElementById("fecha-entrada").value);
            var fechaSalida = new Date(document.getElementById("fecha-salida").value);
            var tipoAlojamiento = parseFloat(document.getElementById("tipo-alojamiento").value);
            var cantidadPersonas = parseInt(document.getElementById("personAmount").value);
            var provincia = parseFloat(document.getElementById("provincia").value);
            var alimentacion = parseFloat(document.getElementById("alimentacion").value);
            var transporte = parseFloat(document.getElementById("transporte").value);

            var dias = (fechaSalida - fechaEntrada) / (1000 * 60 * 60 * 24);

            if (dias < 1) {
                dias = 1;
            }

            var costoTotalAlojamiento;
            if (tipoAlojamiento === 3529) {
                costoTotalAlojamiento = tipoAlojamiento * dias; // Costo sin multiplicar por cantidad de personas
            } else {
                costoTotalAlojamiento = tipoAlojamiento * dias * cantidadPersonas; // Costo multiplicado por cantidad de personas
            }

            var costoTotalAlimentacion = alimentacion * cantidadPersonas;
            var costoTotalTransporte = transporte * cantidadPersonas;

            var presupuestoTotalSinProvincia = costoTotalAlojamiento + costoTotalAlimentacion + costoTotalTransporte;
            var presupuestoTotal = presupuestoTotalSinProvincia * provincia;

            var resultadoElement = document.getElementById("resultado");
            if (isNaN(presupuestoTotal)) {
                resultadoElement.innerHTML = "No se pudo realizar la estimación, asegúrese de que todos los campos estén completados.";
            } else {
                resultadoElement.innerHTML = "El presupuesto total estimado para su viaje en base a sus elecciones es de RD$ " + presupuestoTotal.toFixed(2) + " DOP.";
            }
        }
    </script>
@endsection