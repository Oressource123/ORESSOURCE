
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>POS - point of sale NEYAN AUTO WORKSHOP</title>
      <!-- jQuery -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery-2.2.2.min.js"></script>
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/loading.js"></script>

      <!--<link rel="stylesheet" href="http://www.dar-elweb.com/demos/zarpos//../../reset/odr/style.css" type="text/css" />
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos//../../reset/odr/odr.js.php"></script>-->
      <!-- normalize & reset style -->
      <link rel="stylesheet" href="http://www.dar-elweb.com/demos/zarpos/assets/css/normalize.min.css"  type='text/css'>
      <link rel="stylesheet" href="http://www.dar-elweb.com/demos/zarpos/assets/css/reset.min.css"  type='text/css'>
      <link rel="stylesheet" href="http://www.dar-elweb.com/demos/zarpos/assets/css/jquery-ui.css"  type='text/css'>
      <!-- google lato font -->
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
      <!-- Bootstrap Core CSS -->
      <link href="http://www.dar-elweb.com/demos/zarpos/assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- bootstrap-horizon -->
      <link href="http://www.dar-elweb.com/demos/zarpos/assets/css/bootstrap-horizon.css" rel="stylesheet">
      <!-- datatable style -->
      <link href="http://www.dar-elweb.com/demos/zarpos/assets/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" href="http://www.dar-elweb.com/demos/zarpos/assets/css/font-awesome.min.css">
      <!-- include summernote css-->
      <link href="http://www.dar-elweb.com/demos/zarpos/assets/css/summernote.css" rel="stylesheet">
      <!-- waves -->
      <link rel="stylesheet" href="http://www.dar-elweb.com/demos/zarpos/assets/css/waves.min.css">
      <!-- daterangepicker -->
      <link rel="stylesheet" type="text/css" href="http://www.dar-elweb.com/demos/zarpos/assets/css/daterangepicker.css" />
      <!-- css for the preview keyset extension -->
      <link href="http://www.dar-elweb.com/demos/zarpos/assets/css/keyboard-previewkeyset.css" rel="stylesheet">
      <!-- keyboard widget style -->
      <link href="http://www.dar-elweb.com/demos/zarpos/assets/css/keyboard.css" rel="stylesheet">
      <!-- Select 2 style -->
      <link href="http://www.dar-elweb.com/demos/zarpos/assets/css/select2.min.css" rel="stylesheet">
      <!-- Sweet alert swal -->
      <link rel="stylesheet" type="text/css" href="http://www.dar-elweb.com/demos/zarpos/assets/css/sweetalert.css">
      <!-- datepicker css -->
      <link rel="stylesheet" type="text/css" href="http://www.dar-elweb.com/demos/zarpos/assets/css/bootstrap-datepicker.min.css">
      <!-- Custom CSS -->
      <link href="http://www.dar-elweb.com/demos/zarpos/assets/css/Style-Light.css" rel="stylesheet">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- Navigation -->
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#"><img src="dist/img/AdminLTELogo.png" alt="logo"  style='max-height: 45px; max-width: 200px'></a>
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/"><i class="fa fa-credit-card"></i> POS</a></li>
                 <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/products"><i class="fa fa-archive"></i> Product</a></li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle flat-box" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i> People <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/customers"><i class="fa fa-user"></i> Customers</a></li>
                       <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/suppliers"><i class="fa fa-truck"></i> Suppliers</a></li>
                    </ul>
                 </li>
                 <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/sales"><i class="fa fa-ticket"></i> Sales</a></li>
                 <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/expences"><i class="fa fa-usd"></i> Expense</a></li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle flat-box" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bookmark"></i> Categories <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/categories"><i class="fa fa-archive"></i> Product</a></li>
                       <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/categorie_expences"><i class="fa fa-usd"></i> Expense</a></li>
                    </ul>
                 </li>
                 <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/settings?tab=setting"><i class="fa fa-cogs"></i> Setting</a></li>                 <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/stats"><i class="fa fa-line-chart"></i> Reports</a></li>               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="">
                        <img class="img-circle topbar-userpic hidden-xs" src="http://www.dar-elweb.com/demos/zarpos/files/Avatars/9fff9cc26e539214e9a5fd3b6a10cde9.jpg" width="30px" height="30px">
                        <span class="hidden-xs"> &nbsp;&nbsp;admin Doe </span>
                     </a>
                  </li>
                  <li class="dropdown language">
                     <a href="#" class="dropdown-toggle flat-box" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="http://www.dar-elweb.com/demos/zarpos/assets/img/flags/en.png" class="flag" alt="language">
                        <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/dashboard/change/english"><img src="http://www.dar-elweb.com/demos/zarpos/assets/img/flags/en.png" class="flag" alt="language"> English</a></li>
                        <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/dashboard/change/francais"><img src="http://www.dar-elweb.com/demos/zarpos/assets/img/flags/fr.png" class="flag" alt="language"> Français</a></li>
                        <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/dashboard/change/portuguese"><img src="http://www.dar-elweb.com/demos/zarpos/assets/img/flags/pr.png" class="flag" alt="language"> Portuguese</a></li>
                        <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/dashboard/change/spanish"><img src="http://www.dar-elweb.com/demos/zarpos/assets/img/flags/sp.png" class="flag" alt="language"> Spanish</a></li>
                        <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/dashboard/change/arabic"><img src="http://www.dar-elweb.com/demos/zarpos/assets/img/flags/ar.png" class="flag" alt="language"> العربية</a></li>
                        <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/dashboard/change/danish"><img src="http://www.dar-elweb.com/demos/zarpos/assets/img/flags/da.png" class="flag" alt="language"> Danish</a></li>
                        <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/dashboard/change/turkish"><img src="http://www.dar-elweb.com/demos/zarpos/assets/img/flags/tr.png" class="flag" alt="language"> Turkish</a></li>
                        <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/dashboard/change/greek"><img src="http://www.dar-elweb.com/demos/zarpos/assets/img/flags/gr.png" class="flag" alt="language"> Greek</a></li>
                     </ul>
                  </li>
                  <li class="flat-box"><a href="http://www.dar-elweb.com/demos/zarpos/logout" title="Logout"><i class="fa fa-sign-out fa-lg"></i></a></li>
               </ul>
            </div>
            <div id="loadingimg"></div>
         </div>
         <!-- /.container -->
      </nav>
      <!-- Page Content -->


      <!-- Page Content -->
