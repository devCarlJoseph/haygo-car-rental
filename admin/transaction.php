<?php 
    require_once 'header.php';
?>

<div class="wrapper" style="background: #EBE7E4;">
	<nav id="sidebar" class="sidebar">
		<div class="sidebar-content js-simplebar" style="background: #AB8B7D">
			<a class="sidebar-brand" href="/">
				<img src="../src/assets/images/logodash.png" style="width: 3.813rem; height: 2.438rem;">
			</a>

			<ul class="sidebar-nav mt-3">
				<li class="sidebar-item active">
					<a href="dashboard.html" class="sidebar-link">
						<i class="align-middle" data-lucide="sliders"></i>
						<span class="align-middle" style="color: #FDE9DF;">Dashboards</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="customers.html" class="sidebar-link">
						<i class="align-middle" data-lucide="users"></i>
						<span class="align-middle" style="color: #FDE9DF;">Customers</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="products.html" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Fleets</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="products.html" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Fleets</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="products.html" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Fleets</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="products.html" class="sidebar-link">
						<i class="align-middle" data-lucide="trello"></i>
						<span class="align-middle" style="color: #FDE9DF;">Fleets</span>
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
						href="log-in.php" style="text-decoration: none; color: white;">Sign
						Out</a></button>
			</div>
		</nav>
		<main class="content">
			<div class="container-fluid p-0">

				<h1 class="h3 mb-3">Transactions</h1>

				<div class="card">
					<div class="card-body">
						<div class="row mb-3">
							<div class="col-md-6 col-xl-4 mb-2 mb-md-0">
								<div class="input-group input-group-search">
									<input type="text" class="form-control" id="datatables-orders-search"
										placeholder="Search transactions…">
									<button class="btn" type="button">
										<i class="align-middle" data-lucide="search"></i>
									</button>
								</div>
							</div>
						</div>
						<table id="datatables-orders" class="table w-100">
							<thead>
								<tr>
									<th class="align-middle text-start" style="width: 8rem">Transaction ID</th>
									<th class="align-middle text-start">Booking ID</th>
									<th class="align-middle">Date</th>
									<th class="align-middle">Total</th>
									<th class="align-middle text-center">Payment Method</th>
									<th class="align-middle text-center">Payment Status</th>
									<th class="align-middle text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-start"><strong>1</strong></td>
									<td class="text-start">1</td>
									<td>July 5, 2023</td>
									<td>$350 USD</td>
									<td class="text-center"><i class="fa-brands fa-cc-mastercard"></i> Pay at Pick-up
									</td>
									<td class="text-center"><span class="badge badge-subtle-success">Paid</span></td>
									<td class="text-center">
										<button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Edit
										</button>
										<button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
							</tbody>
						</table>
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
		$("#datatables-orders").DataTable({
			destroy: true,
			responsive: true,
			order: [
				[1, "asc"]
			],
			pageLength: 10,
			columnDefs: [{
				targets: 0,
				orderable: false,
				width: "18px"
			},
			{
				targets: 6,
				orderable: false
			}
			],
			layout: {
				topStart: null,
				topEnd: null,
				bottomStart: 'info',
				bottomEnd: 'paging'
			}
		});
		$("#datatables-orders-check-all").click(function () {
			if ($(this).prop("checked")) {
				$("input[type='checkbox']").prop("checked", true);
			} else {
				$("input[type='checkbox']").prop("checked", false);
			}
		});
		$("#datatables-orders-search").keyup(function () {
			$("#datatables-orders").DataTable().search($(this).val()).draw();
		});

		const style = document.createElement("style");
		style.innerHTML = `
			/* Active page */
			.page-item.active .page-link {
			background-color: #E99670 !important;
			border-color: #E99670 !important;
			color: #fff !important;
			}

			/* Hover state */
			.page-link:hover {
			background-color: #F6C7B1 !important;
			color: #fff !important;
			}

			/* Default (non-active) */
			.page-link {
			color: #AB8B7D !important;
			}
		`;
		document.head.appendChild(style);
	});
</script>

</script>

</body>

</html>