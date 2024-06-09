


<!DOCTYPE html>
<html lang="en" class="">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>PHPMailer/README.md at master · Synchro/PHPMailer · GitHub</title>
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

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="BEE642D5:3252:14ABA5D:5512158A" name="octolytics-dimension-request_id" />
    
    <meta content="Rails, view, blob#show" name="analytics-event" />

    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="jH22KXiREiKEOh35lUX7XL1gjRwzUcJ0l77VioOpIRYDRJFd8+ywZ0x5UFamyVie/3vojICMFD1jokoTmaor5A==" name="csrf-token" />

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
      <a class="btn" href="/login?return_to=%2FSynchro%2FPHPMailer%2Fblob%2Fmaster%2FREADME.md" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
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
          

<a href="/Synchro/PHPMailer/blob/ec9452012a55220b565225166eb1bc500ea447ab/README.md" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:f162d4eb21c73975920857f40dc2ca06 -->

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
               href="/Synchro/PHPMailer/blob/5.0-dev/README.md"
               data-name="5.0-dev"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="5.0-dev">
                5.0-dev
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/5.0-phpdocs/README.md"
               data-name="5.0-phpdocs"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="5.0-phpdocs">
                5.0-phpdocs
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/Synchro/PHPMailer/blob/master/README.md"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="master">
                master
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/phpmailer-2.0/README.md"
               data-name="phpmailer-2.0"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="phpmailer-2.0">
                phpmailer-2.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/phpmailer-2.3.0-msg-limit-patch/README.md"
               data-name="phpmailer-2.3.0-msg-limit-patch"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="phpmailer-2.3.0-msg-limit-patch">
                phpmailer-2.3.0-msg-limit-patch
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/phpmailer-5.2.0/README.md"
               data-name="phpmailer-5.2.0"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="phpmailer-5.2.0">
                phpmailer-5.2.0
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/qmail/README.md"
               data-name="qmail"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="qmail">
                qmail
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/smtp-refactor/README.md"
               data-name="smtp-refactor"
               data-skip-pjax="true"
               rel="nofollow">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <span class="select-menu-item-text css-truncate-target" title="smtp-refactor">
                smtp-refactor
              </span>
            </a>
            <a class="select-menu-item js-navigation-item js-navigation-open "
               href="/Synchro/PHPMailer/blob/vendor/README.md"
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
              <a href="/Synchro/PHPMailer/tree/v5.2.8/README.md"
                 data-name="v5.2.8"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.8">v5.2.8</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.7/README.md"
                 data-name="v5.2.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.7">v5.2.7</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.6/README.md"
                 data-name="v5.2.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.6">v5.2.6</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.5/README.md"
                 data-name="v5.2.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.5">v5.2.5</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.2.4/README.md"
                 data-name="v5.2.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.2.4">v5.2.4</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.1.0/README.md"
                 data-name="v5.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.1.0">v5.1.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.0.2/README.md"
                 data-name="v5.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.0.2">v5.0.2</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v5.0.0/README.md"
                 data-name="v5.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v5.0.0">v5.0.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v2.3.0/README.md"
                 data-name="v2.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v2.3.0">v2.3.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v2.2.1/README.md"
                 data-name="v2.2.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v2.2.1">v2.2.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/v2.0.3/README.md"
                 data-name="v2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v2.0.3">v2.0.3</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-5.1/README.md"
                 data-name="phpmailer-5.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-5.1">phpmailer-5.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-5.0.2/README.md"
                 data-name="phpmailer-5.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-5.0.2">phpmailer-5.0.2</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-5.0.0/README.md"
                 data-name="phpmailer-5.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-5.0.0">phpmailer-5.0.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-2.3.0%40186/README.md"
                 data-name="phpmailer-2.3.0@186"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-2.3.0@186">phpmailer-2.3.0@186</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-2.3.0/README.md"
                 data-name="phpmailer-2.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="phpmailer-2.3.0">phpmailer-2.3.0</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/Synchro/PHPMailer/tree/phpmailer-2.0.3/README.md"
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
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/Synchro/PHPMailer" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">PHPMailer</span></a></span></span><span class="separator">/</span><strong class="final-path">README.md</strong>
  </div>
