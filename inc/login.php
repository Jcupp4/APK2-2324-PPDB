<!DOCTYPE html>
<html lang="en">
<head>
    <title>Seven HTML Pro - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="description" content="Seven admin dashboard live demo. Check out all the features of the admin panel. Light & dark skins. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Seven, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Seven HTML Pro - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/products/seven-html-pro" />
    <meta property="og:site_name" content="Seven HTML Pro by Keenthemes" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="../assets/assetslogin/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="../assets/assetslogin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/assetslogin/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
    <!--end::Google tag-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>

<body id="kt_body" class="auth-bg">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Image placeholder-->
        <style>
            .auth-page-bg {
                background-image: url('../assets/assetslogin/media/illustrations/sigma-1/14.png');
            }

            [data-bs-theme="dark"] .auth-page-bg {
                background-image: url('../assets/assetslogin/media/illustrations/sigma-1/14-dark.png');
            }
        </style>
        <!--end::Image placeholder-->

        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed auth-page-bg">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="../index.html" class="mb-12">
                    <img alt="Logo" src="../assets/assetslogin/media/logos/logo-default.svg" class="h-60px" />
                </a>
                <!--end::Logo-->

                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

                    <!--begin::Form-->
                    <form class="form w-100" id="kt_sign_in_form" data-kt-redirect-url="../admin/homepage.php" action="#">
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-gray-900 mb-3">
                                Sign In to Seven HTML Pro </h1>
                            <!--end::Title-->

                            <!--begin::Link-->
                            <div class="text-gray-500 fw-semibold fs-4">
                                New Here?

                                <a href="register.php" class="link-primary fw-bold">
                                    Create an Account
                                </a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->

                        <!-- Begin::Login Tabs -->
                        <ul class="nav nav-pills nav-justified mb-4" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="email-tab-btn" data-bs-toggle="tab" data-bs-target="#email-tab" type="button">
                                    Login with Email
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nisn-tab-btn" data-bs-toggle="tab" data-bs-target="#nisn-tab" type="button">
                                    Login with NISN
                                </button>
                            </li>
                        </ul>
                        <!-- End::Login Tabs -->

                        <!-- Begin::Tab Content -->
                        <div class="tab-content">
                            <!-- Begin::Email Tab -->
                            <div class="tab-pane fade show active" id="email-tab" role="tabpanel">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold text-gray-900">Email</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-lg form-control-solid" type="email" name="email" autocomplete="off" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack mb-2">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold text-gray-900 fs-6 mb-0">Password</label>
                                        <!--end::Label-->

                                        <!--begin::Link-->
                                        <a href="password-reset.html" class="link-primary fs-6 fw-bold">
                                            Forgot Password ?
                                        </a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!-- End::Email Tab -->

                            <!-- Begin::NISN Tab -->
                            <div class="tab-pane fade" id="nisn-tab" role="tabpanel">
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold text-gray-900">NISN (Nomor Induk Siswa Nasional)</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-lg form-control-solid" type="text" name="nisn" autocomplete="off" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack mb-2">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold text-gray-900 fs-6 mb-0">Password</label>
                                        <!--end::Label-->

                                        <!--begin::Link-->
                                        <a href="password-reset.html" class="link-primary fs-6 fw-bold">
                                            Forgot Password ?
                                        </a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-lg form-control-solid" type="password" name="nisn_password" autocomplete="off" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!-- End::NISN Tab -->
                        </div>
                        <!-- End::Tab Content -->

                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">
                                    Continue
                                </span>

                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                            <!--end::Submit button-->

                            <!--begin::Separator-->
                            <div class="text-center text-muted text-uppercase fw-bold mb-5">or</div>
                            <!--end::Separator-->

                            <!--begin::Google link-->
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <img alt="Logo" src="../assets/assetslogin/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />
                                Continue with Google
                            </a>
                            <!--end::Google link-->

                            <!--begin::Google link-->
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                <img alt="Logo" src="../assets/assetslogin/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />
                                Continue with Facebook
                            </a>
                            <!--end::Google link-->

                            <!--begin::Google link-->
                            <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                                <img alt="Logo" src="../assets/assetslogin/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-20px me-3" />
                                <img alt="Logo" src="../assets/assetslogin/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-20px me-3" />
                                Continue with Apple
                            </a>
                            <!--end::Google link-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->

            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-semibold fs-6">
                    <a href="https://keenthemes.com/" class="text-muted text-hover-primary px-2">About</a>

                    <a href="https://devs.keenthemes.com/" class="text-muted text-hover-primary px-2">Support</a>

                    <a href="https://keenthemes.com/products/seven-html-pro" class="text-muted text-hover-primary px-2">
                        Purchase
                    </a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "../assets/assetslogin/index.html";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="../assets/assetslogin/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/assetslogin/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="../assets/assetslogin/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Custom Javascript-->

    <!--begin::Custom Tab Script-->
    <script>
        // JavaScript to handle form submission based on active tab
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('kt_sign_in_form');
            const emailTabBtn = document.getElementById('email-tab-btn');
            const nisnTabBtn = document.getElementById('nisn-tab-btn');
            
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                
                // Determine which tab is active
                const isEmailTabActive = emailTabBtn.classList.contains('active');
                
                // Get form data
                const formData = new FormData(form);
                
                // Add a hidden field to indicate which login method is being used
                formData.append('login_method', isEmailTabActive ? 'email' : 'nisn');
                
                // Get the redirect URL from the form's data attribute
                const redirectUrl = form.getAttribute('data-kt-redirect-url');
                
                // Show loading indicator
                const submitButton = document.getElementById('kt_sign_in_submit');
                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;
                
                // Simulate form submission (replace with actual AJAX call)
                setTimeout(function() {
                    // Hide loading indicator
                    submitButton.removeAttribute('data-kt-indicator');
                    submitButton.disabled = false;
                    
                    // For demonstration, just redirect
                    // In a real application, you would validate credentials first
                    window.location.href = redirectUrl;
                }, 1500);
                
                // In a real application, you would do something like:
                /*
                fetch('your-login-endpoint.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = redirectUrl;
                    } else {
                        // Show error message
                        alert(data.message);
                        submitButton.removeAttribute('data-kt-indicator');
                        submitButton.disabled = false;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    submitButton.removeAttribute('data-kt-indicator');
                    submitButton.disabled = false;
                });
                */
            });
        });
    </script>
    <!--end::Custom Tab Script-->
    <!--end::Javascript-->
</body>
</html>