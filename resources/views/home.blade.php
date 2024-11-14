@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Başarı ile kayıt oldunuz. Şimdi Cv işlemlerini yapabilirsiniz !') }}
                        <button>
                            <a href="{{ route('rabout') }}" style="text-decoration: none; color: inherit;">
                                Devam et
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
