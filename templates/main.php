<!DOCTYPE html>
<html lang="<?php echo $langCode;?>">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Supporting all of the major DRM-free comic book formats, iComics is an app that lets you read comics on your iPad, iPhone or iPod touch!" />
    <meta name="keywords" content="iComics, comic, book, reader, iOS, iPhone, iPod, iPad, CBZ, CBR, PDF, EPUB" />

    <link rel="image_src" href="/screenshot.png" />
    <link rel="shortcut icon" href="/favicon.ico">
    
    <meta content="width=1024" name="viewport" />

    <title>iComics - The comic reader for iOS</title>
    
    <script src="/js/jquery-1.8.2.min.js"></script>
    <script src="/js/jquery.retina.js"></script>
    <script src="/twitter/jquery.tweet.js"></script>
    <script src="/js/jquery.contactform.js"></script>

    <script type='text/javascript'>
          $(document).ready( function() {
              $('img').retina();f2012

             /*$(".tweets").tweet({
                query: "icomics -from:vk_icomics -NARR8 -icomics.co.kr lang:en",
                avatar_size: 64,
                count: 2,
                loading_text: "loading tweets...",
                template: "{text}{avatar}{user}{time} "
            });*/
          });
    </script>

    <link href="css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "http://connect.facebook.net/en_US/all.js#xfbml=1&appId=396331313772228";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <header>
      <div class="container">
        <img src="img/iComicsHeaderArt<?php echo $langSuffix;?>.png" id="splash-art" width="608" height="763" alt="iComics on iPhone 5 and the new iPad" />
        <img src="img/iComicsLogo.png" id="logo" width="402" height="114" alt="iComics Logo" />
        <a href="<?php if ($langCode=='ja'):?>/jp<?php endif; ?>/app">
          <?php if ($langCode=='ja'): ?>
          <img src="img/AppStoreBadgeJP.png" id="app-store-badge" width="245" height="76" alt="App Storeで配信中" />
          <?php else: ?>
          <img src="img/AppStoreBadge.png" id="app-store-badge" width="244" height="76" alt="Now available on the App Store. (Compatible with iPhone, iPod touch and iPad. Requires iOS 5.0 or above)" />
          <?php endif; ?>
        </a>
        <?php if ($langCode=='ja'): ?>
        <img src="img/AppRequirementsJP.png" alt="iPad,iPhone,iPod touchに対応しています。iOS5.0以降が必要です。" width="225" height="59" id="app-requirements" />
        <?php else: ?>
        <img src="img/AppRequirements.png" alt="Compatible with iPad, iPhone and iPod touch" width="215" height="60" id="app-requirements" />
        <?php endif; ?>
      </div>
    </header>
    <div id="content">
      <div class="container">
        <div class="info-block" id="intro">
          <img src="img/iPhone4S<?php echo $langSuffix;?>.png" alt="iComics on iPhone 4S" width="352" height="365" id="iphone-4s" />

          <div class="text-block">
            <?php if ($langCode=='ja'): ?>
            <img src="img/IntroductionTitleJP.png" alt="iOSコミックリーダーiComicsへようこそ" width="442" height="94" class="info-title" /><br/>
            <?php else: ?>
            <img src="img/IntroductionTitle.png" alt="Welcome to iComics. The comic reader for iOS." width="458" height="78" class="info-title" /><br/>
            <?php endif; ?>
            iComics is an app that lets you read DRM-free digital comic books on your iOS devices. Unlike the other comic apps on the App Store that let you buy comics
            from their own collection, iComics lets you bring your own to the table. With many indie comic artists distributing their comic books online, 
            not to mention the vast number of old-school comics that have now released into public domain, iComics lets you tap into a larger world of comic books, all at your fingertips!
          </div>
          <div style="clear:both"></div>
        </div>
        <div class="info-block-alt" id="comics-intro">
          <div class="shadow-top">&nbsp;</div>
          <div class="shadow-bottom">&nbsp;</div>
          <img src="img/iPod5thGenRed<?php echo $langSuffix;?>.png" alt="iComics on 5th Generation iPod touch (PRODUCT) RED Edition" width="307" height="350" id="ipod5g" />
          <div class="text-block">
            <?php if ($langCode=='ja'): ?>
            <img src="img/ComicsTitleJP.png" alt="コミック？どんなコミック？" width="562" height="45" class="info-title" />
            <?php else: ?>
            <img src="img/ComicsTitle.png" alt="Comics? What comics?" width="547" height="35" class="info-title" />
            <?php endif; ?>
            <p>iComics supports all of the main DRM-free comic book formats. All you need to do is import your comic book files into iComics via iTunes and 
              they'll automatically start unpacking themselves, ready to read in seconds!</p>
            <div class="comics-list formats">
              <h3>Formats</h3>
                <ul class="formats-list">
                  <li>&bull; CBZ (ZIP)</li>
                  <li>&bull; LZH</li>
                  <li>&bull; CBR (RAR)</li>
                  <li>&bull; LHA</li>
                  <li>&bull; CB7 (7ZIP)</li>
                  <li>&bull; EPUB</li>
                  <li>&bull; CBT (TAR)</li>
                  <li>&bull; PDF</li>
              </ul>
            </div>
            <div class="comics-list">
              <h3>Comic Downloads</h3> 
              <ul class="downloads-list">
                <li><a href="http://digitalcomicmuseum.com/" rel="nofollow">Digital Comic Museum</a></li>
                <li><a href="http://comicbookplus.com/" rel="nofollow">Comic Book Plus</a></li>
                <li><a href="http://www.flashbackuniverse.com/downloads.aspx" rel="nofollow">FlashBack Universe</a></li>
                <li><a href="http://comics.drivethrustuff.com/" rel="nofollow">DriveThruComics.com</a></li>
                <li><a href="http://www.slgcomic.com/eyemelt" rel="nofollow">SLG EyeMelt</a></li>
                <li><a href="http://www.teamfortress.com/comics.php" rel="nofollow">Team Fortress Comics</a></li>
                <li><a href="http://www.j-comi.jp/" rel="nofollow">J-comi</a></li>
              </ul>
            </div>
            <div style="clear:both"></div>
          </div>
        </div>
        <div class="info-block" id="features-1">

          <img src="img/iPhone5Toggles<?php echo $langSuffix;?>.png" alt="iComics toggle controls on an iPhone 5" width="1012" height="661" id="iphone5toggles" />
          <div class="toggle-text page-direction">Change page direction (Left/Right)</div>
          <div class="toggle-text zoom-lock">Lock zoom scale between pages</div>
          <div class="toggle-text split-wide-pages">Split wide pages across screen</div>
          <div class="toggle-text page-scrub">Jump between pages</div>

          <div class="text-block">
            <?php if ($langCode=='ja'): ?>
            <img src="img/Features2TitleJP.png" alt="いつ読むか？今でしょう！" width="511" height="43" class="info-title" /><br/>
            <?php else: ?>
            <img src="img/Features2Title.png" alt="Read all of the things!" width="343" height="43" class="info-title" /><br/>
            <?php endif; ?>
            Comics can come in any shape or size. iComics comes with a suite of display settings to 
            make sure you can read your comics the way they were meant to be read!
          </div>
          <div style="clear:both"></div>
        </div>
        <div class="info-block-alt" id="features-2">
          <div class="shadow-top">&nbsp;</div>
          <div class="shadow-bottom">&nbsp;</div>
          
          <img src="img/iPad1stGen<?php echo $langSuffix;?>.png" alt="iComics on the original iPad" width="499" height="357" id="ipad" />

          <div class="text-block">
            <?php if ($langCode=='ja'): ?>
            <img src="img/Features1TitleJP.png" alt="早い。軽い。簡単。" width="370" height="43" class="info-title" /><br/>
            <?php else: ?>
            <img src="img/Features1Title.png" alt="Fast, flexible and easy." width="403" height="44" class="info-title" /><br/>
            <?php endif; ?>
            <div class="features-column">
              iComics has been designed from the ground up with speed as the absolutely top priorty. Comics import quickly, they're silky smooth
              to read, and are easily configurable. And performance is the same no matter how old your device is!
            </div>
            <div class="features-column">
              Not only that, iComics puts a great amount of emphasis on making managing comic files on your iOS device as flexible as possible. 
              You can re-order comics, change their reading state, rename them and many more features are on the way!
            </div>
            <div style="clear:both"></div>
          </div>
        </div>
         <div class="info-block">
          <div id="upcoming-features">
            <?php if ($langCode=='ja'): ?>
            <img src="img/UpcomingFeaturesJP.png" alt="Upcoming features" width="305" height="44" class="info-title" /><br/>
            <?php else: ?>
            <img src="img/UpcomingFeatures.png" alt="Upcoming features" width="348" height="44" class="info-title" /><br/>
            <?php endif; ?>
            Version 1.0 set the stage, and version 1.0.6 raised the bar. But it's not over yet.<br/>Check out these upcoming features that are right around the corner!
            <ul class="upcoming-features-list">
              <li>iOS 7 Support</li>
              <li>Adding bookmarks</li>
              <li>Separate comic collections</li>
              <li>Comic page thumbnail index</li>
              <li>Integrated Dropbox&reg; Importing</li>
              <li>Integrated WiFi/WebDAV</li>
              <li>Integrated Web browsing</li>
              <li>Hot-jumping between comics</li>
              <li>Extract nested archives</li>
              <li>Crop/format comic covers</li>
              <li>Vertical Scrolling</li>
              <li>Dual-page spread</li>
            </ul>
            <div style="clear:both"></div>

            <a href="http://icomics.uservoice.com">Got an idea to make iComics even better? Suggest it! &raquo;</a><br/>

          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <ul id="footer-items">
          <li>
              <?php if ($langCode=='ja'): ?>
              <img src="img/CreditsTitleJP.png" class="title" alt="iComicsを作った人？" width="269" height="32" /><br/>
              <?php else: ?>
              <img src="img/CreditsTitle.png" class="title" alt="Who made iComics?" width="251" height="26" /><br/>
              <?php endif; ?>

              <div class="credits-text">
                iComics is the caffeinated machination of Tim Oliver, a 26 year old geek from Perth, Australia. 
                When he's not cranking out apps, he can be found professionally developing websites, or unprofessionally singing karaoke in Japan.
                <br/>
                <div class="social-icons">
                  <a href="http://timoliver.com.au" target="_blank"><img src="img/WebsiteIcon.png" alt="Website" width="24" height="24" /></a>
                  <a href="http://twitter.com/TimOliverAU" target="_blank"><img src="img/TwitterIcon.png" alt="Twitter" width="24" height="24" /></a>
                  <a href="http://facebook.com/timoliver.au" target="_blank"><img src="img/FacebookIcon.png" alt="Facebook" width="24" height="24" /></a>
                  <a href="https://plus.google.com/114425396945647910586" target="_blank"><img src="img/GooglePlusIcon.png" alt="Google+" width="24" height="24" /></a>
              </div>
              </div>

              <img src="img/Tim.png" alt="Tim Oliver" width="118" height="150" />
          </li>
          <li>
              <?php if ($langCode=='ja'): ?>
              <img src="img/SocialFeedTitleJP.png" class="title" alt="最新のツイート" width="206" height="33" /><br/>
              <?php else: ?>
              <img src="img/SocialFeedTitle.png" class="title" alt="Word on the Tweets" width="248" height="26" /><br/>
              <?php endif; ?>
              <div class="tweets"></div>

              <div id="social-links">
                <!-- Twitter -->
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://icomics.co" data-text="Check out iComics, the comic reader for iOS!" data-related="tim0liver">Tweet</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                <!-- Facebook -->
                <div class="fb-like" data-href="http://icomics.co" data-send="true" data-colorscheme="dark" data-layout="button_count" data-width="450" data-show-faces="true"></div>
         
                <!-- Google Plus -->
                <!-- <div class="g-plusone"></div>
                <script type="text/javascript">
                  (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                </script>-->
              </div>
          </li>
          <li class="last">
              <?php if ($langCode=='ja'): ?>
              <img src="img/SupportTitleJP.png" class="title" alt="お問い合わせ" width="179" height="32" />
              <?php else: ?>
              <img src="img/SupportTitle.png" class="title" alt="Who made iComics?" width="229" height="31" />
              <?php endif; ?>

              <div id="support-form">
                <div id="loader" style="display: none;"><img src="img/AjaxLoader.gif" width="32" height="32" alt="Loading..." /></div>
                <div id="success" style="display: none;"><img src="img/Success.png" width="78" height="78" alt="Success!" /></div>
                <form action="#" method="post">
                  <input type="text" id="support-name" name="name" data-default="Name" value="Name"/><br/>
                  <input type="text" id="support-email" name="email" data-default="Email" value="Email"/><br/>
                  <textarea name="message" id="support-message" data-default="Message">Message</textarea>
                  <input type="submit" name="submit" value="Submit">
                </form>
              </div>
          </li>
        </ul>
        <div style="clear:both;">&nbsp;</div>
      </div>


      <div id="copyright">
        <div class="container">
          <div id="copyright-text">
            Copyright &copy; <a href="http://olivr.vg">Tim Oliver</a> 2012-<?php echo date('Y'); ?>. Hosted by <a href="http://www.ennoverse.com">Ennoverse</a>. 
            Artwork: <a href="http://www.pixeden.com/psd-mock-up-templates/ipad-2-psd-vector-mockup-template">iPad 2</a> &bull; 
                                <a href="http://www.pixeden.com/psd-mock-up-templates/iphone-5-psd-vector-mockup">iPhone 5</a> &bull; 
                                <a href="http://www.pixeden.com/psd-mock-up-templates/iphone-4s-psd-vector-mockup-template">iPhone 4S</a> &bull; 
                                <a href="http://www.pixeden.com/psd-mock-up-templates/ipad-psd-vector-mockup-template">iPad</a> &bull; 
                                <a href="http://www.vectorized.it/vector-iphone-3g/">iPhone 3GS</a> &bull; 
                                <a href="http://paulrobertlloyd.com/2009/06/social_media_icons/">Social Icons</a>
          </div>
        </div>
      </div>
    </footer>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-5643664-15']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </body>
</html>