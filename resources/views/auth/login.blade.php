@extends('layouts.app')
@extends('layouts.script')

@section('section')



<section class="login py-5 border-top-1" style="background-image: url('images/biblio3.jpg')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border" style="background-color: white">
                    <h3 class="bg-gray p-4">Login Now</h3>
                    <form method="POST" action="{{ route('login.custom') }}">
                    @csrf
                        <fieldset class="p-4">
                            <input type="text" placeholder="Email" name="email" id="email" class="border p-3 w-100 my-2">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            <input type="password" placeholder="Password" name="password" id="password" class="border p-3 w-100 my-2">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            <div class="loggedin-forgot">
                                    <input type="checkbox" id="keep-me-logged-in">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2">Keep me logged in</label>
                            </div>
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Log in</button>
                            <a class="mt-3 d-inline-block text-primary" href="/registration">Register Now</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
