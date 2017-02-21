<?php namespace App;

class EmptyGarden {

    /**
     * @var \App\PlotArea
     */
    protected $plotArea;

    /**
     * EmptyGarden constructor.
     *
     * @param \App\PlotArea $plotArea
     */
    public function __construct( PlotArea $plotArea )
    {
        $this->plotArea = $plotArea;
    }

    public function items():array
    {
        return array_fill( 0, $this->plotArea->totalNumOfPlots(), "handful of dirt" );
    }

}