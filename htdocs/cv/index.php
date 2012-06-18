<?php $state = include './info.inc.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php if ($state->full): ?>
    <meta name="robots" content="noindex">
<?php endif; ?>
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="cleartype" content="on">
    <title>Keith Smiley’s Résumé</title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Kreon:400,700">
    <link rel="stylesheet" type="text/css" href="/_/css/resume.css">
    <script src="/_/js/modernizr-2.5.3.min.js"></script>
    <!--<script src="/_/js/GGS.js"></script>-->
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
          <strong>A software developer with a journalist’s&nbsp;curiosity.</strong> <i class="icon-cog"></i>&nbsp;I'm interested in telling human stories and solving civic problems through technology. <i class="icon-cog"></i>&nbsp;I’m familiar with all levels of the software stack that underlies the Web and with the protocols that tie it together. <i class="icon-cog"></i>&nbsp;With my journalism background and technical knowledge, I want to create innovative ways of sharing and applying information, to give meaning to data so it has impact.
        </p>
      </article>
  	</section>
    <section id="experience">
      <h1>Experience</h1>
      <article>
        <header>
          <h1 class="fn org"><a href="http://morris.com/">Morris DigitalWorks</a></h1>
          <div class="location"><span class="locality">Augusta</span>, <abbr class="region" title="Georgia">Ga.</abbr></div>
        </header>
        <ul class="roles">
          <li><span class="time-range"><time datetime="2011-08-01">August 2011</time> &ndash; <time datetime="<?php echo date('Y-m-d'); ?>">Present</time></span>
            <span class="job-title">Senior Software Engineer</span>
          </li>
          <li><span class="time-range"><time datetime="2010-05-03">May 2010</time> &ndash; <time datetime="2011-08-01">August 2011</time></span>
            <span class="job-title">Software Engineer</span>
          </li>
        </ul>
        <p>
          Develop and support web applications throughout the organization as a member of the core development team. Projects include:
        </p>
        <ul>
          <li>Building a Drupal-based CMS that handles more than 55&nbsp;million page views per month for 12 daily newspapers, and integrating it with existing publishing systems.</li>
          <li>Refactoring development processes for faster deployment across distinct sites. I have reduced the commands needed to build a release from a dozen to one and am leading a transition to Git.</li>
          <li>Supporting legacy systems, such as adding functionality to a custom programming language that runs our advertising products.</li>
          <li>Analyzing and improving performance, including reducing page render time by more than a second.</li>
          <li>Coaching developers at the newspapers on how to use and improve the Drupal CMS.</li>
        </ul>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://comm.uky.edu/">University of Kentucky</a></h1>
          <div class="location"><span class="locality">Lexington</span>, <abbr class="region" title="Kentucky">Ky.</abbr></div>
        </header>
        <ul class="roles">
          <li><span class="time-range"><time datetime="2009-03-01">March 2009</time> &ndash; <time datetime="2010-04-20">April 2010</time></span>
            <span class="job-title">Web and Database Developer</span>
          </li>
        </ul>
        <p>
          Built databases and web applications to support faculty research and classroom instruction in the Department of Communication. Projects included:
        </p>
        <ul>
          <li>Designing and developing a Flash-based tool to support HIV prevention campaigns in rural areas.</li>
          <li>Adapting research surveys for use on mobile devices.</li>
          <li>Planning the expansion of a system that records and analyzes 400 hours of television daily.</li>
        </ul>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://www.washingtontimes.com/">The Washington Times</a></h1>
          <div class="location"><span class="locality">Washington</span>, <abbr class="region" title="District of Columbia">D.C.</abbr></div>
        </header>
        <ul class="roles">
          <li><span class="time-range"><time datetime="2008-09-01">September</time> &ndash; <time datetime="2008-12-15">December 2008</time></span>
            <span class="job-title">Photography Intern</span>
          </li>
        </ul>
        <p>
          Spent 16 weeks as a general-assignment photographer covering politics, regional news, features and sports. The internship was through the <a href="http://www.wcpj.org/">Washington Center for Politics and Journalism</a>.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://www.tennessean.com/">The Tennessean</a></h1>
          <div class="location"><span class="locality">Nashville</span>, <abbr class="region" title="Tennessee">Tenn.</abbr></div>
        </header>
        <ul class="roles">
          <li><span class="time-range"><time datetime="2008-06-01">June</time> &ndash; <time datetime="2010-08-10">August 2008</time></span>
            <span class="job-title">Copy Editing Intern</span>
          </li>
        </ul>
        <p>
          Worked on the news copy desk editing stories, designing pages and selecting wire stories. The internship was through the <a href="https://www.newsfund.org/">Dow Jones Newspaper Fund</a> and included two weeks of training in Austin, Texas.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://kykernel.com/">Kentucky Kernel</a></h1>
          <div class="location"><span class="locality">Lexington</span>, <abbr class="region" title="Kentucky">Ky.</abbr></div>
        </header>
        <ul class="roles">
          <li><span class="time-range"><time datetime="2007-08-01">August 2007</time> &ndash; <time datetime="2008-05-10">May 2008</time></span>
            <span class="job-title">Editor in chief</span>
          </li>
          <li><span class="time-range"><time datetime="2006-08-01">August 2006</time> &ndash; <time datetime="2007-05-10">May 2007</time></span>
            <span class="job-title">Managing editor</span>
          </li>
          <li><span class="time-range"><time datetime="2004-08-30">August 2004</time> &ndash; <time datetime="2006-05-10">May 2006</time></span>
            <span class="job-title">Photographer and photo editor</span>
          </li>
        </ul>
        <p>
          Oversaw daily news gathering and production, planned short- and long-term stories, and managed a staff of more than 40 as editor of the 17,000-circulation independent daily newspaper. Projects included producing an eight-page section that followed a lecturer and Vietnam War veteran as he returned to the country with a group of students, and creating election guides for student government and statewide races. For my year as editor the newspaper received the Pacemaker award recognizing the top college newspapers in the country and the Kentucky Press Association’s General Excellence award.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://www.rockymountainnews.com/">Rocky Mountain News</a></h1>
          <div class="location"><span class="locality">Denver</span>, <abbr class="region" title="Colorado">Colo.</abbr></div>
        </header>
        <ul class="roles">
          <li><span class="time-range"><time datetime="2006-06-01">June</time> &ndash; <time datetime="2006-08-15">August 2006</time></span>
            <span class="job-title">Photography Intern</span>
          </li>
        </ul>
        <p>
          Photographed a variety of assignments, including breaking news, sports, feature and business stories.
        </p>
      </article>
      <article>
        <header>
          <h1 class="fn org"><a href="http://www.courierpress.com/">Evansville Courier &amp; Press</a></h1>
          <div class="location"><span class="locality">Evansville</span>, <abbr class="region" title="Indiana">Ind.</abbr></div>
        </header>
        <ul class="roles">
          <li><span class="time-range"><time datetime="2005-06-01">June</time> &ndash; <time datetime="2005-06-30">July 2005</time></span>
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
            Graduated with bachelor’s degrees in computer science and print&nbsp;journalism.
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
            <li>Source control (Perforce and Git)</li>
          </ul>
        </article>
        <article>
          <h2>In the toolkit</h2>
          <ul>
            <li>Python</li>
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
          </ul>
        </article>
      </section>
      <section id="awards">
        <h1>Awards and Honors</h1>
        <article>
          <dl>
            <dt>Spirit of Morris DigitalWorks</dt>
            <dd>Development team award for&nbsp;2010.</dd>
            <dt>Associated Collegiate Press Pacemaker</dt>
            <dd>The Kentucky Kernel was named one of the best college newspapers for my year as editor.</dd>
            <dt>UK Dean’s List</dt>
            <dd>Fall&nbsp;2004, Spring&nbsp;2005, Fall&nbsp;2005, Fall&nbsp;2006, Spring&nbsp;2007, Spring&nbsp;2009 and Fall&nbsp;2009</dd>
            <dt>Hearst Journalism Awards for Photojournalism</dt>
            <dd>7th Place, Sports&nbsp;&amp;&nbsp;News (2007); 19th Place, Sports&nbsp;&amp;&nbsp;News (2006)</dd>
          </dl>
        </article>
      </section>
      <footer>
        Latest version always available&nbsp;at <a href="<?php echo $state->url; ?>"><?php echo $state->url; ?></a>
      </footer>
    </div>
<?php include "../js-footer.inc.php"; ?>
  </body>
</html>
