
<?php
	if(!empty($_POST["forgot-password"])){
		$connect = mysqli_connect("localhost", "root", "", "mysimplephp");
		
		$condition = "";
		
		if(!empty($_POST["email"])) {
			if(!empty($condition)) {
				$condition = " and ";
			}
			$condition = " member_email = '" . $_POST["email"] . "'";
		}
		
		if(!empty($condition)) {
			$condition = " where " . $condition;
		}

		$sql = "Select * from signup " . $condition;
		$result = mysqli_query($connect,$sql);
		$user = mysqli_fetch_array($result);
		
		if(!empty($user)) {
			require_once("forgot-password-recovery-mail.php");
		} else {
			$error_message = 'No User Found';
		}
	}
?>