<?php

namespace Arden;

class ItemController extends BaseController
{
    public function __construct()
    {
        $model = new ItemsModel();
        $this->modelData = $model->getData();
    }

    public function getModelData(): ?array
    {
        return $this->modelData;
    }
}
