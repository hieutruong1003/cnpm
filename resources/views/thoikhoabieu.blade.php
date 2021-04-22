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
                <li><button onclick="window.location='/TKB'" style="background-color: gray;">Thời Khóa Biểu</button></li>
                <li><button onclick="window.location='/XD'">Xem Điểm</button></li>
                <li><button onclick="window.location='/TKSV'">Tài Khoản Sinh Viên</button></li>
                <li><button onclick="window.location='/XGXN'">Xin Giấy Xác Nhận</button></li>
                <li><button onclick="window.location='/logout'">Đăng Xuất</button></li>
            </ul>
        </div>

        <div id="right">
            <div style="overflow: hidden;" ><p id="title">THỜI KHÓA BIỂU</p></div>
                        <div id="TKB">
                <p class="text-right">{{session()->get('hoten')}} {{'[ Mã số: '}} {{session()->get('user')}} {{']'}} </p>
                <label class="text-right">Năm học: </label>
                    <select>
                        <option value="1">2017-2018</option>
                        <option value="2">2018-2019</option>
                        <option value="3">2019-2020</option>
                        <option value="4">2020-2021</option>
                        <option value="5">2021-2022</option>
                        <option value="6">2022-2023</option>
                        <option value="7">2023-2024</option>
                    </select>
                <label class="text-right">Học kỳ: </label>
                    <select>
                        <option value="1" >1</option>
                        <option value="2">2</option>
                        <option value="3">Hè</option>
                    </select>
                <label class="text-right">Tuần học: </label>
                    <select id="tuan" onchange="changes()">
                        <option value="">chọn tuần</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                
                <table  id="table-TKB1">
                    <tr>
                        <th>Mã lớp HP</th>
                        <th>Tên học phần</th>
                        <th>Loại học phần</th>
                        <th>STC</th>
                        <th>Lớp học</th>
                        <th>Số tiết</th>
                        <th>Giảng viên</th>
                        <th>Ngày học</th>
                        <th>Buổi</th>
                        <th>Tiết</th>
                        <th>Phòng</th>
                        <th>Thời gian</th>
                    </tr>
                   @foreach($tkb1 as $tkb1)
                    <tr class="one">
                        <td>{{$tkb1->mahp}}</td>
                        <td>{{$tkb1->tenhp}}</td>
                        <td>{{$tkb1->loaihp}}</td>
                        <td>{{$tkb1->sotc}}</td>
                        <td>{{$tkb1->lophoc}}</td>
                        <td>{{$tkb1->sotiet}}</td>
                        <td>{{$tkb1->giangvien}}</td>
                        <td>{{$tkb1->ngayhoc}}</td>
                        <td>{{$tkb1->buoi}}</td>
                        <td>{{$tkb1->tiet}}</td>
                        <td>{{$tkb1->phong}}</td>
                        <td>{{$tkb1->thoigian}}</td>
                    </tr>
                    @endforeach
                    @foreach($tkb2 as $tkb2)
                    <tr class="two">
                        <td>{{$tkb2->mahp}}</td>
                        <td>{{$tkb2->tenhp}}</td>
                        <td>{{$tkb2->loaihp}}</td>
                        <td>{{$tkb2->sotc}}</td>
                        <td>{{$tkb2->lophoc}}</td>
                        <td>{{$tkb2->sotiet}}</td>
                        <td>{{$tkb2->giangvien}}</td>
                        <td>{{$tkb2->ngayhoc}}</td>
                        <td>{{$tkb2->buoi}}</td>
                        <td>{{$tkb2->tiet}}</td>
                        <td>{{$tkb2->phong}}</td>
                        <td>{{$tkb2->thoigian}}</td>
                    </tr>
                    @endforeach
                </table>
                <script type="text/javascript">
                        var tu1 = document.getElementsByClassName('one');
                        var tu2 = document.getElementsByClassName('two');
                        for (let i = tu1.length - 1; i >= 0; i--) {
                            tu1[i].hidden = true;
                        }
                        for (let i = tu2.length - 1; i >= 0; i--) {
                            tu2[i].hidden = true;
                        }
                        function changes(){
                            var tu = document.getElementById('tuan');
                            
                            console.log(tu.value);
                            if(tu.value == 1){
                                for (let i = tu1.length - 1; i >= 0; i--) {
                                    tu1[i].hidden = false;
                                    if(i %2 ==1 ){
                                        tu1[i].style = "background: #cccccc";
                                    }
                                }
                                for (let i = tu2.length - 1; i >= 0; i--) {
                                    tu2[i].hidden = true;
                                }
                                
                            }
                            else{
                                for (let i = tu2.length - 1; i >= 0; i--) {
                                    tu2[i].hidden = false;
                                    if(i %2 ==1 ){
                                        tu2[i].style = "background: #cccccc";
                                    }
                                }
                                for (let i = tu1.length - 1; i >= 0; i--) {
                                    tu1[i].hidden = true;
                                }
                            }
                        }
                </script>
            </div>

        </div>
    </div>
</body>
</html>
