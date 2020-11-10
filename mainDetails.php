<?php 
session_start();
include'config.php'; 
include'template_start.php'; 
//include'function.php';
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{ 
?>

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
                        
                        <a href="galleryData.php">Gallery |</a>
                        <a href="index.php">| Home |</a>
                        <!-- <a href="homeTest.php">| HomeTest|</a> -->
                        <!-- <a href="test.php">| Test |</a> -->
                        <!-- <a href="Viewgallery.php">| ViewGallery |</a> -->
                        <!-- <a href="gallerytest3.php">| Gallery3</a> -->
                        <a href="logout.php">| Logout</a>

                       </div>
                    </ul>
                </div>

                <form id="form-header" name="form-header" method="post" class="form-horizontal form-bordered">

                    <div class="form-group">

                    <label class="col-md-2 control-label" for="project_name">Project Name:</label>
                    <div class="col-md-3">
                    <input type="text" id="project_name" name="project_name" title="project_name" class="form-control" data-placeholder="Project Name " >
                    </div>

                    <label class="col-md-2 control-label" for="land_address">Address: </label>
                    <div class="col-md-3">
                    <input type="text" id="land_address" name="land_address" class="form-control" placeholder="Enter Address">
                    </div> 
                  
                    <br>
                    
                    </div>


                    <div class="form-group">
                     <label class="col-md-2 control-label" for="land_price">Land Price</label>
                    <div class="col-md-3">
                    <input type="text" id="land_price" name="land_price"  class="form-control" placeholder="Enter Land Price"  >
                    </input>
                    </div>

                    <label class="col-md-2 control-label" for="match_note">Description: </label>
                    <div class="col-md-3">
                    <textarea type="text" id="description" name="description" class="form-control" placeholder="Enter Description"></textarea>
                    </div>

                    </div>


                    

                    <label class="col-md-2 control-label"  id="insert_image">Main Image</label>
                    <div class="col-md-3">
                      <div class="col-md-3" id="update_image">
                              </div>
                              <label id="update_image_titl">Update Image</label>
                              <input type="file" name="file_main" id="file_main" accept="image/*" class="btn btn-success"> 
                              <input type="hidden" name="hidden_img_link" id="hidden_img_link" value="0">
                    <!-- <input type="text" id="main_image" name="main_image"  class="form-control"  >
                    </input> -->
                    </div>
                  
                  <div class="form-group">
                   <label class="col-md-2 control-label" for="gallery">Gallery:</label>
                    <div class="col-md-3">
                    <input type="text" id="gallery" name="gallery" class="form-control" placeholder="Upload One or More" >
                    </input>
                    </div>
                    </div>

                   <li>Property Details </a></li>
                    <div class="form-group">  
                    <label class="col-md-2 control-label" for="property_id">Property ID: </label>
                    <div class="col-md-3">
                    <input type="text" id="property_id" name="property_id" class="form-control" placeholder="Enter Property ID">
                    </div> 
                    <label class="col-md-2 control-label" for="property_type">Propery Type</label>
                    <div class="col-md-3">
                    <input type="text" id="property_type" name="property_type" class="form-control" placeholder="Property Type" >
                    </div> 
                    </div>


                     
                     <div class="form-group">  
                     <label class="col-md-2 control-label" for="property_status">Property Status: </label>
                     <div class="col-md-3">
                     <input type="text" id="property_status" name="property_status" class="form-control" placeholder="property_status">
                     </div> 
                     <label class="col-md-2 control-label" for="other_details1">Number of Blogs</label>
                     <div class="col-md-3">
                     <input type="text" id="other_details1" name="other_details1" class="form-control" placeholder="Enter Number of Blogs" >
                     </div> 
                     </div>


                     <div class="form-group">
                     <label class="col-md-2 control-label" id="insert_image1">Land Plan Image: </label>
                     <div class="col-md-3">
                     <div class="col-md-3" id="update_image1">
                              </div>
                              <label id="update_image_titl1">Update Image</label>
                              <input type="file" name="file_main1" id="file_main1" accept="image/*" class="btn btn-success"> 
                              <input type="hidden" name="hidden_img_link1" id="hidden_img_link1" value="0">
                     </div> 
 
              <!--  <label class="col-md-2 control-label"  id="insert_image">Main Image</label>
                    <div class="col-md-3">
                      <div class="col-md-3" id="update_image">
                              </div>
                              <label id="update_image_titl">Update Image</label>
                              <input type="file" name="file_main" id="file_main" accept="image/*" class="btn btn-success"> 
                              <input type="hidden" name="hidden_img_link" id="hidden_img_link" value="0">
                   
                    </div> -->


                     <label class="col-md-2 control-label" for="status">Status</label>
                        <div class="col-md-3">
                            <select id="status" name="status" class="select-chosen" data-placeholder="Choose Status">
                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                <option value="1" selected>Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            
                        </div>
                     </div>

                      <li>Other Details </a></li>
                    <div class="form-group">  
                    <label class="col-md-2 control-label" for="property_id">Educational Place 1: </label>
                    <div class="col-md-2">
                    <input type="text" id="education1" name="education1" class="form-control" placeholder="Enter Educational Place (Main School-2Km)">
                    </div> 
                    <label class="col-md-2 control-label" for="property_type">Educational Place 2:</label>
                    <div class="col-md-2">
                    <input type="text" id="education2" name="education2" class="form-control" placeholder="Enter Educational Place (Main School-2Km)" >
                    </div> 
                     <label class="col-md-2 control-label" for="property_id">Educational Place 3: </label>
                    <div class="col-md-2">
                    <input type="text" id="education3" name="education3" class="form-control" placeholder="Enter Educational Place (Main School-2Km)">
                    </div> 
                    </div>

                    

                    <div class="form-group">   
                    <label class="col-md-2 control-label" for="property_type">Health Care Place 1:</label>
                    <div class="col-md-2">
                    <input type="text" id="health1" name="health1" class="form-control" placeholder="Enter Health Care Place (Hospital-2Km)" >
                    </div> 
                     <label class="col-md-2 control-label" for="property_id">Health Care Place 2: </label>
                    <div class="col-md-2">
                    <input type="text" id="health2" name="health2" class="form-control" placeholder="Enter Health care Place (Hospital-2Km)">
                    </div> 
                    <label class="col-md-2 control-label" for="property_type">Health Care Place 3:</label>
                    <div class="col-md-2">
                    <input type="text" id="health3" name="health3" class="form-control" placeholder="Enter Health care Place (Main Hospital-2Km)" >
                    </div> 
                    </div>

                    

                     <div class="form-group">  
                    <label class="col-md-2 control-label" for="property_id">Transportation Facility 1: </label>
                    <div class="col-md-2">
                    <input type="text" id="transportation1"  name="transportation1" class="form-control" placeholder="Enter Transportation ">
                    </div> 
                    <label class="col-md-2 control-label" for="property_type">Transportation Facility 2:</label>
                    <div class="col-md-2">
                    <input type="text" id="transportation2" name="transportation2" class="form-control" placeholder="Enter Trasportation" >
                    </div> 
                    <label class="col-md-2 control-label" for="property_id">Transportation Facility 3: </label>
                    <div class="col-md-2">
                    <input type="text" id="transportation3" name="transportation3" class="form-control" placeholder="Enter Transportation ">
                    </div> 
                    </div>

                   



                      <div class="form-group form-actions">
                        <div class="col-md-2">
                            <input type="hidden" class="form-control" id="id" name="id" value="0">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" id="header_datail" class="btn btn-primary primary-btn pull-right"><i class="fa fa-plus-circle"></i> Submit</button>
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


<script type="text/javascript">
  $('#update_image').hide();
    $('#update_image_titl').hide();
     $('#update_image1').hide();
    $('#update_image_titl1').hide();

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
  var dt = $('#table-data').DataTable({
    "processing": true,
    "serverSide": true,
    "select": true,
    "columns": [{
        "className": 'details-control',
        "orderable": false,
        "data": null,
        "defaultContent": '',
        "searchable": true
      },
      {
        "data": "DT_RowId",
        "name": "DT_RowId",
        "title": "id"
      //  "visible": false
      },
      {
        "data": "project_name",
        "name": "project_name",
        "title": "Project Name"
      },
      {
        "data": "land_address",
        "name": "land_address",
        "title": "Land Address"
      },
      {
        "data": "land_price",
        "name": "land_price",
        "title": "Land Price"
      },
      {
        "data": "file_main",
        "name": "file_main",
        "title": "Main Image"
      },
      {
        "data": "gallery",
        "name": "gallery",
        "title": "Gallery"
      },
      {
        "data": "property_id",
        "name": "property_id",
        "title": "Property Id"
      },
      {
        "data": "property_type",
        "name": "property_type",
        "title": "Property Type"
      },
      {
        "data": "property_status",
        "name": "property_status",
        "title": "Property Status"
      },
      {
        "data": "other_details1",
        "name": "other_details1",
        "title": "Other Details"
      },
      {
        "data": "landplan_image",
        "name": "landplan_image",
        "title": "Landplan Image"
      },
      {
        "data": "status",
        "name": "status",
        "title": "Status"
      },
      {
        "data": "date",
        "name": "date",
        "title": "Date"
      },
      {
        "data": "actions",
        "name": "actions",
        "title": "Actions",
        "searchable": false,
        "orderable": false,
        mRender: function(data, type, row) {
          return '</button><button id="btn-row-edit" class="btn btn-primary" title="Edit"><i class="fa fa-pencil"></i></button></div>'
        }
     }
    ],
    "columnDefs": [{
      "className": "dt-center",
      "targets": [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]
    }],

    "language": {
      "emptyTable": "No po line item to show...",
    },
    "ajax": "grid_mainland.php"
  });




    $("#table-data tbody").on('click', '#btn-row-edit', function() {
      //  var rowid= dt.row($(this).parents('tr'));
        var str_id = $(this).closest('tr').attr('id');
        var arr_id = str_id.split("_");

        var row_id = arr_id[1];
        // alert(row_id);
        $.ajax({
            url: 'data_mainland.php',
            data: {
                id: row_id
            },
            method: 'POST',
            dataType: 'json',
            beforeSend: function () {
                $('#table-data tbody #'+str_id+' #btn-row-edit').button('loading');
                NProgress.start();
            },
            complete: function () {
                $('#table-data tbody #'+str_id+' #btn-row-edit').button('Editing');
                NProgress.done();
            },
            error: function (e) {
                $.bootstrapGrowl('<h4>Error!</h4> <p>Error retrieving module data</p>', {
                    type: 'danger',
                    delay: 2500,
                    allow_dismiss: true
                });

                $('#table-data tbody #'+str_id+' #btn-row-edit').button('reset');
                NProgress.done();
            },
            success: function (r) {
                if (!r.result) {
                    $.bootstrapGrowl('<h4>Error!</h4> <p>'+r.message+'</p>', {
                        type: 'danger',
                        delay: 2500,
                        allow_dismiss: true
                    });
                }else{
 
                    $('#id').val(r.data[0].id);
                    $('#project_name').val(r.data[0].project_name);
                    $('#land_address').val(r.data[0].land_address);
                    $('#land_price').val(r.data[0].land_price);
                    // $('#main_image').val(r.data[0].main_image);
                    
                    var img_link = "http://localhost/joseph/" + r.data[0].main_image;


                    var table = '<b>View Image: <a href="' + r.data[0].main_image + '" target="_blank"><img src="' + img_link + '" width="200px"></a></b>';
                    $('#hidden_img_link').val(r.data[0].main_image);
                    $('#update_image').show();
                    $('#insert_image').hide();
                    $('#update_image_titl').show();
                    $('#update_image').html(table);

                    $('#description').val(r.data[0].description);
                    $('#gallery').val(r.data[0].gallery);
                    $('#property_id').val(r.data[0].property_id);
                    $('#property_type').val(r.data[0].property_type);
                    $('#property_status').val(r.data[0].property_status);
                    $('#other_details1').val(r.data[0].other_details1);
                    // $('#landplan_image').val(r.data[0].landplan_image);
                     var img_link1 = "http://localhost/joseph/" + r.data[0].landplan_image;


                    var table1 = '<b>View Image: <a href="' + r.data[0].landplan_image + '" target="_blank"><img src="' + img_link1 + '" width="200px"></a></b>';
                    $('#hidden_img_link1').val(r.data[0].landplan_image);
                    $('#update_image1').show();
                    $('#insert_image1').hide();
                    $('#update_image_titl1').show();
                    $('#update_image1').html(table1);

                    $('#status').val(r.data[0].status);
                    $('#date').val(r.data[0].date);
                    $('#education1').val(r.data[0].education1);
                    $('#education2').val(r.data[0].education2);
                    $('#education3').val(r.data[0].education3);
                    $('#health1').val(r.data[0].health1);
                    $('#health2').val(r.data[0].health2);
                    $('#health3').val(r.data[0].health3);
                    $('#transportation1').val(r.data[0].transportation1);
                    $('#transportation2').val(r.data[0].transportation2);
                    $('#transportation3').val(r.data[0].transportation3);

                    
                    
                    
                }

                
            }
              
        });
   });
 jQuery(document).ready(function () {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function () {
        $(".click2edit").summernote()
    },
            window.save = function () {
                $(".click2edit").summernote('destroy');
            }




$('#form-header').validate({
        errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
        errorElement: 'div',
        errorPlacement: function(error, e) {
            e.parents('.form-group > div').append(error);
        },
        highlight: function(e) {
            $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
            $(e).closest('.help-block').remove();
        },
        success: function(e) {
            e.closest('.form-group').removeClass('has-success has-error');
            e.closest('.help-block').remove();
        },
        submitHandler: function() {

           // var formdata = $('#form-header').serializeArray();
            var form = $("#form-header");
            let formdata = new FormData(form[0]);
            console.log(formdata);
            var uniq_id = $('#id').val();
            $.ajax({
                url: 'main_backend.php',
                data: formdata,
                method: 'POST',
                enctype: 'multipart/form-data',
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#header_datail').button('loading');
                    NProgress.start();
                },
                complete: function() {
                    $('#header_datail').button('reset');
                    NProgress.done();
                },
                error: function(r) {},
                success: function(r) {
                    if (r.result) {
                      if(uniq_id == '0'){
                         swal ("Success",'Insert Success!','success');
                     // alert('Insert Success,  ID : '+ r.data);
                     }else{
                         swal ("Updated",'Update Success!','success');
                      
                     }
                       $('#form-header').trigger('reset');
                    } else {
                         swal ("Error",'!','error');

                    }
                }
            });
        }
    });




</script>
<?php } ?>