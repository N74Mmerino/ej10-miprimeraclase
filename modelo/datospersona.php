<?php

class datospersona{
    
    public $nombre;
    public $apellido;
    public $email;
    public $edad;

    public function Mostrarpropiedades() {
        echo'Nombre: '. $this-> nombre. '<br>';
        echo'Edad: '. $this-> edad. '<br>';
        echo'Email: '. $this-> email. '<br>';
        echo'Apellido: '. $this-> apellido. '<br>';
    }

}