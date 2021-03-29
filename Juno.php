<?php

/**
 * Autor:       Julião F. Kataleko
 * Link:        https://github.com/juliaokataleko
 * Projecto:    PHP Juno API Integration
 * Região:      Benguela City, Angola
 * Telefone e 
 * Whatsapp:    +244 922660717
 * 
 * Descrição: Classe PHP para consumir a API da Juno usando curl
*/

class Juno {
    
    private $clientId;
    private $clientSecret;
    private $base64;
    private $url;
    private $sandbox = true;

    public function __construct()
    {
        $this->clientId = "";
        $this->clientSecret = "";
        $this->url = "https://sandbox.boletobancario.com/api-integration";
        $this->base64 = base64_encode("{$this->clientId}:{$this->clientSecret}");
    }

    /**
     * Method to get API 
     * Acess Token
     *
     * @return void
     */
    public function getTokenAcess()
    {
        $ci = curl_init("https://sandbox.boletobancario.com/authorization-server/oauth/token");
        curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ci, CURLOPT_POST, true);
        curl_setopt($ci, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
        curl_setopt($ci, CURLOPT_HTTPHEADER, [
            "Content-Type: application/x-www-form-urlencoded",
            "Authorization: Basic {$this->base64}"
        ]);
        
        $data = json_decode(curl_exec($ci));
    }

    public function listCharges()
    {
        # code...
    }

    public function createCharges()
    {
        # code...
    }

    public function showCharge()
    {
        # code...
    }

    public function updateCharge()
    {
        # code...
    }

    public function deleteCharge()
    {
        # code...
    }

}