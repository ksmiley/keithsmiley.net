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
          A sampling of projects that I’ve been substantially responsible for.
        </p>
      </article>
    </section>
    <section id="projects">
      <h1>Code</h1>
      <article>
        <hgroup>
          <h1>Follow News</h1>
          <h2>Morris DigitalWorks</h2>
        </hgroup>
        <figure>
          <img src="images/follow-small.png">
        </figure>
        <p>
          Created a feature on Morris newspaper sites to push custom news updates to readers without requiring any action from editors. That is, “<a href="http://www.yelvington.com/content/follow-article-home-delivery-web">home delivery for the Web</a>.” The project came to the development team as a one-page proposal. Starting from that document, I designed much the user experience and built the feature on top of the Drupal <a href="http://drupal.org/project/messaging">Messaging</a> and <a href="http://drupal.org/project/notifications">Notifications</a> frameworks. A custom module implemented the interface and a second module funneled notifcations through our e-mail marketing provider, which allowed us to track open and clickthrough rates. The Follow feature has been operating on 10 sites for about a year. In that time More than 6,000 users have followed 17,000 topics.
        </p>
      </article>
      <article>
        <hgroup>
          <h1>Project CREATE</h1>
          <h2>UK Department of Communication</h2>
        </hgroup>
        <figure>
          <img src="images/poster-small.png">
        </figure>
        <p>
          Designed and built a Web application to support HIV prevention in rural parts of the United States by allowing public-health workers to create posters tailored to local demographics. University of Kentucky faculty working with the <a href="http://www.indiana.edu/~aids/">Rural Center for AIDS/STD Prevention</a> asked us in May 2009 to take on the “poster maker” project with hopes of launching a pilot program in August. With the help of another developer, I designed and built the Flash-based frontend over the summer. When the pilot was delayed, we built a backend with PHP and Filemaker to store posters as they’re built and let participants order a favorite.
        </p>
      </article>
      <article>
        <hgroup>
          <h1>Article Page Redesign</h1>
          <h2>Morris DigitalWorks</h2>
        </hgroup>
        <figure>
          <img src="images/story_page-small.png">
        </figure>
        <p>
          Collaborated with a developer at the Athens Banner-Herald on a redesign of the main article display that emphasizes the writing and photography. My role was to carefully review the prototype created by the newspaper’s developer and ensure that it would perform well on the live site.
        </p>
      </article>
      <article>
        <hgroup>
          <h1>Single Sign&#8209;On</h1>
          <h2>Morris DigitalWorks</h2>
        </hgroup>
        <figure>
          <img src="images/talks-small.png">
        </figure>
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