$query_onepost="select id1 from khairjhitikalan where user_id='$mid'";
$result_onepost = mysqli_query($conn, $query_onepost);
$onepost_row=mysqli_fetch_assoc($result_onepost);
$post_id_one=$onepost_row['id1'];
$query_allpost="select id1 from post where user_id='$mid'";
$result_allpost = mysqli_query($conn, $query_allpost);
$allpost_row=mysqli_fetch_assoc($result_allpost);
$post_id_all=$allpost_row['id1'];












$notify_query = "select user_seen from notification where owner_id=$mid";
$result_notify = mysqli_query($conn, $sql_notify);
$row_notify = mysqli_fetch_assoc($result_notify);
if($row_notify['user_seen'] == 1){
	$notification_icon="notified.png";
}
else{
	$notification_icon="notification.png";
}






$sql_notify = "SELECT id FROM notification WHERE owner_id='$mid' AND user_seen='0'";
$result_notify = mysqli_query($conn, $sql_notify);
$rowcount_notify=mysqli_num_rows($result_notify);
if($rowcount_notify == 0){
	$notification_icon="notified.png";
}
else{
	$notification_icon="notification.png";
}