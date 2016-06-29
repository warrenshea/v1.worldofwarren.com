<?php header("Content-type: text/javascript");header("Expires:Mon, 31 Dec 2015 05:00:00 GMT"); ?>
<?php $nothing = false; if($nothing){ ?><script type="text/javascript" language="javascript"><?php } ?>
/*
@group load Theme Based JavaScript
@group load Global JavaScript
@group load Blog JavaScript
@group load Twitter JavaScript
@group load Facebook JavaScript
@group run loading JavaScript
*/

/* @group load Theme Based JavaScript */
<?php if ($_GET["ws_theme"] == "megaman") {?>
function blog_onload() {
  resize_window(); 
//	showComments();
  createDuplicateNavForMobile();
}

function chooseYourThemeSwap(chooseyourthemetext) {
  $(".theme .text").html(chooseyourthemetext);
}

function resize_window() {
  $("#body").css({"height":(document.body.clientHeight - 175) + "px"}); //for scrollbar
}

$(window).resize(function() {
  resize_window();
});
<?php } elseif ($_GET["ws_theme"] == "naruto") {?>
function blog_onload() {
  createDuplicateNavForMobile();
  $("#extraDiv22").html("<img src='/common/naruto/kunai.png' alt=''>");
  $("#extraDiv21").html("<img src='/common/naruto/photo_choji.png' alt=''>");

  var screen_objects=new Array();
  screen_objects[0]="sasuke";
  screen_objects[1]="fourth";
  screen_objects[2]="gaara";
  screen_objects[3]="ino";
  screen_objects[4]="jiraiya";
  screen_objects[5]="kakashi";
  screen_objects[6]="konoha";
  screen_objects[7]="naruto";
  screen_objects[8]="rock";
  screen_objects[9]="sakura";
  screen_objects[10]="shikamaru";
  screen_objects[11]="shuriken";  //right
  screen_objects[12]="shuriken2"; //left
  screen_objects[13]="shuriken3"; //bottom
  var randomnumber_bottom=Math.floor(Math.random()*17) //get bottom image
  if (randomnumber_bottom >= 11) {
    $("#extraDiv24").html("<img src='/common/naruto/shuriken3.png' alt=''>");
  } else {
    $("#extraDiv23").html("<img src='/common/naruto/photo_" + screen_objects[randomnumber_bottom] + "_2.png' alt='" + screen_objects[randomnumber_bottom] + " '>");
  }
  var randomnumber_right   //get right image //prevent duplicates
  do { randomnumber_right=Math.floor(Math.random()*17)
  } while (randomnumber_right == randomnumber_bottom)
  
  if (randomnumber_right >= 11) { //right image = shuriken
    $("#extraDiv26").html("<img src='/common/naruto/shuriken.png' alt=''>");
    $("#extraDiv27").html("<img src='/common/naruto/shuriken2.png' alt=''>");
  }
  else { //right image = photo    
    //display second right image
    var randomnumber_objects=Math.floor(Math.random()*1) //50/50 chance that photo_2, which goes behind photo_1 will appear
    if (randomnumber_objects == 0) {
      //prevent duplicates
      var randomnumber_right_2
      do { randomnumber_right_2=Math.floor(Math.random()*10)
      } while (randomnumber_right_2 == randomnumber_right || randomnumber_right_2 == randomnumber_bottom)
      //display right image 2
      $("#extraDiv29").html("<img src='/common/naruto/photo_" + screen_objects[randomnumber_right_2] + "_2.png' alt='" + screen_objects[randomnumber_right_2] + " '>");
    }
    //end display second right image
    
    //display right image
    $("#extraDiv28").html("<img src='/common/naruto/photo_" + screen_objects[randomnumber_right] + ".png' alt='" + screen_objects[randomnumber_right] + " '>");
  }

  //load content_secondary
  var location = window.location.toString();
  if (location.indexOf("about") > 0) {
    $("#box_profile").css({"display":"block"});
  } else if (location.indexOf("projects") > 0) {
    $("#box_to_do").css({"display":"block"});
  } else if (location.indexOf("hobbies") > 0) {
    $("#box_to_do").css({"display":"block"});
    $("#box_complete").css({"display":"block"});
    $("#box_wtb").css({"display":"block"});
    $("#extraDiv29").css({"top":"435px"});
    $("#extraDiv30").css({"top":"50px"});
  } else if (location.indexOf("portfolio") > 0) {
    if (randomnumber_bottom < 11) {
       $("#extraDiv30").html("<img src='/common/naruto/shuriken3.png' alt=''>");
    }
  } else if (location.indexOf("gallery") > 0) {
    if (randomnumber_bottom < 11) {
       $("#extraDiv30").html("<img src='/common/naruto/shuriken3.png' alt=''>");
    }
  } else if (location.indexOf("code-reference") > 0) {
    $("#box_code_reference").css({"display":"block"});
    $("#box_code_links").css({"display":"block"});
  } else if (location.indexOf("resume") > 0) {
    $("#box_other_versions").css({"display":"block"});
    $("#box_contact_information").css({"display":"block"});
  } else {
    //document.getElementById("box_profile").style.display = "block";
    $("#box_search").css({"display":"block"});
    $("#extraDiv30").css({"top":"435px"});
    $("#extraDiv30").css({"display":"none"});
  }
}
<?php } elseif ($_GET["ws_theme"] == "gmail") {?>
function blog_onload() {
  setGmailColor(getCookie("gmail_theme_color"));
//	showComments();
  createDuplicateNavForMobile();
}

function setGmailColor(setColorCode) {
  var primary_color;
  var secondary_color;
  if (setColorCode == "blue") {
    primary_color = "#6694e3";
    secondary_color = "#b2c9f1";
    changecss('html','background','none');
  } else if (setColorCode == "green") {
    primary_color = "#8dc274";
    secondary_color = "#d4edc9";
    changecss('html','background','none');
  } else if (setColorCode == "bubble") {
    primary_color = "#ae88dc";
    secondary_color = "#efe5ff";
    changecss('html','background','none');
  } else if (setColorCode == "cherry") {
    primary_color = "#ef575a";
    secondary_color = "#ffe3e3";
    changecss('html','background','url(\'https://mail.google.com/mail/images/2/5/cherry/bg-main.png\') repeat');
  } else { //blue
    primary_color = "#6694e3";
    secondary_color = "#b2c9f1";
    changecss('html','background','none');
  }
  setCookie("gmail_theme_color", setColorCode);
  changecss('a:link, a:hover, a:visited, a:active, .entry p a:visited, .entry p a:link, .entry p a:active, .postmetadata a:link, .postmetadata a:active, .postmetadata, aside a:link, aside a:visited, aside a:active, #body.container a:link, #body.container a:visited, #body.container a:active, nav li a:link, nav li a:visited nav li a:active','color',primary_color);
  changecss('a:hover','color',primary_color);

  changecss('nav li.active','background-color',primary_color);
  changecss('section.content, section.content h2, section.content .album_thumb_container, aside .box, aside .box .box_middle','border-color',primary_color);

  changecss('nav li:hover','background-color',secondary_color);
  
<?php if ($_GET["page"] == "/default.php") { ?>
  changecss('section.content','background-color',secondary_color);
<?php } else { ?>
  changecss('section.content','background-color',"#FFF");
<?php } ?>
  $("body .container").css({"display":"block"});
}
<?php } elseif ($_GET["ws_theme"] == "googleplus") {?>
function blog_onload() {
  showComments();
  createDuplicateNavForMobile();
}

function resize_window() {
}

$(window).resize(function() {
});

$(function(){
	var $container = $("#isotope-container");
	$container.isotope({});
	var $optionSets = $("#options .option-set"),$optionLinks = $optionSets.find("a");
	$optionLinks.click(function(){
		var $this = $(this);
		if ($this.hasClass("selected")) {
			return false;
		}
		var $optionSet = $this.parents(".option-set");
		$optionSet.find(".selected").removeClass("selected");
		$this.addClass("selected");
		var options = {},
			key = $optionSet.attr("data-option-key"),
			value = $this.attr("data-option-value");
		value = value === "false" ? false : value;
		options[key] = value;
		if (key === "layoutMode" && typeof changeLayoutMode === "function") {
			changeLayoutMode($this,options)
		} else {
			$container.isotope(options);
		}
		return false;
	});
});
<?php } ?>

