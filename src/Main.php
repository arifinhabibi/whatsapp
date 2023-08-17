<?php 

class Main{

    public function __construct(Type $var = null) {
        $this->var = $var;
    }

    function Hallo(){
        for ($i=0; $i < 9; $i++) { 
            # code...
            var_dump($i);
        }
        return "hallo";
    }
}

?>