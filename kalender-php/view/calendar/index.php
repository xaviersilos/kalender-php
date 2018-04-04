<?php 
       $months = array('null', 'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus','September', 'Oktober', 'November', 'December');
       $curMonth = 0;
       $curDay = 0;
        foreach($birthdays as $birthday){
            if($birthday['month'] != $curMonth){
                $curMonth = $birthday['month'];
                echo "<h1>" . $months[$curMonth]. "</h1>";
            }
            if($birthday['day'] != $curDay){
                $curDay = $birthday['day'];
                echo "<h2>" . $curDay . "</h2>";
            }
        echo '<p><a href="'. URL .'calendar/update?id='.$birthday['id'].'">'.$birthday['person'].' ('.$birthday['year'].') <a href="'. URL . 'calendar/delete/'.$birthday['id'].'">[X]</a></p>';
        }
        echo '<p> <a> </a> </p>';
        ?>
        
