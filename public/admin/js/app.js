$(document).ready(function () {
   $("select#fakultas").change(function () {
      var id_fakultas = $(this).val();
     

      $.ajax({
         type: "POST",
         dataType: "html",
         url: "get_prodi.php",
         data: "id_fakultas=" + id_fakultas,
         success: function (msg) {
            console.log(msg);
            $("select#prodi").removeAttr('disabled');
            $("select#prodi").html(msg);
         }
      });
   });

   CKEDITOR.plugins.addExternal('ckeditor_responsive_table', '/bower_components/ckeditor_responsive_table/dist/plugin.js');
   config.extraPlugins = ['ckeditor_responsive_table'];

   config.toolbar = [{
      name: 'basicstyles',
      items: ['ResponsiveTable']
   }];
});