<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('curl'))
{
   function http_request($url){
        
        $authorization = "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NjUsInJvbGVfaWQiOjEsImlhdCI6MTU2NDg3Nzg0MH0.FJj2qvPXK2hZ0T-JE3-rx2OTHOYhJz88JKTt4WoroM4";

        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
        // set user agent    
        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // tutup curl 
        curl_close($ch);      

        // mengembalikan hasil curl
        return $output;
    }
}