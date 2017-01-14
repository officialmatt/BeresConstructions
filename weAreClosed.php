<?php

    // if the caller pressed anything but 1 send them back
    if($_REQUEST['Digits'] == '1') {
        $response = "Our opening times are as follows. We are open from 9 A em until 5 P em every Monday to Saturday. We are open from 9 A em until 4 P em on Sundays. Goodbye";

    }
if($_REQUEST['Digits'] == '2') {
        $response = "Our current offers are as follows. Customers get a free biscotti for every coffee they purchase. Offers available in store. Goodbye";

    }


    // the user pressed 1, connect the call to 310-555-1212
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say><?php echo $response ?> </Say>
</Response>

