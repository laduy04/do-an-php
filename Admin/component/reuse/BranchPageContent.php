<?php
require_once($level . XULY_PATH . 'thuonghieu.php');
?>
<div class="container-fluid" style="height: 100vh;">
    <div class="mb-5 mt-3 ">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class=" mb-2">
                                    <h4 class="text-center mt-3 mb-4">Danh sách thương hiệu</h4>
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
                                    <table id="bootstrap-data-table" class="table table-hover table-text-center">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Mã thương hiệu</th>
                                                <th>Tên thương hiệu</th>
                                                <th>Số lượng điện thoại</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="content-table">
                                            <?php
                                            foreach ($dsth as $th) {
                                                echo '<tr>
                                                <td>' . $th['ma_th'] . '</td>
                                                <td>' . $th['ten_thuong_hieu'] . '</td>


                                                <td>' . $th['so_luong_dt'] . '</td>

                                                <td class="row" style="border: none;">
                                                    <button class="edit3 btn btn-danger" data-toggle="modal" data-target="#del" style="margin: auto;" title=' . 'Xóa thương hiệu' . '><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>';
                                            }
                                            ?>
                                            <!-- <tr>
                                                <td>TH01</td>
                                                <td>Apple</td>


                                                <td>10</td>

                                                <td class="row" style="border: none;">
                                                    <button class="edit3 btn btn-danger" data-toggle="modal" data-target="#del" style="margin: auto;" title='Xóa thương hiệu'><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TH02</td>
                                                <td>Samsung</td>


                                                <td>10</td>

                                                <td class="row" style="border: none;">
                                                    <button class="edit3 btn btn-danger" data-toggle="modal" data-target="#del" style="margin: auto;" title='Xóa thương hiệu'><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TH03</td>
                                                <td>Huawei</td>


                                                <td>10</td>

                                                <td class="row" style="border: none;">
                                                    <button class="edit3 btn btn-danger" data-toggle="modal" data-target="#del" style="margin: auto;" title='Xóa thương hiệu'><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TH04</td>
                                                <td>Vivo</td>


                                                <td>10</td>

                                                <td class="row" style="border: none;">
                                                    <button class="edit3 btn btn-danger" data-toggle="modal" data-target="#del" style="margin: auto;" title='Xóa thương hiệu'><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>TH05</td>
                                                <td>OPPO</td>


                                                <td>10</td>

                                                <td class="row" style="border: none;">
                                                    <button class="edit3 btn btn-danger" data-toggle="modal" data-target="#del" style="margin: auto;" title='Xóa thương hiệu'><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TH06</td>
                                                <td>Xiaomi</td>


                                                <td>10</td>

                                                <td class="row" style="border: none;">
                                                    <button class="edit3 btn btn-danger" data-toggle="modal" data-target="#del" style="margin: auto;" title='Xóa thương hiệu'><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>TH07</td>
                                                <td>Realmi</td>


                                                <td>10</td>

                                                <td class="row" style="border: none;">
                                                    <button class="edit3 btn btn-danger" data-toggle="modal" data-target="#del" style="margin: auto;" title='Xóa thương hiệu'><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr> -->
                                        </tbody>
                                    </table>