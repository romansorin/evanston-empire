<div class="header-wrapper container">
	<nav class="navbar navbar-expand-lg pl-0 pr-0 ">
		@isset($logo)
		<a class="navbar-brand mt-2" href="/"><img class="header-logo logo mt-0 pl-3" src="{{ $logo }}" alt="evanston empire"></a>
		@else
		<a class="navbar-brand mt-2" href="/"><img class="header-logo logo mt-0 pl-3" src="{{ asset('images/black-evanston-logo.png') }}"
				alt="evanston empire"></a>
		@endisset
		<ul class="mb-0 list-unstyled">
			<li class="mobile-nav">
				<button class="ml-auto navbar-toggler hamburger hamburger--stand" type="button" id="menu-toggle"
					data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button></li>
		</ul>

		<ul class="navbar-nav ml-auto d-none d-lg-flex">
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
	</nav>



	<div class="collapse navbar-collapse" id="menu">
		<nav class="mobile">
			<ul>
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
			</ul>
		</nav>
	</div>
</div>