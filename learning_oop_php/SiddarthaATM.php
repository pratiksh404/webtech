<?php

class SiddarthaATM extends ATMCard
{
    const TYPE = "Credit Card";

    public function info()
    {
        echo "
        <br>
        <b>Charge</b>:Rs. $this->charge , 
        <br>
        <b>Limit</b>:Rs. $this->limit , 
        <br>
        <b>Name</b>: $this->name , 
        ";
    }

    public function pay($amount): void
    {
        if ($amount > $this->limit) {
            echo "You cannot receive more than Rs. " . $this->limit;
        } else {
            echo "<br> Requested amount : Rs. " . $amount . ' ';
            echo $this->receipt($amount, $this->charge);
        }
    }

    public function receipt($amount, $charge): string
    {
        return "You have received Rs . " . $amount . " with charge Rs . " . $charge;
    }


    public static function branches()
    {
        echo "
        <br>
        Shallghari
        <br>
        Pulchwok
        <br>
        Bouddha
        <br>
        Naya Bazar
        ";
    }
}
