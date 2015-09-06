
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSS3 Multi-Colum Test Page</title>
<style>
    .Article {	
	column-count: 3;
	column-gap: 20px;
	column-rule: 1px dotted #BBB;
	background-color: #FFFFFF;
	border-top: 1px solid #999;
	border-bottom: 1px solid #999;	
	padding: 8px;
	text-align: justify;
 	
}

.Article2Col {
	column-count:2;
}

.Article3Col {
	column-count:3;
}
body {
	background-color: #F4F4F4;
	font-family: Georgia, "Times New Roman", Times, serif;
	margin: 0;
	padding: 0;
	font-size: 62.5%; /* Resets 1em to 10px */
}
#splash {
	width: 37em;
	margin: 4em auto 0 auto;
	text-align: left;
	font-size: 1.45em;
}
#splash .logo {
	text-align: center;
}
#Content {
	margin: 2em;
	width: 820px;
	font-size: 1.45em;
}
code {
	font-size: 1em;
	font-family: "Courier New", Courier, mono;
	margin: 1em 0;
}
a img {
	border: none;
}
ul {
	margin: 0 0 0 1em;
	padding: 0;
}
li {
	margin: 1em 0;
}
a {
	color: #993333;	
	text-decoration: none;
}
a:hover {
	color: #FF3333;	
	text-decoration: underline;
}

table {
	margin-top: 1em;
	border-collapse: collapse;
}
th {
	text-align: left;
	padding: 2px;
}
td {
	text-align: left;
	border-left: 1px solid #999;
	border-right: 1px solid #999;
	padding: 2px;
}
#debugOutput table, #debugOutput table td {
	 border: 1px dotted #aaa;
	 border-collapse: collapse;
	 padding: 3px;
}


/* Monobook / MediaWiki css */
div.thumb {
    margin-bottom: 0.5em;
    border-style: solid; border-color: White;
    width: auto;
}
div.thumb div {
    border:1px solid #cccccc;
    padding: 3px !important;
    background-color:#f9f9f9;
    font-size: 94%;
    text-align: center;
    overflow: hidden;
}
div.thumb div a img {
    border:1px solid #cccccc;
}
div.thumb div div.thumbcaption {
    border: none;
    text-align: left;
    line-height: 1.4em;
    padding: 0.3em 0 0.1em 0;
}
div.magnify {
    float: right;
    border: none !important;
    background: none !important;
}
div.magnify a, div.magnify img {
    display: block;
    border: none !important;
    background: none !important;
}
div.tright {
    clear: right;
    float: right;
    border-width: 0.5em 0 0.8em 1.4em;
}
div.tleft {
    float: left;
}

