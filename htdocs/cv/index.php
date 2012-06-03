<?php $fullView = 1; // (isset($_GET['a']) && $_GET['a'] == 'full') ?>
<!DOCTYPE html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0">
    <meta name="cleartype" value="true">
    <title>Keith Smiley's Résumé</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Kreon:300,400,700">
    <!-- <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Kreon:bold&amp;text=Keith%20Smiley"> -->
    <link rel="stylesheet" type="text/css" href="/_/css/resume.css">
  	<!-- <link rel="stylesheet/less" type="text/css" href="/_/css/resume.less">
    <script src="/_/js/less-1.3.0.min.js"></script> -->
  	<script src="/_/js/modernizr-2.5.3.min.js"></script>
    <script src="/_/js/GGS.js"></script>
  </head>
  <body lang="en">
    <header class="vcard">
      <div class="wrapper">
        <h1><a class="fn url" rel="me" href="http://keithsmiley.net/">Keith Smiley</a></h1>
      </div>
      <div class="rail">
        <address>
<?php if ($fullView): ?>
          <div class="adr">
            <span class="type">Home</span>
            <span class="street-address">xxxxx</span>
            <span class="extended-address">xxxxx</span>
            <br>
            <span class="locality">Augusta</span>,
            <abbr class="region" title="Georgia">Ga.</abbr>
            <span class="postal-code">xxxxx</span>
          </div>
<?php endif; ?>
          </i> <a class="email" id="email" href="mailto:k.AT.keithsmiley.DOT.net">k.AT.keithsmiley.DOT.net</a>
<?php if ($fullView): ?>
          <div class="tel">
            (xxx) xxx-xxxx
          </div>
