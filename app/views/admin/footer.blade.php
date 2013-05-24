<div class="row-fluid">
  <div class="span12">
    <div class="footer">
      <div>2013 &copy; My Reservations | Room Angel</div>
    
    </div>
  </div>
</div>
  </div>
</section>

<script type="text/html" id="template-notification">
  <div class="notification animated fadeInLeftMiddle fast">
    <div class="left">
      <div style="background-image: url()" class=""></div>
    </div>
    <div class="right">

    </div>

    <i class="icon-remove-sign hide"></i>
  </div>
</script>
<script type="text/html" id="template-notifications">
  <div class="container">
    <div class="row" id="notifications-wrapper">
      <div id="notifications" class="notifications animated">
        <div id="dismiss-all" class="dismiss-all button blue">Dismiss all</div>
        <div id="content">
          <div id="notes"></div>
        </div>
      </div>
    </div>
  </div>
</script>
<script src="{{URL::asset('javascripts')}}/application.js" type="text/javascript"></script>
<script src="{{URL::asset('javascripts')}}/docs.js" type="text/javascript"></script>
<script src="{{URL::asset('javascripts')}}/docs_charts.js" type="text/javascript"></script>
<script src="{{URL::asset('javascripts')}}/documentation.js" type="text/javascript"></script>
<script src="{{URL::asset('javascripts')}}/prettify.js" type="text/javascript"></script>
<link hred="{{URL::asset('stylesheets')}}/prettify.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    prettyPrint()
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $("[reservation-id=from-picker]").datepicker();
    $("[reservation-id=to-picker]").datepicker();
  });
    $(function(){
        Notifications.push({
            imagePath: "{{URL::asset('images')}}/cloud.png",
            text: "",
            autoDismiss: 10
        });
    });
</script>


</body>
</html>
