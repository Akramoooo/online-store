<?php $this->layout('MainLayout/layout', ['title' => 'Login']) ?>

<link rel="stylesheet" type="text/css" href="/css/Auth/regform.css">

<div class="main-reg-page-container">
    <div class="reg-form-container">
        <form action="POST">
            <div>
                <label for="userEmail">Your email</label>
                <input type="email" name="email" id="userEmail">
            </div>
            <div>
                <label for="UserPass">Password</label>
                <input type="text" name="password" id="UserPass">
            </div>
            <div class="reg-btn">
                <button type="submit">Good work</button>
            </div>
            <a href="/auth/registration-form" class="advice-to-sigh-in">Don't have an account?</a>
        </form>
    </div>
</div>