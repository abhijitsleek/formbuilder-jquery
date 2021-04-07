<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="https://formbuilder.online/assets/js/form-render.min.js?v=3.6.2"></script>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->

<body>
    <div id="build-wrap"></div>
    
</body>
</html>
<script>
jQuery(function() {
  var formData = [
  {
    "type": "text",
    "required": false,
    "label": "Name",
    "className": "form-control",
    "name": "text-1617773361327",
    "access": false,
    "subtype": "text"
  },
  {
    "type": "text",
    "required": false,
    "label": "Email",
    "className": "form-control",
    "name": "text-1617773362286",
    "access": false,
    "subtype": "text"
  },
  {
    "type": "text",
    "required": false,
    "label": "Phone",
    "className": "form-control",
    "name": "text-1617773362718",
    "access": false,
    "subtype": "text"
  }
],
    formRenderOpts = {
      dataType: 'json',
      formData: formData
    };
  
  var renderedForm = $('<div>');
  renderedForm.formRender(formRenderOpts);

//   console.log(renderedForm.html());
  $('#build-wrap').html(renderedForm.html());
});
</script>