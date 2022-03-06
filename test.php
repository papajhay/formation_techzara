<?php
   class Volswagen
    {
        public $ires="firelli";
        protected $wheel="left";
        private $door="four";


        public function getIres() 
        {
            return $this->ires;
        }

        // public function getWheel() 
        // {
        //     return $this->wheel;
        // }

        public function getDoor() 
        {
            return $this->door;
        }
    }
    $volswagen = new Volswagen();
    echo $volswagen->ires;
    // echo $volswagen->wheel;
    echo $volswagen->door;


?>