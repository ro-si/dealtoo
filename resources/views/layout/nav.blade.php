<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
{{--  --}}



  <title>Blog-dealtoo</title>
</head>
<body>
  


{{-- <nav class="{{ request()->is('/') ? '' : 'nav' }} navbar navbar-expand-lg navbar-light bg-light" >
  <a href="https://dealtoo.co/">
    <div class="logo">
      <img src="{{ asset('assets/help-image/logo-dealtoo.png') }}" alt="logo dealtoo">
    </div>
  </a>
  



    <div class="container-fluid">
        <!-- Bouton de navigation responsive (Visible sur petit écran) -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
                <title>Menu</title>
                <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
            </svg>
        </button>

        <!-- Contenu du menu (Visible sur grand écran et masqué sur petit écran) -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
            </ul>
            <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#addArticleModal">
                Ajouter un Article
            </button>
        </div>

        
    </div>

  
  

  
  


</nav> --}}


<nav class="{{ request()->is('/') ? '' : 'nav' }} navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand" href="{{ url('/') }}">
          <div class="logo">
              <img src="{{ asset('assets/help-image/logo-dealtoo.png') }}" alt="logo dealtoo">
          </div>
      </a>

      <!-- Bouton de navigation responsive (Visible sur petit écran) -->
      <button class="navbar-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false">
              <title>Menu</title>
              <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path>
          </svg>
      </button>

      <!-- Contenu du menu (Visible sur grand écran et masqué sur petit écran) -->
      <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav me-left mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i> Accueil</a>
              </li>
              {{-- <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
              </li> --}}
          </ul>
          @if (Session::has('user'))
              <span class="navbar-text ms-2">Welcome, {{ Session::get('user')['name'] }}!</span>
          @else
              <button type="button" class="btn btn-primary ms-2 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#addArticleModal">
                  Ajouter un Article
              </button>
          @endif
      </div>
  </div>
</nav>


<style>
  nav {
    padding: 13px 100px;

    display: flex;
    /* width: 65%; */
background: #FAFAFA;
    align-items: center;
    justify-content: space-between;
    margin: 0 auto;


    img {
      height: auto;
      width: 200px;
    }

    h4 {
      font-size: 24px;
      font-weight: 500;
      ine-height: 1.2;
      margin: 0;
    }

  }
  .navbar-nav {
   margin-left: auto; /* Aligne les éléments de menu à droite */
    gap: 18px;
    font-size: 20px;
   
    color: #2a2929;

        }
        .btn-primary {
            display: block; /* Assure que le bouton occupe une ligne entière */
        }

    .navbar-nav .nav-link:hover {
            color: orange;
          }

  .nav {
    padding: 13px 100px;

    display: flex;
    border-bottom: 1px solid rgba(0, 0, 0, 0.178);
    align-items: center;
    justify-content: space-between;
    /* width: 65%; */
    margin: 0 auto;

  }

  .nav-left {
    display: flex;
    align-items: center;
  }


  .nav-left .
  .flag-container {
    position: relative;
    display: flex;
    align-items: center;
    gap: 4px;
    cursor: pointer;

    .arrow {
      width: 0;
      height: 0;
      margin-left: 2px;
      vertical-align: middle;
      border-top: 4px dashed;
      border-right: 4px solid transparent;
      border-left: 4px solid transparent;
    }

    img {
      width: 32px;
      height: 32px;
      border-radius: 200px;
    }

    
  }


  



 .btn.btn-primary{
color: #333;
background-color: #f1df28f2;
border: #f1df28f2;
font-size: 15px;

  }

  .btn{
    text-transform: none;

  }
  .flag-dropdown {
    position: absolute;
    background: white;
    margin: 0;
    width: 150px;
    right: 50%;
    top: 50px;
    transform: translateX(50%);
    box-shadow: var(--dropdown-content-shadow, 0 0 1px rgba(96, 96, 96, .31), 0 12px 24px -6px rgba(96, 96, 96, .15));
    padding: 6px 8px;
    border-radius: 4px;
    display: none;
    transition: max-height 0.3s ease;



    img {
      height: 16px;
      width: 16px;
      /* margin-right: 8px; */
    }

    span {
      font-size: 0.9rem;
    }

    svg {
      height: 16px;
      width: 16px;
      justify-self: flex-end;
      /* margin-left: 24px; */
    }
  }


  .show {
    display: block;
  }


 
 




  .flag-dropdown li {
    list-style-type: none;
    display: grid;
    grid-template-columns: 20% 60% 20%;
    align-items: center;
    padding: 4px 8px;

    cursor: pointer;
    margin: 5px 0;
    border-radius: 5px;
    transition: 0.2s;
  }

  .flag-dropdown li:hover {
    background: rgba(0, 0, 0, 0.082);

  }

  .checkmark {
    display: none;
  }

  .selected {
    font-weight: 600;
  }


  /* responsive  */

  @media screen and (max-width: 1632px) {
    /* nav {
      width: 70%;
      padding: 13px 0;
    } */
  }

  @media screen and (max-width: 1423px) {
    .flag-dropdown {
      right: 0;
      transform: translateX(0%)
    }

    .nav {
      padding: 13px 2.5%;
      width: 100%;
    }

    nav {
      width: 95%;
      padding: 13px 0;
    }

    h1 {
      font-size: 30px;
    }
  }

  @media screen and (max-width: 1158px) {
    nav {
      width: 95%;
      padding: 13px 0;
    }
  }

  @media screen and (max-width: 512px) {
    .logo img {
      width: 130px;
    }

    h4 {
      font-size: 14px;
    }
  }


  /* media queries  */
  /* @media screen and (max-width: 1670px) {
    .nav {
      width: 70%;
    }
  }

  @media screen and (max-width: 1661px) {
    .content {
      width: 75%;
    }
  }

  @media screen and (max-width: 1551px) {
    .nav {
      width: 80%;
    }
  }

  @media screen and (max-width: 1450px) {
    .nav {
      width: 85%;
    }
  }

  @media screen and (max-width: 1408px) {
    .nav {
      width: 90%;
    }
  } */
