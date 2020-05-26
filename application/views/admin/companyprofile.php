       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Company Profile</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Company Profile</a></li>
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


                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <strong>Change</strong> <small>Company Profile </small>
                            </div>
                            <div class="card-body card-block">
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
                                    
                                <?php echo form_open_multipart('customize/companyprofile'); ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Company Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-building"></i></div>
                                                <input name="company_name" value="<?php echo $company_data->company_name ?>" type="text" class="form-control" name="">
                                            </div>
                                        </div>  
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Company Full Name</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-building"></i></div>
                                                <input name="company_fullname" value="<?php echo $company_data->company_fullname ?>" type="text" class="form-control" name="">
                                            </div>
                                        </div>  
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Company logo</label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-building"></i></div> -->
                                                <input type="file" name="company_logo" class="form-control" >
                                            </div>
                                            <small class="form-text text-muted">Logo size should be 556W x 443H</small>
                                        </div>  
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <div class="text-center">
                                                <img src="<?php echo base_url().'assets/upload/'.$company_data->company_logo ?>" class="img-fluid" alt="Logo" width="100">
                                            </div>
                                        </div>  
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class=" form-control-label">Address</label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-addon"><i class="fa fa-envelope"></i></div> -->
                                                <textarea name="address" class="form-control" rows="5" ><?php echo $company_data->address ?></textarea>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="row">
                                    <?php foreach (json_decode($company_data->phone) as $value): ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class=" form-control-label">Phone 1</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                <input name="phone[]" value="<?php echo $value->phone ?>" type="number" class="form-control">
                                            </div>
                                                <small class="form-text text-muted">ex. (999) 999-9999</small>
                                        </div>        
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label class=" form-control-label">Phone 2</label>
                                            <div class="input-group">
                                                <div  class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                <input name="phone[]" type="number" class="form-control">
                                            </div>
                                                <small class="form-text text-muted">ex. (999) 999-9999</small>
                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class=" form-control-label">Phone 3</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                <input name="phone[]" type="number" class="form-control">
                                            </div>
                                                <small class="form-text text-muted">ex. (999) 999-9999</small>
                                        </div>        
                                    </div> -->
                                <?php endforeach; ?>
                                </div>
                                <div class="row">
                                    <?php foreach (json_decode($company_data->email) as $value): ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class=" form-control-label">Email 1</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                <input name="email[]" value="<?php echo $value->email ?>" type="text" class="form-control">
                                            </div>
                                                <small class="form-text text-muted">ex. jhonson@example.com</small>
                                        </div>        
                                    </div>
                                   <!--  <div class="col-md-4">
                                        <div class="form-group">
                                            <label class=" form-control-label">Email 2</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                <input name="email[]" type="text" class="form-control">
                                            </div>
                                                <small class="form-text text-muted">ex. jhonson@example.com</small>
                                        </div>        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class=" form-control-label">Email 3</label>
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                <input name="email[]" type="text" class="form-control">
                                            </div>
                                                <small class="form-text text-muted">ex. jhonson@example.com</small>
                                        </div>        
                                    </div> -->
                                    <?php endforeach; ?>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" id="submitBtn" class="btn btn-success btn-lg" >Submit</button>
                                        <button type="reset" class="btn btn-primary btn-lg" >Close</button>

                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>

                  <!--   <script type="text/javascript">
                        $(document).ready(function(){
                            $('submitBtn').click(function(){
                                if()
                            })
                        });
                    </script>
 -->

                   <!--  <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Standard Select</strong>
                            </div>
                            <div class="card-body">

                                <select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                    <option value=""></option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                </select>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Multi Select</strong>
                            </div>
                            <div class="card-body">

                                <select data-placeholder="Choose a country..." multiple class="standardSelect">
                                    <option value=""></option>
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                </select>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Multi Select with Groups</strong>
                            </div>
                            <div class="card-body">

                                <select data-placeholder="Your Favorite Football Team" multiple class="standardSelect" tabindex="5">
                                    <option value=""></option>
                                    <optgroup label="NFC EAST">
                                        <option>Dallas Cowboys</option>
                                        <option>New York Giants</option>
                                        <option>Philadelphia Eagles</option>
                                        <option>Washington Redskins</option>
                                    </optgroup>
                                    <optgroup label="NFC NORTH">
                                        <option>Chicago Bears</option>
                                        <option>Detroit Lions</option>
                                        <option>Green Bay Packers</option>
                                        <option>Minnesota Vikings</option>
                                    </optgroup>
                                    <optgroup label="NFC SOUTH">
                                        <option>Atlanta Falcons</option>
                                        <option>Carolina Panthers</option>
                                        <option>New Orleans Saints</option>
                                        <option>Tampa Bay Buccaneers</option>
                                    </optgroup>
                                    <optgroup label="NFC WEST">
                                        <option>Arizona Cardinals</option>
                                        <option>St. Louis Rams</option>
                                        <option>San Francisco 49ers</option>
                                        <option>Seattle Seahawks</option>
                                    </optgroup>
                                    <optgroup label="AFC EAST">
                                        <option>Buffalo Bills</option>
                                        <option>Miami Dolphins</option>
                                        <option>New England Patriots</option>
                                        <option>New York Jets</option>
                                    </optgroup>
                                    <optgroup label="AFC NORTH">
                                        <option>Baltimore Ravens</option>
                                        <option>Cincinnati Bengals</option>
                                        <option>Cleveland Browns</option>
                                        <option>Pittsburgh Steelers</option>
                                    </optgroup>
                                    <optgroup label="AFC SOUTH">
                                        <option>Houston Texans</option>
                                        <option>Indianapolis Colts</option>
                                        <option>Jacksonville Jaguars</option>
                                        <option>Tennessee Titans</option>
                                    </optgroup>
                                    <optgroup label="AFC WEST">
                                        <option>Denver Broncos</option>
                                        <option>Kansas City Chiefs</option>
                                        <option>Oakland Raiders</option>
                                        <option>San Diego Chargers</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->