<?php

class About {

    public function index($nama = 'John', $pekerjaan = 'Wrestler')
    {
        echo "Hello, my name is $nama and I am a $pekerjaan";
    }
    public function page()
    {
        echo 'About/Page';
    }
}