@extends('share.master')
@section('noi_dung')
    <div id="app">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Danh Sách Nhân Viên</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#ThemMoiModal">
                                        Thêm Mới Nhân Viên
                                    </button>
                                </div>
                            </ol>
                        </div><!-- /.col -->
                        <div class="modal fade" id="ThemMoiModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Nhân Viên</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label class="mb-2">Mã Nhân Viên</label>
                                                <input v-model="them_moi.ten_phim" type="text" class="form-control" placeholder="Nhập vào Mã Nhân Viên">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Tên Nhân Viên</label>
                                                <input v-model="them_moi.slug_phim" type="text" class="form-control" placeholder="Nhập vào Tên Nhân Viên">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Hình Ảnh</label>
                                                <input v-model="them_moi.hinh_anh" type="text" class="form-control" placeholder="Nhập vào ảnh đại diện">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Căng Cước Công Dân</label>
                                                <input v-model="them_moi.dao_dien" type="text" class="form-control" placeholder="Nhập vào danh sách đạo diễn">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <label class="mb-2">Giới Tính</label>
                                                <input v-model="them_moi.dien_vien" type="text" class="form-control" placeholder="Nhập vào danh sách diễn viên">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Ngày Sinh</label>
                                                <input v-model="them_moi.the_loai" type="text" class="form-control" placeholder="Nhập vào Họ Tên Nhân Viên">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Quê Quán</label>
                                                <input v-model="them_moi.thoi_luong" type="number" class="form-control" placeholder="Nhập vào số phút chiếu">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Ngôn Ngữ</label>
                                                <input v-model="them_moi.ngon_ngu" type="text" class="form-control" placeholder="Nhập vào ngôn ngữ">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-3">
                                                <label class="mb-2">Tình Trạng</label>
                                                <select v-model="them_moi.hien_thi" class="form-control">
                                                    <option value="1">Đang Làm</option>
                                                    <option value="0">Nghỉ Việc</option>
                                                </select>
                                            </div>
                                            <div class="col-9">
                                                <label class="mb-2">Mô Tả</label>
                                                <textarea id="mo_ta" name="mo_ta" class="form-control" cols="30" rows="5" placeholder="Nhập vào mô tả phim"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button v-on:click="themPhim()" type="button" class="btn btn-primary">Thêm Nhân Viên</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col">
                        <div class="card border-primary border-bottom border-3 border-0">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="tableA" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Mã Nhân Viên</th>
                                                    <th class="text-center">Họ Tên Nhân Viên</th>
                                                    <th class="text-center">Hình Ảnh</th>
                                                    <th class="text-center">Căng Cước Công Dân</th>
                                                    <th class="text-center">Giới Tính</th>
                                                    <th class="text-center">Ngày Sinh</th>
                                                    <th class="text-center">Quê Quán</th>
                                                    <th class="text-center">Tình Trạng</th>
                                                    <th class="text-center">Chi Tiết</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <template v-for="(value, key) in list_phim">
                                                    <tr>
                                                        <th class="text-center align-middle">@{{key + 1}}</th>
                                                        <td class="align-middle">@{{value.ten_phim}}</td>
                                                        <td class="align-middle">@{{value.the_loai}}</td>
                                                        <td class="align-middle text-center">
                                                            <img class="rounded-circle p-1 border" width="90px" height="90px" v-bind:src="value.hinh_anh" alt="">
                                                        </td>
                                                        <td class="text-nowrap align-middle">
                                                            @{{value.thoi_luong}} phút
                                                        </td>
                                                        <td class="text-nowrap align-middle text-center">
                                                            <button class="btn btn-primary">Phim Đang Chiếu</button>
                                                        </td>
                                                        <td class="text-nowrap align-middle text-center">
                                                            <button v-on:click="doiTrangThai(value)" v-if="value.hien_thi == 1" class="btn btn-primary">Hiển Thị</button>
                                                            <button v-on:click="doiTrangThai(value)" v-else class="btn btn-warning">Tạm Tắt</button>
                                                        </td>
                                                        <td class="text-nowrap align-middle text-center">
                                                            <button v-on:click="editPhim(value)"  data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-info">Cập Nhật</button>
                                                            <button v-on:click="tt_xoa = value"  data-bs-toggle="modal" data-bs-target="#delModal" class="btn btn-danger">Hủy Bỏ</button>
                                                        </td>
                                                    </tr>
                                                </template>
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa Phim</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="alert alert-warning border-0 bg-warning alert-dismissible fade show py-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="font-35 text-dark"><i class='bx bx-info-circle'></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 text-dark">Warning Alerts</h6>
                                                <input type="hidden" id="id_xoa">
                                                            <div class="text-dark">Bạn có chắc chắn muốn xóa phim <b  class="text-danger">@{{tt_xoa.ten_phim}}</b> này không!</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button v-on:click="xoaPhim()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Xác Nhận Xóa</button>
                                            </div>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-fullscreen">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Cập Nhật Phim</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row mb-2">
                                                        <div class="col">
                                                            <label class="mb-2">Mã Nhân Viên</label>
                                                            <input v-model="edit.ten_phim" type="text" class="form-control" placeholder="Nhập vào Mã Nhân Viên">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Tên Nhân Viên</label>
                                                            <input v-model="edit.slug_phim" type="text" class="form-control" placeholder="Nhập vào Tên Nhân Viên">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Hình Ảnh</label>
                                                            <input v-model="edit.hinh_anh" type="text" class="form-control" placeholder="Nhập vào ảnh đại diện">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Tên Đạo Diễn</label>
                                                            <input v-model="edit.dao_dien" type="text" class="form-control" placeholder="Nhập vào danh sách đạo diễn">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col">
                                                            <label class="mb-2">Diễn Viên</label>
                                                            <input v-model="edit.dien_vien" type="text" class="form-control" placeholder="Nhập vào danh sách diễn viên">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Họ Tên Nhân Viên</label>
                                                            <input v-model="edit.the_loai" type="text" class="form-control" placeholder="Nhập vào Họ Tên Nhân Viên">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Thời Lượng Chiếu</label>
                                                            <input v-model="edit.thoi_luong" type="number" class="form-control" placeholder="Nhập vào số phút chiếu">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Ngôn Ngữ</label>
                                                            <input v-model="edit.ngon_ngu" type="text" class="form-control" placeholder="Nhập vào ngôn ngữ">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col">
                                                            <label class="mb-2">Rated</label>
                                                            <input v-model="edit.rated" type="text" class="form-control" placeholder="Nhập vào Rated">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Link youtube</label>
                                                            <input v-model="edit.trailer" type="text" class="form-control" placeholder="Nhập vào link youtube">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Thời Gian Bắt Đầu</label>
                                                            <input v-model="edit.bat_dau" type="date" class="form-control" placeholder="Nhập vào số phút chiếu">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Thời Gian Kết Thúc</label>
                                                            <input v-model="edit.ket_thuc" type="date" class="form-control" placeholder="Nhập vào ngôn ngữ">
                                                        </div>

                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <label class="mb-2">Tình Trạng</label>
                                                            <select v-model="edit.hien_thi" class="form-control">
                                                                <option value="1">Hiển Thị Trang Chủ</option>
                                                                <option value="0">Không Hiển thị</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-9">
                                                            <label class="mb-2">Mô Tả</label>
                                                            <textarea id="e_mo_ta" name="mo_ta" class="form-control" cols="30" rows="5" placeholder="Nhập vào mô tả phim"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button v-on:click="capNhatPhim()" type="button" class="btn btn-primary">Cập Nhật Phim</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
