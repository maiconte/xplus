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
