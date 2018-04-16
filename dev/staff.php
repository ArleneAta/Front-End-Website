<?php
    include("header.php");
?> 
<main class="staff">

    <section class="background staff-img">
		<div class="container">
            <h1>Faculty</h1>
        </div>
    </section>
  
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
                echo '<div class="grid-item staff-items"> <p><strong>'. $each[0] . '</strong></p><p><em> ' . $each[1] . '</em></p><p>'. $each[2].'</p></div>';
            }
        ?>   
    </div>






</main>
<?php
    include("footer.php");
?>