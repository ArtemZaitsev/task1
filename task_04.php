<?php
$data =
    [
        [
            "title"         => "My Tasks",
            "value"         => "130 / 500",
            "aria-valuenow" => "34",
            "aria-valuemax" => "65",
            "class_pr_bar"  => "bg-fusion-400",
            "width_pr_bar"  => "65",
        ],

        [
            "title"         => "Transfered",
            "value"         => "440 TB",
            "aria-valuenow" => "34",
            "aria-valuemax" => "100",
            "class_pr_bar"  => "bg-success-500",
            "width_pr_bar"  => "34",
        ],

        [
            "title"         => "Bugs Squashed",
            "value"         => "77%",
            "aria-valuenow" => "77",
            "aria-valuemax" => "100",
            "class_pr_bar"  => "bg-info-400",
            "width_pr_bar"  => "77",
        ],

        [
            "title"         => "User Testing",
            "value"         => "7 days",
            "aria-valuenow" => "84",
            "aria-valuemax" => "100",
            "class_pr_bar"  => "bg-primary-300",
            "width_pr_bar"  => "84",
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php foreach ($data as $item):?>
                            <div class="d-flex mt-2">
                                <? echo $item['title'];?>
                                <span class="d-inline-block ml-auto"><? echo $item['value'];?></span>
                            </div>
                            <div class="progress progress-sm mb-3">
                                <div class="progress-bar <? echo $item['class_pr_bar'];?>" role="progressbar" style="width:<? echo $item['width_pr_bar'];?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
