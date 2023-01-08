<?php

class Insert {
    
    public static function inserir()
    {
        require_once "conexao.php";
        global $conexao;

        $url = "https://gateway.marvel.com/v1/public/characters?ts=1000&apikey=108faad5017c38e7e6fbdbab83de752b&hash=1d352958daa20ac6c7f27792c95ce5d2";
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $personagens = curl_exec($curl);
        $data = json_decode($personagens, true);

        foreach ($data['data']['results'] as $key => $item) {
            $sqlConsulta = "SELECT * FROM heroi WHERE codigo_heroi = " . $item['id'];
            $consulta = $conexao->query($sqlConsulta); 
            $herois = mysqli_fetch_array($consulta);           
          
            if(empty($herois) || !in_array($item['id'], $herois)){
                $sql = "INSERT INTO heroi (codigo_heroi, nome, descricao) VALUES ('" . $item['id'] . "', '" . $item['name'] . "', '" . $item['description'] . "')";
                $inserir = $conexao->query($sql);                                        
            }         
        }  
    }   

    public static function stories()
    {
        require_once "conexao.php";
        global $conexao;
        $sqlConsulta = "SELECT * FROM heroi";
        $consulta = $conexao->query($sqlConsulta); 
         
        while($herois = mysqli_fetch_array($consulta)){
            $url = "https://gateway.marvel.com/v1/public/characters/{$herois['codigo_heroi']}/stories?ts=1000&apikey=108faad5017c38e7e6fbdbab83de752b&hash=1d352958daa20ac6c7f27792c95ce5d2";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $personagens = curl_exec($curl);
            $data = json_decode($personagens, true); 
    
            foreach ($data['data']['results'] as $key => $item) { 
                $queryConsulta = "SELECT * FROM stories WHERE id_heroi = " . $herois['id'];
                $consultaStories = $conexao->query($queryConsulta); 
                $stories = mysqli_fetch_array($consultaStories);                     
                    
                if(in_array($item['characters']['items'][0]['name'], $herois)){         
                    $sql = "INSERT INTO stories (id_heroi, titulo_storie, descricao) VALUES ('" . $herois['id'] . "','" . $item['title'] . "', '" . $item['description'] . "')";
                    $inserir = $conexao->query($sql);                                       
                }               
            }         
        }      
     
    }
}

     
                

       
         
 