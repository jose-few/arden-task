<?php

//Imported class.
namespace Arden;

class OpeningTimesModel extends Model
{
    //Added opening times for Thu
    public function __construct()
    {
        $this->setData();
    }

    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return void
     *
     * Fetches data from the `times` table.
     * Added void return type.
     */
    public function setData(): void
    {
        $DB = new DB('times');
        $data = $DB->fetch();

        if ($data)
        {
            $this->data = $data;
        }
    }
}