/* @group load Global JavaScript */
function blog_onUnload() {
  $.post("/common/unload.php?task=unload");
}

function toggleShowHide(div_id) {
  if (document.getElementById(div_id).style.display == 'block')
    document.getElementById(div_id).style.display = 'none';
  else
    document.getElementById(div_id).style.display = 'block';
}

function popup(url,width,height) {
    popupWidth = (width == null) ? 800 : width;
    popupHeight = (height == null) ? 600 : height;    
    var newPopupWindow = window.open(url, null, 'scrollbars=1,resizable=1,width='+popupWidth+',height='+popupHeight);
}

function googleAnalytics () {
  try {
    var pageTracker = _gat._getTracker("UA-4735201-4");
    pageTracker._trackPageview();
  } catch(err) {}
}

function setCookie(type,value) {
  var exdate=new Date();
  exdate.setDate(exdate.getDate()+100);
  document.cookie= type + "=" + value + "; expires="+exdate.toUTCString() + "; path=/; domain=worldofwarren.com;";
}

function getCookie(c_name) {
  if (document.cookie.length>0) {
    c_start=document.cookie.indexOf(c_name + "=");
    if (c_start!=-1) {
      c_start=c_start + c_name.length+1;
      c_end=document.cookie.indexOf(";",c_start);
      if (c_end==-1) c_end=document.cookie.length;
        return unescape(document.cookie.substring(c_start,c_end));
    }
  }
  return "";
}

