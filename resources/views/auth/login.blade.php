<html>
<head>
		<meta charset = "utf-8">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
		<title>Formulario de Inicio de Sesión</title>
		<link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css"/>
	</head>	
    <h1>Formulario de Inicio de Sesión</h1>
    <nav>
<ul class = "menu-h">
            <li><a href="/login">Iniciar Sesión</a></li>
            <li><a href="/register">Registrarse</a></li> 
            <li><a href="/categorias">Inicio</a></li>
            
            <li><a href="/categoria">Categorías</a>
        
            </li>
            <li><a href="/contacto">Contactos</a></li>
            <li><a href="#">Sucursales</a>
            <ul class="menu-v">
            <li><a href="/Sucursales">Geolocalización</a>
            </ul>  
            </li>
        </ul>    
        </nav> 
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</html>