<?php
    include 'dbconn.php';
    
    $conn=new mysqli($db_servername,$db_username,$db_password,$db_dbname);

    // if($conn->connect_errno):
    //     echo $conn->connect_error;
    //     exit();
    // endif;
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cash Plan UPM</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <img src="images/upm.png" style="max-height:26px;">
                    Cash Plan
                </a>
            </div>

            <ul class="nav">
                <li id="profile" class="active">
                    <a href="javascript:makeActive('profile')">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li id="transact">
                    <a href="javascript:makeActive('transact')">
                        <i class="ti-panel"></i>
                        <p>Transaction History</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <script>
        function makeActive(str){
            var content=['profile-content','transact-content'];
            document.getElementsByClassName('active')[0].classList.remove('active');
            document.getElementById(str).classList.add('active');
            content.forEach(function(element){
                document.getElementById(element).classList.add('content-hide');
            });
            document.getElementById(str+"-content").classList.remove('content-hide');

        //for mobile navigation bar
            if(document.getElementsByClassName('nav-open'))
                document.getElementsByClassName('nav-open')[0].classList.remove('nav-open');

            obj=document.getElementById('bodyClick');
            if(obj)
                obj.parentNode.removeChild(obj);
            
            if(document.getElementsByClassName('navbar-toggle'))
                document.getElementsByClassName('navbar-toggle')[0].classList.remove('toggled');

            pd.misc.navbar_menu_visible = 0;
        }
    </script>

<?php
    $sql="SELECT `user_name` from user where `user_id`='183172';";
    $result=$conn->query($sql);
    $username=$result->fetch_assoc()['user_name'];
?>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Hi, <?=$username?></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li> -->
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content content-fade" id="profile-content">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="assets/img/background.jpg" alt="..."/>
                                </div>
                                <div class="content">
                                    <div class="author">
                                      <img class="avatar border-white" src="images/upm2.jpg" alt="..." style="background-color:white;"/>
                                      <h4 class="title"><?=$username?><br />
                                         <a href="#"><small>@<?=strtolower(str_replace(' ','',$username))?></small></a>
                                      </h4>
                                    </div>
                                    <p class="description text-center">
                                        <!-- Enter personal details here -->
                                    </p>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-md-5 col-md-offset-1">
    <?php
        $sql="select card_balance from card where user_id='183172'";
        $result=$conn->query($sql);
        $balance=$result->fetch_assoc()['card_balance'];
    ?>


                                            <h5><?=$balance?><br /><small>Balance</small></h5>
                                        </div>
                                        <div class="col-md-5">
                                            <h5>RM5.00<br /><small>Spent Today</small></h5>
                                        </div>
                                        <!-- <div class="col-md-3">
                                            <h5>24,6$<br /><small>Spent</small></h5>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control border-input" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                <?php
                                                    $firstname=explode(' ',$username,2)[0];
                                                    $lastname=explode(' ',$username,2)[1];
                                                ?>
                                                    <input type="text" class="form-control border-input" placeholder="First Name" value="<?=$firstname?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control border-input" placeholder="Last Name" value="<?=$lastname?>">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <textarea rows="5" class="form-control border-input" placeholder="Here can be your description"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                            </div>
                        </div>
        
        
                    </div>
                </div>
        </div>

<?php
    $sql="SELECT a.purchase_date, b.item_name, c.shop_name, (b.item_price*b.item_quantity) 
            from purchase a 
            inner join `card` d on a.card_id=d.card_id 
            inner join item b on a.purchase_id=b.purchase_id 
            inner join shop c on a.shop_id=c.shop_id
        where d.user_id='183172';";

    $result=$conn->query($sql);
    $counter=1;
?>

        <div class="content content-fade content-hide" id="transact-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Transaction History</h4>
                                <p class="category">Hover at a row to see timestamp</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>No.</th>
                                        <th>Item</th>
                                        <th>Shop</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                    </thead>
                                    <tbody>

                <?php while($row=$result->fetch_row()): ?>
                                        <tr title="<?=$row[0]?>">
                                            <td><?=$counter?></td>
                                            <td><?=$row[1]?></td>
                                            <td><?=$row[2]?></td>
                                            <td><?=$row[3]?></td>
                                            <td><?=$row[4]?></td>
                                        </tr>
                <?php $counter++; endwhile; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <!-- <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul> -->
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, CashPlan UPM
<!--                     
                    made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a> -->
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<!-- <script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script> -->

</html>
