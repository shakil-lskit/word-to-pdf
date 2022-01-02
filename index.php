<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word to pdf converter</title>
    <style>
        .form-wrapper {
            background: #398CDF;
            width: 520px;
            height: 420px;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            flex-direction: column;
        }

        .form-wrapper h2 {
            color: #fff;
        }

        .form-wrapper .file-sec {
            width: 200px;
            background: #fff;
            border-radius: 5px;
            margin-bottom: 10px;
            position: relative;
            display: flex;
            align-items: center;
            padding: 13px;
        }

        .form-wrapper .file-sec label {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .form-wrapper .file-sec input {
            cursor: pointer;
            position: absolute;
            opacity: 0;
            height: 100%;
            width: 100%;
            left: 0;
        }

        .form-wrapper .submit-sec input {
            border: 2px solid #fff;
            padding: 6px 20px;
            background: transparent;
            color: #fff;
            border-radius: 5px;
            font-size: 17px;
            cursor: pointer;
        }

        @media (max-width: 576px) {
            .form-wrapper {
                width: 98%;
            }
        }
    </style>
</head>

<body>
    <section class="form-wrapper">
        <h2>Word to Pdf converter</h2>
        <form action="convert.php" method="post" enctype="multipart/form-data">
            <div class="file-sec">
                <label for=""><img src="icon.png" alt="#"> Upload File</label>
                <input type="file" name="myfile" placeholder="Upload File">
            </div>
            <div class="submit-sec">
                <input type="submit" value="Convert">
            </div>
        </form>
    </section>
</body>

</html>
