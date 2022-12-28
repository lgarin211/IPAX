<footer class="section-footer bg-dark position-relative">
    <section class="footer py-5">
        <div class="container">
            <div class="row pb-3">
                <aside class="col-md-2">
                    <div class="footer-logo">
                        <h4 class="text-white font-weight-bold">Layanan<span class="text-muted">Pesta</span></h4>
                    </div>
                </aside>
            </div>
        </div>
        <!-- //container -->
        @include('contain/baner2')
    </section>
    <!-- footer-top.// -->
    <section class="pt-3 pb-4">
        <div class="container">
            <div class="footer-cta rounded border-dark">
                <div class="row no-gutters d-flex justify-content-between align-items-center">
                    <div class="col-5 col-md-4 affiliate d-flex align-items-center">
                        <div class="aff-btn">
                            <a href="#" class="btn btn-primary btn-sm">
                                Daftarkan Usaha
                            </a>
                        </div>
                        <div>
                            <p class="text-white d-none d-md-block m-0 w-75 small ml-3">
                                Bekerjasama dalam mengembangkan usaha anda
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="fact">
                                <h6 class="mb-1">12,961</h6>
                                <p class="mb-0">Total Usaha</p>
                            </div>
                            <div class="fact">
                                <h6 class="mb-1">90</h6>
                                <p class="mb-0">Client</p>
                            </div>
                            <div class="fact">
                                <h6 class="mb-1">270</h6>
                                <p class="mb-0">Layanan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-bottom border-top border-dark white pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="pr-2">© {{date("Y")}} Pt Indonesia Berkarya Selalu</span>
                    <span class="pr-2"><a href="#">Privacy policy</a></span>
                    <span class="pr-2"><a href="#">Terms of use</a></span>
                </div>
                <div class="col-md-6 text-md-right">
                    {{-- <a href="#" class="mr-2"><img src="{{url('/')}}/assets/img/payment/footer-visa.svg" width="42"></a>
                    <a href="#" class="mr-2"><img src="{{url('/')}}/assets/img/payment/footer-mastercard.svg" width="42"></a> --}}
                    {{-- <a href="#"><img src="{{url('/')}}/assets/img/payment/footer-paypal.svg" width="42"></a> --}}
                </div>
            </div>
            <!-- row.// -->
        </div>
        <!-- //container -->
    </section>
</footer> <!-- build:js -->
<script src="{{url('/')}}/assets/vendor/js/jquery.js"></script>
<script src="{{url('/')}}/assets/vendor/js/popper.js"></script>
<script src="{{url('/')}}/assets/vendor/js/bootstrap.js"></script>
<script src="{{url('/')}}/assets/vendor/js/swiper.min.js"></script>
<script src="{{url('/')}}/assets/vendor/js/prism.min.js"></script>
<script src="{{url('/')}}/assets/js/custom.js"></script>
<!-- endbuild -->
</body>

</html>
