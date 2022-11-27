<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use AWS;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        $sns = AWS::createClient('sns');

        $sns->publish([
            'TopicArn' => config('aws.sns_topic_arn'),
            'Message' => 'This message was sent via the contact form on '.config('app.url').'.'.PHP_EOL.PHP_EOL.
                'First Name: '.$request->post('first-name').PHP_EOL.
                'Last Name: '.$request->post('last-name').PHP_EOL.
                'Email: '.$request->post('email').PHP_EOL.
                'Company: '.$request->post('company').PHP_EOL.PHP_EOL.
                'Message:'.PHP_EOL.$request->post('message'),
            'Subject' => 'Portfolio Contact: '.$request->post('subject'),
        ]);

        return redirect()->route('contact-thanks');
    }
}