<?php endif; ?>
          <div class="social">
            <div class="twitter">
              <span class="type">Twitter</span> <a class="url" href="http://twitter.com/ksmiley"><i class="icon-twitter-sign icon-large"></i> @ksmiley</a>
            </div>
            <div class="github">
              <span class="type">GitHub</span> <a class="url" href="http://github.com/ksmiley"><i class="icon-github-sign icon-large"></i> github.com/ksmiley</a>
            </div>
          </div>
        </address>
      </div>
    </header>
    <section id="about">
  		<p>
  			The boats were here hailed, to tow the whale on the larboard side, where fluke chains and other necessaries were already prepared for securing him. "Didn't I tell you so?" said Flask; "yes, you'll soon see this right whale's head hoisted up opposite that parmacetti's." In good time, Flask's saying proved true. As before, the Pequod steeply leaned over towards the sperm whale's head, now, by the counterpoise of both heads, she regained her even
  		</p>
  	</section>
    <section id="experience">
      <h1>Experience</h1>
      <article>
        <header>
          <h1 class="fn org"><a href="http://www.morrisdigitalworks.com/">Morris DigitalWorks</a></h2>
          <div class="location"><span class="locality">Augusta</span>, <abbr class="region" title="Georgia">Ga.</abbr></div>
        </header>
        <ul>
          <li>
            <span class="time-range"><time datetime="2011-08-01">August 2011</time> &ndash; <time datetime="<?php echo date('Y-m-d'); ?>">Present</time></span>
            <span class="job-title">Senior Software Engineer</span>
          </li>
          <li>
            <span class="time-range"><time datetime="2010-05-03">May 2010</time> &ndash; <time datetime="2011-08-01">August 2011</time></span>
            <span class="job-title">Software Engineer</span>
          </li>
        </ul>
        <p>
          Develop and support web applications throughout the software stack,
          from backend data processing to client-side styling and scripting.
          Responsibilities include contributing to a Drupal-based CMS that
          integrates with publishing for Morris newspapers, maintaining and
          improving an in-house programming language, analyzing performance on
          LAMP systems, and providing support for external customers who use our
          classifieds products.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://comm.uky.edu/">University of Kentucky</a></h2>
          <div class="location"><span class="locality">Lexington</span>, <abbr class="region" title="Kentucky">Ky.</abbr></div>
        </header>
        <ul>
          <li>
            <span class="time-range"><time datetime="2009-03-01">March 2009</time> &ndash; <time datetime="2010-04-20">April 2010</time></span>
            <span class="job-title">Web and Database Developer</span>
          </li>
        </ul>
        <p>
          Created databases and web applications to support faculty research
          and classroom instruction in the Department of Communication. Projects
          included designing and developing a Flash-based tool to support HIV 
          prevention campaigns in rural areas, adapting research surveys for use
          on mobile devices, improving the department’s web content management 
          software, and planning the expansion of a system that records and 
          analyzes 400 hours of television daily.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://www.washingtontimes.com/">The Washington Times</a></h2>
          <div class="location"><span class="locality">Washington</span>, <abbr class="region" title="District of Columbia">D.C.</abbr></div>
        </header>
        <ul>
          <li>
            <span class="time-range"><time datetime="2008-09-01">September</time> &ndash; <time datetime="2008-12-15">December 2008</time></span>
            <span class="job-title">Photography Intern</span>
          </li>
        </ul>
        <p>
          Spent 16 weeks as a general-assignment photographer covering politics,
          regional news, features and sports. The internship was through the
          <a href="http://www.wcpj.org/">Washington Center for Politics and Journalism</a>.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://www.tennessean.com/">The Tennessean</a></h2>
          <div class="location"><span class="locality">Nashville</span>, <abbr class="region" title="Tennessee">Tenn.</abbr></div>
        </header>
        <ul>
          <li>
            <span class="time-range"><time datetime="2008-06-01">June</time> &ndash; <time datetime="2010-08-10">August 2008</time></span>
            <span class="job-title">Copy Editing Intern</span>
          </li>
        </ul>
        <p>
          Worked on the news copy desk editing stories, designing pages and
          updating the Web site. The internship was through the <a href="https://www.newsfund.org/">Dow Jones
          Newspaper Fund</a> and included two weeks of training in Austin, Texas.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://kykernel.com/">Kentucky Kernel</a></h2>
          <div class="location"><span class="locality">Lexington</span>, <abbr class="region" title="Kentucky">Ky.</abbr></div>
        </header>
        <ul>
          <li>
            <span class="time-range"><time datetime="2007-08-01">August 2007</time> &ndash; <time datetime="2008-05-10">May 2008</time></span>
            <span class="job-title">Editor in chief</span>
          </li>
          <li>
            <span class="time-range"><time datetime="2006-08-01">August 2006</time> &ndash; <time datetime="2007-05-10">May 2007</time></span>
            <span class="job-title">Managing editor</span>
          </li>
          <li>
            <span class="time-range"><time datetime="2004-08-30">August 2004</time> &ndash; <time datetime="2006-05-10">May 2006</time></span>
            <span class="job-title">Photographer and photo editor</span>
          </li>
        </ul>
        <p>
          Oversaw daily news gathering and production, planned short- and
          long-term stories, and managed a staff of more than 40 as editor of
          the 17,000-circulation independent daily newspaper. The 2007-2008
          staff received the Pacemaker award recognizing the top college
          newspapers in the country and the Kentucky Press Association’s
          General Excellence award.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://www.rockymountainnews.com/">Rocky Mountain News</a></h2>
          <div class="location"><span class="locality">Denver</span>, <abbr class="region" title="Colorado">Colo.</abbr></div>
        </header>
        <ul>
          <li>
            <span class="time-range"><time datetime="2006-06-01">June</time> &ndash; <time datetime="2006-08-15">Augusta 2006</time></span>
            <span class="job-title">Photography Intern</span>
          </li>
        </ul>
        <p>
          Photographed a variety of assignments, including news, sports,
          feature and business stories.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://www.courierpress.com/">Evansville Courier &amp; Press</a></h2>
          <div class="location"><span class="locality">Evansville</span>, <abbr class="region" title="Indiana">Ind.</abbr></div>
        </header>
        <ul>
          <li>
            <span class="time-range"><time datetime="2005-06-01">June</time> &ndash; <time datetime="2005-06-30">July 2005</time></span>
            <span class="job-title">Photography Intern</span>
          </li>
        </ul>
        <p>
          Worked as a general-assignment photographer.
        </p>
      </article>
    </section>
    <div class="rail">
      <section id="education">
        <h1>Education</h1>
        <article>
          <header>
            <div class="time-range"><time datetime="2004-08-10">August 2004</time> &ndash; <time datetime="2009-12-10">December 2009</time></div>
            <h1><a href="http://www.uky.edu/">University of Kentucky</a></h1>
            <div class="location"><span class="locality">Lexington</span>, <abbr class="region" title="Kentucky">Ky.</abbr></div>
          </header>
          <p>
            Graduated with bachelor’s degrees in computer science
            and print journalism.
          </p>
        </article>
      </section>
      <section id="skills">
        <h1>Relevant Skills</h1>
        <article>
          <h2>Used often</h2>
          <ul>
            <li>PHP</li>
            <li>JavaScript</li>
            <li>jQuery</li>
            <li>HTML</li>
            <li>CSS</li>
            <li>Perl</li>
            <li>Shell scripting</li>
            <li>C</li>
            <li>SQL</li>
            <li>LAMP Architecture</li>
            <li>Drupal</li>
          </ul>
        </article>
        <article>
          <h2>In the toolkit</h2>
          <ul>
            <li>Java</li>
            <li>Final Cut Pro</li>
            <li>Photo Mechanic</li>
            <li>Adobe Creative Suite (especially Photoshop, InDesign and Illustrator)</li>
          </ul>
        </article>
        <article>
          <h2>Have experience</h2>
          <ul>
            <li>WordPress</li>
            <li>C++</li>
            <li>Flash/ActionScript</li>
            <li>Oracle</li>
            <li>FileMaker Pro</li>
            <li>QuarkXPress</li>
            <li>Soundslides</li>
          </ul>
        </article>
      </section>
      <section id="awards">
        <h1>Awards and Honors</h1>
        <article>
          <dl>
            <dt>Spirit of Morris DigitalWorks</dt>
            <dd>Development team award for 2010</dd>
            <dt>UK Dean’s List</dt>
            <dd>Fall 2004, Spring 2005, Fall 2005, Fall 2006, Spring 2007, Spring 2009 and Fall 2009</dd>
            <dt>Hearst Journalism Awards for Photojournalism</dt>
            <dd>7th Place, Sports &amp; News (2007); 19th Place, Sports &amp; News (2006)</dd>
          </dl>
        </article>
      </section>
    </div>
    <footer>
      <?php $selfUrl = 'http://keithsmiley.net/cv/' . ($fullView ? 'full' : ''); ?>
      Latest version always available at <a href="<?php echo $selfUrl; ?>"><?php echo $selfUrl; ?></a>
    </footer>
    <!--
      E-mail address is obfuscated to (hopefully) deter spam. But if you've made
      it this far, you probably know how to decipher it. Why not drop me a note?
    -->
    <script>
      var c=':', u='k', h='keithsmiley.net', a='@', p='mailto',
        e = document.getElementById("email");
      e.attributes.href.value = p+c+u+a+h;
      e.textContent = u+a+h;

      var _gaq = [['_setAccount', 'UA-19711479-2'], ['_trackPageview']];
      (function(d, t) {
        var g = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
        g.async = g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s);
      }(document, 'script'));
    </script>
  </body>
</html>
