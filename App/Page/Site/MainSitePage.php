<!doctype html>
<html lang="en">
  
<!-- Mirrored from geeksui.codescandy.com/geeks/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:38:32 GMT -->
<head>
    <!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Codescandy" />

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE; ?>App/Asset/images/favicon/favicon.ico" />

<!-- darkmode js -->
<script src="<?php echo BASE; ?>App/Asset/js/vendors/darkMode.js"></script>

<!-- Libs CSS -->
<link href="<?php echo BASE; ?>App/Asset/fonts/feather/feather.css" rel="stylesheet" />
<link href="<?php echo BASE; ?>App/Asset/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
<link href="<?php echo BASE; ?>App/Asset/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

<!-- Theme CSS -->
<link rel="stylesheet" href="<?php echo BASE; ?>App/Asset/css/theme.min.css">
    <link rel="canonical" href="pages/course-single.html" />

    <link rel="stylesheet" href="<?php echo BASE; ?>App/Asset/libs/tiny-slider/dist/tiny-slider.css" />
    <title>Homepage | Geeks - Bootstrap 5 Template</title>
  </head>

  <body class="bg-white">
    <!-- Page Content -->
    <nav class="navbar navbar-expand-lg">
  <div class="container px-0">
    <a class="navbar-brand" href="index.html"><img src="<?php echo BASE; ?>App/Asset/images/brand/logo/logo.svg" alt="Geeks" /></a>
    <!-- Mobile view nav wrap -->
    <div class="ms-auto d-flex align-items-center order-lg-3">
      <div class="d-flex gap-2 align-items-center">
        <a href="#langaugeModal" class="text-inherit me-2" data-bs-toggle="modal">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-globe text-gray-500" viewBox="0 0 16 16">
            <path
              d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
          </svg>
        </a>
        <a href="<?php echo BASE; ?>page/auth/login-auth-page" class="btn btn-outline-dark">Login</a>
        <a href="pages/sign-up.html" class="btn btn-dark d-none d-md-block">Join Now</a>
      </div>
    </div>
    <div>
      <!-- Button -->
      <button
        class="navbar-toggler collapsed ms-2"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-default"
        aria-controls="navbar-default"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="icon-bar top-bar mt-0"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
    </div>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbar-default">
      <ul class="navbar-nav mt-3 mt-lg-0 mx-xxl-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarBrowse" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-display="static">Categories</a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Web Development</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Bootstrap</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">React</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">GraphQl</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Gatsby</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Grunt</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Svelte</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Meteor</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">HTML5</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Angular</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Design</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Graphic Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Illustrator</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">UX / UI Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Figma Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Adobe XD</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Sketch</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Icon Design</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Photoshop</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="pages/course-category.html" class="dropdown-item">Mobile App</a>
            </li>
            <li>
              <a href="pages/course-category.html" class="dropdown-item">IT Software</a>
            </li>
            <li>
              <a href="pages/course-category.html" class="dropdown-item">Marketing</a>
            </li>
            <li>
              <a href="pages/course-category.html" class="dropdown-item">Music</a>
            </li>
            <li>
              <a href="pages/course-category.html" class="dropdown-item">Life Style</a>
            </li>
            <li>
              <a href="pages/course-category.html" class="dropdown-item">Business</a>
            </li>
            <li>
              <a href="pages/course-category.html" class="dropdown-item">Photography</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings</a>
          <ul class="dropdown-menu" aria-labelledby="navbarLanding">
            <li>
              <h4 class="dropdown-header">Landings</h4>
            </li>
            <li>
              <a href="index.html" class="dropdown-item">
                <span>Home Default</span>
                <span class="badge bg-primary ms-2">New</span>
              </a>
            </li>
            <li>
              <a href="pages/landings/landing-abroad.html" class="dropdown-item">
                <span>Home Abroad</span>
                <span class="badge bg-primary ms-2">New</span>
              </a>
            </li>
            <li>
              <a href="mentor/mentor.html" class="dropdown-item">
                <span>Home Mentor</span>
              </a>
            </li>
            <li>
              <a href="pages/landings/landing-education.html" class="dropdown-item">Home Education</a>
            </li>
            <li>
              <a href="pages/landings/home-academy.html" class="dropdown-item">Home Academy</a>
            </li>
            <li>
              <a href="pages/landings/landing-courses.html" class="dropdown-item">Home Courses</a>
            </li>
            <li>
              <a href="pages/landings/landing-sass.html" class="dropdown-item">Home Sass</a>
            </li>
            <li class="border-bottom my-2"></li>
            <li>
              <a href="pages/landings/course-lead.html" class="dropdown-item">Lead Course</a>
            </li>
            <li>
              <a href="pages/landings/request-access.html" class="dropdown-item">Request Access</a>
            </li>

            <li>
              <a href="pages/landings/landing-job.html" class="dropdown-item">Job Listing</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarPages" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Courses</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/course-filter-grid.html">
                    Course Grid
                    <span class="badge bg-primary ms-2">New</span>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-filter-list.html">
                    Course List
                    <span class="badge bg-primary ms-2">New</span>
                  </a>
                </li>
                <li class="border-bottom my-2"></li>

                <li>
                  <a class="dropdown-item" href="pages/course-category.html">Course Category v1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-category-v2.html">
                    Course Category v2
                    <span class="badge bg-primary ms-2">New</span>
                  </a>
                </li>
                <li class="border-bottom my-2"></li>

                <li>
                  <a class="dropdown-item" href="pages/course-single.html">Course Single v1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-single-v2.html">Course Single v2</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-single-v3.html">
                    Course Single v3
                    <span class="badge bg-primary ms-2">New</span>
                  </a>
                </li>
                <li class="border-bottom my-2"></li>
                <li>
                  <a class="dropdown-item" href="pages/course-resume.html">Course Resume</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/course-checkout.html">Course Checkout</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/add-course.html">Add New Course</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Paths</a>
              <ul class="dropdown-menu">
                <li>
                  <a href="pages/course-path.html" class="dropdown-item">Browse Path</a>
                </li>
                <li>
                  <a href="pages/course-path-single.html" class="dropdown-item">Path Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Blog</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/blog.html">Listing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/blog-single.html">Article</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/blog-category.html">Category</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/blog-sidebar.html">Sidebar</a>
                </li>
              </ul>
            </li>

            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Career</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/career.html">Overview</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/career-list.html">Listing</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/career-single.html">Opening</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Portfolio</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/portfolio.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/portfolio-single.html">Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                <span>Mentor</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="mentor/mentor.html">Home</a>
                </li>
                <li>
                  <a class="dropdown-item" href="mentor/mentor-list.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="mentor/mentor-single.html">Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Job</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/landings/landing-job.html">Home</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/jobs/job-listing.html">List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/jobs/job-grid.html">Grid</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/jobs/job-single.html">Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/jobs/company-list.html">Company List</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/jobs/company-about.html">Company Single</a>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Specialty</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/coming-soon.html">Coming Soon</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/404-error.html">Error 404</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/maintenance-mode.html">Maintenance Mode</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/terms-condition-page.html">Terms & Conditions</a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" />
            </li>

            <li>
              <a class="dropdown-item" href="pages/about.html">About</a>
            </li>

            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Help Center</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/help-center.html">Help Center</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/help-center-faq.html">FAQ's</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/help-center-guide.html">Guide</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/help-center-guide-single.html">Guide Single</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/help-center-support.html">Support</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="dropdown-item" href="pages/pricing.html">Pricing</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/compare-plan.html">Compare Plan</a>
            </li>

            <li>
              <a class="dropdown-item" href="pages/contact.html">Contact</a>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
              <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                <!-- dropdown submenu open right -->
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                  </ul>
                </li>

                <!-- dropdown submenu open left -->
                <li class="dropdown-submenu dropstart">
                  <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                    <li><a class="dropdown-item" href="#">Dropdown item</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarAccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
          <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
            <li>
              <h4 class="dropdown-header">Accounts</h4>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Instructor</a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Instructor</h5>
                  <p class="dropdown-text mb-0">Instructor dashboard for manage courses and earning.</p>
                </li>
                <li>
                  <hr class="mx-3" />
                </li>
                <li>
                  <a class="dropdown-item" href="pages/dashboard-instructor.html">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/instructor-profile.html">Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/instructor-courses.html">My Courses</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/instructor-order.html">Orders</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/instructor-reviews.html">Reviews</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/instructor-students.html">Students</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/instructor-payouts.html">Payouts</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/instructor-earning.html">Earning</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="pages/instructor-quiz.html">Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages/instructor-quiz-details.html">Single</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages/instructor-quiz-result.html">Result</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Students</a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Students</h5>
                  <p class="dropdown-text mb-0">Students dashboard to manage your courses and subscriptions.</p>
                </li>
                <li>
                  <hr class="mx-3" />
                </li>
                <li>
                  <a class="dropdown-item" href="pages/dashboard-student.html">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/student-subscriptions.html">Subscriptions</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/payment-method.html">Payments</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/billing-info.html">Billing Info</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/invoice.html">Invoice</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/invoice-details.html">Invoice Details</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/dashboard-student.html">Bookmarked</a>
                </li>
                <li>
                  <a class="dropdown-item" href="pages/dashboard-student.html">My Path</a>
                </li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Quiz</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item" href="pages/student-quiz.html">Quiz</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages/student-quiz-attempt.html">Attempt</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages/student-quiz-start.html">Start</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages/student-quiz-result.html">Result</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">Admin</a>
              <ul class="dropdown-menu">
                <li class="text-wrap">
                  <h5 class="dropdown-header text-dark">Master Admin</h5>
                  <p class="dropdown-text mb-0">Master admin dashboard to manage courses, user, site setting , and work with amazing apps.</p>
                </li>
                <li>
                  <hr class="mx-3" />
                </li>
                <li class="px-3 d-grid">
                  <a href="pages/dashboard/admin-dashboard.html" class="btn btn-sm btn-primary">Go to Dashboard</a>
                </li>
              </ul>
            </li>
            <li>
              <hr class="mx-3" />
            </li>
            <li>
              <a class="dropdown-item" href="pages/sign-in.html">Sign In</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/sign-up.html">Sign Up</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/forget-password.html">Forgot Password</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/profile-edit.html">Edit Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/security.html">Security</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/social-profile.html">Social Profiles</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/notifications.html">Notifications</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/profile-privacy.html">Privacy Settings</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/delete-profile.html">Delete Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="pages/linked-accounts.html">Linked Accounts</a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fe fe-more-horizontal"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
            <div class="list-group">
              <a class="list-group-item list-group-item-action border-0" href="docs/index.html">
                <div class="d-flex align-items-center">
                  <i class="fe fe-file-text fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">Documentations</h5>
                    <p class="mb-0 fs-6">Browse the all documentation</p>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action border-0" href="docs/bootstrap-5-snippets.html">
                <div class="d-flex align-items-center">
                  <i class="bi bi-files fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">Snippet</h5>
                    <p class="mb-0 fs-6">Bunch of Snippet</p>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action border-0" href="docs/changelog.html">
                <div class="d-flex align-items-center">
                  <i class="fe fe-layers fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">
                      Changelog
                      <span class="text-primary ms-1" id="changelog"></span>
                    </h5>
                    <p class="mb-0 fs-6">See what's new</p>
                  </div>
                </div>
              </a>
              <a class="list-group-item list-group-item-action border-0" href="https://geeksui.codescandy.com/geeks-rtl/" target="_blank">
                <div class="d-flex align-items-center">
                  <i class="fe fe-toggle-right fs-3 text-primary"></i>
                  <div class="ms-3">
                    <h5 class="mb-0">RTL demo</h5>
                    <p class="mb-0 fs-6">RTL Pages</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="langaugeModal" tabindex="-1" aria-labelledby="langaugeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="modal-title" id="langaugeModalLabel">Choose a language</h3>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">
          <a class="text-inherit fw-semibold active" href="#!">English</a>
          <a class="text-inherit fw-semibold" href="#!">Deutsch</a>
          <a class="text-inherit fw-semibold" href="#!">Español</a>
          <a class="text-inherit fw-semibold" href="#!">Français</a>
          <a class="text-inherit fw-semibold" href="#!">Indonesia</a>
          <a class="text-inherit fw-semibold" href="#!">Italiano</a>
          <a class="text-inherit fw-semibold" href="#!">日本語</a>
          <a class="text-inherit fw-semibold" href="#!">한국어</a>
          <a class="text-inherit fw-semibold" href="#!">Nederlands</a>
          <a class="text-inherit fw-semibold" href="#!">Polski</a>
          <a class="text-inherit fw-semibold" href="#!">Português</a>
          <a class="text-inherit fw-semibold" href="#!">Română</a>
          <a class="text-inherit fw-semibold" href="#!">Русский</a>
          <a class="text-inherit fw-semibold" href="#!">ภาษาไทย</a>
          <a class="text-inherit fw-semibold" href="#!">Türkçe</a>
          <a class="text-inherit fw-semibold" href="#!">Tiếng Việt</a>
          <a class="text-inherit fw-semibold" href="#!">中文(简体)</a>
          <a class="text-inherit fw-semibold" href="#!">中文(繁體)</a>
        </div>
      </div>
    </div>
  </div>
