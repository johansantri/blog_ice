 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           
          <div class="tile">
          
            <div class="tile-body">
              <form class="form-horizontal" method="post" action="transaksi/insertPln" id="createFormPelanggan">
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="nama_pelanggan" id="nama_pelanggan" placeholder="">
                 
                    
                  </div>
                </div>
             

                <div class="form-group row">
                  <label class="control-label col-md-3">No HP</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" placeholder="" name="no_hp" id="no_hp">
                  </div>
                </div>
             
             
                  <div class="form-group row">
                  <label class="control-label col-md-3">Alamat</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Ketengan" name="alamat" id="alamat"></textarea>
                  </div>
                </div>
          
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Tutup</button>
        <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
      </div>
               
              </form>
            </div>
       
          </div>
     
      </div>
    
    </div>
  </div>
</div>

 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Transaksi</h1>
          <p>Tanggal : <?php echo $tes=date('d-m-Y')?></p>
          <p>Nama Kasir : <?php echo $this->session->userdata('nama_user')?></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"> <a href="" data-toggle="modal" onclick="createPelanggan()" data-target="#exampleModal" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Nama Pelanggan</a><br> <select class="form-control" id="id_pelanggan" single="">
                <optgroup label="">
                    <option> </option>
                 
                    </optgroup>
              </select></li>
          <li class="breadcrumb-item"><input class="form-control" disabled hidden value="TRS<?php echo sprintf("%04s", $kode_transaksi) ?>"  name="kode_transaksi" id="kode_transaksi" type="text" ></li>
        </ul>
      </div>
      <div class="row">
     

        <div class="col-md-12">
            <div class="tile">
            
            <div class="tile-body" >
               <form class="row" id="createFormProduk">
                <div class="form-group col-md-3 ">
                  <label class="control-label">Cari Produk =  <small id="harga1" style="background: red"></small></label>
                   <select class="form-control" id="demoSelect" single="">
                <optgroup label="perawatan">
                    <option> </option>
                 
                    </optgroup>
              </select>
              
                </div>
                <div class="form-group col-md-1">
                  <label class="control-label">Diskon</label>
                  <input class="form-control" type="text" hidden name="harga" value="0" disabled id="harga">
                  <input class="form-control" type="text" value="0" min="0" max="100" required name="diskon" id="diskon">
                </div>
            
              
                 <div class="form-group col-md-2">
                  <label class="control-label">Kapster1</label>
                     <select class="form-control" id="kepSelect" single="">
                <optgroup label="">
                    <option> </option>
                 
                    </optgroup>
              </select>
                </div>

                 <div class="form-group col-md-2">
                  <label class="control-label">Kapster2</label>
                     <select class="form-control" id="kepSelectA" single="">
                <optgroup label="">
                    <option> </option>
                 
                    </optgroup>
              </select>
                </div>

                    <div class="form-group col-md-2">
                  <label class="control-label">Point</label>
                  <input class="form-control" type="text" value="0" min="0" max="100" required name="point" id="point">

                  <input class="form-control" type="text" hidden min="0" value="0" disabled  placeholder="00" id="total" name="total">
                   <input class="form-control" type="text" hidden min="0" value="0" disabled  placeholder="00" id="point_save" name="point_save">
                   <input class="form-control" type="text" hidden min="0" value="0" disabled  placeholder="00" id="point_kapster" name="point_kapster">
                     <input class="form-control" type="text" hidden min="0" value="0" disabled  placeholder="00" id="bagi_kapster" name="bagi_kapster">
                      <input class="form-control" type="text" hidden min="0" value="0" disabled  placeholder="00" id="bagi_dua" name="bagi_dua">
                       <input class="form-control" type="text" hidden min="0" value="0" disabled  placeholder="00" id="bagi_satu" name="bagi_satu">
                  <input class="form-control" type="text" hidden disabled  placeholder="00" value="<?php echo $this->session->userdata('id_user')?>" id="id_user" name="id_user">

                </div>

                 <div class="form-group col-md-2 align-self-end">
                  <a href="#" class="btn btn-primary " onclick="ok()" id="res" ><i class="fa fa-fw fa-lg fa-check-circle"></i> add</a>
                </div>
              </form>
            </div>

                <div class="tile-body">
               <form class="row">
                  <table class="table table-hover table-bordered table-sm" id="tb_order">
                  <thead>
                    <tr>
                    
                      <th>Nama Produk</th>
                      <th>Harga</th>
                     
                      <th>Diskon</th>
                      <th>Total</th>
                      
                     
                    </tr>
                  </thead>
                  <tbody>
                    
             
                  </tbody>
                </table>
               
               
               
              </form>
            </div>

           
          </div>
        </div>
      

        <div class="clearix"></div>
       

          <div class="col-md-12">
              
          <div class="tile">
            
            <div class="tile-body">
               <form class="row">
                <div class="form-group col-md-6">
                  <label class="control-label">Total Awal(Rp.)</label>
                  <h1 style="font-weight: bold; font-size: 30px" id="tampiljumlah"></h1>
                </div>
               
                <div class="form-group col-md-6">
                  <label class="control-label">Total Akhir (Rp.)</label>
                 <h1 style="font-weight: bold; font-size: 30px" id="tampilakhir"></h1>
                </div>
              
              </form>
            </div>
          </div>


        </div>
              
         

          <div class="col-md-12">
              
          <div class="tile">
            
            <div class="tile-body">
               <form class="row">
                <div class="form-group col-md-2">
                  <label class="control-label">Diskon Pelanggan</label>
         
                    <input class="form-control form-control-lg"  type="number" min="0" id="total_diskon" name="total_diskon" value="0">
                </div>
                 <div class="form-group col-md-4">
                  <label class="control-label">Bayar</label>
                  <input class="form-control form-control-lg" type="number" hidden name="total_bayar" id="total_bayar" placeholder="0">
                    <input class="form-control form-control-lg"  type="number" min="0" id="bayar" name="bayar" placeholder="0">
                    <input type="number" hidden name="takhir" id="takhir" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label">Dikembali</label>
                  <input class="form-control form-control-lg" type="number" disabled id="kembali" name="kembali" placeholder="0">
                </div>
                <div class="form-group col-md-2 align-self-end">
                  <button class="btn btn-primary btn-lg" onclick="simpan()" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cetak</button>
                </div>
              </form>
            </div>
          </div>


        </div>


        <div class="clearix"></div>
       
              
         

       

        
     
    </main>


