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
                            <h1 class="m-0">Quản Lý</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#ThemMoiModal">
                                        Thêm Mới Tài Khoản
                                    </button>
                                </div>
                            </ol>
                        </div><!-- /.col -->
                        <div class="modal fade" id="ThemMoiModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm Mới Tài Khoản</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <label class="mb-2">User Name</label>
                                                <input v-model="them_moi.username" type="text" class="form-control mb-2"
                                                    placeholder="Nhập vào user names">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Họ Và Tên</label>
                                                <input v-model="them_moi.ho_va_ten" type="text" class="form-control mb-2"
                                                    placeholder="Nhập vào user names">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Email</label>
                                                <input v-model="them_moi.email" type="text" class="form-control mb-2"
                                                    placeholder="Nhập vào email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label class="mb-2">Mật Khẩu</label>
                                                <input v-model="them_moi.password" type="text" class="form-control mb-2"
                                                    placeholder="Nhập vào họ và tên">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Quyền</label>
                                                <select class="form-control mb-2" v-model="them_moi.id_quyen">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Kế Toán</option>
                                                    <option value="3">Nhân Viên</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label class="mb-2">Ngày Sinh</label>
                                                <input v-model="them_moi.ngay_sinh" type="date" class="form-control mb-2"
                                                    placeholder="Nhập vào ngày sinh">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Quê Quán</label>
                                                <textarea v-model="them_moi.que_quan" rows="1" class="form-control mb-2" placeholder="Nhập vào quê quán"></textarea>
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Is Block</label>
                                                <select class="form-control mb-2" v-model="them_moi.is_block">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <label class="mb-2">Số Điện Thoại</label>
                                                <input v-model="them_moi.so_dien_thoai" type="text" class="form-control mb-2"
                                                    placeholder="Nhập vào số điện thoại">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Căng Cước Công Dân</label>
                                                <input v-model="them_moi.cccd" type="text" class="form-control mb-2"
                                                    placeholder="Nhập vào căng cước công dân">
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Giới tính</label>
                                                <select class="form-control mb-2" v-model="them_moi.gioi_tinh">
                                                    <option value="1">Nam</option>
                                                    <option value="0">Nữ</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-primary" v-on:click="themTaiKhoan()">Thêm Mới</button>
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
                                                    <th class="text-center">User Name</th>
                                                    <th class="text-center">Họ Và Tên</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">Quyền</th>
                                                    <th class="text-center">Quê Quán</th>
                                                    <th class="text-center">Số Điện Thoại</th>
                                                    <th class="text-center">Ngày Sinh</th>
                                                    <th class="text-center">Giới Tính</th>
                                                    <th class="text-center">Căng Cước Công Dân</th>
                                                    <th class="text-center">Blook</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <template v-for="(value, key) in list_admin">
                                                    <tr class="align-middle">
                                                        <td class="text-center">@{{ key + 1 }}</td>
                                                        <td>@{{ value.username }}</td>
                                                        <td>@{{ value.ho_va_ten }}</td>
                                                        <td>@{{ value.email }}</td>
                                                        <td>
                                                            <template v-if="value.id_quyen == 1">
                                                                Admin
                                                            </template>
                                                            <template v-if="value.id_quyen == 2">
                                                                Kế Toán
                                                            </template>
                                                            <template v-if="value.id_quyen == 3">
                                                                Nhân Viên
                                                            </template>
                                                        </td>
                                                        <td>@{{ value.que_quan }}</td>
                                                        <td class="text-center">@{{ value.so_dien_thoai }}</td>
                                                        <td class="text-center">@{{ value.ngay_sinh }}</td>
                                                        <td class="text-center">
                                                            <template v-if="value.gioi_tinh == 1">
                                                                Nam
                                                            </template>
                                                            <template v-if="value.gioi_tinh == 0">
                                                                Nữ
                                                            </template>
                                                        </td>
                                                        <td class="text-center">@{{ value.cccd }}</td>
                                                        <td class="text-center">
                                                            <button v-on:click="doiTrangThaiBlock(value)"
                                                                v-if="value.is_block == 0" class="block btn btn-warning"
                                                                style="width: 150px">Chưa Block</button>
                                                            <button v-on:click="doiTrangThaiBlock(value)" v-else
                                                                class="block btn btn-primary" style="width: 150px">Đã
                                                                Block</button>
                                                        </td>
                                                        <td class="text-center">
                                                            <button v-on:click="tt_capNhat = Object.assign({}, value)"
                                                                type="button" class="edit btn btn-info"
                                                                data-toggle="modal" data-target="#CapNhatModal">
                                                                Cập Nhật
                                                            </button>
                                                            <button v-on:click="tt_xoa = value" data-toggle="modal"
                                                                data-target="#XoaModal" type="button"
                                                                class="del btn btn-danger" style="margin-left: 10px">Xóa
                                                                Bỏ</button>
                                                        </td>
                                                    </tr>
                                                </template>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="modal fade" id="CapNhatModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Tài Khoản</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="mb-2">User Name</label>
                                                            <input v-model="tt_capNhat.username" type="text"
                                                                class="form-control mb-2"
                                                                placeholder="Nhập vào user names">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Họ Và Tên</label>
                                                            <input v-model="tt_capNhat.ho_va_ten" type="text"
                                                                class="form-control mb-2"
                                                                placeholder="Nhập vào user names">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Email</label>
                                                            <input v-model="tt_capNhat.email" type="text"
                                                                class="form-control mb-2" placeholder="Nhập vào email">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="mb-2">Mật Khẩu</label>
                                                            <input v-model="tt_capNhat.password" type="text"
                                                                class="form-control mb-2"
                                                                placeholder="Nhập vào họ và tên">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Quyền</label>
                                                            <select class="form-control mb-2"
                                                                v-model="tt_capNhat.id_quyen">
                                                                <option value="1">Admin</option>
                                                                <option value="2">Kế Toán</option>
                                                                <option value="3">Nhân Viên</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="mb-2">Ngày Sinh</label>
                                                            <input v-model="tt_capNhat.ngay_sinh" type="date"
                                                                class="form-control mb-2"
                                                                placeholder="Nhập vào ngày sinh">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Quê Quán</label>
                                                            <textarea v-model="tt_capNhat.que_quan" rows="1" class="form-control mb-2" placeholder="Nhập vào quê quán"></textarea>
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Is Block</label>
                                                            <select class="form-control mb-2"
                                                                v-model="tt_capNhat.is_block">
                                                                <option value="1">Yes</option>
                                                                <option value="0">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="mb-2">Số Điện Thoại</label>
                                                            <input v-model="tt_capNhat.so_dien_thoai" type="text"
                                                                class="form-control mb-2"
                                                                placeholder="Nhập vào số điện thoại">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Căng Cước Công Dân</label>
                                                            <input v-model="tt_capNhat.cccd" type="text"
                                                                class="form-control mb-2"
                                                                placeholder="Nhập vào căng cước công dân">
                                                        </div>
                                                        <div class="col">
                                                            <label class="mb-2">Giới tính</label>
                                                            <select class="form-control mb-2"
                                                                v-model="tt_capNhat.gioi_tinh">
                                                                <option value="1">Nam</option>
                                                                <option value="0">Nữ</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Đóng</button>
                                                    <button v-on:click="capNhatAdmin()" type="button"
                                                        class="btn btn-primary" data-bs-dismiss="modal">Cập Nhật</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="XoaModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cập Nhật Tài Khoản</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div
                                                        class="alert alert-warning border-0 bg-warning alert-dismissible fade show py-2">
                                                        <div class="d-flex align-items-center">
                                                            <div class="font-35 text-dark"><i
                                                                    class='bx bx-info-circle'></i>
                                                            </div>
                                                            <div class="ms-3">
                                                                <h6 class="mb-0 text-dark">Warning Alerts</h6>
                                                                <div class="text-dark text-wrap">Bạn chắc chắn muốn xóa
                                                                    <b>@{{ tt_xoa.username }}</b> này không?
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Đóng</button>
                                                    <button v-on:click="xoaAdmin()" type="button"
                                                        class="btn btn-primary" data-bs-dismiss="modal">Xác Nhận
                                                        Xóa</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    <script>
        $(document).ready(function() {
            new Vue({
                el: '#app',
                data: {
                    them_moi: [],
                    list_admin: [],
                    tt_capNhat: {},
                    tt_xoa: {},
                },
                created() {
                    this.loadData();
                },
                methods: {
                    themTaiKhoan() {
                        axios
                            .post("{{ Route('adminStore') }}", this.them_moi)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                    this.loadData();
                                    $('#themAccModal').modal('hide');
                                } else {
                                    toastr.error(res.data.message);
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },

                    loadData() {
                        axios
                            .get("{{ Route('adminData') }}")
                            .then((res) => {
                                this.list_admin = res.data.data;
                            });
                    },

                    xoaAdmin() {
                        axios
                            .post("{{ Route('adminDel') }}", this.tt_xoa)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                    $('#XoaModal').modal('hide');
                                    this.loadData();
                                } else {
                                    toastr.error(res.data.message);
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },
                    capNhatAdmin() {
                        axios
                            .post("{{ Route('adminUpdate') }}", this.tt_capNhat)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                    $('#CapNhatModal').modal('hide');
                                    this.loadData();
                                } else {
                                    toastr.error(res.data.message);
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },
                    doiTrangThaiBlock(payload) {
                        axios
                            .post("{{ Route('taiKhoanAdminBlock') }}", payload)
                            .then((res) => {
                                if (res.data.status) {
                                    toastr.success(res.data.message);
                                    this.loadData();
                                } else {
                                    toastr.error(res.data.message);
                                }
                            })
                            .catch((res) => {
                                $.each(res.response.data.errors, function(k, v) {
                                    toastr.error(v[0]);
                                });
                            });
                    },

                },
            });
        })
    </script>
@endsection
