<footer class="footer-section">
        <div class="container relative">

            <div class="sofa-img">
                <img src="{{asset('public/assets/customerassets/images/laptopimg2bgr.png')}}" alt="Image" class="img-fluid">
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="subscription-form">
                        <h3 class="d-flex align-items-center"><span class="me-1"><img src="{{asset('public/assets/customerassets/images/envelope-outline.svg')}}" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

                        <form action="{{route('newsletter.store')}}" class="row g-3" method="POST">
                            @csrf
                            <div class="col-auto">
                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="col-auto">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">
                                    <span class="fa fa-paper-plane"></span>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">RETAIL-ROVER<span>.</span></a></div>
                    <p class="mb-4">Retail Rover is your go-to destination for top-notch electronics, offering a wide range from advanced mobile phones to powerful laptops and accessories. </p>

                    
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="{{route('about')}}">About us</a></li>
                                
                               
                                <li><a href="{{route('contact')}}">Contact us</a></li>
                            </ul>
                        </div>

                      

                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                              
                                <li><a href="{{route('about')}}">Our team</a></li>
                                
                                <li><a href="{{route('about')}}">Privacy Policy</a></li>
                            </ul>
                        </div>

                        <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled custom-social">
                        <li><a href="https://www.facebook.com/"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="https://x.com/?lang=en"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="https://www.instagram.com/myntra/?hl=en"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="https://in.linkedin.com/"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                        </div>

                       
                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy; RetailRover  <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved.
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->


    <script src="{{asset('public/assets/customerassets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/customerassets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('public/assets/customerassets/js/custom.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>