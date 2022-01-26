<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min (2).css">
    <title>Album List</title>
  </head>
  <body>
    <div class ="container">
      <div class="row">
        <div class="col">
          <h1 class="text-center">What're you listening to?</h1>
          <p>Fill out the form below to add your album recommendation to the list.</p>
          <div id=albums>
          <form id="myForm">
            <div class="form-group">
              <label class="form-control-label" for="album">Album:</label>
              <input class="form-control" type="text" id="album" name="album" required>
              <label class="form-control-label" for="artist">Artist:</label>
              <input class="form-control" type="text" id="artist" name="artist" required>
            </div>

            <div class="form-group">
              <label class="form-control-label" for="genre">Genre:</label>
              <select class="form-control" id="genre" name="genre" required>
                <option disabled selected value> -- select an option -- </option>
                <option value="Alternative">Alternative</option>
                <option value="Blues">Blues</option>
                <option value="Classical">Classical</option>
                <option value="Country">Country</option>
                <option value="Dance">Dance</option>
                <option value="Electronic">Electronic</option>
                <option value="Folk">Folk</option>
                <option value="Hip hop">Hip hop</option>
                <option value="Jazz">Jazz</option>
                <option value="Latin">Latin</option>
                <option value="Metal">Metal</option>
                <option value="Pop">Pop</option>
                <option value="R&B">R&B</option>
                <option value="Reggae">Reggae</option>
                <option value="Rock">Rock</option>
                <option value="Soundtrack">Soundtrack</option>
                <option value="World">World</option>
              </select>
            </div>

            <div class="form-group">
              <label class="form-control-label" for="favsong">Favorite track:</label>
              <input class="form-control" type="text" name="favsong" id="favsong" required>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-secondary" value="Submit!">
              <input type="reset" class="btn btn-secondary" value="Start Over">
            </div>
          </form>
        </div>
        <div id="response"></div>
      </div>
    </div>
  </div>
  <script src="js/enter.js"></script>
  </body>
</html>
