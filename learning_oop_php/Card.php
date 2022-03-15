<?php

interface Card
{
    public function pay($amount);

    public function receipt($amount, $charge);
}
