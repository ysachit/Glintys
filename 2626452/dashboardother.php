 <?php
include('header2.php');
include('php/connect_user_database.php');
?>	
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
        <script src="js/hideshow.js" type="text/javascript"></script>
        <script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.equalHeight.js"></script>
        <script type="text/javascript">
        $(document).ready(function() 
            { 
              $(".tablesorter").tablesorter(); 
         } 
        );
        $(document).ready(function() {
    
        //When page loads...
        $(".tab_content").hide(); //Hide all content
        $("ul.tabs li:first").addClass("active").show(); //Activate first tab
        $(".tab_content:first").show(); //Show first tab content
    
        //On Click Event
        $("ul.tabs li").click(function() {
    
            $("ul.tabs li").removeClass("active"); //Remove any "active" class
            $(this).addClass("active"); //Add "active" class to selected tab
            $(".tab_content").hide(); //Hide all tab content
    
            var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
            $(activeTab).fadeIn(); //Fade in the active ID content
            return false;
        });
    
    });
        </script>
        <script type="text/javascript">
        $(function(){
            $('.column').equalHeight();
        });
    </script>        
        <section id="main" class="column">
            
            <h4 class="alert_info" align="center">Welcome <?php echo $_SESSION['full_name']; ?> Cheak your important work here. THANKS</h4>
            <h4 class="alert_info" align="center">You are assigned as&nbsp;&nbsp;<b style="color:#F00; font-size:16px"><?php echo $_SESSION['post']; ?> MANAGER.</b></h4>
            <article class="module width_full">
                <header><h3>Stats</h3></header>
                <div class="module_content">
                    <article class="stats_graph">
                    <?php
                    $sw= mysql_query("SELECT * FROM online_set WHERE status='1' ");
					$hw = MYSQL_NUMROWS($sw);
					?>
                   <div class="graph_today">
                        <p class="graph_day">Total Online</p>
						<p class="graph_count"><?php echo $hw;?></p>
						<p class="graph_type">User</p>
					  </div>
                     <div class="graph_previous">
                        <p class="graph_day"></p>
						<p class="graph_count"><?php //echo "On"; ?></p>
						<p class="graph_type"></p>
					  </div>   
                   </article>
                     <?php 
					$cw= mysql_query("SELECT * FROM user_details WHERE join_date=' ".date('Y-m-d')."'");
					$no = MYSQL_NUMROWS($cw);
					$wc= mysql_query("SELECT * FROM user_details");
					$on = MYSQL_NUMROWS($wc);
					
                        ?>                        
                    <article class="stats_overview">
                        <div class="overview_today">
                        <p class="overview_day">Registered Today</p>
						<p class="overview_count"><?php echo $no;?></p>
						<p class="overview_type">User</p>
						</div>
                        <div class="overview_previous">
                        <p class="overview_day">Total</p>
						<p class="overview_count"><?php echo $on;?></p>
						<p class="overview_type">User</p> 
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
            </article><!-- end of stats article -->
            
            <article class="module width_3_quarter">
            <header><h3 class="tabs_involved">Overview Manager</h3>
            <ul class="tabs">
                <li><a href="#tab1">Posts</a></li>
                <li><a href="#tab2">Comments</a></li>
            </ul>
            </header>
    
            <div class="tab_container">
                <div id="tab1" class="tab_content">
                <table class="tablesorter" cellspacing="0"> 
                <thead> 
                    <tr> 
                        <th></th> 
    				<th>State Name</th> 
    				<th>Total Registered User</th> 
    				<th>Total Online User</th> 
    				<th>% of User</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td></td> 
    				<td></td> 
    				<td></td> 
    				<td></td> 
   				 	<td></td> 
				</tr>  
			</tbody> 
			</table>
			</div>
            
            <!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Comment</th> 
    				<th>Posted by</th> 
    				<th>Posted On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td></td> 
    				<td></td> 
    				<td></td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		<article class="module width_quarter">
			<header><h3>Messages</h3></header>
			<div class="message_list">
				<div class="module_content">
                <?php
				$dq = mysql_query("SELECT * from contact_query"); 
				while($gf=mysql_fetch_assoc($dq))
				{
				 echo '<div class="message">';
				 echo '<p>'; 
				 echo $gf['query'];
				 echo '</p>';
			     echo '<p><strong>';
				 echo $gf['email_id'];
				 echo '</strong></p>';
				 echo '</div>';
									}
				?>
                </div>
			</div>
			<footer>
				<form class="post_message">
					<input type="text" value="Message" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
					<input type="submit" class="btn_post_message" value=""/>
				</form>
			</footer>
		</article><!-- end of messages article -->
		
		<div class="clear"></div>
					
	   <div class="spacer"></div>
	</section>