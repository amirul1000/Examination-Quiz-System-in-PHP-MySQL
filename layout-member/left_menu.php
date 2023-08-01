     <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="">
                            <img src="cooladmin/images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        <?php
						if(!isset($_SESSION["exam_category"]))
						{
							?>
							<li class="nav-item"><a href="select_exam.php" class="nav-link">Select Exam</a>
							</li>
							<li class="nav-item"><a href="old_exam_results.php" class="nav-link">Last Results</a>
							</li>
							<?php

						}
						?>

                        <li>
                            <a href="logout.php"> <i class="menu-icon fa fa-close"></i>LogOut </a>
                        </li>
                      
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="">
                    <img src="cooladmin/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                             <?php
						if(!isset($_SESSION["exam_category"]))
						{
							?>
							<li class="nav-item"><a href="select_exam.php" class="nav-link">Select Exam</a>
							</li>
							<li class="nav-item"><a href="old_exam_results.php" class="nav-link">Last Results</a>
							</li>
							<?php

						}
						?>

                        <li>
                            <a href="logout.php"> <i class="menu-icon fa fa-close"></i>LogOut </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->