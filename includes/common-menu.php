
<?php

function active_class($reference) {
    $return_ = '';
    if (!empty($reference)) {
        $PAGE_URI = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
        if (strpos($PAGE_URI, $reference)) {
            $return_ = 'class="activeMainMenu"';
        }
    }
    return $return_;
}

function active_class2($reference) {
    $return_ = '';
    if (!empty($reference)) {
        $PAGE_URI = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
        if (strpos($PAGE_URI, $reference)) {
            $return_ = 'class="activeMenu"';
        }
    }
    return $return_;
}
?>



<div class="sp12">
    <div id="mainMenu">
    	<ul>
        	<li><div id="logo">
            	<a href="../">
                <img src="../resources/images/logo.jpg" alt="VQUEST SOLUTIONS" width="154" height="82" title="VQuest" />
                </a>
          </div></li>
            <li><a href="../solutions"<?php echo active_class("solutions") ?>>SOLUTIONS</a></li>
            <li><a href="../partners" <?php echo active_class("partners") ?>>PARTNERS</a></li>
            <li><a href="../aboutus" <?php echo active_class("aboutus") ?>>ABOUT US</a></li>
        </ul>
        </div>
        <a href="#" id="loginBtn"> Login </a>
    </div>