  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
          <img src="/assets_admin/dist/img/logo_1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">QUẢN LÝ NHÂN SỰ</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column nav-close" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                  {{-- Quản lý --}}
                  <li class="nav-item menu-close">
                      <a href="#" class="nav-link active">
                          <p>
                              Quản Lý
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/admin" class="nav-link">
                                  <p>Danh sách tài khoản</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/danh-sach" class="nav-link">
                                  <p>Danh sách nhân viên</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./index3.html" class="nav-link">
                                  <p>Thống kê</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  {{-- Quản lý --}}

                  {{-- Quản Lý Nhân Viên --}}
                  <li class="nav-item menu-close">
                      <a href="#" class="nav-link active">
                          <p>
                              Quản Lý Nhân Viên
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/chi-tiet-NV" class="nav-link">
                                  <p>Thông tin nhân viên</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./index.html" class="nav-link">
                                  <p>Chức vụ</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./index2.html" class="nav-link">
                                  <p>Quyền lợi</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./index3.html" class="nav-link">
                                  <p>Ngày nghỉ</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  {{-- Nhân Viên --}}

                  {{-- Quản lý lương --}}
                  <li class="nav-item menu-close">
                      <a href="#" class="nav-link active">
                          <p>
                              Quản Lý Lương
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="./index.html" class="nav-link">
                                  <p>Bảng Lương</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./index.html" class="nav-link">
                                  <p>Tính Lương</p>
                              </a>
                          </li>
                          </a>
                  </li>
              </ul>
              </li>
              {{-- Quản lý lương --}}

              {{-- Thông Báo --}}
              <li class="nav-item menu-close">
                  <a href="#" class="nav-link active">
                      <p>
                          Thông Báo
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="./index.html" class="nav-link">
                              <p>Kỉ Niệm Ngày Vào Làm</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="./index.html" class="nav-link">
                              <p>Sinh Nhật Nhân Viên</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="./index.html" class="nav-link">
                              <p>Vượt Ngày Nghỉ Quy Định</p>
                          </a>
                      </li>
                      </a>
              </li>
              </ul>
              </li>
              {{-- Thông Báo --}}
              {{-- Tài Khoản --}}
              <li class="nav-item menu-close">
                  <a href="#" class="nav-link active">
                      <p>
                          Tài Khoản
                      </p>
                  </a>
              </li>
              {{-- Tài Khoản --}}

              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
