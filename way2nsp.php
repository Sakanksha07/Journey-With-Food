<?php
$mobile="8209688953";
$message="test message from saku";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=6350354461&Password=whosaysyournot&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=sakan8HZUIcshORmPi6TGL") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
?>
                            