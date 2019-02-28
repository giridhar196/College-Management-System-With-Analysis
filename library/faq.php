<?php   
require_once "dbconnect.php";
require_once "auth.php";
if(isset($_POST['submit'])){
  $fname=$userData['first_name'];
  $email=$userData['email'];
  $gender=$userData['gender'];
  $oauth=$userData['oauth_uid'];
$address=$_POST['wizard-validation-material-bio'];
$location=$_POST['wizard-validation-material-location'];
$blood=$_POST['wizard-validation-material-blood'];
$branch=$_POST['wizard-validation-material-branch'];
$sem=$_POST['wizard-validation-material-semister'];
$sec=$_POST['wizard-validation-material-section'];
$reg=$_POST['wizard-validation-material-regdno'];
$dateof=$_POST['example-masked2-date1'];
$phone=$_POST['example-masked2-phone'];
$reglu=$_POST['wizard-validation-material-regulation'];
$query = "INSERT INTO st_db SET branch='$branch',cellno='$phone',regulation='$reglu',nameofstudent='$fname', admncat='spot',email = '$email', created = '".date("Y-m-d H:i:s")."',regdno='$reg',bloodgroup='$blood', universityfee='2500',admission='900',address='$address',dob='$dateof',semister='$sem',buildingfund='1000',tutionfee='0',position='student'";
$run_sel_us=mysqli_query($conn,$query);
$qu_up = "UPDATE users SET terms='1' WHERE oauth_uid='$oauth'";
$run_up=mysqli_query($conn,$qu_up);
$ins_stu="INSERT INTO students SET branch='$branch',semister='$sem',section='$sec',regulation='$reglu',registration_number='$reg'";
$in_stu_sql=mysqli_query($conn,$ins_stu);
}

?>
<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en" class="no-focus">
<!--<![endif]-->

<head>
    <script type="text/javascript">
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>College Management system &amp; Project R-5</title>

    <meta name="description" content="College Management system  &amp; Project R-5">
    <meta name="author" content="Gstark and Team">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="College Management system  &amp; Project R-5">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="College Management system  &amp; Project R-5">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->
</head>

