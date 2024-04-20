{{-- show all reply of review using ajax --}}
<div id="reply-review-container{{ $review->review_id }}" class="">

</div>
{{-- style review data where will be display --}}
<style>
    .space {
        margin-left: 10px;
    }

    .pending-review {
        background-color: #f60;
        font-size: 11px;
    }

    .font {

        font-size: 16px;

    }

    .fontBold {
        font-weight: 700;
    }

    ul {
        list-style: none;
    }

    .reviewDiv {
        width: 23rem;
        display: flex;
        flex-direction: row;
        margin-left: 29px;
    }

    .img_container {
        width: 38px;
        vertical-align: middle;
        margin-right: 6px;
    }
</style>
<script>
    // get date formate function
    function formatCreatedAtDate(dateString) {
        const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        const date = new Date(dateString);
        return months[date.getMonth()] + " " + date.getDate() + " " + date.getFullYear();
    }

    $("#reply-review-container{{ $review->review_id }}").ready(function() {
        var url = "{{ url('/') }}/review/replies/{{ $review->review_id }}";
        $.ajax({
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'GET',
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function(data) {
                if (data.length > 0) {

                    var replyReviewContainer = $("#reply-review-container{{ $review->review_id }}");
                    replyReviewContainer.empty(); // Clear previous reply reviews

                    data.forEach(function(reply) {
                        console.log(reply);

                        var reviewDiv = $("<div>").addClass(
                            "flex items-center mt-4 reviewDiv");
                        var imageDiv = $("<div>").addClass("pic");
                        var contentDiv = $("<div>").addClass("content");
                        var textDiv = $("<div>").addClass("review-text").css({
                            "width": "30rem",
                            "margin-bottom": "1rem"
                        });
                        // set image
                        var imageURL = "{{ asset('web/images/avatar3.webp') }}";
                        var profileImage = $("<img>").addClass(
                                "w-8 h-8 block rounded-full img_container")
                            .attr("src", imageURL);


                        var name = $("<span>").addClass(
                                "font-bold text-grey-darkest mb-2 font fontBold text-capitalize"
                            )
                            .text(reply.name);

                        var reviewUser = "{{ $review->name }}";
                        var reviewUserName = $("<span>").addClass(
                            "font-bold text-grey-darkest mb-2 font fontBold text-capitalize"
                        ).text("@" +
                            reviewUser).css({
                            "color": "#3490dc",
                            "margin-left": "7px"
                        });

                        var createdAt = $("<span>").addClass("text-grey space font")
                            .text(
                                formatCreatedAtDate(reply.created_at)).css({
                                "color": " #b8c2cc",
                            });;

                        var reviewText = $("<span>").addClass(
                                "font-semibold leading-normal text-grey-darker font")
                            .text(reply.review_text);


                        //append content in div
                        imageDiv.append(profileImage);
                        contentDiv.append(name);
                        contentDiv.append(reviewUserName);
                        contentDiv.append(createdAt);
                        contentDiv.append(status);
                        textDiv.append(reviewText);

                        //Append div inside div/ structure of dive/structure of html
                        replyReviewContainer.append(reviewDiv);
                        reviewDiv.append(imageDiv);
                        reviewDiv.append(contentDiv);
                        contentDiv.append(textDiv);

                    });

                }
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.log(xhr);
                console.log("Error: " + error);
                displayValidatorErrors(xhr.responseJSON.errors);
            }
        });
    });
</script>
