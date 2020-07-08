<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <title>kadai</title>
    </head>
    <body>
     <?php
     $a=3;
     $b=7;
     $c=$a+$b;
     echo "1){$c}   "   ;
   
     $array_mounth=["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"] ;
     echo "2){$array_mounth[7]}   " ;
     
     $hello="Hello,";
     $name="Helio ";
     $world="`s World";
     echo "3){$hello}{$name}{$world}   ";
      
      $tech_boost="tech";
      $tech_boost.="_boost";
      echo "4){$tech_boost}   ";
      
      $calendar_2018=[
          "January"=>"1月",
          "February"=>"2月",
          "March"=>"3月",
          "April"=> "4月",
          "May"=> "5月",
          "June"=> "6月",
          "July"=> "7月",
          "August"=> "8月",
          "september"=> "9月",
          "October"=> "10月",
          "november" => "11月",
          "december"=>"12月"
    ];
    echo "5)".$calendar_2018["december"];
        
    
    
     
     ?>
    </body>
    
</html>