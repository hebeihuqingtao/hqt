
<div class="container-fluid">

    <!-- BEGIN PAGE HEADER-->

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

            <!-- BEGIN PAGE TITLE & BREADCRUMB-->

            <h3 class="page-title">

                主页 <small>statistics and more</small>

            </h3>

            <ul class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="index.html">Home</a>

                    <i class="icon-angle-right"></i>

                </li>

                <li><a href="#">主页</a></li>

                <li class="pull-right no-text-shadow">

                    <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">

                        <i class="icon-calendar"></i>

                        <span></span>

                        <i class="icon-angle-down"></i>

                    </div>

                </li>

            </ul>

            <!-- END PAGE TITLE & BREADCRUMB-->

        </div>

    </div>

    <!-- END PAGE HEADER-->

    <div id="dashboard">

        <!-- BEGIN DASHBOARD STATS -->

        <div class="row-fluid">

            <div class="span3 responsive" data-tablet="span6" data-desktop="span3">

                <div class="dashboard-stat blue">

                    <div class="visual">

                        <i class="icon-comments"></i>

                    </div>

                    <div class="details">

                        <div class="number">

                            1349

                        </div>

                        <div class="desc">

                            New Feedbacks

                        </div>

                    </div>

                    <a class="more" href="#">

                        View more <i class="m-icon-swapright m-icon-white"></i>

                    </a>

                </div>

            </div>

            <div class="span3 responsive" data-tablet="span6" data-desktop="span3">

                <div class="dashboard-stat green">

                    <div class="visual">

                        <i class="icon-shopping-cart"></i>

                    </div>

                    <div class="details">

                        <div class="number">549</div>

                        <div class="desc">New Orders</div>

                    </div>

                    <a class="more" href="#">

                        View more <i class="m-icon-swapright m-icon-white"></i>

                    </a>

                </div>

            </div>

            <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">

                <div class="dashboard-stat purple">

                    <div class="visual">

                        <i class="icon-globe"></i>

                    </div>

                    <div class="details">

                        <div class="number">+89%</div>

                        <div class="desc">Brand Popularity</div>

                    </div>

                    <a class="more" href="#">

                        View more <i class="m-icon-swapright m-icon-white"></i>

                    </a>

                </div>

            </div>

            <div class="span3 responsive" data-tablet="span6" data-desktop="span3">

                <div class="dashboard-stat yellow">

                    <div class="visual">

                        <i class="icon-bar-chart"></i>

                    </div>

                    <div class="details">

                        <div class="number">12,5M$</div>

                        <div class="desc">Total Profit</div>

                    </div>

                    <a class="more" href="#">

                        View more <i class="m-icon-swapright m-icon-white"></i>

                    </a>

                </div>

            </div>

        </div>

        <!-- END DASHBOARD STATS -->

        <div class="clearfix"></div>


        <div class="row-fluid">

            <div class="span6">

                <!-- BEGIN PORTLET-->

                <div class="portlet box blue calendar">

                    <div class="portlet-title">

                        <div class="caption"><i class="icon-calendar"></i>Calendar</div>

                    </div>

                    <div class="portlet-body light-grey">

                        <div id="calendar">

                        </div>

                    </div>

                </div>

                <!-- END PORTLET-->

            </div>

            <div class="span6">

                <!-- BEGIN PORTLET-->

                <div class="portlet">

                    <div class="portlet-title line">

                        <div class="caption"><i class="icon-comments"></i>Chats</div>

                        <div class="tools">

                            <a href="" class="collapse"></a>

                            <a href="#portlet-config" data-toggle="modal" class="config"></a>

                            <a href="" class="reload"></a>

                            <a href="" class="remove"></a>

                        </div>

                    </div>

                    <div class="portlet-body" id="chats">

                        <div class="scroller" data-height="435px" data-always-visible="1" data-rail-visible1="1">

                            <ul class="chats">

                                <li class="in">

                                    <img class="avatar" alt="" src="image/avatar1.jpg" />

                                    <div class="message">

                                        <span class="arrow"></span>

                                        <a href="#" class="name">Bob Nilson</a>

                                        <span class="datetime">at Jul 25, 2012 11:09</span>

													<span class="body">

													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

													</span>

                                    </div>

                                </li>

                                <li class="out">

                                    <img class="avatar" alt="" src="image/avatar2.jpg" />

                                    <div class="message">

                                        <span class="arrow"></span>

                                        <a href="#" class="name">Lisa Wong</a>

                                        <span class="datetime">at Jul 25, 2012 11:09</span>

													<span class="body">

													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

													</span>

                                    </div>

                                </li>

                                <li class="in">

                                    <img class="avatar" alt="" src="image/avatar1.jpg" />

                                    <div class="message">

                                        <span class="arrow"></span>

                                        <a href="#" class="name">Bob Nilson</a>

                                        <span class="datetime">at Jul 25, 2012 11:09</span>

													<span class="body">

													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

													</span>

                                    </div>

                                </li>

                                <li class="out">

                                    <img class="avatar" alt="" src="image/avatar3.jpg" />

                                    <div class="message">

                                        <span class="arrow"></span>

                                        <a href="#" class="name">Richard Doe</a>

                                        <span class="datetime">at Jul 25, 2012 11:09</span>

													<span class="body">

													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

													</span>

                                    </div>

                                </li>

                                <li class="in">

                                    <img class="avatar" alt="" src="image/avatar3.jpg" />

                                    <div class="message">

                                        <span class="arrow"></span>

                                        <a href="#" class="name">Richard Doe</a>

                                        <span class="datetime">at Jul 25, 2012 11:09</span>

													<span class="body">

													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

													</span>

                                    </div>

                                </li>

                                <li class="out">

                                    <img class="avatar" alt="" src="image/avatar1.jpg" />

                                    <div class="message">

                                        <span class="arrow"></span>

                                        <a href="#" class="name">Bob Nilson</a>

                                        <span class="datetime">at Jul 25, 2012 11:09</span>

													<span class="body">

													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

													</span>

                                    </div>

                                </li>

                                <li class="in">

                                    <img class="avatar" alt="" src="image/avatar3.jpg" />

                                    <div class="message">

                                        <span class="arrow"></span>

                                        <a href="#" class="name">Richard Doe</a>

                                        <span class="datetime">at Jul 25, 2012 11:09</span>

													<span class="body">

													Lorem ipsum dolor sit amet, consectetuer adipiscing elit,

													sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.

													</span>

                                    </div>

                                </li>

                                <li class="out">

                                    <img class="avatar" alt="" src="image/avatar1.jpg" />

                                    <div class="message">

                                        <span class="arrow"></span>

                                        <a href="#" class="name">Bob Nilson</a>

                                        <span class="datetime">at Jul 25, 2012 11:09</span>

													<span class="body">

													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet.

													</span>

                                    </div>

                                </li>

                            </ul>

                        </div>

                        <div class="chat-form">

                            <div class="input-cont">

                                <input class="m-wrap" type="text" placeholder="Type a message here..." />

                            </div>

                            <div class="btn-cont">

                                <span class="arrow"></span>

                                <a href="" class="btn blue icn-only"><i class="icon-ok icon-white"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- END PORTLET-->

            </div>

        </div>

    </div>

</div>