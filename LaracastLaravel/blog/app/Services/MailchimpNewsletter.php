<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements newsletter
{

    public function __construct(protected ApiClient $client)
    {

    }

    public function subscribe(string $email, string $list=null){

        $list ??= config('services.mailchimp.lists.subscribers');


    return $this->client->lists->addListMember(config('services.mailchimp.lists.subscribers'),[
        'email_address'=>$email,
        'status'=>'subscribed',
    ]);

    }

    // protected function client()
    // {
    //     return $this->client->setConfig([
	//     'apiKey' => config('services.mailchimp.key'),
	//     'server' => 'us15'
    // ]);

    // }
}
