<?php

exec    ('css\maildemo.py', $output);
echo "<script>
alert('OTP sent Successfully');
window.location.href='register.php';
</script>";




?>