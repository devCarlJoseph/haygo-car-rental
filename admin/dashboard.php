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
				</li><li class="sidebar-item">
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
                <div class="row mb-2 mb-xl-3">
                    <div class="col-auto d-none d-sm-block">
                        <h3>Dashboard</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                        <div class="card flex-fill" style="background: #FDDDCE;">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-2" style="font-size: 1.875rem;">100</h3>
                                        <p class="mb-2" style="font-size: 1.125rem;">Total Cars</p>
                                        <div class="mb-0">
                                            <span class="badge badge-subtle-success me-2">
                                                +5.35%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat" style="background: #FFB08C;">
                                            <i class="fa-solid fa-car" style="color: #985434;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                        <div class="card flex-fill" style="background: #FFF2ED;">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-2" style="font-size: 1.875rem;">100</h3>
                                        <p class="mb-2" style="font-size: 1.125rem;">Rented Cars</p>
                                        <div class="mb-0">
                                            <span class="badge badge-subtle-success me-2">
                                                +5.35%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat" style="background: #FFB08C;">
                                            <i class="fa-solid fa-car" style="color: #985434;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                        <div class="card flex-fill" style="background: #FFF2ED;">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-2" style="font-size: 1.875rem;">100</h3>
                                        <p class="mb-2" style="font-size: 1.125rem;">Revenue</p>
                                        <div class="mb-0">
                                            <span class="badge badge-subtle-danger me-2">
                                                +5.35%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat" style="background: #FFB08C;">
                                            <i class="fa-solid fa-car" style="color: #985434;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                        <div class="card flex-fill" style="background: #FFF2ED;">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h3 class="mb-2" style="font-size: 1.875rem;">100</h3>
                                        <p class="mb-2" style="font-size: 1.125rem;">Total Bookings</p>
                                        <div class="mb-0">
                                            <span class="badge badge-subtle-success me-2">
                                                +5.35%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                    <div class="d-inline-block ms-3">
                                        <div class="stat" style="background: #FFB08C;">
                                            <i class="fa-solid fa-car" style="color: #985434;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8 d-flex">
                        <div class="card flex-fill w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0" style="color: #FFC3A8;">Sales / Revenue</h5>
                            </div>
                            <div class="card-body d-flex w-100">
                                <div class="align-self-center chart chart-lg">
                                    <canvas id="chartjs-dashboard-bar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex">
                        <div class="card flex-fill w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0" style="color: #FFC3A8;">Activities</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <img src="img/avatars/avatar-5.jpg" width="36" height="36"
                                        class="rounded-circle me-2" />
                                    <div class="flex-grow-1">
                                        <small class="float-end">5m ago</small>
                                        <strong>Chat with Carl</strong> and
                                        <strong>Jerreh</strong><br />
                                        <small class="text-muted">Today 7:51 pm</small><br />
                                    </div>
                                </div>

                                <hr />

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-4 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="card-actions float-end">
                                    <div class="dropdown position-relative">
                                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <i class="align-middle" data-lucide="more-horizontal"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0" style="color: #FFC3A8;">Calendar</h5>
                            </div>
                            <div class="card-body d-flex">
                                <div class="align-self-center w-100">
                                    <div class="chart">
                                        <div id="calendar-dashboard"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 d-none d-xl-flex">
                        <div class="card flex-fill w-100">
                            <div class="card-header">
                                <div class="card-actions float-end">
                                    <div class="dropdown position-relative">
                                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <i class="align-middle" data-lucide="more-horizontal"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0" style="color: #FFC3A8;">Montly sales</h5>
                            </div>
                            <div class="card-body d-flex">
                                <div class="align-self-center w-100">
                                    <div class="py-3">
                                        <div class="chart chart-xs">
                                            <canvas id="chartjs-dashboard-pie"></canvas>
                                        </div>
                                    </div>

                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th style="color: #FFA77E;">Source</th>
                                                <th class="text-end" style="color: #FFA77E;">Revenue</th>
                                                <th class="text-end" style="color: #FFA77E;">Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="fas fa-square-full text-primary"></i>
                                                    Honda
                                                </td>
                                                <td class="text-end">$ 2602</td>
                                                <td class="text-end text-success">+43%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fas fa-square-full text-warning"></i>
                                                    Toyota
                                                </td>
                                                <td class="text-end">$ 1253</td>
                                                <td class="text-end text-success">+13%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fas fa-square-full text-danger"></i>
                                                    Mitubishi
                                                </td>
                                                <td class="text-end">$ 541</td>
                                                <td class="text-end text-success">+24%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <i class="fas fa-square-full text-dark"></i> Other
                                                </td>
                                                <td class="text-end">$ 1465</td>
                                                <td class="text-end text-success">+11%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-4 d-flex">
                        <div class="card flex-fill w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0" style="color: #FFC3A8;">Appointments</h5>
                            </div>
                            <div class="card-body">
                                <ul class="timeline">
                                    <li class="timeline-item">
                                        <strong>Chat with Carl and Jerreh</strong>
                                        <span class="float-end text-muted text-sm">30m ago</span>
                                        <p>
                                            Nam pretium turpis et arcu. Duis arcu tortor, suscipit
                                            eget, imperdiet nec, imperdiet iaculis, ipsum. Sed
                                            aliquam ultrices mauris...
                                        </p>
                                    </li>
                                    <li class="timeline-item">
                                        <strong>Chat with Carl and Jerreh</strong>
                                        <span class="float-end text-muted text-sm">2h ago</span>
                                        <p>
                                            Sed aliquam ultrices mauris. Integer ante arcu,
                                            accumsan a, consectetuer eget, posuere ut, mauris.
                                            Praesent adipiscing. Phasellus ullamcorper ipsum
                                            rutrum nunc...
                                        </p>
                                    </li>
                                    <li class="timeline-item">
                                        <strong>Chat with Carl and Jerreh</strong>
                                        <span class="float-end text-muted text-sm">3h ago</span>
                                        <p>
                                            Curabitur ligula sapien, tincidunt non, euismod vitae,
                                            posuere imperdiet, leo. Maecenas malesuada...
                                        </p>
                                    </li>
                                    <li class="timeline-item">
                                        <strong>Chat with Carl and Jerreh</strong>
                                        <span class="float-end text-muted text-sm">30m ago</span>
                                        <p>
                                            Nam pretium turpis et arcu. Duis arcu tortor, suscipit
                                            eget, imperdiet nec, imperdiet iaculis, ipsum...
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0" style="color: #FFC3A8;">Ambasador</h5>
                    </div>
                    <div style="height: 27.563rem;">

                    </div>
                </div>
            </div>
        </main>

        <?php require_once 'footer.php'; ?>
    </div>