function openContentWindow(id,delaymilsec,speed) {
    var contentWindowObj = document.getElementById(id);
    $(contentWindowObj).delay(delaymilsec).fadeIn(speed); // Show Content Window            
}

function ajaxRequest(xml, callback) {
  var httpRequest = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
  httpRequest.onreadystatechange= function() { callback(httpRequest) };
  httpRequest.open("GET",xml,true);
  httpRequest.send(null);
}

function getNodeAttribute(parentNode, instance, tagName, paramName) {
  var val = parentNode[instance].getElementsByTagName(tagName);
  try { return val[0].getAttribute(paramName); } catch (err) {}
}

function getNodeValue(parentNode, instance, tagName) {
  var val = parentNode[instance].getElementsByTagName(tagName);
  try { return val[0].firstChild.nodeValue; } catch (err) { }
}

function createDuplicateNavForMobile(){
  $("<select onchange='window.location.href=this.options[this.selectedIndex].value;' />").appendTo("nav");// Create the dropdown base
  $("<option />", {
    "selected": "selected",
    "value"   : "",
    "text"    : "Go to..."
  }).appendTo("nav select");// Create default option "Go to..."
  $("nav a").each(function() {// Populate dropdown with menu items
   var el = $(this);
   $("<option />", {
     "value"   : el.attr("href"),
     "text"    : el.text()
   }).appendTo("nav select");
  });	
}



