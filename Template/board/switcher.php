<div class="table-list">
	<div class="views-switcher-component">
	  <ul class="views">
		  <li>
			  <i class="fa fa-list-ul fa-fw"></i>
			  <?= $this->url->link(t('Projects Selection'), 'Bigboard', 'select', ['plugin' => 'Bigboard', 'boardview' => 'active', ], false, 'js-modal-medium') ?>
		  </li>
		  <li class="collapse_all">
			  <span class="filter-collapse-projects">
				  <i class="fa fa-folder-o fa-fw"></i>
				  <a href="#" title="<?= t('Keyboard shortcut: "%s"', 'e') ?>"><?= t('Collapse all projects') ?></a>
			  </span>
		  </li>
		  <li class="expand_all">
			  <span class="filter-expand-projects">
				  <i class="fa fa-folder-open-o fa-fw"></i>
				  <a href="#" title="<?= t('Keyboard shortcut: "%s"', 'e') ?>"><?= t('Expand all projects') ?></a>
			  </span>
		  </li>		  
		  <li>
			  <span class="filter-display-mode" <?= $bigboarddisplaymode ? '' : 'style="display: none;"' ?>>
				  <i class="fa fa-expand fa-fw"></i>
				  <?= $this->url->link(t('Expand tasks'), 'Bigboard', 'expandAll', array('plugin' => 'Bigboard'), false, 'board-display-mode', t('Keyboard shortcut: "%s"', 's')) ?>
			  </span>
			  <span class="filter-display-mode" <?= $bigboarddisplaymode ? 'style="display: none;"' : '' ?>>
				  <i class="fa fa-compress fa-fw"></i>
				  <?= $this->url->link(t('Collapse tasks'), 'Bigboard', 'collapseAll', array('plugin' => 'Bigboard'), false, 'board-display-mode', t('Keyboard shortcut: "%s"', 's')) ?>
			  </span>
		  </li>
		  <li>
			  <span class="filter-compact">
				  <i class="fa fa-th fa-fw"></i> <a href="#" class="filter-toggle-scrolling" title="<?= t('Keyboard shortcut: "%s"', 'c') ?>"><?= t('Compact view') ?></a>
			  </span>
			  <span class="filter-wide" style="display: none">
				  <i class="fa fa-arrows-h fa-fw"></i> <a href="#" class="filter-toggle-scrolling" title="<?= t('Keyboard shortcut: "%s"', 'c') ?>"><?= t('Horizontal scrolling') ?></a>
			  </span>
		  </li>
		  <li>
			  <i class="fa fa-files-o fa-fw" aria-hidden="true"></i>
			  <?= $this->url->link(t('Manage projects'), 'ProjectListController', 'show') ?>
		  </li>
	  </ul>
	</div>
</div>
