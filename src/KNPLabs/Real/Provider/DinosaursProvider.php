<?php

namespace KNPLabs\Real\Provider;

interface DinosaursProvider
{
    public function all(): array;
    public function searchByName(string $ch): array;
}