<div class="container-fluid">
   <div class="row">
      <ul class="cbp-vimenu">
      	<li data-toggle="tooltip"  data-html="true" data-placement="left" title="close&nbsp;register"><a href="javascript:void(0)" onclick="CloseRegister()"><i class="fa fa-times" aria-hidden="true"></i></a></li>
      	<li data-toggle="tooltip"  data-html="true" data-placement="left" title="switch&nbsp;store"><a href="pos/switshregister"><i class="fa fa-random" aria-hidden="true"></i></a></li>
      </ul>
      <div class="col-md-5 left-side">
         <div class="row">
            <div class="row row-horizon">
               <span class="holdList">
                  <!-- list Holds goes here -->
               </span>
               <span class="Hold pl" onclick="AddHold()">+</i></span>
               <span class="Hold pl" onclick="RemoveHold()">-</span>
            </div>
         </div>
         <div class="col-xs-8">
            <h2>Choose Client</h2>
         </div>
         <div class="col-xs-4 client-add">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#AddCustomer">
               <span class="fa-stack fa-lg" data-toggle="tooltip" data-placement="top" title="Add New Customer">
                  <i class="fa fa-square fa-stack-2x grey"></i>
                  <i class="fa fa-user-plus fa-stack-1x fa-inverse dark-blue"></i>
               </span>
            </a>
            <a href="javascript:void(0)" data-toggle="modal" data-target="#ticket">
               <span class="fa-stack fa-lg" data-toggle="tooltip" data-placement="top" title="Show last Receipt">
                  <i class="fa fa-square fa-stack-2x grey"></i>
                  <i class="fa fa-ticket fa-stack-1x fa-inverse dark-blue"></i>
               </span>
            </a>
         </div>
         <div class="col-sm-12">
            <select class="js-select-options form-control" id="customerSelect">
              <option value="0">Walk in Customer</option>
                               <option value="7">Tiffany Green</option>
                               <option value="8">Russell Thomas</option>
                               <option value="9">Gregory Hawkins</option>
                               <option value="10">Benjamin Smith</option>
                               <option value="11">Joe Blow</option>
                               <option value="12">salg</option>
                               <option value="13">albert</option>
                          </select>
         </div>
         <div class="col-sm-12">
            <form onsubmit="return barcode()">
               <input type="text" autofocus id="keyboard" class="form-control barcode" placeholder="Barcode Scanner">
            </form>
         </div>
         <div class="col-xs-5 table-header">
            <h3>Product</h3>
         </div>
         <div class="col-xs-2 table-header">
            <h3>Price</h3>
         </div>
         <div class="col-xs-3 table-header nopadding">
            <h3 class="text-left">Quantity</h3>
         </div>
         <div class="col-xs-2 table-header nopadding">
            <h3>Total</h3>
         </div>
         <div id="productList">
            <!-- product List goes here  -->
         </div>
         <div class="footer-section">
            <div class="table-responsive col-sm-12 totalTab">
               <table class="table">
                  <tr>
                     <td class="active" width="40%">SubTotal</td>
                     <td class="whiteBg" width="60%"><span id="Subtot"></span> MXN                        <span class="float-right"><b id="ItemsNum"><span></span> items</b></span>
                     </td>
                  </tr>
                  <tr>
                     <td class="active">Order TAX</td>
                     <td class="whiteBg"><input type="text" value="16" onchange="total_change()" id="num01" class="total-input TAX" placeholder="N/A"  maxlength="5">
                        <span class="float-right"><b id="taxValue"></b></span>
                     </td>
                  </tr>
                  <tr>
                     <td class="active">Discount</td>
                     <td class="whiteBg"><input type="text" value="" onchange="total_change()" id="num02" class="total-input Remise" placeholder="N/A"  maxlength="5">
                        <span class="float-right"><b id="RemiseValue"></b></span>
                     </td>
                  </tr>
                  <tr>
                     <td class="active">Total</td>
                     <td class="whiteBg light-blue text-bold"><span id="total"></span> MXN</td>
                  </tr>
               </table>
            </div>
            <button type="button" onclick="cancelPOS()" class="btn btn-red col-md-6 flat-box-btn"><h5 class="text-bold">CANCEL</h5></button>
            <button type="button" class="btn btn-green col-md-6 flat-box-btn" data-toggle="modal" data-target="#AddSale"><h5 class="text-bold">PAYMENT</h5></button>
         </div>

      </div>
      <div class="col-md-7 right-side nopadding">
         <div class="row row-horizon">
                  <span class="categories selectedGat" id=""><i class="fa fa-home"></i></span>
                                       <span class="categories" id="Wild Bird">Wild Bird</span>
                                       <span class="categories" id="Samsung">Samsung</span>
                                       <span class="categories" id="iPhone">iPhone</span>
                                       <span class="categories" id="services">services</span>
                                       <span class="categories" id="test">test</span>
                                       <span class="categories" id="lokilla">lokilla</span>
                                       <span class="categories" id="gianmarcocvax">gianmarcocvax</span>
                                 </div>
               <div class="col-sm-12">
                  <div id="searchContaner">
                      <div class="input-group stylish-input-group">
                          <input type="text" id="searchProd" class="form-control"  placeholder="Search" >
                          <span class="input-group-addon">
                              <button type="submit">
                                  <span class="glyphicon glyphicon-search"></span>
                              </button>
                          </span>
                      </div>
                  </div>
              </div>
              <!-- product list section -->
         <div id="productList2">
                                          <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-123456" onclick="add_posale('39')">
                        <div class="product color01 flat-box">
                           <h3 id="proname">Computer</h3>
                           <input type="hidden" id="idname-39" name="name" value="Computer" />
                           <input type="hidden" id="idprice-39" name="price" value="14" />
                           <input type="hidden" id="category" name="category" value="computers" />
                           <div class="mask">
                              <h3>14.00 MXN</h3>
                              <p>computer desktops, Wi-Fi, webcam, screen,&#8230;</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/08153b71766514c0d83ea3ea97de00f2_thumb.jpg" alt="Computer">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-112345" onclick="add_posale('40')">
                        <div class="product color02 flat-box">
                           <h3 id="proname">mens gloves</h3>
                           <input type="hidden" id="idname-40" name="name" value="mens gloves" />
                           <input type="hidden" id="idprice-40" name="price" value="60" />
                           <input type="hidden" id="category" name="category" value="Wild Bird" />
                           <div class="mask">
                              <h3>60.00 MXN</h3>
                              <p><p>fashion, brown, clothing, leather gloves,&#8230;</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/529540c13b2afdfacf7889fb3c6bb326_thumb.jpeg" alt="mens gloves">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-123451" onclick="add_posale('41')">
                        <div class="product color03 flat-box">
                           <h3 id="proname">sweater</h3>
                           <input type="hidden" id="idname-41" name="name" value="sweater" />
                           <input type="hidden" id="idprice-41" name="price" value="5.8" />
                           <input type="hidden" id="category" name="category" value="Giyim" />
                           <div class="mask">
                              <h3>5.80 MXN</h3>
                              <p>fashion, clothes , sweater, wool, cardigan,&#8230;</p>
                           </div>
                                                   </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-123654" onclick="add_posale('42')">
                        <div class="product color07 flat-box">
                           <h3 id="proname">tie</h3>
                           <input type="hidden" id="idname-42" name="name" value="tie" />
                           <input type="hidden" id="idprice-42" name="price" value="30" />
                           <input type="hidden" id="category" name="category" value="Giyim" />
                           <div class="mask">
                              <h3>30.00 MXN</h3>
                              <p>fashion, tie, clothes, accessory , accessoire,&#8230;</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/6a84bc6792a836c72ea473a4ef280484_thumb.jpeg" alt="tie">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-321654" onclick="add_posale('43')">
                        <div class="product color05 flat-box">
                           <h3 id="proname">jacket</h3>
                           <input type="hidden" id="idname-43" name="name" value="jacket" />
                           <input type="hidden" id="idprice-43" name="price" value="190" />
                           <input type="hidden" id="category" name="category" value="Giyim" />
                           <div class="mask">
                              <h3>190.00 MXN</h3>
                              <p>winter  jacket </p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/7bde4f5af295906be56a243254245953_thumb.jpeg" alt="jacket">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-654321" onclick="add_posale('44')">
                        <div class="product color01 flat-box">
                           <h3 id="proname">jacket men</h3>
                           <input type="hidden" id="idname-44" name="name" value="jacket men" />
                           <input type="hidden" id="idprice-44" name="price" value="225" />
                           <input type="hidden" id="category" name="category" value="Clothing" />
                           <div class="mask">
                              <h3>225.00 MXN</h3>
                              <p>fashion  man  jacket </p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/38c80531adc7a2603ce4a95adc3dafb9_thumb.jpg" alt="jacket men">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-632541" onclick="add_posale('45')">
                        <div class="product color03 flat-box">
                           <h3 id="proname">grapes</h3>
                           <input type="hidden" id="idname-45" name="name" value="grapes" />
                           <input type="hidden" id="idprice-45" name="price" value="18" />
                           <input type="hidden" id="category" name="category" value="fruits" />
                           <div class="mask">
                              <h3>18.00 MXN</h3>
                              <p>food ,  leaf,  grape,s  wet,  green</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/c41a289d57dc5d6efa5bad1476ac5397_thumb.jpeg" alt="grapes">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-412596" onclick="add_posale('46')">
                        <div class="product color07 flat-box">
                           <h3 id="proname">strawberries</h3>
                           <input type="hidden" id="idname-46" name="name" value="strawberries" />
                           <input type="hidden" id="idprice-46" name="price" value="15" />
                           <input type="hidden" id="category" name="category" value="fruits" />
                           <div class="mask">
                              <h3>15.00 MXN</h3>
                              <p>healthy  red sweet  strawberries</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/fc9a67111a5750be4ee3ca589d9f5159_thumb.jpeg" alt="strawberries">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-458726" onclick="add_posale('47')">
                        <div class="product color03 flat-box">
                           <h3 id="proname">apple</h3>
                           <input type="hidden" id="idname-47" name="name" value="apple" />
                           <input type="hidden" id="idprice-47" name="price" value="19" />
                           <input type="hidden" id="category" name="category" value="fruits" />
                           <div class="mask">
                              <h3>19.00 MXN</h3>
                              <p>healthy  apple  fruit</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/e336f0ef8e5efe615cc749402296801e_thumb.jpeg" alt="apple">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-759864" onclick="add_posale('48')">
                        <div class="product color06 flat-box">
                           <h3 id="proname">orange</h3>
                           <input type="hidden" id="idname-48" name="name" value="orange" />
                           <input type="hidden" id="idprice-48" name="price" value="16" />
                           <input type="hidden" id="category" name="category" value="fruits" />
                           <div class="mask">
                              <h3>16.00 MXN</h3>
                              <p>healthy  orange,  orange  fruit</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/fe072bd1d5c029171ae20d73e869e783_thumb.jpeg" alt="orange">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-856512" onclick="add_posale('49')">
                        <div class="product color04 flat-box">
                           <h3 id="proname">kiwi</h3>
                           <input type="hidden" id="idname-49" name="name" value="kiwi" />
                           <input type="hidden" id="idprice-49" name="price" value="26" />
                           <input type="hidden" id="category" name="category" value="Category" />
                           <div class="mask">
                              <h3>26.00 MXN</h3>
                              <p>fruit  kiwi </p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/daf3945ba5da7a857f226368cac09ab9_thumb.jpeg" alt="kiwi">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-415874" onclick="add_posale('50')">
                        <div class="product color01 flat-box">
                           <h3 id="proname">mouse</h3>
                           <input type="hidden" id="idname-50" name="name" value="mouse" />
                           <input type="hidden" id="idprice-50" name="price" value="80" />
                           <input type="hidden" id="category" name="category" value="computers" />
                           <div class="mask">
                              <h3>80.00 MXN</h3>
                              <p>apple   mouse  </p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/4e5ce62c5d4e91cfa7efd093e3638c0d_thumb.jpg" alt="mouse">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-126578" onclick="add_posale('51')">
                        <div class="product color05 flat-box">
                           <h3 id="proname">keyboard</h3>
                           <input type="hidden" id="idname-51" name="name" value="keyboard" />
                           <input type="hidden" id="idprice-51" name="price" value="80" />
                           <input type="hidden" id="category" name="category" value="computers" />
                           <div class="mask">
                              <h3>80.00 MXN</h3>
                              <p>apple mac  keyboard</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/c2118e267794191cedcdef5b0fd72fc3_thumb.jpg" alt="keyboard">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-738642" onclick="add_posale('52')">
                        <div class="product color02 flat-box">
                           <h3 id="proname">headphone</h3>
                           <input type="hidden" id="idname-52" name="name" value="headphone" />
                           <input type="hidden" id="idprice-52" name="price" value="120" />
                           <input type="hidden" id="category" name="category" value="computers" />
                           <div class="mask">
                              <h3>120.00 MXN</h3>
                              <p>music headphone</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/530d2ed6d3f5f892cd839fae31241e33_thumb.jpg" alt="headphone">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-538641" onclick="add_posale('53')">
                        <div class="product color04 flat-box">
                           <h3 id="proname">motherboard</h3>
                           <input type="hidden" id="idname-53" name="name" value="motherboard" />
                           <input type="hidden" id="idprice-53" name="price" value="179" />
                           <input type="hidden" id="category" name="category" value="computers" />
                           <div class="mask">
                              <h3>179.00 MXN</h3>
                              <p>pc motherboard with 16 Gb RAM</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/99f4dd9edd5a5def6b8a70414afffb13_thumb.jpg" alt="motherboard">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-753586" onclick="add_posale('54')">
                        <div class="product color05 flat-box">
                           <h3 id="proname">notebook</h3>
                           <input type="hidden" id="idname-54" name="name" value="notebook" />
                           <input type="hidden" id="idprice-54" name="price" value="760" />
                           <input type="hidden" id="category" name="category" value="computers" />
                           <div class="mask">
                              <h3>760.00 MXN</h3>
                              <p>macbook  notebook  computer</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/d3472f35b597a1ea3a17fe92aa266e1c_thumb.jpg" alt="notebook">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-126547" onclick="add_posale('86')">
                        <div class="product color05 flat-box">
                           <h3 id="proname">computer repair</h3>
                           <input type="hidden" id="idname-86" name="name" value="computer repair" />
                           <input type="hidden" id="idprice-86" name="price" value="350" />
                           <input type="hidden" id="category" name="category" value="services" />
                           <div class="mask">
                              <h3>350.00 MXN</h3>
                              <p>standard computer repairing</p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/f9ce7b84c89b9fffe7d789d047a3f4bf_thumb.jpeg" alt="computer repair">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-132698" onclick="add_posale('87')">
                        <div class="product color04 flat-box">
                           <h3 id="proname">gift folding</h3>
                           <input type="hidden" id="idname-87" name="name" value="gift folding" />
                           <input type="hidden" id="idprice-87" name="price" value="7" />
                           <input type="hidden" id="category" name="category" value="services" />
                           <div class="mask">
                              <h3>7.00 MXN</h3>
                              <p><p>folding service of gifts</p></p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/4d23da3199f973968f246c9154ebb365_thumb.jpeg" alt="gift folding">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-123548" onclick="add_posale('139')">
                        <div class="product color02 flat-box">
                           <h3 id="proname">Clothing</h3>
                           <input type="hidden" id="idname-139" name="name" value="Clothing" />
                           <input type="hidden" id="idprice-139" name="price" value="99.9" />
                           <input type="hidden" id="category" name="category" value="Kategori" />
                           <div class="mask">
                              <h3>99.90 MXN</h3>
                              <p><p>full Clothing</p></p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/aab5f1f58017eda2d34af8b6dca8b7d6_thumb.jpg" alt="Clothing">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-8655AE934AA1EEBF" onclick="add_posale('140')">
                        <div class="product color01 flat-box">
                           <h3 id="proname">omar hodrob</h3>
                           <input type="hidden" id="idname-140" name="name" value="omar hodrob" />
                           <input type="hidden" id="idprice-140" name="price" value="10" />
                           <input type="hidden" id="category" name="category" value="computers" />
                           <div class="mask">
                              <h3>10.00 MXN</h3>
                              <p></p>
                           </div>
                                                   </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-Bfyfguu" onclick="add_posale('142')">
                        <div class="product color06 flat-box">
                           <h3 id="proname">It dgu</h3>
                           <input type="hidden" id="idname-142" name="name" value="It dgu" />
                           <input type="hidden" id="idprice-142" name="price" value="50" />
                           <input type="hidden" id="category" name="category" value="computers" />
                           <div class="mask">
                              <h3>50.00 MXN</h3>
                              <p><p>Hfgdhfu vifhduf</p></p>
                           </div>
                                                   </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-123" onclick="add_posale('143')">
                        <div class="product color01 flat-box">
                           <h3 id="proname">iPhone</h3>
                           <input type="hidden" id="idname-143" name="name" value="iPhone" />
                           <input type="hidden" id="idprice-143" name="price" value="7499" />
                           <input type="hidden" id="category" name="category" value="iPhone" />
                           <div class="mask">
                              <h3>7499.00 MXN</h3>
                              <p><p>ny iphone til billig pris <br></p></p>
                           </div>
                                                   </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-001" onclick="add_posale('144')">
                        <div class="product color01 flat-box">
                           <h3 id="proname">Pizza 1/2 metro</h3>
                           <input type="hidden" id="idname-144" name="name" value="Pizza 1/2 metro" />
                           <input type="hidden" id="idprice-144" name="price" value="200" />
                           <input type="hidden" id="category" name="category" value="Wild Bird" />
                           <div class="mask">
                              <h3>200.00 MXN</h3>
                              <p><p>asdasdasdasd</p></p>
                           </div>
                                                   </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-701" onclick="add_posale('145')">
                        <div class="product color06 flat-box">
                           <h3 id="proname">Arábica 701</h3>
                           <input type="hidden" id="idname-145" name="name" value="Arábica 701" />
                           <input type="hidden" id="idprice-145" name="price" value="120" />
                           <input type="hidden" id="category" name="category" value="Dairy" />
                           <div class="mask">
                              <h3>120.00 MXN</h3>
                              <p></p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/17c06d9221df9ed39cd5cf40cd06406c_thumb.png" alt="Arábica 701">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-701Mix" onclick="add_posale('146')">
                        <div class="product color01 flat-box">
                           <h3 id="proname">Mezcla Ksa</h3>
                           <input type="hidden" id="idname-146" name="name" value="Mezcla Ksa" />
                           <input type="hidden" id="idprice-146" name="price" value="120" />
                           <input type="hidden" id="category" name="category" value="gianmarcocvax" />
                           <div class="mask">
                              <h3>120.00 MXN</h3>
                              <p></p>
                           </div>
                           <img src="http://www.dar-elweb.com/demos/zarpos/files/products/dbc454a917640daa6a380c7acb7f61d9_thumb.jpg" alt="Mezcla Ksa">                        </div>
                     </a>
               </div>
                                                         <div class="col-sm-2 col-xs-4">
                     <a href="javascript:void(0)" class="addPct" id="product-11" onclick="add_posale('147')">
                        <div class="product color01 flat-box">
                           <h3 id="proname">S10</h3>
                           <input type="hidden" id="idname-147" name="name" value="S10" />
                           <input type="hidden" id="idprice-147" name="price" value="120" />
                           <input type="hidden" id="category" name="category" value="Samsung" />
                           <div class="mask">
                              <h3>120.00 MXN</h3>
                              <p></p>
                           </div>
                                                   </div>
                     </a>
               </div>
                                    </div>
      </div>
   </div>
