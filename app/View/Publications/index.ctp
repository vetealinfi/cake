				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo $this->Html->url('/'); ?>">Principal</a>
						</li>

						<li>
							<a href="<?php echo $this->Html->url('/Publications/'); ?>">Publications</a>
						</li>
						<li class="active">Publications</li>
					</ul><!-- /.breadcrumb -->

				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<div class="page-content">
					
					<div class="page-content-area">
						<div class="page-header">
							<h1>
								Publications								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									<?php echo __('Index Publication'); ?>								</small>
							</h1>
							<a href="<?php echo $this->Html->url('/Publications/add/'); ?>" class="btn btn-default btn-app btn-xs">
								<i class="ace-icon fa fa-cog bigger-160"></i>
								Agregar
							</a>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="sample-table-1" class="table table-striped table-bordered table-hover">
											<thead>
																									<th><?php echo $this->Paginator->sort('user_id'); ?></th>
																									<th><?php echo $this->Paginator->sort('titulo'); ?></th>
																									<th><?php echo $this->Paginator->sort('lugar'); ?></th>
																									<th><?php echo $this->Paginator->sort('fecha'); ?></th>
																									<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
																									<th><?php echo $this->Paginator->sort('url'); ?></th>
																									<th class="actions"><?php echo __('Actions'); ?></th>
											</thead>

											<tbody>
												<?php foreach ($publications as $publication){ ?>
												<tr>
															<td>
			<?php echo $this->Html->link($publication['User']['full_name'], array('controller' => 'users', 'action' => 'view', $publication['User']['id'])); ?>
		</td>
		<td><?php echo h($publication['Publication']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['lugar']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['url']); ?>&nbsp;</td>
													<td>
														<div class="hidden-sm hidden-xs btn-group">
															<a href="<?php echo $this->Html->url('/Publications/view/'.$publication['Publication']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</a>

															<a href="<?php echo $this->Html->url('/Publications/edit/'.$publication['Publication']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="Edit">
																<button class="btn btn-xs btn-info">
																<i class="ace-icon fa fa-pencil bigger-120"></i>
															</button>
															</a>

															
															<form action="<?php echo $this->Html->url('/Publications/delete/'.$publication['Publication']['id']); ?>" name="post_<?php echo $publication['Publication']['id']; ?>" id="post_<?php echo $publication['Publication']['id']; ?>" style="display:none;" method="post">
																<input type="hidden" name="_method" value="POST">
															</form>
															<a href="" class="tooltip-info" data-rel="tooltip" title="Delete">
																<button class="btn btn-xs btn-danger" onclick="if(confirm('Estas seguro?')){ document.post_<?php echo $publication['Publication']['id']; ?>.submit();} event.returnvalue='false'; return false; ">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</button>
															</a>
															

														</div>

														<div class="hidden-md hidden-lg">
															<div class="inline position-relative">
																<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
																	<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																	<li>
																		<a href="<?php echo $this->Html->url('/Publications/view/'.$publication['Publication']['id']); ?>" class="tooltip-info" data-rel="tooltip" title="View">
																			<span class="blue">
																				<i class="ace-icon fa fa-search-plus bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('/Publications/edit/'.$publication['Publication']['id']); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																			<span class="green">
																				<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																			</span>
																		</a>
																	</li>

																	<li>
																		<a href="<?php echo $this->Html->url('/Publications/delete/'.$publication['Publication']['id']); ?>" onclick="return confirm('Estas seguro?');" class="tooltip-error" data-rel="tooltip" title="Delete">
																			<span class="red">
																				<i class="ace-icon fa fa-trash-o bigger-120"></i>
																			</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<?php } ?>
												
											</tbody>
										</table>
										<ul class="pagination pull-right no-margin">
											<li class="prev disabled">
												<a href="#">
													<i class="ace-icon fa fa-angle-double-left"></i>
												</a>
											</li>

											<li class="active">
												<a href="#">1</a>
											</li>

											<li>
												<a href="#">2</a>
											</li>

											<li>
												<a href="#">3</a>
											</li>

											<li class="next">
												<a href="#">
													<i class="ace-icon fa fa-angle-double-right"></i>
												</a>
											</li>
										</ul>
									
									</div><!-- /.span -->
								</div><!-- /.row -->

							</div><!-- /.col -->
						</div><!-- /.row -->
					
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->