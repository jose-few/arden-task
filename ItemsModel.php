<?php

//Imported class.
namespace Arden;

class ItemsModel extends Model
{
    public function __construct()
    {
        $this->data = [
            'items' => ['keyboard', 'mouse', 'monitor', 'speakers', 'laptop'],
            'images' => [
                'keyboard' => 'keyboard.jpg',
                'mouse' => 'mouse.jpg',
                'monitor' => 'monitor.jpg',
                'speakers' => 'speakers.jpg',
                'laptop' => 'laptop.jpg'
            ]
        ];
    }

    public function getData()
    {
        return $this->data;
    }
}
