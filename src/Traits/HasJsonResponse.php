<?php

namespace GerbangBayar\Support\Traits;

use Saloon\Http\Response;

trait HasJsonResponse
{
    public function result(Response $response): mixed
    {
        return $response->json();
    }
}
