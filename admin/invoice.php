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

				<h1 class="h3 mb-3" style="color: #FFA77E">Invoice</h1>

				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body m-sm-3 m-md-5">
								<div class="mb-4">
									Hello <strong>Admin Carl</strong>,
									<br /> This is the receipt for a payment of customer Jane De Leon
								</div>

								<div class="row">
									<div class="col-md-6 text-md-right">
										<div class="text-muted">Payment Date</div>
										<strong>October 15, 2025 - 03:45 pm</strong>
									</div>
								</div>

								<hr class="my-4" />

								<div class="row mb-4">
									<div class="col-md-6">
										<div class="text-muted">Client</div>
										<strong>
											Jane De Leon
										</strong>
										<p>
											Manalili, Cebu <br> 6017 <br> Philippines <br>
											<a href="#">
												janedeleon@gmail.com
											</a>
										</p>
									</div>
									<div class="col-md-6 text-md-right">
										<div class="text-muted">Payment To</div>
										<strong>
											Hay Go Car Rental
										</strong>
										<p>
											Cordova Cebu <br> 6017 <br> Philippines <br>
											<a href="#">
												haygocar@gmail.com
											</a>
										</p>
									</div>
								</div>

								<table class="table table-sm">
									<thead>
										<tr>
											<th>Description</th>
											<th>Quantity</th>
											<th class="text-end">Amount</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Toyota New Yaris</td>
											<td>1</td>
											<td class="text-end">$1249.00</td>
										</tr>
										<tr>
											<td>Additional Service</td>
											<td>1</td>
											<td class="text-end">$124.00</td>
										</tr>
										<tr>
											<th>&nbsp;</th>
											<th>Subtotal </th>
											<th class="text-end">$1373.00</th>
										</tr>
										<tr>
											<th>&nbsp;</th>
											<th>Discount </th>
											<th class="text-end">5%</th>
										</tr>
										<tr>
											<th>&nbsp;</th>
											<th>Total </th>
											<th class="text-end">$1304.00</th>
										</tr>
									</tbody>
								</table>

								<div class="text-center">
									<a href="#" class="btn btn-primary border border-none mt-3" style="background: #FFA77E">
										Print this receipt
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</main>

		<?php require_once 'footer.php'; ?>
	</div>
</div>

<script src="../src/assets/js/app.js"></script>

</body>

</html>