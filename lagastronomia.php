<?php
//Get current time
$hour = date("G")-1;
//hour = 2;
if ($hour > 9 and $hour < 17) {
$response = "We are currently open. If you would like to hear our current offers, press 2";
}
else {
$response = "Unfortunately we are closed right now. To hear our opening times, press 1.";
}
// now greet the caller
   header("content-type: text/xml");
   echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";


?>

<Response>
    <Say>Hello, thank you for calling the La Gastronomia hotline. </Say>
   <Gather numDigits="1" action="weAreClosed.php" method="POST">
    <Say> <?php echo $response ?> </Say>
</Gather>

</Response>

