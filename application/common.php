<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function cu($url, $post_data=''){
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt ( $ch, CURLOPT_HEADER, 0 );
            if($post_data!=''){
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
            }
            $output = curl_exec($ch);
               curl_close($ch);

               return $output;
}
function input_csv($handle) { 
    $out = array (); 
    $n = 0; 
    while ($data = fgetcsv($handle, 10000)) { 
        $num = count($data); 
        for ($i = 0; $i < $num; $i++) { 
            $out[$n][$i] = $data[$i]; 
        } 
        $n++; 
    } 
    return $out; 
} 