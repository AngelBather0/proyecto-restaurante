@extends('layout-page')
@section('title', 'Home Principal')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/FaqsPage.css')}}">
    <div class="Content__faqsPage">
        <div class="Content__faqs">
            <div class="container">
                <div class="Content__hotPlaces--title">
                    <h2>@lang('app.questions')</h2>
                    <div class="faqs__searchContainer">
                        <input type="text" name="faqsSearch" id="faqsSearch" placeholder="Buscar...">
                        <button>Buscar</button>
                    </div>
                </div>
                <div class="Content__faqs--container">
                    <div class="" id="result">
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
                <div class="faqs__container--paginate">
                    {{ $faqs->links() }} 
                </div>
            </div>
        </div>
    </div>
@endsection