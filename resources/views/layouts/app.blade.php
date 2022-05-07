<!----------------------------------------------------------------------------->
<!-- | Sharp-Eyes[ Sharp eyes can discern truth and lies. ]                  -->
<!-- | Copyright (c) 2006~2020 http://sharp-eyes.cn All rights reserved.     -->
<!-- | Licensed ( https://opensource.org/licenses/MIT )                      -->
<!-- | Author: Albert <albert@rocareer.com>                                  -->
<!----------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <!-- 引入入通用头部 -->
    @extends('layouts.head')

    <!-- 继承页面头部 -->
    @yield('head')
</head>

<body class="index-page sidebar-collapse">

    <!-- 引入通用导航 -->
    @extends('layouts.navbar')

    <!-- 继承页面内容 -->
    @yield('content')

    <!-- 引入通用脚部 -->
    @extends('layouts.footer')

    <!-- 引入通用脚本部分 -->
    @extends('layouts.scripts')

    <!-- 继承页面脚本 -->
    @yield('script')
</body>

</html>