@endsection
@section('js')
{{-- <script>
    $(document).ready(function() {
        new Vue({
            el      :       '#app',
            data    :       {
                them_moi        :       {'is_block' : 1, 'tinh_trang' : 1},
                list_tai_khoan  :       [],
                tt_xoa          :       {},
                tt_cap_nhat     :       {},
            },
            created()       {
                this.loadData();
            },
            methods:        {
                themTaiKhoan() {
                    axios
                        .post('{{ Route("taiKhoanStore") }}', this.them_moi)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message, 'Success');
                                $('#themAccModal').modal('hide');
                                this.them_moi   = {'is_block' : 1, 'tinh_trang' : 1},
                                this.loadData();
                            } else {
                                toastr.error(res.data.message, 'Error');
                            }
                        });
                },
                loadData() {
                    axios
                        .post('{{ Route("taiKhoanData") }}')
                        .then((res) => {
                            this.list_tai_khoan   = res.data.xxx;
                        });
                },
                xoaTaiKhoan() {
                    axios
                        .post('{{ Route("taiKhoanDel") }}', this.tt_xoa)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message, 'Success');
                                this.loadData();
                                $('#deleteModal').modal('hide');
                            } else {
                                toastr.error(res.data.message, 'Error');
                            }
                        });
                },
                capNhatTaiKhoan() {
                    axios
                        .post('{{ Route("taiKhoanUpdate") }}', this.tt_cap_nhat)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message, 'Success');
                                this.loadData();
                                $('#editModal').modal('hide');
                            } else {
                                toastr.error(res.data.message, 'Error');
                            }
                        });
                },
                doiTrangThaiBlock(payload) {
                    axios
                        .post('{{ Route("taiKhoanBlock") }}', payload)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message, 'Success');
                                this.loadData();
                            } else {
                                toastr.error(res.data.message, 'Error');
                            }
                        });
                },
                doiTrangThai(payload) {
                    axios
                        .post('{{ Route("taiKhoanStatus") }}', payload)
                        .then((res) => {
                            if(res.data.status) {
                                toastr.success(res.data.message, 'Success');
                                this.loadData();
                            } else {
                                toastr.error(res.data.message, 'Error');
                            }
                        });
                },
            },
        });
    });
</script> --}}
@endsection
