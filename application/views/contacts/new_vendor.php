<script>
    var curr_date = "<?= date("Y-m-d") ?>";
</script>
<!DOCTYPE html>
<html  lang="en">

    <head>

        <style>
            /* Loading Spinner */
            .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
        </style>


        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
          <title> Facteezo: Product </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>assets/images/icons/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/images/icons/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/images/icons/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>assets/images/icons/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?= base_url() ?>assets/images/icons/favicon.png">



        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets-minified/admin-all-demo.css">

        <!-- JS Core -->

        <script type="text/javascript" src="<?= base_url() ?>assets-minified/js-core.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/widgets/chosen/chosen.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/widgets/chosen/chosen-demo.js"></script>





        <script type="text/javascript">
    $(window).load(function () {
        setTimeout(function () {
            $('#loading').fadeOut(400, "linear");
        }, 300);
    });
        </script>



    </head>


    <body>
        <div id="sb-site">
            <div class="sb-slidebar bg-black sb-left sb-style-overlay">
                <div class="scrollable-content scrollable-slim-sidebar">
                    <div class="pad10A">
                        <div class="divider-header">Online</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial1.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Grace Padilla
                                </b>
                                <p>On the other hand, we denounce...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial2.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Carl Gamble
                                </b>
                                <p>Dislike men who are so beguiled...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial3.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Michael Poole
                                </b>
                                <p>Of pleasure of the moment, so...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial4.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Bill Green
                                </b>
                                <p>That they cannot foresee the...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial5.jpg" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Cheryl Soucy
                                </b>
                                <p>Pain and trouble that are bound...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                        <div class="divider-header">Idle</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial6.jpg" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <b>
                                    Jose Kramer
                                </b>
                                <p>Equal blame belongs to those...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial7.jpg" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <b>
                                    Dan Garcia
                                </b>
                                <p>Weakness of will, which is same...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial8.jpg" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <b>
                                    Edward Bridges
                                </b>
                                <p>These cases are perfectly simple...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                        <div class="divider-header">Offline</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial1.jpg" alt="">
                                    <div class="small-badge bg-red"></div>
                                </div>
                                <b>
                                    Randy Herod
                                </b>
                                <p>In a free hour, when our power...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="<?= base_url() ?>assets/image-resources/people/testimonial2.jpg" alt="">
                                    <div class="small-badge bg-red"></div>
                                </div>
                                <b>
                                    Patricia Bagley
                                </b>
                                <p>when nothing prevents our being...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sb-slidebar bg-black sb-right sb-style-overlay">
                <div class="scrollable-content scrollable-slim-sidebar">
                    <div class="pad15A">
                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
                            Cloud status
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-1" class="collapse in">
                            <div class="pad15A container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                                        <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                                        <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                                        <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
                                    </div>
                                </div>
                                <div class="divider mrg15T mrg15B"></div>
                                <div class="text-center">
                                    <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                                        <i class="glyph-icon icon-refresh"></i>
                                        Update charts
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
                            Latest transfers
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-6" class="collapse in">

                            <ul class="files-box">
                                <li>
                                    <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
                                    <div class="files-content">
                                        <b>blog_export.zip</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added on <b>22.10.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="files-icon glyph-icon icon-file-code-o"></i>
                                    <div class="files-content">
                                        <b>homepage-test.html</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added  <b>19.10.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
                                    <div class="files-content">
                                        <b>monthlyReport.jpg</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added on <b>10.9.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="files-icon glyph-icon font-green icon-file-word-o"></i>
                                    <div class="files-content">
                                        <b>new_presentation.doc</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added on <b>5.9.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="clear"></div>

                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
                            Tasks for today
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-3" class="collapse in">

                            <ul class="progress-box">
                                <li>
                                    <div class="progress-title">
                                        New features development
                                        <b>87%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="87">
                                        <div class="progressbar-value bg-azure">
                                            <div class="progressbar-overlay"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <b class="pull-right">66%</b>
                                    <div class="progress-title">
                                        Finishing uploading files

                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="66">
                                        <div class="progressbar-value bg-red">
                                            <div class="progressbar-overlay"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-title">
                                        Creating tutorials
                                        <b>58%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="58">
                                        <div class="progressbar-value bg-blue-alt"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-title">
                                        Frontend bonus theme
                                        <b>74%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="74">
                                        <div class="progressbar-value bg-purple"></div>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="clear"></div>

                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-4" class="popover-title">
                            Pending notifications
                            <span class="bs-label bg-orange tooltip-button" title="Label example">New</span>
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-4" class="collapse in">
                            <ul class="notifications-box notifications-box-alt">
                                <li>
                                    <span class="bg-purple icon-notification glyph-icon icon-users"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                    <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                    <span class="notification-text">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                    <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <span class="bg-green icon-notification glyph-icon icon-random"></span>
                                    <span class="notification-text font-green">A success message example.</span>
                                    <div class="notification-time">
                                        <b>2 hours</b> ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                    <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loading">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>

            <div id="page-wrapper">
                <?php $this->load->view("components/header") ?>
                <?php $this->load->view("components/sidebar") ?>
                <div id="page-content-wrapper">
                    <div id="page-content">

                        <div class="container">


                            <!-- Data tables -->

