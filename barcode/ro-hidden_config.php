<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('134834728D681E1EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/KByyxDDhneFlFF2Vxt0VuReQhtkRxsRsrm5qrfVnqADHxXa9J8xCXQnbel4k/rGwm1jXFhejYuHWq8fNkk/pwAoW93blH7x/72YUeESZ8qDHWjRBnPivglFPhS8rnhIiL4lJJMISbHTCHIKURS6zBkJ6YHEGLFoa/0H0QST/RNyQmYEJ6MfLNDQAAAAQAwAAcPNz/cACCkltjHFeBS35BjWp3LTy3OHe3x6F51N8M/BH38l4dlJkrHw2hFMh9OHAvYRAnv5RvDI/NMGQUMF7wKVv40cBgcOyFyPo7AMmY8a9tpWXLEf1mhgTzR7J+YuqiosxQwI4rIhFdSMnmvuEkvQE3MO2gkbYCYQWKX5pAmemiBfTA9zkcoePmuMJgmLzg8/mWxQ1Yep/mpmeyKmev3gMwPkMnZDN75pnjYKD4q5smerDeCpmCS8Hn/c6yZCm0xyfxPWxv87CBHGVEXYUjWOqNTcUIyuyT6ngZRasI1K6uNppAoJm84eqqa1/wrADS/4BkigGVkgTrC6M9xBmXWIvZY94PG4OS/HPqP45Rwpt0UiD/mpTM4nWtWCWWdEJR0AHMh/t7BdWTth7EX9bmkgCVJa5WkiIwKeNQLW+wWvOk87neYPY/sSWwCmznVwzKK4XxVHFy4IlTKvu/+i+Rfz1S8TCQadQ9DCo9s4v42CuzNAxBnfUk4Dx8ZYKX4Yv7eMHQ4i5fRElzcmQKt0gK2fkXMiuF/vAEwPZvKn2E4pr/Ycv0XN/7zyVcm0IgjhZClfo54rE1JGl1RIHYRD67s4Iixwi0kTDbx/G0HnPGoq5J7z+cVUaqZ9/LJcjw5G/CpIU+ruj0tvXX4IKjmIOj92w+arctLYvps7QPmrreoxNoI/iQcifNtkIlJx6QPlzI5t4GU6KvPauUr65YW2Ov6PStOOwe5anCGY8H9fL/Hs8q2CB9i3ttwIgpobgoo9grc7spaQ1El+tbjXExSgv8GrFI+XTdGQZk3M2+v4CrpRSK1v8/i61rkTet/t7iSlIyoy6Riia5ktrGP9pb2E1A3IxQikZrbbN6ewa8xHl6HRsh3dYziEdYmDrZ1Iw9gVVHRRzKKsTfm0JQI0b8awJYETNd0G2GcMA6QzZ06gM+CJ6OLRmwPaz9s3f+2XR26yptlOM5HWqPkz3JePB57jTGeIT/u2c4n3IMH+sLpkA2DZ9EaJu6K+L1e8M0rD+xZxVo/G5zU3ynnQdEReSLVDLtzUAAAAQAwAAFLiI/noMhYbAWP8+x2zAmC7jdlTMXhFlhrJe1fRB8fV1a2W6XVsQ9XTLTByBNcUSI+0MkO1FoXTTlWK4w8dvaBOqfTmajhTAh2lKBp3TgV1iDyfamW1ukrCSM7xFOWZCHIwjd/ZqH1cwbSAj7OKRWe0Kjbb8/5wlG62BJit5U2HPo0f4fzzzGut0JoF2yjZ9OR2fzywJq9rBWcJ/CDhXK8yNWn+QAuMR0oGzaQS3kXjg3toChgXLFuyBvuyuvLCROUDwdkm2rCg1d9dPo5E0hFDZ+rJsA8nNyi0H9Jjya6J70NgYiyAAgx9XikXBCanfmc6GRJclr94k+xUemZ26ZRNxnJab14IuLsIVf57KsXXhFrB2leRKYE2v4Rv+B7vBsn4xQENqT0OV/dIUsrjwUFc6pQBdizeTuDf6VXwcg1U2k/sgBsnJHZWTJ6SvTqBWKCD/XnZVoKYo0WL7OHJomxUMt4b+okbNW1oum7fni5KB4GxzXx/vT6KyOIlXZpCzto/p8Ux1YqKAlrHI4Puaee9t5xqxhlz/S6ukwUv1ISd77Vllv4ZR7p99vSMnHFJHyZM1RsmC2PTdFYlM1bvIY2iX5cP0B5cVoKXCzBWreMneCXNItg7gBvTKzqxehGXUZsUFNW+Yp/s9aADVVLDoOSd4hORGBaU8tloC5aAaDq2X1rUQiivwf4soijQA4oyToo4AoGXdzyn0G1G9rSoMb5wH6CCEzANM9p6g/drk/NVc+3LPftrh5MOO0pNs0U/x76D8ZrD6DfsovLdtm+XyI3EiGli/QXJNG+Y+dESxUSjSihUiySKR3bPDR2jgnjId1LEbBgrTJwKeGXHtvlOUjO32TQv/BD9fmDa1rsC/6Pj/zPVT2WBJ91/7+7NPcq9jq4RtwdTghffWxL6TNRHItf05jFtLG1oogJxQlXNbWe3XDNwMn556CNi1nIVKA/l2C9ERzoFTOt1pFGCujcg3rfRtnjKrKTinxREDekfw/VTSOnbD4TPxJGr9qKi/ZqTATNz6sjDCnSmccFkkuS2rgTYAAABoAwAAvOm8gPiBb+3qiXuEywThCScTpR1tUW6e+6ZdRotYCH0jY5bWWSI9tlkBPf/tRV9jw03c2D4iL6qE3vwtlGREzw1Rv+SpILQ23mCtAyG22FMJeNY3o8yB/7esrUslH6iKtLn/4+Vp1rZxgpue96BHUD++Spd8++CWHLjWWSQAKHcONLSagX7V02AZziaZwXWH1HC156Z1Gmj7UtiqxucAFQLcD44wZu2CtTac6hkjdzj2uALPcstLWjBxnH6dYVAqUTPo5rKUrNqDekBnWKIcrE2ppwJaLH25yGvhsPpPJ3TrcGi/a1vHjRJwWvZU4a9oUch2YNXszlbpY1Qv3FKZlfsa0r/zU12UFgWmi71E/9OSzORJbh/ewRveoq2Oyg+jva+rUjTt4u0uSt9o7d5Gkcwjp7ng4eU/SZwIs5iw3dOLly6QINeq/4Mampu7i06lmjF04AKAePwtKrDUSnffr/iuluqR9V8B09wA1GlF5WtbeVjO86hnfSt1vYAqYWCn8/qYVPzid/87DhoxwDacogtMKNr5GVJqgDqW4XFAUlSpMilvVLoPgx9Qil5t8T5bs++3yiGXngcQEmtMnDXUzp14HxrnyR2RYjCEGqg/5Mk+AmqM6Lol+/IqEaHbj3z57dlOdhTTvvOhU61U2L363VvZOhh+6d0GPY8XHNKszdRGnLucuKC6IJSYxqou6z/ycRICOZCXfObi9u5sr2i7jk4vEjQby6ZJQd3HKSVOhuPl5lDFawsZQe5Ni1uU9rtn9WOXjsS7ntMhchrKSEEbpWWm3Qey49DYg2L8AHo3/s6/vduFQctKm/80viVsWD8EBuNLIIzbu019OK8ORIJehUfhbyyO5O+V1+byr/nMWLUPiiWgxx9WL08UNfMHqOpmC2lNPrLysJb+9hDzfaWFpWtgcn9awS9Ma1vshQWWl9Cg/w07UwK/0AxBEXHQFEKIzDWewkM93S9fWGVwc4N9cyx+0PhHvhnUlHMHb9Ygqj7wN24ROkOpNCS2sNz4/hoHr/Bgs0kpw9VW+RcAIl9qtdMuQIId99eG3+dJijFWtjvNyzVPG2XoWqGv9G+d4Ga2QNSe5HETAYJuqUgN7ganbFPBz8w7Jvuf5DXkKhnT+JSEFCKRJTQWJv/d88rUimFD1KQ/MVgCVso3AAAAOAMAAIC4n20WAYYjg/8tS96pVrBl8ed0Hv4WOUPsYNx76vYczYie9zgJPuy5NFPuyrDp0gaSQ273pVnrT6/EfSZTh4JLnUYT3ZuiTV7gcJlpNrRkYpeNfNx/Wvad9xQTh+3qjnOyO51YY88Xi8s73cwBrSDMYDJ6dQ1gGYza+EchHom1x1VSU7g/s9wq+qMS67KqwDYnSwCmJrO9HcSquw1TMdgg0qxOZy9UvciNS/w8TF8oLc4YzXg5fOaGrKAbV2CTkpFCsv1jYiZDlhzS+ELzEzlxGXEaMnqakm5z03EcxfvbNFMPioaDNfO3HMVaAVKvvL6pFzgQVJ+fD3kBkAyMgnNbhXrAgOBnKkXoHDCVPX17Z/R0961jDb+rnlWyIg/0eDoF73xe11ttIPNzm5IUDlaZk9XFpZ2RoTVlklXwDiN4v/Hr79+dgm/fOatoZd/SleveLPIk82/uPUOGgehFvYpeq1tVKIZGjivIyyQTa69iUo8ZvLa9/djGV+390jiUyPsS7B3ZMXaofx74iFlsAVXR8zaLG5yHxZU2Bgq217D/e1zUtBNBT2Y+w1pqRRBOewDE78ousmiRrFK0uGx3Xn5Xs2yCslgk9HYbLAqCDKH/BopGw0pDGk1PsZfm5w/n6rSyZXpANzvoL6Rz1yO+lyym902uxSOoRRP3RVx5n6SiwFJT4xpyJrvIovkmDpK4gIQAFTglX0ri9AZDUfLCiDxDV8uF55WAqzipCtCpcSqJEpZjSagag1wmj6LfqcaJomDR7EVhvbALMM8EK7PfkC/ySkkpI0zclAypeqfo7N/uqafWKYFgkHYiDkxiXK+YqJU1pnMgRFm8jnq+l5hweVEbimvWlBe2uFaFxEgG8iUzGafQnuA5/eDaXfA1AllbS+YqHy3nSrPUnMmk8KcljoFPQ6V3GZpz723tCpRAVW+w9tM3x6one6sjDQx3Sq4VuQjePv0VhXvmuYJkT8aLBFbEiDfbLRbWNhRqy5n1Y8GhWFHxPt8BlMMI2MuFDx31+okvVX8FwLeomkT2jk6Erf+mABnVQ7JqTv3njFYYmJLGe+XOyE+gxXx5Eh3Phq+FoLq5dWIpl1WNOAAAADgDAACz5Ealvgww4rDgz4zKqUO6iivLp05QH0lZJESZQ8RyxoqR+4iXfO+7qXzWcS5lI6iA7VvKlKNYUvv7yAIQZc0WkUI3te+gkh5Z8Zd8KJXcL0h7Uty9scD3o0BIKw/yzPzKHSMfqHVqX0DPfyEQLcS2NyNpOEpLoLV1ZhkDBetiSlcEqA4D1mlkDU+SCY2pTmNT6kMhBo/lbHJpJKgvoqxEa8fJ9ya7t28hgKjhIw6LkMxjyxULRg/9kJawhSQ4o2PKfhJdo0O/6r72RyUgHtpk+sLlBjoFL0vZjd3+0uHhQveQTesxr9T8sqRoJ+PKlgTi6SOKv1XvaygzOke5BjdcM28vi9M12GqHg0DLpVImembd1v3sclD0Oy9fyJCGFsPbiKvmqptNYgIjUOnW+ppOTjB4EC079CBrcOpclWAzIGcsKi4SG1tuYpE6p34bkYY3I6QZC/NM55yLC7JNwBKcEgN0yBZkVVX3ztN2yqHmkGJ5D3XLu0p3PtqUnafAjg+naeprmNoNSioZawjvOjeKhV6qXbRb0syfLG0ASolzjlX0EKy7ql3MlUjHjGhsYaOPlhOq2N4idu+F79yX/tg0GtkYbYdoarCCqjAgGO7ImYPrhlOU34oZ+5NkwbAYHKqKU784+pyYJ2Tb2y4YTvDVmAjxeAUAeAjKMmrQEm2x9hrRzFYHV5j1q9OijuN5UkFBvV4id+nvDXX/7cHVHtT6T52ByUMAmoNVq+/dwQoXRGecF6+cAxiwo3C/55WGRjCw4klj/OpIzT6vZfsoi/2/LTtMN9tE+fBsmb+u924EcCSACYYeeSKryTErKwdfl4KxU+7gzdsCZhqoCIHncRSGyWnHraB1loXlor8a/6eeXlwUwk2HLxyDBCRM7ifnFD0XNZol1SLK5nf87rtjha4fS09GvSEZoDoOt0hcr8KU+jB59UtUEMAUKCWq+iGiONLMDFBnZ+vOPfiKiRU7YzBL2v7N4VZiLTHEDBHU/gG1pgQvwzG4p3VA6Z2zdpE4X1H4MTI0/5dTkeIX8qIQiy5b3TGmjlQF6Yyvg7r+p7bXVoRg0rAvnAvrYSPpM++fy/s3S2zsd3m/XwAAAAA=');
