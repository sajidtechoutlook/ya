<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('B10659298D682D20AAQAAAAWAAAABIgAAACABAAAAAAAAAD//BCRJDzuckZLvBW5b9ZHaT/Kss4AXrEh1kU4Nhkfyhmf/vjD5japfNLjy0kWfuM7EDNjfVgrxgHXlClgu5DqtZ0VSfICgUzVOJB3IMGfKXMrLxCs9kFbhP4q/xBJUrPH70HMTXnXDAViOYOEieIam2hfWDVStTNFc1OpNOTuCOVanvC4Xm7JMTQAAACwAAAAw3NJlIwel3uP2r8Vo6KJCZtobCfVr17WjyASuYG+KixkV+w+MZufnS5BrHYnMIkmv4jLhKMvoSvdgAt3HXWENr9Wk91Sab1CjoPyMFlCMZHBqCVSEFEa8cszi36iXS910Ft/lQ2pt6vh1cGGSFXGZxlMBeNiclpMsA6Wau8QuOmH/mm9Mu+RW/qrgim8MNX5QhaLERxAYcG4+/TOn1/LLRPeitCgxWu0Gm2vFBX6NhQ1AAAAqAAAAAnUBwvBtHYeMOyrBoTSK4FZeynirby+bH/1Du+68qmvB0rXxAdGBAe4mqDL/7LWlg0bCb/YMKFIx8xLj4bE5FAhv/DyhmPipYWQ/66Pw0A9xEtHzmvmsvhWDjNSec5zch+Y5Rv5Kc2ewSb9RNsuEkG77qUwbiCBZwYIvngnua5v4yGm2kzUhTmtR2RuEh4XV/rWFHGz/6NFlbccs7ijRkHgRn/5LvzgdzYAAACwAAAAfGWqxnFedBuAMotTP/SJD3zHA6vJHzYK2X1mEnv/n0H8O3DRGYNGi4X0dUtQ29usD7IxXczb8HWZITwXrB5eE4FOA5YoQ1gPH9Cx7jzKEpIcZmID7xbr71ZsM7nOFgYYl1c9yaZ3MumLr8ak6gLIDLrOMrVBszQZMLLiOqfhxFbeiKYjH87uBUHI5xNA2iqDQYFafe4d6JsfggkIC2rWHsx4+uAsyUSp5MW6uhwLN383AAAAwAAAAH+fN66WBGMuCH2PmGsO/RI70t/d0s+1mdTOmdYRAPuRAGRocYy6wYwcFGsIfnifhax8TWfr8S/OnHMZPlgB8P9uzsEVKh9jncfCID6/osiCk/6hX16f5RyFGUctCfezih5rHGc3RdbCdZSwt8wrrCoJXgoE1qTwiNvAHFn1z5hXWz1E54fFBZiceWSvT1ctSTbVo7MH76mz/37IIRGUCh32BakkTN9VprecGOLQCspbTTozeYOEK96F7B6TvX3iRzgAAAC4AAAAjPV96jxyGT+UM3RKvSOdYiOR2ZkvDw9de/TY6Ir0t6cKOJejbTpezKFTrz741AsQWE3t0ol4RFBAzmKP+wPI1XOaLY1ccVW17akJ4gvb+mCwou8TEsS9suY+scmQ8IRj3DDZA5esLTP9VGooEU/EKEK4z3KGULGEX6Mi7FTUXSVHmp+6e6QS/8/nWA8eXSYcbphFEo8NBAmXHOpFfZ8rC7dfStHzyA4IGkAje5b86cY52ou/I0evHAAAAAA=');
