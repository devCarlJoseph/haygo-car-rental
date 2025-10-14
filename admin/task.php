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

				<h1 class="h3 mb-3">Task List</h1>

				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<h2 class="card-title">Upcoming</h2>
							</div>
							<div class="col-6">
								<div class="text-sm-end">
									<button type="button" class="btn text-white" data-bs-toggle="modal"
										data-bs-target="#taskModal" style="background: #FFA77E">><i data-lucide="plus"></i> New Task</button>
								</div>
							</div>
						</div>
						<table class="table w-100">
							<thead>
								<tr>
									<th class="align-middle w-25px">
										<div class="form-check fs-4"> <input class="form-check-input tasks-check-all"
												type="checkbox" id="tasks-check-all"> <label class="form-check-label"
												for="tasks-check-all"></label> </div>
									</th>
									<th class="align-middle w-50">Name</th>
									<th class="align-middle d-none d-xl-table-cell">Assigned To</th>
									<th class="align-middle d-none d-xxl-table-cell">Due Date</th>
									<th class="align-middle">Priority</th>
									<th class="align-middle text-end">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-check fs-4"> <input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td><strong>Improve email marketing strategy</strong></td>
									<td class="d-none d-xl-table-cell">
										<img src="img/avatars/avatar-5.jpg" class="rounded-circle me-1"
											alt="Ashley Briggs" width="32" height="32"> Ashley Briggs
									</td>
									<td class="d-none d-xxl-table-cell">August 1, 2023</td>
									<td><span class="badge badge-subtle-warning">Medium</span></td>
									<td class="text-end"> <button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4"> <input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td><strong>Develop new product video</strong></td>
									<td class="d-none d-xl-table-cell">
										<img src="img/avatars/avatar-2.jpg" class="rounded-circle me-1"
											alt="Carl Jenkins" width="32" height="32"> Carl Jenkins
									</td>
									<td class="d-none d-xxl-table-cell">July 15, 2023</td>
									<td><span class="badge badge-subtle-danger">High</span></td>
									<td class="text-end"> <button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4"> <input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td><strong>Conduct user interviews for new feature</strong></td>
									<td class="d-none d-xl-table-cell">
										<img src="img/avatars/avatar-3.jpg" class="rounded-circle me-1"
											alt="Bertha Martin" width="32" height="32"> Bertha Martin
									</td>
									<td class="d-none d-xxl-table-cell">June 20, 2023</td>
									<td><span class="badge badge-subtle-success">Low</span></td>
									<td class="text-end"> <button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<h2 class="card-title">In Progress</h2>
							</div>
							<div class="col-6">
								<div class="text-sm-end">
									<button type="button" class="btn text-white" data-bs-toggle="modal"
										data-bs-target="#taskModal" style="background: #FFA77E">><i data-lucide="plus"></i> New Task</button>
								</div>
							</div>
						</div>
						<table class="table w-100">
							<thead>
								<tr>
									<th class="align-middle w-25px">
										<div class="form-check fs-4"> <input class="form-check-input tasks-check-all"
												type="checkbox" id="tasks-check-all"> <label class="form-check-label"
												for="tasks-check-all"></label> </div>
									</th>
									<th class="align-middle w-50">Name</th>
									<th class="align-middle d-none d-xl-table-cell">Assigned To</th>
									<th class="align-middle d-none d-xxl-table-cell">Due Date</th>
									<th class="align-middle">Priority</th>
									<th class="align-middle text-end">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-check fs-4"> <input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td><strong>Implement new analytics tracking</strong></td>
									<td class="d-none d-xl-table-cell">
										<img src="img/avatars/avatar-2.jpg" class="rounded-circle me-1"
											alt="Carl Jenkins" width="32" height="32"> Carl Jenkins
									</td>
									<td class="d-none d-xxl-table-cell">July 1, 2023</td>
									<td><span class="badge badge-subtle-success">Low</span></td>
									<td class="text-end"> <button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4"> <input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td><strong>Design new marketing campaign</strong></td>
									<td class="d-none d-xl-table-cell">
										<img src="img/avatars/avatar-3.jpg" class="rounded-circle me-1"
											alt="Bertha Martin" width="32" height="32"> Bertha Martin
									</td>
									<td class="d-none d-xxl-table-cell">August 15, 2023</td>
									<td><span class="badge badge-subtle-danger">High</span></td>
									<td class="text-end"> <button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4"> <input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td><strong>Conduct A/B testing on landing page</strong></td>
									<td class="d-none d-xl-table-cell">
										<img src="img/avatars/avatar-5.jpg" class="rounded-circle me-1"
											alt="Ashley Briggs" width="32" height="32"> Ashley Briggs
									</td>
									<td class="d-none d-xxl-table-cell">June 30, 2023</td>
									<td><span class="badge badge-subtle-success">Low</span></td>
									<td class="text-end"> <button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-6">
								<h2 class="card-title">Completed</h2>
							</div>
							<div class="col-6">
								<div class="text-sm-end">
									<button type="button" class="btn text-white" data-bs-toggle="modal"
										data-bs-target="#taskModal" style="background: #FFA77E"><i data-lucide="plus"></i> New Task</button>
								</div>
							</div>
						</div>
						<table class="table table-responsive w-100">
							<thead>
								<tr>
									<th class="align-middle w-25px">
										<div class="form-check fs-4"> <input class="form-check-input tasks-check-all"
												type="checkbox" id="tasks-check-all"> <label class="form-check-label"
												for="tasks-check-all"></label> </div>
									</th>
									<th class="align-middle w-50">Name</th>
									<th class="align-middle d-none d-xl-table-cell">Assigned To</th>
									<th class="align-middle d-none d-xxl-table-cell">Due Date</th>
									<th class="align-middle">Priority</th>
									<th class="align-middle text-end">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-check fs-4"> <input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td><strong>Optimize website performance</strong></td>
									<td class="d-none d-xl-table-cell">
										<img src="img/avatars/avatar-3.jpg" class="rounded-circle me-1"
											alt="Bertha Martin" width="32" height="32"> Bertha Martin
									</td>
									<td class="d-none d-xxl-table-cell">June 15, 2023</td>
									<td><span class="badge badge-subtle-success">Low</span></td>
									<td class="text-end"> <button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4"> <input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td><strong>Develop mobile app prototype</strong></td>
									<td class="d-none d-xl-table-cell">
										<img src="img/avatars/avatar-5.jpg" class="rounded-circle me-1"
											alt="Ashley Briggs" width="32" height="32"> Ashley Briggs
									</td>
									<td class="d-none d-xxl-table-cell">August 10, 2023</td>
									<td><span class="badge badge-subtle-warning">Medium</span></td>
									<td class="text-end"> <button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check fs-4"> <input class="form-check-input" type="checkbox">
											<label class="form-check-label"></label>
										</div>
									</td>
									<td><strong>Conduct user research interviews</strong></td>
									<td class="d-none d-xl-table-cell">
										<img src="img/avatars/avatar-5.jpg" class="rounded-circle me-1"
											alt="Ashley Briggs" width="32" height="32"> Ashley Briggs
									</td>
									<td class="d-none d-xxl-table-cell">July 20, 2023</td>
									<td><span class="badge badge-subtle-success">Low</span></td>
									<td class="text-end"> <button
											style="width: 4rem; height: 1.8rem; border-radius: 0.5rem; border: none; background: #F3B193; color: white">Delete
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="modal fade" id="taskModal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add task</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body mx-3">
								<div class="mb-3">
									<label class="form-label">Name</label>
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="mb-3">
									<label class="form-label">Assigned To</label>
									<select class="form-select">
										<option value="1" selected>Ashley Briggs</option>
										<option value="2">Stacie Hall</option>
										<option value="3">Bertha Martin</option>
										<option value="4">Carl Jenkins</option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label">Priority</label>
									<select class="form-select">
										<option value="low" selected>Low</option>
										<option value="medium">Medium</option>
										<option value="high">High</option>
									</select>
								</div>
								<div class="mb-3">
									<label class="form-label">Description</label>
									<div id="quill-editor"></div>
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
								<button class="btn btn-primary" data-bs-dismiss="modal"><i data-lucide="save"></i>
									Save</button>
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

<script>
	document.addEventListener("DOMContentLoaded", function () {
		$(".tasks-check-all").click(function () {
			if ($(this).prop("checked")) {
				$(this).closest('.table').find("input[type='checkbox']").prop("checked", true);
			} else {
				$(this).closest('.table').find("input[type='checkbox']").prop("checked", false);
			}
		});
	});
</script>

<script>
	// Workaround for theme switch re-initialization issue
	var isQuillInitialized = false;
	document.addEventListener("DOMContentLoaded", function () {
		if (isQuillInitialized) {
			return;
		}
		isQuillInitialized = true;
		var editor = new Quill("#quill-editor", {
			placeholder: "Message",
			theme: "snow"
		});
	});
</script>

</body>

</html>