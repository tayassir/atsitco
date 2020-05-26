       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Services</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Services</a></li>
                            <!-- <li><a href="#">Forms</a></li> -->
                            <!-- <li class="active">Advanced</li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                                <div class="row">
                                    <div class="col-md-12">
                                    <?php if($error = $this->session->flashdata('error')):  ?>
                                        <div class="alert alert-danger text-center">
                                            <?php echo $error; ?>
                                        </div>
                                    <?php  endif; ?>
                                    <?php if($update = $this->session->flashdata('update')):  ?>
                                        <div class="alert alert-success text-center">
                                            <?php echo $update; ?>
                                        </div>
                                    <?php  endif; ?>        
                                    </div>
                                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <strong>IT Infrastructure</strong> 
                            </div>
                            <div class="card-body card-block">
                            <?php echo form_open_multipart('customize/services'); ?>
                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">IT Infrastructure</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="infra" rows="5"><?php echo $servicesdata->infra ?></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Image Upload </label>
                                            <div class="input-group">
                                                <input type="file" name="infra_img" class="form-control" >
                                            </div>
                                            <small class="form-text text-muted">Image size should be 1024W x 768H</small>
                                            <div class="text-center">
                                                <img src="<?php echo base_url().'assets/upload/'.$servicesdata->infra_img ?>" class="img-fluid" alt="Logo" width="100">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <strong>IT Security</strong> 
                            </div>
                            <div class="card-body card-block">
                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">IT Security</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="security" rows="5"><?php echo $servicesdata->security ?></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Image Upload </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-building"></i></div> -->
                                                <input type="file" name="security_img" class="form-control" >
                                            </div>
                                            <small class="form-text text-muted">Image size should be 1024W x 768H</small>
                                            <div class="text-center">
                                                <img src="<?php echo base_url().'assets/upload/'.$servicesdata->security_img ?>" class="img-fluid" alt="Logo" width="100">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <strong>Networking Solutions</strong> 
                            </div>
                            <div class="card-body card-block">
                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Networking Solutions</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="network" rows="5"><?php echo $servicesdata->network ?></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Image Upload </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-building"></i></div> -->
                                                <input type="file" name="network_img" class="form-control" >
                                            </div>
                                            <small class="form-text text-muted">Image size should be 1024W x 768H</small>
                                            <div class="text-center">
                                                <img src="<?php echo base_url().'assets/upload/'.$servicesdata->network_img ?>" class="img-fluid" alt="Logo" width="100">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <strong>Hardware</strong> 
                            </div>
                            <div class="card-body card-block">
                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Hardware</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="hardware" rows="5"><?php echo $servicesdata->hardware ?></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Image Upload </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-building"></i></div> -->
                                                <input type="file" name="hardware_img" class="form-control" >
                                            </div>
                                            <small class="form-text text-muted">Image size should be 1024W x 768H</small>
                                            <div class="text-center">
                                                <img src="<?php echo base_url().'assets/upload/'.$servicesdata->hardware_img ?>" class="img-fluid" alt="Logo" width="100">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <strong>Low Current</strong> 
                            </div>
                            <div class="card-body card-block">
                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Low Current</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="lowcur" rows="5"><?php echo $servicesdata->lowcur ?></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Image Upload </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-building"></i></div> -->
                                                <input type="file" name="lowcur_img" class="form-control" >
                                            </div>
                                            <small class="form-text text-muted">Image size should be 1024W x 768H</small>
                                            <div class="text-center">
                                                <img src="<?php echo base_url().'assets/upload/'.$servicesdata->lowcur_img ?>" class="img-fluid" alt="Logo" width="100">
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <button type="submit" id="submitBtn" class="btn btn-success btn-lg" >Submit</button>
                        <button type="reset" class="btn btn-primary btn-lg" >Reset</button>
                    </div>
                </div>
                </form>

            </div>
        </div>