</div>

<!-- /.container -->
<script type="text/javascript">

$(document).ready(function() {
   $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
   $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
   $('#ItemsNum span, #ItemsNum2 span').load("http://www.dar-elweb.com/demos/zarpos/pos/totiems");
   $('.holdList').load("http://www.dar-elweb.com/demos/zarpos/pos/holdList/39");

   $('.Paid').show();
   $('.ReturnChange').show();
   $('.CreditCardNum').hide();
   $('.CreditCardHold').hide();
   $('.ChequeNum').hide();
   $('.stripe-btn').hide();



   $("#paymentMethod").change(function(){

      var p_met = $(this).find('option:selected').val();

      if (p_met === '0') {
         $('.Paid').show();
         $('.ReturnChange').show();
         $('.CreditCardNum').hide();
         $('.CreditCardHold').hide();
         $('.CreditCardMonth').hide();
         $('.CreditCardYear').hide();
         $('.CreditCardCODECV').hide();
         $('#CreditCardNum').val('');
         $('#CreditCardHold').val('');
         $('#CreditCardYear').val('');
         $('#CreditCardMonth').val('');
         $('#CreditCardCODECV').val('');
         $('.stripe-btn').hide();
         $('.ChequeNum').hide();
      } else if (p_met === '1') {
         $('.Paid').show();
         $('.ReturnChange').hide();
         $('.CreditCardNum').show();
         $('.CreditCardHold').show();
         $('.CreditCardMonth').show();
         $('.CreditCardYear').show();
         $('.CreditCardCODECV').show();
         $('.stripe-btn').show();
         $('.ChequeNum').hide();
      } else if (p_met === '2') {
         $('.Paid').hide();
         $('.ReturnChange').hide();
         $('.CreditCardNum').hide();
         $('.CreditCardHold').hide();
         $('.CreditCardMonth').hide();
         $('.CreditCardYear').hide();
         $('.CreditCardCODECV').hide();
         $('#CreditCardNum').val('');
         $('#CreditCardHold').val('');
         $('#CreditCardYear').val('');
         $('#CreditCardMonth').val('');
         $('#CreditCardCODECV').val('');
         $('.stripe-btn').hide();
         $('.ChequeNum').show();
      }

   });
   /********************************* Credit Card infos section ****************************************/
   $('#CreditCardNum').validateCreditCard(function(result) {
      var cardtype = result.card_type == null ? '-' : result.card_type.name;
      $('.CreditCardNum i').removeClass('dark-blue');
      $('#' + cardtype).addClass('dark-blue');
   });

   $('#CreditCardNum').keypress(function (e) {
      var data = $(this).val();
      if(data.length > 22){

       if (e.keyCode == 13) {
           e.preventDefault();

           var c = new SwipeParserObj(data);

               $('#CreditCardNum').val(c.account);
               $('#CreditCardHold').val(c.account_name);
               $('#CreditCardYear').val(c.exp_year);
               $('#CreditCardMonth').val(c.exp_month);
               $('#CreditCardCODECV').val('');

           }
           else {
               $('#CreditCardNum').val('');
               $('#CreditCardHold').val('');
               $('#CreditCardYear').val('');
               $('#CreditCardMonth').val('');
               $('#CreditCardCODECV').val('');
           }

           $('#CreditCardCODECV').focus();
           $('#CreditCardNum').validateCreditCard(function(result) {
              var cardtype = result.card_type == null ? '-' : result.card_type.name;
              $('.CreditCardNum i').removeClass('dark-blue');
              $('#' + cardtype).addClass('dark-blue');
           });
   }

   });


   // ********************************* change calculations
   $('#Paid').on('keyup',function() {
      var change = -(parseFloat($('#total').text()) - parseFloat($(this).val()));
      if(change < 0){
         $('#ReturnChange span').text(change.toFixed(2));
         $('#ReturnChange span').addClass( "red" );
         $('#ReturnChange span').removeClass( "light-blue" );
      }else{
         $('#ReturnChange span').text(change.toFixed(2));
         $('#ReturnChange span').removeClass( "red" );
         $('#ReturnChange span').addClass( "light-blue" );
      }
    });



    //  search product
   $("#searchProd").keyup(function(){
      // Retrieve the input field text
      var filter = $(this).val();
      // Loop through the list
      $("#productList2 #proname").each(function(){
         // If the list item does not contain the text phrase fade it out
         if ($(this).text().search(new RegExp(filter, "i")) < 0) {
             $(this).parent().parent().parent().hide();
         // Show the list item if the phrase matches
         } else {
             $(this).parent().parent().parent().show();
         }
      });
   });
});
// barcode scanner
function barcode(){
   var code = $('.barcode').val();
   $.ajax({
       url : "http://www.dar-elweb.com/demos/zarpos/pos/findproduct/"+code,
       type: "POST",
       dataType: "JSON",
       success: function(data)
       {
          add_posale(data);
          $('.barcode').val('');
       },
       error: function (jqXHR, textStatus, errorThrown)
       {
          alert("error");
       }
   });
   return false;
};

