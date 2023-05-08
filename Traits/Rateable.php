<?php

trait Rateable
{
    protected $rate;

    public function setRate($rate)
    {
        if ($rate >= 0 && $rate <= 5) {

            $this->rate = $rate;
        } else {

            // sinstassi obbligatoria per lanciare un errore
            throw new Exception("!!! Puoi inserire solo un voto da 0 a 5 !!!");
        }
    }

    public function getRate()
    {
        return $this->rate;
    }
}
