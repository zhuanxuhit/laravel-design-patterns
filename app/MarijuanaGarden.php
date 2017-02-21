<?php namespace App;

class MarijuanaGarden extends EmptyGarden {

    public function items() :array
    {
        return array_fill(0,$this->plotArea->totalNumOfPlots(),"weed");
    }

}