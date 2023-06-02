<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Stylesheets
 ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('/css/magnific-popup.css') }}" type="text/css" />
    
    <!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="{{ url('/css/components/bs-filestyle.css') }}" type="text/css" />

    <!-- Date & Time Picker CSS -->
	<link rel="stylesheet" href="{{ url('/css/components/datepicker.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ url('/css/components/timepicker.css') }}" type="text/css" />

    <!-- Radio Checkbox Plugin -->
	<link rel="stylesheet" href="{{ url('/css/components/radio-checkbox.css') }}" type="text/css" />

	<!-- Bootstrap Data Table Plugin -->
	<link rel="stylesheet" href="{{ url('/css/components/bs-datatable.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ url('/css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
 ============================================= -->
    <title>Dashboard</title>

</head>

<body class="stretched side-header">

    <!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
        @include('dashboard.layouts.sidebar')
        <!-- #header end -->

		<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 ol-md-9 ms-sm-auto col-lg-10 px-md-5">
            @yield('container')
		</section>

        

	</div>
    <!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
 
 <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
	<script src="{{ url('/js/jquery.js') }}"></script>
	<script src="{{ url('/js/plugins.min.js') }}"></script>

	<!-- Date & Time Picker JS -->
	<script src="{{ url('/js/components/moment.js') }}"></script>
	<script src="{{ url('/js/components/timepicker.js') }}"></script>
	<script src="{{ url('/js/components/datepicker.js') }}"></script>

	<!-- Bootstrap File Upload Plugin -->
	<script src="{{ url('/js/components/bs-filestyle.js') }}"></script>

	<!-- Bootstrap Data Table Plugin -->
	<script src="{{ url('/js/components/bs-datatable.js') }}"></script>

    <!-- Footer Scripts
	============================================= -->
	<script src="{{ url('/js/functions.js') }}"></script>

	<script>
		$(function() {
			$('.component-datepicker.default').datepicker({
				autoclose: true,
				startDate: "today",
			});

			$('.component-datepicker.today').datepicker({
				autoclose: true,
				startDate: "today",
				todayHighlight: true
			});

			$('.component-datepicker.past-enabled').datepicker({
				autoclose: true,
			});

			$('.component-datepicker.format').datepicker({
				autoclose: true,
				format: "dd-mm-yyyy",
			});

			$('.component-datepicker.autoclose').datepicker();

			$('.component-datepicker.disabled-week').datepicker({
				autoclose: true,
				daysOfWeekDisabled: "0"
			});

			$('.component-datepicker.highlighted-week').datepicker({
				autoclose: true,
				daysOfWeekHighlighted: "0"
			});

			$('.component-datepicker.mnth').datepicker({
				autoclose: true,
				minViewMode: 1,
				format: "mm/yy"
			});

			$('.component-datepicker.multidate').datepicker({
				multidate: true,
				multidateSeparator: " , "
			});

			$('.component-datepicker.input-daterange').datepicker({
				autoclose: true
			});

			$('.component-datepicker.inline-calendar').datepicker();

			$('.datetimepicker').datetimepicker({
				showClose: true
			});

			$('.datetimepicker1').datetimepicker({
				format: 'LT',
				showClose: true
			});

			$('.datetimepicker2').datetimepicker({
				inline: true,
				sideBySide: true
			});

			$('.datetimepicker3,.datetimepicker4').datetimepicker();

			// .daterange1
			$(".daterange1").daterangepicker({
				"buttonClasses": "button button-rounded button-mini m-0",
				"applyClass": "button-color",
				"cancelClass": "button-light"
			});

			// .daterange2
			$(".daterange2").daterangepicker({
				"opens": "center",
				timePicker: true,
				timePickerIncrement: 30,
				locale: {
					format: 'MM/DD/YYYY h:mm A'
				},
				"buttonClasses": "button button-rounded button-mini m-0",
				"applyClass": "button-color",
				"cancelClass": "button-light"
			});

			// .daterange3
			$(".daterange3").daterangepicker({
				singleDatePicker: true,
				showDropdowns: true
			},
			function(start, end, label) {
				var years = moment().diff(start, 'years');
				alert("You are " + years + " years old.");
			});

			// reportrange
			function cb(start, end) {
				$(".reportrange span").html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
			}
			cb(moment().subtract(29, 'days'), moment());

			$(".reportrange").daterangepicker({
				"buttonClasses": "button button-rounded button-mini m-0",
				"applyClass": "button-color",
				"cancelClass": "button-light",
				ranges: {
				   'Today': [moment(), moment()],
				   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				   'This Month': [moment().startOf('month'), moment().endOf('month')],
				   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				}
			}, cb);

			// .daterange4
			$(".daterange4").daterangepicker({
				autoUpdateInput: false,
				locale: {
					cancelLabel: 'Clear'
				},
				"buttonClasses": "button button-rounded button-mini m-0",
				"applyClass": "button-color",
				"cancelClass": "button-light"
			});

			$(".daterange4").on('apply.daterangepicker', function(ev, picker) {
				$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
			});

			$(".daterange4").on('cancel.daterangepicker', function(ev, picker) {
				$(this).val('');
			});

		});

		$(document).ready(function() {
			$('#datatable1').dataTable();
		});

	</script>

</body>

</html>
