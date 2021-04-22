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
        <!-- Styles -->
       

    </head>
<body>
     @if(!session()->exists('user'))
        <script type="text/javascript">
            alert("Bạn cần đăng nhập ."); 
            window.location='/login';
        </script>

    @endif
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
                     @if(session()->exists('user'))
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
                <li><button onclick="window.location='/TTCN'" >Thông Tin Cá Nhân</button></li>
                <li><button onclick="window.location='/TKB'">Thời Khóa Biểu</button></li>
                <li><button onclick="window.location='/XD'" >Xem Điểm</button></li>
                <li><button onclick="window.location='/TKSV'" >Tài Khoản Sinh Viên</button></li>
                <li><button onclick="window.location='/XGXN'" style="background-color: gray;">Xin Giấy Xác Nhận</button></li>
                <li><button onclick="window.location='/logout'">Đăng Xuất</button></li>
            </ul>
        </div>

        <div id="right">
            <div style="overflow: hidden;" ><p id="title">XIN GIẤY XÁC NHẬN</p></div>
            <div id="XGXN">
                <p class="text-right">{{session()->get('hoten')}} {{'[ Mã số: '}} {{session()->get('user')}} {{']'}}</p>
                <div id="dau">
                        <label class="text-right">Năm học: </label>
                                <select name="sltSpecial">
                                    <option value="1">2017-2018</option>
                                    <option value="2">2018-2019</option>
                                    <option value="3">2019-2020</option>
                                    <option value="4">2020-2021</option>
                                    <option value="5">2021-2022</option>
                                    <option value="6">2022-2023</option>
                                    <option value="7">2023-2024</option>
                                </select>
                </div>
                <div id="dau2">
                    <table>
                        <tr>
                            <th>Mã Số</th>
                            <th>Nội Dung</th>
                            <th>Lần 1</th>
                            <th>Lần 2</th>
                            <th>Lần 3</th>
                        </tr>
                        <tr style="background: #cccccc ">
                            <td >1</td>
                            <td >Giấy Vay Vốn</td>
                            <td ><input type="checkbox" name="">Xác Nhận</td>
                            <td ><input type="checkbox" name="">Xác Nhận</td>
                            <td ><input type="checkbox" name="">Xác Nhận</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Giấy Xác Nhận Sinh Viên</td>
                            <td><input type="checkbox" name="">Xác Nhận</td>
                            <td><input type="checkbox" name="">Xác Nhận</td>
                            <td><input type="checkbox" name="">Xác Nhận</td>
                        </tr>
                        <tr style="background: #cccccc ">
                            <td>3</td>
                            <td>Bảng Điểm</td>
                            <td><input type="checkbox" name="">Xác Nhận</td>
                            <td><input type="checkbox" name="">Xác Nhận</td>
                            <td><input type="checkbox" name="">Xác Nhận</td>
                        </tr>
                    </table>
                </div>
                <div style="text-align: right;">
                    <button style="width: 15%">Lưu dữ liệu</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
