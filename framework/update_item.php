<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAACoAgAAZlo7hLyXTD0FcZgjY2KPcZ5HXcZ1dEO5dIlKN2zUI04JZDNnpJDC83kyz33et2FlBct6mu/7J7T4HTZ7YKf/UMtQHE5liZeDCJNrKoVinddfnVaRoOcUQA7w5ZoImAp/ZMEVVXoLUlzz0Wb66Mc8mklFaybLcw4MJ15s88jDC9kQjcqWQ1pyvfhdzIlqRPfN0+0FyjGYJCs94hsvc+b6z7SiUndUvHVrEIIve7W3SES7qkIcauYIMK691q+BkXxYrZzpj/awXpxBI2tXpUf2qr4vYjXZVoVpSQs7h9QXcX05l6Spv4xCTMpL8PcRISlSGPLq/dLxjmIYX41fBy8whVutfDhfktZMnfnEYjgsVkxg2kR3uFRrT99NBtM7/a3qOaak+1kIWq+NxWYQg32DzwwQBHXwqaXxPSzdtQTNKuYgkrKOwOu1/S7mSJ4zuTnOn1vHvVe3Jf+ng29LyOFSoMZfZU4eOwQU+U3eSL/PqBKY9iHFRBqIhSgzX2wCXMkh5ciRcDClxccWcONLJMDL7Kzr05oYPkGL1WZ5r6u0Ty03xdVfoG+Vif0dlqtU4R5mQkUwfE6VLgiFfi0vU8qbF3YYCyVgQN2OOTpDha3Bipy+7gmz0qtO4mzjmS+5jPh84vm58DwF52GWtHBLgFh/wFENQ4hTTkB/HCSiBrKiEq6YlGeOtzH86biSqdg9hglLELRoYiJS0rLjxYLeRsmKu2ME1zsv+cUq7+XDjxl6pWXguihFkVJqlQnukkXj4cVnlCNpoM6cDthOiMC0EgbbP0DQMOKfqyqlwEhUdsZNsdMJ7fcaITPJTN5+/1duT5epoKkmUAHQfHYqDN6MYsIBUSqZHzplwN5f1JRWQJYkga3HcOTUgv8o6oc7YyI8ERu3xyg0bHXqT7k1AAAAmAIAAKwEuXvxb1kfCpUHEObW4ufDzBf1XtZGVVZ+dTOGPS318PBrRjSEbKISo/jJSX7QCC8l1VaKW1atJ/+N3iD6VG6DUbDVLgVci0QohFgqIQ5iOM7b/c2uxPtLTb8GaEIlRuA1wCvRBJ4U7e3YdLFMu1E8hg8PhB0HNBbKb86wMl85D6T2VOes6DaqF4n3WXZJJI5dJQ2IhiAcfVelh5m9fYt9Xf3ShqXK1zOVZ2kZDNPQLt4DIn6ys24YVspswpHBKVrSr7fmpj75y54dDZ+Hlywvlcvu/joOF3sy0qXwUo7iqU5GXFuzKxvqNvsCOreyNAFSvhjjlZT6lR8rxk4AdqMz7nMRt/TTPJdyvA3Z+H//de2nxP0WOBfahgCQEo+23FLqufoxqpnLkrqgtQ5+/PlECbAVe6HQed+I7G6An2qoXsu9y/bsdxXl9aduJqnjPVHZmhMi4hCmZrTZvXxEI3UvLK12dlhyNSrgnzK3X14NsI6bN8RijB1spKxWeuTmNydRa2TfzPxqSjhzFUEkZ6EaKk/ej+6Yn0pwY3x4F5kwHg4XyS1SKLnRTGltdsxHUtnM0UrIDZxtJJ1n41culVumFMmSL908aZzrtzYozAtd8H3IEaMAsuJdcCS8nJPCYJwBxUCzlaX/D6qzDK2Ua9OVozK6OyeNUydl2syeUod99WYCBUC+LXffV6Xkzrf0ysjsvTkS1JYUPpTrvZTJ55QIXdhTvkUBNqpXurWhhCDb6hp+rDG4u/TBCxYv4DKhHOKlKJHRYkb35WpjfOCHjw+M24B2pyjBtb6a7TaSgxEAgX9aOxwSDlQgxJ7kqhQ5Fp3ru4fot7lAcRIjpST3wXs5of6sXA5FwpsPCUgSJoZ3GCReVOrGfAA2AAAAuAIAAJ6vXLN4pHI+ug9M+3VPFDW7cIV6vRTr63dbNwR9IFL6fxFYuRKZrAhJ4ipQ0n8bemVB3kwyVTN39ULdpeofBVC7aP6/6D7FUB9h2uGqFawIVqBH79MWNSxCKZgSKV+f9maJLpJjbyeC09IEPgGIw5akaTV/76Z/cdRaNICEG5Ll9ixvR5Pn9qE210uNWZZI66KHJH+Um+kpI6DmTL03BotERlecnA5bppTomwcQ0HomAUwVSIY17GUedOFPhrnh1+rwLzAusyuQ7sto1bppDEbPq/xAe3DT5/PdO9eqO07t3BYbJTh6WS4SaYhNcrjCN14AchnfcffVl9T5ohuXsodbajIBwIpjhGAbA8rxKW67MV4ew4dd9aoR7ucR8PjVXxuDPQmSUoSquSJWRblIOidYXP0Ysr9kf9kkMuFB/K5j38ZqWsjwywCWOu9l9vK5BSZIVRvRPNtOiENtZCkeAYoyHpjbeznFFE1/YlLEhVnB+ANfXlYqT0KIQrg2Jki0TVt5iBuAmpkcG/sp+iKmcu1r8axTvtHTAQkfUFqgfMv1hOkgNJdrV9iXGgAaVhJlxlta9O2enWlUH6amqV9u/i2U/3jc0eMQD+FqhMiPwVHivteXrJzYDsKlOmaYzoQE1pPj/ixxuUH7LARv3vEVu7Ui1fWWsATYnhyWgm8bGZSwMz8frbI9r9IgCOfmwabsbRH1J+yplX3JkvwHVP/eiucaqjxSHga34A+343TmD6rbpe8j1+ulLTGH/zFl6K3OAIcLPU7yItc95ZpCApUy0Ko75d3ufJ57L9V2uWsVFkYYdkEv3zPU1OJnkWQUHLmcDWFzp6PgRXOnCjqHscq0+4o4wralw30VEoOqixW+kDXv663/RFZgQsdZxLrnylwEF2Ch/g+a2bxQq8OBqXx88NyV7dGWqq6M/jcAAADAAgAA6/VkO+/mC4Sw4v0xktSHmqa7xAZMefr/xUfe7sRBZwEspjHtE6PLrlbUt5n3you/unZ/Ghm9fokNsTfQAJKml14Bh2SXDsu4UHRHzBVf9m7E5Rj6YKH1K3JYDDQA6/E2odcWvHe3tjEe9OCDsK/D4tW/oKPea1zfYkDNA9bYRt/2xGIuHLtH68cJy/8Nl1bNiETvZKZ+kRhoY+kQ38wNbthgbq9lDjQIdHi8q1G8eDEpeRXwttIwAy0aDtUkIaurJS3YfI9fIffgLmWA0zFHcs67vZUnt4IyADLxB3zHl88smIX6KnXDOhG6o5aL6Odq4FPp/dau5YEi/71DVQSNbCHLlJLv2HE92s+jFHZ9rTOdGyZqvevoU1/KqfEdCGHCm2KRRlTb4Kk0M68IkJgiyPfvozyLm1hRyQnrro2pPfykdvxdkQCsxTtSl9UCVxm0U735Bj+zpoyCLQ3HCFl9pwFSI+3ONK2bxr0dpVzBKMp+KrLHKFzKg2op9NNJhojMZnbeRXUFHHCDtGruwPjs4uvVcOrgl6I00ARxTBU2KWCuachGrLTerSL9Son79bKqPYc+6ypPP2MIsfTITHRz91BZIyRC2vEt7xDJaTwuFGdBsUW6xCxZR6ThTZdsmBiW+5x1Gsv4H+eanRAGVHfnIHO/BEvbqdqk9H99MDJ2znEtJu0cV1pnqay3HTon34uX8JExanSDBs0SV2MpXkW5mL+0SFeqioEFrsbKuhgORq/WjFhHUxLaQFrUwiWPvVYOyDlrKRFT4H7ggHQ3UFPP/f1KawSfcuMpRYNM2zXsd+XVfk8jMYFxmlGe07E2mcSG/IAgmlhl/DRI6YqFyJZdhWKiiRVGhWOAHDDs4yCxnBDNUj70hSNouw1zZ2/f+05n4558ciVJPB54GrPsBkJtiQb9ChsAc2CuqPQQ5rmTpvI4AAAA0AIAAAc8Eem8B8JEUfAjcC+I3AYSGA9YnVryGFsPEyqKt1tZn/Lu6/c28yjBAeBYFOuX2O3YRK841bIzkgFrwKR71PvR54WlfgxpPJxUTojAVKpZ0nRQWnBgXCc+Z3rGgH+4wDOFZq2nQayLnlGPAyfO47EnxLhd7A95GagkMJk6g62NDswAnAy4DqOjQDpVetZdBTXBGn4u9xJSeJzCJGavQ64XLVlr0RTQ37o0GMJ/IsfxstDwCeW/JXc/M4PUqXXwuH197rAdhmhr4Y14VIEjSaOnuz5CuxrTqBe3wrgtbsHs/nLDOrQj90JyjaxstXwqSpsJ85FTcfXt+KMjoSfQVC+rMIy0AfAkZLWWC2DA6nHHfFA3eVoU3lMfwaXs9sXiC+NLFmrF5kZvQdqbWFZW1EwGapKTI/o0uQXnyV26ipvGhub62Kf1FK/qrgyJ5gB03vH4n2uD0iSqRLN0QZqvepAOtpJXVxQTSZhdW7zyQnvUvYfkDRDsAcmujIQAdFIM5Y9D1OwdJUzubkAoPuvDemL1VMAf/1aro51UBnrn0meL6xhCdxpRtAoWUwyDwxUYpBGkmDQHVsxh0Ca0S1lG6W5BGUHXyHg/LabLiV9Vz/PNkG6W98xw4qMlJIWRAdTPw7OPKkEiNnlunGphrc+cHDt5epFPWIUloj6rJo/0FY2eb8M3fDKA5OHX3k1YFy+S5dTqa81rzb93bcjX+Dx88Y4akclDk5LpFKGumwGUaDQYbnQrGyn2ZOmYTAUDah+qyruFfB8Ft1P/VCf4IUFUwblZ2zxmaEAXWUlqodAj1Y+GG7rLw4C85wI9zVhb9yp9zuOVk7qR3HuqExSZLv8x6ZiRAcj+LHl0HTSsyHlUkfDA+VPCzxiLg2pQO+G8RnfVsy+jH8dpmto2QsR5uU+uRFZwi9sUprYPS8HQMYaGYkENulfgM+aKXenxNRfVmdMHPQAAAAA=');
