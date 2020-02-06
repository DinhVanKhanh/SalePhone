
<nav id="top-megamenu-nav" class="megamenu-vertical animate-dropdown " style="position: sticky;top: 0;z-index: 999">
    <div class="container">
        <div class="yamm navbar" style="justify-content: flex-start !important">
        <div class="navbar-header" style="float: right">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mc-horizontal-menu-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- /.navbar-header -->  
            <div class="collapse navbar-collapse" id="mc-horizontal-menu-collapse">
                <ul class="nav navbar-nav d-inline">
                    <li><a href="layout/telephone/trangchu">Trang chủ</a></li>
                    {{-- {{dd($query)}} --}}
                    @foreach(App\chitietloaisp::all() as $key)
                    <li>
                       <a href="layout/telephone/{{$key->tenloai}}"> {{$key->tenloai}}</a>
                    </li>
                    @endforeach
                     <li>
                        <!-- <div class="dropdown d-inline-block"> -->
                        <a style="background-color: #59b210; border: 0" class="btn btn-success py-4 px-5 text-xs-left" data-toggle="dropdown" id='dienthoai'>Điện thoại</a>             
                            <div class="dropdown-menu bg-white">
                                <ul class="list-group">
                                    <li class="list-group-item-success list-group-item-action mb-1 d-flex justify-content-between" href="">SD<span class="badge badge-primary">50</span></li>
                                    <li class="list-group-item-danger list-group-item-action d-block"><a href="?test=demo">SSS</a></li>
                                </ul>
                            </div>
                         <!-- </div> -->
                        
                    </li>
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.yamm navbar -->
    </div><!-- /.container -->
</nav><!-- /.megamenu-vertical -->

{{-- <div class="progress">
    <div class="progress-bar" style="width: 35%">35%</div>
</div> --}}