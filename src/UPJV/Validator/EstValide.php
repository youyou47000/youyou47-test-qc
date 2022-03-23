<?php

/*
 * This file is part of the Symfony package.
 */

namespace UPJV\Validator;

// class
class EstValide implements ValidatorInterface
{
    //bluid
    public function build(array $param): object
    {
        return $this;
    }
    //check
    public function check($input): bool
    {
        return true;
    }
}
