<?php 

class Api {
    public static function buscarHerois() {
        $url = "https://gateway.marvel.com/v1/public/characters?ts=1000&apikey=108faad5017c38e7e6fbdbab83de752b&hash=1d352958daa20ac6c7f27792c95ce5d2";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $personagens = curl_exec($curl);   

        $Allpersonagens = json_decode($personagens, true);                 
        return $Allpersonagens; 
    } 
}
