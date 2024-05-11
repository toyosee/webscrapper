<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow"> 
    <meta name="csrf-token" content="UZS9vSfoejl1bIBkbRZHq3C7fcdt3b9oVsXJS85n" /> 
    <title>Add herb :: Herb Management</title>

            
                    <link rel="stylesheet" type="text/css" href="{{asset("packages/backpack/base/css/bundle.css?v=4.0.63@61c989db281d8e3ee184bb6a6f54912d7e1531e7")}}">
                <link rel="stylesheet" type="text/css" href="{{asset("packages/source-sans-pro/source-sans-pro.css?v=4.0.63@61c989db281d8e3ee184bb6a6f54912d7e1531e7")}}">
                <link rel="stylesheet" type="text/css" href="{{asset("packages/line-awesome/css/line-awesome.min.css?v=4.0.63@61c989db281d8e3ee184bb6a6f54912d7e1531e7")}}">
            
    
        <link rel="stylesheet" href="{{asset("packages/backpack/crud/css/crud.css")}}">
    <link rel="stylesheet" href="{{asset("packages/backpack/crud/css/form.css")}}">
    <link rel="stylesheet" href="{{asset("packages/backpack/crud/css/create.css")}}">

    <!-- CRUD FORM CONTENT - crud_fields_styles stack -->
        <style>
        .nav-tabs-custom {
            box-shadow: none;
        }
        .nav-tabs-custom > .nav-tabs.nav-stacked > li {
            margin-right: 0;
        }

        .tab-pane .form-group h1:first-child,
        .tab-pane .form-group h2:first-child,
        .tab-pane .form-group h3:first-child {
            margin-top: 0;
        }
    </style>
<link href="{{asset("packages/nouislider/distribute/nouislider.min.css")}}" rel="stylesheet" type="text/css" />
<!-- include select2 css-->
<link href="{{asset("packages/select2/dist/css/select2.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("packages/select2-bootstrap-theme/dist/select2-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
<!-- include select2 css-->
<link href="{{asset("packages/select2/dist/css/select2.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("packages/select2-bootstrap-theme/dist/select2-bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("packages/nouislider/distribute/nouislider.min.css")}}" rel="stylesheet" type="text/css" />
<style>
    #herb-container {
        padding: 10px 15px 40px;
        width: 100%;
    }

    #herb-container .herb {
        width: 100%;
        margin-bottom: 25px;
    }

    #herb-container .dosage-slider {
        margin-top: 50px;
    }
</style>
<style type="text/css">
    .existing-file {
        border: 1px solid rgba(0, 40, 100, .12);
        border-radius: 5px;
        padding-left: 10px;
        vertical-align: middle;
    }

    .existing-file img {
        display: inline-block;
        width: 36px;
        height: 36px;
        margin: 5px;
        border-radius: 5px;
    }

    .existing-file .file_clear_button {
        margin-top: 8px;
        margin-right: 15px;
    }

    .backstrap-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        margin-bottom: 0;
    }

    .backstrap-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        margin: 0;
        opacity: 0;
    }

    .backstrap-file-input:focus~.backstrap-file-label {
        border-color: #acc5ea;
        box-shadow: 0 0 0 0rem rgba(70, 127, 208, 0.25);
    }

    .backstrap-file-input:disabled~.backstrap-file-label {
        background-color: #e4e7ea;
    }

    .backstrap-file-input:lang(en)~.backstrap-file-label::after {
        content: "Browse";
    }

    .backstrap-file-input~.backstrap-file-label[data-browse]::after {
        content: attr(data-browse);
    }

    .backstrap-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-weight: 400;
        line-height: 1.5;
        color: #5c6873;
        background-color: #fff;
        border: 1px solid #e4e7ea;
        border-radius: 0.25rem;
        font-weight: 400 !important;
    }

    .backstrap-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(1.5em + 0.75rem);
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        color: #5c6873;
        content: "Browse";
        background-color: #f0f3f9;
        border-left: inherit;
        border-radius: 0 0.25rem 0.25rem 0;
    }
</style>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="app aside-menu-fixed sidebar-lg-show">

  <header class="app-header bg-light border-0 navbar">
  <!-- Logo -->
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{url("/")}}">
    <b>Herb</b>Admin
  </a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- =================================================== -->
<!-- ========== Top menu items (ordered left) ========== -->
<!-- =================================================== -->
<ul class="nav navbar-nav d-md-down-none">

            <!-- Topbar. Contains the left part -->
        <!-- This file is used to store topbar (left) items -->


    
</ul>
<!-- ========== End of top menu left items ========== -->



<!-- ========================================================= -->
<!-- ========= Top menu right items (ordered right) ========== -->
<!-- ========================================================= -->
<ul class="nav navbar-nav ml-auto ">
            <!-- Topbar. Contains the right part -->
        <!-- This file is used to store topbar (right) items -->



        <li class="nav-item dropdown pr-4">
  <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <img class="img-avatar" src="https://www.gravatar.com/avatar/08a61f8b1fefc1e3ce31266fff657f6e.jpg?s=80&amp;d=https%3A%2F%2Fplacehold.it%2F160x160%2F00a65a%2Fffffff%2F%26text%3DS&amp;r=g" alt="Super Admin">
  </a>
  <div class="dropdown-menu dropdown-menu-right mr-4 pb-1 pt-1">
    <a class="dropdown-item" href="{{url("admin/edit-account-info")}}"><i class="fa fa-user"></i> My Account</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{url("admin/logout")}}"><i class="fa fa-lock"></i> Logout</a>
  </div>
</li>
    </ul>
<!-- ========== End of top menu right items ========== -->
</header>

<div class="app-body">

        <!-- Left side column. contains the sidebar -->
        <div class="sidebar sidebar-pills bg-light">
          <!-- sidebar: style can be found in sidebar.less -->
          <nav class="sidebar-nav overflow-hidden">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="nav">
              <!-- <li class="nav-title">ADMINISTRATION</li> -->
              <!-- ================================================ -->
              <!-- ==== Recommended place for admin menu items ==== -->
              <!-- ================================================ -->
    
              <!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
    <li class="nav-item"><a class="nav-link" href='{{url("/admin/dashboard")}}'><i class="fa fa-dashboard nav-icon"></i> Dashboard</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/admin")}}'><i class='nav-icon fa fa-user'></i> Admins</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/practitioners")}}'><i
        class='nav-icon fa fa-user'></i> Practitioners</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/unconfrimedpractitioners")}}'><i
        class='nav-icon fa fa-user'></i>Unconfirmed Practitioners</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/subscriptions")}}'><i
        class='nav-icon fa fa-money'></i> Subscriptions</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/subscribers")}}'><i
        class='nav-icon fa fa-user'></i> Subscribers</a></li>
        <li class='nav-item'><a class='nav-link' href='{{url("/admin/payments")}}'><i
            class='nav-icon fa fa-money'></i> Payments</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/herb")}}'><i class='nav-icon fa fa-leaf'></i> Herbs</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/herb-formula")}}'><i class='nav-icon fa fa-flask'></i> Herb Formulas</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/adminsignssymptoms")}}'><i class='nav-icon fa fa-hand-pointer-o'></i> Signs & Symptoms</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/chemicalcompositions")}}'><i class='nav-icon fa fa-flask'></i> Chemical Compositions</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/adminproperties")}}'><i class='nav-icon fa fa-flask'></i> Properties</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/adminsystemsaffected")}}'><i class='nav-icon fa fa-flask'></i> Systems affected</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/adminactions")}}'><i class='nav-icon fa fa-flask'></i> Actions</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/adminpharmacology")}}'><i class='nav-icon fa fa-flask'></i> Pharmacology</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/adminantibioticstrains")}}'><i class='nav-icon fa fa-flask'></i> Antibiotic Strains</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/adminhormones")}}'><i class='nav-icon fa fa-flask'></i> Hormones</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/adminherbherbinteraction")}}'><i class='nav-icon fa fa-leaf'></i> Herb-Herb interaction</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/adminherbdruginteraction")}}'><i class='nav-icon fa fa-leaf'></i> Herb-Drug interaction</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/admintoxicitycontraindications")}}'><i class='nav-icon fa fa-flask'></i> Toxicity / Contraindications</a></li>
    <li class='nav-item'><a class='nav-link' href='{{url("/admin/submission")}}'><i class='nav-icon fa fa-file-text'></i> Submissions</a></li>
    
    
    
    
    
    
              <!-- ======================================= -->
              <!-- <li class="divider"></li> -->
              <!-- <li class="nav-title">Entries</li> -->
            </ul>
          </nav>
          <!-- /.sidebar -->
        </div>

        
        



    <main class="main pt-2">

        <nav aria-label="breadcrumb" class="d-none d-lg-block">
           <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                                                                         <li class="breadcrumb-item text-capitalize"><a href='{{url("/admin/dashboard")}}'>Admin</a></li>
                                                                                                   <li class="breadcrumb-item text-capitalize"><a href='{{url("/admin/herb")}}'>herbs</a></li>
                                                                                                   <li class="breadcrumb-item text-capitalize active" aria-current="page">Add</li>
                                                       </ol>
         </nav>
 
                <section class="container-fluid">
           <h2>
         <span class="text-capitalize">herbs</span>
         <small>Add herb.</small>
 
                   <small><a href='{{url("/admin/herb")}}' class="hidden-print font-sm"><i class="fa fa-angle-double-left"></i> Back to all  <span>herbs</span></a></small>
                   </h2>
         </section>
 
         <div class="container-fluid animated fadeIn">
 
                   
           
 <div class="row">
         <div class="col-md-8 bold-labels">
                 <!-- Default box -->
 
                 
                   <form method="post"
                                   action="{{url('admin/herb')}}"
                                                                 enctype="multipart/form-data"
                                                                   >
                          @csrf
 
                       <!-- load the view from the application if it exists, otherwise load the one in the package -->
                                                     <input type="hidden" name="http_referrer" value='{{url("admin/herbs")}}'>
 
 
     <div class="tab-container  mb-2">
 
     <div class="nav-tabs-custom " id="form_tabs">
         <ul class="nav nav-tabs " role="tablist">
                             <li role="presentation" class="nav-item">
                     <a href="#tab_basic" 
                         aria-controls="tab_basic" 
                         role="tab" 
                         tab_name="basic" 
                         data-toggle="tab" 
                         class="nav-link active"
                         >Basic</a>
                 </li>
                             <li role="presentation" class="nav-item">
                     <a href="#tab_details" 
                         aria-controls="tab_details" 
                         role="tab" 
                         tab_name="details" 
                         data-toggle="tab" 
                         class="nav-link "
                         >Details</a>
                 </li>
                             <li role="presentation" class="nav-item">
                     <a href="#tab_formulas-found-in" 
                         aria-controls="tab_formulas-found-in" 
                         role="tab" 
                         tab_name="formulas-found-in" 
                         data-toggle="tab" 
                         class="nav-link "
                         >Formulas Found In</a>
                 </li>
                             <li role="presentation" class="nav-item">
                     <a href="#tab_images" 
                         aria-controls="tab_images" 
                         role="tab" 
                         tab_name="images" 
                         data-toggle="tab" 
                         class="nav-link "
                         >Images</a>
                 </li>
                     </ul>
 
         <div class="tab-content p-0 ">
 
                         <div role="tabpanel" class="tab-pane  active" id="tab_basic">
 
                 <div class="row">
                 <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- text input -->
 <div class="form-group col-sm-12 required"
  >
     <label>Chinese name</label>
     
                     <input
             type="text"
             name="chinese_name"
             value=""
             class="form-control"
                 >
             
     
     </div>
 
 
 
 
 
     
 
 
 
 
 
     
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- text input -->
 <div class="form-group col-sm-12 required"
  >
     <label>English name</label>
     
                     <input
             type="text"
             name="english_name"
             value=""
             class="form-control"
                 >
             
     
     </div>
 
 
 
 
 
     
 
 
 
 
 
     
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- text input -->
 <div class="form-group col-sm-12 required"
  >
     <label>Pharmaceutical name</label>
     
                     <input
             type="text"
             name="pharmaceutical_name"
             value=""
             class="form-control"
                 >
             
     
     </div>
 
 
 
 
 
     
 
 
 
 
 
     
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- text input -->
 <div class="form-group col-sm-12"
  >
     <label>Literal name</label>
     
                     <input
             type="text"
             name="literal_name"
             value=""
             class="form-control"
                 >
             
     
     </div>
 
 
 
 
 
     
 
 
 
 
 
     
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- range-slider -->
 <div class="form-group col-sm-12 required"
 >
     <label>Dosage (g)</label>
     
     <div style="padding: 60px 0 30px;">
         <div id="dosage-slider"></div>
     </div>
     <input type="hidden" id="dosage-input" name="dosage">
 
     
     </div>
 
 
 
 
 
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- number input -->
 <div class="form-group col-sm-12"
  >
     <label for="max_dosage">Maximum Dosage (g)</label>
     
                     <input
                 type="number"
                 name="max_dosage"
             id="max_dosage"
             value=""
             step="any"
             
                                     class="form-control"
                                 >
         
     
     
     </div>
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- radio -->
 
 <div class="form-group col-sm-12"
  >
 
     <div>
         <label>Administered</label>
             </div>
 
     
                     
             
             <div class="form-check">
                 <input  type="radio"
                                 class="form-check-input"
                                 id="usage_1"
                                 name="usage"
                                 value="0"
                                 class="radio"
             
                                      checked>
                 <label class="form-check-label font-weight-normal" for="usage_1">Both Orally and Topically</label>
             </div>
 
             
                     
             
             <div class="form-check">
                 <input  type="radio"
                                 class="form-check-input"
                                 id="usage_2"
                                 name="usage"
                                 value="1"
                                 class="radio"
             
                                     >
                 <label class="form-check-label font-weight-normal" for="usage_2">Orally</label>
             </div>
 
             
                     
             
             <div class="form-check">
                 <input  type="radio"
                                 class="form-check-input"
                                 id="usage_3"
                                 name="usage"
                                 value="2"
                                 class="radio"
             
                                     >
                 <label class="form-check-label font-weight-normal" for="usage_3">Topically</label>
             </div>
 
             
         
     
     
     
 </div>
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Category</label>
         <select name="categories[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
 
         
                                  @foreach($categories as $category)
                                  <option value="{{$category->id}}">{{$category->value}}</option>
                              
                                 @endforeach
                                </select>
 
     
     
     </div>
 
 
 
 
 
 
 
 
 
 
 
                 </div>
             </div>
                         <div role="tabpanel" class="tab-pane " id="tab_details">
 
                 <div class="row">
                 <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Properties</label>
         <select name="properties[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
                      @foreach($properties as $property)
                      <option value="{{$property->id}}">{{$property->value}}
                      @endforeach
         
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Systems affected</label>
         <select name="systems_affected[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
 
               @foreach($systems as $system)
                  <option value="{{$system->id}}">{{$system->value}}</option>
               @endforeach
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Actions</label>
         <select name="actions[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>

                 @foreach($actions as $action)
                  <option value="{{$action->id}}">{{$action->value}}</option>
               @endforeach
 
                              
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Chemical composition Categories</label>
         <select name="chemical_categories[]" id="chemical_categories" onchange="getchemicalCompositions()" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
                 @foreach($chemical_categories as $chemical_category)
                 <option value="{{$chemical_category->id}}">{{$chemical_category->value}}</option>
              @endforeach
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <!-- <div class="form-group col-sm-12"
 >
     <label>Chemical composition</label>
         <select name="chemical_composition[]" id="chemical_compositions" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
 
         
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                                 <option value=""></option>
                             </select>
 
     
     
     </div>
  -->

  <div class="form-group col-sm-12">
    <label>Chemical composition</label>
    <select name="chemical_composition[]" id="chemical_compositions" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple" multiple>
        <!-- Initially empty; will be populated dynamically -->
    </select>
