<?php

namespace Arden;

class ItemsView extends View
{
    public function __construct($data = null)
    {
        if ($data) {
            $this->data = $data;
        }
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function render() {
        // Render items as a table

        echo "<table><thead><tr>";

        foreach ($this->data as $key => $val) {
            $head = ucwords(str_ireplace('_', ' ', $key));
            echo "<th>$head</th>";
        }

        echo "</tr></thead><tbody>";

        foreach ($this->data as $key => $val) {
            if ($key == 'items') {
                foreach ($val as $item) {
                    echo "<tr>";
                    echo '<td>' . $item . '</td>';

                    foreach ($this->data['images'] as $d => $img) {
                        if ($d == $item) {
                            echo '<td>' . '<img src="img/'.$img.'" alt="'.$item.'_image" width="100" height="150">' . '</td>';
                        }
                    }
                    echo "</tr>";
                }
            }
        }

        echo "</tbody></table>";
    }
}
