<form action="{{ route('login') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input class="form-control" id="email" name="email" type="email" value="{{ old('email')}}"/>
        @error('email')
            <span class="help-block text-danger" style="font-size: 13px"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="mb-3">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Contraseña</label>
        </div>
        <input class="form-control" id="password" name="password" type="password" />
        @error('password')
            <span class="help-block text-danger" style="font-size: 13px"><strong>{{ $message }}</strong></span>
        @enderror
    </div>

    <div class="row flex-between-center">
        {{-- <div class="col-auto">
            <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox"
                    id="split-checkbox" />
                <label class="form-check-label mb-0" for="split-checkbox">Remember
                    me</label>
            </div>
        </div> --}}
        {{-- <div class="col-auto"><a class="fs--1"
                href="../../../pages/authentication/split/forgot-password.html">Forgot
                Password?</a>
        </div> --}}
    </div>

    <div class="mb-3">
        <button class="btn btn-primary d-block w-100 mt-3" type="submit"
            name="submit">Ingresar</button>
    </div>

</form>