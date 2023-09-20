$('#regUserForm').submit(function(e){
e.preventDefault;
var data=new FormData(this);
var action=$(this).attr('action');
ajaxcall(data,action,function(data)
{
    /* console.log(data); */
    location.reload(true);
    /*  alert(data); */
});
})
function ajaxcall(formElem,ajaxurl,handle)
  {
//   var csrfName = $('.txt_csrfname').attr('name'); 
//   var csrfHash = $('.txt_csrfname').val(); 
//   formElem.append(csrfName,csrfHash);
    $.ajax({
      url: base_url+"UserController/"+ajaxurl,
      type: 'POST',
      data:formElem,
      processData:false,
      contentType:false,
      cache:false,
      async:false,
      success: function(data) {
        handle(data);
      }
  });
  }