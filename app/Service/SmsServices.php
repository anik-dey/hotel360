<?php
namespace App\Service;
class SmsServices{
    
    protected $callingApi;
    protected $data;

    public function __construct(){
        $this->callingApi = "http://66.45.237.70/api.php";
        $this->data = [
            'username'=>"01689655055",
            'password'=>"01689655055",
        ];
    }

    public function sendSms($number, $message){
        try{
            $data = $this->data;
            $data['number'] = $number;
            $data['message'] = $message;
            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL,$this->callingApi);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);
            // $p = explode("|",$smsresult);
            // $sendstatus = $p[0];
            curl_close($ch);
            return $smsresult;
        } catch (\Exception $e){
            return $e->getMessage();
        }
    }


}