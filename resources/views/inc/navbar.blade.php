<header class="sticky-header">
<div class="container">
	<div class="sixteen columns">
	
		<!-- Logo -->
		<div id="logo">
			<br>

			<h1><a href="/" class="headline">EasyJob</a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="/" id="{{Request::is('/') ? 'current' : ''}}">Home</a></li>

				<li><a href="#">For Candidates</a>
					<ul>
						<li><a href="/browse-jobs" id="{{Request::is('browse-jobs') ? 'current' : ''}}">Browse Jobs</a></li>
						<li><a href="/browse-categories" id="{{Request::is('browse-categories') ? 'current' : ''}}">Browse Categories</a></li>
						<li><a href="/add-resume" id="{{Request::is('add-resume') ? 'current' : ''}}">Add Resume</a></li>
						<li><a href="/manage-resumes" id="{{Request::is('manage-resumes') ? 'current' : ''}}">Manage Resumes</a></li>
						<li><a href="/job-alerts" id="{{Request::is('job-alerts') ? 'current' : ''}}">Job Alerts</a></li>
					</ul>
				</li>

				<li><a href="#">For Employers</a>
					<ul>
						<li><a href="/add-job" id="{{Request::is('add-job') ? 'current' : ''}}">Add Job</a></li>
						<li><a href="/manage-jobs" id="{{Request::is('manage-jobs') ? 'current' : ''}}">Manage Jobs</a></li>
						<li><a href="/manage-applications" id="{{Request::is('manage-applications') ? 'current' : ''}}">Manage Applications</a></li>
						
					</ul>
				</li>

				<li><a href="{{ url('/contact') }}" id="{{Request::is('contact') ? 'current' : ''}}">Contact</a></li>
			</ul>


			<ul class="float-right">
				@if( auth()->check() )
                   <li><a href="/logout" id="{{Request::is('my-account#tab2') ? 'current' : ''}}"><i class="fa fa-user"></i> Log Out</a></li>
                @else
					<li><a href="/my-account#tab2" id="{{Request::is('my-account#tab2') ? 'current' : ''}}"><i class="fa fa-user"></i> Sign Up</a></li>
					<li><a href="/my-account" id="{{Request::is('my-account') ? 'current' : ''}}"><i class="fa fa-lock"></i> Log In</a></li>
				@endif

				
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>