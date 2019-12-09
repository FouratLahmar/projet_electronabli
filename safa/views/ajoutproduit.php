<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div >
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
         <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Sleek Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li  class="active" >
                              <a class="sidenav-item-link" href="index.html">
                                 <a  href="http://localhost/projetelect/views/back/dist/ajoutproduit.php" ><span class="nav-text">ajouter un produit</span></a>
                                
                              </a>
                            </li>
                          
                        
                            <li  class="active" >
                              <a class="sidenav-item-link" href="index.html">
                                 <a  href="http://localhost/projetelect/views/back/dist/listeproduitadmin.php" ><span class="nav-text">ma liste de produits</span></a>
                                
                              </a>
                            </li>

                        
                        
                          
                          
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                
                
              </ul>

            </div>

           
              </div>
            </div>
          </div>
        </aside>


      

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                  <li class="github-link mr-3">
                    <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                      <span class="d-none d-md-inline-block mr-2">Source Code</span>
                      <i class="mdi mdi-github-circle"></i>
                    </a>

                  </li>
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="C:\Users\Asus\Desktop\sa.jpg" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">safa chaouali</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Abdus Salam <small class="pt-1">abdus@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="email-inbox.html">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="signin.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>




        <!-- Main content -->
     
					
        



        <!-- Main content -->
        <section >
                <div >
                    <div >
                        <div >
                             
                             <i  data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                   </br></br>  <center>  <h4>  Ajouter votre nouveau produit</h4></center></br></br> 
          <?PHP 
if (isset($_POST['creer'])) {

  include "../../../core/produitcore.php";
  include "../../../config.php";
include "../../../entities/produit.php";
	

		
    $produit=new produit();
      
$produit->setnom($_POST['nom']);
$produit->setdescription($_POST['description']);
$produit->setnomphoto($_FILES['nomphoto']['name']);
$produit->setnomphoto2($_FILES['nomphoto2']['name']);
$produit->setnomphoto3($_FILES['nomphoto3']['name']);
$produit->setcategorie($_POST['categorie']);
$produit->setprix($_POST['prix']);
$produit->setdateajout_produit($_POST['dateajout_produit']);
 
$nomphoto=$_FILES['nomphoto']['name'];
$file_tmp_name=$_FILES['nomphoto']['tmp_name'];
move_uploaded_file($file_tmp_name,"img/$nomphoto");

$nomphoto2=$_FILES['nomphoto2']['name'];
$file_tmp_name2=$_FILES['nomphoto2']['tmp_name'];
move_uploaded_file($file_tmp_name,"img/$nomphoto2");

$nomphoto3=$_FILES['nomphoto3']['name'];
$file_tmp_name3=$_FILES['nomphoto3']['tmp_name'];
move_uploaded_file($file_tmp_name,"img/$nomphoto3");
  $produitcore=new produitcore();
$produitcore->ajouterproduit($produit);

echo "<script type='text/javascript'>document.location.replace('listeproduitadmin.php');</script>";
		
	}

	// redirection vers la liste des comptes

?> 
							

              <form role="form" method="POST" action=""  >
					
<table>
					<tr> 

					     <td>   <label  class="col-sm-2  " style="color:#6200FF;">nom:   </label>


</td>
						 <td><div class="col-sm-10" style="color:#6200FF;"><input  class="form-control" type="text" name="nom" id="nom" placeholder="ecrire le nom " required/></div></td>
				  
 </tr>
					<tr>
					     <td><label class="col-sm-2  " style="color:#6200FF;">description:  </label></td>
						 <td><div  class="col-sm-10" ><textarea class="form-control" type="textarea" name="description" id="description" placeholder="ecrire la description" required/></textarea></div></td>
				    </tr>
					<tr>
					<td><label class="col-sm-2  " style="color:#6200FF;">categorie  </label></td>
					   <td> <div  class="col-sm-10" > <SELECT name="categorie"  class="form-control"  id="categorie"  style="color:#6200FF;">
<OPTION>accesoires
<OPTION>smartphone
<OPTION>materiel informatique

</SELECT></div></td>
				    </tr>
					<tr>
					     <td><label class="col-sm-2  " style="color:#6200FF;">prix:   </label></td>
						 <td><div class="col-sm-10"><input class="form-control" pattern="[0-9]+([\.][0-9]{0,2})?" name="prix" id="prix"  placeholder="ecrire le prix" required/></div></td>
				    </tr>
				    
<tr>
					     <td> <label class="col-sm-2  " style="color:#6200FF;" for="exampleInputFile">photo: </label>
</td>
						<td><div class="col-sm-10" style="color:#6200FF;">
            <input  type="file" name="nomphoto" id="nomphoto" required/></div></td>
				    </tr>
            
					  <tr>
					     <td> <label class="col-sm-2  " style="color:#6200FF;" for="exampleInputFile">photo 2 : </label>
</td>
						 <td><div class="col-sm-10" style="color:#6200FF;">
             <input  type="file" name="nomphoto2" id="nomphoto2" required/></div></td>
				    </tr>
					




					<tr>
					     <td> <label class="col-sm-2  " style="color:#6200FF;" for="exampleInputFile">photo 3: </label>
</td>
						 
						 <td><div class="col-sm-10" style="color:#6200FF;">
             <input  type="file" name="nomphoto3" id="nomphoto3" required/></div></td>
				    </tr>
				    



				    <?php $dateajout_produit=date_create('now')->format('Y-M-D H:i:s');?>
				    <input name='dateajout_produit' type="hidden" value="<?php echo $dateajout_produit ?>"/>
					<tr>
                    <td>  <input type="submit" name="creer" value="creer"> </td>
					</tr>
				</table>
					</form>
                </div>
					
   <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>




  </body>
</html>
