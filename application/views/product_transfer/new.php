<!DOCTYPE html>
<html  lang="en">

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/forms-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2017 12:11:32 GMT -->
<head>
	
	<style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
	</style>
	
	
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title> Forms elements </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicons -->
	
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>assets/images/icons/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/images/icons/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/images/icons/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>assets/images/icons/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="<?= base_url() ?>assets/images/icons/favicon.png">
	
	
	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets-minified/admin-all-demo.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/jquery-ui.css">
	
	<!-- JS Core -->
	
	<script type="text/javascript" src="<?= base_url() ?>assets-minified/js-core.js"></script>
	
	
	
	
	
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
					
					
					<!-- jQueryUI Spinner -->
					
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/spinner/spinner.js"></script>
					<script type="text/javascript">
                        /* jQuery UI Spinner */

                        $(function () {
                            "use strict";
                            $(".spinner-input").spinner();
                        });
					</script>
					
					<!-- jQueryUI Autocomplete -->
					
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/autocomplete/autocomplete.js"></script>
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/autocomplete/menu.js"></script>
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/autocomplete/autocomplete-demo.js"></script>
					<script>
                        // $(function () {
                        //                var availableTags = [
                        //<?//= $products_suggestions ?>
                        //  ];
                        //$(".product").autocomplete({//
                        //                    source: availableTags
                        //                });
                        //});
					</script>
					<!-- Touchspin -->
					
					<!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/widgets/touchspin/touchspin.css">-->
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/touchspin/touchspin.js"></script>
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/touchspin/touchspin-demo.js"></script>
					
					<!-- Input switch -->
					
					<!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/widgets/input-switch/inputswitch.css">-->
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/input-switch/inputswitch.js"></script>
					<script type="text/javascript">
                        /* Input switch */

                        $(function () {
                            "use strict";
                            $('.input-switch').bootstrapSwitch();
                        });
					</script>
					
					<!-- Textarea -->
					
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/textarea/textarea.js"></script>
					<script type="text/javascript">
                        /* Textarea autoresize */

                        $(function () {
                            "use strict";
                            $('.textarea-autosize').autosize();
                        });
					</script>
					
					<!-- Multi select -->
					
					<!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/widgets/multi-select/multiselect.css">-->
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/multi-select/multiselect.js"></script>
					<script type="text/javascript">
                        /* Multiselect inputs */

                        $(function () {
                            "use strict";
                            $(".multi-select").multiSelect();
                            $(".ms-container").append('<i class="glyph-icon icon-exchange"></i>');
                        });
					</script>
					
					<!-- Uniform -->
					
					<!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/widgets/uniform/uniform.css">-->
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/uniform/uniform.js"></script>
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/uniform/uniform-demo.js"></script>
					
					<!-- Chosen -->
					
					<!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/widgets/chosen/chosen.css">-->
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/chosen/chosen.js"></script>
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/chosen/chosen-demo.js"></script>
					<script type="text/javascript" src="<?= base_url() ?>assets/widgets/datepicker/datepicker.js"></script>
					<script type="text/javascript">
                        /* Datepicker bootstrap */

                        // $(function () {
                        //     "use strict";
                        //     $('.bootstrap-datepicker').bsdatepicker({
                        //         format: 'mm-dd-yyyy'
                        //     });
                        // });
					</script>
					<div id="page-title">
						<h2>Add a new Product Transfer</h2>
						<p>Select a Transfer Type</p>
					
					</div>
					
					<div class="panel">
						<div class="panel-body">
							<div id="error_msg" class="font-red" style="font-size:18px; font-weight: bold;">
							
							</div>
							<div class="row">
								<div class="col-md-2">
									<h3 class="title-hero">
										New Product Transfer
									</h3>
								</div>
								<div id='show_err' class="col-md-10 font-red" style="font-size:18px; font-weight: bold;">
								
								</div>
							</div>
							<div class="example-box-wrapper">
								<div class="form-group">
									<label class="col-sm-3 control-label">Select Transfer Type</label>
									<div class="col-sm-6">
										
										
										<select onchange="toggleTransferType()"  id="transfer_type" class="chosen-select">
											<option value="0">Select Option</option>
											<option value="1"> Store to Warehouse</option>
											<option value="2"> Warehouse to Store</option>
											<option value="3"> Warehouse to Warehouse</option>
											<option value="4"> Store to Store</option>
										</select>
									</div>
								</div>
								
								
								<form method="post" action="<?= base_url() ?>product_transfer/add" id="swAdd" class="form-horizontal bordered-row">
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Date</label>
										<div class="col-sm-6">
											<div class="input-group" id="div_qty1">
												
												<input id="date_ledger" name="date_ledger" type="date" class="bootstrap-datepicker form-control"  value="<?php echo date("m-d-Y") ?>" data-date-format="mm/dd/yy">
											
											</div>
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label"> Sending Store</label>
										<div class="col-sm-6">
											
											
											<select name="s_store" id="sw_s_store"   class="chosen-select">
												<option> --Select Store -- </option>
												<?php foreach ($store_products as $store_product):
													if($store_product->store_stock_quantity > 0):
													?>
													
												<option value="<?=$store_product->store_id ?>" data-quantity='<?=$store_product->store_stock_quantity ?>' data-product='<?=$store_product->product_id ?>'><?=$store_product->store_name.' - '.$store_product->product_name.'('.$store_product->store_stock_quantity.')'; ?></option>
												
												<?php endif; endforeach; ?>
											</select>
										</div>
									</div>
									
									<input type="hidden" name="product_id" id="sw_product_id">
									
									<input type="hidden" name="transfer_type" id="sw_transfer_type">
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Receiving Warehouse</label>
										<div class="col-sm-6">
											
											
											<select  name="r_warehouse"  class="chosen-select">
												<option> --Select Warehouse -- </option>
												<?php foreach ($warehouses as $warehouse ): ?>
													<option value="<?=$warehouse->warehouse_id ?>" ><?=$warehouse->warehouse_name; ?></option>
												
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label"> Quantity</label>
										<div class="col-sm-6">
											<div class="input-group" id="div_qty1">
												
												<input type="number" name="qty"  id="sw_quantity" class="form-control" placeholder="Quantity">
												<span class="input-group-addon">Unit</span>
											</div>
										</div>
									</div>
									
									
									
									
									<!--    <div class="form-group">
										  <label class="col-sm-3 control-label">Adjustment Voucher No. </label>
										  <div class="col-sm-6">
											  <div class="input-group">
												  <input type="number" name="adj_no" id="adj_no" class="form-control" >
											  </div>
										  </div>
									  </div> -->
									
									
									<div class="form-group">
										<div class="col-md-4 col-sm-0"></div>
										<button type="submit" class="btn btn-alt btn-hover btn-blue-alt col-md-4" >
											<span>CONFIRM ADD NEW ADJUSTMENT</span>
											<i class="glyph-icon icon-arrow-right"></i>
										</button>
										<div class="col-md-4 col-sm-0"></div>
									</div>
								</form>
								
								<form method="post" action="<?= base_url() ?>product_transfer/add" id="wsAdd" class="form-horizontal bordered-row" onsubmit="return ConfirmAdd();">
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Date</label>
										<div class="col-sm-6">
											<div class="input-group" id="div_qty1">
												
												<input id="date_ledger" name="date_ledger" type="date" class="bootstrap-datepicker form-control"  value="<?php echo date("m-d-Y") ?>" data-date-format="mm/dd/yy">
											
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Sending Warehouse</label>
										<div class="col-sm-6">
											
											
											<select  name="s_warehouse" id="ws_s_warehouse" class="chosen-select">
												<option> --Select Warehouse -- </option>
												<?php foreach ($warehouse_products as $warehouse_product):
												if($warehouse_product->warehouse_stock_quantity > 0): ?>
													<option value="<?=$warehouse_product->warehouse_id ?>" data-quantity='<?=$warehouse_product->warehouse_stock_quantity ?>' data-product='<?=$warehouse_product->product_id ?>'><?=$warehouse_product->warehouse_name.' - '.$warehouse_product->product_name.'('.$warehouse_product->warehouse_stock_quantity.')'; ?></option>
												
												<?php endif; endforeach; ?>
											</select>
										</div>
									</div>
									
									<input type="hidden" name="product_id" id="ws_product_id">
									<input type="hidden" name="transfer_type" id="ws_transfer_type">
									<div class="form-group">
										<label class="col-sm-3 control-label"> Receiving Store</label>
										<div class="col-sm-6">
											
											
											<select  name="r_store" class="chosen-select">
												<option> --Select Store -- </option>
												<?php foreach ($stores as $store): ?>
													<option value="<?=$store->store_id ?>"><?=$store->store_name; ?></option>
												
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label"> Quantity</label>
										<div class="col-sm-6">
											<div class="input-group" id="div_qty1">
												
												<input type="number" name="qty" onkeyup="Validation()" id="ws_quantity" class="form-control" placeholder="Quantity">
												<span class="input-group-addon">Unit</span>
											</div>
										</div>
									</div>
									
									
									
									
									<!--    <div class="form-group">
										  <label class="col-sm-3 control-label">Adjustment Voucher No. </label>
										  <div class="col-sm-6">
											  <div class="input-group">
												  <input type="number" name="adj_no" id="adj_no" class="form-control" >
											  </div>
										  </div>
									  </div> -->
									
									
									<div class="form-group">
										<div class="col-md-4 col-sm-0"></div>
										<button type="submit" class="btn btn-alt btn-hover btn-blue-alt col-md-4" >
											<span>CONFIRM ADD NEW ADJUSTMENT</span>
											<i class="glyph-icon icon-arrow-right"></i>
										</button>
										<div class="col-md-4 col-sm-0"></div>
									</div>
								</form>
								
								<form method="post" action="<?= base_url() ?>product_transfer/add" id="wwAdd" class="form-horizontal bordered-row" >
									<div class="form-group">
										<label class="col-sm-3 control-label">Date</label>
										<div class="col-sm-6">
											<div class="input-group" id="div_qty1">
												
												<input id="date_ledger" name="date_ledger" type="date" class="bootstrap-datepicker form-control"  value="<?php echo date("m-d-Y") ?>" data-date-format="mm/dd/yy">
											
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Sending Warehouse</label>
										<div class="col-sm-6">
											
											
											<select  name="s_warehouse" id="ww_s_warehouse"  class="chosen-select">
												<option> --Select Warehouse -- </option>
												<?php foreach ($warehouse_products as $warehouse_product):
												if($warehouse_product->warehouse_stock_quantity > 0):
													?>
													<option value="<?=$warehouse_product->warehouse_id ?>" data-quantity='<?=$warehouse_product->warehouse_stock_quantity ?>' data-product='<?=$warehouse_product->product_id ?>'><?=$warehouse_product->warehouse_name.' - '.$warehouse_product->product_name.'('.$warehouse_product->warehouse_stock_quantity.')'; ?></option>
												
												<?php endif; endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"> Receiving Warehouse</label>
										<div class="col-sm-6">
											
											
											<select  name="r_warehouse"  class="chosen-select">
												<option> --Select Warehouse -- </option>
												<?php foreach ($warehouses as $warehouse ): ?>
													<option value="<?=$warehouse->warehouse_id ?>" ><?=$warehouse->warehouse_name; ?></option>
												
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									
									<input type="hidden" name="product_id" id="ww_product_id">
									<input type="hidden" name="transfer_type" id="ww_transfer_type">
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label"> Quantity</label>
										<div class="col-sm-6">
											<div class="input-group" id="div_qty1">
												
												<input type="number" name="debit_qty" onkeyup="Validation()" id="ww_quantity" class="form-control" placeholder="Debit Quantity">
												<span class="input-group-addon">Unit</span>
											</div>
										</div>
									</div>
									
									
									
									
									<!--    <div class="form-group">
										  <label class="col-sm-3 control-label">Adjustment Voucher No. </label>
										  <div class="col-sm-6">
											  <div class="input-group">
												  <input type="number" name="adj_no" id="adj_no" class="form-control" >
											  </div>
										  </div>
									  </div> -->
									
									
									<div class="form-group">
										<div class="col-md-4 col-sm-0"></div>
										<button type="submit" class="btn btn-alt btn-hover btn-blue-alt col-md-4" >
											<span>CONFIRM ADD NEW ADJUSTMENT</span>
											<i class="glyph-icon icon-arrow-right"></i>
										</button>
										<div class="col-md-4 col-sm-0"></div>
									</div>
								</form>
								
								<form method="post" action="<?= base_url() ?>product_transfer/add" id="ssAdd" class="form-horizontal bordered-row" >
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Date</label>
										<div class="col-sm-6">
											<div class="input-group" id="div_qty1">
												
												<input id="date_ledger" name="date_ledger" type="date" class="bootstrap-datepicker form-control"  value="<?php echo date("m-d-Y") ?>" data-date-format="mm/dd/yy">
											
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Sending Store</label>
										<div class="col-sm-6">
											
											
											<select  name="s_store" id="ss_s_store" class="chosen-select">
												<option> --Select Store -- </option>
												<?php foreach ($store_products as $store_product):
												if($store_product->store_stock_quantity > 0):
												?>
													<option value="<?=$store_product->store_id ?>" data-quantity='<?=$store_product->store_stock_quantity ?>' data-product='<?=$store_product->product_id ?>'><?=$store_product->store_name.' - '.$store_product->product_name.'('.$store_product->store_stock_quantity.')'; ?></option>
												
												<?php endif; endforeach; ?>
											</select>
										</div>
									</div>
									
									<input type="hidden" name="product_id" id="ss_product_id">
									<input type="hidden" name="transfer_type" id="ss_transfer_type">
									<div class="form-group">
										<label class="col-sm-3 control-label"> Receiving Store</label>
										<div class="col-sm-6">
											
											
											<select  name="r_store"  class="chosen-select">
												<option> --Select Store -- </option>
												<?php foreach ($stores as $store): ?>
													<option value="<?=$store->store_id ?>"><?=$store->store_name; ?></option>
												
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									
									
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label"> Quantity</label>
										<div class="col-sm-6">
											<div class="input-group" id="div_qty1">
												
												<input type="number" name="qty" onkeyup="Validation()" id="ss_quantity" class="form-control" placeholder="Debit Quantity">
												<span class="input-group-addon">Unit</span>
											</div>
										</div>
									</div>
									
									
									
									
									<!--    <div class="form-group">
										  <label class="col-sm-3 control-label">Adjustment Voucher No. </label>
										  <div class="col-sm-6">
											  <div class="input-group">
												  <input type="number" name="adj_no" id="adj_no" class="form-control" >
											  </div>
										  </div>
									  </div> -->
									
									
									<div class="form-group">
										<div class="col-md-4 col-sm-0"></div>
										<button type="submit" class="btn btn-alt btn-hover btn-blue-alt col-md-4" >
											<span>CONFIRM ADD NEW ADJUSTMENT</span>
											<i class="glyph-icon icon-arrow-right"></i>
										</button>
										<div class="col-md-4 col-sm-0"></div>
									</div>
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
	<script src="<?= base_url() ?>ckeditor/ckeditor.js"></script>
	<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('desc');
	</script>
	<script>
		
		
		
        function ConfirmAdd() {
            var product = $("#product").val();
            var debit_qty = $("#debit_qty").val();
            var credit_qty = $("#credit_qty").val();

            var err = false;
            if (product == "" || product == null) {
                $("#product_chosen").css("border", "1px solid red");
                err = true;

            }

            if ((debit_qty != null || debit_qty != 0)&&(credit_qty != null || credit_qty != 0)) {
                $("#show_err").html("<b>You Cannot Enter Both Debit And Credit Quantity!<b>");
                $("#debit_qty").css("border", "1px solid red");
                $("#credit_qty").css("border", "1px solid red");
                err = true;
            }

            if (debit_qty == null || debit_qty == 0) {
                if(credit_qty==null || credit_qty==0){
                    $("#show_err").html("<b>Please enter at leaset Debit Quantity OR Credit Quantity<b>");
                    err = true;
                }
                else{
                    err=false;
                }
            }

            if (credit_qty == null || credit_qty == 0) {
                if(debit_qty==null || debit_qty==0){
                    $("#show_err").html("<b>Please enter at leaset Debit Quantityy OR Credit Quantity<b>");
                    err = true;
                }
                else{
                    err=false;
                }

            }

            if(err==true){
                return false;
            }  else{
                return true;
            }
        }


        function Validation() {
            var product = $("#product").val();
            var debit_qty = $("#debit_qty").val();
            var credit_qty = $("#credit_qty").val();

            var err = false;
            if (product !== "" & product !== null) {
                $("#product_chosen").css("border", "1px solid #dfe8f1");
                err = true;

            }




            if ((debit_qty !== null & debit_qty !== 0)&&(credit_qty !== null & credit_qty !== 0)) {
                $("#show_err").html("");
                $("#debit_qty").css("border", "1px solid #dfe8f1");
                $("#credit_qty").css("border", "1px solid #dfe8f1");
                err = true;
            }

            if (debit_qty !== null & debit_qty !== 0) {
                if(credit_qty !== null & credit_qty !== 0){
                    $("#show_err").html("");
                    err = true;
                }
                else{
                    err=false;
                }

            }

            if (credit_qty !== null & credit_qty !== 0) {
                if(debit_qty !== null & debit_qty !== 0){
                    $("#show_err").html("");
                    err = true;
                }
                else{
                    err=false;
                }

            }
        }







        function DelProd(myid_prod) {
            myid_prod = "prod" + myid_prod;
            $("#" + myid_prod).remove();
        }

        function add_units(unit_symbol) {
            // u_id = u_id.replace("product_name", "");
            $("#div_qty1 span").remove();
            // alert(unit_symbol);
            $("#div_qty1").append('<span class="input-group-addon bootstrap-touchspin-postfix">' + unit_symbol + '</span>');
            $("#div_qty2 span").remove();
            // alert(unit_symbol);
            $("#div_qty2").append('<span class="input-group-addon bootstrap-touchspin-postfix">' + unit_symbol + '</span>');

        }
        
        function toggleTransferType(){
            let transfer_type = $("#transfer_type").val();
            if(transfer_type == 1){
                $("#swAdd").show();
                $("#wsAdd").hide();
                $("#wwAdd").hide();
                $("#ssAdd").hide();
            }

            if(transfer_type == 2){
                $("#swAdd").hide();
                $("#wsAdd").show();
                $("#wwAdd").hide();
                $("#ssAdd").hide();
            }

            if(transfer_type == 3){
                $("#swAdd").hide();
                $("#wsAdd").hide();
                $("#wwAdd").show();
                $("#ssAdd").hide();
            }
            if(transfer_type == 4){
                $("#swAdd").hide();
                $("#wsAdd").hide();
                $("#wwAdd").hide();
                $("#ssAdd").show();
            }

            if(transfer_type == 0){
                $("#swAdd").hide();
                $("#wsAdd").hide();
                $("#wwAdd").hide();
                $("#ssAdd").hide();
            }
        }
	
	
	
	
	</script>
	<script type="text/javascript">
        $(document).ready(function(){
            $("#swAdd").hide();
	        $("#wsAdd").hide();
	        $("#wwAdd").hide();
	        $("#ssAdd").hide();


            $('#sw_s_store').change(function(){
                let transfer_type = $("#transfer_type").val();
                $("#sw_transfer_type").val(transfer_type);
                let selected = $(this).find('option:selected');
                let max_quantity = selected.data('quantity');
                let product_id = selected.data('product')
               
                $("#sw_quantity").attr({
                    "max" : max_quantity,
                    "min" : 1
                });
                
                $("#sw_product_id").val(product_id)
               
            });


            $('#ws_s_warehouse').change(function(){
                let transfer_type = $("#transfer_type").val();
                $("#ws_transfer_type").val(transfer_type);
                let selected = $(this).find('option:selected');
                let max_quantity = selected.data('quantity');
                let product_id = selected.data('product')

                $("#ws_quantity").attr({
                    "max" : max_quantity,
                    "min" : 1
                });

                $("#ws_product_id").val(product_id)

            });

            $('#ww_s_warehouse').change(function(){
                let transfer_type = $("#transfer_type").val();
                $("#ww_transfer_type").val(transfer_type);
                let selected = $(this).find('option:selected');
                let max_quantity = selected.data('quantity');
                let product_id = selected.data('product')

                $("#ww_quantity").attr({
                    "max" : max_quantity,
                    "min" : 1
                });

                $("#ww_product_id").val(product_id)

            });

            $('#ss_s_store').change(function(){
                let transfer_type = $("#transfer_type").val();
                $("#ss_transfer_type").val(transfer_type);
                let selected = $(this).find('option:selected');
                let max_quantity = selected.data('quantity');
                let product_id = selected.data('product')

                $("#ss_quantity").attr({
                    "max" : max_quantity,
                    "min" : 1
                });

                $("#ss_product_id").val(product_id)

            });
	        
	        
	        
            $("#date_ledger").bsdatepicker({
                format: 'mm-dd-yyyy'
            });

            $('#date_ledger').on('changeDate', function(ev){
                $(this).bsdatepicker('hide');
            });
            
            
            

        });
	</script>

</div>
</body>

<!-- Mirrored from agileui.com/demo/monarch/demo/admin-template/forms-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2017 12:11:42 GMT -->
</html>
