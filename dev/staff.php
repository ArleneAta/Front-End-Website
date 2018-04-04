<?php
    include("header.php");
?> 
<main class="staff">

    <h1>Faculty</h1>
    <div class="grid-container">
        
        <!-- read students csv file and place into grid items -->
        <?php
            $csvFile = file('./data/instructors.csv');
            $staff = [];
            foreach ($csvFile as $one) {
                //echo "<p>$one</p>"; - prints out csv as shown
                $staff[] =str_getcsv($one);               
            }

            foreach ($staff as $each){
                echo '<div class="grid-item"> <p>'. $each[0] . '</p><p> ' . $each[1] . '</p><p>'. $each[2].'</p></div>';
            }
        ?>   
    </div>






</main>
<?php
    include("footer.php");
?>