
<nav class="navbar navbar-expand-lg" style="margin-bottom: -29px;">

<button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <!-- <span class="navbar-toggler-icon"></span> -->
    <div class="row">
        <img src="<?php echo base_url()?>assets/images/logo/mflogo.png" style="width: 35px; height: 35px" alt="">
    <!-- <p style="margin-left: 10px; color: #fff; margin-top: 5px">Mf Darzi</p> -->
    </div>
</button>

<div class="collapse navbar-collapse custom-nav" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url()?>home/home">Home </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Clients
            </a> 
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <a class="dropdown-item" href="add-new-client.php">Add New Client</a> -->
                <a class="dropdown-item" href="<?php echo base_url()?>home/home/view_client_measurement">View Client Measurement</a>
                <a class="dropdown-item" href="<?php echo base_url()?>home/home/view_client">View All Client</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Invoice
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url()?>home/home/generate_invoice">Generate Invoice</a>
                <a class="dropdown-item" href="<?php echo base_url()?>home/home/generate_proforma_invoice">Generate Proforma Invoice</a>
                <a class="dropdown-item" href="<?php echo base_url()?>home/home/view_invoice">Check Out Past Invoices</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Users
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <a class="dropdown-item" href="add-employee.php">Add Employee</a> -->
                <a class="dropdown-item" href="<?php echo base_url()?>home/home/view_all_employee">View all users</a>
            </div>
        </li>
        <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Attendance
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="employee-attendance.php">Mark Attendance</a>
                <a class="dropdown-item" href="#">View Attendance</a>
            </div>
        </li> -->
        <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Salary
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Generate Salary Slip</a>
                <a class="dropdown-item" href="#">View Salary Slips</a>
            </div>
        </li> -->
        <li class="nav-item active">
            <a class="nav-link" href="#">Settings </a>
        </li>
    </ul>
</div>
</nav>
