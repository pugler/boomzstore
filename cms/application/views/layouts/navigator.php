<div class="nav-title-<?=($this->router->class=='news')? 'select': 'default';?>">
	<div class="nav-text-title"><img src="<?=base_url()?>public/img/icon/newspaper.png" /> <span class="nav-title"><a href="<?=base_url()?>news" class="Lblue">News</a></span></div>
</div>

<div class="nav-title-<?=($this->router->class=='articles')? 'select': 'default';?>">
	<div class="nav-text-title"><img src="<?=base_url()?>public/img/icon/newspaper.png" /> <span class="nav-title"><a href="<?=base_url()?>articles" class="Lblue">Articles</a></span></div>
</div>

<div class="nav-title-<?=($this->router->class=='upload')? 'select': 'default';?>">
	<div class="nav-text-title"><img src="<?=base_url()?>public/img/icon/newspaper.png" /> <span class="nav-title"><a href="<?=base_url()?>upload" target="_blank" class="Lblue" >Upload images</a></span></div>
</div>