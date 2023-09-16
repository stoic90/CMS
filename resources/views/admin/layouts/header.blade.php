    <header class="header">
        <section class="sidebar-header bg-gray">
            <section class="d-flex justify-content-between flex-md-row-reverse px-2">
                <span id="sidebar-toggle-show" class="d-inline d-md-none pointer"><i class="fas fa-toggle-off"></i></span>
                <span id="sidebar-toggle-hide" class="d-none d-md-inline pointer"><i class="fas fa-toggle-on"></i></span>
                <span><img class="logo" src="{{ asset('admin-assets/images/logo.png') }}"/></span>
                <span class="d-md-none" id="menu-toggle"><i class="fas fa-ellipsis-h"></i></span>
            </section>
        </section>
        <section class="body-header" id="body-header">
            <section class="d-flex justify-content-between">
                <section>
                     <span id="full-screen" class="pointer p-3 d-none d-md-inline mr-5">
                        <i id="screen-compress" class="fas fa-compress d-none"></i>
                        <i id="screen-expand" class="fas fa-expand "></i>
                    </span>
                    <span class="mr-5">
                        <span id="search-area" class="search-area d-none">
                            <i id="search-area-hide" class="fas fa-times pointer"></i>
                            <input id="search-input" type="text" class="search-input">
                            <i class="fas fa-search pointer"></i>
                        </span>
                    <i id="search-toggle" class="fas fa-search p-1 d-none d-md-inline pointer"></i>
                    </span>


                </section>
                <section>
                    <span class="ml-2 ml-md-4 position-relative">
                        <span id="header-notification-toggle" class="pointer">
                            <i class="far fa-bell"></i><sup class="badge badge-danger">4</sup>
                        </span>
                    <section id="header-notification" class="header-notifictation rounded">
                        <section class="d-flex justify-content-between">
                            <span class="px-2">
                                Notifications
                            </span>
                            <span class="px-2">
                                <span class="badge badge-danger">New</span>
                            </span>
                        </section>

                        <ul class="list-group rounded px-0">
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img class="notification-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar">
                                    <section class="media-body p-2">
                                        <h5 class="notification-user">Ali Kazemi</h5>
                                        <p class="notification-text">Test Note</p>
                                        <p class="notification-time">30 Minuts Ago</p>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img class="notification-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar">
                                    <section class="media-body p-2">
                                        <h5 class="notification-user">Ali Kazemi</h5>
                                        <p class="notification-text">Test Note</p>
                                        <p class="notification-time">30 Minuts Ago</p>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                   <img class="notification-img" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar">
                                    <section class="media-body p-2">
                                        <h5 class="notification-user">Ali Kazemi</h5>
                                        <p class="notification-text">Test Note</p>
                                        <p class="notification-time">30 Minuts Ago</p>
                                    </section>
                                </section>
                            </li>
                        </ul>
                    </section>
                    </span>
                    <span class="ml-2 ml-md-4 position-relative">
                        <span id="header-comment-toggle" class="pointer">
                            <i class="far fa-comment-alt"><sup class="badge badge-danger">3</sup></i>
                        </span>

                    <section id="header-comment" class="header-comment">

                        <section class="border-bottom px-4">
                            <input type="text" class="form-control form-control-sm my-4" placeholder="Search ...">
                        </section>

                        <section class="header-comment-wrapper">
                            <ul class="list-group rounded px-0">
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                         <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                         <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                          <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                       <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                         <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                       <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                         <img src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="avatar" class="notification-img">
                                        <section class="media-body p-2">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">Ali Kazemi</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                            </ul>
                        </section>

                    </section>

                    </span>
                    <span class="ml-3 ml-md-5 position-relative">
                        <span id="header-profile-toggle" class="pointer">
                            <img class="header-avatar" src="{{ asset('admin-assets/images/avatar-2.jpg') }}" alt="">
                            <span class="header-username">Ali KAzemi</span>
                    <i class="fas fa-angle-down"></i>
                    </span>
                    <section id="header-profile" class="header-profile rounded">
                        <section class="list-group rounded">
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-cog"></i>Setting
                            </a>
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-user"></i>User
                            </a>
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="far fa-envelope"></i>Messages
                            </a>
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-lock"></i>Lock Page
                            </a>
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-sign-out-alt"></i>Exit
                            </a>
                        </section>
                    </section>
                    </span>
                </section>
            </section>
        </section>
    </header>
