	<!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">one</a></li>
		<li><a href="#!">two</a></li>
		<li class="divider"></li>
		<li><a href="#!">three</a></li>
	</ul>
			
	<ul id="slide-out" class="side-nav fixed">
		<li>
			<div class="userView">
		      	<div class="background">
		        	<img src="<?= baseurl('assets/images/template/sidenav-bg.jpg') ?>">
		      	</div>
				<a href="#!user"><img class="circle" src="<?= baseurl('assets/images/admin/admin.jpg') ?>"></a>
				<a href="#!name"><span class="white-text name">Azunyan</span></a>
				<a href="#!email"><span class="white-text email">Admin</span></a>
	    	</div>
	    </li>
	    <li>
	    	<div class="container-fluid">
		    	<div class="row">
		    		<div class="col s12">
		    			<div class="card py0 mb0">
		    				<div class="card-content black-text px1 py0">
		    					<form action="<?= baseurl() ?>" method="POST">
									<input type="text" class="m0" id="" placeholder="Search..">
						    	</form>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
	    	</div>
	    </li>
	    <li>
		    <ul class="tabs">
				<li class="tab col s12"><a class="active left-align" href="#dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
				<li class="tab col s12"><a class="left-align" href="#user"><i class="fa fa-user"></i>User</a></li>
				<li class="tab col s12"><a class="left-align" href="#project"><i class="fa fa-bookmark"></i>Project</a></li>
				<li class="tab col s12"><a class="left-align" href="#bank"><i class="fa fa-credit-card-alt"></i>Bank</a></li>
				<li class="tab col s12"><a class="left-align" href="#donasi"><i class="fa fa-paypal"></i>Donasi</a></li>
			</ul>
	    </li>
		
		<li>
			<div class="container-fluid center-align copyright">
				<a href="">IndieHelper</a> &copy; 2017
			</div>
		</li>

	</ul>
	
	<div class="all">
		<nav>
			<div class="nav-wrapper container-fluid">
				<a href="#!" class="brand-logo left">IndieHelper</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				<ul class="right hide-on-med-and-down">
		     	 	<li><a href="sass.html">Log Out</a></li>
		    	</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="sass.html">Sass</a></li>
					<li><a href="components.html">Components</a></li>
				</ul>
			</div>
		</nav>