<script type="text/javascript">
 

 
pelanggan();
 function rubah(angka=null){
   
   var reverse = angka.toString().split('').reverse().join(''),
   ribuan = reverse.match(/\d{1,3}/g);
   ribuan = ribuan.join('.').split('').reverse().join('');
   return ribuan;
 }



  $(document).ready(function(){
    tampilList();
    notal();
    hapus();
  });
    $.ajax({
    url: 'produk/listA/',
    type: 'post',
    dataType: 'json',
    cache : false,
    success: function (data) {
          $.each(data, function (key, value) {

        //show complate seaerch
        $('#demoSelect').append('<option value="'+value.id_produk+'" >'+value.nama_produk+'</option>');
       // alert(value.nama_produk);

      });
   

    }
  })

function notal(){
 var kode_transaksi =$("#kode_transaksi").val();
   $.ajax({
    url: 'transaksi/jumlahHarga/'+kode_transaksi, 
    type: 'post',
    dataType: 'json',
    cache : false,
    success: function (data) {
          $.each(data, function (key, value) {

     $("#tampiljumlah").append(rubah(value.total)).toLocaleString();
     $("#total_bayar").val(value.total);
      });
   
 
    }
  })
}
function tampilList(){
       var kode_transaksi =$("#kode_transaksi").val();
   
   $.ajax({
      type: "POST",
      url: 'transaksi/listBantu/'+kode_transaksi,   
      dataType: "json",
      cache : false,
      success: function (data) {
      /*   $('#messages1').append(
            "<tr><th scope='row'>nip</th><td>nama</td><td>matakuliah</td><td>sks</td><td>kelas</td><td>jam</td><td>hari</td>aksi<td></tr></td>"

          );*/
        /*  $('#asu').append("");*/
        $.each(data, function (key, value) {
          /*$("input").prop('disabled', true);*/
          //show complate seaerch
       

          $('#tb_order').append(
            "<tr><td >" + value.nama_produk + "</td><td>" + value.harga + "</td><td>" + value.diskon + "</td><td>" + (rubah(value.total)) + " &nbsp; <a href='' onclick='deleteId("+ value.id_trans +");'>&nbsp; &nbsp; &nbsp;<i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>"

          );

        });
        $("input").focus();
      }
    })
    .done(function (data) {
    console.log("success");
    })
    .fail(function () {
      console.log("error");
    })
    .always(function () {
      console.log("complete");
    });

}

      $.ajax({
    url: 'karyawan/listA/',
    type: 'post',
    dataType: 'json',
    cache : false,
    success: function (data) {
          $.each(data, function (key, value) {

        //show complate seaerch
        $('#kepSelect').append('<option value="'+value.id_karyawan+'" >'+value.nama_karyawan+'</option>');
       // alert(value.nama_produk);

      });
   

    }
  })

 $.ajax({
    url: 'karyawan/listA/',
    type: 'post',
    dataType: 'json',
    cache : false,
    success: function (data) {
          $.each(data, function (key, value) {

        //show complate seaerch
        $('#kepSelectA').append('<option value="'+value.id_karyawan+'" >'+value.nama_karyawan+'</option>');
       // alert(value.nama_produk);

      });
   

    }
  })

 function pelanggan(){
  $.ajax({
    url: 'transaksi/listA/',
    type: 'post',
    dataType: 'json',
    cache : false,
    success: function (data) {
          $.each(data, function (key, value) {

        //show complate seaerch
        $('#id_pelanggan').append('<option value="'+value.id_pelanggan+'" >'+value.nama_pelanggan+'</option>');
       // alert(value.nama_produk);

      });
   

    }
  })
 }


    $('#demoSelect').on('change', function() {
       $("#harga1").empty();
     var id=this.value
    $.ajax({
    url: 'produk/get_id/'+id,
    type: 'post',
    dataType: 'json',
    cache : false,
    success: function (response) {
         $("#harga").val(response.harga);
           $("#harga1").append(response.harga);

    }
  })
});




    $('#diskon').keypress(function () {
     var set =$("#harga").val();
      var dis =$("#diskon").val();
      var seratus=100;


    var harga= parseInt(set);
    var diskon= parseInt(dis);
     var ke=(dis*harga)/seratus;
     var tot=set-ke;

               $("#total").val(tot);
               $("#point_save").val(ke);
});
     $('#point').keypress(function () {
      var set =$("#total").val();
      var dis =$("#point").val();
      var bk =$("#bagi_kapster").val();
      var seratus=100;


    var harga= parseInt(set);
    var diskon= parseInt(dis);
     var ke=(dis*harga)/seratus;
     var tot=set-ke;
     var bagi_dua=bk/2;


               $("#point_kapster").val(tot);
               $("#bagi_kapster").val(ke);
                 $("#bagi_dua").val(bagi_dua);
                   $("#bagi_satu").val(bagi_dua);
});


    $('#diskon').click(function () {
     var set =$("#harga").val();
      var dis =$("#diskon").val();
      var seratus=100;


    var harga= parseInt(set);
    var diskon= parseInt(dis);
     var ke=(dis*harga)/seratus;
     var tot=set-ke;

               $("#total").val(tot);
               $("#point_save").val(ke);
});

    $('#point').click(function () {
      var set =$("#total").val();
      var dis =$("#point").val();
      var bk =$("#bagi_kapster").val();
      var seratus=100;


    var harga= parseInt(set);
    var diskon= parseInt(dis);
     var ke=(dis*harga)/seratus;
     var tot=set-ke;
     var bagi_dua=bk/2;


               $("#point_kapster").val(tot);
               $("#bagi_kapster").val(ke);
                 $("#bagi_dua").val(bagi_dua);
                   $("#bagi_satu").val(bagi_dua);
});

    $('#diskon').keyup(function () {
     var set =$("#harga").val();
      var dis =$("#diskon").val();
      var seratus=100;


    var harga= parseInt(set);
    var diskon= parseInt(dis);
     var ke=(dis*harga)/seratus;
     var tot=set-ke;

               $("#total").val(tot);
               $("#point_save").val(ke);
});
    
 $('#point').keyup(function () {
     var set =$("#total").val();
      var dis =$("#point").val();
      var bk =$("#bagi_kapster").val();
      var seratus=100;


    var harga= parseInt(set);
    var diskon= parseInt(dis);
     var ke=(dis*harga)/seratus;
     var tot=set-ke;
     var bagi_dua=bk/2;


               $("#point_kapster").val(tot);
               $("#bagi_kapster").val(ke);
                 $("#bagi_dua").val(bagi_dua);
                  $("#bagi_satu").val(bagi_dua);
});

    $('#total_diskon').keyup(function(){
         $("#tampilakhir").empty();
      var tb=$("#total_bayar").val();
      var ts=$("#total_diskon").val();
       var seratus=100;
      var tobay=parseInt(tb);
      var todis=parseInt(ts);
      var kir=(todis*tobay)/seratus;
      var tokir=tb-kir;
     console.log(tokir);
     //$("#tampilakhir").append(tokir);
     $("#tampilakhir").append(rubah(tokir)).toLocaleString();
     $("#takhir").val(tokir);
    });
    $("#total_diskon").click(function(){
      $("#tampilakhir").empty();
      var tb=$("#total_bayar").val();
      var ts=$("#total_diskon").val();
       var seratus=100;
      var tobay=parseInt(tb);
      var todis=parseInt(ts);
      var kir=(todis*tobay)/seratus;
      var tokir=tb-kir;
     console.log(tokir);
     //$("#tampilakhir").append(tokir);
      $("#tampilakhir").append(rubah(tokir)).toLocaleString();
     $("#takhir").val(tokir);
    });
