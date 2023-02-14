@extends('layouts.master')

@section('title', 'Page d\'accueil')

@section('styles')
    <link rel="stylesheet" href="{{ asset('Acceuil.css') }}" media="screen">
@endsection
@section('open-graph')
    <meta property="og:title" content="Accueil | CNRDr">
    <meta property="og:description" content="Le Centre National de Référence de la Drépanocytose ‘’Antoinette SASSOU N’GUESSO’’ et un établissement public spécialisé dont la mission principale est celle d’assurer des soins préventifs, curatifs et réadaptationnels en faveur de la drépanocytose ainsi que d’autres maladies génétiques du sang.">
    <meta property="og:image" content="{{ asset('images/favicon.png')}}">
    <meta property="og:url" content="www.cnrdrepa-asn.org">
@endsection

@section('content')
<section class="u-carousel u-slide u-block-a6b7-1" id="carousel_6a18" data-image-width="1980" data-image-height="1108" data-interval="5000" data-u-ride="carousel">
  <ol class="u-absolute-hcenter u-carousel-indicators u-block-a6b7-2">
    <li data-u-target="#carousel_6a18" class="u-active u-grey-30" data-u-slide-to="0"></li>
    <li data-u-target="#carousel_6a18" class="u-grey-30" data-u-slide-to="1"></li>
  </ol>
  <div class="u-carousel-inner" role="listbox" style="">
    <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-1" src="" data-image-width="5184" data-image-height="2912">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">CNRDr</h2>
        <p class="u-text u-text-default u-text-2">Tout savoir sur le CNRDr</p>
        <a href="#" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">Actualité</a>
      </div>
    </div>
    <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src="" data-image-width="5184" data-image-height="2912">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">CNRDr</h2>
        <p class="u-text u-text-default u-text-2">Tout savoir sur le CNRDr</p>
        <a href="#" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">Actualité</a>
      </div>
    </div>
  </div>
  <a class="u-border-2 u-border-black u-carousel-control u-carousel-control-prev u-icon-circle u-block-a6b7-3" href="#carousel_6a18" role="button" data-u-slide="prev">
    <span aria-hidden="true">
      <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
    </span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="u-border-2 u-border-black u-carousel-control u-carousel-control-next u-icon-circle u-text-grey-30 u-block-a6b7-4" href="#carousel_6a18" role="button" data-u-slide="next">
    <span aria-hidden="true">
      <svg class="u-svg-link" viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
    </span>
    <span class="sr-only">Suivant</span>
  </a>
</section>
<section class="u-clearfix u-section-2" id="sec-79bb">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h3 class="u-text u-text-default u-text-1">Nos Dirigeants</h3>
    <div class="u-clearfix u-expanded-width-xs u-gutter-2 u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-image u-layout-cell u-left-cell u-size-18 u-image-1" data-image-width="992" data-image-height="744">
            <div class="u-container-layout u-valign-top u-container-layout-1"></div>
          </div>
          <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-42 u-layout-cell-2">
            <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-2">
              <h2 class="u-text u-text-default u-text-2">Gilbert MOKOKI</h2>
              <p class="u-text u-text-default u-text-grey-30 u-text-3">Ministre de la santé et de la poulation</p>
              <p class="u-text u-text-4">Paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus quis elementum..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="u-clearfix u-gutter-4 u-layout-wrap u-layout-wrap-2">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-center u-container-style u-image u-layout-cell u-left-cell u-size-18 u-image-2" data-image-width="637" data-image-height="661">
            <div class="u-container-layout u-container-layout-3"></div>
          </div>
          <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-42 u-layout-cell-4">
            <div class="u-border-2 u-border-grey-75 u-container-layout u-container-layout-4">
              <h2 class="u-text u-text-default u-text-5">Alexis ELIRAS DOKEKIAS</h2>
              <p class="u-text u-text-default u-text-grey-30 u-text-6">Directeur Général du CNRDr<span style="font-size: 0.875rem;"></span>
              </p>
              <p class="u-text u-text-7">Le CNRD a une vocation sous régionale et nous voulons en faire un centre d’excellence sur le plan de la recherche, du dépistage, du traitement et du suivi des personnes atteintes de drépanocytose</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="{{ route('directoire') }}" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hover-black u-radius-6 u-btn-1">Le Directoire</a>
  </div>
</section>
<section class="u-align-center u-clearfix u-section-3" id="carousel_19ae">
  <img class="u-flip-horizontal u-image u-image-contain u-image-default u-image-1" src="{{ asset('images/istockphoto-1277337102-612x612.jpg')}}" alt="" data-image-width="612" data-image-height="408">
  <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
    <div class="u-layout">
      <div class="u-layout-row">
        <div class="u-align-left u-container-style u-layout-cell u-size-29 u-layout-cell-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-text u-text-1">Le <span style="font-weight: 700;">CNRDr</span>
            </h3>
            <p class="u-custom-font u-font-montserrat u-text u-text-2">
              <span style="font-size: 0.875rem;"> Le
