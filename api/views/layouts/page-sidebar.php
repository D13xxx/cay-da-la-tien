<?php
use yii\helpers\Url;
?>
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="index.html">BAOHIEM.VN</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="<?= Url::to(['info-profile/update'])?>" class="profile-mini">
                <img src="/theme/assets/images/users/avatar.jpg" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="/theme/assets/images/users/avatar.jpg" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <?php
                        $id = \Yii::$app->user->identity->id;
                        $user = \common\models\InfoProfile::find()->where(['user_id'=>$id])->one();
                    ?>
                    <div class="profile-data-name"><?= $user->full_name ?></div>
                    <div class="profile-data-title">Web Developer/Designer</div>
                </div>
                <div class="profile-controls">
                    <a href="<?= Url::to(['info-profile/update','id'=>\Yii::$app->user->identity->id])?>" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                </div>
            </div>                                                                        
        </li>
        <li class="xn-title">M01 - Danh mục hệ thống</li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-dashboard"></span> <span class="xn-text">Phân quyền</span></a>
            <ul>
                <li><a href="<?= Url::to('/rbac/route')?>"><span class="xn-text">RBAC Route</span></a></li>
                <li><a href="<?= Url::to('/rbac/permission')?>"><span class="xn-text">RBAC Permission</span></a></li>
                <li><a href="<?= Url::to('/rbac/role')?>"><span class="xn-text">RBAC Role</span></a></li>
                <li><a href="<?= Url::to('/rbac/assignment')?>"><span class="xn-text">RBAC Assignment</span></a></li>
            </ul>
        </li>                    
        <?php
        if (\Yii::$app->user->can('Admin')) {?>
        <li class="xn-title">M02 - Tin tức / Bài viết</li>
        <li class="xn-openable">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Tin tức</span></a>
            <ul>
                <li><a href="<?= Url::to('/articles/index')?>"><span class="fa fa-heart"></span> Tin tức</a></li>
                <li><a href="<?= Url::to('/cat-articles/index')?>"><span class="fa fa-heart"></span> Nhóm tin</a></li>
            </ul>
        </li>

        <?php } else {?>
            <li class="xn-title">M02 - Danh mục cấu hình</li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>
                <ul>
                    <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>
                    <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                    <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>
                    <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                    <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                    <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                    <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                    <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                    <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>
                    <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                    <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                    <li><a href="ui-nestable.html"><span class="fa fa-sitemap"></span> Nestable List</a></li>
                    <li><a href="ui-autocomplete.html"><span class="fa fa-search-plus"></span> Autocomplete</a></li>
                    <li><a href="ui-slide-menu.html"><span class="fa fa-angle-right"></span> Slide Menu</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                <ul>
                    <li class="xn-openable">
                        <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
                        <ul>
                            <li><a href="form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
                            <li><a href="form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
                            <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                            <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                        </ul>
                    </li>
                    <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                    <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                    <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                    <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                    <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                <ul>
                    <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                    <li><a href="table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
                    <li><a href="table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
                </ul>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                <ul>
                    <li><a href="charts-morris.html">Morris</a></li>
                    <li><a href="charts-nvd3.html">NVD3</a></li>
                    <li><a href="charts-rickshaw.html">Rickshaw</a></li>
                    <li><a href="charts-other.html">Other</a></li>
                </ul>
            </li>
            <li>
                <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
            </li>
            <li class="xn-openable">
                <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                <ul>
                    <li class="xn-openable">
                        <a href="#">Second Level</a>
                        <ul>
                            <li class="xn-openable">
                                <a href="#">Third Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Fourth Level</a>
                                        <ul>
                                            <li><a href="#">Fifth Level</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        <?php } ?>


    </ul>
    <!-- END X-NAVIGATION -->
</div>