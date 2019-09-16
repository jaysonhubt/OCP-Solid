<?php

class American extends Person
{
    protected function greating($name)
    {
        echo "Hello $name";
    }
    
    protected function eat()
    {
        echo 'Use a knife and fork to eat';
    }
}
