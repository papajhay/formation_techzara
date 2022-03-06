<?php
   class Volswagen implements Motor
    {
        public $ires="firelli";
        protected $wheel="left";
        private $color="white";

    /**
     * Get the value of ires
     */
        public function getIres() 
        {

            return $this->ires;
        }



       /**
        * Set the value of ires
       */   
         public function setIres($ires)
        {
            $this->ires = $ires;
            return $this;
        }


        /**
         * Get the value of wheel
         */
        public function getWheel() 
        {

            return $this->wheel;
        }


        /**
         * Set the value of wheel
         */

        public function setWheel($wheel) 
        {
            $this->wheel = $wheel;
            return $this;
        }

        public function getColor() 
        {
            
            return $this->color;
        }

        public function setColor($color) 
        {
            $this->color = $color;
            return $this;
        }

        public function getEnergy()
        {
           return "Essence";
        }
    }


    class Turbo extends Volswagen
    {
         /**
     * Get the value of ires
     */
        public function getIres() 
        {

            return $this->ires;
        }



       /**
        * Set the value of ires
       */   
         public function setIres($ires)
        {
            $this->ires = $ires;
            return $this;
        }
    }


    interface Motor 
    {
        public function getEnergy();
    }


    $volswagen = new Volswagen();
    // Get the value of  the ires
    echo $volswagen->ires  ;

    // Set the value of  the ires
    $volswagen->ires ="michelin";
    echo $volswagen->ires  ;

    echo $volswagen->getWheel();
    $volswagen->setWheel("right");
    echo $volswagen->getWheel();
    
    echo $volswagen->getColor();
    $volswagen->setColor("red");
    echo $volswagen->getColor();

    echo $volswagen -> getEnergy();

?>