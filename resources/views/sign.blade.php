<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <link rel="icon"  href="{{URL::asset('img/logo.png')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        
       <div style="background-image: url('https://i1.wp.com/thuvienanh.net/wp-content/uploads/2019/03/hinh-nen-powerpoint-mau-xanh-6.jpeg?resize=2560%2C1440&ssl=1');background-repeat: no-repeat; height: 100vh;margin: 0">
        <div style="height: 50px"></div>
        <div style="height: 80vh; width: 30%;margin:auto;padding: 50px; border: 5px solid #17a2b8!important ; border-radius: 20px">
                  <div class="text-center mb-4">
                    <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/6/64/Logo_dhktdn.png"alt="" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">ĐẠI HỌC KIẾN TRÚC ĐÀ NẴNG</h1>
                    <h4>-----Đăng Nhập-----</h4>
                   
                  </div>
                  <form class="form-signin" action="{{URL::to('/')}}" method="POST">
                  {{ csrf_field() }} 
                    <div class="form-label-group">
                      <label for="Ms">Mã Sinh Viên</label>
                      <input type="text" id="Ms" name="Ms" class="form-control" placeholder="Nhập mã số" required="" autofocus="">
                      
                    </div>

                    <div class="form-label-group">
                       <label for="Password">Mật Khẩu</label>
                      <input type="password" id="Password" name="Password" class="form-control" placeholder="Nhập mật khẩu" required="">
                     
                    </div>

                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Nhớ mật khẩu
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng Nhập</button>
                    <br>
                    <p class="mt-3  text-muted text-center">© 2019-2020</p>
                  </form>


        </div>
      </div>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>

