<a><button data-target="#add-attribute" data-toggle="modal" data-toggle="tooltip" style="margin-right: 10px;" data-placement="top" title="Thêm thuộc tính" class="btn btn-success btn-add"><i class="fas fa-plus-square"></i></button></a>
<table id="bootstrap-data-table" class="table table-hover">
    <thead class="thead-light">
        <tr>
            <th>Tên thuộc tính</th>

            <th data-toggle="tooltip" data-placement="top" title="">Loại giá trị lọc
            </th>

            <th data-toggle="tooltip" data-placement="top" title="">Chi tiết</th>
            <th></th>
        </tr>
    </thead>

    <tbody id="content-table">
        <tr>

            <td>Hệ điều hành</td>
            <td>Chuỗi</td>
            <td> <a href='#' data-target="#detail-string" data-toggle="modal" data-toggle="tooltip" data-placement="top"> Chi tiết <i class="fa fa-external-link-alt"></i></a> </td>


            <td class="row" style="margin: auto;float:right">

                <div style="margin: auto;">

                    <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                </div>

            </td>
        </tr>
        <tr>

            <td>Kích cỡ màn hình</td>
            <td>Số</td>
            <td> <a href='#' data-target="#detail-number" data-toggle="modal" data-toggle="tooltip" data-placement="top"> Chi tiết <i class="fa fa-external-link-alt"></i></a> </td>


            <td class="row" style="border: none;margin: auto;float:right">

                <div style="margin: auto;">

                    <button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete" data-toggle="tooltip" data-placement="top" title="Xóa"><i class="txt-center menu-icon fas fa-trash-alt"></i></button>
                </div>

            </td>
        </tr>
    </tbody>
</table>