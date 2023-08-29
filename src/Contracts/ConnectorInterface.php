<?php

namespace GerbangBayar\Support\Contracts;

use Saloon\Http\Response;

interface ConnectorInterface
{
    public function createPayment(array $args): Response;
}
