<?php
// questo file .php mi serve creare tutte le funzioni che voglio per poi includerle nei vari file

// in questa funzione, ho usato il metodo substr per prendere solo li primi caratteri, definiti da $length e str_shuffle mescola i caratteri
// function generatePassword($length) {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
//     return substr(str_shuffle($characters), 0, $length);
// }

// BONUS 2
// Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. 
// Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro.
// Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

function generatePassword($length, $includeNumbers, $includeLetters, $includeSymbols, $allowRepeat) {
    $numbers = '0123456789';
    $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symbols = '!@#$%^&*()';

    $characters = '';
    if ($includeNumbers) {
        $characters .= $numbers;
    }
    if ($includeLetters) {
        $characters .= $letters;
    }
    if ($includeSymbols) {
        $characters .= $symbols;
    }

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];
        if (!$allowRepeat && strpos($password, $randomChar) !== false) {
            $i--;
        } else {
            $password .= $randomChar;
        }
    }

    return $password;
}