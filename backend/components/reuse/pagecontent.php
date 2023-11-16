<?php
require_once $level . XULY_PATH . 'dsbinhluan.php';

if (isset($_GET['btn_search']) && ($_GET['btn_search']) > 0) {
  $search = $_GET['search'];
  $sql = "SELECT * FROM comments WHERE `id` = '$search' OR comments.`username` LIKE '%$search%'";
  $dsbl = $pdo->query($sql);
}
?>

<div id="page-content-wrapper">
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-primary" id="menu-toggle">
      <i class="fas fa-bars"></i>
    </button>
    <div class="">

    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#log-out">Đăng xuất <span class="log-out"><i class="fas fa-arrow-right"></i></span></a>
        </li>
        <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> -->
      </ul>
      <div class="modal fade" id="log-out" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận đăng xuất</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Bạn có muốn đăng xuất?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
              <button type="button" class="btn btn-primary">Đăng xuất</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="mb-5 mt-3 ">
      <div class="content">
        <div class="animated fadeIn">
          <div class="row">

            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class=" mb-2">
                    <h4 class="text-center mt-3 mb-4">Bình luận khách hàng</h4>
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

                      <div class="show-page  arrange">

                        Sắp xếp <span> <select id="show" onclick="select_page()">
                            <option value="10">
                              A-Z
                            </option>
                            <option value="20">
                              Z-A
                            </option>
                          </select></span>
                      </div>
                      <div class="show-page  arrange">

                        <form action="feedback.php" method="get">
                          <span> <input name="search" id="myInput" style="padding-left: 15px; border: 0.5px solid grey;" text" placeholder="Search.." value="<?php if (isset($_GET['search-btn'])) {
                                                                                                                                                                echo $_GET['search'];
                                                                                                                                                              } ?>"></span>
                          <input type="submit" name="btn_search" value="search">
                      </div>
                      </form>
                    </div>
                    <table id="bootstrap-data-table" class="table table-hover table-text-center">
                      <thead class="thead-light">
                        <tr>
                          </th>
                          <th>ID</th>
                          <th>Tên người dùng</th>
                          <th>Bình luận</th>
                          <th>Được tạo lúc</th>
                          <th>Mã người dùng</th>
                          <th>Hình ảnh</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody id="content-table">
                        <?php foreach ($dsbl as $bl) { ?>
                          <tr>
                            <td><?php echo $bl['id'] ?></td>
                            <td><?php echo $bl['username'] ?></td>
                            <td><?php echo $bl['comment_text'] ?></td>
                            <td><?php echo $bl['created_at'] ?></td>
                            <td><?php echo $bl['user_id'] ?></td>
                            <td><img src=<?php echo "../images/" . $bl['image'] ?> alt=""></td>
                            <td><a href="../features/xoabinhluan.php?id= <?php echo $bl['id'] ?>"><button class="btn btn-danger sizeTh1" data-toggle="modal" data-target="#delete" data-placement="top" title="Xóa"><i class="txt-center menu-icon fas fa-trash-alt"></i></button></a></td>
                          </tr>
                        <?php } ?>
                      </tbody>

                    </table>

                    <div class="page-navigation">
                      <div class="beta"> <button onclick="previous_page()"> Trước</button>
                        <span id="page-number">

                        </span>
                        <button onclick="next_page()"> Sau</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div><!-- .animated -->
        </div><!-- .content -->



        <!-- Add -->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Lưu</button>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /#right-panel -->
    </div>
  </div>
  <!-- /#page-content-wrapper -->

</div>