//  **********************select categorie

$(".categories").on("click", function () {
   // Retrieve the input field text
   var filter = $(this).attr('id');
   $(this).parent().children().removeClass('selectedGat');

   $(this).addClass('selectedGat');
   // Loop through the list
   $("#productList2 #category").each(function(){
      // If the list item does not contain the text phrase fade it out
      if ($(this).val().search(new RegExp(filter, "i")) < 0) {
         $(this).parent().parent().parent().hide();
         // Show the list item if the phrase matches
      } else {
         $(this).parent().parent().parent().show();
      }
   });
});
// function to calculate a percentage from a number
function percentage(tot, n) {
   var perc;
   perc = ((parseFloat(tot) * (parseFloat(n ? n : 0)*0.01)));
   return perc;
}
// function to calculate the total number
function total_change() {
   var tot;
   if ( ($('.TAX').val().indexOf('%') == -1) && ($('.Remise').val().indexOf('%') == -1) ) {
      tot = parseFloat($('#Subtot').text().replace(/ /g,'')) + parseFloat($('.TAX').val() ? $('.TAX').val() : 0);
      $('#taxValue').text('MXN');
      $('#RemiseValue').text('MXN');
      tot = tot - parseFloat($('.Remise').val() ? $('.Remise').val() : 0);
      $('#total').text(tot.toFixed(2));
      $('#Paid').val(tot.toFixed(2));
      $('#TotalModal').text('Total '+tot.toFixed(2)+' MXN');
   }else if ( ($('.TAX').val().indexOf('%') != -1) && ($('.Remise').val().indexOf('%') == -1) ) {
      tot = parseFloat($('#Subtot').text()) + percentage($('#Subtot').text(), $('.TAX').val());
      $('#taxValue').text(percentage($('#Subtot').text(), $('.TAX').val()).toFixed(2) + ' MXN');
      $('#RemiseValue').text('MXN');
      tot = tot - parseFloat($('.Remise').val() ? $('.Remise').val() : 0);
      $('#total').text(tot.toFixed(2));
      $('#Paid').val(tot.toFixed(2));
      $('#TotalModal').text('Total '+tot.toFixed(2)+' MXN');
   }else if ( ($('.TAX').val().indexOf('%') != -1) && ($('.Remise').val().indexOf('%') != -1) ) {
      tot = parseFloat($('#Subtot').text()) + percentage($('#Subtot').text(), $('.TAX').val());
      $('#taxValue').text(percentage($('#Subtot').text(), $('.TAX').val()).toFixed(2) + ' MXN');
      tot = tot - percentage($('#Subtot').text(), $('.Remise').val());
      $('#RemiseValue').text(percentage($('#Subtot').text(), $('.Remise').val()).toFixed(2) + ' MXN');
      $('#total').text(tot.toFixed(2));
      $('#Paid').val(tot.toFixed(2));
      $('#TotalModal').text('Total '+tot.toFixed(2)+' MXN');
   }else if ( ($('.TAX').val().indexOf('%') == -1) && ($('.Remise').val().indexOf('%') != -1) ) {
      tot = parseFloat($('#Subtot').text()) + parseFloat($('.TAX').val() ? $('.TAX').val() : 0);
      tot = tot - percentage($('#Subtot').text(), $('.Remise').val());
      $('#taxValue').text('MXN');
      $('#RemiseValue').text(percentage($('#Subtot').text(), $('.Remise').val()).toFixed(2) + ' MXN');
      $('#total').text(tot.toFixed(2));
      $('#Paid').val(tot.toFixed(2));
      $('#TotalModal').text('Total '+tot.toFixed(2)+' MXN');
   }
}


