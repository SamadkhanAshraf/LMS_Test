<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-blue">


    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#"><span></span></a>
        <a href="#" class="b-brand">
            <h4>{{__('nav.Library')}}</h4>
            <small>{{__('nav.MIS')}}</small>
            <!-- ========   change your logo hear   ============ -->
            <img src="{{ asset('dashboard_assets/assets/images/logo2.png')}}" alt="" class="logo" width="80px" height="60px">
            <img src="{{ asset('dashboard_assets/assets/images/library.png')}}" alt="" class="logo-thumb">
        </a>
        <a href="#" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="#" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search here">
                    <button type="button" class="btn-close" aria-label="Close">
                    </button>
                </div>
            </li>
            <li class="nav-item">

                <a href="#" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle " role="navigation" data-bs-toggle="dropdown"><span class="fa fa-globe"> {{__('nav.language')}} </span></a>

                <div class="dropdown-menu">
                    <a href="{{route('locale',['locale'=>'en'])}}" class="dropdown-item">English</a>
                    <a href="{{route('locale',['locale'=>'dr'])}}" class="dropdown-item">دری</a>
                </div>
            </li>


            <li>
                <div class="dropdown">
                    <a href="#" class="displayChatbox dropdown-toggle"><i class="icon feather icon-mail"></i><span class="badge bg-success"><span class="sr-only"></span></span></a>
                </div>
            </li>

            {{-- <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="{{ asset('dashboard_assets/assets/images/user/avatar-2.jpg')}}" class="img-radius wid-40" alt="User-Profile-Image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-notification">
                        <div class="pro-head">
                            <img src="{{ asset('dashboard_assets/assets/images/user/avatar-1.jpg') }}" class="img-radius" alt="User-Profile-Image">
                            <span>John Doe</span>
                            <a href="auth-signin.html" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                            <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                        </ul>
                    </div>
                </div>
            </li> --}}
            <li>
                @if (Session::has('logId'))
                    @php
                        $user = Session::get('logId');
                    @endphp
                    <div class=""><span>Welcome, </span>{{$user->name , ' '}}<span style=""><a href="{{route('logout.user')}}"> | Logout</a></span></div>
                 @endif
                @if (!Session::has('logId'))
                    <div class=""><span class="text-danger">Welcome, guest</span></div>
                 @endif
                <div class="dropdown">
                    {{-- <a href="#" class="displayChatbox dropdown-toggle"><i class="icon feather icon-mail"></i><span class="badge bg-success"><span class="sr-only"></span></span></a> --}}
                </div>
            </li>
        </ul>
    </div>


</header>
<!-- [ Header ] end -->


<!-- [ chat user list ] start -->
<section class="header-user-list">
<a href="#" class="h-close-text"><i class="feather icon-x"></i></a>
<ul class="nav nav-tabs" id="chatTab" role="tablist">
<li class="nav-item">
    <a class="nav-link active text-uppercase border-0" id="chat-tab" data-bs-toggle="tab" href="#chat" role="tab" aria-controls="chat" aria-selected="true"><i class="feather icon-message-circle me-2"></i>Chat</a>
</li>
<li class="nav-item">
    <a class="nav-link text-uppercase border-0" id="user-tab" data-bs-toggle="tab" href="#user" role="tab" aria-controls="user" aria-selected="false"><i class="feather icon-users me-2"></i>User</a>
</li>
<li class="nav-item">
    <a class="nav-link text-uppercase border-0" id="setting-tab" data-bs-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false"><i class="feather icon-settings me-2"></i>Setting</a>
