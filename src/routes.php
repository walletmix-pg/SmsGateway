<?php


Route::get('sms',		['as' => 'sms',	'uses' => 'Walletmix\SmsGateway\SmsGatewayController@index']);

Route::post('sms/post',	['as' => 'sms/post',	'uses' => 'Walletmix\SmsGateway\SmsGatewayController@send']);