<nav>
    <input type="checkbox" id="check">
    <label for="check">
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </label>

    <label class="p-name">VC</label>
    <ul class="navigation">
        <label for="check">
            <div href="" class="close">
                <span class="c">close</span>
                <span class="x">&times;</span>
            </div>
        </label>
        <li>
            <a href="mainpage.php" class="<?php echo $currentPage == "home" ? "active" : "" ?>">Dashboard</a>
        </li>
        <li>
            <a href="project_info.php" class="<?php echo $currentPage == "ideas" ? "active" : "" ?>">Ideas</a>
        </li>
        <li>
            <a href="industries.php" class="<?php echo $currentPage == "investors" ? "active" : "" ?>">Investors</a>
        </li>
        <li>
            <a href="project_arch.php" class="<?php echo $currentPage == "tracker" ? "active" : "" ?>">Project Tracker</a>
        </li>
        
        <li>
            <?php
                if(!empty($_SESSION["name"])){
                    echo $_SESSION["name"];
                }
                echo "";
            ?>
        </li>
        <li>
            <input type="checkbox" id="person-check">
            <label for="person-check">
                <span style="padding: 0 20px;"><img class="person-icon" src="images/person-circle.svg"></span>
            </label>
            
            <ul class="dropdown">
                <li><a href="includes/logout.php" style="font-size: 15px;">LogOut</a></li>
            </ul>
        </li>
    </ul>
</nav>