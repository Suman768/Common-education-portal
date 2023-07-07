<?php
function send_error($msg, $status) {
    header("Location: /public/error.php?status=$status&msg=".urlencode($msg));
}