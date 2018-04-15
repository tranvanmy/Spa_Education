<template>
    <div class="elh-course-student-feedback">
        <div class="elh-section-header text-left">
            <h3 class="elh-section-title">Student Feeback</h3>
        </div>
        <!-- Write a review -->

        <form id="courseReviewForm" class="elh-course-review-form" action="#" method="post">
            <p class="lead elh-theme-color">Write a Review</p>

            <div class="row">
                <input type="hidden" id="home-course-id" value="{{ $course->id }}">
                <div class="col-sm-6">
                    <input type="text" id="home-course-name" placeholder="Name *" required>
                    <span style="color: red" id="home-course-name-message"></span>
                </div>
                <div class="col-sm-6">
                    <input type="email" id="home-course-email" placeholder="Email">
                    <span style="color: red" id="home-course-email-message"></span>
                </div>
                <div class="col-sm-12" style="margin-top: 10px">
                                    <textarea name="review-message" rows="4"
                                              id="home-course-content"
                                              required placeholder="Content *" value=""
                                    ></textarea>
                    <span style="color: red;" id="home-course-content-message"></span>
                </div>
            </div>

            {{-- <div class="elh-rating-inputs">
            <label class="elh-rate-on"><input type="radio" name="rate-value" value="1"><i class="star"></i></label>
            <label><input type="radio" name="rate-value" value="2"><i class="star"></i></label>
            <label><input type="radio" name="rate-value" value="3"><i class="star"></i></label>
            <label><input type="radio" name="rate-value" value="4"><i class="star"></i></label>
            <label><input type="radio" name="rate-value" value="5"><i class="star"></i></label>
        </div> --}}
            <button class="btn" type="submit" id="home-course-submit">
                Submit
            </button>
        </form>
        <!-- Write a review End -->
        <div id="couse-comment-area">
            @include('user.courses.component-comments', ['comments' => $course->comments])
        </div>

    </div>
</template>

<script>
    export default {
        name: "couse-comment"
    }
</script>

<style scoped>

</style>