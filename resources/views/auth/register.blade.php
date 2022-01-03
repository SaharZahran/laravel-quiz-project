@extends('publicsite.layouts.master')

@section('content')
<div class="container register-form">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card sahar-card">
                <div class="card-header sahar-card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Profile Image') }}</label>
                            <div class="col-md-6 profile-image-s">
                                <label>
                                    <input type="radio" class="checkbox" name="image" value="bt1.png">
                                    <div class="avatar">
                                        <img class="avatar-img mini-avatar" src="{{asset('assets/public_images/bt1.png')}}" id="avatar-1" alt="">
                                    </div>
                                </label>
                                <label>
                                    <input type="radio" class="checkbox" name="image" value="bt2.png">
                                    <div class="avatar">
                                        <img class="avatar-img mini-avatar" src="{{asset('assets/public_images/bt2.png')}}" id="avatar-2" alt="">
                                    </div>
                                </label>
                                <label>
                                    <input type="radio" class="checkbox" name="image" value="bt3.png">
                                    <div class="avatar">
                                        <img class="avatar-img mini-avatar" src="{{asset('assets/public_images/bt3.png')}}" id="avatar-3" alt="">
                                    </div>
                                </label>
                                <label>
                                    <input type="radio" class="checkbox" name="image" value="bt4.png">
                                    <div class="avatar">
                                        <img class="avatar-img mini-avatar" src="{{asset('assets/public_images/bt4.png')}}" id="avatar-4" alt="">
                                    </div>
                                </label>
                            </div>
                        </div>
                         <input type="hidden" value="user" name="role_type">
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-sahar">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection