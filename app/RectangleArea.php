<?php namespace App;

class RectangleArea implements PlotArea {
    protected $width;
    protected $height;

    /**
     * RectangleArea constructor.
     *
     * @param $width
     * @param $height
     */
    public function __construct( $width, $height )
    {
        $this->width  = $width;
        $this->height = $height;
    }

    public function totalNumOfPlots()
    {
        return ceil($this->width * $this->height / 2);
    }
}