<?php

/**
 * The Default Example Controller Class
 *
 * @author Meraj Ahmad Siddiqui
 */
use Framework\Controller as Controller;

class Home extends Controller {
    public $spar = [];

    public function index() {
        $test = $this->security();
        var_dump($test);
    }
    public function contact() {
        
    }
    public function team() {
        
    }
    public function article() {
        
    }
    public function about() {
        
    }
    public function login() {
        
    }

    private function security(){
        $this->spar['ip'] = $_SERVER['HTTP_CLIENT_IP'];
        $this->spar['browser'] = $_SERVER['HTTP_USER_AGENT'];
        $this->spar['host'] = $_SERVER['REMOTE_HOST'];
        $this->spar['user'] = $_SERVER['REMOTE_USER'];
       
       return $this->spar; 
    }

    private function ip_details($ip){
         $ip_details = [];
         $ip_details['country']= geoip_country_name_by_name($ip); 
         return $ip_details;
    }

}