Centre National de Référence de la Drépanocytose ‘’Antoinette SASSOU N’GUESSO’’
est un établissement public spécialisé dont la mission principale est d’assurer des soins préventifs, curatifs et réadaptationnels en faveur de la
drépanocytose ainsi que d’autres maladies génétiques du sang.&nbsp;&nbsp;<br>Ces
activités sont supportées par un secteur d’explorations comprenant&nbsp;:
l’imagerie médicale, le laboratoire d’hématologie, le laboratoire
d’immunologie, de biochimie, et une unité de génétique moléculaire destinée au
dépistage des hémoglobinopathies ainsi que des maladies hémorragiques
constitutionnelles.&nbsp;
              </span>
              <br>
            </p>
            <a href="{{ route('about') }}" class="u-active-custom-color-3 u-border-2 u-border-custom-color-3 u-btn u-button-style u-hover-custom-color-3 u-none u-text-active-white u-text-body-color u-text-hover-white u-btn-1">
              <span style="font-size: 0.875rem;">En savoir plus</span>
              <br>
            </a>
          </div>
        </div>
        <div class="u-align-left u-container-style u-image u-layout-cell u-size-31 u-image-2" data-image-width="390" data-image-height="450">
          <div class="u-container-layout u-container-layout-2"></div>
        </div>
      </div>
    </div>
  </div>
  <h4 class="u-text u-text-default u-text-3">Nos principales actions à mener sont :</h4>
  <div class="u-list u-list-1">
    <div class="u-repeater u-repeater-1">
      <div class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle">
        <div class="u-container-layout u-similar-container u-container-layout-3">
          <h2 class="u-custom-font u-font-montserrat u-text u-text-custom-color-3 u-text-default u-text-4">01</h2>
          <h5 class="u-custom-font u-font-montserrat u-text u-text-5"><b>La
sensibilisation, l’information</b>&nbsp;
          </h5>
          <p class="u-text u-text-6"> Elles sont menées par différents étages du système
sanitaire, les médias, la société civile à travers les organisations non
gouvernementales, les districts et les départements sanitaires.</p>
        </div>
      </div>
      <div class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle">
        <div class="u-container-layout u-similar-container u-container-layout-4">
          <h2 class="u-custom-font u-font-montserrat u-text u-text-custom-color-3 u-text-default u-text-7">02</h2>
          <h5 class="u-custom-font u-font-montserrat u-text u-text-8"><b>Le
dépistage précoce et le dépistage systématique chez les adultes</b>
          </h5>
          <p class="u-text u-text-9"> Ils fondent la prévention
primaire et la prévention secondaire de la maladie, ils ont ouvert les portes
au conseil génétique et à la prise en charge précoce de la maladie.&nbsp;<!--[endif]--><b><i>Assurer d’ici 2030 le dépistage précoce,
néonatal de plus de 50% des nouveaux nés au niveau des hôpitaux de référence,
des hôpitaux généraux&nbsp;;</i></b>&nbsp;<br><b><i>Renforcer après communication d’ici fin
2030 le dépistage pré-nuptial systématique des couples avant mariage à l’état
civil&nbsp;;</i></b>
          </p>
        </div>
      </div>
      <div class="u-align-left u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle">
        <div class="u-container-layout u-similar-container u-container-layout-5">
          <h2 class="u-custom-font u-font-montserrat u-text u-text-custom-color-3 u-text-default u-text-10">03</h2>
          <h5 class="u-custom-font u-font-montserrat u-text u-text-11"><b>Prise
en charge (</b>Lutter contre les complications aigues et chroniques de la
drépanocytose)
          </h5>
          <p class="u-text u-text-12">
            <span style="font-weight: 700;"> Outre
le Centre National de Référence de la Drépanocytose ‘’ Antoinette SASSOU
NGUESSO’’ situé à Brazzaville, il convient de créer au niveau de chaque <b>Hôpital de district</b>, des unités
hospitalières de dépistage et de prise en charge des hémoglobinopathies.
            </span>
            <br>-&nbsp;&nbsp;<!--[endif]-->Dépistage&nbsp;;&nbsp;<!--[if !supportLists]-->
            <br>- Suivi&nbsp;;&nbsp;<!--[if !supportLists]-->
            <br>-&nbsp;Organisation de la prise en charge des
