<div class="container-fluid" style="height: 100vh;">
    <div class="mb-5 mt-3 ">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class=" mb-2">
                                    <h4 class="text-center mt-3 mb-4">Thông tin dữ liệu được lọc</h4>
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
                                            Tìm kiếm <span> <input id="myInput" style="padding-left: 15px; border: 0.5px solid grey;" placeholder="Search.."></span>
                                        </div>
                                    </div>