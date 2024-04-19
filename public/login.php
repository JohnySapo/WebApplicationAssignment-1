<<<<<<< HEAD
<!-- 
    -- Student Number: B00139596
    -- Student Name: Johny Ramos
    -- Course: T054 - Computer System Management
    -- Module: Web Application
    -- Lecturer: Robert Smith
-->

<?php include ("../app/View/components/login.php") ?>
=======
<?php require('../app/View/layout/header.php');?>
<title>Sign/Login in</title>
</head>
<body class="formBody">
  <a class="text-decoration-none text-dark fs-1" href="index.php">Brand</a>
  <div class="form-container-main" id="formContainer">
    <div class="form-container sign-in">
      <?php require("../app/View/components/signin.php") ?>
    </div>

    <div class="form-container sign-up">
      <?php require("../app/View/components/signup.php") ?>
    </div>

    <!-- Toggle left -->
    <div class="toggle-container">
      <div class="msstoggle">
        <div class="toggle-panel toggle-left">
          <h1 class="">Welcome Back!</h1>
          <p class="formTxt">Enter your personal details to use all of site features</p>
          <button class="hidden w-100 btn btn-lg bg-info bg-opacity-75" id="logIn">Login</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1 class="text-dark ">Hello, Friend!</h1>
          <p class="formTxt text-dark">Register with your personal details to use all of the site features</p>
          <button class="hidden w-100 btn btn-lg bg-info bg-opacity-75" id="signUp">Sign up</button>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
>>>>>>> f354be1a675ec2e2bf51ee30f8998d6f377f9942
