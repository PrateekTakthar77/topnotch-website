@extends('admin.admin_layout')
@section('content')
    <div class="auth-box h-full flex flex-col justify-center mt-6">
        <div class="mobile-logo text-center mb-6 lg:hidden flex justify-center">
            <div class="mb-10 inline-flex items-center justify-center">
            
                <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">Tspark</span>
            </div>
        </div>
        <div class="text-center 2xl:mb-10 mb-4">
            <center class="mb-6 ">
            <img src="/assets/img/banner/Top-Notch-Logo-1-250x81.png" class="black_logo" alt="logo" width="200px">
                <img src="{{ asset('images/logo.png') }}" class="white_logo" alt="logo">

            </center>
                
        @include('admin.message')
            <!-- <h4 class="font-medium"> {{ __('Sign in') }}</h4> -->
            <div class="text-slate-500 text-base">
                {{ __('Sign in to your Account') }}
            </div>
        </div>

        <!-- START::LOGIN FORM -->
        <form method="POST" action="{{ route('admin') }}" class="space-y-4">
            @csrf
            {{-- Email --}}
            <div class="fromGroup">
                <label for="email" class="block capitalize form-label">{{ __('Email') }}</label>
                <div class="relative ">
                    <input type="email" name="email" id="email"
                        class="form-control py-2 @error('email') !border !border-red-500 @enderror"
                        placeholder="{{ __('Type your email') }}" autofocus
                        value="{{ old('email') }}">
                </div>
            </div>

            {{-- Password --}}
            <div class="fromGroup">
                <label for="password" class="block capitalize form-label">{{ __('Password') }}</label>
                <div class="relative ">
                    <input type="password" name="password" class="form-control py-2 @error('password') !border !border-red-500 @enderror" placeholder="{{ __('Password') }}" id="password" autocomplete="current-password">
                </div>
            </div>


            {{-- Remember Me checkbox --}}

            <button type="submit"
                    class="btn btn-dark block w-full text-center">
                {{ __('Sign In') }}
            </button>
        </form>
    </div>
@endsection
