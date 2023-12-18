<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('dashboard') }}" data-bs-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="badge bg-success rounded-pill float-end"></span>
                        <span> Dashboards </span>
                    </a>

                </li>

                <li class="menu-title mt-2">Apps</li>



                <li>
                    <a href="#sidebarGeneral" data-bs-toggle="collapse">
                        <i class="fe-settings me-1"></i>
                        <span>General Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarGeneral">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('general.setting') }}">General Setting</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarHeros" data-bs-toggle="collapse">
                        <i class="fe-settings me-1"></i>
                        <span>Heros Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarHeros">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('heros-section.index') }}">Heros Setting</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarSlider" data-bs-toggle="collapse">
                        <i class="fe-settings me-1"></i>
                        <span>Slider Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSlider">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.slider') }}">All Slider</a>
                            </li>
                            <li>
                                <a href="{{ route('add.slider') }}">Add Slider</a>
                            </li>
                        </ul>
                    </div>
                </li>



                <li>
                    <a href="#sidebarService1" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Trunament schedule Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarService1">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('trunament-schedule.index') }}">All Trunament Schedule</a>
                            </li>
                            <li>
                                <a href="{{ route('trunament-schedule.index') }}">Add Trunament Schedule</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarService" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Team schedule Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarService">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.services') }}">All Teams Schedule</a>
                            </li>
                            <li>
                                <a href="{{ route('add.services') }}">Add Teams Schedule</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarRanking" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Team Ranking Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarRanking">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('ranking.index') }}">All Teams Ranking</a>
                            </li>
                            <li>
                                <a href="{{ route('ranking.index') }}">Add Teams Ranking</a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="#sidebarProduct" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Product Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProduct">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('project.index') }}">All Product</a>
                            </li>
                            <li>
                                <a href="{{ route('project.create') }}">Add Product</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarAbout" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>About Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAbout">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('about.setting') }}">About </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTeacher" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Team Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTeacher">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.team') }}">All Team</a>
                            </li>
                            <li>
                                <a href="{{ route('add.team') }}">Add Team</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarTrunament" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Trunament Team Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTrunament">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('gameing.index') }}">All Team</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarBlog" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Post Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarBlog">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.blogs') }}">All Post</a>
                            </li>
                            <li>
                                <a href="{{ route('add.blogs') }}">Add Post</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarTestimonial" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Testimonial Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarTestimonial">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.testimonial_1') }}">All Testimonial 1</a>
                            </li>
                            <li>
                                <a href="{{ route('all.testimonial_2') }}">All Testimonial 2</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarGallery" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Gallery Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarGallery">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.image') }}">Image Gallery</a>
                            </li>
                            <li>
                                <a href="{{ route('all.video') }}">Video Gallery</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarNotice" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Notice Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarNotice">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.notice') }}">Notice</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarSponsor" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Sponsor Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarSponsor">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.sponsor') }}">Sponsor</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCounter" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Counter Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCounter">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('counter.icon') }}">Counter Icon</a>
                            </li>
                            <li>
                                <a href="{{ route('counter.image') }}">Counter Image</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#sidebarApplication" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span>Career/Massage Setting</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarApplication">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('tech_web_gaming_career_apply_index') }}">All Application</a>
                            </li>
                            <li>
                                <a href="{{ route('tech_web_gaming_massage_index') }}">All Massage</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