</div>


  <div class="commit file-history-tease">
    <div class="file-history-tease-header">
        <img alt="Marcus Bointon" class="avatar" data-user="81561" height="24" src="https://avatars2.githubusercontent.com/u/81561?v=3&amp;s=48" width="24" />
        <span class="author"><a href="/Synchro" rel="author">Synchro</a></span>
        <time datetime="2015-02-25T11:31:32Z" is="relative-time">Feb 25, 2015</time>
        <div class="commit-title">
            <a href="/Synchro/PHPMailer/commit/7530ff8f140d5da53a159cbb4802143ce3c7af92" class="message" data-pjax="true" title="Add Slovene translation">Add Slovene translation</a>
        </div>
    </div>

    <div class="participation">
      <p class="quickstat">
        <a href="#blob_contributors_box" rel="facebox">
          <strong>6</strong>
           contributors
        </a>
      </p>
          <a class="avatar-link tooltipped tooltipped-s" aria-label="Synchro" href="/Synchro/PHPMailer/commits/master/README.md?author=Synchro"><img alt="Marcus Bointon" class="avatar" data-user="81561" height="20" src="https://avatars0.githubusercontent.com/u/81561?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="nathanl" href="/Synchro/PHPMailer/commits/master/README.md?author=nathanl"><img alt="Nathan Long" class="avatar" data-user="338814" height="20" src="https://avatars3.githubusercontent.com/u/338814?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="Mithgol" href="/Synchro/PHPMailer/commits/master/README.md?author=Mithgol"><img alt="Mithgol" class="avatar" data-user="1088720" height="20" src="https://avatars3.githubusercontent.com/u/1088720?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="jimjag" href="/Synchro/PHPMailer/commits/master/README.md?author=jimjag"><img alt="Jim Jagielski" class="avatar" data-user="84076" height="20" src="https://avatars2.githubusercontent.com/u/84076?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="jacroe" href="/Synchro/PHPMailer/commits/master/README.md?author=jacroe"><img alt="Jacob Roeland" class="avatar" data-user="1142635" height="20" src="https://avatars3.githubusercontent.com/u/1142635?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="lorextera" href="/Synchro/PHPMailer/commits/master/README.md?author=lorextera"><img alt="Lorenzo Nicoletti" class="avatar" data-user="1744861" height="20" src="https://avatars2.githubusercontent.com/u/1744861?v=3&amp;s=40" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Marcus Bointon" data-user="81561" height="24" src="https://avatars2.githubusercontent.com/u/81561?v=3&amp;s=48" width="24" />
            <a href="/Synchro">Synchro</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Nathan Long" data-user="338814" height="24" src="https://avatars1.githubusercontent.com/u/338814?v=3&amp;s=48" width="24" />
            <a href="/nathanl">nathanl</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Mithgol" data-user="1088720" height="24" src="https://avatars1.githubusercontent.com/u/1088720?v=3&amp;s=48" width="24" />
            <a href="/Mithgol">Mithgol</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Jim Jagielski" data-user="84076" height="24" src="https://avatars0.githubusercontent.com/u/84076?v=3&amp;s=48" width="24" />
            <a href="/jimjag">jimjag</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Jacob Roeland" data-user="1142635" height="24" src="https://avatars1.githubusercontent.com/u/1142635?v=3&amp;s=48" width="24" />
            <a href="/jacroe">jacroe</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Lorenzo Nicoletti" data-user="1744861" height="24" src="https://avatars0.githubusercontent.com/u/1744861?v=3&amp;s=48" width="24" />
            <a href="/lorextera">lorextera</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file">
  <div class="file-header">
    <div class="file-actions">

      <div class="btn-group">
        <a href="/Synchro/PHPMailer/raw/master/README.md" class="btn btn-sm " id="raw-url">Raw</a>
          <a href="/Synchro/PHPMailer/blame/master/README.md" class="btn btn-sm js-update-url-with-hash">Blame</a>
        <a href="/Synchro/PHPMailer/commits/master/README.md" class="btn btn-sm " rel="nofollow">History</a>
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
        166 lines (111 sloc)
        <span class="file-info-divider"></span>
      10.59 kb
    </div>
  </div>
    <div id="readme" class="blob instapaper_body">
    <article class="markdown-body entry-content" itemprop="mainContentOfPage"><p><a href="https://camo.githubusercontent.com/0d858d6dac4d3f6fab7d42de2c09d32ee2de9c5b/68747470733a2f2f7261772e6769746875622e636f6d2f5048504d61696c65722f5048504d61696c65722f6d61737465722f6578616d706c65732f696d616765732f7068706d61696c65722e706e67" target="_blank"><img src="https://camo.githubusercontent.com/0d858d6dac4d3f6fab7d42de2c09d32ee2de9c5b/68747470733a2f2f7261772e6769746875622e636f6d2f5048504d61696c65722f5048504d61696c65722f6d61737465722f6578616d706c65732f696d616765732f7068706d61696c65722e706e67" alt="PHPMailer" data-canonical-src="https://raw.github.com/PHPMailer/PHPMailer/master/examples/images/phpmailer.png" style="max-width:100%;"></a></p>

