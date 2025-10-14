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

				<h1 class="h3 mb-3" style="color: #FFA77E">Customers</h1>

				<div class="row">
					<div class="col-xl-8">
						<div class="card" style="width: 74rem;">
							<div class="card-body">
								<div class="row mb-3">
									<div class="col-md-6 mb-2 mb-md-0">
										<div class="input-group input-group-search">
											<input type="text" class="form-control" id="datatables-customers-search"
												placeholder="Search customers…">
											<button class="btn" type="button">
												<i class="align-middle" data-lucide="search"></i>
											</button>
										</div>
									</div>
								</div>
								<table id="datatables-customers" class="table w-100" style="width: 8rem;">
									<thead>
										<tr>
											<th class="text-start">Customer ID</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th class="text-center">Contact Number</th>
											<th>Email Address</th>
											<th class="text-start">Date of Birth</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-start">1</td>
											<td>Benhard</td>
											<td>Awanon</td>
											<td class="text-start">0912 345 6789</td>
											<td>bernardawanon@gmail.com</td>
											<td class="text-start">10 BC</td>
											<td class="text-center">
												<button
													style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete</button>
											</td>
										</tr>
										<tr>
											<td class="text-start">1</td>
											<td>Benhard</td>
											<td>Awanon</td>
											<td class="text-start">0912 345 6789</td>
											<td>bernardawanon@gmail.com</td>
											<td class="text-start">10 BC</td>
											<td class="text-center">

												<button
													style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete</button>
											</td>
										</tr>
										<tr>
											<td class="text-start">1</td>
											<td>Benhard</td>
											<td>Awanon</td>
											<td class="text-start">0912 345 6789</td>
											<td>bernardawanon@gmail.com</td>
											<td class="text-start">10 BC</td>
											<td class="text-center">

												<button
													style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete</button>
											</td>
										</tr>
										<tr>
											<td class="text-start">1</td>
											<td>Benhard</td>
											<td>Awanon</td>
											<td class="text-start">0912 345 6789</td>
											<td>bernardawanon@gmail.com</td>
											<td class="text-start">10 BC</td>
											<td class="text-center">

												<button
													style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete</button>
											</td>
										</tr>
										<tr>
											<td class="text-start">1</td>
											<td>Benhard</td>
											<td>Awanon</td>
											<td class="text-start">0912 345 6789</td>
											<td>bernardawanon@gmail.com</td>
											<td class="text-start">10 BC</td>
											<td class="text-center">

												<button
													style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete</button>
											</td>
										</tr>
										<tr>
											<td class="text-start">1</td>
											<td>Benhard</td>
											<td>Awanon</td>
											<td class="text-start">0912 345 6789</td>
											<td>bernardawanon@gmail.com</td>
											<td class="text-start">10 BC</td>
											<td class="text-center">

												<button
													style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete</button>
											</td>
										</tr>
										<tr>
											<td class="text-start">1</td>
											<td>Benhard</td>
											<td>Awanon</td>
											<td class="text-start">0912 345 6789</td>
											<td>bernardawanon@gmail.com</td>
											<td class="text-start">10 BC</td>
											<td class="text-center">

												<button
													style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete</button>
											</td>
										</tr>
										<tr>
											<td class="text-start">1</td>
											<td>Benhard</td>
											<td>Awanon</td>
											<td class="text-start">0912 345 6789</td>
											<td>bernardawanon@gmail.com</td>
											<td class="text-start">10 BC</td>
											<td class="text-center">

												<button
													style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete</button>
											</td>
										</tr>
										<tr>
											<td class="text-start">1</td>
											<td>Benhard</td>
											<td>Awanon</td>
											<td class="text-start">0912 345 6789</td>
											<td>bernardawanon@gmail.com</td>
											<td class="text-start">10 BC</td>
											<td class="text-center">

												<button
													style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>
		</main>

		<main class="content">
			<div class="container-fluid p-0">

				<h1 class="h3 mb-3">Products</h1>

				<div class="card">
					<div class="card-body">
						<div class="row mb-3">
							<div class="col-md-6 col-xl-4 mb-2 mb-md-0">
								<div class="input-group input-group-search">
									<input type="text" class="form-control" id="datatables-products-search"
										placeholder="Search products…">
									<button class="btn" type="button">
										<i class="align-middle" data-lucide="search"></i>
									</button>
								</div>
							</div>
							<div class="col-md-6 col-xl-8">
								<div class="text-sm-end">
									<button type="button" class="btn btn-light btn-lg me-2"><i
											data-lucide="download"></i> Export</button>
									<button type="button" class="btn btn-primary btn-lg"><i data-lucide="plus"></i> New
										Product</button>
								</div>
							</div>
						</div>
						<table id="datatables-products" class="table w-100">
							<thead>
								<tr>
									<th class="align-middle">
										Car ID
									</th>
									<th class="align-middle">Item Name</th>
									<th class="align-middle">Price</th>
									<th class="align-middle">Stock</th>
									<th class="align-middle">Category</th>
									<th class="align-middle" class="align-middle">Rating</th>
									<th class="align-middle text-end">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-9.png" class="mw-100 mh-100"
												alt="Apple iPad Pro">
										</div>
										<p class="mb-0">
											<strong>Apple iPad Pro</strong><br />
											<span class="text-muted">Silver</span>
										</p>
									</td>
									<td>$ 1,399.00</td>
									<td>48</td>
									<td>Tablets</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.6 <span class="text-muted">out
											of 55 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-8.png" class="mw-100 mh-100"
												alt="Apple iPad Pro">
										</div>
										<p class="d-inline-block mb-0">
											<strong>Apple iPad Pro</strong><br />
											<span class="text-muted">Space Gray</span>
										</p>
									</td>
									<td>$ 1,399.00</td>
									<td>48</td>
									<td>Tablets</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.3 <span class="text-muted">out
											of 25 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-4.png" class="mw-100 mh-100"
												alt="Apple iPhone 15 Pro Max">
										</div>
										<p class="d-inline-block mb-0">
											<strong>Apple iPhone 15 Pro Max</strong><br />
											<span class="text-muted">Blue Titanium</span>
										</p>
									</td>
									<td>$ 1499.00</td>
									<td>38</td>
									<td>Smartphones</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.6 <span class="text-muted">out
											of 40 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-3.png" class="mw-100 mh-100"
												alt="Apple iPhone 15 Pro Max">
										</div>
										<p class="d-inline-block mb-0">
											<strong>Apple iPhone 15 Pro Max</strong><br />
											<span class="text-muted">Natural Titanium</span>
										</p>
									</td>
									<td>$ 1499.00</td>
									<td>30</td>
									<td>Smartphones</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.8 <span class="text-muted">out
											of 50 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-5.png" class="mw-100 mh-100"
												alt="Apple iPhone 15 Pro Max">
										</div>
										<p class="d-inline-block mb-0">
											<strong>Apple iPhone 15 Pro Max</strong><br />
											<span class="text-muted">White Titanium</span>
										</p>
									</td>
									<td>$ 1499.00</td>
									<td>45</td>
									<td>Smartphones</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.9 <span class="text-muted">out
											of 60 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-7.png" class="mw-100 mh-100"
												alt="Apple MacBook Pro 16\" ">
            </div>
            <p class=" d-inline-block mb-0 ">
              <strong>Apple MacBook Pro 16" </strong><br />
											<span class="text-muted">Silver</span>
											</p>
									</td>
									<td>$ 2,399.00</td>
									<td>55</td>
									<td>Notebooks</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.7 <span class="text-muted">out
											of 45 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-6.png" class="mw-100 mh-100"
												alt="Apple MacBook Pro 16\" ">
            </div>
            <p class=" d-inline-block mb-0 ">
              <strong>Apple MacBook Pro 16" </strong><br />
											<span class="text-muted">Space Black</span>
											</p>
									</td>
									<td>$ 2,399.00</td>
									<td>50</td>
									<td>Notebooks</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.4 <span class="text-muted">out
											of 30 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-11.png" class="mw-100 mh-100"
												alt="Apple Watch SE">
										</div>
										<p class="d-inline-block mb-0">
											<strong>Apple Watch SE</strong><br />
											<span class="text-muted">Midnight</span>
										</p>
									</td>
									<td>$ 299.00</td>
									<td>49</td>
									<td>Smartwatches</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.7 <span class="text-muted">out
											of 40 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-12.png" class="mw-100 mh-100"
												alt="Apple Watch SE">
										</div>
										<p class="d-inline-block mb-0">
											<strong>Apple Watch SE</strong><br />
											<span class="text-muted">Silver</span>
										</p>
									</td>
									<td>$ 299.00</td>
									<td>30</td>
									<td>Smartwatches</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.7 <span class="text-muted">out
											of 40 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-10.png" class="mw-100 mh-100"
												alt="Apple Watch SE">
										</div>
										<p class="d-inline-block mb-0">
											<strong>Apple Watch SE</strong><br />
											<span class="text-muted">Starlight</span>
										</p>
									</td>
									<td>$ 299.00</td>
									<td>54</td>
									<td>Smartwatches</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.5 <span class="text-muted">out
											of 35 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-1.png" class="mw-100 mh-100"
												alt="Apple Watch Series 9">
										</div>
										<p class="d-inline-block mb-0">
											<strong>Apple Watch Series 9</strong><br />
											<span class="text-muted">Midnight</span>
										</p>
									</td>
									<td>$ 349.00</td>
									<td>42</td>
									<td>Smartwatches</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.2 <span class="text-muted">out
											of 20 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4">
											<input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td class="d-flex align-items-center">
										<div
											class="p-2 rounded bg-body-tertiary d-flex justify-content-center align-items-center me-2 w-50px h-50px">
											<img src="img/products/product-2.png" class="mw-100 mh-100"
												alt="Apple Watch Series 9">
										</div>
										<p class="d-inline-block mb-0">
											<strong>Apple Watch Series 9</strong><br />
											<span class="text-muted">Starlight</span>
										</p>
									</td>
									<td>$ 349.00</td>
									<td>54</td>
									<td>Smartwatches</td>
									<td>
										<i class="fa-solid fa-star text-warning"></i> 4.5 <span class="text-muted">out
											of 35 Reviews</span>
									</td>
									<td class="text-end">
										<button type="button" class="btn btn-light">View</button>
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
		const table = $("#datatables-customers").DataTable({
			destroy: true,
			scrollX: true,
			autoWidth: false,
			responsive: true,
			order: [[0, "asc"]],
			columnDefs: [
				{ width: "7rem", targets: 0 },
				{ width: "8rem", targets: 1 },
				{ width: "8rem", targets: 2 },
				{ width: "10rem", targets: 3 },
				{ width: "15rem", targets: 4 },
				{ width: "8rem", targets: 5 },
				{ width: "10rem", targets: 6 }
			],
			layout: {
				topStart: null,
				topEnd: null,
				bottomStart: 'info',
				bottomEnd: 'paging'
			}
		});

		$("#datatables-customers-search").keyup(function () {
			table.search($(this).val()).draw();
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

</body>

</html>