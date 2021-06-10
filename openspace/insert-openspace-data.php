<?php

// Setting up time zone.
date_default_timezone_set('Asia/Calcutta');
$dt1=date("d-m-Y");
$dt2=date("H:i A");

// When user submitted a comment then this will insert the data into comments table.
if(isset($_POST['user_data'])){
	$comment=$_POST['user_data'];
	$sql=mysqli_query($conn, "select user_id from post where post_id='$id'");
	$row=mysqli_fetch_assoc($sql);
	$user_id = $row['user_id'];
	$insert=mysqli_query($conn,"insert into comments (comment,post_id,user_id,date2,date1) values('$comment','$id','$user_id','$dt2','$dt1')");
	mysqli_query($conn, "insert into notification(user_id,post_id,owner_id,type,date1,date2) values ('$mid', '$id', '$user_id', 'commented on','$dt2','$dt1')");
	$select=mysqli_query($conn,"select comment,c.user_id,date1,date2,user_name from comments c inner join user u on c.user_id=u.user_id where comment='$comment' and date2='$dt2' and date1='$dt1' and post_id='$id'");
	if($row=mysqli_fetch_array($select)){
		$name=$row['user_name'];
		$comment=$row['comment'];
		$time=$row['date2'];
		$time1=$row['date1'];
		$pro = $row["user_id"];
	?>
		<div class="post" id="post">
			<div class="user-info">
				<div class="user-image">
					<img src="../sys_images/onmock-logo.jpg"/>
				</div>
				<div class="user-name">
					<h5>
						Manish Patel<br/>
						Date
					</h5>
				</div>
			</div>
			<hr/>
			<div class="post-info">
				<p>
					Test data.
				</p>
			</div>
		</div>
	<?php
	}
	exit;
}
?>