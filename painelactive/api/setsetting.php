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
exit();}}return sg_load('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');
