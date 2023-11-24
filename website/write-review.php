<!-- Abraham Khan - 1906636 -->

<!-- Defines the document as an html tag for the browser -->
<!DOCTYPE html>
<html>

<head>
<!-- Uses PHP to include the navbar header -->
<?php
$page_name = "Write Review";
include('inc/header.php');
?>
</head>

<body>
<!-- Creates all the elements for the review system  -->
<p id="review-header"><b>Write a Review</b></p>
<p id="review-rating">Rating /5:</p>
<input id="review-score" placeholder="0-5"><b></b></p>
<input id="review-input" placeholder="Write your message here...">
<button class="review-submit">Submit Review</button>

</body>

</html>
