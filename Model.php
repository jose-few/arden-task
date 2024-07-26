<?php

namespace Arden;

//Fixed typo.
abstract class Model
{
    protected $data;

    /**
     * @return array
     */
    abstract public function getData();
}
