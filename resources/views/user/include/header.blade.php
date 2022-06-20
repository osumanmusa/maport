 <!-- header start -->
                <header class="main-header bg-white d-flex justify-content-between ">
                    <div class="header-toggle">
                        <a href="/user/tasks"><i class="i-Add-UserStar mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Todo"></i></a>
                        <i class="i-Speach-Bubble-3 mr-3 text-20 cursor-pointer" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Chat"></i>
                        <i class="i-Email mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Inbox"></i>
                        <i class="i-Calendar-4 mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top"
                            title="" data-original-title="Calendar"></i>
                        <i class="i-Checkout-Basket mr-3 text-20 cursor-pointer" data-toggle="tooltip"
                            data-placement="top" title="" data-original-title="Calendar"></i>





                    </div>


                    <div class="header-dropdown d-flex align-items-center">
                        <input type="text" class="form-control form-control-sm gull-input form-control-rounded mr-2"
                            id="inlineFormInputName2" placeholder="search....">

                        <div class="language-dropdown">
                            <div class="btn-group header-btn-group">
                                <button type="button"
                                    class="btn btn-secondary btn-sm dropdown-toggle pr-3 b-none_button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    <span class="language-text">english</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">span</a>
                                    <a class="dropdown-item" href="#">fre</a>
                                    <a class="dropdown-item" href="#">ind</a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown">
                            <div class="badge-top-container" id="dropdownNotification" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="badge badge-primary">3</span>
                                <i class="i-Bell text-muted header-icon"></i>

                            </div>
                            <!-- Notification dropdown -->
                            <div class="dropdown-menu dropdown-menu-right rtl-ps-none ps"
                                aria-labelledby="dropdownNotification" data-perfect-scrollbar=""
                                data-suppress-scroll-x="true">
                                <a class="dropdown-item" href="#">span</a>
                                <a class="dropdown-item" href="#">fre</a>
                                <a class="dropdown-item" href="#">ind</a>

                            </div>

                        </div>

                        <!-- avatar-dropdown -->
                        <div class="avatar-dropdown">
                            <div class="user col align-self-end">
                                <img src="/assets/images/faces/1.jpg" id="userDropdown" alt="" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <div class="dropdown-header">
                                        <i class="i-Lock-User mr-1"></i> {{ Auth::user()->name }}
                                    </div>
                                    <div class="dropdown-header">
                                        <i class="i-Lock-User mr-1"></i> {{ Auth::user()->email }}
                                    </div>
                                    <a class="dropdown-item">Account settings</a>
                                    <a class="dropdown-item">Billing history</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                </header>
                <!-- header close -->




