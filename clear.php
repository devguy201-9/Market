<?php
session_start();
session_destroy();
echo "<script>window.location.replace((window.location.href).split('/').slice(0, -1).join('/') + '/index.php');</script>";