<?php include('include/header.php'); ?>

<div class="main-content">
<meta charset='utf-8' />
<link href='<?php echo $base_url_views; ?>css/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo $base_url_views; ?>css/fullcalendar.print.css' rel='stylesheet' media='print' />

<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			//defaultDate: '2016-01-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: <?php echo $appointmentInfo; ?>,
			/* eventMouseover : function(data, event, view) {
                var content = 
                '<p>'+data.description +'<p>'+
                '<h3>'+data.title+'</h3>' + 
                    '<p><b>Start:</b> '+data.start+'<br />' + 
                    (data.end && '<p><b>End:</b> '+data.end+'</p>' || '');

                tooltip.set({
                    'content.text': content
                })
                .reposition(event).show(event);
            },*/
			eventClick:  function(event, jsEvent, view) {
				//set the values and open the modal				
				$("#eventInfo").html(event.description);
				$("#eventLink").attr('href', event.url);
				$("#eventContent").dialog({ modal: true, title: event.title });
			}
		});
		
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</div>
<div id='calendar'></div>
<div id="eventContent" title="Event Details">
    <div id="eventInfo"></div>
    <!---<p><strong><a id="eventLink" target="_blank">Read More</a></strong></p>-->
</div>
<?php include('include/footer.php'); ?>
<script src='<?php echo $base_url_views; ?>js/jquery-ui.min.js'></script>
<script src='<?php echo $base_url_views; ?>js/moment.min.js'></script>
<script src='<?php echo $base_url_views; ?>js/fullcalendar.min.js'></script>
<script src='<?php echo $base_url_views; ?>js/bootstrap-tooltip.js'></script>
</body>
</html>