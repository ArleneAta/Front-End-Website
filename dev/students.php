<?php
    include("header.php");
?> 
<main class="students">
    <section class="background">
		<div class="container">
            <h1>Current Students</h1>        
        </div>
    </section>

    <div class="grid-container">
        
        <!-- read students csv file and place into grid items -->
        <?php
            $csvFile = file('./data/ssd-student-list-2017-2018.csv');
            $students = [];
            foreach ($csvFile as $one) {
                //echo "<p>$one</p>"; - prints out csv as shown
                $students[] =str_getcsv($one);               
            }

            foreach ($students as $stud){
                echo '<div class="grid-item student-items"> <p><strong>'. $stud[1] . ' ' . $stud[0] . '</strong></p><p>'. $stud[2].'</p></div>';
            }
        ?>   
    </div>



</main>
<?php
    include("footer.php");
?>