</div>
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Pharmacology</label>
         <select name="pharmacology[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
 
                 @foreach($pharmacology as $data)
                 <option value="{{$data->id}}">{{$data->value}}</option>
              @endforeach
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Antibiotic Strains</label>
         <select name="antibiotic_strains[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
                 @foreach($antibiotic_strains as $strain)
                 <option value="{{$strain->id}}">{{$strain->value}}</option>
              @endforeach
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Hormones</label>
         <select name="hormones[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
 
                 @foreach($hormones as $hormone)
                 <option value="{{$hormone->id}}">{{$hormone->value}}</option>
              @endforeach
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Signs / Symptoms</label>
         <select name="signs_symptoms[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
 
                 @foreach($signs_and_symptoms as $sign)
                 <option value="{{$sign->id}}">{{$sign->value}}</option>
              @endforeach
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Herb-Herb interaction</label>
         <select name="herb_herb_interaction[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
 
         
                 @foreach($herb_herb_interaction as $herb)
                 <option value="{{$herb->id}}">{{$herb->value}}</option>
              @endforeach
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Herb-Drug interaction</label>
         <select name="herb_drug_interaction[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
                 @foreach($herb_drug_interaction as $drug)
                 <option value="{{$drug->id}}">{{$drug->value}}</option>
              @endforeach
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Toxicity / Contraindications</label>
         <select name="toxicity_contraindications[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElement" class="form-control select2_multiple"
                 multiple>
 
         
                 @foreach($toxicity_contraindications as $toxicity)
                 <option value="{{$toxicity->id}}">{{$toxicity->value}}</option>
              @endforeach
                                 
                             </select>
 
     
     
     </div>
 
 
 
 
 
 
                 </div>
             </div>
                         <div role="tabpanel" class="tab-pane " id="tab_formulas-found-in">
 
                 <div class="row">
                 <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- select2 multiple -->
 
 <div class="form-group col-sm-12"
 >
     <label>Found in Formulas</label>
         <select id="herb-selection" name="formulas[]" style="width: 100%" data-init-function="bpFieldInitSelect2MultipleElementHerb" class="form-control select2_multiple"
                 multiple>
 
         
                 @foreach($formulas as $formula)
                 <option value="{{$formula->id}}">{{$formula->chinese_name}}</option>
              @endforeach
                             </select>
 
     
     
     </div>
 <div id="herb-container">
 
 </div>
 
 
 
 
 
 
 
 
 
 
 
                 </div>
             </div>
                         <div role="tabpanel" class="tab-pane " id="tab_images">
 
                 <div class="row">
                 <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- text input -->
 <div class="form-group col-sm-12 "
     
     
                         data-init-function="bpFieldInitUploadElement"
                                 data-field-name="herb_image"
             >
     <label>Herb Image</label>
     
     
     
     
     <div class="backstrap-file ">
         <input type="file" name="herb_image" value="" class="file_input backstrap-file-input"
                 >
         <label class="backstrap-file-label" for="customFile"></label>
     </div>
 
     
     </div>
 
 
 
 
 
 
 
 
     <!-- load the view from type and view_namespace attribute if set -->
     
     <!-- upload multiple input -->
 <div class="form-group col-sm-12 "
     
     
                         data-init-function="bpFieldInitUploadMultipleElement"
                                 data-field-name="constituent_images"
             >
         <label>Constituent Images</label>
         
         
                 
         <input name="constituent_images[]" type="hidden" value="">
         <div class="backstrap-file mt-2">
                 <input type="file" name="constituent_images[]" value="" class="file_input backstrap-file-input"
                         multiple
                 >
                 <label class="backstrap-file-label" for="customFile"></label>
         </div>
 
         
         </div>
 
 
 
 
 
                 </div>
             </div>
             
         </div>
     </div>
 </div>
 
     <input type="hidden" name="current_tab" value="basic" />
 
 
 
 
                       
                   <div id="saveActions" class="form-group">
 
     <input type="hidden" name="save_action" value="save_and_back">
 
     <div class="btn-group" role="group">
 
         <button type="submit" class="btn btn-success">
             <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
             <span data-value="save_and_back">Save and back</span>
         </button>
 
         <div class="btn-group" role="group">
             <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span><span class="sr-only">&#x25BC;</span></button>
             <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                 <a class="dropdown-item" href="javascript:void(0);" data-value="save_and_edit">Save and edit this item</a>
                                 <a class="dropdown-item" href="javascript:void(0);" data-value="save_and_new">Save and new item</a>
                             </div>
           </div>
 
     </div>
 
     <a href='{{url("admin/herbs")}}' class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;Cancel</a>
 </div>
                   </form>
         </div>
 </div>
 
           
                   
         </div>
 
     </main>
 
   </div><!-- ./app-body -->
 
   <footer class="app-footer">
       </footer>
 
       <script type="text/javascript">
     /* Recover sidebar state */
     if (Boolean(sessionStorage.getItem('sidebar-collapsed'))) {
       let body = document.getElementsByTagName('body')[0];
       body.className = body.className.replace('sidebar-lg-show', '');
     }
 
     /* Store sidebar state */
     let navbarToggler = document.getElementsByClassName("navbar-toggler");
     for (let i = 0; i < navbarToggler.length; i++) {
       navbarToggler[i].addEventListener('click', function(event) {
         event.preventDefault();
         if (Boolean(sessionStorage.getItem('sidebar-collapsed'))) {
           sessionStorage.setItem('sidebar-collapsed', '');
         } else {
           sessionStorage.setItem('sidebar-collapsed', '1');
         }
       });
     }
   </script>
 
   <script type="text/javascript" src="{{asset("packages/backpack/base/js/bundle.js?v=4.0.63@61c989db281d8e3ee184bb6a6f54912d7e1531e7")}}"></script>
     
 
 <script type="text/javascript">
   Noty.overrideDefaults({
     layout   : 'topRight',
     theme    : 'backstrap',
     timeout  : 2500, 
     closeWith: ['click', 'button'],
   });
 
   </script>
 <!-- page script -->
 <script type="text/javascript">
     // To make Pace works on Ajax calls
     $(document).ajaxStart(function() { Pace.restart(); });
 
     // Ajax calls should always have the CSRF token attached to them, otherwise they won't work
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
 
     
     let activeTab = $('[href="' + location.hash.replace("#", "#tab_") + '"]');
     location.hash && activeTab && activeTab.tab('show');
     $('.nav-tabs a').on('shown.bs.tab', function (e) {
         location.hash = e.target.hash.replace("#tab_", "#");
     });
 </script>
       <script src="{{asset("packages/backpack/crud/js/crud.js")}}"></script>
     <script src="{{asset("packages/backpack/crud/js/form.js")}}"></script>
     <script src="{{asset("packages/backpack/crud/js/create.js")}}"></script>
 
     <!-- CRUD FORM CONTENT - crud_fields_scripts stack -->
     <script src="{{asset("packages/nouislider/distribute/nouislider.min.js")}}"></script>
 <script>
     let dosageSliderElem = document.getElementById('dosage-slider');
     let dosageInput = document.getElementById('dosage-input');
     let [start, end] = "5-20".split('-');
 
     let dosageSlider = noUiSlider.create(dosageSliderElem, {
         range: {
             min: 0,
             max: 100
         },
         tooltips: [true, true],
         step: 0.1,
         start: [parseFloat(start), parseFloat(end)],
         connect: true
     });
 
     function setInputValue(values) {
         dosageInput.value = `${values[0]}-${values[1]}`;
     }
 
     dosageSlider.on('update', setInputValue);
 </script>
 <!-- include select2 js-->
 <script src="{{asset("packages/select2/dist/js/select2.full.min.js")}}"></script>
 <script>
     function bpFieldInitSelect2MultipleElement(element) {
         if (!element.hasClass("select2-hidden-accessible")) {
             let $obj = element.select2({
                 theme: "bootstrap",
                 tags: true,
                 sorter: data => data.sort((a, b) => a.text.localeCompare(b.text)),
                 createTag: function(params) {
                     return {
                         id: params.term,
                         text: params.term,
                         newOption: true
                     };
                 },
                 templateResult: function(data) {
                     let $result = $("<span></span>");
 
                     $result.text(data.text);
 
                     if (data.newOption) {
                         $result.append(" <em>(new)</em>");
                     }
 
                     return $result;
                 }
             });
 
             let options = [];
                                     options.push(
                 1            );
                         options.push(
                 18            );
                         options.push(
                 303            );
                         options.push(
                 367            );
                         options.push(
                 529            );
                         options.push(
                 627            );
                         options.push(
                 1529            );
                         options.push(
                 1550            );
                         options.push(
                 1617            );
                         options.push(
                 1834            );
                         options.push(
                 1939            );
                         options.push(
                 1981            );
                         options.push(
                 2015            );
                         options.push(
                 2057            );
                         options.push(
                 2089            );
                         options.push(
                 2138            );
                         options.push(
                 2224            );
                         options.push(
                 2282            );
                         options.push(
                 2407            );
                         options.push(
                 2455            );
                         options.push(
                 2506            );
                         options.push(
                 2539            );
                         options.push(
                 2569            );
                         options.push(
                 2632            );
                         options.push(
                 2690            );
                         options.push(
                 2824            );
                         options.push(
                 2838            );
                         options.push(
                 3030            );
                         options.push(
                 3089            );
                         options.push(
                 3147            );
                         options.push(
                 3205            );
                         options.push(
                 3331            );
                         options.push(
                 3348            );
                         options.push(
                 3502            );
                         options.push(
                 3569            );
                         options.push(
                 3652            );
                         options.push(
                 3778            );
                         options.push(
                 3941            );
                         options.push(
                 3971            );
                         options.push(
                 3987            );
                         options.push(
                 4276            );
                         options.push(
                 4347            );
                         options.push(
                 4470            );
                         options.push(
                 4522            );
                         options.push(
                 4562            );
                         options.push(
                 4615            );
                         options.push(
                 4646            );
                         options.push(
                 4668            );
                         options.push(
                 4702            );
                         options.push(
                 4784            );
                         options.push(
                 4826            );
                         options.push(
                 4898            );
                         options.push(
                 4927            );
                         options.push(
                 5015            );
                         options.push(
                 5258            );
                         options.push(
                 5316            );
                         options.push(
                 5414            );
                         options.push(
                 5484            );
                         options.push(
                 5526            );
                         options.push(
                 5970            );
                         options.push(
                 6010            );
                         options.push(
                 6055            );
                         options.push(
                 6254            );
                         options.push(
                 6534            );
                         options.push(
                 6570            );
                         options.push(
                 6629            );
                         options.push(
                 6730            );
                         options.push(
                 6766            );
                         options.push(
                 6805            );
                         options.push(
                 6809            );
                         options.push(
                 6852            );
                         options.push(
                 6928            );
                         options.push(
                 6934            );
                         options.push(
                 6946            );
                         options.push(
                 6971            );
                         options.push(
                 7004            );
                         options.push(
                 7013            );
                         options.push(
                 7072            );
                         options.push(
                 7096            );
                         options.push(
                 7103            );
                         options.push(
                 7199            );
                         options.push(
                 7246            );
                         options.push(
                 7439            );
                         options.push(
                 7440            );
                         options.push(
                 7572            );
                         options.push(
                 7604            );
                         options.push(
                 7605            );
                         options.push(
                 9441            );
                         options.push(
                 9596            );
                         options.push(
                 9629            );
                         options.push(
                 9736            );
                         options.push(
                 10010            );
                         options.push(
                 10225            );
                         options.push(
                 10228            );
                         options.push(
                 10229            );
                         options.push(
                 10360            );
                         options.push(
                 10528            );
                         options.push(
                 10541            );
                         options.push(
                 10582            );
                         options.push(
                 10595            );
                         options.push(
                 10598            );
                         options.push(
                 10635            );
                         options.push(
                 10671            );
                         options.push(
                 10680            );
                         options.push(
                 10763            );
                         options.push(
                 10802            );
                         options.push(
                 10812            );
                         options.push(
                 10934            );
                         options.push(
                 10942            );
                         options.push(
                 10949            );
                         options.push(
                 10952            );
                         options.push(
                 10953            );
                         options.push(
                 10954            );
                         options.push(
                 10958            );
                         options.push(
                 10959            );
                         options.push(
                 10997            );
                         options.push(
                 10998            );
                         options.push(
                 10999            );
                         options.push(
                 11003            );
                         options.push(
                 11426            );
                         options.push(
                 11427            );
                         options.push(
                 11448            );
                         options.push(
                 11454            );
                         options.push(
                 11503            );
                         options.push(
                 11505            );
                         options.push(
                 11506            );
                         options.push(
                 11508            );
                         options.push(
                 11512            );
                         options.push(
                 11514            );
                         options.push(
                 11515            );
                         options.push(
                 11516            );
                         options.push(
                 11523            );
                         options.push(
                 11524            );
                         options.push(
                 11569            );
                         options.push(
                 11571            );
                         options.push(
                 11578            );
                         options.push(
                 11725            );
                         options.push(
                 11775            );
                         options.push(
                 11789            );
                         options.push(
                 11843            );
                         options.push(
                 1            );
                         options.push(
                 18            );
                         options.push(
                 303            );
                         options.push(
                 367            );
                         options.push(
                 529            );
                         options.push(
                 627            );
                         options.push(
                 1529            );
                         options.push(
                 1550            );
                         options.push(
                 1617            );
                         options.push(
                 1834            );
                         options.push(
                 1939            );
                         options.push(
                 1981            );
                         options.push(
                 2015            );
                         options.push(
                 2057            );
                         options.push(
                 2089            );
                         options.push(
                 2138            );
                         options.push(
                 2224            );
                         options.push(
                 2282            );
                         options.push(
                 2407            );
                         options.push(
                 2455            );
                         options.push(
                 2506            );
                         options.push(
                 2539            );
                         options.push(
                 2569            );
                         options.push(
                 2632            );
                         options.push(
                 2690            );
                         options.push(
                 2824            );
                         options.push(
                 2838            );
                         options.push(
                 3030            );
                         options.push(
                 3089            );
                         options.push(
                 3147            );
                         options.push(
                 3205            );
                         options.push(
                 3331            );
                         options.push(
                 3348            );
                         options.push(
                 3502            );
                         options.push(
                 3569            );
                         options.push(
                 3652            );
                         options.push(
                 3778            );
                         options.push(
                 3941            );
                         options.push(
                 3971            );
                         options.push(
                 3987            );
                         options.push(
                 4276            );
                         options.push(
                 4347            );
                         options.push(
                 4470            );
                         options.push(
                 4522            );
                         options.push(
                 4562            );
                         options.push(
                 4615            );
                         options.push(
                 4646            );
                         options.push(
                 4668            );
                         options.push(
                 4702            );
                         options.push(
                 4784            );
                         options.push(
                 4826            );
                         options.push(
                 4898            );
                         options.push(
                 4927            );
                         options.push(
                 5015            );
                         options.push(
                 5258            );
                         options.push(
                 5316            );
                         options.push(
                 5414            );
                         options.push(
                 5484            );
                         options.push(
                 5526            );
                         options.push(
                 5970            );
                         options.push(
                 6010            );
                         options.push(
                 6055            );
                         options.push(
                 6254            );
                         options.push(
                 6534            );
                         options.push(
                 6570            );
                         options.push(
                 6629            );
                         options.push(
                 6730            );
                         options.push(
                 6766            );
                         options.push(
                 6805            );
                         options.push(
                 6809            );
                         options.push(
                 6852            );
                         options.push(
                 6928            );
                         options.push(
                 6934            );
                         options.push(
                 6946            );
                         options.push(
                 6971            );
                         options.push(
                 7004            );
                         options.push(
                 7013            );
                         options.push(
                 7072            );
                         options.push(
                 7096            );
                         options.push(
                 7103            );
                         options.push(
                 7199            );
                         options.push(
                 7246            );
                         options.push(
                 7439            );
                         options.push(
                 7440            );
                         options.push(
                 7572            );
                         options.push(
                 7604            );
                         options.push(
                 7605            );
                         options.push(
                 9441            );
                         options.push(
                 9596            );
                         options.push(
                 9629            );
                         options.push(
                 9736            );
                         options.push(
                 10010            );
                         options.push(
                 10225            );
                         options.push(
                 10228            );
                         options.push(
                 10229            );
                         options.push(
                 10360            );
                         options.push(
                 10528            );
                         options.push(
                 10541            );
                         options.push(
                 10582            );
                         options.push(
                 10595            );
                         options.push(
                 10598            );
                         options.push(
                 10635            );
                         options.push(
                 10671            );
                         options.push(
                 10680            );
                         options.push(
                 10763            );
                         options.push(
                 10802            );
                         options.push(
                 10812            );
                         options.push(
                 10934            );
                         options.push(
                 10942            );
                         options.push(
                 10949            );
                         options.push(
                 10952            );
                         options.push(
                 10953            );
                         options.push(
                 10954            );
                         options.push(
                 10958            );
                         options.push(
                 10959            );
                         options.push(
                 10997            );
                         options.push(
                 10998            );
                         options.push(
                 10999            );
                         options.push(
                 11003            );
                         options.push(
                 11426            );
                         options.push(
                 11427            );
                         options.push(
                 11448            );
                         options.push(
                 11454            );
                         options.push(
                 11503            );
                         options.push(
                 11505            );
                         options.push(
                 11506            );
                         options.push(
                 11508            );
                         options.push(
                 11512            );
                         options.push(
                 11514            );
                         options.push(
                 11515            );
                         options.push(
                 11516            );
                         options.push(
                 11523            );
                         options.push(
                 11524            );
                         options.push(
                 11569            );
                         options.push(
                 11571            );
                         options.push(
                 11578            );
                         options.push(
                 11725            );
                         options.push(
                 11775            );
                         options.push(
                 11789            );
                         options.push(
                 11843            );
                         
                     }
     }
 </script>
 <script src="{{asset("packages/nouislider/distribute/nouislider.min.js")}}"></script>
 
 <!-- include select2 js-->
 <script src="{{asset("packages/select2/dist/js/select2.full.min.js")}}"></script>
 <script>
     let herbValues = {};
 
     function bpFieldInitSelect2MultipleElementHerb() {
         let element = $('#herb-selection');
         if (!element.hasClass("select2-hidden-accessible")) {
             let selectedHerbs = [];
 
                                         herbValues[236] = '';
                                                     herbValues[236] = '';
                                                     herbValues[182] = '';
                                                     herbValues[182] = '';
                                                     herbValues[116] = '';
                                                     herbValues[116] = '';
                                                     herbValues[205] = '';
                                                     herbValues[205] = '';
                                                     herbValues[166] = '';
                                                     herbValues[166] = '';
                                                     herbValues[143] = '';
                                                     herbValues[143] = '';
                                                     herbValues[291] = '';
                                                     herbValues[291] = '';
                                                     herbValues[269] = '';
                                                     herbValues[269] = '';
                                                     herbValues[66] = '';
                                                     herbValues[66] = '';
                                                     herbValues[65] = '';
                                                     herbValues[65] = '';
                                                     herbValues[96] = '';
                                                     herbValues[96] = '';
                                                     herbValues[339] = '';
                                                     herbValues[339] = '';
                                                     herbValues[208] = '';
                                                     herbValues[208] = '';
                                                     herbValues[54] = '';
                                                     herbValues[54] = '';
                                                     herbValues[155] = '';
                                                     herbValues[155] = '';
                                                     herbValues[341] = '';
                                                     herbValues[341] = '';
                                                     herbValues[336] = '';
                                                     herbValues[336] = '';
                                                     herbValues[306] = '';
                                                     herbValues[306] = '';
                                                     herbValues[240] = '';
                                                     herbValues[240] = '';
                                                     herbValues[349] = '';
                                                     herbValues[349] = '';
                                                     herbValues[270] = '';
                                                     herbValues[270] = '';
                                                     herbValues[132] = '';
                                                     herbValues[132] = '';
                                                     herbValues[280] = '';
                                                     herbValues[280] = '';
                                                     herbValues[231] = '';
                                                     herbValues[231] = '';
                                                     herbValues[128] = '';
                                                     herbValues[128] = '';
                                                     herbValues[290] = '';
                                                     herbValues[290] = '';
                                                     herbValues[9] = '';
                                                     herbValues[9] = '';
                                                     herbValues[15] = '';
                                                     herbValues[15] = '';
                                                     herbValues[45] = '';
                                                     herbValues[45] = '';
                                                     herbValues[41] = '';
                                                     herbValues[41] = '';
                                                     herbValues[177] = '';
                                                     herbValues[177] = '';
                                                     herbValues[49] = '';
                                                     herbValues[49] = '';
                                                     herbValues[47] = '';
                                                     herbValues[47] = '';
                                                     herbValues[64] = '';
                                                     herbValues[64] = '';
                                                     herbValues[42] = '';
                                                     herbValues[42] = '';
                                                     herbValues[43] = '';
                                                     herbValues[43] = '';
                                                     herbValues[251] = '';
                                                     herbValues[251] = '';
                                                     herbValues[176] = '';
                                                     herbValues[176] = '';
                                                     herbValues[22] = '';
                                                     herbValues[22] = '';
                                                     herbValues[150] = '';
                                                     herbValues[150] = '';
                                                     herbValues[58] = '';
                                                     herbValues[58] = '';
                                                     herbValues[24] = '';
                                                     herbValues[24] = '';
                                                     herbValues[264] = '';
                                                     herbValues[264] = '';
                                                     herbValues[316] = '';
                                                     herbValues[316] = '';
                                                     herbValues[29] = '';
                                                     herbValues[29] = '';
                                                     herbValues[375] = '';
                                                     herbValues[375] = '';
                                                     herbValues[241] = '';
                                                     herbValues[241] = '';
                                                     herbValues[115] = '';
                                                     herbValues[115] = '';
                                                     herbValues[256] = '';
                                                     herbValues[256] = '';
                                                     herbValues[3] = '';
                                                     herbValues[3] = '';
                                                     herbValues[27] = '';
                                                     herbValues[27] = '';
                                                     herbValues[234] = '';
                                                     herbValues[234] = '';
                                                     herbValues[137] = '';
                                                     herbValues[137] = '';
                                                     herbValues[100] = '';
                                                     herbValues[100] = '';
                                                     herbValues[84] = '';
                                                     herbValues[84] = '';
                                                     herbValues[320] = '';
                                                     herbValues[320] = '';
                                                     herbValues[156] = '';
                                                     herbValues[156] = '';
                                                     herbValues[141] = '';
                                                     herbValues[141] = '';
                                                     herbValues[120] = '';
                                                     herbValues[120] = '';
                                                     herbValues[250] = '';
                                                     herbValues[250] = '';
                                                     herbValues[80] = '';
                                                     herbValues[80] = '';
                                                     herbValues[301] = '';
                                                     herbValues[301] = '';
                                                     herbValues[173] = '';
                                                     herbValues[173] = '';
                                                     herbValues[377] = '';
                                                     herbValues[377] = '';
                                                     herbValues[215] = '';
                                                     herbValues[215] = '';
                                                     herbValues[340] = '';
                                                     herbValues[340] = '';
                                                     herbValues[220] = '';
                                                     herbValues[220] = '';
                                                     herbValues[309] = '';
                                                     herbValues[309] = '';
                                                     herbValues[148] = '';
                                                     herbValues[148] = '';
                                                     herbValues[263] = '';
                                                     herbValues[263] = '';
                                                     herbValues[322] = '';
                                                     herbValues[322] = '';
                                                     herbValues[319] = '';
                                                     herbValues[319] = '';
                                                     herbValues[170] = '';
                                                     herbValues[170] = '';
                                                     herbValues[159] = '';
                                                     herbValues[159] = '';
                                                     herbValues[321] = '';
                                                     herbValues[321] = '';
                                                     herbValues[351] = '';
                                                     herbValues[351] = '';
                                                     herbValues[60] = '';
                                                     herbValues[60] = '';
                                                     herbValues[296] = '';
                                                     herbValues[296] = '';
                                                     herbValues[348] = '';
                                                     herbValues[348] = '';
                                                     herbValues[300] = '';
                                                     herbValues[300] = '';
                                                     herbValues[325] = '';
                                                     herbValues[325] = '';
                                                     herbValues[281] = '';
                                                     herbValues[281] = '';
                                                     herbValues[199] = '';
                                                     herbValues[199] = '';
                                                     herbValues[228] = '';
                                                     herbValues[228] = '';
                                                     herbValues[109] = '';
                                                     herbValues[109] = '';
                                                     herbValues[303] = '';
                                                     herbValues[303] = '';
                                                     herbValues[56] = '';
                                                     herbValues[56] = '';
                                                     herbValues[288] = '';
                                                     herbValues[288] = '';
                                                     herbValues[93] = '';
                                                     herbValues[93] = '';
                                                     herbValues[180] = '';
                                                     herbValues[180] = '';
                                                     herbValues[61] = '';
                                                     herbValues[61] = '';
                                                     herbValues[4] = '';
                                                     herbValues[4] = '';
                                                     herbValues[284] = '';
                                                     herbValues[284] = '';
                                                     herbValues[225] = '';
                                                     herbValues[225] = '';
                                                     herbValues[259] = '';
                                                     herbValues[259] = '';
                                                     herbValues[202] = '';
                                                     herbValues[202] = '';
                                                     herbValues[352] = '';
                                                     herbValues[352] = '';
                                                     herbValues[333] = '';
                                                     herbValues[333] = '';
                                                     herbValues[106] = '';
                                                     herbValues[106] = '';
                                                     herbValues[171] = '';
                                                     herbValues[171] = '';
                                                     herbValues[138] = '';
                                                     herbValues[138] = '';
                                                     herbValues[114] = '';
                                                     herbValues[114] = '';
                                                     herbValues[238] = '';
                                                     herbValues[238] = '';
                                                     herbValues[200] = '';
                                                     herbValues[200] = '';
                                                     herbValues[110] = '';
                                                     herbValues[110] = '';
                                                     herbValues[318] = '';
                                                     herbValues[318] = '';
                                                     herbValues[2] = '';
                                                     herbValues[2] = '';
                                                     herbValues[335] = '';
                                                     herbValues[335] = '';
                                                     herbValues[136] = '';
                                                     herbValues[136] = '';
                                                     herbValues[363] = '';
                                                     herbValues[363] = '';
                                                     herbValues[44] = '';
                                                     herbValues[44] = '';
                                                     herbValues[119] = '';
                                                     herbValues[119] = '';
                                                     herbValues[59] = '';
                                                     herbValues[59] = '';
                                                     herbValues[213] = '';
                                                     herbValues[213] = '';
                                                     herbValues[151] = '';
                                                     herbValues[151] = '';
                                                     herbValues[350] = '';
                                                     herbValues[350] = '';
                                                     herbValues[245] = '';
                                                     herbValues[245] = '';
                                                     herbValues[169] = '';
                                                     herbValues[169] = '';
                                                     herbValues[71] = '';
                                                     herbValues[71] = '';
                                                     herbValues[72] = '';
                                                     herbValues[72] = '';
                                                     herbValues[57] = '';
                                                     herbValues[57] = '';
                                                     herbValues[38] = '';
                                                     herbValues[38] = '';
                                                     herbValues[121] = '';
                                                     herbValues[121] = '';
                                                     herbValues[113] = '';
                                                     herbValues[113] = '';
                                                     herbValues[95] = '';
                                                     herbValues[95] = '';
                                                     herbValues[247] = '';
                                                     herbValues[247] = '';
                                                     herbValues[118] = '';
                                                     herbValues[118] = '';
                                                     herbValues[233] = '';
                                                     herbValues[233] = '';
                                                     herbValues[282] = '';
                                                     herbValues[282] = '';
                                                     herbValues[34] = '';
                                                     herbValues[34] = '';
                                                     herbValues[317] = '';
                                                     herbValues[317] = '';
                                                     herbValues[167] = '';
                                                     herbValues[167] = '';
                                                     herbValues[23] = '';
                                                     herbValues[23] = '';
                                                     herbValues[278] = '';
                                                     herbValues[278] = '';
                                                     herbValues[52] = '';
                                                     herbValues[52] = '';
                                                     herbValues[261] = '';
                                                     herbValues[261] = '';
                                                     herbValues[345] = '';
                                                     herbValues[345] = '';
                                                     herbValues[248] = '';
                                                     herbValues[248] = '';
                                                     herbValues[331] = '';
                                                     herbValues[331] = '';
                                                     herbValues[165] = '';
                                                     herbValues[165] = '';
                                                     herbValues[207] = '';
                                                     herbValues[207] = '';
                                                     herbValues[195] = '';
                                                     herbValues[195] = '';
                                                     herbValues[357] = '';
                                                     herbValues[357] = '';
                                                     herbValues[353] = '';
                                                     herbValues[353] = '';
                                                     herbValues[298] = '';
                                                     herbValues[298] = '';
                                                     herbValues[5] = '';
                                                     herbValues[5] = '';
                                                     herbValues[191] = '';
                                                     herbValues[191] = '';
                                                     herbValues[210] = '';
                                                     herbValues[210] = '';
                                                     herbValues[219] = '';
                                                     herbValues[219] = '';
                                                     herbValues[308] = '';
                                                     herbValues[308] = '';
                                                     herbValues[244] = '';
                                                     herbValues[244] = '';
                                                     herbValues[108] = '';
                                                     herbValues[108] = '';
                                                     herbValues[289] = '';
                                                     herbValues[289] = '';
                                                     herbValues[74] = '';
                                                     herbValues[74] = '';
                                                     herbValues[337] = '';
                                                     herbValues[337] = '';
                                                     herbValues[302] = '';
                                                     herbValues[302] = '';
                                                     herbValues[258] = '';
                                                     herbValues[258] = '';
                                                     herbValues[283] = '';
                                                     herbValues[283] = '';
                                                     herbValues[123] = '';
                                                     herbValues[123] = '';
                                                     herbValues[79] = '';
                                                     herbValues[79] = '';
                                                     herbValues[158] = '';
                                                     herbValues[158] = '';
                                                     herbValues[196] = '';
                                                     herbValues[196] = '';
                                                     herbValues[105] = '';
                                                     herbValues[105] = '';
                                                     herbValues[83] = '';
                                                     herbValues[83] = '';
                                                     herbValues[1] = '';
                                                     herbValues[1] = '';
                                                     herbValues[21] = '';
                                                     herbValues[21] = '';
                                                     herbValues[32] = '';
                                                     herbValues[32] = '';
                                                     herbValues[272] = '';
                                                     herbValues[272] = '';
                                                     herbValues[147] = '';
                                                     herbValues[147] = '';
                                                     herbValues[299] = '';
                                                     herbValues[299] = '';
                                                     herbValues[190] = '';
                                                     herbValues[190] = '';
                                                     herbValues[343] = '';
                                                     herbValues[343] = '';
                                                     herbValues[371] = '';
                                                     herbValues[371] = '';
                                                     herbValues[356] = '';
                                                     herbValues[356] = '';
                                                     herbValues[140] = '';
                                                     herbValues[140] = '';
                                                     herbValues[212] = '';
                                                     herbValues[212] = '';
                                                     herbValues[368] = '';
                                                     herbValues[368] = '';
                                                     herbValues[277] = '';
                                                     herbValues[277] = '';
                                                     herbValues[76] = '';
                                                     herbValues[76] = '';
                                                     herbValues[172] = '';
                                                     herbValues[172] = '';
                                                     herbValues[146] = '';
                                                     herbValues[146] = '';
                                                     herbValues[230] = '';
                                                     herbValues[230] = '';
                                                     herbValues[127] = '';
                                                     herbValues[127] = '';
                                                     herbValues[369] = '';
                                                     herbValues[369] = '';
                                                     herbValues[252] = '';
                                                     herbValues[252] = '';
                                                     herbValues[307] = '';
                                                     herbValues[307] = '';
                                                     herbValues[98] = '';
                                                     herbValues[98] = '';
                                                     herbValues[329] = '';
                                                     herbValues[329] = '';
                                                     herbValues[328] = '';
                                                     herbValues[328] = '';
                                                     herbValues[99] = '';
                                                     herbValues[99] = '';
                                                     herbValues[97] = '';
                                                     herbValues[97] = '';
                                                     herbValues[75] = '';
                                                     herbValues[75] = '';
                                                     herbValues[102] = '';
                                                     herbValues[102] = '';
                                                     herbValues[327] = '';
                                                     herbValues[327] = '';
                                                     herbValues[73] = '';
                                                     herbValues[73] = '';
                                                     herbValues[107] = '';
                                                     herbValues[107] = '';
                                                     herbValues[90] = '';
                                                     herbValues[90] = '';
                                                     herbValues[70] = '';
                                                     herbValues[70] = '';
                                                     herbValues[87] = '';
                                                     herbValues[87] = '';
                                                     herbValues[81] = '';
                                                     herbValues[81] = '';
                                                     herbValues[68] = '';
                                                     herbValues[68] = '';
                                                     herbValues[267] = '';
                                                     herbValues[267] = '';
                                                     herbValues[271] = '';
                                                     herbValues[271] = '';
                                                     herbValues[18] = '';
                                                     herbValues[18] = '';
                                                     herbValues[131] = '';
                                                     herbValues[131] = '';
                                                     herbValues[332] = '';
                                                     herbValues[332] = '';
                                                     herbValues[153] = '';
                                                     herbValues[153] = '';
                                                     herbValues[33] = '';
                                                     herbValues[33] = '';
                                                     herbValues[310] = '';
                                                     herbValues[310] = '';
                                                     herbValues[78] = '';
                                                     herbValues[78] = '';
                                                     herbValues[77] = '';
                                                     herbValues[77] = '';
                                                     herbValues[287] = '';
                                                     herbValues[287] = '';
                                                     herbValues[31] = '';
                                                     herbValues[31] = '';
                                                     herbValues[365] = '';
                                                     herbValues[365] = '';
                                                     herbValues[338] = '';
                                                     herbValues[338] = '';
                                                     herbValues[11] = '';
                                                     herbValues[11] = '';
                                                     herbValues[197] = '';
                                                     herbValues[197] = '';
                                                     herbValues[266] = '';
                                                     herbValues[266] = '';
                                                     herbValues[273] = '';
                                                     herbValues[273] = '';
                                                     herbValues[314] = '';
                                                     herbValues[314] = '';
                                                     herbValues[226] = '';
                                                     herbValues[226] = '';
                                                     herbValues[142] = '';
                                                     herbValues[142] = '';
                                                     herbValues[94] = '';
                                                     herbValues[94] = '';
                                                     herbValues[8] = '';
                                                     herbValues[8] = '';
                                                     herbValues[126] = '';
                                                     herbValues[126] = '';
                                                     herbValues[216] = '';
                                                     herbValues[216] = '';
                                                     herbValues[19] = '';
                                                     herbValues[19] = '';
                                                     herbValues[227] = '';
                                                     herbValues[227] = '';
                                                     herbValues[237] = '';
                                                     herbValues[237] = '';
                                                     herbValues[55] = '';
                                                     herbValues[55] = '';
                                                     herbValues[14] = '';
                                                     herbValues[14] = '';
                                                     herbValues[130] = '';
                                                     herbValues[130] = '';
                                                     herbValues[221] = '';
                                                     herbValues[221] = '';
                                                     herbValues[62] = '';
                                                     herbValues[62] = '';
                                                     herbValues[161] = '';
                                                     herbValues[161] = '';
                                                     herbValues[242] = '';
                                                     herbValues[242] = '';
                                                     herbValues[366] = '';
                                                     herbValues[366] = '';
                                                     herbValues[305] = '';
                                                     herbValues[305] = '';
                                                     herbValues[152] = '';
                                                     herbValues[152] = '';
                                                     herbValues[359] = '';
                                                     herbValues[359] = '';
                                                     herbValues[232] = '';
                                                     herbValues[232] = '';
                                                     herbValues[35] = '';
                                                     herbValues[35] = '';
                                                     herbValues[48] = '';
                                                     herbValues[48] = '';
                                                     herbValues[312] = '';
                                                     herbValues[312] = '';
                                                     herbValues[311] = '';
                                                     herbValues[311] = '';
                                                     herbValues[37] = '';
                                                     herbValues[37] = '';
                                                     herbValues[122] = '';
                                                     herbValues[122] = '';
                                                     herbValues[360] = '';
                                                     herbValues[360] = '';
                                                     herbValues[217] = '';
                                                     herbValues[217] = '';
                                                     herbValues[46] = '';
                                                     herbValues[46] = '';
                                                     herbValues[117] = '';
                                                     herbValues[117] = '';
                                                     herbValues[193] = '';
                                                     herbValues[193] = '';
                                                     herbValues[243] = '';
                                                     herbValues[243] = '';
                                                     herbValues[133] = '';
                                                     herbValues[133] = '';
                                                     herbValues[187] = '';
                                                     herbValues[187] = '';
                                                     herbValues[214] = '';
                                                     herbValues[214] = '';
                                                     herbValues[178] = '';
                                                     herbValues[178] = '';
                                                     herbValues[198] = '';
                                                     herbValues[198] = '';
                                                     herbValues[154] = '';
                                                     herbValues[154] = '';
                                                     herbValues[222] = '';
                                                     herbValues[222] = '';
                                                     herbValues[134] = '';
                                                     herbValues[134] = '';
                                                     herbValues[194] = '';
                                                     herbValues[194] = '';
                                                     herbValues[262] = '';
                                                     herbValues[262] = '';
                                                     herbValues[211] = '';
                                                     herbValues[211] = '';
                                                     herbValues[179] = '';
                                                     herbValues[179] = '';
                                                     herbValues[26] = '';
                                                     herbValues[26] = '';
                                                     herbValues[223] = '';
                                                     herbValues[223] = '';
                                                     herbValues[53] = '';
                                                     herbValues[53] = '';
                                                     herbValues[367] = '';
                                                     herbValues[367] = '';
                                                     herbValues[370] = '';
                                                     herbValues[370] = '';
                                                     herbValues[204] = '';
                                                     herbValues[204] = '';
                                                     herbValues[374] = '';
                                                     herbValues[374] = '';
                                                     herbValues[294] = '';
                                                     herbValues[294] = '';
                                                     herbValues[323] = '';
                                                     herbValues[323] = '';
                                                     herbValues[235] = '';
                                                     herbValues[235] = '';
                                                     herbValues[30] = '';
                                                     herbValues[30] = '';
                                                     herbValues[135] = '';
                                                     herbValues[135] = '';
                                                     herbValues[63] = '';
                                                     herbValues[63] = '';
                                                     herbValues[292] = '';
                                                     herbValues[292] = '';
                                                     herbValues[293] = '';
                                                     herbValues[293] = '';
                                                     herbValues[347] = '';
                                                     herbValues[347] = '';
                                                     herbValues[297] = '';
                                                     herbValues[297] = '';
                                                     herbValues[358] = '';
                                                     herbValues[358] = '';
                                                     herbValues[257] = '';
                                                     herbValues[257] = '';
                                                     herbValues[111] = '';
                                                     herbValues[111] = '';
                                                     herbValues[85] = '';
                                                     herbValues[85] = '';
                                                     herbValues[362] = '';
                                                     herbValues[362] = '';
                                                     herbValues[69] = '';
                                                     herbValues[69] = '';
                                                     herbValues[355] = '';
                                                     herbValues[355] = '';
                                                     herbValues[103] = '';
                                                     herbValues[103] = '';
                                                     herbValues[124] = '';
                                                     herbValues[124] = '';
                                                     herbValues[279] = '';
                                                     herbValues[279] = '';
                                                     herbValues[125] = '';
                                                     herbValues[125] = '';
                                                     herbValues[88] = '';
                                                     herbValues[88] = '';
                                                     herbValues[6] = '';
                                                     herbValues[6] = '';
                                                     herbValues[326] = '';
                                                     herbValues[326] = '';
                                                     herbValues[40] = '';
                                                     herbValues[40] = '';
                                                     herbValues[25] = '';
                                                     herbValues[25] = '';
                                                     herbValues[185] = '';
                                                     herbValues[185] = '';
                                                     herbValues[249] = '';
                                                     herbValues[249] = '';
                                                     herbValues[315] = '';
                                                     herbValues[315] = '';
                                                     herbValues[246] = '';
                                                     herbValues[246] = '';
                                                     herbValues[112] = '';
                                                     herbValues[112] = '';
                                                     herbValues[373] = '';
                                                     herbValues[373] = '';
                                                     herbValues[364] = '';
                                                     herbValues[364] = '';
                                                     herbValues[7] = '';
                                                     herbValues[7] = '';
                                                     herbValues[334] = '';
                                                     herbValues[334] = '';
                                                     herbValues[254] = '';
                                                     herbValues[254] = '';
                                                     herbValues[51] = '';
                                                     herbValues[51] = '';
                                                     herbValues[86] = '';
                                                     herbValues[86] = '';
                                                     herbValues[91] = '';
                                                     herbValues[91] = '';
                                                     herbValues[104] = '';
                                                     herbValues[104] = '';
                                                     herbValues[17] = '';
                                                     herbValues[17] = '';
                                                     herbValues[10] = '';
                                                     herbValues[10] = '';
                                                     herbValues[186] = '';
                                                     herbValues[186] = '';
                                                     herbValues[265] = '';
                                                     herbValues[265] = '';
                                                     herbValues[157] = '';
                                                     herbValues[157] = '';
                                                     herbValues[255] = '';
                                                     herbValues[255] = '';
                                                     herbValues[218] = '';
                                                     herbValues[218] = '';
                                                     herbValues[224] = '';
                                                     herbValues[224] = '';
                                                     herbValues[354] = '';
                                                     herbValues[354] = '';
                                                     herbValues[372] = '';
                                                     herbValues[372] = '';
                                                     herbValues[181] = '';
                                                     herbValues[181] = '';
                                                     herbValues[268] = '';
                                                     herbValues[268] = '';
                                                     herbValues[50] = '';
                                                     herbValues[50] = '';
                                                     herbValues[160] = '';
                                                     herbValues[160] = '';
                                                     herbValues[129] = '';
                                                     herbValues[129] = '';
                                                     herbValues[376] = '';
                                                     herbValues[376] = '';
                                                     herbValues[313] = '';
                                                     herbValues[313] = '';
                                                     herbValues[28] = '';
                                                     herbValues[28] = '';
                                                     herbValues[285] = '';
                                                     herbValues[285] = '';
                                                     herbValues[286] = '';
                                                     herbValues[286] = '';
                                                     herbValues[12] = '';
                                                     herbValues[12] = '';
                                                     herbValues[168] = '';
                                                     herbValues[168] = '';
                                                     herbValues[92] = '';
                                                     herbValues[92] = '';
                                                     herbValues[189] = '';
                                                     herbValues[189] = '';
                                                     herbValues[275] = '';
                                                     herbValues[275] = '';
                                                     herbValues[274] = '';
                                                     herbValues[274] = '';
                                                     herbValues[253] = '';
                                                     herbValues[253] = '';
                                                     herbValues[13] = '';
                                                     herbValues[13] = '';
                                                     herbValues[206] = '';
                                                     herbValues[206] = '';
                                                     herbValues[20] = '';
                                                     herbValues[20] = '';
                                                     herbValues[39] = '';
                                                     herbValues[39] = '';
                                                     herbValues[276] = '';
                                                     herbValues[276] = '';
                                                     herbValues[239] = '';
                                                     herbValues[239] = '';
                                                     herbValues[260] = '';
                                                     herbValues[260] = '';
                                                     herbValues[203] = '';
                                                     herbValues[203] = '';
                                                     herbValues[192] = '';
                                                     herbValues[192] = '';
                                                     herbValues[304] = '';
                                                     herbValues[304] = '';
                                                     herbValues[175] = '';
                                                     herbValues[175] = '';
                                                     herbValues[229] = '';
                                                     herbValues[229] = '';
                                                     herbValues[145] = '';
                                                     herbValues[145] = '';
                                                     herbValues[183] = '';
                                                     herbValues[183] = '';
                                                     herbValues[139] = '';
                                                     herbValues[139] = '';
                                                     herbValues[342] = '';
                                                     herbValues[342] = '';
                                                     herbValues[346] = '';
                                                     herbValues[346] = '';
                                                     herbValues[209] = '';
                                                     herbValues[209] = '';
                                                     herbValues[16] = '';
                                                     herbValues[16] = '';
                                                     herbValues[344] = '';
                                                     herbValues[344] = '';
                                                     herbValues[201] = '';
                                                     herbValues[201] = '';
                                                     herbValues[82] = '';
                                                     herbValues[82] = '';
                                                     herbValues[36] = '';
                                                     herbValues[36] = '';
                                                     herbValues[295] = '';
                                                     herbValues[295] = '';
                                                     herbValues[324] = '';
                                                     herbValues[324] = '';
                                                     herbValues[174] = '';
                                                     herbValues[174] = '';
                                                     herbValues[67] = '';
                                                     herbValues[67] = '';
                                                     herbValues[361] = '';
                                                     herbValues[361] = '';
                                                     herbValues[188] = '';
                                                     herbValues[188] = '';
                                                     herbValues[163] = '';
                                                     herbValues[163] = '';
                                                     herbValues[164] = '';
                                                     herbValues[164] = '';
                                                     herbValues[330] = '';
                                                     herbValues[330] = '';
                                                     herbValues[184] = '';
                                                     herbValues[184] = '';
                                                     herbValues[162] = '';
                                                     herbValues[162] = '';
                                                     herbValues[101] = '';
                                                     herbValues[101] = '';
                                                     herbValues[149] = '';
                                                     herbValues[149] = '';
                                                     herbValues[89] = '';
                                                     herbValues[89] = '';
                         
             function addHerbs(herbs) {
                 let herbContainer$ = $('#herb-container');
                 herbContainer$.html('');
 
                 let herbs$ = herbs.forEach(function(herb, i) {
                     let herb$ = $(`
                         <div class="herb">
                             <b>${herb.text}</b> (Dosage in g)
                         </div>
                     `);
                     herbContainer$.append(herb$);
 
                     let dosageSliderElem = $('<div class="dosage-slider"></div>');
                     let dosageInput = $('<input type="hidden" class="input-slider" name="herb_dosage[]">');
 
                     dosageSliderElem.append(dosageInput);
                     herb$.append(dosageSliderElem);
 
                     let [start, end] = (herbValues[herb.id] || '5-30').split('-');
 
 
                     let dosageSlider = noUiSlider.create(dosageSliderElem.get(0), {
                         range: {
                             min: 0,
                             max: 100
                         },
                         tooltips: [true, true],
                         step: 0.1,
                         start: [parseFloat(start), parseFloat(end)],
                         connect: true
                     });
 
                     function setInputValue(values) {
                         dosageInput.val(`${values[0]}-${values[1]}`);
                         herbValues[herb.id] = `${values[0]}-${values[1]}`;
                     }
 
                     dosageSlider.on('update', setInputValue);
 
 
                 });
             }
             let $obj = element.select2({
                 theme: "bootstrap"
             });
 
             element.on('change', function(e) {
                 let herbs = $(this).select2('data');
                 addHerbs(herbs);
             });
 
             addHerbs(selectedHerbs);
 
             let options = [];
                                     options.push(
                 236            );
                         options.push(
                 236            );
                         options.push(
                 182            );
                         options.push(
                 182            );
                         options.push(
                 116            );
                         options.push(
                 116            );
                         options.push(
                 205            );
                         options.push(
                 205            );
                         options.push(
                 166            );
                         options.push(
                 166            );
                         options.push(
                 143            );
                         options.push(
                 143            );
                         options.push(
                 291            );
                         options.push(
                 291            );
                         options.push(
                 269            );
                         options.push(
                 269            );
                         options.push(
                 66            );
                         options.push(
                 66            );
                         options.push(
                 65            );
                         options.push(
                 65            );
                         options.push(
                 96            );
                         options.push(
                 96            );
                         options.push(
                 339            );
                         options.push(
                 339            );
                         options.push(
                 208            );
                         options.push(
                 208            );
                         options.push(
                 54            );
                         options.push(
                 54            );
                         options.push(
                 155            );
                         options.push(
                 155            );
                         options.push(
                 341            );
                         options.push(
                 341            );
                         options.push(
                 336            );
                         options.push(
                 336            );
                         options.push(
                 306            );
                         options.push(
                 306            );
                         options.push(
                 240            );
                         options.push(
                 240            );
                         options.push(
                 349            );
                         options.push(
                 349            );
                         options.push(
                 270            );
                         options.push(
                 270            );
                         options.push(
                 132            );
                         options.push(
                 132            );
                         options.push(
                 280            );
                         options.push(
                 280            );
                         options.push(
                 231            );
                         options.push(
                 231            );
                         options.push(
                 128            );
                         options.push(
                 128            );
                         options.push(
                 290            );
                         options.push(
                 290            );
                         options.push(
                 9            );
                         options.push(
                 9            );
                         options.push(
                 15            );
                         options.push(
                 15            );
                         options.push(
                 45            );
                         options.push(
                 45            );
                         options.push(
                 41            );
                         options.push(
                 41            );
                         options.push(
                 177            );
                         options.push(
                 177            );
                         options.push(
                 49            );
                         options.push(
                 49            );
                         options.push(
                 47            );
                         options.push(
                 47            );
                         options.push(
                 64            );
                         options.push(
                 64            );
                         options.push(
                 42            );
                         options.push(
                 42            );
                         options.push(
                 43            );
                         options.push(
                 43            );
                         options.push(
                 251            );
                         options.push(
                 251            );
                         options.push(
                 176            );
                         options.push(
                 176            );
                         options.push(
                 22            );
                         options.push(
                 22            );
                         options.push(
                 150            );
                         options.push(
                 150            );
                         options.push(
                 58            );
                         options.push(
                 58            );
                         options.push(
                 24            );
                         options.push(
                 24            );
                         options.push(
                 264            );
                         options.push(
                 264            );
                         options.push(
                 316            );
                         options.push(
                 316            );
                         options.push(
                 29            );
                         options.push(
                 29            );
                         options.push(
                 375            );
                         options.push(
                 375            );
                         options.push(
                 241            );
                         options.push(
                 241            );
                         options.push(
                 115            );
                         options.push(
                 115            );
                         options.push(
                 256            );
                         options.push(
                 256            );
                         options.push(
                 3            );
                         options.push(
                 3            );
                         options.push(
                 27            );
                         options.push(
                 27            );
                         options.push(
                 234            );
                         options.push(
                 234            );
                         options.push(
                 137            );
                         options.push(
                 137            );
                         options.push(
                 100            );
                         options.push(
                 100            );
                         options.push(
                 84            );
                         options.push(
                 84            );
                         options.push(
                 320            );
                         options.push(
                 320            );
                         options.push(
                 156            );
                         options.push(
                 156            );
                         options.push(
                 141            );
                         options.push(
                 141            );
                         options.push(
                 120            );
                         options.push(
                 120            );
                         options.push(
                 250            );
                         options.push(
                 250            );
                         options.push(
                 80            );
                         options.push(
                 80            );
                         options.push(
                 301            );
                         options.push(
                 301            );
                         options.push(
                 173            );
                         options.push(
                 173            );
                         options.push(
                 377            );
                         options.push(
                 377            );
                         options.push(
                 215            );
                         options.push(
                 215            );
                         options.push(
                 340            );
                         options.push(
                 340            );
                         options.push(
                 220            );
                         options.push(
                 220            );
                         options.push(
                 309            );
                         options.push(
                 309            );
                         options.push(
                 148            );
                         options.push(
                 148            );
                         options.push(
                 263            );
                         options.push(
                 263            );
                         options.push(
                 322            );
                         options.push(
                 322            );
                         options.push(
                 319            );
                         options.push(
                 319            );
                         options.push(
                 170            );
                         options.push(
                 170            );
                         options.push(
                 159            );
                         options.push(
                 159            );
                         options.push(
                 321            );
                         options.push(
                 321            );
                         options.push(
                 351            );
                         options.push(
                 351            );
                         options.push(
                 60            );
                         options.push(
                 60            );
                         options.push(
                 296            );
                         options.push(
                 296            );
                         options.push(
                 348            );
                         options.push(
                 348            );
                         options.push(
                 300            );
                         options.push(
                 300            );
                         options.push(
                 325            );
                         options.push(
                 325            );
                         options.push(
                 281            );
                         options.push(
                 281            );
                         options.push(
                 199            );
                         options.push(
                 199            );
                         options.push(
                 228            );
                         options.push(
                 228            );
                         options.push(
                 109            );
                         options.push(
                 109            );
                         options.push(
                 303            );
                         options.push(
                 303            );
                         options.push(
                 56            );
                         options.push(
                 56            );
                         options.push(
                 288            );
                         options.push(
                 288            );
                         options.push(
                 93            );
                         options.push(
                 93            );
                         options.push(
                 180            );
                         options.push(
                 180            );
                         options.push(
                 61            );
                         options.push(
                 61            );
                         options.push(
                 4            );
                         options.push(
                 4            );
                         options.push(
                 284            );
                         options.push(
                 284            );
                         options.push(
                 225            );
                         options.push(
                 225            );
                         options.push(
                 259            );
                         options.push(
                 259            );
                         options.push(
                 202            );
                         options.push(
                 202            );
                         options.push(
                 352            );
                         options.push(
                 352            );
                         options.push(
                 333            );
                         options.push(
                 333            );
                         options.push(
                 106            );
                         options.push(
                 106            );
                         options.push(
                 171            );
                         options.push(
                 171            );
                         options.push(
                 138            );
                         options.push(
                 138            );
                         options.push(
                 114            );
                         options.push(
                 114            );
                         options.push(
                 238            );
                         options.push(
                 238            );
                         options.push(
                 200            );
                         options.push(
                 200            );
                         options.push(
                 110            );
                         options.push(
                 110            );
                         options.push(
                 318            );
                         options.push(
                 318            );
                         options.push(
                 2            );
                         options.push(
                 2            );
                         options.push(
                 335            );
                         options.push(
                 335            );
                         options.push(
                 136            );
                         options.push(
                 136            );
                         options.push(
                 363            );
                         options.push(
                 363            );
                         options.push(
                 44            );
                         options.push(
                 44            );
                         options.push(
                 119            );
                         options.push(
                 119            );
                         options.push(
                 59            );
                         options.push(
                 59            );
                         options.push(
                 213            );
                         options.push(
                 213            );
                         options.push(
                 151            );
                         options.push(
                 151            );
                         options.push(
                 350            );
                         options.push(
                 350            );
                         options.push(
                 245            );
                         options.push(
                 245            );
                         options.push(
                 169            );
                         options.push(
                 169            );
                         options.push(
                 71            );
                         options.push(
                 71            );
                         options.push(
                 72            );
                         options.push(
                 72            );
                         options.push(
                 57            );
                         options.push(
                 57            );
                         options.push(
                 38            );
                         options.push(
                 38            );
                         options.push(
                 121            );
                         options.push(
                 121            );
                         options.push(
                 113            );
                         options.push(
                 113            );
                         options.push(
                 95            );
                         options.push(
                 95            );
                         options.push(
                 247            );
                         options.push(
                 247            );
                         options.push(
                 118            );
                         options.push(
                 118            );
                         options.push(
                 233            );
                         options.push(
                 233            );
                         options.push(
                 282            );
                         options.push(
                 282            );
                         options.push(
                 34            );
                         options.push(
                 34            );
                         options.push(
                 317            );
                         options.push(
                 317            );
                         options.push(
                 167            );
                         options.push(
                 167            );
                         options.push(
                 23            );
                         options.push(
                 23            );
                         options.push(
                 278            );
                         options.push(
                 278            );
                         options.push(
                 52            );
                         options.push(
                 52            );
                         options.push(
                 261            );
                         options.push(
                 261            );
                         options.push(
                 345            );
                         options.push(
                 345            );
                         options.push(
                 248            );
                         options.push(
                 248            );
                         options.push(
                 331            );
                         options.push(
                 331            );
                         options.push(
                 165            );
                         options.push(
                 165            );
                         options.push(
                 207            );
                         options.push(
                 207            );
                         options.push(
                 195            );
                         options.push(
                 195            );
                         options.push(
                 357            );
                         options.push(
                 357            );
                         options.push(
                 353            );
                         options.push(
                 353            );
                         options.push(
                 298            );
                         options.push(
                 298            );
                         options.push(
                 5            );
                         options.push(
                 5            );
                         options.push(
                 191            );
                         options.push(
                 191            );
                         options.push(
                 210            );
                         options.push(
                 210            );
                         options.push(
                 219            );
                         options.push(
                 219            );
                         options.push(
                 308            );
                         options.push(
                 308            );
                         options.push(
                 244            );
                         options.push(
                 244            );
                         options.push(
                 108            );
                         options.push(
                 108            );
                         options.push(
                 289            );
                         options.push(
                 289            );
                         options.push(
                 74            );
                         options.push(
                 74            );
                         options.push(
                 337            );
                         options.push(
                 337            );
                         options.push(
                 302            );
                         options.push(
                 302            );
                         options.push(
                 258            );
                         options.push(
                 258            );
                         options.push(
                 283            );
                         options.push(
                 283            );
                         options.push(
                 123            );
                         options.push(
                 123            );
                         options.push(
                 79            );
                         options.push(
                 79            );
                         options.push(
                 158            );
                         options.push(
                 158            );
                         options.push(
                 196            );
                         options.push(
                 196            );
                         options.push(
                 105            );
                         options.push(
                 105            );
                         options.push(
                 83            );
                         options.push(
                 83            );
                         options.push(
                 1            );
                         options.push(
                 1            );
                         options.push(
                 21            );
                         options.push(
                 21            );
                         options.push(
                 32            );
                         options.push(
                 32            );
                         options.push(
                 272            );
                         options.push(
                 272            );
                         options.push(
                 147            );
                         options.push(
                 147            );
                         options.push(
                 299            );
                         options.push(
                 299            );
                         options.push(
                 190            );
                         options.push(
                 190            );
                         options.push(
                 343            );
                         options.push(
                 343            );
                         options.push(
                 371            );
                         options.push(
                 371            );
                         options.push(
                 356            );
                         options.push(
                 356            );
                         options.push(
                 140            );
                         options.push(
                 140            );
                         options.push(
                 212            );
                         options.push(
                 212            );
                         options.push(
                 368            );
                         options.push(
                 368            );
                         options.push(
                 277            );
                         options.push(
                 277            );
                         options.push(
                 76            );
                         options.push(
                 76            );
                         options.push(
                 172            );
                         options.push(
                 172            );
                         options.push(
                 146            );
                         options.push(
                 146            );
                         options.push(
                 230            );
                         options.push(
                 230            );
                         options.push(
                 127            );
                         options.push(
                 127            );
                         options.push(
                 369            );
                         options.push(
                 369            );
                         options.push(
                 252            );
                         options.push(
                 252            );
                         options.push(
                 307            );
                         options.push(
                 307            );
                         options.push(
                 98            );
                         options.push(
                 98            );
                         options.push(
                 329            );
                         options.push(
                 329            );
                         options.push(
                 328            );
                         options.push(
                 328            );
                         options.push(
                 99            );
                         options.push(
                 99            );
                         options.push(
                 97            );
                         options.push(
                 97            );
                         options.push(
                 75            );
                         options.push(
                 75            );
                         options.push(
                 102            );
                         options.push(
                 102            );
                         options.push(
                 327            );
                         options.push(
                 327            );
                         options.push(
                 73            );
                         options.push(
                 73            );
                         options.push(
                 107            );
                         options.push(
                 107            );
                         options.push(
                 90            );
                         options.push(
                 90            );
                         options.push(
                 70            );
                         options.push(
                 70            );
                         options.push(
                 87            );
                         options.push(
                 87            );
                         options.push(
                 81            );
                         options.push(
                 81            );
                         options.push(
                 68            );
                         options.push(
                 68            );
                         options.push(
                 267            );
                         options.push(
                 267            );
                         options.push(
                 271            );
                         options.push(
                 271            );
                         options.push(
                 18            );
                         options.push(
                 18            );
                         options.push(
                 131            );
                         options.push(
                 131            );
                         options.push(
                 332            );
                         options.push(
                 332            );
                         options.push(
                 153            );
                         options.push(
                 153            );
                         options.push(
                 33            );
                         options.push(
                 33            );
                         options.push(
                 310            );
                         options.push(
                 310            );
                         options.push(
                 78            );
                         options.push(
                 78            );
                         options.push(
                 77            );
                         options.push(
                 77            );
                         options.push(
                 287            );
                         options.push(
                 287            );
                         options.push(
                 31            );
                         options.push(
                 31            );
                         options.push(
                 365            );
                         options.push(
                 365            );
                         options.push(
                 338            );
                         options.push(
                 338            );
                         options.push(
                 11            );
                         options.push(
                 11            );
                         options.push(
                 197            );
                         options.push(
                 197            );
                         options.push(
                 266            );
                         options.push(
                 266            );
                         options.push(
                 273            );
                         options.push(
                 273            );
                         options.push(
                 314            );
                         options.push(
                 314            );
                         options.push(
                 226            );
                         options.push(
                 226            );
                         options.push(
                 142            );
                         options.push(
                 142            );
                         options.push(
                 94            );
                         options.push(
                 94            );
                         options.push(
                 8            );
                         options.push(
                 8            );
                         options.push(
                 126            );
                         options.push(
                 126            );
                         options.push(
                 216            );
                         options.push(
                 216            );
                         options.push(
                 19            );
                         options.push(
                 19            );
                         options.push(
                 227            );
                         options.push(
                 227            );
                         options.push(
                 237            );
                         options.push(
                 237            );
                         options.push(
                 55            );
                         options.push(
                 55            );
                         options.push(
                 14            );
                         options.push(
                 14            );
                         options.push(
                 130            );
                         options.push(
                 130            );
                         options.push(
                 221            );
                         options.push(
                 221            );
                         options.push(
                 62            );
                         options.push(
                 62            );
                         options.push(
                 161            );
                         options.push(
                 161            );
                         options.push(
                 242            );
                         options.push(
                 242            );
                         options.push(
                 366            );
                         options.push(
                 366            );
                         options.push(
                 305            );
                         options.push(
                 305            );
                         options.push(
                 152            );
                         options.push(
                 152            );
                         options.push(
                 359            );
                         options.push(
                 359            );
                         options.push(
                 232            );
                         options.push(
                 232            );
                         options.push(
                 35            );
                         options.push(
                 35            );
                         options.push(
                 48            );
                         options.push(
                 48            );
                         options.push(
                 312            );
                         options.push(
                 312            );
                         options.push(
                 311            );
                         options.push(
                 311            );
                         options.push(
                 37            );
                         options.push(
                 37            );
                         options.push(
                 122            );
                         options.push(
                 122            );
                         options.push(
                 360            );
                         options.push(
                 360            );
                         options.push(
                 217            );
                         options.push(
                 217            );
                         options.push(
                 46            );
                         options.push(
                 46            );
                         options.push(
                 117            );
                         options.push(
                 117            );
                         options.push(
                 193            );
                         options.push(
                 193            );
                         options.push(
                 243            );
                         options.push(
                 243            );
                         options.push(
                 133            );
                         options.push(
                 133            );
                         options.push(
                 187            );
                         options.push(
                 187            );
                         options.push(
                 214            );
                         options.push(
                 214            );
                         options.push(
                 178            );
                         options.push(
                 178            );
                         options.push(
                 198            );
                         options.push(
                 198            );
                         options.push(
                 154            );
                         options.push(
                 154            );
                         options.push(
                 222            );
                         options.push(
                 222            );
                         options.push(
                 134            );
                         options.push(
                 134            );
                         options.push(
                 194            );
                         options.push(
                 194            );
                         options.push(
                 262            );
                         options.push(
                 262            );
                         options.push(
                 211            );
                         options.push(
                 211            );
                         options.push(
                 179            );
                         options.push(
                 179            );
                         options.push(
                 26            );
                         options.push(
                 26            );
                         options.push(
                 223            );
                         options.push(
                 223            );
                         options.push(
                 53            );
                         options.push(
                 53            );
                         options.push(
                 367            );
                         options.push(
                 367            );
                         options.push(
                 370            );
                         options.push(
                 370            );
                         options.push(
                 204            );
                         options.push(
                 204            );
                         options.push(
                 374            );
                         options.push(
                 374            );
                         options.push(
                 294            );
                         options.push(
                 294            );
                         options.push(
                 323            );
                         options.push(
                 323            );
                         options.push(
                 235            );
                         options.push(
                 235            );
                         options.push(
                 30            );
                         options.push(
                 30            );
                         options.push(
                 135            );
                         options.push(
                 135            );
                         options.push(
                 63            );
                         options.push(
                 63            );
                         options.push(
                 292            );
                         options.push(
                 292            );
                         options.push(
                 293            );
                         options.push(
                 293            );
                         options.push(
                 347            );
                         options.push(
                 347            );
                         options.push(
                 297            );
                         options.push(
                 297            );
                         options.push(
                 358            );
                         options.push(
                 358            );
                         options.push(
                 257            );
                         options.push(
                 257            );
                         options.push(
                 111            );
                         options.push(
                 111            );
                         options.push(
                 85            );
                         options.push(
                 85            );
                         options.push(
                 362            );
                         options.push(
                 362            );
                         options.push(
                 69            );
                         options.push(
                 69            );
                         options.push(
                 355            );
                         options.push(
                 355            );
                         options.push(
                 103            );
                         options.push(
                 103            );
                         options.push(
                 124            );
                         options.push(
                 124            );
                         options.push(
                 279            );
                         options.push(
                 279            );
                         options.push(
                 125            );
                         options.push(
                 125            );
                         options.push(
                 88            );
                         options.push(
                 88            );
                         options.push(
                 6            );
                         options.push(
                 6            );
                         options.push(
                 326            );
                         options.push(
                 326            );
                         options.push(
                 40            );
                         options.push(
                 40            );
                         options.push(
                 25            );
                         options.push(
                 25            );
                         options.push(
                 185            );
                         options.push(
                 185            );
                         options.push(
                 249            );
                         options.push(
                 249            );
                         options.push(
                 315            );
                         options.push(
                 315            );
                         options.push(
                 246            );
                         options.push(
                 246            );
                         options.push(
                 112            );
                         options.push(
                 112            );
                         options.push(
                 373            );
                         options.push(
                 373            );
                         options.push(
                 364            );
                         options.push(
                 364            );
                         options.push(
                 7            );
                         options.push(
                 7            );
                         options.push(
                 334            );
                         options.push(
                 334            );
                         options.push(
                 254            );
                         options.push(
                 254            );
                         options.push(
                 51            );
                         options.push(
                 51            );
                         options.push(
                 86            );
                         options.push(
                 86            );
                         options.push(
                 91            );
                         options.push(
                 91            );
                         options.push(
                 104            );
                         options.push(
                 104            );
                         options.push(
                 17            );
                         options.push(
                 17            );
                         options.push(
                 10            );
                         options.push(
                 10            );
                         options.push(
                 186            );
                         options.push(
                 186            );
                         options.push(
                 265            );
                         options.push(
                 265            );
                         options.push(
                 157            );
                         options.push(
                 157            );
                         options.push(
                 255            );
                         options.push(
                 255            );
                         options.push(
                 218            );
                         options.push(
                 218            );
                         options.push(
                 224            );
                         options.push(
                 224            );
                         options.push(
                 354            );
                         options.push(
                 354            );
                         options.push(
                 372            );
                         options.push(
                 372            );
                         options.push(
                 181            );
                         options.push(
                 181            );
                         options.push(
                 268            );
                         options.push(
                 268            );
                         options.push(
                 50            );
                         options.push(
                 50            );
                         options.push(
                 160            );
                         options.push(
                 160            );
                         options.push(
                 129            );
                         options.push(
                 129            );
                         options.push(
                 376            );
                         options.push(
                 376            );
                         options.push(
                 313            );
                         options.push(
                 313            );
                         options.push(
                 28            );
                         options.push(
                 28            );
                         options.push(
                 285            );
                         options.push(
                 285            );
                         options.push(
                 286            );
                         options.push(
                 286            );
                         options.push(
                 12            );
                         options.push(
                 12            );
                         options.push(
                 168            );
                         options.push(
                 168            );
                         options.push(
                 92            );
                         options.push(
                 92            );
                         options.push(
                 189            );
                         options.push(
                 189            );
                         options.push(
                 275            );
                         options.push(
                 275            );
                         options.push(
                 274            );
                         options.push(
                 274            );
                         options.push(
                 253            );
                         options.push(
                 253            );
                         options.push(
                 13            );
                         options.push(
                 13            );
                         options.push(
                 206            );
                         options.push(
                 206            );
                         options.push(
                 20            );
                         options.push(
                 20            );
                         options.push(
                 39            );
                         options.push(
                 39            );
                         options.push(
                 276            );
                         options.push(
                 276            );
                         options.push(
                 239            );
                         options.push(
                 239            );
                         options.push(
                 260            );
                         options.push(
                 260            );
                         options.push(
                 203            );
                         options.push(
                 203            );
                         options.push(
                 192            );
                         options.push(
                 192            );
                         options.push(
                 304            );
                         options.push(
                 304            );
                         options.push(
                 175            );
                         options.push(
                 175            );
                         options.push(
                 229            );
                         options.push(
                 229            );
                         options.push(
                 145            );
                         options.push(
                 145            );
                         options.push(
                 183            );
                         options.push(
                 183            );
                         options.push(
                 139            );
                         options.push(
                 139            );
                         options.push(
                 342            );
                         options.push(
                 342            );
                         options.push(
                 346            );
                         options.push(
                 346            );
                         options.push(
                 209            );
                         options.push(
                 209            );
                         options.push(
                 16            );
                         options.push(
                 16            );
                         options.push(
                 344            );
                         options.push(
                 344            );
                         options.push(
                 201            );
                         options.push(
                 201            );
                         options.push(
                 82            );
                         options.push(
                 82            );
                         options.push(
                 36            );
                         options.push(
                 36            );
                         options.push(
                 295            );
                         options.push(
                 295            );
                         options.push(
                 324            );
                         options.push(
                 324            );
                         options.push(
                 174            );
                         options.push(
                 174            );
                         options.push(
                 67            );
                         options.push(
                 67            );
                         options.push(
                 361            );
                         options.push(
                 361            );
                         options.push(
                 188            );
                         options.push(
                 188            );
                         options.push(
                 163            );
                         options.push(
                 163            );
                         options.push(
                 164            );
                         options.push(
                 164            );
                         options.push(
                 330            );
                         options.push(
                 330            );
                         options.push(
                 184            );
                         options.push(
                 184            );
                         options.push(
                 162            );
                         options.push(
                 162            );
                         options.push(
                 101            );
                         options.push(
                 101            );
                         options.push(
                 149            );
                         options.push(
                 149            );
                         options.push(
                 89            );
                         options.push(
                 89            );
                         
                     }
     }
 </script>
 <!-- no scripts -->
 <script>
     function bpFieldInitUploadElement(element) {
         let fileInput = element.find(".file_input");
         let fileClearButton = element.find(".file_clear_button");
         let fieldName = element.attr('data-field-name');
         let inputWrapper = element.find(".backstrap-file");
         let inputLabel = element.find(".backstrap-file-label");
 
         fileClearButton.click(function(e) {
             e.preventDefault();
             $(this).parent().addClass('d-none');
 
             fileInput.parent().removeClass('d-none');
             fileInput.attr("value", "").replaceWith(fileInput.clone(true));
             // add a hidden input with the same name, so that the setXAttribute method is triggered
             inputWrapper.append("<input type='hidden' name='clear_" + fieldName + "' value='1'>");
         });
 
         fileInput.change(function() {
             let path = $(this).val();
             let path = path.replace("C:\\fakepath\\", "");
             inputLabel.html(path);
             // remove the hidden input, so that the setXAttribute method is no longer triggered
             inputWrapper.find('input[type=hidden]').remove();
         });
 
     }
 </script>
 <!-- no scripts -->
 <script>
         function bpFieldInitUploadMultipleElement(element) {
                 let fieldName = element.attr('data-field-name');
                 let clearFileButton = element.find(".file-clear-button");
                 let fileInput = element.find("input[type=file]");
                 let inputLabel = element.find("label.backstrap-file-label");
 
                 clearFileButton.click(function(e) {
                         e.preventDefault();
                         let container = $(this).parent().parent();
                         let parent = $(this).parent();
                         // remove the filename and button
                         parent.remove();
                         // if the file container is empty, remove it
                         if ($.trim(container.html()) == '') {
                                 container.remove();
                         }
                         $("<input type='hidden' name='clear_" + fieldName + "[]' value='" + $(this).data('filename') + "'>").insertAfter(fileInput);
                 });
 
                 fileInput.change(function() {
                         inputLabel.html("Files selected. After save, they will show up above.");
                         // remove the hidden input, so that the setXAttribute method is no longer triggered
                         $(this).next("input[type=hidden]").remove();
                 });
         }
 </script>
 
     <script>
     function initializeFieldsWithJavascript(container) {
       let selector;
       if (container instanceof jQuery) {
         selector = container;
       } else {
         selector = $(container);
       }
       selector.find("[data-init-function]").each(function () {
         let element = $(this);
         let functionName = element.data('init-function');
 
         if (typeof window[functionName] === "function") {
           window[functionName](element);
         }
       });
     }
 
     jQuery('document').ready(function($){
 
       // trigger the javascript for all fields that have their js defined in a separate method
       initializeFieldsWithJavascript('form');
 
 
       // Save button has multiple actions: save and exit, save and edit, save and new
       var saveActions = $('#saveActions'),
       crudForm        = saveActions.parents('form'),
       saveActionField = $('[name="save_action"]');
 
       saveActions.on('click', '.dropdown-menu a', function(){
           var saveAction = $(this).data('value');
           saveActionField.val( saveAction );
           crudForm.submit();
       });
 
       // Ctrl+S and Cmd+S trigger Save button click
       $(document).keydown(function(e) {
           if ((e.which == '115' || e.which == '83' ) && (e.ctrlKey || e.metaKey))
           {
               e.preventDefault();
               $("button[type=submit]").trigger('click');
               return false;
           }
           return true;
       });
 
       // prevent duplicate entries on double-clicking the submit form
       crudForm.submit(function (event) {
         $("button[type=submit]").prop('disabled', true);
       });
 
       // Place the focus on the first element in the form
               
                   var focusField = $('form').find('input, textarea, select').not('[type="hidden"]').eq(0),
         
         fieldOffset = focusField.offset().top,
         scrollTolerance = $(window).height() / 2;
 
         focusField.trigger('focus');
 
         if( fieldOffset > scrollTolerance ){
             $('html, body').animate({scrollTop: (fieldOffset - 30)});
         }
       
       // Add inline errors to the DOM
       
       $("a[data-toggle='tab']").click(function(){
           currentTabName = $(this).attr('tab_name');
           $("input[name='current_tab']").val(currentTabName);
       });
 
       if (window.location.hash) {
           $("input[name='current_tab']").val(window.location.hash.substr(1));
       }
 
       });
     </script>
     <script>
       // Set active state on menu element
       let full_url = "{{url("/admin/herb/create")}}"; 
       let $navLinks = $(".sidebar-nav li a");
 
       // First look for an exact match including the search string
       let $curentPageLink = $navLinks.filter(
           function() { return $(this).attr('href') === full_url; }
       );
 
       // If not found, look for the link that starts with the url
       if(!$curentPageLink.length > 0){
           $curentPageLink = $navLinks.filter( function() {
             if ($(this).attr('href').startsWith(full_url)) {
               return true;
             }
 
             if (full_url.startsWith($(this).attr('href'))) {
               return true;
             }
 
             return false;
           });
       }
 
       // for the found links that can be considered current, make sure 
       // - the parent item is open
       $curentPageLink.parents('li').addClass('open');
       // - the actual element is active
       $curentPageLink.each(function() {
         $(this).addClass('active');
       });
   </script>

   <!-- <script>
        function getchemicalCompositions(){
           const chemeicalCategories = document.getElementById('chemical_categories').value;
           const chemicalCompositions = document.getElementById("chemical_compositions");
        
            let xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                let response = JSON.parse(this.responseText);
                let subCategories = response["sub_categories"];
                console.log(subCategories[0].sub_category);
                let options = subCategories.map(subcategory => `<option value=${subcategory.id}>${subcategory.sub_category}</option>`).join('\n');
                chemicalCompositions.innerHTML = options;
                }
            }
            xhttp.open("GET","getchemicalsubcategories?chemical_categories="+chemeicalCategories,true);
            xhttp.send();
        }
        </script> -->

<script>
    const compositionsDropdown = document.getElementById('chemical_compositions');
    const compositionsData = document.getElementsByName('chemical_compositions[]');

    function getchemicalCompositions() {
        const selectedCategoryId = parseInt(document.getElementById('chemical_categories').value);
        const filteredCompositions = compositionsData.filter(composition => composition.id === selectedCategoryId);

        compositionsDropdown.innerHTML = ''; // Clear existing options
        filteredCompositions.forEach(composition => {
            const option = document.createElement('option');
            option.value = composition.id;
            option.textContent = composition.sub_category;
            compositionsDropdown.appendChild(option);
        });
    }

    // Initial population (you can replace with your default category)
    getchemicalCompositions(); // Example: Populate compositions for category ID 1
</script>
 </body>
 </html>