<template>
    <div class="elh-course-reviews">
        <div class="elh-course-review-item">
            <div class="elh-course-review-body">
                <div class="elh-course-review-title">
                    <h5>
                        name<span style="font-size: 1.2rem; color: #5E6A73">(email)</span>
                    </h5>
                </div>
                <p class="elh-course-review-time">
                    <i class="fa fa-clock-o"></i>
                    date
                    <!-- {{ $comment->created_at->toFormattedDateString() . ' at ' . $comment->created_at->format('H:i') }} -->
                </p>
                <p class="elh-course-review-text">
                    content
                    <!-- {!! nl2br($comment->content) !!} -->
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "comment-item"
    }
</script>

<style scoped>

</style>
