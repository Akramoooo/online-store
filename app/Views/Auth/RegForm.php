<?php $this->layout('MainLayout/layout', ['title' => 'Registration']) ?>

<link rel="stylesheet" type="text/css" href="/css/Auth/regform.css">

<div class="main-reg-page-container">
    <div class="reg-form-container">
        <form action="<?= '/auth/register-user' ?>" method="POST">
            <div>
                <label for="userName">Your name</label>
                <input type="text" name="name" id="userName">
            </div>
            <div>
                <label for="UserLastName">Last name </label>
                <input type="text" name="lastname" id="UserLastName">
            </div>
            <div>
                <label for="UserPass">Password</label>
                <input type="text" name="password" id="UserPass">
            </div>
            <div>
                <label for="userEmail">Your email</label>
                <input type="email" name="email" id="userEmail">
            </div>
            <div class="reg-btn">
                <button type="submit">Good work</button>
            </div>
            <a href="/auth/authorization-form" class="advice-to-sigh-in">Already have an account?</a>
        </form>
    </div>
</div>