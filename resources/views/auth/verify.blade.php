@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique su Correo Electronico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Hemos enviado un nuevo Email') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder verfique su correo electronico, y siga las instrucciones señaladas.') }}
                    {{ __('Si no recibes el correo') }}, <a href="{{ route('verification.resend') }}">{{ __('Pinche aqui') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
