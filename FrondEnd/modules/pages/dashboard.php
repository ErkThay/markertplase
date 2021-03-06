        <!-- inicio contenedor -->
        <main class="page-content mb-5">
        <?php 
            $titlePage = "Dashboard";
            $titleNav = null;
            include 'modules/components/nav-page.php';
        ?>
            <div class="card border-primary shadow mb-5 bg-white rounded container-md">
                        <div class="direct-chat-msg mt-4">
                            <img src="img/mercado.png" class="img-fluid direct-chat-img rounded ml-5" alt="Responsive image" style="width: 20%;height: 20%;">
                            <div class="float-left">
                                <h1 class="rounded float-left mt-4 ml-2"><b>Market</b>Plase</h1>
                            </div>
                        </div>
                <div class="input-group input-group input-group-lg mb-3 mt-5 container">
                    <input type="text" class="form-control" placeholder="find what you want" aria-label="find what you want" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary text-white" id="basic-addon2"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
            

            <!-- Small boxes (Stat box) -->
            <div class="row p-0 m-0">
                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                        <h3>150</h3>
        
                        <p>New Orders</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
        
                        <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3">
                   <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                        <h3>44</h3>
        
                        <p>User Registrations</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-md-3">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                        <h3>65</h3>
        
                        <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            
                <div class="col-lg-6">
                    <div class="card direct-chat direct-chat-primary shadow p-3 mb-5 bg-white rounded">
                        <div class="card-header mt-4">
                            <h3 class="card-title">Direct Chat</h3>

                            <div class="card-tools">
                                <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                                        data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="img/user1-128x128.jpg" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="img/user3-128x128.jpg" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                You better believe it!
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="img/user1-128x128.jpg" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                Working with AdminLTE on a great new app! Wanna join?
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                </div>
                                <!-- /.direct-chat-infos -->
                                <img class="direct-chat-img" src="img/user3-128x128.jpg" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                I would love to.
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            </div>
                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->
                            <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="img/user1-128x128.jpg">

                                    <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Count Dracula
                                        <small class="contacts-list-date float-right">2/28/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="img/user7-128x128.jpg">

                                    <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Sarah Doe
                                        <small class="contacts-list-date float-right">2/23/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">I will be waiting for...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="img/user3-128x128.jpg">

                                    <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Nadia Jolie
                                        <small class="contacts-list-date float-right">2/20/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">I'll call you back at...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="img/user5-128x128.jpg">

                                    <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Nora S. Vans
                                        <small class="contacts-list-date float-right">2/10/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Where is your new...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="img/user6-128x128.jpg">

                                    <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        John K.
                                        <small class="contacts-list-date float-right">1/27/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Can I take a look at...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                                </li>
                                <!-- End Contact Item -->
                                <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="img/user8-128x128.jpg">

                                    <div class="contacts-list-info">
                                    <span class="contacts-list-name">
                                        Kenneth M.
                                        <small class="contacts-list-date float-right">1/4/2015</small>
                                    </span>
                                    <span class="contacts-list-msg">Never mind I found...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                                </li>
                                <!-- End Contact Item -->
                            </ul>
                            <!-- /.contacts-list -->
                            </div>
                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form action="#" method="post">
                                <div class="input-group ">
                                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                    <span class="input-group-append">
                                    <button type="button" class="btn btn-primary">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="card-header">
                            <h3 class="card-title">Recently Added Products</h3>

                            <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                                <div class="product-img">
                                <img src="img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Samsung TV
                                    <span class="badge badge-warning float-right">$1800</span></a>
                                <span class="product-description">
                                    Samsung 32" 1080p 60Hz LED Smart HDTV.
                                </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                <img src="img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Bicycle
                                    <span class="badge badge-info float-right">$700</span></a>
                                <span class="product-description">
                                    26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                <img src="img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">
                                    Xbox One <span class="badge badge-danger float-right">
                                    $350
                                </span>
                                </a>
                                <span class="product-description">
                                    Xbox One Console Bundle with Halo Master Chief Collection.
                                </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            <li class="item">
                                <div class="product-img">
                                <img src="img/default-150x150.png" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 4
                                    <span class="badge badge-success float-right">$399</span></a>
                                <span class="product-description">
                                    PlayStation 4 500GB Console (PS4)
                                </span>
                                </div>
                            </li>
                            <!-- /.item -->
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">View All Products</a>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                </div>  
            </div>
            <div class="" id="content">
                
            </div>

            
        </main>
        <!-- final contenedor -->
        
   


    

