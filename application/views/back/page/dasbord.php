    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Kegiatan</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Berita</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Unduh</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Panduan</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Tabel Comment</h3>
            
             <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama author</th>
                    <th>comment </th>
                   
                   
                    <th>title post</th>
                      <th>date</th>
                     <th>status</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($blog as $person): ?>
                  <tr>
                    <td width="150">
                      <?php echo $person->nama_comment ?> ||  <?php echo $person->email_comment ?>
                    </td>
                    <td>
                      <?php echo $person->description_comment ?>
                    </td>
                   
                   
                   
                    <td width="250">
                   <a href="<?php echo base_url()?><?php echo $person->slug_title;?>" target="_blank"><?php echo $person->title ?></a> 
                    </td>
                    
                    
            
            
                    
                      <td>
                      <?php echo $person->created_comment ?>
                    </td>
                    
                     <td class="small">
                     
                           <a type="button" data-toggle="modal" data-target="#updateModal" onclick="updateComment(<?php echo $person->id_comment ?>)" class="btn btn-warning btn-sm"><?php echo ($person->status_comment == 0)? "tahan": "lepaskan"; ?></a>


                     
                      </td>
                     
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Support Requests</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>
    
    
    
  <!-- Modal update -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Status comment </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="dasbord/update" id="updateForm">
          <div class="modal-body">
           
            <div class="form-group">
            <label>status <small>jika (1) lepaskan atau (0) tahan </small></label>
            <input type="text" name="status_comment" id="status_comment" placeholder="status" class="form-control" autocomplete="off">
            </div>
          
          </div>
          <div class="modal-footer">
           
            <button type="submit" class="btn btn-outline-warning" id="submit"><i class="fa fa-save" aria-hidden="true"> Save</i> </button>
          </div>
      </form>
        </div>
      </div>
    </div>
    <!-- and modal -->

<script type="text/javascript" src="<?php echo base_url('assets/js/action/das.js')?>"></script>
    
    
    
    
    <script type="text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    
    <script type="text/javascript">
     $(document).ready( function () {
    $('#dataTable').DataTable();
} );
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
 
    </script>