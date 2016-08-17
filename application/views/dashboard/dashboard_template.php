<!-- <!DOCTYPE html> -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HCMP Dashboard | <?php echo date('Y') ?> </title>

    <!-- Bootstrap -->
    <link href=<?php echo base_url()."assets/dashboard/vendors/bootstrap/dist/css/bootstrap.min.css"?> rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="icon" href="<?php echo base_url().'assets/img/coat_of_arms.png'?>" type="image/x-icon" />
    <link href=<?php echo base_url()."assets/dashboard/vendors/font-awesome/css/font-awesome.min.css"?> rel="stylesheet">
    <!-- iCheck -->
    <link href=<?php echo base_url()."assets/dashboard/vendors/iCheck/skins/flat/green.css"?> rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href=<?php echo base_url()."assets/dashboard/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"?> rel="stylesheet">
    
    <link href=<?php echo base_url()."assets/dashboard/vendors/select2/dist/css/select2.min.css"?> rel="stylesheet">
    
    <!-- jVectorMap -->
    <!-- <link href=<?php echo base_url()."assets/dashboard/css/maps/jquery-jvectormap-2.0.3.css"?> rel="stylesheet"/> -->

    <!-- Custom Theme Style -->
    <link href=<?php echo base_url()."assets/dashboard/css/custom.css"?> rel="stylesheet">
  <script src="<?php echo base_url().'assets/FusionCharts/FusionCharts.js'?>" type="text/javascript"></script>
  </head>

  <body class="nav-md">
  <?php 
    if (isset($content_view)) {
      $this->load->view($content_view);
    }
    else{
      $this->load->view('dashboard/dashboard');
    }
   ?>

    <!-- jQuery -->
    <script src=<?php echo base_url()."assets/dashboard/vendors/jquery/dist/jquery.min.js"?>></script>
    <!-- Bootstrap -->
    <script src=<?php echo base_url()."assets/dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"?> ></script>
    <!-- FastClick -->
    <script src=<?php echo base_url()."assets/dashboard/vendors/fastclick/lib/fastclick.js"?> ></script>
    <!-- NProgress -->
    <script src=<?php echo base_url()."assets/dashboard/vendors/nprogress/nprogress.js"?> ></script>
    <!-- Chart.js -->
    <script src=<?php echo base_url()."assets/dashboard/vendors/Chart.js/dist/Chart.min.js"?> ></script>
    <!-- gauge.js -->
    <!-- <script src=<?php echo base_url()."assets/dashboard/vendors/bernii/gauge.js/dist/gauge.min.js"?> ></script> -->
    <!-- bootstrap-progressbar -->
    <script src=<?php echo base_url()."assets/dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"?> ></script>
    <!-- iCheck -->
    <script src=<?php echo base_url()."assets/dashboard/vendors/iCheck/icheck.min.js"?> ></script>
    <!-- Skycons -->
    <script src=<?php echo base_url()."assets/dashboard/vendors/skycons/skycons.js"?> ></script>
    
    <script src=<?php echo base_url()."assets/dashboard/vendors/select2/dist/js/select2.full.min.js"?> ></script>

    <!-- Flot -->
    <script src=<?php echo base_url()."assets/dashboard/vendors/Flot/jquery.flot.js"?> ></script>
    <script src=<?php echo base_url()."assets/dashboard/vendors/Flot/jquery.flot.pie.js"?> ></script>
    <script src=<?php echo base_url()."assets/dashboard/vendors/Flot/jquery.flot.time.js"?> ></script>
    <script src=<?php echo base_url()."assets/dashboard/vendors/Flot/jquery.flot.stack.js"?> ></script>
    <!-- <script src=<?php echo base_url()."assets/dashboard/vendors/Flot/jquery.flot.resize.js"?> ></script> -->
    <!-- Flot plugins -->
    <script src=<?php echo base_url()."assets/dashboard/js/flot/jquery.flot.orderBars.js"?>></script>
    <script src=<?php echo base_url()."assets/dashboard/js/flot/date.js"?>></script>
    <script src=<?php echo base_url()."assets/dashboard/js/flot/jquery.flot.spline.js"?>></script>
    <script src=<?php echo base_url()."assets/dashboard/js/flot/curvedLines.js"?>></script>
    <!-- jVectorMap -->
    <!-- <script src=<?php echo base_url()."assets/dashboard/js/maps/jquery-jvectormap-2.0.3.min.js"?>></script> -->
    <!-- bootstrap-daterangepicker -->
    <script src=<?php echo base_url()."assets/dashboard/js/moment/moment.min.js"?>></script>
    <script src=<?php echo base_url()."assets/dashboard/js/datepicker/daterangepicker.js"?>></script>

    <!-- Custom Theme Scripts -->
    <script src=<?php echo base_url()."assets/dashboard/js/custom.js"?>></script>

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 7), 35],
          [gd(2012, 1, 8), 45],
          [gd(2012, 1, 9), 55],
          [gd(2012, 1, 10), 65],
          [gd(2012, 1, 11), 95],
          [gd(2012, 1, 12), 100],
          [gd(2012, 1, 13), 150]
        ];
        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 96],
          [gd(2012, 1, 7), 66],
          [gd(2012, 1, 8), 56],
          [gd(2012, 1, 9), 60],
          [gd(2012, 1, 10), 67],
          [gd(2012, 1, 11), 63],
          [gd(2012, 1, 12), 90],
          [gd(2012, 1, 13), 95]
        ];
        /*
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            bars: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: true
        });
        */
        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- jVectorMap -->
    <!-- <script src=<?php echo base_url()."assets/dashboard/js/maps/jquery-jvectormap-world-mill-en.js"?>></script> -->
    <!-- <script src=<?php echo base_url()."assets/dashboard/js/maps/jquery-jvectormap-us-aea-en.js"?>></script> -->
    <script src="<?php echo base_url().'assets/highcharts/highcharts.js'?>"></script>
    <script src="<?php echo base_url().'assets/highcharts/exporting.js'?>"></script>
    <script src=<?php echo base_url()."assets/dashboard/js/maps/gdp-data.js"?>></script>
    <script>
     /* $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
          map: 'world_mill_en',
          backgroundColor: 'transparent',
          zoomOnScroll: false,
          series: {
            regions: [{
              values: gdpData,
              scale: ['#E6F2F0', '#149B7E'],
              normalizeFunction: 'polynomial'
            }]
          },
          onRegionTipShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });*/
    </script>
    <!-- /jVectorMap -->


    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;
        for (i = list.length; i--;)
          icons.set(list[i], list[i]);
        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){ 
        $(".select2").select2({
          placeholder: "0",
          // containerCssClass: "float-left" 
        });
        var options = {
          legend: false,
          responsive: false
        };
        /*
        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Zinc",
              "ORS",
              "Co-pack"
            ],
            datasets: [{
              data: [50,25,25],
              backgroundColor: [
                "#3498DB",
                "#9B59B6",
                "#26B99A",
                "#E74C3C",
                "#BDC3C7",
              ],
              hoverBackgroundColor: [
                "#49A9EA",
                "#B370CF",
                "#36CAAB",
                "#E95E4F",
                "#CFD4D8",
              ]
            }]
          },
          options: options
        });
        */
      });
    </script>
    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };
        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

  <script src="<?php echo base_url().'assets/scripts/pace.js'?>" type="text/javascript"></script>

    <script>
        $( document ).ready(function() {
    paceOptions = {
    ajax: false, // disabled
    document: true, //
    eventLag: true,
    restartOnPushState: false,
    elements:{
      selectors:['body']
    } //
    };
      
    function load(time){
      var x = new XMLHttpRequest()
      x.open('GET', document.URL , true);
      x.send();
    };
    setTimeout(function(){
      Pace.ignore(function(){
        load(3100);
      });
    },4500);
    Pace.on('hide', function(){
    //   console.log('done');
    });
    var url="<?php echo base_url(); ?>";
    });
      //auto run
      var url ='<?php echo base_url()?>';
      var division = '<?php echo $commodity_division; ?>';
      var tracer = '<?php echo $tracer; ?>';
      if (tracer=='') {tracer=null}
      var county_filtered = subcounty_filtered = '';
        // $('#potential_').on('shown.bs.tab', function (e) {
        // $('#potential').html('');
       // });
       $('#actual_').on('shown.bs.tab', function (e) {
        $('#actual').html('');
       });
       $('.top_filter_button').button().click(function(x){
          x.preventDefault(); 
          var county_text = $('#county_filter option:selected').text();
          var subcounty_text = $('#sub_county_filter option:selected').text();
          var county_id = $('#county_filter option:selected').val();
          var subcounty_id = $('#sub_county_filter option:selected').val();
          var facility_id = $('#facility_id option:selected').val();
          if(county_id==0){
            ajax_request_replace_div_content('dashboard/stocking_levels/NULL/NULL/NULL/NULL/'+tracer+'/'+division,"#mos");
            ajax_request_replace_div_content('dashboard/consumption/NULL/NULL/NULL/NULL/NULL/NULL/NULL/'+division,"#consumption");
            ajax_request_replace_div_content('dashboard/expiry/NULL/NULL/NULL/NULL/NULL/NULL/'+division+'/'+tracer,"#actual");
            $('.county-name').html("National "+" &nbsp;");
          }else{
            if(subcounty_id=='NULL'){
              $('.county-name').html(county_text+" &nbsp;");
               /*DASHBOARD/EXPIRY HAS 7 PARAMETERS*/
              ajax_request_replace_div_content('dashboard/stocking_levels/'+county_id+'/NULL/NULL/NULL/'+tracer+'/'+division,"#mos");
              ajax_request_replace_div_content('dashboard/consumption/'+county_id+'/NULL/NULL/NULL/NULL/NULL/NULL/'+division,"#consumption");
              ajax_request_replace_div_content('dashboard/expiry/NULL/'+county_id+'/NULL/NULL/NULL/NULL/'+division+'/'+tracer,"#actual");
            }else{
              if(facility_id=='NULL'){
                  $('.county-name').html(subcounty_text+" &nbsp;");
                   /*DASHBOARD/EXPIRY HAS 7 PARAMETERS*/
                  ajax_request_replace_div_content('dashboard/stocking_levels/NULL/'+subcounty_id+'/NULL/NULL/'+tracer+'/'+division,"#mos");
                  ajax_request_replace_div_content('dashboard/consumption/NULL/'+subcounty_id+'/NULL/NULL/NULL/NULL/NULL/'+division,"#consumption");
                  ajax_request_replace_div_content('dashboard/expiry/NULL/NULL/'+subcounty_id+'/NULL/NULL/NULL/'+division+'/'+tracer,"#actual");
              }else{
                  $('.county-name').html(subcounty_text+" &nbsp;");
                   /*DASHBOARD/EXPIRY HAS 7 PARAMETERS*/
                  ajax_request_replace_div_content('dashboard/stocking_levels/NULL/NULL/'+facility_id+'/NULL/'+tracer+'/'+division,"#mos");
                  ajax_request_replace_div_content('dashboard/consumption/NULL/NULL/'+facility_id+'/NULL/NULL/NULL/NULL/'+division,"#consumption");
                  ajax_request_replace_div_content('dashboard/expiry/NULL/NULL/NULL/'+facility_id+'/NULL/NULL/'+division+'/'+tracer,"#actual");

              }
              
              
            }
          }
          // alert(county_id);
          // alert(subcounty_id);
       });
       $('.county-name').html("National "+" &nbsp;");
       /*DASHBOARD/EXPIRY HAS 7 PARAMETERS*/
        ajax_request_replace_div_content('dashboard/stocking_levels/NULL/NULL/NULL/NULL/'+tracer+'/'+division,"#mos");
        ajax_request_replace_div_content('dashboard/consumption/NULL/NULL/NULL/NULL/NULL/NULL/NULL/'+division,"#consumption");
        ajax_request_replace_div_content('dashboard/expiry/NULL/NULL/NULL/NULL/NULL/NULL/'+division+'/'+tracer,"#actual");
         
        $(".expiry_filter").button().click(function(e) {
          e.preventDefault(); 
          var commodity = $("#expiry_commodity").val();
         ajax_request_replace_div_content('dashboard/expiry/NULL/NULL/NULL/NULL/NULL/'+commodity+'/NULL/NULL',"#actual");
        });
        $(".consumption_filter").button().click(function(e) {
          e.preventDefault(); 
          var county_text = $('#county_filter option:selected').text();
          var subcounty_text = $('#sub_county_filter option:selected').text();
          var county_id = $('#county_filter option:selected').val();
          var subcounty_id = $('#sub_county_filter option:selected').val();
          var facility_id = $('#facility_id option:selected').val();
          var commodity = $("#consumption_commodity").val();
          if(county_id==0){
            // ajax_request_replace_div_content('dashboard/consumption/NULL/NULL/NULL/'+commodity+'/NULL/NULL',"#consumption");
            ajax_request_replace_div_content('dashboard/consumption/NULL/NULL/NULL/'+commodity+'/NULL/NULL',"#consumption");
            $('.county-name').html("National "+" &nbsp;");
          }else{
            if(subcounty_id=='NULL'){
              $('.county-name').html(county_text+" &nbsp;");
               /*DASHBOARD/EXPIRY HAS 7 PARAMETERS*/              
              // ajax_request_replace_div_content('dashboard/consumption/'+county_id+'/NULL/NULL/NULL/NULL/NULL/NULL/'+division,"#consumption");
              ajax_request_replace_div_content('dashboard/consumption/'+county_id+'/NULL/NULL/'+commodity+'/NULL/NULL',"#consumption");
            }else{
              if(facility_id=='NULL'){
                  $('.county-name').html(subcounty_text+" &nbsp;");
                   /*DASHBOARD/EXPIRY HAS 7 PARAMETERS*/                  
                  // ajax_request_replace_div_content('dashboard/consumption/NULL/'+subcounty_id+'/NULL/NULL/NULL/NULL/NULL/'+division,"#consumption");
                  ajax_request_replace_div_content('dashboard/consumption/NULL/'+subcounty_id+'/NULL/'+commodity+'/NULL/NULL',"#consumption");
              }else{
                  $('.county-name').html(subcounty_text+" &nbsp;");
                   /*DASHBOARD/EXPIRY HAS 7 PARAMETERS*/                  
                  // ajax_request_replace_div_content('dashboard/consumption/NULL/NULL/'+facility_id+'/NULL/NULL/NULL/NULL/'+division,"#consumption");
                  ajax_request_replace_div_content('dashboard/consumption/NULL/NULL/'+facility_id+'/'+commodity+'/NULL/NULL',"#consumption");

              }
              
              
            }
          }
          // ajax_request_replace_div_content('dashboard/consumption/NULL/NULL/NULL/'+commodity+'/NULL/NULL',"#consumption");
        });
        // County filter
        $('#county_filter').on('change', function(){
          // console.log("County change");return;
        var county_val=$('#county_filter').val()
        var drop_down='';
        var facility_select = "<?php echo base_url(); ?>reports/get_sub_county_json_data/"+county_val;
        $.getJSON( facility_select ,function( json ) {
         $("#sub_county_filter").html('<option value="NULL" selected="selected">All Sub-Counties</option>');
          $.each(json, function( key, val ) {
            drop_down +="<option value='"+json[key]["id"]+"'>"+json[key]["district"]+"</option>"; 
          });
          $("#sub_county_filter").append(drop_down);
        });
        
    })  
    // Subcounty filter
    $('#sub_county_filter').on('change', function(){
        var subcounty_val=$('#sub_county_filter').val();
        var drop_down='';
        if(subcounty_val=="NULL"){
          $("#facility_id").html('<option value="NULL" selected="selected">All Facilities</option>');
        }else{
          var facility_select = "<?php echo base_url(); ?>reports/get_facility_json/"+subcounty_val;
          $.getJSON( facility_select ,function( json ) {
           $("#facility_id").html('<option value="NULL" selected="selected">All Facilities</option>');
            $.each(json, function( key, val ) {
              drop_down +="<option value='"+json[key]["facility_code"]+"'>"+json[key]["facility_name"]+"</option>"; 
            });
            $("#facility_id").append(drop_down);
          });  
        }                
        
      });
    $("#consumption_download").button().click(function(e){
          e.preventDefault();
          var commodity = $("#consumption_commodity").val();
          if (commodity==0) {commodity=null}
          var link = "dashboard/consumption/NULL/NULL/NULL/" + commodity + "/excel/NULL/NULL/NULL";
          window.open(url + link);
          // console.log(commodity);
        });
        $("#expiry_download").button().click(function(e){
          e.preventDefault();
          var commodity = $("#expiry_commodity").val();
          if (commodity==0) {commodity=null}
          var link = "dashboard/expiry/NULL/NULL/NULL/NULL/excel/" + commodity + "/NULL/NULL"
          window.open(url + link);
          // console.log(commodity);
        });
        $("#stock_download").button().click(function(e){
          e.preventDefault()
          var tracer = '<?php echo $tracer; ?>';
          if (tracer=='') {tracer=null}
          var link = "dashboard/stocking_levels/NULL/NULL/NULL/NULL/"+tracer+"/" + division + "/excel";
          window.open(url + link);
        });
    $(".ecounty-filter").button().click(function(e) {
          e.preventDefault(); 
         var year = $("#eyear").val();
         var county = $("#ecounty_filter").val();
        // var district=$(this).closest("tr").find("#ecounty_filter").val();
         // var facility=$(this).closest("tr").find("#ecounty_filter").val();
         ajax_request_replace_div_content('dashboard/expiry/'+year+'/'+county+'/NULL/NULL/NULL',"#actual");
          });
    
  
      $(".ecounty-filter").button().click(function(e) {
        e.preventDefault(); 
        var year = $("#eyear").val();
        var county = $("#ecounty_filter").val();
       // var district=$(this).closest("tr").find("#ecounty_filter").val();
       // var facility=$(this).closest("tr").find("#ecounty_filter").val();
       ajax_request_replace_div_content('dashboard/expiry/'+year+'/'+county+'/NULL/NULL/NULL',"#actual");
        });
      $(".asubcounty-filter").button().click(function(e) {
        e.preventDefault(); 
        var year=$("#asubcountyyear").val();
        var county_id=$('#county_id').val();
        var district=$("#asubcounty_filter").val();
        var facility=$("#asubcounty_facility_filter").val();
        ajax_request_replace_div_content('dashboard/expiry/'+year+'/'+county_id+'/'+district+'/'+facility+'/NULL',"#actual");
      });
        /////potential
        $(".pcounty-filter").button().click(function(e) {
          e.preventDefault(); 
          var county=$("#pcounty_filter").val();
          ajax_request_replace_div_content('dashboard/potential/'+county+'/NULL/NULL/NULL',"#potential");
        });
        
        $(".psubcounty-filter").button().click(function(e) {
          e.preventDefault(); 
          var county_id=$('#county_id').val();
          var district=$("#psubcounty_filter").val();
          var facility=$("#psubcounty_facility_filter").val();
          ajax_request_replace_div_content('dashboard/potential/'+county_id+'/'+district+'/'+facility+'/NULL',"#potential");
        });
        $(".subcounty").click(function(){
            /*
             * when clicked, this object should populate facility names to facility dropdown list.
             * Initially it sets a default value to the facility drop down list then ajax is used 
             * is to retrieve the district names using the 'dropdown()' method used above.
             */
             json_obj = {"url":"<?php echo site_url("orders/getFacilities");?>",}
             var baseUrl = json_obj.url;
             var id = $(this).attr("value");
             $('.subcounty').val(id);
             dropdown(baseUrl,"district="+id,".facility");
         });
        function run(data){
          var county_data=data.split('^');
        // console.log(county_data);return;
        $('#placeholder').val(county_data[0]);
        $('.county-name').html(county_data[1]+"&nbsp;County &nbsp;");
        ajax_request_replace_div_content('dashboard/facility_over_view/'+county_data[0],"#facilities_rolled_out");
        ajax_request_replace_div_content('dashboard/hcw/'+county_data[0],"#hcw_trained");
        $('.county').val(county_data[0]);
        $('#county_id').val(county_data[0]);
        json_obj={"url":"<?php echo site_url("orders/getDistrict");?>",}
        var baseUrl=json_obj.url;
        dropdown(baseUrl,"county="+county_data[0],".subcounty");
        ajax_request_replace_div_content('dashboard/expiry/NULL/'+county_data[0]+'/NULL/NULL/NULL',"#actual");
        //ajax_request_replace_div_content('dashboard/potential/'+county_data[0]+'/NULL/NULL/NULL/NULL',"#potential"); 
        ajax_request_replace_div_content('dashboard/stocking_levels/'+county_data[0]+'/NULL/NULL/NULL/ALL',"#mos");
        ajax_request_replace_div_content('dashboard/consumption/'+county_data[0]+'/NULL/NULL/NULL',"#consumption");
        ajax_request_replace_div_content('dashboard/get_facility_infor/'+county_data[0]+'/NULL/NULL/NULL',"#facilities");
        ajax_request_replace_div_content('dashboard/order/NULL/'+county_data[0]+'/NULL/NULL/NULL',"#orders");
        ajax_request_replace_div_content('dashboard/get_lead_infor/NULL/'+county_data[0]+'/NULL/NULL/NULL',"#lead_infor");
      }
    function dropdown(baseUrl,post,identifier){
            /*
             * ajax is used here to retrieve values from the server side and set them in dropdown list.
             * the 'baseUrl' is the target ajax url, 'post' contains the a POST varible with data and
             * 'identifier' is the id of the dropdown list to be populated by values from the server side
             */
             $.ajax({
              type: "POST",
              url: baseUrl,
              data: post,
              success: function(msg){
                var values=msg.split("_")
                var dropdown="<option value='NULL'>All</option>";
                for (var i=0; i < values.length-1; i++) {
                  var id_value=values[i].split("*")
                  dropdown+="<option value="+id_value[0]+">";
                  dropdown+=id_value[1];
                  dropdown+="</option>";
                };
                $(identifier).html(dropdown);
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                if(textStatus == 'timeout') {}
              }
         }).done(function( msg ) {
         });
     }
     function ajax_request_replace_div_content(function_url,div){
      var function_url =url+function_url;
      var loading_icon=url+"assets/img/Preloader_2.gif";
      $.ajax({
        type: "POST",
        url: function_url,
        beforeSend: function() {
          $(div).html("<img style='margin-top:20%;margin-left:50%;' src="+loading_icon+">");
        },
        success: function(msg) {
          $(div).html(msg);
        }
      });
     } 
     $(".excel_").click(function(e) {
      e.preventDefault();
      var county_id=$('#placeholder').val();
       // alert(county_id);
       var type=$(this).attr('id'); 
       var link='';
       if(type=='hcwtrained'){ 
        link='dashboard/hcw/'+county_id+'/NULL/NULL/excel';
        }
       if (type=="commodity_count"){
        link='dashboard/generate_commodities_excel';
       }
       if(type=='offline_count'){ 
        link='dashboard/facility_over_view/'+county_id+'/NULL/NULL/excel/2';
       }
       if(type=='online_count'){ 
        link='dashboard/facility_over_view/'+county_id+'/NULL/NULL/excel/1';
       }
       if(type=='rolledout'){
        link='dashboard/facility_over_view/'+county_id+'/NULL/NULL/excel/0';
       }
       
       window.open(url+link,'_parent'); 
           });
    
    </script>
    </script>
  </body>
</html>