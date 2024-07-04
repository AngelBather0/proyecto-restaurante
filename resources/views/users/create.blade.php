@extends('template')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<div class="max-w-screen-2xl w-full mx-auto px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8 mt-12">
    <form id="registrationForm" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="px-6 py-4 pr-0 mb-8 flex items-center w-full">
            <div class="flex items-center justify-between w-full">
                <a href="{{ route('users.index') }}">
                    <button type="button" class="px-4 py-2 rounded bg-white mr-4 text-sm hover:bg-gray-100 duration-300">Volver al listado</button>
                </a>
                <button type="submit" class="px-6 text-white py-2 rounded text-sm bg-mundoVerdeGreen hover:bg-mundoVerdeDarkGreen duration-300">Guardar</button>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="bg-white rounded-md max-w-[65%] mx-auto">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-lg font-normal text-gray-900">Agregar Usuario</h4>
            </div>
            <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="nombre">Nombre</label>
                    <div class="w-full">
                        <input type="text" required name="Nombre" id="nombre" value="{{ old('Nombre') }}" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="Email">E-mail</label>
                    <div class="w-full">
                        <input type="email" required name="Email" id="Email" value="{{ old('Email') }}" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="psw">Contraseña</label>
                    <div class="w-full">
                        <input type="password" required name="psw" id="psw" value="{{ old('psw') }}" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="confpsw">Confirmar contraseña</label>
                    <div class="w-full">
                        <input type="password" required name="confpsw" id="confpsw" value="{{ old('confpsw') }}" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="tipo">Seleccionar rol</label>
                    <div class="w-full">
                        <select name="rol" id="rol" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                            @foreach ($roles as $rol)
                                <option value="{{ $rol->name }}">{{ $rol->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<style>
.ck-editor__editable[role="textbox"] {
    /* editing area */
    min-height: 200px;
}
</style>

<script src="https://cdn.ckbox.io/CKBox/1.1.0/ckbox.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/super-build/ckeditor.js"></script>
<script src="/js/editor.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        const password = $('#psw').val();
        const confirmPassword = $('#confpsw').val();

        if (password !== confirmPassword) {
            alert('Las contraseñas no coinciden. Por favor, inténtalo de nuevo.');
            event.preventDefault(); // Evita que el formulario se envíe
        }
    });
});
</script>

@endsection
