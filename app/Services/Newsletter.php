<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function subscribe(string $email)
    {
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us8'
        ]);

        return $response = $mailchimp->lists->addListMember(config('services.mailchimp.lists.subscribe'), [
            'email_address' => $email,
            'status' => 'subscribed'
            //        'merge_fields' => [
            //            'FNAME' => request('first_name'),
            //            'LNAME' => request('last_name')
            //        ]
        ]);
    }
}
