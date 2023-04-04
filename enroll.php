<?php

// Get the form data from the request body
$formData = json_decode(file_get_contents('php://input'), true);

// Validate the form data
if (empty($formData['name']) || empty($formData['email']) || empty($formData['course']) || empty($formData['payment'])) {
    echo json_encode(array('success' => false));
    exit();
}

// Process the form data (e.g. save to database)
// ...

// Send a response back to the client
echo json_encode(array('success' => true));
exit();

?>