


<!DOCTYPE html>
<html lang="en" class="">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>PHPMailer/changelog.md at master · Synchro/PHPMailer · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="Synchro/PHPMailer" name="twitter:title" /><meta content="PHPMailer - The classic email sending library for PHP - this is my personal fork, please post issues on the upstream project" name="twitter:description" /><meta content="https://avatars3.githubusercontent.com/u/81561?v=3&amp;s=400" name="twitter:image:src" />
      <meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars3.githubusercontent.com/u/81561?v=3&amp;s=400" property="og:image" /><meta content="Synchro/PHPMailer" property="og:title" /><meta content="https://github.com/Synchro/PHPMailer" property="og:url" /><meta content="PHPMailer - The classic email sending library for PHP - this is my personal fork, please post issues on the upstream project" property="og:description" />
      <meta name="browser-stats-url" content="/_stats">
    <link rel="assets" href="https://assets-cdn.github.com/">
    
    <meta name="pjax-timeout" content="1000">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="BEE642D5:324B:104D8DE:5512151E" name="octolytics-dimension-request_id" />
    
    <meta content="Rails, view, blob#show" name="analytics-event" />

    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="l5oYIYRlU7ibPX5DWLgIZU+tsAc44Kvcp7/gZes2SPrqOTpeF0ei4PuU3mPZDHpsLktMR8pypEUKv8qCNuifHA==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-5173106e1ce2269aaefb584ff7105d11a3526c861af3895f22d7f177ed9660c2.css" media="all" rel="stylesheet" />
    <link href="https://assets-cdn.github.com/assets/github2-40d9bf14363443ccf64a2b71208f59e8739d6288d962feba121227e0608772f3.css" media="all" rel="stylesheet" />
    
    


    <meta http-equiv="x-pjax-version" content="b3746723eedf3fc96ecd834e81bbcc04">

      
  <meta name="description" content="PHPMailer - The classic email sending library for PHP - this is my personal fork, please post issues on the upstream project">
  <meta name="go-import" content="github.com/Synchro/PHPMailer git https://github.com/Synchro/PHPMailer.git">

  <meta content="81561" name="octolytics-dimension-user_id" /><meta content="Synchro" name="octolytics-dimension-user_login" /><meta content="9370939" name="octolytics-dimension-repository_id" /><meta content="Synchro/PHPMailer" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="true" name="octolytics-dimension-repository_is_fork" /><meta content="2253830" name="octolytics-dimension-repository_parent_id" /><meta content="PHPMailer/PHPMailer" name="octolytics-dimension-repository_parent_nwo" /><meta content="2253830" name="octolytics-dimension-repository_network_root_id" /><meta content="PHPMailer/PHPMailer" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/Synchro/PHPMailer/commits/master.atom" rel="alternate" title="Recent Commits to PHPMailer:master" type="application/atom+xml">

  </head>


  <body class="logged_out  env-production windows vis-public fork page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      


        
        <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="btn btn-primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="btn" href="/login?return_to=%2FSynchro%2FPHPMailer%2Fblob%2Fmaster%2Fchangelog.md" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <form accept-charset="UTF-8" action="/Synchro/PHPMailer/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/Synchro/PHPMailer/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <input type="text"
    class="js-site-search-field is-clearable"
    data-hotkey="s"
    name="q"
    placeholder="Search"
    data-global-scope-placeholder="Search GitHub"
    data-repo-scope-placeholder="Search"
    tabindex="1"
    autocapitalize="off">
  <div class="scope-badge">This repository</div>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/blog" data-ga-click="(Logged out) Header, go to blog, text:blog">Blog</a>
          </li>
      </ul>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        
<ul class="pagehead-actions">

  <li>
      <a href="/login?return_to=%2FSynchro%2FPHPMailer"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to watch a repository" rel="nofollow">
    <span class="octicon octicon-eye"></span>
    Watch
  </a>
  <a class="social-count" href="/Synchro/PHPMailer/watchers">
    203
  </a>

  </li>

  <li>
      <a href="/login?return_to=%2FSynchro%2FPHPMailer"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/Synchro/PHPMailer/stargazers">
      1,091
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2FSynchro%2FPHPMailer"
        class="btn btn-sm btn-with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>
      <a href="/Synchro/PHPMailer/network" class="social-count">
        2,330
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="mega-octicon octicon-repo-forked"></span>
          <span class="author"><a href="/Synchro" class="url fn" itemprop="url" rel="author"><span itemprop="title">Synchro</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/Synchro/PHPMailer" class="js-current-repository" data-pjax="#js-repo-pjax-container">PHPMailer</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
          </span>

            <span class="fork-flag">
              <span class="text">forked from <a href="/PHPMailer/PHPMailer">PHPMailer/PHPMailer</a></span>
            </span>
        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            
<nav class="sunken-menu repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container"
     data-issue-count-url="/Synchro/PHPMailer/issues/counts">
  <ul class="sunken-menu-group">
    <li class="tooltipped tooltipped-w" aria-label="Code">
      <a href="/Synchro/PHPMailer" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /Synchro/PHPMailer">
        <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>


    <li class="tooltipped tooltipped-w" aria-label="Pull requests">
      <a href="/Synchro/PHPMailer/pulls" aria-label="Pull requests" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g p" data-selected-links="repo_pulls /Synchro/PHPMailer/pulls">
          <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull requests</span>
          <span class="js-pull-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>


  </ul>
  <div class="sunken-menu-separator"></div>
  <ul class="sunken-menu-group">

    <li class="tooltipped tooltipped-w" aria-label="Pulse">
      <a href="/Synchro/PHPMailer/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-selected-links="pulse /Synchro/PHPMailer/pulse">
        <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>

    <li class="tooltipped tooltipped-w" aria-label="Graphs">
      <a href="/Synchro/PHPMailer/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-selected-links="repo_graphs repo_contributors /Synchro/PHPMailer/graphs">
        <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>
  </ul>


</nav>

              <div class="only-with-full-nav">
                  
<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/Synchro/PHPMailer.git" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/Synchro/PHPMailer" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>



<p class="clone-options">You can clone with
  <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a> or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</p>


  <a href="https://windows.github.com" class="btn btn-sm sidebar-button" title="Save Synchro/PHPMailer to your computer and use it in GitHub Desktop." aria-label="Save Synchro/PHPMailer to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/Synchro/PHPMailer/archive/master.zip"
                   class="btn btn-sm sidebar-button"
                   aria-label="Download the contents of Synchro/PHPMailer as a zip file"
                   title="Download the contents of Synchro/PHPMailer as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          

<a href="/Synchro/PHPMailer/blob/ec9452012a55220b565225166eb1bc500ea447ab/changelog.md" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:fb817e84ffcc4dde88e7a254c2ec386a -->

