<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Genera") {?>active<?php }?>" href="general.php">General</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Local") {?>active<?php }?>" href="local.php">Local</a>
	  </li>
        <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Universitar") {?>active<?php }?>" href="universitar.php">Universitar</a>
	  </li>
        <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Fii") {?>active<?php }?>" href="fii.php">Fii</a>
        </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
	  </li>
	</ul>
</div>