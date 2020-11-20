<?php
namespace App\Providers;
use App\Models\Company; // write model name here 
use Illuminate\Support\ServiceProvider;
class DynamicCompanyname extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('companyname_array', Company::all());
        });
    }

}