<div class="file-navigation js-zeroclipboard-container">
  
<div class="select-menu js-menu-container js-select-menu left">
  <span class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/5.0-dev/changelog.md"
               data-name="5.0-dev"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="5.0-dev">
                5.0-dev
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/5.0-phpdocs/changelog.md"
               data-name="5.0-phpdocs"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="5.0-phpdocs">
                5.0-phpdocs
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/Synchro/PHPMailer/blob/master/changelog.md"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="master">
                master
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/phpmailer-2.0/changelog.md"
               data-name="phpmailer-2.0"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="phpmailer-2.0">
                phpmailer-2.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/phpmailer-2.3.0-msg-limit-patch/changelog.md"
               data-name="phpmailer-2.3.0-msg-limit-patch"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="phpmailer-2.3.0-msg-limit-patch">
                phpmailer-2.3.0-msg-limit-patch
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/phpmailer-5.2.0/changelog.md"
               data-name="phpmailer-5.2.0"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="phpmailer-5.2.0">
                phpmailer-5.2.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/qmail/changelog.md"
               data-name="qmail"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="qmail">
                qmail
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/smtp-refactor/changelog.md"
               data-name="smtp-refactor"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="smtp-refactor">
                smtp-refactor
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/vendor/changelog.md"
               data-name="vendor"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="vendor">
                vendor
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.8/changelog.md"
                 data-name="v5.2.8"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.8">v5.2.8</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.7/changelog.md"
                 data-name="v5.2.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.7">v5.2.7</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.6/changelog.md"
                 data-name="v5.2.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.6">v5.2.6</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.5/changelog.md"
                 data-name="v5.2.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.5">v5.2.5</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.4/changelog.md"
                 data-name="v5.2.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.4">v5.2.4</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.1.0/changelog.md"
                 data-name="v5.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.1.0">v5.1.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.0.2/changelog.md"
                 data-name="v5.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.0.2">v5.0.2</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.0.0/changelog.md"
                 data-name="v5.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.0.0">v5.0.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v2.3.0/changelog.md"
                 data-name="v2.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v2.3.0">v2.3.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v2.2.1/changelog.md"
                 data-name="v2.2.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v2.2.1">v2.2.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v2.0.3/changelog.md"
                 data-name="v2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v2.0.3">v2.0.3</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-5.1/changelog.md"
                 data-name="phpmailer-5.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-5.1">phpmailer-5.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-5.0.2/changelog.md"
                 data-name="phpmailer-5.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-5.0.2">phpmailer-5.0.2</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-5.0.0/changelog.md"
                 data-name="phpmailer-5.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-5.0.0">phpmailer-5.0.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-2.3.0%40186/changelog.md"
                 data-name="phpmailer-2.3.0@186"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-2.3.0@186">phpmailer-2.3.0@186</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-2.3.0/changelog.md"
                 data-name="phpmailer-2.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-2.3.0">phpmailer-2.3.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-2.0.3/changelog.md"
                 data-name="phpmailer-2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-2.0.3">phpmailer-2.0.3</a>
            </div>
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

  <div class="btn-group right">
    <a href="/Synchro/PHPMailer/find/master"
          class="js-show-file-finder btn btn-sm empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>

  <div class="breadcrumb js-zeroclipboard-target">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Synchro/PHPMailer" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">PHPMailer</span></a></span></span><span class="separator">/</span><strong class="final-path">changelog.md</strong>
  </div>
</div>


  <div class="commit file-history-tease">
    <div class="file-history-tease-header">
        <img alt="Marcus Bointon" class="avatar" data-user="81561" height="24" src="https://avatars2.githubusercontent.com/u/81561?v=3&amp;s=48" width="24" />
        <span class="author"><a href="/Synchro" rel="author">Synchro</a></span>
        <time datetime="2015-03-04T09:32:00Z" is="relative-time">Mar 4, 2015</time>
        <div class="commit-title">
            <a href="/Synchro/PHPMailer/commit/de664ae9ae4581e1b6d83aec185d2a7ddc0d8269" class="message" data-pjax="true" title="changelog">changelog</a>
        </div>
    </div>

    <div class="participation">
      <p class="quickstat">
        <a href="#blob_contributors_box" rel="facebox">
          <strong>1</strong>
           contributor
        </a>
      </p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Marcus Bointon" data-user="81561" height="24" src="https://avatars2.githubusercontent.com/u/81561?v=3&amp;s=48" width="24" />
            <a href="/Synchro">Synchro</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file">
  <div class="file-header">
    <div class="file-actions">

      <div class="btn-group">
        <a href="/Synchro/PHPMailer/raw/master/changelog.md" class="btn btn-sm " id="raw-url">Raw</a>
          <a href="/Synchro/PHPMailer/blame/master/changelog.md" class="btn btn-sm js-update-url-with-hash">Blame</a>
        <a href="/Synchro/PHPMailer/commits/master/changelog.md" class="btn btn-sm " rel="nofollow">History</a>
      </div>

        <a class="octicon-btn tooltipped tooltipped-nw"
           href="https://windows.github.com"
           aria-label="Open this file in GitHub for Windows">
            <span class="octicon octicon-device-desktop"></span>
        </a>

          <button type="button" class="octicon-btn disabled tooltipped tooltipped-n" aria-label="You must be signed in to make or propose changes">
            <span class="octicon octicon-pencil"></span>
          </button>

        <button type="button" class="octicon-btn octicon-btn-danger disabled tooltipped tooltipped-n" aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </button>
    </div>

    <div class="file-info">
        581 lines (515 sloc)
        <span class="file-info-divider"></span>
      25.214 kb
    </div>
  </div>
    <div id="readme" class="blob instapaper_body">
    <article class="markdown-body entry-content" itemprop="mainContentOfPage"><h1>
<a id="user-content-changelog" class="anchor" href="#changelog" aria-hidden="true"><span class="octicon octicon-link"></span></a>ChangeLog</h1>

<ul class="task-list">
<li>Use <code>application/javascript</code> for .js attachments</li>
<li>Improve RFC2821 compliance for timelimits, especially for end-of-data</li>
<li>Add Azerbaijani translations (Thanks to @mirjalal)</li>
<li>Minor code cleanup for robustness</li>
<li>Add Indonesian translations (Thanks to @ceceprawiro)</li>
<li>Avoid <code>error_log</code> Debugoutput naming clash</li>
<li>Add ability to parse server capabilities in response to EHLO (useful for SendGrid etc)</li>
<li>Amended default values for WordWrap to match RFC</li>
<li>Remove html2text converter class (has incompatible license)</li>
<li>Provide new mechanism for injecting html to text converters</li>
<li>Improve pointers to docs and support in README</li>
<li>Add example file upload script</li>
<li>Refactor and major cleanup of EasyPeasyICS, now a lot more usable</li>
<li>Make set() method simpler and more reliable</li>
<li>Add Malay translation (Thanks to @nawawi)</li>
<li>Add Bulgarian translation (Thanks to @mialy)</li>
<li>Add Armenian translation (Thanks to Hrayr Grigoryan)</li>
<li>Add Slovenian translation (Thanks to Klemen Tušar)</li>
<li>More efficient word wrapping</li>
</ul>

