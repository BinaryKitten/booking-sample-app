<div class="single_course col-lg-4">
    @if ($course->discounted_price > 0)
        <div class="ribbon ribbon-top-left"><span>Sale</span></div>
    @endif
    <div class="course_head">
        <img class="img-fluid" src="img/courses/c1.jpg" alt=""/>
    </div>
    <div class="course_content">
        @if ($course->discounted_price > 0)
            <span class="price">@money($course->discounted_price)</span>
        @endif
        <span class="price">@money($course->price)</span>
        @foreach($course->tags as $tag)
            <span class="tag mb-4 d-inline-block">{{ $tag->name }}</span>
        @endforeach
        <h4 class="mb-3">
            <a href="{{ route('view-course', ['course' => $course]) }}">{{ $course->name }}</a>
        </h4>
        <div class="h-50"><p>{{ $course->description }}</p></div>
        <div
            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
        >
            <div class="authr_meta ">
                <img src="img/courses/author{{ random_int(1,3) }}.png"
                     alt="Profile picture for {{ $course->teacher->name }}"/>
                <span class="d-inline-block ml-2">{{ $course->teacher->name }}</span>
            </div>
        </div>
    </div>
</div>
