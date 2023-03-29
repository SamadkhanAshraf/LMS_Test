<nav class="pcoded-navbar menupos-fixed menu-light " style="position:fixed;">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div active pcoded-trigger ps ps--active-y">

                <ul class="nav pcoded-inner-navbar " style="display: block;">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu active">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Books</span></a>
                        <ul class="pcoded-submenu" style="display: block; transition-property: height, margin, padding; transition-duration: 200ms; box-sizing: border-box; height: 0px; overflow: hidden; padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;">
                            <li class=""><a href="{{ route('book.create') }}">Add Book</a></li>
                            {{-- <li><a href="{{ route('book.index') }}">View Books</a></li> --}}
                            <li><a href="{{ route('book.index') }}">View Books</a></li>
                            <li><a href="{{route('issue.index')}}">Issuees</a></li>
                        </ul>
                    </li>
                   {{-- Members start --}}
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Members</span><span class="pcoded-badge badge bg-success">100+</span></a>
                    <ul class="pcoded-submenu" style="display: none;">
                        <li><a href="{{ route('member.create') }}">add memeber</a></li>
                     <li><a href="{{route('member.index')}}">view member</a></li>
                        
                    </ul>
                </li>
                   {{-- Members ends --}}
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Category</span></a>
                        <ul class="pcoded-submenu" style="display: none;">
                            <li><a href="{{ route('category.create') }}">Add Category</a></li>
                           {{-- <li><a href="{{route('department.create')}}">Department</a></li>--}}
                            <li><a href="{{route('category.index')}}">View Category</a></li>
                        </ul>
                    </li>
                    {{-- precidency --}}
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Precidency</span></a>
                        <ul class="pcoded-submenu" style="display: block; transition-property: height, margin, padding; transition-duration: 200ms; box-sizing: border-box; height: 0px; overflow: hidden; padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;">
                            <li class=""><a href="{{route('precidency.create')}}">Add Precidency</a></li>
                            <li><a href="{{route('precidency.index')}}">View Precidency</a></li>
                            {{-- <li><a href="">Issue Book</a></li> --}}
                        </ul>
                    </li>
                    {{-- Department --}}
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Department</span></a>
                        <ul class="pcoded-submenu" style="display: block; transition-property: height, margin, padding; transition-duration: 200ms; box-sizing: border-box; height: 0px; overflow: hidden; padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;">
                            <li class=""><a href="{{route('department.create')}}">Add Department</a></li>
                            <li><a href="{{route('department.index')}}">View Department</a></li>
                            {{-- <li><a href="">Issue Book</a></li> --}}
                        </ul>
                    </li>
                    {{-- issues start --}}
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Issues</span><span class="pcoded-badge badge bg-success">100+</span></a>
                    <ul class="pcoded-submenu" style="display: none;">
                        <li><a href="{{ route('issue.create') }}">Issue book</a></li>
                     <li><a href="{{route('issue.index')}}">All issues</a></li>
                     <li><a href="{{route('issue.index')}}">Return Book</a></li>
                     
                        
                    </ul>
                </li>
                   {{-- Issuees ends --}}
                    {{-- <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Appendix</span><span class="pcoded-badge badge bg-success">100+</span></a>
                        <ul class="pcoded-submenu" style="display: none;">
                            <li><a href="{{ route('issue.create') }}">Issue book</a></li>
                           {{-- <li><a href="{{route('issue.index')}}">All issues</a></li>--}}
                            {{-- <li><a href="{{route('category.index')}}">View Category</a></li> --}}
                        {{-- </ul> --}}
                    {{-- </li> --}}
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">User</span></a>
                        <ul class="pcoded-submenu" style="box-sizing: border-box; display: block; transition-property: height, margin, padding; transition-duration: 200ms; height: 0px; overflow: hidden; padding-top: 0px; padding-bottom: 0px; margin-top: 0px; margin-bottom: 0px;">
                            <li><a href="{{route('')}}">Setting</a></li>
                            <li><a href="../navigation/user-card.html">User Card</a></li>
                            <li><a href="../navigation/user-list.html">User List</a></li>
                        </ul>
                    </li>
                </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: -150px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 150px; height: 601px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 39px; height: 156px;">
        </div>
    </div>
</div>
    </div>
</nav>
