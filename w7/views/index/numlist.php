<div class="container-fluid">


<!--//头部-->
<div class="row-fluid">

    <div class="span12">

        <!-- BEGIN STYLE CUSTOMIZER -->

        <div class="color-panel hidden-phone">

            <div class="color-mode-icons icon-color"></div>

            <div class="color-mode-icons icon-color-close"></div>

            <div class="color-mode">

                <p>THEME COLOR</p>

                <ul class="inline">

                    <li class="color-black current color-default" data-style="default"></li>

                    <li class="color-blue" data-style="blue"></li>

                    <li class="color-brown" data-style="brown"></li>

                    <li class="color-purple" data-style="purple"></li>

                    <li class="color-grey" data-style="grey"></li>

                    <li class="color-white color-light" data-style="light"></li>

                </ul>

                <label>

                    <span>Layout</span>

                    <select class="layout-option m-wrap small">

                        <option value="fluid" selected>Fluid</option>

                        <option value="boxed">Boxed</option>

                    </select>

                </label>

                <label>

                    <span>Header</span>

                    <select class="header-option m-wrap small">

                        <option value="fixed" selected>Fixed</option>

                        <option value="default">Default</option>

                    </select>

                </label>

                <label>

                    <span>Sidebar</span>

                    <select class="sidebar-option m-wrap small">

                        <option value="fixed">Fixed</option>

                        <option value="default" selected>Default</option>

                    </select>

                </label>

                <label>

                    <span>Footer</span>

                    <select class="footer-option m-wrap small">

                        <option value="fixed">Fixed</option>

                        <option value="default" selected>Default</option>

                    </select>

                </label>

            </div>

        </div>

        <!-- END BEGIN STYLE CUSTOMIZER -->

        <h3 class="page-title">

            公众号列表
            <small>form components and widgets</small>

        </h3>

        <ul class="breadcrumb">

            <li>

                <i class="icon-home"></i>

                <a href="index.html">主页</a>

                <span class="icon-angle-right"></span>

            </li>

            <li>

                <a href="#">公众号管理</a>

                <span class="icon-angle-right"></span>

            </li>

            <li><a href="#">公众号列表</a></li>

        </ul>

    </div>

</div>



<div class="portlet box blue">

    <div class="portlet-title">

        <div class="caption"><i class="icon-globe"></i>Show/Hide Columns</div>

        <div class="actions">

            <div class="btn-group">

                <a class="btn" href="#" data-toggle="dropdown">

                    Columns

                    <i class="icon-angle-down"></i>

                </a>

                <div id="sample_2_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">

                    <label><input type="checkbox" checked data-column="0">Rendering engine</label>

                    <label><input type="checkbox" checked data-column="1">Browser</label>

                    <label><input type="checkbox" checked data-column="2">Platform(s)</label>

                    <label><input type="checkbox" checked data-column="3">Engine version</label>

                    <label><input type="checkbox" checked data-column="4">CSS grade</label>

                </div>

            </div>

        </div>

    </div>

    <div class="portlet-body">

        <table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">

            <thead>

            <tr>

                <th>编号</th>

                <th>名称</th>

                <th class="hidden-480">Appid</th>

                <th class="hidden-480">Appsecret</th>

                <th class="hidden-480">Url</th>

                <th class="hidden-480">Token</th>

                <th class="hidden-480">操作</th>

            </tr>

            </thead>
          <?php foreach ($countries as $country): ?>
            <tbody>
            <tr >

                <td><?=$country->w_id?></td>

                <td><?=$country->w_name?></td>

                <td class="hidden-480"><?=$country->w_appid?></td>

                <td class="hidden-480"><?=$country->w_serveid?></td>

                <td class="hidden-480"><?=$country->w_url?></td>

                <td class="hidden-480"><?=$country->w_token?></td>

                <td class="hidden-480">
                    <a href="javascript:;" id='del' wid="<?=$country->w_id?>"><img src="image/del.jpg"></a>
                    <a href="index.php?r=index/getone&w_id=<?=$country->w_id?>"><img src="image/up.jpg"></a>
                </td>

            </tr>

            </tbody>
          <?php endforeach  ?>
        </table>

    </div>


</div>
</div>

