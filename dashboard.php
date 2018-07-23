<?php
include 'log_connect.php';

$date = date("Y-m-d");


$parts = explode('-',$date);
$month = $parts[1];


$sub = $_SESSION['name'];
?>
<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Dashboard</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" /><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />

      <style type="text/css">
          <!--

          @media print
          {
              .noprint {display:none;}
          }

          @media screen
          {
              ...
          }

          -->
      </style>
  </head>
  <body class='main page'>
    <!-- Navbar -->
    <div class='navbar navbar-default noprint' id='navbar'>
      <a class='navbar-brand' href='#'>
          <img src="assets/images/logi.jpg" style="height: 50px; width: 50px " class="img-circle">Eldoret Law Courts E-DIARY
      </a>
      <ul class='nav navbar-nav pull-right'>
        <li class='dropdown'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-envelope'></i>
            My Menu
            <span class='badge'>5</span>
            <b class='caret'></b>
          </a>
          <ul class='dropdown-menu'>
            <li>
              <a href='#'>Registered</a>
            </li>
            <li>
              <a href='#'>Todays</a>
            </li>
            <li>
              <a href='#'>This Month</a>
            </li>
            <li>
              <a href='#'>This Year</a>
            </li>
          </ul>
        </li>
        <li>
          <a href='#'>
            <i class='icon-cog'></i>
            Settings
          </a>
        </li>
        <li class='dropdown user'>
          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
            <i class='icon-user'></i>
            <strong><?php echo $_SESSION['name']; ?></strong>
            <img class="img-rounded" src="http://placehold.it/20x20/ccc/777" />
            <b class='caret'></b>
          </a>
          <ul class='dropdown-menu'>
            <li>
              <a href='#'>Edit Profile</a>
            </li>
            <li class='divider'></li>
            <li>
              <a href="index.php">Sign out</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div id='wrapper'>
      <!-- Sidebar -->
      <section id='sidebar' class="noprint">
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
          <li class='active launcher'>
            <i class='icon-dashboard'></i>
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class='launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="register.php">Registration</a>
          </li>
          <li class='launcher dropdown hover'>
            <i class='icon-flag'></i>
            <a href='#'>Reports</a>
            <ul class='dropdown-menu'>
              <li class='dropdown-header'>Cases Summary</li>
              <li>
                <a><form method='post' action='dashboard.php'>
                        <input type="submit" class="btn btn-success" value="Registered Today" name="today"/>
                    </form></a>
              </li>
              <li>
                <a><form method='post' action='dashboard.php'>
                        <input type="submit" class="btn btn-success" value="Today's" name="tod"/>
                    </form></a>
              </li>
              <li>
                <a><form method='post' action='dashboard.php'>
                        <input type="submit" class="btn btn-success" value="This Month's" name="mon"/>
                    </form></a>
              </li>
              <li>
                <a><form method='post' action='dashboard.php'>
                            <input type="submit" class="btn btn-success" value="My Reg Cases    " name="my"/>
                        </form></a>
              </li>
            </ul>
          </li>
          <li class='launcher'>
            <i class='icon-bookmark'></i>
            <a href='#'>Bookmarks</a>
          </li>
          <li class='launcher'>
            <i class='icon-cloud'></i>
            <a href='#'>Backup</a>
          </li>
          <li class='launcher'>
            <i class='icon-bug'></i>
            <a href='#'>Feedback</a>
          </li>
        </ul>
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
      </section>
      <!-- Tools -->
      <section id='tools' class="noprint">
        <ul class='breadcrumb' id='breadcrumb'>
          <li class='title'>Dashboard</li>
        </ul>
      </section>
      <!-- Content -->
      <div id='content'>
        <div class='panel panel-default'>
          <div class='panel-heading noprint'>
                E-DIARY
            <div class='panel-tools'>
              <div class='btn-group'>

                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Toggle'>
                  <i class='icon-chevron-down'></i>
                </a>
              </div>
            </div>
          </div>
            <div class='panel-body noprint'>
                <center>
                    <table>
                        <form method='post' action='dashboard.php'>
                            <td>
                                <button type="submit" class="btn btn-success" name="today" style='background-color: red; padding: 10px; margin: 4px 2px;  border-radius: 12px;'> <b> Cases Registered Today </b> </button></td>
                        </form>
                        <form method='post' action='dashboard.php'>

                            <td><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><button type="submit" class="btn btn-success" name="tod" style='background-color: blue; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> Today's Cases </b> </button></td>
                        </form>
                        <form method='post' action='dashboard.php'>
                            <td><label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><button type="submit" class="btn btn-success" name="mon" style='background-color: blue; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> This Month's Cases </b> </button></td>
                        </form>
                        <form method='post' action='dashboard.php'>

                            <td><label>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><button type="submit" class="btn btn-success" name="my" style='background-color: sandybrown; padding: 10px; margin: 4px 2px; border-radius: 12px;'> <b> My Registered Cases </b> </button></td>
                            </tr>
                        </form>
                    </table>
                    <table>
                        <form method='post' action='dashboard.php'>

                            <td><label> Enter date/Case number: </label>
                                <input type="text" name="sdate" placeholder="Date/Case number" required>
                                <button type="submit" class="btn btn-success" name="sea" style='background-color: green; padding: 6px; margin: 4px 2px; border-radius: 12px;'> <b> Search </b> </button></td>
                        </form>

                        <form method='post' action='dashboard.php'>

                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label> Select Month: </label>
                                <select name="mun">
                                    <option value="01"> January </option>
                                    <option value="02"> February </option>
                                    <option value="03"> March </option>
                                    <option value="04"> April </option>
                                    <option value="05"> May </option>
                                    <option value="06"> June </option>
                                    <option value="07"> July </option>
                                    <option value="08"> August </option>
                                    <option value="09"> September </option>
                                    <option value="10"> October </option>
                                    <option value="11"> November </option>
                                    <option value="12"> December </option>
                                </select>
                                <button type="submit" class="btn btn-success" name="month" style='background-color: deeppink; padding: 6px; margin: 4px 2px; border-radius: 12px;'> <b> Search </b> </button></td>
                        </form>
                    </table>
                </center>

                <script type="text/javascript">
                    function printtable()
                    {
                        window.print()
                    }
                </script>
            </div>
                <?php


                include "connect.php";

                if(isset($_POST['today'])){

                $run = "SELECT * FROM registration WHERE Date_Registered='$date' ORDER BY Court";
                $nur = mysqli_query($conn, $run);
                $numr = mysqli_num_rows($nur);

                if ($numr > 0){


                    echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> Cases Registered Today</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Registered by</th><th>Court</th><th>Activity</th><th>Date of Case</th></tr></thead>";

                while ($row = mysqli_fetch_assoc($nur)) {



                echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Registrar"] . "</td><td>" . $row["Court"] . "</td><td>" . $row["Activity"] . "</td><td>" . $row["Date"] . "</td></tr>";

                }
                echo "</table></center>";
                echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                }
                else{
                    ?>
                    <script> alert("No Cases Registered Today!");
                        window.location.assign('dashboard.php');
                    </script>
                    <?php
                }

                }


                if(isset($_POST['mon'])){

                    $rom = "SELECT * FROM registration WHERE extract(month from Date)='$month' ORDER BY Court";
                    $mor = mysqli_query($conn, $rom);
                    $momr = mysqli_num_rows($mor);

                    if ($momr > 0){


                        echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> This Month's Cases</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th>Activity</th><th>Next Date of Case</th><th class='noprint'>Ammend</th></tr></thead>";

                        while ($row = mysqli_fetch_assoc($mor)) {



                            echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . "</td><td>" . $row["Activity"] . "</td><td>" . $row["Date"] . "</td>
                                <td><a class='noprint' href='ammend.php? case=".$row['Caseno']."'>
        <button class=\"btn btn-sm btn-success\"><span class=\"glyphicon glyphicon-edit\">Amend</span></button>
        </a></td></tr>";

                        }
                        echo "</table></center>";
                        echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                    }
                    else{
                        ?>
                        <script> alert("No Cases This Month!");
                            window.location.assign('dashboard.php');
                        </script>
                        <?php
                    }

                }





                if(isset($_POST['tod'])){

                    $ron = "SELECT * FROM registration WHERE Date='$date' ORDER BY Court";
                    $nor = mysqli_query($conn, $ron);
                    $nomr = mysqli_num_rows($nor);

                    if ($nomr > 0){


                        echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> $date Cases</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th>Activity</th><th class='noprint'>Ammend</th></tr></thead>";

                        while ($row = mysqli_fetch_assoc($nor)) {



                            echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . "</td><td>" . $row["Activity"] . "</td>
                                    <td><a class='noprint' href='ammend.php? case=".$row['Caseno']."'>
        <button class=\"btn btn-sm btn-success\"><span class=\"glyphicon glyphicon-edit\">Amend</span></button>
        </a></td></tr>";

                        }
                        echo "</table></center>";
                        echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                    }
                    else{
                        ?>
                        <script> alert("No Cases in Court Today!");
                            window.location.assign('dashboard.php');
                        </script>
                        <?php
                    }

                }



                if(isset($_POST['my'])){

                    $ron = "SELECT * FROM registration WHERE Registrar='$sub' ORDER BY Court";
                    $nor = mysqli_query($conn, $ron);
                    $nomr = mysqli_num_rows($nor);

                    if ($nomr > 0){


                        echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> My Registered Cases</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th>Date Registered</th><th>Date in Court</th></tr></thead>";

                        while ($row = mysqli_fetch_assoc($nor)) {



                            echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . "</td><td>" . $row["Date_Registered"] . "</td><td>" . $row["Date"] . "</td></tr>";

                        }
                        echo "</table></center>";
                        echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                    }
                    else{
                        ?>
                        <script> alert("You have not registered any Case!");
                            window.location.assign('dashboard.php');
                        </script>
                        <?php
                    }

                }



                if(isset($_POST['sea'])){

                    $sdate = $_POST['sdate'];

                    $ron = "SELECT * FROM registration WHERE Date='$sdate' OR Caseno='$sdate' ORDER BY Court";
                    $nor = mysqli_query($conn, $ron);
                    $nomr = mysqli_num_rows($nor);

                    if ($nomr > 0){


                        echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> My Registered Cases</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th>Date Registered</th><th>Date in Court</th><th class='noprint'>Ammend</th></tr></thead>";

                        while ($row = mysqli_fetch_assoc($nor)) {



                            echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . "</td><td>" . $row["Date_Registered"] . "</td><td>" . $row["Date"] . "</td>
                                    <td><a class='noprint' href='ammend.php? case=".$row['Caseno']."'>
        <button class=\"btn btn-sm btn-success\"><span class=\"glyphicon glyphicon-edit\">Amend</span></button>
        </a></td></tr>";

                        }
                        echo "</table></center>";
                        echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                    }
                    else{
                        ?>
                        <script> alert("Case not registered!");
                            window.location.assign('dashboard.php');
                        </script>
                        <?php
                    }

                }



                if(isset($_POST['month'])){


                    $smon = $_POST['mun'];
                    $monthNum  = $smon;
                    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                    $monthName = $dateObj->format('F');


                    $rum = "SELECT * FROM registration WHERE extract(month from Date)='$smon' ORDER BY Court";
                    $mur = mysqli_query($conn, $rum);
                    $mumr = mysqli_num_rows($mur);

                    if ($mumr > 0){


                        echo "<br><center><table class='table table-bordered' cellspacing='15px' border='0px' style='width:980px;height:auto;'>
                        <thead> 
                        <tr><label><h3><u> $monthName Cases</u></h3></label></tr>
                        <br>
                        <br>
                        <tr class='info'><th>Case number</th><th>Court</th><th>Activity</th><th>Next Date of Case</th><th class='noprint'>Ammend</th></tr></thead>";

                        while ($row = mysqli_fetch_assoc($mur)) {



                            echo "<tr><td>" . $row["Caseno"] . "</td><td>" . $row["Court"] . "</td><td>" . $row["Activity"] . "</td><td>" . $row["Date"] . "</td>
        <td><a class='noprint' href='ammend.php? case=".$row['Caseno']."'>
        <button class=\"btn btn-sm btn-success\"><span class=\"glyphicon glyphicon-edit\">Amend</span></button>
        </a></td></tr>";

                        }
                        echo "</table></center>";
                        echo "
                <div class='noprint' align='right'><input class='btn btn-danger' type=\"button\" value=\"Print\" onclick=\"printtable()\" /></div>";
                    }
                    else{
                        ?>
                        <script> alert("No Cases For The Selected Month!");
                            window.location.assign('dashboard.php');
                        </script>
                        <?php
                    }

                }


                ?>
            <div class='page-header noprint'>
              <h4>System usage</h4>
            </div>
            <div class='progress noprint'>
              <div class='progress-bar progress-bar-success' style='width: 35%'></div>
              <div class='progress-bar progress-bar-warning' style='width: 20%'></div>
              <div class='progress-bar progress-bar-danger' style='width: 10%'></div>
            </div>
            <div class='page-header noprint'>
              <h4>CASE STATISTICS</h4>
            </div>
            <div class='row text-center noprint'>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#d4ecfd' data-fgcolor='#30a1ec' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='50'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#c4e9aa' data-fgcolor='#8ac368' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='75'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#cef3f5' data-fgcolor='#5ba0a3' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='35'>
              </div>
              <div class='col-md-3'>
                <input class='knob second' data-bgcolor='#f8d2e0' data-fgcolor='#b85e80' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='85'>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <!-- Javascripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
    <!-- Google Analytics -->
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>
