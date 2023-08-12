<nav class="nav navClosed" id="nav">
	<button class="nav__button" id="navToggle" onclick="menuToggle()" aria-label="menu">
		<div class="nav__hamburger"></div>
		<div class="nav__hamburger"></div>
		<div class="nav__hamburger"></div>
	</button>

	<?php if ($CURRENT_PAGE == "Blog"): ?>
	<ul class="nav__list">
		<li class="nav__item <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>">
			<a href="../" class="nav__link ">home</a>
		</li>

		<li class="nav__item <?php if ($CURRENT_PAGE == "Portfolio") {?>active<?php }?>">
			<a href="../portfolio" class="nav__link ">portfolio</a>
			<ul class="nav__sublist <?php if ($CURRENT_PAGE == "Portfolio") {?>show<?php }?>">
				<li class="nav__subitem">
					<a href="../thesis" class="nav__sublink <?php if ($CURRENT_SUBPAGE == "Thesis") {?>active<?php }?>">Emoji recommendation</a>
					<ul class="nav__subsublist nav__pagelist <?php if ($CURRENT_SUBPAGE == "Thesis") {?>show<?php }?>">
						<li class="current"><a href="#intro" >Introduction</a></li>
						<li><a href="#current">Emoji moment</a></li>
						<li><a href="#literature">Literature review</a></li>
						<li><a href="#models">Models</a></li>
						<li><a href="#experiment">Experiment</a></li>
						<li><a href="#data">Data analysis</a></li>
						<li><a href="#closing">Closing thoughts</a></li>
					</ul>
				</li>
				<li class="nav__subitem">
					<a href="../zeno" class="nav__sublink <?php if ($CURRENT_SUBPAGE == "Zeno") {?>active<?php }?>">Zeno dress-up game</a>
					<ul class="nav__subsublist nav__pagelist <?php if ($CURRENT_SUBPAGE == "Zeno") {?>show<?php }?>">
						<li class="current"><a href="#intro" >Introduction</a></li>
						<li><a href="#requirements">Requirements</a></li>
						<li><a href="#game">Game design</a></li>
						<li><a href="#usertests">User tests</a></li>
						<li><a href="#discussion">Discussion</a></li>
					</ul>
				</li>
				<li class="nav__subitem">
					<a href="../figma" class="nav__sublink <?php if ($CURRENT_SUBPAGE == "Figma") {?>active<?php }?>">Figma UI design</a>
					<ul class="nav__subsublist nav__pagelist <?php if ($CURRENT_SUBPAGE == "Figma") {?>show<?php }?>">
						<li class="current"><a href="#intro" >Introduction</a></li>
						<li><a href="#bagel">Bagel Box</a></li>
						<li><a href="#highlights">Highlights</a></li>
					</ul>
				</li>
			</ul>
		</li>

		<li class="nav__item <?php if ($CURRENT_PAGE == "CV") {?>active<?php }?>">
			<a href="../files/LilianSung_resume.pdf" target="_blank" class="nav__link ">cv</a>
		</li>

		<li class="nav__item <?php if ($CURRENT_PAGE == "Blog") {?>active<?php }?>">
			<a href="./" class="nav__link ">blog</a>
		</li>		
	</ul>
	<?php else: ?>
	<ul class="nav__list">
		<li class="nav__item <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>">
			<a href="./" class="nav__link ">home</a>
		</li>

		<li class="nav__item <?php if ($CURRENT_PAGE == "Portfolio") {?>active<?php }?>">
			<a href="./portfolio" class="nav__link ">portfolio</a>
			<ul class="nav__sublist <?php if ($CURRENT_PAGE == "Portfolio") {?>show<?php }?>">
				<li class="nav__subitem">
					<a href="./thesis" class="nav__sublink <?php if ($CURRENT_SUBPAGE == "Thesis") {?>active<?php }?>">Emoji recommendation</a>
					<ul class="nav__subsublist nav__pagelist <?php if ($CURRENT_SUBPAGE == "Thesis") {?>show<?php }?>">
						<li class="current"><a href="#intro" >Introduction</a></li>
						<li><a href="#current">Emoji moment</a></li>
						<li><a href="#literature">Literature review</a></li>
						<li><a href="#models">Models</a></li>
						<li><a href="#experiment">Experiment</a></li>
						<li><a href="#data">Data analysis</a></li>
						<li><a href="#closing">Closing thoughts</a></li>
					</ul>
				</li>
				<li class="nav__subitem">
					<a href="./zeno" class="nav__sublink <?php if ($CURRENT_SUBPAGE == "Zeno") {?>active<?php }?>">Zeno dress-up game</a>
					<ul class="nav__subsublist nav__pagelist <?php if ($CURRENT_SUBPAGE == "Zeno") {?>show<?php }?>">
						<li class="current"><a href="#intro" >Introduction</a></li>
						<li><a href="#requirements">Requirements</a></li>
						<li><a href="#game">Game design</a></li>
						<li><a href="#usertests">User tests</a></li>
						<li><a href="#discussion">Discussion</a></li>
					</ul>
				</li>
				<li class="nav__subitem">
					<a href="./figma" class="nav__sublink <?php if ($CURRENT_SUBPAGE == "Figma") {?>active<?php }?>">Figma UI design</a>
					<ul class="nav__subsublist nav__pagelist <?php if ($CURRENT_SUBPAGE == "Figma") {?>show<?php }?>">
						<li class="current"><a href="#intro" >Introduction</a></li>
						<li><a href="#bagel">Bagel Box</a></li>
						<li><a href="#highlights">Highlights</a></li>
					</ul>
				</li>
			</ul>
		</li>

		<li class="nav__item <?php if ($CURRENT_PAGE == "CV") {?>active<?php }?>">
			<a href="./files/LilianSung_resume.pdf" target="_blank" class="nav__link ">cv</a>
		</li>

		<li class="nav__item <?php if ($CURRENT_PAGE == "Blog") {?>active<?php }?>">
			<a href="./blog" class="nav__link ">blog</a>
		</li>		
	</ul>
	<?php endif; ?>


</nav>