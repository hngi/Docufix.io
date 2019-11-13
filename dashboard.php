<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="dashboardcss/dashboard.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="dashboardcss/dashboad.css">

</head>

<body>
      <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 5px; box-shadow: 0px 4px #E5E5E5; margin-top: -5px;">
        <a class="navbar-brand" href="index.php" id="logo">
              <img src="https://res.cloudinary.com/kuic/image/upload/v1573054016/docufix/Group_1_5_olg2uj.svg" alt="DOCUFIX" class="image" height= "20" width="148" style="margin-left: 2.4em;">
            </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
            
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
          <div class=" my-2 my-lg-0">
            <span class="navbar-text">
              <a  href="logout.php" style="color: #3B1F9E; margin-right: 2.5em; margin-bottom: 5px;">Logout</a>
              <a  href="#" style="color: #3B1F9E; margin-right: 1em; padding: 5px; font-size: 30px">
                <i class="fas fa-user-circle"></i>
              </a>
            </span>

          </div>
        </div>
        
      </nav>

  <div class="d-flex t" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush" align="center">
        <a href="#" class="sideC dropdown-item" ><img src="https://res.cloudinary.com/ros4eva/image/upload/v1573562582/document_vqlqio.png"> Document</a>

          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1573562582/tools_gelu66.png" style="outline: none!important;">
              Tools
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="fileUpload.php">Compare Files</a>
              <a class="dropdown-item" href="grammarChecker.php">Grammer Check</a>
              <a class="dropdown-item" href="fileDuplicate.php">Duplicates Check</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://res.cloudinary.com/ros4eva/image/upload/v1573562582/support_cwoul4.png" style="outline: none!important;"> 
              Support
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/contact.php">Contact Us</a>
              <a class="dropdown-item" href="/faq.php">FAQs</a>
              <a class="dropdown-item" href="/privacy.php">Privacy Policy</a>
              <a class="dropdown-item" href="/termsOfService.php">Terms of Service</a>
            </div>
          </div>

        <div class="fixed" align="center"><span class="footer">Copyright &#169; 2019 Docufix</span></div>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <button class="btn " id="menu-toggle" style="margin-left: 1.5em; color: #3B1F9E; margin-top: 1em;"><i class="fas fa-chevron-left"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

     <!--  -->

      <div class="container-fluid Dcont">
        <div class="d-flex justify-content-between">
            <div class="row">
            <div class="col ">
              <div class="newCon"> 
                <div align="center" >
                  <img src="https://res.cloudinary.com/ros4eva/image/upload/v1573562582/new_djyusg.png" class="newIm"><br>
                   <span>New</span>
                </div>
              </div>
            </div>
            <div class="col ">
              <div class="Pchecked"> 
                <div class="pcon">
                  <img src="https://res.cloudinary.com/ros4eva/image/upload/v1573562582/Pchecked_wc2jew.png" class="pIm"><span class="no">4</span><br>
                   <span class="ptxt">Plagiarism Checked</span>
                </div>
              </div>
            </div>
            <div class="col ">
              <div class="Pchecked nox"> 
                <div class="pcon">
                  <img src="https://res.cloudinary.com/ros4eva/image/upload/v1573562582/fixedD_saxthq.png" class="pIm"><span class="no">6</span><br>
                   <span class="ptxt">Fixed Duplicate Files</span>
                </div>
              </div>
            </div>
            <div class="col ">
              <div class="Pchecked"> 
                <div class="pcon">
                  <img src="https://res.cloudinary.com/ros4eva/image/upload/v1573562582/compared_qyhtyj.png" class="pIm"><span class="no">2</span><br>
                   <span class="ptxt">Compared Files</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      <div class="contents-checked">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">Plagiarism</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">Word Duplicate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                aria-selected="false">Compared Files</a>
            </li>
          </ul>
          <div class="tab-content card-body" id="myTabContent">
            <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <th scope="col">Document Name</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Last Updated</th>
                    <th scope="col">File Size</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background-color: white;">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">File Essay Article</td>
                    <td>Nov 1, 2019</td>
                    <td>Today</td>
                    <td>1mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                  <tr style="background-color: white;" class="otd">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">History Lesson Summary</td>
                    <td>Nov 1, 2019</td>
                    <td>Yesterday</td>
                    <td>.7mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                  <tr style="background-color: white;" class="otd">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">Summary Notes</td>
                    <td>Nov 1, 2019</td>
                    <td>2 days ago</td>
                    <td>1.2mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                  <tr style="background-color: white;" class="otd">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">File Essay Article 2</td>
                    <td>Nov 1, 2019</td>
                    <td>Oct 20, 2019</td>
                    <td>.5mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <th scope="col">Document Name</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Last Updated</th>
                    <th scope="col">File Size</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background-color: white;">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">File Essay Article</td>
                    <td>Nov 1, 2019</td>
                    <td>Today</td>
                    <td>1mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                  <tr style="background-color: white;" class="otd">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">History Lesson Summary</td>
                    <td>Nov 1, 2019</td>
                    <td>Yesterday</td>
                    <td>.7mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                  <tr style="background-color: white;" class="otd">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">Summary Notes</td>
                    <td>Nov 1, 2019</td>
                    <td>Yesterday</td>
                    <td>1.2mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                  <tr style="background-color: white;" class="otd">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">File Essay Article 2</td>
                    <td>Nov 1, 2019</td>
                    <td>2 days ago</td>
                    <td>.5mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                  <tr style="background-color: white;" class="otd">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">ProjectX Article</td>
                    <td>Oct 20, 2019</td>
                    <td>7 days ago</td>
                    <td>.4mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                  <tr style="background-color: white;" class="otd">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">ProjectX</td>
                    <td>Oct 2, 2019</td>
                    <td>7 days ago</td>
                    <td>.2mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <th scope="col">Document Name</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Last Updated</th>
                    <th scope="col">File Size</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="background-color: white;">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">File Essay Article</td>
                    <td>Nov 1, 2019</td>
                    <td>Today</td>
                    <td>1mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                  <tr style="background-color: white;" class="otd">
                    <th scope="col" id="num"><input type="checkbox"></th>
                    <td class="fileName">History Lesson Summary</td>
                    <td>Nov 1, 2019</td>
                    <td>Yesterday</td>
                    <td>.7mb</td>
                    <td align="center">
                      <i style="font-size:24px" class="fa" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf142;</i>
                      <div class="dropdown-menu dropdown-menu-right drpC" style="background-color:rgb(255,255,255,0); padding-top: 0; border: none;">
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 15px; margin-top: 4px;">Edit</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Download</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Duplicate</button>
                        <button class="dropdown-item" type="button" style="background-color: white;font-size: 14px; margin-top: 4px;">Delete</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
