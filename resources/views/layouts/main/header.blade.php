<div class="header-wrapper container">
	<nav class="navbar navbar-expand-lg pl-0 pr-0">
		{{-- <a class="navbar-brand" href="/">Navbar</a> --}}

		<button class="ml-auto navbar-toggler hamburger hamburger--stand" type="button" id="menu-toggle" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="hamburger-box">
				  <span class="hamburger-inner"></span>
				</span>
			  </button>

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="/what-we-do">What We Do</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/meet-the-team">Meet The Team</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/gallery">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/apply">Apply</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/faq">FAQ</a>
				</li>
			</ul>
		</div>
	</nav>
</div>

<!-- The overlay -->
<div id="myNav" class="overlay">

		<!-- Button to close the overlay navigation -->
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  
		<!-- Overlay content -->
		<div class="overlay-content">
		  <a href="#">About</a>
		  <a href="#">Services</a>
		  <a href="#">Clients</a>
		  <a href="#">Contact</a>
		</div>
	  
	  </div>
	  
	  <!-- Use any element to open/show the overlay navigation menu -->
	  <span onclick="openNav()">open</span>
	  
<script>
/* Open */
function openNav() {
  document.getElementById("myNav").style.display = "block";
}

/* Close */
function closeNav() {
  document.getElementById("myNav").style.display = "none";
}</script>