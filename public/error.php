<?php
    $domain = getenv('APP_DOMAIN');
    $port = $_SERVER["SERVER_PORT"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/custom_default.css">
    <link rel="stylesheet" href="/public/styles/error.css">
    <title>Oops!</title>
</head>
<body>
    <?php
        $error_code = $_GET["status"];
        $error_msg = $_GET["msg"];
    ?>
    <p id="status"><?php echo $error_code; ?></p>
    <?php if ($error_msg) {?>
        <p style="font-size: 1.7rem">👇 This went wrong</p>
        <p><?php echo $error_msg; ?></p>
    <?php } else { ?>
        <p style="font-size: 1.7rem">😢 Something went wrong</p>
    <?php } ?>
</body>
</html>