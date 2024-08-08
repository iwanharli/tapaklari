<div class="widget-form-register">
    <div class="row">
        <div class="col-md-6 pd-form image-register">
            <img src="{{ asset('portal/images/retinal/img-form.jpg') }}" alt="image">
        </div>
        <div class="col-md-6 pd-form">
            <div class="widget-register background-green">
                <div class="heading-register">
                    <img src="{{ asset('portal/images/retinal/img-form-start.png') }}" alt="image form">
                    <h2 class="title-register">Join our running club now </h2>
                </div>
                <div class="list-contact">
                    <div class="contact">
                        <span> Phone: </span>
                        <div class="address">(62) 812-4944-2476</div>
                    </div>
                    <div class="contact">
                        <span> Email: </span>
                        <div class="address">cs@tapaklari.com</div>
                    </div>
                </div>
                <ul class="social-media">
                    <li>
                        <a href="#"><i class="icon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-pinterest"></i></a>
                    </li>
                </ul>
                <div class="form-register">
                    <form action="#" method="post" id="registerform" class="register-form" novalidate="">
                        <fieldset class="name-container">
                            <input type="text" id="author" placeholder="Your name*" class="tb-my-input"
                                name="author" tabindex="1" value="" size="32" aria-required="true">
                        </fieldset>
                        <fieldset class="email-container">
                            <input type="text" id="email" placeholder="Your email*" class="tb-my-input"
                                name="email" tabindex="2" value="" size="32" aria-required="true">
                        </fieldset>
                        <fieldset class="telephone-container">
                            <input type="text" id="telephone" placeholder="Telephone*" class="tb-my-input"
                                name="telephone" tabindex="1" value="" size="32" aria-required="true">
                        </fieldset>
                        <fieldset class="sex-container">
                            <select name="sex" id="sexs" class="tb-my-input" aria-required="true">
                                <option value="">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </fieldset>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="comment-reply" class="submit-register"
                                value="Join now">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
