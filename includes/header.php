<?php
include("includes/config.php");
error_reporting(0);
?>
<?php if($_SESSION['login']!="")
{?>
<header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Welcome: </strong><?php echo htmlentities($_SESSION['sname']);?>
                    &nbsp;&nbsp;
                    


                    <strong>Last Login:<?php 
        $ret=mysqli_query($con,"SELECT  * from userlog where studentRegno='".$_SESSION['login']."' order by id desc limit 1,1");
                    $row=mysqli_fetch_array($ret);
                    echo $row['userip']; ?> at <?php echo $row['loginTime'];?></strong>
                </div>

            </div>
        </div>
    </header>
    <?php } ?>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:#fff; font-size:24px; line-height:24px; position: relative; left: 80px; top: -50px; ">

                    <img src="./includes/unilag_logo.png" alt="unilag_logo" style="position: relative;right: 80px; width: 60px; top: 60px; float: left;">
                    <p style="float: right;">University of Lagos Online Course Registration</p>
                   
                </a>

            </div>

          <div class="left-div" style="float: right;position: relative;top: 25; right: 10px">
                <i class="fa fa-user-plus login-icon" style=""></i>
                </div>
            </div>
        </div>