<h1>
<a id="user-content-phpmailer---a-full-featured-email-creation-and-transfer-class-for-php" class="anchor" href="#phpmailer---a-full-featured-email-creation-and-transfer-class-for-php" aria-hidden="true"><span class="octicon octicon-link"></span></a>PHPMailer - A full-featured email creation and transfer class for PHP</h1>

<p>Build status: <a href="https://travis-ci.org/PHPMailer/PHPMailer"><img src="https://camo.githubusercontent.com/77bcd9dcddcdd9966510bdee10f4038eda9cb438/68747470733a2f2f7472617669732d63692e6f72672f5048504d61696c65722f5048504d61696c65722e737667" alt="Build Status" data-canonical-src="https://travis-ci.org/PHPMailer/PHPMailer.svg" style="max-width:100%;"></a>
<a href="https://scrutinizer-ci.com/g/PHPMailer/PHPMailer/"><img src="https://camo.githubusercontent.com/de3683c59ce9af23c40a14baa2480be62b225d21/68747470733a2f2f7363727574696e697a65722d63692e636f6d2f672f5048504d61696c65722f5048504d61696c65722f6261646765732f7175616c6974792d73636f72652e706e673f733d33373538653231643237396265636466383437613535376135366133656431366466656339643564" alt="Scrutinizer Quality Score" data-canonical-src="https://scrutinizer-ci.com/g/PHPMailer/PHPMailer/badges/quality-score.png?s=3758e21d279becdf847a557a56a3ed16dfec9d5d" style="max-width:100%;"></a>
<a href="https://scrutinizer-ci.com/g/PHPMailer/PHPMailer/"><img src="https://camo.githubusercontent.com/46140324460761c5c559438fcd036d201a0a2c85/68747470733a2f2f7363727574696e697a65722d63692e636f6d2f672f5048504d61696c65722f5048504d61696c65722f6261646765732f636f7665726167652e706e673f733d33666536636135666538636432636466393632383537353665343239333266376361323536393632" alt="Code Coverage" data-canonical-src="https://scrutinizer-ci.com/g/PHPMailer/PHPMailer/badges/coverage.png?s=3fe6ca5fe8cd2cdf96285756e42932f7ca256962" style="max-width:100%;"></a></p>

<h2>
<a id="user-content-class-features" class="anchor" href="#class-features" aria-hidden="true"><span class="octicon octicon-link"></span></a>Class Features</h2>

<ul class="task-list">
<li>Probably the world's most popular code for sending email from PHP!</li>
<li>Used by many open-source projects: Wordpress, Drupal, 1CRM, SugarCRM, Yii, Joomla! and many more</li>
<li>Integrated SMTP support - send without a local mail server</li>
<li>Send emails with multiple TOs, CCs, BCCs and REPLY-TOs</li>
<li>Multipart/alternative emails for mail clients that do not read HTML email</li>
<li>Support for UTF-8 content and 8bit, base64, binary, and quoted-printable encodings</li>
<li>SMTP authentication with LOGIN, PLAIN, NTLM and CRAM-MD5 mechanisms over SSL and TLS transports</li>
<li>Error messages in 46 languages!</li>
<li>DKIM and S/MIME signing support</li>
<li>Compatible with PHP 5.0 and later</li>
<li>Much more!</li>
</ul>

