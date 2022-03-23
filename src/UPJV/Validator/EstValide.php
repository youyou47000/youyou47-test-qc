<?php
/*
 * This file is part of the Symfony package.
 */
namespace UPJV\Validator;

class EstValide implements ValidatorInterface // class
{
    public function build(array $param): object //bluid
    {
        return $this;
    }

    public function check($input): bool //check
    {
        return true;
    }
}
