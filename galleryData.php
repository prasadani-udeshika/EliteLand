<?php 
session_start();
include'config.php'; 
include'template_start.php'; 
//include'function.php';
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{ 
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
<link href="dropzone/dist/dropzone.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Page content -->
<div id="page-content">
    <!-- Blank Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="gi gi-podium"></i>Add Land details<br>
            </h1>
        </div>
    </div>
    <!--End Blank Header -->
    <div class="row">
        <div class="col-md-12">
            <div class="block full">
                <div class="block-title">
                    <ul class="nav nav-tabs">
                        <div class="col-md-4">
                            <li>Land Details </a></li>
                            <top-right><a href="mainDetails.php">LandAdd |</a></top-right>
                             <a href="index.php">| Home |</a>
                              <!-- <a href="log.php">| LogIN |</a> -->
                            <a href="logout.php">| Logout</a>
                        </div>
                    </ul>
                </div>
              
      <form id="main_form" method="post" enctype="multipart/form-data">
 
                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                    <strong>Project Name</strong> 
                                </div>
                               <div class="col-md-3">
                                <select id="id" name="id" title="id" class="select-chosen" data-placeholder="Select Project Name " >
                                <option ></option>
                                <?php
                                $query = "
                                SELECT * FROM mainlandproperty
                                ORDER BY project_name ASC ";
                                $sql = mysqli_query($con_main, $query);

                                while ($type = mysqli_fetch_array($sql)) {
                                echo ("<option value=\"" . $type['id'] . "\">" . $type['project_name'] . "</option>");
                                                  }
                                                ?>
                                                
                                </select>
                                </div>
                            </div><br><br>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-1">
                                    <strong>Description</strong> 
                                </div>
                                <div class="col-md-6">
                                     <textarea type="text" id="text" name="text" class="form-control" placeholder="Enter Description"></textarea>
                                </div>
                            </div><br><br>

         <div class="row">
                            <div class="col-md-2 col-md-offset-1">
                                <strong>Image</strong> 
                            </div>

                            <div class="col-md-8">  
                                <!-- image-preview-filename input [CUT FROM HERE]-->
                                
                                <!-- Dropzone.js, You can check out https://github.com/enyo/dropzone/wiki for usage examples -->
                                <div id="upload" class="dropzone"></div>

                                <!-- <input type="hidden" name="latitude" id="latitude" value="0" />
                                <input type="hidden" name="longitude" id="longitude" value="0" /> -->
                            </div>
                        </div>    
                

   
            <br><br>      
            <div class="row">
                            <div class="col-md-2 col-md-offset-1">
                            </div>
                            <div class="col-md-7">
                                <div class="col-md-4 col-md-offset-4">
                                    <button class="btn btn-primary primary-btn pull-right" type="submit" onclick="getvalall()"><strong>Submit</strong></button>
                                </div>
                            </div>
                        </div>
                      
          </form>
            </div>
        </div>
    </div>



    
    <div class="block full">
              <div class="block-title">
                <h2>Current Land Details</h2>
              </div>
              <div class="table-responsive">
                <table id="table-data" class="table table-condensed table-striped table-hover"></table>
              </div>
            </div>
      
    
</div>
<!-- end Page content -->
<!------ Footer -------->
<footer class="clearfix">
    <div class="pull-left">
        Online Support Lectures - PHP
    </div>
    <div class="pull-right">
        DTInnovations - 17/04/2020
    </div>
</footer>
<!---- END Footer ---->

<?php include 'template_scripts.php'; ?>
<?php include  'template_end.php'; ?>
<script src="js/jquery.alphanum-master/jquery.alphanum-master/jquery.alphanum.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="js/sweetalert.js" type="text/javascript"></script>

<script src="dropzone/dist/dropzone.js" type="text/javascript"></script>


<script type="text/javascript">
    $('#header_datails').hide();
    //----------- start date validation ----------
    $('#date').datepicker({
     //  endDate: new Date()
        startDate: new Date()
    });
    //-----------end date validation ----------

    //-------- start numbers only function  -------
    $(".OnlyNumber").numeric({
        allowMinus: false,
        allowSpace: false,
        maxDigits: 10
    });
    //-------- end numbers only function -------

    //------------ start text only function -------
    $(".OnlyText").alphanum({
        allowNumeric: false,
        allowOtherCharSets: false
    });
    //------------ end text only function -------
   //********LINE ITEMS DATA TABLE****************
   App.datatables();
 

 $('#main_form').on('submit', function(e) {
                e.preventDefault();

                var form_data = $('#main_form').serializeArray();

                $.ajax({
                    url: 'addgallery_backend.php',
                    method: 'post',
                    data: form_data,
                    error: function(e){
                        alert ("Successfully Addedd");
                    },
                    success: function(r){
                        alert ('Successfully Addedd(Wrong)');
                    }
                });
                
            });

Dropzone.options.myAwesomeDropzone = false;
            Dropzone.autoDiscover = false;
            
            var myDropzone = new Dropzone('#upload', {
                 url: 'img_uploader.php',
                 acceptedFiles: 'image/*',
                 init: function (){
                    this.on('sending', function(file, xhr, formData){
                        formData.append('request', 'upload');
                    });
                }
            });


</script>


<?php } ?>
