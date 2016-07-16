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

            公众号添加
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

            <li><a href="#">公众号添加</a></li>

        </ul>

    </div>

</div>


<div class="portlet box green" style="margin-top: 10px">

    <div class="portlet-title">

        <div class="caption"><i class="icon-reorder"></i>公众号</div>

        <div class="tools">

            <a href="javascript:;" class="collapse"></a>

            <a href="#portlet-config" data-toggle="modal" class="config"></a>

            <a href="javascript:;" class="reload"></a>

            <a href="javascript:;" class="remove"></a>

        </div>

    </div>

    <div class="portlet-body form">

        <!-- BEGIN FORM-->

        <h3>公众号添加</h3>

        <form action="index.php?r=index/addinfo" id="form_sample_2" class="form-horizontal" method="post">

            <div class="alert alert-error hide">

                <button class="close" data-dismiss="alert"></button>

                You have some form errors. Please check below.

            </div>

            <div class="alert alert-success hide">

                <button class="close" data-dismiss="alert"></button>

                Your form validation is successful!

            </div>

            <div class="control-group">

                <label class="control-label">公众号名称<span class="required">*</span></label>

                <div class="controls">

                    <input type="text" name="w_name" data-required="1" class="span6 m-wrap"/>

                </div>

            </div>

            <div class="control-group">

                <label class="control-label">Appid<span class="required">*</span></label>

                <div class="controls">

                    <input name="w_appid" type="text" class="span6 m-wrap"/>

                </div>

            </div>

            <div class="control-group">

                <label class="control-label">Appsecret<span class="required">*</span>&nbsp;&nbsp;</label>

                <div class="controls">

                    <input name="w_serveid" type="text" class="span6 m-wrap"/>

                </div>

            </div>


            <div class="form-actions">

                <button type="submit" class="btn green">添加</button>

                <button type="reset" class="btn">重填</button>

            </div>

        </form>

        <!-- END FORM-->

    </div>

</div>
</div>