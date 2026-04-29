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
exit();}}return sg_load('4528D3406F7C36E4AAQAAAAXAAAABJAAAACABAAAAAAAAAD/vPC9JvqJOY2r38U3FXmBci32NXGqsEyf9u9+YZi56GBEj0RIjZ/LfSl4s5+adfjnWutyfgzwNEjC5YH0hMhpg3O8Em9zWWggbSu9GPROh/NnVqZt0X4xKhfPiPSBzixk6qpaR4AcLg3Yrut51I6YwlobHqN32DSm1WezI6OZVpEw2rwHTo39PR5mUQ6MKfs0SAAAAMAAAADp+QPBzo7UdX9EclhJRyVVQneS8fkXzSM7+mOkuy1S1yP+XcGHdidafDBrpKyxJX2+aNtq93/c/WF9+z2QAatEQKh8XSqnDCGgmwHA62dMFJhqe8OIlPTZG/ygK8QvHY955S0SWyF8jqthksws1o5e7ZVz4WiUBUO9oSmnsYRkl5mBvQybjYbF7a9wr1TYQs5rrVJxVKKd1V+LDw93jlpx4ellBMu1AhRvI0sdOElzZuTr/QKv9vFxr1lBxlTyrVRJAAAAwAAAAN9WIIaJcIyf/OgVS/pY4HBUh2nNdCXEJrmj68Kfo6C6vYAyoC8kgwdFUcdFkfDuwUrTOOqTx+bmQVcZ7nn14ZsAMUUP6KVMBqlohIgzxnDqoON5j+SYEV5dT1Q+7unkZ1Dov3Bf2l2/Gr8kO532TlzcYcI0u0ztnuU/vombsrsPkEN6FTCr67haCKrt1Mk+C81mXWdOJExCZXatXZBYMxOVd/OXoWPU3vO/8AucSrfTaQXP2M97ZOFMfaV3XPZl2UoAAADAAAAAag1GT82W7jhkEUMvXKpWNVxUmHxmFz12aTdGzM2juaCIjDD4ql0EPcxvVvutE+NPMRlqtOcUNZg9/teRAGLDrh9W/ACYn7WTPbE8WI2Q0jXj2hO1Dd70uuqVVxZkke7g/isgseKHDOZ9GkorPfQOeR74Xwe0kTYebN43ycGLYhJLfeZWiWx8BOZLRDbCgRP9ndvqh9gCSF+7IE+V8kJ6kWxDpVFBlTnRJGW602osSMOJI66OHA15ijKoukKuJB+eCAAAALAAAAC8EpjYhbKK14ETQh3oKaNRvqlUI/JP5ZGVAedxfPQzoeh450LXkuaDzTcm2092dsvXW6FUkfy1dSNwbFgaE3R+6/XHhlgmQG0tzddbuoGcSPXNzmrRWRnHdPCMhCLEV32Csn6PROFpi71NXAMmbams1XHkiLGpWf1YPhWw6M7NmDXj0k99EFeZStp5a/hwOqxmNIsQv8HNT7/wnloz1dF/DUsXgPZ9MX7hlsLn4ze6g1EAAACwAAAAWO7iv9Y5mp6MRQNVUDBwowevkXPF8Kqizh5XjMbuj01MxO9oFW7VbDrqNfe7QknTUWccG3QNPYpAwt3N6aQ+guvdW51p4HiGo2yLPrUj2/RiMoihBPFLZau6CQWoNj19W91itHyI2ygLGqwHdqRarsCWCt/bqsC+MMJGZQniPjk0M92uXFGH2HCFT2dArJQehtDWh3YAuSIsoWN1I9UvZgsksaiQCN+0/L7vnp/+NBgAAAAA');