</style>




<script>
  // Get the flag container
  let flagContainer = document.querySelector(".flag-container");


  // Get the flag dropdown
  var flagDropdown = document.querySelector(".flag-dropdown");

  // Toggle the dropdown when clicking on the flag container
  flagContainer.addEventListener("click", function(event) {
    flagDropdown.classList.toggle("show");
    event.stopPropagation(); // Prevent the click event from bubbling up
  });

  // Close the dropdown when clicking elsewhere on the page
  document.addEventListener("click", function(event) {
    if (!flagContainer.contains(event.target)) {
      flagDropdown.classList.remove("show");
    }
  });




  document.addEventListener("DOMContentLoaded", function() {
    // Get all flag items
    const flagItems = document.querySelectorAll(".flag-item");

    // Get the flag container
    const flagContainer = document.querySelector(".flag-container");
    const flagImage = flagContainer.querySelector(".current-language-flag");

    // Function to handle flag item click
    function handleFlagItemClick(flagItem) {
      // Remove "selected" class from the previously selected flag item
      const prevSelectedFlagItem = document.querySelector(".flag-item.selected");
      if (prevSelectedFlagItem) {
        prevSelectedFlagItem.classList.remove("selected");
        prevSelectedFlagItem.querySelector(".checkmark").style.display = "none";
      }

      // Add "selected" class to the clicked flag item
      flagItem.classList.add("selected");

      // Show the checkmark for the clicked flag item
      flagItem.querySelector(".checkmark").style.display = "block";

      // Change the flag image in the flag container
      const selectedImageSrc = flagItem.querySelector("img").getAttribute("src");
      flagImage.setAttribute("src", selectedImageSrc);

      // Save selected flag to localStorage
      localStorage.setItem("selectedFlag", flagItem.dataset.lang);
    }

    // Add click event listener to each flag item
    flagItems.forEach(function(flagItem) {
      flagItem.addEventListener("click", function(event) {
        handleFlagItemClick(flagItem);

        // Stop propagation to prevent dropdown from closing
        event.stopPropagation();
      });
    });

    // Load selected flag from localStorage
    const savedFlag = localStorage.getItem("selectedFlag");
    if (savedFlag) {
      const selectedFlagItem = document.querySelector(`.flag-item[data-lang='${savedFlag}']`);
      if (selectedFlagItem) {
        handleFlagItemClick(selectedFlagItem);
      }
    }


  });
</script>
</body>
</html>