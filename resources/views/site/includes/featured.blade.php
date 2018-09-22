<section class="s-featured">
    <div class="row">
        <div class="col-full">

            <div class="featured-slider featured" data-aos="zoom-in">
                @foreach($slider as $item)
                    <div class="featured__slide">
                        <div class="entry">

                            <div class="entry__background"
                                 style="background-image:url('{{ asset('images/thumbs/featured/featured-guitarman.jpg') }}');"></div>

                            <div class="entry__content">
                                <span class="entry__category"><a
                                            href="{{ route('site.categories',$item->category->url) }}">{{ $item->category->name }}</a></span>

                                <h1><a href="{{ route('site.article.view',$item->url) }}" title="{{ $item->title }}">{{ $item->title }}</a></h1>

                                <div class="entry__info">
                                    <a href="#0" class="entry__profile-pic">
                                        <img class="avatar" src="{{ asset('images/avatars/user-05.jpg') }}" alt="">
                                    </a>
                                    <ul class="entry__meta">
                                        <li><a href="#0">{{ $item->user->name }}</a></li>
                                        <li>{{ $item->created_at }}</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
