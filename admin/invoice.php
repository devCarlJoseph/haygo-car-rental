<?php 
    require_once 'header.php';
?>
    <div class="wrapper">
      <nav id="sidebar" class="sidebar">
        <div class="sidebar-content js-simplebar">
          <a class="sidebar-brand" href="/">
            <span class="align-middle me-3">AppStack</span>
          </a>

          <ul class="sidebar-nav">
            <li class="sidebar-header">Navigation</li>
            <li class="sidebar-item active">
              <a href="dashboard.html" class="sidebar-link">
                <i class="align-middle" data-lucide="sliders"></i>
                <span class="align-middle">Dashboards</span>
                <span class="badge badge-sidebar-primary">5</span>
              </a>
            </li>
            <li class="sidebar-header">Management</li>
            <li class="sidebar-item">
              <a href="customers.html" class="sidebar-link">
                <i class="align-middle" data-lucide="users"></i>
                <span class="align-middle">Customers</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a href="products.html" class="sidebar-link">
                <i class="align-middle" data-lucide="trello"></i>
                <span class="align-middle">Products</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a
                data-bs-target="#ecommerce"
                data-bs-toggle="collapse"
                class="sidebar-link collapsed"
              >
                <i class="align-middle" data-lucide="shopping-bag"></i>
                <span class="align-middle">Orders</span>
              </a>
              <ul
                id="ecommerce"
                class="sidebar-dropdown list-unstyled collapse"
                data-bs-parent="#sidebar"
              >
                <li class="sidebar-item">
                  <a href="orders.html" class="sidebar-link">
                    Order List <span class="badge badge-sidebar-primary">90</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="invoice.html" class="sidebar-link">Invoice</a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a href="templates.html" class="sidebar-link">
                <i class="align-middle" data-lucide="layout"></i>
                <span class="align-middle">Design Template</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="main">
        <nav class="navbar navbar-expand navbar-bg">
          <a class="sidebar-toggle">
            <i class="hamburger align-self-center"></i>
          </a>

          <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
              <li class="nav-item dropdown">
                <a
                  class="nav-icon dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  data-bs-toggle="dropdown"
                >
                  <div class="position-relative">
                    <i
                      class="align-middle text-body"
                      data-lucide="bell-off"
                    ></i>
                  </div>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                  aria-labelledby="alertsDropdown"
                >
                  <div class="dropdown-menu-header">4 New Notifications</div>
                  <div class="list-group">
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-danger" data-lucide="alert-circle"></i>
                        </div>
                        <div class="col-10">
                          <div>Update completed</div>
                          <div class="text-muted small mt-1">
                            Restart server 12 to complete the update.
                          </div>
                          <div class="text-muted small mt-1">2h ago</div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-warning" data-lucide="bell"></i>
                        </div>
                        <div class="col-10">
                          <div>Lorem ipsum</div>
                          <div class="text-muted small mt-1">
                            Aliquam ex eros, imperdiet vulputate hendrerit et.
                          </div>
                          <div class="text-muted small mt-1">6h ago</div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-primary" data-lucide="home"></i>
                        </div>
                        <div class="col-10">
                          <div>Login from 192.186.1.1</div>
                          <div class="text-muted small mt-1">8h ago</div>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item">
                      <div class="row g-0 align-items-center">
                        <div class="col-2">
                          <i class="text-success" data-lucide="user-plus"></i>
                        </div>
                        <div class="col-10">
                          <div>New connection</div>
                          <div class="text-muted small mt-1">
                            Anna accepted your request.
                          </div>
                          <div class="text-muted small mt-1">12h ago</div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="dropdown-menu-footer">
                    <a href="#" class="text-muted">Show all notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-icon dropdown-toggle d-inline-block d-sm-none"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  <i class="align-middle" data-lucide="settings"></i>
                </a>

                <a
                  class="nav-link dropdown-toggle d-none d-sm-inline-block"
                  href="#"
                  data-bs-toggle="dropdown"
                >
                  <img
                    src="media_files/profile/avatar.jpg"
                    class="img-fluid rounded-circle me-1 mt-n2 mb-n2"
                    alt="Chris Wood"
                    width="40"
                    height="40"
                  />
                  <span>Mark Inoc</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item" href="/pages-profile"
                    ><i class="align-middle me-1" data-lucide="user"></i>
                    Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i class="align-middle me-1" data-lucide="pie-chart"></i>
                    Analytics</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/pages-settings"
                    >Settings & Privacy</a
                  >
                  <a class="dropdown-item" href="#">Help</a>
                  <a class="dropdown-item" href="#">Sign out</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3">Invoice</h1>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body m-sm-3 m-md-5">
                                <div class="mb-4">
                                    Hello <strong>Chris Wood</strong>,
                                    <br /> This is the receipt for a payment of <strong>$268.00</strong> (USD) you made to AppStack.
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-muted">Payment No.</div>
                                        <strong>741037024</strong>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <div class="text-muted">Payment Date</div>
                                        <strong>June 2, 2023 - 03:45 pm</strong>
                                    </div>
                                </div>

                                <hr class="my-4" />

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="text-muted">Client</div>
                                        <strong>
            Chris Wood
        </strong>
                                        <p>
                                            4183 Forest Avenue <br> New York City <br> 10011 <br> USA <br>
                                            <a href="#">
            chris.wood@gmail.com
            </a>
                                        </p>
                                    </div>
                                    <div class="col-md-6 text-md-right">
                                        <div class="text-muted">Payment To</div>
                                        <strong>
            AppStack LLC
        </strong>
                                        <p>
                                            354 Roy Alley <br> Denver <br> 80202 <br> USA <br>
                                            <a href="#">
            info@appstack.com
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
                                            <td>AppStack Theme Customization</td>
                                            <td>2</td>
                                            <td class="text-end">$150.00</td>
                                        </tr>
                                        <tr>
                                            <td>Monthly Subscription </td>
                                            <td>3</td>
                                            <td class="text-end">$25.00</td>
                                        </tr>
                                        <tr>
                                            <td>Additional Service</td>
                                            <td>1</td>
                                            <td class="text-end">$100.00</td>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Subtotal </th>
                                            <th class="text-end">$275.00</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Shipping </th>
                                            <th class="text-end">$8.00</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Discount </th>
                                            <th class="text-end">5%</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Total </th>
                                            <th class="text-end">$268.85</th>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="text-center">
                                    <p class="text-sm">
                                        <strong>Extra note:</strong> Please send all items at the same time to the shipping address. Thanks in advance.
                                    </p>

                                    <a href="#" class="btn btn-primary">
        Print this receipt
        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer">
          <div class="container-fluid">
            <div class="row text-muted">
              <div class="col-6 text-start">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a class="text-muted" href="#">Support</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted" href="#">Help Center</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted" href="#">Privacy</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="text-muted" href="#">Terms of Service</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 text-end">
                <p class="mb-0">
                  &copy; 2024 - <a class="text-muted" href="/">AppStack</a>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

  </body>
</html>