h1, h2, h3, h4, h5, h6 {
    color: Black;
    background: none;
    margin: 0;
    padding-top: 0.5em;
    padding-bottom: 0.17em;
    border-bottom: 1px solid #aaaaaa;
	text-align: left;
}
h1 { 
	font-size: 128%; 
	padding-top: 0 !important;
}
h2 {
	padding-top: 2em !important; 
	font-size: 110%; 

}
</style>
<script type="text/javascript" src="http://www.csscripting.com/js/v1.0beta/css3-multi-column.js"></script>
</head>
<body>
<div id="Content">
	<h2>CSS3 - Multi Column Layout Demonstration </h2>
	<div class="Navigation">
	    <p><a href="example1.php?">Test Case 1</a> | 
  <a href="example2.php?">Test Case 2</a>| 
  <a href="example3.php?">Test Case 3</a> | 
  <a href="example4.php?">Test Case 4</a>  | 
  <a href="example5.php?">Test Case 5</a> | 
  <a href="example6.php?">Test Case 6</a> </p> 
		  	</div>	
	<div class="Article">
	  <h3>The years of travel</h3>
	  <p>Mozart's musical ability started to become apparent when he was a toddler.
	    He was the son of Leopold Mozart, one of Europe's leading musical pedagogues,
      whose influential textbook Versuch einer gründlichen Violinschule ("Essay on the fundamentals of violin playing") was published in 1756, the same year as Mozart's birth. Mozart received intensive musical training from his father, including instruction in both the piano and violin. Musically, he developed very rapidly and began to compose his own works at the age of five.</p>
	  <p> Leopold soon realized that he could earn a substantial income by showcasing
	    his son as a Wunderkind in the courts of Europe. Mozart gained fame as a
	    prodigy capable of playing blindfolded or with his hands behind his back,
	    and for his ability to improvise wonderfully and at length on difficult
	    passages he had never seen before. His older sister, Maria Anna, nicknamed "Nannerl", was a talented pianist and often accompanied her brother on Leopold's tours. Mozart wrote a number of piano pieces, in particular duets and duos, to play with her. On one occasion when Mozart became ill, Leopold expressed more concern over the loss of income than over his son's well-being. Constant travel and cold weather may have contributed to his subsequent illness later in life.</p>
	  <p>During his formative years, Mozart completed several journeys throughout
	    Europe, beginning with an exhibition in 1762 at the Court of the Elector
	    of Bavaria in Munich, then in the same year at the Imperial Court in Vienna.
	    A long concert tour soon followed (three and a half years), which took him
	    with his father to the courts of Munich, Mannheim, Paris, London, The Hague,
	    again to Paris, and back home via Zürich,
    Donaueschingen, and Munich. They went to Vienna again in late 1767 and remained
    there until December 1768. </p>
	  <p> After one year spent in <a href="http://en.wikipedia.org/wiki/Salzburg" title="Salzburg">Salzburg</a>,
	    three trips to <a href="http://en.wikipedia.org/wiki/Italy" title="Italy">Italy</a> followed:
	    from December <a href="http://en.wikipedia.org/wiki/1769" title="1769">1769</a> to
	    March <a href="http://en.wikipedia.org/wiki/1771" title="1771">1771</a>,
	    from August to December <a href="http://en.wikipedia.org/wiki/1771" title="1771">1771</a>,
	    and from October <a href="http://en.wikipedia.org/wiki/1772" title="1772">1772</a> to
	    March <a href="http://en.wikipedia.org/wiki/1773" title="1773">1773</a>.
	    During the first of these trips, Mozart met <a href="http://en.wikipedia.org/wiki/Giovanni_Battista_Martini" title="Giovanni Battista Martini">G.B.
	    Martini</a> in <a href="http://en.wikipedia.org/wiki/Bologna" title="Bologna">Bologna</a>,
	    and was accepted as a member of the famous <i><a href="http://en.wikipedia.org/wiki/Accademia_Filarmonica" title="Accademia Filarmonica">Accademia
	    Filarmonica</a></i>. A highlight of the Italian journey, which is now an
	    almost legendary tale, occurred when he heard <a href="http://en.wikipedia.org/wiki/Gregorio_Allegri" title="Gregorio Allegri">Gregorio
	    Allegri</a>'s <i><a href="http://en.wikipedia.org/wiki/Miserere_%28Allegri%29" title="Miserere (Allegri)">Miserere</a></i> once
	    in performance, then wrote it out in its entirety from memory, only returning
      a second time to correct minor errors. </p>
	  <p>In September of <a href="http://en.wikipedia.org/wiki/1777" title="1777">1777</a>,
	    accompanied only by his mother, Mozart began a tour of <a href="http://en.wikipedia.org/wiki/Europe" title="Europe">Europe</a> that
	    included <a href="http://en.wikipedia.org/wiki/Munich" title="Munich">Munich</a>, <a href="http://en.wikipedia.org/wiki/Mannheim" title="Mannheim">Mannheim</a>,
	    and <a href="http://en.wikipedia.org/wiki/Paris" title="Paris">Paris</a>,
      where his mother died.</p>
	  <p>During his trips, Mozart met a great number of musicians and acquainted
	    himself with the works of other great composers. He came to know the work
	    of <a href="http://en.wikipedia.org/wiki/J.S._Bach" title="J.S. Bach">J.S.
	    Bach</a> and <a href="http://en.wikipedia.org/wiki/Handel" title="Handel">G.F.
	    Handel</a>; and he met <a href="http://en.wikipedia.org/wiki/Joseph_Haydn" title="Joseph Haydn">Joseph
	    Haydn</a>, who declared to Leopold, "Before God and as an honest man I tell
	    you that your son is the greatest composer known to me either in person
	    or by name. He has taste and, what is more, the most profound knowledge
	    of composition.". Even non-musicians caught Mozart's attention: he was so
	    taken by the sound created by <a href="http://en.wikipedia.org/wiki/Benjamin_Franklin" title="Benjamin Franklin">Benjamin
	    Franklin</a>'s <a href="http://en.wikipedia.org/wiki/Glass_harmonica" title="Glass harmonica">glass
	    harmonica</a> that he composed several pieces of music for it.</p>
	</div>
	<div id="Output"></div>

</div>

</body>
</html>