complications et urgences&nbsp;;<br>&nbsp;&nbsp;<!--[if !supportLists]-->-&nbsp;Formation/évaluation&nbsp;;
          </p>
        </div>
      </div>
    </div>
  </div>
  <a href="{{ route('about') }}" class="u-active-custom-color-3 u-border-2 u-border-custom-color-3 u-btn u-button-style u-hover-custom-color-3 u-none u-text-active-white u-text-body-color u-text-hover-white u-btn-2">En savoir plus<br>
  </a>
</section>
<section class="u-align-center u-clearfix u-section-4" id="sec-9a46">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h3 class="u-text u-text-1">Paquets des activités réalisées par le CNRDr</h3>
    <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-layout-horizontal u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-container-style u-list-item u-repeater-item">
          <div class="u-container-layout u-similar-container u-container-layout-1">
            <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-1" src="{{ asset('images/CNRD_BZV_Prof_Elira.jpg')}}" data-image-width="220" data-image-height="146">
            <h3 class="u-text u-text-2">Imagerie médicale<br>
            </h3>
            <ul class="u-text u-text-3">
              <li>
                <span style="font-weight: 700;">La radiographie thoracique</span>
              </li>
              <li>
                <span style="font-weight: 700;">La&nbsp;radiographie pelvienne</span>
              </li>
              <li>
                <span style="font-weight: 700;">La&nbsp;<b>radiographie</b>
                  <span style="font-weight: 700;">&nbsp;standard</span>
                </span>
              </li>
              <li>
                <span style="font-weight: 700;">Électrocardiographie<br>
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class="u-container-style u-list-item u-repeater-item">
          <div class="u-container-layout u-similar-container u-container-layout-2">
            <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-2" src="{{ asset('images/cnrd_bzv_researcher.jpg')}}" data-image-width="220" data-image-height="146">
            <h3 class="u-text u-text-4"><b>Electrocardiographie</b>
              <br>
            </h3>
            <ul class="u-text u-text-5">
              <li>
                <span style="font-weight: 700;">Electrocardiogramme</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="u-container-style u-list-item u-repeater-item">
          <div class="u-container-layout u-similar-container u-container-layout-3">
            <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-3" src="{{ asset('images/IMG_1749.jpg')}}" data-image-width="5184" data-image-height="3456">
            <h3 class="u-text u-text-6"><b>Analyses biomedicales</b>
            </h3>
            <ul class="u-text u-text-7">
              <li>
                <span style="font-weight: 700;">Biochimie</span>
              </li>
              <li>
                <span style="font-weight: 700;">Immunologie</span>
              </li>
              <li>
                <span style="font-weight: 700;"><b>HPLC</b>
                  <br>
                </span>
              </li>
              <li><b>Hémogramme Complet<br></b>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
        <span aria-hidden="true">
          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
        </span>
      </a>
      <a class="u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
        <span aria-hidden="true">
          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
        </span>
      </a>
    </div>
  </div>
</section>
<section class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-section-5" id="carousel_3c7f">
  <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xs u-sheet-1">
    <div class="u-clearfix u-expanded-width-lg u-expanded-width-xl u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-size-30-sm u-size-30-xl u-size-30-xs u-size-31-lg u-size-60-md">
            <div class="u-layout-col">
              <div class="u-align-right u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-align-left u-custom-font u-font-oswald u-text u-text-1">
                    <span style="font-size: 1.5rem;">Nous travaillons avec les meilleurs partenaires</span>
                    <br>
                  </h2>
                  <p class="u-align-left u-text u-text-2"> Le programme national de lutte contre la drépanocytose
