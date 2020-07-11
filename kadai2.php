<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <title>kadai2</title>
        
    </head>
    <body>
        <?php 
        $name="helio";
        if($name=="helio"){
            echo "私は、{$name}です。";
        }else{
            echo "あなたの名前ではありません。";
        }
        echo "\n";
        $count=0;
        for($i=1;$i<=10000;$i++){
            $count+=$i;
        }
        echo $count;
        echo "\n";
        $count2=1;
        $fruits=['apple','banana','melon','orange','pear'];
        foreach ($fruits as $fruit){
            echo "{$count2}=>{$fruit}";
            echo "\n";
            $count2+=1;
        }
        echo "\n";
        $start=1;
        $end=100;
        for($i=$start;$i<=$end;$i++){
            if($i % 5==0){
                echo $i;
                echo "\n";
            }
        }
        
        
        
        ?>
    </body>
</html>