<?php /* V2.20 Template Lite, 8 March 2008. (c) Mark Dickenson, Jon Langevin. GNU LGPL. 2013-10-12 09:42:42 CEST */ ?>

<?php if ($this->_vars['ss_body'] != ''): ?>
<div class="headline">
	<div class="sectiontitle"><a href="<?php echo $this->_vars['my_base_url'];  echo $this->_vars['my_pligg_base']; ?>
"><?php echo $this->_vars['ss_header']; ?>
</a></div>
</div>
<div class="boxcontent">
	<ul class="sidebar-stories">
		<?php echo $this->_vars['ss_body']; ?>

	</ul>
</div>
<?php endif; ?>