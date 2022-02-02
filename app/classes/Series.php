<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;
    protected $user;


    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber   = $post['ending_number'];
//        $this->oddEven        = $post['odd_even'];
        if (isset($post['odd_even']))
        {
            $this->oddEven  = $post['odd_even'];
        }
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
            if($this->oddEven == 'odd')
            {
                return $this->smallToBigOddSeries();
            }
            elseif ($this->oddEven == 'even')
            {
                return $this->smallToBigEvenSeries();
            }
            else
            {
                return $this->smallToBigSeries();
            }
        }
    }

    protected function smallToBigOddSeries()
    {
        for($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
//            echo $this->i. ' ';
            if($this->i % 2 !=0)
            {
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
    }

    protected function smallToBigEvenSeries()
    {
        for($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
//            echo $this->i. ' ';
            if($this->i % 2 ==0)
            {
                $this->result .= $this->i.' ';
            }
        }
        return $this->result;
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