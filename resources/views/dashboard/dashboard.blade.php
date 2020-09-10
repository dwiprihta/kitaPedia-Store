@extends('layouts.global')

@section('content')
    <div class="col-lg-12 col-md-9">
            <div class="row ">
              <div class="col-md-12">
                  <div class="pl-3">
                      <h3>Dashboard</h3>
                  </div>
              </div>
            </div>

            <!-- start info box -->
            <div class="row ">
              <div class="col-lg-12 pl-3 pt-2">
                  <div class="row pl-3">
                    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
                      <div class="media shadow-sm p-0 bg-white rounded text-primary ">
                        <span class="oi top-0 rounded-left bg-primary text-light h-100 p-4 oi-badge fs-5"></span>
                        <div class="media-body p-2">
                          <h6 class="media-title m-0">Best Sales / Day</h6>
                          <div class="media-text">
                            <h3>3980</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
                        <div class="media shadow-sm p-0 bg-success-lighter text-light rounded">
                          <span class="oi top-0 rounded-left bg-white text-success h-100 p-4 oi-people fs-5"></span>
                          <div class="media-body p-2">
                            <h6 class="media-title m-0">Purchase</h6>
                            <div class="media-text">
                              <h3>43848</h3>
                            </div>
                          </div>
                        </div>
                      </div>

                    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
                      <div class="media shadow-sm p-0 bg-warning-lighter text-primary-darker rounded ">
                        <span class="oi top-0 rounded-left bg-white text-warning h-100 p-4 oi-cart fs-5"></span>
                        <div class="media-body p-2">
                          <h6 class="media-title m-0">Store Visits</h6>
                          <div class="media-text">
                            <h3>58493</h3>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-3 col-12 mb-2 col-sm-6">
                      <div class="media shadow-sm p-0 bg-info-lighter text-light rounded ">
                        <span class="oi top-0 rounded-left bg-white text-info h-100 p-4 oi-tag fs-5"></span>
                        <div class="media-body p-2">
                          <h6 class="media-title m-0">Total Products</h6>
                          <div class="media-text">
                            <h3>23</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <!-- end info box -->

            <!-- start second boxes -->
            <div class="row pl-3 mt-4 mb-5">
              <div class="col-md-12">
                  <div class="card shadow-sm border-0">
                      <div class="card-header p-0 bg-white">
                        <h6 class="border-bottom p-2"> Monthly recap</h6>
                        <div class="row pb-1">
                          <div class="col-sm-3 col-6 mb-2">
                            <div class="text-center">
                                <div class="fs-smaller">
                                    <span class="oi oi-caret-top fs-smallest mr-1 text-success"></span>30%</div>
                                <div class="fw-bold">$45,084.00</div>
                                <div>Total Revenue</div>
                            </div>
                          </div>
                          <div class="col-sm-3 col-6 mb-2">
                              <div class="text-center">
                                  <div class="fs-smaller">
                                      <span class="oi oi-caret-left fs-smallest mr-1 text-dark"></span>0%</div>
                                  <div class="fw-bold">$20,493.00</div>
                                  <div>Total Cost</div>
                              </div>
                          </div>
                          <div class="col-sm-3 col-6 mb-2">
                              <div class="text-center">
                                  <div class="fs-smaller">
                                      <span class="oi oi-caret-top  fs-smallest mr-1 text-success"></span>45%</div>
                                  <div class="fw-bold">14,398</div>
                                  <div>Total Sales</div>
                              </div>
                          </div>
                          <div class="col-sm-3 col-6 mb-2">
                              <div class="text-center">
                                  <div class="fs-smaller">
                                      <span class="oi oi-caret-bottom fs-smallest mr-1 text-danger"></span>3%</div>
                                  <div class="fw-bold">$24,591.00</div>
                                  <div>Total Profits</div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-lg-4">
                            <h6>Add to carts <small>(73%)</small></h6>
                              <div class="progress">
                                <div style="width: 73%" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <br>
                              <h6>Completed purchase <small>(32%)</small></h6>
                              <div class="progress">
                                <div style="width: 32%" class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <br>
                              <h6>Abandon carts <small>(68%)</small></h6>
                              <div class="progress">
                                <div style="width: 68%" class="progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <br>
                              <h6>Wishlist <small>(38%)</small></h6>
                              <div class="progress">
                                <div style="width:38%" class="progress-bar bg-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                          </div>
                          <div class="col-lg-8">
                            <canvas id="sales"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
            </div>
            <!-- end second boxes -->

            <!-- start third box -->
            <div class="row pl-3 mb-5">
              <div class="col-lg-6 mb-2">
                <div class="card">
                  <div class="card-header bg-white pb-1">
                    <h6>Latest Order</h6>
                  </div>
                  <div class="card-body px-0 py-0">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th>Order id</th>
                          <th>Item</th>
                          <th>Status</th>
                          <th class="text-right">Value</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#42248</td>
                          <td>Shoe X</td>
                          <td><div class="badge badge-success text-light">delivered</div></td>
                          <td class="text-right">$54</td>
                        </tr>
                        <tr>
                          <td>#42247</td>
                          <td>Shoe ABC</td>
                          <td><div class="badge badge-warning text-dark">on process</div></td>
                          <td class="text-right">$35</td>
                        </tr>
                        <tr>
                          <td>#42246</td>
                          <td>Bag DEF</td>
                          <td><div class="badge badge-danger text-white">canceled</div></td>
                          <td class="text-right">$22</td>
                        </tr>
                        <tr>
                          <td>#42245</td>
                          <td>Gaming Pad</td>
                          <td><div class="badge badge-success text-light">delivered</div></td>
                          <td class="text-right">$12</td>
                        </tr>
                        <tr>
                          <td>#42244</td>
                          <td>Keyboard ABC</td>
                          <td><div class="badge badge-dark text-light">refunded</div></td>
                          <td class="text-right">$45</td>
                        </tr>
                        <tr>
                          <td>#42243</td>
                          <td>Shoe DFS</td>
                          <td><div class="badge badge-success text-light">delivered</div></td>
                          <td class="text-right">$23</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer d-flex justify-content-between bg-white">
                    <button class="btn btn-primary">Place new order</button>
                    <a class="btn btn-link text-primary">view all orders</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header bg-white pb-1">
                    <h6>Top Sales by Category</h6>
                  </div>
                  <div class="card-body px-0">
                    <canvas id="top-sales-by-category"></canvas>
                    <ul class="list-group list-group-flush mt-4">
                      <li class="list-group-item">Gaming <span class="float-right fs-smaller"> <span class="oi oi-caret-top text-success"></span> 22%</span> </li>
                      <li class="list-group-item">Sports  <span class="float-right fs-smaller"> <span class="oi oi-caret-bottom text-danger"></span> 1%</span> </li>
                      <li class="list-group-item">Bags <span class="float-right fs-smaller"> <span class="oi oi-caret-top text-success"></span> 14%</span> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- end third box -->
        </div>
@endsection