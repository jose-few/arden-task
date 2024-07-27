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

    /**
     * @param $data
     * @return void
     *
     * Added void return type.
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    /**
     * @return void
     *
     * Renders items as a table. Added void return type.
     * Adds in <img> tags for the image column.
     */
    public function render(): void
    {
        // Render items as a table

        echo "<table class='w3-table w3-striped w3-bordered w3-centered'><thead><tr>";

        foreach ($this->data[0] as $key => $val) {
            $head = ucwords(str_ireplace('_', ' ', $key));
            echo "<th>$head</th>";
        }

        echo "</tr></thead><tbody>";

        foreach ($this->data as $idx) {
            echo "<tr>";

            foreach ($idx as $key => $value) {
                if ($key == 'image') {
                    echo "<td><img src='img/$value' alt='$value' height='150' width='100'/></td>";
                } else {
                    echo "<td>".ucwords($value)."</td>";
                }
            }

            echo "</tr>";
        }

        echo "</tbody></table>";
    }
}
