<!DOCTYPE html>
<head>
    <style>

    /**ข้อ 4 */
        .square{
            width:240px;
            height:200px;
            margin-right:10px;
            border:1px solid black;
        }

        .display{
            display : flex;
        }
    </style>
</head>
<body style="padding-left:30% ; padding-right:30% ; ">
    <div>ข้อ 1.1</div>

    <div style="text-align: end">
    <?php 
    for($i =0; $i <= 4; $i++){
        for($j =0; $j <= $i; $j++){
            echo 'O';   
        }
       echo '<br>';
    }

 
        
    ?>
    </div>
    <div>ข้อ 1.2 </div>
    <div style="text-align: center">
    <?php 
    
    for($i =0; $i <= 4; $i++){
        for($j =0; $j <= $i * 2; $j++){
            echo 'O';   
        }
       echo '<br>';
    }
    ?>
    </div>
    <div>ข้อ 2.1 : 12000</div>
    <div>ข้อ 2.2.1 : 200</div>
    <div>ข้อ 2.2.2 : Average</div>
    <div>ข้อ 3.1 : 0</div>
    <div>ข้อ 3.2 : </div>
    <div>
        <?php  
                $marks =array(
                    "mohammad"=>array(
                        "physics"=>35,
                        "maths"=>30,
                        "chemistry"=>39
                    ),
                    "qadir"=>array(
                        "physics"=>30,
                        "maths"=>32,
                        "chemistry"=>29
                    ),
                    "zara"=>array(
                        "physics"=>31,
                        "maths"=>22,
                        "chemistry"=>39
                    )
                    );
            
           foreach($marks as $_mark){
                foreach($_mark as $_m){
                    if($_m == 35){
                            echo $_m ;
                    }

                }
           }
                    
        ?>
        <div>ข้อ 3.3 : </div>
        <?php 
                     foreach($marks as $_mark){
                          foreach($_mark as $_m){
                                echo $_m.'  ' ;
                            
                          }
                     }
        
        ?>


    </div>
    <div>ข้อ 4: </div>
    <br>
    <div class="display">
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
    </div>


</body>
   

</html>
