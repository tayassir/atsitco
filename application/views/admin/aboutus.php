       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">About Us</a></li>
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
                                <strong>Our History</strong> 
                            </div>
                            <div class="card-body card-block">
                <?php echo form_open_multipart('customize/aboutus'); ?>
                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">History</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="history" rows="5"><?php echo $aboutdata->history ?></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Image Upload </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-building"></i></div> -->
                                                <input type="file" name="history_img" class="form-control" >
                                            </div>
                                            <small class="form-text text-muted">Image size should be 1024W x 768H</small>
                                            <div class="text-center">
                                                <img src="<?php echo base_url().'assets/upload/'.$aboutdata->history_img ?>" class="img-fluid" alt="Logo" width="100">
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
                                <strong>Our Mission</strong> 
                            </div>
                            <div class="card-body card-block">
                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Mission</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="mission" rows="5"><?php echo $aboutdata->mission ?></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Image Upload </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-building"></i></div> -->
                                                <input type="file" name="mission_img" class="form-control" >
                                            </div>
                                            <small class="form-text text-muted">Image size should be 1024W x 768H</small>
                                            <div class="text-center">
                                                <img src="<?php echo base_url().'assets/upload/'.$aboutdata->mission_img ?>" class="img-fluid" alt="Logo" width="100">
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
                                <strong>Our Values</strong> 
                            </div>
                            <div class="card-body card-block">
                                    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Values</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="value" rows="5"><?php echo $aboutdata->value ?></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Image Upload </label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-building"></i></div> -->
                                                <input type="file" name="value_img" class="form-control" >
                                            </div>
                                            <small class="form-text text-muted">Image size should be 1024W x 768H</small>
                                            <div class="text-center">
                                                <img src="<?php echo base_url().'assets/upload/'.$aboutdata->value_img ?>" class="img-fluid" alt="Logo" width="100">
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