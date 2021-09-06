<header id="header" class="@if(Request::path() == 'cookies' || Request::path() == 'termeni' || Request::path() == 'legal'  ) no-gradient services contact-hdr contact-hdr-mobile @endif">
    <div class="logoContainer">
        <a href="/">
            <img src="@if(Request::path() == 'cookies' || Request::path() == 'termeni' || Request::path() == 'legal'  ) res/socep_logo_bun.png @else res/logo white.png @endif " alt="logo" />
        </a>

    </div>
    <ul class="menuContainer @if(Request::path() == 'cookies' || Request::path() == 'termeni' || Request::path() == 'legal'  ) black-menu @endif ">
        <li class="fara-hover one">
            <a href="/about">{{ __('site.about') }}</a>
        </li>
        <li class="fara-hover two">
            <a href="/servicii">{{ __('site.services') }}</a>
        </li>
        <li class="fara-hover three">
            <a href="/news">{{ __('site.newsheader') }}</a>
        </li>
        <li class = "invest" id="hover-element"><a href="/news">{{ __('site.invest') }}</a>
        </li>

        <li class = "fara-hover four">
            <a href="/career">{{ __('site.career') }}</a>
        </li>
        <li class = "fara-hover five">
            <a href="/certificari">{{ __('site.certification') }}</a>
        </li>
        <li class= "fara-hover six">
            <a href="/contact">Contact</a>
        </li>
        <li>
            <a href="locale/ro">RO</a> /
            <a href="locale/en">EN</a>
            
        </li>
        <linie {{Request::path()}} @if(Request::path() == 'adunari' || Request::path() == 'comunicate-dividende' || Request::path() == 'politica' || Request::path() == 'comunicate' || Request::path() == 'intalniri' || Request::path() == 'raportari' || Request::path() == 'rapoarte' || Request::path() == 'calendar-financiar' ||  Request::path() == 'regulamente' || Request::path() == 'directorat' || Request::path() == 'consiliu' || Request::path() == 'act-sem/protectia-datelor-cu-caracter-personal-a-actionarilor' || Request::path() == 'act-sem/actionari-semnificativi' || Request::path() == 'act-sem/detinerile-persoanelor-din-management' || Request::path() == '/tranzactii' )   class="invest-active" @endif  @if(Request::path() == 'career')   class="four-active" @endif @if(Request::path() == 'about')   class="one-active" @endif @if(Request::path() == 'servicii' || Request::path() == 'general' || Request::path() == 'container' )   class="two-active" @endif @if(Request::path() == 'news')   class="three-active" @endif @if(Request::path() == 'certificari')   class="five-active" @endif @if(Request::path() == 'contact')   class="six-active" @endif  @if(Request::path() == '/') style="visibility: hidden;" @endif></linie>
    </ul>
    <div class="invest-menu">
        <div class="grupare-elemente-mare">
          <div class="grup-element">
              <div class="grup-titlu">{{ __('site.guvernari') }}</div>
              <div class="dunga"></div>
              <div class="element-meniu-mare element-meniu-mare-aliniat">{{ __('site.structuri') }}</div>
              <div class="element-meniu-mare">{{ __('site.adunarea') }}
                  <ul class="elemente-grup">
                      <li><a class="element-meniu" href="/act-sem/actionari-semnificativi"> {{ __('site.actionari') }}</a></li>
                      <li><a class="element-meniu" href="/act-sem/detinerile-persoanelor-din-management">{{ __('site.detinerile') }}</a></li>
                      <li><a class="element-meniu" href="/tranzactii">{{ __('site.tranzactii') }}</a></li>
                      <li><a class="element-meniu" href="/act-sem/protectia-datelor-cu-caracter-personal-a-actionarilor">{{ __('site.protectia') }}</a></li>
                  </ul>
              </div>
              <div class="grup-sub-subtitlu"><a class="element-meniu-mare element-meniu-mare-aliniat" href="/consiliu">{{ __('site.consiliu') }}</a></div>
              <div class="grup-sub-subtitlu"><a class="element-meniu-mare element-meniu-mare-aliniat" href="/directorat">{{ __('site.directorat') }}</a></div>
              <div class="grup-subtitlu"><a class="element-meniu-mare element-meniu-mare-aliniat" href="/regulamente">{{ __('site.regulamenteguv') }}</a></div>
          </div>
          <div class="grup-element">
              <div class="grup-titlu">{{ __('site.raportari-financiare') }}</div>
              <div class="dunga"></div>
              <div class="grup-subtitlu"><a class="element-meniu-mare-si-mai-mare" href="/calendar-financiar">{{ __('site.calendar') }}</a></div>
              <div class="grup-subtitlu"><a class="element-meniu-mare-si-mai-mare" href="/rapoarte">{{ __('site.rapoarte') }}</a></div>
              <div class="grup-subtitlu"><a class="element-meniu-mare-si-mai-mare" href="/raportari">{{ __('site.raportari') }}</a></div>
              <div class="grup-subtitlu"><a class="element-meniu-mare-si-mai-mare" href="/intalniri">{{ __('site.intalniri') }}</a></div>
              <div class="grup-subtitlu"><a class="element-meniu-mare-si-mai-mare" href="/comunicate">{{ __('site.comunicate') }}</a></div>
          </div>
          <div class="grup-element">
            <div class="grup-titlu">
                    {{ __('site.actiuni') }}
            </div>
            <div class="dunga"></div>
            <div class="grup-subtitlu"><a class="element-meniu-mare-si-mai-mare" target="_blank" href="http://bvb.ro/FinancialInstruments/Details/FinancialInstrumentsDetails.aspx?s=SOCP">{{ __('site.valoare') }}</a></div>
            <div class="grup-subtitlu"><a class="element-meniu-mare-si-mai-mare" href="/politica">{{ __('site.politica-dividend') }}</a></div>
            <div class="grup-subtitlu"><a class="element-meniu-mare-si-mai-mare" href="/comunicate-dividende">{{ __('site.distribuire') }}</a></div>
            <div class = "capitol-nou" style = "margin-top:30px;"></div>
            <div class="grup-titlu">
                <a class = "element-meniu-mare-si-mai-mare"style = "font-size:16px;" href = "/adunari">{{ __('site.aga') }}</a>
            </div>
            <div class="dunga"></div>
           </div>
        </div>
    </div>


    <div class=" @if(Request::path() == 'cookies' || Request::path() == 'termeni' || Request::path() == 'legal'  ) menu-bottom-pages @endif mobileMenuToggler">
        <div class="mobileMenuTogglerWrapper">
            <div class="bar bar1 @if(Request::path() == 'cookies' || Request::path() == 'termeni' || Request::path() == 'legal'  ) black-bar @endif"></div>
            <div class="bar bar2 @if(Request::path() == 'cookies' || Request::path() == 'termeni' || Request::path() == 'legal'  ) black-bar @endif"></div>
            <div class="bar bar3 @if(Request::path() == 'cookies' || Request::path() == 'termeni' || Request::path() == 'legal'  ) black-bar @endif"></div>
        </div>
    </div>
    <div id="mobileMenuContainer" style='display: block'>
      <div class = "sectiune-sus">
        <div class = "sectiune-goala">
            <a href = "/"><div class = "logoContainer mobile-menu-logo">
                    <img src = "res/socep_logo_bun.png">
                </div></a>
        </div>
        <div class = "inchidere-meniu">
          {{-- <img src = "res/inchidere-meniu.svg"> --}}
          &#10005;

        </div>
      </div>
      
        <div class="links">
            
                <div class = "dropContainer">
                        <a class="mobileLinks drop">{{ __('site.language') }}<div class="dropdownMobileArrow" style="width: 30px"><img class = "img-mobile-arrow" width="80%" style=";vertical-align: middle" src="res/down-arrow.svg"></div></a>
                      <div class = "dropdownContent">
                            <a href="locale/ro" class="mobileLinks">RO</a>
                            <a href="locale/en" class="mobileLinks">EN</a>

                        </div>  
                </div>



            <a href="/about" class="mobileLinks">{{ __('site.about') }}</a>
            <a href="/servicii" class="mobileLinks">{{ __('site.services') }}</a>
            <a href="/news" class="mobileLinks">{{ __('site.newsheader') }}</a>
            <div class="dropContainer">
                <a class="mobileLinks drop">{{ __('site.invest') }}<div class="dropdownMobileArrow" style="width: 30px"><img class = "img-mobile-arrow" width="80%" style=";vertical-align: middle" src="res/down-arrow.svg"></div></a>
                <div class="dropdownContent">
                    <div class="dropContainer">
                        <a class="mobileLinks drop">{{ __('site.guvernari') }}<div class="dropdownMobileArrow" style="width: 30px"><img  class = "img-mobile-arrow" width="80%" style="; vertical-align: middle" src="res/down-arrow.svg"></div></a>
                        <div class="dropdownContent">
                          <div class="dropContainer">
                            <a class="mobileLinks drop">{{ __('site.structuri') }}<div class="dropdownMobileArrow" style="width: 30px"><img  class = "img-mobile-arrow" width="80%" style="; vertical-align: middle" src="res/down-arrow.svg"></div></a>
                            <div class="dropdownContent">
                              <div class="dropContainer">
                                <a class="mobileLinks drop">{{ __('site.adunarea') }}<div class="dropdownMobileArrow" style="width: 30px"><img  class = "img-mobile-arrow" width="80%" style="; vertical-align: middle" src="res/down-arrow.svg"></div></a>
                                <div class="dropdownContent">
                                  <a href="/act-sem/actionari-semnificativi" class="mobileLinks"> {{ __('site.actionari') }}</a>
                                  <a href="/act-sem/detinerile-persoanelor-din-management" class="mobileLinks">{{ __('site.detinerile') }}</a>
                                  <a href="/tranzactii" class="mobileLinks">{{ __('site.tranzactii') }}</a>
                                  <a href="/act-sem/protectia-datelor-cu-caracter-personal-a-actionarilor" class="mobileLinks">{{ __('site.protectia') }}</a>
                                </div>
                              </div>
                              
                              <a href="/consiliu" class="mobileLinks">{{ __('site.consiliu') }}</a>
                              <a href="/directorat" class="mobileLinks">{{ __('site.directorat') }}</a>
                            </div>
                          </div>
                         <a href="/regulamente" class="mobileLinks">{{ __('site.regulamenteguv') }}</a>
                        </div>
                    </div>

                    
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="dropContainer">
                        <a class="mobileLinks drop">{{ __('site.raportari') }}<div class="dropdownMobileArrow" style="width: 30px"><img  class = "img-mobile-arrow" width="80%" style="; vertical-align: middle" src="res/down-arrow.svg"></div></a>
                        <div class="dropdownContent">
                          <a href="/calendar-financiar" class="mobileLinks">{{ __('site.calendar') }}</a>
                          <a href="/rapoarte" class="mobileLinks">{{ __('site.rapoarte') }}</a>
                          <a href="/raportari" class="mobileLinks">{{ __('site.raportari') }}</a>
                          <a href="/intalniri" class="mobileLinks">{{ __('site.intalniri') }}</a>
                          <a href="/comunicate" class="mobileLinks">{{ __('site.comunicate') }}</a>
                          
                        </div>
                    </div>
                  <div class="dropContainer">
                        <a class="mobileLinks drop">{{ __('site.actiuni') }}<div class="dropdownMobileArrow" style="width: 30px"><img  class = "img-mobile-arrow" width="80%" style="; vertical-align: middle" src="res/down-arrow.svg"></div></a>
                        <div class="dropdownContent">
                          <a href="http://bvb.ro/FinancialInstruments/Details/FinancialInstrumentsDetails.aspx?s=SOCP" class="mobileLinks">{{ __('site.valoare') }}</a>
                          <a href="/politica" class="mobileLinks">{{ __('site.politica-dividend') }}</a>
                          <a href="/comunicate-dividende" class="mobileLinks">{{ __('site.distribuire') }}</a>
                        </div>
                    </div>
                  <a href="/adunari" class="mobileLinks">{{ __('site.adunarea') }}</a>
                  {{-- <a href="/contact" class="mobileLinks">Contact birou actionariat</a> --}}      
                </div>
            </div>
            <a href="/career" class="mobileLinks">{{ __('site.career') }}</a>
            <a href="/certificari" class="mobileLinks">{{ __('site.certification') }}</a>
           
          <a href="/contact" class="mobileLinks">Contact</a>