</li>
</ul>
<div class="tab-content" id="chatTabContent">
<div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
    <div class="h-list-header">
        <div class="input-group">
            <input type="text" id="search-friends" class="form-control" placeholder="Search Friend . . .">
        </div>
    </div>
    <div class="h-list-body">
        <div class="main-friend-cont scroll-div">
            <div class="main-friend-list">
                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-3.jpg') }}" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-4.jpg') }}" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-3.jpg') }}" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">10 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-4.jpg') }}" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">15 min ago</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image ">
                        <div class="live-status">3</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-c-green">Typing . . </small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image">
                        <div class="live-status">1</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-3.jpg') }}" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block text-c-green">online</small></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="user" role="tabpanel" aria-labelledby="user-tab">
    <div class="h-list-body">
        <div class="main-friend-cont scroll-div">
            <div class="main-friend-list">
                <div class="media px-3 d-flex align-items-center mt-3">
                    <a class="media-left m-r-15" href="#">
                        <div class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center"><i class="icon feather icon-users"></i></div>
                    </a>
                    <div class="media-body">
                        <p class="chat-header f-w-600 mb-0">New Group</p>
                    </div>
                </div>
                <div class="media p-3 d-flex align-items-center">
                    <a class="media-left m-r-15" href="#">
                        <div class="hei-50 wid-50 bg-primary img-radius d-flex text-white f-22 align-items-center justify-content-center"><i class="icon feather icon-user-plus"></i></div>
                    </a>
                    <div class="media-body">
                        <p class="chat-header f-w-600 mb-0">New Contact</p>
                    </div>
                </div>
                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image "></a>
                    <div class="media-body">
                        <p class="chat-header">Josephin Doe<small class="d-block">i am not what happened . .</small></p>
                    </div>
                </div>
                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block">Avalable</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="{{ asset('dashboard_assets/assets/images/user/avatar-3.jpg') }}" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Alice<small class="d-block">hear using Elite able</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="4" data-status="offline" data-username="Alia">
                    <a class="media-left" href="#">
                        <div class="hei-50 wid-50 img-radius bg-success d-flex text-white f-22 align-items-center justify-content-center">A</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Alia<small class="d-block text-muted">Avalable</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="5" data-status="offline" data-username="Suzen">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="../assets/images/user/avatar-4.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Suzen<small class="d-block text-muted">Avalable</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe">
                    <a class="media-left" href="#">
                        <div class="hei-50 wid-50 bg-danger img-radius d-flex text-white f-22 align-items-center justify-content-center">JD</div>
                    </a>
                    <div class="media-body">
                        <h6 class="chat-header">Josephin Doe<small class="d-block text-muted">Don't send me image</small></h6>
                    </div>
                </div>
                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe">
                    <a class="media-left" href="#"><img class="media-object img-radius" src="../assets/images/user/avatar-2.jpg" alt="Generic placeholder image"></a>
                    <div class="media-body">
                        <h6 class="chat-header">Lary Doe<small class="d-block text-muted">not send free msg</small></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
    <div class="p-4 main-friend-cont scroll-div">
        <h6 class="mt-2"><i class="feather icon-monitor me-2"></i>Desktop settings</h6>
        <hr>
        <div class="form-group mb-0">
            <div class="switch switch-primary d-inline m-r-10">
                <input type="checkbox" id="cn-p-1" checked>
                <label for="cn-p-1" class="cr"></label>
            </div>
            <label class="f-w-600">Allow desktop notification</label>
        </div>
        <p class="text-muted ms-5">you get lettest content at a time when data will updated</p>
        <div class="form-group mb-0">
            <div class="switch switch-primary d-inline m-r-10">
                <input type="checkbox" id="cn-p-5">
                <label for="cn-p-5" class="cr"></label>
            </div>
            <label class="f-w-600">Store Cookie</label>
        </div>
        <h6 class="mb-0 mt-5"><i class="feather icon-layout me-2"></i>Application settings</h6>
        <hr>
        <div class="form-group mb-0">
            <div class="switch switch-primary d-inline m-r-10">
                <input type="checkbox" id="cn-p-3" checked>
                <label for="cn-p-3" class="cr"></label>
            </div>
            <label class="f-w-600">Backup Storage</label>
        </div>
        <p class="text-muted mb-0 ms-5">Automaticaly take backup as par schedule</p>
        <div class="form-group mb-4">
            <div class="switch switch-primary d-inline m-r-10">
                <input type="checkbox" id="cn-p-4" checked>
                <label for="cn-p-4" class="cr"></label>
            </div>
            <label class="f-w-600">Allow guest to print file</label>
        </div>
        <h6 class="mb-0 mt-5"><i class="feather icon-globe me-2"></i>System settings</h6>
        <hr>
        <div class="form-group mb-0">
            <div class="switch switch-primary d-inline m-r-10">
                <input type="checkbox" id="cn-p-2">
                <label for="cn-p-2" class="cr"></label>
            </div>
            <label class="f-w-600">View other user chat</label>
        </div>
        <p class="text-muted ms-5">Allow to show public user message</p>
    </div>
</div>
</div>
</section>
<!-- [ chat user list ] end -->

<!-- [ chat message ] start -->
<section class="header-chat">
<div class="h-list-header">
<h6>Josephin Doe</h6>
<a href="#" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
</div>
<div class="h-list-body">
<div class="main-chat-cont scroll-div">
    <div class="main-friend-chat">
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#"><img class="media-object img-radius img-radius m-t-5" src="../assets/images/user/avatar-2.jpg" alt="Generic placeholder image"></a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">hello tell me something</p>
                    <p class="chat-cont">about yourself?</p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">Ohh! very nice</p>
                </div>
                <p class="chat-time">8:22 a.m.</p>
            </div>
            <a class="media-right photo-table" href="#"><img class="media-object img-radius img-radius m-t-5" src="{{  asset('dashboard_assets/assets/images/user/avatar-1.jpg') }}" alt="Generic placeholder image"></a>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#"><img class="media-object img-radius img-radius m-t-5" src="{{  asset('dashboard_assets/assets/images/user/avatar-2.jpg') }}" alt="Generic placeholder image"></a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">can you help me?</p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="h-list-footer">
<div class="input-group">
    <input type="file" class="chat-attach" style="display:none">
    <a href="#" class="input-group-prepend btn rounded-circle btn-success btn-attach">
        <i class="feather icon-paperclip"></i>
    </a>
    <input type="text" name="h-chat-text" class="form-control h-auto h-send-chat" placeholder="Write hear . . ">
    <button type="submit" class="input-group-append btn-send btn btn-primary">
        <i class="feather icon-message-circle"></i>
    </button>
</div>
</div>
</section>
