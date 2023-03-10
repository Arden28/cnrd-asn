<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    @yield('meta_ref')
    <title>@yield('page_title') | CNRD</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    @yield('styles')
    <script class="u-script" type="text/javascript" src="{{ asset('jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 4.18.5, nicepage.com">
    @yield('open-graph')
    <link rel="icon" href="{{ asset('images/favicon.png')}}">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Oswald:200,300,400,500,600,700">







    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site3",
		"logo": "{{ asset('images/cnrd.png')}}"
}</script>
    <meta name="theme-color" content="#cf233d">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="{{ route('home') }}" data-home-page-title="Acceuil" class="u-body u-stick-footer u-xl-mode" data-lang="fr"><header class=" u-clearfix u-header u-section-row-container" id="sec-6b2a" style=""><div class="u-section-rows">
        <div class="u-border-2 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-image u-image-contain u-section-row u-image-1" data-image-width="1458" data-image-height="170" id="sec-adc6">
          <div class="u-clearfix u-sheet u-sheet-1"></div>
        </div>
        <div class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-clearfix u-section-row u-sticky u-sticky-0620 u-white u-section-row-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-b198">

          <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-2">
            <a href="{{ route('home') }}" class="u-image u-logo u-image-2" data-image-width="670" data-image-height="326">
              <img src="{{ asset('images/cnrd.png')}}" class="u-logo-image u-logo-image-1">
            </a>
            <h5 class="u-text u-text-1">Centre National de R??f??rence de la Dr??panocytose Antoinette SASSOU NGUESSO</h5>
          </div>
          <style class="u-sticky-style" data-style-id="e22a">.u-sticky-fixed.u-sticky-e22a:before, .u-body.u-sticky-fixed .u-sticky-e22a:before {
borders: top right bottom left !important
}</style>
        </div>
        <div class="u-section-row u-sticky u-sticky-9af8 u-white u-section-row-3" id="sec-8d31">
          <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-3">
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="SM">
              <div class="menu-collapse" style="font-size: 0.75rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
                <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 5px 8px; font-size: calc(1em + 10px);">
                  <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                  <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="{{ route('home') }}" style="padding: 10px 0px;">Acceuil</a>
                    </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="{{ route('about') }}" style="padding: 10px 0px;">?? propos</a>
                    </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="{{ route('contact') }}" style="padding: 10px 0px;">Nous contacter</a>
                    </li><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="#" style="padding: 10px 0px;">R??alisations</a>
                    </li>
                </ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('home') }}">Acceuil</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('about') }}">?? propos</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('contact') }}">Nous contacter</a>
                        </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">R??alisations</a>
                        </li>
                    </ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    @yield('content')


    <footer class="u-clearfix u-footer u-white" id="sec-b583"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="XS">
          <div class="menu-collapse" style="font-size: 0.875rem; font-weight: 700; letter-spacing: 0px;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c6a6"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-c6a6" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                </g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-0 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-3 u-text-grey-90 u-text-hover-custom-color-3" href="{{ route('contact') }}" style="padding: 8px 10px;">Contactez-nous</a>
                </li>
                <li class="u-nav-item">
                    <a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-3 u-text-grey-90 u-text-hover-custom-color-3" href="#" style="padding: 8px 10px;">
                        Cookie & Confidentialit??
                    </a>
                </li>
                <li class="u-nav-item">
                    <a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-grey-90 u-text-hover-custom-color-3" href="https://www.sante.gouv.cg" target="_blank" style="padding: 8px 4px 8px 10px;">
                        Minist??re de la sant??
                    </a>
                </li>
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{ route('contact') }}">Contactez-nous</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Cookie & Confidentialit??</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="https://www.sante.gouv.cg" target="_blank">Minist??re de la sant??</a>
                    </li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <p class="u-text u-text-1"> Le
            Centre National de R??f??rence de la Dr??panocytose ??????Antoinette SASSOU N???GUESSO??????
            et un ??tablissement public sp??cialis?? dont la mission principale est celle
            d???assurer des soins pr??ventifs, curatifs et r??adaptationnels en faveur de la
            dr??panocytose ainsi que d???autres maladies g??n??tiques du sang.
        </p>
        <div class="u-border-2 u-border-grey-15 u-expanded-width u-line u-line-horizontal u-line-1"></div>
        <p class="u-text u-text-2"><span class="u-file-icon u-icon"><img src="{{ asset('images/2088619.png')}}" alt=""></span>&nbsp;<span style="font-weight: 700; font-size: 0.875rem;">2022-2023 Tous droits r??serv??s |Centre National de R??f??rence de la Dr??panocytose</span>
        </p>
        <p class="u-text u-text-default-lg u-text-default-md u-text-default-xl u-text-3">D??velopp?? par <a href="https://visibility242.com" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-3 u-btn-1">Visiblity242</a>
        </p>
      </div></footer><span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 20px; bottom: 55px; padding: 10px; background-image: none;" class="u-back-to-top u-custom-color-3 u-icon u-icon-circle u-opacity u-opacity-85 u-spacing-15" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>

</body></html>
