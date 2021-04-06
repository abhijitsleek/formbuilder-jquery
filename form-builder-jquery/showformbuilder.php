<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-formBuilder/3.6.2/form-render.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
<style>
body {
  padding: 0;
  margin: 10px 0;
  background: #f2f2f2;
}
</style>

<body>
    <div id="build-wrap"></div>
</body>

</html>
<script>
jQuery(function() {
  var formData = '<form-template><fields><field class="form-control" label="Full Name" name="text-input-1459436848806" type="text" subtype="text"></field><field class="form-control" label="Select" name="select-1459436851691" type="select"><option value="option-1">Option 1</option><option value="option-2">Option 2</option></field><field class="form-control" label="Your Message" name="textarea-1459436854560" type="textarea"></field></fields></form-template>',
    formRenderOpts = {
      dataType: 'xml',
      formData: formData
    };
  
  var renderedForm = $('<div>');
  renderedForm.formRender(formRenderOpts);

  console.log(renderedForm.html());
});
</script>