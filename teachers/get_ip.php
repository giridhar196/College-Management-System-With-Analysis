 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

                <h1>Your Ip Address (jsonip.com) : </h1>
<span id="ip"></span>
<h1>Your Ip Address (ipinfo.com) : </h1>
<span id="ip1"></span>
<script type="text/javascript">

  $.getJSON("http://jsonip.com?callback=?", function (response) {
     $abc = $("#ip").text(response.ip);
  });
  $.get("http://ipinfo.io", function(response) {
      $("#ip1").text(response.ip);
  }, "jsonp");
</script>