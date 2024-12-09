<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use App\Models\UserModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('cek_username', function ($attribute, $value, $parameters, $validator)
        {
            $id = $parameters[0] ?? null;
            $userModel = new UserModel(); // Create an instance of your UserModel
            $count = $userModel->cek_username($id, $value);
            return $count === 0; // Returns true if the username is available, and false if it already exists
        });

        Validator::extend('cek_email', function ($attribute, $value, $parameters, $validator)
        {
            $id = $parameters[0] ?? null;
            $userModel = new UserModel(); // Create an instance of your UserModel
            $count = $userModel->cek_email($id, $value);
            return $count === 0; // Returns true if the username is available, and false if it already exists
        });

        // Set custom messages for validation
        Validator::replacer('cek_username', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'Kolom ' . $attribute . ' sudah ada yang menggunakan.');
        });

        Validator::replacer('cek_email', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'Kolom ' . $attribute . ' sudah ada yang menggunakan.');
        });

        Paginator::useBootstrap();
    }

}