<!-- fullcalendar css -->
<link href="/css/fullcalendar.print.css" rel="stylesheet" media="print">
<link href="/css/fullcalendar.css" rel="stylesheet">
<!-- scheduler css -->
<link href="/css/scheduler.css" rel="stylesheet">
<!-- moment js -->
<script src="/js/moment.js"></script>
<!-- fullcalendar js -->
<script src="/js/fullcalendar.js"></script>
<script src="/js/locale-all.js"></script>
<!-- scheduler js -->
<script src="/js/scheduler.js"></script>

@if($include_gcal)
    <script src="/js/gcal.js"></script>
@endif

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#{{ $id }}').fullCalendar({!! $options !!});
    });
</script>
