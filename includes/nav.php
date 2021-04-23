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
            <a href="index.php" class="<?php echo $currentPage == "home" ? "active" : "" ?>">Dashboard</a>
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
    </ul>
</nav>