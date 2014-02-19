<?php

return array(
    // LAYOUTS
    'master_layout' => 'thor::layouts.master',
    'account_layout' => 'layouts.master',
    // ACCOUNT VIEWS
    'account_show' => 'account.show',
    'account_login_form' => 'account.login',
    'account_signup_form' => 'account.signup',
    'account_forgot_password_form' => 'account.forgot_password',
    'account_reset_password_form' => 'account.reset_password',
    // MAIL VIEWS
    'account_email_reset_password' => 'account.emails.passwordreset', // with $user and $token.
    'account_email_account_confirmation' => 'account.emails.confirm', // with $user
    // ADMIN PARTIAL VIEWS
    'admin_navbar' => 'thor::partials.navbar',
    'admin_sidebar' => 'thor::partials.sidebar',
    // ADMIN VIEWS
    'admin_home' => 'thor::admin.home',
    'languages_index' => 'thor::admin.languages.index',
    'languages_create' => 'thor::admin.languages.create',
    'languages_show' => 'thor::admin.languages.show',
    'languages_edit' => 'thor::admin.languages.edit',
);