bénéficiera d’un financement spécifique de l’Etat, des partenaires.
Un plan national spécifiques 2023 – 2027 basé sur le plan
national de développement sanitaire sera élaboré et financé avec pour objectifs
de rendre accessible toutes les prestations .</p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-size-29-lg u-size-30-sm u-size-30-xl u-size-30-xs u-size-60-md">
            <div class="u-layout-col">
              <div class="u-size-60">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-size-60 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <img src="{{ asset('images/IMG-20221020-WA0001.jpg')}}" alt="" class="u-image u-image-contain u-image-default u-image-1" data-image-width="497" data-image-height="569">
                      <img src="{{ asset('images/who-emblem.png')}}" alt="" class="u-image u-image-contain u-image-default u-image-2" data-image-width="841" data-image-height="742">
                      <img src="{{ asset('images/WFH-logo-FR-1.svg')}}" alt="" class="u-image u-image-contain u-image-default u-image-3" data-image-width="303" data-image-height="134">
                      <img src="{{ asset('images/NNHF_logo_website-500x525.jpg')}}" alt="" class="u-image u-image-contain u-image-default u-image-4" data-image-width="500" data-image-height="525">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="u-clearfix u-section-6" id="sec-fcb4">
  <div class="u-clearfix u-sheet u-sheet-1">
    <h3 class="u-text u-text-default u-text-1">Nos dernières actualités</h3><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
    <div class="u-blog u-container-style u-expanded-width u-layout-horizontal u-blog-1">
      <div class="u-list-control"></div>
      <div class="u-repeater u-repeater-1"><!--blog_post-->
        <div class="u-blog-post u-container-style u-repeater-item">
          <div class="u-container-layout u-similar-container u-container-layout-1"><!--blog_post_header-->
            <h2 class="u-blog-control u-text u-text-2">
              <a class="u-post-header-link" href="{{ route('news') }}"><!--blog_post_header_content-->Titre de publication 6<!--/blog_post_header_content--></a>
            </h2><!--/blog_post_header-->
            <a class="u-post-header-link" href="{{ route('news') }}"><!--blog_post_image-->
              <img src="{{ asset('images/IMG-20221109-WA0011.jpg')}}" alt="" class="u-blog-control u-image u-image-default u-image-1"><!--/blog_post_image-->
            </a><!--blog_post_content-->
            <div class="u-blog-control u-post-content u-text u-text-3"><!--blog_post_content_content-->Exemple de texte court. Lorem ipsum dolor sit amet.<!--/blog_post_content_content--></div><!--/blog_post_content-->
          </div>
        </div><!--/blog_post--><!--blog_post-->
        <div class="u-blog-post u-container-style u-repeater-item">
          <div class="u-container-layout u-similar-container u-container-layout-2"><!--blog_post_header-->
            <h2 class="u-blog-control u-text u-text-4">
              <a class="u-post-header-link" href="{{ route('news') }}"><!--blog_post_header_content-->Titre de publication 5<!--/blog_post_header_content--></a>
            </h2><!--/blog_post_header-->
            <a class="u-post-header-link" href="{{ route('news') }}"><!--blog_post_image-->
              <img src="{{ asset('images/IMG-20221109-WA0007.jpg')}}" alt="" class="u-blog-control u-image u-image-default u-image-2"><!--/blog_post_image-->
            </a><!--blog_post_content-->
            <div class="u-blog-control u-post-content u-text u-text-5"><!--blog_post_content_content-->Exemple de texte court. Lorem ipsum dolor sit amet.<!--/blog_post_content_content--></div><!--/blog_post_content-->
          </div>
        </div><!--/blog_post--><!--blog_post-->
        <div class="u-blog-post u-container-style u-repeater-item">
          <div class="u-container-layout u-similar-container u-container-layout-3"><!--blog_post_header-->
            <h2 class="u-blog-control u-text u-text-6">
              <a class="u-post-header-link" href="{{ route('news') }}"><!--blog_post_header_content-->Titre de publication 4<!--/blog_post_header_content--></a>
            </h2><!--/blog_post_header-->
            <a class="u-post-header-link" href="{{ route('news') }}"><!--blog_post_image-->
              <img src="{{ asset('images/IMG-20221109-WA0001.jpg')}}" alt="" class="u-blog-control u-image u-image-default u-image-3"><!--/blog_post_image-->
            </a><!--blog_post_content-->
            <div class="u-blog-control u-post-content u-text u-text-7"><!--blog_post_content_content-->Exemple de texte court. Lorem ipsum dolor sit amet.<!--/blog_post_content_content--></div><!--/blog_post_content-->
          </div>
        </div><!--/blog_post--><!--blog_post-->
        <div class="u-blog-post u-container-style u-repeater-item">
          <div class="u-container-layout u-similar-container u-container-layout-4"><!--blog_post_header-->
            <h2 class="u-blog-control u-text u-text-8">
              <a class="u-post-header-link" href="{{ route('news') }}"><!--blog_post_header_content-->Titre de publication 3<!--/blog_post_header_content--></a>
            </h2><!--/blog_post_header-->
            <a class="u-post-header-link" href="{{ route('news') }}"><!--blog_post_image-->
              <img src="{{ asset('images/8ad73f3c.jpeg')}}" alt="" class="u-blog-control u-image u-image-default u-image-4"><!--/blog_post_image-->
            </a><!--blog_post_content-->
            <div class="u-blog-control u-post-content u-text u-text-9"><!--blog_post_content_content-->Exemple de texte court. Lorem ipsum dolor sit amet.<!--/blog_post_content_content--></div><!--/blog_post_content-->
          </div>
        </div><!--/blog_post-->
      </div>
      <div class="u-list-control"></div>
      <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
        <span aria-hidden="true">
          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
            c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
            c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
            c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
            c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
        </span>
      </a>
      <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-xl u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
        <span aria-hidden="true">
          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
        </span>
        <span class="sr-only">
          <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
        </span>
      </a>
    </div><!--/blog-->
  </div>
</section>
@endsection
