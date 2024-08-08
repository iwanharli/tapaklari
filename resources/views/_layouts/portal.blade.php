<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    @include('_layouts._component.portal_head')
</head>

<body class="header-sticky">
    <!-- PRELOAD -->
    <div class="preload preload-container">
        <div class="swapping-squares-spinner">
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
            <div class="square"></div>
        </div>
    </div>

    <!-- MENU -->
    @include('_layouts._component.portal_menu')

    <div class="overlay-menu-mobie">
        <div class="close-btn">
            <span class="close-menus"></span>
        </div>
    </div>

    <!--  MAIN CONTENT -----------------------------------------------------------------------------------------------------  -->
    @yield('portal_content')
    <!--  MAIN CONTENT -----------------------------------------------------------------------------------------------------  -->

    <!-- FOOTER -->
    @include('_layouts._component.portal_footer')

    <!-- GO TOP -->
    <a class="go-top">
        <i class="icon-ctrl"></i>
    </a>

    

    <!-- JAVASCRIPT -->
    @include('_layouts._component.portal_jsAsset')
</body>

</html>
