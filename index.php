<?php
abstract class Main{
    function save() {
        echo 'save';
    }

    function new() {
        echo 'new';
    }

    function getName() {
        return 'Привет';
    } 

}

class Extenden extends Main {
    function getName() {
        return parent::getName() . ' Здорово!';
    } 
}

