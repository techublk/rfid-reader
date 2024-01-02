@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-dark text-light" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-md-6 my-5">
                <div class="card mx-auto border-light" style="background-color: #1e1e1e; border-color: #343a40; margin-top: 40px;">
                    <div class="card-header" style="background-color: #343a40; border-bottom: none;">
                        <h2 class="text-light mb-0">{{ __('Login') }}</h2>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="username" class="form-label text-light">{{ __('Username') }}</label>
                                <input id="username" type="text" class="form-control" name="username" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label text-light">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-light" style="background-color: #6c757d; border-color: #6c757d;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