</div>

    <main>
      <!--Hero Section-->
      <section class="py-xl-8 py-6">
        <div class="container py-xl-6">
          <div class="row align-items-center gy-6 gy-xl-0">
            <div class="col-lg-5 col-xxl-5 col-12">
              <div class="d-flex flex-column gap-5">
                <div class="d-flex flex-row gap-2 align-items-center">
                  <span>🚀</span>
                  <span class="text-primary fw-semibold">
                    <span>Empower Your Learning Journey Today</span>
                  </span>
                </div>
                <div class="d-flex flex-column gap-3">
                  <div class="d-flex flex-column gap-2">
                    <h1 class="mb-0 display-2 fw-bolder">The #1 Courses Learning Platform</h1>
                    <p class="mb-0">Hands-on training, and certifications to help you get the most from Geeks Learning.</p>
                  </div>
                  <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                    <li class="d-flex flex-row gap-2">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                          <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                      </span>
                      <span>Expert Instructors</span>
                    </li>
                    <li class="d-flex flex-row gap-2">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                          <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                      </span>
                      <span>Flexible Learning</span>
                    </li>
                    <li class="d-flex flex-row gap-2">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                          <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                      </span>
                      <span>Supportive Community</span>
                    </li>
                  </ul>
                </div>
                <div class="d-grid d-md-flex flex-row gap-2">
                  <a href="#!" class="btn btn-primary btn-lg">Join For Free</a>
                  <a href="#!" class="btn btn-outline-secondary btn-lg">Explore Courses</a>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 offset-xxl-1 col-lg-7 col-12">
              <div class="row gx-0 gy-4 gy-lg-0">
                <div class="col-md-6 flex-column justify-content-start align-items-center d-none d-md-flex">
                  <div class="position-relative me-n7">
                    <div class="position-absolute bottom-25 start-0 ms-n8 end-0 d-flex flex-column align-items-start">
                      <div class="bg-white rounded-pill py-2 px-3 shadow mb-2 d-inline-block">
                        <svg width="24" height="24" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M23.9688 3.0378H8.29689C7.3189 3.0378 6.38097 3.4263 5.68942 4.11784C4.99788 4.80939 4.60938 5.74732 4.60938 6.72531V26.0848C4.60938 26.3293 4.7065 26.5638 4.87939 26.7366C5.05227 26.9095 5.28676 27.0066 5.53125 27.0066H22.1251C22.3696 27.0066 22.6041 26.9095 22.7769 26.7366C22.9498 26.5638 23.047 26.3293 23.047 26.0848C23.047 25.8403 22.9498 25.6058 22.7769 25.4329C22.6041 25.26 22.3696 25.1629 22.1251 25.1629H6.45313C6.45313 24.6739 6.64739 24.2049 6.99316 23.8592C7.33893 23.5134 7.8079 23.3191 8.29689 23.3191H23.9688C24.2133 23.3191 24.4478 23.222 24.6207 23.0491C24.7936 22.8762 24.8907 22.6418 24.8907 22.3973V3.95967C24.8907 3.71518 24.7936 3.48069 24.6207 3.30781C24.4478 3.13492 24.2133 3.0378 23.9688 3.0378ZM13.8282 4.88155H19.3594V13.1785L17.1458 11.5191C16.9862 11.3994 16.7921 11.3347 16.5927 11.3347C16.3932 11.3347 16.1991 11.3994 16.0395 11.5191L13.8282 13.1785V4.88155ZM23.047 21.4754H8.29689C7.64944 21.4745 7.0133 21.6451 6.45313 21.9697V6.72531C6.45313 6.23632 6.64739 5.76735 6.99316 5.42158C7.33893 5.07581 7.8079 4.88155 8.29689 4.88155H11.9844V15.0222C11.9844 15.1934 12.0321 15.3612 12.1221 15.5069C12.2121 15.6525 12.3409 15.7702 12.494 15.8468C12.6471 15.9233 12.8186 15.9558 12.9891 15.9404C13.1596 15.925 13.3225 15.8624 13.4594 15.7597L16.5938 13.4089L19.7293 15.7597C19.8886 15.8792 20.0822 15.9439 20.2813 15.9441C20.5258 15.9441 20.7603 15.847 20.9332 15.6741C21.1061 15.5012 21.2032 15.2667 21.2032 15.0222V4.88155H23.047V21.4754Z"
                            fill="#F59E0B" />
                        </svg>

                        <span class="text-dark fw-semibold">50+ Courses</span>
                      </div>
                      <div class="bg-white rounded-pill py-2 px-3 shadow mb-2 d-inline-block">
                        <svg width="24" height="25" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M28.5782 15.2724C28.5792 14.2137 28.3197 13.171 27.8226 12.2363C27.3255 11.3016 26.606 10.5035 25.7277 9.91249C24.8493 9.32146 23.839 8.95561 22.7859 8.8472C21.7328 8.73879 20.6691 8.89115 19.6888 9.29084C18.7084 9.69054 17.8415 10.3253 17.1644 11.1391C16.4873 11.953 16.0208 12.9209 15.8061 13.9576C15.5913 14.9943 15.635 16.0679 15.9331 17.0837C16.2313 18.0996 16.7748 19.0265 17.5157 19.7827V26.3349C17.5156 26.4922 17.5557 26.6468 17.6322 26.7842C17.7087 26.9215 17.819 27.037 17.9528 27.1197C18.0865 27.2024 18.2391 27.2495 18.3962 27.2566C18.5532 27.2636 18.7095 27.2304 18.8501 27.16L22.1251 25.5214L25.4001 27.16C25.5407 27.2304 25.6969 27.2636 25.854 27.2566C26.011 27.2495 26.1637 27.2024 26.2974 27.1197C26.4311 27.037 26.5415 26.9215 26.618 26.7842C26.6945 26.6468 26.7346 26.4922 26.7345 26.3349V19.7827C27.9169 18.5793 28.579 16.9595 28.5782 15.2724ZM22.1251 10.663C23.0367 10.663 23.9279 10.9333 24.6859 11.4398C25.4439 11.9463 26.0347 12.6662 26.3836 13.5085C26.7325 14.3507 26.8238 15.2775 26.6459 16.1716C26.4681 17.0658 26.0291 17.8871 25.3844 18.5317C24.7398 19.1764 23.9185 19.6154 23.0243 19.7932C22.1302 19.9711 21.2034 19.8798 20.3611 19.5309C19.5189 19.182 18.799 18.5913 18.2925 17.8332C17.786 17.0752 17.5157 16.1841 17.5157 15.2724C17.5157 14.0499 18.0013 12.8775 18.8657 12.0131C19.7302 11.1486 20.9026 10.663 22.1251 10.663ZM22.5376 23.6661C22.4095 23.602 22.2683 23.5686 22.1251 23.5686C21.9819 23.5686 21.8406 23.602 21.7125 23.6661L19.3594 24.8438V21.1021C20.2236 21.5126 21.1684 21.7255 22.1251 21.7255C23.0818 21.7255 24.0265 21.5126 24.8907 21.1021V24.8438L22.5376 23.6661ZM15.6719 22.6474C15.6719 22.8919 15.5748 23.1264 15.4019 23.2993C15.229 23.4722 14.9945 23.5693 14.7501 23.5693H4.60938C4.12039 23.5693 3.65142 23.3751 3.30565 23.0293C2.95988 22.6835 2.76563 22.2145 2.76562 21.7256V6.97549C2.76562 6.48649 2.95988 6.01752 3.30565 5.67175C3.65142 5.32598 4.12039 5.13173 4.60938 5.13173H24.8907C25.3797 5.13173 25.8487 5.32598 26.1945 5.67175C26.5402 6.01752 26.7345 6.48649 26.7345 6.97549C26.7345 7.21998 26.6374 7.45447 26.4645 7.62735C26.2916 7.80024 26.0571 7.89737 25.8126 7.89737C25.5681 7.89737 25.3336 7.80024 25.1607 7.62735C24.9878 7.45447 24.8907 7.21998 24.8907 6.97549H4.60938V21.7256H14.7501C14.9945 21.7256 15.229 21.8227 15.4019 21.9956C15.5748 22.1684 15.6719 22.4029 15.6719 22.6474ZM13.8282 16.1943C13.8282 16.4388 13.731 16.6733 13.5582 16.8461C13.3853 17.019 13.1508 17.1162 12.9063 17.1162H8.2969C8.0524 17.1162 7.81792 17.019 7.64503 16.8461C7.47215 16.6733 7.37502 16.4388 7.37502 16.1943C7.37502 15.9498 7.47215 15.7153 7.64503 15.5424C7.81792 15.3695 8.0524 15.2724 8.2969 15.2724H12.9063C13.1508 15.2724 13.3853 15.3695 13.5582 15.5424C13.731 15.7153 13.8282 15.9498 13.8282 16.1943ZM13.8282 12.5068C13.8282 12.7513 13.731 12.9857 13.5582 13.1586C13.3853 13.3315 13.1508 13.4286 12.9063 13.4286H8.2969C8.0524 13.4286 7.81792 13.3315 7.64503 13.1586C7.47215 12.9857 7.37502 12.7513 7.37502 12.5068C7.37502 12.2623 7.47215 12.0278 7.64503 11.8549C7.81792 11.682 8.0524 11.5849 8.2969 11.5849H12.9063C13.1508 11.5849 13.3853 11.682 13.5582 11.8549C13.731 12.0278 13.8282 12.2623 13.8282 12.5068Z"
                            fill="#139A74" />
                        </svg>

                        <span class="text-dark fw-semibold">Certified Courses</span>
                      </div>
                      <div class="bg-white rounded-pill py-2 px-3 shadow">
                        <svg width="24" height="25" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M18.9492 12.9114L13.4179 9.22386C13.2791 9.13121 13.1176 9.078 12.9509 9.06992C12.7842 9.06185 12.6184 9.0992 12.4712 9.17799C12.324 9.25678 12.201 9.37406 12.1153 9.5173C12.0295 9.66055 11.9843 9.82438 11.9844 9.99132V17.3664C11.9843 17.5333 12.0295 17.6971 12.1153 17.8404C12.201 17.9836 12.324 18.1009 12.4712 18.1797C12.6184 18.2585 12.7842 18.2958 12.9509 18.2878C13.1176 18.2797 13.2791 18.2265 13.4179 18.1338L18.9492 14.4463C19.0757 14.3622 19.1794 14.2481 19.2511 14.1142C19.3228 13.9803 19.3603 13.8307 19.3603 13.6788C19.3603 13.5269 19.3228 13.3774 19.2511 13.2435C19.1794 13.1096 19.0757 12.9955 18.9492 12.9114ZM13.8282 15.6436V11.7198L16.7759 13.6788L13.8282 15.6436ZM24.8907 5.38193H4.60938C4.12039 5.38193 3.65142 5.57618 3.30565 5.92195C2.95988 6.26772 2.76563 6.73669 2.76562 7.22569V20.132C2.76563 20.621 2.95988 21.09 3.30565 21.4357C3.65142 21.7815 4.12039 21.9757 4.60938 21.9757H24.8907C25.3797 21.9757 25.8487 21.7815 26.1945 21.4357C26.5402 21.09 26.7345 20.621 26.7345 20.132V7.22569C26.7345 6.73669 26.5402 6.26772 26.1945 5.92195C25.8487 5.57618 25.3797 5.38193 24.8907 5.38193ZM24.8907 20.132H4.60938V7.22569H24.8907V20.132ZM26.7345 24.7414C26.7345 24.9859 26.6374 25.2204 26.4645 25.3933C26.2916 25.5661 26.0571 25.6633 25.8126 25.6633H3.6875C3.44301 25.6633 3.20852 25.5661 3.03564 25.3933C2.86275 25.2204 2.76563 24.9859 2.76562 24.7414C2.76562 24.4969 2.86275 24.2624 3.03564 24.0895C3.20852 23.9166 3.44301 23.8195 3.6875 23.8195H25.8126C26.0571 23.8195 26.2916 23.9166 26.4645 24.0895C26.6374 24.2624 26.7345 24.4969 26.7345 24.7414Z"
                            fill="#E53E3E" />
                        </svg>

                        <span class="text-dark fw-semibold">Online Project</span>
                      </div>
                    </div>
                    <svg width="205" height="189" viewBox="0 0 205 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M0.0391235 179.983C0.0391235 80.8399 80.4107 0.468323 179.554 0.468323H189.034C197.318 0.468323 204.033 7.18386 204.033 15.4679V166.407C204.033 178.626 194.127 188.532 181.908 188.532H8.58745C3.86634 188.532 0.0391235 184.704 0.0391235 179.983Z"
                        fill="#139A74" />
                    </svg>
                  </div>
                </div>
                <div class="col-md-6 mt-8 mt-md-0">
                  <div class="bg-warning d-flex justify-content-center rounded-4 position-relative" style="padding-bottom: 150px; padding-top: 100px">
                    <img src="<?php echo BASE; ?>App/Asset/images/landing-immigration/college-student-holding-laptop-pointing-right.png" alt="" class="position-absolute bottom-0 me-8" />
                  </div>
                </div>
                <div class="col-md-6 flex-column justify-content-end d-none d-md-flex">
                  <div class="bg-primary d-flex justify-content-center rounded-4 position-relative mx-5" style="padding-bottom: 150px; padding-top: 100px">
                    <img src="<?php echo BASE; ?>App/Asset/images/landing-immigration/front-view-young-man-going-university-with-bag.png" alt="" class="position-absolute bottom-0" />
                  </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                  <div class="position-relative mt-5">
                    <svg width="204" height="189" viewBox="0 0 204 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M203.994 9.01663C203.994 108.16 123.622 188.532 24.4789 188.532H14.9995C6.71548 188.532 -3.05176e-05 181.816 -3.05176e-05 173.532V22.5934C-3.05176e-05 10.374 9.90572 0.468292 22.1251 0.468292H195.446C200.167 0.468292 203.994 4.29552 203.994 9.01663Z"
                        fill="#EF8E70" />
                    </svg>
                    <div class="bg-white rounded-4 p-3 position-absolute bottom-10 start-10 mb-3 shadow">
                      <div class="avatar-group mb-2">
                        <span class="avatar avatar-md">
                          <!-- avatar  -->
                          <img alt="avatar" src="<?php echo BASE; ?>App/Asset/images/avatar/avatar-1.jpg" class="rounded-circle" />
                        </span>
                        <!-- avatar  -->
                        <span class="avatar avatar-md">
                          <img alt="avatar" src="<?php echo BASE; ?>App/Asset/images/avatar/avatar-2.jpg" class="rounded-circle" />
                        </span>
                        <!-- avatar  -->
                        <span class="avatar avatar-md">
                          <img alt="avatar" src="<?php echo BASE; ?>App/Asset/images/avatar/avatar-3.jpg" class="rounded-circle" />
                        </span>
                        <!-- avatar  -->
                        <span class="avatar avatar-md">
                          <img alt="avatar" src="<?php echo BASE; ?>App/Asset/images/avatar/avatar-4.jpg" class="rounded-circle" />
                        </span>
                      </div>
                      <div class="text-dark fw-bold fs-4">70,324+</div>
                      <div class="text-gray-500">Students Preparing with us</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Hero Section-->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <hr />
            </div>
          </div>
        </div>
      </section>
      <!--explore categories-->
      <section class="py-xl-8 py-6">
        <div class="container">
          <div class="row">
            <div class="col-xl-10 col-md-10 col-12 mx-auto">
              <div class="d-flex flex-column gap-2 text-center mb-xl-7 mb-5">
                <h2 class="h1 mb-0">Explore Courses Categories</h2>
                <p class="mb-0 px-xl-5">Discover a world of knowledge through our diverse range of courses.</p>
              </div>
            </div>
          </div>
          <div class="row gy-4">
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <div class="card-hover-svg card card-body d-flex flex-column gap-4">
                <div>
                  <span class="icon-shape icon-xxl">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_7928_12745)">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M49.4989 31.4999C49.4989 21.8218 41.677 13.9999 31.9989 13.9999C22.3207 13.9999 14.4989 21.8218 14.4989 31.4999C14.4989 41.178 22.3207 48.9999 31.9989 48.9999C41.677 48.9999 49.4989 41.178 49.4989 31.4999ZM50.4989 31.4999C50.4989 21.2695 42.2293 12.9999 31.9989 12.9999C21.7684 12.9999 13.4989 21.2695 13.4989 31.4999C13.4989 41.7303 21.7684 49.9999 31.9989 49.9999C42.2293 49.9999 50.4989 41.7303 50.4989 31.4999Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M34.1998 15.1444C33.4223 14.3344 32.6786 13.9999 31.9989 13.9999C31.3192 13.9999 30.5758 14.3344 29.7983 15.1444C29.018 15.9574 28.2695 17.1869 27.62 18.7892C26.323 21.9888 25.4991 26.4804 25.4991 31.5C25.4991 36.5195 26.323 41.0111 27.62 44.2107C28.2695 45.8131 29.018 47.0426 29.7983 47.8555C30.5758 48.6656 31.3192 48.9999 31.9989 48.9999C32.6786 48.9999 33.4223 48.6656 34.1998 47.8555C34.9802 47.0426 35.7286 45.8131 36.3782 44.2107C37.6751 41.0111 38.4991 36.5195 38.4991 31.5C38.4991 26.4804 37.6751 21.9888 36.3782 18.7892C35.7286 17.1869 34.9802 15.9574 34.1998 15.1444ZM39.4991 31.5C39.4991 21.2695 36.1478 12.9999 31.9989 12.9999C27.8499 12.9999 24.4991 21.2695 24.4991 31.5C24.4991 41.7304 27.8499 49.9999 31.9989 49.9999C36.1478 49.9999 39.4991 41.7304 39.4991 31.5Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M50.0821 31.8786C50.0821 31.5549 49.8393 31.3122 49.5157 31.3122H14.4007C14.077 31.3122 13.8343 31.5549 13.8343 31.8786C13.8343 32.2022 14.077 32.4449 14.4007 32.4449H49.5157C49.7584 32.4449 50.0012 32.2831 50.0821 31.8786Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M31.5001 13.4836C31.5001 13.7786 31.7143 13.9999 32 13.9999C32.2143 13.9999 32.4286 13.7786 32.5001 13.4836V5.51631C32.5001 5.22123 32.2858 4.99993 32 4.99993C31.7143 4.99993 31.5001 5.22123 31.5001 5.51631V13.4836Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M33.5471 3.07461C33.5471 2.17051 32.8621 1.48547 31.958 1.48547C31.0539 1.48547 30.3689 2.17049 30.3689 3.07461C30.3689 3.97872 31.0539 4.66372 31.958 4.66372C32.8621 4.66372 33.5471 3.9787 33.5471 3.07461ZM34.5471 3.07461C34.5471 1.61823 33.4144 0.485474 31.958 0.485474C30.5016 0.485474 29.3689 1.61823 29.3689 3.07461C29.3689 4.53099 30.5016 5.66372 31.958 5.66372C33.4144 5.66372 34.5471 4.53099 34.5471 3.07461Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M44.3854 18.5726C44.1427 18.7344 44.1427 19.0581 44.3854 19.3008C44.4288 19.3225 44.4663 19.3442 44.5012 19.3643C44.5964 19.4193 44.6715 19.4626 44.79 19.4626C44.9518 19.4626 45.0327 19.4626 45.1136 19.3008L50.891 13.6738C51.1337 13.512 51.1337 13.1884 50.891 12.9456C50.7292 12.7029 50.4055 12.7029 50.1628 12.9456L44.3854 18.5726Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M53.4877 12.6575L53.5018 12.6433C54.0822 12.0629 54.0822 10.997 53.5018 10.4166C52.8241 9.7389 51.8626 9.78126 51.3027 10.3878L51.2892 10.4025L51.2751 10.4166C50.6947 10.997 50.6947 12.0629 51.2751 12.6433L51.2892 12.6575L51.3027 12.6722C51.8777 13.295 52.8991 13.295 53.4741 12.6722L53.4877 12.6575ZM54.2089 13.3504C55.1798 12.3795 55.1798 10.6804 54.2089 9.70948C53.1571 8.65765 51.5389 8.65765 50.5679 9.70948C49.597 10.6804 49.597 12.3795 50.5679 13.3504C51.5389 14.4023 53.238 14.4023 54.2089 13.3504Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M58.8208 31.8786C58.8208 31.5549 58.5781 31.3122 58.2544 31.3122H49.5157C49.192 31.3122 48.9498 31.5549 48.9498 31.8786C48.9498 32.2022 49.192 32.4449 49.5157 32.4449H58.2544C58.5781 32.4449 58.7399 32.2831 58.8208 31.8786Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M60.8443 33.5487C61.7484 33.5487 62.4334 32.8637 62.4334 31.9596C62.4334 31.0555 61.7484 30.3705 60.8443 30.3705C59.9402 30.3705 59.2551 31.0555 59.2551 31.9596C59.2551 32.8637 59.9402 33.5487 60.8443 33.5487ZM60.8443 34.5487C62.3007 34.5487 63.4334 33.416 63.4334 31.9596C63.4334 30.5032 62.3007 29.3705 60.8443 29.3705C59.3879 29.3705 58.2551 30.5032 58.2551 31.9596C58.2551 33.416 59.3879 34.5487 60.8443 34.5487Z"
                          fill="" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M44.5612 43.8203C44.3185 43.9821 43.6627 44.4526 43.9054 44.6953L50.5027 51.2774L51.2098 50.5703" fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M53.4877 53.517L53.5018 53.5029C54.0822 52.9225 54.0822 51.8565 53.5018 51.2761L53.4877 51.262L53.4741 51.2473C52.9143 50.6408 51.9527 50.5984 51.2751 51.2761C50.6947 51.8565 50.6947 52.9225 51.2751 53.5029L51.2892 53.517L51.3027 53.5317C51.8777 54.1546 52.8991 54.1546 53.4741 53.5317L53.4877 53.517ZM54.2089 50.569C53.238 49.5172 51.6198 49.5172 50.5679 50.569C49.597 51.5399 49.597 53.239 50.5679 54.21C51.5389 55.2618 53.238 55.2618 54.2089 54.21C55.1798 53.239 55.1798 51.5399 54.2089 50.569Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M32.5248 58.2627C32.4439 58.5821 32.2012 58.8217 31.9585 58.8217C31.6348 58.8217 31.3921 58.5821 31.3921 58.2627V49.5589C31.3921 49.2395 31.6348 49 31.9585 49C32.2821 49 32.5248 49.2395 32.5248 49.5589V58.2627Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M30.3689 60.8445C30.3689 61.7487 31.0539 62.4337 31.958 62.4337C32.8016 62.4337 33.5471 61.7285 33.5471 60.8445C33.5471 59.9404 32.8621 59.2554 31.958 59.2554C31.0539 59.2554 30.3689 59.9404 30.3689 60.8445ZM29.3689 60.8445C29.3689 62.3009 30.5016 63.4337 31.958 63.4337C33.3335 63.4337 34.5471 62.3009 34.5471 60.8445C34.5471 59.3882 33.4144 58.2554 31.958 58.2554C30.5016 58.2554 29.3689 59.3882 29.3689 60.8445Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12.9455 50.1643C12.7028 50.3261 12.7028 50.6498 12.9455 50.8925C12.9889 50.9142 13.0264 50.9358 13.0613 50.956C13.1565 51.0109 13.2316 51.0543 13.3501 51.0543C13.431 51.0543 13.5928 51.0543 13.6737 50.8925L19.9038 44.6624C20.1466 44.5006 20.1466 44.1769 19.9038 43.9342C19.742 43.6915 19.4183 43.6915 19.1756 43.9342L12.9455 50.1643Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M10.4184 53.5023L10.4456 53.5317C11.0054 54.1382 11.9669 54.1805 12.6446 53.5029C13.225 52.9225 13.225 51.8565 12.6446 51.2761L12.6305 51.262L12.6169 51.2473C12.0571 50.6408 11.0956 50.5984 10.4179 51.2761L10.4037 51.2902L10.389 51.3038C9.76617 51.8788 9.76617 52.9002 10.389 53.4752L10.4184 53.5023ZM9.71077 54.21C8.65893 53.239 8.65893 51.5399 9.71077 50.569C10.7626 49.5172 12.3808 49.5172 13.3517 50.569C14.3227 51.5399 14.3227 53.239 13.3517 54.21C12.2999 55.2618 10.6817 55.2618 9.71077 54.21Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M5.58174 32.4449L14.4007 32.4449C14.7243 32.4449 14.8864 32.2831 14.8864 31.8786C14.8864 31.555 14.6437 31.3122 14.32 31.3122H5.58174C5.2581 31.3122 5.01536 31.555 5.01536 31.8786C5.01536 32.2022 5.2581 32.4449 5.58174 32.4449Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M3.07461 30.3705C2.1705 30.3705 1.48547 31.0555 1.48547 31.9596C1.48547 32.8637 2.17051 33.5487 3.07461 33.5487C3.97869 33.5487 4.6637 32.8637 4.6637 31.9596C4.6637 31.0555 3.9787 30.3705 3.07461 30.3705ZM3.07461 29.3705C1.61823 29.3705 0.485474 30.5032 0.485474 31.9596C0.485474 33.416 1.61823 34.5487 3.07461 34.5487C4.531 34.5487 5.6637 33.416 5.6637 31.9596C5.6637 30.5032 4.531 29.3705 3.07461 29.3705Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12.8646 12.9456C12.6219 13.1075 12.6219 13.4311 12.8646 13.6738L18.8021 19.3477C18.8454 19.3694 18.883 19.3911 18.9179 19.4112C19.0131 19.4662 19.0882 19.5095 19.2066 19.5095C19.3685 19.5095 19.5302 19.5095 19.5302 19.3477C19.773 19.1859 19.773 18.8622 19.5302 18.6195L13.5928 12.9456C13.431 12.7029 13.1074 12.7029 12.8646 12.9456Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M10.4037 10.4307L10.389 10.4443C9.76617 11.0192 9.76617 12.0407 10.389 12.6156L10.4184 12.6428L10.4456 12.6722C11.0205 13.295 12.042 13.295 12.6169 12.6722L12.6305 12.6575L12.6446 12.6433C13.225 12.0629 13.225 10.997 12.6446 10.4166L12.6305 10.4025L12.6169 10.3878C12.0571 9.78126 11.0956 9.7389 10.4179 10.4166L10.4037 10.4307ZM13.3517 13.3504C14.3227 12.3795 14.3227 10.6804 13.3517 9.70948C12.3808 8.65765 10.7626 8.65765 9.71077 9.70948C8.65893 10.6804 8.65893 12.3795 9.71077 13.3504C10.6817 14.4023 12.3808 14.4023 13.3517 13.3504Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M19.2422 18.485C18.8978 18.3057 18.6395 18.485 18.4673 18.754C18.2951 19.1125 18.4673 19.3815 18.7256 19.5608C23.1164 21.6227 27.0067 23.0001 31.8279 23.0001C36.6492 23.0001 40.7255 21.5327 45.1163 19.4708C45.3746 19.2916 45.5468 18.9329 45.3746 18.664C45.2024 18.3951 44.858 18.2158 44.5997 18.3951C40.4672 20.457 36.477 21.8347 31.8279 21.8347C27.1789 21.8347 23.4608 20.5469 19.2422 18.485Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M44.6787 43.8655C44.9214 44.0273 45.0832 44.2701 44.9214 44.5937C44.7596 44.7555 44.5978 44.9173 44.436 44.9173C44.3551 44.9173 44.2741 44.9173 44.1932 44.8365C40.2286 42.9755 36.3282 42.4778 31.9591 42.4778C27.5899 42.4778 23.7371 42.9286 19.8534 44.7896C19.6106 44.9514 19.287 44.7896 19.1252 44.5468C18.9634 44.3041 19.1252 43.9805 19.3679 43.8186C23.4134 41.9577 27.3472 41.426 31.9591 41.426C36.49 41.426 40.5523 42.0046 44.6787 43.8655Z"
                          fill="" />
                      </g>
                      <defs>
                        <clipPath id="clip0_7928_12745">
                          <rect width="64" height="64" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>
                <div>
                  <h3 class="mb-0">Data Science</h3>
                  <span class="text-gray-500">
                    <span class="fw-bold">10</span>
                    Courses
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <div class="card-hover-svg card card-body d-flex flex-column gap-4">
                <div class="">
                  <span class="icon-shape icon-xxl">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_7928_12752)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M62.8327 22.7079H43.0549V39.3622H62.8327V22.7079ZM63.8327 21.7079V40.3622H42.0549V21.7079H63.8327Z" fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M2.00938 46.9999V49.5421C2.00938 50.9003 3.07253 51.9999 4.32895 51.9999H60.6809C61.8874 51.9999 63.0005 50.9523 63.0005 49.5421V47.012C63.0005 47.007 62.9999 47.0038 62.9999 47.0038L62.9995 47.0026L62.9978 46.9999H2.00938ZM1.00938 47.012V49.5421C1.00938 51.3975 2.46674 52.9999 4.32895 52.9999H60.6809C62.4621 52.9999 64.0005 51.4818 64.0005 49.5421V47.012C64.0005 46.4216 63.5147 45.9999 63.0289 45.9999H1.89998C1.41419 45.9999 0.928416 46.4216 1.00938 47.012Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M32.9816 49.8407C32.9816 49.3411 32.5393 48.8988 32.0397 48.8988C31.5402 48.8988 31.0979 49.3411 31.0979 49.8407C31.0979 50.3402 31.5402 50.7825 32.0397 50.7825C32.5393 50.7825 32.9816 50.3402 32.9816 49.8407ZM33.9816 49.8407C33.9816 48.7889 33.0916 47.8988 32.0397 47.8988C30.9879 47.8988 30.0979 48.7889 30.0979 49.8407C30.0979 50.8925 30.9879 51.7825 32.0397 51.7825C33.0916 51.7825 33.9816 50.8925 33.9816 49.8407Z"
                          fill="" />
                        <path
                          d="M35.0344 17.153H12.865C12.5413 17.153 12.2986 16.9103 12.2986 16.6675C12.2986 16.3439 12.5413 16.1821 12.865 16.1821H35.0344C35.358 16.1821 35.6008 16.4248 35.6008 16.6675C35.5198 16.9103 35.358 17.153 35.0344 17.153Z"
                          fill="" />
                        <path
                          d="M33.4168 32.6878H23.6267C23.303 32.6878 23.0603 32.4451 23.0603 32.2023C23.0603 31.9596 23.303 31.7169 23.6267 31.7169H33.4168C33.7404 31.7169 33.9832 31.9596 33.9832 32.2023C33.9832 32.4451 33.7404 32.6878 33.4168 32.6878Z"
                          fill="" />
                        <path
                          d="M33.4561 40.4551H12.8257C12.5245 40.4551 12.2986 40.2124 12.2986 39.9697C12.2986 39.646 12.5245 39.4842 12.8257 39.4842H33.4561C33.7573 39.4842 33.9832 39.7269 33.9832 39.9697C33.9079 40.2124 33.7573 40.4551 33.4561 40.4551Z"
                          fill="" />
                        <path
                          d="M48.8011 35.6169C48.6393 35.6169 48.5584 35.536 48.3966 35.4551L44.7556 31.8141C44.6747 31.7332 44.5938 31.5714 44.5938 31.4096C44.5938 31.2478 44.6747 31.1669 44.7556 31.005L48.3966 27.3641C48.6393 27.1214 48.9629 27.1214 49.1247 27.3641C49.3675 27.6068 49.3675 27.9305 49.1247 28.0923L45.8883 31.3287L49.1247 34.5651C49.3675 34.8078 49.3675 35.1315 49.1247 35.2933C49.0438 35.6169 48.9629 35.6169 48.8011 35.6169Z"
                          fill="" />
                        <path
                          d="M56.9734 35.6169C56.8115 35.6169 56.7306 35.536 56.5688 35.4551C56.3261 35.2124 56.3261 34.8887 56.5688 34.7269L59.8052 31.4905L56.5688 28.2541C56.3261 28.0114 56.3261 27.6877 56.5688 27.5259C56.8115 27.2832 57.1352 27.2832 57.297 27.5259L60.938 31.1668C61.0189 31.2478 61.0998 31.4096 61.0998 31.5714C61.0998 31.7332 61.0189 31.8141 60.938 31.976L57.297 35.6169C57.297 35.6169 57.1352 35.6169 56.9734 35.6169Z"
                          fill="" />
                        <path
                          d="M50.6628 37.6397C50.5819 37.6397 50.501 37.6397 50.501 37.6397C50.2583 37.5588 50.0964 37.2352 50.1773 36.9925L54.951 24.775C55.032 24.5323 55.3556 24.3705 55.5983 24.4514C55.841 24.5323 56.0029 24.8559 55.922 25.0987L51.1483 37.3161C51.0673 37.5588 50.8246 37.6397 50.6628 37.6397Z"
                          fill="" />
                        <path
                          d="M18.6905 32.6878H12.865C12.5413 32.6878 12.2986 32.4451 12.2986 32.2023C12.2986 31.9596 12.5413 31.7169 12.865 31.7169H18.6905C19.0142 31.7169 19.2569 31.9596 19.2569 32.2023C19.2569 32.4451 19.0142 32.6878 18.6905 32.6878Z"
                          fill="" />
                        <path
                          d="M25.1633 25.0014H12.865C12.5413 25.0014 12.2986 24.7586 12.2986 24.5159C12.2986 24.1923 12.5413 24.0304 12.865 24.0304H25.1633C25.487 24.0304 25.7297 24.2732 25.7297 24.5159C25.7297 24.7586 25.487 25.0014 25.1633 25.0014Z"
                          fill="" />
                        <path
                          d="M35.0341 25.0014H31.0695C30.7459 25.0014 30.5031 24.7586 30.5031 24.5159C30.5031 24.1923 30.7459 24.0304 31.0695 24.0304H35.0341C35.3577 24.0304 35.6005 24.2732 35.6005 24.5159C35.5196 24.7586 35.3577 25.0014 35.0341 25.0014Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M7.00005 11H57C57.5523 11 58 11.4477 58 12V22H59V12C59 10.8954 58.1046 10 57 10H7.00005C5.89548 10 5.00005 10.8954 5.00005 12V45C5.00005 46.1046 5.89548 47 7.00005 47H57C58.1046 47 59 46.1046 59 45V40H58V45C58 45.5523 57.5523 46 57 46H7.00005C6.44776 46 6.00005 45.5523 6.00005 45V12C6.00005 11.4477 6.44776 11 7.00005 11Z"
                          fill="" />
                      </g>
                      <defs>
                        <clipPath id="clip0_7928_12752">
                          <rect width="64" height="64" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>
                <div>
                  <h3 class="mb-0">Programming</h3>
                  <span class="text-gray-500">
                    <span class="fw-bold">23</span>
                    Courses
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <div class="card-hover-svg card card-body d-flex flex-column gap-4">
                <div class="">
                  <span class="icon-shape icon-xxl">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M1.56565 4.65578V47.5153C1.56565 48.1985 2.11076 48.7779 2.82828 48.7779H61.1717C61.855 48.7779 62.4343 48.2328 62.4343 47.5153V4.60618C62.4343 3.92293 61.8892 3.34357 61.1717 3.34357H2.82828C2.07452 3.34357 1.52118 3.94429 1.5637 4.62462L1.56565 4.65578ZM0.56565 4.687V47.5153C0.56565 48.7274 1.53535 49.7779 2.82828 49.7779H61.1717C62.3838 49.7779 63.4343 48.8082 63.4343 47.5153V4.60618C63.4343 3.39406 62.4646 2.34357 61.1717 2.34357H2.82828C1.53535 2.34357 0.484842 3.39407 0.56565 4.687Z"
                        fill="" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M26.2152 50L25.1617 57H38.8489L37.8613 50H26.2152ZM38.7301 49H25.3544L23.9999 58H39.9999L38.7301 49Z" fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M44.0001 57.9999H20.0001V60.9999H44.0001V57.9999ZM20.0001 56.9999H44.0001C44.5523 56.9999 45.0001 57.4476 45.0001 57.9999V60.9999C45.0001 61.5522 44.5523 61.9999 44.0001 61.9999H20.0001C19.4478 61.9999 19.0001 61.5522 19.0001 60.9999V57.9999C19.0001 57.4476 19.4478 56.9999 20.0001 56.9999Z"
                        fill="" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.566647 39.5151H63.4344V40.6464H0.565639L0.566647 39.5151Z" fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M30.7381 44.896V44.9293C30.7381 45.6125 31.2832 46.1919 32.0007 46.1919C32.6839 46.1919 33.2633 45.6468 33.2633 44.9293C33.2633 44.246 32.7182 43.6667 32.0007 43.6667C31.2203 43.6667 30.6978 44.2916 30.7358 44.8628L30.7381 44.896ZM29.7381 44.9293C29.7381 46.1414 30.7078 47.1919 32.0007 47.1919C33.2128 47.1919 34.2633 46.2222 34.2633 44.9293C34.2633 43.7172 33.2936 42.6667 32.0007 42.6667C30.7078 42.6667 29.6573 43.7172 29.7381 44.9293Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M37.0735 9.32337H22.6542V33.1011L41.2603 33.1011V13.5812L37.0735 9.32337ZM22.6542 8.32337C22.102 8.32337 21.6542 8.77109 21.6542 9.32337V33.1011C21.6542 33.6534 22.102 34.1011 22.6542 34.1011H41.2603C41.8126 34.1011 42.2603 33.6534 42.2603 33.1011V13.5812C42.2603 13.3189 42.1572 13.067 41.9733 12.88L37.7865 8.62223C37.5985 8.43105 37.3416 8.32337 37.0735 8.32337H22.6542Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M34.9092 24.1616C34.7959 24.2371 34.7356 24.3479 34.7282 24.4692C34.7264 24.4977 34.7276 24.5267 34.7317 24.5559C34.7474 24.6691 34.8066 24.7862 34.9092 24.8889C34.9525 24.9105 34.99 24.9322 35.0248 24.9523C35.0351 24.9582 35.0452 24.964 35.0551 24.9697C35.1367 25.0161 35.2078 25.0505 35.3132 25.0505C35.4749 25.0505 35.6365 25.0505 35.6365 24.9697L38.5456 21.9798C38.5615 21.9478 38.5775 21.919 38.5929 21.8921C38.5983 21.8826 38.6037 21.8733 38.609 21.8641C38.6639 21.769 38.7072 21.694 38.7072 21.5757C38.7072 21.48 38.6789 21.3843 38.639 21.3054C38.6115 21.251 38.5785 21.2046 38.5456 21.1717L35.6365 18.2626C35.4749 18.0202 35.1516 18.0202 34.9092 18.2626C34.6668 18.4242 34.6668 18.7475 34.9092 18.9899L37.4951 21.5757L34.9092 24.1616ZM37.5395 21.5798L34.9294 18.9697L37.5395 21.5798Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M28.8101 24.1772C28.9234 24.2527 28.9837 24.3635 28.9912 24.4849C28.9929 24.5133 28.9918 24.5423 28.9877 24.5716C28.9719 24.6848 28.9128 24.8019 28.8101 24.9045C28.7668 24.9261 28.7293 24.9478 28.6945 24.9679C28.6842 24.9739 28.6741 24.9797 28.6642 24.9853C28.5826 25.0317 28.5116 25.0661 28.4061 25.0661C28.2445 25.0661 28.0829 25.0661 28.0829 24.9853L25.1738 21.9954C25.1578 21.9634 25.1418 21.9346 25.1265 21.9077C25.121 21.8982 25.1156 21.8889 25.1104 21.8798C25.0555 21.7847 25.0122 21.7097 25.0122 21.5914C25.0122 21.4957 25.0405 21.4 25.0804 21.321C25.1079 21.2667 25.1408 21.2203 25.1738 21.1873L28.0829 18.2782C28.2445 18.0358 28.5677 18.0358 28.8101 18.2782C29.0526 18.4398 29.0526 18.7631 28.8101 19.0055L26.2243 21.5914L28.8101 24.1772ZM26.1799 21.5954L28.79 18.9853L26.1799 21.5954Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M33.6167 16.1616L29.6571 26.1009C29.5763 26.3434 29.7379 26.6666 29.9804 26.7474H30.142C30.3036 26.7474 30.546 26.5858 30.6268 26.4242L34.5864 16.4848C34.6672 16.2424 34.5056 15.9191 34.2632 15.8383C34.0208 15.7575 33.6975 15.9191 33.6167 16.1616Z"
                        fill="" />
                    </svg>
                  </span>
                </div>
                <div>
                  <h3 class="mb-0">Web Development</h3>
                  <span class="text-gray-500">
                    <span class="fw-bold">21</span>
                    Courses
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <div class="card-hover-svg card card-body d-flex flex-column gap-4">
                <div class="">
                  <span class="icon-shape icon-xxl">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.39246 11.3236C7.56225 11.1058 7.87643 11.0669 8.09421 11.2367L12.861 14.9532C12.9825 15.0479 13.0536 15.1934 13.0536 15.3475V26.0929C13.0536 26.3691 12.8297 26.5929 12.5536 26.5929C12.2774 26.5929 12.0536 26.3691 12.0536 26.0929V15.5917L7.47934 12.0254C7.26157 11.8556 7.22267 11.5414 7.39246 11.3236Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M17.6362 6.04108C17.9124 6.03787 18.1388 6.25911 18.142 6.53524L18.3036 20.4316C18.3068 20.7077 18.0856 20.9341 17.8095 20.9373C17.5333 20.9405 17.3069 20.7193 17.3037 20.4432L17.1421 6.54686C17.1389 6.27074 17.3601 6.04429 17.6362 6.04108Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M27.4698 3.47069C27.6931 3.63311 27.7425 3.94582 27.5801 4.16914L24.4413 8.48495L24.2824 18.0221C24.2778 18.2982 24.0503 18.5183 23.7742 18.5137C23.4981 18.5091 23.278 18.2815 23.2826 18.0054L23.4441 8.31032C23.4458 8.20751 23.4792 8.10772 23.5397 8.02456L26.7714 3.58097C26.9338 3.35765 27.2465 3.30827 27.4698 3.47069Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M35.3497 12.1707C35.3639 12.4465 35.1519 12.6816 34.8762 12.6959L30.6572 12.9141L30.5835 17.7788C30.5793 18.0549 30.3521 18.2754 30.076 18.2712C29.7999 18.267 29.5795 18.0398 29.5836 17.7637L29.6644 12.4314C29.6684 12.1682 29.8757 11.9532 30.1385 11.9396L34.8245 11.6972C35.1003 11.683 35.3354 11.895 35.3497 12.1707Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M48.5003 16.1733C48.7136 16.3487 48.7444 16.6638 48.569 16.8771L45.5797 20.5128C45.4895 20.6225 45.3569 20.6886 45.215 20.6947L37.7013 21.0179C37.4254 21.0298 37.1921 20.8158 37.1802 20.5399C37.1684 20.264 37.3824 20.0307 37.6583 20.0188L44.949 19.7053L47.7966 16.242C47.972 16.0287 48.287 15.9979 48.5003 16.1733Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M50.2967 25.5798C50.3123 25.8555 50.1015 26.0917 49.8258 26.1074L42.7161 26.5113C42.4404 26.527 42.2042 26.3162 42.1885 26.0405C42.1729 25.7648 42.3837 25.5286 42.6594 25.513L49.7691 25.109C50.0448 25.0933 50.281 25.3041 50.2967 25.5798Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M44.4507 32.4756C44.4507 32.1995 44.6746 31.9756 44.9507 31.9756H49.8791C50.0391 31.9756 50.1894 32.0522 50.2835 32.1816L52.0727 34.6418H55.8577C56.1339 34.6418 56.3577 34.8656 56.3577 35.1418C56.3577 35.4179 56.1339 35.6418 55.8577 35.6418H51.8181C51.6581 35.6418 51.5078 35.5652 51.4137 35.4359L49.6245 32.9756H44.9507C44.6746 32.9756 44.4507 32.7518 44.4507 32.4756Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M30.1676 17.3352C30.185 17.3368 30.2025 17.3389 30.2199 17.3414C38.8136 18.5934 45.4868 26.019 45.4868 35.033C45.4868 36.3664 45.839 37.7002 46.4655 38.8145L46.4761 38.8337L49.6287 44.7472L49.6295 44.7488C50.5342 46.4323 49.342 48.3853 47.4436 48.3956L45.5657 48.4478V53.7306C45.5657 56.2422 43.5514 58.2572 41.0408 58.2572H37.1276V61.6987C37.1276 62.9481 36.1385 63.9375 34.8897 63.9375H17.3037C16.0548 63.9375 15.0658 62.948 15.0658 61.6987V57.2018C15.0658 52.3042 13.9183 47.4886 11.7053 43.2135C10.4518 40.7892 9.7829 38.1121 9.78215 35.2744C9.70099 26.6805 15.7064 19.4219 23.8003 17.6689L23.8024 17.6685C24.9458 17.4234 26.1824 17.2563 27.5081 17.2524C28.376 17.1722 29.302 17.2564 30.12 17.3309L30.1676 17.3352ZM27.5556 18.2288C26.2938 18.2288 25.1109 18.3866 24.0069 18.6233C16.3574 20.28 10.6794 27.1437 10.7582 35.2696C10.7582 37.952 11.3891 40.4766 12.572 42.7645C14.859 47.1825 16.0419 52.1527 16.0419 57.2018V61.6987C16.0419 62.4088 16.5939 62.961 17.3037 62.961H34.8897C35.5994 62.961 36.1515 62.4088 36.1515 61.6987V57.2807H41.0408C43.0124 57.2807 44.5896 55.7029 44.5896 53.7306V47.498L47.4286 47.4191C48.6115 47.4191 49.3213 46.2357 48.7692 45.2101L45.6148 39.2932C44.9051 38.0309 44.5107 36.5319 44.5107 35.033C44.5107 26.5126 38.2019 19.4911 30.0792 18.3077C29.2117 18.2288 28.3442 18.1499 27.5556 18.2288Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M57.6365 33.8644C56.9432 33.8644 56.3591 34.4485 56.3591 35.1419C56.3591 35.8352 56.9432 36.4193 57.6365 36.4193C58.3299 36.4193 58.914 35.8352 58.914 35.1419C58.914 34.4485 58.3299 33.8644 57.6365 33.8644ZM55.3591 35.1419C55.3591 33.8962 56.3909 32.8644 57.6365 32.8644C58.8822 32.8644 59.914 33.8962 59.914 35.1419C59.914 36.3875 58.8822 37.4193 57.6365 37.4193C56.3909 37.4193 55.3591 36.3875 55.3591 35.1419Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M47.8745 15.1256C47.8858 15.81 48.4652 16.3827 49.1518 16.3827C49.8452 16.3827 50.4293 15.7986 50.4293 15.1053C50.4293 14.4119 49.8452 13.8278 49.1518 13.8278C48.4988 13.8278 47.9466 14.3727 47.8745 15.1256ZM46.8761 15.0637C46.974 13.8885 47.8719 12.8278 49.1518 12.8278C50.3975 12.8278 51.4293 13.8596 51.4293 15.1053C51.4293 16.3509 50.3975 17.3827 49.1518 17.3827C47.9062 17.3827 46.8744 16.3509 46.8744 15.1053C46.8744 15.0914 46.8749 15.0775 46.8761 15.0637Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M26.7895 2.43897C26.7964 2.809 27.0118 3.20486 27.3498 3.44194C27.6011 3.56302 27.8387 3.61737 28.0668 3.61737C28.7602 3.61737 29.3443 3.0333 29.3443 2.33993C29.3443 1.64657 28.7602 1.0625 28.0668 1.0625C27.4245 1.0625 26.8626 1.5954 26.7895 2.43897ZM25.7908 2.38237C25.8867 1.13696 26.7752 0.0625 28.0668 0.0625C29.3125 0.0625 30.3443 1.09428 30.3443 2.33993C30.3443 3.58559 29.3125 4.61737 28.0668 4.61737C27.6573 4.61737 27.258 4.51436 26.8737 4.3222C26.8552 4.31293 26.8372 4.30251 26.82 4.29101C26.2083 3.88326 25.7894 3.16762 25.7894 2.42072C25.7894 2.40792 25.7899 2.39513 25.7908 2.38237Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M6.4127 9.2226C5.70425 9.2226 5.13525 9.82152 5.13525 10.4193C5.13525 11.1126 5.71933 11.6967 6.4127 11.6967C6.82777 11.6967 7.16829 11.5223 7.3957 11.238C7.40722 11.2236 7.41954 11.2098 7.43258 11.1968C7.57036 11.059 7.6901 10.7875 7.6901 10.5C7.6901 9.80665 7.10606 9.2226 6.4127 9.2226ZM4.13525 10.4193C4.13525 9.23954 5.18213 8.2226 6.4127 8.2226C7.65837 8.2226 8.6901 9.2544 8.6901 10.5C8.6901 11.0103 8.4945 11.5361 8.15977 11.8834C7.74092 12.3945 7.11922 12.6967 6.4127 12.6967C5.16705 12.6967 4.13525 11.6649 4.13525 10.4193Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M17.6424 3.48627C16.949 3.48627 16.365 4.07034 16.365 4.76371C16.365 5.45707 16.949 6.04114 17.6424 6.04114C18.3358 6.04114 18.9199 5.45707 18.9199 4.76371C18.9199 4.07034 18.3358 3.48627 17.6424 3.48627ZM15.365 4.76371C15.365 3.51805 16.3968 2.48627 17.6424 2.48627C18.8881 2.48627 19.9199 3.51805 19.9199 4.76371C19.9199 6.00936 18.8881 7.04114 17.6424 7.04114C16.3968 7.04114 15.365 6.00936 15.365 4.76371Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M52.7735 25.4466C52.7735 24.744 52.1907 24.1938 51.5376 24.2482C51.5238 24.2494 51.51 24.2499 51.4961 24.2499C50.8027 24.2499 50.2187 24.834 50.2187 25.5274V25.6602C50.2857 26.1906 50.8579 26.724 51.4961 26.724C52.1895 26.724 52.7735 26.1399 52.7735 25.4466ZM51.4754 23.25C52.7516 23.156 53.7735 24.2168 53.7735 25.4466C53.7735 26.6922 52.7417 27.724 51.4961 27.724C50.3657 27.724 49.329 26.8171 49.2211 25.7387C49.2195 25.7222 49.2187 25.7056 49.2187 25.6889V25.5281C49.2187 24.2893 50.239 23.2614 51.4754 23.25Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M36.629 10.7576C35.9356 10.7576 35.3515 11.3417 35.3515 12.035V12.1709C35.4194 12.7897 36.0023 13.3125 36.629 13.3125C37.3223 13.3125 37.9064 12.7284 37.9064 12.035C37.9064 11.3417 37.3223 10.7576 36.629 10.7576ZM34.3515 12.035C34.3515 10.7894 35.3833 9.75759 36.629 9.75759C37.8746 9.75759 38.9064 10.7894 38.9064 12.035C38.9064 13.2807 37.8746 14.3125 36.629 14.3125C35.4851 14.3125 34.4581 13.3916 34.3536 12.2419C34.3522 12.2268 34.3515 12.2117 34.3515 12.1966V12.035Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M21.6701 40.3265C21.707 40.6001 21.5151 40.8519 21.2414 40.8888C20.3031 41.0153 19.5978 41.8435 19.5978 42.8171C19.5978 43.0706 19.6017 43.2333 19.6526 43.3877L19.6562 43.3986C19.9183 44.2603 20.618 44.8216 21.4941 44.8216C21.9368 44.8216 22.247 44.7 22.5926 44.4902C22.7071 44.4207 22.8447 44.4001 22.9745 44.4329C23.3059 44.5167 23.5641 44.5793 23.8105 44.5793C24.9667 44.5793 25.9464 43.5966 25.9464 42.4131C25.9464 42.137 26.1702 41.9131 26.4464 41.9131C26.7225 41.9131 26.9464 42.137 26.9464 42.4131C26.9464 44.1381 25.5298 45.5793 23.8105 45.5793C23.498 45.5793 23.193 45.5165 22.9264 45.4517C22.5235 45.6706 22.0788 45.8216 21.4941 45.8216C20.1356 45.8216 19.0792 44.9312 18.7009 43.695C18.5975 43.3774 18.5977 43.0679 18.5978 42.8399C18.5978 42.8322 18.5978 42.8246 18.5978 42.8171C18.5978 41.3669 19.6498 40.0944 21.1078 39.8978C21.3814 39.8609 21.6332 40.0528 21.6701 40.3265Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M28.6298 27.2896C28.9059 27.2896 29.1298 27.5135 29.1298 27.7896V42.4131C29.1298 42.6892 28.9059 42.9131 28.6298 42.9131C28.3536 42.9131 28.1298 42.6892 28.1298 42.4131V27.7896C28.1298 27.5135 28.3536 27.2896 28.6298 27.2896Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M23.3682 24.6319C23.3986 24.6263 23.4294 24.6234 23.4603 24.6234H23.7835C24.6651 24.6234 25.4335 25.0159 25.9953 25.5778C26.5572 26.1396 26.9497 26.9079 26.9497 27.7895C26.9497 28.0657 26.7258 28.2895 26.4497 28.2895C26.1735 28.2895 25.9497 28.0657 25.9497 27.7895C25.9497 27.2169 25.6959 26.6925 25.2882 26.2849C24.8805 25.8772 24.3562 25.6234 23.7835 25.6234H23.509C22.4555 25.8399 21.6982 26.6914 21.6982 27.7895C21.6982 28.0657 21.4743 28.2895 21.1982 28.2895C20.922 28.2895 20.6982 28.0657 20.6982 27.7895C20.6982 26.1558 21.8589 24.9149 23.3682 24.6319Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M16.8343 39.3129C17.1784 38.1586 18.2721 37.3383 19.5027 37.3383C19.7788 37.3383 20.0027 37.1144 20.0027 36.8383C20.0027 36.5621 19.7788 36.3383 19.5027 36.3383C17.8281 36.3383 16.3391 37.4525 15.8721 39.0402C15.8702 39.0467 15.8684 39.0533 15.8667 39.06C15.8647 39.068 15.8627 39.076 15.8607 39.0841C15.7838 39.3911 15.6902 39.7655 15.6902 40.1508C15.6902 41.1786 16.0032 42.1292 16.6098 42.8308C17.2226 43.5398 18.1096 43.9633 19.1795 43.9633C19.4557 43.9633 19.6795 43.7394 19.6795 43.4633C19.6795 43.1871 19.4557 42.9633 19.1795 42.9633C18.3912 42.9633 17.7835 42.6595 17.3663 42.1769C16.9427 41.6868 16.6902 40.9812 16.6902 40.1508C16.6902 39.9025 16.7518 39.6429 16.8343 39.3129Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M18.5309 33.9451C17.7625 33.9451 17.0857 34.224 16.6222 34.6874C16.0537 35.2559 15.7184 35.9417 15.7184 36.7576C15.7184 37.5736 16.0537 38.2593 16.6222 38.8278C16.8175 39.0231 16.8175 39.3397 16.6222 39.5349C16.427 39.7302 16.1104 39.7302 15.9151 39.5349C15.191 38.8108 14.7184 37.8807 14.7184 36.7576C14.7184 35.6345 15.191 34.7044 15.9151 33.9803C16.5828 33.3126 17.5219 32.9451 18.5309 32.9451C18.8071 32.9451 19.0309 33.169 19.0309 33.4451C19.0309 33.7213 18.8071 33.9451 18.5309 33.9451Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M18.0033 29.4108C18.1342 29.654 18.0432 29.9572 17.8001 30.0881C16.9064 30.5693 16.2856 31.5344 16.2856 32.6372C16.2856 33.1961 16.4239 33.6627 16.6864 34.0565C16.8395 34.2863 16.7774 34.5967 16.5477 34.7499C16.3179 34.903 16.0075 34.841 15.8543 34.6112C15.4705 34.0354 15.2856 33.371 15.2856 32.6372C15.2856 31.1546 16.1191 29.8575 17.326 29.2077C17.5691 29.0767 17.8724 29.1677 18.0033 29.4108Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M22.329 25.3389C20.8116 25.3389 19.5165 26.5852 19.5165 28.0706V28.1507C19.5165 29.7327 20.7469 30.9639 22.329 30.9639C22.6051 30.9639 22.829 31.1878 22.829 31.4639C22.829 31.7401 22.6051 31.9639 22.329 31.9639C20.1946 31.9639 18.5165 30.2858 18.5165 28.1514V28.0706C18.5165 26.0012 20.2915 24.3389 22.329 24.3389C22.793 24.3389 23.277 24.4307 23.6837 24.6341C23.9307 24.7576 24.0308 25.0579 23.9073 25.3049C23.7838 25.5519 23.4835 25.652 23.2365 25.5285C22.9969 25.4087 22.6728 25.3389 22.329 25.3389Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M19.3684 27.9454C19.5054 28.1852 19.4222 28.4906 19.1824 28.6276C18.7208 28.8914 18.3135 29.3632 18.1109 29.901C18.062 30.0381 18.0387 30.2352 18.0576 30.3984C18.0597 30.4174 18.0608 30.4365 18.0608 30.4557C18.0608 31.4831 18.8981 32.3794 19.9846 32.3794C20.2608 32.3794 20.4846 32.6033 20.4846 32.8794C20.4846 33.1556 20.2608 33.3794 19.9846 33.3794C18.3341 33.3794 17.0759 32.0298 17.061 30.4835C17.0308 30.1797 17.0703 29.8382 17.1714 29.5586L17.1734 29.553C17.456 28.7994 18.0176 28.1414 18.6863 27.7594C18.926 27.6224 19.2314 27.7057 19.3684 27.9454Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M26.452 27.2896C26.7281 27.2896 26.952 27.5135 26.952 27.7896V42.4131C26.952 42.6892 26.7281 42.9131 26.452 42.9131C26.1758 42.9131 25.952 42.6892 25.952 42.4131V27.7896C25.952 27.5135 26.1758 27.2896 26.452 27.2896Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M33.3857 40.3272C33.4222 40.0535 33.6737 39.8612 33.9474 39.8977C35.4152 40.0934 36.4819 41.3622 36.4819 42.8171C36.4819 42.8247 36.4819 42.8325 36.4819 42.8403C36.482 43.0682 36.4822 43.3783 36.3774 43.6965C35.994 44.9352 34.9257 45.8216 33.5581 45.8216C33.032 45.8216 32.5912 45.6671 32.1915 45.451C31.9211 45.5161 31.6122 45.5793 31.2959 45.5793C29.5655 45.5793 28.1298 44.1435 28.1298 42.4131C28.1298 42.1369 28.3536 41.9131 28.6298 41.9131C28.9059 41.9131 29.1298 42.1369 29.1298 42.4131C29.1298 43.5912 30.1178 44.5793 31.2959 44.5793C31.5468 44.5793 31.8093 44.5163 32.1442 44.4326C32.2728 44.4004 32.409 44.4207 32.5227 44.4889C32.8824 44.7047 33.1963 44.8216 33.5581 44.8216C34.4508 44.8216 35.1589 44.2563 35.4232 43.3972L35.4266 43.386C35.4778 43.2325 35.4819 43.0708 35.4819 42.8171C35.4819 41.8481 34.7712 41.0164 33.8152 40.8889C33.5415 40.8524 33.3492 40.6009 33.3857 40.3272Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M28.1298 27.7896C28.1298 26.0519 29.5918 24.6234 31.3376 24.6234H31.6653C31.6958 24.6234 31.7267 24.6262 31.7566 24.6317C33.2812 24.9132 34.4634 26.15 34.4634 27.7895C34.4634 28.0657 34.2395 28.2895 33.9634 28.2895C33.6872 28.2895 33.4634 28.0657 33.4634 27.7895C33.4634 26.6966 32.6967 25.841 31.6181 25.6234H31.3386C30.1304 25.6234 29.1298 26.6188 29.1298 27.7896C29.1298 28.0658 28.9059 28.2895 28.6298 28.2895C28.3536 28.2895 28.1298 28.0658 28.1298 27.7896Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M35.0794 36.8383C35.0794 36.5621 35.3033 36.3383 35.5794 36.3383C37.254 36.3383 38.743 37.4525 39.21 39.0402C39.2119 39.0467 39.2137 39.0533 39.2154 39.06C39.2174 39.0678 39.2193 39.0757 39.2213 39.0837C39.2982 39.3908 39.3919 39.7653 39.3919 40.1508C39.3919 41.1786 39.0788 42.1292 38.4723 42.8308C37.8595 43.5398 36.9725 43.9633 35.9026 43.9633C35.6264 43.9633 35.4026 43.7394 35.4026 43.4633C35.4026 43.1871 35.6264 42.9633 35.9026 42.9633C36.6909 42.9633 37.2986 42.6595 37.7158 42.1769C38.1394 41.6868 38.3919 40.9812 38.3919 40.1508C38.3919 39.9025 38.3303 39.6428 38.2478 39.3129C37.9037 38.1586 36.81 37.3383 35.5794 37.3383C35.3033 37.3383 35.0794 37.1144 35.0794 36.8383Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M36.1286 33.4451C36.1286 33.169 36.3525 32.9451 36.6286 32.9451C37.6376 32.9451 38.5767 33.3126 39.2443 33.9803C39.9685 34.7044 40.4411 35.6345 40.4411 36.7576C40.4411 37.8807 39.9685 38.8108 39.2443 39.5349C39.0491 39.7302 38.7325 39.7302 38.5372 39.5349C38.342 39.3397 38.342 39.0231 38.5372 38.8278C39.1058 38.2593 39.4411 37.5735 39.4411 36.7576C39.4411 35.9417 39.1058 35.2559 38.5372 34.6874C38.0738 34.224 37.397 33.9451 36.6286 33.9451C36.3525 33.9451 36.1286 33.7213 36.1286 33.4451Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M37.1602 29.4108C37.2911 29.1677 37.5943 29.0767 37.8374 29.2077C39.0444 29.8575 39.8778 31.1546 39.8778 32.6372C39.8778 33.3711 39.6929 34.0355 39.3091 34.6112C39.1559 34.841 38.8455 34.903 38.6157 34.7499C38.3859 34.5967 38.3239 34.2863 38.477 34.0565C38.7395 33.6627 38.8778 33.196 38.8778 32.6372C38.8778 31.5344 38.257 30.5693 37.3633 30.0881C37.1202 29.9572 37.0292 29.654 37.1602 29.4108Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M31.474 24.6035C31.8818 24.3946 32.3673 24.3002 32.833 24.3002C34.8819 24.3002 36.6455 26.0092 36.6455 28.1107V28.1927C36.6455 30.361 34.9787 32.0868 32.833 32.0868C32.5569 32.0868 32.333 31.8629 32.333 31.5868C32.333 31.3106 32.5569 31.0868 32.833 31.0868C34.4038 31.0868 35.6455 29.8323 35.6455 28.1935V28.1112C35.6455 26.5712 34.3389 25.3002 32.833 25.3002C32.4908 25.3002 32.1684 25.3713 31.9299 25.4935C31.6841 25.6194 31.3828 25.5222 31.2569 25.2764C31.131 25.0307 31.2282 24.7294 31.474 24.6035Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M35.7798 27.9699C35.9033 27.7229 36.2037 27.6228 36.4506 27.7463C37.2418 28.1418 37.7156 28.8268 37.9879 29.553C37.9901 29.5588 37.9921 29.5646 37.9941 29.5704C38.1008 29.8907 38.1007 30.2032 38.1005 30.4324C38.1005 30.4403 38.1005 30.448 38.1005 30.4557C38.1005 32.0136 36.8371 33.3795 35.1767 33.3795C34.9006 33.3795 34.6767 33.1556 34.6767 32.8795C34.6767 32.6033 34.9006 32.3795 35.1767 32.3795C36.2633 32.3795 37.1005 31.4831 37.1005 30.4557C37.1005 30.2064 37.0967 30.0459 37.048 29.8947C36.8354 29.3327 36.5022 28.8901 36.0034 28.6407C35.7564 28.5172 35.6563 28.2169 35.7798 27.9699Z"
                        fill="" />
                    </svg>
                  </span>
                </div>
                <div>
                  <h3 class="mb-0">Artificial Intelligence</h3>
                  <span class="text-gray-500">
                    <span class="fw-bold">8</span>
                    Courses
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <div class="card-hover-svg card card-body d-flex flex-column gap-4">
                <div class="">
                  <span class="icon-shape icon-xxl">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M61.3523 8.82849H2.48218C1.92989 8.82849 1.48218 9.27621 1.48218 9.82849V54.1715C1.48218 54.7238 1.92989 55.1715 2.48218 55.1715H61.3523C61.9046 55.1715 62.3523 54.7238 62.3523 54.1715V9.82849C62.3523 9.27621 61.9046 8.82849 61.3523 8.82849ZM2.48218 7.82849H61.3523C62.4569 7.82849 63.3523 8.72392 63.3523 9.82849V54.1715C63.3523 55.2761 62.4569 56.1715 61.3523 56.1715H2.48218C1.37761 56.1715 0.482178 55.2761 0.482178 54.1715V9.82849C0.482178 8.72392 1.37761 7.82849 2.48218 7.82849Z"
                        fill="" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M63.3526 18.1589H0.482178V17.3519H63.3526V18.1589Z" fill="" />
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M0.482178 18.1589V17.3519H63.3526V18.1589H0.482178Z" fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M10.8146 12.5902C10.8146 13.8008 11.8638 14.85 13.0744 14.85C14.285 14.85 15.3342 13.8008 15.3342 12.5902C15.3342 11.3796 14.285 10.3305 13.0744 10.3305C11.8638 10.3305 10.8146 11.3796 10.8146 12.5902ZM11.8638 12.5902C11.8638 11.9446 12.4288 11.3796 13.0744 11.3796C13.7201 11.3796 14.285 11.8639 14.285 12.5902C14.285 13.2359 13.7201 13.8008 13.0744 13.8008C12.4288 13.8008 11.8638 13.2359 11.8638 12.5902Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M24.3514 11.7909C24.3067 11.7363 24.2569 11.6865 24.2023 11.6418C23.9969 11.474 23.7234 11.3797 23.4029 11.3797C22.7572 11.3797 22.1923 11.9446 22.1923 12.5903C22.1923 13.2359 22.7572 13.8009 23.4029 13.8009C24.0485 13.8009 24.6135 13.2359 24.6135 12.5903C24.6135 12.2697 24.5192 11.9963 24.3514 11.7909ZM24.8411 10.8723C24.4451 10.5369 23.9398 10.3305 23.4029 10.3305C22.1923 10.3305 21.1431 11.3797 21.1431 12.5903C21.1431 13.8009 22.1923 14.8501 23.4029 14.8501C24.6942 14.8501 25.6626 13.8009 25.6626 12.5903C25.6626 12.0534 25.4562 11.5482 25.1209 11.1522C25.0356 11.0514 24.9418 10.9577 24.8411 10.8723Z"
                        fill="" />
                      <path
                        d="M52.6186 13.1552H36.9616C36.6388 13.1552 36.3966 12.9131 36.3966 12.5903C36.3966 12.2674 36.6388 12.0253 36.9616 12.0253H52.6186C52.9414 12.0253 53.1836 12.2674 53.1836 12.5903C53.1028 12.9131 52.8607 13.1552 52.6186 13.1552Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M53.1836 12.5903C53.1836 12.2674 52.9414 12.0253 52.6186 12.0253H36.9616C36.6388 12.0253 36.3966 12.2674 36.3966 12.5903C36.3966 12.9131 36.6388 13.1552 36.9616 13.1552H52.6186C52.8607 13.1552 53.1028 12.9131 53.1836 12.5903Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M32.1997 32.0403L37.3649 37.2055L43.9021 30.6683L38.7369 25.5031L32.1997 32.0403ZM38.7369 26.9173L33.6139 32.0403L37.3649 35.7913L42.4879 30.6683L38.7369 26.9173ZM22.2933 43.3609L21.1201 48.3469L26.039 47.1171L30.0591 43.097L26.3081 39.346L22.2933 43.3609ZM21.385 42.8549L19.7709 49.7149L26.5503 48.0201L31.4733 43.097L26.3081 37.9318L21.385 42.8549Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M21.6645 46.0421C21.9504 46.1945 22.2986 46.38 22.6215 46.6923C23.0897 47.1451 23.3627 47.6204 23.5452 48.0766L22.6167 48.448C22.4764 48.0971 22.2749 47.7483 21.9263 47.4111C21.7101 47.202 21.539 47.1113 21.3014 46.9853C21.1839 46.923 21.0502 46.8522 20.8868 46.7541L21.4013 45.8966C21.4798 45.9437 21.5687 45.9911 21.6645 46.0421Z"
                        fill="" />
                      <path
                        d="M26.0343 48.1528L21.2739 43.3608C21.2739 43.3608 21.2749 43.0834 21.4001 42.8375C21.6423 42.5954 21.7889 42.4516 21.7889 42.4516L26.9541 47.6168C26.9541 47.6168 26.9541 47.6168 26.5703 48.0014C26.0722 48.1528 26.0343 48.1528 26.0343 48.1528Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M21.7889 42.4516C21.7889 42.4516 21.6423 42.5954 21.4001 42.8375C21.3992 42.8394 21.3982 42.8413 21.3972 42.8433C21.2885 43.0605 21.2756 43.3003 21.2741 43.3511C21.2739 43.3574 21.2739 43.3608 21.2739 43.3608L26.0343 48.1528C26.0343 48.1528 26.0392 48.1528 26.0688 48.1457C26.1212 48.1331 26.2512 48.0984 26.5691 48.0018C26.5695 48.0017 26.5699 48.0016 26.5703 48.0014L26.9541 47.6168L21.7889 42.4516ZM26.2462 46.9104C26.2462 46.9104 26.2463 46.9104 26.2462 46.9104V46.9104Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M44.6003 28.4213L41.0208 24.8418C41.0155 24.8388 40.9939 24.8285 40.9475 24.8285C40.888 24.8285 40.8249 24.8474 40.7735 24.882L39.2745 26.3806L43.0388 30.1194L44.5681 28.5894C44.6319 28.5255 44.6385 28.4735 44.6385 28.459C44.6385 28.4563 44.6384 28.4544 44.6382 28.4531C44.6375 28.4524 44.6365 28.4515 44.6352 28.4504L44.6003 28.4213ZM43.0414 31.5313L37.8578 26.3829L40.1102 24.1311C40.5944 23.7276 41.3208 23.7276 41.7243 24.1311L45.2754 27.6822C45.7596 28.0857 45.7596 28.8121 45.2754 29.2963L43.0414 31.5313Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M24.0738 23.9021L18.2272 29.7438L39.7411 51.276L45.5878 45.4343L24.0738 23.9021ZM24.0744 22.4879L47.002 45.4349L39.7405 52.6902L16.813 29.7432L24.0744 22.4879Z"
                        fill="" />
                      <path d="M19.4083 30.9396L22.355 28.0051C22.5971 27.763 22.9199 27.763 23.0814 28.0051C23.3235 28.2472 23.3235 28.5701 23.0814 28.7315L20.1334 31.671L19.4083 30.9396Z" fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M22.355 28.0051L19.4083 30.9396L20.1334 31.671L23.0814 28.7315C23.3235 28.5701 23.3235 28.2472 23.0814 28.0051C22.9199 27.763 22.5971 27.763 22.355 28.0051Z"
                        fill="" />
                      <path
                        d="M22.4999 34.0448L22.2279 33.7611L21.9833 33.5184L23.8064 31.7176C24.0485 31.4754 24.3714 31.4754 24.5328 31.7176C24.7749 31.9597 24.7749 32.2825 24.5328 32.4439L22.7178 34.2561L22.4999 34.0448Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M22.4999 34.0448L22.7178 34.2561L24.5328 32.4439C24.7749 32.2825 24.7749 31.9597 24.5328 31.7176C24.3714 31.4754 24.0485 31.4754 23.8064 31.7176L21.9833 33.5184L22.2279 33.7611L22.4999 34.0448Z"
                        fill="" />
                      <path
                        d="M25.2128 36.7593L24.9255 36.4598L24.654 36.1918L27.6014 33.2511C27.8435 33.009 28.1663 33.009 28.3277 33.2511C28.4891 33.4932 28.5698 33.816 28.3277 33.9774L25.3894 36.9264L25.2128 36.7593Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M25.2128 36.7593L25.3894 36.9264L28.3277 33.9774C28.5698 33.816 28.4891 33.4932 28.3277 33.2511C28.1663 33.009 27.8435 33.009 27.6014 33.2511L24.654 36.1918L24.9255 36.4598L25.2128 36.7593Z"
                        fill="" />
                      <path
                        d="M27.7971 39.3474L27.4932 39.0353L27.2316 38.7862L29.0529 37.0442C29.295 36.802 29.6179 36.802 29.7793 37.0442C30.0214 37.2863 30.0214 37.6091 29.7793 37.7705L27.9673 39.5113L27.7971 39.3474Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M27.9673 39.5113L29.7793 37.7705C30.0214 37.6091 30.0214 37.2863 29.7793 37.0442C29.6179 36.802 29.295 36.802 29.0529 37.0442L27.2316 38.7862L27.4932 39.0353L27.7971 39.3474L27.9673 39.5113Z"
                        fill="" />
                      <path
                        d="M30.444 42.0021L30.1597 41.7026L29.8954 41.4378L32.8451 38.497C33.0872 38.2549 33.41 38.2549 33.5714 38.497C33.8135 38.7391 33.8135 39.062 33.5714 39.2234L30.6237 42.166L30.444 42.0021Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M30.444 42.0021L30.6237 42.166L33.5714 39.2234C33.8135 39.062 33.8135 38.7391 33.5714 38.497C33.41 38.2549 33.0872 38.2549 32.8451 38.497L29.8954 41.4378L30.1597 41.7026L30.444 42.0021Z"
                        fill="" />
                      <path
                        d="M33.0102 44.5587L32.484 44.0259L34.2988 42.2901C34.5409 42.048 34.8637 42.048 35.0251 42.2901C35.2672 42.5322 35.2672 42.8551 35.0251 43.0165L33.2025 44.7447L33.0102 44.5587Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M33.2025 44.7447L35.0251 43.0165C35.2672 42.8551 35.2672 42.5322 35.0251 42.2901C34.8637 42.048 34.5409 42.048 34.2988 42.2901L32.484 44.0259L33.0102 44.5587L33.2025 44.7447Z"
                        fill="" />
                      <path
                        d="M35.6592 47.2101L35.1295 46.6805L38.0919 43.7429C38.334 43.5008 38.6568 43.5008 38.8182 43.7429C39.0604 43.985 39.0604 44.3078 38.8182 44.4693L35.8641 47.4056L35.6592 47.2101Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M38.0919 43.7429L35.1295 46.6805L35.6592 47.2101L35.8641 47.4056L38.8182 44.4693C39.0604 44.3078 39.0604 43.985 38.8182 43.7429C38.6568 43.5008 38.334 43.5008 38.0919 43.7429Z"
                        fill="" />
                      <path
                        d="M38.2666 49.8267L37.9833 49.5304L37.7182 49.275L39.5447 47.5361C39.7868 47.294 40.1096 47.294 40.271 47.5361C40.5131 47.7782 40.5131 48.101 40.271 48.2624L38.4432 49.9969L38.2666 49.8267Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M38.4432 49.9969L40.271 48.2624C40.5131 48.101 40.5131 47.7782 40.271 47.5361C40.1096 47.294 39.7868 47.294 39.5447 47.5361L37.7182 49.275L37.9833 49.5304L38.2666 49.8267L38.4432 49.9969Z"
                        fill="" />
                    </svg>
                  </span>
                </div>
                <div>
                  <h3 class="mb-0">UI / UX Design</h3>
                  <span class="text-gray-500">
                    <span class="fw-bold">21</span>
                    Courses
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <div class="card-hover-svg card card-body d-flex flex-column gap-4">
                <div class="">
                  <span class="icon-shape icon-xxl">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M46.7267 33.6867H17.353C16.8007 33.6867 16.353 34.1344 16.353 34.6867V53.0706C16.353 53.6229 16.8007 54.0706 17.353 54.0706H46.7267C47.279 54.0706 47.7267 53.6229 47.7267 53.0706V34.6867C47.7267 34.1344 47.279 33.6867 46.7267 33.6867ZM17.353 32.6867H46.7267C47.8313 32.6867 48.7267 33.5822 48.7267 34.6867V53.0706C48.7267 54.1751 47.8313 55.0706 46.7267 55.0706H17.353C16.2484 55.0706 15.353 54.1751 15.353 53.0706V34.6867C15.353 33.5822 16.2484 32.6867 17.353 32.6867Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M37.7701 39.0693H24.8726V49.7071H37.7701L37.7701 39.0693ZM24.8726 38.0693H37.7701C38.3223 38.0693 38.7701 38.5171 38.7701 39.0693V49.7071C38.7701 50.2594 38.3223 50.7071 37.7701 50.7071H24.8726C24.3203 50.7071 23.8726 50.2594 23.8726 49.7071V39.0693C23.8726 38.5171 24.3203 38.0693 24.8726 38.0693Z"
                        fill="" />
                      <path
                        d="M28.7717 47.2099C28.6808 47.2099 28.6354 47.1644 28.5445 47.119L26.3185 44.893C26.1822 44.7567 26.1822 44.575 26.3185 44.4841L28.5445 42.2581C28.6808 42.1218 28.8625 42.1218 28.9534 42.2581C29.0897 42.3944 29.0897 42.5761 28.9534 42.667L26.9091 44.7113L28.9534 46.7556C29.0897 46.8919 29.0897 47.0736 28.9534 47.1644C28.9534 47.1644 28.8626 47.2099 28.7717 47.2099Z"
                        fill="" />
                      <path
                        d="M33.9042 47.2099C33.8134 47.2099 33.7679 47.1644 33.6771 47.119C33.5408 46.9827 33.5408 46.801 33.6771 46.7102L35.7214 44.6659L33.6771 42.6216C33.5408 42.4853 33.5408 42.3036 33.6771 42.2127C33.8134 42.0764 33.9951 42.0764 34.0859 42.2127L36.3119 44.4387C36.4482 44.575 36.4482 44.7567 36.3119 44.8476L34.0859 47.0736C34.0405 47.1644 33.9496 47.2099 33.9042 47.2099Z"
                        fill="" />
                      <path
                        d="M29.953 48.4818C29.8928 48.4818 29.8298 48.4757 29.7836 48.4372C29.6939 48.3625 29.6445 48.2262 29.6804 48.1183L32.6333 40.5772C32.6787 40.4409 32.8604 40.35 32.9967 40.3954C33.133 40.4409 33.2238 40.6226 33.1784 40.7589L30.2255 48.3001C30.1801 48.3909 30.0438 48.4818 29.953 48.4818Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M12.525 54.7776V56.6165C12.525 58.0468 13.4947 59.2727 14.626 59.2727H49.4543C50.5856 59.2727 51.5553 58.0468 51.5553 56.6165V54.7776C51.5553 54.369 51.3128 54.0625 50.9896 54.0625H13.1714C12.8482 54.0625 12.6058 54.369 12.525 54.7776ZM13.525 55.0625V56.6165C13.525 57.1117 13.6946 57.556 13.9355 57.8606C14.1794 58.1689 14.4381 58.2727 14.626 58.2727H49.4543C49.6422 58.2727 49.9008 58.1689 50.1447 57.8606C50.3856 57.556 50.5553 57.1117 50.5553 56.6165V55.0625H13.525Z"
                        fill="" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M8.793 20.3119L8.46154 20.4837C4.47117 22.5528 1.64771 27.5968 1.64771 32.4445C1.64771 35.8537 3.29557 39.4162 5.87404 42.141C8.45322 44.8665 11.8502 46.6364 15.2235 46.6364H15.3503L15.3436 34.688C15.343 33.583 16.2386 32.6869 17.3436 32.6869H46.7297C47.8343 32.6869 48.7297 33.5823 48.7297 34.6869V46.6364H48.9419C52.3164 46.6364 55.7341 44.8654 58.3336 42.1383C60.9324 39.412 62.5972 35.8502 62.5972 32.4445C62.5972 28.2739 60.5323 23.8184 57.4991 21.525L56.9867 21.1375L57.126 20.5104C57.2594 19.9102 57.2638 19.2175 57.2638 18.3839C57.2638 11.3402 51.5701 5.64648 44.5265 5.64648C38.4635 5.64648 33.3643 9.91322 32.0888 15.6904L31.6655 17.6076L30.3637 16.1378C28.0505 13.5261 24.6877 11.9495 20.8497 11.9495H20.836C15.3758 11.8747 10.8069 15.2368 8.93071 19.9648L8.793 20.3119ZM47.7297 47.6364V34.6869C47.7297 34.1346 47.282 33.6869 46.7297 33.6869H17.3436C16.7911 33.6869 16.3433 34.135 16.3436 34.6875L16.3508 47.6364H15.2235C7.78911 47.6364 0.647705 39.8788 0.647705 32.4445C0.647705 27.2728 3.63758 21.8586 8.00122 19.596C10.0214 14.5051 14.9507 10.8687 20.8497 10.9495C24.5401 10.9495 27.8417 12.3102 30.2904 14.6255C30.5762 14.8958 30.8505 15.1791 31.1123 15.4748C31.1979 15.0874 31.2994 14.7062 31.4161 14.332C33.1744 8.69682 38.3886 4.64648 44.5265 4.64648C52.1224 4.64648 58.2638 10.7879 58.2638 18.3839C58.2638 19.1919 58.2638 20 58.1022 20.7273C61.4154 23.2324 63.5972 28 63.5972 32.4445C63.5972 39.8788 56.3762 47.6364 48.9419 47.6364H47.7297Z"
                        fill="" />
                      <path
                        d="M15.6753 22.505C15.5137 22.505 15.4329 22.4243 15.3521 22.3435C15.1097 22.1818 15.1097 21.8586 15.2713 21.6162C18.5844 17.899 22.4632 19.4343 22.4632 19.4343C22.7056 19.5151 22.8673 19.8384 22.7864 20.0808C22.7056 20.3232 22.3824 20.4849 22.14 20.404C21.9784 20.3232 18.9077 19.1919 16.1602 22.2626C15.9178 22.4242 15.8369 22.505 15.6753 22.505Z"
                        fill="" />
                      <path
                        d="M50.2641 16.9291C50.1025 16.9291 49.9409 16.8483 49.8601 16.7675C47.0318 13.616 43.8803 14.9089 43.8803 14.9089C43.6379 14.9897 43.3146 14.9089 43.2338 14.5857C43.153 14.3433 43.2338 14.02 43.5571 13.9392C43.5571 13.9392 47.4359 12.4039 50.749 16.1211C50.9106 16.3635 50.9106 16.6867 50.6682 16.8483C50.5066 16.9291 50.4258 16.9291 50.2641 16.9291Z"
                        fill="" />
                      <path
                        d="M33.778 57.3624H30.384C30.0608 57.3624 29.8184 57.12 29.8184 56.7968C29.8184 56.4735 30.0608 56.2311 30.384 56.2311H33.778C34.1012 56.2311 34.3436 56.4735 34.3436 56.7968C34.2628 57.12 34.0204 57.3624 33.778 57.3624Z"
                        fill="" />
                    </svg>
                  </span>
                </div>
                <div>
                  <h3 class="mb-0">Cloud Computing</h3>
                  <span class="text-gray-500">
                    <span class="fw-bold">18</span>
                    Courses
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <div class="card-hover-svg card card-body d-flex flex-column gap-4">
                <div class="">
                  <span class="icon-shape icon-xxl">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_7928_12777)">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M1.52479 35.7573L1.52482 35.7626C1.52481 50.5042 13.4582 62.5148 28.277 62.5148C43.0168 62.5148 55.0292 50.5023 55.0292 35.7626C55.0292 21.0228 43.0168 9.01035 28.277 9.01035C13.4515 9.01035 1.44684 20.9456 1.52479 35.7573ZM0.524806 35.7626C0.524806 51.0546 12.9041 63.5148 28.277 63.5148C43.569 63.5148 56.0292 51.0546 56.0292 35.7626C56.0292 20.4705 43.569 8.01035 28.277 8.01035C12.9041 8.01035 0.443896 20.3896 0.524806 35.7626Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M47.0189 35.7624C47.0189 25.3945 38.5692 17.0203 28.2768 17.0203C17.9062 17.0203 9.53474 25.3918 9.53474 35.7624C9.53474 46.133 17.9062 54.5045 28.2768 54.5045C38.6474 54.5045 47.0189 46.133 47.0189 35.7624ZM48.0189 35.7624C48.0189 24.8396 39.1188 16.0203 28.2768 16.0203C17.3539 16.0203 8.53474 24.8396 8.53474 35.7624C8.53474 46.6853 17.3539 55.5045 28.2768 55.5045C39.1997 55.5045 48.0189 46.6853 48.0189 35.7624Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M16.9796 35.7624C16.9796 42.0066 22.0338 47.0607 28.278 47.0607C34.5222 47.0607 39.5764 42.0066 39.5764 35.7624C39.5764 29.5182 34.5222 24.464 28.278 24.464C22.0228 24.464 16.9055 29.5264 16.9796 35.7505L16.9796 35.7624ZM15.9796 35.7624C15.9796 42.5588 21.4816 48.0607 28.278 48.0607C35.0745 48.0607 40.5764 42.5588 40.5764 35.7624C40.5764 28.9659 35.0745 23.464 28.278 23.464C21.4816 23.464 15.8987 28.9659 15.9796 35.7624Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M23.4525 35.75V35.7625C23.4525 38.4466 25.5939 40.588 28.2781 40.588C30.9622 40.588 33.1036 38.4466 33.1036 35.7625C33.1036 33.0783 30.9622 30.9369 28.2781 30.9369C25.5704 30.9369 23.3862 33.0957 23.4522 35.7375L23.4525 35.75ZM34.1036 35.7625C34.1036 32.5261 31.5145 29.9369 28.2781 29.9369C25.0416 29.9369 22.3716 32.5261 22.4525 35.7625C22.4525 38.9989 25.0416 41.588 28.2781 41.588C31.5145 41.588 34.1036 38.9989 34.1036 35.7625Z"
                          fill="" />
                        <path
                          d="M28.2782 36.2479C28.1164 36.2479 28.0355 36.167 27.8737 36.0861C27.631 35.8433 27.631 35.5197 27.8737 35.3579L60.2378 2.99378C60.4805 2.75105 60.8041 2.75105 60.966 2.99378C61.2087 3.23651 61.2087 3.56016 60.966 3.72198L28.6019 36.0861C28.521 36.2479 28.3591 36.2479 28.2782 36.2479Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M27.8737 35.3579C27.631 35.5197 27.631 35.8433 27.8737 36.0861C27.917 36.1078 27.9546 36.1294 27.9895 36.1496C28.0847 36.2045 28.1598 36.2479 28.2782 36.2479C28.3591 36.2479 28.521 36.2479 28.6019 36.0861L60.966 3.72198C61.2087 3.56016 61.2087 3.23651 60.966 2.99378C60.8041 2.75105 60.4805 2.75105 60.2378 2.99378L27.8737 35.3579ZM27.9099 35.3941C27.9072 35.3961 27.9046 35.3982 27.902 35.4003C27.8997 35.4021 27.8975 35.4039 27.8953 35.4057C27.8118 35.474 27.749 35.5558 27.7074 35.6389L27.78 35.4937L60.3289 2.94486L60.4113 2.88993C60.357 2.92609 60.3091 2.97232 60.2695 3.02552"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M57.6471 6.31092L55.5435 0.566284L52.7925 3.31724L54.8962 9.06186L60.7217 11.1655L63.4727 8.41457L57.6471 6.31092ZM61.6525 8.82051L56.8686 7.09298L55.143 2.38092L53.9511 3.57289L55.6747 8.2798L60.4638 10.0092L61.6525 8.82051Z"
                          fill="" />
                      </g>
                      <defs>
                        <clipPath id="clip0_7928_12777">
                          <rect width="64" height="64" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>
                <div>
                  <h3 class="mb-0">Business</h3>
                  <span class="text-gray-500">
                    <span class="fw-bold">28</span>
                    Courses
                  </span>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12">
              <div class="card-hover-svg card card-body d-flex flex-column gap-4">
                <div class="">
                  <span class="icon-shape icon-xxl">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_7928_12791)">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M62.4344 31.9193C62.4344 15.0979 48.8215 1.48499 32 1.48499C15.1802 1.48499 1.56567 15.177 1.56567 31.9193C1.56567 48.7408 15.1786 62.3537 32 62.3537C48.8215 62.3537 62.4344 48.7408 62.4344 31.9193ZM63.4344 31.9193C63.4344 14.5456 49.3738 0.484985 32 0.484985C14.6263 0.484985 0.565674 14.6264 0.565674 31.9193C0.565674 49.2931 14.6263 63.3537 32 63.3537C49.3738 63.3537 63.4344 49.2931 63.4344 31.9193Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M50.5549 31.9193C50.5549 21.6632 42.2554 13.3637 31.9994 13.3637C21.745 13.3637 13.4438 21.7118 13.4438 31.9193C13.4438 42.1753 21.7433 50.4748 31.9994 50.4748C42.2554 50.4748 50.5549 42.1753 50.5549 31.9193ZM51.5549 31.9193C51.5549 21.111 42.8077 12.3637 31.9994 12.3637C21.191 12.3637 12.4438 21.1612 12.4438 31.9193C12.4438 42.7276 21.191 51.4748 31.9994 51.4748C42.8077 51.4748 51.5549 42.7276 51.5549 31.9193Z"
                          fill="" />
                        <path
                          d="M31.9978 58.5862C17.3715 58.5862 5.41193 46.6266 5.41193 32.0004C5.41193 31.6771 5.65435 31.5155 5.89678 31.5155C6.22001 31.5155 6.38163 31.758 6.38163 32.0004C6.46244 46.061 17.9372 57.5357 31.9978 57.5357C32.321 57.5357 32.4826 57.7782 32.4826 58.0206C32.4826 58.263 32.2402 58.5862 31.9978 58.5862ZM58.018 32.4852C57.6948 32.4852 57.5331 32.2428 57.5331 32.0004C57.4523 17.9398 46.0584 6.46503 31.9978 6.46503C31.6746 6.46503 31.5129 6.2226 31.5129 5.98018C31.5129 5.73776 31.7554 5.49533 31.9978 5.49533C46.6241 5.49533 58.5837 17.4549 58.5837 32.0812C58.5028 32.2428 58.2604 32.4852 58.018 32.4852Z"
                          fill="" />
                        <path
                          d="M37.8759 30.1563H26.0385C25.8299 30.1563 25.7256 29.9935 25.7256 29.8307C25.7256 29.6136 25.882 29.5051 26.0385 29.5051H37.5109V26.6834C37.5109 23.4819 35.0078 20.8772 31.9311 20.8772C28.8544 20.8772 26.3514 23.4819 26.3514 26.6834C26.3514 26.9005 26.1949 27.009 26.0385 27.009C25.8299 27.009 25.7256 26.8462 25.7256 26.6834C25.7256 23.102 28.5416 20.1718 31.9833 20.1718C35.425 20.1718 38.241 23.102 38.241 26.6834V29.885C38.241 29.9935 38.0845 30.1563 37.8759 30.1563Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M37.8759 30.3563H26.0385C25.8771 30.3563 25.7428 30.291 25.6518 30.1844C25.5644 30.0821 25.5256 29.9526 25.5256 29.8307C25.5256 29.6706 25.585 29.5346 25.6876 29.4397C25.7871 29.3477 25.9154 29.3051 26.0385 29.3051H37.3109V26.6834C37.3109 23.5847 34.8899 21.0772 31.9311 21.0772C28.9723 21.0772 26.5514 23.5847 26.5514 26.6834C26.5514 26.8435 26.492 26.9795 26.3894 27.0744C26.2899 27.1665 26.1615 27.209 26.0385 27.209C25.8771 27.209 25.7428 27.1437 25.6518 27.0372C25.5644 26.9348 25.5256 26.8053 25.5256 26.6834C25.5256 22.9991 28.4237 19.9718 31.9833 19.9718C35.5429 19.9718 38.441 22.9991 38.441 26.6834V29.885C38.441 30.0232 38.3524 30.1419 38.2646 30.215C38.1682 30.2953 38.0327 30.3563 37.8759 30.3563ZM37.5109 26.6834C37.5109 23.4819 35.0078 20.8772 31.9311 20.8772C28.8544 20.8772 26.3514 23.4819 26.3514 26.6834C26.3514 26.9005 26.1949 27.009 26.0385 27.009C25.8299 27.009 25.7256 26.8462 25.7256 26.6834C25.7256 23.102 28.5416 20.1718 31.9833 20.1718C35.425 20.1718 38.241 23.102 38.241 26.6834V29.885C38.241 29.9935 38.0845 30.1563 37.8759 30.1563H26.0385C25.8299 30.1563 25.7256 29.9935 25.7256 29.8307C25.7256 29.6136 25.882 29.5051 26.0385 29.5051H37.5109V26.6834Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M21.4418 29.3534H42.4755V41.7024C42.4755 43.3397 41.0155 44.5858 39.4418 44.5858H24.3712C22.868 44.5858 21.4418 43.4531 21.4418 41.7989V29.3534ZM22.4418 30.3534V41.7989C22.4418 42.8131 23.3283 43.5858 24.3712 43.5858H39.4418C40.5369 43.5858 41.4755 42.7165 41.4755 41.7024V30.3534H22.4418Z"
                          fill="" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M32.0386 33.2912C31.5541 33.2912 31.1053 33.4929 30.7756 33.8226C30.4458 34.1524 30.2441 34.6012 30.2441 35.0856C30.2441 35.4862 30.3328 35.7495 30.5148 35.9315L30.5498 35.9665L30.5773 36.0077C30.7525 36.2706 30.953 36.4608 31.1671 36.5679L31.4435 36.7061V38.3924H32.6858V36.7475L32.9085 36.5991C33.2001 36.4047 33.3972 36.2398 33.552 36.0077C33.713 35.7662 33.833 35.4441 33.833 35.0856C33.833 34.6012 33.6313 34.1524 33.3016 33.8226C32.9719 33.4929 32.5231 33.2912 32.0386 33.2912ZM30.0684 33.1155C30.5731 32.6109 31.2715 32.2912 32.0386 32.2912C32.8056 32.2912 33.5041 32.6109 34.0087 33.1155C34.5133 33.6202 34.833 34.3186 34.833 35.0856C34.833 35.6659 34.6402 36.1781 34.384 36.5624C34.1804 36.8678 33.9396 37.0881 33.6858 37.2756V39.3924H30.4435V37.2969C30.1745 37.1078 29.9521 36.8641 29.7719 36.6017C29.3575 36.1635 29.2441 35.609 29.2441 35.0856C29.2441 34.3186 29.5638 33.6202 30.0684 33.1155Z"
                          fill="" />
                        <path
                          d="M51.395 49.8587C51.2334 49.8587 51.1526 49.7779 51.0718 49.6971C50.8294 49.5355 50.8294 49.1315 50.991 48.9698C53.7385 45.9799 55.6779 42.2628 56.6476 38.384C56.7284 38.1416 56.9708 37.8991 57.294 37.9799C57.5364 38.0607 57.7789 38.3032 57.6981 38.6264C56.6476 42.6668 54.6274 46.5456 51.7991 49.6971C51.6375 49.8587 51.5566 49.8587 51.395 49.8587ZM7.35463 23.9193C7.27382 23.9193 7.27382 23.9193 7.19301 23.9193C6.95059 23.8385 6.78897 23.5153 6.86978 23.2729C9.53645 15.6769 15.3546 9.77792 22.9506 7.03044C23.193 6.94963 23.5162 7.11125 23.5971 7.35367C23.6779 7.5961 23.5162 7.91933 23.2738 8.00014C16.1627 10.586 10.3445 16.4042 7.83948 23.5961C7.75867 23.8385 7.59705 23.9193 7.35463 23.9193Z"
                          fill="" />
                      </g>
                      <defs>
                        <clipPath id="clip0_7928_12791">
                          <rect width="64" height="64" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </span>
                </div>
                <div>
                  <h3 class="mb-0">Cyber Security</h3>
                  <span class="text-gray-500">
                    <span class="fw-bold">7</span>
                    Courses
                  </span>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="">
                <a href="#!" class="btn btn-outline-primary">
                  <span>Show All Category</span>

                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--explore categories-->
      <!--Now Courses-->
      <section class="py-xl-8 py-6">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-8 col-12 mx-auto">
              <div class="d-flex flex-column gap-2 text-center mb-xl-7 mb-5">
                <h2 class="mb-0 h1">Trending Now Courses</h2>
                <p class="mb-0">Whether you want to advance your career, learn a new skill, or explore a passion, we have the right course for you.</p>
              </div>
            </div>
          </div>
          <div class="position-relative">
            <ul class="controls" id="sliderFirstControls">
              <li class="prev">
                <i class="fe fe-chevron-left"></i>
              </li>
              <li class="next">
                <i class="fe fe-chevron-right"></i>
              </li>
            </ul>
            <div class="sliderFirst py-3">
              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/python.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Web Development</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">Master the basics of data analysis with Python</a>
                      </h3>

                      <small class="text-secondary">Sandip Chauhan</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">4.5</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(3,124)</span>
                      </div>
                    </div>
                    <div>
                      <span class="fw-semibold text-dark">$399</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/figma.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Design</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">Figma UI UX Design Course for the Beginner</a>
                      </h3>

                      <small class="text-secondary">Jitu Chauhan</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">5.0</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(245)</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row gap-2 align-items-center">
                      <span class="fw-semibold text-dark">$599</span>
                      <span class="fw-semibold text-gray-400"><del>$3,499</del></span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/nuxt.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Design</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">About the Nuxt.js Fundamentals course</a>
                      </h3>

                      <small class="text-secondary">Manasvi Suthar</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">4.5</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(121)</span>
                      </div>
                    </div>
                    <div>
                      <span class="fw-semibold text-dark">$899</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/aws.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Web Development</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">AWS Fundamentals Specialization</a>
                      </h3>

                      <small class="text-secondary">Anita Parmar</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">4.5</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(13,245)</span>
                      </div>
                    </div>
                    <div>
                      <span class="fw-semibold text-dark">$199</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/mongodb.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Design</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">MongoDB - The Complete Developer's Guide 2024</a>
                      </h3>

                      <small class="text-secondary">Manasvi Suthar</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">4.5</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(121)</span>
                      </div>
                    </div>
                    <div>
                      <span class="fw-semibold text-dark">$899</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/supabase.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Programming</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">Supabase From Scratch: Serverless Database</a>
                      </h3>

                      <small class="text-secondary">Anita Parmar</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">4.5</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(13,245)</span>
                      </div>
                    </div>
                    <div>
                      <span class="fw-semibold text-dark">$199</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/nuxt.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Design</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">About the Nuxt.js Fundamentals course</a>
                      </h3>

                      <small class="text-secondary">Manasvi Suthar</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">4.5</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(121)</span>
                      </div>
                    </div>
                    <div>
                      <span class="fw-semibold text-dark">$899</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/bootstrap.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Programming</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">Create Modern Website Using HTML,CSS And Bootstrap</a>
                      </h3>

                      <small class="text-secondary">Anita Parmar</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">4.5</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(13,245)</span>
                      </div>
                    </div>
                    <div>
                      <span class="fw-semibold text-dark">$199</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/nuxt.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Design</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">About the Nuxt.js Fundamentals course</a>
                      </h3>

                      <small class="text-secondary">Manasvi Suthar</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">4.5</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(121)</span>
                      </div>
                    </div>
                    <div>
                      <span class="fw-semibold text-dark">$899</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card card-lift">
                  <a href="#!">
                    <img src="<?php echo BASE; ?>App/Asset/images/course/bootstrap.jpg" alt="figma" class="card-img-top img-fluid w-100" />
                  </a>
                  <div class="card-body d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <div>
                        <span class="badge text-light-emphasis bg-light-subtle border border-light-subtle rounded-pill">Web Development</span>
                      </div>
                      <h3 class="mb-0 h4">
                        <a href="#!" class="text-inherit">Create Modern Website Using HTML,CSS And Bootstrap</a>
                      </h3>

                      <small class="text-secondary">Anita Parmar</small>
                      <div class="lh-1">
                        <span class="text-secondary fw-semibold">4.5</span>
                        <span class="align-text-top">
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                            <path
                              d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </span>

                        <span class="text-gray-500">(13,245)</span>
                      </div>
                    </div>
                    <div>
                      <span class="fw-semibold text-dark">$199</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="text-center mt-8">
                <a href="#!" class="btn btn-outline-primary">
                  <span>Show All Courses</span>

                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Now Courses-->
      <!--Testimonials-->
      <section class="py-xl-8 py-6 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="d-flex flex-column gap-4 text-center mb-xl-7 mb-5">
                <div class="d-flex flex-column gap-2">
                  <h2 class="h1 mb-0">The reviews speak for themselves</h2>
                  <p class="mb-0">From critical skills to technical topics, Udemy supports your professional development.</p>
                </div>

                <div class="lh-1 d-flex flex-row gap-3 align-items-center justify-content-center">
                  <span>4.5/5</span>
                  <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                    </svg>
                  </span>

                  <span class="text-primary">8,500+ reviews</span>
                </div>
              </div>
            </div>
          </div>

          <div class="row gy-5">
            <div class="col-lg-4 col-md-6 col-12">
              <div class="card shadow-lg">
                <div class="card-body p-5 d-flex flex-column gap-3">
                  <div class="lh-1">
                    <span class="align-text-top">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-half text-warning" viewBox="0 0 16 16">
                        <path
                          d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z" />
                      </svg>
                    </span>

                    <span class="ms-2">4.5/5</span>
                  </div>
                  <div class="d-flex flex-column gap-6">
                    <div class="d-flex flex-column gap-2">
                      <span class="h4 mb-0">Transformative Learning Experience!</span>
                      <p class="mb-0">
                        "I was struggling to grasp the concepts in my subject until I enrolled in this course. The interactive lessons and the support from the instructors were incredible. I feel more
                        confident and prepared for my exams now. Highly recommend it to anyone looking to excel!"
                      </p>
                    </div>
                    <div class="d-flex flex-column gap-4">
                      <div class="d-flex flex-row gap-3 align-items-center">
                        <div>
                          <img src="<?php echo BASE; ?>App/Asset/images/avatar/avatar-1.jpg" alt="avatar" class="rounded-circle icon-shape icon-xl" />
                        </div>
                        <div class="d-flex flex-column">
                          <span>Jitu Chauhan</span>
                          <span class="text-secondary">Technical Co-Founder, CTO at Block</span>
                        </div>
                      </div>
                      <div class="d-flex flex-row gap-2 align-items-center">
                        <a href="#!" class="icon-link icon-link-hover">
                          <span>View this Bootstrap 5 course</span>

                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="card shadow-lg">
                <div class="card-body p-5 d-flex flex-column gap-3">
                  <div class="lh-1">
                    <span class="align-text-top">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                    </span>

                    <span class="ms-2">5.0/5</span>
                  </div>
                  <div class="d-flex flex-column gap-6">
                    <div class="d-flex flex-column gap-2">
                      <span class="h4 mb-0">Top-Notch Content and Teaching!</span>
                      <p class="mb-0">
                        "This course exceeded my expectations. The material is presented in a clear and engaging way, making even the most complex topics easy to understand. The quizzes and
                        assignments helped reinforce my learning. I can’t thank the team enough for this fantastic resource."
                      </p>
                    </div>
                    <div class="d-flex flex-column gap-4">
                      <div class="d-flex flex-row gap-3 align-items-center">
                        <div>
                          <img src="<?php echo BASE; ?>App/Asset/images/avatar/avatar-4.jpg" alt="avatar" class="rounded-circle icon-shape icon-xl" />
                        </div>
                        <div class="d-flex flex-column">
                          <span>Vallabh Sompura</span>
                          <span class="text-secondary">College Freshman</span>
                        </div>
                      </div>
                      <div class="d-flex flex-row gap-2 align-items-center">
                        <a href="#!" class="icon-link icon-link-hover">
                          <span>View this Figma UI / UX course</span>

                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="card shadow-lg">
                <div class="card-body p-5 d-flex flex-column gap-3">
                  <div class="lh-1">
                    <span class="align-text-top">
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                        <path
                          d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                      </svg>
                    </span>

                    <span class="ms-2">5.0/5</span>
                  </div>
                  <div class="d-flex flex-column gap-6">
                    <div class="d-flex flex-column gap-2">
                      <span class="h4 mb-0">Perfect for Career Advancement!</span>
                      <p class="mb-0">
                        "As a working professional, I needed a course that fit into my busy schedule. This course was perfect! The flexible pacing allowed me to learn at my own speed, and the
                        practical applications taught in the course have already helped me in my job. I’m looking forward to taking more courses from this platform."
                      </p>
                    </div>
                    <div class="d-flex flex-column gap-4">
                      <div class="d-flex flex-row gap-3 align-items-center">
                        <div>
                          <img src="<?php echo BASE; ?>App/Asset/images/avatar/avatar-3.jpg" alt="avatar" class="rounded-circle icon-shape icon-xl" />
                        </div>
                        <div class="d-flex flex-column">
                          <span>Anita Parmar</span>
                          <span class="text-secondary">Marketing Specialist</span>
                        </div>
                      </div>
                      <div class="d-flex flex-row gap-2 align-items-center">
                        <a href="#!" class="icon-link icon-link-hover">
                          <span>Read full Story</span>

                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Testimonials-->
      <!--Coding and Hiring-->
      <section class="py-xl-8 py-6">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-md-8 col-12 mx-auto">
              <div class="d-flex flex-column gap-2 text-center mb-xl-7 mb-5">
                <h2 class="mb-0 h1">Practice Coding & Hiring Assessments</h2>
                <p class="mb-0">Level up your coding skills by practicing the hiring assessments of your dream companies & ace your placement game!</p>
              </div>
            </div>
          </div>
          <div class="row gy-6">
            <div class="col-md-6 col-12">
              <div class="d-flex flex-column gap-xl-8 gap-6">
                <div class="d-flex flex-row gap-5">
                  <div>
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_8075_497)">
                        <path
                          d="M81.7954 68.4606H6.35197C4.68041 68.4606 3.00884 67.792 1.89446 66.5662C0.668641 65.3404 0 63.6688 0 62.1087V7.83842C0 6.16685 0.668641 4.49528 1.89446 3.26946C3.12027 2.04364 4.68041 1.375 6.35197 1.375H81.7954C83.467 1.375 85.1386 2.04364 86.253 3.26946C87.4788 4.49528 88.1474 6.05541 88.1474 7.83842V62.1087C88.1474 63.7802 87.4788 65.4518 86.253 66.5662C85.1386 67.792 83.467 68.4606 81.7954 68.4606ZM6.35197 2.82371C5.01472 2.82371 3.78886 3.38089 2.89736 4.27239C2.00585 5.27533 1.44868 6.50116 1.44868 7.72697V61.9972C1.44868 63.2231 1.89442 64.4489 2.89736 65.4518C3.9003 66.4547 5.12613 67.012 6.46338 67.012H81.9069C83.2441 67.012 84.4699 66.4547 85.3614 65.5632C86.2529 64.6717 86.8102 63.4459 86.8102 62.1087V7.83842C86.8102 6.50116 86.2529 5.27534 85.3614 4.38384C84.4699 3.49233 83.2441 2.93516 81.9069 2.93516H6.35197V2.82371Z"
                          fill="#754FFE" />
                        <path
                          d="M56.6104 81.8332H31.7598C31.5369 81.8332 31.314 81.7218 31.2026 81.4989C31.0912 81.276 30.9797 81.0531 31.0912 80.8303L34.6571 67.4577C34.7686 67.1234 34.9915 66.9005 35.3258 66.9005H53.1559C53.4902 66.9005 53.8245 67.1234 53.8245 67.4577L57.3905 80.8303C57.5019 81.0531 57.3905 81.276 57.2791 81.4989C56.9448 81.8332 56.8333 81.8332 56.6104 81.8332ZM32.5399 80.3845H55.6075L52.4872 68.4606H35.7715L32.5399 80.3845Z"
                          fill="#754FFE" />
                        <path
                          d="M65.5255 86.625H22.6219C22.1761 86.625 21.9532 86.2907 21.8418 85.9564L21.7304 81.1646C21.7304 80.9417 21.8418 80.8302 21.9533 80.6074C22.0647 80.4959 22.2876 80.3845 22.5105 80.3845H65.4141C65.8598 80.3845 66.0827 80.7188 66.1941 81.0531L66.3055 85.845C66.3055 86.0678 66.1941 86.1793 66.0827 86.4022C65.8598 86.625 65.7483 86.625 65.5255 86.625ZM23.402 85.1763H64.8569V81.8332H23.402V85.1763Z"
                          fill="#754FFE" />
                        <path
                          d="M16.9386 19.0937C16.7157 19.0937 16.6043 18.9822 16.3814 18.8708L12.9268 15.5276C12.8153 15.4162 12.7039 15.1933 12.7039 14.9704C12.7039 14.7476 12.8153 14.6361 12.9268 14.4133L16.3814 11.0701C16.7157 10.8472 17.1614 10.8472 17.3843 11.0701C17.6072 11.4044 17.6072 11.8502 17.3843 12.0731L14.4869 14.859L17.3843 17.6449C17.7186 17.8678 17.7186 18.425 17.3843 18.6479C17.2728 18.9822 17.05 19.0937 16.9386 19.0937Z"
                          fill="#754FFE" />
                        <path
                          d="M26.2993 19.0936C26.0765 19.0936 25.965 18.9822 25.7422 18.8708C25.5193 18.5364 25.5193 18.0907 25.7422 17.8678L28.6396 15.0819L25.7422 12.2959C25.4078 12.0731 25.4078 11.5159 25.7422 11.293C25.965 10.9587 26.5222 10.9587 26.7451 11.293L30.1997 14.6361C30.3111 14.7476 30.4226 14.9704 30.4226 15.1933C30.4226 15.4162 30.3111 15.5276 30.1997 15.7505L26.7451 19.0936C26.6337 18.9822 26.5222 19.0936 26.2993 19.0936Z"
                          fill="#754FFE" />
                        <path
                          d="M23.7363 17.9793H19.7245C19.2788 17.9793 18.9444 17.6449 18.9444 17.1992C18.9444 16.7534 19.2788 16.4191 19.7245 16.4191H23.7363C24.182 16.4191 24.5163 16.7534 24.5163 17.1992C24.5163 17.6449 24.182 17.9793 23.7363 17.9793Z"
                          fill="#754FFE" />
                        <path
                          d="M50.8157 24.9999H12.8154C12.3696 24.9999 12.0353 24.6655 12.0353 24.2198C12.0353 23.774 12.3696 23.4397 12.8154 23.4397H50.8157C51.2614 23.4397 51.5957 23.774 51.5957 24.2198C51.4843 24.6655 51.15 24.9999 50.8157 24.9999Z"
                          fill="#754FFE" />
                        <path
                          d="M36.7745 32.3548H12.8154C12.3696 32.3548 12.0353 32.0204 12.0353 31.5747C12.0353 31.1289 12.3696 30.7946 12.8154 30.7946H36.7745C37.2203 30.7946 37.5546 31.1289 37.5546 31.5747C37.5546 32.0204 37.1088 32.3548 36.7745 32.3548Z"
                          fill="#754FFE" />
                        <path
                          d="M45.5781 32.3548H39.7833C39.3376 32.3548 39.0033 32.0204 39.0033 31.5747C39.0033 31.1289 39.3376 30.7946 39.7833 30.7946H45.5781C46.0239 30.7946 46.3581 31.1289 46.3581 31.5747C46.3581 32.0204 45.9124 32.3548 45.5781 32.3548Z"
                          fill="#754FFE" />
                        <path
                          d="M36.7745 39.041H12.8154C12.3696 39.041 12.0353 38.7067 12.0353 38.261C12.0353 37.8152 12.3696 37.4809 12.8154 37.4809H36.7745C37.2203 37.4809 37.5546 37.8152 37.5546 38.261C37.4431 38.7067 37.1088 39.041 36.7745 39.041Z"
                          fill="#754FFE" />
                        <path
                          d="M45.5781 39.041H39.7833C39.3376 39.041 39.0033 38.7067 39.0033 38.261C39.0033 37.8152 39.3376 37.4809 39.7833 37.4809H45.5781C46.0239 37.4809 46.3581 37.8152 46.3581 38.261C46.2467 38.7067 45.9124 39.041 45.5781 39.041Z"
                          fill="#754FFE" />
                        <path
                          d="M36.7745 47.176H12.8154C12.3696 47.176 12.0353 46.8417 12.0353 46.3959C12.0353 45.9502 12.3696 45.6159 12.8154 45.6159H36.7745C37.2203 45.6159 37.5546 45.9502 37.5546 46.3959C37.4431 46.8417 37.1088 47.176 36.7745 47.176Z"
                          fill="#754FFE" />
                        <path
                          d="M45.5781 47.176H39.7833C39.3376 47.176 39.0033 46.8417 39.0033 46.3959C39.0033 45.9502 39.3376 45.6159 39.7833 45.6159H45.5781C46.0239 45.6159 46.3581 45.9502 46.3581 46.3959C46.2467 46.8417 45.9124 47.176 45.5781 47.176Z"
                          fill="#754FFE" />
                        <path
                          d="M58.8392 52.4136C58.6163 52.4136 58.5049 52.3021 58.282 52.1907L54.8275 48.8476C54.716 48.7361 54.6046 48.5133 54.6046 48.2904C54.6046 48.0675 54.716 47.9561 54.8275 47.7332L58.282 44.3901C58.6163 44.1672 59.0621 44.1672 59.285 44.3901C59.5079 44.7244 59.5079 45.1701 59.285 45.393L56.3875 48.1789L59.285 51.0763C59.6193 51.2992 59.6193 51.8564 59.285 52.0793C59.285 52.3021 59.0621 52.4136 58.8392 52.4136Z"
                          fill="#754FFE" />
                        <path
                          d="M68.3114 52.4136C68.0886 52.4136 67.9771 52.3021 67.7543 52.1907C67.5314 51.8564 67.5314 51.4106 67.7543 51.1878L70.6517 48.2904L67.7543 45.5044C67.4199 45.2815 67.4199 44.7244 67.7543 44.5015C67.9771 44.1672 68.5343 44.1672 68.7572 44.5015L72.2118 47.8446C72.3232 47.9561 72.4347 48.1789 72.4347 48.4018C72.4347 48.6247 72.3232 48.7361 72.2118 48.959L68.7572 52.3021C68.6458 52.3021 68.4229 52.4136 68.3114 52.4136Z"
                          fill="#754FFE" />
                        <path
                          d="M65.7484 51.1878H61.7366C61.2909 51.1878 60.9565 50.8534 60.9565 50.4077C60.9565 49.9619 61.2909 49.6276 61.7366 49.6276H65.7484C66.1941 49.6276 66.5284 49.9619 66.5284 50.4077C66.417 50.9649 66.1941 51.1878 65.7484 51.1878Z"
                          fill="#754FFE" />
                        <path
                          d="M78.3408 35.2522H56.3875C55.9418 35.2522 55.6075 34.9178 55.6075 34.4721V10.5129C55.6075 10.0672 55.9418 9.73284 56.3875 9.73284H78.3408C78.7866 9.73284 79.1209 10.0672 79.1209 10.5129V34.4721C79.1209 35.0293 78.7866 35.2522 78.3408 35.2522ZM57.1676 33.8034H77.6722V11.4044H57.1676V33.8034Z"
                          fill="#754FFE" />
                      </g>
                      <defs>
                        <clipPath id="clip0_8075_497">
                          <rect width="88" height="88" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <h3 class="mb-0">Coding Practice</h3>
                      <p class="mb-0 pe-xl-4">Lorem ipsum dolor sit amet, consectetur adi piscing elit. Aliquam sollicitudin eros enim, sed semper nunc tincidunt non.</p>
                    </div>
                    <div class="">
                      <a href="#!" class="icon-link icon-link-hover">
                        <span>Start Practice</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-row gap-5">
                  <div>
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M60.1467 86.7114H0.777207C0.333323 86.7114 0.000396729 86.3785 0.000396729 86.0456V21.1276C0.000396729 20.9056 0.111381 20.7947 0.222352 20.5727L19.1984 1.5967C19.3093 1.48573 19.5313 1.37476 19.7532 1.37476H60.2576C60.7015 1.37476 61.0344 1.70767 61.0344 2.04058V17.9094C61.0344 18.3533 60.7015 18.5753 60.2576 18.5753C59.8137 18.5753 59.4808 18.2423 59.4808 17.9094V2.92835H19.9752L1.44301 21.4605V85.2688H59.3699V49.3142C59.3699 48.8703 59.7028 48.6484 60.1467 48.6484C60.5906 48.6484 60.9235 48.9813 60.9235 49.3142V85.9346C60.8125 86.3785 60.5906 86.7114 60.1467 86.7114Z"
                        fill="#754FFE" />
                      <path
                        d="M55.0408 51.0899C50.491 51.0899 46.2741 49.3144 43.056 46.0962C39.8378 42.8781 38.0623 38.6612 38.0623 34.1114C38.0623 29.5616 39.8378 25.3447 43.056 22.1265C46.2741 18.9083 50.491 17.1328 55.0408 17.1328C59.5906 17.1328 63.8076 18.9083 67.0257 22.1265C73.573 28.7848 73.573 39.438 67.0257 46.0962C63.8076 49.3144 59.4796 51.0899 55.0408 51.0899ZM55.0408 18.5754C50.9349 18.5754 47.0509 20.24 44.0547 23.1252C41.1695 26.0105 39.5049 29.8945 39.5049 34.1114C39.5049 38.3283 41.1695 42.1013 44.0547 45.0975C46.94 47.9827 50.8239 49.6473 55.0408 49.6473C59.1467 49.6473 63.0307 47.9827 66.027 45.0975C72.0194 39.1051 72.0194 29.2286 66.027 23.1252C63.0307 20.24 59.1467 18.5754 55.0408 18.5754Z"
                        fill="#754FFE" />
                      <path
                        d="M19.6434 21.9048H1.88808C1.44419 21.9048 1.11126 21.5719 1.11126 21.239C1.11126 20.9061 1.44419 20.5732 1.88808 20.5732H18.9776V3.03977C18.9776 2.59589 19.3105 2.37394 19.7544 2.37394C20.1983 2.37394 20.5312 2.70686 20.5312 3.03977V21.128C20.4202 21.5719 20.0873 21.9048 19.6434 21.9048Z"
                        fill="#754FFE" />
                      <path
                        d="M51.9351 48.9812H46.4976C46.0537 48.9812 45.7208 48.6483 45.7208 48.3154C45.7208 47.8715 46.0537 47.6495 46.4976 47.6495H51.9351C52.379 47.6495 52.712 47.9825 52.712 48.3154C52.712 48.6483 52.379 48.9812 51.9351 48.9812ZM42.5026 48.9812H38.7296C38.2857 48.9812 37.9528 48.6483 37.9528 48.3154C37.9528 47.8715 38.2857 47.6495 38.7296 47.6495H42.5026C42.9465 47.6495 43.2794 47.9825 43.2794 48.3154C43.1684 48.6483 42.9465 48.9812 42.5026 48.9812ZM35.2895 48.9812H8.87841C8.43453 48.9812 8.1016 48.6483 8.1016 48.3154C8.1016 47.8715 8.43453 47.6495 8.87841 47.6495H35.1785C35.6224 47.6495 35.9554 47.9825 35.9554 48.3154C35.9554 48.6483 35.6224 48.9812 35.2895 48.9812ZM51.9351 43.7656H18.9767C18.5329 43.7656 18.2 43.4327 18.2 43.0997C18.2 42.6559 18.5329 42.4339 18.9767 42.4339H51.9351C52.379 42.4339 52.712 42.7668 52.712 43.0997C52.712 43.4327 52.379 43.7656 51.9351 43.7656ZM14.316 43.7656H8.87841C8.43453 43.7656 8.1016 43.4327 8.1016 43.0997C8.1016 42.6559 8.43453 42.4339 8.87841 42.4339H14.316C14.7599 42.4339 15.0928 42.7668 15.0928 43.0997C15.0928 43.4327 14.7599 43.7656 14.316 43.7656ZM51.9351 38.5499H25.635C25.1911 38.5499 24.8583 38.217 24.8583 37.8841C24.8583 37.4402 25.1911 37.2183 25.635 37.2183H51.9351C52.379 37.2183 52.712 37.5512 52.712 37.8841C52.712 38.217 52.379 38.5499 51.9351 38.5499ZM22.1949 38.5499H18.4219C17.978 38.5499 17.6451 38.217 17.6451 37.8841C17.6451 37.4402 17.978 37.2183 18.4219 37.2183H22.1949C22.6388 37.2183 22.9717 37.5512 22.9717 37.8841C22.8608 38.217 22.5278 38.5499 22.1949 38.5499ZM14.316 38.5499H8.87841C8.43453 38.5499 8.1016 38.217 8.1016 37.8841C8.1016 37.4402 8.43453 37.2183 8.87841 37.2183H14.316C14.7599 37.2183 15.0928 37.5512 15.0928 37.8841C15.0928 38.217 14.7599 38.5499 14.316 38.5499ZM51.9351 33.5562H46.4976C46.0537 33.5562 45.7208 33.2233 45.7208 32.8904C45.7208 32.4465 46.0537 32.2246 46.4976 32.2246H51.9351C52.379 32.2246 52.712 32.5575 52.712 32.8904C52.712 33.3343 52.379 33.5562 51.9351 33.5562ZM42.5026 33.5562H38.7296C38.2857 33.5562 37.9528 33.2233 37.9528 32.8904C37.9528 32.4465 38.2857 32.2246 38.7296 32.2246H42.5026C42.9465 32.2246 43.2794 32.5575 43.2794 32.8904C43.1684 33.3343 42.9465 33.5562 42.5026 33.5562ZM35.2895 33.5562H8.87841C8.43453 33.5562 8.1016 33.2233 8.1016 32.8904C8.1016 32.4465 8.43453 32.2246 8.87841 32.2246H35.1785C35.6224 32.2246 35.9554 32.5575 35.9554 32.8904C35.9554 33.3343 35.6224 33.5562 35.2895 33.5562ZM51.9351 28.2296H46.4976C46.0537 28.2296 45.7208 27.8967 45.7208 27.5638C45.7208 27.2309 46.0537 26.898 46.4976 26.898H51.9351C52.379 26.898 52.712 27.2309 52.712 27.5638C52.712 27.8967 52.379 28.2296 51.9351 28.2296ZM42.3917 28.2296H8.87841C8.43453 28.2296 8.1016 27.8967 8.1016 27.5638C8.1016 27.2309 8.43453 26.898 8.87841 26.898H42.2807C42.7245 26.898 43.0575 27.2309 43.0575 27.5638C43.0575 27.8967 42.7246 28.2296 42.3917 28.2296Z"
                        fill="#754FFE" />
                      <path
                        d="M51.9351 74.3934H46.4976C46.0537 74.3934 45.7208 74.0605 45.7208 73.7276C45.7208 73.3947 46.0537 73.0618 46.4976 73.0618H51.9351C52.379 73.0618 52.712 73.3947 52.712 73.7276C52.712 74.0605 52.379 74.3934 51.9351 74.3934ZM42.5026 74.3934H38.7296C38.2857 74.3934 37.9528 74.0605 37.9528 73.7276C37.9528 73.3947 38.2857 73.0618 38.7296 73.0618H42.5026C42.9465 73.0618 43.2794 73.3947 43.2794 73.7276C43.2794 74.0605 42.9465 74.3934 42.5026 74.3934ZM35.2895 74.3934H8.87841C8.43453 74.3934 8.1016 74.0605 8.1016 73.7276C8.1016 73.3947 8.43453 73.0618 8.87841 73.0618H35.1785C35.6224 73.0618 35.9554 73.3947 35.9554 73.7276C35.9554 74.0605 35.6224 74.3934 35.2895 74.3934ZM51.9351 69.2888H18.9767C18.5329 69.2888 18.2 68.9559 18.2 68.623C18.2 68.1791 18.5329 67.9571 18.9767 67.9571H51.9351C52.379 67.9571 52.712 68.29 52.712 68.623C52.712 68.9559 52.379 69.2888 51.9351 69.2888ZM14.316 69.2888H8.87841C8.43453 69.2888 8.1016 68.9559 8.1016 68.623C8.1016 68.1791 8.43453 67.9571 8.87841 67.9571H14.316C14.7599 67.9571 15.0928 68.29 15.0928 68.623C15.0928 68.9559 14.7599 69.2888 14.316 69.2888ZM51.9351 63.9622H25.635C25.1911 63.9622 24.8583 63.6293 24.8583 63.2963C24.8583 62.8525 25.1911 62.6305 25.635 62.6305H51.9351C52.379 62.6305 52.712 62.9634 52.712 63.2963C52.712 63.6293 52.379 63.9622 51.9351 63.9622ZM22.1949 63.9622H18.4219C17.978 63.9622 17.6451 63.6293 17.6451 63.2963C17.6451 62.8525 17.978 62.6305 18.4219 62.6305H22.1949C22.6388 62.6305 22.9717 62.9634 22.9717 63.2963C22.8608 63.6293 22.5278 63.9622 22.1949 63.9622ZM14.316 63.9622H8.87841C8.43453 63.9622 8.1016 63.6293 8.1016 63.2963C8.1016 62.8525 8.43453 62.6305 8.87841 62.6305H14.316C14.7599 62.6305 15.0928 62.9634 15.0928 63.2963C15.0928 63.6293 14.7599 63.9622 14.316 63.9622ZM51.9351 59.0794H46.4976C46.0537 59.0794 45.7208 58.7465 45.7208 58.4136C45.7208 57.9697 46.0537 57.7478 46.4976 57.7478H51.9351C52.379 57.7478 52.712 58.0807 52.712 58.4136C52.712 58.7465 52.379 59.0794 51.9351 59.0794ZM42.5026 59.0794H38.7296C38.2857 59.0794 37.9528 58.7465 37.9528 58.4136C37.9528 57.9697 38.2857 57.7478 38.7296 57.7478H42.5026C42.9465 57.7478 43.2794 58.0807 43.2794 58.4136C43.1684 58.7465 42.9465 59.0794 42.5026 59.0794ZM35.2895 59.0794H8.87841C8.43453 59.0794 8.1016 58.7465 8.1016 58.4136C8.1016 57.9697 8.43453 57.7478 8.87841 57.7478H35.1785C35.6224 57.7478 35.9554 58.0807 35.9554 58.4136C35.9554 58.7465 35.6224 59.0794 35.2895 59.0794ZM51.9351 53.7528H46.4976C46.0537 53.7528 45.7208 53.4199 45.7208 53.087C45.7208 52.6431 46.0537 52.4212 46.4976 52.4212H51.9351C52.379 52.4212 52.712 52.7541 52.712 53.087C52.712 53.4199 52.379 53.7528 51.9351 53.7528ZM42.3917 53.7528H8.87841C8.43453 53.7528 8.1016 53.4199 8.1016 53.087C8.1016 52.6431 8.43453 52.4212 8.87841 52.4212H42.2807C42.7245 52.4212 43.0575 52.7541 43.0575 53.087C43.0575 53.4199 42.7246 53.7528 42.3917 53.7528Z"
                        fill="#754FFE" />
                      <path
                        d="M69.5788 52.7542C69.3569 52.7542 69.2459 52.6432 69.024 52.5323L64.1412 47.6495C64.0302 47.5386 63.9193 47.3166 63.9193 47.0947C63.9193 46.8727 64.0303 46.6508 64.2522 46.5398C64.8071 46.096 65.4729 45.5411 66.0277 44.9862C66.5826 44.4314 67.0265 43.8765 67.4703 43.2107C67.5813 42.9888 67.8033 42.9888 68.0252 42.8778C68.2471 42.8778 68.4691 42.9888 68.58 43.0997L73.4628 47.9825C73.7957 48.3154 73.7957 48.7593 73.4628 48.9812L70.0227 52.4213C69.9117 52.6432 69.6898 52.7542 69.5788 52.7542ZM65.6948 47.2057L69.4678 50.9787L71.7982 48.6483L68.0252 44.8753C67.6923 45.3192 67.3594 45.763 66.9155 46.096C66.5826 46.5398 66.1387 46.8728 65.6948 47.2057Z"
                        fill="#754FFE" />
                      <path
                        d="M81.8955 66.9586C80.3419 66.9586 78.7883 66.2928 77.6786 65.1831L67.0254 54.5299C66.6925 54.197 66.6925 53.7531 67.0254 53.5311L74.4604 46.0961C74.5714 45.9851 74.7933 45.8742 75.0153 45.8742C75.2372 45.8742 75.3482 45.9851 75.5701 46.0961L86.2234 56.7493C87.3331 57.859 87.9989 59.4126 87.9989 60.9662C87.9989 62.5198 87.3331 64.0734 86.2234 65.1831C85.0027 66.2928 83.4491 66.9586 81.8955 66.9586ZM68.579 54.086L78.6774 64.1844C79.5652 65.0721 80.6748 65.516 81.8955 65.516C83.1162 65.516 84.2259 65.0721 85.1137 64.1844C86.0015 63.2966 86.4454 62.1869 86.4454 60.9662C86.4454 59.7455 86.0015 58.6358 85.1137 57.7481L75.0153 47.6497L68.579 54.086Z"
                        fill="#754FFE" />
                      <path
                        d="M81.0068 62.9642C80.23 62.9642 79.5642 62.6313 79.0093 62.1874C77.8996 61.0777 77.8996 59.3021 79.0093 58.1924C80.1191 57.0827 81.8946 57.0827 83.0043 58.1924C83.5591 58.7473 83.7811 59.4131 83.7811 60.1899C83.7811 60.9667 83.4482 61.6325 82.8933 62.1874C82.4494 62.6313 81.7836 62.9642 81.0068 62.9642ZM81.0068 58.7473C80.6739 58.7473 80.341 58.8582 80.008 59.1912C79.4532 59.746 79.4532 60.6338 80.008 61.1886C80.5629 61.7435 81.4507 61.7435 82.0056 61.1886C82.2275 60.9667 82.4494 60.5228 82.4494 60.1899C82.4494 59.857 82.3385 59.5241 82.0056 59.1912C81.6727 58.8582 81.3397 58.7473 81.0068 58.7473Z"
                        fill="#754FFE" />
                    </svg>
                  </div>
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <h3 class="mb-0">Projects</h3>
                      <p class="mb-0 pe-xl-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin eros enim, sed semper nunc tincidunt non.</p>
                    </div>
                    <div>
                      <a href="#!" class="icon-link icon-link-hover">
                        <span>Start Projects</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="d-flex flex-column gap-xl-8 gap-6">
                <div class="d-flex flex-row gap-5">
                  <div>
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_8075_503)">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M75.7262 1.375H24.5125C23.7531 1.375 23.1375 1.99061 23.1375 2.75V74.4437C23.1375 75.2031 23.7531 75.8187 24.5125 75.8187H75.7262C76.4856 75.8187 77.1012 75.2031 77.1012 74.4437V2.75C77.1012 1.99061 76.4856 1.375 75.7262 1.375ZM24.5125 0C22.9937 0 21.7625 1.23122 21.7625 2.75V74.4437C21.7625 75.9625 22.9937 77.1937 24.5125 77.1937H75.7262C77.245 77.1937 78.4762 75.9625 78.4762 74.4437V2.75C78.4762 1.23122 77.245 0 75.7262 0H24.5125Z"
                          fill="#754FFE" />
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M21.7625 10.806H10.9988C9.48004 10.806 8.24883 12.0372 8.24883 13.556V85.2497C8.24883 86.7685 9.48004 87.9997 10.9988 87.9997H62.2126C63.7314 87.9997 64.9626 86.7685 64.9626 85.2497V77.1937H63.5876V85.2497C63.5876 86.0091 62.972 86.6247 62.2126 86.6247H10.9988C10.2394 86.6247 9.62383 86.0091 9.62383 85.2497V13.556C9.62383 12.7966 10.2394 12.181 10.9988 12.181H21.7625V10.806Z"
                          fill="#754FFE" />
                        <path
                          d="M69.1819 18.4314H51.065C50.4349 18.4314 49.9622 17.9588 49.9622 17.3286C49.9622 16.6985 50.4349 16.2259 51.065 16.2259H69.0244C69.6546 16.2259 70.1271 16.6985 70.1271 17.3286C70.1271 17.9588 69.6545 18.4314 69.1819 18.4314Z"
                          fill="#754FFE" />
                        <path
                          d="M69.1819 39.6995H51.065C50.4349 39.6995 49.9622 39.227 49.9622 38.5968C49.9622 37.9667 50.4349 37.494 51.065 37.494H69.0244C69.6546 37.494 70.1271 37.9667 70.1271 38.5968C70.1271 39.227 69.6545 39.6995 69.1819 39.6995Z"
                          fill="#754FFE" />
                        <path
                          d="M32.945 21.5821C32.4724 21.5821 32.3148 21.4245 32.1573 21.1095L29.9517 18.1163C29.6366 17.6436 29.7942 17.0135 30.1093 16.6984C30.5819 16.3833 31.212 16.5408 31.5271 16.8559L32.945 18.9039L39.5616 13.2326C40.0342 12.9175 40.6643 12.9175 40.9794 13.3901C41.2945 13.8627 41.2945 14.4929 40.8219 14.8079L33.4176 21.267C33.4176 21.4246 33.1025 21.5821 32.945 21.5821Z"
                          fill="#754FFE" />
                        <path
                          d="M33.736 42.6928C33.421 42.6928 33.2634 42.5353 33.1058 42.3777C32.6332 42.0627 32.6332 41.275 33.1058 40.9599L38.7773 34.8159C39.0924 34.3433 39.88 34.3433 40.1951 34.8159C40.6677 35.131 40.6677 35.9187 40.1951 36.2338L34.5237 42.3777C34.2086 42.5353 33.8936 42.6928 33.736 42.6928Z"
                          fill="#754FFE" />
                        <path
                          d="M39.405 42.6925C39.0899 42.6925 38.9324 42.535 38.6173 42.3774L32.946 36.2335C32.6309 35.7608 32.6309 35.1307 32.946 34.8156C33.4186 34.5005 34.0488 34.5005 34.3638 34.8156L40.0352 40.9596C40.3503 41.4322 40.3503 42.0624 40.0352 42.3774C39.8776 42.535 39.5625 42.6925 39.405 42.6925Z"
                          fill="#754FFE" />
                        <path
                          d="M32.945 64.1171C32.4724 64.1171 32.3148 63.9596 32.1573 63.6445L29.9517 60.6513C29.6366 60.1787 29.7942 59.5485 30.1093 59.2334C30.5819 58.9184 31.212 59.0759 31.5271 59.3909L32.945 61.439L39.5616 55.7676C40.0342 55.4525 40.6643 55.4525 40.9794 55.9251C41.2945 56.3977 41.2945 57.0279 40.8219 57.343L33.4176 63.802C33.4176 63.9596 33.1025 64.1171 32.945 64.1171Z"
                          fill="#754FFE" />
                        <path
                          d="M69.1819 60.8089H51.065C50.4349 60.8089 49.9622 60.3362 49.9622 59.7061C49.9622 59.0759 50.4349 58.6033 51.065 58.6033H69.0244C69.6546 58.6033 70.1271 59.0759 70.1271 59.7061C70.1271 60.3362 69.6545 60.8089 69.1819 60.8089Z"
                          fill="#754FFE" />
                      </g>
                      <defs>
                        <clipPath id="clip0_8075_503">
                          <rect width="88" height="88" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <h3 class="mb-0">Skill Assessment</h3>
                      <p class="mb-0 pe-xl-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin eros enim, sed semper nunc tincidunt non.</p>
                    </div>
                    <div>
                      <a href="#!" class="icon-link icon-link-hover">
                        <span>Start Assessment</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="d-flex flex-row gap-5">
                  <div class="">
                    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M55.2847 29.9476C55.2847 29.454 55.6849 29.0539 56.1785 29.0539H86.6232C87.1168 29.0539 87.517 29.454 87.517 29.9476V35.9065C87.517 36.4001 87.1168 36.8003 86.6232 36.8003H56.1785C55.6849 36.8003 55.2847 36.4001 55.2847 35.9065V29.9476ZM57.0722 30.8414V35.0128H85.7295V30.8414H57.0722ZM58.5351 32.8729C58.5351 31.8376 59.3686 31.004 60.4039 31.004C61.4392 31.004 62.2728 31.8376 62.2728 32.8729C62.2728 33.9082 61.4392 34.7417 60.4039 34.7417C59.3686 34.7417 58.5351 33.9082 58.5351 32.8729ZM60.3452 32.8142C60.332 32.8274 60.3226 32.8457 60.3226 32.8729C60.3226 32.9001 60.332 32.9184 60.3452 32.9316C60.3584 32.9448 60.3767 32.9542 60.4039 32.9542C60.4311 32.9542 60.4494 32.9448 60.4626 32.9316C60.4758 32.9184 60.4853 32.9001 60.4853 32.8729C60.4853 32.8457 60.4758 32.8274 60.4626 32.8142C60.4494 32.801 60.4311 32.7915 60.4039 32.7915C60.3767 32.7915 60.3584 32.801 60.3452 32.8142ZM64.7107 32.8729C64.7107 31.8376 65.5442 31.004 66.5795 31.004C67.6149 31.004 68.4484 31.8376 68.4484 32.8729C68.4484 33.9082 67.6149 34.7417 66.5795 34.7417C65.5442 34.7417 64.7107 33.9082 64.7107 32.8729ZM66.5208 32.8142C66.5076 32.8274 66.4982 32.8457 66.4982 32.8729C66.4982 32.9001 66.5076 32.9184 66.5208 32.9316C66.534 32.9448 66.5523 32.9542 66.5795 32.9542C66.6067 32.9542 66.625 32.9448 66.6382 32.9316C66.6514 32.9184 66.6609 32.9001 66.6609 32.8729C66.6609 32.8457 66.6514 32.8274 66.6382 32.8142C66.6251 32.801 66.6067 32.7915 66.5795 32.7915C66.5523 32.7915 66.534 32.801 66.5208 32.8142Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M75.3918 14.6443C74.9871 10.7236 71.923 8.90935 69.1548 9.16887L69.1374 9.1705C66.7203 9.34954 64.3294 11.1728 64.0253 14.6443H75.3918ZM68.9967 7.38836C72.9577 7.0218 77.2242 9.89592 77.2242 15.5381C77.2242 16.0317 76.8241 16.4318 76.3305 16.4318H63.1125C62.6189 16.4318 62.2187 16.0317 62.2187 15.5381V14.888C62.2187 14.8724 62.2191 14.8567 62.22 14.841C62.4605 10.2713 65.633 7.64165 68.9967 7.38836Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M19.8842 9.17192C17.3441 9.17192 15.2524 11.2637 15.2524 13.8037V70.4678C15.2524 70.9614 14.8522 71.3616 14.3586 71.3616C13.865 71.3616 13.4649 70.9614 13.4649 70.4678V13.8037C13.4649 10.2765 16.3569 7.38442 19.8842 7.38442H69.0725C69.5661 7.38442 69.9663 7.78457 69.9663 8.27817C69.9663 8.77177 69.5661 9.17192 69.0725 9.17192H19.8842Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M63.0065 13.7768C63.5001 13.7768 63.9002 14.1769 63.9002 14.6705V29.9471C63.9002 30.4407 63.5001 30.8408 63.0065 30.8408C62.5129 30.8408 62.1127 30.4407 62.1127 29.9471V14.6705C62.1127 14.1769 62.5129 13.7768 63.0065 13.7768Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M63.0063 54.4061C63.5 54.4061 63.9001 54.8062 63.9001 55.2998V70.468C63.9001 71.6298 63.8809 72.6704 63.754 73.5586C63.6266 74.4506 63.3802 75.2737 62.8647 75.952C61.8074 77.3432 59.9219 77.7541 57.1558 77.7541C56.6622 77.7541 56.262 77.3539 56.262 76.8603C56.262 76.3667 56.6622 75.9666 57.1558 75.9666C59.9152 75.9666 60.9549 75.5107 61.4416 74.8704C61.698 74.533 61.8783 74.0492 61.9845 73.3059C62.0912 72.5588 62.1126 71.6357 62.1126 70.468V55.2998C62.1126 54.8062 62.5127 54.4061 63.0063 54.4061Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M1.5117 70.364C1.68226 70.1377 1.95005 70.0057 2.23343 70.0082L52.2882 70.4416C52.7775 70.4458 53.1722 70.8427 53.1743 71.3315L53.1743 71.3344L53.1749 71.355C53.1757 71.3774 53.1775 71.4149 53.1813 71.4656C53.1889 71.5671 53.2048 71.7202 53.2375 71.9097C53.3032 72.2911 53.4347 72.8063 53.6945 73.3432C54.1995 74.387 55.2052 75.5593 57.3313 75.9845C57.7811 76.0744 58.0897 76.4903 58.0456 76.9468C58.0015 77.4034 57.619 77.7524 57.1603 77.7546L57.156 76.8609C57.1603 77.7546 57.1603 77.7546 57.1603 77.7546L55.2063 77.7637C53.9601 77.7694 52.1753 77.7775 50.021 77.7868C45.7125 77.8054 39.9259 77.8291 34.014 77.8494C22.2037 77.89 9.8575 77.9173 7.8352 77.8627L7.80977 77.8616C5.399 77.7277 3.77586 75.8713 2.81953 74.3243C2.32509 73.5244 1.96496 72.7381 1.72884 72.1549C1.61027 71.8621 1.52171 71.6174 1.46215 71.4437C1.43235 71.3568 1.40973 71.2875 1.39418 71.2386L1.37611 71.1809L1.37102 71.1642L1.36945 71.1589L1.3689 71.1571C1.3689 71.1571 1.36852 71.1559 2.22545 70.9019L1.3689 71.1571C1.2884 70.8854 1.34114 70.5903 1.5117 70.364ZM3.52141 71.8073C3.72452 72.2742 3.99681 72.8293 4.33997 73.3844C5.2231 74.813 6.41287 75.9877 7.89688 76.0762C9.92456 76.1294 22.1984 76.1025 34.0079 76.0619C39.9191 76.0416 45.7051 76.0179 50.0133 75.9993C51.2988 75.9937 52.4527 75.9886 53.439 75.9842C52.8259 75.4023 52.3902 74.7515 52.0854 74.1217C51.7378 73.4033 51.5646 72.7236 51.4775 72.2222L3.52141 71.8073Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M22.7852 59.3084C22.7852 58.8148 23.1854 58.4147 23.679 58.4147H51.3068C51.8004 58.4147 52.2005 58.8148 52.2005 59.3084C52.2005 59.802 51.8004 60.2022 51.3068 60.2022H23.679C23.1854 60.2022 22.7852 59.802 22.7852 59.3084Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M29.175 47.4991C29.175 47.0055 29.5751 46.6053 30.0687 46.6053H51.3042C51.7978 46.6053 52.1979 47.0055 52.1979 47.4991C52.1979 47.9927 51.7978 48.3928 51.3042 48.3928H30.0687C29.5751 48.3928 29.175 47.9927 29.175 47.4991Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M22.7852 35.6903C22.7852 35.1967 23.1854 34.7966 23.679 34.7966H51.3068C51.8004 34.7966 52.2005 35.1967 52.2005 35.6903C52.2005 36.1839 51.8004 36.5841 51.3068 36.5841H23.679C23.1854 36.5841 22.7852 36.1839 22.7852 35.6903Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M34.0497 23.7717C34.0497 23.2781 34.4498 22.878 34.9434 22.878H51.3034C51.797 22.878 52.1972 23.2781 52.1972 23.7717C52.1972 24.2653 51.797 24.6655 51.3034 24.6655H34.9434C34.4498 24.6655 34.0497 24.2653 34.0497 23.7717Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M55.2847 29.9476C55.2847 29.454 55.6849 29.0539 56.1785 29.0539H86.6232C87.1168 29.0539 87.517 29.454 87.517 29.9476L87.5183 55.3001C87.5183 55.7937 87.1181 56.1939 86.6245 56.1939H56.1798C55.6862 56.1939 55.286 55.7937 55.286 55.3001L55.2847 29.9476ZM57.0722 30.8414L57.0735 54.4064H85.7308L85.7295 30.8414H57.0722Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M55.286 35.7976C55.286 35.304 55.6862 34.9039 56.1798 34.9039H86.6245C87.1181 34.9039 87.5183 35.304 87.5183 35.7976C87.5183 36.2912 87.1181 36.6914 86.6245 36.6914H56.1798C55.6862 36.6914 55.286 36.2912 55.286 35.7976Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M67.7649 41.6756C68.109 42.0295 68.101 42.5953 67.7471 42.9394L64.5058 46.0906L67.7471 49.2419C68.101 49.5859 68.109 50.1518 67.7649 50.5057C67.4208 50.8596 66.855 50.8676 66.501 50.5235L62.6006 46.7314C62.4276 46.5632 62.3299 46.332 62.3299 46.0906C62.3299 45.8492 62.4276 45.6181 62.6006 45.4498L66.501 41.6578C66.855 41.3137 67.4208 41.3216 67.7649 41.6756Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M75.1592 41.6666C75.5082 41.3176 76.0741 41.3176 76.4232 41.6666L80.2152 45.4586C80.5643 45.8077 80.5643 46.3736 80.2152 46.7226L76.4232 50.5147C76.0741 50.8637 75.5082 50.8637 75.1592 50.5147C74.8102 50.1656 74.8102 49.5997 75.1592 49.2507L78.3193 46.0906L75.1592 42.9305C74.8102 42.5815 74.8102 42.0156 75.1592 41.6666Z"
                        fill="#754FFE" />
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M74.4923 38.3254C74.9514 38.5067 75.1765 39.0259 74.9952 39.485L69.903 52.378C69.7217 52.8371 69.2025 53.0623 68.7435 52.8809C68.2844 52.6996 68.0592 52.1804 68.2405 51.7214L73.3327 38.8284C73.514 38.3693 74.0332 38.1441 74.4923 38.3254Z"
                        fill="#754FFE" />
                    </svg>
                  </div>
                  <div class="d-flex flex-column gap-4">
                    <div class="d-flex flex-column gap-2">
                      <h3 class="mb-0">Interview Preparation</h3>
                      <p class="mb-0 pe-xl-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin eros enim, sed semper nunc tincidunt non.</p>
                    </div>
                    <div>
                      <a href="#!" class="icon-link icon-link-hover">
                        <span>Start Interview</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Coding and Hiring-->
      <!--trusted-->
      <div class="py-6">
        <div class="container text-center">
          <div class="row">
            <div class="col-xl-12 col-md-12 col-12">
              <div class="text-center mb-6">
                <span class="text-gray-400">Trusted by over 12,500 great teams</span>
              </div>
            </div>
            <div class="col-xl-10 offset-xl-1">
              <div class="table-responsive-lg mb-6">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 g-4 flex-nowrap">
                  <div class="col">
                    <div class="text-center mb-3">
                      <img src="<?php echo BASE; ?>App/Asset/images/course/office.svg" alt="office" class="img-fluid" />
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center mb-3">
                      <img src="<?php echo BASE; ?>App/Asset/images/course/linkedin-logo.svg" alt="linkedin" class="img-fluid" />
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center mb-3">
                      <img src="<?php echo BASE; ?>App/Asset/images/course/facebook.svg" alt="facebook" class="img-fluid" />
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center mb-3">
                      <img src="<?php echo BASE; ?>App/Asset/images/course/google.svg" alt="google" class="img-fluid" />
                    </div>
                  </div>
                  <div class="col">
                    <div class="text-center mb-3">
                      <img src="<?php echo BASE; ?>App/Asset/images/course/microsoft.svg" alt="microsoft" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--trusted-->
    </main>
    <!-- Footer -->
    <!-- Footer -->
