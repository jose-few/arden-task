<?php

namespace Arden;

/**
 * Class for handling Contact Form.
 */
class FormView extends View
{
    public function __construct($data = null)
    {
        if ($data) {
            $this->data = $data;
        }
    }

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
     * Renders the contact form
     */
    public function render(): void
    {
        echo "<form action='ContactSubmit.php' class='w3-container' method='POST'>
            <label for='name'>Name</label>
            <input class='w3-input w3-border w3-round' type='text' name='name' placeholder='Name' style='margin-bottom: 5px' required>
            <label for='email'>Email</label>
            <input class='w3-input w3-border w3-round' type='text' name='email' placeholder='Email' style='margin-bottom: 5px' required>
            <label for='message'>Message</label>
            <input class='w3-input w3-border w3-round' type='text' name='message' placeholder='Your Query' style='margin-bottom: 5px' required>
            <input class='w3-button w3-green' type='submit' value='Submit'>
        </form>";
    }
}
