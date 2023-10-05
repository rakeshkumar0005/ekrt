<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-9">
              <div class="row">
                <div class="col-sm-12 pr-0">
                  <div class="d-lg-flex">
                    <h3 class="text-dark font-weight-bold mb-0 mr-5">Welcome to Dashboard</h3>
                  <ul class="dashboard-link-btn-wrap mt-lg-0 mt-sm-2">
                    <li>
                      <a href="#" class="text-primary"><span><i class="mdi mdi-cube-outline"></i></span>Activities</a>
                    </li>
                    <li>
                      <a href="#"><span><i class="mdi mdi-signal"></i></span>Statistics</a>
                    </li>
                    <li>
                        <a href="#"><span><i class="mdi mdi-file-document-outline"></i></span>Summary</a>
                      </li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="dropdown float-right">
                  <button class="btn btn-sm bg-white dropdown-toggle font-weight-bold text-dark" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-calendar mr-1"></i>Today
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                    <h6 class="dropdown-header">Settings</h6>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Customers</h4>
                  <p class="text-small">+5.27% Since last month</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-dark font-weight-bold">43,981<span class="text-muted text-extra-small">/ per month</span></h2>
                    <div class="text-danger font-weight-bold d-flex justify-content-between align-items-center">
                        <i class="mdi mdi-chevron-down mdi-24px"></i> <span class=" text-extra-small">40.8%</span>
                    </div>
                  </div>
                  <canvas id="customer"></canvas>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Orders</h4>
                  <p class="text-small">-1.08% Since last month</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-dark font-weight-bold">55,543<span class="text-muted text-extra-small">/ per month</span></h2>
                    <div class="text-success font-weight-bold d-flex justify-content-between align-items-center">
                        <i class="mdi mdi-chevron-up mdi-24px"></i> <span class=" text-extra-small">130.5%</span>
                    </div>
                  </div>
                  <canvas id="orders"></canvas>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Growth</h4>
                  <p class="text-small">+5.27% Since last month</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-dark font-weight-bold">58.86%<span class="text-muted text-extra-small">/ per month</span></h2>
                    <div class="text-success font-weight-bold d-flex justify-content-between align-items-center">
                        <i class="mdi mdi-chevron-up mdi-24px"></i> <span class=" text-extra-small">120.3%</span>
                    </div>
                  </div>
                  <canvas id="growth"></canvas>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Revenue</h4>
                  <p class="text-small"> +7.00% Since last month</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-dark font-weight-bold">USD 42,9536<span class="text-muted text-extra-small">/ per month</span></h2>
                  </div>
                  <canvas id="revenue"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-xl-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body px-0 pb-0 border-bottom">
                  <div class="px-4">
                  <div class="d-flex justify-content-between mb-2">
                      <h4 class="card-title ml-2">Analytics</h4>
                      <div class="mr-2">
                        <button class="btn py-0 text-dark btn-sm">1D</button>
                        <button class="btn py-0 text-dark btn-sm">1W</button>
                        <button class="btn py-0 text-dark btn-sm">1M</button>
                        <button class="btn py-0 pr-0 text-dark btn-sm">1Y</button>
                      </div>
                  </div>
                  </div>
                </div>
                <div class="card-body pt-3">
                  <div>
                    <div class="total-analysis-position">
                        <h6 class="text-dark font-weight-bold mb-2">Total Analytics</h6>
                        <h2 class="text-dark font-weight-bold">$32456.65<span class="text-muted text-extra-small pl-3">10.5% of 20000 Total</span></h2>
                      </div>
                      <div class="flot-chart-container flothcart-container-dashboard">
                        <div id="flotChart" class="flot-chart flot-chart-dashboard"></div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body pb-4">
                    <h4 class="card-title">Visitors</h4>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt,</p>
                    <canvas id="visitors"></canvas>
                </div>
                <div class="card-body p-0 border-top">
                  <div class="px-4 text-center">
                    <div id="chart-visitors-legend" class="chart-visitors-legend">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row flex-grow ">
            <div class="col-lg-12 col-xl-6 grid-margin-md stretch-card flex-column d-flex">
              <div class="row flex-grow">
                <div class="col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body px-0 pb-0 border-bottom">
                      <div class="px-4 pb-3">
                        <h4 class="card-title ml-1">Resources overview</h4> 
                      </div>   
                    </div>
                    <div class="card-body">
                      <canvas id="resources-overview" class="mt-3"></canvas> 
                      <div class="row mt-4">
                        <div class="col-sm-6">
                          <h6 class="text-dark font-weight-bold">ACTIVE RESOURCE</h6>
                          <h3 class="text-dark font-weight-bold">$123,657</h3>
                          <p class="mt-2 text-small">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                          </p>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-dark font-weight-bold">INACTIVE RESOURCE</h6>
                            <h3 class="text-dark font-weight-bold">$100,278</h3>
                            <p class="mt-2 text-small">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                            </p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-7 pr-3">
                          <div class="row">
                            <div class="col-6 pr-3 text-center">
                              <div id="circleProgress1" class="progressbar-js-circle mb-2 mb-lg-0"></div>
                            </div>
                              
                              <div class="col-6 pl-3">
                                  <div id="circleProgress2" class="progressbar-js-circle  mb-2 mb-lg-0"></div>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <h6 class="text-dark font-weight-bold">Avg. Profit share</h6>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                          <h6 class="text-dark font-weight-bold">Avg. Daily sales</h6>
                          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>

            </div>
            <div class="col-lg-12 col-xl-6 grid-margin stretch-card flex-column">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sales overview</h4>
                  <p>Showing data from March 3 - 30 2019</p>
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h6 class="text-dark font-weight-bold mt-2">OVERALL SALES</h6>
                      <div class="d-flex align-items-center">
                        <h2 class="text-dark font-weight-bold mr-1 mb-0">$ 14,000</h2>
                        <div class="text-success text-small d-flex align-items-center">
                          <h6><i class="mdi mdi-chevron-up mdi-24px"></i> <span>30.68%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <h6 class="text-dark font-weight-bold mt-2">TODAY'S SALES</h6>
                      <div class="d-flex align-items-center">
                        <h2 class="text-dark font-weight-bold mr-1 mb-0">$ 41,160</h2>
                        <div class="text-success text-small  d-flex align-items-center">
                          <h6><i class="mdi mdi-chevron-up mdi-24px"></i> <span>68.22%</span></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <canvas id="sales-overview"></canvas>
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>Users</th>
                            <th>Status</th>
                            <th>Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="<?= $base_url ?>/assets/images/faces/face29.png" alt="">
                                <div class="ml-3">
                                    <div class="font-weight-bold  text-dark mb-1">Benjamin Rodriguez</div><div class="font-weight-medium">bria_morissette@gmail.com</div>
                                </div>
    
                              </div>
                            </td>
                            <td><span class="badge badge-opacity-success">completed</span></td>
                            <td><div class="font-weight-bold  text-dark mb-1">1,12,900</div><div class="font-weight-medium">Earning</div></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="<?= $base_url ?>/assets/images/faces/face30.png" alt="">
                                <div class="ml-3">
                                    <div class="font-weight-bold  text-dark mb-1">Franklin Williams</div><div class="font-weight-medium">franklinwilliams@gmail.com</div>
                                </div>
    
                              </div>
                            </td>
                            <td><span class="badge badge-opacity-success">completed</span></td>
                            <td><div class="font-weight-bold  text-dark mb-1">6,00,00</div><div class="font-weight-medium">Earning</div></td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="<?= $base_url ?>/assets/images/faces/face31.png" alt="">
                                <div class="ml-3">
                                    <div class="font-weight-bold  text-dark mb-1">Jordan Fox</div><div class="font-weight-medium">jordanfox@gmail.com</div>
                                </div>
    
                              </div>
                            </td>
                            <td><span class="badge badge-opacity-primary">Pending</span></td>
                            <td><div class="font-weight-bold  text-dark mb-1">3,42,230</div><div class="font-weight-medium">Earning</div></td>
                          </tr>
                          
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row flex-grow">
            <div class="col-xl-4 grid-margin stretch-card flex-column d-flex">
              <div class="row flex-grow">
                <div class="col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="pb-3 mb-3 border-bottom">
                        <div class="d-flex align-items-center">
                          <div class="recent-earnings">
                            <i class="mdi mdi-briefcase"></i>
                          </div>
                          <div>
                            <h3 class="text-dark font-weight-bold">$429536</h3>
                            <h6 class="text-dark font-weight-bold">RECENT EARNINGS</h6>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="text-center">
                          <p class="mb-1">Tickets Sold</p>
                          <h6 class="text-dark font-weight-bold">24995</h6>
                        </div>
                        <div class="text-center">
                          <p class="mb-1">Tickets Available</p>
                          <h6 class="text-dark font-weight-bold">12,281</h6>
                        </div>
                        <div class="text-center">
                            <p class="mb-1">Revenue</p>
                            <h6 class="text-dark font-weight-bold">11,200</h6>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 grid-margin-md stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-8">
                            <h4 class="card-title">Switch to Direct Plans</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>
                            <button type="button" class="btn btn-outline-primary mt-3">Plan Switch</button>
                        </div>
                        <div class="col-sm-4">
                          <img src="<?= $base_url ?>/assets/images/dashboard/group.png" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 grid-margin stretch-card flex-column">
              <div class="row flex-grow">
                <div class="col-sm-12 grid-margin-md stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="pb-3 pt-0 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-account-outline mdi-24px mr-3 text-primary"></i>
                                <h6 class="text-dark font-weight-bold mb-0">Profile</h6>
                            </div>
                          </div>
                          <div>
                            <div class="d-flex  align-items-center">
                              <h6 class="mb-0">Profile Verified</h6>
                              <i class="mdi mdi-chevron-right mdi-24px ml-2 text-primary"></i> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-layers-outline mdi-24px mr-3 text-primary"></i>
                                <h6 class="text-dark font-weight-bold mb-0">My Orders</h6>
                            </div>
                          </div>
                          <div>
                            <div class="d-flex  align-items-center">
                              <h6 class="mb-0">6 Pending</h6>
                              <i class="mdi mdi-chevron-right mdi-24px ml-2 text-primary"></i> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-shield-outline mdi-24px mr-3 text-primary"></i>
                                <h6 class="text-dark font-weight-bold mb-0">Watchlist</h6>
                            </div>
                          </div>
                          <div>
                            <div class="d-flex  align-items-center">
                              <h6 class="mb-0">343 Funds</h6>
                              <i class="mdi mdi-chevron-right mdi-24px ml-2 text-primary"></i> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-tag-outline mdi-24px mr-3 text-primary"></i>
                                <h6 class="text-dark font-weight-bold mb-0">Pricing</h6>
                            </div>
                          </div>
                          <div>
                            <div class="d-flex  align-items-center">
                              <h6 class="mb-0">343 Funds</h6>
                              <i class="mdi mdi-chevron-right mdi-24px ml-2 text-primary"></i> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="py-3 border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-calculator mdi-24px mr-3 text-primary"></i>
                                <h6 class="text-dark font-weight-bold mb-0">Calculators</h6>
                            </div>
                          </div>
                          <div>
                            <div class="d-flex  align-items-center">
                              <h6 class="mb-0">Calculate profits</h6>
                              <i class="mdi mdi-chevron-right mdi-24px ml-2 text-primary"></i> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="py-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-logout mdi-24px mr-3 text-primary"></i>
                                <h6 class="text-dark font-weight-bold mb-0">Logout</h6>
                            </div>
                          </div>
                          <div>
                            <div class="d-flex  align-items-center">
                              <h6 class="mb-0">Logout</h6>
                              <i class="mdi mdi-chevron-right mdi-24px ml-2 text-primary"></i> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 grid-margin stretch-card flex-column">
              <div class="row flex-grow">
                <div class="col-sm-12 grid-margin-md stretch-card d-flex">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <h4 class="card-title">Switch to Direct Plans</h4>
                            <h6><a href="#" class="text-primary">See 4 More</a></h6>
                        </div>
                        <div class="border p-3 mb-3">
                          <div class="border-bottom pb-3">
                            <div class="row">
                                <div class="col-sm-4 border-right-lg border-right-md-0">
                                  <div class="d-flex justify-content-center align-items-center">
                                    <h1 class="mb-0 mr-2 text-primary font-weight-normal">04</h1>
                                      <div>
                                        <p class="font-weight-bold mb-0 text-dark">Feb</p>
                                        <p class="mb-0">2018</p>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-sm-8 pl-3">
                                  <p class="text-dark font-weight-bold mb-0">Lorem ipsum dolor sit amit</p>
                                  <p class="mb-0">9.30 PM - 10:30 PM</p>
                                </div>
                              </div>
                          </div>
                          <div class="pt-3">
                              <div class="row">
                                  <div class="col-sm-4 border-right-lg border-right-md-0">
                                    <div class="d-flex justify-content-center align-items-center">
                                      <h1 class="mb-0 mr-2 text-primary font-weight-normal">15</h1>
                                        <div>
                                          <p class="font-weight-bold mb-0 text-dark">Mar</p>
                                          <p class="mb-0">2018</p>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-8 pl-3">
                                    <p class="text-dark font-weight-bold mb-0">Lorem ipsum dolor sit amit</p>
                                    <p class="mb-0">10.00 PM - 12:30 PM</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="border p-3">
                          <div class="border-bottom pb-3">
                            <div class="row">
                                <div class="col-sm-4 border-right-lg border-right-md-0">
                                  <div class="d-flex justify-content-center align-items-center">
                                    <h1 class="mb-0 mr-2 text-primary font-weight-normal">22</h1>
                                      <div>
                                        <p class="font-weight-bold mb-0 text-dark">Apr</p>
                                        <p class="mb-0">2018</p>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-sm-8 pl-3">
                                  <p class="text-dark font-weight-bold mb-0">Lorem ipsum dolor sit amit</p>
                                  <p class="mb-0">9.30 PM - 10:30 PM</p>
                                </div>
                              </div>
                          </div>
                          <div class="pt-3">
                              <div class="row">
                                  <div class="col-sm-4 border-right-lg border-right-md-0">
                                    <div class="d-flex justify-content-center align-items-center">
                                      <h1 class="mb-0 mr-2 text-primary font-weight-normal">26</h1>
                                        <div>
                                          <p class="font-weight-bold mb-0 text-dark">Jun</p>
                                          <p class="mb-0">2018</p>
                                        </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-sm-8 pl-3">
                                    <p class="text-dark font-weight-bold mb-0">Lorem ipsum dolor sit amit</p>
                                    <p class="mb-0">10.00 PM - 12:30 PM</p>
                                  </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-12 col-sm-12 col-md-12 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body px-0 pb-0 border-bottom">
                    <div class="px-4">
                    <div class="d-flex justify-content-between mb-2">
                        <h4 class="card-title ml-2">Calender</h4>
                        <h6><a href="pages/apps/calendar.html" class="text-primary">Go to Calender</a></h6>
                      </div>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-1 border-bottom">
                    <div class="px-4">
                      <div id="inline-datepicker-dashboard" class="datepicker inline-datepicker-dashboard"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center text-dark">
                      <h1>$234/m.</h1>
                      <button type="button" class="btn btn-inverse-primary btn-sm">New</button>
                    </div>
                    <h3 class="text-dark">For Business Plans</h3>
                    <p class="border-bottom text-dark pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    <div>
                      <div class="d-flex justify-content-between align-items-center py-2">
                        <h6 class="text-dark">Storage capacity</h6>
                        <h6 class="font-weight-medium text-dark">650GB</h6>
                      </div>
                      <div class="d-flex justify-content-between align-items-center py-2">
                        <h6 class="text-dark">Online support</h6>
                        <h6 class="font-weight-medium text-dark">24/7</h6>
                      </div>
                      <div class="d-flex justify-content-between align-items-center py-2">
                        <h6 class="text-dark">Daily Updates</h6>
                        <h6 class="font-weight-medium text-dark">Unlimited</h6>
                      </div>
                      <div class="d-flex justify-content-between align-items-center py-2">
                        <h6 class="text-dark">Visitors Monitoring</h6>
                        <h6 class="font-weight-medium text-dark">342</h6>
                      </div>
                      <div class="d-flex justify-content-between align-items-center py-2">
                        <h6 class="text-dark">Email Account</h6>
                        <h6 class="font-weight-medium text-dark">Free</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-4 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body px-0 pb-0 border-bottom">
                        <div class="px-4 pb-3">
                            <div class="d-flex justify-content-between align-items-center text-dark">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0 ml-1">Login</h6>
                                    <p class="mb-0 ml-2">welcome back</p>
                                </div>            
                                <a href="pages/samples/register.html" class="btn btn-link text-primary font-weight-bold mr-1 p-0">Sign up</a>
                                
                              </div>
                        </div>
                      </div>
                      <div class="card-body px-0 pt-1 border-bottom">
                        <div class="px-4">
                            <form class="dashboard-login mt-2">
                              <div class="form-group">
                                <label for="Login" class=" text-dark text-small">Your login or email</label>
                                <input type="email" class="form-control" id="Login" placeholder="Login">
                              </div>
                              <div class="form-group">
                                <label for="pwd" class=" text-dark text-small">Your Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Your Password">
                              </div>
                              <div class="form-group form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox"> Remember me
                                </label>
                              </div>
                              <button type="submit" class="btn btn-primary btn-md btn-block mb-2">Login</button>
                                  <a href="#" class="auth-link text-small" >Forgot password?</a>
                            </form>
                            
                        </div>
                      </div>
                    </div>
              </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">App Categories</h4>
                  <div class="progress grouped mt-4">
                    <div class="progress-bar  bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 16%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar  bg-primary" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 12%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-light" role="progressbar" style="width: 12%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 12%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="app-categories-legend mt-4">
                    <div class="d-flex justify-content-between legend-label align-items-center">
                      <div class="d-flex align-items-center"><span class="bg-danger"></span>News</div>
                      <div>25% 34m</div>
                    </div>
                    <div class="d-flex justify-content-between legend-label align-items-center">
                      <div class="d-flex"><span class="bg-info"></span>Social Media</div>
                      <div>16% 15m</div>
                    </div>
                    <div class="d-flex justify-content-between legend-label align-items-center">
                      <div class="d-flex align-items-center"><span class="bg-primary"></span>Email</div>
                      <div>10% 27m</div>
                    </div>
                    <div class="d-flex justify-content-between legend-label align-items-center">
                      <div class="d-flex align-items-center"><span class="bg-warning"></span>Entertainment</div>
                      <div>25% 56m</div>
                    </div>
                    <div class="d-flex justify-content-between legend-label align-items-center">
                      <div class="d-flex align-items-center"><span class="bg-success"></span>Apps</div>
                      <div>12% 12m</div>
                    </div>
                    <div class="d-flex justify-content-between legend-label align-items-center pb-0">
                        <div class="d-flex align-items-center"><span class="bg-dark"></span>Apps</div>
                        <div>12% 12m</div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Notifications & Update</h4>
                  <div class="mt-4">
                    <div class="mb-3">
                      <span class="badge badge-opacity-primary mb-2">Tomorrow</span>
                      <h6 class="text-dark font-weight-bold">Glen Hines</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                    <div class="mb-3">
                      <span class="badge badge-opacity-primary mb-2">Monday</span>
                      <h6 class="text-dark font-weight-bold">Nannie Rodgers</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>
                    <div class="mb-3">
                      <span class="badge badge-opacity-primary mb-2">Saturday</span>
                      <h6 class="text-dark font-weight-bold">Susie Mullins</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body px-0 border-bottom">
                  <div class="px-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="card-title ml-1 mb-0">Transaction History</h4>
                        <h6 class="mr-1 mb-0"><a href="#" class="text-primary">Show All</a></h6>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="transaction-history-item">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <div class="transaction-history-brand transaction-history-brand-success">H</div>
                        <h6 class="text-dark">HSBC</h6>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-arrow-top-left text-success mr-1"></i>
                        <h6 class="text-dark font-weight-bold">$ 14,000</h6>
                      </div>
                    </div>
                  </div>
                  <div class="transaction-history-item">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <div class="transaction-history-brand transaction-history-brand-warning">G</div>
                        <h6 class="text-dark">G4S</h6>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-arrow-bottom-right text-danger mr-1"></i>
                        <h6 class="text-dark font-weight-bold">$ 34,000</h6>
                      </div>
                    </div>
                  </div>
                  <div class="transaction-history-item">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <div class="transaction-history-brand transaction-history-brand-primary">J</div>
                        <h6 class="text-dark">John Lewis & Partners</h6>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-arrow-top-left text-success mr-1"></i>
                        <h6 class="text-dark font-weight-bold">$ 23,000</h6>
                      </div>
                    </div>
                  </div>
                  <div class="transaction-history-item">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <div class="transaction-history-brand transaction-history-brand-danger">J</div>
                        <h6 class="text-dark">Clarks</h6>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-arrow-bottom-right text-danger mr-1"></i>
                        <h6 class="text-dark font-weight-bold">$ 65,000</h6>
                      </div>
                    </div>
                  </div>
                  <div class="transaction-history-item">
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="d-flex align-items-center">
                        <div class="transaction-history-brand transaction-history-brand-primary">J</div>
                        <h6 class="text-dark">Lush Cosmetics</h6>
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-arrow-top-left text-success mr-1"></i>
                        <h6 class="text-dark font-weight-bold">$ 77,000</h6>
                      </div>
                    </div>
                  </div>
                  <div class="transaction-history-item">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                          <div class="transaction-history-brand transaction-history-brand-danger">J</div>
                          <h6 class="text-dark">Lush Cosmetics</h6>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-arrow-bottom-right text-danger mr-1"></i>
                          <h6 class="text-dark font-weight-bold">$ 77,000</h6>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
   