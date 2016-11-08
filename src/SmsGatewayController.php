<?php

namespace Walletmix\SmsGateway;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;

class SmsGatewayController extends Controller
{
	public function index()
	{
		$current_time = "current_time";
		return view('smsgate::form', compact('current_time'));
	}
	
	public function send(Request $request)
	{
		
		$message = array(
			'destination' => $request->get('destination'),			
			'message'  => urlencode($request->get('message'))
		);
			
		
		$cradintial = config('smsconfig.data');
		$data = array_merge($message, $cradintial);
		
		
		$data = http_build_query($data);
 
		$sms_api = 'http://192.168.1.32/walletmix/wmx_sms/public/sms-api/apiAccess?'.$data;

		$response = file_get_contents($sms_api);
 


		return $response;
	}
}