/*  $('#bayar').click(function () {
     var tb =$("#total_bayar").val();
      var byr =$("#bayar").val();
    


    var total_bayar= parseInt(tb);
    var bayar= parseInt(byr);
     var kem=byr-tb
    

               $("#kembali").val(kem);
});*/

 $("#bayar").keyup(function(){
    var tb =$("#takhir").val();
      var byr =$("#bayar").val();

     var kem=byr-tb
    

               $("#kembali").val(kem);
  });



$('input[name=diskon]').change(function() { 
 var set =$("#harga").val();
      var dis =$("#diskon").val();
      var seratus=100;


    var harga= parseInt(set);
    var diskon= parseInt(dis);
     var ke=(dis*harga)/seratus;
     var tot=set-ke;



               $("#total").val(tot);
$("#point_save").val(ke);

 });

$('input[name=point]').change(function() { 
var set =$("#total").val();
      var dis =$("#point").val();
      var bk =$("#bagi_kapster").val();
      var seratus=100;


    var harga= parseInt(set);
    var diskon= parseInt(dis);
     var ke=(dis*harga)/seratus;
     var tot=set-ke;
     var bagi_dua=bk/2;


               $("#point_kapster").val(tot);
               $("#bagi_kapster").val(ke);
                 $("#bagi_dua").val(bagi_dua);
                   $("#bagi_satu").val(bagi_dua);

 });

