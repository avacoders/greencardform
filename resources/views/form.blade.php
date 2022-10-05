<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GREEN CARD - PERFECTOCONSULTING</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        body {
            background-image: url("/img/image.webp");
            background-size: cover;
            background-position: right;
            background-repeat: no-repeat;
        }

        section {
            margin: 0 auto;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.6);
        }
        .name{
            text-transform: capitalize;
        }
    </style>

</head>
<body>


<section>

    <div class="container h-100 py-5">
        <div class="row h-100 justify-content-center align-items-center align-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">GREEN CARD uchun RO'YXATDAN O'TISH</div>
                    <div class="card-body">
                        <form action="{{ route("greencard") }}"  method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Ism va Familiya</label>
                                <input type="text" name="name" placeholder="Azizov Aziz" value="{{ old('name') }}" class="form-control name @error("phone") border-danger @enderror" id="name"
                                       aria-describedby="emailHelp">
                                @error('name')
                                <small id="nameError" class="form-text text-danger">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="phone">Telefon raqam</label>
                                <input type="text" name="phone" placeholder="+998 00 000-00-00" value="{{ old('phone') }}" class="form-control @error("phone") border-danger @enderror" id="phone">
                                @error('phone')
                                <small id="phoneError" class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Yuborish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

@include('sweetalert::alert')

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
<script src="{{ asset("js/imask.js") }}"></script>
<script src="{{ asset("js/main.js") }}"></script>

</body>
</html>
