<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Registrierung</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: rgb(214, 198, 180);
        }

        .row {
            background: white;
        }

        .img-fluid {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        .btn1 {
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: rgba(108, 73, 9, 0.671);
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }

        .btn1:hover {
            background: white;
            border: 1px solid;
            color: rgba(108, 73, 9, 0.671);
        }

        .error-message {
            color: red;
        }
    </style>

</head>

<body>
    <?php
    include 'nav.php';
    ?>

    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters" style="border-radius: 30px; box-shadow: 12px 12px 22px rgb(33, 32, 32);">
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3">Hotel Helios</h1>
                    <h4>Registrieren</h4>
                    <form method="POST" action="../html/action_page.php" class="was-validated">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <input name="anrede" type="text" class="form-control my-3 p-4" placeholder="Anrede" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <input name="vorname" type="text" class="form-control my-3 p-4" placeholder="Vorname" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <input name="nachname" type="text" class="form-control my-3 p-4" placeholder="Nachname" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <input name="email" type="email" class="form-control my-3 p-4" placeholder="E-Mail" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <?php if (!empty($error_message) && empty($_POST["email"])) {
                                    echo "<span class='error-message'>$error_message</span>";
                                } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <input name="geburtsdatum" type="date" class="form-control my-3 p-4" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <input name="username" type="text" class="form-control my-3 p-4" placeholder="Username" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <input name="password" type="password" class="form-control my-3 p-4" placeholder="Passwort" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <input name="repassword" type="password" class="form-control my-3 p-4" placeholder="Passwort wiederholen" required>
                                    <div class="valid-feedback"></div>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="submit" class="btn1 mt-3 mb-5">Registrieren</button>
                        </div>
                    </form>
                    <p>Bereits ein Account? <a href="login.php">Melde dich an</a></p>
                </div>
                <div class="col-lg-5 p-0">
                    <img src="../images/Old_Lesbians_New.png" class="img-fluid p-0 m-0" alt="Gäste Bild">
                </div>
            </div>
        </div>
    </section>
</body>

</html>