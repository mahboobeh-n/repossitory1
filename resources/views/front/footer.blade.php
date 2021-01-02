<footer id="footer" class="section-bg">
    <div class="footer-top">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">

                        <div class="col-sm-6">

                            <div class="footer-info">
                                <h3>درباره بیمارستان</h3>
                                <p>بیمارستان خصوصی تخصصی و فوق تخصصی X در تاریخ ۱۳۸۵/۱۲/۱۲ ، به منظور ارائه خدمات بهداشتی درمانی و مراقبتی پیشرفته بر مبنای پایبندی به ارزش ها و کرامات انسانی، آغاز به کار نمود. این بیمارستان با داشتن 180 تخت فعال شامل اتاق های یک تخته ، دو تخته و بخش ویژه ، در زمینی به مساحت ۴۴۸۰ متر مربع و با زیربنای ۲۰۰۰۰ مترمربع در ۹ طبقه واقع شده است.</p>
                            </div>


                        </div>

                        <div class="col-sm-6">
                            <div class="footer-links">
                                <h4>راهنمای بیماران</h4>
                                <ul>
                                    <li><a href="#">حقوق بیمار</a></li>
                                    <li><a href="#">ایمنی بیمار</a></li>
                                    <li><a href="#">خدمات پشتیبانی</a></li>
                                    <li><a href="#">راهنمای مراجعین</a></li>
                                    <li><a href="#">امور بیمه</a></li>
                                </ul>
                            </div>

                            <div class="footer-links">
                                <h4>اطلاعات تماس</h4>
                                <p>
                                    ادرس : خیابان اصلی ------------- <br>
                                   خیابان فرعی----------------<br>
                                    <br>
                                    <strong>تلفن :</strong> +1 5589 55488 55<br>
                                    <strong>ایمیل :</strong> info@example.com<br>
                                </p>
                            </div>

                            <div class="social-links">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form">

                        <h4>برای ما پیام بفرستید</h4>

                        <form action="" method="post" role="form" class="contactForm">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="اسم شما"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل شما"
                                       data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="موضوع"
                                       data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="پیام"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div id="sendmessage">Your message has been sent. Thank you!</div>
                            <div id="errormessage"></div>

                            <div class="text-center"><button type="submit" title="Send Message">فرستادن پیام</button></div>
                        </form>
                    </div>

                </div>



            </div>

        </div>
    </div>


</footer><!-- #footer -->
