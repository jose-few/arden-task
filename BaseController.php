<?php

namespace Arden;

abstract class BaseController
{
    protected ?array $modelData;

    abstract public function getModelData();
}
