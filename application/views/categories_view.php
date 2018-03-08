<!DOCTYPE HTML>
<html>
	<head>
		<title>Automation Post</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="shortcut icon" href="/assets/img/favicon.png" type="image/png"/>
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/assets/css/bootstrap-theme.min.css" />
		
		<!-- Free-wall scripts -->
		<link rel="stylesheet" href="/assets/css/style.css" />
		<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/freewall.js"></script>
		
	</head>
	<body>
		<style>
			@keyframes start {
				from {
					transform: scale(0);
				}
				to {
					transform: scale(1);
				}
			}


			@-webkit-keyframes start {
				from {
					-webkit-transform: scale(0);
				}
				to {
					-webkit-transform: scale(1);
				}
			}

			.free-wall .cell[data-state="init"] {
				display: none;
			}

			.free-wall .cell[data-state="start"]  {
				display: block;
				animation: start 0.5s;
				-webkit-animation: start 0.5s;
			}

			.free-wall .cell[data-state="move"]  {
				transition: top 0.5s, left 0.5s, width 0.5s, height 0.5s;
				-webkit-transition: top 0.5s, left 0.5s, width 0.5s, height 0.5s;
			}
		</style>
		<!-- Header -->
		
			<?php include ("include/nav.php"); ?>		
			
		
		
		<!-- Modal Windows -->

			<?php include ("include/modal.php"); ?>
		
		
		<!-- One -->
			<section id="one"  style="min-height:56.4em">
			<div class="container">
			
			<div id="category-name" style="text-align: center; color:#e5474b">
				<h2><?php echo $categories['category'][0]['ru_name']; ?></h2>
				<hr style="border-bottom-color: #e5474b; border: 0; border-bottom: solid 1px;">
			</div>
				
				<div id="freewall" class="free-wall">
					
					<?php for($i = 0; $i<count($categories['sub_category']); $i++){ ?>
					<div class="brick size31 cell">
						<div class='cover'>
							<a style="color: white; text-decoration: none" href="<?php echo '/c_view/'.$categories['category'][0]['name'].'/'.$categories['sub_category'][$i]['name']; ?>">
								<h3><?php echo $categories['sub_category'][$i]['name_ru']; ?></h3>
							</a>
							<br>
							<br>
							<div style="color: white" class="icons">
								<i class="fa fa-paperclip" aria-hidden="true"></i> Всего статей: <?php echo $categories['sub_category'][$i]['counts']; ?>
							</div>
						</div>
					</div>
					<?php }; ?>
					
					
				<script type="text/javascript">

					$(".brick").each(function() {
						this.style.backgroundColor =  '#e5474b';
					});

					$(function() {
						var wall = new Freewall("#freewall");
						wall.reset({
							selector: '.brick',
							animate: true,
							cellW: 250,
							cellH: 150,
							delay: 50,
							onResize: function() {
								wall.fitWidth();
							}
						});
						wall.fitWidth();

					});
										
				</script>
			</section>
		
		<!-- Footer -->
			<section id="footer">
				<div class="inner">
					<p>© Automation Post. Copyright 2016. Все права защищены.</p>
				</div>
			</section>

		<!-- Scripts -->

			<script src="/assets/js/skel.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>
			<script src="/assets/js/bootstrap.min.js"></script>

	</body>
</html>