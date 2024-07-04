@extends('template')
@section('content')


    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous">

    </script>
    <div class="max-w-screen-2xl w-full mx-auto px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8 mt-12">
        <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">
            <div class="flex items-center justify-between w-full">
                <a href="{{ route('users.index') }}">
                    <button type="button"
                        class="px-4 py-2 rounded bg-white mr-4 text-sm hover:bg-gray-100 duration-300">Volver al
                        listado</button>
                </a>
            </div>
        </div>
        <div class="bg-white rounded-md max-w-[65%] mx-auto">
            <div class="flex justify-between px-6 py-4 border-b border-gray-200">
                <h4 class="text-lg font-normal text-gray-900">Detalles de Usuario</h4>
                <!-- Enlace para editar -->
                <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500 hover:text-yellow-700 font-bold py-2 px-4 rounded">
                    <i class="fas fa-edit mr-2"></i>
                    Editar
                </a>
            </div>
            @if(!$user)
            <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <center><b><p>El usuario seleccionado no existe, o hubo un error al mostrarlo.</p></b></center>
                </div>
            </div>
            @else
                <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">

                    <!-- Campo Nombre del usuario -->
                    <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                        <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="name">Nombre</label>
                        <div class="w-full">
                            <span class="border border-gray-200 px-4 py-[8px] box-border rounded text-md">{{$user->name}}</span>
                        </div>
                    </div>

                    <!-- Campo Telefono de usuario -->
                    <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                        <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="email">E-mail</label>
                        <div class="w-full">
                            <span class="border border-gray-200 px-4 py-[8px] box-border rounded text-md">{{$user->email}}</span>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <style>

        #vistaPrevia {
            width: 200px;
            height: 200px;
            background-color: #f1f1f1;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
        .closeIcon {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 25px;
            height: 25px;
            background-color: red;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>

        <style>

        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
    
        </style>
    
        <script src="https://cdn.ckbox.io/CKBox/1.1.0/ckbox.js"></script>
        <!--
            The "super-build" of CKEditor 5 served via CDN contains a large set of plugins and multiple editor types.
            See https://ckeditor.com/docs/ckeditor5/latest/installation/getting-started/quick-start.html#running-a-full-featured-editor-from-cdn
        -->
        <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/super-build/ckeditor.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
        <script src="/js/editor.js"></script>
@endsection