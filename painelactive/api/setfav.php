<?php @"SourceGuardian"; ?><?php
/* You may add your copyright here and it will be added to every encoded file.
   Format the copyright string as PHP comments like below */

/* Copyright (c) by BoxBR */


/* Also you may add your custom error handler which is added UNENCODED to every encoded file. */
if (!function_exists('my_error_handler')) {
   function my_error_handler($code, $message) {
       /* This is a sample of the error handler you may use to catch SourceGuardian errors
          such as IP or domain lock violation, expiring the license etc.
          Add this my_error_handler function name to the 'Custom error handlers' list on the
          'Lock' window in your SourceGuardian project. Please refer to 'Custom errors handling'
          section in 'Locking options' in the user manual for further information. */
       echo sprintf("Something goes wrong. Error code %s. ", $code);
       echo "<p> Please contact <a href='https://t.me/iptvbox'>BoxBR Apks Rebrand Support</a>";

   }
}

/* Or you may add custom PHP code and it will be added UNENCODED to every encoded file. */
if (!function_exists('function_added_to_every_file')) {
   function function_added_to_every_file() {
       /* This is a sample of the function which is added as-is to every encoded file */
   }
}
?><?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m')); ?><?php  
echo "Copyright (c) by <a href='https://t.me/iptvbox'> BoxBR Apks Rebrand - Apk's and Panel Scripts </a> <p>";

   echo "It looks like you did not install the loader.  <p>";
   echo "Please contact <a href='myname@mycompany.com'>myname@mycompany.com</a>";
?><?php
exit();}}return sg_load('4528D3406F7C36E4AAQAAAAXAAAABJAAAACABAAAAAAAAAD/ENso2PkY4N3BHeaJPdfk4DcqbfGdf/K+G9/szoHVa7ioZ8MeScKZWYA3kgmWj5NlCwsRhOZHP1S116hhPxnltMGj0rSHpdNXy7RO1Rk/nIrwlDo4fwJ0ti28mhknT5ym+w2N60aQeEnLWHqbb14DsCDHjE2rmG1FrXfDhND7/kvqBSlMSWoxRgc3BubCe7KvSAAAANAAAABJzSInSYJI3JTgBVCC8PiqL4AOB+Z2L61Rxn6Oi7MW5EECpCbnbZQ6NqnOCJuQBLvOmvrjrjS76SCuU6k+gP6QsRQzbY3EKns4ninwpvRR3Y0oXfuMj3ZlwoPUWeEvChZEkFY1iLXjyDkEDZhRDiEwj8uhHgVb1ocKMRw4nfuYUTQh027JdGqfWNfGghnqQhw99WCmJk3vDpZoaqgLqPlTRWqD4E8d32xZV0QLJehiibD1YtmYElphAdjReFriU0Ol3oZgf26Bx7S3OwSgGUGoSQAAANAAAABmcAtsBYv1k+smKcK5HUYnITeqc7d0hnU0KN4pv1JQa1rX04awJL0jg/XAUPphqERaaBNV0uHOOjl3z6BiZM35CGNq2/zb4ZKuLlfyyz3ozNLyGuwLPxnnPjViFvaYcnYjotxaL6w3+M5hzLclN2BbbPjCgjB6R0z2+skAU66n3REDRvyVbQRVuDRmIf88JOA0e1ALoAvkAwGmshH4/ahPe1Btw2DO59WDePYcjWbb1t2FmbvIKGsDFzkMlVQzYQTuI7fKY3LtE8SAM/Ks4rqDSgAAANAAAAACKU7Yw8+6R6Yx+WWJDM2IsZmgQ3SrYewEtBHlcdaiG20AQhqtGLTpVPjCICLPPA+0ut0frjPohso0SWoA+UXX1HyywSJdRaVYuOcICduXGHWCm+XXt4Sa6g2BXKTilnDA5V/GNnQOuQyQCdTT+yzJg7BSIcb/ACv5e55RyFwsVT9Pg8bP6zIDjJVsnG2bNGgg+/WngQ6vG9gNZ7vJGM6uS3ut7yfGDgZoELjROWKyFzYId7npew+Eik/zknddeA8Drkp0QtRhkMK7U+ZxjR2MCAAAAMgAAAAr2vxXHpNwWM1sF80176XKPmAyNtQ4zrIVrIHyyBKoNgpE3R3J/SCUNenastLgunyyLUqUzFL+C6w1DoVhumVmdjUM9g5IhED0Gn+XhSbh12H5M3qYq3Qgqs71vjn+cJduQKs5DTDqoXCfe0zRSdR6QnIoNBGrTJMi5BLFaYJ9UmJqmZgNgP3T/0/eTefU3vdblaahk7SojWFul4JN9FnlfY4iJtENN/VtYawr0uhhybgAGhVELPF3wxnugFvbPXDxyic2DhJ/oVEAAADIAAAAQuAb3NFTkdfUil37fgickb35gfqDa/AO/kfsAF9pEk0wlDspDJbR73m/SwCrOC24Ic3n4wKKZvJWGKnlmZwNXGrLE7qt3e54AHLXB9eMFVX8ccS/fOFc/ckC1Rcv5+Z0K8oI4RzNB5NulY7A/k+E5pOlhPy+wPqEWWSmID8UIfucuLNzbUsGugGclVrkRfJAphVEbTiK5ALP2CLWKrc+7lo0BiNAXwREdKZkqSNuKkhRCRxKiVls+zRsBxAHZmCb/HQClgA28k4AAAAA');
