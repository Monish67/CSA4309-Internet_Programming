<?php
// Emergency contacts (Email addresses)
$emergency_contacts = ['emergency@example.com'];

// Default police contact number
$police_contact_number = '100';

// Get latitude and longitude from POST request
$latitude = isset($_POST['latitude']) ? $_POST['latitude'] : null;
$longitude = isset($_POST['longitude']) ? $_POST['longitude'] : null;

// Check if coordinates are available
if ($latitude && $longitude) {
    $google_maps_url = "https://www.google.com/maps?q=$latitude,$longitude";
    
    // Prepare the message with the Google Maps link
    $subject = "SOS Alert - Live Location";
    $message = "An SOS alert was triggered! Here is the live location: $google_maps_url";

    // Send emails to emergency contacts
    foreach ($emergency_contacts as $contact) {
        mail($contact, $subject, $message);
    }

    // Send SOS alert to the police contact number (SMS implementation using Twilio or any other SMS service)
    // Example Twilio SMS API usage (replace with your Twilio credentials)
    /*
    require 'path/to/twilio-php/Services/Twilio.php'; // Include Twilio PHP SDK

    $account_sid = 'your_account_sid';
    $auth_token = 'your_auth_token';
    $client = new Services_Twilio($account_sid, $auth_token);

    $client->account->messages->create(array(
        'To' => $police_contact_number, // Police number 100
        'From' => 'your_twilio_number',
        'Body' => "SOS Alert! Live location: $google_maps_url",
    ));
    */

    echo "SOS alert sent successfully!";
} else {
    echo "Failed to retrieve location data.";
}
?>