<h2>
<a id="user-content-why-you-might-need-it" class="anchor" href="#why-you-might-need-it" aria-hidden="true"><span class="octicon octicon-link"></span></a>Why you might need it</h2>

<p>Many PHP developers utilize email in their code. The only PHP function that supports this is the mail() function. However, it does not provide any assistance for making use of popular features such as HTML-based emails and attachments.</p>

<p>Formatting email correctly is surprisingly difficult. There are myriad overlapping RFCs, requiring tight adherence to horribly complicated formatting and encoding rules - the vast majority of code that you'll find online that uses the mail() function directly is just plain wrong!
<em>Please</em> don't be tempted to do it yourself - if you don't use PHPMailer, there are many other excellent libraries that you should look at before rolling your own - try SwiftMailer, Zend_Mail, eZcomponents etc.</p>

<p>The PHP mail() function usually sends via a local mail server, typically fronted by a <code>sendmail</code> binary on Linux, BSD and OS X platforms, however, Windows usually doesn't include a local mail server; PHPMailer's integrated SMTP implementation allows email sending on Windows platforms without a local mail server.</p>

<h2>
<a id="user-content-license" class="anchor" href="#license" aria-hidden="true"><span class="octicon octicon-link"></span></a>License</h2>

<p>This software is licenced under the <a href="http://www.gnu.org/licenses/lgpl-2.1.html">LGPL 2.1</a>. Please read LICENSE for information on the
software availability and distribution.</p>

<h2>
<a id="user-content-installation--loading" class="anchor" href="#installation--loading" aria-hidden="true"><span class="octicon octicon-link"></span></a>Installation &amp; loading</h2>

<p>PHPMailer is available via <a href="https://packagist.org/packages/phpmailer/phpmailer">Composer/Packagist</a>. Alternatively, just copy the contents of the PHPMailer folder into somewhere that's in your PHP <code>include_path</code> setting. If you don't speak git or just want a tarball, click the 'zip' button at the top of the page in GitHub.</p>

<p>PHPMailer provides an SPL-compatible autoloader, and that is the preferred way of loading the library - just <code>require '/path/to/PHPMailerAutoload.php';</code> and everything should work. The autoloader does not throw errors if it can't find classes so it prepends itself to the SPL list, allowing your own (or your framework's) autoloader to catch errors. SPL autoloading was introduced in PHP 5.1.0, so if you are using a version older than that you will need to require/include each class manually.</p>

<p>PHPMailer does <em>not</em> declare a namespace because namespaces were only introduced in PHP 5.3.</p>

<h3>
<a id="user-content-minimal-installation" class="anchor" href="#minimal-installation" aria-hidden="true"><span class="octicon octicon-link"></span></a>Minimal installation</h3>

<p>While installing the entire package manually or with composer is simple, convenient and reliable, you may want to include only vital files in your project. At the very least you will need <a href="/Synchro/PHPMailer/blob/master/class.phpmailer.php">class.phpmailer.php</a>. If you're using SMTP, you'll need <a href="/Synchro/PHPMailer/blob/master/class.smtp.php">class.smtp.php</a>, and if you're using POP-before SMTP, you'll need <a href="/Synchro/PHPMailer/blob/master/class.pop3.php">class.pop3.php</a>. For all of these, we recommend you use <a href="/Synchro/PHPMailer/blob/master/PHPMailerAutoload.php">the autoloader</a> too as otherwise you will either have to <code>require</code> all classes manually or use some other autoloader. You can skip the <a href="/Synchro/PHPMailer/blob/master/language">language</a> folder if you're not showing errors to users and can make do with English-only errors. You may need the additional classes in the <a href="/Synchro/PHPMailer/blob/master/extras">extras</a> folder if you are using those features, including NTLM authentication and ics generation.</p>

