<!-- Abraham Khan - 1906636 -->

<!-- Defines the document as an html tag for the browser -->
<!DOCTYPE html>
<html>

<head>
<!-- Uses PHP to include the navbar header -->
<?php
$page_name = "About";
include('inc/header.php');
?>
</head>

<body>
<!-- Creates class for the about page top image -->
<div class="about-top">
	<img id="about-photo" src="https://static01.nyt.com/images/2021/02/07/arts/07foo-fighters1/07foo-fighters1-videoSixteenByNineJumbo1600-v2.jpg" alt="Photo of Foo Fighter members" style="width:100%;">
	<!-- Creates class for centering text -->
	<div class="about-center">
		About Us
	</div>
</div>

<!-- Creates header -->
<h1 id="about-header">The Foo Fighters</h1>

<!-- This text was taken from: https://peopleofrockandroll.foofighters.com/discography -->
<p>Ever since the late 1980s, Dave Grohl had been writing and recording songs for his own amusement, never intending for anyone but he and close friends to ever hear them.
 When Nirvana came to an end in early 1994 Grohl had to make a decision on his future, unsure if he even wanted to continue making music.
Encouraged by friends that the desire to do so would return, Grohl picked himself up and began recording new demos that summer. 
Believing that making music was what he was really cut out to do, Dave made plans to spend time in a professional recording studio and put to tape some of his best songs.</p>

<img id="bot" src="https://consequenceofsound.net/wp-content/uploads/2013/12/foo2013feat.jpg" alt="Foo Fighters members" style="width:100%;">

<!-- This text was taken from: https://peopleofrockandroll.foofighters.com/discography -->
<p id="bot-t">The location selected was Robert Lang Studio in Seattle, WA, Dave booking just a week there in October 1994. With the help of long-time friend and producer Barrett Jones, 
Dave Grohl recorded 15 songs at breakneck speeds, playing almost every part himself and singing all vocal tracks. The only exception was a single guitar track on the song ‘X-Static’ played by Greg Dulli of the Afghan Whigs.
Grohl had initially planned to release the album anonymously, giving it the title ‘Foo Fighters’ to make people believe it was a band. Word soon got out, however, 
and that plan was quickly shelved as fans anticipated Dave Grohl’s new music.
The first single, ‘This Is A Call’ was released in June 1995 with the album following on July 4th, Independence Day in the United States.</p>

<iframe id="about-video" src="https://www.youtube.com/embed/CJd82T1_o1A" alt="Foo Fighters music video"></iframe>

</body>

</html>
