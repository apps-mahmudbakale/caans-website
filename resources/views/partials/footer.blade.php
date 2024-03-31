<footer id="footer" class="mt-0">
    <div class="container my-4">
        <div class="row py-5">
            <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                <h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Contact
                    Details</h5>
                <p class="text-4 mb-1">Regional Center for Neurosugery</p>
                <p class="text-4 mb-1 pb-1">Usman Danfodiyo University</p>
                <p class="text-4 mb-1 pb-1">P.M.B. 2346, Sokoto</p>
                <p class="text-4 mb-4 pb-1">Sokoto Nigeria</p>

                <p class="text-5 mb-1 pt-2">Call: <a href="tel:1234567890" class="text-decoration-none">123-456-7890</a>
                </p>
                <p class="text-5 mb-0">Email: <a href="info@africa-caans.org">info@africa-caans.org</a></p>
                <p></p>
                <ul class="social-icons social-icons-clean-with-border social-icons-medium">
                    <li class="social-icons-instagram">
                        <a href="http://www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                    <li class="social-icons-twitter mx-2">
                        <a href="http://www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i
                                class="fab fa-twitter"></i></a>
                    </li>
                    <li class="social-icons-facebook">
                        <a href="http://www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 mb-5 mb-lg-0">

            </div>
            <div class="col-lg-4">
                <h5 class="text-6 text-transform-none font-weight-semibold text-color-light mb-4">Newsletter
                </h5>
                <p class="text-4 mb-1">Get all the latest informationon and News.</p>
                <p class="text-4">Sign up for newsletter today.</p>
                @if (session('success'))
                    {{-- <p style="color: green;">{{ session('success') }}</p> --}}
                    <script>
                        alert('{{ session('success') }}');
                    </script>
                @endif

                @if (session('error'))
                    <p style="color: red;">{{ session('error') }}</p>
                @endif
                <form action="{{ route('subscribe') }}" method="POST" class="mw-100">
                    @csrf
                    <div class="input-group input-group-rounded">
                        <input class="form-control form-control-sm bg-light px-4 text-3" placeholder="Email Address..."
                            name="email" id="newsletterEmail" type="email">
                        <button class="btn btn-primary text-color-light text-2 py-3 px-4"
                            type="submit"><strong>SUBSCRIBE!</strong></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                    <p>© Copyright {{ date('Y') }}. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
