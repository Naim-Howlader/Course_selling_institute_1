<?php 
     require('../public/dashbord/db/user.php');
     $user = new User();
    //  $data = $user->getuserCourse('4353');
    if(isset($_GET['category'])){
      $data = $user->getuserCourse($_GET['category']);
     //echo "<pre>";
     //print_r(($data));
     //echo "</pre>";
    }
if(isset($_POST['btn'])){
      $demoaction = $_REQUEST['demoaction'];
if(!empty($demoaction)){
	require_once('dashbord/db/user.php');
	$demoobj = new User();
}
if($demoaction=='demoadduser' && !empty($_POST)){
  $democn = $_POST['demo_course_name'];
  $democui = $_POST['demo_course_uniid'];
	$demoname = $_POST['demoname'];
	$demoemail = $_POST['demoemail'];
	$demomobile = $_POST['demomobile'];



	//$demoId  = (!empty($_POST['demouserId'])) ? $_POST['demouserId']:"";
	$demoData = [
		'cus_name' => $demoname,
		'cus_email' => $demoemail,
		'cus_mobile' => $demomobile,
    'course_uni_id' => $democui,
    'course_name' => $democn,

	];
	$demoId = $demoobj->adddemo($demoData);
}
}

require_once('dashbord/db/user.php');
$demoobj = new User();
$batch = $demoobj->getBatchdemo('select_batch');


if(isset($_POST['purchasebtn'])){
  //echo "hi";
  $purchaseaction = $_REQUEST['purchaseaction'];
  if(!empty($purchaseaction)){
    require_once('dashbord/db/user.php');
      $purobj = new User();
  }
  if($purchaseaction=="purchaseadduser" && !empty($_POST)){
    $purcusname = $_POST['purchasename'];
    $purcusemail = $_POST['purchaseemail'];
    $purcusmobile = $_POST['purchasemobile'];
    $purbatch = $_POST['purchasebatch'];
    $purcusaddress = $_POST['purchaseaddress'];
    $purcname = $_POST['purchase_course_name'];
    $purcuid = $_POST['purchase_course_uniid'];
    //echo $purcname;
    $purchaseData = [
      'cus_name' => $purcusname,
      'cus_email' => $purcusemail,
      'cus_mobile' => $purcusmobile,
      'cus_address' => $purcusaddress,
      'course_name' => $purcname,
      'course_batch' => $purbatch,
      'unique_id' => $purcuid,
    ];
    //echo $purchaseData;
    $purchaseId = $purobj->addpurchase($purchaseData);
    //header("Location:test.php");

  }
}

     
?>
<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="assets/main-style.css">
  <link rel="stylesheet" href="../public/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../public/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="../public/assets/magnific-popup.css">

  <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../barfiller-master/css/style.css">
  <link rel="stylesheet" href="../public/assets/aos.css">
  <title>Document</title>
</head>

