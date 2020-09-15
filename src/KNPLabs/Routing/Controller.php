<?php // src/KNPLabs/Routing/Controller.php

namespace KNPLabs\Routing;

interface Controller  
{  
    public function handleRequest(): void;  
}