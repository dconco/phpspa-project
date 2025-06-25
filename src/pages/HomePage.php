<?php

use phpSPA\Component;

return (new Component(function () {
    $name = 'dconco';

    return <<<HTML
        <h2>Home Page</h2>
        <p>Welcome to the home page, $name!</p>
    HTML;
}))
  ->title('Home Page')
  ->route('/');