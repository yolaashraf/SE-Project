<script>
  function search_btn_Clicked(){
    console.log("IAM HERE");
    var variable = document.getElementById('input_search_bar').value;
    console.log(variable);
    window.location.replace('http://localhost/SE-Project/public/pages/'+variable);
  }
  </script>
<nav class="navbar navbar-expand-lg navbar-dark mb-4" style= "background-color:#ababab">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URLROOT . 'index'; ?>">
    <img src="https://i.imgur.com/6lsNNMk.png" alt="El Setat Market Logo" class="logo-set" width="100" height="75" />
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT . 'public'; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT . 'pages/about'; ?>">About Us</a>
        </li>
		<li class="nav-item">  
      <a class="nav-link" href="<?php echo URLROOT . 'pages/contact'; ?>">Contact</a>
    </li>
    <?php if (isset($_SESSION['user_name'])) { ?>
    <li class="nav-item">  
      <a class="nav-link" href="<?php echo URLROOT . 'pages/userProfile/userprofile'; ?>">User-Profile</a>
    </li>
    <li class="nav-item">  
      <a class="nav-link" href="<?php echo URLROOT . 'pages/booking'; ?>">Booking</a>
    </li>
    <?php }?>
		 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if (isset($_SESSION['user_id'])) {
              echo $_SESSION['user_name'];
            } else {
              echo 'User';
            }
            ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php if (isset($_SESSION['user_name'])) : ?>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'users/logout'; ?>">Logout</a></li>
            <?php else : ?>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'users/login'; ?>">Login</a></li>
              <li><a class="dropdown-item" href="<?php echo URLROOT . 'users/register'; ?>">Sign Up</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
            <?php endif; ?>
          </ul>
        </li>

      </ul>
    
        <input class="form-control me-2" id="input_search_bar" type="search" placeholder="Search" aria-label="Search">
        <button onclick="search_btn_Clicked()" class="btn btn-outline-success" >Search</button>

    </div>
  </div>
</nav>