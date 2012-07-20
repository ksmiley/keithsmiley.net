<?php $state = include './info.inc.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="cleartype" content="on">
    <title>Keith Smiley’s Résumé &mdash; Projects</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Kreon:400,700">
    <link rel="stylesheet" type="text/css" href="/_/css/projects.css">
    <link rel="stylesheet" type="text/css" href="/_/css/photoswipe.css">
    <script src="/_/js/modernizr-2.5.3.min.js"></script>
    <script src="/_/js/GGS.js"></script>
  </head>
  <body lang="en">
    <section id="about">
      <header class="vcard">
        <h1><a class="fn url" rel="me" href="http://keithsmiley.net/">Keith Smiley</a></h1>
        <address>
<?php echo $state->contact; ?>
          <div class="social">
            <div class="twitter">
              <span class="type">Twitter</span> <a class="url" href="http://twitter.com/ksmiley"><i class="icon-twitter-sign icon-large"></i> @ksmiley</a>
            </div>
            <div class="github">
              <span class="type">GitHub</span> <a class="url" href="http://github.com/ksmiley"><i class="icon-github-sign icon-large"></i> github.com/ksmiley</a>
            </div>
          </div>
        </address>
      </header>
      <article>
        <p>
          I’ve worked in newsrooms and on development teams performing a variety of roles. Oftentimes I take on several roles in a project, whether it’s doing both front- and back-end development on software or doing both the editing and page design of a news project. Here are some of the projects I had a substantial role in completing.
        </p>
      </article>
    </section>
    <section id="projects">
      <h1>Code</h1>
      <article id="project-follow">
        <div class="column">
          <hgroup>
            <h1>Follow News</h1>
            <h2>Morris DigitalWorks</h2>
          </hgroup>
          <ul class="images">
            <li>
              <figure>
                <figcaption>The Follow screen doesn’t require users to leave the article page. Most followable topics come from the OpenCalais service and are sorted by relevance.</figcaption>
                <a href="images/follow-full.png">
                  <noscript class="responsive">
                    <img src="images/follow-thumb-lo.png" alt="Screenshot from the Follow News feature showing a list of names extracted from a news article.">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>An example email sent by Follow. Besides a headline and summary, the message has multiple ways to stop receiving the emails. We did want users to feel they were being spammed. The block on the right was reserved for a possible sponsor ad.</figcaption>
                <a href="images/follow-email-full.png">
                  <noscript class="responsive">
                    <img src="images/follow-email-lo.png" alt="Email marked as a “News Update” with a story headline, summary, and “Read More” link.">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>A tab on the account page shows users which topics and articles they are following. This screen is a rewrite of the one provided by the Drupal Notifications module, with the goal of streamlining the interface.</figcaption>
                <a href="images/follow-manage-full.png">
                  <noscript class="responsive">
                    <img src="images/follow-manage-lo.png" alt="Screenshot of a table of topics and articles followed by a user. Each row of the table includes links to “Disable” or “Remove” a followed topic.">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>The default interface provided by the Drupal Notifications framework. Most of the information on it was repetitive for our needs, since Follow only supported one message channel and one send interval.</figcaption>
                <a href="images/follow-original-full.png">
                  <noscript class="responsive">
                    <img src="images/follow-original-lo.png" alt="Screenshot of a table of topics with additional labels such as “Send Interval: Immediately” and “Status: Active”.">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>The Follow dialog can present and process a login form instead of redirecting to a different page. An account on the site is required for Follow, but the button to activate it is shown to all visitors to increase its visibility.</figcaption>
                <a href="images/follow-login-full.png">
                  <noscript class="responsive">
                    <img src="images/follow-login-lo.png" alt="Screenshot of a login form inside a dialog box, with the text “Follow this article and the topics in it to get future updates sent to your email. To get started, please log in to your account.”">
                  </noscript>
                </a>
              </figure>
            </li>
          </ul>
        </div>
        <p>
          Created a feature on Morris newspaper sites to push custom news updates to readers without requiring any action from editors. My colleague calls it “<a href="http://www.yelvington.com/content/follow-article-home-delivery-web">home delivery for the Web</a>.”
        </p>
        <p>
          The project came to the development team as a one-page proposal. Starting from that document, I designed much the user experience and built the feature on top of the <a href="http://www.opencalais.com/">Calais service</a>, and the Drupal <a href="http://drupal.org/project/messaging">Messaging</a> and <a href="http://drupal.org/project/notifications">Notifications</a> frameworks. A custom module implemented the interface and a second module funneled notifcations through our e-mail marketing provider, which allowed us to track open and clickthrough rates.
        </p>
        <p>
          The Follow feature has been operating on 10 sites for about a year. In that time more than 6,000 users have followed 17,000 topics.
        </p>
      </article>
      <article id="project-create">
        <div class="column">
          <hgroup>
            <h1>Project CREATE</h1>
            <h2>UK Department of Communication</h2>
          </hgroup>
          <ul class="images">
            <li>
              <figure>
                <figcaption>After answering three questions about which demographic they want to target, users use this screen to build a poster. The images, layouts, fonts and messages are loaded dynamically from XML files. The design decisions for end-users are limited, but researchers have fine-grained control over where and how text will appear on each image.</figcaption>
                <a href="images/poster-full.png">
                  <noscript class="responsive">
                    <img src="images/poster-thumb-lo.png" alt="Screenshot of the poster-maker software showing a stock photograph with text overlaid.">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>During the pilot, users could create an unlimited number of poster designs but could order only one. The previews on this page were generated by the Flash application and uploaded to the server, along with metadata about the selected images and messages that would be needed to generate a high-resolution image.</figcaption>
                <a href="images/poster-review-full.png">
                  <noscript class="responsive">
                    <img src="images/poster-review-lo.png" alt="Screenshot of a contact-sheet screen with thumbnails of posters..">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>Besides lists of prewritten messages and statistics, researchers could also add a free-text input to any poster template. As a user typed the preview would update dynamically, including adjusting the font size to make room for the text.</figcaption>
                <a href="images/poster-custom-full.png">
                  <noscript class="responsive">
                    <img src="images/poster-custom-lo.png" alt="Image of a text input box on the poster-maker software.">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>The server component included some account management features even though they weren’t required for the short-duration pilot. The goal was to have code that was ready to scale up if the project had received additional funding.</figcaption>
                <a href="images/poster-change-full.png">
                  <noscript class="responsive">
                    <img src="images/poster-change-lo.png" alt="Screenshot of forms for changing account information, including the password, the user’s address, and the user’s contact information.">
                  </noscript>
                </a>
              </figure>
            </li>
          </ul>
        </div>
        <p>
          Designed and built a Web application to support HIV prevention in rural parts of the United States by allowing public-health workers to create posters tailored to local demographics. University of Kentucky faculty working with the <a href="http://www.indiana.edu/~aids/">Rural Center for AIDS/STD Prevention</a> asked us in May 2009 to take on the “poster maker” project with hopes of launching a pilot program in August.
        </p>
        <p>
          With the help of another developer, I coded the Flash-based frontend over the summer. When the pilot was delayed, we built a backend with PHP and Filemaker to store posters as they’re built and let participants order a favorite.
        </p>
      </article>
      <article id="project-article">
        <div class="column">
          <hgroup>
            <h1>Article Page Redesign</h1>
            <h2>Morris DigitalWorks</h2>
          </hgroup>
          <ul class="images">
            <li>
              <figure>
                <figcaption>The redesigned article page gives more space to both the copy and the photos. The larger font and smooth left edge are meant to make reading easier. The photos extend into the right rail to make use of the full page width, and to draw attention to the advertisements and promos in the rail.</figcaption>
                <a href="images/story_page-full.png">
                  <noscript class="responsive">
                    <img src="images/story_page-thumb-lo.png" alt="Screenshot of an article with photos on the Athens Banner-Herald website.">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>An example of the previous design, where only one photo one visible at a time and the beginning of the story was crammed into a small slice of the page.</figcaption>
                <a href="images/story_page-before-full.png">
                  <noscript class="responsive">
                    <img src="images/story_page-before-lo.png" alt="Screenshot of an article on the Athens Banner-Herald site using the old template, where photos and advertisements are on the left and push over the text.">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>Clicking the byline of a staff writer shows more information about the author without leaving the article.</figcaption>
                <a href="images/story_page-author-full.png">
                  <noscript class="responsive">
                    <img src="images/story_page-author-lo.png" alt="Screenshot of a box on a story page showing details about the author, including a photograph, email address, and a list of other stories.">
                  </noscript>
                </a>
              </figure>
            </li>
            <li>
              <figure>
                <figcaption>Where the old design pushed all photos into the same box, the new design adapts to the orientation of the main photo and the number of secondary photos.</figcaption>
                <a href="images/story_page-photos-full.png">
                  <noscript class="responsive">
                    <img src="images/story_page-photos-lo.png" alt="Two screenshots of an article with photos that are displayed differently, where one has a horizontal photo and the other has a vertical photo.">
                  </noscript>
                </a>
              </figure>
            </li>
          </ul>
        </div>
        <p>
          Collaborated with a developer at the Athens Banner-Herald on a redesign of the newspaper’s main article display that emphasizes the writing and photography. The new design lets content extend across the full width of the page, which also helps draw reader’s eyes to the advertisments and promos that are usually ignored in the right rail.
        </p>
        <p>
          The redesign added several features, including Web fonts for headlines, extended information about the author and links to other articles in the same section. As the design evolved, I reviewed each part to ensure it would perform well on the live site, which often meant tuning queries, adding caching and reordering assets so they would download faster.
        </p>
      </article>
      <article id="project-sso">
        <div class="column">
          <hgroup>
            <h1>Single Sign&#8209;On</h1>.
            <h2>Morris DigitalWorks</h2>
          </hgroup>
          <ul class="images">
            <li>
              <figure>
                <figcaption>Users on Athens Talks site were accustomed to logging in on that site, so the new authentication included an inline login form that could be served across domains. Besides the login form changing, existing users did not see many changes. The single sign-on included migrating their accounts to the new site and ensuring that session cookeis were synchronized after logging in.</figcaption>
                <a href="images/talks-full.png">
                  <noscript class="responsive">
                    <img src="images/talks-thumb-lo.png" alt="Screenshot of the Athens Talks site with a dialog box showing a login form from the Online Athens site.">
                  </noscript>
                </a>
              </figure>
            </li>
          </ul>
        </div>
        <p>
          Built a shared-authentication system to integrate login and registration between the main <a href="http://onlineathens.com/">Athens Banner-Herald</a> site and the newspaper’s existing comments site, <a href="http://www.athenstalks.com/">AthensTalks</a>. While both sites were built on Drupal, they had significant differences in configuration and were hosted in physically different locations. My solution was designed to be resilient, so an outage on one site would only reduce functionality on the other but would not lose data or hurt performance.
        </p>
        <p>
          The system has been running since October 2011 and has kept user accounts and session synchronized with almost no manual intervention, even during periods of heavy traffic.
        </p>
      </article>
    </section>
    <section id="kernel">
      <h1>Journalism</h1>
      <p>
        During my year as editor in chief of the <a href="http://kykernel.com/">Kentucky Kernel</a>, the University of Kentucky’s student newspaper, we published several major projects and were <a href="http://studentpressblogs.org/acp/?p=26">recognized by the Associated Collegiate Press</a> as one of the top college papers in the country. These are PDF copies of some of the projects I edited and designed.
      </p>
      <article id="jou-vietnam">
        <figure>
          <a href="projects/vietnam.pdf">
            <noscript class="responsive">
              <img src="images/vietnam-thumb-lo.png" alt="Front page of a newspaper showing the headline &quot;Bridging past and present.&quot;">
            </noscript>
          </a>
          <figcaption>PDF, 6.3&nbsp;MB</figcaption>
        </figure>
        <p>
          Special section that follows a UK instructor and Vietnam War veteran as he returns to the country with a group of students.
        </p>
      </article>
      <article id="jou-aids">
        <figure>
          <a href="projects/fuller_aids.pdf">
            <noscript class="responsive">
              <img src="images/fuller-thumb-lo.png" alt="Partial image of the first page of the article about an AIDS patient, showing the headline &quot;Living through the nightmare.&quot;">
            </noscript>
          </a>
          <figcaption>PDF, 1.4&nbsp;MB</figcaption>
        </figure>
        <p>
          Profile of a man who has been HIV-positive for two decades that we published for World AIDS Day.
        </p>
      </article>
      <article id="jou-sg">
        <figure>
          <a href="projects/sg_guide.pdf">
            <noscript class="responsive">
              <img src="images/sg_guide-thumb-lo.png" alt="Image of a newspaper page showing the headline &quot;Voter’s Guide.&quot;">
            </noscript>
          </a>
          <figcaption>PDF, 1&nbsp;MB</figcaption>
        </figure>
        <p>
          Voter’s guide that presents a survey we sent to all candidates for Student Government Senate.
        </p>
      </article>
      <article id="jou-gov">
        <figure>
          <a href="projects/gov_guide_reordered.pdf">
            <noscript class="responsive">
              <img src="images/gov_guide-thumb-lo.png" alt="Cover of a newspaper election guide with an illustration of two candidates arm wrestling.">
            </noscript>
          </a>
          <figcaption>PDF, 6.1&nbsp;MB</figcaption>
        </figure>
        <p>
          Eight-page tabloid section summarizing the statewide elections and encouraging students to vote.
        </p>
      </article>
    </section>
    <script src="/_/js/jquery-klass-photoswipe.min.js"></script>
    <script>
    $(function() {
      $("#projects article").each(function() {
        $("ul.images li figure", this).photoSwipe({
          loop: false,
          preventSlideshow: true,
          imageScaleMethod: 'fitNoUpscale',
          getImageSource: function(element) {
            return $(element).children('a').attr('href');
          },
          getImageCaption: function(element) {
            return $(element).find('figcaption').html();
          }
        });
      });
    });

    (function(){
      /*
      Simple responsive images using the noscript method. Pretty much zero
      IE support in this version. Based on this approach:
      http://www.headlondon.com/our-thoughts/technology/posts/creating-responsive-images-using-the-noscript-tag
      
      Expected markup:
        <noscript class="responsive">
          <img src="imagefilename-thumb.png" alt="Other attributes will be copied." title="A picture.">
        </noscript>
      
      Requires responsive images to have filenames that follow a consistent
      pattern of "basefilename-SIZE.ext". The default image inside the noscript
      should use whatever is set in the defaultSize variable. The breakpoints
      list must given in order from narrowest viewport to widest.
      
      TODO: It would be a lot cooler to use matchMedia() for the breakpoints,
            and maybe more efficient since the resize event and debouncing
            wouldn't be needed.
      */
      var defaultSize = 'lo',
          breakpoints = [
            [0,   'lo'],
            [888, 'hi']
          ],
          // 
          triggerClass = 'responsive',
          processedClass = 'responsive-image-processed',
          /**
           * Create semi-empty elements for each responsive image.
           *
           * Must be called before setImageSize() can be used, and must be
           * called only once.
           */
          setupImages = function() {
            $('.' + triggerClass)
              .each(function() {
                var $this = $(this),
                    $tmp = $($this.text()),
                    $img = $tmp.is('img') ? $tmp.eq(0) : $tmp.find('img').eq(0),
                    curSrc = $img.attr('src');
                $img.attr('data-orig-src', curSrc).removeAttr('src');
                $img.addClass(processedClass);
                $this.before($img);
              })
              .remove()
            ;
          },
          /**
           * Set all responsive images on the page to given size.
           *
           * It's safe to call this method multiple times without the size
           * actually changing, though calling it rapidly could be slow.
           *
           * @param {string} sizeName A size in the breakpoints list.
           */
          setImageSize = function(sizeName) {
            var before = '-' + defaultSize + '.',
                after = '-' + sizeName + '.';
            $('.' + processedClass).each(function() {
              var $this = $(this),
                  baseSrc = $this.attr('data-orig-src'),
                  curSrc = $this.attr('src'),
                  newSrc = baseSrc.replace(before, after);
              // Don't bother loading images that aren't visible on the page.
              // Some images are hidden on smaller screens so it would be
              // a waste of time to download them.
              if ($this.parent().is(":visible")) {
                if (!curSrc || curSrc !== newSrc) {
                  $this.attr('src', newSrc);
                }
              } else {
                $this.removeAttr('src');
              }
            });
          },
          /**
           * Compare viewport size to the breakpoints list and update images.
           */
          resizeImages = function() {
            var curWidth = $(window).width();
            // Loop over breakpoints list in reverse to find the largest match.
            for (var i = breakpoints.length - 1; i >= 0; i--) {
              if (curWidth >= breakpoints[i][0]) {
                setImageSize(breakpoints[i][1]);
                break;
              }
            }
          }
          /**
           * Helper function to prevent rapid-fire events from causing a
           * performance problem.
           *
           * Source: http://unscriptable.com/2009/03/20/debouncing-javascript-methods/
           */
          debounce = function (func, threshold, execAsap) {
            var timeout;
            return function debounced () {
              var obj = this,
                  args = arguments,
                  delayed = function() {
                    if (!execAsap) {
                      func.apply(obj, args);
                    }
                    timeout = null; 
                  };
              if (timeout) {
                clearTimeout(timeout);
              } else if (execAsap) {
                func.apply(obj, args);
              }
              timeout = setTimeout(delayed, threshold || 100); 
            };
          };
      $(function() {
        setupImages();
        resizeImages();
        // Use debounce on the resize event so that changing the browser size
        // doesn't trigger excessive breakpoint checks.
        $(window).on('resize', debounce(resizeImages));
      });
    }());
    </script>
<?php include "../js-footer.inc.php"; ?>
  </body>
</html>