</div>
<script src="../src/assets/js/admin.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar"), {
            type: "bar",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                ],
                datasets: [
                    {
                        label: "Last year",
                        backgroundColor: "#FD690080",
                        borderColor: "#FD690080",
                        hoverBackgroundColor: "#FD690080",
                        hoverBorderColor: "#FD690080",
                        data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                        barPercentage: 0.325,
                        categoryPercentage: 0.5,
                    },
                    {
                        label: "This year",
                        backgroundColor: "#FDB98980",
                        borderColor: "#FDB98980",
                        hoverBackgroundColor: "#FDB98980",
                        hoverBorderColor: "#FDB98980",
                        data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
                        barPercentage: 0.325,
                        categoryPercentage: 0.5,
                    },
                ],
            },
            options: {
                maintainAspectRatio: false,
                cornerRadius: 15,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [
                        {
                            gridLines: {
                                display: false,
                            },
                            ticks: {
                                stepSize: 20,
                            },
                            stacked: true,
                        },
                    ],
                    xAxes: [
                        {
                            gridLines: {
                                color: "transparent",
                            },
                            stacked: true,
                        },
                    ],
                },
            },
        });
    });
</script>
<script>
    // Workaround for theme switch re-initialization issue
    var isTempusDominusInitialized = false;
    document.addEventListener("DOMContentLoaded", function () {
        if (isTempusDominusInitialized) {
            return;
        }
        isTempusDominusInitialized = true;
        new tempusDominus.TempusDominus(
            document.getElementById("calendar-dashboard"),
            {
                display: {
                    inline: true,
                    components: {
                        clock: false,
                        hours: false,
                        minutes: false,
                    },
                },
            }
        );
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: "pie",
            data: {
                labels: ["Direct", "Affiliate", "E-mail", "Other"],
                datasets: [
                    {
                        data: [2602, 1253, 541, 1465],
                        backgroundColor: [
                            window.cssVariables.primary,
                            window.cssVariables.warning,
                            window.cssVariables.danger,
                            "#E8EAED",
                        ],
                    },
                ],
            },
            options: {
                responsive: !window.MSInputMethodContext,
                maintainAspectRatio: false,
                cutoutPercentage: 70,
                legend: {
                    display: false,
                },
                elements: {
                    arc: {
                        borderWidth: 5,
                        borderColor: window.cssVariables.secondaryBg,
                    },
                },
            },
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        $("#datatables-dashboard-projects").DataTable({
            destroy: true,
            pageLength: 6,
            lengthChange: false,
            bFilter: false,
            autoWidth: false,
        });
    });
</script>
</body>

</html>