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
                <li><button onclick="window.location='/TKSV'" style="background-color: gray;">Tài Khoản Sinh Viên</button></li>
                <li><button onclick="window.location='/XGXN'">Xin Giấy Xác Nhận</button></li>
                <li><button onclick="window.location='/logout'">Đăng Xuất</button></li>
            </ul>
        </div>

        <div id="right">
            <div style="overflow: hidden;" ><p id="title">TÀI KHOẢN SINH VIÊN</p></div>
            
            <div id="TKSV">
                <p class="text-right">{{session()->get('hoten')}} {{'[ Mã số: '}} {{session()->get('user')}} {{']'}}</p>
                    <table>
                        <tr>
                            <th colspan="2" class="text-right">THÔNG TIN TÀI KHOẢN SINH VIÊN</th>
                        </tr>
                        <tr>
                            <td>Mã Tài Khoản : <font color="blue">{{session()->get('user')}}</font> </td>
                            <td>Số Tài Khoản : <font color="blue">{{session()->get('user')}}</font> </td>
                        </tr>
                        <tr>
                            <td>Số Ngày Cấp : <font color="blue">09/08/2017</font> </td>
                            <td>Ngày Cập Nhật : <font color="blue">09/08/2017</font> </td>
                        </tr>
                        <tr>
                            <td>Tình Trạng Tài Khoản : <font color="blue">Đang Sử Dụng</font> </td>
                            <td>Tên Chủ Thẻ : <font color="blue">{{session()->get('hoten')}}</font> </td>
                        </tr>
                        <tr>
                            <td>Ngày Hết Hạn : <font color="blue">09/08/2017</font> </td>
                            <td>Ngày Cập Nhật : <font color="blue">155</font> </td>
                        </tr>
                    </table>
                    <label class="text-right">Năm học</label>
                        <select name="sltKehoach">  
                            <option>2017-2018</option>
                            <option>2018-2019</option>
                            <option>2019-2020</option>
                        </select>
                    <label class="text-right"> Học Kì </label>
                        <select name="sltKehoach">  
                            <option>HK1</option>
                            <option>HK2</option>
                            <option>HK3</option>
                        </select>
                <div id="container_TU">
                    <table border="1">
                        <tr>
                            <th>STT</th>
                            <th>Loại Phí</th>   
                            <th>Tên phí</th>
                            <th>Số tiền phải đóng</th>
                            <th>Ngày ghi nợ</th>
                            <th>Số tiền đã đóng/giảm</th>
                            <th>Ngày đóng</th>
                            <th>Còn nợ</th>
                        </tr>
                        
                        <tr style="background: #cccccc ">
                            <td>1</td>
                            <td>Lệ phí xét tuyển</td>   
                            <td>Lệ phí xét tuyển</td>
                            <td>30,000</td>
                            <td></td>
                            <td>30,000</td>
                            <td>2017-08-09</td>
                            <td>0</td>
                        </tr>
                        <tr >
                            <td>2</td>
                            <td>Phí khám sức khỏe</td>  
                            <td>Phí khám sức khỏe</td>
                            <td>35,000</td>
                            <td></td>
                            <td>35,000</td>
                            <td>2017-08-09</td>
                            <td>0</td>
                        </tr>
                        
                        <tr style="background: #cccccc ">
                            <td>3</td>
                            <td>Bảo hiểm y tế</td>  
                            <td>Bảo hiểm y tế</td>
                            <td>657,000</td>
                            <td></td>
                            <td>657,000</td>
                            <td>2018-09-11 7:44:00 AM</td>
                            <td>0</td>
                        </tr>
                        <tr >
                            <td>4</td>
                            <td>Học phí</td>    
                            <td>Học phí Học Kỳ 7</td>
                            <td>7,250,000</td>
                            <td></td>
                            <td>7,250,000</td>
                            <td>2018-09-11 7:44:00 AM</td>
                            <td>0</td>  
                        </tr>
                        <tr style="background: #cccccc ">
                                
                            <td colspan="3" style="text-align: right;">Tổng phải đóng</td>
                            <td>7,907,000</td>
                            <td>Tổng đã đóng</td>
                            <td>7,907,000</td>
                            <td>Tổng nợ</td>
                            <td>0</td>    
                        </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
