{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Your OYP Code</title>
</head>

<body>
    <p>Your otp code is {{ $otp }}</p>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;

        }

        .header {
            background-color: #ec98c3;
            /* padding: 20px; */
            text-align: center;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 1px;
            padding-bottom: 1px;
        }

        .content {
            padding: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }

        .card-body {
            background-color: #cc98ec;
            padding: 0.5rem;
            border-radius: 0.25rem;
            font-size: 1.25rem;
            height: 60px;
            top: 60px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card"
            style="background-color: white;border: 2px solid #ccc;box-shadow: 0 4px 8px rgba(0,0,0,0.1);border-radius: 8px;justify-content: center;align-items: center;">
            <div class="header">
                <h2>Selamat Datang di <br> Azzahra Marketplace</h2>
            </div>


            <div class="content">
                <h4>Hi,</h4>
                {{-- @if ($statusID == 2) --}}
                <p>Berikut ini adalah kode otp untuk mengakses:</p>
                {{-- @else
                    <p>Berikut ini adalah kode otp untuk registrasi:</p>
                @endif --}}
                <br>
                <div class="card">
                    <center>
                        <div class="card-body">
                            <h3 class="card-title" style="margin-top: 12.4px;margin-bottom: 10.4px;">
                                <b>{{ $otp }}</b>
                            </h3>
                        </div>
                    </center>
                </div>
                <br>
                <p>Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi tim dukungan kami.</p><br>
                <p>Salam hangat,<br><br>Tim Marketplace</p>
            </div>
        </div>
    </div>

</html>
