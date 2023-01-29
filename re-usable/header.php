<header>
	<div class="header">
		<img src="https://www.pngkey.com/png/full/208-2088636_news-amp-events-report-icon-black-png-newspaper.png" style="width: 72px;
            margin: 0px 12px; height: 45px;
            " />

		<div class="header-right">
			<?php
			if(isset($_SESSION['role']) && $_SESSION['role'] == '1') {
			?>
				<a href="../HTMLfiles/AdminDashboard.php">Dashboard</a>
			<?php
			}
			?>
			<a class="active" href="../HTMLfiles/Homepage.php">Home</a>
<<<<<<< HEAD
			<a href="../HTMLfiles/About us.html">About Us</a>
			<a href="../backend/logout.php">Logout</a>
=======
			<a href="../HTMLfiles/About us.php">About Us</a>
				<a href="../HTMLfiles/Login.php">Log in</a>
				<a href="../HTMLfiles/Register.php">Register</a>
			
>>>>>>> a3579c99d3dfc938e233068f31cdda3081137fea
		</div>
	</div>
</header>