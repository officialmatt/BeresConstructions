<?php

    // make an associative array of callers we know, indexed by phone number
    $people = array(
        "+447889026101"=>"Matt Policane",
        "+447411233152"=>"Yll Kelani",
        "+447958374761"=>"Ivano Policane",
        "+14158675312"=>"Marcel"
    );

	$hour = date("h")-1;
	

    // if the caller is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']])
        $name = "Monkey";

    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hello <?php echo $name ?>.</Say>
    <Say>The hour is <?php echo $hour ?>.</Say>
    <Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play>

    <Say>Hello <?php echo $name ?>.</Say>
    <Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play>
    <Gather numDigits="1" action="hello-monkey-handle-key.php" method="POST">
        <Say>To speak to a real monkey, press 1.  Press any other key to start over.</Say>
    </Gather>
</Response>

