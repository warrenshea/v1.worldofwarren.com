<?php include 'scripts.php';?><?php include 'startup.php';?><!doctype html>
<html lang="en-us">
  <head>
    <title>Warren Shea - World of Warren</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta name="description" content="Warren Shea - My content is irrelevant. My life is average.">   
    <meta name="keywords" content="art, crafts, photography, development, ASP.NET, browsers, CSS, JavaScript, jQuery, PHP, XHTML, Life, Love, Money, My Life, Blogging, Random, Dwarf Hamsters, Family, Friends, Games, Introspection, Music, OCD, UWaterloo, web developer, work, world of warcraft, writing, review, anime, manga, comics, graphic novels, games, ps3, snes, psp, ps2, nes, wii, xbox, plays, musicals, restaurants, food, tv shows, movies, shopping, Breaking Bad, Clannad, Gate Keepers 21, Get Backers, Gundam Seed, Hikaru no Go, Initial D, Justice League, Megaman, Naruto, Origami, Pokemon, Prince of Tennis, Scott Pilgrim, Snorlax, The Flash, True Blood">
    <link rel="alternate" type="application/rss+xml" title="Warren Shea - Feed" href="http://www.worldofwarren.com/?feed=rss2">
    <link rel="alternate" type="application/rss+xml" title="Warren Shea - Comments Feed" href="http://www.worldofwarren.com/?feed=comments-rss2">
    <link rel="index" title="Welcome to the World of Warren" href="http://www.worldofwarren.com">
    <link rel="Shortcut Icon" type="image/x-icon" href="/common/<?php echo $theme?>/icon.ico">
    <link rel="stylesheet" href="/common/<?php echo $theme; ?>/stylesheet.css">
  </head>
  <body>
    <div class="container">
      <header>
<?php chooseYourTheme($theme); ?>
        <div id="title">
          <a href="/"><img src="/common/<?php echo $theme?>/title.png" alt="Warren Shea" /></a>
        </div>
<?php navigation($theme); ?>        
        <div id="extraDiv1"></div><div id="extraDiv2"></div><div id="extraDiv3"></div><div id="extraDiv4"></div><div id="extraDiv5"></div>
      </header>    
      <div id="body" class="cf">  
        <div id="konami"><div class="close"><a href="javascript:;" onClick="$('#konami').fadeOut('slow');">[x]</a></div></div>
        <section class="content cf">