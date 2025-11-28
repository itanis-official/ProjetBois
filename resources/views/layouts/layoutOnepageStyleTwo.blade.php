<!DOCTYPE html>
<html lang="en">
    <x-head />
    <body class="body-bg-color-1">
        <x-preloader />
        <x-chatPopup />

        <div class="theme-border-left"></div>
        <div class="theme-border-right"></div>

        <div class="page-wrapper">
            <x-sidebarWidget />
            <x-headers.OnePageHeaderStyleTwo />

            @yield('content')

            <x-mobileMenu />
            <x-searchPopup />
            <x-goBackTop />
            <x-scripts />
    </body>
</html>
