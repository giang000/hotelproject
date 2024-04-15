<div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Dashboard</h2>
      </div>
    </div>
    <section class="no-padding-top no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-user-1"></i></div><strong>Available Rooms</strong>
                </div>
                <div class="number dashtext-1">{{ $totalRooms }}</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: {{ ($totalRooms / 8) * 100 }}%" aria-valuenow="{{ $totalRooms }}" aria-valuemin="0" aria-valuemax="8" class="progress-bar progress-bar-template dashbg-1"></div>
            </div>
            
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-contract"></i></div><strong>New Projects</strong>
                </div>
                <div class="number dashtext-2">375</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Invoices</strong>
                </div>
                <div class="number dashtext-3">140</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="statistic-block block">
              <div class="progress-details d-flex align-items-end justify-content-between">
                <div class="title">
                  <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>All Projects</strong>
                </div>
                <div class="number dashtext-4">41</div>
              </div>
              <div class="progress progress-template">
                <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="bar-chart block no-margin-bottom">
              <canvas id="barChartExample1"></canvas>
            </div>
            <div class="bar-chart block">
              <canvas id="barChartExample2"></canvas>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="line-cahrt block">
              <canvas id="lineCahrt"></canvas>
            </div>
          </div>
        </div>
      </div>
    </section>
 
    <section class="no-padding-bottom">
      <div class="container-fluid">
     
     
        <div class="public-user-block block">
          <div class="row d-flex align-items-center">                   
            <div class="col-lg-4 d-flex align-items-center">
              <div class="order">4th</div>
              <div class="avatar"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Tomas Hecktor</strong><span class="d-block">@tomhecktor</span></a>
            </div>
            <div class="col-lg-4 text-center">
              <div class="contributions">410 Contributions</div>
            </div>
            <div class="col-lg-4">
              <div class="details d-flex">
                <div class="item"><i class="icon-info"></i><strong>110</strong></div>
                <div class="item"><i class="fa fa-gg"></i><strong>200</strong></div>
                <div class="item"><i class="icon-flow-branch"></i><strong>100</strong></div>
              </div>
            </div>
          </div>
        </div>
        <div class="public-user-block block">
          <div class="row d-flex align-items-center">                   
            <div class="col-lg-4 d-flex align-items-center">
              <div class="order">5th</div>
              <div class="avatar"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Alexander Shelby</strong><span class="d-block">@alexshelby</span></a>
            </div>
            <div class="col-lg-4 text-center">
              <div class="contributions">320 Contributions</div>
            </div>
            <div class="col-lg-4">
              <div class="details d-flex">
                <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                <div class="item"><i class="fa fa-gg"></i><strong>120</strong></div>
                <div class="item"><i class="icon-flow-branch"></i><strong>50</strong></div>
              </div>
            </div>
          </div>
        </div>
        <div class="public-user-block block">
          <div class="row d-flex align-items-center">                   
            <div class="col-lg-4 d-flex align-items-center">
              <div class="order">6th</div>
              <div class="avatar"> <img src="img/avatar-6.jpg" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Arther Kooper</strong><span class="d-block">@artherkooper</span></a>
            </div>
            <div class="col-lg-4 text-center">
              <div class="contributions">170 Contributions</div>
            </div>
            <div class="col-lg-4">
              <div class="details d-flex">
                <div class="item"><i class="icon-info"></i><strong>60</strong></div>
                <div class="item"><i class="fa fa-gg"></i><strong>70</strong></div>
                <div class="item"><i class="icon-flow-branch"></i><strong>40</strong></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="margin-bottom-sm">
      <div class="container-fluid">
        <div class="row d-flex align-items-stretch">
          <div class="col-lg-4">
            <div class="stats-with-chart-1 block">
              <div class="title"> <strong class="d-block">Sales Difference</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
              <div class="row d-flex align-items-end justify-content-between">
                <div class="col-5">
                  <div class="text"><strong class="d-block dashtext-3">$740</strong><span class="d-block">May 2017</span><small class="d-block">320 Sales</small></div>
                </div>
                <div class="col-7">
                  <div class="bar-chart chart">
                    <canvas id="salesBarChart1"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">   
            <div class="stats-with-chart-1 block">
              <div class="title"> <strong class="d-block">Visit Statistics</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
              <div class="row d-flex align-items-end justify-content-between">
                <div class="col-4">
                  <div class="text"><strong class="d-block dashtext-1">$457</strong><span class="d-block">May 2017</span><small class="d-block">210 Sales</small></div>
                </div>
                <div class="col-8">
                  <div class="bar-chart chart">
                    <canvas id="visitPieChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="stats-with-chart-1 block">
              <div class="title"> <strong class="d-block">Sales Activities</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
              <div class="row d-flex align-items-end justify-content-between">
                <div class="col-5">
                  <div class="text"><strong class="d-block dashtext-2">80%</strong><span class="d-block">May 2017</span><small class="d-block">+35 Sales</small></div>
                </div>
                <div class="col-7">
                  <div class="bar-chart chart">
                    <canvas id="salesBarChart2"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   