/* @group load Blog JavaScript */
function writeXMLBlog(httpRequest) {  // Parse content from XML and display when loaded
  if (httpRequest.readyState==4) { 
    if (httpRequest.status==200) {

      page = httpRequest.responseXML.documentElement.getElementsByTagName("channel");

      pagelink = getNodeValue(page,0,"title");  
      if (pagelink == "Geekologie - Gadgets, Gizmos, and Awesome") {
        title = "geekologie";
        sitelink = "http://www.geekologie.com/";
        blogs_daily_reading--;
      } else if (pagelink == "Newsarama.com") {
        title = "newsarama";
        sitelink = "http://www.newsarama.com";
        blogs_daily_reading--;
      } else if (pagelink == "Topless Robot") {
        title = "topless robot";
        sitelink = "http://www.toplessrobot.com/";
        blogs_daily_reading--;
      } else if (pagelink == "Plastikitty") {
        title = "plastikitty";
        sitelink = "http://www.plastikitty.com/";
        blogs_daily_reading--;
      } else if (pagelink == "Kotaku") {
        title = "kotaku";
        sitelink = "http://kotaku.com/";
        blogs_daily_reading--;
      } else if (pagelink == "HTML5 Weekly") {
        title = "html5 weekly";
        sitelink = "http://html5weekly.com/";
        blogs_daily_reading--;
      } else if (pagelink == "JavaScript Weekly") {
        title = "javascript weekly";
        sitelink = "http://javascriptweekly.com/";
        blogs_daily_reading--;
      } else if (pagelink == "Ars Technica") {
        title = "ars technica";
        sitelink = "http://arstechnica.com/";
        blogs_daily_reading--;
      }
<?php /*
http://worldofwarren.com/common/proxy.php?type=xml&url=http://www.geekologie.com/index.xml
http://worldofwarren.com/common/proxy.php?type=xml&url=http://www.toplessrobot.com/rss.xml
http://worldofwarren.com/common/proxy.php?type=xml&url=http://feeds.feedburner.com/tomopop
http://worldofwarren.com/common/proxy.php?type=xml&url=http://www.newsarama.com/home/feed/site.xml
http://worldofwarren.com/common/proxy.php?type=xml&url=http://www.gundammodelkits.com/feed
http://worldofwarren.com/common/proxy.php?type=xml&url=http://feeds.arstechnica.com/arstechnica/everything
http://worldofwarren.com/common/proxy.php?type=xml&url=http://feeds.gawker.com/kotaku/full */ ?>
      var xmlitem = httpRequest.responseXML.documentElement.getElementsByTagName("item");
      var list = "<ul class=\"box_ul\"><li class=\"rss_icon\"><a class='rsswidget' href='" + sitelink + "' title='' target='_blank'>" + title + "</a><br /><a class='rsswidget' style='font-weight: normal;' href='" + getNodeValue(xmlitem,0,"link") + "' title=''>" + getNodeValue(xmlitem,0,"title") + "</a><br /><br />" + "</li></ul>";
      if (blogs_daily_reading == 0) { openContentWindow("box_blogs_daily",1500,"slow");}
      if (blogs_misc == 0) { openContentWindow("box_blogs_misc",1500,"slow");}
      if (blogs_food == 0) { openContentWindow("box_blogs_food",1500,"slow");}
      document.getElementById("blog_" + title.replace(/\s/g, '')).innerHTML = list;
      return;
    }
  }
}

function writeXMLBlogTomopop(httpRequest) {  // Parse content from XML and display when loaded
  if (httpRequest.readyState==4) { 
    if (httpRequest.status==200) {

      xmlitem = httpRequest.responseXML.documentElement.getElementsByTagName("entry");
      
      var list = "<ul class=\"box_ul\"><li class=\"rss_icon\"><a class='rsswidget' href='http://www.tomopop.com' title='' target='_blank'>tomopop</a><br /><a class='rsswidget' style='font-weight: normal;' href='" + getNodeAttribute(xmlitem,0,"link","href") + "' title=''>" + getNodeValue(xmlitem,0,"title") + "</a><br /><br /></li></ul>";  
      blogs_daily_reading--;
      if (blogs_daily_reading == 0) { openContentWindow("box_blogs_daily",1500,"slow");}
      document.getElementById("blog_tomopop").innerHTML = list;
      return;
    }
  }
}

