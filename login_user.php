<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/bootstrap.min.css">
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
    integrity="sha512-1fPmaHba3v4A7PaUsComSM4TBsrrRGs+/fv0vrzafQ+Rw+siILTiJa0NtFfvGeyY5E182SDTaF5PqP+XOHgJag=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/login_user.css">
</head>

<body>
  <div class="container-fluid px-0 position-relative" style="background: #f3f2ef;">
    <div class="create-post" id="postImg2" style="display: none;">
      <form action="" class="px-3 pb-2 h-100">
        <div class="create-content h-100">
          <div class="create-title py-3 h5 d-flex">Create a post
            <div class="ms-auto Close text-black cursor-pointer"><i class="bi bi-x-lg"></i></div>
          </div>
          <div class="create-status pt-2">
            <div class="create-user py-1 d-flex align-items-center" style="gap: 0 10px;">
              <div class="create-img">
                <img src="./img/img1.jpeg" alt="img-user"
                  style="width: 55px; height: 55px; border-radius: 50%;">
              </div>
              <div class="create-info">
                <div class="create-name">Arthur Sherlock Baker</div>
                <button type="button" class="btn border dropdown-toggle rounded-pill"
                  data-bs-toggle="dropdown" aria-expanded="false" style="line-height: 10px;">
                  <i class="bi bi-circle-half"></i>
                  <span class="h6">Anyone</span>
                </button>
              </div>
            </div>

            <textarea class="form-control px-0 py-2 flex-grow-1"
              placeholder="What do you want to talk about?" style="border: none; overflow: hidden;"
              id="txtContent"></textarea>
              <div class="">
                <img src="" alt="" class="display_photo">
              </div>
          </div>
          <hr class="mb-0">
          <div class=" d-flex py-1 align-items-center justify-content-between">
            <ul class="list-create mb-0 ps-0">
              <li class="item-create btnPhoto2">
                <i class="bi bi-image-fill"></i>
              </li>
              <li class="item-create">
                <i class="bi bi-youtube"></i>
              </li>
              <li class="item-create">
                <i class="bi bi-file-earmark-text-fill"></i>
              </li>
              <li class="item-create">
                <i class="bi bi-briefcase-fill"></i>
              </li>
            </ul>

            <button type="button" class="btn  btn-post border rounded-pill">
              post
            </button>
          </div>
        </div>
      </form>
    </div>

    <div class="create-post" id="post-img" style="display: none;">
      <form  id="btnForm" method="post" enctype="multipart/form-data" class="px-3 pb-2 h-100">
        <div class="create-content justify-content-space-between h-100" >
          <div class=" py-3 h5 d-flex mb-0">Edit your photo
            <div class="ms-auto Close text-black  cursor-pointer Close"><i class="bi bi-x-lg Close"></i></div>
          </div>
          <hr style="margin-top: 0;">
          <div class="create-status">
            <input type="file" name="file"  class="photo py-2">
            <img src="" alt="" class="display_img">

          </div>
          <hr>
          <div class=" d-flex py-1 align-items-center justify-content-between">
            <button type="button" class="btn ms-auto me-2 border-primary text-primary btn-cancel border rounded-pill">
              Cancel
            </button>
             <button class="btn btn-done border rounded-pill">Done</button>
          </div>
        </div>
      </form>
    </div>

    <div class="overflow" style="display: none;"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"
      style="height: 52px; padding:0 220px;">
      <a class="navbar-brand fs-3 px-2 fw-bold d-flex align-items-center"
        style="height: 40px; background: #3467c2; color: white;" href="#">in</a>
      <form class="d-flex align-items-center px-4 me-5" style="background: #eef3f8;">
        <i class="bi bi-search "></i>
        <input class="form-control me-2 border-0 " type="search" placeholder="Search"
          aria-label="Search" style="background-color: #eef3f8;">
      </form>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav" style="text-align: center; ">
          <li class="nav-item ms-5 ">
            <a class="nav-link " aria-current="page" href="#"><i class="bi bi-house-fill"></i> <br>
              Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-people-fill"></i> <br> My network</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#"><i class="bi bi-briefcase-fill"></i>
              <br> jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#"><i class="bi bi-chat-dots-fill"></i>
              <br>
              Messaging</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#"><i class="bi bi-bell-fill"></i> <br>
              Notefications</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle"></i> <br> My
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="MY"
            aria-expanded="false" style="text-align: center;">
            <i class="bi bi-table"></i> <br> Work
          </a>
          <a
            href="https://www.linkedin.com/premium/survey/?destRedirectURL=https%3A%2F%2Fwww.linkedin.com%2Ffeed%2F%3FshowPremiumWelcomeBanner%3Dtrue&upsellOrderOrigin=premium_nav_upsell_text">Try
            Premium for free</a>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row px-5 mt-3 justify-content-center">
        <div class="col-md-3" style="max-width: 250px;">
          <div class="side-bar"
            style="border: 1px solid gainsboro;border-radius: 10px ;overflow: hidden;">
            <div class="profile-user">
              <div class="profile-header " style="text-align: center; ">
                <div class="bg-secondary" style="width: 100%; height: 60px;"></div>
                <div class="profile-img bg-light">
                  <img src="./img/img1.jpeg" class="rounded-circle"
                    style="width: 68px; height: 68px; transform: translateY(-50%);" alt="">
                </div>
                <div class="profile-name bg-light"> Your Name </div>
                <div class="profile-detail bg-light">--</div>
              </div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center
                        "> <span style="font-size: 12px;">Conections <br> <span
                    style="font-weight: 700;">Grow your network</span> </span> <i
                  class="bi bi-person-plus d-flex flex-row-reverse  "></i></li>
              <li class="list-group-item"><span style="font-size: 12px;">Access exclusive tools &
                  insights <br> <span style="font-weight: 700;"><i
                      class="bi bi-bookmark me-2"></i>Try Premium for free</span> </span> </li>
              <li class="list-group-item"><i class="bi bi-bookmark-fill me-2"></i>My item</li>
            </ul>
          </div>

          <div class="card mt-3"
            style="background-color: beige; border-radius: 10px; overflow: hidden;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="" style="text-decoration: none;">Groups </a></li>
              <li class="list-group-item"><a href="" style="text-decoration: none;">Events</a></li>
              <li class="list-group-item"><a href="" style="text-decoration: none;">Flowers
                  Hashtags</a></li>
            </ul>
            <div class="card-footer">
              Discover more
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="content-header bg-light"
            style="border: 1px solid gainsboro;  border-radius: 10px; overflow: hidden; height: 116px;">
            <div class="post d-flex bg-light" style="align-items: center; padding: 12px 0 6px 0; ">
              <img class="rounded-circle ms-3" style="width: 46px; height: 46px;"
                src="./img/img1.jpeg" alt="">
              <input class="ps-3 flex-grow-1 status" type="text" placeholder="Start a post"
                style="margin:0 10px;border: 1px solid gainsboro; height: 48px; border-radius: 30px; cursor: pointer;"
                readonly>
            </div>

            <div class="function">
              <div class="list-function row"
                style="color: darkgrey; justify-content: space-around;">
                <div class="col-md-2 p-2 text-center btnPhoto">
                  <i class="bi bi-image" style="color: dodgerblue; "></i>Photo
                </div>
                <div class="col-md-2 p-2 text-center">
                  <i class="bi bi-youtube" style="color: red;"></i>Video
                </div>
                <div class="col-md-2 p-2 text-center">
                  <i class="bi bi-calendar-date" style="color: sandybrown;"></i>Event
                </div>
                <div class="col-md-3 p-2 text-center"><i class="bi bi-card-text"
                    style="color: tomato;"></i>Write article</div>
              </div>
            </div>
          </div>

          <hr>

          <div class="posted-content" style="height: max-content; ">
            
          </div>
        </div>

        <div class="col-md-3">
          <div class="list-people bg-light"
            style="height: 374px; border: 1px solid gainsboro; border-radius: 10px;">
            Add to your feed
          </div>
          <div class="img-dreamjob mt-md-2">
            <img
              src="https://static-exp1.licdn.com/scds/common/u/images/promo/ads/li_evergreen_jobs_ad_300x250_v1.jpg"
              alt="">
          </div>
          <div class="footer" style="margin: 8px 1px;background-color: #f3f2ef;">
            <ul style="font-size: 12px;">
              <li style="padding: 6px">About</li>
              <li style="padding: 6px">Accessibility</li>
              <li style="padding: 6px">Help Center</li>
              <li style="padding: 6px">Privacy & Terms <i class="bi bi-chevron-compact-down"></i>
              </li>
              <li style="padding: 6px">Ad Choices</li>
              <li style="padding: 6px">Advertising</li>
              <li style="padding: 6px">Business Services<i class="bi bi-chevron-compact-down"></i>
              </li>
              <li style="padding: 6px">Get the LinkedIn app</li>
              <li style="padding: 6px">More</li>
            </ul>
          </div>
          <div class="sub-logo d-flex">
            <li>
              <div class="sub-logo-text d-flex" style="font-size: 12px;">
                <h6 class="logo-text" style="color: blue;">Linked</h6>
                <h6 class="logo-in ms-1" style="background-color: blueviolet;font-weight: 700;">in
                </h6>
              </div>
            </li>
            <p style="font-size: 12px; margin-top: 8px;">LinkedIn Corporation © 2021</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="./JS/login_user.js"></script>
  <script src="./JS/bootstrap.bundle.min.js"></script>
</body>
        
</html>