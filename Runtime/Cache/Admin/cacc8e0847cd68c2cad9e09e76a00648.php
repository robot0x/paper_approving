<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="/ethan-wechat/Public/Admin/css/bootstrap.min.css" rel="stylesheet">

    <link href="/ethan-wechat/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet">
    

    <link id="base-style" href="/ethan-wechat/Public/Admin/css/style.css" rel="stylesheet">

    <link id="base-style-responsive" href="/ethan-wechat/Public/Admin/css/style-responsive.css" rel="stylesheet">
    <script src="/ethan-wechat/Public/Admin/js/jquery-1.9.1.min.js"></script>
    <!-- end: CSS -->
    <!--ueditor-->
    <script type="text/javascript" src="/ethan-wechat/Public/lib/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/ethan-wechat/Public/lib/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/ethan-wechat/Public/lib/ueditor/lang/zh-cn/zh-cn.js"></script>

    <!--webuploader-->
    <link href="/ethan-wechat/Public/lib/webuploader/css/webuploader.css" rel="stylesheet" />
    
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="/ethan-wechat/Public/Admin/img/favicon.ico">
    <!-- end: Favicon -->

</head>
<body>
        <!-- start: Header -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><span>Metro</span></a>

                <!-- start: Header Menu -->
                <div class="nav-no-collapse header-nav">
                    <ul class="nav pull-right">
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white warning-sign"></i>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="dropdown-menu-title">
                                    <span>You have 11 notifications</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">1 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">7 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">8 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">16 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">36 min</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">2 items sold</span>
                                        <span class="time">1 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-user"></i></span>
                                        <span class="message">User deleted account</span>
                                        <span class="time">2 hour</span>
                                    </a>
                                </li>
                                <li class="warning">
                                    <a href="#">
                                        <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">6 hour</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon green"><i class="icon-comment-alt"></i></span>
                                        <span class="message">New comment</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon blue"><i class="icon-user"></i></span>
                                        <span class="message">New user registration</span>
                                        <span class="time">yesterday</span>
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                                    <a>View all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- start: Notifications Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white tasks"></i>
                            </a>
                            <ul class="dropdown-menu tasks">
                                <li class="dropdown-menu-title">
                                    <span>You have 17 tasks in progress</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">iOS Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim red">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">Android Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim green">47</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim yellow">32</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim greenLight">63</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="header">
                                            <span class="title">ARM Development</span>
                                            <span class="percent"></span>
                                        </span>
                                        <div class="taskProgress progressSlim orange">80</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Notifications Dropdown -->
                        <!-- start: Message Dropdown -->
                        <li class="dropdown hidden-phone">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages">
                                <li class="dropdown-menu-title">
                                    <span>You have 9 messages</span>
                                    <a href="#refresh"><i class="icon-repeat"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/1.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                6 min
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/1.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                56 min
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/1.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                3 hours
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/1.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                yesterday
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="avatar"><img src="img/1.jpg" alt="Avatar"></span>
                                        <span class="header">
                                            <span class="from">
                                                Dennis Ji
                                             </span>
                                            <span class="time">
                                                Jul 25, 2012
                                            </span>
                                        </span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-menu-sub-footer">View all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- end: Message Dropdown -->
                        <li>
                            <a class="btn" href="#">
                                <i class="halflings-icon white wrench"></i>
                            </a>
                        </li>
                        <!-- start: User Dropdown -->
                        <li class="dropdown">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="halflings-icon white user"></i> Dennis Ji
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-title">
                                    <span>Account Settings</span>
                                </li>
                                <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                                <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <!-- end: User Dropdown -->
                    </ul>
                </div>
                <!-- end: Header Menu -->

            </div>
        </div>
    </div>
    <!-- start: Header -->

            <div class="container-fluid-full">
                <div class="row-fluid">
                    <?php echo ($YZ_TEMPLATE_LEFT); ?>
                    
    <!-- start: Content -->
    <div id="content" class="span10">
        
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">Dashboard</a></li>
            </ul>
        
        
    <!-- start: Content -->
            <div class="row-fluid">

                <div class="span7">
                    <h1>Inbox</h1>

                    <ul class="messagesList">

                        <li>
                            <span class="from"><span class="glyphicons star"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title"><span class="label label-warning">problem</span> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji</span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji</span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons star"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title"><span class="label label-success">task</span> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji</span><span class="title"><span class="label label-info">information</span> Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons star"><i></i></span> Dennis Ji</span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji</span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons star"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji</span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji</span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons star"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji</span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons star"><i></i></span> Dennis Ji</span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji <span class="glyphicons paperclip"><i></i></span></span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>
                        <li>
                            <span class="from"><span class="glyphicons dislikes"><i></i></span> Dennis Ji</span><span class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..</span><span class="date">Today, <b>3:47 PM</b></span>
                        </li>

                    </ul>

                </div>
                <div class="span5 noMarginLeft">

                    <div class="message dark">

                        <div class="header">
                            <h1>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.."</h1>
                            <div class="from"><i class="halflings-icon user"></i> <b>Dennis Ji</b> / jiguofei@msn.com</div>
                            <div class="date"><i class="halflings-icon time"></i> Today, <b>3:47 PM</b></div>

                            <div class="menu"></div>

                        </div>

                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <blockquote>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </blockquote>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="attachments">
                            <ul>
                                <li>
                                    <span class="label label-important">zip</span> <b>bootstrap.zip</b> <i>(2,5MB)</i>
                                    <span class="quickMenu">
                                        <a href="#" class="glyphicons search"><i></i></a>
                                        <a href="#" class="glyphicons share"><i></i></a>
                                        <a href="#" class="glyphicons cloud-download"><i></i></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="label label-info">txt</span> <b>readme.txt</b> <i>(7KB)</i>
                                    <span class="quickMenu">
                                        <a href="#" class="glyphicons search"><i></i></a>
                                        <a href="#" class="glyphicons share"><i></i></a>
                                        <a href="#" class="glyphicons cloud-download"><i></i></a>
                                    </span>
                                </li>
                                <li>
                                    <span class="label label-success">xls</span> <b>spreadsheet.xls</b> <i>(984KB)</i>
                                    <span class="quickMenu">
                                        <a href="#" class="glyphicons search"><i></i></a>
                                        <a href="#" class="glyphicons share"><i></i></a>
                                        <a href="#" class="glyphicons cloud-download"><i></i></a>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <form class="replyForm"method="post" action="">

                            <fieldset>
                                <textarea tabindex="3" class="input-xlarge span12" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>

                                <div class="actions">

                                    <button tabindex="3" type="submit" class="btn btn-success">Send message</button>

                                </div>

                            </fieldset>

                        </form>

                    </div>

                </div>

            <!-- end: Content -->
            
    </div>
    <!-- end: Content -->
    <div class="clearfix"></div>


                </div><!--/#content.span10-->
        </div><!--/fluid-row-->
        
    <footer>
        <p>
            <span style="text-align:left;float:left">&copy; 2013 <a href="http://www.mengyunzhi.com" alt="Bootstrap_Metro_Dashboard">梦云智</a></span>
        </p>
    </footer>
    <!-- start: JavaScript-->
    <script src="/ethan-wechat/Public/Admin/js/jquery-migrate-1.0.0.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery-ui-1.10.0.custom.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.ui.touch-punch.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/modernizr.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.cookie.js"></script>
    <script src='/ethan-wechat/Public/Admin/js/fullcalendar.min.js'></script>
    <script src='/ethan-wechat/Public/Admin/js/jquery.dataTables.min.js'></script>
    <script src="/ethan-wechat/Public/Admin/js/excanvas.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.flot.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.flot.pie.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.flot.stack.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.flot.resize.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.chosen.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.uniform.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.cleditor.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.noty.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.elfinder.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.raty.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.iphone.toggle.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.uploadify-3.1.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.gritter.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.imagesloaded.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.masonry.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.knob.modified.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/jquery.sparkline.min.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/counter.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/retina.js"></script>
    <script src="/ethan-wechat/Public/Admin/js/custom.js"></script>
    <!--webuploader-->
    <script type="text/javascript" src="/ethan-wechat/Public/lib/webuploader/webuploader.min.js"></script>
    <script type="text/javascript" src="/ethan-wechat/Public/yunzhi.php/Webuploader/config.html"></script>
    <!-- end: JavaScript-->


</body>
</html>