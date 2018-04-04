<?php
    include("header.php");
?> 
<main class="students">

    <h1>Current Students</h1>

    <div class="students-container">
        
        <!-- read students csv file and place into grid items -->
        <?php
            $csvFile = file('./data/ssd-student-list-2017-2018.csv');
            $students = [];
            foreach ($csvFile as $one) {
                //echo "<p>$one</p>"; - prints out csv as shown
                $students[] =str_getcsv($one);               
            }

            foreach ($students as $stud){
                echo '<div class="grid-item"> <p>'. $stud[1] . ' ' . $stud[0] . '</p><p>'. $stud[2].'</p></div>';
            }
        ?>   
    </div>



</main>
<?php
    include("footer.php");
?>