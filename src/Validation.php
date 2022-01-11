<?php
namespace RoocketValidation;

class Validation
{
    public function require(array $data, $field) : bool
    {
        return isset($data[$field]);
    }
}