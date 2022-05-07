<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg bg-rose" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="./index.html">
                Writing Our Story </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <!-- <li class="dropdown nav-item">
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="material-icons">apps</i> 操作面板
        </a>
        <div class="dropdown-menu dropdown-with-icons">
            <a href="./presentation.html" class="dropdown-item">
            <i class="material-icons">layers</i> Presentation
            </a>
            <a href="./index.html" class="dropdown-item">
            <i class="material-icons">line_style</i> All Components
            </a>
            <a href="http://commons.creative-tim.com/material-kit-pro/docs/2.1/getting-started/introduction.html" class="dropdown-item">
            <i class="material-icons">content_paste</i> Documentation
            </a>
        </div>
        </li> -->
                <li class="dropdown nav-item">
                    <a href="/" class="nav-link">
                        <i class="material-icons">view_list</i> 全部日志
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="/" class="nav-link">
                        <i class="material-icons">perm_media</i> 相片簿
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="/" class="nav-link">
                        <i class="material-icons">cloud_circle</i> 云存储
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="/" class="nav-link">
                        <i class="material-icons">directions_run</i> 我的动态
                    </a>
                </li>

                @if(Auth::check())
                <li class="dropdown nav-item">
                    <a href="#pablo" class="profile-photo dropdown-toggle nav-link flex" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile-photo-small">
                            <img src="/assets/img/faces/chaq.jpg" alt="Circle Image" class="rounded-circle img-fluid">
                        </div>
                        <div class="ripple-container"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="user-dropdown">
                            <text class="name">Auth::user()->name</text>
                        </div>
                        <a href="#pablo" class="dropdown-item"><i class="material-icons mr-2">account_circle</i>个人中心</a>
                        <a href="#pablo" class="dropdown-item"><i class="material-icons mr-2">question_answer</i>我的留言</a>
                        <a href="#pablo" class="dropdown-item"><i class="material-icons mr-2">settings</i>系统设置</a>
                        <a href="#pablo" class="dropdown-item"><i class="material-icons mr-2">logout</i>注销</a>
                    </div>
                </li>
                <li class="dropdown nav-item ml-3">
                    <a href="/" class="nav-link write-button">
                        <span class="write-button-title">LET'S GO</span>
                        <span class="write-button-category">写点什么</span>
                    </a>
                </li>
                @else
                <li class="dropdown nav-item ml-3">
                    <a href="/login" class="nav-link write-button">
                        <span class="write-button-title">TO LOGIN</span>
                        <span class="write-button-category">快去登录</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>