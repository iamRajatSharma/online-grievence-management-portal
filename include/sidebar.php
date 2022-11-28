<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="profile.php">
                <i class="bi bi-person"></i>
                <span>My Account</span>
            </a>
        </li>

        <?php if($data['flag']==1){ ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="all_complaints.php">
                <i class="bi bi-question-circle"></i>
                <span>Total Complaint</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="all_stats.php">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Statics</span>
            </a>
        </li>
        <?php } else{ ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="complaint.php">
                <i class="bi bi-question-circle"></i>
                <span>Generate Complaint</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="stats.php">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Statics</span>
            </a>
        </li>
        <?php } ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="include/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>

</aside>