<!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/widgets/datatable/datatable.css">-->
                            <script type="text/javascript" src="<?= base_url() ?>assets/widgets/datatable/datatable.js"></script>
                            <script type="text/javascript" src="<?= base_url() ?>assets/widgets/datatable/datatable-bootstrap.js"></script>
                            <script type="text/javascript" src="<?= base_url() ?>assets/widgets/datatable/datatable-responsive.js"></script>

                            <script type="text/javascript">

    /* Datatables responsive */

    $(document).ready(function () {
//        $('#datatable-responsive').DataTable({
//            responsive: true
//        });
    });

    $(document).ready(function () {
//        $('.dataTables_filter input').attr("placeholder", "Search...");
    });

                            </script>

                            <div id="page-title" >
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-2">
                                            <h2>New Customer</h2>
                                            
                                        </div>

                                   

                                        

                                    </div>




                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-body">
                                    <div class="row ">
                                        <a href="<?= base_url() ?>Products"><h3 class="title-hero">
                                                New Customer
                                            </h3></a>
                                        <div class="col-md-3  pull-right form-group has-feedback "><i style="margin: 0px 15px auto;" class="glyph-icon icon-search form-control-feedback"></i><input class="form-control" type="text" id="search" name="search" placeholder="Search"/></div>
                                    </div>

                                    <div class="example-box-wrapper">
										<form method="post"  action="">
											<div class="row">
												<div class="col-md-4">
													<div class="mb-3">
														<label for="validationCustom03" class="form-label">Contact Company Name:</label>
														<input type="text" class="form-control" id="validationCustom05"
															   placeholder="company name"  name="contact_company" required>
														
				
													</div>
												</div>
		
											</div>
		
											<div class="row">
												<div class="col-md-4">
													<div class="mb-3">
														<label for="validationCustom01" class="form-label">Contact Name:</label>
														<input type="text" class="form-control" id="validationCustom01"
															   placeholder="contact Name"  name="contact_name" required>
														
														<input type="hidden" name="type" value="1">
														<input type="hidden" name="contact_supply" value="1">
				
				
													</div>
												</div>
		
											</div>
											<br>
											
		
											<div class="row">
												<div class="col-md-4">
													<div class="mb-3">
														<label for="validationCustom02" class="form-label">Contact Phone:</label>
														<input type="text" class="form-control" id="validationCustom02"
															   placeholder="contact Phone" name="contact_phone" required>
														
				
													</div>
												</div>
		
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<div class="mb-3">
														<label for="validationCustom03" class="form-label">Contact E-Mail:</label>
														<input type="email" class="form-control" id="validationCustom03"
															   placeholder="contact e-mail" name="contact_email">
														
				
													</div>
												</div>
		
											</div>
											<br>
											<div class="row">
												<div class="col-md-4">
													<div class="mb-3">
														<label for="validationCustom03" class="form-label">Contact Address:</label>
														<input type="text" class="form-control" id="validationCustom04"
															   placeholder="contact address" name="contact_address">
														
												</div>
		
											</div>
												<br>
											
												<button class="btn btn-primary" type="submit">Submit form</button>
											
										</form>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
	
		
			<!-- JS Demo -->
            <script type="text/javascript" src="<?= base_url() ?>assets-minified/admin-all-demo.js"></script>

            <script>
                                                            function EditProduct(product_id) {
                                                                window.location.href = "<?= base_url() ?>products/view/" + product_id;
                                                                //        $.post("<?//= base_url() ?>users/edit", {id: user_id})
                                                                //            .done(function (data) {
                                                                //                if ($.trim(data) == 'done') {
                                                                //                    window.location.href = "<?= base_url() ?>dashboard";
                                                                //                }
                                                                //                if ($.trim(data) == 'failed') {
                                                                ////                                                            alert('here');
                                                                //                    window.location.href = "<?= base_url() ?>";
                                                                //
                                                                //                }
                                                                //            });
                                                            }
                                                            function DeleteProduct(product_id) {
                                                                var cnfirm = confirm("Are You Sure?");
                                                                if (cnfirm) {
                                                                    $.post("<?= base_url() ?>products/delete", {id: product_id})
                                                                            .done(function (data) {
                                                                                //                                                                                    alert(data);
                                                                                if ($.trim(data) == 'done') {
                                                                                    location.reload(true);
                                                                                }
                                                                            });
                                                                }
                                                            }
                                                            function AddUser() {
                                                                window.location.href = "<?= base_url() ?>contacts/new_customer";
                                                            }

                                                            function GoLedger(product_id) {
//                                                                alert(curr_date);
                                                                $.post("<?= base_url() ?>" + "reports/product_statement", {product: product_id, from_date: curr_date, to_date: curr_date})
                                                                        .done(function (data) {
//                                                                            console.log(data);
//                                                                            return false;
                                                                            var newDoc = document.open("text/html", "replace");
                                                                            newDoc.write(data);
                                                                            newDoc.close();
                                                                        });
                                                            }



            </script>
            <script>
                $("#search").keyup(function (event) {
                    var keycode = (event.keyCode ? event.keyCode : event.which);
                    if (keycode == '13') {
                        var rtngPtId = $("#search").val();
                        if (rtngPtId == "") {
                            $("#search").attr("placeholder", "Enter Valid Input");
                        } else {
                            $.post("<?= base_url() ?>products/search", {id: rtngPtId})
                                    .done(function (data) {
//                                        console.log(data);

                                        if ($.trim(data) == 'no') {
                                            $("#search")
                                                    .attr('data-original-title', "N0 Data Found")
                                                    .tooltip('fixTitle')
                                                    .tooltip('show');
                                        } else {
                                            var newDoc = document.open("text/html", "replace");
                                            newDoc.write(data);
                                            newDoc.close();
                                        }
                                    });
                        }
                    }

                });
            </script>
        </div>
        <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                                            <h4 class="modal-title">Edit User</h4>
                                        </div>
                                        <div class="modal-body">

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
    </body>

</html>
