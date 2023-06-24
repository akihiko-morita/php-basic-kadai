<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題005</title>
 </head>
 
 <body>
     <p>
         <?php
            $as_array = array('名前' => '玉ねぎ',
                              '値段' => 200,
                              '産地' => '北海道');
            
            foreach( $as_array as $key => $value){
                echo "${key}:${value}<br>";
            }
         ?>
     </p>
 </body>
 
 </html>
