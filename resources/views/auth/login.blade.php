@extends('layouts.app')

@section('content')
<div class="container">
                <div class="title">
                    <h2> Afrikkalainen elefantti tulee Afrikasta.</h2>
                </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                                <input id="email" placeholder="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                    </form>
</div>
@endsection