<h2>
<a id="user-content-version-529-sept-25th-2014" class="anchor" href="#version-529-sept-25th-2014" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.9 (Sept 25th 2014)</h2>

<ul class="task-list">
<li><strong>Important: The autoloader is no longer autoloaded by the PHPMailer class</strong></li>
<li>Update html2text from <a href="https://github.com/mtibben/html2text">https://github.com/mtibben/html2text</a>
</li>
<li>Improve Arabic translations (Thanks to @tarekdj)</li>
<li>Consistent handling of connection variables in SMTP and POP3</li>
<li>PHPDoc cleanup</li>
<li>Update composer to use PHPUnit 4.1</li>
<li>Pass consistent params to callbacks</li>
<li>More consistent handling of error states and debug output</li>
<li>Use property defaults, remove constructors</li>
<li>Remove unreachable code</li>
<li>Use older regex validation pattern for troublesome PCRE library versions</li>
<li>Improve PCRE detection in older PHP versions</li>
<li>Handle debug output consistently, and always in UTF-8</li>
<li>Allow user-defined debug output method via a callable</li>
<li>msgHTML now converts data URIs to embedded images</li>
<li>SMTP::getLastReply() will now always be populated</li>
<li>Improved example code in README</li>
<li>Ensure long filenames in Content-Disposition are encoded correctly</li>
<li>Simplify SMTP debug output mechanism, clarify levels with constants</li>
<li>Add SMTP connection check example</li>
<li>Simplify examples, don't use mysql* functions</li>
</ul>

<h2>
<a id="user-content-version-528-may-14th-2014" class="anchor" href="#version-528-may-14th-2014" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.8 (May 14th 2014)</h2>

<ul class="task-list">
<li>Increase timeout to match RFC2821 section 4.5.3.2 and thus not fail greetdelays, fixes #104</li>
<li>Add timestamps to default debug output</li>
<li>Add connection events and new level 3 to debug output options</li>
<li>Chinese language update (Thanks to @binaryoung)</li>
<li>Allow custom Mailer types (Thanks to @michield)</li>
<li>Cope with spaces around SMTP host specs</li>
<li>Fix processing of multiple hosts in connect string</li>
<li>Added Galician translation (Thanks to @donatorouco)</li>
<li>Autoloader now prepends</li>
<li>Docs updates</li>
<li>Add Latvian translation (Thanks to @eddsstudio)</li>
<li>Add Belarusian translation (Thanks to @amaksymiuk)</li>
<li>Make autoloader work better on older PHP versions</li>
<li>Avoid double-encoding if mbstring is overloading mail()</li>
<li>Add Portuguese translation (Thanks to @Jonadabe)</li>
<li>Make quoted-printable encoder respect line ending setting</li>
<li>Improve Chinese translation (Thanks to @PeterDaveHello)</li>
<li>Add Georgian translation (Thanks to @akalongman)</li>
<li>Add Greek translation (Thanks to @lenasterg)</li>
<li>Fix serverHostname on PHP &lt; 5.3</li>
<li>Improve performance of SMTP class</li>
<li>Implement automatic 7bit downgrade</li>
<li>Add Vietnamese translation (Thanks to @vinades)</li>
<li>Improve example images, switch to PNG</li>
<li>Add Croatian translation (Thanks to @hrvoj3e)</li>
<li>Remove setting the Return-Path and deprecate the Return-path property - it's just wrong!</li>
<li>Fix language file loading if CWD has changed (@stephandesouza)</li>
<li>Add HTML5 email validation pattern</li>
<li>Improve Turkish translations (Thanks to @yasinaydin)</li>
<li>Improve Romanian translations (Thanks to @aflorea)</li>
<li>Check php.ini for path to sendmail/qmail before using default</li>
<li>Improve Farsi translation (Thanks to @MHM5000)</li>
<li>Don't use quoted-printable encoding for multipart types</li>
<li>Add Serbian translation (Thanks to ajevremovic at gmail.com)</li>
<li>Remove useless PHP5 check</li>
<li>Use SVG for build status badges</li>
<li>Store MessageDate on creation</li>
<li>Better default behaviour for validateAddress</li>
</ul>

<h2>
<a id="user-content-version-527-september-12th-2013" class="anchor" href="#version-527-september-12th-2013" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.7 (September 12th 2013)</h2>

<ul class="task-list">
<li>Add Ukrainian translation from @Krezalis</li>
<li>Support for do_verp</li>
<li>Fix bug in CRAM-MD5 AUTH</li>
<li>Propagate Debugoutput option to SMTP class (@Reblutus)</li>
<li>Determine MIME type of attachments automatically</li>
<li>Add cross-platform, multibyte-safe pathinfo replacement (with tests) and use it</li>
<li>Add a new 'html' Debugoutput type</li>
<li>Clean up SMTP debug output, remove embedded HTML</li>
<li>Some small changes in header formatting to improve IETF msglint test results</li>
<li>Update test_script to use some recently changed features, rename to code_generator</li>
<li>Generated code actually works!</li>
<li>Update SyntaxHighlighter</li>
<li>Major overhaul and cleanup of example code</li>
<li>New PHPMailer graphic</li>
<li>msgHTML now uses RFC2392-compliant content ids</li>
<li>Add line break normalization function and use it in msgHTML</li>
<li>Don't set unnecessary reply-to addresses</li>
<li>Make fakesendmail.sh a bit cleaner and safer</li>
<li>Set a content-transfer-encoding on multiparts (fixes msglint error)</li>
<li>Fix cid generation in msgHTML (Thanks to @digitalthought)</li>
<li>Fix handling of multiple SMTP servers (Thanks to @NanoCaiordo)</li>
<li>SMTP-&gt;connect() now supports stream context options (Thanks to @stanislavdavid)</li>
<li>Add support for iCal event alternatives (Thanks to @reblutus)</li>
<li>Update to Polish language file (Thanks to Krzysztof Kowalewski)</li>
<li>Update to Norwegian language file (Thanks to @datagutten)</li>
<li>Update to Hungarian language file (Thanks to @dominicus-75)</li>
<li>Add Persian/Farsi translation from @jaii</li>
<li>Make SMTPDebug property type match type in SMTP class</li>
<li>Add unit tests for DKIM</li>
<li>Major refactor of SMTP class</li>
<li>Reformat to PSR-2 coding standard</li>
<li>Introduce autoloader</li>
<li>Allow overriding of SMTP class</li>
<li>Overhaul of PHPDocs</li>
<li>Fix broken Q-encoding</li>
<li>Czech language update (Thanks to @nemelu)</li>
<li>Removal of excess blank lines in messages</li>
<li>Added fake POP server and unit tests for POP-before-SMTP</li>
</ul>

