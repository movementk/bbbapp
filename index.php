<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<body>
    
    <div data-role="page" class="main">
 
        <div id="header" data-role="header">
            <h1 class="logo"><img src="/images/logo.png" width="92" alt="비비비 코리아"></h1>
            <div class="bxslider">
                <div>
                    <div class="overview">
                        <div class="ui-grid-b">
                            <div class="ui-block-a">
                                <p class="count">
                                    <strong>151건</strong>
                                    <span>통역건수</span>
                                </p>
                            </div>
                            <div class="ui-block-b">
                                <p class="profile">
                                    <img src="https://pbs.twimg.com/profile_images/665847983519305728/7-NtTUP6_400x400.jpg" alt="공수아 프로필">
                                </p>
                            </div>
                            <div class="ui-block-c">
                                <p class="rate">
                                    <strong>60%</strong>
                                    <span>연결율</span>
                                </p>
                            </div>
                        </div>
                        <p class="greetings">
                            <i>Bonjour</i>, 공수아
                        </p>
                    </div>
                </div>
                <div>
                    <a class="banner" href="#" style="background-image: url(/images/img_banner.jpg)"></a>
                </div>
                <div>
                    <a class="banner" href="#" style="background-image: url(/images/img_banner.jpg)"></a>
                </div>
            </div>
        </div>
 
        <div role="main" class="ui-content">
            <div id="connect">
                <p>
                    통역봉사 연결을<br>
                    우선해서 받으시겠습니까?
                </p>
                <p>
                    <a href="#popupConnect" data-rel="popup" class="ui-btn ui-btn-inline btn-connect btn-primary" data-transition="pop" aria-haspopup="true" aria-owns="popupConnect" aria-expanded="false" data-position-to="window">네, 가능합니다.</a>
                    <a href="#" class="ui-btn ui-btn-inline btn-disconnect btn-secondary">해제하기</a>
                </p>
            </div>
            <div id="nav" data-role="navbar" class="ui-navbar" data-grid="b">
                <ul>
                    <li><a href="/bbbid.php" data-transition="pop" data-ajax="false">bbb ID</a></li>
                    <li><a href="/stats.php" data-transition="pop" data-ajax="false">통계</a></li>
                    <li><a href="/note_main.php" data-transition="pop" data-ajax="false">쪽지</a></li>
                    <li><a href="/news_list.php" data-transition="pop" data-ajax="false">bbb 소식통</a></li>
                    <li><a href="/story_list.php" data-transition="pop" data-ajax="false">봉사 이야기</a></li>
                    <li><a href="/mypage.php" data-transition="pop" data-ajax="false">마이 페이지</a></li>
                </ul>
            </div>
        </div>
        
        <div data-role="popup" id="popupConnect" data-overlay-theme="b" style="max-width: 200px;">
            <p>통역봉사 우선 설정은 시간이<br> 지나면 자동으로 해제됩니다.</p>
            <ul data-role="listview" data-icon="false">
                <li><a href="#">1시간 동안 우선</a></li>
                <li><a href="#">2시간 동안 우선</a></li>
                <li><a href="#">3시간 동안 우선</a></li>
                <li><a href="#">4시간 동안 우선</a></li>
            </ul>
            <hr>
            <a href="#" class="ui-btn btn-close" data-rel="back" data-transition="flow"><img src="/images/btn_close.png" alt="닫기"></a>
        </div>
        
        <script>
            $(".main").on("pageshow", function(event, ui) {
                var slider = null;
                if ( $('.bx-wrapper').length < 1 ) {
                    slider = $('.bxslider').bxSlider({
                        slideSelector: 'div',
                        pager: true,
                        controls: false,
                        adaptiveHeight: 325
                    });
                } else {
                    if (slider !== null) {
                        slider.reloadSlider();
                    }
                }
            });
        </script>
 
    </div>
    
</body>
</html>