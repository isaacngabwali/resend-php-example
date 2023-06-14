<?php

// Include Composer autoload file to load Resend SDK classes...
require __DIR__ . '/../vendor/autoload.php';

// Assign a new Resend Client instance to $resend variable, which is automatically autoloaded...
$resend = Resend::client('QmVhcjpyZV84SEhOY3hRel83dWgxN3Bxc0E2dGNrd1hFNGpQdmJjTHA=');

try {
    $result = $resend->emails->send([
        'from' => 'noreply@fanitehub.com',
        'to' => 'isaacngabwali@gmail.com',
        'subject' => 'FaniteHub Email',
        'html' => '<strong>FaniteHub Mail Test!</strong>',
    ]);
} catch (\Exception $e) {
    exit('Error: ' . $e->getMessage());
}

// Show the response of the sent email to be saved in a log...
echo $result->toJson();
