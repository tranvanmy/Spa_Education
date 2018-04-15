<template>
    <div class="elh-course-student-feedback">
        <div class="elh-section-header text-left">
            <h3 class="elh-section-title">Student Feeback</h3>
        </div>
        <!-- Write a review -->

        <form id="courseReviewForm" class="elh-course-review-form" action="#" method="post">
            <p class="lead elh-theme-color">Write a Review</p>

            <div class="row">
                <input type="hidden" id="home-course-id" value="a">
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

            <button class="btn" type="submit" id="home-course-submit">
                Submit
            </button>
        </form>
        <!-- Write a review End -->
        <div id="couse-comment-area">
            <CommentItem/>
        </div>

    </div>
</template>

<script>
    import CommentItem from './CommentItem'

    export default {
        name: "CourseComment",

        beforeCreate() {
            
        },

        data() {
            return {
                items: []
            }
        },

        components: { CommentItem }
    }
</script>