<body>

    <div id="page-container">


        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="content">
                <!-- Frequently Asked Questions -->
                <h2 class="content-heading">Documentation & Features (Version 1.1)</h2>

                <!-- Introduction -->
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <strong>1.</strong> Introduction
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-question"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div id="faq1" role="tablist" aria-multiselectable="true">
                            <div class="block block-bordered block-rounded mb-5">
                                <div class="block-header" role="tab" id="faq1_h1">
                                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1" aria-expanded="true"
                                        aria-controls="faq1_q1">1.1 Welcome to your own dashboard</a>
                                </div>
                                <div id="faq1_q1" class="collapse show" role="tabpanel" aria-labelledby="faq1_h1">
                                    <div class="block-content border-t">
                                        <p>This article provides an introduction to the Dashboard and common Dashboard topics,
                                            like understanding panel types, managing panels and widgets, accessing the Metrics
                                            Dashboard, common Dashboard metrics and more. The Dashboard is the initial screen
                                            that all users view after signing into the iCIMS Talent Platform. The Dashboard
                                            allows for quick access to the reports and metrics that users rely on daily.
                                            The Dashboard contains configurable panels that assist with job and candidate
                                            management within the Platform. These panels display widgets that present data
                                            to users using searches that have been previously created and saved within a
                                            user’s Platform. Dashboards can be configured globally, per-login group, or by
                                            the user for a personalized view.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="block block-bordered block-rounded mb-5">
                                <div class="block-header" role="tab" id="faq1_h2">
                                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q2" aria-expanded="true"
                                        aria-controls="faq1_q2">1.2 The team behind the project</a>
                                </div>
                                <div id="faq1_q2" class="collapse" role="tabpanel" aria-labelledby="faq1_h2">
                                    <div class="block-content border-t">
                                        <p>Currently We are Not Providing The author Details..
                                    </div>
                                </div>
                            </div>
                            <div class="block block-bordered block-rounded mb-5">
                                <div class="block-header" role="tab" id="faq1_h3">
                                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq1" href="#faq1_q3" aria-expanded="true"
                                        aria-controls="faq1_q3">1.3 What are our values?</a>
                                </div>
                                <div id="faq1_q3" class="collapse" role="tabpanel" aria-labelledby="faq1_h3">
                                    <div class="block-content border-t">
                                        <p>
                                            Quality ingrained in the website. We will work to achieve excellence in data services, in managing and analysis in organisational
                                            processes. We will ensure that we take into account the opinion of the students,
                                            faculity and non teching staff, and we will also ensure the every sing bite of
                                            information is secure upto our knowledge.
                                        </p>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END Introduction -->

                <!-- Functionality -->
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <strong>2.</strong> Functionality
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-question"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div id="faq2" role="tablist" aria-multiselectable="true">
                            <div class="block block-bordered block-rounded mb-5">
                                <div class="block-header" role="tab" id="faq2_h1">
                                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1" aria-expanded="true"
                                        aria-controls="faq2_q1">What are the key features?</a>
                                </div>
                                <div id="faq2_q1" class="collapse" role="tabpanel" aria-labelledby="faq2_h1">
                                    <div class="block-content border-t">
                                        <p>With so many dashboard tools joining the market, it is imperative you ensure they
                                            offer the more than 15 dashboard features. If you don’t believe us, start and
                                            check our advanced features on your own!</p>
                                        <ul class="fa-ul list-li-push-sm">
                                            <li>
                                                <i class="fa fa-check fa-li"></i> Fully Responsive
                                            </li>
                                            <li>
                                                <i class="fa fa-check fa-li"></i> API Support
                                            </li>
                                            <li>
                                                <i class="fa fa-check fa-li"></i> Dynamic and real time data
                                            </li>
                                            <li>
                                                <i class="fa fa-check fa-li"></i> Security
                                            </li>
                                            <li>
                                                <i class="fa fa-check fa-li"></i> Social Media Feature
                                            </li>
                                            <li>
                                                <i class="fa fa-check fa-li"></i> Own Blog
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="block block-bordered block-rounded mb-5">
                                <div class="block-header" role="tab" id="faq2_h2">
                                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2" aria-expanded="true"
                                        aria-controls="faq2_q2">How to use your dashboard?</a>
                                </div>
                                <div id="faq2_q2" class="collapse" role="tabpanel" aria-labelledby="faq2_h2">
                                    <div class="block-content border-t">
                                        <p>This is not a great of heardest task just provide your details while accessing this
                                            first time every thing is user friendly and easy to access we provide bug finder
                                            link in every page bottem left please feel free to express your problem that
                                            you face or in case if you find any bug please inform us. Thank You
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="block block-bordered block-rounded mb-5">
                                <div class="block-header" role="tab" id="faq2_h4">
                                    <a class="font-w600 text-body-color-dark" data-toggle="collapse" data-parent="#faq2" href="#faq2_q4" aria-expanded="true"
                                        aria-controls="faq2_q4">How secure is my data?</a>
                                </div>
                                <div id="faq2_q4" class="collapse" role="tabpanel" aria-labelledby="faq2_h4">
                                    <div class="block-content border-t">
                                        <p>We maintain maximum while creating this.The main thing is your trust we never loose
                                            your trust while creating this each and every information will be stored,secured
                                            upto our knowledge. with out any confirmation of the users we are not going to
                                            provide or transfer any piece of information to third party sites or external
                                            resources.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Functionality -->

                <!-- Payments -->
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            <strong>3.</strong> Please Provide Your Crucial Information
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-question"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- Validation Wizard Material -->
                        <div class="js-wizard-validation-material block">
                            <!-- Step Tabs -->
                            <ul class="nav nav-tabs nav-tabs-alt nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#wizard-validation-material-step1" data-toggle="tab">1. Personal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#wizard-validation-material-step2" data-toggle="tab">2. Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#wizard-validation-material-step3" data-toggle="tab">3. Extra</a>
                                </li>
                            </ul>
                            <!-- END Step Tabs -->

                            <!-- Form -->
                            <form class="js-wizard-validation-material-form" action="" method="post">
                                <!-- Steps Content -->
                                <div class="block-content block-content-full tab-content" style="min-height: 267px;">
                                    <!-- Step 1 -->
                                    <div class="tab-pane active" id="wizard-validation-material-step1" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control" disabled type="text" id="wizard-validation-material-firstname" value="<?php echo $userData['first_name'];?>"
                                                    name="wizard-validation-material-firstname">
                                                <label for="wizard-validation-material-firstname">First Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control" type="text" id="wizard-validation-material-lastname" value="<?php echo $userData['last_name']; ?>"
                                                    name="wizard-validation-material-lastname">
                                                <label for="wizard-validation-material-lastname">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control" disabled type="email" id="wizard-validation-material-email" value="<?php echo $userData['email'];?>"
                                                    name="wizard-validation-material-email">
                                                <label for="wizard-validation-material-email">Email</label>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="form-material floating">
                                                <input type="text" class="js-masked-date form-control" id="example-masked2-date1" name="example-masked2-date1" placeholder="dd/mm/yyyy">
                                                <label for="example-masked2-date1">Date</label>
                                            </div>

                                        </div>
                                        <div class="form-group">

                                            <div class="form-material floating">
                                                <input type="text" class="js-masked-phone form-control" id="example-masked2-phone" name="example-masked2-phone">
                                                <label for="example-masked2-phone">Phone
                                                    <small class="text-muted">(999) 999-9999</small>
                                                </label>

                                            </div>

                                        </div>



                                    </div>
                                    <!-- END Step 1 -->

                                    <!-- Step 2 -->
                                    <div class="tab-pane" id="wizard-validation-material-step2" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <textarea class="form-control" id="wizard-validation-material-bio" name="wizard-validation-material-bio" rows="9"></textarea>
                                                <label for="wizard-validation-material-bio">Address</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Step 2 -->

                                    <!-- Step 3 -->
                                    <div class="tab-pane" id="wizard-validation-material-step3" role="tabpanel">
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control" type="text" id="wizard-validation-material-regdno" name="wizard-validation-material-regdno">
                                                <label for="wizard-validation-material-regdno">Regdno</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control" type="text" id="wizard-validation-material-regulation" value="R-13" name="wizard-validation-material-regulation">
                                                <label for="wizard-validation-material-regulation">Regulation</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control" type="text" id="wizard-validation-material-location" name="wizard-validation-material-location">
                                                <label for="wizard-validation-material-location">Location</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <input class="form-control" type="text" id="wizard-validation-material-blood" name="wizard-validation-material-blood">
                                                <label for="wizard-validation-material-blood">Blood Group</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <select class="form-control" id="wizard-validation-material-branch" name="wizard-validation-material-branch" size="1">
                                                    <option value="cse">CSE</option>
                                                    <option value="ece">ECE</option>
                                                    <option value="civil">CIVIL</option>
                                                    <option value="eee">EEE</option>
                                                    <option value="mech">MECH</option>
                                                </select>
                                                <label for="wizard-validation-material-branch">Branch</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <select class="form-control" id="wizard-validation-material-semister" name="wizard-validation-material-semister" size="1">
                                                    <option value="1-1">1-1</option>
                                                    <option value="1-2">1-2</option>
                                                    <option value="2-1">2-1</option>
                                                    <option value="2-2">2-2</option>
                                                    <option value="3-1">3-1</option>
                                                    <option value="3-2">3-2</option>
                                                    <option value="4-1">4-1</option>
                                                    <option value="4-2">4-2</option>
                                                </select>
                                                <label for="wizard-validation-material-branch">Semister</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-material floating">
                                                <select class="form-control" id="wizard-validation-material-section" name="wizard-validation-material-section" size="1">
                                                    <option value="a">A</option>
                                                    <option value="b">B</option>
                                                    <option value="c">C</option>

                                                </select>
                                                <label for="wizard-validation-material-section">Section</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="css-control css-control-primary css-switch" for="wizard-validation-material-terms">
                                                <input type="checkbox" class="css-control-input" id="wizard-validation-material-terms" name="wizard-validation-material-terms">
                                                <span class="css-control-indicator"></span> Agree with the terms
                                                <a data-toggle="modal" data-target="#exampleModal" href=""> Click me to know </a>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- END Step 3 -->
                                </div>
                                <!-- END Steps Content -->

                                <!-- Steps Navigation -->
                                <div class="block-content block-content-sm block-content-full bg-body-light">
                                    <div class="row">
                                        <div class="col-6 text-left">
                                            <button type="button" class="btn btn-alt-secondary" data-wizard="prev">
                                                <i class="fa fa-angle-left mr-5"></i> Previous
                                            </button>
                                        </div>
                                        <div class="col-6 text-right">
                                            <button type="button" class="btn btn-alt-secondary" data-wizard="next">
                                                Next
                                                <i class="fa fa-angle-right ml-5"></i>
                                            </button>
                                            <button type="submit" class="btn btn-alt-primary d-none" name="submit" id="submit" data-wizard="finish">
                                                <i class="fa fa-check mr-5"></i> Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Steps Navigation -->
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Terms And Conditions</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <ul>
                                                    <li>
                                                        <h2>1. Prohibited Conduct</h2>
                                                        <p>
                                                            cmsproject does not allow the use of unsolicited commercial email ("Spam") to promote products or services. Any Subscriber
                                                            engaging in the sending of Spam through the cmsproject network
                                                            or promoting information on websites hosted by cmsproject will
                                                            be considered in breach of this Agreement and will be suspended
                                                            from the Service immediately.
                                                        </p>
                                                        <p>
                                                            Your use of the Service must be in compliance with Canadian and US laws, and the laws of your country at all times.
                                                        </p>
                                                        <p>
                                                            You are responsible for ensuring that your use of the Service does not consume excessive system or network resources that
                                                            disrupts the normal use of the Service through, but not limited
                                                            to, spawning multiple processes, or consuming excessive amounts
                                                            of memory, CPU or bandwidth capacity.
                                                        </p>
                                                        <p>
                                                            The following is a non-exclusive list of content, and behavior prohibited by the Service:
                                                            <ol>
                                                                <li>
                                                                    Content that contains or contains links to: nudity, pornography, adult content, materials with sex or foul language.
                                                                </li>
                                                                <li>
                                                                    Content that condones, promotes, contains, or links to warez, cracks, hacks, their associated utilities, or other piracy
                                                                    related information, whether for educational purposes
                                                                    or not.
                                                                </li>
                                                                <li>
                                                                    Content that has been promoted through the sending of Spam or mail fraud schemes, or pages that promote or condone the sending
                                                                    of Spam. The sending of bulk email originating from our
                                                                    servers mass distributed to unknown recipients soliciting
                                                                    products or services, or of bulk email NOT originating
                                                                    from our servers mass distributed to unknown recipients
                                                                    soliciting products or services relating to a cmsproject
                                                                    account will result in immediate account suspension.
                                                                </li>
                                                                <li>
                                                                    Content that is grossly offensive to the community, including blatant expressions for bigotry, prejudice, racism, hatred
                                                                    or excessive profanity, or to post any obscene, filthy,
                                                                    excessively violent, harassing, or otherwise objectable
                                                                    material.
                                                                </li>
                                                                <li>
                                                                    Content or otherwise that exploits children under 18 years of age.
                                                                </li>
                                                                <li>
                                                                    Content that sells or promotes any products or services that are unlawful in the location at which the content is posted
                                                                    or received.
                                                                </li>
                                                                <li>
                                                                    Content that infringes or violates any copyright, patent, trademark, service mark, trade name, trade secret, or other intellectual
                                                                    property right of any third party.
                                                                </li>
                                                                <li>
                                                                    Content that promotes mail fraud, multi-level marketing (pyramid) schemes or other illegal or fraudulent activities.
                                                                </li>
                                                                <li>
                                                                    Content that posts or discloses any personally identifying information or private information about any third parties without
                                                                    their express consent.
                                                                </li>
                                                                <li>
                                                                    Reverse engineering, reverse compiling or otherwise deriving the underlying source code or structure or sequence of any cmsproject
                                                                    service, solution or technology.
                                                                </li>
                                                                <li>
                                                                    Reverse engineering, reverse compiling or otherwise deriving the underlying source code or structure or sequence of individual
                                                                    passwording of Subscriber Sites (or pages contained therein).
                                                                </li>
                                                            </ol>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h2>2. Privacy</h2>
                                                        <p>
                                                            The cmsproject Privacy Policy sets out our obligations with respect to the safeguarding, collection and use of Subscribers'
                                                            personal information. The cmsproject Privacy Policy is subject
                                                            to modification from time to time, and such changes are effective
                                                            upon posting of the modified policy to this URL:
                                                            <a href="//www.cmsproject/privacy-policy/">http://www.cmsproject/privacy-policy/</a>
                                                        </p>
                                                        <p>
                                                            Email newsletters will only be sent directly by cmsproject. Subscriber information will not be disclosed or sold to any third
                                                            parties. You may also be contacted by cmsproject's designated
                                                            customer review software provider for customer experience and
                                                            service feedback.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h2>3. Reservation of Rights</h2>
                                                        <p>
                                                            cmsproject reserves the right and sole discretion to:
                                                            <ol>
                                                                <li>
                                                                    Censor any website hosted on its servers that is deemed inappropriate.
                                                                </li>
                                                                <li>
                                                                    Review any account for excessive space or bandwidth utilization and to suspend service to those accounts that have exceeded
                                                                    allowed levels.
                                                                </li>
                                                                <li>
                                                                    Terminate any account for absuage usage, for providing fraudulent account information or fraudulent pratice.
                                                                </li>
                                                                <li>
                                                                    Terminate any account if the contents of its website results in, or are the subject of, legal action or threatened legal
                                                                    action against cmsproject or any of its affiliates or
                                                                    partners, without consideration for whether such legal
                                                                    action or threatened legal action is eventually determined
                                                                    to be with or without merit.
                                                                </li>
                                                                <li>
                                                                    Terminate any account for unsolicited, commercial e-mailing (i.e., Spam), illegal access to other computers or networks (i.e.,
                                                                    hacking), distribution of Internet viruses or similar
                                                                    distructive activities, activities whether lawful or
                                                                    unlawful that cmsproject determines to be harmful to
                                                                    its other customers, operations or reputation, or for
                                                                    any breach of this agreement.
                                                                </li>
                                                                <li>
                                                                    Suspend the Service at any time for any duration of time when necessary, without penalty or liability to ourselves.
                                                                </li>
                                                            </ol>
                                                        </p>
                                                        <p>
                                                            You agree that it may be necessary for us to temporarily suspend the Service for technical reasons or to maintain network
                                                            equipment or facilities.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h2>4. Limitation of Liability</h2>
                                                        <p>
                                                            The Service is provided on an "as is" and "as available" basis and the use of the Service is at your own risk. Website.com
                                                            makes no representations or warranties, either expressed or implied,
                                                            with respect to the Service, or any service or information provided
                                                            through the Service. Website.com is not responsible for any damages,
                                                            injury or economic loss arising from the use of the content or
                                                            Service provided by Website.com.
                                                        </p>
                                                        <p>
                                                            In no event will Website.com be liable to you for any direct, indirect, incidental or consequential damages or economic loss
                                                            arising out of the Service or in connection with your website
                                                            or any other services or products provided to you.
                                                        </p>
                                                        <p>
                                                            Website.com, its officers, directors, owners, agents and employees shall in no way be liable to you or anyone else for any
                                                            loss or injury resulting from the use of the Service or of your
                                                            website.
                                                        </p>
                                                        <p>
                                                            In no event shall Website.com be held liable for any damages or economic loss, whatsoever, as a result of notifying any official
                                                            of potentially illegal content on your website, or for providing
                                                            copies of your data files to the appropriate authorities or cooperating
                                                            with law enforcement efforts to locate persons who have posted
                                                            content that is illegal or promotes illegal conduct.
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <h2>5. Indemnification</h2>
                                                        <p>
                                                            You agree to indemnify and hold Website.com, its affiliates, sponsors, partners, directors, officers and employees harmless
                                                            from and against, and to reimburse Website.com with respect to,
                                                            any and all losses, damages, liabilities, claims, judgments,
                                                            settlements, fines, costs and expenses (including reasonable
                                                            related expenses, legal fees, costs of investigation) arising
                                                            out of or relating to your breach of this Agreement or use by
                                                            you or any third party of the Services.
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <h2>6. Force Majeure</h2>
                                                        <p>
                                                            Website.com will not be liable for any delay, interruption or failure in the provisioning of services if caused by acts of
                                                            God, declared or undeclared war, fire, flood, storm, slide, earthquake,
                                                            power failure, the inability to obtain equipment, supplies or
                                                            other facilities that are not caused by a failure to pay, labor
                                                            disputes, or other similar events beyond our control that may
                                                            prevent or delay service provisioning.
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <h2>7. Unenforceable Provisions</h2>
                                                        <p>
                                                            If any part of this Agreement is found to be invalid or unenforceable under applicable law, such part will be ineffective
                                                            to the extent of such invalid or unenforceable part only, without
                                                            affecting the remaining parts of this Agreement in any way.
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <h2>8. Governing Law</h2>
                                                        <p>
                                                            The rights and obligations of the parties pursuant to this Agreement are governed by, and shall be construed in accordance
                                                            with, the laws of the province of British Columbia and the federal
                                                            laws of Canada.
                                                        </p>
                                                        <p>
                                                            You may be subject to other local, provincial or state and national laws. You hereby irrevocably submit to the exclusive
                                                            jurisdiction of the Courts of the Province of British Columbia
                                                            for any dispute arising under or relating to this Agreement and
                                                            waive your right to institute legal proceedings in any other
                                                            jurisdiction. We shall be entitled to institute legal proceedings
                                                            in connection with any matter arising under this Agreement in
                                                            any jurisdiction where you reside, do business or have assets.
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <h2>9. Age of Majority</h2>
                                                        <p>
                                                            Website.com does not accept agreements and payments from persons under the legal age of 18 years. By submitting your account
                                                            application, you confirm that you are over 18 years of age or
                                                            your parent or legal guardian has agreed to accept this Agreement
                                                            on your behalf.
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <h2>10. Email</h2>
                                                        <p>
                                                            Website.com's email service provides customers with the capability to send and receive email via the Internet. Website.com
                                                            retains the right, at our sole discretion, to restrict the volume
                                                            of messages transmitted or received by you in order to maintain
                                                            the quality of our email services to other Subscribers and to
                                                            protect our computer systems.
                                                        </p>
                                                        <p>
                                                            As an owner and operator of the equipment and other resources utilized to provide services, Website.com has the legal right
                                                            to block electronic communications from other entities on the
                                                            Internet.
                                                        </p>
                                                        <p>
                                                            Website.com relies on the support of its sponsors and advertisers to help offset the cost of the Services offered to its
                                                            Subscribers. You acknowledge that as part of your Website.com
                                                            Service, advertisement sponsored email newsletters may be sent
                                                            to Subscribers and Website.com email service email accounts.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h2>11. Coding And Information</h2>
                                                        <p>
                                                            Even if you partispated in coading or data entering this coad is not registed or any kide of share is not provides for you
                                                            This rights will be reviced by Giridhar Addagalla only any kind
                                                            of share releation is not Given For the Registered Users.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h2>12. Formal Aggregrement</h2>
                                                        <p>
                                                            When you Registered in this site if you found the code is written by you will loose all the right regarding this once you
                                                            started register.
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <h2>13. Entire Agreement</h2>
                                                        <p>
                                                            This Agreement, as may be updated from time to time and posted at
                                                            <a href="terms-and-conditions">terms</a>, represents the complete agreement and understanding
                                                            between us with respect to the Service and supersedes any other
                                                            written or oral agreement.
                                                        </p>
                                                    </li>

                                                </ul>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END Form -->
                            <p> Any Issues Feel Free to report us.</p>

                        </div>
                        <!-- END Validation Wizard 2 -->
                    </div>


                </div>
            </div>

    </div>
    <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <?php include "footer.php"; ?>
    </div>
    <!-- END Page Container -->

    <!-- Codebase Core JS -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="assets/js/core/jquery.appear.min.js"></script>
    <script src="assets/js/core/jquery.countTo.min.js"></script>
    <script src="assets/js/core/js.cookie.min.js"></script>
    <script src="assets/js/codebase.js"></script>


    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/jquery-countdown/jquery.countdown.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/op_coming_soon.js"></script>
    <script src="assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
    <script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_forms_wizard.js"></script>

    <script>
        jQuery(function () {
            // Init page helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
            Codebase.helpers(['masked-inputs', 'tags-inputs']);
        });
    </script>

</body>

</html>