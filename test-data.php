<?php 
/*
Demo: AJAX Search Suggest (WeAreHunted.com Style)
Version 1.0
Author: Ian Lunn
Author URL: http://www.ianlunn.co.uk/
Demo URL: http://www.ianlunn.co.uk/demos/ajax-search-suggest-wearehunted/
Tutorial URL: http://www.ianlunn.co.uk/blog/code-tutorials/ajax-search-suggest-wearehunted/
GitHub: https://github.com/IanLunn/AJAX-Search-Suggest--WeAreHunted.com-Style-/

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/

//disclaimer: listed bands are not necessarily my preference! :)
$data = array(
	"ABBA" => "?search=ABBA",
	"ACDC" => "?search=ACDC",
	"Ace of Spades" => "?search=AceOfSpades",
	"Beyonce" => "?search=Beyonce",
	"Black Eyed Peas" => "?search=BlackEyedPeas",
	"Coldplay" => "?search=Coldplay",
	"Chaz and Dave" => "?search=ChazAndDave",
	"Dave Matthews Band" => "?search=DaveMatthewsBand",
	"Death Cab for Cutie" => "?search=DeathCabforCutie",
	"Eminem" => "?search=Eminem",
	"Elliott Smith" => "?search=ElliottSmith",
	"Florence and the Machine" => "?search=FlorenceandtheMachine",
	"Fall Out Boy" => "?search=FallOutBoy",
	"Green Day" => "?search=GreenDay",
	"Gorillaz" => "?search=Gorillaz",
	"Hollywood Undead" => "?search=HollywoodUndead",
	"He is Legend" => "?search=HeIsLegend",
	"Iron & Wine" => "?search=Iron&Wine",
	"Incubus" => "?search=Incubus",
	"John Mayer" => "?search=JohnMayer",
	"Jason Mraz" => "?search=JasonMraz",
	"Kings of Leon" => "?search=KingsofLeon",
	"Kanye West" => "?search=KanyeWest",
	"Lady GaGa" => "?search=LadyGaGa",
	"Led Zeppelin" => "?search=LedZeppelin",
	"Modest Mouse" => "?search=ModestMouse",
	"Mumford & Sons" => "?search=Mumford&Sons",
	"Nine Inch Nails" => "?search=NineInchNails",
	"Nirvana" => "?search=Nirvana",
	"Owl City" => "?search=OwlCity",
	"Oasis" => "?search=Oasis",
	"Paramore" => "?search=Paramore",
	"Pearl Jam" => "?search=PearlJam",
	"Queen" => "?search=Queen",
	"Queens of the Stone Age" => "?search=QueensoftheStoneAge",
	"Radiohead" => "?search=Radiohead",
	"Regina Spektor" => "?search=ReginaSpektor",
	"Sufjan Stevens" => "?search=SufjanStevens",
	"Stereophonics" => "?search=Stereophonics",
	"Taylor Swift" => "?search=TaylorSwift",
	"Tool" => "?search=Tool",
	"U2" => "?search=U2",
	"Underoath" => "?search=Underoath",
	"Vampire Weekend" => "?search=VampireWeekend",
	"Vader" => "?search=Vader",
	"Weezer" => "?search=Weezer",
	"Wilco" => "?search=Wilco",
	"Xzibit" => "?search=Xzibit",
	"Xiu Xiu" => "?search=XiuXiu",
	"Yeah Yeah Yeahs" => "?search=YeahYeahYeahs",
	"You Me At Six" => "?search=YouMeAtSix",
	"Zero 7" => "?search=Zero7",
	"ZZ Top" => "?search=ZZTop"
);
?>