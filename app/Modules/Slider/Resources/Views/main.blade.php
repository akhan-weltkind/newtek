@if($slider)
    @push('js')
    <script>
        $('.slider').slick({
            slidesToScroll:1,
            slidesToShow:1,
            speed: '{{ Settings::get('slider_interval') }}',
            pauseOnHover:true,
            arrows:true,
            autoplay:true,
            dots:true,
            fade:true,
        });
    </script>
    @endpush
    <div class="slider">
        @foreach($slider as $slide)

            <div class="slide">
            <div class="slide__info">
                <div class="slide__info_left">
                    @if(isset($slide->title))
                        <h1 class="slide__info_title">
                            <a
                                href="@if(isset($slide->link)) {{ $slide->link }} @endif"
                                @if(isset($slide->title_color)) style="color:{{$slide->title_color}}" @endif>
                                {{ $slide->title }}
                            </a>
                        </h1>
                    @endif
                    @if(isset($slide->preview))
                        <p class="slide__info_descr">
                            {{ $slide->preview }}
                        </p>
                    @endif

                    @if(isset($slide->link))
                        <a
                            class="slide__info_link"
                            href="@if(isset($slide->link)) {{ $slide->link }} @endif"
                            @if(isset($slide->link_type))
                                @if($slide->link_type == 'in')
                                    target="_self"
                                @else
                                    target="_blank"
                                @endif
                            @endif
                        >
                            @lang('slider::slider.read_more')
                        </a>
                    @endif
                </div>
                @if(isset($slide->main_image))
                    <div class="slide__info_pic">
                        <img src="/uploads/slider/full/{{ $slide->main_image }}" alt="{{ $slide->main_image }}">
                    </div>
                @endif

            </div>
            @if(isset($slide->background_image))
                <img src="/uploads/slider/full/{{ $slide->background_image }}" alt="{{ $slide->background_image }}">
            @endif
        </div>
        @endforeach
    </div>  <!-- slider -->
@endif
