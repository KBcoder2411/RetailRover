@include('layouts.admin.header')

<div class="section-admin container-fluid">
  
        <div class="row admin text-center">
          <div class="col-md-12">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                  <h4 class="text-left text-uppercase"><b>Orders</b></h4>
                  <div
                    class="row vertical-center-box vertical-center-box-tablet"
                  >
                    <div class="col-xs-3 mar-bot-15 text-left">
                      <label class="label bg-green"
                        >30% <i class="fa fa-level-up" aria-hidden="true"></i
                      ></label>
                    </div>
                    <div class="col-xs-9 cus-gh-hd-pro">
                      <h2 class="text-right no-margin">10,000</h2>
                    </div>
                  </div>
                  <div class="progress progress-mini">
                    <div style="width: 78%" class="progress-bar bg-green"></div>
                  </div>
                </div>
              </div>
              <div
                class="col-lg-3 col-md-3 col-sm-3 col-xs-12"
                style="margin-bottom: 1px"
              >
              
              </div>
           
             
            </div>
          </div>
        </div>
      </div>
      
     <div style="text-align: center;">
      <br>

      <h1>WELCOME TO ADMIN DASHBOARD</h1>
      <br>
     </div>
    
      
      <div class="calender-area mg-tb-30">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="calender-inner">
                <div id="calendar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.admin.footer')