/* @group load Twitter JavaScript */
function writeTwitter(httpRequest) {  // Parse content from XML and display when loaded
  if (httpRequest.readyState==4) { 
    if (httpRequest.status==200) {
      var page = httpRequest.responseXML.documentElement.getElementsByTagName("entry");
      var list = "<ul>";
      for (i=0; i<3; i++) {
        list += "<li>" + getNodeValue(page,i,"content") + "</li>";
      }
      list += "</ul>";

      openContentWindow("box_twitter",1500,"slow");
      document.getElementById('twitter_update_list').innerHTML = list;
      return;
    }
  }
}

/* @group load Facebook JavaScript */
function writeFacebook(httpRequest) {  // Parse content from XML and display when loaded
  if (httpRequest.readyState==4) { 
    if (httpRequest.status==200) {
      var page = httpRequest.responseXML.documentElement.getElementsByTagName("item");
      var list = "<ul>";
      for (i=0; i<1; i++) {
        list += "<li>" + getNodeValue(page,i,"description") + "</li>";
      }
      list += "</ul>";

      openContentWindow("box_facebook",1500,"slow");
      document.getElementById('facebook_update_list').innerHTML = list;
      return;
    }
  }
}

/* @group load Facebook JavaScript */
function writeComments(httpRequest) {  // Parse content from XML and display when loaded
  if (httpRequest.readyState==4) { 
    if (httpRequest.status==200) {
      var page = httpRequest.responseXML.documentElement.getElementsByTagName("item");
      var list = "<ul>";
      for (i=0; i<3; i++) {
        title = getNodeValue(page,i,"title");
        title = title.split(" by ");
        creator = title[1];
        title = title[0];
        list += "<li><a href=\"" + getNodeValue(page,i,"guid") + "\">" + title.substring(11) + "</a><br /><strong>" + creator + "</strong> " + getNodeValue(page,i,"description") + "</li>";
      }
      list += "</ul>";

      openContentWindow("box_comments",1500,"slow");
      document.getElementById('comments_active').innerHTML = list;
      return;
    }
  }
}

//Custom JavaScript Functions by Shawn Olson
//Copyright 2006-2008
//http://www.shawnolson.net
//If you copy any functions from this page into your scripts, you must provide credit to Shawn Olson & http://www.shawnolson.net
//*******************************************
function stripCharacter(words,character) {
  //documentation for this script at http://www.shawnolson.net/a/499/
  var spaces = words.length;
  for(var x = 1; x<spaces; ++x){
    words = words.replace(character, "");
  }
  return words;
}

function changecss(theClass,element,value) {
  //Last Updated on June 23, 2009
  //documentation for this script at
  //http://www.shawnolson.net/a/503/altering-css-class-attributes-with-javascript.html
  var cssRules;
  var added = false;
  for (var S = 0; S < document.styleSheets.length; S++) {
    if (document.styleSheets[S]['rules']) {
      cssRules = 'rules';
    } else if (document.styleSheets[S]['cssRules']) {
      cssRules = 'cssRules';
    } else {
      //no rules found... browser unknown
    }

    for (var R = 0; R < document.styleSheets[S][cssRules].length; R++) {
      if (document.styleSheets[S][cssRules][R].selectorText == theClass) {
        if(document.styleSheets[S][cssRules][R].style[element]){
          document.styleSheets[S][cssRules][R].style[element] = value;
          added=true;
          break;
        }
      }
    }
    if(!added){
      if(document.styleSheets[S].insertRule){
        document.styleSheets[S].insertRule(theClass+' { '+element+': '+value+'; }',document.styleSheets[S][cssRules].length);
      } else if (document.styleSheets[S].addRule) {
        document.styleSheets[S].addRule(theClass,element+': '+value+';');
      }
    }
  }
}

