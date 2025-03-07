<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Services de {{ $scategory->name }} </h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Accueil</a></li>
                        <li>/</li>
                        <li>{{ $scategory->name }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="container">
            <div class="row" style="margin-top: -30px;">
                <div class="titles">
                    <h2>Services de <span>{{ $scategory->name }}</span></h2>
                    
                    <hr class="tall">
                </div>
            </div>
        </div>
        <div class="content_info" style="margin-top: -70px;">
            <div>
                <div class="container">
                    <div class="portfolioContainer">

                        @if($scategory->services->count() > 0)
                            @foreach ($scategory->services as $service)
                                <div class="col-xs-6 col-sm-4 col-md-3 nature hsgrids"
                                    style="padding-right: 5px;padding-left: 5px;">
                                    <a class="g-list" href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}">
                                        <div class="img-hover">
                                            <img src="{{ asset('images/services/thumbnails') }}/{{ $service->thumbnail }}" alt="{{ $service->name }}"
                                                class="img-responsive" style="width: 100%;height:200px;">
                                        </div>
                                        <div class="info-gallery" style="height:200px;">
                                            <h3>{{ $service->name }}</h3>
                                            <hr class="separator">
                                            <p>{{ $service->tagline }}</p>
                                            <div class="content-btn"><a href="{{ route('home.service_details', ['service_slug' => $service->slug]) }}"
                                                    class="btn btn-primary">Réservez</a></div>
                                            <div class="price"><span>&#36;</span><b>Depuis</b>{{ $service->price }}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12" style="padding-bottom: 30px">
                                <h5 class="text-center" style="color:red;">Aucun service n'est disponible!</h5>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
