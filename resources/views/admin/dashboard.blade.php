<x-admin-app-layout>

    <div class="row g-5 g-xl-10">
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/instagram-2-1.svg" class="w-35px"
                            alt="">
                    </div>
                    <div class="d-flex flex-column my-7">
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $blogCount }}</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-500">
                                <a href="{{ route('admin.blog-post.index') }}">Total Showing Blogs</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/facebook-3.svg" class="w-35px"
                            alt="">
                    </div>
                    <div class="d-flex flex-column my-7">
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $researchPaperCount }}</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-500">
                                <a href="{{ route('admin.research-paper.index') }}">Total Showing Research Papers</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/dribbble-icon-1.svg" class="w-35px"
                            alt="">
                    </div>
                    <div class="d-flex flex-column my-7">
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $researcherCount }}</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-500">
                                <a href="{{ route('admin.researcher.index') }}">Total Active Researchers</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-start flex-column">
                    <div class="m-0">
                        <img src="/metronic8/demo1/assets/media/svg/brand-logos/twitter.svg" class="w-35px"
                            alt="">
                    </div>
                    <div class="d-flex flex-column my-7">
                        <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $internCount }}</span>
                        <div class="m-0">
                            <span class="fw-semibold fs-6 text-gray-500">
                                <a href="{{ route('admin.intern.index') }}">Total Active Interns</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-xl-4 mb-5 mb-xl-10">
            <div class="card card-flush border-0 h-lg-100" data-bs-theme="light" style="background-color: #7239EA">
                <div class="card-header pt-2">
                    <h3 class="card-title">
                        <span class="text-white fs-3 fw-bold me-2">Facebook Campaign</span>
                        <span class="badge badge-success">Active</span>
                    </h3>
                    <div class="card-toolbar">
                        <button
                            class="btn btn-icon bg-white bg-opacity-10 btn-color-white btn-active-success w-25px h-25px"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">

                            <i class="ki-duotone ki-black-right fs-5"></i>
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">

                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <div class="separator mb-3 opacity-75"></div>



                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Ticket
                                </a>
                            </div>



                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Customer
                                </a>
                            </div>



                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">

                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>



                                <div class="menu-sub menu-sub-dropdown w-175px py-4">

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Admin Group
                                        </a>
                                    </div>



                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Staff Group
                                        </a>
                                    </div>



                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Member Group
                                        </a>
                                    </div>

                                </div>

                            </div>



                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Contact
                                </a>
                            </div>



                            <div class="separator mt-3 opacity-75"></div>



                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                        Generate Reports
                                    </a>
                                </div>
                            </div>

                        </div>



                    </div>

                </div>



                <div class="card-body d-flex justify-content-between flex-column pt-1 px-0 pb-0">

                    <div class="d-flex flex-wrap px-9 mb-5">

                        <div class="rounded min-w-125px py-3 px-4 my-1 me-6"
                            style="border: 1px dashed rgba(255, 255, 255, 0.2)">

                            <div class="d-flex align-items-center">
                                <div class="text-white fs-2 fw-bold counted" data-kt-countup="true"
                                    data-kt-countup-value="4368" data-kt-countup-prefix="$" data-kt-initialized="1">
                                    $4,368</div>
                            </div>



                            <div class="fw-semibold fs-6 text-white opacity-50">New Followers</div>

                        </div>



                        <div class="rounded min-w-125px py-3 px-4 my-1"
                            style="border: 1px dashed rgba(255, 255, 255, 0.2)">

                            <div class="d-flex align-items-center">
                                <div class="text-white fs-2 fw-bold counted" data-kt-countup="true"
                                    data-kt-countup-value="120,000" data-kt-initialized="1">120,000</div>
                            </div>



                            <div class="fw-semibold fs-6 text-white opacity-50">Followers Goal</div>

                        </div>

                    </div>





                </div>

            </div>




        </div> --}}

    </div>
</x-admin-app-layout>
