/* PARALLAX SCROLLING EXPERIMENT
   Master Styles
   Author: Jonathan Nicol (f6design.com)
   *****************************************************************/


/* Global reset
   http://meyerweb.com/eric/tools/css/reset/ 
   *****************************************************************/

   html, body, div, span, applet, object, iframe,
   h1, h2, h3, h4, h5, h6, p, blockquote, pre,
   a, abbr, acronym, address, big, cite, code,
   del, dfn, em, img, ins, kbd, q, s, samp,
   small, strike, strong, sub, sup, tt, var,
   b, u, i, center,
   dl, dt, dd, ol, ul, li,
   fieldset, form, label, legend,
   table, caption, tbody, tfoot, thead, tr, th, td,
   article, aside, canvas, details, embed, 
   figure, figcaption, footer, header, hgroup, 
   menu, nav, output, ruby, section, summary,
   time, mark, audio, video {
   	margin: 0;
   	padding: 0;
   	border: 0;
   	font-size: 100%;
   	font: inherit;
   	vertical-align: baseline;
   }
   /* HTML5 display-role reset for older browsers */
   article, aside, details, figcaption, figure, 
   footer, header, hgroup, menu, nav, section {
   	display: block;
   }
   body {
   	line-height: 1;
   }
   ol, ul {
   	list-style: none;
   }
   blockquote, q {
   	quotes: none;
   }
   blockquote:before, blockquote:after,
   q:before, q:after {
   	content: '';
   	content: none;
   }
   table {
   	border-collapse: collapse;
   	border-spacing: 0;
   }

/* Extended base styles (site specific)
*****************************************************************/

html { 
	overflow-y: scroll; /* always force a scrollbar in non-IE */
}
body {
	background: #e3e5e5;
	overflow-x: hidden;
	height: 4550px;
	line-height: 1.5;
	color: #000;
	font-size: 14px;
	font-family: Arial,sans-serif;
}
h1 {
	color: #21a97e;
}
a, a:link,
a:active,
a:visited {
	-webkit-transition: color 0.25s ease-out;
	-moz-transition: color 0.25s ease-out;
	-o-transition: color 0.25s ease-out;
	transition: color 0.25s ease-out;
	color:#21a97e;
	outline: none;
	text-decoration:none;
}
a:hover { 
	color:#000;
}
img { 
	display:block;
}
p {
	margin:1em 0;
}

/* Common shared styles
*****************************************************************/

hr {
	margin: 0;
	border: none;
	border-top: 1px solid #3b3b3b;
	border-bottom: 1px solid #3b3b3b;
	height: 3px;
}

/* Page structure
*****************************************************************/

#wrapper {
	position: relative;
}
#branding {
	width: 100%;
	background: #fff;
}
#branding h1 {
	width: 940px;
	padding: 10px 15px;
	margin: 0 auto;
	text-transform: uppercase;
	font-size: 18px;
	font-weight: bold;
}

/* Nav
*****************************************************************/

nav#primary {
	z-index: 5;
	position: fixed;
	top: 50%;
	right: 16px;
	margin-top: -40px;
}
nav#primary li {
	position: relative;
	height: 20px;
}
nav#primary a {
	display: block;
	width: 20px;
	height: 20px;
	text-indent: -9999px;
	background: transparent url('../img/nav-dot.png') 4px 4px no-repeat;
}
nav#primary a:hover, nav#primary a.active {
	background: transparent url('../img/nav-dot.png') 4px -16px no-repeat;
}
nav#primary h1 {
	position: absolute;
	right: 22px;
	top: -7px;
	display: none;
	padding: 4px 20px 4px 7px;;
	color: #fff;
	white-space: nowrap;
	background: transparent url('../img/nav-arrow.png') 100% 50% no-repeat;
}
nav.next-prev {
	margin: 20px 0 0 0;
}
a.prev,
a.next {
	display: block;
	width: 15px;
	height: 11px;
	text-indent: -9999px;
}
a.prev {
	margin: 0 auto 5px auto;
	background: transparent url('../img/scroll-arrow-up.png') 0 0 no-repeat;
}
a.prev:hover {
	background: transparent url('../img/scroll-arrow-up.png') 0 -11px no-repeat;
}
a.next {
	margin: 5px auto 0 auto;
	background: transparent url('../img/scroll-arrow-down.png') -1px 0 no-repeat;
}
a.next:hover {
	background: transparent url('../img/scroll-arrow-down.png') -1px -11px no-repeat;
}

/* Parallax
*****************************************************************/

/* content */
#content {
	z-index: 4;
	position: relative;
	max-width: 940px;
	padding: 0 10px;
	margin: 0 auto;
	line-height: 1.7;
}
#content article {
	width: 300px;
}
#welcome,
#work,
#story,
#gallery,
#about,
#contact,
#bye {
	padding-top: 105px;
}
#welcome {
	position: absolute;
	top: 0px;
}
#work {
	position: absolute;
	top: 1366px;
}
#story {
	position: absolute;
	top: 2732px;
}
#gallery {
	position: absolute;
	top: 4098px;
}
#about {
	position: absolute;
	top: 5464px;
}
#contact {
	position: absolute;
	top: 6830px;
}
#bye {
	position: absolute;
	top: 8196px;
}
#content h1 {
	margin: 0 0 25px 0;
	font-size: 60px;
	font-family: Georgia, serif;
	font-weight: normal;
	line-height: 65px;
}
/* foreground (ballons/landscape) */
#parallax-bg3 {
	z-index: 3;
	position: fixed;
	left: 50%; /* align left edge with center of viewport */
	top: 0;
	width: 940px;
	margin-left: -470px; /* move left by half element's width */
}
/* balloon */
#bg3-1 {
	position: absolute;
	top: -111px;
	left: 355px;
}
#bg3-2 {
	position: absolute;
	top: 812px;
	left: 321px;
}
#bg3-3 {
	position: absolute;
	top: 1628px;
	left: 403px;
}
#bg3-4 {
	position: absolute;
	top: 2700px;
	left: -85px;
}
/* midground (clouds) */
#parallax-bg2 {
	z-index: 2;
	position: fixed;
	left: 50%; /* align left edge with center of viewport */
	top: 0;
	width: 1200px;
	margin-left: -600px; /* move left by half element's width */
}
#bg2-1 {
	position: absolute;
	top: 162px;
	left: 200px;
}
#bg2-2 {
	position: absolute;
	top: 300px;
	left: 1150px;
}
#bg2-3 {
	position: absolute;
	top: 543px;
	left: -35px;
}
#bg2-4 {
	position: absolute;
	top: 1180px;
	left: 250px;
}
#bg2-5 {
	position: absolute;
	top: 900px;
	left: 890px;
}
/* background (clouds) */
#parallax-bg1 {
	z-index: 1;
	position: fixed;
	left: 50%; /* align left edge with center of viewport */
	top: 0;
	width: 1200px;
	margin-left: -600px; /* move left by half element's width */
}
#bg1-1 {
	position: absolute;
	top: 85px;
	left: -270px;
}
#bg1-2 {
	position: absolute;
	top: 440px;
	left: 795px;
}
#bg1-3 {
	position: absolute;
	top: 900px;
	left: -220px;
}
#bg1-4 {
	position: absolute;
	top: 1020px;
	left: 450px;
}

