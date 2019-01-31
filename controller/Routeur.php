<?php
namespace controller;

class Routeur
{
    public function routeur(){
    $worker = $_GET['w'];
    require($worker.'php');
}

