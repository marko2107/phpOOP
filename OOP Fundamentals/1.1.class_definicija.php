<?php

class Cars{
    
}

$my_classes = get_declared_classes();

foreach ($my_classes as $class) {
    echo $class .'<br>';
}

class Trucks{

}

$my_class=get_declared_classes();
