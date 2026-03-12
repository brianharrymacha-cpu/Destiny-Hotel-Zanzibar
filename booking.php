<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$room=$_POST['room'];
$guests=$_POST['guests'];
$message=$_POST['message'];

$to="your@email.com";

$subject="New Booking Request";

$body="

First Name: $first_name
Last Name: $last_name
Email: $email
Phone: $phone

Checkin: $checkin
Checkout: $checkout

Room: $room
Guests: $guests

Message:
$message

";

$headers="From:$email";

mail($to,$subject,$body,$headers);

echo "Booking Request Sent Successfully";

}

?>
