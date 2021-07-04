<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Twilio\Rest\Client;

class test extends CI_Controller {

	public function index()
	{
		$data = ['phone' => '+243970524665', 'text' => 'Hello, CI'];
		print_r($this->sendSMS($data));
	}

	protected function sendSMS($data) {
          // Your Account SID and Auth Token from twilio.com/console

            /*$sid = 'your_sid';
            $token = 'your_token';
            */

            $sid = 'AC6e269a214962c26b1d7eeac488c92b34';
            $token = '57aff9f2670808aaf222bbd481aa3b6f';
	        $client = new Client($sid, $token);
			
            // Use the client to do fun stuff like send text messages!
             return $client->messages->create(
                // the number you'd like to send the message to
                $data['phone'],
                array(
                    // A Twilio phone number you purchased at twilio.com/console
                    "from" => "+15005550006",
                    // the body of the text message you'd like to send
                    'body' => $data['text']
                )
            );
    }
}