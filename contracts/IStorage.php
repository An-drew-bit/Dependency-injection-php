<?php

namespace contracts;

interface IStorage
{
    public function set(string $name, mixed $value);

    public function get(string $name) : mixed;

    public function slice(string $name) : mixed;
}