<?php
    include("header.php");
?> 
<main class="schedule">
	<section class="background schedule-img">
		<div class="container">
			<h1>Class Schedule</h1>
		</div>
	</section>
    <div id="calendar" class="fc-calendar-container"></div>
    <div class="calendar">
    <!-- <div class="codrops-top clearfix"> -->
				<!-- <a href="http://tympanus.net/Development/Stapel/"><strong>&laquo; Previous Demo: </strong>Adaptive Thumbnail Pile Effect</a>
				<span class="right">
					<a href="http://tympanus.net/codrops/?p=12416"><strong>Back to the Codrops Article</strong></a>
				</span> -->
			<!-- </div>/ Codrops top bar -->
			<div class="custom-calendar-wrap custom-calendar-full">
				<div class="custom-header clearfix">
					<!-- <h2>Flexible Calendar <span><span>Demo 1</span> | <a href="index2.html">Demo 2</a></span></h2> -->
					<br><br>
					<h3 class="custom-month-year">
						<span id="custom-month" class="custom-month"></span>
						<span id="custom-year" class="custom-year"></span>
						<nav>
							<span id="custom-prev" class="custom-prev"></span>
							<span id="custom-next" class="custom-next"></span>
							<span id="custom-current" class="custom-current" title="Got to current date"></span>
						</nav>
					</h3>
				</div>
				<div id="calendar" class="fc-calendar-container"></div>
			</div>
		</div><!-- /container -->
    </div>

</main>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.calendario.js"></script>
<script type="text/javascript" src="js/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="js/data.js"></script>
        <script type="text/javascript">	
        $(function() {				
				function updateMonthYear() {
					$( '#custom-month' ).html( $( '#calendar' ).calendario('getMonthName') );
					$( '#custom-year' ).html( $( '#calendar' ).calendario('getYear'));
				}
				
				$(document).on('finish.calendar.calendario', function(e){
                    $( '#custom-month' ).html( $( '#calendar' ).calendario('getMonthName') );
					$( '#custom-year' ).html( $( '#calendar' ).calendario('getYear'));
					$( '#custom-next' ).on( 'click', function() {
						$( '#calendar' ).calendario('gotoNextMonth', updateMonthYear);
					} );
					$( '#custom-prev' ).on( 'click', function() {
						$( '#calendar' ).calendario('gotoPreviousMonth', updateMonthYear);
					} );
					$( '#custom-current' ).on( 'click', function() {
						$( '#calendar' ).calendario('gotoNow', updateMonthYear);
					} );
                });
				
				$( '#calendar' ).calendario({
					checkUpdate : false,
					caldata : events,
					fillEmpty : false
				});
			});
	
		</script>

<?php
    include("footer.php");
?>