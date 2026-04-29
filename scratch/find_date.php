<?php
$lib = trim(file_get_contents('/etc/faketime_lib_path'));
for ($y = 2024; $y >= 2010; $y--) {
    $cmd = "FAKETIME='@$y-01-01 00:00:00' LD_PRELOAD=$lib php /var/www/html/painelactive/login.php 2>&1";
    unset($out);
    exec($cmd, $out, $ret);
    $output = implode("\n", $out);
    if ($ret !== 0) {
        echo "$y: FAILED (ret: $ret) - " . substr($output, 0, 100) . "\n";
    } else {
        echo "$y: OK\n";
    }
}
