@extends('administration.template.template')
@section('content')


<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-xl-12 col-md-6">
                                    <!-- card -->
                                    
                                    <div class="card card-animate" id="contact-stats-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Total Contacts</p>
                                                    <h4 class="fs-22 fw-semibold mb-3">
                                                        <span class="counter-value" id="total-contacts">0</span>
                                                    </h4>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h5 class="fs-12 mb-0" id="contact-change-label">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle text-success"></i>
                                                            <span id="contact-change">0%</span>
                                                        </h5>
                                                        <p class="text-muted mb-0">than last week</p>
                                                    </div>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-info-subtle rounded fs-3">
                                                        <i class="bx bx-user-voice text-info"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animation-effect-6 text-warning opacity-25 fs-18">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div class="animation-effect-4 text-warning opacity-25 fs-18">
                                            <i class="bi bi-person-fill"></i>
                                        </div>
                                        <div class="animation-effect-3 text-warning opacity-25 fs-18">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                    <script>
                                        fetch("{{ route('administration.contacts.stats') }}")
                                            .then(res => res.json())
                                            .then(data => {
                                                document.getElementById("total-contacts").textContent = data.total;
                                    
                                                const change = data.change + '%';
                                                const changeElement = document.getElementById("contact-change");
                                                const icon = document.getElementById("contact-change-label").querySelector('i');
                                    
                                                changeElement.textContent = change;
                                    
                                                if (data.direction === 'up') {
                                                    icon.classList.remove("ri-arrow-right-down-line", "text-danger");
                                                    icon.classList.add("ri-arrow-right-up-line", "text-success");
                                                } else {
                                                    icon.classList.remove("ri-arrow-right-up-line", "text-success");
                                                    icon.classList.add("ri-arrow-right-down-line", "text-danger");
                                                }
                                            });
                                    </script>
                                </div><!-- end col -->

                                <div class="col-xl-12 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate" id="enquiry-stats-card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-info-subtle rounded fs-3">
                                                        <i class="bx bx-user-voice text-info"></i>
                                                    </span>
                                                </div>
                                                <div class="text-end flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Enquiries</p>
                                                    <h4 class="fs-22 fw-semibold mb-3">
                                                        <span class="counter-value" id="total-enquiries">0</span>
                                                    </h4>
                                                    <div class="d-flex align-items-center justify-content-end gap-2">
                                                        <h5 class="fs-12 mb-0" id="enquiry-change-label">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle text-success"></i>
                                                            <span id="enquiry-change">0%</span>
                                                        </h5>
                                                        <p class="text-muted mb-0">than last week</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="animation-effect-6 text-info opacity-25 left fs-18">
                                            <i class="bi bi-handbag"></i>
                                        </div>
                                        <div class="animation-effect-4 text-info opacity-25 left fs-18">
                                            <i class="bi bi-shop"></i>
                                        </div>
                                        <div class="animation-effect-3 text-info opacity-25 left fs-18">
                                            <i class="bi bi-bag-check"></i>
                                        </div>
                                    </div>
                                    <script>
                                        fetch("{{ route('administration.enquiries.stats') }}")
                                            .then(response => response.json())
                                            .then(data => {
                                                document.getElementById("total-enquiries").textContent = data.total;
                                    
                                                const change = data.change + '%';
                                                const changeElement = document.getElementById("enquiry-change");
                                                const icon = document.getElementById("enquiry-change-label").querySelector('i');
                                    
                                                changeElement.textContent = change;
                                    
                                                if (data.direction === 'up') {
                                                    icon.classList.remove("ri-arrow-right-down-line", "text-danger");
                                                    icon.classList.add("ri-arrow-right-up-line", "text-success");
                                                } else {
                                                    icon.classList.remove("ri-arrow-right-up-line", "text-success");
                                                    icon.classList.add("ri-arrow-right-down-line", "text-danger");
                                                }
                                            });
                                    </script>
                                    
                                    
                                </div><!-- end col -->
                            
                                <div class="col-xl-12 col-md-6">
                                    <!-- card -->
                                    <div class="card card-animate">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-grow-1">
                                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Customers</p>
                                                    <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="183.35">0</span>M </h4>
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h5 class="text-success fs-12 mb-0">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                                                        </h5>
                                                        <p class="text-muted mb-0">than last week</p>
                                                    </div>
                                                </div>
                                                <div class="avatar-sm flex-shrink-0">
                                                    <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                        <i class="bx bx-user-circle text-warning"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                        <div class="animation-effect-6 text-warning opacity-25 fs-18">
                                            <i class="bi bi-person"></i>
                                        </div>
                                        <div class="animation-effect-4 text-warning opacity-25 fs-18">
                                            <i class="bi bi-person-fill"></i>
                                        </div>
                                        <div class="animation-effect-3 text-warning opacity-25 fs-18">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div> <!-- end row-->
                        </div>
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                    <div>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            1Y
                                        </button>
                                    </div>
                                </div><!-- end card header -->
                            
                                <div class="card-header p-0 border-0 bg-light-subtle">
                                    <div class="row g-0 text-center">
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                                <p class="text-muted mb-0">Orders</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                                <p class="text-muted mb-0">Earnings</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                                <p class="text-muted mb-0">Refunds</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                                <p class="text-muted mb-0">Conversation Ratio</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                </div><!-- end card header -->
                            
                                <div class="card-body p-0 pb-2">
                                    <div class="w-100">
                                        <div id="customer_impression_charts" data-colors='["--tb-dark", "--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <!-- card -->
                            <div class="card bg-info-subtle text-info border-0">
                                <div class="card-body">
                                    <div class="row gy-3">
                                        <div class="col-sm">
                                        <h5 class="card-title fs-17">Need More Sales?</h5>
                                        <p class="mb-0">Upgrade to pro for added benefits.</p>
                                        </div>
                                        <div class="col-sm-auto">
                                            <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-markup-line label-icon align-middle rounded-pill fs-16 me-2"></i> Upgrade Account</button>
                                        </div>
                                    </div>
                                    <div class="position-absolute top-0 start-50 mt-2 opacity-25">
                                        <i class="bi bi-shop display-4"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Recent Contacts</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Today</a>
                                                <a class="dropdown-item" href="#">Yesterday</a>
                                                <a class="dropdown-item" href="#">Last 7 Days</a>
                                                <a class="dropdown-item" href="#">Last 30 Days</a>
                                                <a class="dropdown-item" href="#">This Month</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                            
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-centered align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">Contact ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Contacted on</th>
                                                    <th scope="col">Message</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody id="recent-contacts-body">
                                                <!-- Dynamic Rows will be injected via JavaScript -->
                                            </tbody>
                                            <script>
                                                fetch("{{ route('administration.contacts.recent') }}")
                                                    .then(res => res.json())
                                                    .then(contacts => {
                                                        const tbody = document.getElementById("recent-contacts-body");
                                                        tbody.innerHTML = ""; // Clear default rows
                                            
                                                        contacts.forEach(contact => {
                                                            const row = `
                                                                <tr>
                                                                    <td><a href="#!" class="fw-medium link-primary">#CT${String(contact.id).padStart(6, '0')}</a></td>
                                                                    <td>${contact.name}</td>
                                                                    <td>
                                                                        <div class="d-flex align-items-center">
                                                                           
                                                                            <div class="flex-grow-1">${contact.email}</div>
                                                                        </div>
                                                                    </td>
                                                                    <td>${contact.phone}</td>
                                                                    <td>${new Date(contact.created_at).toLocaleDateString()}</td>
                                                                    <td>${contact.message}</td>
                                                                    <td><span class="badge text-primary bg-primary-subtle">New</span></td>
                                                                </tr>
                                                            `;
                                                            tbody.insertAdjacentHTML('beforeend', row);
                                                        });
                                                    });
                                            </script>
                                                                                        
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    

                </div> <!-- end .h-100-->

            </div> <!-- end col -->

            
        </div>

    </div>
    <!-- container-fluid -->
</div>
              @endsection