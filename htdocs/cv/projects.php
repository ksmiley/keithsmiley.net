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
    <script src="/_/js/modernizr-2.5.3.min.js"></script>
    <script src="/_/js/GGS.js"></script>
    <script>
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
            var sources = document.getElementsByClassName(triggerClass),
                curSource = 0,
                numSources = sources.length,
                // Element outside of the DOM tree will be used to parse the
                // noscript contents into an img element that can be moved
                // into the tree.
                tmpContainer = document.createElement('div'),
                imgNode, parent, curSrc;
            for (; curSource < numSources; curSource++) {
              tmpContainer.innerHTML = sources[curSource].textContent;
              imgNode = tmpContainer.getElementsByTagName('img')[0];
              // Use accessor methods instead of .src shorthand so that
              // the URL isn't mangled by the browser.
              curSrc = imgNode.getAttribute('src');
              imgNode.setAttribute('data-orig-src', curSrc);
              imgNode.removeAttribute('src');
              // Add a class to make it easier for setImageSize() to find.
              imgNode.className = imgNode.className + ' ' + processedClass;
              parent = sources[curSource].parentNode;
              // Replace the noscript tag with the new image element.
              parent.insertBefore(imgNode, sources[curSource]);
              // parent.removeChild(sources[curSource]);
            }
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
                after = '-' + sizeName + '.',
                images = document.getElementsByClassName(processedClass),
                baseSrc, curSrc, newSrc,
                curImage = 0,
                numImages = images.length;
            for (; curImage < numImages; curImage++) {
              baseSrc = images[curImage].getAttribute('data-orig-src');
              curSrc = images[curImage].getAttribute('src');
              newSrc = baseSrc.replace(before, after);
              if (!curSrc || curSrc !== newSrc) {
                images[curImage].setAttribute('src', newSrc);
              }
            }
          },
          /**
           * Compare viewport size to the breakpoints list and update images.
           */
          resizeImages = function() {
            var curWidth = window.innerWidth;
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
      document.addEventListener('DOMContentLoaded', function() {
        setupImages();
        resizeImages();
        // Use debounce on the resize event so that changing the browser size
        // doesn't trigger excessive breakpoint checks.
        window.addEventListener('resize', debounce(resizeImages));
      });
    }());
    </script>
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
          I've worked in newsrooms and on development teams performing a variety of roles. Oftentimes I take on several roles in a project, whether it’s doing both front- and back-end development on software or doing both the editing and page design of a news project. Below is a selection of projects I had a substantial role in completing.
        </p>
      </article>
    </section>
    <section id="projects">
      <h1>Code</h1>
      <article>
        <div class="column">
          <hgroup>
            <h1>Follow News</h1>
            <h2>Morris DigitalWorks</h2>
          </hgroup>
          <figure>
            <ul>
              <li>
                <a href="images/follow.png">
                  <noscript class="responsive">
                    <img src="images/follow-thumb.png" alt="Cropped image of a screen capture from the Follow News feature.">
                  </noscript>
                </a>
              </li>
              <li><a href="images/follow.png"><img src="images/follow-thumb.png"></a></li>
              <li><a href="images/follow.png"><img src="images/follow-thumb.png"></a></li>
              <li><a href="images/follow.png"><img src="images/follow-thumb.png"></a></li>
            </ul>
          </figure>
        </div>
        <p>
          Created a feature on Morris newspaper sites to push custom news updates to readers without requiring any action from editors. My colleague calls it “<a href="http://www.yelvington.com/content/follow-article-home-delivery-web">home delivery for the Web</a>.” The project came to the development team as a one-page proposal. Starting from that document, I designed much the user experience and built the feature on top of the <a href="http://www.opencalais.com/">Calais service</a>, and the Drupal <a href="http://drupal.org/project/messaging">Messaging</a> and <a href="http://drupal.org/project/notifications">Notifications</a> frameworks. A custom module implemented the interface and a second module funneled notifcations through our e-mail marketing provider, which allowed us to track open and clickthrough rates. The Follow feature has been operating on 10 sites for about a year. In that time more than 6,000 users have followed 17,000 topics.
        </p>
      </article>
      <article>
        <div class="column">
          <hgroup>
            <h1>Project CREATE</h1>
            <h2>UK Department of Communication</h2>
          </hgroup>
          <figure>
            <img src="images/poster-small.png">
          </figure>
        </div>
        <p>
          Designed and built a Web application to support HIV prevention in rural parts of the United States by allowing public-health workers to create posters tailored to local demographics. University of Kentucky faculty working with the <a href="http://www.indiana.edu/~aids/">Rural Center for AIDS/STD Prevention</a> asked us in May 2009 to take on the “poster maker” project with hopes of launching a pilot program in August. With the help of another developer, I designed and built the Flash-based frontend over the summer. When the pilot was delayed, we built a backend with PHP and Filemaker to store posters as they’re built and let participants order a favorite.
        </p>
      </article>
      <article>
        <div class="column">
          <hgroup>
            <h1>Article Page Redesign</h1>
            <h2>Morris DigitalWorks</h2>
          </hgroup>
          <figure>
            <img src="images/story_page-small.png">
          </figure>
        </div>
        <p>
          Collaborated with a developer at the Athens Banner-Herald on a redesign of the newspaper’s main article display that emphasizes the writing and photography. My role was to carefully review the prototype created by the newspaper’s developer and ensure that it would perform well on the live site.
        </p>
      </article>
      <article>
        <div class="column">
          <hgroup>
            <h1>Single Sign&#8209;On</h1>
            <h2>Morris DigitalWorks</h2>
          </hgroup>
          <figure>
            <img src="images/talks-small.png">
          </figure>
        </div>
        <p>
          Built a shared-authentication system to integrate login and registration between the main <a href="http://onlineathens.com/">Athens Banner-Herald</a> site and the newspaper’s existing comments site, <a href="http://www.athenstalks.com/">AthensTalks</a>. While both sites were built on Drupal, they had significant differences in configuration and were hosted in physically different locations. My solution was designed to be resilient, so an outage on one site would only reduce functionality on the other but would not lose data or hurt performance. The system has been running since October 2011 and has required almost no manual intervention, even during periods of heavy traffic.
        </p>
      </article>
    </section>
    <section id="kernel">
      <h1>Journalism</h1>
      <p>
        During my year as editor in chief of the <a href="http://kykernel.com/">Kentucky Kernel</a>, the University of Kentucky’s student newspaper, we published several major projects and were <a href="http://studentpressblogs.org/acp/?p=26">recognized by the Associated Collegiate Press</a> as one of the top college papers in the country. Below are PDF versions of some of the projects I edited and designed.
      </p>
      <article>
        <figure>
          <a href="projects/vietnam.pdf"><img src="images/vietnam_thumb.jpg"></a>
          <figcaption>PDF, 6.3&nbsp;MB</figcaption>
        </figure>
        <p>
          Special section that follows a UK instructor and Vietnam War veteran as he returns to the country with a group of students.
        </p>
      </article>
      <article>
        <figure>
          <a href="projects/fuller_aids.pdf"><img src="images/fuller_thumb.jpg"></a>
          <figcaption>PDF, 1.4&nbsp;MB</figcaption>
        </figure>
        <p>
          Profile of a man who has been HIV-positive for two decades that we published for World AIDS Day.
        </p>
      </article>
      <article>
        <figure>
          <a href="projects/sg_guide.pdf"><img src="images/sg_guide_thumb.jpg"></a>
          <figcaption>PDF, 1&nbsp;MB</figcaption>
        </figure>
        <p>
          Voter’s guide that presents a survey we sent to all candidates for Student Government Senate.
        </p>
      </article>
      <article>
        <figure>
          <a href="projects/gov_guide_reordered.pdf"><img src="images/gov_guide_thumb.jpg"></a>
          <figcaption>PDF, 6.1&nbsp;MB</figcaption>
        </figure>
        <p>
          Eight-page tabloid section summarizing the statewide elections and encouraging students to vote.
        </p>
      </article>
    </section>
<?php include "../js-footer.inc.php"; ?>
  </body>
</html>