<?php
/*
 * / = inicio y cierre de la expresion
 *$= es el final de la cadena o expresion
 * ^= es el inicio de la expresion
 * -=Rangos
 * []=funciona para definir un patron
 * {}=funciona para definir una condicion
 * */


$password = 123456;
$regexp='/^[1-9]{5,9}$/';

echo preg_match($regexp,$password);