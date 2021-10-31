<?php
session_start();
// Xóa hết session
session_destroy();
echo "<script>window.location.href='index.php'</script>";
