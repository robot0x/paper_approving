<div class="page-header">
    <php>$expert = session('expert');</php>
    <div class="row">
        <div class="col-sm-8">
            <h1>
            河北工业大学  <small>论文送审系统</small>
        </h1>
        </div>
        <div class="col-sm-4 text-right">
            <p><b>{:$expert['name']}</b> 欢迎您　　　</p>
            <p><a href="{:U('Login/logout')}">注销 <span class="glyphicon glyphicon-log-out"></span></a>　　　</p>
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li <eq name="Think.CONTROLLER_NAME" value="Home">class="active"</eq>>
                <a href="{:U('Home/index')}">首页</a>
            </li>
            <li <eq name="Think.CONTROLLER_NAME" value="Expert">class="active"</eq>>
                <a href="{:U('Expert/index')}">个人信息</a>
            </li>
            <php>$expert = session('expert');</php>
            <li <eq name="Think.CONTROLLER_NAME" value="Reviews">class="active"</eq>>
                <a href="{:U('Reviews/index')}">查阅评分标准</a>
            </li>
            <li <eq name="Think.CONTROLLER_NAME" value="ReviewDetail">class="active"</eq>>
                <a href="{:U('ReviewDetail/index')}">评阅论文</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
