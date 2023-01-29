<?php
        require_once '../backend/dbh.class.php';
    ?>
<header>
	<div class="header">
		<img src="https://www.pngkey.com/png/full/208-2088636_news-amp-events-report-icon-black-png-newspaper.png" style="width: 72px;
            margin: 0px 12px; height: 45px;
            " />

		<div class="header-right">
			<?php
			if (isset($_SESSION['role']) && $_SESSION['role'] != '0') {
			?>
				<a href="../HTMLfiles/adminPage.php">Dashboard</a>
			<?php
			}
			?>
			<a class="active" href="../HTMLfiles/Homepage.php">Home</a>
			<a href="../HTMLfiles/About us.php">About Us</a>
				<a href="../HTMLfiles/Login.php">Log in</a>
				<a href="../HTMLfiles/Register.php">Register</a>
			
		</div>
	</div>
</header>