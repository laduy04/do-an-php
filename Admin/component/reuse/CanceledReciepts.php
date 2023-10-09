<div class="container-fluid" style="height: 100vh;">
    <div class="mb-5 mt-3 ">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class=" mb-2">
                                    <h4 class="text-center mt-3 mb-4">Danh sách đơn hàng bị hủy</h4>
                                    <div class="row">
                                        <div class="show-page mb-3 ml-3">
                                            Hiển thị <span> <select id="show" onclick="select_page()">
                                                    <option value="10">
                                                        10
                                                    </option>
                                                    <option value="20">
                                                        20
                                                    </option>
                                                    <option value="50">
                                                        50
                                                    </option>
                                                </select></span> cột
                                        </div>
                                        <div class="show-page " style="margin-left: 50px;">

                                            Tìm kiếm <span> <input id="myInput" style="padding-left: 15px; border: 0.5px solid grey;" type="text" placeholder="Search.."></span>
                                        </div>
                                    </div>
                                    <table id="bootstrap-data-table" class="table  table-hover table-text-center">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Mã đơn hàng</th>
                                                <th>Mã khách hàng</th>
                                                <th>Ngày lập</th>
                                                <th>Chi tiết đơn hàng</th>

                                            </tr>
                                        </thead>
                                        <tbody id="content-table">
                                            <tr>
                                                <td>TH01</td>
                                                <td>KH01</td>
                                                <td>10/10/2020</td>
                                                <td class="detail"><a data-toggle="modal" data-target="#exampleModal" href='#'> Chi tiết <i class="fa fa-external-link-alt"></i></a>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog  detail-modal">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn
                                                                        hàng</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Đơn hàng: DH01</h5>
                                                                    <table width="100%" class="text-center  table content-detail  table-hover">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th>Mã khách hàng</th>
                                                                                <th>Tên khách hàng</th>
                                                                                <th><span title="Số điện thoại">
                                                                                        SDT</span></th>
                                                                                <th style="min-width: 300px;">
                                                                                    Địa chỉ</th>
                                                                                <th> Tên sản phẩm &amp; số
                                                                                    lượng </th>
                                                                                <th>Giá </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tr>


                                                                            <td>KH01</td>
                                                                            <td>Trần Thanh Bảo</td>
                                                                            <td><span title="Số điện thoại">
                                                                                    09128374822</span></td>
                                                                            <td style="min-width: 300px;">
                                                                                Khu phố 6, phường Linh
                                                                                Trung, quận Thủ Đức,TP Hồ
                                                                                Chí Minh</th>
                                                                            <td>
                                                                                <p>Iphone 12 64GB <span class="font-weight-bold">x</span>
                                                                                    2 </p>
                                                                                <p>Iphone X 32GB <span class="font-weight-bold">x</span>
                                                                                    2 </p>
                                                                            </td>
                                                                            <td>
                                                                                <p>24,000,000</p>
                                                                                <p>7,000,000
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <?php
                                            $reciepts = array(
                                                array('id' => 'TH02', 'customer_id' => 'KH02', 'date' => '10/10/2020'),
                                                array('id' => 'TH03', 'customer_id' => 'KH03', 'date' => '10/10/2020'),
                                                array('id' => 'TH04', 'customer_id' => 'KH04', 'date' => '10/10/2020'),
                                            );
                                            foreach ($reciepts as $reciept) {
                                                echo '
                                            <tr>
                                                <td>' . $reciept['id'] . '</td>
                                                <td>' . $reciept['customer_id'] . '</td>
                                                <td>' . $reciept['date'] . '</td>
                                                <td class="detail"><a href="#"> Chi tiết <i class="fa fa-external-link-alt"></i></a></td>
                                            </tr>';
                                            }
                                            ?>
                                    </table>