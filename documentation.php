<?php 
	include('functions.php');
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Documentation</title>
    <!-- <link rel="icon" type="image/x-icon" href="logo.png"> -->
    <style>
        :root {
			--primary-color: #002E5D;
			--secondary-color: #002f5dc7;
		}
        * { 
	        margin: 0px; 
	        padding: 0px; 
            box-sizing: border-box;
        }
        body {
	        font-size: 120%;
	        background: #F8F8FF;
        } 
        .header {
	        width: 40%;
	        margin: 50px auto 0px;
	        color: white;
	        background: var(--primary-color);
	        text-align: center;
	        border: 1px solid var(--primary-color);
	        border-bottom: none;
	        border-radius: 10px 10px 10px 10px;
	        padding: 20px;
        }
        /* Navigation */
        .nav-header{
          width: 60%;
	        margin: 10px auto 0px;
          color: white;
	        background: var(--secondary-color);
	        border: 1px solid var(--secondary-color);
	        border-bottom: none;
	        border-radius: 10px 10px 10px 10px;
	        padding: 15px 5px 20px 5px;
        }
        .nav-list {
            margin-top:10px;
            margin-left: 35px;
        }
        .nav-list-item {
            list-style-type:none;
            display:inline;
            margin-right:8px;
        }
        .nav-list-link {
            cursor:pointer;
            color:white;
            text-decoration:none;
        }
        /* Column KB Cards */
        .row {
            margin-left: 8%;
        }
        /* Add padding BETWEEN each column (if you want) */
        .row,
        .row > .column {
          padding: 8px;
        }

        /* Create four equal columns that floats next to each other */
        .column {
            float: left;
            width: 30%;
        }

        /* Clear floats after rows */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }

        /* Content */
        .box {
          background-color: #fff;
          text-align: center;
          height: 200px;
          box-shadow: 4px 2px 2px rgba(170, 170, 170, 0.45);
        }
        .box:hover {
          transition: transform .3s ease;
          transform: scale(1.025);
        }
        .top-bar {
            height: 20px;
            background-size: cover;
            background-position: 50%;
            background-color: #002e5d;
            /* border-radius: 10px 10px 0px 0px; */
        }
        .content {
            padding: 10px;
        }
        .content p {
          margin-left: 10px;
          margin-right: 10px;
        }


        #hamburger-icon {
  margin: auto 0;
  display: none;
  cursor: pointer;
}

#hamburger-icon div {
  width: 35px;
  height: 3px;
  background-color: var(--primary-color);
  margin: 6px 0;
  transition: 0.4s;
}

.open .bar1 {
  -webkit-transform: rotate(-45deg) translate(-6px, 6px);
  transform: rotate(-45deg) translate(-6px, 6px);
}

.open .bar2 {
  opacity: 0;
}

.open .bar3 {
  -webkit-transform: rotate(45deg) translate(-6px, -8px);
  transform: rotate(45deg) translate(-6px, -8px);
}

.open .mobile-menu {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.mobile-menu {
  display: none;
  position: absolute;
  top: 50px;
  left: 0;
  height: calc(100vh - 50px);
  width: 100%;
}

.mobile-menu li {
  margin-bottom: 10px;
}

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 900px) {
          .header {
            width: 350px;
            color: red;
          }
          .nav-header {
            width: 350px;
            height: 100px;
          }
          .nav-list-log a {
            color: red;
            text-align: center;
          }
          .column {
            width: 50%;
          }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          #hamburger-icon {
    display: block;
    margin-left: 45%;
    margin-right: 45%;
  }
  .nav-header nav {
    display: none;
  }
          .column {
            width: 100%;
          }
        }


    </style>
</head>
<body>

	<div class="header">
		<h2>Documentation</h2>
	</div>

  <div class="nav-header">
    <nav>
    <div class="nav-list">
      <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="documentation.php">Documentation</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
    </div>
    <div class="nav-list-log">
      <?php if(isLoggedIn()){?>
        <li class="nav-list-item"><a class="nav-list-link" href="profileinfo.php">Profile</a></li>
        <li class="nav-list-item"><a class="nav-list-link" href="index.php?logout='1'">Logout</a></li>
		  <?php }else{ ?>
        <li class="nav-list-item"><a class="nav-list-link" href="login.php">Login</a></li>
        <li class="nav-list-item"><a class="nav-list-link" href="register.php">Register</a></li>
		  <?php } ?>
    </div>
    </nav>
  

  <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <ul class="mobile-menu">
        <div class="nav-list">
      <li class="nav-list-item"><a class="nav-list-link" href="index.php">Home</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="documentation.php">Documentation</a></li>
      <li class="nav-list-item"><a class="nav-list-link" href="about.php">About</a></li>
    </div>
    <div class="nav-list-log">
      <?php if(isLoggedIn()){?>
        <li class="nav-list-item"><a class="nav-list-link" href="profileinfo.php">Profile</a></li>
        <li class="nav-list-item"><a class="nav-list-link" href="index.php?logout='1'">Logout</a></li>
		  <?php }else{ ?>
        <li class="nav-list-item"><a class="nav-list-link" href="login.php">Login</a></li>
        <li class="nav-list-item"><a class="nav-list-link" href="register.php">Register</a></li>
		  <?php } ?>
    </div>
            
          </ul>
        </div>
        </div>



        <br><br><br>

    <div class="main-content">
      <div class="content-header">
        <h2 style="text-align:center;">Knowledge Based Documentation</h2>
        <h4 style="text-align:center;color:gray;">Check out these documents</h4>
      </div>

<div class="row">
      <div class="column">
      <a href="document-1.php" style="text-decoration:none;color:black;"><div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>Creating Domain/Subdomains on Cloudflare</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
    </a>
      </div>
      <div class="column">
        <a href="testdocument.php" style="text-decoration:none;color:black;"><div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>Test Document</h3>
              <p>Here are the first few words of the document and hope that it fits and wraps the text..</p>
            </div>
        </div>
        </a>
      </div>
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 3]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <div class="box">
          <div class="top-bar"></div>
            <div class="content">
              <h3>My Work[Box 4]</h3>
              <p>Lorem ipsum..</p>
            </div>
        </div>
      </div>
    </div>

    </div>
    <script>

function toggleMobileMenu(menu) {
  menu.classList.toggle('open');
}

    </script>
</body>
</html>