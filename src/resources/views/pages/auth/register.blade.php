@extends('mage::layout.auth')
@section('web-title', __('mage.auth.register.web-title'))
@section('page-title', __('mage.auth.register.page-title'))
@section('page-description', __('mage.auth.register.page-description'))
@section('page-subdescription', __('mage.auth.register.page-subdescription'))

@section('content')
    <div class=" auth-content">
        <div class="mb-4 text-center">
            <i class="fa fa-key icon-login"></i>
        </div>
        <h3 class="mb-5 text-center">@lang('mage.auth.register')</h3>
        <form method="POST" action="{{ route('mage.auth.register') }}" class="mb-4">
            {{ csrf_field() }}
            @if($errors->count())
                <div class="input-group mb-3">
                    <p class="text-danger" style="margin:0 auto;"><span>{{ $errors->first() }}</span></p>
                </div>
            @endif
            <div class="input-group mb-3">
                <input type="text" name="name" class="form-control @if($errors->count()) is-invalid @endif" placeholder="@lang('mage.auth.register.name')" value="{{ old('name') }}">
                <div class="input-group-append">
                    <span class="fa fa-user input-group-text"></span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" name="email" class="form-control @if($errors->count()) is-invalid @endif" placeholder="@lang('mage.auth.register.email')" value="{{ old('email') }}">
                <div class="input-group-append">
                    <span class="fa fa-envelope input-group-text"></span>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control @if($errors->count()) is-invalid @endif" placeholder="@lang('mage.auth.register.password')">
                <div class="input-group-append">
                    <span class="fas fa-key input-group-text"></span>
                </div>
            </div>
            <div class="input-group mb-4">
                <input type="password" name="password_confirmation" class="form-control @if($errors->count()) is-invalid @endif" placeholder="@lang('mage.auth.register.repeat-password')">
                <div class="input-group-append">
                    <span class="fas fa-key input-group-text"></span>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">@lang('mage.auth.register.register')</button>
                </div>
            </div>
        </form>
        <hr />
        <p class="mb-2 text-center"><a href="{{ route('mage.auth.login.index') }}">@lang('mage.auth.register.login')</a></p>
    </div>
@endsection