$('input[name=bayar]').change(function() { 
var tb =$("#bayar").val();
      var byr =$("#takhir").val();
    


   
     var kem=tb-byr
    

               $("#kembali").val(kem);

 });

function hapus(){
   //$('#demoSelect').val('');
   // $('#id_pelanggan').val('');
     $('#diskon').val('0');
      $('#total').val('');
      // $('#kepSelect').val('');
         $('#harga').val('');
          $('#demoSelect').val(null).trigger('change');
          $('#kepSelect').val(null).trigger('change');
           $('#kepSelectA').val(null).trigger('change');
           $('#id_pelanggan').val(null).trigger('change');
           $('#tb_order tbody').empty();
    $('#tb_tot tbody').empty();
    $('#tampiljumlah').empty();
}





function ok(){
  // $('#tb_order tbody').empty();
  //  $('#tb_tot tbody').empty();
 
  var id_karyawan = $('#kepSelect').val();
  var id_karyawanA = $('#kepSelectA').val();
  var kode_transaksi = $('#kode_transaksi').val();
  var id_produk = $('#demoSelect').val();
  var id_user = $('#id_user').val();
  var id_pelanggan = $('#id_pelanggan').val();
  var diskon = $('#diskon').val();
   var total = $('#total').val();
   var point_save = $('#point_save').val();
    var point= $('#point').val();
     var bagi_satu = $('#bagi_satu').val();
      var bagi_dua = $('#bagi_dua').val();
      var bagi_kapster = $('#bagi_kapster').val();
  $.ajax({
    url: 'transaksi/insert',
    type: 'POST',
    dataType: 'json',
    cache : false,
    data: { id_karyawan: id_karyawan,id_karyawanA: id_karyawanA,point_save: point_save, kode_transaksi: kode_transaksi, id_produk: id_produk,id_user: id_user, id_pelanggan: id_pelanggan, diskon: diskon, total: total, point: point, bagi_satu: bagi_satu, bagi_dua: bagi_dua,bagi_kapster: bagi_kapster },
  })
    .done(function (data) {
    console.log("success");
    tampilList();
    notal();
    hapus();

    })
    .fail(function () {
      console.log("error");
       tampilList();
    notal();
    hapus();

    })
    .always(function () {
      console.log("complete");
    });
}

