<?php include '../common/header.php'; ?>
<?php if ($_SERVER['QUERY_STRING'] == "") {?>
          <h2>Hobbies</h2> - updated Feb 8, 2015<br />
          <div class="custom-content">
            <h3>Web Development</h3>
            <ul>
              <li><a href="http://www.worldofwarren.com">worldofwarren.com</a></li>
              <li><a href="http://www.warrenshea.com" target="_blank">warrenshea.com</a></li>
              <li><a href="http://www.kotobishoujo.com" target="_blank">kotobishoujo.com</a> [cancelled due to a lack of time]</li>
            </ul><br />

            <h3>Web Design</h3>
            <ul>
              <li>World of Warren: Megaman Theme</li>
              <li>World of Warren: Blogger Theme</li>
              <li>World of Warren: Naruto Theme</li>
              <li>World of Warren: GMAIL Theme</li>
              <li>World of Warren: Google+ Theme</li>
              <li>Warrenshea.com</li>
              <li>Kotobishoujo.com</li>
            </ul><br />
            
            <h3>Currently Watching</h3>
            <ul>
              <li>Sherlock</li>
              <li>The Walking Dead</li>
              <li>Big Bang Theory</li>
              <li>Marvel's Agents of SHIELD</li>
              <li>The Flash</li>
              <li>Arrow</li>
              <li>The Goldbergs</li>
              <li>Gotham</li>              
              <li><a href="default.php?category=completelivereal">See previously watched Live / Real shows</a></li>
              <li><a href="default.php?category=completeanime">See previously watched Anime shows</a></li>
              <li><a href="default.php?category=completecartoons">See previously watched Cartoons</a></li>
            </ul><br />
          
            <h3>Currently Gaming</h3>
            <ul>
              <li>World of Warcraft: Warlords of Draenor [PC]</li>
              <li>DOTA2 [PC]</li>
              <li>Pokemon Omega Ruby [3DS]</li>
              <li><a href="default.php?category=completegames">See previously completed games</a></li>
            </ul><br />

            <h3>Currently Reading</h3>
            <ul>
              <li>Various Marvel &amp; DC comics</li>
              <li>Eleven Rings by Phil Jackson, for some managements/leadership tips</li>
              <li>How to be a Star at Work, recommended by Ed Roman during hack.summit()</li>
              <li>Ready Player One - cuz I heard it's good</li>
              <li>Clean Code: A Handbook of Agile Software Craftsmanship</li>
              <li>One Piece [Manga]</li>
              <li><a href="default.php?category=completeread">See previously read items</a></li>
            </ul><br />
          
          </div>

<? } ?>
<?php if ($_GET["category"] == "completeanime") { ?>
          <h2>Previously Watched - Anime</h2><br />
          <div class="custom-content">
            <ul>
              <li>Angelic Layer</li>
              <li>Anohana: The Flower We Saw That Day</li>
              <li>Azumanga Daioh</li>
              <li>Bleach</li>
              <li>Chobits</li>
              <li>Clannad</li>
              <li>Clannad: After Story</li>
              <li>Cowboy Bebop</li>
              <li>Death Note</li>
              <li>Digimon [S1-S4]</li>
              <li>D.N. Angel</li>
              <li>Dragon Ball Z/GT</li>
              <li>Escaflowne</li>
              <li>Full Metal Alchemist</li>
              <li>Full Metal Panic!</li>
              <li>Full Metal Panic! Fumoffu?!</li>
              <li>Full Metal Panic! The Second Raid</li>
              <li>Gate Keepers</li>
              <li>Gate Keepers 21</li>
              <li>Get Backers</li>
              <li>Gundam Seed</li>
              <li>Gundam Seed Destiny</li>
              <li>Gundam Wing</li>
              <li>Gundam X</li>
              <li>Hikaru no Go</li>
              <li>Initial D</li>
              <li>Love Hina</li>
              <li>Magical Girl Madoka</li>
              <li>Monster</li>
              <li>Naruto</li>
              <li>Naruto: Shippuuden</li>
              <li>Neon Genesis Evangelion</li>
              <li>Noir</li>
              <li>Persona</li>
              <li>Prince of Tennis</li>
              <li>New Prince of Tennis</li>
              <li>Read or Die</li>
              <li>s-CRY-ed</li>
              <li>Spiral</li>
              <li>Slam Dunk!</li>
              <li>Steins;Gate</li>
              <li>Tekkaman Blade</li>
              <li>Tekkaman Blade II</li>
              <li>Vandread</li>
            </ul>
          </div>
<?php } elseif ($_GET["category"] == "completelivereal") { ?>
          <h2>Previously Watched - Live/Real</h2><br />
          <div class="custom-content">
            <ul>
              <li>30 Rock</li>
              <li>Battlestar Galactica</li>
              <li>Big Bang Theory</li>
              <li>Black Mirror</li>
              <li>Breaking Bad</li>
              <li>Burn Notice</li>
              <li>Chuck</li>
              <li>Coupling</li>
              <li>Dawson's Creek</li>
              <li>Dexter</li>
              <li>FlashForward</li>
              <li>Fresh Prince of Bel-Air</li>
              <li>Friends</li>
              <li>Gilmore Girls</li>
              <li>Glee</li>
              <li>Hell's Kitchen</li>
              <li>Heroes [S1-S3]</li>
              <li>House of Cards</li>
              <li>How I Met Your Mother</li>
              <li>House</li>
              <li>Jersey Shore</li>
              <li>Joey</li>
              <li>King of the Nerds</li>
              <li>Malcolm in the Middle</li>
              <li>MasterChef</li>
              <li>Misfits</li>
              <li>The O.C.</li>
              <li>The Office</li>
              <li>One Tree Hill [S1-S6]</li>
              <li>Pushing Daisies</li>
              <li>Samantha Who</li>
              <li>Saved by the Bell</li>
              <li>Seinfeld</li>
              <li>Smallville</li>
              <li>True Blood</li>
              <li>Veronica Mars</li>
            </ul>
          </div>
<?php } elseif ($_GET["category"] == "completecartoons") { ?>
          <h2>Previously Watched - Cartoons</h2><br />
          <div class="custom-content">
            <ul>
              <li>Avatar - The Last Air Bender</li>
              <li>Avatar - The Legend of Korra</li>
              <li>Avengers - Earth's Mightiest Heroes</li>
              <li>Batman Beyond</li>
              <li>Batman TAS</li>
              <li>Beast Wars/Machines</li>
              <li>Futurama</li>              
              <li>Justice League / Justice League Unlimited</li>
              <li>ReBoot</li>
              <li>Samurai Pizza Cats</li>
              <li>Spider-Man TAS / Spectacular</li>
              <li>Superman TAS</li>
              <li>Teen Titans</li>
              <li>Teenage Mutant Ninja Turtles (1987/2003/2012)</li>
              <li>The Simpsons</li>
              <li>The Tick</li>
              <li>ThunderCats</li>
              <li>Transformers</li>
              <li>Wolverine and the X-Men</li>
              <li>X-Men TAS</li>
              <li>X-Men Evolution</li>
              <li>Young Justice</li>
            </ul>
          </div>
<?php } elseif ($_GET["category"] == "completegames") { ?>
          <h2>Completed - Games</h2><br />
          <div class="custom-content">
            <ul>
              <li>New Super Luigi U [Wii U]</li>
              <li>New Super Mario Bros. U [Wii U]</li>
              <li>Zelda: A Link Between Worlds [3DS]</li>
              <li>Pokemon X [3DS]</li>
              <li>Pokemon Y [3DS]</li>
              <li>Zelda: Skyward Sword [Wii]</li>
              <li>Super Mario Kart 7 [3DS]</li>
              <li>Kirby: Return to Dreamland [Wii]</li>
              <li>Kirby Mass Attack [DS]</li>
              <li>New Super Mario Bros [DS]</li>
              <li>Super Mario 3D Land [3DS]</li>
              <li>Star Fox 64 [3DS]</li>
              <li>Catherine [PS3]</li>
              <li>Zelda: Ocarina of Time [3DS]</li>
              <li>Zelda: Ocarina of Time [N64]</li>           
              <li>Hard Corps: Uprising [PS3]</li>
              <li>New Super Mario Bros. [Wii]</li>
              <li>Plants VS Zombies [PC]</li>
              <li>Plants VS Zombies [iPhone]</li>
              <li>Megaman 10 [PS3]</li>
            </ul>
          </div>
<?php } elseif ($_GET["category"] == "completeread") { ?>
          <h2>Completed - Read</h2><br />
          <div class="custom-content">
            <ul>
              <li>Neon Genesis Evangelion Vol 1 - 14 [Manga]</li>
              <li>Initial D Vol 1 - 48 [Manga]</li>
              <li>Prince of Tennis Vol 1 - 42 [Manga]</li>
              <li>Hikaru no Go Vol 1 - 23 [Manga]</li>
              <li>Dragon Ball Z Vol 1 - 26 [Manga]</li>
              <li>Bakuman Vol 1 - 2 [Manga]</li>
              <li>Hikaru no Go - The Neverending Road - Chapter 1-79 [Fanfiction]</li>
              <li>Azumanga Daioh [Manga]</li>
              <li>Street Fighter: The Ultimate Edition Book 2 [Comic]</li>
              <li>Street Fighter: The Ultimate Edition Book 1 [Comic]</li>
              <li>Get Backers [Manga]</li>
              <li>L, Change the World [Short Novel]</li>
            </ul>
          </div>
<?php }?>
<?php include '../common/footer.php'; ?>