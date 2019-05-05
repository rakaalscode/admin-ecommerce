<?php

namespace App\Helpers;

/**
 * Description of Crypt
 *
 * @author abid
 */
class curlAPI {
    //put your code here
    public function curlPost($curl_url,$body)
    {
        $curls = curl_init();
        curl_setopt_array($curls, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $curl_url,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36',
            CURLOPT_POST =>1,
            CURLOPT_HTTPHEADER =>array("Content-Type"=>"application/json"),
            CURLOPT_POSTFIELDS =>http_build_query($body),
        ));
        $resps = curl_exec($curls);
        curl_close($curls);
    }
    
    // public function curlGet($curl_url,$body)
    // {
    //     $curls = curl_init();
    //     curl_setopt_array($curls, array(
    //         CURLOPT_RETURNTRANSFER => 1,
    //         CURLOPT_URL => $curl_url,
    //         CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36',
    //         CURLOPT_POST =>1,
    //         CURLOPT_HTTPHEADER =>array("Content-Type"=>"application/json"),
    //         CURLOPT_POSTFIELDS =>http_build_query($body),
    //     ));
    //     $resps = curl_exec($curls);
    //     curl_close($curls);
    // }
}
