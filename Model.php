<?php

namespace Arden;

//Fixed typo.
abstract class Model
{
    protected ?array $data;

    /**
     * @return array
     */
    abstract public function getData();


}
