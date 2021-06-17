# [Soft UI Dashboard Laravel](http://demos.creative-tim.com/soft-ui-dashboard-laravel/dashboard.html?ref=readme-sudl)
<!--- nu stiu ce versiune e -->
![version](https://img.shields.io/badge/version-1.0.0-blue.svg) 
![license](https://img.shields.io/badge/license-MIT-blue.svg)
[![GitHub issues open](https://img.shields.io/github/issues/creativetimofficial/soft-ui-dashboard-laravel.svg)](https://github.com/creativetimofficial/soft-ui-dashboard-laravel/issues?q=is%3Aopen+is%3Aissue) 
[![GitHub issues closed](https://img.shields.io/github/issues-closed-raw/creativetimofficial/soft-ui-dashboard-laravel.svg)](https://github.com/creativetimofficial/soft-ui-dashboard-laravel/issues?q=is%3Aissue+is%3Aclosed)


*Frontend version*: Soft UI Dashboard v1.0.0. More info at https://www.creative-tim.com/product/soft-ui-dashboard-laravel/?ref=sudl-readme 

![Image](https://s3.amazonaws.com/creativetim_bucket/products/450/original/opt_sd_free_thumbnail.png)

Most complex and innovative Dashboard Made by [Creative Tim](https://creative-tim.com/). Check our latest Free Bootstrap 5 Dashboard.

Designed for those who like bold elements and beautiful websites. Made of hundred of elements, designed blocks and fully coded pages, Soft UI Dashboard is ready to help you create stunning websites and webapps.

We created many examples for pages like Sign In, Profile and so on. Just choose between a Basic Design, an illustration or a cover and you are good to go!

**Fully Coded Elements**

Soft UI Dashboard is built with over 70 frontend individual elements, like buttons, inputs, navbars, navtabs, cards or alerts, giving you the freedom of choosing and combining. All components can take variations in colour, that you can easily modify using SASS files and classes.

You will save a lot of time going from prototyping to full-functional code, because all elements are implemented.
This Free Bootstrap 5 Dashboard is coming with prebuilt design blocks, so the development process is seamless,
switching from our pages to the real website is very easy to be done.

View [all components here](https://www.creative-tim.com/learning-lab/bootstrap/alerts/soft-ui-dashboard?ref=readme-sudpl).

**Documentation built by Developers**

Each element is well presented in a very complex documentation.
You can read more about the <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/soft-ui-dashboard" target="_blank">documentation here</a>.

**Example Pages**

If you want to get inspiration or just show something directly to your clients,
you can jump start your development with our pre-built example pages. You will be able
to quickly set up the basic structure for your web project.
View <a href="https://demos.creative-tim.com/soft-ui-dashboard-laravel/dashboard" target="_blank">example pages here</a>.

**HELPFUL LINKS**

- View <a href="https://github.com/creativetimofficial/soft-ui-dashboard-laravel" target="_blank">Github Repository</a>

- Check <a href="https://www.creative-tim.com/faq" target="_blank">FAQ Page</a>

#### Special thanks
During the development of this dashboard, we have used many existing resources from awesome developers. We want to thank them for providing their tools open source:
- [Bootstrap 5](https://www.getbootstrap.com)- Open source front end framework
- [Popper.js](https://popper.js.org/) - Kickass library used to manage poppers

Let us know your thoughts below. And good luck with development!

## Table of Contents

* [Prerequisites](#prerequisites)
* [Installation](#installation)
* [Usage](#usage)
* [Versions](#versions)
* [Demo](#demo)
* [Documentation](#documentation)
* [Login](#login)
* [Register](#Register)
* [Forgot Password](#forgot-password)
* [Reset Password](#reset-password)
* [Profile](#profile)
* [Dashboard](#dashboard)
* [File Structure](#file-structure)
* [Browser Support](#browser-support)
* [Resources](#resources)
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
And Laravel: https://laravel.com/docs/8.x/installation


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
<!--- schimb in loc de argon in soft-ui-dashboard-laravel, e luat de pe paper -->
[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/html-logo.jpg?raw=true" width="60" height="60" />](https://demos.creative-tim.com/argon-dashboard-pro/pages/dashboards/dashboard.html?ref=sudl-readme)
[<img src="https://github.com/creativetimofficial/public-assets/blob/master/logos/laravel_logo.png?raw=true" width="60" height="60" />](https://argon-dashboard-pro-laravel.creative-tim.com/?ref=sudl-readme)

## Demo
| Register | Login | Dashboard |
| --- | --- | ---  |
| [![Register](https://cdn4.iconfinder.com/data/icons/unigrid-layout/60/021_layout_wireframe_grid_image-512.png)](https://cdn4.iconfinder.com/data/icons/unigrid-layout/60/021_layout_wireframe_grid_image-512.png) | [![Login](https://cdn4.iconfinder.com/data/icons/unigrid-layout/60/021_layout_wireframe_grid_image-512.png)](https://cdn4.iconfinder.com/data/icons/unigrid-layout/60/021_layout_wireframe_grid_image-512.png)  | [![Dashboard](https://cdn4.iconfinder.com/data/icons/unigrid-layout/60/021_layout_wireframe_grid_image-512.png)](https://paper-dashboard-laravel.creative-tim.com/?ref=pdl-readme)

| Forgot Password Page | Reset Password Page | Profile Page  |
| --- | --- | ---  |
| [![Forgot Password Page](https://cdn4.iconfinder.com/data/icons/unigrid-layout/60/021_layout_wireframe_grid_image-512.png)](https://paper-dashboard-laravel.creative-tim.com/profile?ref=pdl-readme)  | [![Reset Password Page](https://cdn4.iconfinder.com/data/icons/unigrid-layout/60/021_layout_wireframe_grid_image-512.png)](https://paper-dashboard-laravel.creative-tim.com/user?ref=pdl-readme) | [![Profile Page](https://cdn4.iconfinder.com/data/icons/unigrid-layout/60/021_layout_wireframe_grid_image-512.png)](https://paper-dashboard-laravel.creative-tim.com/notifications?ref=pdl-readme)
[View More](https://www.creative-tim.com/live/soft-ui-dashboard-laravel/?ref=sudl-readme)

## Documentation
The documentation for the Soft UI Dashboard Laravel is hosted at our [website](https://www.creative-tim.com/live/soft-ui-dashboard-laravel/?start-page=/docs/getting-started/laravel-setup.html&ref=sudl-readme).

### Login
If you are not logged in you can only access this page or the Sign Up page. The default url takes you to the login page where you use the default credentials **admin@softui.com** with the password **secret**. Logging in is possible only with already existing credentials. For this to work you should have run the migrations. 

The `App\Http\Livewire\Auth\Login` handles the logging in of an existing user.

```
    public function login() {
        $credentials = $this->validate();
        return auth()->attempt(['email' => $this->email, 'password' => $this->password]) ? 
            redirect()->intended('/dashboard') 
            : $this->addError('email', trans('auth.failed')); 
    }
```

### Register
You can register as a user by filling in the name, email and password for your account. You can do this by accessing the sign up page from the "**Sign Up**" button in the top navbar or by clicking the "**Sign Up**" button from the bottom of the log in form or if you are logged in from the "**Sign Up**" button from the sidebar. Another simple way is adding **/sign-up** in the url.

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

### Profile
The profile can be accessed by a logged in user by clicking "**Profile**" from the sidebar or adding **/profile** in the url. The user can add information like phone number, location, description or change the name and email.

The `App\Http\Livewire\Profile` handles the user's profile information.

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

## Browser Support
At present, we officially aim to support the last two versions of the following browsers:

<img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/chrome.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/firefox.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/edge.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/safari.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/opera.png" width="64" height="64">

## Reporting Issues
We use GitHub Issues as the official bug tracker for the Soft UI Dashboard. Here are some advices for our users that want to report an issue:

1. Make sure that you are using the latest version of the Soft UI Dashboard. Check the CHANGELOG from your dashboard on our [website](https://www.creative-tim.com/product/soft-ui-dashboard-laravel?ref=readme-sudl).
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







