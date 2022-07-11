    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="<?php echo site_url('bank') ?>">Data Table</a></li>

        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
              
                <br>



        <div class="card mb-3">
          <div class="card-header">
           
          </div>
          <div class="card-body">

               <form action="<?php base_url("bank/edit") ?>" method="post"
              enctype="multipart/form-data" >

              <input type="hidden" name="id" value="<?php echo $personal->id_galery?>" />
              <div class="row">
                <div class="col-md-6"> 
              <div class="form-group">
                <label for="nama_galery">Name*</label>
                <input class="form-control <?php echo form_error('nama_galery') ? 'is-invalid':'' ?>"
                 type="text" name="nama_galery" placeholder="Product name" value="<?php echo $personal->nama_galery ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nama_galery') ?>
                </div>
              </div>
              </div>

           

           
            




            </div>
     
           
           



                 <div class="form-group">
                <label for="name">Photo</label>
                <input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
                 type="file" name="image" />
                <input type="hidden" name="old_image" value="<?php echo $personal->image ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('image') ?>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>


          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>
        <!-- /.container-fluid -->

     
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

 