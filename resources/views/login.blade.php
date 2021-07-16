@extends('layouts.login_layout')
@section('page', 'page-login')
<section>
    <div class="imgBx">
        <img src="{{ asset('images/husky_login.jpg') }}" class="img-fluid img" alt="">
    </div>
    <div class="contentBx">
        <div class="formBx">
             <h2>Login</h2>
             <form action="">
                 <div class="inputBx">
                    <span>Email Address</span>
                    <input type="text" name="email_address" id="email_address">
                </div>
                 <div class="inputBx">
                    <span>Password</span>
                    <input type="password" name="password" id="password">
                 </div>
                 <div class="remember">
                    <label for="remember"><input type="checkbox" name="remember"> Remember me</label>
                 </div>
                 <div class="inputBx">
                      <input type="submit" value="Sign in" name="">
                 </div>

                 <div class="inputB0x">
                   <p>Dont have an account?<a href="#"> Sign up</a></p>
               </div>
             </form>

             <h3>Login with social media</h3>
             <ul class="sci">
                 <li><img src="{{ asset('images/facebook.png') }}" alt=""></li>
                 <li><img src="{{ asset('images/twitter.png') }}" alt=""></li>
                 <li><img src="{{ asset('images/instagram.png') }}" alt=""></li>
             </ul>
        </div>
    </div>
</section>