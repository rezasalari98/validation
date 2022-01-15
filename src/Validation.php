<?php
namespace RoocketValidation;

class Validation
{
    public function has(array $data, $field) : bool
    {
        return isset($data[$field]);
    }
}