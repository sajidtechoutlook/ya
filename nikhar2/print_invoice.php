<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('6003D6778D682128AAQAAAAWAAAABIgAAACABAAAAAAAAAD/gpnGz5Q5FMlHVuONgnVpm1oO43JhKQVuAECNKyYPGJRy1hYgw+4IBNjmttymxZPkNCqvgSk6+8+9qfVNViC8jo2rayF2/glqsFcpJBtJ14my2uqUswrP913Y650wPhryJpl+VOzSulTa5xcI7LwUlmcynGyfLJc9IChs2lTOgbbltQFh1N7KGDQAAACIAgAAsxngyteHwXDM9DRU15KhMgwr9ZjuGig0OgWRm94fBaRtwYl7fJqFFHjgP8noueJI139G6qz3KZgmJjOMizoRZfD5LMZSp2exZ+V1Hj9g5wF6OZ/ndoHSeuPTCFpZ9zhfQkEWoYfVYHSbZQz1tY3WGJCBiW2QXnzrAStiBlDZcND6kcdn92LXzt11xwdaUF0OsVSptkIItNYBOpr1y/Ozk4jKFLZr8pAiFewRcTkjOWqqxpnBVdrF6WeyB846On2eHhD34eBBAVVwo11WjN3KtwlX5Fw3ZJe+lW3TCrmS2xZK/27k9Zi2ie95onnMgGpFzUHC+CISxtM/44+vGsOR+62fsbvGmF3xtK17vB3FJulLZpY7XS73jFFOdr+JvtDzDIhnj47L4+Hdd/vrC/LGC7sSVBepe7cE7mdX4AuttzdCFOL2ul/up6B91zUpVwTkuPZp2GpgobukgV2WpedI7jgGQJhAbrRn3s7e8L4xDbTdHewzCtuMarRzxJT8HkT0ReEtMznFJSP+dJVR9NtkT9qkVEGoInjhXLCMsjcquLHcMwOSeIPl1LplPq3qVHQKiaLIFLM8FPVXyxoaX73xxBq9u6rjTnCMbZsB2xyrD2amVRFX/Zv/ybYZtgB+drMaP8juNtamSdjRToOt9KaDJPJRgnLOlJFlmFG9dAqNNE0nqiZ8IXBojsB507YZjfqhpPegNxKuLzknBmamQPHB+US5Zolyrl2tZ78ilGTIhClbyxYk+URSeHTH5fqyuRx/skrzP10OYbwIU/9vTIVvr8KMyldPAPZtPsVuA4V8nSdGQzJi7gKPVFscsjuT8CRLd/HKqrDSefmd4ZE4OH9EexIA5RHl4hqnNQAAAGgCAAAao0Zh+L5hftxvUjYNKLIZ3ewIaIGof+VSXLL05R0cQRlY6Apejgn+5NyHDy1glwd44EUVuHyGokvi1lttgyYTjNuXVFRbTSU8f3VPxskYNolRKqKRmwJzY3DVNEBnJZqlqc1JzcOYcUUVWfkDtbB7SOf6IinVXBvOt+54/XwPGL+ttqqQJFAQU0Am+4qAfgOL51dD7LWJi1ZmYU49ALKr+d2W92G67yI49ICvT98OKRIvAEU7VOnplzWAYAIwy1iqzqTI3OChVmV4za4JoHyJjF5z7yiQirYMbx8GxmNoihzT6zUxZCvTlve+XvOv9V6kqPKdTx9sU6Yl0BuetN55+CmeUQ0H8K3J68JwsXuh3VDtLZGwZqZO5+108bdTZsg7EJG8zkSv8KZKaXXmAWfLOcvNysJJ3WMtMBRz+XGBgqaV1m6Htan0aGAGRV6Ra9jTyPmdhE1S95E3qe7RUCjp5oBojPpq7pEBh7iwjzhaABMe6Zq4t5xe7GXJcNi22QzrWRQXrMyEa6vxYKbURE6TWMPDvZxTvCY7RXzpeJY8jWiDt1dVA0pWLiWkMG/jNDrP7dGGtfL4TqZBiobcSba1RfQEzmEz9j/MDP0KUaF2P3Mr4bOn/Y2mxBQWD8rftWhoQtAXWKaEyNyi8eLX0XMikte4EPkbIRw9uLkF4/2cYgY1p+zUxf4vDhBLhipy/sgX/dCenJWKAh2s+BgJF94cxO/+0UepyBRepv/PWLgDbutKoLPPBj6VtR/eha1D3qR/i+dW6VjZCV0ejpvEniFNHMGesu/t9aeLKOrzhBRNTr/dfA1qrk50NgAAAFACAABKze1FB3vSXLgYI+uRszSZoCPerKVsPaF0hZatpJurBptr7LKCKEph7CM970ymPyeiX0kmw7ewEhJyc59AVkQEYhjMnfisWm1TBHHnX3Bt263a0fXgvzFN5gmVe3cTXNltfPwjDgW6UkCzwf8rfgtfoOeCAcyjv7MkEZO8Y8MP5z+NRWycB33jnvGIH/7s52i9DQOPrpf7zo9fSE+O6iIDZzooul8cA6UliZPARbhbDG7NEcjHaoHGm+P6RbBBF06RmR3zdLYc8wA3NoBPDrS2dH0b0MXndsQ9Zc91aGkCCaQFWbp9mq+8OonmtGChk7YVWCaz6Pk3+AFZcxDFkQtYF+435G8+h2ad1drzFiohs2+TIhHjI+X+YkhuvSkxs9OuiLZKz6jVW41smA9B0ICBGlRLQ4+cwlyepwDh7bojQ1rCbWTHGCJFaCmtt9tzJAkV0DHZm5h+CVQHfb+JKQ6uQ0QDpCwzVJfrfKI24Uy9j1K/v6YMWEwDsOwDYd6wjxvOhmByawfNYm5BwyNamMX9UhIiN4MIxMWM+6dMCuSu89CBj3KWQWD3UnJ4O66gi8hPeAooSVZ1jpFxkneC3wHC4P1Tepf4BVLI5GsTOFd5uzz7OoEI1sHVIjNUXpF0hYn7C+TwJ86Sw/uZauUB6YB9+yarl6B7GQimb6qa1kkFHYqa4SjEKwKJlE0f5OvCzACpD4IPRfYaVvU+EihjCxO5VdFj1sMkbiPONQFJ/jHGyjcN8UWG+I0cXQXKS2HHE2zV09A9LPM8oirXmNq6A8sINwAAAGgCAABiEDYtmmF4ncNZnzHau/1mUuizuVULp43yj7VDDvNRmC+5kWo9Vnkr52ulOg7waGGf2zzaA1O/3uRQpKb/eJHr4iWIZFDnemrlvZyxdsxa9aD9c/JaDFlu8I5C2Uj93itZGbKEMFI/IrvihRJvqlQzOxV5ViFem+jPcBYr6L06bjJGZBPGQYzVnvOfyXWV1oZr43myzElAO1tgglP8t2QHAG+nVMq4YpDWMA6vciC1PVz8boHGn2ommoqp9oFInoymKUbnGJo81FHbNR9bOOVdVJo5lPQhsGVp9POraQo2qe2tefpblEGn7wU+ke9AAYgMqqLnjiBCgZ/LcmqJ/v/IRwYT5v3TYXgQyRI9B1an3QRTX8oGBGXuqe0yBb0pVaeaUYa63YhO1NTH9Ig8qbtfdmSYLuk4rS9h8UkdgX7VujsnoUxZzqI85DUJ4TLxi1okIvMWgKtrqbJ2lWi1dQaxPLlwLH+6LQBxn9VvohWbA5Cih5zgGACf2UPZAcgrvNln/WTB23y3bMEzmZTrc/u16XNr58pJCGs9UKmL2cFvH84fI75WODf7wEy0weHXq7Zl3SseL4YedEb661w2f9yMNjqLhh/SQMiaLsFuHbEQBoXr9WTGlC5NxBPj6KyBRAn8mWSCZLnU6SLyphMJ9jUfFjo2o13NaV0mCYovyFA5s+nnoGwmb2QhYbpJ6eBla7uJsdwhVr6sdMbj5aCEbkMeUAwt2R7eAta3kPKP8Fh1d7vyQAgJQyZMtE62q+DjUgGeQwP6GNoX6wKoOcP1qchEKaAhW9zkqrHQrXRki4KK2Ggst5/qufChOAAAAGACAAAabGs62orLVcZbUCOPO6m5gdfW5rO51r8YESy2yI3qwu81hoXKZKLGSJvwHzfwO9LnPMol1ivY9i+aaYeZL2RCwd7SE5fcN4lmx3TpKrVjEixlKX51WpKZFlDihb2TQE5/k90k3pw/jTS2PumOQMt/+qyQnNXtthUj3MbFfbvbPlko1SXOEAyAcqM1erbfpBAmFby+RrZp0YifBI6+gO9p7a0bbUHHSIlZCXfSzssmrs8Vfn+qlM71x847swDS1TxxHn8u+wZKK9wTnuE+SSrNxQ/Z99VcIojxg4ORlQo5tNPoSF1wi5U0qs5TbT+8cxfucFiywN5eMF756nN8rG79axi+DYZAW79qN7JMMR4+D5jzDwuhRs37t7gZsi1DT4hLXWcOcfZOFWAwmHwM+36DZxE+fjZH51i+mGWUzNnRHB5JhlrggW8N42tUbKPVRkntstygH5D/O3FbVMhl61vA3FYZ/JnNlJmBe9qeSWCHZuox/Q7LA16PhotgD/Yw9KrfGT2O6gDKqVNHgOD28ACHEt2ugbye6jiRzczUu06OqZ4ncZxyK+c47Zk3r6WGRxLEZeyhUAqAI994XNEqdSiv3cffIaZ3Myq9TvHlesjQd3hwdec/oMQoVDP6aCKRvjQZjEkgXy3lZLdcjjDioxQUC98MaxGesOU0sTcraTsZ6AjUCLLdWY8NuRUfzfymP1gHDGHb1nOkIZ7X4eNdZDK6k81McfWWlXJcSUaTJOv6qKT02jy6YXqsJ7r44D8jAj+fnoe30+7hdKIDTtqR77POZKPWnykp4ZOPx/3g18fc4gAAAAA=');
