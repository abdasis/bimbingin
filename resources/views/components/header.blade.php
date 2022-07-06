<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index-2.html" class="logo logo-dark">
                  <span class="logo-sm">
                    <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22"/>
                  </span>
                        <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="17"/>
                  </span>
                    </a>

                    <a href="index-2.html" class="logo logo-light">
                  <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22"/>
                  </span>
                        <span class="logo-lg">
                    <img
                        src="assets/images/logo-light.png"
                        alt=""
                        height="17"
                    />
                  </span>
                    </a>
                </div>

                <button
                    type="button"
                    class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon"
                >
                <span class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
                </button>

            </div>

            <div class="d-flex align-items-center">
                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button
                        type="button"
                        class="btn"
                        id="page-header-user-dropdown"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                  <span class="d-flex align-items-center">
                    <img
                        class="rounded-circle header-profile-user"
                        src="{{asset('assets/images/users/avatar-3.jpg')}}"
                        alt="Header Avatar"
                    />
                    <span class="text-start ms-xl-2">
                      <span
                          class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"
                      >{{auth()->user()->name}}</span
                      >
                      <span
                          class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text"
                      >Tuan Prabu</span
                      >
                    </span>
                  </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Anna!</h6>
                        <a class="dropdown-item" href="pages-profile.html"
                        ><i
                                class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"
                            ></i>
                            <span class="align-middle">Profile</span></a
                        >
                        <a class="dropdown-item" href="pages-faqs.html"
                        ><i
                                class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"
                            ></i>
                            <span class="align-middle">Help</span></a
                        >
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="pages-profile-settings.html"
                        ><span
                                class="badge bg-soft-success text-success mt-1 float-end"
                            >New</span
                            ><i
                                class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"
                            ></i>
                            <span class="align-middle">Settings</span></a
                        >
                        <a class="dropdown-item" href="auth-lockscreen-basic.html"
                        >
                            <a class="dropdown-item" href="auth-logout-basic.html"
                            ><i
                                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"
                                ></i>
                                <span class="align-middle" data-key="t-logout"
                                >Logout</span
                                ></a
                            >
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
