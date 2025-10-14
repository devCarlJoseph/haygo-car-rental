<?php 
    require_once 'header.php';
?>

<div class="wrapper" style="background: #EBE7E4;">
	<nav id="sidebar" class="sidebar" style="background: #AB8B7D">
		<div class="sidebar-content js-simplebar" style="background: #AB8B7D">
			<a class="sidebar-brand" href="/">
				<img src="../src/assets/images/logodash.png" style="width: 3.813rem; height: 2.438rem;">
			</a>

			<ul class="sidebar-nav mt-3">
				<li class="sidebar-item active">
					<a href="dashboard.php" class="sidebar-link">
						<i class="align-middle" data-lucide="sliders"></i>
						<span class="align-middle" style="color: #FDE9DF;">Dashboards</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="customer.php" class="sidebar-link">
						<i class="align-middle" data-lucide="users"></i>
						<span class="align-middle" style="color: #FDE9DF;">Customers</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="fleets.php" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Fleets</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="booking.php" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Bookings</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="transaction.php" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Transactions</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="calendar.php" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Calendar</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="task.php" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Task</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="invoice.php" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Invoice</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="main">
		<nav class="navbar navbar-expand navbar-bg" style="height: 4.188rem; backgroud: #FFFEFD;">
            <a class="sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav navbar-align ">
                    <li class="nav-item dropdown">
                        <img src="../src/assets/images/admin_pp.jpg" class="img-fluid rounded-circle me-1 mt-n2 mb-n2"
                            width="40" height="40" />
                        <span style="margin-right: 1rem;">Admin Carl</span>
                    </li>
                </ul>
            </div>
            <div>
                <button class="border border-none text-white "
                    style=" margin-bottom: 0.2rem; width: 3.9rem; height: 1.7rem; font-size: 0.725rem; background: #E99670; border-radius: 5px;"><a
                        href="../index.php" style="text-decoration: none; color: white;">Sign
                        Out</a></button>
            </div>
        </nav>
		<main class="content">
			<div class="container-fluid p-0">

				<h1 class="h3 mb-3" style="color: #FFA77E">Calendar</h1>

				<div class="card">
					<div class="card-body">
						<div id="fullcalendar"></div>
					</div>
				</div>

			</div>
		</main>


		<?php require_once 'footer.php'; ?>
	</div>
</div>


<script src="../src/assets/js/app.js"></script>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		var calendarEl = document.getElementById('fullcalendar');

		var calendar = new FullCalendar.Calendar(calendarEl, {
			themeSystem: 'bootstrap',
			initialView: 'dayGridMonth',
			initialDate: '2024-01-01',
			headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},

			events: [
				{ title: 'All Day Event', start: '2024-01-01', color: '#4C9BFF', textColor: '#FFFFFF' },
				{ title: 'Long Event', start: '2024-01-07', end: '2024-01-10', color: '#FFBA9A', textColor: '#000000' },
				{ groupId: '999', title: 'Repeating Event', start: '2024-01-09T16:00:00', color: '#FF4C4C', textColor: '#FFFFFF' },
				{ groupId: '999', title: 'Repeating Event', start: '2024-01-16T16:00:00', color: '#FF4C4C', textColor: '#FFFFFF' },
				{ title: 'Conference', start: '2024-01-11', end: '2024-01-13', color: '#FFBA9A', textColor: '#000000' },
				{ title: 'Meeting', start: '2024-01-12T10:30:00', end: '2024-01-12T12:30:00', color: '#FF4C4C', textColor: '#FFFFFF' },
				{ title: 'Lunch', start: '2024-01-12T12:00:00', color: '#4C9BFF', textColor: '#FFFFFF' },
				{ title: 'Meeting', start: '2024-01-12T14:30:00', color: '#FF4C4C', textColor: '#FFFFFF' },
				{ title: 'Birthday Party', start: '2024-01-13T07:00:00', color: '#FFBA9A', textColor: '#000000' },
				{ title: 'Click for Google', url: 'http://google.com/', start: '2024-01-28', color: '#4C9BFF', textColor: '#FFFFFF' }
			]
		});

		setTimeout(function () {
			calendar.render();
		}, 250);
	});

</script>

</body>
</html>