<h2>
<a id="user-content-a-simple-example" class="anchor" href="#a-simple-example" aria-hidden="true"><span class="octicon octicon-link"></span></a>A Simple Example</h2>

<div class="highlight highlight-php"><pre><span class="pl-pse">&lt;?php</span><span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-k">require</span> <span class="pl-s"><span class="pl-pds">'</span>PHPMailerAutoload.php<span class="pl-pds">'</span></span>;</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-smi">$mail</span> <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-c1">PHPMailer</span>;</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-c">//$mail-&gt;SMTPDebug = 3;                               // Enable verbose debug output</span></span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>isSMTP();                                      <span class="pl-c">// Set mailer to use SMTP</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">Host</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>smtp1.example.com;smtp2.example.com<span class="pl-pds">'</span></span>;  <span class="pl-c">// Specify main and backup SMTP servers</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">SMTPAuth</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;                               <span class="pl-c">// Enable SMTP authentication</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">Username</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>user@example.com<span class="pl-pds">'</span></span>;                 <span class="pl-c">// SMTP username</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">Password</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>secret<span class="pl-pds">'</span></span>;                           <span class="pl-c">// SMTP password</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">SMTPSecure</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>tls<span class="pl-pds">'</span></span>;                            <span class="pl-c">// Enable TLS encryption, `ssl` also accepted</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">Port</span> <span class="pl-k">=</span> <span class="pl-c1">587</span>;                                    <span class="pl-c">// TCP port to connect to</span></span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">From</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>from@example.com<span class="pl-pds">'</span></span>;</span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">FromName</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Mailer<span class="pl-pds">'</span></span>;</span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>addAddress(<span class="pl-s"><span class="pl-pds">'</span>joe@example.net<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>Joe User<span class="pl-pds">'</span></span>);     <span class="pl-c">// Add a recipient</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>addAddress(<span class="pl-s"><span class="pl-pds">'</span>ellen@example.com<span class="pl-pds">'</span></span>);               <span class="pl-c">// Name is optional</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>addReplyTo(<span class="pl-s"><span class="pl-pds">'</span>info@example.com<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>Information<span class="pl-pds">'</span></span>);</span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>addCC(<span class="pl-s"><span class="pl-pds">'</span>cc@example.com<span class="pl-pds">'</span></span>);</span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>addBCC(<span class="pl-s"><span class="pl-pds">'</span>bcc@example.com<span class="pl-pds">'</span></span>);</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>addAttachment(<span class="pl-s"><span class="pl-pds">'</span>/var/tmp/file.tar.gz<span class="pl-pds">'</span></span>);         <span class="pl-c">// Add attachments</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>addAttachment(<span class="pl-s"><span class="pl-pds">'</span>/tmp/image.jpg<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>new.jpg<span class="pl-pds">'</span></span>);    <span class="pl-c">// Optional name</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>isHTML(<span class="pl-c1">true</span>);                                  <span class="pl-c">// Set email format to HTML</span></span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">Subject</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>Here is the subject<span class="pl-pds">'</span></span>;</span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">Body</span>    <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>This is the HTML message body &lt;b&gt;in bold!&lt;/b&gt;<span class="pl-pds">'</span></span>;</span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">AltBody</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">'</span>This is the body in plain text for non-HTML mail clients<span class="pl-pds">'</span></span>;</span>
<span class="pl-s1"></span>
<span class="pl-s1"><span class="pl-k">if</span>(<span class="pl-k">!</span><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>send()) {</span>
<span class="pl-s1">    <span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">'</span>Message could not be sent.<span class="pl-pds">'</span></span>;</span>
<span class="pl-s1">    <span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">'</span>Mailer Error: <span class="pl-pds">'</span></span> <span class="pl-k">.</span> <span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span><span class="pl-smi">ErrorInfo</span>;</span>
<span class="pl-s1">} <span class="pl-k">else</span> {</span>
<span class="pl-s1">    <span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">'</span>Message has been sent<span class="pl-pds">'</span></span>;</span>
<span class="pl-s1">}</span></pre></div>

