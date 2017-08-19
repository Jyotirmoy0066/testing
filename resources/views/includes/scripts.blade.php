
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
<script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="assets/plugins/select2/js/select2.full.js"></script>
<script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
<script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<!-- datatable hooks from here-->

<script src="assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
<script src="assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
<script src="assets/plugins/mapplic/js/hammer.js"></script>
<script src="assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
<script src="assets/plugins/mapplic/js/mapplic.js"></script>
<script src="assets/plugins/rickshaw/rickshaw.min.js"></script>
<script src="assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/plugins/skycons/skycons.js" type="text/javascript"></script>

<!-- datatable hooks ends here-->
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- datatable hooks from here-->
<script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<!-- datatable hooks ends here-->

<!-- add restaurant hooks from here-->
<script src="assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
<!-- <script type="text/javascript" src="assets/plugins/dropzone/dropzone.min.js"></script> -->
<script type="text/javascript" src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
<script src="assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>

<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="js/clockpicker/src/clockpicker.js"></script>
<script src="assets/plugins/ion-slider/js/ion.rangeSlider.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-nouislider/jquery.nouislider.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-nouislider/jquery.liblink.js" type="text/javascript"></script>
<!-- add restaurant hooks ends here-->
<script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAZ-U6HYoK9KhSPCOZrK-Q8pPYS09ADImE"></script>
<script src="js/geocomplete/jquery.geocomplete.js"></script>
 
<script src="pages/js/pages.min.js"></script>

<script src="assets/js/dashboard.js" type="text/javascript"></script>
<script src="assets/js/datatables.js" type="text/javascript"></script>
<script src="assets/js/form_layouts.js" type="text/javascript"></script>

<script src="assets/js/form_wizard.js" type="text/javascript"></script>

<script src="assets/js/scripts.js" type="text/javascript"></script>
 
 <script src="assets/js/demo.js" type="text/javascript"></script> 

<script src="assets/js/tables.js" type="text/javascript"></script>

<script type="text/javascript">

  $(".CheckAllBtn").change(function () {

    if (this.checked) 
    {
      $(".checkBoxClass").prop('checked', true);
    }else{
      $(".checkBoxClass").prop('checked', false);
    }
    
  });

</script>


<script type="text/javascript">
$(document).ready(function() {

	$("#geo_input").geocomplete().bind("geocode:result", function(event, result){
    console.log(result);
  });
	
  $("#example_6").ionRangeSlider({
            min: 1,
            max: 20,
            step: 1,
            postfix: " Kilometers",
            from: 5,
            hideMinMax: false,
            hideFromTo: true
        });

});


$("#close_time, #open_time").clockpicker({
    placement: 'top',
    align: 'left',
    donetext: 'Done'
});
</script>
