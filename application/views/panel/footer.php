<script src="<?php echo base_url();?>assets/admin/js/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/js/AdminLTE/app.js" type="text/javascript"></script>
<!--highchart --> 
<!--<script type="text/javascript" src="<?php echo base_url();?>assets/highcharts/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/highcharts/modules/exporting.js"></script>-->
<!--highchart --> 
<script src="http://tinymce.cachefly.net/4.0/tinymce.min.js" type="text/javascript"></script>
  <link href="<?php echo base_url();?>assets/admin/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>assets/admin/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>


<!-- css for date picker --> 
<link rel="stylesheet" href="<?php echo base_url(); ?>lib/jquery-ui-1.10.0/development-bundle/themes/base/jquery.ui.all.css" />

<script src="<?php echo base_url(); ?>lib/jquery-ui-1.10.0/development-bundle/ui/jquery.ui.core.js"></script>
<script src="<?php echo base_url(); ?>lib/jquery-ui-1.10.0/development-bundle/ui/jquery.ui.widget.js"></script>
<script src="<?php echo base_url(); ?>lib/jquery-ui-1.10.0/development-bundle/ui/jquery.ui.position.js"></script>
<script src="<?php echo base_url(); ?>lib/jquery-ui-1.10.0/development-bundle/ui/jquery.ui.menu.js"></script>
<script src="<?php echo base_url(); ?>lib/jquery-ui-1.10.0/development-bundle/ui/jquery.ui.autocomplete.js"></script>
<script src="<?php echo base_url(); ?>lib/jquery-ui-1.10.0/development-bundle/ui/jquery.ui.datepicker.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/admin/js/AdminLTE/app.js" type="text/javascript"></script>
<!-- dhtmlx -->
<script type="text/javascript">
var base_url='<?php echo base_url();?>';
</script>
<script src="<?php echo base_url();?>assets/myjs/myjs.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/dhtmlx/dhtmlx.js" type="text/javascript"></script>
<script type="text/javascript">
window.setTimeout("waktu()",1000);
function waktu() {
	var tanggal = new Date();
	setTimeout("waktu()",1000);
	document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}

$(function() {
$("#example1").dataTable({
  "scrollX":true,
  "scrollY":true,"bAutoWidth":true
});
$("#example3").dataTable({
    "scrollX":true
});
$("#example4").dataTable();
$("#example5").dataTable();
$("#example6").dataTable();
$("#example7").dataTable({
    "processing": true,
    "serverSide": true,
    "deferLoading": 57,"bPaginate":true ,"bFilter": true
});
$("#example12").dataTable({ // mesin datatable  
    "scrollX":true, 
	"bPaginate":false ,"bFilter": false,
});


$('#example2').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": false,
    "scrollX":true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false
});
});
$(document).on("click","#tglrephari", function(){
    tglrephari= new dhtmlXCalendarObject(["tglrephari"]);
    tglrephari.setDateFormat('%d-%m-%Y');
    tglrephari.show();
});

$(document).on("click","#tglrephari2", function(){
    tglrephari2 = new dhtmlXCalendarObject(["tglrephari2"]);
    tglrephari.setDateFormat('%d-%m-%Y');
    tglrephari2.show();
});

$(document).on("click","#tglrepperdepat", function(){
    tglrepperdepat= new dhtmlXCalendarObject(["tglrepperdepat"]);
    tglrepperdepat.setDateFormat('%d-%m-%Y');
    tglrepperdepat.show();
});

$(document).on("click","#tglrepperdepat2", function(){
    tglrepperdepat2 = new dhtmlXCalendarObject(["tglrepperdepat2"]);
    tglrepperdepat2.setDateFormat('%d-%m-%Y');
    tglrepperdepat2.show();
});

$(document).on("click","#tglmskpeg", function(){
    tglmskpeg= new dhtmlXCalendarObject(["tglmskpeg"]);
    tglmskpeg.setDateFormat('%d-%m-%Y'); 
    tglmskpeg.show();
});
$(document).on("click","#tglrepharidet", function(){
    tglrepharidet= new dhtmlXCalendarObject(["tglrepharidet"]);
    tglrepharidet.setDateFormat('%d-%m-%Y'); 
    tglrepharidet.show();
});

$(document).on("click","#tglmulaihrliburedit", function(){
    tglmulaihrliburedit= new dhtmlXCalendarObject(["tglmulaihrliburedit"]);
    tglmulaihrliburedit.setDateFormat('%d-%m-%Y'); 
    tglmulaihrliburedit.show();
});

$(document).on("click","#tglmulaihrliburedit2", function(){
    tglmulaihrliburedit2= new dhtmlXCalendarObject(["tglmulaihrliburedit2"]);
    tglmulaihrliburedit2.setDateFormat('%d-%m-%Y'); 
    tglmulaihrliburedit2.show();
});

$(document).on("click","#tglrepharidet2", function(){
    tglrepharidet2 = new dhtmlXCalendarObject(["tglrepharidet2"]);
     tglrepharidet2.setDateFormat('%d-%m-%Y'); 
    tglrepharidet2.show();
});
$(document).on("click","#tgldinasform", function(){
    tgldinasform= new dhtmlXCalendarObject(["tgldinasform"]);
    tgldinasform.setDateFormat('%d-%m-%Y');
    tgldinasform.show();
});

