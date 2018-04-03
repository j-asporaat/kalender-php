        <?php 

         $month = ['null', 'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 
         $i = 0;
         $day = 0;
            foreach ($birthdays as $birthdays) { 
                if($birthdays[month] != $i) {
                    $i = $birthdays[month];
                    echo "<h1>$month[$i]</h1>";
                }
                if ($birthdays[day] != $day) {
                    $day = $birthdays[day];
                    echo "<h2>$day</h2>";               
                }
        ?>
        <p>
            <a href="<?= URL ?>calendar/edit?id=<?=$birthdays[id]?>"><?=$birthdays[person]?> (<?=$birthdays[year]?>)</a>
                
            <a href="<?= URL ?>calendar/delete?id=<?=$birthdays[id]?>">x</a>
        </p>
        <?php
        }
        ?>
        <p>
            <a href="<?= URL ?>calendar/create">+ Toevoegen</a>
        </p>

