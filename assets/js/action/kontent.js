//create data
CKupdate();
function createKontent(){
  CKclaer();
  kosong();
    $('#createForm')[0].reset();
    $("#submit").attr("disabled", false);
    $('.text-danger').remove();
   $('#tags').tagsInput({width:'auto'});
    $(".form-group").removeClass('has-error').removeClass('has-success');

       $.ajax({
          url: 'kategori/list_a',
          type: 'post',
          dataType: 'json',
          success: function (data) {
          $.each(data, function (key, value) {
          //show complate seaerch
          $('.kategori').append(       
          
    '<option value="'+value.id_kategori+'" >'+value.nama_kategori+'</option>'
  
          );

          });

          }
          })

 $('#id_kategori').change(function(){
  var id_kategori = $('#id_kategori').val();
  if(id_kategori != '')
  {
   $.ajax({
    url:'kontent/subKategori',
    method:"POST",
    data:{id_kategori:id_kategori},
    success:function(data)
    {
     $('#id_sub').html(data);
    
    }
   });
  }
  else
  {
   $('#id_sub').html('<option value="">Select sub</option>');
  
  }
 });


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
          CKclaer();
                    $(".messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                    '<button type="button" class="close btn-sm" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>'+
                    '<strong><span class="glyphicon glyphicon-exlamation-sign"></span></strong>'+response.messages+
                    '</div>');
                         setTimeout(function(){
                               $(".messages").empty();
                                $(".tag").remove();
                            },3000);
                        $("#submit").attr("disabled", true);
                    $("#exampleModalLong").modal('toggle');
                    tbkontent.ajax.reload(null,false);

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

//view list data
var tbkontent;
$(document).ready(function(){
tbkontent=$("#tbkontent").DataTable({
    'ajax':'kontent/list_all',
    'orders':[]
});
});


   function CKclaer(){
    for ( instance in CKEDITOR.instances ){
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
} 


function kosong(){
        $('[type=text]').val('');     
        $('[name=title]').focus();
    }

function updateKontent(id = null) 
{

    if(id) {
        $(".tag").remove();
        $("#updateForm")[0].reset();
        $('.form-group').removeClass('has-error').removeClass('has-success');
        $('.text-danger').remove();

        $.ajax({
            url: 'kontent/get_id/'+id,
            type: 'post',
            dataType: 'json',
            success:function(response) {
               $("#etitle").val(response.title);
                $("#emeta").val(response.meta);
               $("#edescription").val(response.description);

                CKupdate();
                     CKEDITOR.instances['edescription'].setData(edescription);

                     

  $(".all_kat").html('<select class="form-control ekategori" name="eid_kategori" id="eid_kategori" value=""  aria-label="Default select example">'+
  
  '<option value="'+response.id_kategori+'" >'+response.nama_kategori+'</option>'+
 
  '</select>');

   $(".tes").html('<select class="form-control " name="eid_sub" id="eid_sub" value=""  aria-label="Default select example">'+
  
  '<option value="'+response.id_sub+'" >'+response.nama_sub+'</option>'+
 
  '</select>');
                             
         $("#etags").val(response.tags); 
             $('#etags').tagsInput({width:'auto'});                 
                
$.ajax({
          url: 'kategori/list_a',
          type: 'post',
          dataType: 'json',
          success: function (data) {
          $.each(data, function (key, value) {
          //show complate seaerch
          $('.ekategori').append(       
          
    '<option value="'+value.id_kategori+'" >'+value.nama_kategori+'</option>'
  
          );

          });

          }
          })

 $('#eid_kategori').change(function(){
  var eid_categori = $('#eid_kategori').val();
  
  if(eid_kategori != '')
  {
   $.ajax({
    url:'kontent/esubKategori',
    method:"POST",
    data:{eid_kategori:eid_kategori},
    success:function(data)
    {
     $('#eid_sub').html(data);
    //alert(data);
    }
   });
  }
  else
  {
   $('#eid_sub').html('<option value="">---</option>');
  
  }
 });

   


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
                                $(".tagsinput").remove();

                            },3000);
              $("#updateModal").modal('toggle');
              tbkontent.ajax.reload(null,false);
              
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


  function CKclaer(){
    for ( instance in CKEDITOR.instances ){
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
} 

 function CKupdate(){
        for (instance in CKEDITOR.instances){
            CKEDITOR.instances['description'].updateElement();
            

        }
        
    }




    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }
    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }

    function onChangeTag(input,tag) {
      alert("Changed a tag: " + tag);
    }

   
  