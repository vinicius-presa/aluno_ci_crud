<?php

namespace App\Libraries;

class Curl {
    private $ws = "http://viacep.com.br/ws";
    private $url;

    public function consulta($cep){
        $this->url = $this->ws . '/' . $cep . '/json';

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL, $this->url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
                        
        $res = curl_exec($ch);

        if(curl_error($ch)){
            echo 'Erro cep';
            exit;
            return false;
        }
        return $res;

        curl_close($ch);

    }


}