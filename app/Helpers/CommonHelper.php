<?php
//use App\User_notification;
use App\User;
use App\Site_lang_text;
use Twilio\Rest\Client;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
// use DB;
/*************Function to create unique alphanumeric user name *************/

/*************Function to Send mail *************/
function send_mail($data){
    Mail::send('sendmail', $data, function($message)  use ($data){
    $message->from('votivephp.priyanka@gmail.com', 'Verbell');
	 $message->to($data['email'])
    ->subject($data['subject']);
    });
}

?>