<?php
$lib = "/usr/lib/x86_64-linux-gnu/faketime/libfaketimeMT.so.1";
for ($y = 2026; $y >= 2018; $y--) {
    for ($m = 12; $m >= 1; $m--) {
        $date = sprintf("%04d-%02d-01 00:00:00", $y, $m);
        $cmd = "FAKETIME='@$date' LD_PRELOAD=$lib php /var/www/html/painelactive/login.php 2>&1";
        unset($out);
        exec($cmd, $out, $ret);
        if ($ret === 0) {
            echo "SUCCESS: $date\n";
            exit;
        }
    }
}
echo "No working date found.\n";
