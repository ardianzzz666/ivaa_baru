<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0044)http://archive.ivaa-online.org/admin/artists -->
<html xmlns="http://www.w3.org/1999/xhtml" class="common">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="http://archive.ivaa-online.org/img/favicon32.gif">

    <title>Digital Archive of Indonesian Contemporary Art</title>

   

    <link rel="stylesheet" type="text/css" href="/css/backend/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/backend/text.css">
    <link rel="stylesheet" type="text/css" href="/css/backend/form.css">
    <link rel="stylesheet" type="text/css" href="/css/backend/admin_style.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery/jquery-ui-1.8.16.custom.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.alerts.css">



    <!-- <script type="text/javascript" async="" src="/Digital Archive of Indonesian Contemporary Art_files/ga.js"></script> -->
    <script type="text/javascript" src="/js/jquery/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery.alerts.js"></script>
    <script type="text/javascript" src="/js/default.js"></script>
    <!-- <script type="text/javascript">
        //<![CDATA[
        $.extend(Project, {
            "basePath": "\/",
            "params": {
                "controller": "artists",
                "action": "admin_index"
            }
        });
        //]]>
    </script> -->
    <script type="text/javascript" src="/js/bootstrap.js"></script>


</head>

<body data-gr-c-s-loaded="true" class="common">
    <div class="body_wrapp common">
        <div id="main_container" class="clearfix common">
            <div id="main_content" class="common">
                <div class="content_inner common">
                    <div id="article" class="common">
                        <div class="usr_menu common">
                            <span class="date">
                                Mon : <?php echo date("d-m-Y"); ?> </span>
                            Welcome admin | <a href="#">Setting</a> | <?php echo $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout', '_full' => true]); ?></div>
                        <h2 class="page_title"><?= $judul; ?></h2>
                        <!-- Content HERE !!!!! -->
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>
                    </div>
                    <!--end #article-->

                </div>
                <!--end .content_inner-->
            </div>
            <!--end #main_content-->

            <div id="side_menu" class="common">

                <h1 id="admin-id">Administrator Area</h1>
                <div class="row common">
                    <div class="common">
                        <h6 class="common"><a href="#" id="">Dashboard</a>
                        </h6>
                    </div>
                </div>
                <!--end .row-->

                <div class="row common">
                    <h6 class="common"><a href="#">Pelaku Seni</a></h6>
                    <div id="" class="common">
                        <ul class="common">
                            <li class="common"><?php echo $this->Html->link('Individu', ['controller' => 'artists', 'action' => 'index', '_full' => true]); ?></li>
                            <li class="common"><?php echo $this->Html->link('Collective', ['controller' => 'collectives', 'action' => 'index', '_full' => true]); ?></li>
                            <li class="common"><?php echo $this->Html->link('Kategori Pelaku Seni', ['controller' => 'creative-industries', 'action' => 'index', '_full' => true]); ?></li>
                        </ul>
                    </div>
                </div>
                <!--end .row-->

                <div class="row common">
                    <h6 class="common"><a href="#" id="">Karya Seni</a></h6>
                    <div id="" class="common">
                        <ul class="common">
                            <li class="common"><?php echo $this->Html->link('List', ['controller' => 'artworks', 'action' => 'index', '_full' => true]); ?> </li>
                            <li class="common"><?php echo $this->Html->link('Media', ['controller' => 'media', 'action' => 'index', '_full' => true]); ?></li>
                            <li class="common"><?php echo $this->Html->link('Kategori', ['controller' => 'artworks-categories', 'action' => 'index', '_full' => true]); ?></li>
                        </ul>
                    </div>
                </div>
                <!--end .row-->

                <div class="row common">
                    <h6 class="common"><a href="#" id="">Lokasi</a></h6>
                    <div id="" class="common">
                        <ul class="common">
                            <li class="common"><?php echo $this->Html->link('Negara', ['controller' => 'countries', 'action' => 'index', '_full' => true]); ?> </li>
                            <li class="common"><?php echo $this->Html->link('Provinsi', ['controller' => 'provinces', 'action' => 'index', '_full' => true]); ?>
                            </li>
                            <li class="common"><?php echo $this->Html->link('Kota', ['controller' => 'cities', 'action' => 'index', '_full' => true]); ?></li>
                            <li class="common"><?php echo $this->Html->link('Domisili', ['controller' => 'domiciles', 'action' => 'index', '_full' => true]); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end .row-->

                <div class="row common">
                    <h6 class="common"><a href="#">Events</a></h6>
                    <div id="" class="common">
                        <ul class="common">
                            <li class="common"><?php echo $this->Html->link('List Event', ['controller' => 'events', 'action' => 'index', '_full' => true]); ?> </li>
                            <li class="common"><?php echo $this->Html->link('Kategori', ['controller' => 'events-categories', 'action' => 'index', '_full' => true]); ?> </li>
                            <li class="common"><?php echo $this->Html->link('EO', ['controller' => 'event-organizers', 'action' => 'index', '_full' => true]); ?>
                            </li>
                            <li class="common"><?php echo $this->Html->link('Ruang Seni', ['controller' => 'art-venues', 'action' => 'index', '_full' => true]); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end .row-->

                <div class="row common">
                    <h6 class="common"><a href="s#">Khazanah</a></h6>
                    <div id="" class="common">
                        <ul class="common">
                            <li class="common"><?php echo $this->Html->link('List Khazanah', ['controller' => 'khazanahs', 'action' => 'index', '_full' => true]); ?> </li>
                            <li class="common"><?php echo $this->Html->link('Kategori', ['controller' => 'khazanah-categories', 'action' => 'index', '_full' => true]); ?> </li>
                        </ul>
                    </div>
                </div>
                <!--end .row-->

                <div class="row common">
                    <h6 class="common"><a href="#">Pages</a></h6>
                </div>
                <!--end .row-->

                <div class="row common">
                    <h6 class="common"><a href="#">Slideshows</a></h6>
                </div>
                <!--end .row-->
                <div class="row common">
                    <h6 class="common"><a href="#">User</a></h6>
                </div>
                <!--end .row-->
                <div class="row common">
                    <h6 class="common"><a href="#">Report</a></h6>
                </div>
                <!--end .row-->

                <div class="row common">
                    <h6 class="common"><a href="#">Guide</a></h6>
                </div>
                <!--end .row-->

            </div>
            <!--end #side_menu-->

        </div>
        <!--end #main_container-->
        <div id="footer">
            Copyright © 2011 IVAA. All rights reserved.
        </div>
        <!--end #footer-->
    </div>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-33187369-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>




</body>

</html>