<!--
Header Start
-->
<?php include 'header.php';?>
<!--
Header End
-->
<!--
Main Content Start
-->
<!--
Welcom Start
-->
<section id="hero" class="py-5 pt-10">
	<div class="container">
		<div class="row">
			<div class="col text-center text-white">
				<p class="pt-5">How can we help you?</p>
				
				<form>
					<div class="uk-margin">
						<div class="uk-inline">
            				<span class="uk-form-icon" uk-icon="icon: search"></span>
							<input class="uk-input uk-form-width-large" type="text" placeholder="Describe your issue">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--
Welcom End
-->
<!--
Individual Topic Select Start
-->
<section id="select-topic" class="py-5">
	<div class="container-fluid px-0">
		<div class="row no-gutters">
			<div class="col-sm-2">
				<ul class="uk-nav-default uk-nav-parent-icon topic-nav" uk-nav>
					<li class="uk-active"><a href="#">Active</a></li>
					<li class="uk-parent">
						<a href="#">Parent</a>
						<ul class="uk-nav-sub">
							<li><a href="#">Sub item</a></li>
							<li>
								<a href="#">Sub item</a>
								<ul>
									<li><a href="#">Sub item</a></li>
									<li><a href="#">Sub item</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="uk-parent">
						<a href="#">Parent</a>
						<ul class="uk-nav-sub">
							<li><a href="#">Sub item</a></li>
							<li><a href="#">Sub item</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-sm">
				<div class="mx-5 uk-card uk-card-small uk-card-default uk-card-body topic-accordion">
					<ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
						<li class="uk-parent">
							<a href="#">Popular articles</a>
							<ul class="uk-nav-sub">
								<li><a href="#">Sub item</a></li>
								<li><a href="#">Sub item</a></li>
								<li><a href="#">Sub item</a></li>
							</ul>
						</li>
						<li class="uk-parent">
							<a href="#">Fix problems &amp; request removals</a>
							<ul class="uk-nav-sub">
								<li><a href="#">Sub item</a></li>
								<li><a href="#">Sub item</a></li>
								<li><a href="#">Sub item</a></li>
							</ul>
						</li>
						<li class="uk-parent">
							<a href="#">Browsr the web</a>
							<ul class="uk-nav-sub">
								<li><a href="#">Sub item</a></li>
								<li><a href="#">Sub item</a></li>
								<li><a href="#">Sub item</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--
Individual Topic Select End
-->
<!--
Main Content End
-->
<!--
Footer Start
-->
<?php include 'footer.php';?>
<!--
Footer Start
-->