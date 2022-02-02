<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;


    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber   = $post['ending_number'];
    }


    public function index()
    {
        header('Location:pages/index.php');
    }

    public function makeSeries()
    {
        if($this->startingNumber > $this->endingNumber)
        {
            return $this->bigToSmallSeries();
        }
        else
        {
            return $this->smallToBig();
        }
    }


    protected function smallToBig()
    {
        for($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
//            echo $this->i. ' ';
            $this->result .= $this->i.' ';
        }
        return $this->result;

    }

    protected function bigToSmallSeries()
    {
        for($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
}