{{--Used on the index page (so shows a small summary--}}
{{--See the guide on binshops.binshops.com for how to copy these files to your /resources/views/ directory--}}
{{--https://binshops.binshops.com/laravel-blog-package--}}

<div class="col-md-6">
    <div class="blog-item">

        <div class='text-center blog-image mr-2'>
            <?=$post->image_tag("medium", true, ''); ?>
        </div>
        <div class="blog-inner-item">
            <h3 class='pt-3'><a href='{{$post->url($locale)}}'>{{$post->title}}</a></h3>
            <h5 class='pb-3'>{{$post->subtitle}}</h5>

            @if (config('binshopsblog.show_full_text_at_list'))
                <p>{!! $post->post_body_output() !!}</p>
            @else
                <p>{!! mb_strimwidth($post->post_body_output(), 0, 400, "...") !!}</p>
            @endif

            <div class="post-details-bottom">
                <span class="light-text">Authored by: </span> {{$post->post->author->name}} <span class="light-text">Posted at: </span> {{date('d M Y ', strtotime($post->post->posted_at))}}
            </div>
            <div class='text-center mt-3'>
                <a href="{{$post->url($locale)}}" class="btn btn-primary">View Post</a>
            </div>
        </div>
    </div>

</div>
