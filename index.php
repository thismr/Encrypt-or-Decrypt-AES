<?php include 'aes.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/logo.png">
    <title>Encrypt or Decrypt | Aes Encryption</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light px-lg-5 px-sm-5">
        <a class="navbar-brand" href="#">
            <img src="assets/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">&nbsp;
            AES Encryption
        </a>
    </nav>
    <div class="container my-5">
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="text"><?= $action = $action ?? 'Input' ?></label>
                            <input type="text" name="text" id="text" placeholder="Encrypt or Decrypt" class="form-control" value="<?= $data; ?>" <?= $read = $read ?? ''; ?>>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md">
                            <label for="result">Result</label>
                            <textarea name="result" id="result" placeholder="Results..." class="form-control" rows="3" readonly><?= $result; ?></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md text-center">
                            <?= $button = $button ??
                                '<button type="submit" name="encrypt" class="btn btn-primary">Encrypt</button>
                            <button type="submit" name="decrypt" class="btn btn-primary">Decrypt</button>'
                            ?>
                            <button onclick="location.href=' / '" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <span>&copy; 2020 Copyright <a href='https://github.com/thismr' target='_blank'>MRHere!</a>. All Right Reserved</span>
        </div>
    </footer>
</body>


<!-- Javascript -->
<script>
    function copyText() {
        /* Get the text field */
        var copyText = document.getElementById("result");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /*For mobile devices*/

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Succesfully copied text : " + copyText.value);
    }
</script>

</html>