<p>You'll find plenty more to play with in the <a href="/Synchro/PHPMailer/blob/master/examples">examples</a> folder.</p>

<p>That's it. You should now be ready to use PHPMailer!</p>

<h2>
<a id="user-content-localization" class="anchor" href="#localization" aria-hidden="true"><span class="octicon octicon-link"></span></a>Localization</h2>

<p>PHPMailer defaults to English, but in the <a href="/Synchro/PHPMailer/blob/master/language">language</a> folder you'll find numerous (45 at the time of writing!) translations for PHPMailer error messages that you may encounter. Their filenames contain <a href="http://en.wikipedia.org/wiki/ISO_639-1">ISO 639-1</a> language code for the translations, for example <code>fr</code> for French. To specify a language, you need to tell PHPMailer which one to use, like this:</p>

<div class="highlight highlight-php"><pre><span class="pl-s1"><span class="pl-c">// To load the French version</span></span>
<span class="pl-s1"><span class="pl-smi">$mail</span><span class="pl-k">-&gt;</span>setLanguage(<span class="pl-s"><span class="pl-pds">'</span>fr<span class="pl-pds">'</span></span>, <span class="pl-s"><span class="pl-pds">'</span>/optional/path/to/language/directory/<span class="pl-pds">'</span></span>);</span></pre></div>

<p>We welcome corrections and new languages - if you're looking for corrections to do, run the <a href="/Synchro/PHPMailer/blob/master/test/phpmailerLangTest.php">phpmailerLangTest.php</a> script in the tests folder and it will show any missing translations.</p>

<h2>
<a id="user-content-documentation" class="anchor" href="#documentation" aria-hidden="true"><span class="octicon octicon-link"></span></a>Documentation</h2>

<p>Examples of how to use PHPMailer for common scenarios can be found in the <a href="/Synchro/PHPMailer/blob/master/examples">examples</a> folder. If you're looking for a good starting point, we recommend you start with <a href="/Synchro/PHPMailer/blob/master/examples/gmail.phps">the gmail example</a>.</p>

<p>There are tips and a troubleshooting guide in the <a href="https://github.com/PHPMailer/PHPMailer/wiki">GitHub wiki</a>. If you're having trouble, this should be the first place you look as it's the most frequently updated.</p>

<p>Complete generated API documentation is <a href="http://phpmailer.github.io/PHPMailer/">available online</a>.</p>

<p>You'll find some basic user-level docs in the <a href="/Synchro/PHPMailer/blob/master/docs">docs</a> folder, and you can generate complete API-level documentation using the <a href="/Synchro/PHPMailer/blob/master/docs/generatedocs.sh">generatedocs.sh</a> shell script in the docs folder, though you'll need to install <a href="http://www.phpdoc.org">PHPDocumentor</a> first. You may find <a href="/Synchro/PHPMailer/blob/master/test/phpmailerTest.php">the unit tests</a> a good source of how to do various operations such as encryption.</p>

<p>If the documentation doesn't cover what you need, search the <a href="http://stackoverflow.com/questions/tagged/phpmailer">many questions on StackOverflow</a>, and before you ask a question about "SMTP Error: Could not connect to SMTP host.", <a href="https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting">read the troubleshooting guide</a>.</p>

<h2>
<a id="user-content-tests" class="anchor" href="#tests" aria-hidden="true"><span class="octicon octicon-link"></span></a>Tests</h2>

<p>There is a PHPUnit test script in the <a href="/Synchro/PHPMailer/blob/master/test">test</a> folder.</p>

<p>Build status: <a href="https://travis-ci.org/PHPMailer/PHPMailer"><img src="https://camo.githubusercontent.com/77bcd9dcddcdd9966510bdee10f4038eda9cb438/68747470733a2f2f7472617669732d63692e6f72672f5048504d61696c65722f5048504d61696c65722e737667" alt="Build Status" data-canonical-src="https://travis-ci.org/PHPMailer/PHPMailer.svg" style="max-width:100%;"></a></p>