function checkUncheckAll(theElement) {
  var theForm = theElement.form, z = 0;
  for(z=0; z<theForm.length;z++){
    if(theForm[z].type == 'checkbox' && theForm[z].name != 'checkall'){
      theForm[z].checked = theElement.checked;
    }
  }
}

function checkUncheckSome(controller,theElements) {
  //Programmed by Shawn Olson
  //Copyright (c) 2006-2007
  //Updated on August 12, 2007
  //Permission to use this function provided that it always includes this credit text
  //  http://www.shawnolson.net
  //Find more JavaScripts at http://www.shawnolson.net/topics/Javascript/

  //theElements is an array of objects designated as a comma separated list of their IDs
  //If an element in theElements is not a checkbox, then it is assumed
  //that the function is recursive for that object and will check/uncheck
  //all checkboxes contained in that element

   var formElements = theElements.split(',');
   var theController = document.getElementById(controller);
   for(var z=0; z<formElements.length;z++){
     theItem = document.getElementById(formElements[z]);
     if(theItem.type){
       if (theItem.type=='checkbox') {
         theItem.checked=theController.checked;
       }
     } else {
       theInputs = theItem.getElementsByTagName('input');
       for(var y=0; y<theInputs.length; y++){
         if(theInputs[y].type == 'checkbox' && theInputs[y].id != theController.id){
           theInputs[y].checked = theController.checked;
         }
       }
     }
   }
}

function changeImgSize(objectId,newWidth,newHeight) {
  imgString = 'theImg = document.getElementById("'+objectId+'")';
  eval(imgString);
  oldWidth = theImg.width;
  oldHeight = theImg.height;
  if(newWidth>0){
   theImg.width = newWidth;
  }
  if(newHeight>0){
   theImg.height = newHeight;
  }
}

function changeColor(theObj,newColor){
  eval('var theObject = document.getElementById("'+theObj+'")');
  if(theObject.style.backgroundColor==null){theBG='white';}else{theBG=theObject.style.backgroundColor;}
  if(theObject.style.color==null){theColor='black';}else{theColor=theObject.style.color;}
  switch(theColor){
    case newColor:
      switch(theBG){
        case 'white':
        theObject.style.color = 'black';
        break;
      case 'black':
        theObject.style.color = 'white';
        break;
      default:
        theObject.style.color = 'black';
        break;
      }
    break;
  default:
    theObject.style.color = newColor;
    break;
  }
}

function showComments() {
//  document.getElementById('comments_inactive').style.display = 'none';
<?php if ($_GET["page"] == "/default.php") {?>
//  document.getElementById('comments_active').style.display = 'block';
<?php } ?>
}

