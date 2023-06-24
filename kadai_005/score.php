 <!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題005</title>
 </head>
 
 <body>
     <p>
         <?php
            $score = array('score1' => 80,
                           'score2' => 60,
                           'score3' => 55,
                           'score4' => 40,
                           'score5' => 100,
                           'score6' => 25,
                           'score7' => 80,
                           'score8' => 95,
                           'score9' => 30,
                           'score10' => 60);

            // $sumはここで初期値を入れてないとundefinedの警告が出る
            $sum = 0;
            $ave;

            foreach($score as $data){
                $sum += $data;
            }

            $ave = $sum / count($score);

            echo "生徒の合計点は${sum}です。<br>";
            echo "生徒の平均点は${ave}です。<br>";

         ?>
     </p>
 </body>
 
 </html>
