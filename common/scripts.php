<?php
function chooseYourTheme($theme) {
  if ($theme == "megaman") {?>
        <section class="theme">
          <div class="text">Choose Your Theme</div>
          <div class="navigation">
            <div class="item"><div class="icon megaman" onmouseover="chooseYourThemeSwap('Megaman');" onmouseout="chooseYourThemeSwap('Choose Your Theme');"><a href="/common/switchtheme.php?theme=megaman"></a></div></div>
            <div class="item"><div class="icon naruto" onmouseover="chooseYourThemeSwap('Naruto');" onmouseout="chooseYourThemeSwap('Choose Your Theme');"><a href="/common/switchtheme.php?theme=naruto"></a></div></div>
            <div class="item"><div class="icon gmail" onmouseover="chooseYourThemeSwap('GMail');" onmouseout="chooseYourThemeSwap('Choose Your Theme');"><a href="/common/switchtheme.php?theme=gmail"></a></div></div>
            <div class="item"><div class="icon googleplus" onmouseover="chooseYourThemeSwap('Google+');" onmouseout="chooseYourThemeSwap('Choose Your Theme');"><a href="/common/switchtheme.php?theme=googleplus"></a></div></div>
          </div>
        </section><!--theme-->
<?php } elseif ($theme == "naruto") { ?>
        <section class="theme">
          <div class="text">Choose Your Theme</div>
          <ul>
            <li><a href="/common/switchtheme.php?theme=megaman">Megaman</a></li>
            <li><a href="/common/switchtheme.php?theme=naruto">Naruto</a></li>
            <li><a href="/common/switchtheme.php?theme=gmail">Gmail</a></li>
            <li><a href="/common/switchtheme.php?theme=googleplus">Google+</a></li>
          </ul>
        </section><!--theme-->
<?php } elseif ($theme == "gmail") { ?>
        <section class="theme">
          <div class="text">Choose Your Theme</div>
          <ul>
            <li><a href="/common/switchtheme.php?theme=megaman">Megaman</a></li>
            <li><a href="/common/switchtheme.php?theme=naruto">Naruto</a></li>
            <li><a href="/common/switchtheme.php?theme=googleplus">Google+</a></li>
            <li><a href="javascript:setGmailColor('blue');">Gmail: Blue</a></li>
            <li><a href="javascript:setGmailColor('green');">Gmail: Green Sky</a></li>
            <li><a href="javascript:setGmailColor('bubble');">Gmail: Bubble Gum</a></li>
            <li><a href="javascript:setGmailColor('cherry');">Gmail: Cherry Blossom</a></li>
          </ul>
        </section><!--theme-->
<?php } elseif ($theme == "googleplus") { ?>
        <section class="theme">
          <div class="text">Choose Your Theme</div>
          <ul>
            <li><a href="/common/switchtheme.php?theme=megaman">Megaman</a></li>
            <li><a href="/common/switchtheme.php?theme=naruto">Naruto</a></li>
            <li><a href="/common/switchtheme.php?theme=gmail">Gmail</a></li>
            <li><a href="/common/switchtheme.php?theme=googleplus" class="active">Google+</a></li>
          </ul>
        </section><!--theme-->
<?php
  }
}

