<!doctype html>
<html lang="en">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Iamges to PDF</title>
  </head>
  <body>
    <div class="container">
  <div class="row">
    <div class="col">
      <h1>Convert images to PDF</h1>
    </div>
  </div>
      <div class="row">
    <div class="col">
      <form action="imgtopdf.php" method="post">

          <div class="form-group">
            <select name="images[]" class="form-select" multiple>
            </select>
           </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>
   <div class="row">
      <div class="col">
        Images
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="images"></div>
      </div>
    </div>


<script>
  var folder = "images/";

$.ajax({
    url : folder,
    success: function (data) {
        $(data).find("a").attr("href", function (i, val) {
            if( val.match(/\.(jpe?g|png|gif)$/) ) {
              $('select').append('<option value="'+folder+val+'">'+folder+val+'</option>');
                $(".images").append( "<img height='200' width='200' src='"+ folder + val +"'>" );
            }
        });
    }
});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
