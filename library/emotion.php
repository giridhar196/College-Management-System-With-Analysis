<script src="assets/js/plugins/ajax/jquery.min.js"></script>
<?php 
$textdata="Cristiano Ronaldo left the Principality Stadium in Cardiff last June, a couple of hours after helping Real Madrid win its third champions League trophy in four years.";
?>
<script>

var form = new FormData();
form.append("text", "<?php echo $textdata; ?>");
form.append("api_key", "gPw3BuhG7HKkKUj9aKKlDi6yjWLoBfvwGcHklczO2kY");

var settings = {
  "async": true,
  "crossDomain": true,
  "url": "http://apis.paralleldots.com/v3/keywords",
  "method": "POST",
  "headers": {},
  "processData": false,
  "contentType": false,
  "mimeType": "multipart/form-data",
  "data": form
}

$.ajax(settings).done(function (response) {
  console.log(response);
  document.getElementById("demo").innerHTML = response;
});
</script>
<html>
    <head>
</head>
<body>
    <p id="demo"></p>
</body>
</html>