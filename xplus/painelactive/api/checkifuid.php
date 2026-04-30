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