function delete_posale(id)
{
  // ajax delete data to database
  $.ajax({
      url : "http://www.dar-elweb.com/demos/zarpos/pos/delete/"+id,
      type: "POST",
      dataType: "JSON",
      success: function(data)
      {
         $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
         $('#ItemsNum span, #ItemsNum2 span').load("http://www.dar-elweb.com/demos/zarpos/pos/totiems");
         $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
         alert("error");
      }
  });

}

/********************************** Hold functions ************************************/
function AddHold()
{
  $.ajax({
      url : "http://www.dar-elweb.com/demos/zarpos/pos/AddHold/39",
      type: "POST",
      dataType: "JSON",
      success: function(data)
      {
         $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
         $('#ItemsNum span, #ItemsNum2 span').load("http://www.dar-elweb.com/demos/zarpos/pos/totiems");
         $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
         $('.holdList').load("http://www.dar-elweb.com/demos/zarpos/pos/holdList/39");
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
         alert("error");
      }
  });

}

function RemoveHold()
{
   var number = $('.selectedHold').clone().children().remove().end().text();
   if(number !=1) {
      swal({   title: 'Are you sure ?',
      text: 'You will not be able to recover this Data later!',
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: 'Yes, delete it!',
      closeOnConfirm: false },
      function(){
        // ajax delete data to database
        $.ajax({
            url : "http://www.dar-elweb.com/demos/zarpos/pos/RemoveHold/"+number+"/39",
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
               $('#ItemsNum span, #ItemsNum2 span').load("http://www.dar-elweb.com/demos/zarpos/pos/totiems");
               $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
               $('.holdList').load("http://www.dar-elweb.com/demos/zarpos/pos/holdList/39");
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
               alert("error");
            }
        });
      swal.close(); });
   }

}