<footer class="footer bg-dark-stable py-8">
  <div class="container">
    <div class="row gy-6 gy-xl-0 pb-8">
      <div class="col-xl-3 col-lg-12 col-md-6 col-12">
        <div class="d-flex flex-column gap-4">
          <div>
            <img src="<?php echo BASE; ?>App/Asset/images/svg/geeks-logo.svg" alt="geeks logo" />
          </div>
          <p class="mb-0">Nascetur nibh feugiat vulputate urna mauris tincidunt porttitor ultricies. Et dis augue praesent congue.</p>
          <div class="d-flex gap-2">
            <a href="#langaugeModal" class="btn btn-outline-secondary" data-bs-toggle="modal">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                  <path
                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                </svg>
              </span>
              <span class="ms-2">English</span>
            </a>
            <div class="dropdown">
              <button
                class="btn btn-outline-secondary btn-icon rounded-circle d-flex align-items-center"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
                <i class="bi theme-icon-active"></i>
                <span class="visually-hidden bs-theme-text">Toggle theme</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text" data-bs-theme="dark">
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <i class="bi theme-icon bi-sun-fill"></i>
                    <span class="ms-2">Light</span>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <i class="bi theme-icon bi-moon-stars-fill"></i>
                    <span class="ms-2">Dark</span>
                  </button>
                </li>
                <li>
                  <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <i class="bi theme-icon bi-circle-half"></i>
                    <span class="ms-2">Auto</span>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-md-3 col-6">
        <div class="d-flex flex-column gap-3">
          <span class="text-white-stable">Company</span>
          <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
            <li>
              <a href="#!" class="nav-link">About us</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Contact us</a>
            </li>
            <li>
              <a href="#!" class="nav-link">News and Blogs</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Career</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Investors</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-2 col-md-3 col-6">
        <div class="d-flex flex-column gap-3">
          <span class="text-white-stable">Community</span>
          <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
            <li>
              <a href="#!" class="nav-link">Help and Support</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Affiliate</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Blog</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Geeks Business</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-2 col-md-3 col-12">
        <div class="d-flex flex-column gap-3">
          <span class="text-white-stable">Teaching</span>
          <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
            <li>
              <a href="#!" class="nav-link">Become a teacher</a>
            </li>
            <li>
              <a href="#!" class="nav-link">How to guide</a>
            </li>
            <li>
              <a href="#!" class="nav-link">Documentation</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-12">
        <div class="d-flex flex-column gap-5">
          <div class="d-flex flex-column gap-3">
            <span class="text-white-stable">Contact</span>
            <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
              <li>
                Toll free:
                <span class="fw-semibold">+1234 567 890</span>
              </li>
              <li>
                Time:
                <span class="fw-semibold">9AM to 8:PM IST</span>
              </li>
              <li>
                Email:
                <span class="fw-semibold">example@gmail.com</span>
              </li>
            </ul>
          </div>
          <div class="d-flex flex-row gap-2">
            <a href="#"><img src="<?php echo BASE; ?>App/Asset/images/svg/appstore.svg" alt="" class="img-fluid" /></a>
            <a href="#"><img src="<?php echo BASE; ?>App/Asset/images/svg/playstore.svg" alt="" class="img-fluid" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center g-0 border-top border-gray-800 pt-3 flex-column gap-1 flex-lg-row gap-lg-0">
      <!-- Desc -->
      <div class="col-lg-6 col-12 text-center text-md-start">
        <span>
          ©
          <span id="copyright">
            <script>
              document.getElementById("copyright").appendChild(document.createTextNode(new Date().getFullYear()));
            </script>
          </span>
          GeeksTheme. Powered Codescandy
        </span>
      </div>
      <!-- Links -->
      <div class="col-12 col-lg-6">
        <nav class="nav nav-footer justify-content-center justify-content-md-start justify-content-lg-end">
          <a class="nav-link active" href="#!">Terms of use</a>
          <a class="nav-link" href="#!">Cookies Settings</a>
          <a class="nav-link" href="#!">Privacy policy</a>
        </nav>
      </div>
    </div>
  </div>
</footer>


    <!-- Scroll top -->
    <div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
        <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
    </svg>
</div>

    <!-- Scripts -->
    <!-- Libs JS -->
<script src="<?php echo BASE; ?>App/Asset/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="<?php echo BASE; ?>App/Asset/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo BASE; ?>App/Asset/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="<?php echo BASE; ?>App/Asset/js/theme.min.js"></script>

    <script src="<?php echo BASE; ?>App/Asset/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="<?php echo BASE; ?>App/Asset/js/vendors/tnsSlider.js"></script>
  </body>

<!-- Mirrored from geeksui.codescandy.com/geeks/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:38:59 GMT -->
</html>
