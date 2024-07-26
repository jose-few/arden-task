<?php

namespace Arden;

class OpeningTimesView extends View
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
        // Render opening times as a table

        echo "<table><thead><tr>";

        foreach ($this->data as $key => $val) {
            $head = ucwords(str_ireplace('_', ' ', $key));
            echo "<th>$head</th>";
        }

        echo "</tr></thead><tbody>";

        foreach ($this->data as $key => $val) {
            if ($key == 'days') {
                foreach ($val as $day) {
                    echo "<tr>";
                    echo '<td>' . $day . '</td>';

                    foreach ($this->data['opening_hours'] as $d => $hours) {
                        if ($d == $day) {
                            echo '<td>' . $hours . '</td>';
                        }
                    }
                    echo "</tr>";
                }
            }
        }

        echo "</tbody></table>";
    }
}
