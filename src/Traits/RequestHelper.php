<?php

namespace GerbangBayar\Support\Traits;

trait RequestHelper
{
    protected function constructorPropertiesAsBody(): array
    {
        $body = [];
        $class = new \ReflectionClass(self::class);

        $constructor = $class->getConstructor();

        foreach ($constructor->getParameters() as $property) {

            if ($property->allowsNull() === false || $this->{$property->name}) {

                $body += [$property->name => $this->{$property->name}];
            }
        }

        return $body;
    }
}
