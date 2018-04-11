@foreach($comments as $comment)
    <div class="elh-course-reviews">
        <div class="elh-course-review-item">
            {{-- <div class="elh-course-reviewer-thumb">
                <img class="img-responsive" src="/images/course/course-reviewer-thumb.jpg" alt="...">
            </div> --}}
            <div class="elh-course-review-body">
                <div class="elh-course-review-title">
                    <h5>
                        {{ $comment->name }}
                        @if($comment->email)
                            <span style="font-size: 1.2rem; color: #5E6A73">({{ $comment->email }})</span>
                        @endif
                    </h5>
                    {{-- <div class="elh-course-reviewer-rating">
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                        <span class="star on"></span>
                    </div> --}}
                </div>
                <p class="elh-course-review-time">
                    <i class="fa fa-clock-o"></i>
                    {{ $comment->created_at->toFormattedDateString() . ' at ' . $comment->created_at->format('H:i') }}
                 </p>
                <p class="elh-course-review-text">
                    {!! nl2br($comment->content) !!}
                </p>
                {{-- <form class="elh-review-feedback-form" action="#" method="post">
                    <span class="elh-feedback-on-review-question">Was this review helpful?</span>
                    <button class="submitted" type="submit" value="yes"><i class="fa fa-check"></i> Yes</button>
                    <button type="submit" value="no"><i class="fa fa-close"></i> No</button>
                    <a href="#">Report</a>
                </form> --}}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endforeach
