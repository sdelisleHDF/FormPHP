<?php // src/KNPLabs/Real/Provider/DinosaursProvider.php
	
 
	
namespace KNPLabs\Real\Provider;
	
 
	
interface DinosaursProvider
	
{
	
    /**
	
     * @return array<Dinosaur>
	
     */
	
    public function all(): array;
	
}