
	<ul id="slide-out" class="side-nav fixed">
		<li>
			<div class="userView">
		      	<div class="background">
		        	<img src="<?= baseurl('assets/images/template/sidenav-bg.jpg') ?>">
		      	</div>

				<div class="row">
					<div class="col s4">
						<a href="#"><img class="circle" src="<?= baseurl('assets/images/admin/admin.jpg') ?>"></a>
					</div>
					<div class="col s8">
						<!-- Dropdown Trigger -->
						<a class='dropdown-button' href='#'><span class="white-text name">Azunyan <i class="pl1 fa fa-ellipsis-v dropdown-button right" data-activates='dropdown-profile'></i></span></a>
						
						<ul id='dropdown-profile' class='dropdown-content'>
							<li><a href="#" class="pr3"><i class="fa fa-gear p0 m0"></i> Setting</a></li>
							<li><a href="#" class="pr3"><i class="fa fa-sign-out p0 m0"></i> Log Out</a></li>
						</ul>

						<!-- Dropdown Structure -->
						<a href="#"><span class="white-text email">Admin</span></a>
					</div>
				</div>
				
	    	</div>
	    </li>

	    <li>
	    	<div class="container-fluid">
		    	<div class="row">
		    		<div class="col s12">
		    			<div class="card py0 mb0">
		    				<div class="card-content black-text px1 py0 search">
		    					<form action="" method="POST">
		    						<div class="input-field"> 
		    							<div class="form-group">
		    								<i class="material-icons prefix">search</i>
          									<input id="icon_prefix" type="text" class="form-control my0">
		    							</div>
		    						</div>
		    					</form>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
	    </li>
		<li><a href="<?= baseurl('admin.php') ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
	    <li>
	        <ul class="collapsible collapsible-accordion">
	          	<li>
	            	<a class="collapsible-header"><i class="fa fa-users fontsize1"></i><span>User</span><i class="material-icons right">arrow_drop_down</i></a>
	            	<div class="collapsible-body">
	              		<ul>
	                		<li><a href="#!">First</a></li>
	                		<li><a href="#!">Second</a></li>
	                		<li><a href="#!">Third</a></li>
	                		<li><a href="#!">Fourth</a></li>
	              		</ul>
	            	</div>
	          	</li>
	        </ul>
	    </li>		
		<li><a href="<?= baseurl('datauser.php') ?>"><i class="fa fa-users"></i>User</a></li>
	    <li><a href="<?= baseurl('datakategori.php') ?>"><i class="fa fa-tags"></i>Category</a></li>
	    <li><a href="<?= baseurl('dataproject.php') ?>"><i class="fa fa-bookmark"></i>Project</a></li>
	    <li><a href="<?= baseurl('databank.php') ?>"><i class="fa fa-credit-card-alt"></i>Bank</a></li>
	    <li><a href="<?= baseurl('datadonasi.php') ?>"><i class="fa fa-paypal"></i>Donation</a></li>
	    <li>
			<div class="container-fluid center-align copyright">
				<a href="">IndieHelper</a> &copy; 2017
			</div>
		</li>

	</ul>
	
	<div class="all">
		<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
		</ul>
		<nav>
			<div class="nav-wrapper">
				<div class="container-fluid">
					<a href="#" class="white-text left mr1 side-nav-trigger"><i class="material-icons">reorder</i></a>
					<a href="#!" class="brand-logo white-text">Indie Helper</a>
					<!-- activate side-bav in mobile view -->
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="<?= baseurl('lib/logout.php') ?>" class="waves-effect waves-shadow">Log Out</a></li>
					</ul>
					<!-- navbar for mobile -->
					<ul class="side-nav" id="mobile-demo">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="components.html">Components</a></li>
					</ul>
				</div>
			</div>
		</nav>