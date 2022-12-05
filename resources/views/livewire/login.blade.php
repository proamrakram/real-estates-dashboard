<div class="auth-login-form">


    <div class="mb-1">
        <label class="form-label" for="login-phone">رقم الجوال او الايميل</label>
        <input class="form-control" dir="ltr" type="text" wire:model="login_phone_email"
            placeholder="example@gmail.com or 0599916672" autofocus="" tabindex="1" />
        @error('login_phone_email')
            <small class="text-danger">{{ $message }}</small>
        @enderror

    </div>

    <div class="mb-1">

        <div class="d-flex justify-content-between">
            <label class="form-label" for="login-password">كلمة المرور</label>
            <a href="{{ route('forget.password') }}"><small>نسيت كلمة المرور ؟</small></a>
        </div>

        <div class="input-group input-group-merge form-password-toggle">
            <input class="form-control form-control-merge" type="password" wire:model="login_password"
                placeholder="password" tabindex="2" />
            <span class="input-group-text cursor-pointer">
                <i data-feather="eye"></i>
            </span>
        </div>
        @error('login_password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    {{--
    <div class="mb-1">
        <div class="form-check">
            <input class="form-check-input" id="remember-me" name="remember_me" type="checkbox" tabindex="3" />
            <label class="form-check-label" for="remember-me"> تذكرني</label>
        </div>
    </div> --}}

    <button class="btn btn-primary w-100" tabindex="4" wire:click='login'>تسجيل الدخول</button>

</div>
