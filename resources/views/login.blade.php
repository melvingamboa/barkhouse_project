@extends('layouts.login_layout')
@section('page', 'page-login')
<section class="Form my-4 mx-5">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5">
                <img src="{{ asset('images/login_logo.png') }}" class="img-fluid img" alt="">
            </div>
            <div class="col-md-7">
                    <form action="" class="pt-5">
                        <div class="form-now">
                            <div class="col-md-7">
                                <input type="email" placeholder="Email-Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-now">
                            <div class="col-md-7">
                                <input type="password" placeholder="******" class="form-control">
                            </div>
                        </div>

                        <div class="form-now">
                            <div class="col-md-7">
                                <button type="buton" class="btn1 form-control btn-sm">Login</button>
                            </div>
                        </div>
                         <a href="#" class="pl-3">Forgot password</a>
                         <p class="pl-3">Dont have an account? <a href="#">Register Here!</a></p>
                    </form>
            </div>
        </div>
    </div>
</section>