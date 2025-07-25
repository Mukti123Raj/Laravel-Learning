<?php

namespace App\Providers;

use App\Services\MailchimpNewsletter;
use App\Services\newsletter;
// use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(newsletter::class, function(){

            $client=(new ApiClient())->setConfig([
	    'apiKey' => config('services.mailchimp.key'),
	    'server' => 'us15'
        ]);
        return new MailchimpNewsletter($client);
        });
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Model::unguard();
    }
}
