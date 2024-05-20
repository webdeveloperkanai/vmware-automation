<?php 
// Author: Kanai Shil 
// DEV SEC IT Ltd. 

$const = "C:\Users\{{user_name}}\Documents\Virtual Machines"; 
if(isset($_POST['ACTION'])) {
    extract($_REQUEST); 
    $resp = exec("vmrun -T ws $power \"$const\\$vm\\$vm.vmx\" ");
    if(strlen($resp)>2) {
        die("<h1>Error occured " . $resp);
    } else  {
        die("<h1> Machine has been $power.ed! </h1>");
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VM Manager</title>
</head>
<body>
    <form action="" method="post">
        <p>Select Action </p>
    <select name="power" id="" class="form-control">
        <option value="start">Start</option>
        <option value="stop">Stop</option>
        <option value="reset">Reboot</option>
    </select>

    <p>Select VM </p>
    <select name="vm" id="vm" class="form-control">
        <option value="192.168.111.31">192.168.111.31</option>
        <option value="192.168.111.137">192.168.111.137</option>
    </select>

    <input type="submit" value="SUBMIT" name="ACTION">
    </form>
</body>
</html>
