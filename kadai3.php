<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <title>kadai3</title>
    </head>
    <body>
        <?php
        //1)
        function double($n){
            return $n*2;
        }
        echo double(5);
        echo "\n";
        function sum($a,$b){
             return $a+$b;
         }
        //2)
        echo sum(60,40) ;
        echo "\n";
        //3)
        function multiply($arr){
            $result=1;
           foreach($arr as $a){
               $result*=$a;
           }
           echo $result;
        }
        echo multiply(array(1,3,5,7,9));
        echo "\n";
        //4)
        function max_array($arr){
            $max_number=$arr[0];
            foreach($arr as $a){
                if($max_number<$a){
                    $max_number=$a;
                }
                
            }
            return $max_number;
        }
        echo max_array(array(5,7,3,6,8,12,25,1,8));
        echo "\n";
        //5)
        //ビルトイン関数　strip_tags
        $str="<h1>strip_tags関数</h1>"
        ."<p>タグ取り除くよ！ </p>";
        echo strip_tags($str)."\n";
        //ビルトイン関数　array_push
        $number=array(1,2,3);
        array_push($number,4,5,6);
        print_r($number);
        //ビルトイン関数　array_merge
        $array1=[1,2,3];
        $array2=[10,20,30];
        $array3=[100,200,300];
        $array=array_merge($array1,$array2,$array3);
        print_r($array);
        //ビルトイン関数　time,mktime
        //UNIXタイムスタンプを取得することができる関数としてtime関数があります。
        //UNIXタイムスタンプとは、1970年1月1日からの秒数です。
        echo '現在のUnixタイムスタンプ：'.time();
        echo "\n";
        //3日後のタイムスタンプを取得
        $nweek = time() + (3 * 24 * 60 * 60);
        echo '3日後のUnixタイムスタンプ：'.$nweek;
        echo "\n";
        //time関数と同じく、UNIXタイムスタンプを取得する関数としてmktime関数があります. time関数との違いとしては
        //、time関数は現在時刻のUNIXタイムスタンプを取得することができるのに対し、mktime関数は指定した日時のUNIXタイムスタンプを取得することができる
        //という点です。
        //書き方int mktime( [ 時 [, 分 [, 秒 [, 月 [, 日 [, 年 [, int is_dst ]]]]]]] )
        //指定した日時のタイムスタンプを取得
        $timestamp=mktime(0,0,0,9,7,2020);
        echo $timestamp;
        echo "\n";
        //ビルトイン関数　date
        //date関数は指定された日時を任意の形式でフォーマットし、日付文字列を返す関数です。
        // y->year m=>month d=>day h->hours i=>minutes s=>seconds
        echo date('y/m/d h:i:s');
        
        
        
        
        
        ?>
    </body>
</html>