<h2>
<a id="user-content-version-526-april-11th-2013" class="anchor" href="#version-526-april-11th-2013" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.6 (April 11th 2013)</h2>

<ul class="task-list">
<li>Reflect move to PHPMailer GitHub organisation at <a href="https://github.com/PHPMailer/PHPMailer">https://github.com/PHPMailer/PHPMailer</a>
</li>
<li>Fix unbumped version numbers</li>
<li>Update packagist.org with new location</li>
<li>Clean up Changelog</li>
</ul>

<h2>
<a id="user-content-version-525-april-6th-2013" class="anchor" href="#version-525-april-6th-2013" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.5 (April 6th 2013)</h2>

<ul class="task-list">
<li>First official release after move from Google Code</li>
<li>Fixes for qmail when sending via mail()</li>
<li>Merge in changes from Google code 5.2.4 release</li>
<li>Minor coding standards cleanup in SMTP class</li>
<li>Improved unit tests, now tests S/MIME signing</li>
<li>Travis-CI support on GitHub, runs tests with fake SMTP server</li>
</ul>

<h2>
<a id="user-content-version-524-february-19-2013" class="anchor" href="#version-524-february-19-2013" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.4 (February 19, 2013)</h2>

<ul class="task-list">
<li>Fix tag and version bug.</li>
<li>un-deprecate isSMTP(), isMail(), IsSendmail() and isQmail().</li>
<li>Numerous translation updates</li>
</ul>

<h2>
<a id="user-content-version-523-february-8-2013" class="anchor" href="#version-523-february-8-2013" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.3 (February 8, 2013)</h2>

<ul class="task-list">
<li>Fix issue with older PCREs and ValidateAddress() (Bugz: 124)</li>
<li>Add CRAM-MD5 authentication, thanks to Elijah madden, <a href="https://github.com/okonomiyaki3000">https://github.com/okonomiyaki3000</a>
</li>
<li>Replacement of obsolete Quoted-Printable encoder with a much better implementation</li>
<li>Composer package definition</li>
<li>New language added: Hebrew</li>
</ul>

<h2>
<a id="user-content-version-522-december-3-2012" class="anchor" href="#version-522-december-3-2012" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.2 (December 3, 2012)</h2>

<ul class="task-list">
<li>Some fixes and syncs from <a href="https://github.com/Synchro/PHPMailer">https://github.com/Synchro/PHPMailer</a>
</li>
<li>Add Slovak translation, thanks to Michal Tinka</li>
</ul>

<h2>
<a id="user-content-version-522-rc2-november-6-2012" class="anchor" href="#version-522-rc2-november-6-2012" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.2-rc2 (November 6, 2012)</h2>

<ul class="task-list">
<li>Fix SMTP server rotation (Bugz: 118)</li>
<li>Allow override of autogen'ed 'Date' header (for Drupal's
og_mailinglist module)</li>
<li>No whitespace after '-f' option (Bugz: 116)</li>
<li>Work around potential warning (Bugz: 114)</li>
</ul>

<h2>
<a id="user-content-version-522-rc1-september-28-2012" class="anchor" href="#version-522-rc1-september-28-2012" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.2-rc1 (September 28, 2012)</h2>

<ul class="task-list">
<li>Header encoding works with long lines (Bugz: 93)</li>
<li>Turkish language update (Bugz: 94)</li>
<li>undefined $pattern in EncodeQ bug squashed (Bugz: 98)</li>
<li>use of mail() in safe_mode now works (Bugz: 96)</li>
<li>ValidateAddress() now 'public static' so people can override the
default and use their own validation scheme.</li>
<li>ValidateAddress() no longer uses broken FILTER_VALIDATE_EMAIL</li>
<li>Added in AUTH PLAIN SMTP authentication</li>
</ul>

<h2>
<a id="user-content-version-522-beta2-august-17-2012" class="anchor" href="#version-522-beta2-august-17-2012" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.2-beta2 (August 17, 2012)</h2>

<ul class="task-list">
<li>Fixed Postfix VERP support (Bugz: 92)</li>
<li>Allow action_function callbacks to pass/use
the From address (passed as final param)</li>
<li>Prevent inf look for get_lines() (Bugz: 77)</li>
<li>New public var ($UseSendmailOptions). Only pass sendmail()
options iff we really are using sendmail or something sendmail
compatible. (Bugz: 75)</li>
<li>default setting for LE returned to "\n" due to popular demand.</li>
</ul>

<h2>
<a id="user-content-version-522-beta1-july-13-2012" class="anchor" href="#version-522-beta1-july-13-2012" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.2-beta1 (July 13, 2012)</h2>

