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
