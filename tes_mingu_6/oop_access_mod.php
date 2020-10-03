<?php

/** 
 * 
 * poin 2
 * 
 * - 1 || Buatlah sebuah class dengan menginplementasikan access modifier pada method maupun properties
 * - 1 || invoke/call method yang kalian buat dengan visibilitas static maupun non static
 */

 class modifier {
    public $name;
    public $color;
    public $speed;

    public function name($name)
    {
        echo $name;
    }
    
    public function color($color)
    {
        echo $color;
    }

    public static function speed()
    {
        echo "300 km\jam";
    }
}
  
$modif = new modifier();

echo $modif->name = 'Lamborgini'. "\n"; 

echo $modif->color = 'Yellow'. "\n";

modifier::speed();