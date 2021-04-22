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
                <li><button onclick="window.location='/XD'" style="background-color: gray;">Xem Điểm</button></li>
                <li><button onclick="window.location='/TKSV'">Tài Khoản Sinh Viên</button></li>
                <li><button onclick="window.location='/XGXN'">Xin Giấy Xác Nhận</button></li>
                <li><button onclick="window.location='/logout'">Đăng Xuất</button></li>
            </ul>
        </div>

        <div id="right">
            <div style="overflow: hidden;" ><p id="title">XEM ĐIỂM</p></div>
                <div id="XD">
                        <!-- <img src="img/xd.png" alt=""> -->
                    <div class="hieu-content">
                        <p class="text-right">{{session()->get('hoten')}} {{'[ Mã số: '}} {{session()->get('user')}} {{']'}} </p>
                        <table class="table-top">
                            <tr>
                                <td class="canPhai">Chương trình đào tạo:</td>
                                <td> <select name="" id="">
                                    <option value="17ct">17CT</option>
                                </select>
                                </td>
                                <td class="canPhai">Kết quả:</td>
                                <td>
                                    <select name="" id="">
                                        <option value="all" checked>Tất cả</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="canPhai">Năm học:</td>
                                <td> <select name="" id="">
                                    <option value="all">Tất Cả</option>
                                </select>
                                </td>
                                <td class="canPhai">Học Kỳ:</td>
                                <td>
                                    <select name="" id="">
                                        <option value="all" checked>Tất cả</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="4" class="canGiua">
                                    <input  type="radio" name="radio" id="radio0"> <label for="radio0">Môn tích lũy</label>
                                    <input type="radio" name="radio" id="radio1"> <label for="radio1">Tất cả</label>
                                </th>
                            </tr>
                        </table>
                        <hr>
                        <input type="radio" name="thangDiem" id="diem1" checked> <label style="margin: auto;font-size: 15px;" for="diem1"><b><i>Thang điểm 4</i></b></label>
                        <input type="radio" name="thangDiem" id="diem2"> <label  style="margin: auto;font-size: 15px;" class="text-right" for="diem2"><b><i>Thang điểm 10</i></b></label>
                        <p class="text-right">Trung bình toàn khóa:<br>
                        STC bắt buộc tích lũy: 89tc <br>
                        STC tự chọn bắt buộc: 0tc <br>
                        Xếp loại học lực: không xếp loại
                        <hr>
                        <div class="bangDiem">
                            <p class="text-right">Học kỳ 1/năm học:2017-2018</p>
                            <table class="table-diem">
                                <tr>
                                    <th>STT</th>
                                    <th>Mã học phần</th>
                                    <th>Tên học phần</th>
                                    <th>Tín Chỉ</th>
                                    <th>Loại môn học</th>
                                    <th>Điểm</th>
                                    <th>Điểm chữ</th>
                                    <th>Kết quả</th>
                                    <th>Chi tiết</th>
                                </tr>
                               
                                @foreach($diemHK1 as $diemHK1)
                                <tr>
                                    <td>{{ $diemHK1->stt }}</td>
                                    <td>{{$diemHK1->mahp}}</td>
                                    <td>{{$diemHK1->tenhp}}</td>
                                    <td>{{$diemHK1->tinchi}}</td>
                                    <td>{{$diemHK1->loaimonhoc}}</td>
                                    <td>{{$diemHK1->diemso}}</td>
                                    <td>{{$diemHK1->diemchu}}</td>
                                    <td>{{$diemHK1->ketqua}}</td>
                                    <td style="text-align: center"><a href="#">chi tiết</a></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="canPhai" colspan="4">STC Đậu(18)+STC Rớt(0) = </td>
                                    <td><b>18</b></td>
                                    <td class="canTrai" colspan="6">Điểm trung bình: 4.0</td>
                                </tr>
                                <tr>
                                    <td class="canPhai" colspan="4">Điểm rèn luyện =  </td>
                                    <td><b>90</b></td>
                                    <td class="canTrai" colspan="6">Xếp loại: Xuất sắc</td>
                                </tr>
                            </table>
                            <br>
                            <hr>
                                                       <!-- Học kỳ 2-->
                            <p class="text-right">Học kỳ 2/năm học:2017-2018</p>
                            <table class="table-diem">
                                <tr>
                                    <th>STT</th>
                                    <th>Mã học phần</th>
                                    <th>Tên học phần</th>
                                    <th>Tín Chỉ</th>
                                    <th>Loại môn học</th>
                                    <th>Điểm</th>
                                    <th>Điểm chữ</th>
                                    <th>Kết quả</th>
                                    <th>Chi tiết</th>
                                </tr>
                               <!--  @$sttHK2 = 1;
                                @$tongdiemHK2 = 0; -->
                                @foreach($diemHK2 as $diemHK2)
                                <tr>
                                    <td>{{ $diemHK2->stt }}</td>
                                    <td>{{$diemHK2->mahp}}</td>
                                    <td>{{$diemHK2->tenhp}}</td>
                                    <td>{{$diemHK2->tinchi}}</td>
                                    <td>{{$diemHK2->loaimonhoc}}</td>
                                    <td>{{$diemHK2->diemso}}</td>
                                    <td>{{$diemHK2->diemchu}}</td>
                                    <td>{{$diemHK2->ketqua}}</td>
                                    <td style="text-align: center"><a href="#">chi tiết</a></td>
                                </tr>
                                    
                                @endforeach
                                <tr>
                                    <td class="canPhai" colspan="4">STC Đậu(18)+STC Rớt(0) = </td>
                                    <td><b>18</b></td>
                                    <td class="canTrai" colspan="6">Điểm trung bình: 3.3
                                    </td>
                                </tr>
                                <tr>
                                    <td class="canPhai" colspan="4">Điểm rèn luyện =  </td>
                                    <td><b>90</b></td>
                                    <td class="canTrai" colspan="6">Xếp loại: Xuất sắc</td>
                                </tr>
                            </table>
                            <br>
                          
                            </table>
                            <br>
                            <hr>
                        </div>
                        <h4>*Hướng dẫn:</h4> 
                        <p>+ Sinh viên  khóa I (2006); II (2007); III (2008); IV (2009) chọn thang điểm 10 theo niên chế</p>
                        
                        <p>+ Sinh viên  khóa V (2010) trở về sau chọn thang điểm 4 theo học chế tín chỉ</p>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>
