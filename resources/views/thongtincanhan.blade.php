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
            <img src="{{ URL::asset('img/dau.jpg')}}">
            <div>
                <table>
                <tr>
                    <th width="25%"></th>
                    <th class="hll" ><a href="/">Trang chủ </a></th>
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
                <li><button onclick="window.location='/TTCN'" style="background-color: gray;">Thông Tin Cá Nhân</button></li>
                <li><button onclick="window.location='/TKB'">Thời Khóa Biểu</button></li>
                <li><button onclick="window.location='/XD'">Xem Điểm</button></li>
                <li><button onclick="window.location='/TKSV'">Tài Khoản Sinh Viên</button></li>
                <li><button onclick="window.location='/XGXN'">Xin Giấy Xác Nhận</button></li>
                <li><button onclick="window.location='/logout'">Đăng Xuất</button></li>
            </ul>
        </div>

        <div id="right">
            <div style="overflow: hidden;" ><p id="title">THÔNG TIN CÁ NHÂN</p></div>
            <div id="TTCN">
                @foreach($ttcn as $ttcn)
                
                    <table id="table1" border="1" style="width: 49%; float: left;">
                        <tr>
                            <td colspan="3" style="width:30%;" height="40"  bgcolor="red" class="titlebar" align="center">
                                THÔNG TIN SINH VIÊN         
                            </td>
                        </tr>
                        <tr >
                            <tr>
                                <td style="width: 50px">Mã sinh viên</td>
                                <td style="width:50%; color: blue;" >{{  $ttcn->masv }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Họ và tên</td>
                                <td style="color: blue;">{{  $ttcn->hovaten }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Ngày sinh</td>
                                <td style="color: blue;">{{  $ttcn->ngaysinh }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Nơi sinh</td>
                                <td style="color: blue;">{{  $ttcn->noisinh }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Giới tính</td>
                                <td style="color: blue;">{{  $ttcn->gioitinh }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Dân tộc</td>
                                <td style="color: blue;">{{  $ttcn->dantoc }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Số CMND</td>
                                <td style="color: blue;">{{  $ttcn->cmnd }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Tôn giáo</td>
                                <td style="color: blue;">{{  $ttcn->tongiao }}</td>
                            </tr>
                            <tr>
                                <td>Đối tượng</td>
                                <td style="color: blue;">{{  $ttcn->doituong }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Khu vực</td>
                                <td style="color: blue;">{{  $ttcn->khuvuc }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Diện ưu tiên</td>
                                <td style="color: blue;">{{  $ttcn->dienuutien }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Đoàn/Đảng</td>
                                <td style="color: blue;">{{  $ttcn->doandang }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Ngày vào</td>
                                <td style="color: blue;">{{  $ttcn->ngayvao }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Loại sinh viên</td>
                                <td style="color: blue;">{{  $ttcn->loaisv }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Tình trạng học</td>
                                <td style="color: blue;">{{  $ttcn->tinhtranghoc }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Tỉnh/Thành phố</td>
                                <td style="color: blue;">{{  $ttcn->tinh_tp }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Quận/Huyện</td>
                                <td style="color: blue;">{{  $ttcn->quan_huyen }}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Quốc gia</td>
                                <td style="color: blue;">{{  $ttcn->quocgia }}</td>
                            </tr>           
                        </tr>
                    </table>
                @endforeach
                @foreach($ttcnLL as $ttcnLL)
                    <table id="table3" border="1" style="width:49%;float: left;">
                        <tr>
                            <td colspan="2" style="width:30%;" height="40"  bgcolor="#0175b2" class="titlebar" align="center">
                                THÔNG TIN LIÊN LẠC</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="color: red; font-size: 15px;">* Thông tin liên lạc của sinh viên</td>
                            
                            
                        </tr>
                        <tr>
                            
                            <td colspan="2" style="text-align: center">
                                <img src="{{ URL::asset('img/avatar.jpg')}}" width="100" >
                            </td>
                        </tr>
                        <tr>
                            <td> Điện thoại</td>
                            <td style="color: blue;">{{$ttcnLL->dienthoai}}</td>
                        </tr>
                        <tr>
                            <td> Di động</td>
                            <td style="color: blue;">{{$ttcnLL->didong}}</td>
                        </tr>
                        <tr>
                            <td> Email</td>
                            <td style="color: blue;">{{$ttcnLL->email}}</td>
                        </tr>
                        <tr>
                            <td> Địa chỉ</td>
                            <td style="color: blue;">{{$ttcnLL->diachi}}</td>
                        </tr>
                        <tr>
                            <td> Ghi chú</td>
                            <td style="color: blue;"></td>
                        </tr>
                        <tr>
                            <td colspan="3" style="color: red; font-size: 15px;">* Thông tin liên lạc người thân của sinh viên (khi không liên lạc được với sinh viên)</td>
                        </tr>
                        <tr>
                            <td> Họ tên</td>
                            <td style="color: blue;">{{$ttcnLL->hotennguoithan}}</td>
                        </tr>
                        <tr>
                            <td> Điện thoại</td>
                            <td style="color: blue;">{{$ttcnLL->dienthoainguoithan}}</td>
                        </tr>
                        <tr>
                            <td> Địa chỉ</td>
                            <td style="color: blue;">{{$ttcnLL->diachinguoithan}}</td>
                        </tr>
                    </table>

                    <table id="table4" style="width: 49%; float: left;">
                        <tr>
                            <td >
                               <!-- Đổi mật khẩu -->
                               <button type="button" style="background-color: #0175b2;">Đổi mật khẩu</button>
                            </td>
                               <td >
                                <!-- Cập nhật -->
                                <button type="button" style="background-color: #0175b2;">Cập nhật</button> 
                            </td>   
                        </tr>
                    </table>
                @endforeach
                @foreach($ttcnKH as $ttcnKH)
                    <table id="table2" border="1" style="width: 49%; clear: both;" >
                        <tr>
                            <td colspan="3" style="width:30%;" height="40"  bgcolor="red" class="titlebar" align="center">
                                THÔNG TIN KHÓA HỌC</td>
                        </tr>
                        <tr class="ttsv">
                            <tr>
                                <td style="width: 50px">Khóa học</td>
                                <td style="width:50%; color: blue;" >{{$ttcnKH->khoahoc}}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Niên Khóa</td>
                                <td style="color: blue;">{{$ttcnKH->nienhoc}}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Năm nhập học</td>
                                <td style="color: blue;">{{$ttcnKH->namnhaphoc}}</td>
                            </tr>
                            <tr>
                                <td style="width: 150px">Năm hết thời gian đào tạo</td>
                                <td style="color: blue;">{{$ttcnKH->namhethan}}</td>
                            </tr>  
                            <tr>
                                <td style="width: 150px">Chương trình đào tạo</td>
                                <td style="color: blue;">{{$ttcnKH->chuongtrinhdaotao}}</td>
                            </tr> 
                            <tr>
                                <td style="width: 150px">Lớp sinh viên</td>
                                <td style="color: blue;">{{$ttcnKH->lop}}</td>
                            </tr> 
                            <tr>
                                <td style="width: 150px">Chức vụ</td>
                                <td style="color: blue;">{{$ttcnKH->chucvu}}</td>
                            </tr>  
                            <tr>
                                <td style="width: 150px">Tên cố vấn học tập</td>
                                <td style="color: blue;">{{$ttcnKH->tencovan}}</td>
                            </tr>  
                            <tr>
                                <td style="width: 150px">Điện Thoại cố vấn</td>
                                <td style="color: blue;">{{$ttcnKH->dienthoaicovan}}</td>
                            </tr>  
                            <tr>
                                <td style="width: 150px">Email cố vấn </td>
                                <td style="color: blue;">{{$ttcnKH->emailcovan}}</td>
                            </tr>  
                    </table>
                @endforeach
            </div>

        </div>
    </div>
</body>
</html>
