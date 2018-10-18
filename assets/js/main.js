
jQuery(document).ready(function ($) {

   // chgt du mesnu déroulants catégorie d'établissement
   var previous;
   for (cpt = 0; cpt < window.anomalies_array.length;cpt++)
   {
     if (previous != window.anomalies_array[cpt][0])
        $('#place-category').append('<option value="'+window.anomalies_array[cpt][0]+'">'+window.anomalies_array[cpt][0]+'</option>');
      previous = window.anomalies_array[cpt][0];
   }

   // rechargement du menu déroulant "type" en fonction de "place-category"
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

   // rechargement du menu déroulant "anomalies" en fonction de "type"
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


   // Génération des menus déroulants avec système de recherche
   $('.chosen-single-select').chosen({width: '100%', allow_single_deselect: true});

   $('.chosen-single-select-nosearch').chosen({width: '100%', allow_single_deselect: true,disable_search :true});
});