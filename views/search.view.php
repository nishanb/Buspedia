<?php require 'includes/header.view.php' ?>

<!-- START CONTENT -->
<div class="content">

  <!-- Start Presentation -->
  <div class="row presentation">

    <div class="col-lg-8 col-md-6 titles">
      <span class="icon color10-bg"><i class="fa fa-bus"></i></span>
      <h1>Available Buses</h1>
      <h4><?="from $source to $dest" ?></h4>
    </div>

  </div>
  <!-- End Presentation -->


 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-padding">


  <!-- Start Row -->
  <div class="row">

    <!-- Start Panel -->
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-title">
          Available Buses
        </div>
        <?php if($routes): ?>
        <div class="panel-body table-responsive">

            <table id="example0" class="table display">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Register No</th>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Bus Type</th>
                        <th>Capacity</th>
                        <th>Rate</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($routes as $route): ?>
                    <tr>
                        <td><?=$route->name?></td>
                        <td><?=$route->reg_no?></td>
                        <td><?=$route->source?></td>
                        <td><?=$route->destination?></td>
                        <td><?=$route->bus_type?></td>
                        <td><?=$route->capacity?></td>
                        <td><?=$route->rate?></td>
                        <td><?=$route->time?></td>

                    </tr>
                <?php endforeach; ?>
                    
                   
                </tbody>
            </table>


        </div>
    <?php else: ?>  
        <h1><center>OOPS!! NO BUSES AVAILABLE FOR THIS ROUTE</center></h1>
    <?php endif; ?>

      </div>
    </div>
    <!-- End Panel -->



    



  </div>
  <!-- End Row -->






</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
 <?php require 'includes/footer.view.php' ?>

 <script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>