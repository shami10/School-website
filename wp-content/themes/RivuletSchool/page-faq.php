<?php get_header(); ?>
<div class="faqs">
	<label>FAQ's</label>
</div>
<svg id="faq-clouds" class="head" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
   <path d="M-5 100 Q 0 20 5 100 Z
      M0 100 Q 5 0 10 100
      M5 100 Q 10 30 15 100
      M10 100 Q 15 10 20 100
      M15 100 Q 20 30 25 100
      M20 100 Q 25 -10 30 100
      M25 100 Q 30 10 35 100
      M30 100 Q 35 30 40 100
      M35 100 Q 40 10 45 100
      M40 100 Q 45 50 50 100
      M45 100 Q 50 20 55 100
      M50 100 Q 55 40 60 100
      M55 100 Q 60 60 65 100
      M60 100 Q 65 50 70 100
      M65 100 Q 70 20 75 100
      M70 100 Q 75 45 80 100
      M75 100 Q 80 30 85 100
      M80 100 Q 85 20 90 100
      M85 100 Q 90 50 95 100
      M90 100 Q 95 25 100 100
      M95 100 Q 100 15 105 100 Z">
   </path>
</svg>
<div class="main-faq">
	<h2>Answers of your every Question</h2>
	<p>If you can't get any answer feel free to <a href="">contact us by email</a></p>
	<div class="questions">
		<div class="container py-3">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="accordion" id="faqExample">
                <div class="card">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseOne">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Q: How does this work?
                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                            <b>Answer:</b> It works using the Bootstrap 4 collapse component with cards to make a vertical accordion that expands and collapses as questions are toggled.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Q: What is Bootstrap 4?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                            Bootstrap is the most popular CSS framework in the world. The latest version released in 2018 is Bootstrap 4. Bootstrap can be used to quickly build responsive websites.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Q. What is another question?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to the question can go here.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseFour">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Q. What is the next question?
                            </button>
                          </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                            The answer to this question can go here. This FAQ example can contain all the Q/A that is needed.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/row-->
</div>
<!--container-->
	</div>
</div>
<?php get_footer(); ?>