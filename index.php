<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

// Help the installer through the setup process
require "check.php" ;

require "top.php";
require "nav.php";

// Help the installer through the setup process
require_once "tsugi/admin/sanity-db.php";
?>
<div id="container">
<div style="margin-left: 10px; float:right">
<iframe width="400" height="225" src="" frameborder="0" allowfullscreen></iframe>
</div>
<h1>Digitization for Everybody - Imaging</h1>
<?php if ( isset($_SESSION['id']) ) { ?>
<p>
Welcome to our Massive Open Online Course (MOOC). Now that you have logged in, you have access to
course-style features of this web site.

<?php } else { ?>
<p>
Hello and welcome to my site where you can learn about the present state of standards and recommended
best practices for creating digital still images from photographic and graphic source materials.
<br>
You can use this web site many different ways:
<ul>
<li>
You browse my videos and course materials under <a href="lessons">Lessons</a>.  The materials
I have developed
for this class are all provided with a Creative Commons license so you can download or link to
them to incorporate them into your own teaching if you like.</li>
We take your privacy seriously on this site, you can review our
<a href="privacy">Privacy Policy</a> for more details.
</li>
</ul>
<?php } ?>
This site uses <a href="http://www.tsugi.org" target="_blank">Tsugi</a>
framework to embed a learning
management system into this site and handle the autograders.
If you are interested in collaborating
to build these kinds of sites for yourself, please see the
<a href="http://www.tsugi.org" target="_blank">tsugi.org</a> website.
</p>
<h3>Textbook</h3>
<p>
I am using an open textbook
<a href="https://learn.shayhowe.com/html-css/"
target="_new">
Learn to Code HTML & CSS
</a>
by Shay Howe.
All of the electronic copies
of the book are free. Print copies of the book are available on
<a href="https://www.informit.com/store/learn-to-code-html-and-css-develop-and-style-websites-9780321940520?ranMID=24808"
target="_blank">Pearson</a>.
</p>
<h3>Copyright</h3>
<p>
All this material produced by Colleen Van Lent (including audio and video)
is Copyright Creative Commons Attribution 3.0
unless otherwise indicated.
</p>
<p>
--  Colleen
</p>
<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php
require "foot.php";
