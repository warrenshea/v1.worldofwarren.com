<?php include '../common/header.php'; ?>
          <h2>Gallery</h2><br />
          <div class="custom-content">
          <a href="javascript:;" onclick="changeGallery('all');" id="all_nav" class="gallery_nav_active">All</a> |
          <a href="javascript:;" onclick="changeGallery('toysandmodels');" id="toysandmodels_nav" class="gallery_nav_inactive">Toys &amp; Models</a> |
          <a href="javascript:;" onclick="changeGallery('artgallery');" id="artgallery_nav" class="gallery_nav_inactive">Art Gallery</a> |
          <a href="javascript:;" onclick="changeGallery('reallife');" id="reallife_nav" class="gallery_nav_inactive">Real Life</a> |
          <a href="javascript:;" onclick="changeGallery('commissions');" id="commissions_nav" class="gallery_nav_inactive">Commissions</a><br />
<?php
switch ($_GET["album"]) {
  case "omnimon"; //33
    $title=array("Omnimon"," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
    $details=array("Omegamon in Japanese"," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
    break; 
  case "predaking"; //8
    $title=array("Predaking"," "," "," "," "," "," "," ");
    $details=array("Generation 1 Reissue (1986)"," "," "," "," "," "," "," ");
    break; 
  case "wargreymon"; //12
    $title=array("Wargreymon","Crest of Courage","You want a piece of me?","Terra Force!", "", "", "Omnimon", "Digmon Toys");
    $details=array(" "," "," "," "," "," "," "," "," "," ");
    break; 
  case "phoenix"; //12
    $title=array("Phoenix");
    $details=array("from Marvel Comics. This is from the Marvel Comics Bishoujo Statue series from Kotobukiya."," "," "," "," "," "," "," "," "," "," "," ");
    break; 
  case "lady_sylvanas"; //10
    $title=array("Lady Sylvanas");
    $details=array(" "," "," "," "," "," "," "," "," "," ");
    break;
  case "delorean"; //19
    $title=array("","","");
    $details=array("DeLorean outside FanExpo 2010","","OUT A TIME", "", "Hover Board!!", "", "", "Jesus + DeLorean...makes sense", "", "", "", "", "", "Flux Capacitor...fluxin'");
    break;
  case "rogue"; //20
    $title=array("Rogue");
    $details=array("from Marvel Comics. This is from the Marvel Comics Bishoujo Statue series from Kotobukiya."," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
    break;
  case "black_widow_2"; //32
    $title=array("Black Widow");
    $details=array("from Marvel Comics. This is from the Marvel Comics Bishoujo Statue series from Kotobukiya.");
    break;
  case "ninja_turtles_party_wagon": //11
    $title=array("Teenage Mutant Ninja Turtles");
    $details=array("25th Anniversary Party Wagon");
    break;
  case "christine_choi": //2
    $title=array("Yuna Pencil Sketch by Christine Choi","Yuna Pencil Sketch by Christine Choi");
    $details=array("Drawn May 2003 - Anime North","Cleaned up sketch lines, adjusted levels");
    break;
  case "arnistotle": //4
    $title=array("Rinoa Heartilly Pencil Sketch by Arnistotle","Yuna Pencil Sketch by Arnistotle","Sakura Pencil Sketch by Arnistotle","Chun Li Pencil Sketch by Arnistotle");
    $details=array("Drawn May 25, 2002 - Anime North","Drawn May 17, 2003 - Anime North","Drawn August 23, 2003 - CNAnime","Drawn August 28, 2004 - CNAnime");
    break;
  case "omar_dogan": //2
    $title=array("Cammy Pencil Sketch by Omar Dogan","Sakura Pencil Sketch by Omar Dogan");
    $details=array("Drawn May 22, 2004", "Drawn March 3, 2007");
    break;
  case "alvin_lee": //1
    $title=array("Chun Li Pencil Sketch by Alvin Lee");
    $details=array("Drawn 2004");
    break;
  case "marcus_to": //1
    $title=array("Batgirl Pencil Sketch by Marcus To");
    $details=array("Drawn June 5, 2010 - Toronto Comic Con");
    break;
  case "illidan": //9
    $title=array("Illidan");
    $details=array(" "," "," "," "," "," "," "," "," ");
    break;
  case "wonder_girl": //8
    $title=array("Wonder Girl: Donny Troy");
    $details=array("The sketch this bust is based on, by Adam Hughes","","Not really a fan of how this bust looked...these pics aren't really great nor did I put much time into them", " ", " ", " ", " ", " ", " ");
    break;
  case "hamsters":
    $title=array("Home from the petstore!","I think I saw this scene in a movie...","","","Chillin","Best 3some ever (for Chandler)","Central Perk","","");
    $details=array("The large panda hamster is named Joey, the dark haired one is Monica, the brown haired one is Rachel, the grey one is Chandler (by default), and the whiteish one with red eyes is Phoebe!","Like little mogwai (Gremlins)","Joey sleeping","Joey sleeping and Chandler in the back","All 5 hamsters","Monica, Rachel and Chandler","the cage","Chandler and Phoebe - This is probably a good indication of their size...see the toilet roll in the background? They're smaller than those...","Phoebe in the wheel, Monica and Rachel in the igloo and Chandler's ass");
    break;
  case "hamsters2":
    $title=array("What a cute couple!","Chandler sleeping...Part I","Chandler stretching...Part II","Chandler sleeping...Part III","","","","Rachel, Chandler, and Phoebe","Chandler sleeping","Rachel, Chandler, and Phoebe...again","Chandler sleeping Part II");
    $details=array("Chandler stepping on Monica's head/face","Sorry for the bluriness!","","Back to sleep u_u","","","5 Hammies sleeping in a corner","","She's not dead...really.","Awake from their nap!","She's not dead...really!!");
    break;
  case "sharingan": //8
    $title=array("Sharingan eyes");
    $details=array("from the series Naruto. Characters possessing the sharingcan: Uchiha Sasuke, Uchiha Itachi, Hatake Kakashi, Uchiha Madara");
    break;
  case "gundam_seed_strike":
    $title=array("Aile Strike Gundam");
    $details=array("From the anime Gundam Seed. This is from the Arch Enemy toy line");
    break;
  case "black_widow";
    $title=array("Black Widow");
    $details=array("from Marvel Comics. This is from the Marvel Comics Bishoujo Statue series from Kotobukiya.");
    break;
  case "gsd_gashapon";
    $title=array("Gundam Seed and Gundam Seed Destiny Gashapon toys");
    $details=array("I went a bit overboard when I was buying these...each one is like, $5...","","","Kira is sickly thin");
    break;
  case "SD_strike_freedom":
    $title=array("","","","","","Strike Freedom Complete!","","My Work Station");
    $details=array("","","","","","","","Watching: Battlestar Galactica");
    break;
  case "2010_art_gallery":
    $title=array("Sakura", "Hatake Kakashi", "Uchiha Sasuke", "", "Animeish Superman", "Konoha's Blue Beast...", "Bender");
    $details=array("Supposed to be Sakura from Naruto Part 2 (after the time jump) but she looks a bit young...", "In the rain", "","","","<strong>ROCK LEE!</strong> And I know he's green...which is more his color. I don't get why he's called a blue beast either.","My Bender evolution...practice makes perfect!");
    break;
  case "2009_art_gallery":
    $title=array("","Green Lantern","Some rocket...reminds me of Mario");
    $details=array("", "Kyle Rayner - My favorite Green Lantern. The one I grew up with. The artist and anime/manga nut. Sound familiar?");
    break;
  case "2008_art_gallery":
    $title=array("Polly Esther", "Midou Ban", "Spider-Man");
    $details=array("from Samurai Pizza Cats", "from Get Backers anime. Possibly my favorite anime character ever.");
    break;
  case "2007_art_gallery":
    $title=array("Supergirl", "McDonalds employee?", "some snake...", "Slow and steady...");
    $details=array("penciled by Randy Green, coloured by me.", "", "probably drawn with Orochimaru in mind");
    break;
  case "2004_art_gallery":
    $title=array("Kakashi and Rock Lee", "Batman","sketches");
    $details=array("I don't know what's wrong with Rock Lee's arm...I just like his face", "...with some weird perspective", "drawing Itachi in 2004...always been one of my favs");
    break;
  case "2003_art_gallery":
    $title=array("Sakura");
    $details=array("from Naruto. One of my favourite impulsive sketches, I did this in a few hours the night before my CS 251 exam. The thing that kills me about this artwork is that the hair is flowing the wrong way....");
    break;
  case "2002_art_gallery":
    $title=array("Chun Li Grayscale", "Chun Li colored", "Anime girl", "Anime girl", "", "Robin", "Final Fantasy IX", "Superion");
    $details=array("from Street Fighter", "from Street Fighter. Someone told me to try doing a grayscale image first, and then coloring it...it was harder than I thought", "", "", "", "partially complete...", "character's heads", "from Transformers. This is the combined version of the 5 Aerialbots." );
    break;
  case "2001_art_gallery":
    $title=array("Sailor Moon", "OAC Art Project 1", "OAC Art Project 4", "OAC Art Project 6", "OAC Art Project 7");
    $details=array("", "", "I always had a thing for angels and angel wings...even a decade ago");
    break;
  case "2000_art_gallery":
    $title=array("Neon Genesis Evangelion");
    $details=array("");
    break;
  case "1999_art_gallery":
    $title=array("Rei Ayanami");
    $details=array("from Neon Genesis Evangelion. This is my first digital artwork ever...I flattened my layers when I finished. Ugh, how I regret that decision.");
    break;
  default:
    break;
}?>

          <div id="specificalbum">
<?php for ($i=1; $i<=$_GET["album_num"]; $i++) {
        if ($i == 1) {?>
            <br />Please select a thumbnail:<br /><br />
<?php   }?>
            <div class="album_thumb_container gallery"><a href="album/<?php echo $_GET["album"]?>_<?php echo $i?>.jpg" rel="prettyPhoto[<?php echo $_GET["album"]?>]" title="<?php echo $details[$i-1];?>"><img src="album/<?php echo $_GET["album"]?>_<?php echo $i?>_thumb.jpg" alt="<?php echo $title[$i-1];?>" /></a></div>
<?php }?>
          </div>

          <div id="toysandmodels">
<? /*            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=omnimon&album_num=33"><img src="album/omnimon_33_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=omnimon&album_num=33"><strong>D-Arts: Omnimon</strong></a><br /><br />
                Album Added: April 2, 2011<br /><br />
                Number of images: 33
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=predaking&album_num=8"><img src="album/predaking_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=predaking&album_num=8"><strong>Transformers Generation 1 Reissue: Predaking</strong></a><br /><br />
                Album Added: April 2, 2011<br /><br />
                Number of images: 8
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=wargreymon&album_num=10"><img src="album/wargreymon_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=wargreymon&album_num=10"><strong>D-Arts: Wargreymon</strong></a><br /><br />
                Album Added: Dec 19, 2010<br /><br />
                Number of images: 10
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=phoenix&album_num=12"><img src="album/phoenix_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=phoenix&album_num=12"><strong>Kotobukiya Bishoujo Statue: Phoenix</strong></a><br /><br />
                Album Added: October 28, 2010<br /><br />
                Number of images: 12
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=lady_sylvanas&album_num=10"><img src="album/lady_sylvanas_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=lady_sylvanas&album_num=10"><strong>World of Warcraft Deluxe Collector Figure: Forsaken Queen - Sylvanas Windrunner</strong></a><br /><br />
                Album Added: October 28, 2010<br /><br />
                Number of images: 10
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=black_widow_2&album_num=32"><img src="album/black_widow_2_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=black_widow_2&album_num=32"><strong>Kotobukiya Bishoujo Statue: Black Widow</strong></a><br /><br />
                Album Added: July 24, 2010<br /><br />
                Number of images: 32
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=rogue&album_num=20"><img src="album/rogue_2_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=rogue&album_num=20"><strong>Kotobukiya Bishoujo Statue: Rogue</strong></a><br /><br />
                Album Added: July 21, 2010<br /><br />
                Number of images: 20
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=ninja_turtles_party_wagon&album_num=11"><img src="album/ninja_turtles_party_wagon_2_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=ninja_turtles_party_wagon&album_num=11"><strong>Teenage Mutant Ninja Turtles: Party Wagon</strong></a><br /><br />
                Album Added: July 21, 2010<br /><br />
                Number of images: 11
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=illidan&album_num=9"><img src="album/illidan_3_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=illidan&album_num=9"><strong>World of Warcraft Deluxe Collector Figure: Illidan (Demon Form)</strong></a><br /><br />
                Album Added: June 6, 2010<br /><br />
                Number of images: 9
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=batgirl&album_num=10"><img src="album/batgirl_2_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=batgirl&album_num=10"><strong>Ame-comi: Batgirl</strong></a><br /><br />
                Album Added: June 5, 2010<br /><br />
                Number of images: 10
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=wonder_girl&album_num=8"><img src="album/wonder_girl_3_thumb.jpg" /></a></div></div>
              <div class="item_right">
               <a href="default.php?album=wonder_girl&album_num=8"> <strong>Women of the DC Universe: Donna Troy Bust</strong></a><br /><br />
                Album Added: June 5, 2010<br /><br />
                Number of images: 8
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=gundam_wing&album_num=8"><img src="album/gundam_wing_4_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=gundam_wing&album_num=8"><strong>Arch Enemy: Wing Gundam Zero</strong></a><br /><br />
                Album Added: May 9, 2010<br /><br />
                Number of images: 8
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=gundam_seed_strike&album_num=2"><img src="album/gundam_seed_strike_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=gundam_seed_strike&album_num=2"><strong>Arch Enemy: Strike</strong></a><br /><br />
                Album Added: April 20, 2010<br /><br />
                Number of images: 2
              </div>
              <div class="clear"></div>
            </div>
            *<div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=black_widow&album_num=10"><img src="album/black_widow_9_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=black_widow&album_num=10"><strong>Kotobukiya Bishoujo Statue: Black Widow</strong></a><br /><br />
                Album Added: april 20, 2010<br /><br />
                Number of images: 10
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=gsd_gashapon&album_num=13"><img src="album/gsd_gashapon_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=gsd_gashapon&album_num=13"><strong>Gundam Seed/Gundam Seed Destiny Gashapon</strong></a><br /><br />
                Album Added: March 29, 2010<br /><br />
                Number of images: 13
              </div>
              <div class="clear"></div>
            </div> */ ?>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=SD_strike_freedom&album_num=8"><img src="album/SD_strike_freedom_6_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=SD_strike_freedom&album_num=8"><strong>SD Gundam: Strike Freedom</strong></a><br /><br />
                Album Added: January 10, 2010<br /><br />
                Number of images: 8
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div id="artgallery">
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=2010_art_gallery&album_num=7"><img src="album/2010_art_gallery_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=2010_art_gallery&album_num=7"><strong>2010 Art Gallery</strong></a><br /><br />
                Number of images: 7
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=2009_art_gallery&album_num=3"><img src="album/2009_art_gallery_2_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=2009_art_gallery&album_num=3"><strong>2009 Art Gallery</strong></a><br /><br />
                Number of images: 3
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=2008_art_gallery&album_num=3"><img src="album/2008_art_gallery_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=2008_art_gallery&album_num=3"><strong>2008 Art Gallery</strong></a><br /><br />
                Number of images: 3
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=2007_art_gallery&album_num=5"><img src="album/2007_art_gallery_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=2007_art_gallery&album_num=5"><strong>2007 Art Gallery</strong></a><br /><br />
                Number of images: 5
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=2004_art_gallery&album_num=4"><img src="album/2004_art_gallery_3_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=2004_art_gallery&album_num=4"><strong>2004 Art Gallery</strong></a><br /><br />
                Number of images: 4
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=2003_art_gallery&album_num=1"><img src="album/2003_art_gallery_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=2003_art_gallery&album_num=1"><strong>2003 Art Gallery</strong></a><br /><br />
                Number of images: 1
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=2002_art_gallery&album_num=8"><img src="album/2002_art_gallery_4_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=2002_art_gallery&album_num=8"><strong>2002 Art Gallery</strong></a><br /><br />
                Number of images: 8
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=asian_avenue&album_num=4"><img src="album/asian_avenue_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=asian_avenue&album_num=4"><strong>2002 Asian Avenue Backgrounds</strong></a><br /><br />
                Number of images: 4
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=2001_art_gallery&album_num=5"><img src="album/2001_art_gallery_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=2001_art_gallery&album_num=5"><strong>2001 Art Gallery</strong></a><br /><br />
                Number of images: 5
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=2000_art_gallery&album_num=1"><img src="album/2000_art_gallery_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=2000_art_gallery&album_num=1"><strong>2000 Art Gallery</strong></a><br /><br />
                Number of images: 1
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=1999_art_gallery&album_num=1"><img src="album/1999_art_gallery_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=1999_art_gallery&album_num=1"><strong>1999 Art Gallery</strong></a><br /><br />
                Number of images: 1
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div id="reallife">
<? /*            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=delorean&album_num=19"><img src="album/delorean_4_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=delorean&album_num=19"><strong>DeLorean</strong></a><br /><br />
                Album Added: August 28, 2010<br /><br />
                Number of images: 19
              </div>
              <div class="clear"></div>
            </div>*/?>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=hamsters2&album_num=11"><img src="album/hamsters2_10_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=hamsters2&album_num=11"><strong>Hamsters</strong></a><br /><br />
                Album Added: July 15, 2010<br /><br />
                Number of images: 11
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=hamsters&album_num=9"><img src="album/hamsters_8_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=hamsters&album_num=9"><strong>Hamsters</strong></a><br /><br />
                Album Added: May 24, 2010<br /><br />
                Number of images: 9
              </div>
              <div class="clear"></div>
            </div>
            <? /*<div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=sharingan&album_num=8"><img src="album/sharingan_6_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=sharingan&album_num=8"><strong>Sharingan Eyes</strong></a><br /><br />
                Album Added: April 25, 2010<br /><br />
                Number of images: 8
              </div>
              <div class="clear"></div>
            </div>*/?>
          </div>
          <div id="commissions">
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=arnistotle&album_num=4"><img src="album/arnistotle_4_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=arnistotle&album_num=4"><strong>Arnistotle (Arnold Tsang)</strong></a><br /><br />
                Number of images: 4
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=christine_choi&album_num=2"><img src="album/christine_choi_2_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=christine_choi&album_num=2"><strong>Christine Choi</strong></a><br /><br />
                Number of images: 2
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=omar_dogan&album_num=2"><img src="album/omar_dogan_2_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=omar_dogan&album_num=2"><strong>Omar Dogan</strong></a><br /><br />
                Number of images: 2
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=alvin_lee&album_num=1"><img src="album/alvin_lee_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=alvin_lee&album_num=1"><strong>Alvin Lee</strong></a><br /><br />
                Number of images: 1
              </div>
              <div class="clear"></div>
            </div>
            <div class="item">
              <div class="item_left"><div class="album_thumb_container gallery"><a href="default.php?album=marcus_to&album_num=1"><img src="album/marcus_to_1_thumb.jpg" /></a></div></div>
              <div class="item_right">
                <a href="default.php?album=marcus_to&album_num=1"><strong>Marcus To</strong></a><br /><br />
                Number of images: 1
              </div>
              <div class="clear"></div>
            </div>
            </div>
          </div>

<?php include '../common/footer.php'; ?>