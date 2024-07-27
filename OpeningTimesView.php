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

    //Added void return type.
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
     * Renders the table for opening times, added return type of void.
     */
    public function render(): void
    {
        // Render opening times as a table using database.

        echo "<table class='w3-table w3-striped w3-bordered w3-centered'>
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Times</th>
                    </tr>
                </thead>
            <tbody>";

        foreach ($this->data as $idx) {
            echo "<tr>";
            echo "<td>" . ucfirst($idx['day']) . "</td>";
            //If there is no times set, say Closed.
            if (is_null($idx['open_time'])) {
                echo "<td>Closed</td>";
            } else {
                echo "<td>" . $idx['open_time'] . "-" . $idx['close_time'] . "</td>";
            }
            echo "</tr>";
        }

        echo "</tbody></table>";
    }
}