</header>

@push('scripts')
<script>
    $(document).ready(function() {

        var lista = $(".continut-pagina-de-interpretat ul>li a");
        if(typeof($(lista).attr("href")) != 'undefined'){
          arr = $(lista).attr("href").split('.');
          strFile = arr[arr.length - 1];
          var lista_parinte = $(lista).parent().parent();
          //pot sa adaug in viitor si daca am docx sau doc
          if (strFile === 'pdf') {
              //       $(lista_parinte).css("list-style","none");
              $(lista_parinte).find("li").css("background-image", "url(../res/pdfMare.png)");
              $(lista_parinte).find("li").css("background-repeat", "no-repeat");
              $(lista_parinte).find("li").css("background-size", "48px 48px");
              $(lista_parinte).find("li>a").css("padding-left", "54px");
              $(lista_parinte).find("li").css("height", "54px");
          } else {
              $(lista).css("background-image", "");
              $(lista_parinte).find("li").css("background-image", "");
          }
        }
    });

    $('.dropContainer>a').on('click', function(e) {
        e.preventDefault();
        var dropdownContent = $(this).parent().find('.dropdownContent').first();
        var dropDownArrow = $(this).find('.dropdownMobileArrow').first();
        var dropDownImgArrow = $(this).find('.img-mobile-arrow');
        
        var dropdownContentHeight = dropdownContent.find('span').outerHeight() || dropdownContent.find('div').outerHeight();
        $(dropdownContent).slideToggle();
        // $(dropDownArrow).toggleClass('rotateArrow');
      $(dropDownImgArrow).toggleClass('rotateArrow');
      
      
      
//         if (dropdownContent.hasClass('hidden')) {
//             dropdownContent.animate({
//                 'padding-bottom': 0
//             }, 300);
//             dropdownContent.removeClass('hidden');
//         } else {
//             dropdownContent.animate({
//                 'padding-bottom': dropdownContentHeight + 20
//             }, 300);
//             dropdownContent.addClass('hidden');
//         }
    });

    $('.mobileMenuToggler').click(function() {
        $('#mobileMenuContainer').css('width', '100%');

    });
  
  $(".inchidere-meniu").click(function(){
     $('#mobileMenuContainer').css('width', '0%');
    
  });
</script>
@endpush