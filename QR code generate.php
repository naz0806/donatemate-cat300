<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<style>
.qr-code {
  max-width: 200px;
  margin: 10px;
}</style>
<body><br><br>
<div class="container-fluid">
  <div class="text-center">
    <img src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
         class="qr-code img-thumbnail img-responsive">
  </div>

  <div class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="content"></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="content" placeholder="Enter content">
      </div>
    </div>
    <div class="form-group"> 
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default" id="generate">Generate</button>
      </div>
    </div>
  </div>
</div>
</body>
<script>
function htmlEncode (value){
  return $('<div/>').text(value).html();
}

$(function() {
  $("#generate").click(function() {
    $(".qr-code").attr("src", "https://chart.googleapis.com/chart?cht=qr&chl=" + htmlEncode($("#content").val()) + "&chs=160x160&chld=L|0");
  });
});</script>
</html>
