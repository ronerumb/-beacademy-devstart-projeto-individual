@extends('page.estrutura')

@section('content')

<h1>Entrar</h1>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">E-mail</label>
        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
    </div>

   
    <div class="mt-4">
        <label for="email">Senha</label>

        <input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
    </div>



    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Esqueceu a senha?') }}
            </a>
        @endif
            <br><br>
        <button class="ml-3 btn btn-primary">
            {{ __('Login') }}
        </button>
    </div>
</form>


@endsection