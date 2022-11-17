# [Soft UI Dashboard Laravel Livewire](https://soft-ui-dashboard-laravel-livewire.creative-tim.com/login)

![version](https://img.shields.io/badge/version-1.0.0-blue.svg) 
![license](https://img.shields.io/badge/license-MIT-blue.svg)
[![GitHub issues open](https://img.shields.io/github/issues/creativetimofficial/soft-ui-dashboard-laravel-livewire.svg)](https://github.com/creativetimofficial/soft-ui-dashboard-laravel-livewire/issues?q=is%3Aopen+is%3Aissue) 
[![GitHub issues closed](https://img.shields.io/github/issues-closed-raw/creativetimofficial/soft-ui-dashboard-laravel-livewire.svg)](https://github.com/creativetimofficial/soft-ui-dashboard-laravel-livewire/issues?q=is%3Aissue+is%3Aclosed)


*Frontend version*: Soft UI Dashboard v1.0.0. More info at https://www.creative-tim.com/product/soft-ui-dashboard-laravel-livewire/?ref=sudl-readme 

[<img src="https://s3.amazonaws.com/creativetim_bucket/products/492/original/soft-ui-dashboard-laravel-livewire.jpg" width="100%" />](https://www.creative-tim.com/live/soft-ui-dashboard-laravel-livewire)

## Free Frontend Web App for Laravel with Livewire & Alpine.js
What happens when you combine Soft UI, one of the hottest design trends right now, and Laravel?  We've partnered with [UPDIVISION](https://updivision.com/) to create the ultimate design & development toolbox. 

Soft UI Dashboard Laravel Livewire comes with dozens of handcrafted UI elements tailored for Bootstrap 5 and an out of the box Laravel backend. The Livewire integration allows you to build dynamic interfaces easier without leaving the comfort of your favourite framework. If you combine this even further with Alpine.js, you get the perfect combo for kickstarting your next project.       
 
## Ok, I`m hooked. So, what am I getting?
You're getting a lean, mean, app-building machine. Here is the blueprint:  
* 70 handcrafted UI components. From buttons and inputs to navbars and cards, everything is designed to create visually cohesive interfaces.  
* 7 example pages to get you started
* fully-functional authentication system, register and user profile editing features built with Laravel
* Livewire & Alpine.js integration

## Free for personal and commercial projects
Whether you're working on a side project or delivering to a client, we've got you covered. Soft UI Dashboard Laravel Livewire is released under MIT license, so you can use it both for personal and commercial projects for free. All you need to do is start coding.    

## Detailed documentation and example pages
We also included detailed documentation for every component and feature so you can follow along. The pre-built example pages give you a quick glimpse of what Soft UI Dashboard Laravel Livewire has to offer so you can get started in no time.  

If you want to get more features, go PRO with [Soft UI Dashboard PRO Laravel Livewire](https://www.creative-tim.com/product/soft-ui-dashboard-pro-laravel-livewire).

## Table of Contents

* [Prerequisites](#prerequisites)
* [Installation](#installation)
* [Usage](#usage)
* [Versions](#versions)
* [Demo](#demo)
* [Documentation](#documentation)
* [Login](#login)
* [Register](#register)
* [Forgot Password](#forgot-password)
* [Reset Password](#reset-password)
* [User Profile](#user-profile)
* [Dashboard](#dashboard)
* [File Structure](#file-structure)
* [Browser Support](#browser-support)
* [Reporting Issues](#reporting-issues)
* [Licensing](#licensing)
* [Useful Links](#useful-links)
* [Social Media](#social-media)
* [Credits](#credits)

## Prerequisites

If you don't already have an Apache local environment with PHP and MySQL, use one of the following links:

 - Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
 - Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
 - Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/

Also, you will need to install Composer: https://getcomposer.org/doc/00-intro.md   
And Laravel: https://laravel.com/docs/9.x/installation


## Installation

1. Unzip the downloaded archive
2. Copy and paste **soft-ui-dashboard-laravel-master** folder in your **projects** folder. Rename the folder to your project's name
3. In your terminal run `composer install`
4. Copy `.env.example` to `.env` and updated the configurations (mainly the database configuration)
5. In your terminal run `php artisan key:generate`
6. Run `php artisan migrate --seed` to create the database tables and seed the roles and users tables
7. Run `php artisan storage:link` to create the storage symlink (if you are using **Vagrant** with **Homestead** for development, remember to ssh into your virtual machine and run the command from there).

## Usage
Register a user or login with default user **admin@softui.com** and password **secret** from your database and start testing (make sure to run the migrations and seeders for these credentials to be available).

Besides the dashboard, the auth pages, the billing and table pages, there is also has an edit profile page. All the necessary files are installed out of the box and all the needed routes are added to `routes/web.php`. Keep in mind that all of the features can be viewed once you login using the credentials provided or by registering your own user. 

## Versions
[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/html-logo.jpg?raw=true" width="60" height="60" />](https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/dashboard.html?ref=sudl-readme)
[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/laravel_logo.png?raw=true" width="60" height="60" />](https://argon-dashboard-pro-laravel.creative-tim.com/?ref=sudl-readme)

| HTML | Laravel Livewire |
| --- | --- |
| [![HTML](https://s3.amazonaws.com/creativetim_bucket/products/487/thumb/opt_sdp_thumbnail.jpg)](https://www.creative-tim.com/product/soft-ui-dashboard) | [![Laravel](https://s3.amazonaws.com/creativetim_bucket/products/492/thumb/soft-ui-dashboard-laravel-livewire.jpg)](https://www.creative-tim.com/product/soft-ui-dashboard-laravel-livewire)  | 

## Demo
| Register | Login | Dashboard |
| --- | --- | ---  |
| [<img src="https://github.com/creativetimofficial/public-assets/blob/master/soft-ui-design-system-laravel/Register.png" width="322" />](https://soft-ui-dashboard-laravel-livewire.creative-tim.com/sign-up) | [<img src="https://github.com/creativetimofficial/public-assets/blob/master/soft-ui-design-system-laravel/Login.png?raw=true" width="322" />](https://soft-ui-dashboard-laravel-livewire.creative-tim.com/login)  | [<img src="https://github.com/creativetimofficial/public-assets/blob/master/soft-ui-design-system-laravel/Dashboard.png?raw=true" width="322" />](https://soft-ui-dashboard-laravel-livewire.creative-tim.com/dashboard)

| Forgot Password Page | Reset Password Page | Profile Page  |
| --- | --- | ---  |
| [<img src="https://github.com/creativetimofficial/public-assets/blob/master/soft-ui-design-system-laravel/Forgot-password.png" width="320" />](https://soft-ui-dashboard-laravel-livewire.creative-tim.com/login/forgot-password)  | [<img src="https://github.com/creativetimofficial/public-assets/blob/master/soft-ui-design-system-laravel/Login.png" width="312" />](https://soft-ui-dashboard-laravel-livewire.creative-tim.com/) | [<img src="https://github.com/creativetimofficial/public-assets/blob/master/soft-ui-design-system-laravel/Profile.png" width="330" />](https://soft-ui-dashboard-laravel-livewire.creative-tim.com/laravel-user-profile)
[View More](https://soft-ui-dashboard-laravel-livewire.creative-tim.com/dashboard)

## Documentation
The documentation for the Soft UI Dashboard Laravel Livewire is hosted at our [website](https://soft-ui-dashboard-laravel-livewire.creative-tim.com/documentation/bootstrap/overview/soft-ui-dashboard/index.html).

### Login
If you are not logged in you can only access this page or the Sign Up page. The default url takes you to the login page where you use the default credentials **admin@softui.com** with the password **secret**. Logging in is possible only with already existing credentials. For this to work you should have run the migrations. 

The `App\Http\Livewire\Auth\Login` handles the logging in of an existing user.

```
    public function login() {
        $credentials = $this->validate();
        if(auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(["email" => $this->email])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/dashboard-default');        
        }
        else{
            return $this->addError('email', trans('auth.failed')); 
        }
    }
```

### Register
You can register as a user by filling in the name, email and password for your account. You can do this by accessing the sign up page from the "**Sign Up**" button in the top navbar or by clicking the "**Sign Up**" button from the bottom of the log in form.. Another simple way is adding **/sign-up** in the url.

The `App\Http\Livewire\Auth\SignUp` handles the registration of a new user.

```
    public function register() {
        $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
        auth()->login($user);
        return redirect('/dashboard');
    }
```

### Forgot Password
If a user forgets the account's password it is possible to reset the password. For this the user should click on the "**here**" under the login form or add **/forgot-password** in the url.

The `App\Http\Livewire\Auth\ForgotPassword` takes care of sending an email to the user where he can reset the password afterwards.

```
    public function recoverPassword() { 
        $this->validate();
        $user = User::where('email', $this->email)->first();
        if($user){
            $this->notify(new ResetPassword($user->id));
            $this->showSuccesNotification = true;
            $this->showFailureNotification = false;
        } else {
            $this->showFailureNotification = true;
        }
    }
```

### Reset Password
The user who forgot the password gets an email on the account's email address. The user can access the reset password page by clicking the button found in the email. The link for resetting the password is available for 12 hours. The user must add the email, the password and confirm the password for his password to be updated.

The `App\Http\Livewire\Auth\ResetPassword` helps the user reset the password.

```
    public function resetPassword() {
        $this->validate();
        $existingUser = User::where('email', $this->email)->first();
        if($existingUser && $existingUser->id == $this->urlID) { 
            $existingUser->update([
                'password' => Hash::make($this->password) 
            ]);
            $this->showSuccesNotification = true;
            $this->showFailureNotification = false;
        } else {
            $this->showFailureNotification = true;
        }
    }
```

### User Profile
The profile can be accessed by a logged in user by clicking "**User Profile**" from the sidebar or adding **/user-profile** in the url. The user can add information like phone number, location, description or change the name and email.

The `App\Http\Livewire\UserProfile` handles the user's profile information.

```
    public function save() {
        $this->validate();
        $this->user->save();
        $this->showSuccesNotification = true;
    }
```

### Dashboard
You can access the dashboard either by using the "**Dashboard**" link in the left sidebar or by adding **/dashboard** in the url after logging in. 

## File Structure
```
app
├── Console
│   └── Kernel.php
├── Exceptions
│   └── Handler.php
├── Http
│   ├── Controllers
│   │   └── Controller.php
│   ├── Kernel.php
│   ├── Livewire
│   │   ├── Auth
│   │   │   ├── ForgotPassword.php
│   │   │   ├── Login.php
│   │   │   ├── Logout.php
│   │   │   ├── ResetPassword.php
│   │   │   └── SignUp.php
│   │   ├── Billing.php
│   │   ├── Dashboard.php
│   │   ├── LaravelExamples
│   │   │   ├── UserManagement.php
│   │   │   └── UserProfile.php
│   │   ├── Profile.php
│   │   ├── Rtl.php
│   │   ├── StaticSignIn.php
│   │   ├── StaticSignUp.php
│   │   └── Tables.php
│   └── Middleware
│       ├── Authenticate.php
│       ├── EncryptCookies.php
│       ├── PreventRequestsDuringMaintenance.php
│       ├── RedirectIfAuthenticated.php
│       ├── TrimStrings.php
│       ├── TrustHosts.php
│       ├── TrustProxies.php
│       └── VerifyCsrfToken.php
├── Models
│   └── User.php
├── Notifications
│   └── ResetPassword.php
├── Providers
│   ├── AppServiceProvider.php
│   ├── AuthServiceProvider.php
│   ├── BroadcastServiceProvider.php
│   ├── EventServiceProvider.php
│   └── RouteServiceProvider.php
└── View
    └── Components
        └── Layouts
            ├── App.php
            └── ...
```
## Browser Support
At present, we officially aim to support the last two versions of the following browsers:

<img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/chrome.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/firefox.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/edge.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/safari.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/opera.png" width="64" height="64">

## Reporting Issues
We use GitHub Issues as the official bug tracker for the Soft UI Dashboard. Here are some advices for our users that want to report an issue:

1. Make sure that you are using the latest version of the Soft UI Dashboard. Check the CHANGELOG from your dashboard on our [website](https://www.creative-tim.com/product/soft-ui-dashboard-laravel-livewire?ref=readme-sudl).
2. Providing us reproducible steps for the issue will shorten the time it takes for it to be fixed.
3. Some issues may be browser specific, so specifying in what browser you encountered the issue might help.

## Licensing
- Copyright 2021 [Creative Tim](https://www.creative-tim.com?ref=readme-sudl)
- Creative Tim [license](https://www.creative-tim.com/license?ref=readme-sudl)

## Useful Links
- [Tutorials](https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w)
- [Affiliate Program](https://www.creative-tim.com/affiliates/new) (earn money)
- [Blog Creative Tim](http://blog.creative-tim.com/)
- [Free Products](https://www.creative-tim.com/bootstrap-themes/free) from Creative Tim
- [Premium Products](https://www.creative-tim.com/bootstrap-themes/premium?ref=sudl-readme) from Creative Tim
- [React Products](https://www.creative-tim.com/bootstrap-themes/react-themes?ref=sudl-readme) from Creative Tim
- [VueJS Products](https://www.creative-tim.com/bootstrap-themes/vuejs-themes?ref=sudl-readme) from Creative Tim
- [More products](https://www.creative-tim.com/bootstrap-themes?ref=sudl-readme) from Creative Tim
- Check our Bundles [here](https://www.creative-tim.com/bundles??ref=sudl-readme)

### Social Media

### Creative Tim
Twitter: <https://twitter.com/CreativeTim?ref=sudl-readme>

Facebook: <https://www.facebook.com/CreativeTim?ref=sudl-readme>

Dribbble: <https://dribbble.com/creativetim?ref=sudl-readme>

Instagram: <https://www.instagram.com/CreativeTimOfficial?ref=sudl-readme>

### Updivision:

Twitter: <https://twitter.com/updivision?ref=sudl-readme>

Facebook: <https://www.facebook.com/updivision?ref=sudl-readme>

Linkedin: <https://www.linkedin.com/company/updivision?ref=sudl-readme>

Updivision Blog: <https://updivision.com/blog/?ref=sudl-readme>

## Credits

- [Creative Tim](https://creative-tim.com/?ref=sudl-readme)
- [UPDIVISION](https://updivision.com)







