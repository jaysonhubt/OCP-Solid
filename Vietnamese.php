<?php

class Vietnamese extends Person
{
    protected function greating($name)
    {
        echo "Xin chào $name";
    }
    
    protected function eat()
    {
        echo 'Dùng đũa để ăn';
    }
}
