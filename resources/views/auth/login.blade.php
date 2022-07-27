@extends('page.estruturaauth')
@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" id="form1">
                    <div class="form-data" v-if="!submitted">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="forms-inputs mb-4"> <span>Email</span>                           
                            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                        <div class="forms-inputs mb-4"> <span>Senha</span> 
                            <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
        </div>
                        </div>
                        <button class="ml-3 btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        <br>
                       <a href="{{route ('register')}}">Registrar-se</a>
                  
                </div>
            </div>
        </div>
    </div>
</form>
@endsection