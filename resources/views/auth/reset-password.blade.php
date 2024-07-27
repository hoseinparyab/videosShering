@extends('auth-layout')
@section('content')
    <div id="log-in" class="site-form log-in-form">

        <div id="log-in-head">
            <h1>تغییر رمز عبور</h1>
            <div id="logo"><a href="{{ route('index') }}"><img src="img/logo.png" alt=""></a></div>
        </div>

        <div class="form-output">
            <x-validation-errors></x-validation-errors>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="form-group label-floating">
                    <label class="control-label">ایمیل</label>
                    <input name="email" class="form-control" placeholder="" value={{ $request->email }} type="email">
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">رمز عبور</label>
                    <input name="password" class="form-control" placeholder="" type="password">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">تکرار رمز عبور</label>
                    <input name="password_confirmation" class="form-control" placeholder="" type="password">
                </div>

                <button type="submit" class="btn btn-lg btn-primary full-width">تغییر</button>
            </form>
        </div>
    </div>

@endsection
