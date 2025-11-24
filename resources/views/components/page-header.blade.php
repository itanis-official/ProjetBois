 <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }});">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <div class="page-header__title-box">
                        <p>Business Models you can Consider</p>
                        <h3>{{$title ?? 'Welcome'}}</h3>
                    </div>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                             <li><a href="{{ route('index') }}"><i class="fas fa-home"></i> Home</a></li>
                            <li><span>/</span></li>
                            <li>{{$subtitle ?? 'go to home'}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->