<body class="bg-white">
  <div>
    <nav class="bg-white md:bg-transparent fixed top-0 w-full bgcolorsd pt-5">
      <div class="max-w-6xl mx-auto px-10">
        <div class="flex justify-between items-center">
          <div class="flex space-x-7">
            <div class="logo">
              <!-- Website Logo -->
              <div class="flex items-center py-4 px-2">
              <h2 class="text-black text-sm md:text-base rooster logo">Computer Castle <i
                                class="fa-sharp fa-solid fa-power-off"></i></h2>
              </div>
            </div>
            <!-- Primary Navbar items -->
          </div>
          <div class="hidden md:flex items-center space-x-1 text-lg">
            <a href="#upcoming_batches" class="py-4 px-2 text-black">Upcoming Batches</a>
            <a href="#course_details" class="py-4 px-2 text-black">Course Details</a>
            <a href="#features" class="py-4 px-2 text-black">Features</a>
            <a href="#reviews" class="py-4 px-2 text-black">Reviews</a>
            <a href="#faq" class="py-4 px-2 text-black">Faq's</a>

          </div>

          <div class="hidden md:flex items-center space-x-1 text-lg">
            <a href=""><button type="button"
                class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Become
                Instructor</button></a>
            <a href=""><button type="button"
                class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Reach
                Us</button></a>
          </div>

          <!-- Secondary Navbar items -->

          <!-- Mobile menu button -->
          <div class="md:hidden flex items-center">
            <button class="outline-none mobile-menu-button">
              <svg class=" w-6 h-6 text-black  " x-show="!showMenu" fill="none" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <!-- mobile menu -->
      <div class="hidden mobile-menu flex bg-white text-center">
        <ul class="mx-auto">
          <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-black ">Home</a></li>
          <li><a href="#services" class="block text-black text-sm px-2 py-4  transition duration-300">Services</a></li>
          <li><a href="#about" class="block text-black text-sm px-2 py-4  transition duration-300">About</a></li>
          <li><a href="#contact" class="block text-black text-sm px-2 py-4  transition duration-300">Contact Us</a></li>
          <li><a href=""><button type="button"
                class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Become
                Instructor</button></a></li>
          <li><a href=""><button type="button"
                class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Reach
                Us</button></a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!--Landing section start here-->
  <div
    class="hero-sectiondddd bg-white  mx-auto px-5 sm:px-16 md:px-28 sm:bg-transparent pt-20 md:pt-24 shadow-xl shadow-black">
  </div>
  <div class="bg-[#F8F9FD] pt-7 sm:pt-10 lg:pt-16">
    <div class="landing-section px-5 sm:px-14 md:px-16 lg:grid grid-cols-12">
      <div class="img-section lg:col-span-4 lg:order-last lg:items-center lg:my-auto px-5 sm:px-20 md:px-28 lg:px-5">
        <img src="../public/dashbord/uploads/<?php echo  $data['course_img'] ?>" alt="" class="rounded-xl mx-auto">
      </div>
      <div class="title-section lg:col-span-8">

        <h2 class="text-2xl lg:text-4xl font-bold text-center lg:text-left pt-10">Advanced
          <?php echo $data['course_name'] ?> Course in
          Bangladesh
        </h2>
        <p class="text-center pt-5 lg:text-left lg:text-lg text-gray-800">
          <?php echo $data['course_back_des'] ?>
        </p>
        <div class="review-section text-center lg:text-left pt-5">
          <div class="text-center lg:text-left">
            <i class="fa-solid fa-star text-yellow-500"></i>
            <i class="fa-solid fa-star text-yellow-500"></i>
            <i class="fa-solid fa-star text-yellow-500"></i>
            <i class="fa-solid fa-star text-yellow-500"></i>
            <i class="fa-regular fa-star "></i>
            <p class="text-center lg:text-left">4(1743 Reviews)</p>
          </div>
        </div>
        <div class="btn-section flex gap-x-2 items-center justify-center lg:justify-start pt-5 pb-10">
          <a href="#demo_class"><button
            class="bg-white border border-gray-500 rounded-lg px-2 py-1 md:text-lg lg:text-xl lg:px-3 lg:py-2 hover:bg-blue-500 hover:text-white hover:border-blue-500 hover:transition-all hover:duration-300"><i
              class="fa-regular fa-circle-play pr-2 "></i>Book Free Class</button></a>
          <button
            class="bg-blue-500 border text-white border-blue-500 rounded-lg px-2 py-1 sm:text-lg lg:text-xl lg:px-3 lg:py-2 hover:bg-white hover:text-blue-500 hover:border hover:border-blue-500 hover:transition-all hover:duration-300">Download
            Curriculum</button>
        </div>
      </div>
    </div>
  </div>
  <!--Landing section end here-->



  <!--Upcoming-batch section start here-->
  <div id="upcoming_batches">
    <h2 class="text-xl font-bold text-center pt-10 pb-5 lg:text-left lg:px-16 lg:text-3xl">Upcoming Batch Details</h2>
    <div class="upcoming-batch-section lg:grid grid-cols-12 lg:items-center">

      <div class="upcoming-title-table px-5 sm:px-14 md:px-16 lg:col-span-6 bg-white">

        <div class="overflow-x-auto relative bg-white shadow-lg">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-lg bg-white">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="py-3 px-6 text-center">
                  Date
                </th>
                <th scope="col" class="py-3 px-6 text-center">
                  Duration
                </th>
                <th scope="col" class="py-3 px-6 text-center">
                  Batch Name
                </th>
                <th scope="col" class="py-3 px-20 text-center">
                  Timings
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row"
                  class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                  (Mon - Sat)
                </th>
                <td class="py-4 px-6 text-center">
                  45 Days
                </td>
                <td class="py-4 px-6 text-center">
                  A1
                </td>
                <td class="py-4 px-6 text-center">
                  8:00 AM to 9:00 AM
                </td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row"
                  class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                  (Mon - Sat)
                </th>
                <td class="py-4 px-6 text-center">
                  45 Days
                </td>
                <td class="py-4 px-6 text-center">
                  A2
                </td>
                <td class="py-4 px-6 text-center">
                  10:00 AM to 11:00 AM
                </td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row"
                  class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                  (Mon - Sat)
                </th>
                <td class="py-4 px-6 text-center">
                  45 Days
                </td>
                <td class="py-4 px-6 text-center">
                  B1
                </td>
                <td class="py-4 px-6 text-center">
                  6:00 PM to 7:00 PM
                </td>
              </tr>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row"
                  class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                  (Mon - Sat)
                </th>
                <td class="py-4 px-6 text-center">
                  45 Days
                </td>
                <td class="py-4 px-6 text-center">
                  B2
                </td>
                <td class="py-4 px-6 text-center">
                  8:00 PM to 9:00 PM
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="buy-course bg-white px-5 sm:px-14 md:px-16 pt-10 pb-10 lg:col-span-6 lg:px-0 lg:pr-10 items-center">
        <div class="buy-course-content  text-center  bg-white pb-5 shadow-xl p-5 lg:p-0 lg:px-0 sm:px-10 ">
          <h2 class="text-xl font-bold text-center  lg:pt-5  lg:px-16 lg:text-3xl pb-5">Purchase Course</h2>
          <div class="bg-green-400 p-2 font-bold w-1/2 rounded-lg text-white text-center mx-auto">
            <h2 class="md:text-lg ">Course Fees</h2>
            <h2 class="md:text-lg ">Tk 11,800/-</h2>
          </div>
          <form id="purchaseform" action="" method="post" class=" pt-5 pb-8 lg:pb-12">
            <div class="">
              <div class="form-group flex flex-col items-center ">
                <label for="name" class="pb-2  text-gray-500 text-left">Name</label>
                <input type="text" id="name" name="purchasename"
                  class="border border-gray-400 rounded text-gray-800 px-3 py-1 focus:ring focus:ring-blue-300 focus:outline-none w-3/4"
                  placeholder="Enter your name">
              </div>
              <div class="form-group flex flex-col items-center">
                <label for="name" class="pb-2 pt-5 lg:pt-5 text-gray-500">Email Address</label>
                <input type="text" id="name" name="purchaseemail"
                  class="border border-gray-400 rounded text-gray-800 px-3 py-1 focus:ring focus:ring-blue-300 focus:outline-none w-3/4"
                  placeholder="Enter your your email address">
              </div>
              <div class="form-group flex flex-col items-center">
                <label for="name" class="pb-2 pt-5 lg:pt-5 text-gray-500">Mobile Number</label>
                <input type="text" id="name" name="purchasemobile"
                  class="border border-gray-400 rounded text-gray-800 px-3 py-1 focus:ring focus:ring-blue-300 focus:outline-none w-3/4"
                  placeholder="Enter your mobile number">
              </div>
              <div class="form-group flex flex-col items-center">
                <label for="categories" class="pb-2 pt-5 lg:pt-5 text-gray-500">Select Batch</label>
                <select name="purchasebatch" id="categories"
                  class="border border-gray-400 rounded text-gray-800 px-3 py-1 focus:ring focus:ring-blue-300 focus:outline-none w-3/4">
                  <option value="" class="text-gray-500">Select Batch</option>
                  <?php while($cat = mysqli_fetch_assoc($batch)){ ?>
                  <option value="<?php echo $cat['batch'] ?>">
                    <?php echo $cat['batch'] ?>
                  </option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group flex flex-col items-center">
                <label for="name" class="pb-2 pt-5 lg:pt-5 text-gray-500">Address</label>
                <input type="text" id="name" name="purchaseaddress"
                  class="border border-gray-400 rounded text-gray-800 px-3 py-1 focus:ring focus:ring-blue-300 focus:outline-none w-3/4"
                  placeholder="Enter your address">
              </div>


              <input type="hidden" name="purchase_course_name" value="<?php echo  $data['course_name'] ?>">
              <input type="hidden" name="purchase_course_uniid" value="<?php echo  $data['unique_id'] ?>">
            </div>
            <div class="pt-5 lg:pt-8 flex justify-center">
              <input type="hidden" name="purchaseaction" value="purchaseadduser">
              <input type="hidden" name="purchaseuserId" id="purchaseuserId" value="">
              <button
                class="bg-blue-500 px-2 py-2 text-sm lg:text-base lg:px-3 lg:py-2 font-semibold uppercase text-white rounded-lg"
                name="purchasebtn">submit
                now</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  </form>
  <!--MODAL end here-->
  </div>
  </div>


  <!--Upcoming-batch section end here-->


  <!--Course details section start here-->
  <div id="course_details">
    <div class="bg-[#F8F9FD]">
      <h2
        class="text-xl md:text-2xl lg:text-3xl font-semibold text-center pb-5 pt-10 md:pt-12 md:pb-8 lg:pt-16 lg:pb-10 px-5 sm:px-10 md:px-16"
        data-aos="fade-up">
        Skill-Based
        <?php echo $data['course_name'] ?> Training With Certificate
      </h2>
      <div
        class="course-details-section bg-[#F8F9FD] px-5 sm:px-10 md:px-16 lg:grid grid-cols-12 lg:items-center lg:gap-x-5 pb-12 md:pb-16">

        <div class="image-section bg-white px-5 rounded-xl lg:col-span-4 lg:order-last" data-aos="fade-left">
          <img src="../public/assets/image/sample-certificate.png" alt="" class="px-1 py-5">
        </div>
        <div class="details-section text-gray-700 lg:col-span-8">
          <p class="pt-5 text-center lg:text-left" data-aos="fade-right">
            <?php echo $data['course_cer_des'] ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!--Course details section end here-->



  <!--Features section start here-->
  <div id="features">
    <div class="pb-10"></div>
    <div class="features-section bg-[#F8F9FD] px-5 sm:px-20 md:px-16">
      <h2
        class="text-center text-2xl md:text-2xl lg:text-3xl font-semibold pt-8 pb-8 sm:pt-10 sm:pb-10 md:pt-12 lg:pt-16 lg:pb-14 px-10"
        data-aos="fade-down">
        Why Learn
        <?php echo $data['course_name'] ?> With Computer Castle?
      </h2>
      <div
        class="features-section-content text-center space-y-5 sm:space-y-7 md:space-y-0 md:gap-y-7 md:gap-x-7 md:grid grid-cols-12">
        <div class="single-item bg-white px-7 pb-10 group relative rounded-xl shadow-lg md:col-span-6 lg:col-span-4"
          data-aos="flip-left">
          <div class="icon  flex justify-center ">
            <i
              class="fa-solid fa-display text-6xl text-blue-500 text-center pt-10 pb-5 absolute top-0  group-hover:-top-2 group-hover:transition-all group-hover:ease-in-out group-hover:duration-300"></i>
          </div>
          <h2
            class="text-lg font-medium text-center text-gray-800 pb-5 group-hover:text-blue-500 group-hover:transition-all group-hover:duration-300 pt-28 group-hover:ease-in-out">
            Work on Real Projects</h2>
          <p class="text-gray-600 text-base ">
            <?php echo $data['why_learn_1'] ?>
          </p>
        </div>

        <div class="single-item bg-white px-7 pb-10 group relative rounded-xl shadow-lg md:col-span-6 lg:col-span-4"
          data-aos="flip-left">
          <div class="icon  flex justify-center ">
            <i
              class="fa-solid fa-headphones-simple text-6xl text-blue-500 text-center pt-10 pb-5 absolute top-0  group-hover:-top-2 group-hover:transition-all group-hover:ease-in-out group-hover:duration-300"></i>
          </div>
          <h2
            class="text-lg font-medium text-center text-gray-800 pb-5 group-hover:text-blue-500 group-hover:transition-all group-hover:duration-300 pt-28 group-hover:ease-in-out">
            Advanced
            <?php echo $data['course_name'] ?> Techniques
          </h2>
          <p class="text-gray-600 text-base ">
            <?php echo $data['why_learn_2'] ?>
          </p>
        </div>

        <div class="single-item bg-white px-7 pb-10 group relative rounded-xl shadow-lg md:col-span-6 lg:col-span-4"
          data-aos="flip-left">
          <div class="icon  flex justify-center ">
            <i
              class="fa-solid fa-video text-6xl text-blue-500 text-center pt-10 pb-5 absolute top-0  group-hover:-top-2 group-hover:transition-all group-hover:ease-in-out group-hover:duration-300"></i>
          </div>
          <h2
            class="text-lg font-medium text-center text-gray-800 pb-5 group-hover:text-blue-500 group-hover:transition-all group-hover:duration-300 pt-28 group-hover:ease-in-out">
            Access to Premium Tools</h2>
          <p class="text-gray-600 text-base ">
            <?php echo $data['why_learn_3'] ?>
          </p>
        </div>

        <div class="single-item bg-white px-7 pb-10 group relative rounded-xl shadow-lg md:col-span-6 lg:col-span-4"
          data-aos="flip-right">
          <div class="icon  flex justify-center ">
            <i
              class="fa-regular fa-file-lines text-6xl text-blue-500 text-center pt-10 pb-5 absolute top-0  group-hover:-top-2 group-hover:transition-all group-hover:ease-in-out group-hover:duration-300"></i>
          </div>
          <h2
            class="text-lg font-medium text-center text-gray-800 pb-5 group-hover:text-blue-500 group-hover:transition-all group-hover:duration-300 pt-28 group-hover:ease-in-out">
            Training by
            <?php echo $data['course_name'] ?> Expert
          </h2>
          <p class="text-gray-600 text-base ">
            <?php echo $data['why_learn_4'] ?>
          </p>
        </div>

        <div class="single-item bg-white px-7 pb-10 group relative rounded-xl shadow-lg md:col-span-6 lg:col-span-4"
          data-aos="flip-right">
          <div class="icon  flex justify-center ">
            <i
              class="fa-solid fa-graduation-cap text-6xl text-blue-500 text-center pt-10 pb-5 absolute top-0  group-hover:-top-2 group-hover:transition-all group-hover:ease-in-out group-hover:duration-300"></i>
          </div>
          <h2
            class="text-lg font-medium text-center text-gray-800 pb-5 group-hover:text-blue-500 group-hover:transition-all group-hover:duration-300 pt-28 group-hover:ease-in-out">
            100% Job Assistance</h2>
          <p class="text-gray-600 text-base ">
            <?php echo $data['why_learn_5'] ?>
          </p>
        </div>

        <div class="single-item bg-white px-7 pb-10 group relative rounded-xl shadow-lg md:col-span-6 lg:col-span-4"
          data-aos="flip-right">
          <div class="icon  flex justify-center ">
            <i
              class="fa-solid fa-certificate text-6xl text-blue-500 text-center pt-10 pb-5 absolute top-0  group-hover:-top-2 group-hover:transition-all group-hover:ease-in-out group-hover:duration-300"></i>
          </div>
          <h2
            class="text-lg font-medium text-center text-gray-800 pb-5 group-hover:text-blue-500 group-hover:transition-all group-hover:duration-300 pt-28 group-hover:ease-in-out">
            <?php echo $data['course_name'] ?> Certification
          </h2>
          <p class="text-gray-600 text-base ">
            <?php echo $data['why_learn_6'] ?>
          </p>
        </div>
      </div>
      <div class="btn-section pt-10 flex justify-center space-x-2 sm:space-x-5 lg:space-x-7 pb-10">
        <button
          class="bg-blue-500 px-2 py-2 lg:px-3 lg:py-3 lg:text-lg text-white rounded-lg hover:bg-white hover:text-blue-500 hover:border hover:border-blue-500 hover:transition-all hover:duration-300"><i
            class="fa-brands fa-whatsapp pr-2"></i>Enquire on WhatsApp</button>
        <button
          class="bg-white text-black border px-2 py-2 lg:px-3 lg:py-3 lg:text-lg rounded-lg hover:bg-blue-500 hover:text-white hover:border-blue-500 hover:transition-all hover:duration-300">Call
          Us</button>
      </div>

    </div>
    <div class="pb-20 bg-white"></div>
    <div class="features-image-section bg-white px-5 sm:px-16 md:grid grid-cols-12 md:items-center">

      <div class="px-10 sm:px-16 md:px-10 md:col-span-6">
        <div class="flex justify-center">
          <div
            class="svg-section bg-blue-500 w-72 h-60 sm:h-72 sm:w-80 md:h-72 md:w-80 lg:h-72 lg:w-96 relative flex justify-center "
            data-aos="fade-left">
            <img src="../public/assets/image/features-image-1.png" alt="" class="w-80  absolute bottom-0">
          </div>
        </div>
      </div>
      <div class="title-section md:col-span-6" data-aos="fade-right">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold pt-7 pb-5 lg:pb-10 text-center">“It's time for you to
          future-proof your career!”</h2>
        <p class="text-gray-700 text-center pb-5 lg:pb-10">“We know that we are influencing the foundations of your
          future, and we take this responsibility very seriously. With WsCube Tech, I ensure that you always get
          top-class
          training backed by practical projects and future prospects. Wishing you a successful & future-proof career!”
        </p>
        <div class="line-section flex items-center gap-x-5">
          <div class="line h-1 w-10 bg-black"></div>
          <p class="font-semibold lg:text-lg">Naim Howlader, Founder, WsCube Tech</p>
        </div>
        <div class="pb-10 md:pb-16 lg:pb-20"></div>
      </div>
    </div>
  </div>
  <!--Features section end here-->


  <!--Review section start here-->
  <div id="reviews">
    <div class="review-section bg-[#001C34]">
      <div class="title-section px-5 sm:px-16 lg:px-48">
        <h2 class="text-white text-center text-xl md:text-2xl lg:text-3xl pt-8 lg:pt-20 sm:pt-12  font-semibold"
          data-aos="fade-down">What
          Learners Are Saying About Our Online SEO Course in Bangladesh?</h2>
        <p class="text-gray-200 text-center pt-3 sm:pt-5 pb-16 lg:text-lg">We are proud to have positively influenced
          the
          career foundations for thousands of learners across Bangladesh and Asian countries.</p>
      </div>
      <div class="owl-section">
        <div class="testimonial-section">
          <div class="testimonial-owl-carousel pb-10">
            <div class="owl-carousel owl-review owl-theme sm:px-16 lg:px-20">
              <div class="item px-5 pb-10">
                <div class="single-item bg-[#0B2F4F] p-5 rounded-lg shadow-xl">
                  <p class="text-gray-300 pt-2">I was already doing my job in SEO for the last 6 months but I just had
                    basic knowledge. By taking this course, I’ve got the skills to work on technical SEO also. My
                    performance at the job has significantly improved. I highly recommend this course to everyone who
                    wants to learn advanced SEO.”</p>
                  <div class="img w-12 flex items-center space-x-5 pt-7">
                    <img src="../public/assets/image/DSC_0567.jpg" alt="" class="rounded-full  h-12">
                    <h2 class="text-white">Naim&nbsp;Howlader</h2>
                  </div>
                </div>
              </div>
              <div class="item px-5 pb-10">
                <div class="single-item bg-[#0B2F4F] p-5 rounded-lg shadow-xl">
                  <p class="text-gray-300 pt-2">I was already doing my job in SEO for the last 6 months but I just had
                    basic knowledge. By taking this course, I’ve got the skills to work on technical SEO also. My
                    performance at the job has significantly improved. I highly recommend this course to everyone who
                    wants to learn advanced SEO.”</p>
                  <div class="img w-12 flex items-center space-x-5 pt-7">
                    <img src="../public/assets/image/DSC_0567.jpg" alt="" class="rounded-full  h-12">
                    <h2 class="text-white">Naim&nbsp;Howlader</h2>
                  </div>
                </div>
              </div>
              <div class="item px-5 pb-10">
                <div class="single-item bg-[#0B2F4F] p-5 rounded-lg shadow-xl">
                  <p class="text-gray-300 pt-2">I was already doing my job in SEO for the last 6 months but I just had
                    basic knowledge. By taking this course, I’ve got the skills to work on technical SEO also. My
                    performance at the job has significantly improved. I highly recommend this course to everyone who
                    wants to learn advanced SEO.”</p>
                  <div class="img w-12 flex items-center space-x-5 pt-7">
                    <img src="../public/assets/image/DSC_0567.jpg" alt="" class="rounded-full  h-12">
                    <h2 class="text-white">Naim&nbsp;Howlader</h2>
                  </div>
                </div>
              </div>
              <div class="item px-5 pb-10">
                <div class="single-item bg-[#0B2F4F] p-5 rounded-lg shadow-xl">
                  <p class="text-gray-300 pt-2">I was already doing my job in SEO for the last 6 months but I just had
                    basic knowledge. By taking this course, I’ve got the skills to work on technical SEO also. My
                    performance at the job has significantly improved. I highly recommend this course to everyone who
                    wants to learn advanced SEO.”</p>
                  <div class="img w-12 flex items-center space-x-5 pt-7">
                    <img src="../public/assets/image/DSC_0567.jpg" alt="" class="rounded-full  h-12">
                    <h2 class="text-white">Naim&nbsp;Howlader</h2>
                  </div>
                </div>
              </div>
              <div class="item px-5 pb-10">
                <div class="single-item bg-[#0B2F4F] p-5 rounded-lg shadow-xl">
                  <p class="text-gray-300 pt-2">I was already doing my job in SEO for the last 6 months but I just had
                    basic knowledge. By taking this course, I’ve got the skills to work on technical SEO also. My
                    performance at the job has significantly improved. I highly recommend this course to everyone who
                    wants to learn advanced SEO.”</p>
                  <div class="img w-12 flex items-center space-x-5 pt-7">
                    <img src="../public/assets/image/DSC_0567.jpg" alt="" class="rounded-full  h-12">
                    <h2 class="text-white">Naim&nbsp;Howlader</h2>
                  </div>
                </div>
              </div>
              <div class="item px-5 pb-10">
                <div class="single-item bg-[#0B2F4F] p-5 rounded-lg shadow-xl">
                  <p class="text-gray-300 pt-2">I was already doing my job in SEO for the last 6 months but I just had
                    basic knowledge. By taking this course, I’ve got the skills to work on technical SEO also. My
                    performance at the job has significantly improved. I highly recommend this course to everyone who
                    wants to learn advanced SEO.”</p>
                  <div class="img w-12 flex items-center space-x-5 pt-7">
                    <img src="../public/assets/image/DSC_0567.jpg" alt="" class="rounded-full  h-12">
                    <h2 class="text-white">Naim&nbsp;Howlader</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Review section end here-->


  <!--Review image section start here-->
  <div class="review-image bg-[#F8F9FD] px-5 md:px-10 lg:px-20">
    <h2 class="pt-10 md:pt-16 md:pb-10 lg:pb-16 text-xl sm:text-2xl lg:text-3xl text-center font-semibold pb-5 ">Top
      Companies Hiring SEO Executives & Experts in Bangladesh</h2>
    <img src="../public/assets/image/companies hiring seo experts.jpg" alt="" class="w-full pb-10 md:pb-16">
  </div>
  <div class="review-form" id="demo_class">
    <div class="title px-10 sm:px-20 md:px-24 lg:px-56 pt-8 md:pt-12">
      <h2 class="text-xl sm:text-2xl lg:text-3xl text-center font-semibold" data-aos="fade-up">Book 2-Days of FREE Demo
        Classes of Our
        Advanced SEO Course!</h2>
      <p class="text-center text-gray-800 pt-5 pb-5">Want to take a demo class before enrolling? Just fill-up the form
        to register yourself for India’s most trusted online digital marketing and SEO courses.</p>
    </div>
    <div class="px-5 pb-10 lg:pb-16 sm:px-16 md:px-24">
      <div class="form-section px-5 bg-white shadow-xl">


        <form id="demoform" action="" method="post" enctype="multipart/form-data" class="pt-5 pb-8 lg:pb-12">
          <div class="">
            <div class="lg:flex lg:gap-x-5 lg:justify-around lg:pt-5">
              <div class="form-group flex flex-col lg:w-1/3">
                <label for="name" class="pb-2 text-gray-500">Name</label>
                <input type="text" id="name" name="demoname"
                  class="border border-gray-400 rounded text-gray-800 px-3 py-1 focus:ring focus:ring-blue-300 focus:outline-none "
                  placeholder="Enter your name">
              </div>
              <div class="form-group flex flex-col lg:w-1/3">
                <label for="name" class="pb-2 pt-5 lg:pt-0 text-gray-500">Email Address</label>
                <input type="text" id="name" name="demoemail"
                  class="border border-gray-400 rounded text-gray-800 px-3 py-1 focus:ring focus:ring-blue-300 focus:outline-none "
                  placeholder="Enter your your address">
              </div>
              <div class="form-group flex flex-col lg:w-1/3">
                <label for="name" class="pb-2 pt-5 lg:pt-0 text-gray-500">Mobile Number</label>
                <input type="text" id="name" name="demomobile"
                  class="border border-gray-400 rounded text-gray-800 px-3 py-1 focus:ring focus:ring-blue-300 focus:outline-none "
                  placeholder="Enter your mobile number">
              </div>
            </div>

            <input type="hidden" name="demo_course_name" value="<?php echo  $data['course_name'] ?>">
            <input type="hidden" name="demo_course_uniid" value="<?php echo  $data['unique_id'] ?>">
          </div>
          <div class="pt-5 lg:pt-8 flex justify-center">
            <input type="hidden" name="demoaction" value="demoadduser">
            <input type="hidden" name="demouserId" id="demouserId" value="">
            <button
              class="bg-blue-500 px-2 py-2 text-sm lg:text-base lg:px-3 lg:py-2 font-semibold uppercase text-white rounded-lg"
              name="btn">submit
              now</button>
          </div>
        </form>


      </div>
    </div>
  </div>
  <!--Review image section end here-->

  <!--Faq section start here-->
  <div id="faq">
    <div class="faq-section bg-[#F8F9FD]">
      <main class="p-5 bg-light-blue">
        <div class="flex justify-center items-start my-2">
          <div class="w-full sm:w-10/12 md:w-3/4 my-1">
            <h2
              class="text-xl font-semibold text-vnet-blue mb-2 text-center pb-2 pt-2 sm:pb-4 md:text-2xl md:pt-5 md:pb-5 lg:text-3xl lg:pt-7 lg:pb-7"
              data-aos="fade-down">
              FAQs About
              <?php echo $data['course_name'] ?> Course With Certificate
            </h2>
            <ul class="flex flex-col">
              <li class="bg-white my-2 shadow-lg" x-data="accordion(1)" data-aos="zoom-in">
                <h2 @click="handleClick()"
                  class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span>What is
                    <?php echo $data['course_name'] ?> for beginners?
                  </span>
                  <svg :class="handleRotate()"
                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                    viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                  </svg>
                </h2>
                <div x-ref="tab" :style="handleToggle()"
                  class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all">
                  <p class="p-3 text-gray-900">
                    <?php echo $data['faq_ans_1'] ?>
                  </p>
                </div>
              </li>
              <li class="bg-white my-2 shadow-lg" x-data="accordion(2)" data-aos="zoom-in">
                <h2 @click="handleClick()"
                  class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span>How can I learn
                    <?php echo $data['course_name'] ?>?
                  </span>
                  <svg :class="handleRotate()"
                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                    viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                  </svg>
                </h2>
                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                  x-ref="tab" :style="handleToggle()">
                  <p class="p-3 text-gray-900">
                    <?php echo $data['faq_ans_2'] ?>
                  </p>
                </div>
              </li>
              <li class="bg-white my-2 shadow-lg" x-data="accordion(3)" data-aos="zoom-in">
                <h2 @click="handleClick()"
                  class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span>Is
                    <?php echo $data['course_name'] ?> a good career?
                  </span>
                  <svg :class="handleRotate()"
                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                    viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                  </svg>
                </h2>
                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                  x-ref="tab" :style="handleToggle()">
                  <p class="p-3 text-gray-900">
                    <?php echo $data['faq_ans_3'] ?>
                  </p>
                </div>
              </li>
              <li class="bg-white my-2 shadow-lg" x-data="accordion(4)" data-aos="zoom-in">
                <h2 @click="handleClick()"
                  class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span>Is
                    <?php echo $data['course_name'] ?> difficult to learn?
                  </span>
                  <svg :class="handleRotate()"
                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                    viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                  </svg>
                </h2>
                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                  x-ref="tab" :style="handleToggle()">
                  <p class="p-3 text-gray-900">
                    <?php echo $data['faq_ans_4'] ?>
                  </p>
                </div>
              </li>
              <li class="bg-white my-2 shadow-lg" x-data="accordion(5)" data-aos="zoom-in">
                <h2 @click="handleClick()"
                  class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span>What if I miss a class due to any reason?</span>
                  <svg :class="handleRotate()"
                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                    viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                  </svg>
                </h2>
                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                  x-ref="tab" :style="handleToggle()">
                  <p class="p-3 text-gray-900">
                    <?php echo $data['faq_ans_5'] ?>
                  </p>
                </div>
              </li>
              <li class="bg-white my-2 shadow-lg" x-data="accordion(6)" data-aos="zoom-in">
                <h2 @click="handleClick()"
                  class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span>Can I take a demo class before paying the fees?</span>
                  <svg :class="handleRotate()"
                    class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                    viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                    </path>
                  </svg>
                </h2>
                <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                  x-ref="tab" :style="handleToggle()">
                  <p class="p-3 text-gray-900">
                    <?php echo $data['faq_ans_6'] ?>
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </main>
    </div>
  </div>
  <!--Faq section end here-->

  <!--Other course section start here-->
  <div class="other-course-section">
    <div class="title px-5 sm:px-20 lg:px-24">
      <h2
        class="text-xl font-semibold pt-5 pb-7 sm:text-2xl sm:pt-10 sm:pb-7 md:pt-12 md:pb-10 lg:text-3xl lg:pt-14 lg:pb-12">
        Other Relevant Courses</h2>
    </div>
    <div class="other-course-main">
      <div class="testimonial-owl-carousel pb-10">
        <div class="owl-carousel  owl-theme sm:px-16 lg:px-20" id="owl-nav">
          <div class="item px-5 sm:pb-5 md:pb-10">
            <div class="course-main-section-card md:col-span-6 lg:col-span-4">
              <div class="single-card bg-white rounded-xl shadow-xl overflow-hidden">
                <img src="assets/image/course-web-dev-2.png" alt="" srcset=""
                  class="rounded-t-xl md:w-full md:h-[200px] hover:scale-110 transition-all duration-500 ease-out">
                <div class="single-card-text px-3">
                  <h2 class="text-xl font-semibold pt-5 pb-2">Web Design Course</h2>

                  <ol class="list-disc px-5 pb-5 text-gray-600">
                    <li>60 days training</li>
                    <li>14K+ student trained</li>
                    <li>Professional Certification</li>
                  </ol>
                  <a href="" class="text-blue-600 ">Learn More <i class="fa-solid fa-arrow-right pb-10"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item px-5 sm:pb-5 md:pb-10">
            <div class="course-main-section-card md:col-span-6 lg:col-span-4 pb-10">
              <div class="single-card bg-white rounded-xl shadow-xl overflow-hidden">
                <img src="assets/image/course-python.jpeg" alt="" srcset=""
                  class="rounded-t-xl md:w-full md:h-[200px] hover:scale-110 transition-all duration-500 ease-out">
                <div class="single-card-text px-3">
                  <h2 class="text-xl font-semibold pt-5 pb-2">Web Design Course</h2>

                  <ol class="list-disc px-5 pb-5 text-gray-600">
                    <li>60 days training</li>
                    <li>14K+ student trained</li>
                    <li>Professional Certification</li>
                  </ol>
                  <a href="" class="text-blue-600 ">Learn More <i class="fa-solid fa-arrow-right pb-10"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item px-5 sm:pb-5 md:pb-10">
            <div class="course-main-section-card md:col-span-6 lg:col-span-4 pb-10">
              <div class="single-card bg-white rounded-xl shadow-xl overflow-hidden">
                <img src="assets/image/course-python.jpeg" alt="" srcset=""
                  class="rounded-t-xl md:w-full  md:h-[200px] hover:scale-110 transition-all duration-500 ease-out">
                <div class="single-card-text px-3">
                  <h2 class="text-xl font-semibold pt-5 pb-2">Web Design Course</h2>

                  <ol class="list-disc px-5 pb-5 text-gray-600">
                    <li>60 days training</li>
                    <li>14K+ student trained</li>
                    <li>Professional Certification</li>
                  </ol>
                  <a href="" class="text-blue-600 ">Learn More <i class="fa-solid fa-arrow-right pb-10"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item px-5 sm:pb-5 md:pb-10">
            <div class="course-main-section-card md:col-span-6 lg:col-span-4">
              <div class="single-card bg-white rounded-xl shadow-xl overflow-hidden">
                <img src="assets/image/course-web-dev-2.png" alt="" srcset=""
                  class="rounded-t-xl md:w-full  md:h-[200px] hover:scale-110 transition-all duration-500 ease-out">
                <div class="single-card-text px-3">
                  <h2 class="text-xl font-semibold pt-5 pb-2">Web Design Course</h2>

                  <ol class="list-disc px-5 pb-5 text-gray-600">
                    <li>60 days training</li>
                    <li>14K+ student trained</li>
                    <li>Professional Certification</li>
                  </ol>
                  <a href="" class="text-blue-600 ">Learn More <i class="fa-solid fa-arrow-right pb-10"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item px-5 sm:pb-5 md:pb-10">
            <div class="course-main-section-card md:col-span-6 lg:col-span-4 pb-10">
              <div class="single-card bg-white rounded-xl shadow-xl overflow-hidden">
                <img src="assets/image/course-python.jpeg" alt="" srcset=""
                  class="rounded-t-xl md:w-full  md:h-[200px] hover:scale-110 transition-all duration-500 ease-out">
                <div class="single-card-text px-3">
                  <h2 class="text-xl font-semibold pt-5 pb-2">Web Design Course</h2>

                  <ol class="list-disc px-5 pb-5 text-gray-600">
                    <li>60 days training</li>
                    <li>14K+ student trained</li>
                    <li>Professional Certification</li>
                  </ol>
                  <a href="" class="text-blue-600 ">Learn More <i class="fa-solid fa-arrow-right pb-10"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="item px-5 sm:pb-5 md:pb-10">
            <div class="course-main-section-card md:col-span-6 lg:col-span-4 pb-10">
              <div class="single-card bg-white rounded-xl shadow-xl overflow-hidden">
                <img src="assets/image/course-python.jpeg" alt="" srcset=""
                  class="rounded-t-xl md:w-full  md:h-[200px] hover:scale-110 transition-all duration-500 ease-out">
                <div class="single-card-text px-3">
                  <h2 class="text-xl font-semibold pt-5 pb-2">Web Design Course</h2>

                  <ol class="list-disc px-5 pb-5 text-gray-600">
                    <li>60 days training</li>
                    <li>14K+ student trained</li>
                    <li>Professional Certification</li>
                  </ol>
                  <a href="" class="text-blue-600 ">Learn More <i class="fa-solid fa-arrow-right pb-10"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Other course section end here-->


    <!--Footer section start here-->
    <footer>
      <div class="footer-section bg-[#F8F9FD] text-black sm:grid sm:grid-cols-12 sm:px-10 sm:pb-5 lg:pb-28">
        <div class="about-section pt-16 px-5 sm:col-span-6 lg:col-span-5">
          <h2 class="text-lg lg:text-xl font-bold pb-7">About Me</h2>
          <p class="text-sm text-gray-600 pb-5">Do you want to be even more successful? Learn to love learning and
            growth. The more effort you put into improving your skills,</p>
          <p class="text-sm text-gray-600">Copyright ©2022 All rights reserved | This template is made with by <span
              class="text-blue-600"><i>&nbsp; &nbsp;Naim Howlader</i></span></p>
        </div>
        <div class="newsletter-section pt-10 sm:pt-16 px-5 sm:col-span-6 lg:col-span-5">
          <h2 class="text-lg lg:text-xl font-bold pb-7">Newsletter</h2>
          <p class="text-sm text-gray-600 pb-5">Stay updated with our latest trends</p>
          <div class="">
            <div
              class="email-box w-4/5 h-10 flex bg-white text-black items-center outline outline-1 outline-gray-500 relative">
              <input type="text" name="" id="" placeholder="Email Address"
                class="bg-transparent outline-none pl-5 text-black w-full">
              <div
                class="bg-gradient-to-r from-indigo-500 to-cyan-300 w-10 h-10 flex items-center absolute right-0 justify-center">
                <i class="fa-solid fa-arrow-right text-white "></i>
              </div>
            </div>
          </div>
        </div>
        <div class="follow-section pt-10 lg:pt-16 px-5 sm:col-span-6 lg:col-span-2">
          <h2 class="text-lg lg:text-xl font-bold pb-7">Follow Me</h2>
          <p class="text-sm text-gray-600 pb-5">Let us be social</p>
          <div class="icon space-x-2 pb-16">
            <i class="fa-brands fa-facebook text-lg lg:text-xl"></i>
            <i class="fa-brands fa-whatsapp text-lg lg:text-xl"></i>
            <i class="fa-brands fa-instagram text-lg lg:text-xl"></i>
          </div>
        </div>
      </div>
    </footer>
    <!--Footer section end here-->


    <!--test section-->



    <!--test section-->



    <script>
      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
    <script type="text/javascript">
      function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
      }
    </script>

    <script>
      document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
          tab: 0
        });

        Alpine.data('accordion', (idx) => ({
          init() {
            this.idx = idx;
          },
          idx: -1,
          handleClick() {
            this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
          },
          handleRotate() {
            return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
          },
          handleToggle() {
            return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
          }
        }));
      })

    </script>


    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="../public/js/owl.carousel.min.js"></script>
    <script src="../public/js/jquery.stickem.js"></script>
    <script src="../public/js/jquery.magnific-popup.min.js"></script>
    <script src="../barfiller-master/js/jquery.barfiller.js"></script>
    <script src="../public/js/jquery.waypoints.min.js"></script>
    <script src="../public/js/typer.min.js"></script>
    <script src="../public/js/jquery.smoothscroll.min.js"></script>
    <script src="../public/js/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="../public/dashbord/js/script.js"></script>
</body>

</html>