function navigation($theme) {
  if ($theme == "megaman") {?>
        <nav>
          <div class="select_your_level">SELECT YOUR LEVEL</div>
          <div class="item"><div class="blog"><a href="/"></a></div><a href="/">Blog<br />Man</a></div>
          <div class="item"><div class="about"><a href="/about/"></a></div><a href="/about/">About Me<br />Man</a></div>
          <? //div class="item"><div class="projects"><a href="/achievements/"></a></div><a href="/achievements/">Achievements<br />Man</a></div? ?>
          <div class="item"><div class="hobbies"><a href="/hobbies/"></a></div><a href="/hobbies/">Hobbies<br />Man</a></div>
          <div class="item"><div class="gallery"><a href="/gallery/"></a></div><a href="/gallery/">Gallery<br />Man</a></div>
          <div class="item"><div class="projects"><a href="/lists/"></a></div><a href="/lists/">Lists<br />Man</a></div>
          <div class="item"><div class="resume"><a href="http://www.warrenshea.com/" target="_blank"></a></div><a href="http://www.warrenshea.com/" target="_blank">Resume<br />Man</a></div>
        </nav>    
<?php } elseif ($theme == "naruto") {?>
        <nav>
          <div class="text">Summon Your Scroll</div>
          <ul>
            <li><a href="/">Blog</a></li>
            <li><a href="/about/">About Me</a></li>
            <li><a href="/hobbies/">Hobbies</a></li>
            <li><a href="/gallery/">Gallery</a></li>
            <li><a href="/lists/">Lists</a></li>
            <li><a href="http://www.warrenshea.com/" target="_blank">Resume</a></li>
          </ul>
        </nav>
<?php } elseif (($theme == "gmail") || ($theme == "googleplus"))  {?>
        <nav>
          <ul>
            <li<?php if ($_SERVER['PHP_SELF'] == "/default.php") {?> class="active"<?php }?>><a href="/">Blog</a></li>
            <li<?php if ($_SERVER['PHP_SELF'] == "/about/default.php") {?> class="active"<?php }?>><a href="/about/">About Me</a></li>
            <li<?php if ($_SERVER['PHP_SELF'] == "/hobbies/default.php") {?> class="active"<?php }?>><a href="/hobbies/">Hobbies</a></li>
            <li<?php if ($_SERVER['PHP_SELF'] == "/gallery/default.php") {?> class="active"<?php }?>><a href="/gallery/">Gallery</a></li>
            <li<?php if ($_SERVER['PHP_SELF'] == "/lists/default.php") {?> class="active"<?php }?>><a href="/lists/">Lists</a></li>
            <li><a href="http://www.warrenshea.com/" target="_blank">Resume</a></li>
          </ul>
        </nav>
<?php
  }
}

function getOS() {
  if (stristr($_SERVER['HTTP_USER_AGENT'],"Windows NT 6.1") != false) {
    $OS = "Windows 7";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Windows NT 6.0") != false) {
    $OS = "Windows Vista";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Windows NT 5.1") != false) {
    $OS = "Windows XP";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Windows 98") != false) {
    $OS = "Windows 98";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Windows 95") != false) {
    $OS = "Windows 95";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Windows 3.1") != false) {
    $OS = "Windows 3.1";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Linux") != false) {
    $OS = "Linux";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Mac") != false) {
    if (stristr($_SERVER['HTTP_USER_AGENT'],"iPhone") != false) {
      $OS = "iPhone";
    } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"iPad") != false) {
      $OS = "iPad";
    } else {
      $OS = "Mac";
    }
  } else {
    $OS = "?";
  }
  return $OS;  
}

function getBrowser() {
  if (stristr($_SERVER['HTTP_USER_AGENT'],"MSIE 8.0") != false) {
    $Browser = "Internet Explorer 8.0";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"MSIE 7.0") != false) {
    $Browser = "Internet Explorer 7.0";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"MSIE 6.0") != false) {
    $Browser = "Internet Explorer 6.0";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"MSIE 5.5") != false) {
    $Browser = "Internet Explorer 5.5";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"MSIE 5.0") != false) {
    $Browser = "Internet Explorer 5.0";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"MSIE 4.0") != false) {
    $Browser = "Internet Explorer 4.0";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Firefox") != false) {
    $Browser = "Firefox";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Opera") != false) {
    $Browser = "Opera";
  } elseif (stristr($_SERVER['HTTP_USER_AGENT'],"Safari") != false) {
    if (stristr($_SERVER['HTTP_USER_AGENT'],"Chrome") != false) {
      $Browser = "Chrome";
    } else {
      $Browser = "Safari";
    }
  } else {
    $Browser = "?";
  }
  return $Browser;  
}
?>