<p>If this isn't passing, is there something you can do to help?</p>

<h2>
<a id="user-content-contributing" class="anchor" href="#contributing" aria-hidden="true"><span class="octicon octicon-link"></span></a>Contributing</h2>

<p>Please submit bug reports, suggestions and pull requests to the <a href="https://github.com/PHPMailer/PHPMailer/issues">GitHub issue tracker</a>.</p>

<p>We're particularly interested in fixing edge-cases, expanding test coverage and updating translations.</p>

<p>With the move to the PHPMailer GitHub organisation, you'll need to update any remote URLs referencing the old GitHub location with a command like this from within your clone:</p>

<p><code>git remote set-url upstream https://github.com/PHPMailer/PHPMailer.git</code></p>

<p>Please <em>don't</em> use the SourceForge or Google Code projects any more.</p>

<h2>
<a id="user-content-sponsorship" class="anchor" href="#sponsorship" aria-hidden="true"><span class="octicon octicon-link"></span></a>Sponsorship</h2>

<p>Development time and resources for PHPMailer are provided by <a href="https://info.smartmessages.net/">Smartmessages.net</a>, a powerful email marketing system.</p>

<p><a href="https://info.smartmessages.net/"><img src="https://camo.githubusercontent.com/f8524f40874518d92f51b404195ebe93d1944f65/687474703a2f2f7777772e736d6172746d657373616765732e6e65742f696d616765732f736d6172746d657373616765732d6c6f676f2e737667" width="250" height="28" alt="Smartmessages email marketing" data-canonical-src="http://www.smartmessages.net/images/smartmessages-logo.svg" style="max-width:100%;"></a></p>

<p>Other contributions are gladly received, whether in beer <g-emoji alias="beer" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/1f37a.png">🍺</g-emoji>, T-shirts <g-emoji alias="shirt" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/1f455.png">👕</g-emoji>, Amazon wishlist raids, or cold, hard cash <g-emoji alias="moneybag" fallback-src="https://assets-cdn.github.com/images/icons/emoji/unicode/1f4b0.png">💰</g-emoji>.</p>

<h2>
<a id="user-content-changelog" class="anchor" href="#changelog" aria-hidden="true"><span class="octicon octicon-link"></span></a>Changelog</h2>

<p>See <a href="/Synchro/PHPMailer/blob/master/changelog.md">changelog</a>.</p>

<h2>
<a id="user-content-history" class="anchor" href="#history" aria-hidden="true"><span class="octicon octicon-link"></span></a>History</h2>

<ul class="task-list">
<li>PHPMailer was originally written in 2001 by Brent R. Matzelle as a <a href="http://sourceforge.net/projects/phpmailer/">SourceForge project</a>.</li>
<li>Marcus Bointon (coolbru on SF) and Andy Prevost (codeworxtech) took over the project in 2004.</li>
<li>Became an Apache incubator project on Google Code in 2010, managed by Jim Jagielski.</li>
<li>Marcus created his fork on <a href="https://github.com/Synchro/PHPMailer">GitHub</a>.</li>
<li>Jim and Marcus decide to join forces and use GitHub as the canonical and official repo for PHPMailer.</li>
<li>PHPMailer moves to the <a href="https://github.com/PHPMailer">PHPMailer organisation</a> on GitHub.</li>
</ul>

<h3>
<a id="user-content-whats-changed-since-moving-from-sourceforge" class="anchor" href="#whats-changed-since-moving-from-sourceforge" aria-hidden="true"><span class="octicon octicon-link"></span></a>What's changed since moving from SourceForge?</h3>

<ul class="task-list">
<li>Official successor to the SourceForge and Google Code projects.</li>
<li>Test suite.</li>
<li>Continuous integration with Travis-CI.</li>
<li>Composer support.</li>
<li>Public development.</li>
<li>Additional languages and language strings.</li>
<li>CRAM-MD5 authentication support.</li>
<li>Preserves full repo history of authors, commits and branches from the original SourceForge project.</li>
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
      <li>&copy; 2015 <span title="0.03236s from github-fe135-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
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

