<?php
// questo file .php mi serve creare tutte le funzioni che voglio per poi includerle nei vari file

// in questa funzione, ho usato il metodo substr per prendere solo li primi caratteri, definiti da $length e str_shuffle mescola i caratteri
function generatePassword($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    return substr(str_shuffle($characters), 0, $length);
}