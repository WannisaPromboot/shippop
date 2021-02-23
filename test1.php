<!DOCTYPE html>
<head>
    <style>
        .display{
            display : flex;
        }
        .btn{
            background-color: #00CCFF ;

        }
    </style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
   <div class="display">
        <div><b>LIST : </b></div>
        <div>
            <input type="text" name="list" style="width:300px">
        </div>
   </div>
   <br>
   <div class="display">
        <div><b>ค้นหา : </b></div>
        <div>
            <input type="text" name="search" style="width:300px">
        </div>
        <div>
            <button type="submit" class="btn">ค้นหา</button>
        </div>
   </div>
   <br>
   <div class="display">
        <div><b>ประเภทอการค้นหา : </b></div>
        <div>
            <select name="type">
                <option>-----</option>
                <option value="1">Linear Search</option>
                <option value="2">Binary Search</option>
                <option value="3">Bubble Search</option>
            </select>
        </div>
   </div>
   <div>ผลลัพธ์</div>
   <div>
        <?php 
               
                if(!empty($_POST['list'])){
                    $list = explode(",",$_POST['list']);
                   sort($list);
                   echo   implode( ', ', $list ).'<br>';
                }
                if(in_array($_POST['search'],$list)){
                    if($_POST['type'] == 1){
                        for($i = 0; $i <= count($list)-1; $i++){
                            
                                if ($_POST['search'] == $list[$i]) { 
                                    echo 'รอบที่ '.$i.' => เจอ   '.$_POST['search'].' == '.$list[$i].'<br>';

                                }else { 
                                    echo  'รอบที่ '.$i.' => ไม่เจอ  '.$_POST['search'].' !== '.$list[$i].'<br>';
                                } 
                        }
                    }elseif($_POST['type'] == 2){
                            $low = 0; 
                            $high = count($list) - 1; 
                            $i = 1;
                            while ($low <= $high) { 
                                $mid = floor(($low + $high) / 2); 
                                if($list[$mid] == $_POST['search']) { 
                                    echo  'รอบที่ '.$i.' => เจอ'.$_POST['search'].'<br>';
                                    return false;
                                }elseif($_POST['search'] < $list[$mid]) { 
                                    $high = $mid -1; 
                                    echo  'รอบที่ '.$i.' => ไม่เจอ'.$_POST['search'].'<br>';
                                }elseif($_POST['search'] > $list[$mid]){ 
                                    $low = $mid + 1; 
                                    echo  'รอบที่ '.$i.' => ไม่เจอ'.$_POST['search'].'<br>';
                                }
                                $i++; 
                            } 
                    }
                }else{
                    echo 'ไม่มีข้อมูล';
                }
                
        ?>
  
   </div>
</form>


</body>
   

</html>
