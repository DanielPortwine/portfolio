<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AWS;

class ContactController extends Controller
{
    public function send(Request $request)
    {

        $sns = AWS::createClient('sns');

        $sns->publish([
            'TopicArn' => config('aws.sns_topic_arn'),
            'Message' => 'This message was sent via the contact form by '.
                $request->post('first-name').' '.
                $request->post('last-name').' ('.
                $request->post('email').')'.
                ':'.PHP_EOL.PHP_EOL.
                $request->post('message'),
            'Subject' => 'Website Contact: '.$request->post('subject'),
        ]);

        return back();
    }
}
