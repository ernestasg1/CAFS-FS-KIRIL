<?php

class newGreetings
{
    function __construct(
        public ?string $firstName = null
    ) {
    }

    public function getGreetings(): void
    {
        echo "Sveiki, mano vardas yra $this->firstName";
    }
}