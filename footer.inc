<footer class='container'>
    <div class="row justify-content-md-center">
        <div class='col-sm-4 banner'>
            <img src="../images/mbar_logo.png" class="img-fluid rounded-top" alt="Monterey Bay Are Roundup 2024 logo with a breeched whale tail and the slogan: Keep it simple" />
        </div>
        <div class='col-sm-8 col-md-6'>
            <p id='statement'>
                Our Statement of Responsibility:<br><br>
                I am responsible.<br>
                When anyone, anywhere, reaches out for help, I want the hand of A.A. always to be there.<br>
                And for that I am responsible.
            </p>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-sm-12 col-md-10 shadow text-center">
            <hr>
            <h3 class="text-center"><strong>Join <a href="https://www.facebook.com/groups/MBAR2021/">
                        <img src="../images/facebook_logo.png" width="40" alt="Facebook logo for private AA members."></a> Private Group</strong></h3>
            <hr>
        </div>
    </div>
</footer>

<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="bi bi-chevron-double-up"></i></a>

<div class = 'container'>
<div class="row justify-content-md-center">
        <div class="col-sm-12" id="footer-image">
            <p>
                Copyright © 2023 Monterey Bay Area Roundup. All Rights Reserved.
            </p>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script>
// ===== Scroll to Top ==== 
$(this).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>