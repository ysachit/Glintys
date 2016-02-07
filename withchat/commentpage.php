<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('php/chat_request.php?id='+<?php echo $_GET['id']; ?>, load_data,  function(data) {
		$('.message_box').html(data);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#message").keypress(function(evt) {
		if(evt.which == 13) {
			   var user01 = $('#user01').val();
			   var user02 = $('#user02').val();
				var imessage = $('#chat_message').val();
				post_data = {'user01':user01,'user02':user02,'message':imessage};
			 	
		
				$.post('php/chat_request.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#chat_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
});

</script>
</head>
<body>
<?php
echo '<div class="comments clearfix">';
				echo '<div class="pull-left lh-fix">';
					echo "<img src="."images/".$_SESSION['profile_pic'].">";
				echo '</div>';

				echo '<div class="comment-text pull-left">';
				echo '<input type="hidden" name="id" value="'.$row['messages_id'].'">';
				echo '<input type="hidden" value="" >';
					echo '<textarea style="overflow:auto" class="text-holder" placeholder="Write a comment.." id="message"></textarea>';
				echo '</div>';
			echo '</div>';
		  echo '<br><br>';
	?>
</body>
</html>