function SelectHold(number)
{
  // ajax delete data to database
  $.ajax({
      url : "http://www.dar-elweb.com/demos/zarpos/pos/SelectHold/"+number,
      type: "POST",
      dataType: "JSON",
      success: function(data)
      {
         $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
         $('#ItemsNum span, #ItemsNum2 span').load("http://www.dar-elweb.com/demos/zarpos/pos/totiems");
         $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
         $('#'+number).parent().children().removeClass('selectedHold');
         $('#'+number).addClass('selectedHold');
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
         alert("error");
      }
  });

}

/********************************** end Hold functions ************************************/

function add_posale(id)
{
   var name1 = $('#idname-'+id).val();
   var price1 = $('#idprice-'+id).val();
   var number = $('.selectedHold').clone().children().remove().end().text();
     // ajax delete data to database
     $.ajax({
         url : "http://www.dar-elweb.com/demos/zarpos/pos/addpdc/",
         type: "POST",
         data: {name: name1, price: price1, product_id: id, number: number, registerid: 39},
         success: function(data)
         {
            if(data === 'stock'){
               swal("Low inventory");
            }else{
                $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
                $('#ItemsNum span, #ItemsNum2 span').load("http://www.dar-elweb.com/demos/zarpos/pos/totiems");
                $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
            }
         },
         error: function (jqXHR, textStatus, errorThrown)
         {
            alert("error");
         }
     });

}

function edit_posale(id)
{
   var qt1 = $('#qt-'+id).val();
        $.ajax({
            url : "http://www.dar-elweb.com/demos/zarpos/pos/edit/"+id,
            type: "POST",
            data: {qt: qt1},
            success: function(data)
            {
               if(data === 'stock'){
                  swal("Low inventory");
                  $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
               }else{
                   $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
                   $('#ItemsNum span, #ItemsNum2 span').load("http://www.dar-elweb.com/demos/zarpos/pos/totiems");
                   $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
               }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
               alert("error");
            }
        });

}


$("#customerSelect").change(function(){

  var id = $(this).find('option:selected').val();
  if(id === '0') {
      $('.Remise').val('');
  } else {
     $.ajax({
         url : "http://www.dar-elweb.com/demos/zarpos/pos/GetDiscount/"+id,
         type: "POST",
         success: function(data)
         {
            var values = data.split('~');
            $('#customerName span').text(values[1]);
            $('.Remise').val(values[0]);
            $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
         },
         error: function (jqXHR, textStatus, errorThrown)
         {
            alert("error");
         }
    });
 }
});

function cancelPOS(){
   swal({   title: 'Are you sure ?',
   text: 'You will not be able to recover this Data later!',
   type: "warning",
   showCancelButton: true,
   confirmButtonColor: "#DD6B55",
   confirmButtonText: 'Yes, delete it!',
   closeOnConfirm: false },
   function(){

  $('#customerSelect').val('0');
  $('#customerSelect').trigger('change.select2');
  $('.Remise').val('');
  $('.TAX').val('16');

  $.ajax({
      url : "http://www.dar-elweb.com/demos/zarpos/pos/ResetPos/",
      type: "POST",
      success: function(data)
      {
          $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
          $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
          $('#ItemsNum span, #ItemsNum2 span').text("0");
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
         alert("error");
      }
 });
 swal('Deleted!', 'the data has been deleted.', "success"); });
};


