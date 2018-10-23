
jQuery(document).ready(function ($) {
   var previous;

   // rechargement du menu deroulant "type" en fonction de "place-category"
   $('#place-category').change(function() {
      $('#type').html("<option selected></option>");
      $('#anomalies').html("<option selected></option>");
      for (cpt = 0; cpt < window.anomalies_array.length;cpt++)
      {
         if ((previous != window.anomalies_array[cpt][1])&&(window.anomalies_array[cpt][0] == $('#place-category').val()))
            $('#type').append('<option value="'+window.anomalies_array[cpt][1]+'">'+window.anomalies_array[cpt][1]+'</option>');
         previous = window.anomalies_array[cpt][1];
      }
      $('#type').trigger("chosen:updated");
      $('#anomalies').trigger("chosen:updated");
   });

   // rechargement du menu deroulant "anomalies" en fonction de "type"
   $('#type').change(function() {
      $('#anomalies').html("<option selected></option>");
      for (cpt = 0; cpt < window.anomalies_array.length;cpt++)
      {
         if ((previous != window.anomalies_array[cpt][2])&&(window.anomalies_array[cpt][1] == $('#type').val())&&(window.anomalies_array[cpt][0] == $('#place-category').val()))
            $('#anomalies').append('<option value="'+window.anomalies_array[cpt][2]+'">'+window.anomalies_array[cpt][2]+'</option>');
         previous = window.anomalies_array[cpt][2];
      }
      $('#anomalies').trigger("chosen:updated");
   });

   // suppression du message de validation à la saisie
   $('form input').focus(function(){
     $(this).parent('.form-group').children('.invalid').hide(500);
   });
   $('form select').change(function(){
      $(this).parent('.form-group').children('.invalid').hide(500);
   });

   // Generation des menus deroulants avec systeme de recherche
   $('.chosen-single-select').chosen({width: '100%', allow_single_deselect: true});
   $('.chosen-single-select-nosearch').chosen({width: '100%', allow_single_deselect: true,disable_search :true});
});