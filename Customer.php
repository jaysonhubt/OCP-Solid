<?php

class Customer
{
    public function greeting($country, $name)
    {
        if ($country == 'Vietnamese') {
            echo "Xin chào $name";
        } else if ($country == 'American') {
            echo "Hello $name";
        }
    }
    
    protected function eat($country)
    {
        if ($country == 'Vietnamese') {
            echo 'Dùng đũa để ăn';
        } else if ($country == 'American') {
            echo 'Use a knife and fork to eat';
        }
    }
}
