
    @include('includes.clients.header')
    @include('includes.clients.sidebar')

    @yield ('content')

   <aside class="right-side">
     <!-- Main content -->
     <section class="content">
       <div class="row" style="margin-bottom:5px;">
             <div class="col-md-3">
                 <div class="sm-st clearfix">
                     <span class="sm-st-icon st-green"><i class="fa fa-envelope-o"></i></span>
                     <div class="sm-st-info">
                         <span>135</span>
                         <p>Messages</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="sm-st clearfix">
                     <span class="sm-st-icon st-red"><i class="fa fa-dashboard"></i></span>
                     <div class="sm-st-info">
                         <span>15</span>
                         <p>Orders in progress</p>
                     </div>
                 </div>
             </div>
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
                     <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
                     <div class="sm-st-info">
                         <span>$ 135</span>
                         <p>My wallet credit</p>
                     </div>
                 </div>
             </div>
             
       </div>

       <!-- Main row -->
       <div class="row">
           <div class="col-md-8">
               <section class="panel">
               <header class="panel-heading">
                   Order summary
               </header>

               <div class="panel-body table-responsive">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                   <tbody>
                     <tr>
                       <th>Order No.</th>
                       <th>Order Topic</th>
                       <th>Amount</th>
                       <th>Date</th>
                       <th>Client</th>
                       <th>Status</th>       
                     </tr>
                     </tbody>
                 </table>
               </div>
             </section>
           </div>

           <div class="col-md-4">
             <div class="panel">
                 <header class="panel-heading">
                     Messages
                 </header>

                 <ul class="list-group teammates">
                     <li class="list-group-item">
                         <a href=""><img src="administrator/img/26115.jpg" width="40" height="40"></a>
                         <span class="pull-right m-t-15">21/01/17 &nbsp; 11:41</span>
                         <a href="">Mike Magero</a>
                     </li>

                     <li class="list-group-item">
                         <a href=""><img src="administrator/img/26115.jpg" width="40" height="40"></a>
                         <span class="pull-right m-t-15">21/01/17 &nbsp; 11:41</span>
                         <a href="">Mike Magero</a>
                     </li>

                     <li class="list-group-item">
                         <a href=""><img src="administrator/img/26115.jpg" width="40" height="40"></a>
                         <span class="pull-right m-t-15">21/01/17 &nbsp; 11:41</span>
                         <a href="">Mike Magero</a>
                     </li>

                     <li class="list-group-item">
                         <a href=""><img src="administrator/img/26115.jpg" width="40" height="40"></a>
                         <span class="pull-right m-t-15">21/01/17 &nbsp; 11:41</span>
                         <a href="">Mike Magero</a>
                     </li>

                     <li class="list-group-item">
                         <a href=""><img src="administrator/img/26115.jpg" width="40" height="40"></a>
                         <span class="pull-right m-t-15">21/01/17 &nbsp; 11:41</span>
                         <a href="">Mike Magero</a>
                     </li>
                 </ul>
                 <div class="panel-footer bg-white">
                     <!-- <span class="pull-right badge badge-info">32</span> -->
                     <button class="btn btn-primary btn-addon btn-sm"> 
                         View Messages
                     </button>
                 </div>
             </div>
           </div>
         </div>

         <div class="row">
           <div class="col-md-12">
               <section class="panel">
               <header class="panel-heading">
                   Payment summary
               </header>

               <div class="panel-body table-responsive">
                 <table width="100%" border="0" cellspacing="0" cellpadding="0">
                   <tbody>
                     <tr>
                       <th>Order No.</th>
                       <th>Order Topic</th>
                       <th>Amount</th>
                       <th>Date</th>
                       <th>Client</th>
                       <th>Status</th>       
                     </tr>
                     </tbody>
                 </table>
               </div>
             </section>
           </div>
         </div><br>

         <div class="row">
           <div class="col-md-12">
             <h4>Orders</h4>
           </div>
           <div class="col-md-12">
             <section class="panel general">
                 <header class="panel-heading tab-bg-dark-navy-blue">
                     <ul class="nav nav-tabs">
                         <li class="active">
                             <a data-toggle="tab" href="#home">completed</a>
                         </li>
                         <li class="">
                             <a data-toggle="tab" href="#about">in progress</a>
                         </li>
                     </ul>
                 </header>
                 <div class="panel-body">
                     <div class="tab-content">
                         <div id="home" class="tab-pane active">
                             <div class="panel-body table-responsive">
                               <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                 <tbody>
                                   <tr>
                                     <th>Order No.</th>
                                     <th>Order Topic</th>
                                     <th>Amount</th>
                                     <th>Date</th>
                                     <th>Client</th>
                                     <th>Status</th>       
                                   </tr>
                                   </tbody>
                               </table>
                             </div>
                         </div>
                         <div id="about" class="tab-pane">
                           <div class="panel-body table-responsive">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                               <tbody>
                                 <tr>
                                   <th>Order No.</th>
                                   <th>Order Topic</th>
                                   <th>Amount</th>
                                   <th>Date</th>
                                   <th>Client</th>
                                   <th>Status</th>       
                                 </tr>
                                 </tbody>
                             </table>
                           </div>
                         </div>
                     </div>
                 </div>
             </section>
           </div>
         </div>
     </section><!-- /.content -->
                

    
    @include('includes.clients.footer')
