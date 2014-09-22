				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo "<?php echo \$this->Html->url('/'); ?>"; ?>">Principal</a>
						</li>

						<li>
							<a href="<?php echo "<?php echo \$this->Html->url('/{$controllerName}/'); ?>"; ?>"><?php echo $pluralHumanName; ?></a>
						</li>
						<li class="active"><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								<?php echo $pluralHumanName; ?>
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?>
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								
								<?php echo "<?php echo \$this->Form->create('{$modelClass}',array('class'=>'form-horizontal','role'=>'form')); ?>\n"; ?>
									
								<?php
									
									if (!empty($associations['hasAndBelongsToMany'])) {
										foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
								?>	
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											<?php		
												echo $assocName;
											?>
										</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
								<?php		
									echo "<?php echo \$this->Form->input('{$assocName}',array('div'=>false,'label'=>false,'id'=>'form-field-select-3','data-placeholder'=>'Escoja un(a){$assocName}','class'=>'chosen-select')); ?>";
								?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
								<?php
										}
									}
									foreach ($fields as $field) {		
										if (strpos($action, 'add') !== false && $field === $primaryKey) {
											continue;
										} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
								?>	
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
											<?php		
												echo $field;
											?>
										</label>

										<div class="col-sm-9">
								<?php
											echo "<?php echo \$this->Form->input('{$field}',array('div'=>false,'label'=>false,'id'=>'form-field-1','placeholder'=>'{$field}','class'=>'col-xs-10 col-sm-5')); ?>";
								?>	
										</div>
									</div>
									<!-- /section:elements.form -->
									<div class="space-4"></div>
								<?php
										}
									}
									
									
									
								?>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									
								<?php echo "<?php echo \$this->Form->end(); ?>"; ?>

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->