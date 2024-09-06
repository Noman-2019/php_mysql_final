<?php
 $domain = "prothomalo.com";
 $recordexists = checkdnsrr($domain, "ANY");
 if ($recordexists)
print_r($recordexists);
?>