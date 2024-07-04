@extends('template')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<div class="max-w-screen-2xl w-full mx-auto px-4 sm:px-6 lg:px-8 px-4 sm:px-6 lg:px-8 mt-12">
    <form id="registrationForm" action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                <h4 class="text-lg font-normal text-gray-900">Editar Usuario</h4>
            </div>
            <div class="p-6 px-0 grid grid-cols-1 fieldsContainer">
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="nombre">Nombre</label>
                    <div class="w-full">
                        <input type="text" name="Nombre" value="{{ $user->name }}" id="nombre" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="tipo">E-mail</label>
                    <div class="w-full">
                        <input type="email" name="Email" id="email" value="{{ $user->email }}" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="actpsw">Contraseña actual</label>
                    <div class="w-full">
                        <input type="password" name="actpsw" id="actpsw" value="{{ old('actpsw') }}" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="newpsw">Nueva contraseña</label>
                    <div class="w-full">
                        <input type="password" name="newpsw" id="newpsw" value="{{ old('newpsw') }}" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="confnewpsw">Confirmar nueva contraseña</label>
                    <div class="w-full">
                        <input type="password" name="confnewpsw" id="confnewpsw" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md">
                    </div>
                </div>
                <div class="flex justify-between px-12 py-8 border-b border-gray-200">
                    <label class="text-[16px] font-medium leading-thing mr-2 flex items-center w-[250px]" for="rol">Seleccionar rol</label>
                    <div class="w-full">
                        <select name="rol" id="rol" class="w-full border border-gray-200 px-4 py-[8px] box-border rounded text-md" required>
                            @foreach ($roles as $rol)
                                @foreach ($user->roles as $usrole)
                                <option value="{{ $rol->name }}" {{ $usrole->name == $rol->name ? 'selected' : '' }}>
                                    {{ $rol->name }}
                                </option>
                                @endforeach
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="/js/editor.js"></script>

<script>
$(document).ready(function() {
    $('#registrationForm').on('submit', function(event) {
        const currentPassword = $('#actpsw').val();
        const newPassword = $('#newpsw').val();
        const confirmPassword = $('#confnewpsw').val();

        if (newPassword !== confirmPassword) {
            alert('Las nuevas contraseñas no coinciden. Por favor, inténtalo de nuevo.');
            event.preventDefault();
        }
    });
});
</script>

@endsection