function simpan(){
  // $('#tb_order tbody').empty();
  //  $('#tb_tot tbody').empty();

  var id_pelanggan = $('#id_pelanggan').val();
  var kode_transaksi = $('#kode_transaksi').val();
  var total_bayar = $('#total_bayar').val();
  var total_diskon = $('#total_diskon').val();
  var total_transaksi = $('#takhir').val();
  var id_user = $('#id_user').val();
 
  var bayar = $('#bayar').val();
   var kembali = $('#kembali').val();
   
  $.ajax({
    url: 'transaksi/buy',
    type: 'POST',
    dataType: 'json',
    cache : false,
    data: {kode_transaksi: kode_transaksi, id_user: id_user, id_pelanggan: id_pelanggan, total_bayar: total_bayar,  kembali: kembali,bayar: bayar ,total_diskon: total_diskon,total_transaksi: total_transaksi},
  })
    .done(function (data) {
    console.log("success");
    tampilList();
    notal();
    hapus();
   window.location.reload();
    })
    .fail(function () {
      console.log("error");
       tampilList();
    notal();
    hapus();
   window.location.reload();
    })
    .always(function () {
      console.log("complete");
    });
}



function deleteId(id_trans = null) {

  if (id_trans) {

   
    $.ajax({
      url: 'transaksi/removeId/' + id_trans,
      type: 'post',
      dataType: 'json',
      cache : false,
      success: function (response) {
        alert('sukses');





      }
    });


  }
  else {
    alert('error');
  }
}
function createPelanggan(){
  hapus();
  $('#createFormPelanggan')[0].reset();
  $("#submit").attr("disabled", false);
  $('.text-danger').remove();
  
  $(".form-group").removeClass('has-error').removeClass('has-success');

  $("#createFormPelanggan").unbind('submit').bind('submit',function(){
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
                       hapus();      
                            },3000);
            $("#submit").attr("disabled", true);
          $("#exampleModal").modal('toggle');
         // tbkaryawan.ajax.reload(null,false);
         pelanggan();

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
</script>