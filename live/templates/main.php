<!DOCTYPE html>
<html>
	<head>
		<title>iComics - Live</title>
		<link href="css/live.css" rel="stylesheet" />
		<link href="css/jquery-impromptu.min.css" rel="stylesheet" />

		<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script>
		<script src="../js/jquery.retina.js" type="text/javascript"></script>
		<script src="js/jquery.konami.min.js" type="text/javascript"></script>
		<script src="js/jquery-impromptu.min.js" type="text/javascript"></script>
		<script src="js/md5.js" type="text/javascript"></script>
		<script src="js/jquery.cookie.js" type="text/javascript"></script>
		<script src="js/jquery.live.js" type="text/javascript"></script>

	    <script type='text/javascript'>
	          $(document).ready(function() {
	              $('img').retina();
	          });

			$(window).konami({
			    cheat: function() {
					$.liveUpdateVideo('<?php echo $videoID; ?>', '<?php echo $passwordSalt; ?>');	    	
			    }
			});
	    </script>
	</head>
	<body>
		<div id="video">
			<div id="video-content">
				<?php if (strlen($videoID)): ?>
				<iframe width="100%" height="100%" src="//www.youtube.com/embed/<?php echo $videoID; ?>?rel=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
				<?php else: ?>
				<div id="no-video">
					<div id="offline-message">OFFLINE</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<div id="promo">
			<a href="http://icomics.co"><img src="img/iComicsLiveLogo.png" alt="iComics Logo" width="351" height="96" /></a>
		
			<div id="promo-social">
				<a href="http://twitter.com/iComicsApp" target="_blank"><img src="img/Twitter.png" alt="Twitter" width="31" height="25" /></a>
				<a href="http://instagram.com/iComicsApp" target="_blank"><img src="img/Instagram.png" alt="Instagram" width="27" height="27" /></a>
				<a href="http://facebook.com/iComicsApp" target="_blank"><img src="img/Facebook.png" alt="Facebook" width="28" height="28" /></a>
			</div>
		</div>
		<div id="chat">
			<iframe src="https://kiwiirc.com/client/irc.rizon.net/?&amp;theme=basic#icomics" style="padding: 0; margin: 0; border:0; width:100%; height:100%"></iframe>
		</div>
	</body>
</html>