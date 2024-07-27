<?php

//Imported class.
namespace Arden;

class ItemsModel extends Model
{
    public function __construct()
    {
        $this->setData();
    }

    //data is typically an array, but just in case have |null.
    public function getData(): array|null
    {
        return $this->data;
    }

    /**
     * @return void
     *
     * New method to load data from database using DB class.
     */
    public function setData(): void
    {
        $DB = new DB('items');
        $data = $DB->fetch();

        if ($data)
        {
            $this->data = $data;
        }
    }
}
