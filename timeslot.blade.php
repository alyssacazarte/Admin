<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Time Slots Dashboard</title>

    <!-- Montserrat Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/admin_css/timeslot.css') }}" rel="stylesheet">
</head>

<body>
    <div class="grid-container">
        <!-- The modal -->
        <!-- <div id="logoutModal" class="modal">
            <div class="modal-content">
                <h2>Logout</h2>
                <p>Are you sure you want to logout?</p>
                <button id="confirmLogout">Logout</button>
                <button id="cancelLogout">Cancel</button>
            </div>
        </div> -->

        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="header-left">

            </div>
            <div class="header-right">
                <span class="material-icons-outlined" id="logoutBtn" onclick="toggleDropdown()"> <img  src="{{ asset('images/favio.png') }}" alt="Profile"></span>
                <div class="dropdown-content" id="dropdownContent">
                    <div class="dropdown-item"><a href="">Go to site</a> 
                    </div>

                    <div class="dropdown-item"><a href="#">Change Pass</a> 
                    </div>

                    <div class="dropdown-item"><a href="logoutTest.html">Logout</a> 
                    </div>
                   
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-icons-outlined">inventory</span> Favio's Inventory
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="service-dashboard">
                        <span class="material-icons-outlined">work</span> Service
                    </a>
                </li>
                <li class="sidebar-list-item">
                    <a href="schedule-dashboard">
                        <span class="material-icons-outlined">task</span> Schedule
                    </a>
                </li>
                <!-- <li class="sidebar-list-item">
                    <a href="request-dashboard">
                        <span class="material-icons-outlined">fact_check</span> Request
                    </a>
                </li> -->
                <li class="sidebar-list-item">
                    <a href="appointment-dashboard">
                        <span class="material-icons-outlined">poll</span> Appointment
                    </a>
                </li>

                <li class="sidebar-list-item">
                    <a href="timeslots-dashboard" class="active">
                        <span class="material-icons-outlined">list</span> Timeslots
                    </a>
                </li>
            </ul>
        </aside>
        <!-- End Sidebar -->



        <!-- Main -->
        <main class="main-container">
            <div class="main-title">
                <p class="font-weight-bold">Timeslots Table</p>
            </div>
            <div class="charts">
                <div class="charts-card">
                <a href="/admin/timeslot/create">Create</a>
                <br><br>
                <table border="1">
                        <tr>
                            <th>Schedule ID</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($timeslots as $timeslot)
                        <tr>
                            <td>{{ $timeslot->schedule_id}}</td>
                            <td>{{ $timeslot->start_time}}</td>
                            <td>{{ $timeslot->end_time}}</td>
                            <td>{{ $timeslot->status}}</td>
                            <td>
                                <a href="{{ url('/admin/timeslot/update/'. $timeslot->id) }}">Update</a>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </main>
        <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/admin_js/timeslot.js') }}"></script>
</body>

</html>