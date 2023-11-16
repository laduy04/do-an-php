<div class="modal fade " id="detail-string" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered detail-attribute" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">

                <table id="bootstrap-data-table" class="table table-hover ">
                    <thead class="thead-light">
                        <tr>
                            <th>Tiêu đề</th>

                            <th data-toggle="tooltip" data-placement="top" title="Số lượng đã bán">Giá trị lọc</th>


                            <th> <button data-toggle="modal" data-target="#add-string-attribute" data-placement="top" data-toggle="tooltip" data-placement="top" title="Thêm sản phẩm" style="margin:0;" class="btn btn-success btn-add"><i class="fas fa-plus-square"></i></button></th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                            <td>Android</td>
                            <td><select class="select-choose">
                                    <option value="Andriod">Android</option>
                                    <option value="IOS">IOS</option>
                                    <option value="Khác">Khác</option>
                                </select> </td>


                            <td class="row" style="border: none;margin: auto; float:right;">

                                <div style="margin: auto;">

                                    <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                </div>

                            </td>
                        </tr>
                        <tr>

                            <td>IOS</td>
                            <td><select class="select-choose">
                                    <option value="IOS">IOS</option>
                                    <option value="Andriod">Android</option>
                                    <option value="Khác">Khác</option>
                                </select> </td>


                            <td class="row" style="border: none;margin: auto;float:right;">

                                <div style="margin: auto;">

                                    <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                </div>

                            </td>
                        </tr>
                        <tr>

                            <td>Khác</td>
                            <td> <select class="select-choose">
                                    <option value="Khác">Khác</option>
                                    <option value="Andriod">Android</option>
                                    <option value="Khác">IOS</option>
                                </select> </td>


                            <td class="row" style="border: none;margin: auto;float:right;">

                                <div style="margin: auto;">

                                    <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                                </div>

                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Lưu lại</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="detail-number" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered detail-attribute" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Lưu lại</button>
            </div>
        </div>
    </div>
</div>