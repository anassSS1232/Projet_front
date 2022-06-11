@extends('layouts.app')
@extends('layouts.script')

@section('section')


<section class="login py-5 border-top-1" style="background-image: url('images/biblio.jpg')">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border border" style="background-color: white">
                        <h3 class="bg-gray p-4">Register Now</h3>
                        <form action="{{ route('register.custom') }}" method="POST">
                        @csrf
                            <fieldset class="p-4">
                                <input type="text" placeholder="Nom*" name="nom" id="nom" class="border p-3 w-100 my-2">
                                @if ($errors->has('nom'))
                                <span class="text-danger">{{ $errors->first('nom') }}</span>
                                @endif
                                <input type="text" placeholder="Prénom*" name="prenom" id="prenom" class="border p-3 w-100 my-2">
                                @if ($errors->has('prenom'))
                                <span class="text-danger">{{ $errors->first('prenom') }}</span>
                                @endif
                                <input type="int" placeholder="Telephone*" name="telephone" id="telephone" class="border p-3 w-100 my-2">
                                @if ($errors->has('telephone'))
                                <span class="text-danger">{{ $errors->first('telephone') }}</span>
                                @endif
                                <input type="text" placeholder="Adress*" name="adress" id="adress" class="border p-3 w-100 my-2">
                                @if ($errors->has('adress'))
                                <span class="text-danger">{{ $errors->first('adress') }}</span>
                                @endif
                                <input type="email" placeholder="Email*" name="email" id="email_address" class="border p-3 w-100 my-2">
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="password" placeholder="Password*" name="password" id="password" class="border p-3 w-100 my-2">
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                                <div class="loggedin-forgot d-inline-flex my-3">
                                        <input type="checkbox" id="registering" class="mt-1">
                                        <label for="registering" class="px-2">By registering, you accept our <a class="text-primary font-weight-bold" href="terms-condition.html">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Register Now</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
