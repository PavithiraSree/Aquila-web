      <!--Registration form-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Service Registration form</h4>
                    </div>
                </div>
                <div class="panel-body no-padding">
     


                    <form method="post" action="servicedb.php" class="lobi-form">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="id" placeholder="WorkerID"/>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name"/>
                                    </div>
                                </div>
                            </div><div class="row">
                             <div class="col-sm-6">
                                 <div class="form-group">
                                    <input  name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password"/>
                                    
                                </div>
                            <div class="form-group">
                                <input type="text" name="phno" placeholder="PhoneNo"/>
                            </div></div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Email"/>
                                    </div>
                                </div>
                              <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select name="Type">
                                            <option value="Electric">Electric</option>
                                            <option value="Plumber">Plumber</option>
                                            <option value="Hardware">Hardware</option>
                                            <option value="System">System</option>
                                          
                                            
                                        </select>
                                    </div>
                                </div>
                </div>
                            
                            <div class="form-group">
                                <label>Gender: </label>
                                <label class="radio-inline lobiradio lobiradio-info">
                                    <input type="radio" name="gender" value="Male"> 
                                    <i></i> Male
                                </label>
                                <label class="radio-inline lobiradio lobiradio-info">
                                    <input type="radio" name="gender" value="Female"> 
                                     <i></i>Female
                                </label>
                            </div>
                         
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="salary" placeholder="Salary"/>
                                    </div>
                                </div>
                            </div>
                          
                            
                        </fieldset>
                        <footer>
                            
                            <button type="submit" name="get" class="btn btn-info btn-pretty">Register account</button>
                            
                        </footer>
                    </form>
                </div>
            </div>
          