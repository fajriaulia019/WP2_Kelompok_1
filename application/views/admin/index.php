       <!-- Begin Page Content -->
       <div class="container-fluid">

         <!-- Page Heading -->
         <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
         </div>

         <!-- Content Row -->
         <div class="row">

           <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4">
             <div class="card border-left-primary shadow h-100 py-2 rounded-0 border-4">
               <div class="card-body py-1">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="h5 text-white bg-gradient-primary p-1 rounded-0 mt-1 mb-3">Departemen</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800 text-right"><?= $display['c_department']; ?></div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-building fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           
           <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4">
             <div class="card border-left-info shadow h-100 py-2 rounded-0 border-4">
               <div class="card-body py-1">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="h5 text-white bg-gradient-primary p-1 rounded-0 mt-1 mb-3">Shift</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800 text-right"><?= $display['c_shift']; ?></div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-exchange-alt fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>

           <!-- Earnings (Monthly) Card Example -->
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4">
             <div class="card border-left-success shadow h-100 py-2 rounded-0 border-4">
               <div class="card-body py-1">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="h5 text-white bg-gradient-primary p-1 rounded-0 mt-1 mb-3">Karyawan</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800 text-right"><?= $display['c_employee']; ?></div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-id-badge fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>

           <!-- Pending Requests Card Example -->
           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-4">
             <div class="card border-left-danger shadow h-100 py-2 rounded-0 border-4">
               <div class="card-body py-1">
                 <div class="row no-gutters align-items-center">
                   <div class="col mr-2">
                     <div class="h5 text-white bg-gradient-primary p-1 rounded-0 mt-1 mb-3">User</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800 text-right"><?= $display['c_users']; ?></div>
                   </div>
                   <div class="col-auto">
                     <i class="fas fa-users fa-2x text-gray-300"></i>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>

         <!-- Content Row -->

         <div class="row">

           <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
             <!-- Pie Chart -->
             <div class="col p-0">
               <div class="card shadow mb-4 rounded-0">
                 <!-- Card Header - Dropdown -->
                 <div class="card-header py-3 d-flex flex-rowz align-items-center justify-content-between">
                   <h6 class="h5 text-white bg-gradient-primary p-1 rounded-0 mt-1 mb-1">Karyawan Departemen</h6>
                   <a class="text-reset font-weight-bolder text-muted" title="Go to Department List" href="<?= base_url('admin') ?>"><i class="fa fa-arrow-right"></i></a>
                 </div>
                 <!-- Card Body -->
                 <div class="card-body overflow-auto" style="max-height: 400px;">
                   <table class="table table-bordered table-striped">
                     <thead class="bg-gradient-primary text-white">
                       <tr>
                         <th class="text-center p-1" scope="col">No</th>
                         <th class="p-1" scope="col">Kode Departemen</th>
                         <th class="p-1" scope="col">Karyawan</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php $i = 1;
                        foreach ($d_list as $d) : ?>
                         <tr>
                           <th class="text-center p-1" scope="row"><?= $i++ ?></th>
                           <td class="p-1"><?= $d['d_id'] ?></td>
                           <td class="p-1 text-right"><?= number_format($d['qty']) ?></td>
                         </tr>
                       <?php endforeach; ?>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
             <div class="col p-0">
               <div class="card shadow mb-4 rounded-0">
                 <!-- Card Header - Dropdown -->
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                   <h6 class="h5 text-white bg-gradient-primary p-1 rounded-0 mt-1 mb-3">Karyawan per Shift</h6>
                 </div>
                 <!-- Card Body -->
                 <div class="card-body" style="max-height: 370px;">
                   <table class="table table-bordered table-striped">
                     <thead class="bg-gradient-primary text-white">
                       <tr>
                         <th class="text-center p-1" scope="col">No</th>
                         <th class="p-1" scope="col">Shift</th>
                         <th class="p-1" scope="col">Karyawan</th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php $i = 1;
                        foreach ($s_list as $s) : ?>
                         <?php if ($s['s_id'] == 0) {
                            continue;
                          } 
                          ?>
                         <tr>
                           <th class="text-center p-1" scope="row"><?= $i++ ?></th>
                           <td class="p-1 align-middle">Shift: <?= $s['s_id'] ?> <small>(<?= date('h:i A', strtotime("2022-06-23". $s['start'])) ?> - <?= date('h:i A', strtotime("2022-06-23". $s['end'])) ?>)</small></td>
                           <td class="p-1 text-right"><?= number_format($s['qty']) ?></td>
                         </tr>
                       <?php endforeach; ?>
                     </tbody>
                   </table>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
               <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row">
            <div class="col-lg-3">
              <a href="<?= base_url('master/a_dept'); ?>" class="btn btn-primary bg-gradient-primary btn-icon-split rounded-0 mb-4">
                <span class="icon text-white-600">
                  <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Tambah Departemen Baru</span>
              </a>
            </div>
            <div class="col-lg-5 offset-lg-4">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <a href="<?= base_url('master/print'); ?>" class="btn btn-primary bg-gradient-primary btn-icon-split rounded-0 mb-4">
                <span class="icon text-white-600">
                  <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Cetak Departemen Baru</span>
              </a>
            </div>
            <div class="col-lg-5 offset-lg-4">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>
          
          <!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
  <!-- Optional JavaScript -->
  <script>
    $(function(){
      window.print();
      setTimeout(() => {
        window.close()
      }, 300);
    })
  </script>
</body>

</html>

</html>
          <!-- Data Table Department-->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Table Data Departmen</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Name Department</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php
                    $i = 1;
                    foreach ($department as $dpt) :
                    ?>
                      <tr>
                        <td class="align-middle"><?= $i++; ?></td>
                        <td class="align-middle"><?= $dpt['id']; ?></td>
                        <td class="align-middle"><?= $dpt['name']; ?></td>
                        <td class="align-middle text-center">
                          <a href="<?= base_url('master/e_dept/') . $dpt['id'] ?>" class="btn btn-primary rounded-0 btn-sm text-xs">
                            <span class="icon text-white" title="Edit">
                              <i class="fas fa-edit"></i>
                            </span>
                          </a> |
                          <a href="<?= base_url('master/d_dept/') . $dpt['id'] ?>" class="btn btn-danger rounded-0 btn-sm text-xs" onclick="return confirm('Deleted Department will lost forever. Still want to delete?')">
                            <span class="icon text-white" title="Delete">
                              <i class="fas fa-trash-alt"></i>
                            </span>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->