<ul class="task-list">
<li>Expose PreSend() and PostSend() as public methods to allow
for more control if serializing message sending.</li>
<li>GetSentMIMEMessage() only constructs the message copy when
needed. Save memory.</li>
<li>Only pass params to mail() if the underlying MTA is
"sendmail" (as defined as "having the string sendmail
in its pathname") [#69]</li>
<li>Attachments now work with Amazon SES and others [Bugz#70]</li>
<li>Debug output now sent to stdout (via echo) or error_log [Bugz#5]</li>
<li>New var: Debugoutput (for above) [Bugz#5]</li>
<li>SMTP reads now Timeout aware (new var: Timeout=15) [Bugz#71]</li>
<li>SMTP reads now can have a Timelimit associated with them
(new var: Timelimit=30)[Bugz#71]</li>
<li>Fix quoting issue associated with charsets</li>
<li>default setting for LE is now RFC compliant: "\r\n"</li>
<li>Return-Path can now be user defined (new var: ReturnPath)
(the default is "" which implies no change from previous
behavior, which was to use either From or Sender) [Bugz#46]</li>
<li>X-Mailer header can now be disabled (by setting to a
whitespace string, eg "  ") [Bugz#66]</li>
<li>Bugz closed: #68, #60, #42, #43, #59, #55, #66, #48, #49,
           #52, #31, #41, #5. #70, #69</li>
</ul>

<h2>
<a id="user-content-version-521-january-16-2012" class="anchor" href="#version-521-january-16-2012" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2.1 (January 16, 2012)</h2>

<ul class="task-list">
<li>Closed several bugs #5</li>
<li>Performance improvements</li>
<li>MsgHTML() now returns the message as required.</li>
<li>New method: GetSentMIMEMessage() (returns full copy of sent message)</li>
</ul>

<h2>
<a id="user-content-version-52-july-19-2011" class="anchor" href="#version-52-july-19-2011" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.2 (July 19, 2011)</h2>

<ul class="task-list">
<li>protected MIME body and header</li>
<li>better DKIM DNS Resource Record support</li>
<li>better aly handling</li>
<li>htmlfilter class added to extras</li>
<li>moved to Apache Extras</li>
</ul>

<h2>
<a id="user-content-version-51-october-20-2009" class="anchor" href="#version-51-october-20-2009" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.1 (October 20, 2009)</h2>

<ul class="task-list">
<li>fixed filename issue with AddStringAttachment (thanks to Tony)</li>
<li>fixed "SingleTo" property, now works with Senmail, Qmail, and SMTP in
addition to PHP mail()</li>
<li>added DKIM digital signing functionality, new properties:

<ul class="task-list">
<li>DKIM_domain (sets the domain name)</li>
<li>DKIM_private (holds DKIM private key)</li>
<li>DKIM_passphrase (holds your DKIM passphrase)</li>
<li>DKIM_selector (holds the DKIM "selector")</li>
<li>DKIM_identity (holds the identifying email address)</li>
</ul>
</li>
<li>added callback function support

<ul class="task-list">
<li>callback function parameters include:
result, to, cc, bcc, subject and body</li>
<li>see the test/test_callback.php file for usage.</li>
</ul>
</li>
<li>added "auto" identity functionality

<ul class="task-list">
<li>can automatically add:

<ul class="task-list">
<li>Return-path (if Sender not set)</li>
<li>Reply-To (if ReplyTo not set)</li>
</ul>
</li>
<li>can be disabled:

<ul class="task-list">
<li>$mail-&gt;SetFrom('<a href="mailto:yourname@yourdomain.com">yourname@yourdomain.com</a>','First Last',false);</li>
<li>or by adding the $mail-&gt;Sender and/or $mail-&gt;ReplyTo properties</li>
</ul>
</li>
</ul>
</li>
</ul>

<p>Note: "auto" identity added to help with emails ending up in spam or junk boxes because of missing headers</p>

<h2>
<a id="user-content-version-502-may-24-2009" class="anchor" href="#version-502-may-24-2009" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.0.2 (May 24, 2009)</h2>

<ul class="task-list">
<li>Fix for missing attachments when inline graphics are present</li>
<li>Fix for missing Cc in header when using SMTP (mail was sent,
but not displayed in header -- Cc receiver only saw email To:
line and no Cc line, but did get the email (To receiver
saw same)</li>
</ul>

<h2>
<a id="user-content-version-501-april-05-2009" class="anchor" href="#version-501-april-05-2009" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.0.1 (April 05, 2009)</h2>

<ul class="task-list">
<li>Temporary fix for missing attachments</li>
</ul>

<h2>
<a id="user-content-version-500-april-02-2009" class="anchor" href="#version-500-april-02-2009" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 5.0.0 (April 02, 2009)</h2>

<p>With the release of this version, we are initiating a new version numbering
system to differentiate from the PHP4 version of PHPMailer.
Most notable in this release is fully object oriented code.</p>

<h3>
<a id="user-content-classsmtpphp" class="anchor" href="#classsmtpphp" aria-hidden="true"><span class="octicon octicon-link"></span></a>class.smtp.php:</h3>

<ul class="task-list">
<li>Refactored class.smtp.php to support new exception handling</li>
<li>code size reduced from 29.2 Kb to 25.6 Kb</li>
<li>Removed unnecessary functions from class.smtp.php:

<ul class="task-list">
<li>public function Expand($name) {</li>
<li>public function Help($keyword="") {</li>
<li>public function Noop() {</li>
<li>public function Send($from) {</li>
<li>public function SendOrMail($from) {</li>
<li>public function Verify($name) {</li>
</ul>
</li>
</ul>

<h3>
<a id="user-content-classphpmailerphp" class="anchor" href="#classphpmailerphp" aria-hidden="true"><span class="octicon octicon-link"></span></a>class.phpmailer.php:</h3>

<ul class="task-list">
<li>Refactored class.phpmailer.php with new exception handling</li>
<li>Changed processing functionality of Sendmail and Qmail so they cannot be
inadvertently used</li>
<li>removed getFile() function, just became a simple wrapper for
file_get_contents()</li>
<li>added check for PHP version (will gracefully exit if not at least PHP 5.0)</li>
<li>enhanced code to check if an attachment source is the same as an embedded or
inline graphic source to eliminate duplicate attachments</li>
</ul>

<h3>
<a id="user-content-new-test_script" class="anchor" href="#new-test_script" aria-hidden="true"><span class="octicon octicon-link"></span></a>New /test_script</h3>

<p>We have written a test script you can use to test the script as part of your
installation. Once you press submit, the test script will send a multi-mime
email with either the message you type in or an HTML email with an inline
graphic. Two attachments are included in the email (one of the attachments
is also the inline graphic so you can see that only one copy of the graphic
is sent in the email). The test script will also display the functional
script that you can copy/paste to your editor to duplicate the functionality.</p>

<h3>
<a id="user-content-new-examples" class="anchor" href="#new-examples" aria-hidden="true"><span class="octicon octicon-link"></span></a>New examples</h3>

<p>All new examples in both basic and advanced modes. Advanced examples show
   Exception handling.</p>

<h3>
<a id="user-content-phpdocumentator-phpdocs-documentation-for-phpmailer-version-500" class="anchor" href="#phpdocumentator-phpdocs-documentation-for-phpmailer-version-500" aria-hidden="true"><span class="octicon octicon-link"></span></a>PHPDocumentator (phpdocs) documentation for PHPMailer version 5.0.0</h3>

<p>All new documentation</p>

<h2>
<a id="user-content-version-23-november-06-2008" class="anchor" href="#version-23-november-06-2008" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 2.3 (November 06, 2008)</h2>

<ul class="task-list">
<li>added Arabic language (many thanks to Bahjat Al Mostafa)</li>
<li>removed English language from language files and made it a default within
class.phpmailer.php - if no language is found, it will default to use
the english language translation</li>
<li>fixed public/private declarations</li>
<li>corrected line 1728, $basedir to $directory</li>
<li>added $sign_cert_file to avoid improper duplicate use of $sign_key_file</li>
<li>corrected $this-&gt;Hello on line 612 to $this-&gt;Helo</li>
<li>changed default of $LE to "\r\n" to comply with RFC 2822. Can be set by the user
if default is not acceptable</li>
<li>removed trim() from return results in EncodeQP</li>
<li>/test and three files it contained are removed from version 2.3</li>
<li>fixed phpunit.php for compliance with PHP5</li>
<li>changed $this-&gt;AltBody = $textMsg; to $this-&gt;AltBody = html_entity_decode($textMsg);</li>
<li>We have removed the /phpdoc from the downloads. All documentation is now on
the <a href="http://phpmailer.codeworxtech.com">http://phpmailer.codeworxtech.com</a> website.</li>
</ul>

<h2>
<a id="user-content-version-221--july-19-2008" class="anchor" href="#version-221--july-19-2008" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 2.2.1 () July 19 2008</h2>

<ul class="task-list">
<li>fixed line 1092 in class.smtp.php (my apologies, error on my part)</li>
</ul>

<h2>
<a id="user-content-version-22--july-15-2008" class="anchor" href="#version-22--july-15-2008" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 2.2 () July 15 2008</h2>

<ul class="task-list">
<li>Fixed redirect issue (display of UTF-8 in thank you redirect)</li>
<li>fixed error in getResponse function declaration (class.pop3.php)</li>
<li>PHPMailer now PHP6 compliant</li>
<li>fixed line 1092 in class.smtp.php (endless loop from missing = sign)</li>
</ul>

<h2>
<a id="user-content-version-21-wed-june-04-2008" class="anchor" href="#version-21-wed-june-04-2008" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 2.1 (Wed, June 04 2008)</h2>

<p>NOTE: WE HAVE A NEW LANGUAGE VARIABLE FOR DIGITALLY SIGNED S/MIME EMAILS. IF YOU CAN HELP WITH LANGUAGES OTHER THAN ENGLISH AND SPANISH, IT WOULD BE APPRECIATED.</p>

<ul class="task-list">
<li>added S/MIME functionality (ability to digitally sign emails)
BIG THANKS TO "sergiocambra" for posting this patch back in November 2007.
The "Signed Emails" functionality adds the Sign method to pass the private key
filename and the password to read it, and then email will be sent with
content-type multipart/signed and with the digital signature attached.</li>
<li>fully compatible with E_STRICT error level

<ul class="task-list">
<li>Please note:
In about half the test environments this development version was subjected
to, an error was thrown for the date() functions used (line 1565 and 1569).
This is NOT a PHPMailer error, it is the result of an incorrectly configured
PHP5 installation. The fix is to modify your 'php.ini' file and include the
date.timezone = Etc/UTC (or your own zone)
directive, to your own server timezone</li>
<li>If you do get this error, and are unable to access your php.ini file:
In your PHP script, add
<code>date_default_timezone_set('Etc/UTC');</code>
</li>
<li>do not try to use
<code>$myVar = date_default_timezone_get();</code>
as a test, it will throw an error.</li>
</ul>
</li>
<li>added ability to define path (mainly for embedded images)
function <code>MsgHTML($message,$basedir='')</code> ... where:
<code>$basedir</code> is the fully qualified path</li>
<li>fixed <code>MsgHTML()</code> function:

<ul class="task-list">
<li>Embedded Images where images are specified by <code>&lt;protocol&gt;://</code> will not be altered or embedded</li>
</ul>
</li>
<li>fixed the return value of SMTP exit code ( pclose )</li>
<li>addressed issue of multibyte characters in subject line and truncating</li>
<li>added ability to have user specified Message ID
(default is still that PHPMailer create a unique Message ID)</li>
<li>corrected unidentified message type to 'application/octet-stream'</li>
<li>fixed chunk_split() multibyte issue (thanks to Colin Brown, et al).</li>
<li>added check for added attachments</li>
<li>enhanced conversion of HTML to text in MsgHTML (thanks to "brunny")</li>
</ul>

<h2>
<a id="user-content-version-210beta2-sun-dec-02-2007" class="anchor" href="#version-210beta2-sun-dec-02-2007" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 2.1.0beta2 (Sun, Dec 02 2007)</h2>

<ul class="task-list">
<li>implemented updated EncodeQP (thanks to coolbru, aka Marcus Bointon)</li>
<li>finished all testing, all known bugs corrected, enhancements tested</li>
</ul>

<p>Note: will NOT work with PHP4.</p>

<p>Please note, this is BETA software <strong>DO NOT USE THIS IN PRODUCTION OR LIVE PROJECTS; INTENDED STRICTLY FOR TESTING</strong></p>

<h2>
<a id="user-content-version-210beta1" class="anchor" href="#version-210beta1" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 2.1.0beta1</h2>

<p>Please note, this is BETA software
** DO NOT USE THIS IN PRODUCTION OR LIVE PROJECTS
 INTENDED STRICTLY FOR TESTING</p>

<h2>
<a id="user-content-version-200-rc2-fri-nov-16-2007-interim-release" class="anchor" href="#version-200-rc2-fri-nov-16-2007-interim-release" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 2.0.0 rc2 (Fri, Nov 16 2007), interim release</h2>

<ul class="task-list">
<li>implements new property to control VERP in class.smtp.php
example (requires instantiating class.smtp.php):
$mail-&gt;do_verp = true;</li>
<li>POP-before-SMTP functionality included, thanks to Richard Davey
(see class.pop3.php &amp; pop3_before_smtp_test.php for examples)</li>
<li>included example showing how to use PHPMailer with GMAIL</li>
<li>fixed the missing Cc in SendMail() and Mail()</li>
</ul>

<h2>
<a id="user-content-version-200-rc1-thu-nov-08-2007-interim-release" class="anchor" href="#version-200-rc1-thu-nov-08-2007-interim-release" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 2.0.0 rc1 (Thu, Nov 08 2007), interim release</h2>

<ul class="task-list">
<li>dramatically simplified using inline graphics ... it's fully automated and requires no user input</li>
<li>added automatic document type detection for attachments and pictures</li>
<li>added MsgHTML() function to replace Body tag for HTML emails</li>
<li>fixed the SendMail security issues (input validation vulnerability)</li>
<li>enhanced the AddAddresses functionality so that the "Name" portion is used in the email address</li>
<li>removed the need to use the AltBody method (set from the HTML, or default text used)</li>
<li>set the PHP Mail() function as the default (still support SendMail, SMTP Mail)</li>
<li>removed the need to set the IsHTML property (set automatically)</li>
<li>added Estonian language file by Indrek Päri</li>
<li>added header injection patch</li>
<li>added "set" method to permit users to create their own pseudo-properties like 'X-Headers', etc.</li>
<li>fixed warning message in SMTP get_lines method</li>
<li>added TLS/SSL SMTP support.</li>
<li>PHPMailer has been tested with PHP4 (4.4.7) and PHP5 (5.2.7)</li>
<li>Works with PHP installed as a module or as CGI-PHP
NOTE: will NOT work with PHP5 in E_STRICT error mode</li>
</ul>

<h2>
<a id="user-content-version-173-sun-jun-10-2005" class="anchor" href="#version-173-sun-jun-10-2005" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.73 (Sun, Jun 10 2005)</h2>

<ul class="task-list">
<li>Fixed denial of service bug: <a href="http://www.cybsec.com/vuln/PHPMailer-DOS.pdf">http://www.cybsec.com/vuln/PHPMailer-DOS.pdf</a>
</li>
<li>Now has a total of 20 translations</li>
<li>Fixed alt attachments bug: <a href="http://tinyurl.com/98u9k">http://tinyurl.com/98u9k</a>
</li>
</ul>

<h2>
<a id="user-content-version-172-wed-may-25-2004" class="anchor" href="#version-172-wed-may-25-2004" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.72 (Wed, May 25 2004)</h2>

<ul class="task-list">
<li>Added Dutch, Swedish, Czech, Norwegian, and Turkish translations.</li>
<li>Received: Removed this method because spam filter programs like
SpamAssassin reject this header.</li>
<li>Fixed error count bug.</li>
<li>SetLanguage default is now "language/".</li>
<li>Fixed magic_quotes_runtime bug.</li>
</ul>

<h2>
<a id="user-content-version-171-tue-jul-28-2003" class="anchor" href="#version-171-tue-jul-28-2003" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.71 (Tue, Jul 28 2003)</h2>

<ul class="task-list">
<li>Made several speed enhancements</li>
<li>Added German and Italian translation files</li>
<li>Fixed HELO/AUTH bugs on keep-alive connects</li>
<li>Now provides an error message if language file does not load</li>
<li>Fixed attachment EOL bug</li>
<li>Updated some unclear documentation</li>
<li>Added additional tests and improved others</li>
</ul>

<h2>
<a id="user-content-version-170-mon-jun-20-2003" class="anchor" href="#version-170-mon-jun-20-2003" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.70 (Mon, Jun 20 2003)</h2>

<ul class="task-list">
<li>Added SMTP keep-alive support</li>
<li>Added IsError method for error detection</li>
<li>Added error message translation support (SetLanguage)</li>
<li>Refactored many methods to increase library performance</li>
<li>Hello now sends the newer EHLO message before HELO as per RFC 2821</li>
<li>Removed the boundary class and replaced it with GetBoundary</li>
<li>Removed queue support methods</li>
<li>New $Hostname variable</li>
<li>New Message-ID header</li>
<li>Received header reformat</li>
<li>Helo variable default changed to $Hostname</li>
<li>Removed extra spaces in Content-Type definition (#667182)</li>
<li>Return-Path should be set to Sender when set</li>
<li>Adds Q or B encoding to headers when necessary</li>
<li>quoted-encoding should now encode NULs \000</li>
<li>Fixed encoding of body/AltBody (#553370)</li>
<li>Adds "To: undisclosed-recipients:;" when all recipients are hidden (BCC)</li>
<li>Multiple bug fixes</li>
</ul>

<h2>
<a id="user-content-version-165-fri-aug-09-2002" class="anchor" href="#version-165-fri-aug-09-2002" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.65 (Fri, Aug 09 2002)</h2>

<ul class="task-list">
<li>Fixed non-visible attachment bug (#585097) for Outlook</li>
<li>SMTP connections are now closed after each transaction</li>
<li>Fixed SMTP::Expand return value</li>
<li>Converted SMTP class documentation to phpDocumentor format</li>
</ul>

<h2>
<a id="user-content-version-162-wed-jun-26-2002" class="anchor" href="#version-162-wed-jun-26-2002" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.62 (Wed, Jun 26 2002)</h2>

<ul class="task-list">
<li>Fixed multi-attach bug</li>
<li>Set proper word wrapping</li>
<li>Reduced memory use with attachments</li>
<li>Added more debugging</li>
<li>Changed documentation to phpDocumentor format</li>
</ul>

<h2>
<a id="user-content-version-160-sat-mar-30-2002" class="anchor" href="#version-160-sat-mar-30-2002" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.60 (Sat, Mar 30 2002)</h2>

<ul class="task-list">
<li>Sendmail pipe and address patch (Christian Holtje)</li>
<li>Added embedded image and read confirmation support (A. Ognio)</li>
<li>Added unit tests</li>
<li>Added SMTP timeout support (*nix only)</li>
<li>Added possibly temporary PluginDir variable for SMTP class</li>
<li>Added LE message line ending variable</li>
<li>Refactored boundary and attachment code</li>
<li>Eliminated SMTP class warnings</li>
<li>Added SendToQueue method for future queuing support</li>
</ul>

<h2>
<a id="user-content-version-154-wed-dec-19-2001" class="anchor" href="#version-154-wed-dec-19-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.54 (Wed, Dec 19 2001)</h2>

<ul class="task-list">
<li>Add some queuing support code</li>
<li>Fixed a pesky multi/alt bug</li>
<li>Messages are no longer forced to have "To" addresses</li>
</ul>

<h2>
<a id="user-content-version-150-thu-nov-08-2001" class="anchor" href="#version-150-thu-nov-08-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.50 (Thu, Nov 08 2001)</h2>

<ul class="task-list">
<li>Fix extra lines when not using SMTP mailer</li>
<li>Set WordWrap variable to int with a zero default</li>
</ul>

<h2>
<a id="user-content-version-147-tue-oct-16-2001" class="anchor" href="#version-147-tue-oct-16-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.47 (Tue, Oct 16 2001)</h2>

<ul class="task-list">
<li>Fixed Received header code format</li>
<li>Fixed AltBody order error</li>
<li>Fixed alternate port warning</li>
</ul>

<h2>
<a id="user-content-version-145-tue-sep-25-2001" class="anchor" href="#version-145-tue-sep-25-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.45 (Tue, Sep 25 2001)</h2>

<ul class="task-list">
<li>Added enhanced SMTP debug support</li>
<li>Added support for multiple ports on SMTP</li>
<li>Added Received header for tracing</li>
<li>Fixed AddStringAttachment encoding</li>
<li>Fixed possible header name quote bug</li>
<li>Fixed wordwrap() trim bug</li>
<li>Couple other small bug fixes</li>
</ul>

<h2>
<a id="user-content-version-141-wed-aug-22-2001" class="anchor" href="#version-141-wed-aug-22-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.41 (Wed, Aug 22 2001)</h2>

<ul class="task-list">
<li>Fixed AltBody bug w/o attachments</li>
<li>Fixed rfc_date() for certain mail servers</li>
</ul>

<h2>
<a id="user-content-version-140-sun-aug-12-2001" class="anchor" href="#version-140-sun-aug-12-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.40 (Sun, Aug 12 2001)</h2>

<ul class="task-list">
<li>Added multipart/alternative support (AltBody)</li>
<li>Documentation update</li>
<li>Fixed bug in Mercury MTA</li>
</ul>

<h2>
<a id="user-content-version-129-fri-aug-03-2001" class="anchor" href="#version-129-fri-aug-03-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.29 (Fri, Aug 03 2001)</h2>

<ul class="task-list">
<li>Added AddStringAttachment() method</li>
<li>Added SMTP authentication support</li>
</ul>

<h2>
<a id="user-content-version-128-mon-jul-30-2001" class="anchor" href="#version-128-mon-jul-30-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.28 (Mon, Jul 30 2001)</h2>

<ul class="task-list">
<li>Fixed a typo in SMTP class</li>
<li>Fixed header issue with Imail (win32) SMTP server</li>
<li>Made fopen() calls for attachments use "rb" to fix win32 error</li>
</ul>

<h2>
<a id="user-content-version-125-mon-jul-02-2001" class="anchor" href="#version-125-mon-jul-02-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.25 (Mon, Jul 02 2001)</h2>

<ul class="task-list">
<li>Added RFC 822 date fix (Patrice)</li>
<li>Added improved error handling by adding a $ErrorInfo variable</li>
<li>Removed MailerDebug variable (obsolete with new error handler)</li>
</ul>

<h2>
<a id="user-content-version-120-mon-jun-25-2001" class="anchor" href="#version-120-mon-jun-25-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.20 (Mon, Jun 25 2001)</h2>

<ul class="task-list">
<li>Added quoted-printable encoding (Patrice)</li>
<li>Set Version as public and removed PrintVersion()</li>
<li>Changed phpdoc to only display public variables and methods</li>
</ul>

<h2>
<a id="user-content-version-119-thu-jun-21-2001" class="anchor" href="#version-119-thu-jun-21-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.19 (Thu, Jun 21 2001)</h2>

<ul class="task-list">
<li>Fixed MS Mail header bug</li>
<li>Added fix for Bcc problem with mail(). <em>Does not work on Win32</em>
(See PHP bug report: <a href="http://www.php.net/bugs.php?id=11616">http://www.php.net/bugs.php?id=11616</a>)</li>
<li>mail() no longer passes a fifth parameter when not needed</li>
</ul>

<h2>
<a id="user-content-version-115-fri-jun-15-2001" class="anchor" href="#version-115-fri-jun-15-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.15 (Fri, Jun 15 2001)</h2>

<p>Note: these changes contributed by Patrice Fournier</p>

<ul class="task-list">
<li>Changed all remaining \n to \r\n</li>
<li>Bcc: header no longer written to message except
when sent directly to sendmail</li>
<li>Added a small message to non-MIME compliant mail reader</li>
<li>Added Sender variable to change the Sender email
used in -f for sendmail/mail and in 'MAIL FROM' for smtp mode</li>
<li>Changed boundary setting to a place it will be set only once</li>
<li>Removed transfer encoding for whole message when using multipart</li>
<li>Message body now uses Encoding in multipart messages</li>
<li>Can set encoding and type to attachments 7bit, 8bit
and binary attachment are sent as is, base64 are encoded</li>
<li>Can set Encoding to base64 to send 8 bits body
through 7 bits servers</li>
</ul>

<h2>
<a id="user-content-version-110-tue-jun-12-2001" class="anchor" href="#version-110-tue-jun-12-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.10 (Tue, Jun 12 2001)</h2>

<ul class="task-list">
<li>Fixed win32 mail header bug (printed out headers in message body)</li>
</ul>

<h2>
<a id="user-content-version-109-fri-jun-08-2001" class="anchor" href="#version-109-fri-jun-08-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.09 (Fri, Jun 08 2001)</h2>

<ul class="task-list">
<li>Changed date header to work with Netscape mail programs</li>
<li>Altered phpdoc documentation</li>
</ul>

<h2>
<a id="user-content-version-108-tue-jun-05-2001" class="anchor" href="#version-108-tue-jun-05-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.08 (Tue, Jun 05 2001)</h2>

<ul class="task-list">
<li>Added enhanced error-checking</li>
<li>Added phpdoc documentation to source</li>
</ul>

<h2>
<a id="user-content-version-106-fri-jun-01-2001" class="anchor" href="#version-106-fri-jun-01-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.06 (Fri, Jun 01 2001)</h2>

<ul class="task-list">
<li>Added optional name for file attachments</li>
</ul>

<h2>
<a id="user-content-version-105-tue-may-29-2001" class="anchor" href="#version-105-tue-may-29-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.05 (Tue, May 29 2001)</h2>

<ul class="task-list">
<li>Code cleanup</li>
<li>Eliminated sendmail header warning message</li>
<li>Fixed possible SMTP error</li>
</ul>

<h2>
<a id="user-content-version-103-thu-may-24-2001" class="anchor" href="#version-103-thu-may-24-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.03 (Thu, May 24 2001)</h2>

<ul class="task-list">
<li>Fixed problem where qmail sends out duplicate messages</li>
</ul>

<h2>
<a id="user-content-version-102-wed-may-23-2001" class="anchor" href="#version-102-wed-may-23-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 1.02 (Wed, May 23 2001)</h2>

<ul class="task-list">
<li>Added multiple recipient and attachment Clear* methods</li>
<li>Added Sendmail public variable</li>
<li>Fixed problem with loading SMTP library multiple times</li>
</ul>

<h2>
<a id="user-content-version-098-tue-may-22-2001" class="anchor" href="#version-098-tue-may-22-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 0.98 (Tue, May 22 2001)</h2>

<ul class="task-list">
<li>Fixed problem with redundant mail hosts sending out multiple messages</li>
<li>Added additional error handler code</li>
<li>Added AddCustomHeader() function</li>
<li>Added support for Microsoft mail client headers (affects priority)</li>
<li>Fixed small bug with Mailer variable</li>
<li>Added PrintVersion() function</li>
</ul>

<h2>
<a id="user-content-version-092-tue-may-15-2001" class="anchor" href="#version-092-tue-may-15-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 0.92 (Tue, May 15 2001)</h2>

<ul class="task-list">
<li>Changed file names to class.phpmailer.php and class.smtp.php to match
current PHP class trend.</li>
<li>Fixed problem where body not being printed when a message is attached</li>
<li>Several small bug fixes</li>
</ul>

<h2>
<a id="user-content-version-090-tue-april-17-2001" class="anchor" href="#version-090-tue-april-17-2001" aria-hidden="true"><span class="octicon octicon-link"></span></a>Version 0.90 (Tue, April 17 2001)</h2>

<ul class="task-list">
<li>Initial public release</li>
</ul>
</article>
  </div>

</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2015 <span title="0.03712s from github-fe128-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
    </ul>
  </div>
</div>


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder=""></textarea>
      <div class="suggester-container">
        <div class="suggester fullscreen-suggester js-suggester js-navigation-container"></div>
      </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    
    

    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x flash-close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-d22b59d0085e83b7549ba4341ec9e68f80c2f29c8e49213ee182003dc8d568c6.js"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-3b4fde20974117506181132ac0ad3588b632eb7b8b8347002c439b67027b0227.js"></script>
      
      

  </body>
</html>

