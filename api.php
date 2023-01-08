<?php

class Insert {
    public static function inserir()
    {
        require_once "conexao.php";
        $url = "https://gateway.marvel.com/v1/public/characters?ts=1000&apikey=108faad5017c38e7e6fbdbab83de752b&hash=1d352958daa20ac6c7f27792c95ce5d2";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $personagens = curl_exec($curl);
        $data = json_decode($personagens, true);

        foreach ($data['data']['results'] as $key => $item) {
            $sqlConsulta = "SELECT * FROM herois";
            $consulta = $conexao->query($sqlConsulta); 
            $herois = mysqli_fetch_array($consulta);      
            
            if(!in_array($item['id'], $herois)){       
                $sql = "INSERT INTO herois (codigo_heroi, nome, descricao_heroi) VALUES ('" . $item['id'] . "', '" . $item['name'] . "', '" . $item['description'] . "')";
                $inserir = $conexao->query($sql);
                return $inserir;           
            } else {
                echo "Esses heróis já estão cadastrados no banco.";
            }          
        }               
        
    }
}

     
                

       
         
 