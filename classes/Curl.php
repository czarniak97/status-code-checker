<?php

class Curl
{
    private $handler = null;
    private $url;
    public $info = [];
    public $content = '';

    public function url($url)
    {
        $this->url = $url;
        return $this;
    }

    public function openConnection()
    {
        if ($this->handler == null) {
            $this->handler = curl_init();
        }
    }

    public function sendRequest()
    {
        try {
            curl_setopt_array($this->handler, [CURLOPT_URL => $this->url, CURLOPT_HEADER => true, CURLOPT_NOBODY => true, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => false]);
            $this->content = curl_exec($this->handler);
            $this->info = curl_getinfo($this->handler);
            echo $this->info;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function closeConnection()
    {
        curl_close($this->handler);
        $this->handler = null;
    }
}

