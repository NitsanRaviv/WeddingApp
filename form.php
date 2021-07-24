<html>
<head>
    <title>Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-field">
    <div class="row">
        <h3 class="text-center">Song Wedding</h3>
        <form action="submit.php" method="post" class="text-center">
            <div class="form-group">
                <label>Song 1</label>
                <input type="radio" name="song" value="1" required>
            </div>
            <div class="form-group">
                <label>Song 2</label>
                <input type="radio" name="song" value="2" required>
            </div>
            <div class="form-group">
                <label>Song 3</label>
                <input type="radio" name="song" value="3" required>
            </div>
            <div class="form-group">
                <label>Song 4</label>
                <input type="radio" name="song" value="4" required>
            </div>
            <div class="form-group">
                <label>Song 5</label>
                <input type="radio" name="song" value="5" required>
            </div>
            <br>
            <input type="submit" class="btn btn-success" value="Submit"/>
        </form>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>