<?php

return fn () => <<<HTML
   <!DOCTYPE html>
   <html lang="en">
    <head>
        <title>My App</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="root">__CONTENT__</div>
    </body>
   </html>
HTML;