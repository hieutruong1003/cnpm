<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Phòng Đào Tạo</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <!-- <script src="js/hideshow.js"></script> -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css' )}}">
        <link rel="icon"  href="{{URL::asset('img/logo.png')}}">

    </head>
<body>
    <div class="header">
            <img src="{{ URL::asset('img/dau.jpg' )}}">
            <div>
                <table>
                <tr>
                    <th width="25%"></th>
                    <th class="hll" ><a href="#">Trang chủ </a></th>
                    <th class="hll" ><a href="#">Chương trình đào tạo </a></th>
                    <th class="hll" ><a href="#">Môn học/học phần </a></th>
                    <th class="hll" ><a href="#">Qui chế,qui định </a></th>
                    <th width="17%">
                     
                    </th>
                    @if(!session()->exists('user'))
                    <th class=" butLogin" ><button style="height: 80%;width: 100%;" onclick="window.location='/login'">Đăng nhập</button></th>
                    @else
                    <th class=" butLogin" ><button style="height: 80%;width: 100%;" onclick="window.location='/logout'">Đăng xuất</button></th>
                    @endif
                    <th width="8%"></th>
                </tr>
                </table>
            
            </div>
    </div>

    <div class="content">
        <div id="left">
            <ul>
                <li><button onclick="window.location='/TTCN'">Thông Tin Cá Nhân</button></li>
                <li><button onclick="window.location='/TKB'">Thời Khóa Biểu</button></li>
                <li><button onclick="window.location='/XD'">Xem Điểm</button></li>
                <li><button onclick="window.location='/TKSV'">Tài Khoản Sinh Viên</button></li>
                <li><button onclick="window.location='/XGXN'">Xin Giấy Xác Nhận</button></li>
                <li><button onclick="window.location='/logout'">Đăng Xuất</button></li>
            </ul>
        </div>

        <div id="right">
            <div style="overflow: hidden;" ><p id="title">Xin chào {{session()->get('hoten')}}!!! <img src="img/icon.webp" width="15px" style="padding-left: 1%; align-items: center; margin-top: 1%;">    </p> </div>
        </div>
    </div>
</body>
</html>
