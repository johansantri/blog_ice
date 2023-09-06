



       <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display pekerjaan</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>

        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <div class="button" style="text-align: right;">
                <button type="button" class="btn btn-outline-success" data-toggle="modal" onclick="createLog()" data-target="#exampleModal"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                 Add</button>
               
                </div>
                <br>
                <table class="table table-hover table-bordered table-sm" id="tblog">
                  <thead>
                    <tr>
                      <th>No</th>
                       <th>buat</th>
                          
                      <th>pekerjaan</th>
                     <th>status</th>
                     <th>proritas</th>
                      
                       <th>mulai</th>
                     <th>selesai</th>
                     
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      
                    </tr>
             
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>




<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apa yang anda lakukan hari ini</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="./insert" id="createForm">
          <div class="modal-body">
           
            <div class="form-group">
          
              
                   
           
            
               <textarea class="form-control" name="nama_log" id="nama_log" rows="3"></textarea>
       
           
            </div>
            
          <div class="row">
            <div class="col-md-6">
             <div class="form-group">
             <label for="exampleFormControlSelect1">status</label>
            <select class="form-control" name="status" id="status">
                 <option value="">pilih</option>
                 <option value="started">mulai</option>
              <option value="progres">progres</option>
              
              
               
            
            </select>
            </div>
            </div>
            <div class="col-md-6">
                 <label for="exampleFormControlSelect1">prioritas</label>
            <select class="form-control" name="prioritas" id="prioritas">
                <option value="">pilih</option>
              <option value="low">low</option>
              <option value="normal">normal</option>
              <option value="high">high</option>
            
            </select>
            </div>
             
           </div>
             <div class="row">
                 <div class="col-md-6">
             <div class="form-group">
                  <label for="formGroupExampleInput">tanggal mulai</label>
                 <input class="form-control" name="tanggal_mulai" id="tanggal_mulai" type="date">
             </div>
             </div>
             
             <div class="col-md-6">
                 <label class="formGroupExampleInput">tanggal selesai</label> 
                 <input class="form-control" name="tanggal_selesai" id="tanggal_selesai" type="date">
             </div>
             </div>
          </div>
          <div class="modal-footer">
           
            <button type="submit" class="btn btn-outline-primary" id="submit"><i class="fa fa-save" aria-hidden="true"> Save</i> </button>
          </div>
      </form>
        </div>
      </div>
    </div>
    <!-- and modal -->




<!-- Modal update -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
           
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="./update" id="updateForm">
          <div class="modal-body">
           
            <div class="form-group">
           
            <label for="exampleFormControlSelect1">update status</label>
            <select class="form-control" name="estatus" id="estatus">
                 <option value="">pilih</option>
              <option value="progres">progres</option>
              <option value="done">selesai</option>
              
                <option value="not_started">tidak jalan</option>
            
            </select>
            
            <input type="date" hidden class="form-control" name="tgl_mulai" id="tgl_mulai" value="">
            <input type="date" hidden class="form-control" name="tgl_selesai" id="tgl_selesai" value="">
            
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
    


<script >
 
$(document).ready(function(){
tblog=$("#tblog").DataTable({
	'ajax':'./list_all_saya',
	'orders':[]
});
});




function createLog(){
	$('#createForm')[0].reset();
	$("#submit").attr("disabled", false);
	$('.text-danger').remove();
	$(".form-group").removeClass('has-error').removeClass('has-success');
	$("#createForm").unbind('submit').bind('submit',function(){
		var form = $(this);
		$(".text-danger").remove();
			
		$.ajax({
			url:form.attr('action'),
			type:form.attr('method'),
			data:form.serialize(),
			dataType:'json',
			success:function(response){
				if (response.success===true) {
					$(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
					'<button type="button" class="close btn-sm" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>'+
					'<strong><span class="glyphicon glyphicon-exlamation-sign"></span></strong>'+response.messages+
					'</div>');
						 setTimeout(function(){
                               $(".messages").empty();
                            },3000);
						$("#submit").attr("disabled", true);
					$("#exampleModal").modal('toggle');
					tblog.ajax.reload(null,false);

				}else{
					if (response.messages instanceof Object) {
						$.each(response.messages, function(index,value){
							var id = $("#"+index);
							id
							.closest('.form-group')
							.removeClass('has-error')
							.removeClass('has-success')
							.addClass(value.lenght>0?'has-error':'has-success')
							.after(value);
						});
					}else{
						$(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
					'<button type="button" class="close btn-sm" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>'+
					'<strong><span class="glyphicon glyphicon-exlamation-sign"></span></strong>'+response.messages+
					'</div>');
					}
				}

			}
		});
		return false;
	});
}



function inilog(id = null) 
{

    if(id) {

        $("#updateForm")[0].reset();
        $('.form-group').removeClass('has-error').removeClass('has-success');
        $('.text-danger').remove();

        $.ajax({
            url: './get_id/'+id,
            type: 'post',
            dataType: 'json',
            success:function(response) {
                $("#estatus").val(response.status_log);
                $("#tgl_mulai").val(response.tanggal_mulai);
                $("#tgl_selesai").val(response.tanggal_selesai);
                
                             
                
                $("#updateForm").unbind('submit').bind('submit', function() {
                   
                    var form = $(this);

                    $.ajax({
                        url: form.attr('action') + '/' + id,
                        type: 'post',
                        data: form.serialize(),
                        dataType: 'json',
                        success:function(response) {
                            if(response.success === true) {
                               $(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                                  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                  '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                                '</div>');                             
							  setTimeout(function(){
                               $(".messages").empty();
                            },3000);
							$("#updateModal").modal('toggle');
							tblog.ajax.reload(null,false);
							
                            } else {
                                $('.text-danger').remove()
                                if(response.messages instanceof Object) {
                                    $.each(response.messages, function(index, value) {
                                        var id = $("#"+index);

                                        id
                                        .closest('.form-group')
                                        .removeClass('has-error')
                                        .removeClass('has-success')
                                        .addClass(value.length > 0 ? 'has-error' : 'has-success')                                       
                                        .after(value);                                      

                                    });
                                } else {
                                    $(".messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                                      '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                      '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                                    '</div>');
                                }
                            }
                        } // /succes


                    }); // /ajax

                    return false;
                });
                
            }
        });
    }
    else {
        alert('error');
    }
}


</script>
