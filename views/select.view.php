<?php require 'includes/header.view.php' ?>

<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->

<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Presentation -->
  <div class="row presentation">

    <div class="col-lg-8 col-md-6 titles">
      <span class="icon color9-bg"><i class="fa fa-bus"></i></span>
      <h1>Search Buses</h1>
      <h4>Quick Search Buses around you</h4>
    </div>

    <div class="col-lg-4 col-md-6">
      <ul class="list-unstyled list">
        <li><i class="fa fa-check"></i>Simple<li>
        <li><i class="fa fa-check"></i>Quick</a><li>
        <li><i class="fa fa-check"></i>Accurate<li>
      
      </ul>
    </div>

  </div>
  <!-- End Presentation -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-padding">



  <!-- Start Row -->
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title"><center>Search Bus Now !!</center></div>
            <div class="panel-body">

              <p><center>Enter Source and destination to search a bus at your finger tip</center></p>

              <div class="col-md-12 col-lg-12">
                 <form method='post' action='search.php' class="form-horizontal">
                   <fieldset>
                    <div class="form-group">
                    
                      <div class="col-sm-12">
                      <center>
                        <select name="source" class="selectpicker" data-live-search="true">
                         <option>---SELECT SOURCE---</option>
                        <?php foreach($source as $s): ?>
                          <option><?=$s; ?></option>
                        
                      <?php endforeach; ?>
                      </select>
                        </center>
                      </div>
                    </div>
                    <div class="form-group">
                      
                      <div class="col-sm-12">
                      <center>
                        <select name="dest" class="selectpicker" data-live-search="true">
                         <option>---SELECT DESTINATION---</option>
                        <?php foreach($dest as $d): ?>
                          <option><?=$d ?></option>
                        <?php endforeach; ?>
                        </select>
                        </center>
                      </div>
                    </div>
                    <div class="form-group">
                      <center>
                      <button class="btn btn-xl btn-default"><i class="fa fa-search"></i>Search</button>
                      </center>
                    </div>
                   </fieldset>
                 </form>
              </div>
              

            </div>
      </div>
    </div>
  </div>
  <!-- End Row -->



  
  



  




</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<?php require 'includes/footer.view.php' ?>