$(document).on("click","#tgldinasform2", function(){
    tgldinasform2 = new dhtmlXCalendarObject(["tgldinasform2"]);
    tgldinasform2.setDateFormat('%d-%m-%Y');
    tgldinasform2.show();
});
$(document).on("click","#jammasukkerja", function(){
    jammasukkerja = new dhtmlXCalendarObject(["jammasukkerja"]);
    jammasukkerja.showTime();
    jammasukkerja.setDateFormat('%H:%i:%s');
});
$(document).on("click","#jamplgkerja", function(){
    jamplgkerja = new dhtmlXCalendarObject(["jamplgkerja"]);
    jamplgkerja.showTime();
    jamplgkerja.setDateFormat('%H:%i:%s');
});
$(document).on("click","#tglmulaihrlibur", function(){
    tglmulaihrlibur = new dhtmlXCalendarObject(["tglmulaihrlibur"]);
    tglmulaihrlibur.setDateFormat('%d-%m-%Y');
    tglmulaihrlibur.show();
});
$(document).on("click","#tglakhirlibur", function(){
    tglakhirlibur1 = new dhtmlXCalendarObject(["tglakhirlibur"]);
    tglakhirlibur1.setDateFormat('%d-%m-%Y');
    tglakhirlibur1.show();
});
$(document).on("click","#tglfilgaji", function(){
    tglakhirlibur = new dhtmlXCalendarObject(["tglfilgaji"]);
    tglakhirlibur.show();
});
$(document).on("click","#tglhadirdash", function(){
    tglhadirdash = new dhtmlXCalendarObject(["tglhadirdash"]);
    tglhadirdash.showMonth();
    tglhadirdash.setDateFormat('%m-%Y');
});

$(document).on("click","#tglhadirdashizin", function(){
    tglhadirdashizin = new dhtmlXCalendarObject(["tglhadirdashizin"]);
    tglhadirdashizin.showMonth();
    tglhadirdashizin.setDateFormat('%m-%Y');
});
$(document).on("click","#tglhadirdashsakit", function(){
    tglhadirdashsakit = new dhtmlXCalendarObject(["tglhadirdashsakit"]);
    tglhadirdashsakit.showMonth();
    tglhadirdashsakit.setDateFormat('%m-%Y');
});
$(document).on("click","#tglhadirdashalpha", function(){
    tglhadirdashalpha = new dhtmlXCalendarObject(["tglhadirdashalpha"]);
    tglhadirdashalpha.showMonth();
    tglhadirdashalpha.setDateFormat('%m-%Y');
});
$(document).on("click","#tglahirbaru", function(){
    tglahirbaru = new dhtmlXCalendarObject(["tglahirbaru"]);
    tglahirbaru.showMonth();
    tglahirbaru.setDateFormat('%d-%m-%Y');
});

$(document).on("click","#tglmulaishift1", function(){
    tglmulaishift1 = new dhtmlXCalendarObject(["tglmulaishift1"]);
    tglmulaishift1.showMonth();
    tglmulaishift1.setDateFormat('%d-%m-%Y');
});

$(document).on("click","#tgl1jdwal", function(){
    tglmulaishift1 = new dhtmlXCalendarObject(["tgl1jdwal"]);
    tglmulaishift1.showMonth();
    tglmulaishift1.setDateFormat('%d-%m-%Y');
});

$(document).on("click","#tgl2jdwal", function(){
    tglmulaishift1 = new dhtmlXCalendarObject(["tgl2jdwal"]);
    tglmulaishift1.showMonth();
    tglmulaishift1.setDateFormat('%d-%m-%Y');
});
$(document).on("click","#tglahirupd", function(){
      tglmulaishift1 = new dhtmlXCalendarObject(["tglahirupd"]);
    tglmulaishift1.showMonth();
    tglmulaishift1.setDateFormat('%d-%m-%Y');
}); 
$(document).on("click","#idjadwal56", function(){
    idjadwal56 = new dhtmlXCalendarObject(["idjadwal56"]);
    idjadwal56.showMonth();
    idjadwal56.setDateFormat('%d-%m-%Y');
}); 
$(document).on("click","#tgl1presen", function(){
    tgl1presen = new dhtmlXCalendarObject(["tgl1presen"]);
    tgl1presen.showMonth();
    tgl1presen.setDateFormat('%d-%m-%Y');
}); 
$(document).on("click","#tgl2presen", function(){
    tgl2presen = new dhtmlXCalendarObject(["tgl2presen"]);
    tgl2presen.showMonth();
    tgl2presen.setDateFormat('%d-%m-%Y');
}); 
$(document).on("click","#tglrepkeu", function(){
    tgl2presen = new dhtmlXCalendarObject(["tglrepkeu"]);
    tgl2presen.showMonth();
    tgl2presen.setDateFormat('%d-%m-%Y');
});
$(document).on("click","#tglrepkeu2", function(){
    tgl2presen = new dhtmlXCalendarObject(["tglrepkeu2"]);
    tgl2presen.showMonth();
    tgl2presen.setDateFormat('%d-%m-%Y');
}); 
</script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});

</script>

    <div id="footer" style="height: 40px;">
      <div class="container">
        <p><p class="footer-block" style="color: white;font-size: 20px;height: 90px; text-align: center;">
        <strong>Copyright &copy; PT.Amgro Banda Aceh-2016</strong></p>
        </div>
    </div>
</body>
</html>