/* @group run loading JavaScript */
window.onload=blog_onload;
window.onunload=blog_onUnload;<?php echo "\n"; ?>
$.post("/common/unload.php?<?php echo $_SERVER['QUERY_STRING'];?>&ref=" + document.referrer);
googleAnalytics();
setCookie("ws_theme", "<?php echo $_GET["ws_theme"]?>");
setCookie("user_resolution", screen.width +"x"+ screen.height);
<?php if ($_GET["page"] == "/gallery/default.php" || $_GET["page"] == "/default.php") { ?>
$(document).ready(function(){
  $(".gallery a[rel^='prettyPhoto']").prettyPhoto({theme:'facebook'});
});
<?php } ?>
<?php if ($_GET["page"] == "/default.php" && $_GET["ws_theme"] != "legacy") { ?>
konami = new Konami();
konami.code = function() {$('#konami').fadeIn('slow');}
konami.load();
<?php } ?>
<?php if ($_GET["page"] == "/default.php") { ?>
blogs_daily_reading = 1;
blogs_misc = 1;
blogs_food = 1;
<?php if ($_GET["ws_theme"] != "naruto") { ?>
//ajaxRequest("/common/proxy.php?type=xml&url=http://search.twitter.com/search.atom?q=from:warrenshea",writeTwitter);
//ajaxRequest("/common/proxy.php?type=xml&url=http://worldofwarren.com/common/facebook.php",writeFacebook);
//ajaxRequest("/common/proxy.php?type=xml&url=http://www.worldofwarren.com/?feed=comments-rss2",writeComments);
ajaxRequest("/common/proxy.php?type=xml&url=http://feeds.arstechnica.com/arstechnica/everything",writeXMLBlog);
ajaxRequest("/common/proxy.php?type=xml&url=http://html5weekly.com/rss/11eca6ii",writeXMLBlog);
ajaxRequest("/common/proxy.php?type=xml&url=http://javascriptweekly.com/rss/19j9ge5n",writeXMLBlog);
ajaxRequest("/common/proxy.php?type=xml&url=http://www.geekologie.com/index.xml",writeXMLBlog);
ajaxRequest("/common/proxy.php?type=xml&url=http://www.toplessrobot.com/rss.xml",writeXMLBlog);
ajaxRequest("/common/proxy.php?type=xml&url=http://www.newsarama.com/home/feed/site.xml",writeXMLBlog);
ajaxRequest("/common/proxy.php?type=xml&url=http://feeds.feedburner.com/tomopop",writeXMLBlogTomopop);
ajaxRequest("/common/proxy.php?type=xml&url=http://www.plastikitty.com/?feed=rss2",writeXMLBlog);
//ajaxRequest("/common/proxy.php?type=xml&url=http://www.gundammodelkits.com/feed",writeXMLBlog);
ajaxRequest("/common/proxy.php?type=xml&url=http://feeds.gawker.com/kotaku/full",writeXMLBlog);
<?php } ?>
<?php /*
jamie maing
http://feeds.feedburner.com/firstmaingo

foodberry
http://feeds2.feedburner.com/foodberry

six revisions
http://feeds.feedburner.com/SixRevisions

brad colbow
http://bradcolbow.com/site/feed/

bad critics
http://badcritics.com/?feed=rss2

sophie's blog and things
http://www.ovxii.com/feed

newsarama
http://feeds.newsarama.com/Newsaramasite

io9
http://io9.com/excerpts.xml

el granto
http://feeds.feedburner.com/ElGranto?format=xml

milk and honey
http://milkandhoneycafe.blogspot.com/feeds/posts/default?alt=rss

mish's playground
http://mplayground.blogspot.com/feeds/posts/default?alt=rss

corduroy
http://www.corduroymag.com/feed

LilFormers.com
http://www.lilformers.com/index.php/feed/

hollywood hates me
http://hollywoodhatesme.wordpress.com/feed/

bonfire consulting
http://bonfireconsulting.ca/?feed=rss2

Quirksmode
http://www.quirksmode.org/blog/index.xml

smashing magazine
http://rss1.smashingmagazine.com/feed/
*/ ?>
<?php } ?>
<?php if ($_GET["page"] == "/portfolio/default.php") { ?>
function changePortfolio(section) {
  document.getElementById("development").style.display = "none";
  document.getElementById("design").style.display = "none";
  document.getElementById("guides").style.display = "none";
  document.getElementById("videos").style.display = "none";
  document.getElementById("archives").style.display = "none";
  document.getElementById("development_nav").className = "portfolio_nav_inactive";
  document.getElementById("design_nav").className = "portfolio_nav_inactive";
  document.getElementById("guides_nav").className = "portfolio_nav_inactive";
  document.getElementById("videos_nav").className = "portfolio_nav_inactive";
  document.getElementById("archives_nav").className = "portfolio_nav_inactive";

  document.getElementById(section).style.display = "block";
  document.getElementById(section + "_nav").className = "portfolio_nav_active";
}

document.getElementById("development").style.display = 'block';
document.getElementById("design").style.display = 'none';
document.getElementById("guides").style.display = 'none';
document.getElementById("videos").style.display = 'none';
document.getElementById("archives").style.display = 'none';
<?php } ?>
<?php if ($_GET["page"] == "/gallery/default.php") { ?>
function changeGallery(section) {
  document.getElementById("specificalbum").style.display = "none";
  document.getElementById("toysandmodels").style.display = "none";
  document.getElementById("artgallery").style.display = "none";
  document.getElementById("reallife").style.display = "none";
  document.getElementById("commissions").style.display = "none";
  document.getElementById("all_nav").className = "gallery_nav_inactive";
  document.getElementById("toysandmodels_nav").className = "gallery_nav_inactive";
  document.getElementById("artgallery_nav").className = "gallery_nav_inactive";
  document.getElementById("reallife_nav").className = "gallery_nav_inactive";
  document.getElementById("commissions_nav").className = "gallery_nav_inactive";
  if (section == "all") {
    document.getElementById("toysandmodels").style.display = "block";
    document.getElementById("artgallery").style.display = "block";
    document.getElementById("reallife").style.display = "block";
    document.getElementById("commissions").style.display = "block";
    document.getElementById("all_nav").className = "gallery_nav_active";
  }
  else {
    document.getElementById(section).style.display = "block";
    document.getElementById(section + "_nav").className = "gallery_nav_active";
  }
}
<?php if ($_SERVER['QUERY_STRING'] != "page=/gallery/default.php&ws_theme=" . $_GET["ws_theme"]) {?>
document.getElementById("specificalbum").style.display = "block";
document.getElementById("toysandmodels").style.display = "none";
document.getElementById("artgallery").style.display = "none";
document.getElementById("reallife").style.display = "none";
document.getElementById("commissions").style.display = "none";
document.getElementById("all_nav").className = "gallery_nav_inactive";
<?php } else { ?>
document.getElementById("toysandmodels").style.display = "block";
document.getElementById("artgallery").style.display = "block";
document.getElementById("reallife").style.display = "block";
document.getElementById("commissions").style.display = "block";
<?php } ?>
<?php } ?>
<?php if ($_GET["page"] == "/links/default.php") { ?>
function changeLinks(section) {
  document.getElementById("web").style.display = "none";
  document.getElementById("webdev").style.display = "none";
  document.getElementById("webdesign").style.display = "none";
  document.getElementById("shopping").style.display = "none";
  document.getElementById("artists").style.display = "none";
  document.getElementById("music").style.display = "none";
  document.getElementById("friends").style.display = "none";
  document.getElementById("socialmedia").style.display = "none";
  document.getElementById("all_nav").className = "gallery_nav_inactive";
  document.getElementById("web_nav").className = "gallery_nav_inactive";
  document.getElementById("webdev_nav").className = "gallery_nav_inactive";
  document.getElementById("webdesign_nav").className = "gallery_nav_inactive";
  document.getElementById("shopping_nav").className = "gallery_nav_inactive";
  document.getElementById("artists_nav").className = "gallery_nav_inactive";
  document.getElementById("music_nav").className = "gallery_nav_inactive";
  document.getElementById("friends_nav").className = "gallery_nav_inactive";
  document.getElementById("socialmedia_nav").className = "gallery_nav_inactive";
  if (section == "all") {
    document.getElementById("web").style.display = "block";
    document.getElementById("webdev").style.display = "block";
    document.getElementById("webdesign").style.display = "block";
    document.getElementById("shopping").style.display = "block";
    document.getElementById("artists").style.display = "block";
    document.getElementById("music").style.display = "block";
    document.getElementById("friends").style.display = "block";
    document.getElementById("socialmedia").style.display = "block";
    document.getElementById("all_nav").className = "gallery_nav_active";
  }
  else {
    document.getElementById(section).style.display = "block";
    document.getElementById(section + "_nav").className = "gallery_nav_active";
  }
}
<?php } ?>