function saleBtn(type) {
   var clientID = $('#customerSelect').find('option:selected').val();
   var clientName = $('#customerName span').text();
   var Tax = $('.TAX').val();
   var Discount = $('.Remise').val();
   var Subtotal = $('#Subtot').text();
   var Total = $('#total').text();
   var createdBy = 'admin Doe';
   var totalItems = $('#ItemsNum span').text();
   var Paid = $('#Paid').val();
   var paidMethod = $('#paymentMethod').find('option:selected').val();
   var Status = 0;
   var ccnum = $('#CreditCardNum').val();
   var ccmonth = $('#CreditCardMonth').val();
   var ccyear = $('#CreditCardYear').val();
   var ccv = $('#CreditCardCODECV').val();
   switch(paidMethod) {
       case '1':
           paidMethod += '~'+$('#CreditCardNum').val()+'~'+$('#CreditCardHold').val();
           break;
       case '2':
           paidMethod += '~'+$('#ChequeNum').val()
           break;
       case '0':
           var change = parseFloat(Total) - parseFloat(Paid);
           if(change==parseFloat(Total)) Status = 1;
           else if(change>0) Status = 2;
           else if(change<=0) Status = 0;
   }
   var taxamount = $('.TAX').val().indexOf('%') != -1 ? parseFloat($('#taxValue').text()) : $('.TAX').val();
   var discountamount = $('.Remise').val().indexOf('%') != -1 ? parseFloat($('#RemiseValue').text()) : $('.Remise').val();

  $.ajax({
      url : "http://www.dar-elweb.com/demos/zarpos/pos/AddNewSale/"+type,
      type: "POST",
      data: {client_id: clientID, clientname: clientName, discountamount: discountamount, taxamount: taxamount, tax: Tax, discount: Discount, subtotal: Subtotal, total: Total, created_by: createdBy, totalitems: totalItems, paid: Paid, status: Status, paidmethod: paidMethod, ccnum: ccnum, ccmonth: ccmonth, ccyear: ccyear, ccv: ccv},
      success: function(data)
      {
         $('#printSection').html(data);
         $('#productList').load("http://www.dar-elweb.com/demos/zarpos/pos/load_posales");
         $('#ItemsNum span, #ItemsNum2 span').load("http://www.dar-elweb.com/demos/zarpos/pos/totiems");
         $('#Subtot').load("http://www.dar-elweb.com/demos/zarpos/pos/subtot", null, total_change);
         $('#AddSale').modal('hide');
         $('#ticket').modal('show');
         $('#ReturnChange span').text('0');
         $('#Paid').val('0');
         $('.holdList').load("http://www.dar-elweb.com/demos/zarpos/pos/holdList/39");
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
         alert("error");
      }
  });

  $('#CreditCardNum').val('');
  $('#CreditCardHold').val('');
  $('#CreditCardYear').val('');
  $('#CreditCardMonth').val('');
  $('#CreditCardCODECV').val('');

}

function PrintTicket() {
   $('.modal-body').removeAttr('id');
   window.print();
   $('.modal-body').attr('id', 'modal-body');
}

function CloseRegister() {
   $.ajax({
      url : "http://www.dar-elweb.com/demos/zarpos/pos/CloseRegister/",
      type: "POST",
      success: function(data)
      {
         $('#closeregsection').html(data);
         $('#CloseRegister').modal('show');
         setTimeout(function(){$('#countedcash').focus()}, 1000);
         $('#countedcash').on('keyup',function() {
           var change = -(parseFloat($('#expectedcash').text()) - parseFloat($(this).val()));
           var difftot = change + parseFloat($('#diffcc').text()) + parseFloat($('#diffcheque').text());
           var total = parseFloat($('#countedcc').val()) + parseFloat($('#countedcheque').val()) + parseFloat($('#countedcash').val());
           $('#countedtotal').text(total.toFixed(2));
           $('#difftotal').text(difftot.toFixed(2))
           if(change < 0){
               $('#diffcash').text(change.toFixed(2));
               $('#diffcash').addClass( "red" );
               $('#diffcash').removeClass( "light-blue" );
           }else{
               $('#diffcash').text(change.toFixed(2));
               $('#diffcash').removeClass( "red" );
               $('#diffcash').addClass( "light-blue" );
           }
         });

         $('#countedcc').on('keyup',function() {
           var change = -(parseFloat($('#expectedcc').text()) - parseFloat($(this).val()));
           var difftot = change + parseFloat($('#diffcash').text()) + parseFloat($('#diffcheque').text());
           var total = parseFloat($('#countedcc').val()) + parseFloat($('#countedcheque').val()) + parseFloat($('#countedcash').val());
           $('#countedtotal').text(total.toFixed(2));
           $('#difftotal').text(difftot.toFixed(2))
           if(change < 0){
               $('#diffcc').text(change.toFixed(2));
               $('#diffcc').addClass( "red" );
               $('#diffcc').removeClass( "light-blue" );
           }else{
               $('#diffcc').text(change.toFixed(2));
               $('#diffcc').removeClass( "red" );
               $('#diffcc').addClass( "light-blue" );
           }
         });

         $('#countedcheque').on('keyup',function() {
           var change = -(parseFloat($('#expectedcheque').text()) - parseFloat($(this).val()));
           var difftot = change + parseFloat($('#diffcc').text()) + parseFloat($('#diffcash').text());
           var total = parseFloat($('#countedcc').val()) + parseFloat($('#countedcheque').val()) + parseFloat($('#countedcash').val());
           $('#countedtotal').text(total.toFixed(2));
           $('#difftotal').text(difftot.toFixed(2))
           if(change < 0){
               $('#diffcheque').text(change.toFixed(2));
               $('#diffcheque').addClass( "red" );
               $('#diffcheque').removeClass( "light-blue" );
           }else{
               $('#diffcheque').text(change.toFixed(2));
               $('#diffcheque').removeClass( "red" );
               $('#diffcheque').addClass( "light-blue" );
           }
         });
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert("error");
      }
   });
}

function SubmitRegister() {
   var expectedcash = $('#expectedcash').text();
   var countedcash = $('#countedcash').val();
   var expectedcc = $('#expectedcc').text();
   var countedcc = $('#countedcc').val();
   var expectedcheque = $('#expectedcheque').text();
   var countedcheque = $('#countedcheque').val();
   var RegisterNote = $('#RegisterNote').val();

   swal({   title: 'Are you sure ?',
   text: 'You will not be able to recover the Holds later!',
   type: "warning",
   showCancelButton: true,
   confirmButtonColor: "#DD6B55",
   confirmButtonText: 'Yes, Close it!',
   closeOnConfirm: false },
   function(){

   $.ajax({
      url : "http://www.dar-elweb.com/demos/zarpos/pos/SubmitRegister/",
      type: "POST",
      data: {expectedcash: expectedcash, countedcash: countedcash, expectedcc: expectedcc, countedcc: countedcc, expectedcheque: expectedcheque, countedcheque: countedcheque, RegisterNote: RegisterNote},
      success: function(data)
      {
         window.location.href = "http://www.dar-elweb.com/demos/zarpos/";
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert("error");
      }
   });

   swal.close(); });
}

function email()
{
   $('#ticket').modal('hide');
   swal({
      title: "An input!",
      text: "Email:",
      type: "input",
      showCancelButton: true,
      closeOnConfirm: false,
      animation: "slide-from-top",
      inputPlaceholder: "Email" },
      function(inputValue){
         if (inputValue === false) return false;
         if (inputValue === "") {
            swal.showInputError("You need to write an email!");
            return false   }
            var content = $('#printSection').html();
            $.ajax({
               url : "http://www.dar-elweb.com/demos/zarpos/pos/email/",
               type: "POST",
               data: {content: content, email: inputValue},
               success: function(data)
               {
                  $('#ticket').modal('show');
                  swal.close();
               },
               error: function (jqXHR, textStatus, errorThrown)
               {
                   alert("error");
               }
            });
             });
}

