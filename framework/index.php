<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('8FDDB8008D68350EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/H2XD95MxIK9QBMkm6tOJ3V/aXkkdrHApw1ydj8ML8PEbgt1uUvasjwQ/QDvzq7N6W/apexF9wC5YsMpp9OM5yJrsb1tEQEGz/iH0DyykKSLaGLank0VX/YtHfYAWvJ4eJ9DevLozVclCyrGiAOrwt/pAr3SvOd4McVfqO1i7n3TyJ9NDB4JAbTQAAACAAAAA2cbwIrbe3/Kwf5Fs85JpnwVypWYhVCIxSEaiZ5mVcu546HiepmdAp+xxG+yvBALQgc1a9B4nYzR1lpLQSu8lkVJQswtT6nRuMTAVagf3jd2MbwC07PBdHzL9ZQ27760z2sQEUoTV3x2qm+9oGwB6mNGO54S3AJ+ioMTqfxE0x8s1AAAAgAAAAERwEDiCx6eEFggVNrFo1XEQvlAxv/M25B/c17pBhls0SAir6Bu0iqCCJXXgXXzV8I66VtZSGKFYjFQlnIMQAi2uyhFSVx50rVKyBH77eitZILRDehzhjR5BjelokI7wxoPgVoSaGrXM/ylki1GgK8iQ6E0tXL6Qir6BpD20W37ZNgAAAJAAAABXOtBP1mPgdVOs8mO1kvq9l1bnxEBy3hPlqFBHCS66Dpv2Qnu/9w3eEUPbQA0TrFVuz14f3XEvPbAyTlR00ha9JQ8TEoOrr9Y45bd6kCiyqB9BqVgzBAB/Zn2PiKKKjHgiFftqLTxhCkOLx6XM7pE5EX2XXqTceCCuawShB2CQfaGwgEkZIjmHG6hLS8CG2js3AAAAmAAAAG/xU0QOs2FXRwRJIpo35qI29FMJNF6CzuUEgtKGW4dDUgo83ZzLggYZXY8n4rQe9mPY6Xhwt73N3tAPej8UELZExwKJ12x2v5YuM7jqiKyQsNAelGGVPr0VxKFW0QyQt2cul7ykgeBASMYsEyCInPoIBOXIoTvo60RXisbtd3/RKf7+t1axDTr4pUduqew1wwHGWK2lOMsQOAAAAKAAAACCI2//FyBBAxQH2+2AXYX+w7E7e/gApb6GoqAtxTLg98n62xFOabpt4tQWCZB9d1Pxqr1OPvklB/lFgnKL/LXeSWTGRNoM4WGMq9WyO/JfNT64HbKZHh0pPVSzRrhsh7RofLvAXUp+E5jLisvqWj6v5Q7AvpjHcFRSd3kVtUqnSiBu4nqsjNb0Tg7sjV92fifcAkZ4vARAAkebOSxWOlUSAAAAAA==');
