
    @include('includes.admin.header')
    @include('includes.admin.sidebar')

    @yield ('content')

   <aside class="right-side">
     <!-- Main content -->
     <section class="content">
       <div class="row" style="margin-bottom:5px;">
             <div class="col-md-3">
                 <div class="sm-st clearfix">
                     <span class="sm-st-icon st-violet"><i class="fa fa-check-circle-o"></i></span>
                     <div class="sm-st-info">
                         <span>200</span>
                         <p>Completed orders</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="sm-st clearfix">
                     <span class="sm-st-icon st-green"><i class="fa fa-pencil-square-o"></i></span>
                     <div class="sm-st-info">
                         <span>400</span>
                         <p>Active writers</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="sm-st clearfix">
                     <span class="sm-st-icon st-red"><i class="fa fa-dashboard"></i></span>
                     <div class="sm-st-info">
                         <span>200</span>
                         <p>Orders in progress</p>
                     </div>
                 </div>
             </div>
             
             <div class="col-md-3">
                 <div class="sm-st clearfix">
                     <span class="sm-st-icon st-blue"><i class="fa fa-users"></i></span>
                     <div class="sm-st-info">
                         <span>400</span>
                         <p>Registered users</p>
                     </div>
                 </div>
             </div>
             
       </div>

       <!-- Main row -->
       <div class="row">
           <div class="col-md-12">
               <section class="panel">
               <header class="panel-heading">
                   Orders awaiting approval
               </header>

               <div class="panel-body table-responsive">
                 <table width="100%" class="dataTable">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Order ID</th>
                            <th>Orders Topic</th>
                            <th>Deadline Date</th>
                            <th>Approved By Admin</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                          
                        </tr>
                    </tbody>
                </table>
               </div>
             </section>
           </div>
         </div>

         <div class="row">
           <div class="col-md-12">
               <section class="panel">
               <header class="panel-heading">
                   Pending withdrawal request
               </header>

               <div class="panel-body table-responsive">
                 <table width="100%" class="dataTable">
                    <thead>
                        <tr>
                            <th>Order.No.</th>
                            <th>User</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      
                    </tbody>
                </table>
               </div>
             </section>
           </div>
         </div><br>

         <div class="row">
           <div class="col-md-12">
               <section class="panel">
               <header class="panel-heading">
                   Users awaiting approval
               </header>

               <div class="panel-body table-responsive">
                 <table width="100%" class="dataTable">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Email</th>
                            <th>User Status</th>
                            <th>Is Email Verified</th>
                            <th>Verified by Admin</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      
                    </tbody>
                </table>
               </div>
             </section>
           </div>
         </div><br>

         <div class="row">
           <div class="col-md-12">
               <section class="panel">
               <header class="panel-heading">
                   Accounts deactivated by users
               </header>

               <div class="panel-body table-responsive">
                 <table width="100%" class="dataTable">
                    <thead>
                        <tr>
                          <th>S.No.</th>
                          <th>Email</th>
                          <th>User Type</th>
                          <th>User Status</th>
                          <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      
                    </tbody>
                </table>
               </div>
             </section>
           </div>
         </div><br>


         <div class="row">
           <div class="col-md-12">
               <section class="panel">
               <header class="panel-heading">
                   Pending cancellation requests
               </header>

               <div class="panel-body table-responsive">
                 <table width="100%" class="dataTable">
                    <thead>
                        <tr>
                          <th>S.No.</th>
                          <th>Order ID</th>
                          <th>Order Topic</th>
                          <th>Deadline</th>
                          <th>Posted On</th>
                          <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      
                    </tbody>
                </table>
               </div>
             </section>
           </div>
         </div><br>
     </section><!-- /.content -->
                

    
    @include('includes.admin.footer')