function pdfreceipt(){


   var content = $('#printSection').html();
   $.redirect('http://www.dar-elweb.com/demos/zarpos/pos/pdfreceipt/', { content: content });

}

</script>


<!-- Modal -->
<div class="modal fade" id="AddSale" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="AddSale">Add Sale</h4>
      </div>
      <form>
      <div class="modal-body">
            <div class="form-group">
               <h2 id="customerName">Customer <span>Walk in Customer</span></h2>
           </div>
           <div class="form-group">
             <h3 id="ItemsNum2"><span></span> items</h3>
          </div>
           <div class="form-group">
             <h2 id="TotalModal"></h2>
          </div>
           <div class="form-group">
             <label for="paymentMethod">Payment method:</label>
             <select class="js-select-options form-control" id="paymentMethod">
               <option value="0">Cash</option>
               <option value="1">Credit Card</option>
               <option value="2">Cheque</option>
            </select>
           </div>
           <div class="form-group Paid">
             <label for="Paid">Paid</label>
             <input type="text" value="0" name="paid" class="form-control paidk" id="Paid" placeholder="Paid">
           </div>
           <div class="form-group CreditCardNum">
             <i class="fa fa-cc-visa fa-2x" id="visa" aria-hidden="true"></i>
             <i class="fa fa-cc-mastercard fa-2x" id="mastercard" aria-hidden="true"></i>
             <i class="fa fa-cc-amex fa-2x" id="amex" aria-hidden="true"></i>
             <i class="fa fa-cc-discover fa-2x" id="discover" aria-hidden="true"></i>
             <label for="CreditCardNum">Credit Card Number (swipe)</label>
             <input type="text" class="form-control cc-num" id="CreditCardNum" placeholder="Credit Card Number (swipe)">
           </div>
           <div class="clearfix"></div>
           <div class="form-group CreditCardHold col-md-4 padding-s">
             <input type="text" class="form-control" id="CreditCardHold" placeholder="Credit Card Holder">
           </div>
           <div class="form-group CreditCardHold col-md-2 padding-s">
             <input type="text" class="form-control" id="CreditCardMonth" placeholder="Month">
           </div>
           <div class="form-group CreditCardHold col-md-2 padding-s">
             <input type="text" class="form-control" id="CreditCardYear" placeholder="Year">
           </div>
           <div class="form-group CreditCardHold col-md-4 padding-s">
             <input type="text" class="form-control" id="CreditCardCODECV" placeholder="CODE CV">
           </div>
           <div class="form-group ChequeNum">
             <label for="ChequeNum">Cheque Number</label>
             <input type="text" name="chequenum" class="form-control" id="ChequeNum" placeholder="Cheque Number">
           </div>
          <div class="form-group ReturnChange">
             <h3 id="ReturnChange">Change <span>0</span> MXN</h3>
          </div>
          <div class="clearfix"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-add" onclick="saleBtn(1)">Submit</button>
      </div>
   </form>    </div>
 </div>
</div>
<!-- /.Modal -->


<!-- Modal ticket -->
<div class="modal fade" id="ticket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document" id="ticketModal">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ticket">Receipt</h4>
      </div>
      <div class="modal-body" id="modal-body">
         <div id="printSection">
            <!-- Ticket goes here -->
            <center><h1 style="color:#34495E">Empty</h1></center>
         </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default hiddenpr" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-add hiddenpr" href="javascript:void(0)" onClick="pdfreceipt()">PDF</button>
        <button type="button" class="btn btn-add hiddenpr" onclick="email()">email</button>
        <button type="button" class="btn btn-add hiddenpr" onclick="PrintTicket()">print</button>
      </div>
    </div>
 </div>
</div>
<!-- /.Modal -->

<!-- Modal add user -->
<div class="modal fade" id="AddCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Customer</h4>
      </div>
      <form action="http://www.dar-elweb.com/demos/zarpos/customers/add" method="post" accept-charset="utf-8" enctype="multipart/form-data">      <div class="modal-body">
            <div class="form-group">
             <label for="CustomerName">Customer Name</label>
             <input type="text" name="name" class="form-control" id="CustomerName" placeholder="Customer Name">
           </div>
           <div class="form-group">
             <label for="CustomerPhone">Phone</label>
             <input type="text" name="phone" class="form-control" id="CustomerPhone" placeholder="Phone">
           </div>
           <div class="form-group">
             <label for="CustomerEmail">Email</label>
             <input type="email" name="email" class="form-control" id="CustomerEmail" placeholder="Email">
           </div>
           <div class="form-group">
             <label for="CustomerDiscount">Discount</label>
             <input type="text" name="discount" class="form-control" id="CustomerDiscount" placeholder="Discount">
           </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-add">Submit</button>
      </div>
   </form>    </div>
 </div>
</div>
<!-- /.Modal -->

<!-- Modal add user -->
<div class="modal fade" id="CloseRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">close&nbsp;register</h4>
      </div>
      <div class="modal-body">
         <div id="closeregsection">
            <!-- close register detail goes here -->
         </div>
      </div>
      <div class="modal-footer">
        <a href="javascript:void(0)" onclick="SubmitRegister()" class="btn btn-red col-md-12 flat-box-btn">close&nbsp;register</a>
      </div>
    </div>
 </div>
</div>
<!-- /.Modal -->





      <!-- slim scroll script -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery.slimscroll.min.js"></script>
      <!-- waves material design effect -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/waves.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/bootstrap.min.js"></script>
      <!-- keyboard widget dependencies -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery.keyboard.js"></script>
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery.keyboard.extension-all.js"></script>
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery.keyboard.extension-extender.js"></script>
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery.keyboard.extension-typing.js"></script>
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery.mousewheel.js"></script>
      <!-- select2 plugin script -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/select2.min.js"></script>
      <!-- dalatable scripts -->
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/datatables/js/jquery.dataTables.min.js"></script>
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/datatables/js/dataTables.bootstrap.js"></script>
      <!-- summernote js -->
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/js/summernote.js"></script>
      <!-- chart.js script -->
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/js/Chart.js"></script>
      <!-- moment JS -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/moment.min.js"></script>
      <!-- Include Date Range Picker -->
      <script type="text/javascript" src="http://www.dar-elweb.com/demos/zarpos/assets/js/daterangepicker.js"></script>
      <!-- Sweet Alert swal -->
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/js/sweetalert.min.js"></script>
      <!-- datepicker script -->
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/js/bootstrap-datepicker.min.js"></script>
      <!-- creditCardValidator script -->
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery.creditCardValidator.js"></script>
      <!-- creditCardValidator script -->
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/js/credit-card-scanner.js"></script>
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery.redirect.js"></script>
      <!-- ajax form -->
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/js/jquery.form.min.js"></script>
      <!-- custom script -->
      <script src="http://www.dar-elweb.com/demos/zarpos/assets/js/app.js"></script>
   </body>
</html>
