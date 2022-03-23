<?php

/*
 * This file is part of the Symfony package.
 */

namespace UPJV\Validator;

/*kkkkkkkkk*/
class EstValide implements ValidatorInterface
{
    /*iiiiiiii*/
    public function build(array $param): object
    {
        return $this;
    }
    /*kkkkkk*/
    public function check($input): bool
    {
        return true;
    }
}
