<?php
namespace App\Helpers;
use App\User;
use App\Site_lang_text;
use Twilio\Rest\Client;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DateTime;
use Mail;
use PHPMailer\PHPMailer;


// use DB;
/*************Function to create unique alphanumeric user name *************/

/*************Function to Send mail *************/
class Helper{
/* 	public static function send_mail($data){
	    Mail::send('sendmail', $data, function($message)  use ($data){
	    $message->from('votivephp.nehaojha@gmail.com', 'Coursebait');
		 $message->to($data['email'])
	    ->subject($data['subject']);
	    });
	} */
	
	public static function sendMail($address,$subject,$message){
    $mail = new PHPMailer\PHPMailer();
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth   = true; // enable SMTP authentication
    $mail->Port       = 587;   // set the SMTP server port
    $mail->Host       = "mail.votivetech.in"; // SMTP server
    $mail->Username   = "support@votivetech.in";     // SMTP server username
    $mail->Password   = "10pyA17YbgBu";            // SMTP server password
    $mail->SetFrom('support@votivetech.in', 'Unisos');
    $mail->Subject = $subject;
    $mail->MsgHTML($message);
    $mail->IsHTML(true); // send as HTML
    $address = $address;
    $mail->AddAddress($address);
    if(!$mail->Send()) {
    //echo $mail->ErrorInfo ;
	//echo 'flase';
    	return false;   
    } else {
    	//echo 'true';
    }
	}
	
	public static function sendSms($sDestination,$sMessage,$sSenderId){
	$baseUrl = 'http://www.altiria.net/apirest/ws';

			//Se inicia el objeto CUrl 
			$ch = curl_init($baseUrl.'/sendSms');
			 //XX, YY y ZZ se corresponden con los valores de identificación del
			//usuario en el sistema.
			$credentials = array(
			//'domainId' => 'XX', 
			'login' => 'alejomartimartin@hotmail.com',
			'passwd' => 'Tamariu3'
			);
			 $destinations = explode(',', $sDestination);
			 $jsonMessage = array(
			'msg' => substr($sMessage,0,160),
			'senderId' => $sSenderId 
			);
			 $jsonData = array(
			'credentials' => $credentials, 
			'destination' => $destinations,
			'message' => $jsonMessage
			);

			//Se construye el mensaje JSON
			$jsonDataEncoded = json_encode($jsonData);

			//Indicamos que nuestra petición sera Post
			curl_setopt($ch, CURLOPT_POST, 1);
			 //Se fija el tiempo máximo de espera para conectar con el servidor (5 segundos)
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

			//Se fija el tiempo máximo de espera de la respuesta del servidor (60 segundos)
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);

			//Para que la peticion no imprima el resultado como un 'echo' comun
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			//Se añade el JSON al cuerpo de la petición codificado en UTF-8
			curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

			//Se fija el tipo de contenido de la peticion POST
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json;charset=UTF-8'));
			 //Se envía la petición y se consigue la respuesta
			$response = curl_exec($ch);
			
			
			//print_r($response);
			//die;

			
			 $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			 
			//Error en la respuesta del servidor 
				if($statusCode != 200){ 
					echo 'ERROR GENERAL: '.$statusCode;
					echo $response;
				}else{
				//Se procesa la respuesta capturada 
					echo 'Código de estado HTTP: '.$statusCode.'<br/>';
					$json_parsed = json_decode($response);
					$status = $json_parsed->status;
					echo 'Código de estado Altiria: '.$status.'<br/>';
					if ($status != '000'){
					echo 'Error: '.$response.'<br/>';
					}else{
					echo 'Cuerpo de la respuesta: <br/>';
					echo 'destails[0][destination]: '.$json_parsed->details[0]->destination.'<br/>';
					echo 'destails[0][status]: '.$json_parsed->details[0]->status.'<br/>';
				
					}
				}
			
			 //Si ha ocurrido algún error se lanza una excepción
			if(curl_errno($ch))
			throw new Exception(curl_error($ch));
			 return $response;
				
	}
	
	
	public static function get_datetime($datetime, $full = false){
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
	}


	// function get_lat_long($address){

	// 	$address = str_replace(" ", "+", $address);
	
	// 	$json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address='indore'&sensor=false&region=$region");
	// 	$json = json_decode($json);
	
	// 	$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
	// 	$long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
	// 	return $lat.','.$long;
	// }
	
}

?>